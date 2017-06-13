<?php
interface prototype
{
		function copy();
}

class one_prototype implements prototype
{
		private $_list=null;
		public function __construct($obj)
		{
			$this->_list=$obj;
		}
		public function get_list()
		{
			return $this->_list;
		}
		public function copy()
		{
			//$obj=serialize($this);
			//return unserialize($obj);
			return clone($this);
		}

}


$abc=new one_prototype("abc");
$bcd=$abc->copy();
var_dump($abc);
print_r("<br>");
var_dump($bcd);



?>