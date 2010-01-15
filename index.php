<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  <title>CSScharts - bar charts created with pure CSS</title>
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
      border-color:#ddd;
    }
    .barchart li:hover span{
      left:5px;
      z-index:10;
      top:5px;
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
    
  #plain {
    margin:1em 0;
  }
  #plain ul{
    margin:0;
    padding:0;
    background:#eee;
    border:1px solid #999;
    height:100px;
    width:600px;
    list-style:none;
    overflow:hidden;
  }
  #plain li{
    height:100px;
    list-style:none;
    margin:0;
    padding:0;
    float:left;
    width:75px;
    background:#369;
  }
  
  #hiddentext ul{
    margin:0;
    padding:0;
    background:#eee;
    border:1px solid #999;
    overflow:hidden;
    height:100px;
    width:600px;
    list-style:none;
    position:relative;
  }
  #hiddentext li{
    height:100px;
    list-style:none;
    margin:0;
    padding:0;
    float:left;
    width:75px;
    background:#369;
  }
  #hiddentext li span{
    position:absolute;
    top:1em;
    left:-9999px;
  }
  #hiddentext li:hover{
    background:#69c;
  }
  #hiddentext li:hover span{
    left:1em;
  }
  
  #charty ul{
    margin:0;
    padding:0;
    background:#eee;
    border:1px solid #999;
    overflow:hidden;
    height:100px;
    width:600px;
    list-style:none;
    position:relative;
  }
  #charty li{
    height:100px;
    list-style:none;
    margin:0;
    padding:0;
    float:left;
    width:75px;
    background:#369;
    border-top:1px solid #eee;
  }
  #charty li span{
    position:absolute;
    top:1em;
    left:-9999px;
  }
  #charty li:hover{
    background:#69c;
  }
  #charty li:hover span{
    left:1em;
  }


  </style>
</head>
<body>
<div id="doc" class="yui-t7">
  <div id="hd" role="banner"><h1>CSS only bar charts</h1></div>
  <div id="bd" role="main">
    
    <p>For a project I am working on right now I needed to have really fast bar charts that don't need any plugins or rely heavily on JavaScript. This is why I've put together some bar charts in pure CSS. Try this - move your mouse over the bars:</p>
    
    <div class="rgb">
      <?php 
        $values = '400,20,30,233,312,78,20,67';
        $height = 100;
        $width = 600;
        $bargap = 0;
        include('csscharts.php');
      ?>
    </div>
    
    <p>And here's how this works:</p>


<div class="yui-g">
 <div class="yui-u first">
   <p>Starting with a simple nested list:</p>
   <pre><code>&lt;ul&gt;
     &lt;li&gt;400&lt;/li&gt;
     &lt;li&gt;20&lt;/li&gt;
     &lt;li&gt;30&lt;/li&gt;
     &lt;li&gt;233&lt;/li&gt;
     &lt;li&gt;312&lt;/li&gt;
     &lt;li&gt;78&lt;/li&gt;
     &lt;li&gt;20&lt;/li&gt;
     &lt;li&gt;67&lt;/li&gt;
   &lt;/ul&gt;</code></pre>    
 </div>
 <div class="yui-u">
   <p>This renders normally something like this:</p>

   <ul>
     <li>400</li>
     <li>20</li>
     <li>30</li>
     <li>233</li>
     <li>312</li>
     <li>78</li>
     <li>20</li>
     <li>67</li>
   </ul>
 </div>
</div>


<p>Adding a bit more CSS, we can turn them into bars:</p>

<div class="yui-gb">
 <div class="yui-u first">
<pre><code>ul{
  margin:0;
  padding:0;
  background:#eee;
  border:1px solid #999;
  height:100px;
  width:600px;
  list-style:none;
  overflow:hidden;
}</code></pre>
</div>
<div class="yui-u">
<pre><code>li{
  height:100px;
  list-style:none;
  margin:0;
  padding:0;
  float:left;
  width:75px;
  background:#369;
}</code></pre> </div><div></div>
</div>

<div id="plain"><ul>
  <li>400</li>
  <li>20</li>
  <li>30</li>
  <li>233</li>
  <li>312</li>
  <li>78</li>
  <li>20</li>
  <li>67</li>
</ul></div>

<p>We use overflow on the UL to contain the floated LIs. The display of the values is nice in the LI but the problem is that when the bar is not big enough, we wouldn't be able to read them. We could use text-indent to hide the texts, but let's add a span instead to have a better handle:</p>

<pre><code>&lt;ul&gt;
  &lt;li&gt;&lt;span&gt;400&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;20&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;30&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;233&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;312&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;78&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;20&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;67&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>

