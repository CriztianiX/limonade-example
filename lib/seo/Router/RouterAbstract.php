<?php
abstract class RouterAbstract {
	protected $routes;

	abstract function build();

    public function __construct($config = null){
    	$this->__parseRoutesConfig($config);
    }

    public function getRoutes() {
    	return route_find('GET', $path);
    }

    private function __parseRoutesConfig($config) {
    	if($config){
    	}else{
    	}
    }
}