<?php
class tree_node
{
	public $name=null;
	public $child=array();
	public function __construct($name)
	{
		$this->set_name($name);
	}
	public function get_name()
	{
			return $this->name;
	}
	public function set_name($name)
	{
			$this->name=$name;
	}
	public function add_child($name,$child)
	{
			$this->child[$name]=$child;
	}
	public function remove_child($name)
	{
			unset($this->child[$name]);
	}
}

class tree
{
	public $root=null;
	public function __construct($tree_node)
	{
			$this->root=$tree_node;
	}
	public function show($cursor)
	{

		print_r($cursor->name);
		print_r("|");

		if($cursor->child)
		{
			foreach($cursor->child as $key=>$val)
			{
				$this->show($val);
			}
		}
	}


}

$tree_node_a=new tree_node("A");

$tree_node_b=new tree_node("B");
$tree_node_c=new tree_node("C");

$tree_node_a->add_child("B",$tree_node_b);
$tree_node_a->add_child("C",$tree_node_c);

$tree_node_d=new tree_node("D");
$tree_node_e=new tree_node("E");

$tree_node_b->add_child("D",$tree_node_d);
$tree_node_b->add_child("E",$tree_node_e);

$tree_node_f=new tree_node("F");
$tree_node_c->add_child("F",$tree_node_f);


$root_tree=new tree($tree_node_a);
$root_tree->show($root_tree->root);


?>