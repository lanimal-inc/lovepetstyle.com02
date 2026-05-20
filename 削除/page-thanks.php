<?php include 'assets/inc/head.php'; ?>
<?php get_template_part('assets/inc/header'); ?>

<?php
$slug = get_post( $post )->post_name;
?>
<main class="page-<?php echo esc_attr( $slug ); ?>_main page-sec">

  <div style="height: 100px;"></div>

  <div class="container">

    <h1>お問い合わせありがとうございます</h1>
    <p>この度はお問い合わせをいただきまして誠にありがとうございました。</p>
    <p>お問い合わせフォームの内容を確認し、順次ご返答をいたします。</p>
    <p>尚、2日以上回答が無い場合は不具合の可能性もございますため、恐れ入りますが</p>
    <p><strong>0120-984-125</strong><br>
    ※受付時間9時～18時</p>
    <p>までお問い合わせくださいませ。</p>
    <p>宜しくお願いいたします。<br>
    LOVE PET　カスタマー</p>
    <p><a href="index.html">トップページに戻る</a></p>
  </div>

  <div style="height: 100px;"></div>

<?php get_template_part('assets/inc/footer'); ?>