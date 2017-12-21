<?php
// ----------------------------------------
Wee::$config['db_config_main'] = array(
	'host' => '192.168.254.128', 
	'port' => '3306',	
	'user' => 'root',       
	'pass' => 'aa',      
	'dbname' => 'imgcms',      
);
// ----------------------------------------
Wee::$config['db_table_prefix'] = 'img_';
// ----------------------------------------
Wee::$config['debug_mode'] = true;
Wee::$config['template_debug'] = false;
Wee::$config['encrypt_key'] = 'NnT5FkziyPnCpuHDyIFe75HEpzIGc8Mu';
// ----------------------------------------
if (is_file(Wee::$config['data_path'] . 'web-config.php')) {
	require_once Wee::$config['data_path'] . 'web-config.php';
}