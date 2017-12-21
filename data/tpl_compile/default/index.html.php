<?php
 /* compiled by (WeePHP) at (2017-12-21 22:31:50) */
?>
$this->data['$1']

<script type="text/javascript">
/*页面初始化*/
$(document).ready(function() {
new weeFoucs({
    'delayTime': 3000,
    'target': '#ifocus_piclist li',
    'control': '#ifocus_btn li',
    'title': '#ifocus_tx li',
    'curClass': 'sel'
});
});
</script>
<div class="container">
    <!-- 主要内容 开始 -->
    <div class="main">
        <!-- 轮播图 开始 -->
        <div class="mfw_main">
		<div class="content">
			<div class="focus">
				<div class="slide">
					<div class="play">
						<ul id="ifocus_piclist">
                $this->data['$1']
                    <li style="display:none"><a href="$this->data['$1']"><img src="$this->data['$1']" alt="$this->data['$1']" width="565" height="350"/></a></li>
                $this->data['$1']
                </ul>
					</div>
					<div class="tab">
						<ul id="ifocus_btn">
                $this->data['$1']
                    <li><a href="$this->data['$1']"><img width="108" height="67" src="$this->data['$1']" alt="$this->data['$1']" /><strong>$this->data['$1']</strong><span>$this->data['$1']</span></a></li>
                $this->data['$1']	
                </ul>
					</div>
				</div>
			</div>
			<!-- focus end --></div>
	</div>
        <!-- 轮播图 结束 -->
    </div> 
    <!-- 主要内容 结束 -->
    
    <!-- 侧边栏 开始 -->
    <div class="side">
        <!-- 最新图集 开始 -->
        <div class="box box_tab txt_list_tab">
            <div class="tit"><a href="javascript:void(0)" class="on" id="tab_1" onmouseover="$.showTab(1, 2)">最新图集</a> <a href="javascript:void(0)" id="tab_2" onmouseover="$.showTab(2, 2)">人气图集</a></div>
            <div class="cont" id="showtab_1">
                <ul>
                    $this->data['$1']
                    <li><a href="$this->data['$1']" title="$this->data['$1']">·$this->data['$1']</a></li>
                    $this->data['$1']
                </ul>
            </div>
            
            <div class="cont" id="showtab_2" style="display:none">
                <ul>
                    $this->data['$1']
                    <li><a href="$this->data['$1']" title="$this->data['$1']">·$this->data['$1']</a></li>
                    $this->data['$1']
                </ul>
            </div>
        </div>
        <!-- 最新图集 结束 -->
        <!-- 搜索 开始 -->
        <div class="box_1 search_box">
            <div class="tit">
                <h3>搜索</h3>
            </div>
            <div class="cont">
                <input type="text" value="$this->data['$1']" class="search_in" id="keyword" /> <button type="button" class="btn_normal btn_search" onclick="subsearch('keyword')">搜索</button>
            </div>
        </div>
        <!-- 搜索 结束 -->
    </div>
    <!-- 侧边栏 结束 -->
    
    
    <!-- 高清大图 开始 -->
    <div class="c">
	<div class="c2">
		<div class="c2_l">
			<h3>精品展示<span> - Products</span></h3>
			<div class="c2_slide_btn">
				<a href="javascript:changePic(1)" >
				</a>
				<a href="javascript:changePic(0)" >
				</a></div>
			<div class="c2_slide" id="c2_slide">
				<div class="c2_slide_c">
					<ul class="c2_lc">
						$this->data['$1']
                    <li><a href="$this->data['$1']"><img src="$this->data['$1']" alt="$this->data['$1']" /></a><a title="$this->data['$1']" href="$this->data['$1']">$this->data['$1']</a></li>
                        $this->data['$1']
						
					</ul>
					
					
					
					
					<script type="text/javascript">
				var thisId = 1;
				var maxId = 2;
				var idName = '#change_div_';
				function changePic(type) {
					if (type == 1) {
						thisId = thisId - 1;
						if (thisId <= 0) {
							thisId = maxId;	
						}
					} else {
						thisId = thisId + 1;
						if (thisId > maxId) {
							thisId = 1;	
						}
					}
					for (i = 1; i <= maxId; i++) {
						$(idName + i).hide();
					}
					$(idName + thisId).show();
				}
				</script>
					
				</div>
			</div>
		</div>
	</div>
	<script>
