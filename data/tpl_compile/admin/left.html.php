<?php
 /* compiled by (WeePHP) at (2017-12-21 11:24:50) */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>左侧导航-{&web_name}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' type='text/css' href='images/admin/admin_left.css'>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="images/js/jquery-1.4.4.min.js"></script>
<script language="javascript">
function showHide(id){
	$("#left_dl_" + id + " dd").toggleClass("none");
}
$(document).ready(function(){
	$('.menu li').click(function(e){
		$('.menu li').removeClass('on');
		$(this).addClass('on');
	});
});
</script>
</head>
<body>
<div class="menu" style="margin-bottom:50px;">
  <dl class="left_dl" id='left_dl_1'>
    <dt><a onclick="showHide(1);" href="#" target="_self">系统管理</a></dt>
    <dd>
      <ul id="items">
      	<li><a href="?c=Main&a=main" target="right">系统环境信息</a></li>
        <li><a href="?c=Config&a=index&type=web" target="right">网站信息设置</a></li>
        <li><a href="?c=Config&a=index&type=attach" target="right">附件参数设置</a></li>
        <li><a href="?c=Config&a=index&type=cache" target="right">数据缓存设置</a></li>
        <li><a href="?c=Admin&a=show" target="right">管理员设置</a></li>
      </ul>
    </dd>
  </dl>

  <dl class="left_dl" id='left_dl_2'>
    <dt><a onclick="showHide('2');" href="#" target="_self">内容管理</a></dt>
    <dd>
      <ul id="items">
        <li><a href="?c=Cate&a=show" target="right">分类管理</a></li>
        <li><a href="?c=Cate&a=add" target="right">添加分类</a></li>
        <li><a href="?c=Article&a=show" target="right">高级管理</a></li>
        <li><a href="?c=Article&a=add" target="right">添加图片</a></li>
        <li><a href="?c=Attach&a=show" target="right">图片管理</a></li>
      </ul>
    </dd>
  </dl>
  
  <dl class="left_dl" id='left_dl_5'>
    <dt><a onclick="showHide('5');" href="#" target="_self">扩展工具</a></dt>
    <dd>
      <ul id="items">
        <li><a href="?c=Html" target="right">生成静态页面</a></li>
        <li><a href="?c=Comment" target="right">评论管理</a></li>
        <li><a href="?c=Adsense" target="right">广告管理</a></li>
		<li><a href="?c=Link" target="right">友情链接</a></li>
      </ul>
    </dd>
  </dl> 

  <dl class="left_dl" id='left_dl_3'>
    <dt><a onclick="showHide('3');" href="#" target="_self">系统工具</a></dt>
    <dd>
      <ul id="items">
      	<li><a href="?c=Data&a=showTables" target="right">数据库备份</a></li>
        <li><a href="?c=Data&a=backIn" target="right">数据库还原</a></li>
          
      </ul>
    </dd>
  </dl>        

</div>

</body>
</html>