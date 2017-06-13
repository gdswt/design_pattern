<?php
interface strategy
{
		public function calculate($a,$b);
}

class strategy_add implements strategy
{
		public function calculate($a,$b)
		{
			return $a+$b;
		}
}

class strategy_div implements strategy
{
		public function calculate($a,$b)
		{
			return $a/$b;
		}
}

interface human
{
		public function do_work();
}

class xiao_hong implements human
{
		private $strategy_instance=null;
		public function set_strategy($strategy)
		{
			$this->strategy_instance=$strategy;

		}
		public function do_work()
		{
			$abc=$this->strategy_instance->calculate(100,50);
			print_r($abc);
		}
}

$xiao_hong=new xiao_hong();
$xiao_hong->set_strategy(new strategy_div());
$xiao_hong->do_work();


?>