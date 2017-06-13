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


class micro_factory_key
{
	public function create_product_factory()
	{
			return new computer_key();
	}
}


class micro_factory_mouse
{
	public function create_product_factory()
	{
			return new computer_mouse();
	}
}
?>