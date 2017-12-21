<?php
 /* compiled by (WeePHP) at (2017-12-21 22:31:59) */
?>
$this->data['$1']<form action="?c=Cate&a=add" method="post" name="myform" id="myform">
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">


<tr class="table_title"><td colspan="2">$this->data['$1']修改$this->data['$1']添加$this->data['$1']分类</td></tr>
<tr class="ji"><td class="rt">所属分类</td>
<td>$this->data['$1'] * 不选择将成为一级分类</td></tr>
<tr class="ji"><td class="rt" width="25%" >分类名称</td><td><input type="text" name="name" id="name" value="$this->data['$1']" size="20" maxlength="50" > * </td>
</tr>          
<tr class="tr"><td class="rt">分类排序</td><td ><input type="text" name="oid"  id="oid" value="$this->data['$1']" size="20" maxlength="6" > * 越小越前面</td></tr>
<tr class="ji" id="channelseo">
<td class="rt">内容显示模式</td>
<td><select name="view_type" class="select">
  <option value="0" $this->data['$1']selected$this->data['$1']>普通模式</option>
  <option value="1" $this->data['$1']selected$this->data['$1']>幻灯模式</option>
</select></td>
</tr> 
<tr class="tr" id="trcfile">
  <td class="rt">自定义模板</td>
  <td><input type="text" name="ctpl" id="ctpl" value="$this->data['$1']" size="20" maxlength="50" > 
  留空使用默认模板 cate.html</td>
</tr>
<tr class="tr" id="trcfile">
  <td class="rt">自定义分类英文别名</td>
  <td><input type="text" name="eng_name" id="eng_name" value="$this->data['$1']" size="20" maxlength="50" >  
  生成静态时的目录名,留空默认为 c[cid] </td>
</tr>
<tr class="tr">
  <td class="rt">分类SEO关键词</td>
  <td><input type="text" name="ckeywords" id="ckeywords" value="$this->data['$1']" maxlength="255" size="40"></td>
</tr>
<tr class="ji">
  <td class="rt">分类SEO简介</td>
  <td><textarea name="cdescription" id="cdescription"  style="width:301px; height:40px">$this->data['$1']</textarea></td>
</tr>

<tr class="tr">
  <td>&nbsp;</td>
  <td><input type="hidden" name="cid" id="cid" value="$this->data['$1']" />
    <input class="bginput" type="submit" value="提交" name="submit" />
    <input class="bginput" type="reset" name="Input" value="重置" /></td>
</tr>

</table></form>
$this->data['$1']