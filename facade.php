<?php

interface stock
{
		function buy($num);
		function sale($num);
}

class stock_a implements stock
{
		private $left=0;
		public function buy($num)
		{
			$this->left=$this->left + $num;
		}
		public function sale($num)
		{
			$this->left=$this->left - $num;
		}
}


class stock_b implements stock
{
		private $left=0;
		public function buy($num)
		{
			$this->left=$this->left + $num;
		}
		public function sale($num)
		{
			$this->left=$this->left - $num;
		}
}


class stock_c implements stock
{
		private $left=0;
		public function buy($num)
		{
			$this->left=$this->left + $num;
		}
		public function sale($num)
		{
			$this->left=$this->left - $num;
		}
}


class fun
{
		private $stock_a=null;
		private $stock_b=null;
		private $stock_c=null;

		public function operatorA()
		{
			$this->stock_a->buy(100);
			$this->stock_b->buy(100);
		}
		public function operatorB()
		{
			$this->stock_a->buy(400);
			$this->stock_b->buy(500);
		}
		public function operatorC()
		{
			$this->stock_a->buy(700);
			$this->stock_b->buy(50);
		}


}

?>