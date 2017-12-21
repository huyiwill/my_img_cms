<?php
 /* compiled by (WeePHP) at (2017-12-21 22:32:02) */
?>
$this->data['$1']
<link href="images/js/uploadify/uploadify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="images/js/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript" src="images/js/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="images/js/FormValid.js"></script>
<script type="text/javascript" src="images/js/uploadify/swfobject.js"></script>
<script type="text/javascript" src="images/js/uploadify/jquery.uploadify.v2.1.4.js"></script>
<script type="text/javascript">
var editor;
var downEditor;
$(document).ready(function() {
	loadEditor();
	loadDownEditor();
	$('#file_upload').uploadify({
		'uploader'  : 'images/js/uploadify/uploadify.swf',
		'script'    : '$this->data['$1']',
		'cancelImg' : 'images/js/uploadify/cancel.png',
		'buttonImg' : 'images/js/uploadify/select_file.gif',
		'scriptData': {'c':'Upload', 'uid':'$this->data['$1']', 'id':'$this->data['$1']', 'hash':'$this->data['$1']'},
		'folder'    : '/uploads',
		'width'		: 102, 
		'height'	: 30,
		'auto'      : true,
		'multi' 	: true,
		'fileExt'   : '*.jpg;*.gif;*.png',
		'fileDesc'  : 'Image Files (.JPG, .GIF, .PNG)',
		'queueID'   : 'custom-queue',
		'queueSizeLimit':'$this->data['$1']',
		'onComplete': function(event, queueId, fileObj, response, data) {
			if (1!=response) {
				alert(response);
			}
		},
		'onAllComplete':function(event, data) {
			getAttachList();
		}
	});
	getAttachList(true);
});
/*获取附件列表*/
function getAttachList(hidden) {
	var t = Math.random();
	var url = "?c=Attach&a=localList&id=$this->data['$1']" + '&t=' + t;
	$('#attach_list_div').load(url, null, function(data){
		if(!hidden) $.showSwfTab(3, 3);
	});
}
/*设置封面*/
function setCover(id, file) {
	$('#cover').val(file);
	$('.cover_tag').hide();
	$('#cover_tag_'+id).show();
}
/*删除附件*/
function delAttach(id){
	$.get("?c=Attach&a=delAttach&id=" + id, 
		null, 
		function(data){
			//alert(data);
			getAttachList();
		}
	);
}
/*设置显示状态*/
function setStatus(id, status) {
	$.get("?c=Attach&a=setStatus&id=" + id + '&status=' + status, 
		null, 
		function(data){
			//alert(data);
			getAttachList();
		}
	);	
}
/*冻结提交按扭*/
function disabled_submit(disabled) {
	$('#submit').attr('disabled', disabled);
}


/*抓取网络图片*/
function downHttp() {
	$.post("?c=Attach&a=downHttp&v=json&id=$this->data['$1']",
		{'content': downEditor.html()},
		function(data) {
			if (data.state < 0) {
				$.alerts.alert(data.data.errorMsg);	
			} else {
				downEditor.html('');
				getAttachList();
				if($('#save_http').attr('checked')) {
					saveHttp();	
				}
			}
		},
		'json'
	);
}

/*保存网络图片*/
function saveHttp() {
	$('#ajax-frame').attr('src', '?c=Attach&a=saveByArticleId&id=$this->data['$1']&inframe=true');
}


