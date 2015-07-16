<html>
<head><title>Bob's Auto Parts</title></head>
<body>
<h1>Order Result</h1>
<?php 
$tire = $_POST['tireqty'];
$oil = $_POST['oilqty'];
$spark = $_POST['sparkqty'];
$shipadd = $_POST['shipadd'];
echo "<p>Order Processed!!!</p> ";
echo "<br>Date of Processed </br>";
echo date('H:i jS F');
echo "<h3><p>Order Details!!</p></h3><br/>";
echo $tire." Tires.<br/>".$oil." Oil Bottles.<br/>".$spark." Spark Plugs.";
class sample{};
$obj = new sample();
if($obj instanceof sample)
	echo "Object of sample  class.";
//phpinfo();
?>
</body>
</html>