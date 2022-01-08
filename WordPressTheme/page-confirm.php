<?php get_header(); ?>
<main class="contact">
    <!-- ページタイトル -->
    <div class="com-fv">
        <h1 class="_page-title _flex"><span class="_image" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/manga-file.svg" alt=""></span>電子申請キャンペーンお申込み</h1>
    </div>

    <!-- パンクず -->
    <div class="page-info">
        <div class="_inner">
            <p class="pan-kuzu"><span><a href="/"><i class="fas fa-home"></i></a></span> ＞ <span>よくある質問</span></p>
        </div>
    </div>

    <!-- コンテンツ -->
    <div class="contact__content">
            <p class="contact__top">以下のお申込みフォームにご入力のうえ、電子申請キャンペーン（無料）にお申込みください。<br>
            お申込み内容確認後に情報登録フォームをメールでお送りいたします。<br>
            ご不明な点がございましたら、設立後の無料相談ダイヤル（0120-955-761）にお問い合わせくださいませ。</p>
    </div>

    <div class="contact-form">
        <?php the_content(); ?>
    </div>



</main>

<?php get_footer(); ?>