<?php get_header(); ?>
    <main class="paper">
        <!-- ページタイトル -->
        <div class="com-fv">
            <h1 class="_page-title _flex"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/manga-file.svg" alt=""></span>電子申請キャンペーン</h1>
        </div>

            <!-- パンクず -->
        <div class="page-info">
            <div class="_inner">
                <p class="pan-kuzu"><span>ホーム</span> ＞ <span>電子申請キャンペーン</span></p>
                <ul class="page-lists _flex">
                    <li class="page-lists__item">
                        <a href="/campaign_manga">会社設立後のお助け隊とは</a>
                    </li>
                    <li class="page-lists__item">
                        <a href="/campaign_about">選ばれる理由</a>
                    </li>
                    <li class="page-lists__item current-page">
                        <a href="/campaign_about">会社設立後の届出書類</a>
                    </li>
                    <li class="page-lists__item">
                        <a href="/campaign_about">税理士とは</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="paper-top">
            <h2 class="blue-text">
                会社設立後の届出書類
            </h2>
        </div>
        <?php get_template_part('template/apply-block');?>

        <div class="paper-middle">
            <h2 class="blue-text">
                会社設立後の届出書類の提出方法
            </h2>
            <p>会社設立後の届出書類の提出方法は、税理士に依頼する以外にも、以下の2つの方法があります。</p>
            <div class="wrapper">
                <div class="item">
                    <p>届出書類を取得し、 自分で作成して提出</p>
                </div>
                <div class="item">
                    <p>マイナポータル 「法人設立ワンストップサービス」</p>
                </div>
            </div>

            <h3>届出書類を取得し、自分で作成して提出</h3>
            <p>国税庁のホームページから、以下の〈申請書様式〉をダウンロードして書類を作成します。そして、〈提出先と書類一覧〉に従って、管轄の諸官庁に提出します。</p>

            <h4>〈申請書様式〉</h4>
            <div class="papers-wrapper">
                <div class="paper-item">
                    <img src="" alt="">
                </div>
                <div class="paper-item">
                    <img src="" alt="">
                </div>
                <div class="paper-item">
                    <img src="" alt="">
                </div>
                <div class="paper-item">
                    <img src="" alt="">
                </div>
            </div>

            <h4>〈提出先と書類一覧〉</h4>
            <div class="paper-table">
                <table></table>
            </div>

            <div class="cautions">
                <h3>注意事項</h3>
                <p>● ㊞は、会社印鑑または代表個人の実印（若しくは認印）になります。</p>
                <p>●「事業の目的」「事業種目」は定款「目的」全てを記載しなくても問題はありません。 </p>
                <p>● 履歴事項全部証明書は原本を添付してください。 </p>
                <p>● 原本が間に合わない場合は取り急ぎコピーを提出し、後日、原本を提出してください。 </p>
                <p>● 役所によっては、原本でないと受け付けられないと言われることがあります。コピー可という役所もあるので、原本かコピーかを知りたい場合は直接、管轄の役所へ問合せください。</p>
                <p>● 平成29年4月1日から税務署への履歴事項全部証明書の提出は不要となりました。 </p>
                <p>● 提出資料は、2部作成してください（1部「会社保管用」。作成した書類のコピーでも可）。「会社保管用」にも役所から押印を受け保管してください。 </p>
                <p>● 郵送する際は、返信用封筒を同封してください（ご自身の住所を記載、切手を貼り付け）。「会社保管用」に受付印が押印され、返送されます。</p>
            </div>

            <h3>マイナポータル「法人設立ワンストップサービス」</h3>
            <p>「法人設立ワンストップサービス」では、管轄の諸官庁へそれぞれ個別に提出しなければいけない会社設立後の届出書類をマイナポータルという一つのオンラインサービスを利用して、これらの一連の手続を提出まで一度で行うことができるサービスです。内閣府が提供しています。</p>
            <img src="" alt="">
        </div>
        <?php get_template_part('template/bottom-comment');?>
        <?php get_template_part('template/apply-block');?>
    </main>
<?php get_footer(); ?>