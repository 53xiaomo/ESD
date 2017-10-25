<?php
/*Template Name: contact*/
get_header(); ?>
    <style>
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
            height: 813px;
            margin: 0 auto;
            box-shadow: 0 0 20px 0 #000;
            position: relative;
            top: -75px;
            background-color: #ffffff;
        }

        .area {
            padding: 52px 61px;
            width: 1280px;
            height: 813px;
        }

        .left {
            width: 873px;
            height: 645px;
            display: inline;
            position: absolute;
        }

        .table {
            width: 873px;
            height: 165px;
            margin: 0;
            display: block;
        }

        table {
            border-collapse: collapse;
            width: 873px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th {
            background-color: #f2f2f2;
            font-size: 14px;
            font-weight: bold;
            color: #7d7d7d;
            height: 46px;
        }

        td {
            list-style: none;
            font-size: 13px;
            font-weight: bold;
            color: #7d7d7d;
            height: 119px;
        }

        .fixation {
            display: inline-block;
            margin-left: 129.75px;
        }

        .fixation li {
            font-weight: bold;
            display: inline-block;
            font-family: Arial;
        }

        .mobile {
            display: inline-block;
            margin-left: 129.75px;
        }

        .mobile li {
            font-weight: bold;
            display: inline-block;
            font-family: Arial;
        }

        .location {
            width: 600px;
            height: 70px;
            display: block;
            margin-top: 45px;
        }

        .location .text {
            width: 500px;
            height: 40px;
            margin: 0;
            list-style: none;
            text-align: left;
            display: inline-block;
            top: 15px;
        }

        .right{
            width: 247px;
            height: 705px;
            display: inline;
            float: right;
        }

        .Erweima{
            display: block;
            width: 247px;
            height: 345px;
        }

        .picture{
            list-style: none;
        }

        .picture li {
            margin-top: 20px;
        }

        .icon {
            height: 117px;
            width: 100%;
            background: url("images/about/cloud-icon.png") no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>

    <style type="text/css">
        #map {
            width: 873px;
            height: 434px;
            display: block;
        }
    </style>
<body>
<div class="content">
    <div class="content1">
        <div><img src="images/Contact/contact.png"></div>
    </div>
    <div class="text">首页&nbsp;&nbsp;>&nbsp;&nbsp;联系我们</div>
    <div class="white rectangle">
        <div class="area">
            <div class="left">
                <div class="table">
                    <table>
                        <tr>
                            <th>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系我们
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="fixation">
                                    <img src="images/Contact/fixed.png">
                                    <li style="font-size: 13px;color: #7d7d7d">固话</li>
                                    <li style="font-size: 20px;color: #000000">(0757)-12345678</li>
                                </div>
                                <div class="mobile">
                                    <img src="images/Contact/Phone.png">
                                    <li style="font-size: 13px;color: #7d7d7d;display: inline-block">电话</li>
                                    <li style="font-size: 20px;color: #000000">137 9869 0402<br>159 1900 2005</li>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="location">
                    <img src="images/Contact/Location.png">
                    <div class="text">
                        <li style="font-size: 16px;font-weight: bold;color:#393836">物联天下</li>
                        <li style="font-size: 12px;color: #393836">地址：佛山市佛山新城乐从大道西12号物联天下产业园B座116</li>
                    </div>
                </div>
                <div id="map"></div>
            </div>
            <div class="right">
                <div class="Erweima">
                    <img src="images/Contact/QR.png">
                </div>
                <div class="picture">
                    <li><img src="images/Contact/03.png"></li>
                    <li><img src="images/Contact/03.png"></li>
                    <li><img src="images/Contact/03.png"></li>
                </div>
            </div>
        </div>
    </div>
    <div class="icon">
    </div>
</div>
<script type="text/javascript">
    var map = new BMap.Map("map");          // 创建地图实例
    var point = new BMap.Point(113.081728, 22.961775);  // 创建点坐标
    map.centerAndZoom(point, 17);                 // 初始化地图，设置中心点坐标和地图级别
</script>
</body>
<?php get_footer()?>