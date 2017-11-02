<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

//abstraction

abstract class person
{
	abstract public function  SayHello();
	
	public function SayAnything()
	{
		echo "Anything<br>";
	}
}

class Employee extends person
{
	public function SayHello()
	{
		echo "Yes Master<br>";
	}
}

class Manager extends person
{
	public function SayHello()
	{
		echo "Do my bidding<br>";
	}
}

$emp = new Employee();
$man = new Manager();

$emp->SayHello();
$man->SayHello();


?>

</body>
</html>
