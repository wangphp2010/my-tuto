

<?php
$conn = @mysql_connect("localhost","root","wxz");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}

//选择数据库
mysql_select_db("test", $conn);

//创建数据表 SQL
$sql = "CREATE TABLE `guestbook` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `nickname` char(16) NOT NULL,
  `email` varchar(60) default NULL,
  `face` tinyint(2) unsigned NOT NULL default '1',
  `content` text NOT NULL,
  `createtime` int(10) unsigned NOT NULL default '0',
  `clientip` char(15) NOT NULL,
  `reply` text,
  `replytime` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";

if(!mysql_query($sql,$conn)){
    echo "创建数据表失败：". mysql_error();
} else {
    echo "创建数据表成功！";
}
?>
