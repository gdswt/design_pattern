<?php
interface sliver_man
{
	function sliver($girl);
}

class man_a implements sliver_man
{
	function sliver($girl)
	{
		echo "man_a sliver girl state is changed!".$girl->state."<br>";
	}
}

class man_b implements sliver_man
{
	function sliver($girl)
	{
		echo "man_b sliver girl state is changed!".$girl->state."<br>";
	}
}

class man_c implements sliver_man
{
	function sliver($girl)
	{
		echo "man_c sliver girl state is changed!".$girl->state."<br>";
	}
}


class girl
{
	public $state=0;
	private $_sliver_man_list=array();
	
	public function add_sliver_man($key,$man)
	{
		$this->_sliver_man_list[$key]=$man;
	}
	public function del_sliver_man($key)
	{
		unset($this->_sliver_man_list[$key]);
	}
	public function notify_sliver_man()
	{

		foreach($this->_sliver_man_list as $man)
		{
			$man->sliver($this);
		}
	}
	public function set_state($state)
	{
		$this->state=$state;
		$this->notify_sliver_man();
	}

}

$man_a=new man_a();
$man_b=new man_b();
$man_c=new man_c();

$girl=new girl();
$girl->add_sliver_man("man_a",$man_a);
$girl->add_sliver_man("man_b",$man_b);
$girl->add_sliver_man("man_c",$man_c);

$girl->set_state(1);
$girl->set_state(2);
$girl->set_state(3);
?>