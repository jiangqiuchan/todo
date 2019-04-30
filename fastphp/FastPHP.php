<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/30
 * Time: 16:07
 */

 //初始化常量
 define('ROOT') or define('ROOT',_DIR_.'/');
 define('APP_PATH') or define('APP_PATH',dirname($_SERVER['SCRIPT_FILENAME']).'/')
 define('APP_DEBUG') or define('APP_DEBUG',FALSE);
 define('CONFIG_PATH') or define('CONFIG_PATH',APP_PATH.'config/')
 define('RUNTIME_APTH') or define('RUNTIME_APTH',APP_PATH.'runtime/')
 
 //类文件扩展名
 const EXT = '.class.php';
 
 //包含配置文件
 require APP_PATH.'config/config.php';
 
 //包含核心框架类
 require ROOT.'Core.php';
 
 //实例化核心类
 $fast = new Fast;
 $fast->run;