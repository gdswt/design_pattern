<?php
class singleton
{
		public static $abc=345;
		private static  $_singleton=null;
		public static  function get_instance()
		{
			if(self::$_singleton == null)
			{
					//self::$_singleton=new singleton();
					print_r("111");
					self::$_singleton=new singleton();
			}else{
					return self::$_singleton;
			}

		}
		public static function test()
		{
			print_r(self::$abc);
		}

}

singleton::get_instance();
singleton::test();
print_r(singleton::get_instance());
?>