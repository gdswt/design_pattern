<?php
class road
{
	function run()
	{
		print_r("·");
	}
}

class street_way extends road
{
	function run()
	{
		print_r("�����ֵ�");
	}
}

class speed_way extends road
{
	function run()
	{
		print_r("���ٹ�·");
	}
}

class car_on_street extends street_way
{
	function run()
	{
		print_r("С�����������ֵ���ʻ");
	}

}

class car_on_speed_way extends speed_way
{
	function run()
	{
		print_r("С�����ڸ��ٹ�·��ʻ");
	}
}

class  bus_on_street extends street_way
{
	function run()
	{
		print_r("��ʿ�������ֵ���ʻ");
	}

}

class bus_on_speed_way extends speed_way
{
	function run()
	{
		print_r("��ʿ�ڸ��ٹ�·��ʻ");
	}
}

header('Content-Type:text/html;charset=gbk');
$car_on_street=new car_on_street();
$car_on_street->run();

$bus_on_speed_way=new bus_on_speed_way();
$bus_on_speed_way->run();


?>