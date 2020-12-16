<?php
namespace Evergreenphp\Core;

class EvergreenCorePackageProvider
{
	// Load and register stuff
	public function register()
	{
		
		// Load stuff ... 
		
		$this->loadConstants();
		$this->loadHelpers();
	}
	
	
	protected function loadConstants()
	{
		foreach (glob(__DIR__.'/Constants/*.php') as $filename) {
			require_once $filename;
		}
	}
	
	protected function loadHelpers()
	{
		foreach (glob(__DIR__.'/Helpers/*.php') as $filename) {
			require_once $filename;
		}
	}
}