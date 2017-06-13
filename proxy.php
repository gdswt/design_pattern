<?php
class proxy
{
		private $_proxy=null;
		public function proxy($instance)
		{
			$this->_proxy=$instance;
		}
		public function do_work()
		{
			$this->_proxy->do_work();
		}
}

class one
{
		public function do_work()
		{
			print_r("ssssssssssssssssbbbbbbbbbbbbbb");
		}
}
$proxy=new proxy(new one());
$proxy->do_work();


?>