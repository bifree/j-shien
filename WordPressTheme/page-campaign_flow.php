<?php get_header(); ?>
<main class="campaign flow">
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
                    <a href="/campaign_manga">マンガで分かる</a>
                </li>
                <li class="page-lists__item current-page">
                    <a href="/campaign_flow">ご利用の流れ</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- flow -->
    <section class="section-flow">
        <div class="inner">
            <div class="flow-title-box">
                <h2 class="flow-title">FLOW</h2>
                <p class="flow-title__sub">電子申請キャンペーン
                    <br>ご利用の流れ</p>
                <p class="flow-free">完全無料</p>
            </div>
            <ul class="step">
                <li class="step-item _flex step-item__1">
                    <div class="step-item__illust">
                        <p class="step-item__illust-step">step<span>1</span></p>
                        <div class="step-item__illust-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-step1.svg" alt="">
                        </div>
                    </div>
                    <div class="step-item__text">
                        <h3 class="step-item__text-title">お申込み・情報登録</h3>
                        <p class="step-item__text-txt">
                        お申込みフォームから必要情報をご記入の上、お申込みください。お申込み内容確認後に情報登録フォームをメールでお送りいたします。
                        <br>電子申請に必要な情報をご登録ください。
                        <br>また電子申請には、<span>定款と登記簿謄本（履歴事項全部証明書）が必要</span>となりますので、お手元にご用意ください。
                        </p>
                    </div>
                </li>
                <li class="step-item _flex step-item__2">
                    <div class="step-item__illust">
                        <p class="step-item__illust-step">step<span>2</span></p>
                        <div class="step-item__illust-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-step2.svg" alt="">
                        </div>
                    </div>
                    <div class="step-item__text">
                        <h3 class="step-item__text-title">一覧から税理士を選択</h3>
                        <p class="step-item__text-txt">
                        税理士のプロフィールや契約した場合の見積、口コミ一覧をメール1通にてお送りいたします。その中から自社に合った税理士をご選択のうえ、面談をお申し込みください。
                        <br><br>※契約の強制はありません。
                        </p>
                    </div>
                </li>
                <li class="step-item _flex step-item__3">
                    <div class="step-item__illust">
                        <p class="step-item__illust-step">step<span>3</span></p>
                        <div class="step-item__illust-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-step3.svg" alt="">
                        </div>
                    </div>
                    <div class="step-item__text">
                        <h3 class="step-item__text-title">お申込み・情報登録</h3>
                        <p class="step-item__text-txt">
                            電子申請の本人確認のため、税理士と面談をします。面談では「経理」「創業融資」「助成金」など、創業時のご相談にも無料で対応いたします。
                            <br>そして面談後に税理士が電子申請します。
                            <br>また、面談後の税理士アンケートのご回答にご協力ください。
                            <p class="step-item__text-txt__sub">
                                面談場所は、お客様事務所・税理士事務所・オンライン会議・喫茶店等お客様のご都合の良い場所をお選びください。出張交通費も無料です。
                            </p>
                        </p>
                    </div>
                </li>
                <li class="step-item _flex step-item__4">
                    <div class="step-item__illust">
                        <p class="step-item__illust-step">step<span>4</span></p>
                        <div class="step-item__illust-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-step4.svg" alt="">
                        </div>
                    </div>
                    <div class="step-item__text">
                        <h3 class="step-item__text-title">電子申請の控えを受け取る</h3>
                        <p class="step-item__text-txt">
                        面談をした税理士から、電子申請後の控えを後日メールまたは郵送で、お送りいたします。
                        <br>そちらの受け取りをもって、設立後の手続は完了となります。
                        </p>
                    </div>
                </li>
            </ul>
            <p class="flow-alert">※税理士と顧問契約をする場合は、個別契約となります。ご契約の際は、契約書をご確認ください。
                <br> ※電子申請キャンペーンは無料です。電子申請料、見積、再見積、出張費、キャンセル料等は発生いたしません。
            </p>
            <div class="flow-document _flex">
                <div class="flow-document__title">
                    <p>こちらのキャンペーンで税理士が電子申請する届出書類</p>
                </div>
                <div class="flow-document__lists">
                    <p>法人設立届出書、青色申告承認申請書、給与支払事務所等の開設届出書、源泉所得税の納期の特例に関する申請書</p>
                </div>
            </div>
        </div>
    </section>
    <section class="conform">
        <div class="inner">
            <h2 class="conform-title _flex"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow-alert.svg" alt=""></span>お申し込み前にご確認ください</h2>
            <p class="conform-alert">
                大変申し訳ございませんが、以下のような場合は、お断りする場合がございます。
                <br>詳しくは、お助け隊スタッフにご相談ください（TEL：<a href="tel:0120955761">0120-955-761</a>）。
            </p>
            <ul class="conform-lists">
                <li class="conform-lists__item">
                    <h3 class="conform-lists__item__title">契約している税理士（契約予定含む）がいる方</h3>
                    <p class="conform-lists__item__text">顧問税理士等が「いる」場合は、その税理士へ届出書類の申請をご依頼されること推奨しております。</p>
                </li>
                <li class="conform-lists__item">
                    <h3 class="conform-lists__item__title">電子申請キャンペーンの目的をご理解いただけていない方</h3>
                    <p class="conform-lists__item__text">電子申請キャンペーンは、新設法人と税理士のご縁づくりを目的とした税理士のお試しキャンペーンです。顧問契約の強制はありませんが、将来的にでも税理士をご検討される方向けとなります。目的をご理解されないままの利用はお断りする場合がございます。</p>
                </li>
                <li class="conform-lists__item">
                    <h3 class="conform-lists__item__title">お申込担当者が会社の代表者ではない場合</h3>
                    <p class="conform-lists__item__text">お申込み担当者が税理士との契約を判断できる決裁者ではない場合は、電子申請キャンペーンのご利用をお断りする場合がございます。また、一度に複数社の電子申請を依頼することもできません。</p>
                </li>
            </ul>
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