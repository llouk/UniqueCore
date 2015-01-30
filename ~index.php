<?php
// Created By	: llouk [30/01/2015]
// Last Update	: llouk [30/01/2015]

include 'lib/stdlib.php';

$site = new csite();

// this is a function specific to this site!
initialise_site($site);

$page = new cpage("Welcome to my site!");
$site->setPage($page);

$content = "Contect";

$page->setContent($content);

$site->render();
 

?>