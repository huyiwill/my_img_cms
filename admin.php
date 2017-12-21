<?php
/*
	Copyright (c) 2008-2014 IMGCMS.Com All rights reserved.
	This is NOT a freeware, use is subject to license terms
	$Author: 许仙 <QQ:1216560669 > $
	$Time: 2011-12-27 17:23 $
*/
function p($a){
    echo "<pre>";
    print_r($a);
    die;
}

//$code = "asdfasdcaea()()hhgkfghu.:,.fty@@@@))";
//$pattern = '/@([\w\-\>\:\x7f-\xff]+?)\(/s';
//$code = preg_replace_callback($pattern, function(){
//    p(_parseTags('$1'));
//} , $code);
//
// function _parseTags($var) {
//    if (isset($this->_tags[$var])) {
//        if (is_array($this->_tags[$var])) {
//            return "load_model('".$this->_tags[$var][0]."')->".$this->_tags[$var][1]."(";
//        } else {
//            return $this->_tags[$var] . '(';
//        }
//    } else {
//        return $var . '(';
//    }
//}
//
//
//p($code);



define('APP_PATH', rtrim(dirname(__FILE__), '/\\') . DIRECTORY_SEPARATOR);

if (!is_file(APP_PATH . 'data/config.php')) {
	header('Location: install.php');	
}


require_once './core/loader.php';

Wee::$config['controller_path'] = APP_PATH . 'admin/';
Wee::$config['entrance'] = Wee::ENTRANCE_ADMIN;


Wee::run();