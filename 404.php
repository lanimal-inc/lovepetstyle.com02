<?php include 'assets/inc/head.php'; ?>
<?php get_template_part('assets/inc/header'); ?>
<section class="Fv secFv_wrap">
    <div class="secFv secFv01 img-bg_wrap">
        <div class="Fv-inner">
        </div>
    </div>
    <div class="sec-bg_wrap sec-bg_wrap_wave">
        <div class="sec-bg sec-bg01 img_wrap">
            <?php include_svg('/assets/svg/bg-wave.php'); ?>                   
        </div>
    </div>
</section>

<main class="page-notfound sec-bg_wrap">
	<section class="page-404">
        <div class="content-inner01">
            <?php
            $logo_page_id = 102; // フロントページ
            $img_id = SCF::get('404_img', $logo_page_id); // 画像IDを取得
            $img_url = wp_get_attachment_image_src($img_id, 'full'); // フルサイズ画像URL
            $site_title = get_bloginfo('name'); // サイトタイトルをaltに使用
            ?>

            <div class="notfound-top">
                <?php if (!empty($img_url[0])) : ?>
                    <div class="logo-img">
                        <div class="img_wrap">
                            <img src="<?php echo esc_url($img_url[0]); ?>" alt="<?php echo esc_attr($site_title); ?>">
                        </div>
                    </div>
                <?php endif; ?>

                <div class="cmn-title">
                    <span class="sav-txt">404 NOT FOUND</span>
                    <p class="title-txt cmn-txtbox01">ご覧いただきありがとうございます。<br>お探しのページはありませんので<br class="sp">別ページをお楽しみください。</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('assets/inc/footer'); ?>