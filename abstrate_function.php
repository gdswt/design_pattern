<?php
interface iproduct
{
	function create_product();
}

class computer_key implements iproduct
{
	public function create_product()
	{
		return "create computer key product!\n";
	}
}

class computer_mouse implements iproduct
{
	public function create_product()
	{
		return "create computer mouse product!\n";
	}
}



interface ifactory
{
	function create_product_key();
	function create_product_mouse();
}


class micro_factory extends ifactory
{
	public function create_product_key()
	{
		return new computer_key();
	}
	public function create_product_mouse()
	{
		return new computer_mouse();
	}
}


class ibm_factory extends ifactory 
{
	public function create_product_key()
	{
		return new computer_key();
	}
	public function create_product_mouse()
	{
		return new computer_mouse();
	}
}
?>