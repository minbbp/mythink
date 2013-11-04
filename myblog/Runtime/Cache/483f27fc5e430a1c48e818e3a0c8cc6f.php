<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>myblog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <style type="text/css">
      body{
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="masthead">
        <h3 class="muted">myblog</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="#">主页</a></li>
                <li><a href="#">关于</a></li>
                <li><a href="#">历程</a></li>
                <li><a href="#">大学</a></li>
                <li><a href="#">php</a></li>
                <li><a href="#">jquery</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span8">

         <h3 class="text-center"> 文章内容</h3>
         <div class="content">
            文章内容，文章内容，滴答滴答滴答滴答滴答滴答滴答滴答滴答滴答滴答滴答滴答滴答滴答滴答点点滴滴垃圾发哦惹麻烦啦大宽带免费拉面拉米夫定拉米夫定拉美等法律毛量大免费拉地方啦麻辣豆腐拉大面对男腐女基地的噩噩。
         </div>

         <div class="text-left">
          <hr/>
          <h4> 评论信息：</h4>
          <ul class="unstyled">
            <li>
              <p>评论内容 ，打电话就近<p>
              <p class="text-right">兰陵笑笑生 2013/12/10 评</p>
               <hr/>
            </li>
              <li>
              <p>评论内容 ，打电话就近<p>
              <p class="text-right">兰陵笑笑生 2013/12/10 评</p>
               <hr/>
            </li>
          </ul>
        
          <h4>添加评论</h4>
          <form action="__URL__/addcoment/2">
            <label for="username">昵称：</label>
            <input type="text" class="" name="username" id="username"/>
            <label for=""username>评论内容：</label>
            <textarea name="username" class="span7" rows="6"></textarea>
            <p ><input value="添加评论" class="btn btn-primary" type="submit"/></p>
          </form>
         </div>
        </div>
        <div class="span4">
          <div>
            <h3>热门标签</h3>
            <ul class="unstyled inline">
              <li><a class="label label-info">linux（200）</a></li>
              <li><a class="label label-info">linux（209）</a></li>
              <li><a class="label label-info">linux（20）</a></li>
              <li><a class="label label-info">jquery js（20）</a></li>
            </ul>
          </div>
          <div>
            <h3>最新评论</h3>
             <ul class="unstyled text-center">
              <li><a>{爱上发布文章}: 这篇文章很不错哦！</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row-fluid">
        <h3>友情链接</h3>
         <hr/>
        <ul class="unstyled inline">
          <li> <a href="#">红星美凯龙</a></li>
          <li> <a href="#">红星美凯龙</a></li>
          <li> <a href="#">红星美凯龙</a></li>
          <li> <a href="#">红星美凯龙</a></li>
          <li> <a href="#">红星美凯龙</a></li>
        </ul>
      </div>
        <div class="footer">
        <p>&copy; z_huaxue@sina.com</p>
      </div>
    </div>
    <script src="__PUBLIC__/bootstrap/js/jquery-1.10.2.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>