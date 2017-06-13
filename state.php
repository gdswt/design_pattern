<?php
interface istate
{
	function handle($context);
}

class state_a implements istate
{
	public function handle($context)
	{
		print_r("a<br>");
		$context->set_state(new state_b());
	}
}

class state_b implements istate
{
	public function handle($context)
	{
		print_r("b<br>");
		$context->set_state(new state_c());
	}
}

class state_c implements istate
{
	public function handle($context)
	{
		print_r("c<br>");
	}
}

class context
{
	private $state;
	public function __construct($state)
	{
		$this->state=$state;
	}
	public function set_state($state)
	{
		$this->state=$state;
	}
	public function request()
	{
		$this->state->handle($this);
	}

}


$context=new context(new state_a());
$context->request();
$context->request();
$context->request();

?>