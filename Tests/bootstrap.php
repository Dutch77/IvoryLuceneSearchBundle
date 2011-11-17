<?php

system(sprintf('php %s/bin/vendors', escapeshellarg(__DIR__)));

require_once __DIR__.'/'.$_SERVER['SYMFONY'].'/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony' => __DIR__.'/'.$_SERVER['SYMFONY'],
    'Zend'    => __DIR__.'/'.$_SERVER['ZEND'],
    'Ivory'   => __DIR__.'/../../..'
));
$loader->register();
