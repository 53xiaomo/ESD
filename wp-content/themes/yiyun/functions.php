<?php
/**
 * Created by PhpStorm.
 * User: mosiqi
 * Date: 17-10-20
 * Time: 下午5:07
 */
function wpdx_paging_nav(){
    global $wp_query;
    $big = 999; //需要一个不太可能的整数
    $pagination_links = paginate_links(array(
       'base' =>str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' =>max(1,get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
    echo $pagination_links;
}
function record_visitors()
{
    if (is_singular())
    {
        global $post;
        $post_ID = $post->ID;
        if($post_ID)
        {
            $post_views = (int)get_post_meta($post_ID, 'views', true);
            if(!update_post_meta($post_ID, 'views', ($post_views+1)))
            {
                add_post_meta($post_ID, 'views', 1, true);
            }
        }
    }
}
add_action('wp_head', 'record_visitors');
//在24小时以内发布的显示为几分钟前或几小时前
function timeago() {
    global $post;
    $date = $post->post_date;
    $time = get_post_time('G',true,$post);
    $time_diff = time() - $time;
    if ($time_diff > 0 && $time_diff < 24*60*60)
        $display = sprintf(_('%s 之前'),human_time_diff($time));
    else
        $display = date(get_option('date_format'),strtotime($date));
    return $display;
}
add_filter('the_time','timeago');
//获取文章第一张图片，如果没有图，就不显示图
function catch_that_image() {
    global $post, $posts;

    $first_img = '';

    ob_start();

    ob_end_clean();

    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

    $first_img = $matches [1] [0];

    if(empty($first_img)){

        $first_img = '';//bloginfo('template_url'). '/images/default-thumb.jpg';

    }
    else{
        $first_img = '<a href="<?php the_permalink();?>" title="<?php the_title();?>"><img src="'.$first_img.'" alt="<?php the_title();?>"/></a>';
    }

    return $first_img;
}
?>