<?php
/**
 * Created by PhpStorm.
 * User: ÓîÌì
 * Date: 2016/1/14
 * Time: 22:58
 */

class AutoLoad{
    public function register(){
        if(function_exists("__autoload")){
            spl_autoload_register("__autoload");
        }
        spl_autoload_register(__CLASS__."::load");
    }


    public static function load($filename){

    }
}