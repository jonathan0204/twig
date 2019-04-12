<?php
require '../vendor/autoload.php';

$products = ['MVC', 'me', 'casse', 'les', 'bonbons'];


	

// donne le chemin vers le template
$loader = new Twig_Loader_Filesystem('../src/View');
// instancie twig
$twig = new Twig_Environment($loader);

echo $twig->render("index.html.twig", [ "tab"=> $products]);



