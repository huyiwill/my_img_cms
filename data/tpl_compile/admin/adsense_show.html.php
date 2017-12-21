<?php
 /* compiled by (WeePHP) at (2017-12-21 22:07:16) */
?>
$this->data['$1'] 

$this->data['$1']
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
  <tr class="table_title">
    <td colspan="5">广告列表</td>
  </tr>
  <tr class="list_head ct">
    <td width="60">编号</td>
    <td >广告标识</td>
    <td width="250">说明</td>
    <td>广告代码</td>
    <td width="150">操作</td>
  </tr>
  <tbody class="list_tbody">
    $this->data['$1']
    <tr class="tr ct">
      <td class="td">$this->data['$1']</td>
      <td class="td">$this->data['$1'] </td>
      <td class="td">$this->data['$1']</td>
      <td class="td"><textarea rows="3" disabled="disabled" style="width:98%">$this->data['$1']</textarea></td>
      <td class="td"><a href="?c=Adsense&a=preview&id=$this->data['$1']" target="_blank">预览</a> | <a href="?c=Adsense&id=$this->data['$1']#add_edit_link">修改</a> | <a href="?c=Adsense&id=$this->data['$1']&a=del" onclick="return confirm('确定删除吗?')">删除</a></td>
    </tr>
    $this->data['$1']
  </tbody>
</table>
$this->data['$1']

<form action="?c=Adsense&a=add" method="post">
  <table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
    <tr class="table_title" id="add_edit_link">
      <td colspan="2"> $this->data['$1']修改$this->data['$1']添加$this->data['$1']广告</td>
    </tr>
    <tr class="tr">
      <td width="100" >广告标识:</td>
      <td ><input name="title" type="text" maxlength="50" value="$this->data['$1']" style="width:200px">
        * </td>
    </tr>
    <tr class="tr">
      <td width="100" >说明:</td>
      <td ><input name="des" type="text" maxlength="50" value="$this->data['$1']" style="width:200px">
       </td>
    </tr>
    <tr class="tr">
      <td >广告代码:</td>
      <td ><textarea style="height:100px; width:400px" cols="80" name="content">$this->data['$1']</textarea>
        *</td>
    </tr>
    <tr class="tr">
      <td>&nbsp;</td>
      <td><input type="hidden" name="id" value="$this->data['$1']" />
      <input class="bginput" type="submit" name="submit" value="提交" /></td>
    </tr>
  </table>
</form>
$this->data['$1']