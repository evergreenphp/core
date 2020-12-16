<?php

namespace Evergreenphp\Core\Traits;

trait Package
{
		
	public function discoverPackages()
	{
		if ( file_exists( $composerInstalled = VENDOR_PATH.'/composer/installed.json') ) {
			$installed = json_decode( $composerInstalled, true );
			
			foreach( $installed as $package ){
				
			} 
			
		}
	}
	
	public function getPackages()
	{
		
	}
}