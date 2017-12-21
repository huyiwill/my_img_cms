<?php
 /* compiled by (WeePHP) at (2017-12-21 22:07:19) */
?>
$this->data['$1']

<script type="text/javascript">
/*排序*/
function orderby(order, by) {
	$('#order').val(order);
	$('#by').val(by);
	search_submit();
}
/*分页*/
function showpage(p) {
	$('#p').val(p);
	search_submit();
}
/*状态*/
function show_type(type) {
	$('#type').val(type);
	search_submit();
}
function search_submit() {
	$('#myform').attr('action', '?c=Comment');
	$('#myform').submit();	
}

/*设置状态*/
function setStatus(id, status) {
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一张图片");	
	}
	$.post('?c=Comment&a=setStatus',
		{id: id, status: status},
		function(rs) {
			search_submit();
		}
	);
}


/*删除*/
function delit(id){
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一条评论");	
	}
	$.post("?c=Comment&a=del", 
		{id: id}, 
		function(data){
			search_submit();
		}
	);
}
</script>
  <form action="?c=Comment" method="post" name="myform" id="myform">
  <table width="98%" border="0" cellpadding="5" cellspacing="1" class="table">

    <tr>
      <td colspan="8" class="table_title"><span class="fl">评论管理</span></td>
    </tr>
      <tr class="tr">
      <td height="36" colspan="9">
      
        <input name="order" type="hidden" id="order" value="$this->data['$1']">
        <input name="by" type="hidden" id="by" value="$this->data['$1']">
        <input name="p" type="hidden" id="p" value="$this->data['$1']">
        <input name="article_id" type="hidden" id="article_id" value="$this->data['$1']" />
        状态
        <select name="status" class="select">
          <option value="ALL" $this->data['$1']selected$this->data['$1']>全部</option>
          <option value="1" $this->data['$1']selected$this->data['$1']>显示</option>
          <option value="0" $this->data['$1']selected$this->data['$1']>隐藏</option>
        </select>
        内容 
        <input type="text" value="$this->data['$1']" size="20" id="keyword" name="keyword">
        <input type="submit" onclick="search_submit();" value="搜 索" class="bginput" />
        <input type="button" onclick="self.location='?c=Comment'" value="显示所有" class="bginput" /></td>
    </tr> 
    
    <tr class="list_head ct">
      <td width="80">编号id
        $this->data['$1']
        <a href="javascript:void(0)" onclick="orderby('id', 'ASC');"><img src="images/admin/up.gif" border="0" title="点击按ID升序排列"></a>
      	$this->data['$1']
      	<a href="javascript:void(0)" onclick="orderby('id', 'DESC');"><img src="images/admin/down.gif" border="0" title="点击按ID降序排列"></a>
      	$this->data['$1']
      </td>
      <td >所属文章</td>
      <td>内容</td>
      <td width="70">作者
      <td width="70">IP            
      <td width="150">      更新时间
        $this->data['$1']
        <a href="javascript:void(0)" onclick="orderby('dateline', 'ASC');"><img src="images/admin/up.gif" border="0" title="点击按时间升序排列"></a>
         $this->data['$1']
        <a href="javascript:void(0)" onclick="orderby('dateline', 'DESC');"><img src="images/admin/down.gif" border="0" title="点击按时间降序排列"></a>$this->data['$1']
      
      <td width="100" >操作</td>
    </tr>
    
    <tbody class="list_tbody">
    $this->data['$1']
      <tr class="tr">
        <td ><input name='ids[]' type='checkbox' value='$this->data['$1']' class="noborder">
          $this->data['$1']</td>
        <td class='lt'><a href="?c=Comment&article_id=$this->data['$1']">$this->data['$1']</a></td>
        <td class="lt">$this->data['$1']</td>
        <td class="ct">$this->data['$1']
       </td>
        <td class="ct">$this->data['$1']</td>
        <td class="td ct">$this->data['$1']</td>
        <td class="td ct"> 
        <a href="javascript:void(0)" onclick="$.alerts.confirm('确认要删除? 删除后不可恢复!', null, function(r){ if(r){ delit($this->data['$1']) } })" title="点击删除附件">删除</a> | $this->data['$1']
       	<a href="javascript:void(0)" onclick="setStatus($this->data['$1'], 0);" title="点击隐藏附件">显示</a> $this->data['$1'] <a class="red" href="javascript:void(0)" onclick="setStatus($this->data['$1'], 1);" title="点击显示附件">隐藏</a> $this->data['$1']</td>
      </tr>
    $this->data['$1']
    </tbody>
    
    <tr class="tr">
      <td colspan="9"><div class="pagelist">$this->data['$1']</div></td>
    </tr>  
</table>
<table width="98%" border="0" cellpadding="5" cellspacing="1" class="table">
	<tr class="tr">
      <td colspan="9" valign="middle"><input type="button" onclick="$.selectAll('ids[]');" id="checkall" value="全/反选" class="bginput">
        &nbsp;&nbsp;
        <input type="button" value="批量审核" class="bginput" onclick="setStatus($.checkBoxValue('ids[]'), 1)" />
        &nbsp;&nbsp;
        <input type="button" value="取消审核" class="bginput" onclick="setStatus($.checkBoxValue('ids[]'), 0)" />
        &nbsp;&nbsp;
        <input type="button" value="批量删除" onclick="$.alerts.confirm('确认要删除? 删除后不可恢复!', null, function(r){ if(r){ delit($.checkBoxValue('ids[]')) } })" class="bginput"/>
</td>
    </tr>
</table>
</form>

    
$this->data['$1']