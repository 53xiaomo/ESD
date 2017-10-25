<?php
/*Template Name: construction1*/
get_header(); ?>
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

        #company-show {
            line-height: 480px;
            text-align: center;
            height: 480px;
            width: 100%;
            background: url("images/construction/formwork.JPG") no-repeat;
            background-size: cover;
        }

        .text {
            font-size: 12px;
            color: #000000;
            text-align: left;
            width: 1280px;
            margin: 0 auto;
            position: relative;
            top: -45px;
        }

        .rectangle {
            border: 0;
            width: 1280px;
            height: 3285px;
            margin: 0 auto;
            box-shadow: 0 0 20px 0 #000;
            position: relative;
            top: -45px;
            background-color: #ffffff;
        }

        .web img{
            width: 120%;
            height: 3522px;
            margin-left: -128px;
            margin-top: -119px;
        }

        .press{
            position: absolute;
            margin-left: 1300px;
            margin-top: -3340px;
        }

        .input {
            position: relative;
        }

        .O {
            position: absolute;
            width: 41px;
            height: 41px;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .T {
            position: absolute;
            width: 143px;
            height: 41px;
            z-index: 2;
            top: 0;
            left: 0;
            display: none;
        }

        .input:hover .T {
            position: absolute;
            width: 143px;
            height: 41px;
            z-index: 2;
            top: 0;
            left: 0;
            display: block;
        }

        .icon {
            height: 118px;
            width: 100%;
            background: url("images/about/cloud-icon.png") no-repeat;
            background-size: cover;
        }
    </style>
<body>
<div class="content">
    <div id="company-show"></div>
    <div class="text">首页&nbsp;&nbsp;>&nbsp;&nbsp;网站建设&nbsp;&nbsp;>&nbsp;&nbsp;网站详情</div>
    <div class="white rectangle">
            <div class="web">
                <img src="images/construction/web.png">
            </div>
        <div class="press">
            <div class="input">
                <div class="O">
                    <img src="images/construction/car.png">
                </div>
                <div class="T">
                    <img src="images/construction/tip(1).png">
                </div>
            </div>
            <br><br><br>
            <div class="input">
                <div class="O">
                    <img src="images/construction/touch.png">
                </div>
                <div class="T">
                    <img src="images/construction/tip(2).png">
                </div>
            </div>
            <br><br><br>
            <div class="input">
                <div class="O">
                    <img src="images/construction/alipay.png">
                </div>
                <div class="T">
                    <img src="images/construction/tip(3).png">
                </div>
            </div>
        </div>
    </div>
    <div class="icon">
    </div>
</div>
</body>
<?php get_footer()?>