<?php
function __autoload($name) {
      $fullpath = dirname(__FILE__) . '/'. $name.'.php';

      if(is_file($fullpath)) {
        require_once($fullpath);
      }
}

class Routes {
    private $strategy; 

    public function __construct($config = null, $strategy_ind_id) {
        switch ($strategy_ind_id) {
            case "ExampleDomain": 
                $this->strategy = new ExampleDomain($config);
            break;
            case "LocalhostDomain": 
                $this->strategy = new LocalhostDomain($config);
            break;
        }
    }

    public function build() {
        return $this->strategy->build();
    }

    public function getRoutes() {
        return $this->strategy->getRoutes();
    }
}