<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  <title>CSScharts - CSS only bar chart demo page</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/base/base.css" type="text/css">
  <link rel="stylesheet" href="pagestyles.css" type="text/css">
  <style type="text/css">
    
    .barchart{
      font-weight:bold;
      position:relative;
      width:400px;
      margin:0;
      padding:0;
      list-style:none;
      background:#eee;
      overflow:hidden;
      margin:1em 0;
      -moz-box-shadow:4px 4px 10px rgba(33,33,33,.8);
      -webkit-box-shadow:4px 4px 10px rgba(33,33,33,.8);
    }

    .barchart li{
      width:18px;
      float:left;
      display:block;
      background:#fc6;
      height:200px;
      margin:0;
      padding:0;
      border:1px solid #eee;
      border-right-width:0;
      border-left:none;
      border-bottom:none;
    }
  
    .barchart li span{
      position:absolute;
      left:-99999px;
      top:0;
      text-align:center;
      width:5em;
      margin:0;
    }
    .barchart li:hover{
      background:#693;
    }
    .barchart li:hover span{
      left:5px;
      z-index:10;
      top:5px;
    }

    #funky .barchart li:hover span{
      background:#cfc;
      border:2px solid #393;
      padding:2px;
      font-size:110%;
      width:5em;
      text-align:center;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
      -moz-box-shadow:0 2px 2px rgba(0,0,0,.8);    
      -webkit-box-shadow:0 2px 2px rgba(0,0,0,.8);
    }

    #rgb .barchart li:hover span{
      font-size:50px;
      width:auto;
      color:rgba(0,0,0,.7);
      background:transparent;
      border:none;
      -moz-box-shadow:none;
      -webkit-box-shadow:none;
      left:99%;
      text-align:right;
      text-indent:-3.4em;
      right:0;
      font-weight:bold;
      z-index:10;
      top:0;
    }
    #rgb li{
      background:#693;
    }
    #rgb li:hover{
      background:#9c6;
      border-color:#ddd;
    }
    #in{
      position:relative;
    }
    #in .barchart li{
      position:relative;
    }
    #in .barchart{
      padding-bottom:2em;
    }
    #in div{
      position:absolute;
      width:402px;
      height:2em;
      bottom:0;
      left:0;
      background:#999;
    }
    #in .barchart li:hover span{
      background:transparent;
      border:none;
      background:#fff;
      width:2em;
      font-weight:bold;
      z-index:10;
      -moz-border-radius:2px;
      -webkit-border-radius:2px;
    }
  </style>
</head>
<body>
<div id="doc" class="yui-t7">
  <div id="hd" role="banner"><h1>CSS only bar chart demo page</h1></div>
  <div id="bd" role="main">
    <p>Here are a few examples how to use <code>csscharts.php</code> to create CSS only barcharts. Read all about it <a href="http://icant.co.uk/csscharts/">here</a>.</p>
    
<pre><code>&lt;?php 
  $values = '12,3,3,10';
  $height = 70;
  $width = 500;
  include('csscharts.php');
?&gt;</code></pre>

<?php 
  $values = '12,3,3,10';
  $height = 70;
  $width = 500;
  include('csscharts.php');
?>

<pre><code>&lt;?php 
  $values = '400,20,30,233,312,78,20,67';
  $height = 100;
  $width = 600;
  $bargap = 0;
  include('csscharts.php');
?&gt;</code></pre>

<div id="rgb">
  <?php 
    $values = '400,20,30,233,312,78,20,67';
    $height = 100;
    $width = 600;
    $bargap = 0;
    include('csscharts.php');
  ?>
</div>

<pre><code>&lt;?php 
  $values = '12,3,23.3,44.3,9,20';
  $height = 200;
  $width = 402;
  $bargap = 5;
  include('csscharts.php');
?&gt;</code></pre>

<div id="funky"><?php 
  $values = '12,3,23.3,44.3,9,20';
  $height = 200;
  $width = 402;
  $bargap = 5;
  include('csscharts.php');
?></div>

<pre><code>&lt;?php 
  $values = '12,3,23.3,44.3,9,20';
  $height = 200;
  $width = 400;
  $bargap = 0; // undo :)
  include('csscharts.php');
?&gt;</code></pre>

<div id="in"><?php 
  $values = '12,3,23.3,44.3,9,20';
  $height = 200;
  $width = 402;
  $bargap = 0;
  include('csscharts.php');
?>
<div></div> <!-- padding for below -->
</div>

<h2>Create charts dynamically:</h2>

<form action="#" method="get" id="f">
  <div>
    <label for="values">Values</label>
    <input name="values" id="values" type="text" 
           value="10,230,80,40,20">
    </div>
  <div>
    <label for="bargap">Bar gap</label>
    <input name="bargap" id="bargap" type="text" 
           value="0">
  </div>
  <div>
    <label for="width">Chart width</label>
    <input name="width" id="width" type="width" 
           value="400">
  </div>
  <div>
    <label for="width">Chart height</label>
    <input name="height" id="height" type="height" 
           value="200">
  </div>
  <div><input type="submit" value="show graph" id="s"></div>
</form>
<div id="out"></div>


  </div>
  <div id="ft" role="contentinfo"><p>Written by <a href="http://wait-till-i.com">Christian Heilmann</a></p></div>
</div>
<script type="text/javascript" src="form.js"></script>
</body>
</html>