$("#c2_slide").scrollable({circular:true,prev:"#c2_slide_prev",next:"#c2_slide_next"});
</script>
</div>
    <!-- 高清大图 结束 -->        
    
    
    <div class="adv_contianer">$this->data['$1']</div>    

    <!-- 分类图库 开始 -->
    $this->data['$1']
        $this->data['$1']
        <div class="box_2 pic_lib_box">
            <div class="tit">
                <h3>$this->data['$1']</h3>
                <a href="$this->data['$1']" class="more">更多&gt;&gt;</a>
            </div>
            <div class="cont">
                <div class="big_pic">
                $this->data['$1']
                    <a href="$this->data['$1']"><img src="$this->data['$1']" alt="$this->data['$1']" /></a><a href="$this->data['$1']" title="$this->data['$1']">$this->data['$1']</a>
                    <em class="pic_icon pic_hot_icon">HOT</em>
                $this->data['$1']
                </div>
                <div class="pic_list">
                    <ul>
                    $this->data['$1']
                        <li><a href="$this->data['$1']"><img src="$this->data['$1']" alt="$this->data['$1']" /></a><a href="$this->data['$1']" title="$this->data['$1']">$this->data['$1']</a></li>
                    $this->data['$1']
                    </ul>
                </div>
            </div>
        </div>
        $this->data['$1']
    $this->data['$1']
    <!-- 分类图库 结束 -->

    <div class="adv_contianer">$this->data['$1']</div>

    <!-- 主要内容 开始 -->
    <div class="main">
        <!-- 精彩推荐 开始 -->
        <div class="box nice_pic_box">
            <div class="tit">
                <h3>精彩推荐</h3>
            </div>
            <div class="cont">
                <ul>
                    $this->data['$1']
                    <li>
                        <a href="$this->data['$1']"><img src="$this->data['$1']" alt="$this->data['$1']" width="130" height="170" /></a>
                        <p class="pic_name"><a href="javascript:void(0)">$this->data['$1']</a></p>
                        
                    </li>
                    $this->data['$1']
                </ul>
            </div>
            <a href="javascript:void(0)" class="more">更多&gt;&gt;</a>
        </div>
        <!-- 精彩推荐 结束 -->
    </div>
    <!-- 主要内容 结束 -->
    
    <!-- 侧边栏 开始 -->
    <div class="side">
        <!-- 热门标签 开始 -->
        <div class="box_1 hot_tag_box">
            <div class="tit">
                <h3>热门标签</h3>
            </div>
            <div class="cont">
                <div class="tag_list">
                    $this->data['$1']
                    <a href="$this->data['$1']" class="tag_$this->data['$1']">$this->data['$1']</a>
                    $this->data['$1'] 
                </div>
            </div>
        </div>
        <!-- 热门标签 开始 -->
    </div>
    <!-- 侧边栏 结束 -->

    
    <!-- 友情链接 开始 -->
    <div class="box f_link_box">
        <div class="tit">
            <h3>友情链接</h3>
        </div>
        <div class="cont">
            <div class="txt_link">
            $this->data['$1']
            <a href="$this->data['$1']" target="_blank">$this->data['$1']</a>
            $this->data['$1']
            </div>
            <div class="pic_link">
            $this->data['$1']
            <a href="$this->data['$1']" target="_blank" class="link_logo"><img src="$this->data['$1']" title="$this->data['$1']" alt="$this->data['$1']" width="88" height="31" /></a>
            $this->data['$1']
            </div>
        </div>
    </div>
    <!-- 友情链接 结束 -->
</div>

$this->data['$1']