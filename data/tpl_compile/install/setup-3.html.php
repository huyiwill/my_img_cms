<?php
 /* compiled by (WeePHP) at (2017-12-21 10:56:54) */

 $this->display('header.html');?>

<body>
<div id='installbox'>
  <div class='msgtitle'> <?php echo $this->data['sys_name'];
 echo $this->data['sys_var'];?> 安装向导 </div>
  <table width="573" height="23" border="0" cellpadding="0" cellspacing="0"
    style="text-align:center; font-weight:bold;font-size:12pt;background:url(<?php echo $this->data['web_dir'];?>images/install/set03_top_nav.gif); margin:10px 0 0 10px;">
    <tr>
      <td style="color:#666; text-align:center"><span style="display:block; float:left; width:20%; font-size:12px;"> 1. 许可协议 </span> <span style="display:block;float:left;width:25%;font-size:12px;"> 2. 环境检测 </span> <span style="display:block; float:left; width:25%; font-size:12px; color: #FFF;"> 3. 数据库设置 </span> <span style="display:block;float:left;width:25%;font-size:12px;"> 4. 安装完成 </span></td>
    </tr>
  </table>
  <h3> 安装设置： </h3>
  <form method="post" action="?a=setup4"  name="myform" id="myform" style="margin:0; padding:0;">
    <table width="98%" border="0" align="center" cellpadding="5" cellspacing="1"
      class="tableoutline" style="font-size:12px; color:#666;">
      <input name="setup" type="hidden" value="{^setup}">
      <tr bgcolor="#F4faff">
        <td width="48%" valign="top"><b> 安装目录 </b> <br>
          <font color="#666666"> 自动检测一般不需要修改,结尾必需加斜杆 '/' </font></td>
        <td><input type="text" name="con[web_path]" id="web_path" value="/"
            maxlength="50" style="width:250px;">
          * </td>
      </tr>
      <tr class="firstalt">
        <td width="48%" valign="top" bgcolor="#FFFFFF"><b> 数据库服务器地址 </b> <br>
          <font color="#666666"> 一般为localhost </font></td>
        <td bgcolor="#FFFFFF"><input type="text" name="con[host]" id="host" value="localhost"
            maxlength="50" style="width:250px;">
          * </td>
      </tr>
      <tr bgcolor="#F4faff">
        <td width="48%"><b> 数据库端口 </b> <br>
          一般为3306<br></td>
        <td><input type="text" name="con[port]" id="port" value="3306" maxlength="50"
            style="width:250px;">
          * </td>
      </tr>
      <tr class="firstalt">
        <td width="48%"><b> 数据库用户名 </b> <br>
          <font color="#666666"> 一般为root </font> <br></td>
        <td><input type="text" name="con[user]" id="user" value="root" maxlength="50"
            style="width:250px;">
          * </td>
      </tr>
      <tr bgcolor="#F4faff">
        <td width="48%" bgcolor="#F4faff"><b> 数据库密码 </b> <br>
          密码尽量不要设为空 <br></td>
        <td bgcolor="#F4faff"><input type="password" name="con[pass]" id="pass" maxlength="50" style="width:250px;"></td>
      </tr>
      <tr class="firstalt">
        <td width="48%"><b> 数据库名称 </b> <br>
          <font color="#666666"> 请填写数据库名 </font> <br></td>
        <td bgcolor="#FFFFFF"><input type="text" name="con[dbname]" id="dbname" value="imgcms" maxlength="50"
            style="width:250px;">
          * </td>
      </tr>
      <tr bgcolor="#F4faff" class="firstalt">
        <td width="48%"><p> <b> 数据库表前缀 </b> <br>
            <font color="#666666"> 一般不用修改 </font> <br>
          </p></td>
        <td><input type="text" name="con[db_table_prefix]" id="db_table_prefix" value="img_" maxlength="50"
            valid="required" style="width:250px;">
          * </td>
      </tr>
    </table>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
      <tr class="firstalt" style="height:10px">
        <td height="70" colspan="2" align="center"><input style="width:120px; height:30px;" type="button" class="btn" value="<< 上一步"
            onclick="history.back();" />
          <input style="width:120px; height:30px;" type="submit" name="submit" value="下一步 >>"
            class="btn" id="submit"></td>
      </tr>
      <tr class="firstalt" style="height:10px">
        <td colspan="2" align="center"><div id='msgbottom'>Powered By IMGCMS 官方网站：<a href="http://www.imgcms.com" target="_blank"><font color=red >WWW.IMGCMS.COM</font></a> &nbsp官方Q群：<font color=red >175221556</font> 欢迎加入支持我们！ </div></td>
      </tr>
    </table>
  </form>
</div>
</div>
</body>
</html>