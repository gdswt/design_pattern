<?php
interface coffee
{
		public  function  cost();
}

class decafe implements coffee
{
		public function cost()
		{
				return 2.0;
		}
}

class espresso implements coffee
{
		public function cost()
		{
				return 2.5;
		}
}

class dressing implements coffee
{
		private $_coff;
		public function dressing($coff)
		{
				$this->_coff=$coff;
		}
		public function cost()
		{
				return $this->_coff->cost();
		}
}

class whip extends dressing
{
		public function whip($coff)
		{
				parent::dressing($coff);
		}
		public function cost()
		{
				return parent::cost() + 0.1;
		}
}

class mocha extends dressing
{
		public function mocha($coff)
		{
				parent::dressing($coff);
		}
		public function cost()
		{
				return parent::cost() + 0.5;
		}
}

$coff=new espresso();
$coff=new mocha($coff);
$coff=new mocha($coff);
$coff=new whip($coff);

print_r($coff->cost());
print_r("<br>");

$coff=new decafe();
$coff=new mocha($coff);
$coff=new mocha($coff);
$coff=new whip($coff);

print_r($coff->cost());
print_r("<br>");
?>