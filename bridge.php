<?php
class road
{
	function run()
	{
		print_r("路");
	}
}

class street_way extends road
{
	function run()
	{
		print_r("市区街道");
	}
}

class speed_way extends road
{
	function run()
	{
		print_r("高速公路");
	}
}

class car_on_street extends street_way
{
	function run()
	{
		print_r("小汽车在市区街道行驶");
	}

}

class car_on_speed_way extends speed_way
{
	function run()
	{
		print_r("小汽车在高速公路行驶");
	}
}

class  bus_on_street extends street_way
{
	function run()
	{
		print_r("巴士在市区街道行驶");
	}

}

class bus_on_speed_way extends speed_way
{
	function run()
	{
		print_r("巴士在高速公路行驶");
	}
}

header('Content-Type:text/html;charset=gbk');
$car_on_street=new car_on_street();
$car_on_street->run();

$bus_on_speed_way=new bus_on_speed_way();
$bus_on_speed_way->run();


?>