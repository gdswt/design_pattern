<?php
abstract class command
{
	protected $_receive=null;
	abstract function exec();
}

class command_a extends command
{
	public function __construct($receive)
	{
		$this->_receive=$receive;
	}
	public function exec()
	{
		print_r("command_a");
		print_r("<br>");
		print_r($this->_receive->show());
	}
}

class command_b extends command
{
	public function __construct($receive)
	{
		$this->_receive=$receive;
	}
	public function exec()
	{
		print_r("command_b");
		print_r("<br>");
		print_r($this->_receive->show());
	}
}

class receive
{
	public $_msg="it is a test";
	public function show()
	{
		print_r($this->_msg);
		print_r("<br>");
	}
}

class invoke
{
	protected $_command=null;
	public function set_command($command)
	{
		$this->_command=$command;
	}
	public function action()
	{
		$this->_command->exec();
	}
}

$receiver_instance=new receive();
$command_a=new command_a($receiver_instance);
$command_b=new command_b($receiver_instance);

$invoker=new invoke();
$invoker->set_command($command_a);
$invoker->action();
$invoker->set_command($command_b);
$invoker->action();

?>