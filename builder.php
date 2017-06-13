<?php
class bird
{
		public $head="";
		public $wing="";
		public $foot="";

		public function show()
		{
			echo "head.".$this->head."<br>";
			echo "wing.".$this->wing."<br>";
			echo "foot.".$this->foot."<br>";

		}
}

interface builder
{
		function part_head();
		function part_wing();
		function part_foot();
		function get_bird();
}

class blue_builder implements builder
{
		private $_bird=null;
		public function __construct($bird)
		{
			$this->_bird=$bird;
		}
		public function part_head()
		{
			$this->_bird->head="��ɫ��ͷ";
		}
		public function part_wing()
		{
			$this->_bird->wing="��ɫ�ĳ��";
		}
		public function part_foot()
		{
			$this->_bird->foot="��ɫ�Ľ�";
		}
		public function get_bird()
		{
			return $this->_bird;
		}
}

class red_builder implements builder
{
		private $_bird=null;
		public function __construct($bird)
		{
			$this->_bird=$bird;
		}
		public function part_head()
		{
			$this->_bird->head="��ɫ��ͷ";
		}
		public function part_wing()
		{
			$this->_bird->wing="��ɫ�ĳ��";
		}
		public function part_foot()
		{
			$this->_bird->foot="��ɫ�Ľ�";
		}
		public function get_bird()
		{
			return $this->_bird;
		}
}

class director
{
		protected $builder=null;
		public function __construct($builder)
		{
				$this->builder=$builder;
				$this->builder->part_head();
				$this->builder->part_wing();
				$this->builder->part_foot();

		}

		public function get_bird()
		{
				return $this->builder->get_bird();
		}
}

$bird=new bird();
$red_builder=new red_builder($bird);
$director=new director($red_builder);
$red_bird=$director->get_bird();

header("Content-type:text/html;charset=gbk");
print_r($director);
print_r("<br>");
print_r($red_bird);

?>