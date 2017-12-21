<?php
 /* compiled by (WeePHP) at (2017-12-21 22:06:08) */
?>
$this->data['$1']
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
<form action="?c=Config&type=cache"  method="post" id="myform">
<tr class="table_title">
  <td colspan="2">静态缓存设置</td>
</tr>    
<tr class="tr">
  <td class="left">静态网页文件缓存</td>
  <td><select name="con[html_cache_on]">
  <option value=1 $this->data['$1']selected$this->data['$1']>开启</option>
  <option value=0 $this->data['$1']selected$this->data['$1']>关闭</option>
  </select> 建议动态模式开启,开启此功能以下设置才有效(最大缓存时间60*100)</td>
</tr>      
<tr class="ji">
  <td class="left">首页缓存时间(分钟)</td>
  <td><input type="text" name="con[html_cache_index]" size="5" maxlength="3" value="$this->data['$1']" class="ct">
  </td>
</tr>
<tr class="tr">
  <td class="left">分类页缓存时间(分钟)</td>
  <td><input type="text" name="con[html_cache_cate]" size="5" maxlength="3" value="$this->data['$1']" class="ct">
  </td>
</tr>
<tr class="ji">
  <td class="left">内容页缓存时间(分钟)</td>
  <td><input type="text" name="con[html_cache_content]" size="5" maxlength="3" value="$this->data['$1']" class="ct">
  </td>
</tr>               
<tr class="tr">
  <td colspan="2"><input type="hidden" name="setting_sub" value="true">
    <input class="bginput" type="submit" name="submit" value=" 提交 ">
    <input class="bginput" type="reset" name="Input" value="重置"> 注: 设为0时则不启用缓存. 启用缓存可以减少数据库压力,但会占用更多的空间以及导致更新信息延后,请合理设置。
  </td>
</tr>
</form>
</table>


<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
  <tr class="table_title">
    <td colspan="2">清理缓存</td>
  </tr>
  <tr class="tr">
    <td width="200" class="rt" >静态缓存  html_cache</td>
    <td ><input type="submit" value="更新全部静态缓存" class="bginput" onclick="location.href='?c=Config&a=clearCache&type=html'" /></td>
  </tr>
  <tr class="tr">
    <td width="200" class="rt" >静态缓存  html_cache/index </td>
    <td ><input type="submit" value="更新首页缓存" class="bginput" onclick="location.href='?c=Config&a=clearCache&type=index'" /></td>
  </tr>
  <tr class="tr">
    <td width="200" class="rt" >静态缓存  html_cache/cate</td>
    <td ><input type="submit" value="更新分类页缓存" class="bginput" onclick="location.href='?c=Config&a=clearCache&type=cate'" /></td>
  </tr>
  <tr class="tr">
    <td width="200" class="rt" >静态缓存  html_cache/article</td>
    <td ><input type="submit" value="更新内容页缓存" class="bginput" onclick="location.href='?c=Config&a=clearCache&type=article'" /></td>
  </tr>
  <tr class="tr">
    <td class="rt">文件缓存 cache</td>
    <td ><input type="submit" value="更新文件缓存" class="bginput" onclick="location.href='?c=Config&a=clearCache&type=file'" /> 
    友情链接, 广告等</td>
  </tr>
 
  <tr class="tr">
    <td  class="rt">模板缓存 tpl_compile</td>
    <td width="836" ><input type="submit" value="更新模板缓存" class="bginput" onclick="location.href='?c=Config&a=clearCache&type=tpl'" /></td>
  </tr>
</table>
$this->data['$1']