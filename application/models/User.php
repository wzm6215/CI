<?php
/**
 * Created by PhpStorm.
 * User: wzm
 * Date: 18-7-27
 * Time: 下午7:32
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Article Model
 */

class User extends Illuminate\Database\Eloquent\Model

{
    protected $table = 'user';

    public $timestamps = false;

}
