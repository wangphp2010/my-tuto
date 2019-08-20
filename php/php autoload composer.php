
<?php
/*
写L'autoloader
先下载composer
https://getcomposer.org/download/

依次执行下面语句
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

安装完成

使用

php composer.phar 帮助
php composer.phar init 初始化

自动创建了composer.json
在composer.json里增加
"autoload":{
	"psr-4":
	{
		"App\\":"class/" #定义文件夹class为App , 可以使用use App\....
	}
}

改完后运行
php composer.phar dump-autoload 建立文件vendor/autoload.php

在需要的文件里加 
require 'vendor/autoload.php';
use App\...





*/
 

