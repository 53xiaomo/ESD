<?php
/*Template Name: about*/
get_header()?>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 方正兰亭刊黑_GBK;
        }

        .content {
            position: relative;
            height: auto;
            width: 100%;
        }

        .content1 {
            height: 480px;
            width: 100%;
            background: url("images/background.png") no-repeat;
            background-size: cover;
        }

        .content1 div {
            text-align: center;
            line-height: 480px;
        }

        .content2 {
            height: 1070px;
        }

        .content2 .content2-1 ul {
            position: relative;
            top: -60px;
            text-align: center;
        }

        .content2 .content2-1 ul li {
            display: inline-block;
            margin-left: 20px;
            margin-right: 20px;
            height: 260px;
            background-size: cover;
            width: 260px;
            box-shadow: 0 0 20px 2px #9d9d9d;
        }

        .content2 .content2-1 ul li div {
            position: relative;
            background: url("images/about/PC.png") no-repeat;
            width: 100%;
            height: 100%;
        }

        .content2-1 ul li div .span1 {
            font-size: 16px;
            font-weight: bold;
            top: 160px;
            position: relative;
        }

        .content2-1 ul li div .span2 {
            font-size: 11px;
            position: relative;
            top: 170px;
        }

        .content .content2-2 .heading {
            text-align: center;
        }

        .content .content2-2 .con {
            display: inline-block;
            margin-left: 189px;
            padding: 28px 16px 26px 16px;
        }

        .content2-2-imgs li {
            display: inline-block;
        }

        .content2 .content2-2 {
            margin: -41px auto 0 auto;
            height: 813px;
            padding-top: 47px;
            position: relative;
            width: 1280px;
            box-shadow: 0 0 20px 2px #9d9d9d;
        }

        .img-container *, .img-container {
            padding: 0;
        }

        .icon {
            height: 118px;
            width: 100%;
            background: url("images/about/cloud-icon.png") no-repeat;
            background-size: cover;
            margin-top: 2px;
        }
    </style>
<body>
<div class="content">
    <div class="content1">
        <div><img src="images/about/--About-Us--.png"></div>
    </div>
    <div class="content2">
        <div class="content2-1">
            <ul>
                <li>
                    <div>
                        <span class="span1">专业</span>
                        <br><span class="span2">死磕细节，就是我的态度<br>
                       &nbsp
                    </span>
                    </div>
                </li>
                <li>
                    <div style="background: url('images/about/Eye.png') no-repeat;background-size: cover">
                        <span class="span1">专注</span>
                        <br><span class="span2">品牌APP从&nbsp;&nbsp;“落地”&nbsp;&nbsp;到&nbsp;&nbsp;“腾飞”&nbsp;&nbsp;<br>我们从不怠慢</span>
                    </div>
                </li>
                <li>
                    <div style="background: url('images/about/User-2.png') no-repeat;background-size: cover">
                        <span class="span1">咬合</span>
                        <br><span class="span2">团队是手足<br>保证最自如疾风的响应速度</span>
                    </div>
                </li>
                <li>
                    <div style="background: url('images/about/Like.png') no-repeat;background-size: cover">
                        <span class="span1">极致</span>
                        <br><span class="span2">追求没有天花板<br>留下口碑没有瓶颈</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="content2-2 container-fluid">
            <div class="heading">
                <span style="font-size: 14px;font-weight: bold;text-align: center;">- 佛山市逸云计算机科技有限公司 -</span>
            </div>
            <div class="con">
                <span style="font-size: 11px;text-align: left">逸云科技专注于互联网领域的手机APP研发，是一家领先的致力于一站式整体APP开发解决方案。始终致力于企业移动APP开发整体解决方案的产品策划、<br>设计咨询、定制研发等解决客户的应用需求，帮助企业级客户迅速布局移动互联网。凭借五年的项目经验，两百多个成功案例，坚持以用户体验为标准，<br>以客户满意为原则，让产品与理念深度完美结合。<br>卓尔不凡•悠逸云端&nbsp;/&nbsp;逸云科技坚持不懈创新，置身于最先进的技术潮流，携您进入互联网时代的云端，为您提供更轻松的工作环境和更优质的生活体验。</span>
            </div>
            <div class="container-fluid img-container" style="width: 1162px;height: 290px">
                <div class="col-sm-6 col-md-6  col-lg-6" style="margin: 0 auto;position: absolute;left: 47px;">
                    <img src="images/about/caia412-26813.png">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6" style="position: absolute;right: 118px;">
                    <img src="images/about/plp788m1040249.png">
                </div>
            </div>
            <div class="container-fluid img-container" style="width: 1162px;height: 290px;margin-top: 6px;">
                <div class="col-sm-6 col-md-6  col-lg-6" style="margin: 0 auto;position: absolute;left: 47px;">
                    <img src="images/about/1h-15682.png">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6" style="position: absolute;right: 115px;">
                    <img src="images/about/is09aa5y3.png">
                </div>
            </div>
        </div>
    </div>
    <div class="icon">
    </div>
</div>
</body>
<?php get_footer()?>