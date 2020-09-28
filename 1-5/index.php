<?php
$a = array("A","B","C","D","E","F","G","H","I","J","K");
$arrlength=count($a);
for($x=0;$x<$arrlength;$x++)
{
    echo $a[$x];
}
echo "<br>";
foreach (range('K ','A ') as $char)
{
    echo $char;
}

?>
