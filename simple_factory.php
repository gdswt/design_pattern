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


class micro_factory
{
	public function create_product_factory($product)
	{
		if($product == "key")
		{
			return new computer_key();
		}else if($product == "mouse")
		{
			return new computer_mouse();
		}
	}
}

?>