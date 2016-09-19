<?php 

define('APP_PATH' , __DIR__.'/'); 
// define('BIND_MODULE','Admin');//创建新模块,创建成功后须注释或者删除这行代码才能正常访问Home
// define('BUILD_MODEL_LIST','User,Menu');//看上面的代码,在新建的Wap模块下build类User和Menu,没建成功有可能是有Wap那个文件了
define('THINK_PATH',realpath('../ThinkPHP').'/');
define('APP_DEBUG',true);
require(THINK_PATH.'ThinkPHP.php'); 


?>