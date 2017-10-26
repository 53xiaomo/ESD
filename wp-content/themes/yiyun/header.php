<?php
/**
 * Created by PhpStorm.
 * User: mosiqi
 * Date: 17-9-30
 * Time: 上午11:02
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - "; bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "搜索结果"; echo " - "; bloginfo('name');
        } elseif (is_404() ) {
            echo '页面未找到!';
        } else {
            wp_title('',true);
        } ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
    <script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style type="text/css">
        #map {
            width: 873px;
            height: 434px;
            display: block;
        }
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=92c63bTsMBLD3ju7RiMztrKzRt104GOj">
        //v2.0版本的引用方式：src="http://api.map.baidu.com/api?v=2.0&ak=您的密钥"
        //v1.4版本及以前版本的引用方式：src="http://api.map.baidu.com/api?v=1.4&key=您的密钥&callback=initialize"
    </script>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 方正兰亭刊黑_GBK;
            text-decoration: none;
        }

        header {
            margin: 0 auto;
            width: 100%;
            min-width: 1300px;
        }

        .logo {
            margin: 15px 16% 15px 17%;
            display: inline-block;
            height: 50px;
        }

        header .nav {
            display: inline-flex;
            position: absolute;
            margin-top: 15px;
            width: 701px;
            white-space: nowrap;
            overflow: hidden;
        }

        .nav li {
            text-align: center;
            display: inline-block;
            font-size: 11.5px;
            margin: 14px;
        }

        .black{
            color: black;
        }

        .Color {
            color: #FA8653;
        }
    </style>
</head>
<?php flush(); ?>
<script>
 function addColor(id) {
    console.log(id);
     $(".navigation li a").addClass('black');
    if (id == 32){

        $(".navigation li:eq(0) a").addClass('Color');
    }
    if (id == 34){
        $(".navigation li:eq(1) a").addClass('Color');
    }
    if (id == 41){
        $(".navigation li:eq(2) a").addClass('Color');
    }
    if (id == 50){
        $(".navigation li:eq(3) a").addClass('Color');
    }
    if (id == 43){
        $(".navigation li:eq(4) a").addClass('Color');
    }
    if (id == 54){
        $(".navigation li:eq(5) a").addClass('Color');
    }
    if (id == 39){
        $(".navigation li:eq(6) a").addClass('Color');
    }
    if (id == 30){
        $(".navigation li:eq(7) a").addClass('Color');
    }
 }
</script>
<body>
<header>
    <div class="logo">
        <a><img src="images/clogo.png"></a>
    </div>
    <div class="nav">
        <ul class="navigation">
        <?php
        wp_list_pages('depth=1&title_li=&sort_column=menu_order');
        echo "<script>addColor(".get_the_ID().");</script>"
        ?>
        </ul>
    </div>
</header>
