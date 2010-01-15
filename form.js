(function(){
var $ = function(id){
  return document.getElementById(id);
};
var d = document;
var f = $('f');
f.onsubmit = function(){
  var button = $('s');
  button.setAttribute('value','loading...');
  var url = 'csscharts.php?format=json';
  var fields = ['height','width','bargap',
                'values'];
  for(var i=0;i<fields.length;i++){
    var val = $(fields[i]).value;
    url += '&' + fields[i] + '=' + val;
  }
  var s = document.createElement('script');
  s.setAttribute('src',url);
  s.id = 'leech';
  var head = d.getElementsByTagName('head')[0];
  head.appendChild(s);
  return false;
}
})();
function csscharts(o){
  var c = document.getElementById('out');
  var s = document.getElementById('leech');
  s.parentNode.removeChild(s);
  c.innerHTML = o.chart + c.innerHTML;
  var b = document.getElementById('s');
  b.setAttribute('value','show graph');
}
