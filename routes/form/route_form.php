<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/11
 * Time: 11:14
 */
route::get('/',['as' => 'step1','uses' => 'Form\RegisterController@step1']);