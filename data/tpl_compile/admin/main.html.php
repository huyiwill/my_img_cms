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
    <td ><?php echo $this->_SERVERa['SERVER_ADDR'];?></td>
  </tr>
  <tr class="ji">
    <td class="rt">Web服务器</td>
    <td><?php echo $this->_SERVERa['SERVER_SOFTWARE'];?></td>
  </tr>

  <tr class="ji">
    <td class="rt">服务器时间</td>
    <td><?php echo date('Y-m-d H:i:s',$this->_SERVERa['REQUEST_TIME']);?> <span class="blue">(+08:00)</span></td>
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
    <td colspan="2">产品说明----小古 图片管理系统</td>
  </tr>
  <tr class="ji">
    <td width="200" class="rt">最新版本</td>
    <td ><a href="$this->data['$1']" target="_blank">【检查更新】</a></td>
  </tr>
</table>