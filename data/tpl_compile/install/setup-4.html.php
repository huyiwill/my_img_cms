<?php
 /* compiled by (WeePHP) at (2017-12-21 11:03:30) */

 $this->display('header.html');?>
<body >
<div id='installbox'>
	<div class='msgtitle'><?php echo $this->data['sys_name'];
 echo $this->data['sys_var'];?> 安装向导</div>
  <table width="573" height="23" border="0" cellpadding="0" cellspacing="0" style="text-align:center; font-weight:bold;font-size:12pt;background:url(<?php echo $this->data['web_dir'];?>images/install/set04_top_nav.gif);margin:10px 0 0 10px;">
    <tr>
      <td style="color:#666; text-align:center"><span style="display:block; float:left; width:20%; font-size:12px;">1. 许可协议</span><span style="display:block;float:left;width:25%;font-size:12px;">2. 环境检测</span><span style="display:block;float:left;width:25%;font-size:12px;">3. 数据库设置</span><span style="display:block; float:left; width:25%; font-size:12px; color: #FFF;">4. 安装完成</span></td>
    </tr>
  </table>
  <div id='msgbody'>
<h3 style="text-align:center; ">恭喜你！IMGCMS 安装成功！<br/>现在就开始体验 新版 IMGCMS 系统吧！</h3>

<div style="text-align:center; font-size:16px;color:#1B76B7;">尊敬的站长,为了保证系统的安全,请不要乱用草根版本,下载<font color=red >(非官方版)</font>导致系统错乱官方不负责技术支持.敬请谅解.<br/>
官方Q群：175221556 加入支持我们！<br/>官方论坛：BBS.IMGCMS.COM</div>
<div style="margin-top:2em;align:center;width:100%;">
<table width="50%" height="80" align=center>
   <tr>
     <td align=left><input type="button" class="btn" style=" width:120px;height:30px;" value="进入网站首页"  onclick="javascript:location.href='index.php';"/></td>
     <td align=right><input type="button" class="btn" style=" width:120px;height:30px;" value="登陆网站后台"  onclick="javascript:location.href='admin.php';"/></td>
	 <td align=right><input type="button" class="btn" style=" width:120px;height:30px;" value="进入官网"  onclick="javascript:location.href='HTTP://www.imgcms.com';"/></td>
   </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr class="firstalt" style="height:10px">
        <td colspan="2" align="center"><div id='msgbottom'>Powered By IMGCMS 官方网站：<a href="http://www.imgcms.com" target="_blank"><font color=red >WWW.IMGCMS.COM</font></a> &nbsp官方Q群：<font color=red >175221556</font> 欢迎加入支持我们！ </div></td>
      </tr>
</table>
</div>
</div>
</div>
</body>
</html>