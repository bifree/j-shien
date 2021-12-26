<?php get_header(); ?>
<main class="about">
    <!-- ページタイトル -->
    <div class="com-fv">
        <h1 class="_page-title _flex"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/manga-file.svg" alt=""></span>電子申請キャンペーン</h1>
    </div>

    <!-- パンクず -->
    <div class="page-info">
        <div class="_inner">
            <p class="pan-kuzu"><span>ホーム</span> ＞ <span>電子申請キャンペーン</span></p>
            <ul class="page-lists _flex">
                <li class="page-lists__item current-page">
                    <a href="/campaign_manga">会社設立後のお助け隊とは</a>
                </li>
                <li class="page-lists__item">
                    <a href="/campaign_about">選ばれる理由</a>
                </li>
                <li class="page-lists__item">
                    <a href="/campaign_about">会社設立後の届出書類</a>
                </li>
                <li class="page-lists__item">
                    <a href="/campaign_about">税理士とは</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- about -->
    <section class="about-section">
        <div class="inner">
            <div class="about-title-box">
                <h2 class="about-title">ABOUT US</h2>
                <p class="about-title__sub">「会社設立後のお助け隊」とは</p>
                <p class="about-free">新設法人と税理士をつなぐ業界唯一のマッチングサービスです</p>
            </div>

            <div class="about-title-text">
                <div class="upper">
                    <p>会社設立後のお助け隊では、累計2万社以上の新設法人の税理士マッチング実績があります。経験方法なファイナンシャルプランナーの資格を持ったお助け隊スタッフが、お客様に合った最適な税理士をマッチングいたします。<br> 
                    また対応する税理士も新設法人専門の税理士で、はじめてでも分かりやすく親身に対応いたします。</p>
                </div>
                <div class="lower">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about1.png" alt="">
                </div>
            </div>

            <div class="about-background">
                <h2>新設法人を応援！</h2>
                <h1 class="blue-text">「会社設立後のお助け隊」が生まれた背景</h1>

                <div class="about-background-text">
                    <p>「会社設立後のお助け隊」のお客様は会社設立直後（設立後3ヶ月以内）の方がほとんどで、しかも「はじめての会社設立」の方達です。</p>
                    <p>皆さんに共通していることが、「相談する相手が分からない」「相談行ったけどよく分からない」「登記が終わっても、まだ手続きがあるの？」といった「分からない」という声が非常に多いです。</p>
                    <p>その「分からない」といった疑問や手続きの手間を解消して、少しでもスムーズに事業を開始できるようサポートするため、「会社設立後のお助け隊」が生まれました。</p>
                    <p>会社設立後のお助け隊を運営する日本企業支援センターは、「日本の企業を元気にする」企業となることを事業目的に運営されております。</p>
                    <p>今後の日本の市場を担うお客様の創業時の疑問と手間を解消することで、お客様の事業のスムーズな開始・成長につながり、そして日本企業の発展にもつながると考えております。</p>
                    <p>会社設立後のお助け隊は、新設法人を応援します！</p>
                </div>
            </div>

            <div class="about-suggest">
                <h3>ぜひ、創業時の疑問と手間の解消にお役立てください。<br>
                    お客様の事業がスムーズに開始できるよう、<br>
                    ご利用をお待ちしております。</h3>
            </div>

            <div class="about__campain">
                <h3>会社設立後の届出書類</h3>
                <h2 class="blue-text">電子申請キャンペーン</h2>
                <p class="center">新設法人と税理士のご縁づくりを目的とした税理士のお試しキャンペーンです</p>
                <div class="inner">
                    ● 会社設立後の届出書類を電子申請（通常20,000円相当） <br>
                    ● 創業時の経理や税務、資金調達、節税などの相談（通常1時間5,000円相当）
                </div>
                <p class="center">新設法人を応援する税理士がこれらを無料で提供します。</p>
                <h3 class="bottom-h">ぜひ電子申請キャンペーンをお試しいただき、 <br>顧問税理士をご検討ください</h3>
            </div>
            <?php get_template_part('template/apply-block');?>
    </section>
</main>

<?php get_footer(); ?>