<p>Adding the right CSS, we can have a hover bar with the text displayed on the top left:</p>

<div class="yui-gb">
 <div class="yui-u first">
<pre><code>ul{
  margin:0;
  padding:0;
  background:#eee;
  border:1px solid #999;
  overflow:hidden;
  height:100px;
  width:600px;
  list-style:none;
  position:relative;
}</code></pre>
 </div>
 <div class="yui-u">
<pre><code>li{
  height:100px;
  list-style:none;
  margin:0;
  padding:0;
  float:left;
  width:75px;
  background:#369;
}</code></pre>
 </div>
 <div class="yui-u">
<pre><code>li span{
  position:absolute;
  top:1em;
  left:-9999px;
}
li:hover{
  background:#69c;
}
li:hover span{
  left:1em;
}</code></pre>

 </div>
</div>

<p>Move your mouse over the bar to see it in action:</p>

<div id="hiddentext"><ul>
  <li><span>400</span></li>
  <li><span>20</span></li>
  <li><span>30</span></li>
  <li><span>233</span></li>
  <li><span>312</span></li>
  <li><span>78</span></li>
  <li><span>20</span></li>
  <li><span>67</span></li>
</ul></div>

<p>Now how do we get this to be bar charts? Using a border on the top that is the same background colour than the UL and some maths.</p>
<ul>
  <li>You need to know the highest number in the list and divide the height of the list by this number. This gives you the scaling factor.</li>
  <li>You then multiply the values with that factor and set the height of border accordingly.</li>
  <li>You need to round the values down to the nearest full number as Opera doesn't like 32.22px for a border for example.</li>
</ul>

<pre><code>&lt;ul&gt;
  &lt;li style=&quot;border-top-width:0px&quot;&gt;
    &lt;span&gt;400&lt;/span&gt;
  &lt;/li&gt;
  &lt;li style=&quot;border-top-width:95px&quot;&gt;
    &lt;span&gt;20&lt;/span&gt;
  &lt;/li&gt;
  &lt;li style=&quot;border-top-width:92px&quot;&gt;
    &lt;span&gt;30&lt;/span&gt;
  &lt;/li&gt;
  &lt;li style=&quot;border-top-width:41px&quot;&gt;
    &lt;span&gt;233&lt;/span&gt;
  &lt;/li&gt;
  &lt;li style=&quot;border-top-width:22px&quot;&gt;
    &lt;span&gt;312&lt;/span&gt;
  &lt;/li&gt;
  &lt;li style=&quot;border-top-width:80px&quot;&gt;
    &lt;span&gt;78&lt;/span&gt;
  &lt;/li&gt;
  &lt;li style=&quot;border-top-width:95px&quot;&gt;
    &lt;span&gt;20&lt;/span&gt;
  &lt;/li&gt;
  &lt;li style=&quot;border-top-width:83px&quot;&gt;
    &lt;span&gt;67&lt;/span&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>

<p>The only change in the CSS is to add a border:</p>

<div class="yui-gb">
 <div class="yui-u first">
<pre><code>ul{
  margin:0;
  padding:0;
  background:#eee;
  border:1px solid #999;
  overflow:hidden;
  height:100px;
  width:600px;
  list-style:none;
  position:relative;
}</code></pre>
 </div>
 <div class="yui-u">
<pre><code>li{
  height:100px;
  list-style:none;
  margin:0;
  padding:0;
  float:left;
  width:75px;
  background:#369;
  <strong>border-top:1px solid #eee</strong>
}</code></pre>
 </div>
 <div class="yui-u">
<pre><code>li span{
  position:absolute;
  top:1em;
  left:-9999px;
}
li:hover{
  background:#69c;
}
li:hover span{
  left:1em;
}</code></pre>

 </div>
</div>

<p>Move your mouse over the following example to see the effect:</p>

<div id="charty"><ul>
  <li style="border-top-width:0px">
    <span>400</span>
  </li>
  <li style="border-top-width:95px">
    <span>20</span>
  </li>
  <li style="border-top-width:92px">
    <span>30</span>
  </li>
  <li style="border-top-width:41px">
    <span>233</span>
  </li>
  <li style="border-top-width:22px">
    <span>312</span>
  </li>
  <li style="border-top-width:80px">
    <span>78</span>
  </li>
  <li style="border-top-width:95px">
    <span>20</span>
  </li>
  <li style="border-top-width:83px">
    <span>67</span>
  </li>
</ul></div>

<p>Add a bit more fancy CSS and you get this:</p>

