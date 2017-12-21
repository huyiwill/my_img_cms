<?php
 /* compiled by (WeePHP) at (2017-12-21 10:56:50) */

 $this->display('header.html');?>

<body>
<form id=myform action="?a=setup3" method="post">
  <input name="setup" type="hidden" value="{^setup}">
  <div id='installbox'>
    <div class='msgtitle'> <?php echo $this->data['sys_name'];
 echo $this->data['sys_var'];?> 安装向导 </div>
    <table width="573" height="23" border="0" cellpadding="0" cellspacing="0"
      style="text-align:center;font-weight:bold;font-size:12pt;background:url(<?php echo $this->data['web_dir'];?>images/install/set02_top_nav.gif); margin:10px 0 0 10px;">
      <tr>
        <td style="color:#666; text-align:center"><span style="display:block; float:left; width:20%; font-size:12px;"> 1. 许可协议 </span> <span style="display:block; float:left; width:25%; font-size:12px; color: #FFF;"> 2. 环境检测 </span> <span style="display:block;float:left;width:25%;font-size:12px;"> 3. 数据库设置 </span> <span style="display:block;float:left;width:25%;font-size:12px;"> 4. 安装完成 </span></td>
      </tr>
    </table>
    <h3> 服务器环境检测： </h3>
    <table width="98%" border="0" align="center" cellpadding="5" cellspacing="1"
      class="tableoutline" style="text-align:left;font-size:12px; color:#666;">
      <tr>
        <td width="44%" bgcolor="#f4faff"><strong> 需开启的变量或函数 </strong></td>
        <td width="20%" bgcolor="#f4faff"><strong> 要求 </strong></td>
        <td width="36%" bgcolor="#f4faff"><strong> 当前环境 </strong></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td> allow_url_fopen </td>
        <td> On </td>
        <td> <?php if(allow_url_fopen){?><span style="color:green">[√]</span><?php } else{?><span style="color:red">[×]</span><?php }
?> </td>
      </tr>
      <tr bgcolor="#F4faff">
        <td> safe_mode </td>
        <td>Off</td>
        <td> <?php if($this->data['not_safe_mode']){?><span style="color:green">[√]</span><?php } else{?><span style="color:red">[×]</span><?php }
?> </td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td> GD 支持 </td>
        <td> On <span style="color:#999"> (>=2.0.34) </span></td>
        <td> <?php if($this->data['gd_ver']){?><span style="color:green">[√]</span><?php echo $this->data['gd_ver'];
 } else{?><span style="color:red">[×]</span>不支持<?php }
?> </td>
      </tr>
      <tr bgcolor="#F4faff">
        <td> MySQL 支持 </td>
        <td> On </td>
        <td> <?php if($this->data['mysql']){?><span style="color:green">[√]</span><?php } else{?><span style="color:red">[×]</span>不支持<?php }
?> 
      </tr>
      <tr bgcolor="#FFFFFF">
        <td> PHP版本 </td>
        <td> On <span style="color:#999"> (>=5.0) </span></td>
        <td> <?php if(PHP_VERSION > 5.0){?><span style="color:green">[√]</span><?php echo PHP_VERSION;
 } else{?><span style="color:red">[×]</span>不支持<?php }
?> </td>
      </tr>
    </table>
    <h3> 目录权限检测： </h3>
    <table width="98%" border="0" cellpadding="5" cellspacing="1" class="tableoutline"
      align="center" style="font-size:12px; color:#666">
      <tr bgcolor="#f4faff">
        <td width="250"><strong> 目录名 </strong></td>
        <td width="100"><strong> 读取权限 </strong></td>
        <td><strong> 写入权限 </strong></td>
      </tr>
      <?php foreach($this->data['dirStatus'] as $this->data['key'] => $this->data['val']){?>
      <tr>
        <td><?php echo $this->data['key'];?></td>
        <td><?php if($this->data['val']['read']){?><span style="color:green">[√]</span><?php } else{?><span style="color:red">[×]</span>不可写<?php }
?> 
        <td><?php if($this->data['val']['write']){?><span style="color:green">[√]</span><?php } else{?><span style="color:red">[×]</span>不可读<?php }
?></td>
      </tr>
      <?php }
?>
      <tr bgcolor="#FFFFFF" class="tb_head">
        <td height="70" colspan="3" align="center"><input style="width:120px; height:30px;" type="button" class="btn" value="<< 上一步"
                onclick="history.back();" />
          <input style="width:120px; height:30px;" type="submit" name="submit" value="下一步 >>"
                class="btn"></td>
      </tr>
    </table>
    <div id='msgbottom'>Powered By IMGCMS 官方网站：<a href="http://www.imgcms.com" target="_blank"><font color=red >WWW.IMGCMS.COM</font></a> &nbsp官方Q群：<font color=red >175221556</font> 欢迎加入支持我们！ </div>
  </div>
</form>
</body>
</html>