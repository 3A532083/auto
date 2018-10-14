<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/14
 * Time: 下午 05:59
 */
require '../vendor/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;

$world = new World();
$lara= new Lara();
$vincent= new Hello\Someone('Vincent');