<div class="rgb">
  <?php 
    $values = '400,20,30,233,312,78,20,67';
    $height = 100;
    $width = 600;
    $bargap = 0;
    include('csscharts.php');
  ?>
</div>

<h2>Automating the process</h2>

<p>Doing this by hand is annoying, and computers love to do calculations for us. This is why I packaged the trick up into a PHP script. The above chart was done with the following code:</p>

<pre><code>&lt;?php 
  $values = '400,20,30,233,312,78,20,67';
  $height = 100;
  $width = 600;
  $bargap = 0;
  include('csscharts.php');
?&gt;</code></pre>

<p>This does not only calculate the bar height but also the width. You can also apply a gap in between the bars - <a href="csscharts-demo.php">see the demo page for a lot of examples</a>.</p>

<h2>Using as a web service</h2>

<p>You can also use this script as a web service by giving the parameters over the URI:</p>

<p><a href="http://icant.co.uk/csscharts/csscharts.php?values=400,20,30,233,312,78,20,67&height=100&width=600&bargap=0">http://icant.co.uk/csscharts/csscharts.php?values=400,20,30,233,312,78,20,67&height=100&width=600&bargap=0</a></p>

<p>The returned HTML is a UL with the right inline measures and a class called "barchart". Go nuts styling it.</p>

<p>If you add a <code>format</code> parameter with the value <code>json
</code> you get it back as a callback to the function <code>csscharts()</code>.</p>

<p><a href="http://icant.co.uk/csscharts/csscharts.php?values=400,20,30,233,312,78,20,67&format=json">http://icant.co.uk/csscharts/csscharts.php?values=400,20,30,233,312,78,20,67&<strong>format=json</strong></a></p>

<pre><code>csscharts(
  {
    chart:&quot;&lt;ul class=\&quot;barchart\&quot; [&hellip; the rest of the html &hellip;]&lt;/ul&gt;&quot;
  }
)</code></pre>

<p>You can use that to create charts dynamically with JavaScript. Try it out by submitting the form:</p>
<div class="yui-u first">
<form action="index.php" method="get" id="f">
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
   <input name="width" id="width" type="text" 
          value="400">
 </div>
 <div>
   <label for="width">Chart height</label>
   <input name="height" id="height" type="text" 
          value="200">
 </div>
 <div><input type="submit" value="show graph" id="s"></div>
</form>

<div id="out"></div>

   <div class="yui-g">
<div class="yui-u first">
<pre><code><strong>HTML:</strong>
  
&lt;form action=&quot;index.php&quot; method=&quot;get&quot; id=&quot;f&quot;&gt;
 &lt;div&gt;
   &lt;label for=&quot;values&quot;&gt;Values&lt;/label&gt;
   &lt;input name=&quot;values&quot; id=&quot;values&quot;
          type=&quot;text&quot; 
          value=&quot;10,230,80,40,20&quot;&gt;
   &lt;/div&gt;
 &lt;div&gt;
   &lt;label for=&quot;bargap&quot;&gt;Bar gap&lt;/label&gt;
   &lt;input name=&quot;bargap&quot; id=&quot;bargap&quot;
          type=&quot;text&quot; value=&quot;0&quot;&gt;
 &lt;/div&gt;
 &lt;div&gt;
   &lt;label for=&quot;width&quot;&gt;Chart width&lt;/label&gt;
   &lt;input name=&quot;width&quot; id=&quot;width&quot; 
          type=&quot;text&quot; value=&quot;400&quot;&gt;
 &lt;/div&gt;
 &lt;div&gt;
   &lt;label for=&quot;width&quot;&gt;Chart height&lt;/label&gt;
   &lt;input name=&quot;height&quot; id=&quot;height&quot;
          type=&quot;text&quot; value=&quot;200&quot;&gt;
 &lt;/div&gt;
 &lt;div&gt;
   &lt;input type=&quot;submit&quot; 
          value=&quot;show graph&quot; id=&quot;s&quot;&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
     </div>
     <div class="yui-u">
<pre><code><strong>JavaScript:</strong>

<?php $data = file_get_contents('form.js');echo htmlentities($data);?>  
       </code></pre>
     </div>
   </div>

<h2>Download</h2>

<p>You can download the demos and <code>csscharts.php</code> from <a href="http://github.com/codepo8/CSScharts">the CSScharts GitHub repository</a>.</p>

  </div>
  <div id="ft" role="contentinfo"><p>Written by <a href="http://wait-till-i.com">Christian Heilmann</a></p></div>
</div>
<script type="text/javascript" src="form.js"></script>
</body>
</html>
