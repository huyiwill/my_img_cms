<?php
 /* compiled by (WeePHP) at (2017-12-21 22:31:57) */
?>
$this->data['$1']

<script type="text/javascript">
function setStauts(cid, status) {
	$.get('?c=Cate&a=setStatus&cid=' + cid + '&status=' + status, null, function(rs){self.location='?c=Cate&a=show'});
}
</script>
<form action="?c=Cate&a=show" method="post" name="myform" id="myform">
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
  <tr class="table_title">
    <td colspan="14">栏目分类列表</td>
  </tr>
  <tr class="list_head ct">
    <td width="50">编号</td>
    <td>栏目名称</td>
    <td>别名</td>
    <td>模板</td>
    <td>显示模式</td>
    <td width="250">操作</td>
    <td width=70>排序</td>
  </tr>
  
  <tbody class="list_tbody">
  $this->data['$1']
  <tr class="tr ct">
    <td class="lt"><input type='checkbox' name='ids[]' value='$this->data['$1']' class="noborder">$this->data['$1']</td>
    <td class="lt">【<a href="$this->data['$1']" target="_blank">$this->data['$1']</a>】</td>
    
    <td class="td"><neq name="gxcms.mid" value="9">$this->data['$1']</neq></td>
    <td class="td">$this->data['$1']$this->data['$1']$this->data['$1']默认$this->data['$1']</td>
    <td class="td">$this->data['$1']幻灯模式$this->data['$1']普通模式$this->data['$1']</td>
    <td class="td">
      <a href="?c=Article&a=add&cid=$this->data['$1']">添加内容</a> | 
      <a href="?c=Article&a=show&cid=$this->data['$1']">查看内容</a> | 
      $this->data['$1']
      <a href="javascript:void(0)" onclick="setStauts($this->data['$1'], 0);" title="点击切换成导航栏上隐藏">显示</a>
      $this->data['$1']
      <a class="red" href="javascript:void(0)" onclick="setStauts($this->data['$1'], 1);" title="点击切换成导航栏上显示">隐藏</a>
      $this->data['$1']
      |    
      <a href="?c=Cate&a=add&cid=$this->data['$1']">编辑</a> | 
      <a href="?c=Cate&a=delete&ids=$this->data['$1']" onclick="return confirm('确定删除该分类吗?删除后将不能恢复！')">删除</a>
      </td>
    <td class="td"><input type='text' name='oid[$this->data['$1']]' value='$this->data['$1']' style="width:22px;" maxlength="3"></td>
  </tr>
  $this->data['$1'] 
  <tr class="tr ct">
    <td class="lt"><input type='checkbox' name='ids[]' value='$this->data['$1']' class="noborder">$this->data['$1']</td>
    <td class="lt">&nbsp;&nbsp;├【<a href="$this->data['$1']" target="_blank">$this->data['$1']</a>】</td>

    <td class="td"><neq name="gxcms.mid" value="9">$this->data['$1']</neq></td>
    <td class="td">$this->data['$1']$this->data['$1']$this->data['$1']默认$this->data['$1']</td>
    <td class="td">$this->data['$1']幻灯模式$this->data['$1']普通模式$this->data['$1']</td>
    <td class="td"><neq name="gxcms.mid" value="9">
      <a href="?c=Article&a=add&cid=$this->data['$1']">发表内容</a> | 
      <a href="?c=Article&a=show&cid=$this->data['$1']">查看内容</a> | 
      $this->data['$1']
      <a href="javascript:void(0)" onclick="setStauts($this->data['$1'], 0);" title="点击切换成导航栏上隐藏">显示</a>
      $this->data['$1']
      <a class="red" href="javascript:void(0)" onclick="setStauts($this->data['$1'], 1);" title="点击切换成导航栏上显示">隐藏</a>
      $this->data['$1']    
      | 
      <a href="?c=Cate&a=add&cid=$this->data['$1']">编辑</a> | 
      <a href="?c=Cate&amp;a=delete&amp;ids=$this->data['$1']" onclick="return confirm('确定删除该分类吗?删除后将不能恢复！')">删除</a></td>
    <td class="td"><input type='text' name='oid[$this->data['$1']]' value='$this->data['$1']' style="width:22px;" maxlength="3"></td>
  </tr>
  $this->data['$1']
$this->data['$1']
</tbody>
  <tr>
    <td colspan="14" bgcolor="#FFFFFF">
    <input type="hidden" name="submit" value="true" />
    <input onclick="$.selectAll('ids[]');" class="bginput" type="button" id="checkall" value="全/反选">
    <input type="submit" value="批量删除" onclick="if(confirm('删除后将无法还原,确定要删除吗?')){myform.action='?c=Cate&a=delete';}else{return false}" class="bginput"/>
    <input type="submit" value="修改排序" class="bginput"  onclick="myform.action='?c=Cate&a=updateOid';"/> 
       &nbsp;注删除分类后原分类下的文章将被全部删除</td>
  </tr>
</table>
</form>
$this->data['$1']