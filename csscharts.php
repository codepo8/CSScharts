<?php
if($_GET['format']=='json'){header('content-type: text/javascript');}

$out = '';
if(isset($_GET['height']) || isset($height)){
  $tmp = isset($height) ? $height : $_GET['height'];
  $tmp = intval($tmp);
  if($tmp > 0){ $height = $tmp;}
} else {
  $height = 100;
}

if(isset($_GET['values']) || isset($values)){
  $tmp = isset($values) ? $values : $_GET['values'];
  if(preg_match("/^([0-9]*\.?[0-9]+,)*([0-9]*\.?[0-9]+)$/",$tmp)){
    $values = split(',',$tmp); 
  } 
} else {
  $values = false;
}

if(isset($_GET['width']) || isset($width)){
  $tmp = isset($width) ? $width : $_GET['width'];
  $tmp = intval($tmp);
  if($tmp > 0){ $width = $tmp;}
} else {
  $width = 400;
}

if(isset($_GET['bargap']) || isset($bargap)){
  $tmp = isset($bargap) ? $bargap : $_GET['bargap'];
  $tmp = intval($tmp);
  if($tmp > 0){ $bargap = $tmp;}
} else {
  $bargap = 0;
}


if($values){
  $maxvalue = max($values);
  $factor = $height/$maxvalue;

  $all = sizeof($values);  
  $barwidth = floor(($width/$all))-$bargap;
  $out .= '<ul class="barchart" style="width:'.$width.'px;height:'.$height.'px">';
  foreach($values as $v){
    $out .= '<li style="width:'.$barwidth.'px;border-top-width:'.
            floor($height-($v*$factor)).'px';
    if($bargap > 0){
      $out .= ';border-right-width:'.$bargap.'px';
    }        
    $out .= '"><span>'.$v.'</span></li>';
  } 
  $out .= '</ul>';
} else {
  $out = '<ul class="barchart" style="width:'.$width.'px;height:'.$height.'px"><li  style="width:'.($width-10).'px;height:'.($height-10).'px;padding:5px">Data error. Only positive numbers, please.</li></ul>';
}

echo ($_GET['format']=='json') ? 'csscharts({chart:"'.addslashes($out).'"})' : $out;

?>