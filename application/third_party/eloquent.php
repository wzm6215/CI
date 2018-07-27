<?php
/**
 * Created by PhpStorm.
 * User: wzm
 * Date: 18-7-27
 * Time: 下午7:25
 */
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;

// Autoload 自动载入

require APPPATH.'/vendor/autoload.php';

// 载入数据库配置文件

require_once APPPATH.'config/database.php';

// Eloquent ORM

$capsule = new Capsule;

$capsule->addConnection($db['eloquent']);

$capsule->bootEloquent();