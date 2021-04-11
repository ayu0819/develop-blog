<?php
//カスタムメニュー
register_nav_menus( //メニュー機能をオンにする
array(
'place_global' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
'place_utility' => 'ユーティリティ',
'place_sidebar' => 'サイドメニュー',
'place_footer' => 'フッター',
)
);
add_theme_support('post-thumbnails');
add_image_size('thumbside', 85, 85, true);
// 相対パス
class relative_URI {
    function relative_URI() {
        add_action('get_header', array(&$this, 'get_header'), 1);
        add_action('wp_footer', array(&$this, 'wp_footer'), 99999);
    }
    function replace_relative_URI($content) {
        $home_url = trailingslashit(get_home_url('/'));
        return str_replace($home_url, '/', $content);
    }
    function get_header(){
        ob_start(array(&$this, 'replace_relative_URI'));
    }
    function wp_footer(){
        ob_end_flush();
    }
}
new relative_URI();
// OGP
/**********************
OGP設定
*********************/
function my_meta_ogp()
{
if (is_front_page() || is_home() || is_singular()) {
 
/*初期設定*/
// 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
$ogp_image = '/wp-content/uploads/2021/01/og_my-blog.jpg';
// Twitterのアカウント名 (@xxx)
$twitter_site = '@0819_tateishi';
// Twitterカードの種類（summary_large_image または summary を指定）
$twitter_card = 'summary_large_image';
// Facebook APP ID
// $facebook_app_id = '';
/*初期設定 ここまで*/
global $post;
$ogp_title = 'RATIO Blog';
$ogp_description = 'イーコマース・コーディングの学習記録をしているブログです';
$ogp_url = 'https://ratio.ym-tane.com/';
$html = 'https://ratio.ym-tane.com/';
if (is_singular()) {
// 記事＆固定ページ
setup_postdata($post);
$ogp_title = $post->post_title;
$ogp_description = mb_substr(get_the_excerpt(), 0, 100);
$ogp_url = get_permalink();
wp_reset_postdata();
} elseif (is_front_page() || is_home()) {
// トップページ
$ogp_title = get_bloginfo('RATIO Blog');
$ogp_description = get_bloginfo('イーコマース・コーディングの学習記録をしているブログです');
$ogp_url = home_url();
}
// og:type
$ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';
// og:image
if (is_singular() && has_post_thumbnail()) {
$ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
$ogp_image = $ps_thumb[0];
}
// 出力するOGPタグをまとめる
$html = "\n";
$html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
$html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
$html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
$html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
$html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
$html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
$html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
$html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
$html .= '<meta property="og:locale" content="ja_JP">' . "\n";
if ($facebook_app_id != "") {
$html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
}
echo $html;
}
}
// headタグ内にOGPを出力する
add_action('wp_head', 'my_meta_ogp');
 ?>