<?php
/**
 * 文件上传管理
 * @author 许仙 <QQ:1216560669 >
 * @time 2011-9-23 16:45
 * @version 1.0
 */
class Ext_Upload {
	
	private static $_errorMsgs = array(
		0 => '',
        1 => '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值',
        2 => '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值',
        3 => '文件只有部分被上传',
        4 => '没有文件被上传',
        5 => '找不到临时文件夹',
        6 => '文件写入失败',
        7 => '不允许的文件类型',
        8 => '文件大小超过限制',
        9 => '文件成功上传,但是保存失败'	
	);	
	
	
	public static $fileTypes = array('png', 'gif', 'jpg', 'jpeg');

	
	public static $maxFileSize = 0;
	
	
	public static function save($name, $saveFile) {
		if (!isset($_FILES[$name])) {
			return self::_error(4);
		}
		$info =  $_FILES[$name];
		if ((int) $info['error'] != 0) {
            return self::_error($info['error']);
        }
		if (is_uploaded_file($info['tmp_name'])) {
			$ext  = Ext_File::getExt($info['name']);
			if (!in_array($ext, self::$fileTypes)) {
				return self::_error(7);
			}
			$saveExt = Ext_File::getExt($saveFile);
			if (!in_array($saveExt, self::$fileTypes)) {
				$saveFile .= '.'.$ext;
			}
			if (self::$maxFileSize > 0 && $info['size'] > self::$maxFileSize) {
				return self::_error(8);	
			}
			$dir = dirname($saveFile);
			if (!is_dir($dir)) {
				mkdir($dir, 0777, true);	
			}
            if (!move_uploaded_file($info['tmp_name'], $saveFile)) {
            	return self::_error(9);	
            }
            $data = array(
            	'error' => 0,
            	'errorMsg' => '',
            	'saveFile' => $saveFile,
            	'name' => $info['name'],
            	'ext' => $ext,
            	'size' => $info['size']	
            );
       		return $data;
		}
		return self::_error(4);
	}
	
    
    private static function _error($error='') {
		return array('error' => $error, 'errorMsg' => self::$_errorMsgs[$error]);
    }	
}