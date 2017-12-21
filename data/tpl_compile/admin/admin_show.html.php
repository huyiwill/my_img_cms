<?php
 /* compiled by (WeePHP) at (2017-12-21 22:06:09) */
?>
$this->data['$1']


<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
<tr class="table_title">
  <td colspan="8">管理员列表</td>
</tr>
<tr class="list_head ct">
  <td width="60">编号</td>
  <td>帐号</td>
  <td width="200">E-mail</td>
  <td width="150">管理组</td>
  <td width="120">操作</td>
</tr>

<tbody class="list_tbody">
$this->data['$1']
<tr class="tr ct">
<td class="td">$this->data['$1']</td>
<td class="lt">$this->data['$1']  </td>
<td class="td">$this->data['$1']</td>
<td class="td">$this->data['$1']</td>
<td class="td">
  <a href="?c=Admin&a=show&uid=$this->data['$1']#add">修改</a> |  
  <a href="javascript:void(0);" onclick="$.alerts.confirm('确定删除吗?', null, function(r){ if(r){ self.location='?c=Admin&a=del&uid=$this->data['$1']';  }})">删除</a>
</td>
</tr>
$this->data['$1']
</tbody>

</table>


<form action="?c=Admin&a=show" method="post">
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
<tr class="table_title" id="add">
  <td colspan="2">
  $this->data['$1']修改$this->data['$1']添加$this->data['$1']管理员</td>
</tr>        
<tr class="tr">
  <td width="100" >帐号:</td>
  <td ><input name="name" type="text" id="name" style="width:200px" value="$this->data['$1']" maxlength="50" $this->data['$1']disabled="disabled"$this->data['$1']> *</td>
</tr>
<tr class="tr">
  <td >密码:</td>
  <td ><input name="password" type="password" id="password" style="width:200px" size="40" maxlength="250">
    留空不更改</td>
</tr>
 <tr class="tr">
  <td >确认密码:</td>
  <td ><input name="password2" type="password" id="password2" style="width:200px" size="40" maxlength="250"></td>
</tr>       
<tr class="tr">
  <td >E-mail</td>
  <td ><input name="email" type="text" id="email" style="width:200px" value="$this->data['$1']" size="40" maxlength="250" /></td>
</tr>
<tr class="tr">
  <td >管理组</td>
  <td >
  <select name="pre">
  $this->data['$1']
    <option value="$this->data['$1']" $this->data['$1']selected$this->data['$1']>$this->data['$1']</option>
  $this->data['$1']
    </select>
  </td>
</tr>       
<tr class="tr">
  <td>&nbsp;</td>
  <td><input type="hidden" name="uid" value="$this->data['$1']" />
    <input class="bginput" type="submit" name="submit" value="提交" /></td>
</tr>
</table>
</form>


$this->data['$1']