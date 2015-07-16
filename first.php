<html>
<body>
<?php
$fname = "Ankit";
echo $fname;
$age = 35;
var_dump($age);
echo $age;
$weeks = array("sun",2,"tue","wed","thur","fri","sat");
var_dump($weeks);

define("MAX",50);
function printmsg()
{
	static  $age;
	$age++;
	echo "I am printmsg : $age";
	echo "</br>";
	echo MAX . "</br>";
	$day = date("D");
	switch($day)
	{
		case "Fri":
			echo "today is Friday";
			break;
		default:
			echo "not friday";

	}
	for($i=0;$i<5;$i++)
		echo $i."</br>";
	global $weeks;
	foreach($weeks as $v)
		echo $v." ";
	echo count($weeks);
}
printmsg();
printmsg();

?>
</body>
</html>