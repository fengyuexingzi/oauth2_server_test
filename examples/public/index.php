<?php
/**
 * Created by PhpStorm.
 * User: Wind
 * Date: 2017/10/28
 * Time: 11:45
 */

use KAuth\Tree\Tree;

include __DIR__ . '/../../vendor/autoload.php';


var_dump(file_get_contents('php://input'));
die;

$tree = new Tree();
$tree->index();

var_dump(file_get_contents( __DIR__ . '/../private.key'));

$keyPathPerms = decoct(fileperms(__DIR__ . '/../private.key') & 0777);
var_dump($keyPathPerms);