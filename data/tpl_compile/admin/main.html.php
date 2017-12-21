<?php
 /* compiled by (WeePHP) at (2017-12-21 11:24:50) */
?>

<script>
function checkUptate() {
	$('#ver-update').load('?c=Main&a=checkUpdate');	
}
</script>
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
  <tr class="table_title">
    <td colspan="2">系统环境检测----图片管理系统</td>
  </tr>
  <tr class="ji">
    <td width="200" class="rt">主机名 (IP端口)</td>
    <td ><?php p($this->_SERVERa);?></td>
  </tr>
  <tr class="ou">
    <td class="rt">程序目录</td>
    <td>$this->data['$1']</td>
  </tr>
  <tr class="ou">
    <td class="rt">安装路径</td>
    <td>$this->data['$1']</td>
  </tr>
  <tr class="ji">
    <td class="rt">Web服务器</td>
    <td>$this->data['$1']</td>
  </tr>
  <tr class="ji">
    <td class="rt">数据库服务器</td>
    <td>$this->data['$1']:$this->data['$1'] - $this->data['$1']</td>
  </tr>
  <tr class="ji">
    <td class="rt">服务器时间</td>
    <td>$this->data['$1'] <span class="blue">(+08:00)</span></td>
  </tr>
  <tr class="ou">
    <td class="rt">PHP 运行方式</td>
    <td>$this->data['$1']</td>
  </tr>
  <tr class="ji">
    <td class="rt">PHP版本</td>
    <td>$this->data['$1']</td>
  </tr>
  <tr class="ou">
    <td class="rt">MySQL 版本</td>
    <td>$this->data['$1']&nbsp;&nbsp;</td>
  </tr>
  <tr class="ji">
    <td class="rt">GD库版本</td>
    <td>$this->data['$1']</td>
  </tr>
   <tr class="ji">
    <td class="rt">Zend Optimizer</td>
    <td>$this->data['$1']</td>
  </tr>
  <tr class="ou">
    <td class="rt">最大上传限制</td>
    <td>$this->data['$1']</td>
  </tr>
  <tr class="ji">
    <td class="rt">最大执行时间</td>
    <td>$this->data['$1']秒</td>
  </tr>
  <tr class="ou">
    <td class="rt">采集函数检测</td>
    <td>$this->data['$1']</td>
  </tr> 
  <tr class="ou">
    <td class="rt">FTP函数检测</td>
    <td>$this->data['$1']</td>
  </tr>
     
</table>
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
  <tr class="table_title">
    <td colspan="2">产品说明----IMGCMS 图片管理系统</td>
  </tr>
  <tr class="ji">
    <td width="200" class="rt">官方网站：</td>
    <td ><a href="$this->data['$1']" target="_blank">$this->data['$1']</a></td>
  </tr>
    <tr class="ji">
    <td width="200" rowspan="3" class="rt">程序动态</td>
    <td >现在使用：IMGCMS V1.6 正式版</td>
  </tr>
    <tr class="ji">
    <td >产品升级：IMGCMS V2.0 (更新中)</td>
  </tr>
  <tr class="ji">
    <td >版本说明：V 2.0版本将重新架构模板,更新较慢,请尽量升级到V1.6正式版做站.敬请谅解</td>
  </tr>
  <tr class="ji">
    <td width="200" class="rt">最新版本</td>
    <td ><a href="$this->data['$1']" target="_blank">【检查更新】</a></td>
  </tr>
</table>
$this->data['$1']