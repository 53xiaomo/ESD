<?php
/*Template Name: index*/
get_header(); ?>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: 方正兰亭刊黑_GBK;
    }
    li{
        list-style-type: none;
    }
    .content {
        position: relative;
        height: auto;
        width: 100%;
        min-width: 1356px;
    }

    #company-show {
        height: 480px;
        width: 100%;
        background-color: #f7f7f7;
    }

    #service {
        height: 440px;
        width: 100%;
        text-align: center;
    }

    #service .service-introduction {
        width: 100%;
    }

    #service .service-introduction li {
        width: 200px;
        display: inline-block;
        padding: 21px;
    }

    #service .service-introduction li span {
        width: 150px;
        word-break: break-all;
        word-wrap: break-word;
    }

    .picture {
        position: relative;
        width: 110px;
        height: 110px;
        margin-left: 20px;
    }

    .before {
        position: absolute;
        width: 110px;
        height: 110px;
        z-index: 1;
        top: 0;
        left: 0;
        display: block;
    }

    .picture:hover .before {
        position: absolute;
        width: 110px;
        height: 110px;
        z-index: 1;
        top: 0;
        left: 0;
        display: none;
    }

    .picture .after {
        position: absolute;
        width: 110px;
        height: 110px;
        z-index: 2;
        top: 0;
        left: 0;
        display: none;
    }

    .picture:hover .after {
        position: absolute;
        width: 110px;
        height: 110px;
        z-index: 2;
        top: 0;
        left: 0;
        display: block;
    }

    .service-title {
        display: block;
        margin-top: -25px;
        font-weight: bold;
        font-size: 14px;
    }

    .service-detail {
        font-size: 11px;
    }

    #cases {
        color: white;
        position: relative;
        height: 1120px;
        background-color: #f5883b;
        text-align: center;
    }

    #cases-show {
        margin: 35px auto 0 auto;
        width: 1075px;
        height: 781px;
    }

    .A {
        position: relative;
        width: 350px;
        height: 252px;
        margin: 6px;
    }

    .caSes {
        position: absolute;
        width: 350px;
        height: 252px;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .caSes img {
        width: 350px;
        height: 252px;
    }

    .blOck {
        background:url("images/cases/show(2).png");
        position: absolute;
        width: 350px;
        height: 252px;
        z-index: 2;
        top: 0;
        left: 0;
        display: none;
    }

    .A:hover .blOck {
        background:url("images/cases/show(2).png");
        position: absolute;
        width: 350px;
        height: 252px;
        z-index: 2;
        top: 0;
        left: 0;
        display: block;
    }

    .include {
        position: relative;
        width: 350px;
        height: 252px;
    }

    .big {
        position: absolute;
    }

    .big img {
        margin-left: 121px;
        margin-top: 20px;
    }

    .small {
        position: absolute;
    }

    .small img {
        margin-left: 131.5px;
        margin-top: 49.5px;
    }

    .include span:nth-child(4) {
        display: block;
        margin-top: 115px;
    }

    #web-maker {
        height: 670px;
        width: 100%;
        position: relative;
    }

    #web-maker ul li {
        display: inline-block;
    }

    #web-maker ul li .img-container {
        width: 50%;
        height: 670px;
        position: relative;
    }

    .img-container .img1 {
        position: absolute;
        right: 185px;
        top: 225px;
    }

    .img-container .img2 {
        position: absolute;
        right: 75px;
        top: 158px;
    }

    .img-container .img3 {
        position: absolute;
        right: -71px;
        top: 96px;
    }

    .left {
        width: 100%;
        height: 50%;
        position: absolute;
        left: 0;
    }

    .right {
        width: 38%;
        height: 670px;
        position: absolute;
        right: 75px;
    }

    .more {
        margin-top: 70px;
    }

    .web-maker-text-content {
        padding-left: 100px;
        padding-top: 170px;
        padding-right: 20px;
    }

    #become {
        position: relative;
        height: 665px;
        background: url("images/become/2.png") no-repeat center;
        text-align: center;
    }

    #become .bg1 {
        width: 100%;
        height: 665px;
        background: url("images/become/3.png") no-repeat center;
        background-size: 100%;
    }

    .bg1 .bg2 {
        width: 100%;
        height: 665px;
        background: url("images/become/1.png") no-repeat center;
        background-size: cover;
    }

    .youhua {
        margin-top: 80px;
    }

    .youhua ul li {
        display: inline-block;
        background-color: white;
        width: 309px;
        height: 305px;
        margin: 7.5px;
    }

    .youhua ul li img {
        margin-top: 60px;
        width: 210px;
        height: 125px;
    }

    .youhua ul li:nth-child(2), .youhua ul li:nth-child(3), .youhua ul li:nth-child(4) {
        margin-left: 5px;
    }

    .youhua ul li span {
        word-wrap: break-word;
        word-break: break-all;
    }

    .youhua ul li span:first-of-type {
        font-weight: bold;
        font-size: 14px;
        position: relative;
        bottom: -20px;

    }

    .youhua ul li span:last-of-type {
        font-size: 11px;
        margin-bottom: 10px;
        position: relative;
        bottom: -20px;

    }

    #operate-service {
        padding-top: 70px;
        background: url("images/operate/wave.png") no-repeat bottom;
        width: 100%;
        height: 780px;
        text-align: center;

    }

    .operate-content {
        width: 100%;
        height: 500px;
        margin-top: 70px;
        display:inline;
    }

    .ON {
        right: 10px;
        width: 255px;
        margin-left: 62%;
        margin-top: 95px;
    }

    .TW {
        right: 100px;
        width: 255px;
        margin-top: 10px;
        margin-left: 30%;
    }

    .TH {
        background: url('images/operate/tbox.png') no-repeat;
        height: 130px;
        text-align: left;
        line-height: 20px;
        margin-left: 35%;
        position:absolute;
        margin-top: -20px;
        width: 434px;
    }

    .TO {
        left: 10px;
        width: 255px;
        margin-left: -117px;
    }

    .BO {
        left: 100px;
        width: 255px;
        margin-left: 108px;
        margin-top: -30px;
    }

    #links {
        height: 500px;
        width: 100%;
        background: url("images/links/wmap.png") no-repeat center;
        -webkit-background-size: cover;
        background-size: cover;
        text-align: center;
        padding-top: 35px;
    }
