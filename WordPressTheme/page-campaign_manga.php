<?php get_header(); ?>
<main class="campaign manga">
    <div class="com-fv">
        <h1 class="_page-title _flex"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/manga-file.svg" alt=""></span>電子申請キャンペーン</h1>
    </div>
    <div class="page-info">
        <div class="_inner">
            <p class="pan-kuzu"><span><a href="#"><i class="fas fa-home"></i></a></span> ＞ <span>マンガで分かる</span></p>
            <ul class="page-lists _flex">
            <li class="page-lists__item current-page">
                    <a href="<?php echo esc_url( home_url( '/campaign_manga' ) ); ?>">マンガで分かる</a>
                </li>
                <li class="page-lists__item manga-li">
                    <a href="<?php echo esc_url( home_url( '/campaign_flow' ) ); ?>">ご利用の流れ</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="illust">
        <div class="illust-inner">
            <h2 class="illust-title">
                マンガで分かる
            <br>電子申請キャンペーン
            </h2>
            <figure>
                <img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2022/01/94bcb9964d138838c2298a9925d1b5ff.png" alt="説明のマンガ">
            </figure>
        </div>
    </section>
    <section class="comments">
        <div class="inner">
            <h2 class="comments-title">会社設立後の疑問と手間を解消</h2>
            <p class="comments-text">
                会社設立後の官公庁への面倒な手続きを
                <br><span>税理士</span>が<span>無料</span>で<span>電子申請</span>します！<span></span>
            </p>
        </div>
    </section>
</main>
<?php get_footer(); ?>