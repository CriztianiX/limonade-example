<?php
require_once('RouterAbstract.php');

class LocalhostDomain extends RouterAbstract {
    public function build() {
		dispatch('/', 'main_page');
        dispatch('/hola/:name', 'offer');
    }
}