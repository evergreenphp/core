<?php
namespace Evergreenphp\Core\Boot;

use Evergreenphp\Core\Traits\Package;

class Boot
{
	use Package;
	
	function __construct(){}
	
	public static function up()
	{
		self::getPackages();
	}
}