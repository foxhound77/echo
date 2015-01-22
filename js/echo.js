	
function echo()
{
  for (var i = 0; i < arguments.length; i++) {
	document.write(arguments[i] + "<br/>");
  }
  document.write("<br/>");
}
		
echo();
echo('bla');
echo('foo', 'bar', 'baz');
echo('foo', 'bar', 'baz', 'foo', 'bar');
	