</style>
<body>
<div class="content">
    <div id="company-show"></div>
    <div id="service" class="text-center" style="padding-top: 80px">
        <span style="font-size: 20px;font-weight: bold;">一站式手机APP开发服务</span>
        <br>
        <span style="font-size: 8.5px">- SERVICE -</span>
        <ul class="service-introduction">
            <li>
                <div class="picture">
                    <div class="before">
                        <img src="images/service-imgs/and(1).png">
                    </div>
                    <div class="after">
                        <img src="images/service-imgs/and(2).png">
                    </div>
                </div>
                <br><br>
                <span class="service-title" style="color: #93c524">安卓APP开发</span><br>
                <span class="service-detail">致力于安卓手机APP开发更兼容，更便捷</span>
            </li>
            <li>
                <div class="picture">
                    <div class="before">
                        <img src="images/service-imgs/app(1).png">
                    </div>
                    <div class="after">
                        <img src="images/service-imgs/app(2).png">
                    </div>
                </div>
                <br><br>
                <span class="service-title" style="color: #afaca5">苹果APP开发</span><br>
                <span class="service-detail">致力于安卓手机APP开发更兼容，更便捷</span>
            </li>
            <li>
                <div class="picture">
                    <div class="before">
                        <img src="images/service-imgs/h5(1).png">
                    </div>
                    <div class="after">
                        <img src="images/service-imgs/h5(2).png">
                    </div>
                </div>
                <br><br>
                <span class="service-title" style="color: #ff6363">HTML5开发</span><br>
                <span class="service-detail">致力于安卓手机APP开发更兼容，更便捷</span>
            </li>
            <li>
                <div class="picture">
                    <div class="before">
                        <img src="images/service-imgs/chat(1).png">
                    </div>
                    <div class="after">
                        <img src="images/service-imgs/chat(2).png">
                    </div>
                </div>
                <br><br>
                <span class="service-title" style="color: #37c686">微信公众号开发</span><br>
                <span class="service-detail">致力于安卓手机APP开发更兼容，更便捷</span>
            </li>
        </ul>
    </div>
    <div id="cases" class="text-center">
        <div class="text-center" style="padding-top: 50px;">
            <span style="font-size: 20px;font-weight: bold">案例展示</span><br>
            <span style="font-size: 8.5px;">- CASE -</span>
        </div>
        <table id="cases-show">
            <tr>
                <td>
                    <div class="A">
                        <div class="caSes">
                            <img src="images/cases/case.png">
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
                                <span>指南针股票是指南针科技精心打造的一款金融股<br>票APP开发平台，在股票软件市场诸多好评的手<br>机炒股软件（金融/理财/证券/投资）...</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="A">
                        <div class="caSes">
                            <img src="images/cases/case.png">
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
                                <span>指南针股票是指南针科技精心打造的一款金融股<br>票APP开发平台，在股票软件市场诸多好评的手<br>机炒股软件（金融/理财/证券/投资）...</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="A">
                        <div class="caSes">
                            <img src="images/cases/case.png">
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
                                <span>指南针股票是指南针科技精心打造的一款金融股<br>票APP开发平台，在股票软件市场诸多好评的手<br>机炒股软件（金融/理财/证券/投资）...</span>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="A">
                        <div class="caSes">
                            <img src="images/cases/case.png">
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
                                <span>指南针股票是指南针科技精心打造的一款金融股<br>票APP开发平台，在股票软件市场诸多好评的手<br>机炒股软件（金融/理财/证券/投资）...</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="A">
                        <div class="caSes">
                            <img src="images/cases/case.png">
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
                                <span>指南针股票是指南针科技精心打造的一款金融股<br>票APP开发平台，在股票软件市场诸多好评的手<br>机炒股软件（金融/理财/证券/投资）...</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="A">
                        <div class="caSes">
                            <img src="images/cases/case.png">
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
                                <span>指南针股票是指南针科技精心打造的一款金融股<br>票APP开发平台，在股票软件市场诸多好评的手<br>机炒股软件（金融/理财/证券/投资）...</span>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="A">
                        <div class="caSes">
                            <img src="images/cases/case.png">
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
                                <span>指南针股票是指南针科技精心打造的一款金融股<br>票APP开发平台，在股票软件市场诸多好评的手<br>机炒股软件（金融/理财/证券/投资）...</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="A">
                        <div class="caSes">
                            <img src="images/cases/case.png">
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
                                <span>指南针股票是指南针科技精心打造的一款金融股<br>票APP开发平台，在股票软件市场诸多好评的手<br>机炒股软件（金融/理财/证券/投资）...</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="A">
                        <div class="caSes">
                            <img src="images/cases/case.png">
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
                                <span>指南针股票是指南针科技精心打造的一款金融股<br>票APP开发平台，在股票软件市场诸多好评的手<br>机炒股软件（金融/理财/证券/投资）...</span>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <div class="more">
            <a><img src="images/cases/button.png"></a>
        </div>
    </div>
    <div id="web-maker">
        <ul style="margin: 0;height: 670px">
            <li class="left">
                <div class="img-container">
                    <div class="img1"><img src="images/web-maker/case(2).png"></div>
                    <div class="img2"><img src="images/web-maker/case(1).png"></div>
                    <div class="img3"><img src="images/web-maker/case.png"></div>
                </div>
            </li>
            <li class="right">
                <div class="web-maker-text-content">
    <span class="web-maker-title"
          style="font-weight: bold;font-size: 20px">网站制作</span><br>
                    <span style="font-size: 17px;font-weight: bold">你想要的功能这儿都有</span><br>
                    <br>
                    <span style="width:100px;word-wrap: break-word;word-break: break-all;font-size: 12px">请在网站“模板”栏目选择模板，模板不分行业的只要选择自己喜欢的模板<br>就可以；填写网站管理信息，创建网站。登录网站管理中心，体验简易的<br>网站管理。</span><br>
                    <br>
                    <img src="images/web-maker/site.png">
                </div>
            </li>
        </ul>
    </div>
    <div id="become">
        <div class="bg1">
            <div class="bg2 text-center" style="padding-top: 20px">
                <span style="padding-top: 200px;font-size: 20px;font-weight: bold">如何让你的访客变成顾客？</span>
                <br>
                <span style="padding-top: 200px;font-size: 8.5px;color:#808080">- EXTENSION -</span>


                <div class="youhua">
                    <ul>
                        <li><img src="images/become/better(1).png"><br>
                            <span>代码优化</span>
                            <br><br>
                            <span>同一页面关键词出现多次，<br>有关键词堆砌的作弊嫌疑。</span>
                        </li>
                        <li><img src="images/become/better(2).png"><br>
                            <span>页面优化</span>
                            <br><br>
                            <span>同一页面关键词出现多次，<br>有关键词堆砌的作弊嫌疑。</span>
                        </li>
                        <li><img src="images/become/better(3).png"><br>
                            <span>外链优化</span>
                            <br><br>
                            <span>同一页面关键词出现多次，<br>有关键词堆砌的作弊嫌疑。</span>
                        </li>
                        <li><img src="images/become/better(4).png"><br>
                            <span>整网优化</span>
                            <br><br>
                            <span>同一页面关键词出现多次，<br>有关键词堆砌的作弊嫌疑。</span>
                        </li>
                    </ul>

                    <br>
                    <span style="font-size: 15px;font-weight: bold;color: white;position: relative;bottom: -20px;">不是任何网站都能排在前三！<br>能上百度第一页的网站，要达到什么要求？</span>
                    <br>
                    <br>
                    <span style="position: relative;bottom: -20px;">
                         <img src="images/web-maker/more.png">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div id="operate-service" class="text-center">
        <span style="font-size: 20px;font-weight: bold">运营服务</span><br>
        <span>- OPERATE -</span>
        <br>
        <div class="operate-content">
            <div class="col-lg-4 col-md-4 col-sm-4" style="width: 34%;height: 500px;padding: 0;float:left">
                <div class="ON">
                    <ul>
                        <li><img src="images/operate/performance.png"></li>
                        <li><span style="left: 8px;font-size: 14px;color: #aaadb4;margin-left: -150px;">性能</span></li>
                    </ul>
                </div>
                <div class="TW">
                    <ul>
                        <li><img src="images/operate/safety.png"></li>
                        <li><span style="margin-left: -150px;left: 8px;font-size: 14px;color:#ffc501">安全</span></li>
                    </ul>
                </div>
                <br>
                <div class="TH">
                    <ul>
                        <li><span style="position: relative;top: 30px;left: 2.5%;font-size: 10px">专业且详尽的咨询指导、更深入细致的安全审计、更高防护<br>等级的加固技术、覆盖更广泛的数据监测四项专业服务，融<br>合百度大数据、人工智能和移动客户端等多方面的...</span></li>
                        <li style="margin-top: 25px;margin-left: 370px;"><img src="images/operate/play.png"></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4" style="width: 34%;height: 577px;float:left;margin-top: 55px">
                <img src="images/operate/phone.png">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4" style="top: 130px;width: 32%;height: 360px;padding: 0;float:right;margin-top: 5px">
                <div class="TO">
                    <ul>
                        <li><img src="images/operate/backups.png"></li>
                        <li><span style="margin-left: 130px;right: 8px;font-size: 14px;color:#aaadb4">备份恢复</span></li>
                    </ul>
                </div>
                <div CLASS="BO">
                    <ul>
                        <li><img src="images/operate/week.png"></li>
                        <li><span style="right: 8px;font-size: 14px;color:#aaadb4;margin-left: 130px">7x24响应</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="links">
        <ul>
            <li><span style="font-size: 16px;font-weight:bold;color: white">合作伙伴</span></li>
        </ul>
    </div>
</div>
</body>
<?php get_footer()?>