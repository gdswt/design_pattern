<?php

class user
{
	public $name=null;
	public $sex=null;
	public $age=null;
	public function __construct($name,$sex,$age)
	{
			$this->name=$name;
			$this->sex=$sex;
			$this->age=$age;
	}
}
class all_users implements Iterator
{
	private $index=0;
	private $all_users=array();
	public function add_user($user)
	{
		$this->all_users[]=$user;
	}
	public function current()
	{
		return $this->all_users[$this->index];
	}
	public function key()
	{
		return $this->index;
	}
	public function next()
	{
		return $this->index++;
	}
	public function rewind()
	{
		$this->index=0;
	}
	public function valid()
	{
		return $this->index < count($this->all_users);
	}
}



$all_users=new all_users();
$all_users->add_user(new user("A","ÄĞ","11"));
$all_users->add_user(new user("B","Å®","22"));
$all_users->add_user(new user("C","Å®","33"));
$all_users->add_user(new user("D","ÄĞ","44"));

foreach($all_users as $user)
{
	print_r($user);
	print_r("<br>");
}
?>