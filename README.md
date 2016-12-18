# Amaya PHP Framework

<p><a href="#" target="_blank"><img src="https://img.shields.io/badge/version-0.1-green.svg" alt="Version" data-canonical-src="https://img.shields.io/badge/version-0.1-green.svg" style="max-width:100%;"></a>
<a href="http://opensource.org/licenses/MIT"><img src="https://camo.githubusercontent.com/890acbdcb87868b382af9a4b1fac507b9659d9bf/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f6c6963656e73652d4d49542d626c75652e737667" alt="License" data-canonical-src="https://img.shields.io/badge/license-MIT-blue.svg" style="max-width:100%;"></a></p>


 ![image](https://github.com/Tokyo-Lei/tokyo-lei.github.io/blob/master/logo.png)
<br>

基于Composer完成的MVC框架,自从有了依赖变成史上最最最简单的MVC！

此框架依赖第三方库：

Medoo 数据库

twig 模版引擎

whoops 调式错误

monolog 日志

macaw 路由

## 安装方式

不了解git下载的直接下载解压缩。

如果了解composer工具的，输入：

```html
composer require tokyo-lei/amaya
```
然后进行依赖下载（包括解压缩必须用composer工具执行）：
```html
composer update
```

如果你已经在根目录，可以用命令直接创建下载：

```html
composer create-project tokyo-lei/amaya 您的目录名称 dev-master --prefer-dist
```


## 目录架构
```html
   ├─app                 前后端文件夹
      └─ admin           后端文件夹
      └─ home            前端文件夹
      └─ route.php       路由文件
   ├─config              配置文件夹
      └─ config.inc.php  站点配置文件
      └─ data.inc.php    Medoo 数据配置文件
   ├─public              域名绑定目录，包括所有图片样式放置文件夹
   ├─system              各种函数、类文件夹，注意！没有核心文件 ：D
   .gitignore            git上传过滤文件 （可以删除）
   bootstrap.php         框架的各种加载启动文件
   composer.json         composer 配置文件，是框架重点的东西
   composer.lock         composer 锁定文件 具体使用自行百度。
   README.md             github的介绍（可以删除）
```
当下载后，目录自动生成几个文件：
```html
   vendor                composer 第三方库
   cache                 前台模版缓存
   logs                  日志文件
```



## 感谢
Beijing . 冷雪峰<br>
Guangzhou . 汶<br>
Beijing . 向军

此框架继续更新中！<br>
有疑问电邮：kyomini@qq.com