/*加载编辑器*/
function loadEditor() {
	var option = {
		width: '700px',
		height: '400px',
		resizeType: 1,
		themeType: 'simple',
		allowImageUpload : false,
		allowFlashUpload : false,
		allowMediaUpload : false,
		items : [
			'source', '|', 'fontsize', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', '|', 'emoticons', 'image', 'flash', 'link']
	};
    editor = KindEditor.create('#content', option);	
}
/*加载下载编辑器*/
function loadDownEditor() {
	var option = {
		width: '700px',
		height: '400px',
		resizeType: 1,
		themeType: 'simple',
		urlType: 'domain',
		items : ['source', 'image']
	};
    downEditor = KindEditor.create('#down_content', option);	
}

/*分析标签*/
function parseTag() {
	var t = Math.random();
	var title = $('#title').val();
	$.post("?c=Article&a=parseTag&t=" + t, 
		{title: title}, 
		function(data){
			if (data) {
				$('#tag').val(data);	
			} else {
				$.alerts.alert('没有匹配到合适的标签');	
			}
		}
	);	
}
</script>


<form action="?c=Article&a=add" method="post" id="myform" name="add">
  <table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
    <tr class="tabs_title">
      <td colspan="2">
      <span id="tabs" class="fl"> 
      <a class="tab2 on" id="tab_1" href="javascript:void(0)" onclick="$.showSwfTab(1, 3)" >添加内容</a> 
      <a class="tab2" id="tab_2" href="javascript:void(0)" onclick="$.showSwfTab(2, 3)" >添加图片</a> 
      <a class="tab2" id="tab_3" href="javascript:void(0)" onclick="$.showSwfTab(3, 3)" >图片列表</a> 
      </span> 
      <span class="fr"><a href="?c=Article&a=show" class="no">返回图集管理</a></span></td>
    </tr>
  </table>
  <div style="height:auto; overflow:hidden">
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="table" id="showtab_1" style="margin:0 5px;">
      <tbody>
        <tr class="ji">
          <td width="100" class="rt" >分类</td>
          <td>$this->data['$1'] *
            星级
            <select name="star" class="select">
              <option value="1" $this->data['$1']selected$this->data['$1']>☆</option>
              <option value="2" $this->data['$1']selected$this->data['$1']>☆☆</option>
              <option value="3" $this->data['$1']selected$this->data['$1']>☆☆☆</option>
              <option value="4" $this->data['$1']selected$this->data['$1']>☆☆☆☆</option>
              <option value="5" $this->data['$1']selected$this->data['$1']>☆☆☆☆☆</option>
            </select>
            状态
            <select name="status" class="select">
              <option value="1" $this->data['$1']selected$this->data['$1']>显示</option>
              <option value="0" $this->data['$1']selected$this->data['$1']>隐藏</option>
            </select></td>
        </tr>
        <tr class="ji">
          <td class="rt" >标题</td>
          <td><input name="title" id="title" type="text" class="input" maxlength="250" value="$this->data['$1']">
            <select name="color" class="select">
              <option value=''>标题颜色</option>
              <option value='#FF0000' style='background-color:#FF0000' $this->data['$1']selected$this->data['$1']>红色</option>
              <option value='#FF33CC' style='background-color:#FF33CC' $this->data['$1']selected$this->data['$1']>粉红</option>
              <option value='#00FF00' style='background-color:#00FF00' $this->data['$1']selected$this->data['$1']>绿色</option>
              <option value='#660099' style='background-color:#660099' $this->data['$1']selected$this->data['$1']>紫色</option>
              <option value='#FFFF00' style='background-color:#FFFF00' $this->data['$1']selected$this->data['$1']>黄色</option>
              <option value='#0000CC' style='background-color:#0000CC' $this->data['$1']selected$this->data['$1']>深蓝</option>
              <option value=''>无色</option>
            </select></td>
        </tr>
        <tr class="ji">
          <td class="rt" >标签</td>
          <td><input name="tag" type="text" class="input" id="tag" value="$this->data['$1']" maxlength="100">
          <a class="button" href="javascript:void(0)" onclick="parseTag()">自动提取</a>
          使用英文逗号 , 分隔</td>
        </tr>
        <tr class="tr">
          <td class="rt">跳转</td>
          <td><input name="jumpurl" type="text" class="input" maxlength="255" value="$this->data['$1']" title="跳转链接" /></td>
        </tr>
        <tr class="ji">
          <td class="rt">来源</td>
          <td><input name="comeurl" type="text" class="input" maxlength="255" value="$this->data['$1']" /></td>
        </tr>
        
        <tr class="ji">
          <td class="rt">作者</td>
          <td>
          	$this->data['$1']
            <input name="author" type="text" size="10" value="$this->data['$1']" />
            $this->data['$1']
            <input name="admin_name" type="text" size="10" value="$this->data['$1']" />
            $this->data['$1']
            人 气
            <input name="hits" type="text" size="10" value="$this->data['$1']" />
            时间
            <input name="addtime" id="addtime" type="text" size="20" value="$this->data['$1']" />
            
            <a class="button" href="javascript:void(0)" onclick="$('#addtime').val('$this->data['$1']')">当前时间</a></td>
        </tr>
        <tr class="tr">
          <td class="rt">简介</td>
          <td><textarea name='remark' style="width:700px;height:65px;" title="留空则自动截取内容前140个字符">$this->data['$1']</textarea></td>
        </tr>
        <tr class="ji">
          <td class="rt">内容</td>
          <td><textarea id="content" name="content">$this->data['$1']</textarea></td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <div style="height:0; overflow:hidden">
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="table" id="showtab_2" style="visibility:hidden;margin:0 5px;">
      <tbody>
        <tr class="ji">
          <td width="100" class="rt">上传本地图片</td>
          <td><input id="file_upload" name="file_upload" type="file" />
            <div id="custom-queue"></div></td>
        </tr>
        <tr class="ji">
          <td width="100" class="rt">抓取网络图片</td>
          <td><a href="javascript:void(0)" onclick="downHttp();" class="button" >抓取网络图片</a>
            <label><input id="save_http" type="checkbox" value="true">
            保存到本地</label></td>
        </tr>
        <tr class="ji">
          <td width="100" class="rt">网络图片内容</td>
          <td> 提示 - 将包含有图片的网页内容复制到这里,点击"抓取"按扭,程序会自动将图片下方文字写入图片简介字段
            <textarea id="down_content" name="down_content"></textarea></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div style="height:0; overflow:hidden">
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="table" id="showtab_3" style="visibility:hidden; margin:0 5px;">
      <tbody>
        <tr class="ji">
          <td width="100" class="rt">操作</td>
          <td>
          <span class="fl"><a href="javascript:void(0)" target="ajax-frame" onclick="getAttachList();" class="button" >刷新列表</a> <a href="javascript:void(0)" onclick="saveHttp()" target="ajax-frame" class="button" >保存本页所有远程图片到本地</a></span> <span class="fl">
            <iframe name="ajax-frame" id="ajax-frame" width="600" scrolling="no" height="25" frameborder="0" marginheight="0" marginwidth="0" topmargin="0" allowtransparency="true" src="?c=Frame"></iframe>
            </span>
          
          </td>
        </tr>
        <tr class="ji">
          <td class="rt">封面</td>
          <td><input name="cover" id="cover" type="text" class="input" maxlength="255" value="$this->data['$1']" />
            留空默认使用第一张图</td>
        </tr>
        <tr class="ji">
          <td width="100" class="rt">图片列表</td>
          <td><div id="attach_list_div"></div></td>
        </tr>
      </tbody>
    </table>
  </div>
  <table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
    <tr class="tr ct">
      <td align="left" style="padding-left:150px;">
      <input type="hidden" name="id" value="$this->data['$1']" />
      <input class="bginput" type="submit" value="提交" name="submit" />
      <input class="bginput" type="reset" name="Input" value="重置" /></td>
    </tr>
  </table>
</form>
$this->data['$1']