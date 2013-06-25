<?php
require_once('RouterAbstract.php');

class ExampleDomain extends RouterAbstract {
    public function build() {
		dispatch('/', 'main_page');
        dispatch('/hello/:name', 'offer');
    }
}