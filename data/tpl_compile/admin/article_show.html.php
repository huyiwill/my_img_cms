<?php
 /* compiled by (WeePHP) at (2017-12-21 22:32:01) */
?>
$this->data['$1']

<style>

</style>
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
function search_submit() {
	$('#myform').attr('action', '?c=Article&a=show');
	$('#myform').submit();	
}

/*切换分类*/
function moveCate(id, cid) {
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一篇文章");	
	}
	$.post('?c=Article&a=moveCate',
		{id: id, cid: cid},
		function(rs) {
			search_submit();
		}
	);	
}

/*生成文章*/
function makeHtml() {
	id = $.checkBoxValue('ids[]');
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一篇文章");	
	}
	window.location.href = '?c=Html&a=makeByArticleId&id=' + id.join(':');	
}

/*设置状态*/
function setStatus(id, status) {
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一篇文章");	
	}
	$.post('?c=Article&a=setStatus',
		{id: id, status: status},
		function(rs) {
			search_submit();
		}
	);
}

/*设置星级*/
function setStar(id, star) {
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一篇文章");	
	}
	$.post('?c=Article&a=setStar',
		{id: id, star:star},
		function(rs) {
			search_submit();
		}
	);
}

/*删除*/
function delArticle(id) {
	if (!id || id.length == 0) {
		return $.alerts.alert("请选择一篇文章");	
	}
	$.post('?c=Article&a=delArticle',
		{id: id},
		function(rs) {
			search_submit();
		}
	);	
}
</script>
  <form action="?c=Article&a=show" method="post" name="myform" id="myform">
  <table width="98%" border="0" cellpadding="5" cellspacing="1" class="table">

    <tr>
      <td colspan="9" class="table_title"><span class="fl">高级图集管理</span><span class="fr"><a href="?c=Article&a=add">添加图集</a></span></td>
    <tr class="tr">
      <td colspan="9">
        搜索图集
        $this->data['$1']
        星级
        <select name="star" class="select">
          <option value="ALL" $this->data['$1']selected$this->data['$1']>全部</option>
          <option value="1" $this->data['$1']selected$this->data['$1']>☆</option>
          <option value="2" $this->data['$1']selected$this->data['$1']>☆☆</option>
          <option value="3" $this->data['$1']selected$this->data['$1']>☆☆☆</option>
          <option value="4" $this->data['$1']selected$this->data['$1']>☆☆☆☆</option>
          <option value="5" $this->data['$1']selected$this->data['$1']>☆☆☆☆☆</option>
        </select>
        状态
        <select name="status" class="select">
          <option value="ALL" $this->data['$1']selected$this->data['$1']>全部</option>
          <option value="1" $this->data['$1']selected$this->data['$1']>显示</option>
          <option value="0" $this->data['$1']selected$this->data['$1']>隐藏</option>
        </select>
        <input name="keyword" type="text" id="keyword" size="20" value="$this->data['$1']">
        <input name="order" type="hidden" id="order" value="$this->data['$1']">
        <input name="by" type="hidden" id="by" value="$this->data['$1']">
        <input name="p" type="hidden" id="p" value="$this->data['$1']">
        <input type="submit" onclick="search_submit();" value="搜 索" class="bginput" />
        <input type="button" onclick="self.location='?c=Article&a=show'" value="显示所有" class="bginput" /></td>
    </tr>
    <tr class="list_head ct">
      <td width="80">编号id
        $this->data['$1']
        <a href="javascript:void(0)" onclick="orderby('id', 'ASC');"><img src="images/admin/up.gif" border="0" title="点击按ID升序排列"></a>
      	$this->data['$1']
      	<a href="javascript:void(0)" onclick="orderby('id', 'DESC');"><img src="images/admin/down.gif" border="0" title="点击按ID降序排列"></a>
      	$this->data['$1']
      </td>
      
      $this->data['$1']
      <td width="50">封面</td>
      $this->data['$1']
      
      <td >标题</td>
      <td >标签</td>
      <td width="80">分类</td>
      <td width="70">人气
      $this->data['$1']
       <a href="javascript:void(0)" onclick="orderby('hits', 'ASC');"><img src="images/admin/up.gif" border="0" title="点击按人气升序排列"></a>
      $this->data['$1']
      <a href="javascript:void(0)" onclick="orderby('hits', 'DESC');"><img src="images/admin/down.gif" border="0" title="点击按人气降序排列"></a>
      $this->data['$1']
      </td>
      <td width="90">推荐星级
        $this->data['$1']
        <a href="javascript:void(0)" onclick="orderby('star', 'ASC');"><img src="images/admin/up.gif" border="0" title="点击按星级升序排列"></a>
         $this->data['$1']
        <a href="javascript:void(0)" onclick="orderby('star', 'DESC');"><img src="images/admin/down.gif" border="0" title="点击按星级降序排列"></a>
         $this->data['$1']
        <td width="150">      更新时间
        $this->data['$1']
        <a href="javascript:void(0)" onclick="orderby('addtime', 'ASC');"><img src="images/admin/up.gif" border="0" title="点击按时间升序排列"></a>
         $this->data['$1']
          <a href="javascript:void(0)" onclick="orderby('addtime', 'DESC');"><img src="images/admin/down.gif" border="0" title="点击按时间降序排列"></a>$this->data['$1']
      
      <td width="200" >操作</td>
    </tr>
    
    <tbody class="list_tbody">
    $this->data['$1']
      <tr class="tr">
        <td ><input name='ids[]' type='checkbox' value='$this->data['$1']' class="noborder">
          $this->data['$1']</td>
          
        $this->data['$1']
        <td >
            $this->data['$1']
            <a href="$this->data['$1']" target="_blank">
            <img src="$this->data['$1']" width="48" height="48" />
            </a>
            $this->data['$1']
            --
            $this->data['$1']
        </td>
        $this->data['$1']
        
        <td >
          <a href="$this->data['$1']" target="_blank" $this->data['$1']style="color:$this->data['$1']"$this->data['$1']>$this->data['$1']</a>
        </td>
        <td >
        $this->data['$1']
        <a href="$this->data['$1']" target="_blank">$this->data['$1']</a> 
        $this->data['$1']
        </td>
        <td class="td ct"><a href="javascript:void(0)" onclick="$('#cid').val($this->data['$1']); search_submit();">$this->data['$1']</a></td>
        <td class="td ct">$this->data['$1']</td>
        <td id="stars_$this->data['$1']">
        $this->data['$1']
        $this->data['$1']
        <span class="star-1" onclick="setStar($this->data['$1'], $this->data['$1'])" title="推荐为$this->data['$1']星级"></span>
        $this->data['$1']
        <span class="star-0" onclick="setStar($this->data['$1'], $this->data['$1'])" title="推荐为$this->data['$1']星级"></span>
        $this->data['$1']
        $this->data['$1']
        </td>
        <td class="td ct">$this->data['$1']</td>
        <td class="td ct">
        
        <a href="?c=Attach&a=saveByArticleId&id=$this->data['$1']" title="点击保存远程图片">保存</a> | 
        <a href="?c=Html&a=makeByArticleId&id=$this->data['$1']" title="点击生成文章">生成</a> | 
        <a href="?c=Article&a=add&id=$this->data['$1']" title="点击编辑文章">编辑</a>  | 
        <a href="javascript:void(0)" onclick="$.alerts.confirm('确认要删除? 删除后不可恢复!', null, function(r){ if(r){ delArticle($this->data['$1']) } })" title="点击删除文章">删除</a> | 
          $this->data['$1']
          	<a href="javascript:void(0)" onclick="setStatus($this->data['$1'], 0);" title="点击隐藏文章">显示</a>
           $this->data['$1']
           <a class="red" href="javascript:void(0)" onclick="setStatus($this->data['$1'], 1);" title="点击显示文章">隐藏</a>
           $this->data['$1']
            </td>
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
      
        <input type="button" value="批量显示" class="bginput" onclick="setStatus($.checkBoxValue('ids[]'), 1)" />
        
        <input type="button" value="批量隐藏" class="bginput" onclick="setStatus($.checkBoxValue('ids[]'), 0)" />
        
        <input type="button" value="批量删除" onclick="$.alerts.confirm('确认要删除? 删除后不可恢复!', null, function(r){ if(r){ delArticle($.checkBoxValue('ids[]')) } })" class="bginput"/>
        <input type="button" value="批量生成" onclick="makeHtml();" id="createhtml" name="Infoid" class="bginput"  />
        <input type="button" onclick="$('#set_star_div').toggle();" id="setstar" name="setstar" class="bginput" value="设置星级"/>
        <span style="display:none" id="set_star_div">
        <select name="settostar" class="select" id="settostar">
          <option value="1">☆</option>
          <option value="2">☆☆</option>
          <option value="3">☆☆☆</option>
          <option value="4">☆☆☆☆</option>
          <option value="5">☆☆☆☆☆</option>
        </select>
        <input type="button" class="bginput" value="确定" onclick="setStar($.checkBoxValue('ids[]'), $('#settostar').val());"/>
        </span>
        
        <input type="button" onclick="$('#change_cate_div').toggle();" id="changecid" name="changecid" class="bginput" value="批量移动"/>
        <span style="display:none" id="change_cate_div">
        $this->data['$1']
        <input type="button" class="bginput" value="确定转移" onclick="moveCate($.checkBoxValue('ids[]'), $('#movecid').val());"/>
        </span>
        
        </td>
    </tr>
</table>
</form>

    
$this->data['$1']