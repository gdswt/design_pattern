<?php
class china_socket
{
	public function two_socket()
	{
		echo "�й��Ĳ���ֻ����������";
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
		echo  "������Ʒ��A��������������";
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
		echo  "�й���Ʒ�Ʋ�������������";
	}
}



$brand_china_socket=new brand_china_socket();
$brand_china_socket->set_adaptee(new china_socket());
$brand_china_socket->three_socket();
?>