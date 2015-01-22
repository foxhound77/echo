<!DOCTYPE html>
<html>
    <body>

<?php
function printString()
{
	$args = func_get_args();
    foreach ($args as $i){
        echo $i."<br>";
    }
	echo "<br>";
}
printString();
printString('bla');
printString('foo', 'bar', 'baz');
printString('foo', 'bar', 'baz', 'foo', 'bar');
?>

    </body>
</html>