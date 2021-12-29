<?php get_header(); ?>
<main class="voice">
    <div class="com-fv">
        <h1 class="_page-title _flex"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-top-icon.svg" alt=""></span>お客様の声</h1>
    </div>
    <div class="page-info">
        <div class="_inner">
            <p class="pan-kuzu"><span><a href="#"><i class="fas fa-home"></i></a></span> ＞ <span>お客様の声</span></p>
        </div>
    </div>
    <div class="voice-desc">
        <p>「会社設立後のお助け隊」をご利用いただいたお客様の声をご紹介します。
            <br> 率直な感想や、満足な言葉など多くのありがたいお言葉を頂いております。
            <br> 是非、電子申請キャンペーンをお申込みいただく際に、参考にしてみてください。
        </p>
    </div>
    <section class="voices">
        <div class="voice-inner">
            <ul class="voice-lists">

                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query( array(
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'post_type' => 'post',
                        'posts_per_page' => 5, // 表示件数
                        'orderby'     => 'date',
                        'order' => 'DESC'
                ) );
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <li class="voice-lists__item _flex">
                    <div class="voice-lists__item__img">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="voice-lists__item__text-box ">
                        <h3 class="voice-lists__item__title _flex"><?php the_title(); ?></h3>
                        <p class="voice-lists__item__txt"><?php the_content(); ?></p>
                        <p class="voice-lists__item__name"><?php the_field('customer-info'); ?></p>
                    </div>
                </li>

                <?php endwhile; endif; ?>

                <li class="voice-lists__item _flex">
                    <div class="voice-lists__item__img">
                        <img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2021/12/voice01.jpg" alt="お客様のお顔の写真">
                    </div>
                    <div class="voice-lists__item__text-box ">
                        <h3 class="voice-lists__item__title _flex">このサービスのおかけで、本業に集中することができました</h3>
                        <p class="voice-lists__item__txt">設立した後の事務手続きは後回しにしていました。そんなときにキャンペーンの案内を見て利用させて頂きました。税理士の方と面談させて頂き、書類作成含め全てお任せすることにしました。これで本業に集中することができます。ありがとうございました。</p>
                        <p class="voice-lists__item__name">合同会社姫路OEアカデミー　代表社員　佐々木　正博 様</p>
                    </div>
                </li>

                <li class="voice-lists__item _flex">
                    <div class="voice-lists__item__img">
                        <img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2021/12/voice02.jpg" alt="お客様のお顔の写真">
                    </div>
                    <div class="voice-lists__item__text-box">
                        <h3 class="voice-lists__item__title _flex">自分で探してみたのですが、税理士から断られることもあり、どうしたものかと…</h3>
                        <p class="voice-lists__item__txt">薬剤師に健康相談できるネットショップ」として法人を設立しました。設立当初は、税理士の必要性を感じてはいたのですが、なんとかなると思っていました。そうしてまごまごしているうちに、やらなければいけないことも溜まってきてしまい結局、税理士を探すことにしました。自分で探してみたのですが、税理士から断られることもあり、どうしたものかと思っていたら、このサイトに出会いました。また断られても嫌だなと思いながら問合せてみたら、創業時の問題など丁寧に説明して頂き、どのような税理士にするべきかも 分かり易く説明して頂きました。お陰様で事業をよく理解してくれる税理士と出会えて満足です。</p>
                        <p class="voice-lists__item__name">株式会社ナイルジャパン　代表取締役　中林　貞一 様</p>
                    </div>
                </li>
            </ul>
            <ul class="voice-pagination _flex d-none">
                <li class="voice-pagination-item">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-pagination.svg" alt=""> 
                    </a>
                </li>
                <li class="voice-pagination-item">
                    <a class="voice-pagination-item__link" href="">1</a>
                </li>
                <li class="voice-pagination-item">
                    <a class="voice-pagination-item__link current-page" href="">2</a>
                </li>
                <li class="voice-pagination-item">
                    <a class="voice-pagination-item__link" href="">3</a>
                </li>
                <li class="voice-pagination-item">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice-pagination.svg" alt=""> 
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <?php get_template_part('template/apply-block');?>
</main>
<?php get_footer(); ?>