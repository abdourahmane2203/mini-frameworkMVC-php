<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 10:06
 */
require_once "config/autoload.php";
use config\Router;
$project_name = $_SERVER['SCRIPT_NAME'];
$project_name = str_replace('index.php', '', $project_name);
define('WEB_ROOT', 'http://'.$_SERVER['SERVER_NAME'].$project_name);
//var_dump(WEB_ROOT); die();

$router = new Router();
$router->route();

