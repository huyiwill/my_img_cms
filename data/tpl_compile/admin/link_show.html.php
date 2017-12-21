<?php
 /* compiled by (WeePHP) at (2017-12-21 22:07:16) */
?>
$this->data['$1'] 

$this->data['$1']
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
  <tr class="table_title">
    <td colspan="7">友情链接列表</td>
  </tr>
  <tr class="list_head ct">
    <td width="60">编号</td>
    <td >网站名称</td>
    <td width="250">网站地址</td>
    <td width="250">网站LOGO</td>
    <td width="70">顺序</td>
    <td width="70">形式</td>
    <td width="100">操作</td>
  </tr>
  <tbody class="list_tbody">
    $this->data['$1']
    <tr class="tr ct">
      <td class="td">$this->data['$1']</td>
      <td class="td">$this->data['$1'] </td>
      <td class="td">$this->data['$1']</td>
      <td class="td">$this->data['$1']<img src="$this->data['$1']" />$this->data['$1']</td>
      <td class="td">$this->data['$1']</td>
      <td class="td"> $this->data['$1']
        文字
        $this->data['$1']
        图片
        $this->data['$1'] </td>
      <td class="td"><a href="?c=Link&id=$this->data['$1']#add_edit_link">修改</a> | <a href="?c=Link&id=$this->data['$1']&a=del" onclick="return confirm('确定删除该友情链接吗?')">删除</a></td>
    </tr>
    $this->data['$1']
  </tbody>
</table>
$this->data['$1']

<form action="?c=Link&a=add" method="post">
  <table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
    <tr class="table_title" id="add_edit_link">
      <td colspan="2"> $this->data['$1']修改$this->data['$1']添加$this->data['$1']友情链接</td>
    </tr>
    <tr class="tr">
      <td width="100" >网站名称:</td>
      <td ><input name="title" type="text" maxlength="50" value="$this->data['$1']" style="width:200px">
        *</td>
    </tr>
    <tr class="tr">
      <td >网站地址:</td>
      <td ><input name="url" type="text" size="40" value="$this->data['$1']" maxlength="250" style="width:200px">
        *</td>
    </tr>
    <tr class="tr">
      <td >LOGO地址：</td>
      <td ><input name="logo" type="text" size="40" value="$this->data['$1']" maxlength="250" style="width:200px"></td>
    </tr>
    <tr class="tr">
      <td >连接排序：</td>
      <td ><input name="oid" type="text" value="$this->data['$1']" maxlength="5" style="width:40px;text-align:center" title="越小越前面">
        越小越前面</td>
    </tr>
    <tr class="tr">
      <td >链接类型：</td>
      <td ><select name="type">
          <option value="1" $this->data['$1']selected$this->data['$1']>文字</option>
          <option value="2" $this->data['$1']selected$this->data['$1']>图片</option>
        </select></td>
    </tr>
    <tr class="tr">
      <td>&nbsp;</td>
      <td><input type="hidden" name="id" value="$this->data['$1']" />
      <input class="bginput" type="submit" name="submit" value="提交" /></td>
    </tr>
  </table>
</form>
$this->data['$1']