<?php
function offer() {
	set('name', params('name'));
    return html('main/main.html.php');
}