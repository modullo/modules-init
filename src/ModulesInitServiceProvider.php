<?php

namespace Modullo\ModulesInit;
use Illuminate\Support\ServiceProvider;

class ModulesInitServiceProvider extends ServiceProvider {

	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/resources/views', 'modules-init');
		$this->publishes([
			__DIR__.'/config/modules-init.php' => config_path('modules-init.php'),
		], 'config');
	}

	public function register()
	{
		//add menu config
		$this->mergeConfigFrom(
	        __DIR__.'/config/navigation-menu.php', 'navigation-menu.modules-init.sub-menu'
	     );
	}

}


?>