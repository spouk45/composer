<?php
/**
 * Created by PhpStorm.
 * User: wilder10
 * Date: 09/04/18
 * Time: 09:54
 */

require '../vendor/autoload.php';

echo 'test';

$helloWorld = new \HelloWorld\SayHello();
echo '<br>'.$helloWorld->world();

$hello = new \App\Wcs\Hello();
echo '<br>'.$hello->world();


