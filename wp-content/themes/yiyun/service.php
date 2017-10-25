<?php
/*Template Name: service*/
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
            height: 2630px;
            margin: 0 auto;
            box-shadow: 0 0 20px 0 #000;
            position: relative;
            top: -75px;
            background-color: #ffffff;
        }

        .area {
            padding: 70px;
        }

        .communication {
            border-left-style: dashed;
            border-bottom-style: dashed;
            border-color: #b5b5b5;
            height: 360px;
            width: 870px;
            margin: 0 auto;
            display: block;
        }

        .num1 {
            font-size: 50px;
            font-family: "Arial";
            color: #FA8653;
            position: absolute;
            margin-top: -17px;
            margin-left: -16px;
            background-color: white;
        }

        .ist1 {
            float: left;
            text-align: left;
            position: relative;
            top: -5px;
            left: 56px;
            width: 877px;
            height: 360px;
        }

        .W1 {
            width: 366px;
            height: 180px;
            float: left;
        }

        .W1 span:nth-child(1) {
            font-size: 30px;
        }

        .W1 span:nth-child(2) {
            font-size: 11px;
        }

         .C1 {
            height: 312px;
            width: 511px;
            float: right;
            position: relative;
            top: 30px;
            right: 100px;
        }

        .confirm {
            border-right-style: dashed;
            border-bottom-style: dashed;
            border-color: #b5b5b5;
            height: 360px;
            width: 870px;
            margin: 0 auto;
            display: block;
        }

        .ist2 {
            float: right;
            text-align: left;
            position: relative;
            width: 870px;
            height: 360px;
            right: -50px;
        }

        .C2 {
            width: 435px;
            height: 360px;
            float: left;
        }

        .C2 img {
            float: left;
            position: relative;
            top: 42.5px;
            left: 56px;
        }

        .W2 {
            width: 435px;
            height: 180px;
            float: right;
            margin-top: 70px;
        }

        .W2 span:nth-child(1) {
            font-size: 30px;
        }

        .W2 span:nth-child(2) {
            font-size: 11px;
        }

        .num2 {
            font-size: 50px;
            font-family: "Arial";
            color: #FA8653;
            position: absolute;
            margin-top: 50px;
            margin-left: 807px;
            background-color: white;
        }

        .setting {
            border-left-style: dashed;
            border-bottom-style: dashed;
            border-color: #b5b5b5;
            height: 360px;
            width: 870px;
            margin: 0 auto;
            display: block;
        }

        .ist3 {
            float: left;
            text-align: left;
            position: relative;
            width: 870px;
            height: 360px;
            right: -45px;
        }

        .num3 {
            font-size: 50px;
            font-family: "Arial";
            color: #FA8653;
            position: absolute;
            margin-top: 75px;
            margin-left: -15px;
            background-color: white;
        }

        .W3{
            width: 435px;
            height: 180px;
            float: left;
            margin-top: 90px;
        }

        .W3 span:nth-child(1) {
            font-size: 30px;
        }

        .W3 span:nth-child(2) {
            font-size: 11px;
        }

        .C3{
            width: 435px;
            height: 360px;
            float: right;
        }

        .C3 img {
            float: right;
            position: relative;
            top: 28px;
            right: 56px;
        }

        .exploitation {
            border-right-style: dashed;
            border-bottom-style: dashed;
            border-color: #b5b5b5;
            height: 360px;
            width: 870px;
            margin: 0 auto;
            display: block;
        }

        .ist4 {
            float: right;
            text-align: left;
            position: relative;
            width: 870px;
            height: 360px;
            right: -10px;
        }

        .C4{
            width: 435px;
            height: 180px;
            float: left;
        }

        .C4 img {
            float: left;
            position: relative;
            top: 16px;
            left: 56px;
        }

        .W4 {
            width: 435px;
            height: 180px;
            float: right;
            margin-top: 75px;
            margin-right: -40px;
        }

        .W4 span:nth-child(1) {
            font-size: 30px;
        }

        .W4 span:nth-child(2) {
            font-size: 11px;
        }

        .num4 {
            font-size: 50px;
            font-family: "Arial";
            color: #FA8653;
            position: absolute;
            margin-top: 55px;
            margin-left: 850px;
            background-color: white;
        }

        .test {
            border-left-style: dashed;
            border-bottom-style: dashed;
            border-color: #b5b5b5;
            height: 360px;
            width: 870px;
            margin: 0 auto;
            display: block;
        }

        .num5 {
            font-size: 50px;
            font-family: "Arial";
            color: #FA8653;
            position: absolute;
            margin-top: 75px;
            margin-left: -15px;
            background-color: white;
        }

        .ist5 {
            float: left;
            text-align: left;
            position: relative;
            width: 870px;
            height: 360px;
            margin-left: 65px;
        }

        .W5 {
            width: 435px;
            height: 180px;
            float: left;
            margin-top: 90px;
        }

        .W5 span:nth-child(1) {
            font-size: 30px;
        }

        .W5 span:nth-child(2) {
            font-size: 11px;
        }

        .C5 {
            width: 435px;
            height: 360px;
            float: right;
        }

        .C5 img {
            float: right;
            position: relative;
            top: 29.5px;
            right: 80px;
        }

        .check {
            border-right-style: dashed;
            border-bottom-style: dashed;
            border-color: #b5b5b5;
            height: 360px;
            width: 870px;
            margin: 0 auto;
            display: block;
        }

        .num6 {
            font-size: 50px;
            font-family: "Arial";
            color: #FA8653;
            position: absolute;
            margin-top: 75px;
            margin-left: 853px;
            background-color: white;
        }

        .ist6 {
            float: right;
            text-align: left;
            position: relative;
            width: 870px;
            height: 360px;
            left: 45px;
        }

        .C6 {
            width: 435px;
            height: 360px;
            float: left;
        }

        .C6 img {
            float: left;
            position: relative;
            top: 61.5px;
        }

        .W6 {
            width: 435px;
            height: 180px;
            float: right;
            margin-right: -25px;
            margin-top: 90px;
        }

        .W6 span:nth-child(1) {
            font-size: 30px;
        }

        .W6 span:nth-child(2) {
            font-size: 11px;
        }

        .operations {
            border-left-style: dashed;
            border-color: #b5b5b5;
            height: 360px;
            width: 870px;
            margin: 0 auto;
            display: block;

        }

        .num7 {
            font-size: 50px;
            font-family: "Arial";
            color: #FA8653;
            position: absolute;
            margin-top: 105px;
            margin-left: -15px;
            background-color: white;
        }

        .ist7 {
            float: left;
            text-align: left;
            position: relative;
            width: 870px;
            height: 360px;
            left: 45px;
        }

        .W7 {
            width: 435px;
            height: 180px;
            float: left;
            margin-top: 120px;
        }

        .W7 span:nth-child(1) {
            font-size: 30px;
        }

        .W7 span:nth-child(2) {
            font-size: 11px;
        }

        .C7 {
            width: 435px;
            height: 360px;
            float: right;
        }

        .C7 img {
            float: right;
            position: relative;
            top: 20.5px;
            right: 56px;
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
        <img src="images/Service/flow.png">
    </div>
    <div class="text">首页&nbsp;&nbsp;>&nbsp;&nbsp;服务流程</div>
    <div class="white rectangle">
        <div class="area">
            <div class="communication">
                <div class="num1">1</div>
                <div class="ist1">
                    <div class="W1">
                    <span>前 期 沟 通<br></span>
                    <span>>&nbsp;&nbsp;双方相互提供相关资料;<br>或MSN/QQ/电话远程沟通（主要针对外省市客户）;<br>>&nbsp;&nbsp;了解分析客户的需求与基本概况;<br>>&nbsp;&nbsp;分析服务模式或专业知识是否符合、满足客户的需求;<br>>&nbsp;&nbsp;明确合作意向;</span>
                    </div>
                    <div class="C1">
                        <img src="images/Service/a.png">
                    </div>
                </div>
            </div>
            <div class="confirm">
                <div class="ist2">
                    <div class="C2">
                    <img src="images/Service/b.png">
                    </div>
                    <div class="W2">
                    <span>需 求 确 认<br></span>
                    <span>>&nbsp;&nbsp;双方相互提供相关资料;<br>或MSN/QQ/电话远程沟通（主要针对外省市客户）;<br>>&nbsp;&nbsp;了解分析客户的需求与基本概况;<br>>&nbsp;&nbsp;分析服务模式或专业知识是否符合、满足客户的需求;<br>>&nbsp;&nbsp;明确合作意向;</span>
                    </div>
                    <div class="num2">2</div>
                </div>
            </div>
            <div class="setting">
                <div class="num3">3</div>
                <div class="ist3">
                    <div class="W3">
                    <span>产 品 设 置<br></span>
                    <span>>&nbsp;&nbsp;双方相互提供相关资料;<br>或MSN/QQ/电话远程沟通（主要针对外省市客户）;<br>>&nbsp;&nbsp;了解分析客户的需求与基本概况;<br>>&nbsp;&nbsp;分析服务模式或专业知识是否符合、满足客户的需求;<br>>&nbsp;&nbsp;明确合作意向;</span>
                    </div>
                    <div class="C3">
                        <img src="images/Service/c.png">
                    </div>
                </div>

            </div>
            <div class="exploitation">
                <div class="ist4">
                    <div class="C4">
                    <img src="images/Service/d.png">
                    </div>
                    <div class="W4">
                    <span>程 序 开 发<br></span>
                    <span>>&nbsp;&nbsp;双方相互提供相关资料;<br>或MSN/QQ/电话远程沟通（主要针对外省市客户）;<br>>&nbsp;&nbsp;了解分析客户的需求与基本概况;<br>>&nbsp;&nbsp;分析服务模式或专业知识是否符合、满足客户的需求;<br>>&nbsp;&nbsp;明确合作意向;</span>
                    </div>
                </div>
                <div class="num4">4</div>
            </div>
            <div class="test">
                <div class="num5">5</div>
                <div class="ist5">
                    <div class="W5">
                    <span>产 品 测 试<br></span>
                    <span>>&nbsp;&nbsp;双方相互提供相关资料;<br>或MSN/QQ/电话远程沟通（主要针对外省市客户）;<br>>&nbsp;&nbsp;了解分析客户的需求与基本概况;<br>>&nbsp;&nbsp;分析服务模式或专业知识是否符合、满足客户的需求;<br>>&nbsp;&nbsp;明确合作意向;</span>
                    </div>
                    <div class="C5">
                    <img src="images/Service/e.png">
                    </div>
                </div>
            </div>
            <div class="check">
                <div class="ist6">
                    <div class="C6">
                        <img src="images/Service/f.png">
                    </div>
                    <div class="W6">
                    <span>交 付 验 收<br></span>
                    <span>>&nbsp;&nbsp;双方相互提供相关资料;<br>或MSN/QQ/电话远程沟通（主要针对外省市客户）;<br>>&nbsp;&nbsp;了解分析客户的需求与基本概况;<br>>&nbsp;&nbsp;分析服务模式或专业知识是否符合、满足客户的需求;<br>>&nbsp;&nbsp;明确合作意向;</span>
                    </div>
                </div>
                <div class="num6">6</div>
            </div>
            <div class="operations">
                <div class="num7">7</div>
                <div class="ist7">
                    <div class="W7">
                    <span>技 术 运 维<br></span>
                    <span>>&nbsp;&nbsp;双方相互提供相关资料;<br>或MSN/QQ/电话远程沟通（主要针对外省市客户）;<br>>&nbsp;&nbsp;了解分析客户的需求与基本概况;<br>>&nbsp;&nbsp;分析服务模式或专业知识是否符合、满足客户的需求;<br>>&nbsp;&nbsp;明确合作意向;</span>
                    </div>
                    <div class="C7">
                        <img src="images/Service/g.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="icon">
    </div>
</div>
</body>
<?php get_footer()?>