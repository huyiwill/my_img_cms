<?php
/**
 * 主控制器
 * @author 许仙 <QQ:1216560669 >
 * @time 2011-8-30 15:53
 * @version 1.0
 */
class Main_Controller extends Base_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->assignConfig();
		$this->output->display('index.html');
	}
	
	public function checkno() {		
		
		$this->output->display('checkno.html');
	}
	
	public function main() {
		$this->checkLogin();
        //p(Wee::$config);
		$this->output->set('_SERVERa', $_SERVER);

		$this->output->set('config', Wee::$config);
		$this->output->set('app_path', APP_PATH);
		$this->output->display('main.html');	
	}
	
	public function top() {
		$this->checkLogin();
		$adminInfo = load_model('Admin')->getAdmininfo();
		$this->output->set('adminInfo', $adminInfo);
		$this->output->display('top.html');
	}

	public function left() {
		$this->checkLogin();
		$this->output->registerTag('checkPre', '$this->top');
		$this->output->display('left.html');
	}	
	
	public function login() {
		if ($this->checkLogin()) {
			show_msg('已经登录过', '?c=Main&a=index', 0);	
		}
		if (check_submit('post')) {
			$name = $this->input->getTrim('name');
			$password = $this->input->get('password');
			$adminMod = load_model('Admin');
			$uInfo = $adminMod->login($name, $password);
			if (!$uInfo) {
				show_msg('', '?c=Main&a=checkno', 0);
			}
			show_msg('', '?c=Main&a=index', 0);
		}
		$this->assignConfig();
		$this->output->display('login.html');	
	}
	
	public function logout() {
		$adminMod = load_model('Admin');
		$adminMod->logout();
		show_msg('', '?c=Main&a=login', 0);	
	}
	
	public function checkUpdate() {
		$url = 'http://www.imgcms.com/';
		$ver = Ext_Network::openUrl($url);
		echo $ver;	
	}
}