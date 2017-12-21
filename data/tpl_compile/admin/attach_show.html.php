<?php
 /* compiled by (WeePHP) at (2017-12-21 22:32:04) */
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
	$('#myform').attr('action', '?c=Attach&a=show');
	$('#myform').submit();	
}

/*设置状态*/
function setStatus(id, status) {
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一张图片");	
	}
	$.post('?c=Attach&a=setStatus',
		{id: id, status: status},
		function(rs) {
			search_submit();
		}
	);
}


/*删除*/
function delAttach(id){
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一张图片");	
	}
	$.post("?c=Attach&a=delAttach", 
		{id: id}, 
		function(data){
			search_submit();
		}
	);
}

/*保存所选图片*/
function saveHttp(id) {
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一张图片");	
	}
	id = id.join(':');
	window.location.href = '?c=Attach&a=saveHttp&id=' + id;	
}
</script>
  <form action="?c=Attach&a=show" method="post" name="myform" id="myform">
  <table width="98%" border="0" cellpadding="5" cellspacing="1" class="table">

    <tr>
      <td colspan="9" class="table_title"><span class="fl">图片管理</span></td>
    </tr>
      <tr class="tr">
      <td height="36" colspan="10">

      
        状态
        <select name="status" class="select">
          <option value="ALL" $this->data['$1']selected$this->data['$1']>全部</option>
          <option value="1" $this->data['$1']selected$this->data['$1']>显示</option>
          <option value="0" $this->data['$1']selected$this->data['$1']>隐藏</option>
        </select>
        类型
        <select name="type" class="select" id="type">
          <option value="ALL" $this->data['$1']selected$this->data['$1']>全部</option>
          <option value="1" $this->data['$1']selected$this->data['$1']>远程图片</option>
          <option value="0" $this->data['$1']selected$this->data['$1']>本地图片</option>
        </select>
        <input name="order" type="hidden" id="order" value="$this->data['$1']">
        <input name="by" type="hidden" id="by" value="$this->data['$1']">
        <input name="p" type="hidden" id="p" value="$this->data['$1']">
        <input type="submit" onclick="search_submit();" value="搜 索" class="bginput" />
        <input type="button" onclick="self.location='?c=Attach&a=show'" value="显示所有" class="bginput" />
        <a href="?c=Attach&a=saveHttp" class="button" >保存所有远程图片到本地</a>
        比较消耗资源, 请在系统空闲时操作
        </td>
    </tr> 
    
    <tr class="list_head ct">
      <td width="80">编号id
        $this->data['$1']
        <a href="javascript:void(0)" onclick="orderby('id', 'ASC');"><img src="images/admin/up.gif" border="0" title="点击按ID升序排列"></a>
      	$this->data['$1']
      	<a href="javascript:void(0)" onclick="orderby('id', 'DESC');"><img src="images/admin/down.gif" border="0" title="点击按ID降序排列"></a>
      	$this->data['$1']
      </td>
      <td width="70" >缩略图</td>
      <td width="70">类型</td>
      <td>所属文章</td>
      <td width="70">扩展名
      <td width="70">大小            
      <td width="150">      更新时间
        $this->data['$1']
        <a href="javascript:void(0)" onclick="orderby('addtime', 'ASC');"><img src="images/admin/up.gif" border="0" title="点击按时间升序排列"></a>
         $this->data['$1']
          <a href="javascript:void(0)" onclick="orderby('addtime', 'DESC');"><img src="images/admin/down.gif" border="0" title="点击按时间降序排列"></a>$this->data['$1']
      
      <td width="150" >操作</td>
    </tr>
    
    <tbody class="list_tbody">
    $this->data['$1']
      <tr class="tr">
        <td ><input name='ids[]' type='checkbox' value='$this->data['$1']' class="noborder">
          $this->data['$1']</td>
        <td class='ct'><a href="$this->data['$1']" target="_blank"><img src="$this->data['$1']" style="width:60px; height:60px;" /></a></td>
        <td class="ct">$this->data['$1']<a href="javascript:show_type(1)"><span class="red">远程</span></a>$this->data['$1']<a href="javascript:show_type(0)">本地</a>$this->data['$1']</td>
        <td class="lt">$this->data['$1']
        【<a href="?c=Article&a=show&cid=$this->data['$1']">$this->data['$1']</a>】<a href="?c=Article&a=add&id=$this->data['$1']">$this->data['$1']</a> $this->data['$1']
        --
        $this->data['$1'] </td>
        <td class="ct">$this->data['$1']
       </td>
        <td class="ct" style="text-align:center">$this->data['$1']</td>
        <td class="td ct">$this->data['$1']</td>
        <td class="td ct"> 
        $this->data['$1']
        <a href="?c=Attach&a=saveHttp&id=$this->data['$1']" title="点击删除附件">保存</a> | 
        $this->data['$1']
        
        <a href="javascript:void(0)" onclick="$.alerts.confirm('确认要删除? 删除后不可恢复!', null, function(r){ if(r){ delAttach($this->data['$1']) } })" title="点击删除附件">删除</a> | 
          $this->data['$1']
          	<a href="javascript:void(0)" onclick="setStatus($this->data['$1'], 0);" title="点击隐藏附件">显示</a>
           $this->data['$1']
           <a class="red" href="javascript:void(0)" onclick="setStatus($this->data['$1'], 1);" title="点击显示附件">隐藏</a>
           $this->data['$1']
            </td>
      </tr>
    $this->data['$1']
    </tbody>
    
    <tr class="tr">
      <td colspan="10"><div class="pagelist">$this->data['$1']</div></td>
    </tr>  
</table>
<table width="98%" border="0" cellpadding="5" cellspacing="1" class="table">
	<tr class="tr">
      <td colspan="9" valign="middle"><input type="button" onclick="$.selectAll('ids[]');" id="checkall" value="全/反选" class="bginput">

        <input type="button" value="批量显示" class="bginput" onclick="setStatus($.checkBoxValue('ids[]'), 1)" />
        
        <input type="button" value="批量隐藏" class="bginput" onclick="setStatus($.checkBoxValue('ids[]'), 0)" />
        
        <input type="button" value="批量删除" onclick="$.alerts.confirm('确认要删除? 删除后不可恢复!', null, function(r){ if(r){ delAttach($.checkBoxValue('ids[]')) } })" class="bginput"/>
        <input type="button" value="保存到本地" onclick="saveHttp($.checkBoxValue('ids[]'))" class="bginput"/>
</td>
    </tr>
</table>
</form>

    
$this->data['$1']