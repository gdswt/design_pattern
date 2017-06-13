<?php
class china_socket
{
	public function two_socket()
	{
		echo "中国的插座只有两个插座";
	}
}

interface america_socket
{
	public function three_socket();
}


class brand_a_socket implements america_socket
{
	public function three_socket()
	{
		echo  "美国的品牌A插座有三个插座";
	}
}

class brand_china_socket implements america_socket
{
	private $adapter;
	public function set_adaptee($adapter)
	{
		$this->adapter=$adapter;
	}
	public function three_socket()
	{
		$this->adapter->two_socket();
		echo  "中国的品牌插座有三个插座";
	}
}



$brand_china_socket=new brand_china_socket();
$brand_china_socket->set_adaptee(new china_socket());
$brand_china_socket->three_socket();
?>