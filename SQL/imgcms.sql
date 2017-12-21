/*
Navicat MySQL Data Transfer

Source Server         : my_virtual
Source Server Version : 50556
Source Host           : 192.168.254.128:3306
Source Database       : imgcms

Target Server Type    : MYSQL
Target Server Version : 50556
File Encoding         : 65001

Date: 2017-12-21 22:34:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `img_admin`
-- ----------------------------
DROP TABLE IF EXISTS `img_admin`;
CREATE TABLE `img_admin` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'UID',
  `name` varchar(30) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` varchar(50) NOT NULL COMMENT '管理组',
  `pre` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uname` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img_admin
-- ----------------------------
INSERT INTO `img_admin` VALUES ('1', 'admin', '21274ecc6de888982e665bf661cb5b07', '', '15');

-- ----------------------------
-- Table structure for `img_adsense`
-- ----------------------------
DROP TABLE IF EXISTS `img_adsense`;
CREATE TABLE `img_adsense` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL DEFAULT '' COMMENT '说明',
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img_adsense
-- ----------------------------
INSERT INTO `img_adsense` VALUES ('1', 'banner', '头部banner广告', '<a href=\"http://www.imgcms.com\" target=\"_blank\"><img src=\"{$web_url}/images/ad/adv_700_90.jpg\" border=\"0\" /></a>');
INSERT INTO `img_adsense` VALUES ('2', 'index-top', '首页上部广告', '<a href=\"http://www.imgcms.com\" target=\"_blank\"> <img border=\"0\" src=\"{$web_url}/images/ad/adv_980_90.jpg\" width=\"980\" height=\"90\"> </a>');
INSERT INTO `img_adsense` VALUES ('3', 'index-bottom', '首页底部广告', '<a href=\"http://www.imgcms.com\" target=\"_blank\"> <img border=\"0\" src=\"{$web_url}/images/ad/adv_980_90.jpg\" width=\"980\" height=\"90\"> </a>');
INSERT INTO `img_adsense` VALUES ('4', 'article-right', '内容页右边广告', '<a href=\"http://www.imgcms.com\"><img src=\"{$web_path}/images/ad/adv_300_200.jpg\" alt=\"\" /></a>');
INSERT INTO `img_adsense` VALUES ('6', 'cate-right', '列表页右边广告', '<a href=\"http://www.imgcms.com\"><img src=\"{$web_path}/images/ad/adv_220_90.jpg\" alt=\"\" /></a>');

-- ----------------------------
-- Table structure for `img_article`
-- ----------------------------
DROP TABLE IF EXISTS `img_article`;
CREATE TABLE `img_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` smallint(5) NOT NULL,
  `title` varchar(250) NOT NULL,
  `tag` varchar(100) NOT NULL DEFAULT '' COMMENT '标签',
  `color` char(8) NOT NULL DEFAULT '',
  `cover` varchar(250) NOT NULL DEFAULT '' COMMENT '封面',
  `author` varchar(50) NOT NULL DEFAULT '' COMMENT '作者',
  `comeurl` varchar(250) NOT NULL DEFAULT '' COMMENT '来源',
  `remark` text NOT NULL,
  `content` text NOT NULL,
  `hits` mediumint(8) NOT NULL DEFAULT '0',
  `star` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `up` mediumint(8) NOT NULL DEFAULT '0',
  `down` mediumint(8) NOT NULL DEFAULT '0',
  `jumpurl` varchar(255) NOT NULL DEFAULT '',
  `addtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `hits` (`hits`),
  KEY `star` (`star`),
  KEY `status` (`status`),
  KEY `up` (`up`),
  KEY `down` (`down`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img_article
-- ----------------------------

-- ----------------------------
-- Table structure for `img_attach`
-- ----------------------------
DROP TABLE IF EXISTS `img_attach`;
CREATE TABLE `img_attach` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '附件ID',
  `article_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '主题ID',
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '文件名',
  `remark` text NOT NULL COMMENT '文件描述',
  `size` int(11) NOT NULL DEFAULT '0' COMMENT '文件大小',
  `file` varchar(250) NOT NULL COMMENT '文件路径',
  `ext` varchar(10) NOT NULL COMMENT '文件类型',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态, 1:正常 0:隐藏',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '附件类型, 0:本地文件, 1:网络文件',
  `try_count` tinyint(2) NOT NULL DEFAULT '0' COMMENT '重试次数',
  `upload_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上传时间',
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`),
  KEY `type` (`type`,`try_count`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img_attach
-- ----------------------------

-- ----------------------------
-- Table structure for `img_cache`
-- ----------------------------
DROP TABLE IF EXISTS `img_cache`;
CREATE TABLE `img_cache` (
  `name` varchar(40) NOT NULL DEFAULT '' COMMENT '字符串',
  `value` text NOT NULL COMMENT '显示文字',
  `package` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '时间',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公用数据存贮';

-- ----------------------------
-- Records of img_cache
-- ----------------------------

-- ----------------------------
-- Table structure for `img_cate`
-- ----------------------------
DROP TABLE IF EXISTS `img_cate`;
CREATE TABLE `img_cate` (
  `cid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) NOT NULL,
  `oid` smallint(5) NOT NULL DEFAULT '0',
  `view_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '内容显示模式:0: 普通模式, 1:幻灯模式',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(30) NOT NULL DEFAULT '',
  `eng_name` varchar(30) NOT NULL DEFAULT '',
  `ctpl` varchar(30) NOT NULL DEFAULT '' COMMENT '分类模板',
  `ctitle` varchar(50) NOT NULL,
  `ckeywords` varchar(255) NOT NULL,
  `cdescription` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img_cate
-- ----------------------------
INSERT INTO `img_cate` VALUES ('11', '0', '0', '0', '1', '美女图片', '', '', '', '', '');
INSERT INTO `img_cate` VALUES ('7', '0', '4', '1', '1', '街拍美图', '', '', '', '', '');
INSERT INTO `img_cate` VALUES ('8', '0', '3', '1', '1', '清纯唯美', '', '', '', '', '');
INSERT INTO `img_cate` VALUES ('9', '0', '2', '0', '1', '型男靓女', '', '', '', '', '');
INSERT INTO `img_cate` VALUES ('6', '0', '1', '0', '1', '动漫图片', '', '', '', '', '');
INSERT INTO `img_cate` VALUES ('12', '0', '0', '0', '1', '$this->data[\'$1\']', '$this->data[\'$1\']', '$this->data[\'$1\']', '', '$this->data[\'$1\']', '$this->data[\'$1\']');

-- ----------------------------
-- Table structure for `img_comment`
-- ----------------------------
DROP TABLE IF EXISTS `img_comment`;
CREATE TABLE `img_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `user_name` char(30) NOT NULL DEFAULT '' COMMENT '用户名',
  `up` int(11) NOT NULL DEFAULT '0',
  `ip` char(20) NOT NULL COMMENT 'IP',
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '默认状态',
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `img_config`
-- ----------------------------
DROP TABLE IF EXISTS `img_config`;
CREATE TABLE `img_config` (
  `name` varchar(40) NOT NULL DEFAULT '' COMMENT '字符串',
  `value` text NOT NULL COMMENT '显示文字',
  `des` varchar(50) NOT NULL DEFAULT '' COMMENT '说明',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='语言包(简体中文)';

-- ----------------------------
-- Records of img_config
-- ----------------------------
INSERT INTO `img_config` VALUES ('web_name', 'IMGCMS图片网站管理程序', '');
INSERT INTO `img_config` VALUES ('admin_name', 'IMGCMS团队', '');
INSERT INTO `img_config` VALUES ('web_url', 'http://www.imgcms.com/', '');
INSERT INTO `img_config` VALUES ('web_path', '/', '');
INSERT INTO `img_config` VALUES ('web_email', '1216560669@qq.com', '');
INSERT INTO `img_config` VALUES ('web_qq', '1216560669', '');
INSERT INTO `img_config` VALUES ('web_icp', '京ICP10000001号', '');
INSERT INTO `img_config` VALUES ('web_hotkey', 'IMGCMS|IMGCMS图片管理程序', '');
INSERT INTO `img_config` VALUES ('web_keywords', 'IMGCMS|IMGCMS图片管理程序', '');
INSERT INTO `img_config` VALUES ('web_description', 'IMGCMS|IMGCMS图片管理程序', '');
INSERT INTO `img_config` VALUES ('web_copyright', 'Copyright © 2008-2016 <strong style=\"color:#FF6600\">ImgCMS.Inc</strong>, All Rights Reserved IMGCMS·Team 版权所有', '');
INSERT INTO `img_config` VALUES ('led_values', 'IMGCMS-LED展示效果-请去后台编辑文本内容跟链接网址', '');
INSERT INTO `img_config` VALUES ('led_ok', '1', '');
INSERT INTO `img_config` VALUES ('led_link', 'http://www.imgcms.com', '');
INSERT INTO `img_config` VALUES ('web_tongji', '', '');
INSERT INTO `img_config` VALUES ('upload_http_thumb', '0', '');
INSERT INTO `img_config` VALUES ('template_skin', 'default', '');
INSERT INTO `img_config` VALUES ('web_admin_cover', '1', '');
INSERT INTO `img_config` VALUES ('web_admin_pagenum', '10', '');
INSERT INTO `img_config` VALUES ('web_list_pagenum', '20', '');
INSERT INTO `img_config` VALUES ('web_maps_num', '100', '');
INSERT INTO `img_config` VALUES ('web_rss_num', '100', '');
INSERT INTO `img_config` VALUES ('web_comment', '1', '');
INSERT INTO `img_config` VALUES ('web_comment_status', '0', '');
INSERT INTO `img_config` VALUES ('web_comment_vcode', '1', '');
INSERT INTO `img_config` VALUES ('web_comment_pagenum', '10', '');
INSERT INTO `img_config` VALUES ('web_pick_hits', '100', '');
INSERT INTO `img_config` VALUES ('web_pick_up', '100', '');
INSERT INTO `img_config` VALUES ('web_adsensepath', '', '');
INSERT INTO `img_config` VALUES ('upload_path', 'attach', '');
INSERT INTO `img_config` VALUES ('upload_style', 'Y-m-d', '');
INSERT INTO `img_config` VALUES ('upload_thumb_type', '1', '');
INSERT INTO `img_config` VALUES ('upload_thumb_w', '100', '');
INSERT INTO `img_config` VALUES ('upload_thumb_h', '100', '');
INSERT INTO `img_config` VALUES ('upload_cut_pct', '90', '');
INSERT INTO `img_config` VALUES ('upload_resize', '1', '');
INSERT INTO `img_config` VALUES ('upload_max_w', '960', '');
INSERT INTO `img_config` VALUES ('upload_max_h', '960', '');
INSERT INTO `img_config` VALUES ('upload_water', '1', '');
INSERT INTO `img_config` VALUES ('upload_water_img', 'images/water.png', '');
INSERT INTO `img_config` VALUES ('upload_water_pct', '80', '');
INSERT INTO `img_config` VALUES ('upload_water_pos', '9', '');
INSERT INTO `img_config` VALUES ('upload_max_num', '30', '');
INSERT INTO `img_config` VALUES ('upload_dispatch', '1', '');
INSERT INTO `img_config` VALUES ('upload_safe_link', '0', '');
INSERT INTO `img_config` VALUES ('upload_safe_domain', 'img.com|imgcms.com', '');
INSERT INTO `img_config` VALUES ('upload_ftp', '0', '');
INSERT INTO `img_config` VALUES ('upload_ftp_host', '', '');
INSERT INTO `img_config` VALUES ('upload_ftp_user', '', '');
INSERT INTO `img_config` VALUES ('upload_ftp_pass', '', '');
INSERT INTO `img_config` VALUES ('upload_ftp_port', '', '');
INSERT INTO `img_config` VALUES ('upload_ftp_dir', '', '');
INSERT INTO `img_config` VALUES ('upload_ftp_url', '', '');
INSERT INTO `img_config` VALUES ('url_mode', '1', '');
INSERT INTO `img_config` VALUES ('url_suffix', '.html', '');
INSERT INTO `img_config` VALUES ('url_html_index', '0', '');
INSERT INTO `img_config` VALUES ('url_html_cate', '0', '');
INSERT INTO `img_config` VALUES ('url_html_content', '0', '');
INSERT INTO `img_config` VALUES ('url_html_maps', '0', '');
INSERT INTO `img_config` VALUES ('url_dir_cate', 'html', '');
INSERT INTO `img_config` VALUES ('url_dir_content', 'html/article', '');
INSERT INTO `img_config` VALUES ('url_dir_maps', 'html/maps', '');
INSERT INTO `img_config` VALUES ('url_create_time', '1', '');
INSERT INTO `img_config` VALUES ('url_create_num', '10', '');
INSERT INTO `img_config` VALUES ('html_cache_on', '0', '');
INSERT INTO `img_config` VALUES ('html_cache_index', '60', '');
INSERT INTO `img_config` VALUES ('html_cache_cate', '60', '');
INSERT INTO `img_config` VALUES ('html_cache_content', '60', '');
INSERT INTO `img_config` VALUES ('web_article_pagenum', '1', '');
INSERT INTO `img_config` VALUES ('url_route_on', '1', '');
INSERT INTO `img_config` VALUES ('url_route_rule_cate', 'list', '');
INSERT INTO `img_config` VALUES ('url_route_rule_article', 'article', '');
INSERT INTO `img_config` VALUES ('url_route_rule_tags', 'tags', '');
INSERT INTO `img_config` VALUES ('url_route_rule_search', 'search', '');
INSERT INTO `img_config` VALUES ('url_route', '0', '');
INSERT INTO `img_config` VALUES ('upload_water_text', 'IMGCMS·Team-技术支持', '');
INSERT INTO `img_config` VALUES ('upload_water_textcolor', 'ffffff', '');
INSERT INTO `img_config` VALUES ('upload_water_bgcolor', '000000', '');

-- ----------------------------
-- Table structure for `img_lang_chs`
-- ----------------------------
DROP TABLE IF EXISTS `img_lang_chs`;
CREATE TABLE `img_lang_chs` (
  `name` varchar(40) NOT NULL DEFAULT '' COMMENT '字符串',
  `value` text NOT NULL COMMENT '显示文字',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='语言包(简体中文)';

-- ----------------------------
-- Records of img_lang_chs
-- ----------------------------
INSERT INTO `img_lang_chs` VALUES ('cms_name', 'IMGCMS图片管理系统');
INSERT INTO `img_lang_chs` VALUES ('cms_ver', 'V1.6');

-- ----------------------------
-- Table structure for `img_link`
-- ----------------------------
DROP TABLE IF EXISTS `img_link`;
CREATE TABLE `img_link` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `oid` tinyint(3) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img_link
-- ----------------------------
INSERT INTO `img_link` VALUES ('1', 'IMGCMS官网', '', 'http://www.imgcms.com', '0', '1');
INSERT INTO `img_link` VALUES ('2', '百度', '', 'http://www.baidu.com', '2', '1');
INSERT INTO `img_link` VALUES ('3', '新浪', '', 'http://www.sina.com.cn', '3', '1');
INSERT INTO `img_link` VALUES ('4', '腾讯', '', 'http://www.qq.com', '4', '1');

-- ----------------------------
-- Table structure for `img_pick_list`
-- ----------------------------
DROP TABLE IF EXISTS `img_pick_list`;
CREATE TABLE `img_pick_list` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rule_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `article_id` int(11) NOT NULL DEFAULT '0',
  `is_picked` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否采集过',
  `p_content_urls` text NOT NULL COMMENT '分页地址',
  `p_content_page` mediumint(5) NOT NULL DEFAULT '0' COMMENT '当前页数',
  `do_time` int(11) NOT NULL DEFAULT '0' COMMENT '采集时间',
  PRIMARY KEY (`id`),
  KEY `rule_id` (`rule_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img_pick_list
-- ----------------------------

-- ----------------------------
-- Table structure for `img_pick_rule`
-- ----------------------------
DROP TABLE IF EXISTS `img_pick_rule`;
CREATE TABLE `img_pick_rule` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `webname` varchar(100) NOT NULL DEFAULT '',
  `cid` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '文章状态',
  `charset_type` char(10) NOT NULL DEFAULT '' COMMENT '目标网站编码',
  `listurl` text NOT NULL,
  `page_begin` int(10) NOT NULL DEFAULT '0',
  `page_end` int(10) NOT NULL,
  `page_step` int(10) NOT NULL,
  `listmoreurl` text NOT NULL,
  `list_content_rule` text NOT NULL,
  `list_url_rule` text NOT NULL,
  `list_url_join` varchar(250) NOT NULL DEFAULT '',
  `title_rule` text NOT NULL,
  `link_include_word` varchar(250) NOT NULL,
  `link_noinclude_word` varchar(250) NOT NULL,
  `link_replace_word` varchar(250) DEFAULT NULL,
  `title_replace_word` varchar(250) DEFAULT NULL,
  `content_rule` text NOT NULL,
  `file_rule` text NOT NULL,
  `file_include_word` varchar(250) NOT NULL,
  `file_noinclude_word` varchar(250) NOT NULL,
  `file_replace_word` varchar(250) DEFAULT NULL,
  `page_content_rule` text NOT NULL,
  `page_rule` text NOT NULL,
  `page_url_join` varchar(250) NOT NULL DEFAULT '',
  `page_include_word` varchar(250) NOT NULL DEFAULT '',
  `page_noinclude_word` varchar(250) NOT NULL DEFAULT '',
  `page_first` tinyint(1) NOT NULL DEFAULT '0' COMMENT '分页规则里是否包含有第1页',
  `last_pick_time` int(11) NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `p_list_page` mediumint(5) NOT NULL DEFAULT '0' COMMENT '列表处理到多少页',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='采集规则';

-- ----------------------------
-- Records of img_pick_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `img_tags`
-- ----------------------------
DROP TABLE IF EXISTS `img_tags`;
CREATE TABLE `img_tags` (
  `tag` varchar(30) NOT NULL,
  `title` varchar(250) NOT NULL COMMENT '文章标题',
  `article_id` int(11) NOT NULL COMMENT '文章ID',
  KEY `tag` (`tag`),
  KEY `article_id` (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img_tags
-- ----------------------------
