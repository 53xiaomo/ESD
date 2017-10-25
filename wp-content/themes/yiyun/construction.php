<?php
/*Template Name: construction*/
get_header(); ?>
    <style xmlns="http://www.w3.org/1999/html">
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
            background: url("images/background.png") no-repeat;
            background-size: cover;
        }

        .text {
            font-size: 12px;
            color: #ffffff;
            text-align: right;
            width: 1280px;
            margin: 0 auto;
            position: relative;
            top: -75px;
        }

        .rectangle {
            border: 0;
            width: 1280px;
            height: 1371px;
            margin: 0 auto;
            box-shadow: 0 0 20px 0 #000;
            position: relative;
            top: -75px;
            background-color: #ffffff;
        }

        table {
            margin: 0 auto;
        }

        table td {
            font-size: 14px;
            border-collapse: collapse;
            border: 40px solid white;
            background-color: #f1f1f1;
        }

        td {
            text-align: center;
            width: 208px;
            height: 75px;
        }

        .press{
            position: absolute;
            margin-left: 1300px;
            margin-top: -100px;
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

        .case {
            margin: 0 auto;
            text-align: center;
        }

        .A {
            position: relative;
            width: 308px;
            height: 295px;
        }

        .caSes {
            position: absolute;
            width: 308px;
            height: 295px;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .caSes img {
            width: 308px;
            height: 295px;
        }

        .A:hover .blOck {
            background:url("images/cases/show(2).png");
            position: absolute;
            width: 308px;
            height: 295px;
            z-index: 2;
            top: 0;
            left: 0;
        }

        .include {
            position: relative;
            width: 308px;
            height: 295px;
        }

        .big {
            position: absolute;
        }

        .big img {
            margin-left: 100px;
            margin-top: 20px;
        }

        .small {
            position: absolute;
        }

        .small img {
            margin-left: 110.5px;
            margin-top: 49.5px;
        }

        .include span:nth-child(4) {
            display: block;
            margin-top: 130px;
            color: #fff;
        }

        .include span:nth-child(6) {
            color: #fff;
        }

        .case li {
            display: inline-block;
        }

        .case ul li:nth-child(2), .case ul li:nth-child(3), .case ul li:nth-child(4),
        .case ul li:nth-child(8), .case ul li:nth-child(9), .case ul li:nth-child(10),
        .case ul li:nth-child(14), .case ul li:nth-child(15), .case ul li:nth-child(16) {
            margin-left: 12px;
        }

        .case li span {
            display: block;
        }

        .page {
            text-align: center;
            margin-top: 55px;
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
    <div id="company-show">
        <img src="images/construction/--Website-Construction--.png">
    </div>
    <div class="text">首页&nbsp;&nbsp;>&nbsp;&nbsp;网站建设</div>
    <div class="white rectangle">
            <table>
                <tr>
                    <td>
                        全部案例
                    </td>
                    <td>
                        电子商务
                    </td>
                    <td>
                        社交通讯
                    </td>
                    <td>
                        生活服务
                    </td>
                    <td>
                        餐饮服务
                    </td>
                    <td>
                        旅游出行
                    </td>
                </tr>
                <tr>
                    <td>
                        企业信息
                    </td>
                    <td>
                        娱乐休闲
                    </td>
                    <td>
                        汽车服务
                    </td>
                    <td>
                        智能医疗
                    </td>
                    <td>
                        教育培训
                    </td>
                    <td>
                        金融理财
                    </td>
                </tr>
            </table>
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
            <div class="case">
                <ul>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <br><br>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <br><br>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                    <li>
                        <div class="A">
                            <div class="caSes">
                                <img src="images/cases/case(1).png">
                            </div>
                            <div class="blOck">
                                <div class="include">
                                    <div class="big">
                                        <img src="images/cases/show(3).png">
                                    </div>
                                    <div class="small">
                                        <img src="images/cases/show(4).png">
                                    </div><br>
                                    <span>- 指南针股票 -</span><br>
                                    <span>指南针股票是指南针科技精心打造的一款<br>金融股票APP开发平台，在股票软件市场<br>诸多好评的手机炒股软件（金融/理财/证<br>券/投资）...</span>
                                </div>
                            </div>
                        </div>
                        <span>指南针股票</span>
                    </li>
                </ul>
            </div>
            <div class="page">
                <br><br><img src="images/construction/previous.png"><span>&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;2&nbsp;&nbsp;3&nbsp;&nbsp;4&nbsp;&nbsp;..&nbsp;&nbsp;</span><img src="images/construction/next.png">
            </div>
    </div>
    <div class="icon">
    </div>
</div>
</body>
<?php get_footer()?>