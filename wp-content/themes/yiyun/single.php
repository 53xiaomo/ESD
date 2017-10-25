<?php
//当你进入一次页面，就开始记录浏览量。
record_visitors();
get_header();

?>
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

    .area {
        padding: 70px;
    }

    h1 {
        text-align: center;
    }

    h2 {
        text-align: center;
    }

    .icon {
        height: 118px;
        width: 100%;
        background: url("images/about/cloud-icon.png") no-repeat;
        background-size: cover;
</style>
<body>
<div class="content">
    <div id="company-show"></div>
    <div class="white rectangle">
        <div class="area">
            <h1>
                <?php the_title(); ?>
            </h1><br><br>
            <h2 style="text-align: left">
                <?php
                echo $post->post_content;
                ?>
            </h2><br><br>
            <div style="float:left;">
                <?php
                $next_post = get_next_post();
                ?>
                <a title="<?php echo $next_post->post_title; ?>"
                   href="<?php echo get_permalink($next_post->ID); ?>">上一篇</a>
                <?php if (get_next_post()) {
                    next_post_link('：%link');
                } else {
                    echo "无，已经是最新文章!";
                } ?>
            </div>
            <div style="float:right;">
                <?php
                $prev_post = get_previous_post();
                ?>
                <a title="<?php echo $prev_post->post_title; ?>"
                   href="<?php echo get_permalink($prev_post->ID); ?>">下一篇</a>
                <?php if (get_previous_post()) {
                    previous_post_link('：%link');
                } else {
                    echo "无，已经是最后一篇文章!";
                } ?>
            </div>
        </div>
    </div>
    <div class="icon">
    </div>
</div>
</body>
<?php get_footer() ?>
