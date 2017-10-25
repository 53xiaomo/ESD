<?php
/*Template Name: new*/
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
            min-width: 1280px;
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
            height: auto;
            margin: 0 auto;
            box-shadow: 0 0 20px 0 #000;
            position: relative;
            top: -75px;
            background-color: #ffffff;
        }

        .essay {
            width: 773px;
            height: auto;
            margin-left: 78px;
            padding-top: 53px;
        }

        .recommend {
            position: absolute;
            width: 270px;
            height: 1000px;
            float: right;
            top: 0;
            right: 0;
            margin-right: 79px;
        }

        .num {
            float: right;
        }

        /*.clear {*/
        /*clear: both;*/
        /*}*/

        .R {
            position: relative;
            width: 270px;
            height: 179px;
            margin-bottom: 50px;
        }

        .E {
            position: absolute;
            width: 270px;
            height: 179px;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .E img {
            width: 270px;
            height: 179px;
        }

        .block {
            background: url("images/News/black.png");
            position: absolute;
            width: 270px;
            height: 179px;
            z-index: 2;
            top: 0;
            left: 0;
            display: none;
        }

        .R:hover .block {
            background: url("images/News/black.png");
            position: absolute;
            width: 270px;
            height: 179px;
            z-index: 2;
            top: 0;
            left: 0;
            display: block;
        }

        .include {
            position: relative;
            width: 277px;
            height: 187px;
        }

        .N {
            position: absolute;
        }

        .N img {
            margin-left: 118px;
            margin-top: 64px;
        }

        .R .include span {
            color: #ffffff;
            font-size: 20px;
            margin-top: 95px;
            position: absolute;
            margin-left: 125px;
        }

        .R .head {
            display: inline-block;
            font-size: 11px;
            color: #424242;
            margin-top: 165px;
            margin-left: 0;
        }

        .press {
            position: absolute;
            top: 0;
            right: -185px;
            background-color: #FA8653;
            width: 106px;
            height: 200px;
            text-align: center;
        }

        .press ul {
            position: relative;
            margin-bottom: 10px;
            padding-top: 1px;
        }

        .press ul li {
            margin: 23px;
            font-size: 11px;
            color: #ffffff;
        }

        .page {
            text-align: center;
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
            <img src="images/News/center.png">
        </div>
        <div class="text">首页&nbsp;&nbsp;>&nbsp;&nbsp;新闻中心</div>
        <div class="white rectangle">
            <div class="essay">
                <div id="page-allpost">
                    <?php
                    $paged = get_query_var("paged") ? get_query_var("paged") : 1;
                    $arr = array("cat" => 7, 'showposts' => 3, 'paged' => $paged);
                    query_posts($arr); ?>
                    <?php if (have_posts()): ?><?php while (have_posts()): the_post(); ?>
                        <?php
                        $first_img = '';
                        ob_start();
                        ob_end_clean();
                        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                        $first_img = $matches [1] [0];
                        if (empty($first_img)) {
                            $first_img = '';//bloginfo('template_url'). '/images/default-thumb.jpg';
                        }
                        ?>
                        <div>
                            <img src="<?php echo $first_img; ?>">
                            <div class="date">
                                <span style="font-size: 10px;color: #484745;">
                                    <?php the_time(); ?>
                                    &nbsp;&nbsp;来源：<?php echo get_post_meta($post->ID, "来源", true); ?>
                                </span>
                                <div class="num">
                                    <span style="font-size: 10px;color: red">
                                        <?php the_views(); ?>&nbsp;&nbsp;
                                    </span>
                                    <img src="images/News/Eye.png">
                                </div>
                                <!--                                <div class="clear"></div>-->
                                <br><br>
                            </div>
                            <span style="font-size: 17px;color: #3e3d3b;font-weight: bold">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php
                                    $title = get_post()->post_title;
                                    echo $title;   //输出文章的 标题
                                    ?>
                                </a>
                                <br>
                                <br>
                    </span>
                            <span style="font-size: 10px;color: #3e3d3b;">
                        <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 150, '...'); ?>
                                <br><br>
                    </span>
                            <a href="<?php echo get_permalink() ?>"><img src="images/News/button.png"></a>
                            <br>
                            <br>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="page">
                    <br>
                    <?php previous_posts_link('<img src="images/cases/previous.png">')?>
                    <?php $posts = get_posts("category=7");
                    $sum = count($posts);
                    $pages = ceil($sum / 3);
                    /*       echo  get_pagenum_link(2);*/
                    for ($i = 1; $i <= $pages; $i++) {
                        echo "<span> &nbsp;&nbsp; <a href='" . get_pagenum_link($i) . "'>" . $i . "</a></span>";
                    }
                    ?>
                    <?php next_posts_link('<img src="images/cases/next.png">')?>
                </div>
                <br>
                <!--            <div class="E1">-->
                <!--                <img src="images/News/essay.png">-->
                <!--                <div class="date"><span-->
                <!--                        style="font-size: 10px;color: #484745;">2016-06-28&nbsp;&nbsp;来源：www.ewhale.cn</span>-->
                <!--                    <div class="num">-->
                <!--                        <span style="font-size: 10px;color: red">25&nbsp;&nbsp;</span>-->
                <!--                        <img src="images/News/Eye.png">-->
                <!--                    </div>-->
                <!--                    <br><br></div>-->
                <!--                <span style="font-size: 17px;color: #3e3d3b;font-weight: bold">快递APP开发平台如何实现更快将货物送给顾客？<br><br></span>-->
                <!--                <span style="font-size: 10px;color: #3e3d3b;">现在网购的确越来越方便，足不出户能买到天下物，价格也比实体店实惠，所以越来越多的人加入网购大军，什么是<br>全球购海购各种电商APP开发平台蜂拥而起，（...）<br><br></span>-->
                <!--                <img src="images/News/button.png">-->
                <!--                <br><br>-->
                <!--            </div>-->
                <!--            <div class="E2">-->
                <!--                <img src="images/News/essay.png">-->
                <!--                <div class="date"><span-->
                <!--                        style="font-size: 10px;color: #484745;">2016-06-28&nbsp;&nbsp;来源：www.ewhale.cn</span>-->
                <!--                    <div class="num">-->
                <!--                        <span style="font-size: 10px;color: red">25&nbsp;&nbsp;</span>-->
                <!--                        <img src="images/News/Eye.png">-->
                <!--                    </div>-->
                <!--                    <br><br></div>-->
                <!--                <span style="font-size: 17px;color: #3e3d3b;font-weight: bold">快递APP开发平台如何实现更快将货物送给顾客？<br><br></span>-->
                <!--                <span style="font-size: 10px;color: #3e3d3b;">现在网购的确越来越方便，足不出户能买到天下物，价格也比实体店实惠，所以越来越多的人加入网购大军，什么是<br>全球购海购各种电商APP开发平台蜂拥而起，（...）<br><br></span>-->
                <!--                <img src="images/News/button.png">-->
                <!--                <br><br>-->
                <!--            </div>-->
                <!--            <div class="E3">-->
                <!--                <img src="images/News/essay.png">-->
                <!--                <div class="date"><span-->
                <!--                        style="font-size: 10px;color: #484745;">2016-06-28&nbsp;&nbsp;来源：www.ewhale.cn</span>-->
                <!--                    <div class="num">-->
                <!--                        <span style="font-size: 10px;color: red">25&nbsp;&nbsp;</span>-->
                <!--                        <img src="images/News/Eye.png">-->
                <!--                    </div>-->
                <!--                    <br><br></div>-->
                <!--                <span style="font-size: 17px;color: #3e3d3b;font-weight: bold">快递APP开发平台如何实现更快将货物送给顾客？<br><br></span>-->
                <!--                <span style="font-size: 10px;color: #3e3d3b;">现在网购的确越来越方便，足不出户能买到天下物，价格也比实体店实惠，所以越来越多的人加入网购大军，什么是<br>全球购海购各种电商APP开发平台蜂拥而起，（...）<br><br></span>-->
                <!--                <img src="images/News/button.png">-->
                <!--                <br><br>-->
                <!--            </div>-->
                <!--            <div class="page">-->
                <!--                <br><br><img src="images/cases/previous.png"><span>&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;2&nbsp;&nbsp;3&nbsp;&nbsp;4&nbsp;&nbsp;..&nbsp;&nbsp;</span><img-->
                <!--                    src="images/cases/next.png">-->
                <!--            </div>-->
            </div>
            <div class="recommend">
                <img src="images/News/recommend.png"><br><br>
                <div class="R">
                    <div class="E">
                        <img src="images/News/essay(1).png">
                    </div>
                    <div class="block">
                        <div class="include">
                            <div class="N">
                                <img src="images/News/Eye(1).png">
                            </div>
                            <span>25</span>
                        </div>
                    </div>
                    <span class="head"><br>开发类似超级课程表APP的产品<br>需要做哪些准备？<br><br></span>
                </div>
                <div class="R">
                    <div class="E">
                        <img src="images/News/essay(1).png">
                    </div>
                    <div class="block">
                        <div class="include">
                            <div class="N">
                                <img src="images/News/Eye(1).png">
                            </div>
                            <span>25</span>
                        </div>
                    </div>
                    <span class="head"><br>开发类似超级课程表APP的产品<br>需要做哪些准备？<br><br></span>
                </div>
                <div class="R">
                    <div class="E">
                        <img src="images/News/essay(1).png">
                    </div>
                    <div class="block">
                        <div class="include">
                            <div class="N">
                                <img src="images/News/Eye(1).png">
                            </div>
                            <span>25</span>
                        </div>
                    </div>
                    <span class="head"><br>开发类似超级课程表APP的产品<br>需要做哪些准备？<br><br></span>
                </div>
                <div class="press">
                    <ul>
                        <li>
                            产品技术
                        </li>
                        <li>
                            运营推广
                        </li>
                        <li>
                            公司动态
                        </li>
                        <li>
                            行业动态
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="icon"></div>
    </div>
    </body>
<?php get_footer() ?>