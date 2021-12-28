<?php get_header(); ?>
    <main class="paper">
        <!-- ページタイトル -->
        <div class="com-fv">
            <h1 class="_page-title _flex"><span class="_image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/begin__mv.png" alt=""></span>はじめての方へ</h1>
        </div>

            <!-- パンクず -->
        <div class="page-info">
            <div class="_inner">
                <p class="pan-kuzu"><span>ホーム</span> ＞ <span>はじめての方へ</span></p>
                <ul class="page-lists _flex">
                    <li class="page-lists__item">
                        <a href="<?php echo esc_url( home_url( '/begin_about' ) ); ?>">会社設立後のお助け隊とは</a>
                    </li>
                    <li class="page-lists__item">
                        <a href="<?php echo esc_url( home_url( '/begin_reason' ) ); ?>">選ばれる理由</a>
                    </li>
                    <li class="page-lists__item current-page">
                        <a href="<?php echo esc_url( home_url( '/begin_paper' ) ); ?>">会社設立後の届出書類</a>
                    </li>
                    <li class="page-lists__item">
                        <a href="<?php echo esc_url( home_url( '/begin_about' ) ); ?>">税理士とは</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="page__menu">
            <div class="_inner">
                <a href="#paper__document">会社設立後<br class="sp-br">の届出書類</a>
                <a href="#paper__method">届出書類<br class="sp-br">の提出方法</a>
            </div>
        </div>

        <div class="paper__document" id="paper__document">
            <div class="_inner">
                <h2 class="blue-text">
                    会社設立後の届出書類
                </h2>
                <p class="papper__document__top">法人登記が完了後、法務局から初めての「登記簿謄本」を受領したら、税務署、税務事務所、市区町村役場に届出が必要です。「この届出を忘れてしまうと税務上の特典が受けられない」「事業開始後の手続が煩雑になってしまう」といった事業を営む上で、経営者のデメリットとなることがございます。 登記簿謄本を受領したら早めに届出をすることをお勧めします。</p>
                <p class="papper__document__top">各種届出書には添付書類が必要となる届出書もあります。<br>
                また、都道府県・市区町村等への届出が各役所によって様式や提出期限が違う場合もございます。必ず管轄のお役所にお問い合わせの上、ご提出ください。これ以外の書類も提出が必要となる場合もありますので、必ず税理士などの専門家にお問い合わせください。</p>
                <table class="papper__document__table">
                    <tr>
                        <th>届出書類</th>
                        <th>提出期限留意点</th>
                        <th>届出先</th>
                    </tr>
                    <tr>
                        <td>法人設立届出書</td>
                        <td>法人設立から2ヵ月を経過した日、第1期の事業年度の終了する日のどちらかが早いほうの前日まで</td>
                        <td>・本店登記所轄税務署<span class="precautions">※</span><br>
                        ・本店登記所轄都道府県税務事務所<br>
                        ・本店登記所轄市町村役場<br>
                        ※東京都23区は除く</td>
                    </tr>
                    <tr>
                        <td>青色申告承認申請書</td>
                        <td>設立から3ヵ月以内</td>
                        <td rowspan="6">本店登記所轄税務署<span class="precautions">※</span></td>
                    </tr>
                    <tr>
                        <td>給与支払事務所等の開設届出書</td>
                        <td>会社設立後1ヵ月以内</td>
                    </tr>
                    <tr>
                        <td>源泉所得税の納期の特例の承認に関する申請書</td>
                        <td>納期の特例の承認申請については特に定められていないが、（原則として、提出した日の翌月に支払う給与等から適用されます。）納期限の特例の届出については、特例制度の適用を受けようとする年（特例の対象となる7月から12月までの給与を支払った年）の12月20日までに提出する必要。</td>
                    </tr>
                    <tr>
                        <td>消費税簡易課税制度選択届出書</td>
                        <td>適用を受けようとする課税期間の初日の前日まで（事業を開始した日の属する課税期間である場合には、その課税期間中）</td>
                    </tr>
                    <tr>
                        <td>棚卸資産の評価方法の届出書</td>
                        <td>普通法人を設立した場合は、設立第1期の確定申告書の提出期限まで</td>
                    </tr>
                    <tr>
                        <td>減価償却資産の償却方法の届出書</td>
                        <td>●●●●●</td>
                    </tr>
                    <tr>
                        <td>健康保険、厚生年金保険新規適用届</td>
                        <td rowspan="2">期日は、事業を開始した日から5日以内、従業員の採用時は採用から5日以内
                        </td>
                        <td rowspan="6">事業所所在地の管轄社会保険事務所</td>
                    </tr>
                    <tr>
                        <td>健康保険、厚生年金保険新規適用事業所現況書</td>
                    </tr>
                    <tr>
                        <td>健康保険、厚生年金保険被保険者資格取得届</td>
                        <td rowspan="2">期日は、当該事実の発生から5日以内</td>
                    </tr>
                    <tr>
                        <td>健康保険被扶養者(異動)届</td>
                    </tr>
                    <tr>
                        <td>労働保険関係成立届</td>
                        <td rowspan="2">期日は、当該事実の発生から遅滞なく提出</td>
                    </tr>
                    <tr>
                        <td>適用事業報告</td>
                    </tr>
                    <tr>
                        <td>就業規則届</td>
                        <td rowspan="2">期日は、事業所を設置した日の翌日から起算して10日以内</td>
                        <td rowspan="2">事業所所在地の管轄労働基準監督署</td>
                    </tr>
                    <tr>
                        <td>時間外労働および休日労働に関する協定書</td>
                    </tr>
                    <tr>
                        <td>雇用保険適用事業所設置届</td>
                        <td rowspan="2">期日は、被保険者となった事実のあった日の属する月の翌月の10日まで</td>
                        <td rowspan="2">事業所所在地の管轄社会保険事務所</td>
                    </tr>
                    <tr>
                        <td>雇用保険被保険者資格取得届</td>
                    </tr>
                </table>
                <p class="precautions__content">※登記住所により管轄の税務署は異なります。管轄の税務署は<a href="https://www.nta.go.jp/about/organization/access/map.html">こちら</a>よりご確認ください。</p>
                <div class="paper__document__bottom">
                    <h3>電子申請キャンペーンでは、<br class="sp-br">こちらの届出書類を<br>
                    税理士が電子申請します</h3>
                    <p>法人設立届出書、青色申告承認申請書、<br class="sp-br">給与支払事務所等の開設届出書、<br>
                    源泉所得税の納期の特例に関する申請書</p>
                </div>
            </div>       
        </div>

        <?php get_template_part('template/apply-block');?>

        <div class="paper__method" id="paper__method">
            <div class="_inner">
                <h2 class="blue-text">
                    会社設立後の届出書類<br class="sp-br">の提出方法
                </h2>
                <p class="paper__method__top">会社設立後の届出書類の提出方法は、税理士に依頼する以外にも、以下の2つの方法があります。</p>
                <div class="paper__method__items">
                    <div class="paper__method__item">
                        <h3 class="method__number">1</h3>
                        <p>届出書類を取得し、<br>
                        自分で作成して提出</p>
                    </div>
                    <div class="paper__method__item">
                        <h3 class="method__number">2</h3>
                        <p>マイナポータル<br>
                        「法人設立ワンストップサービス」</p>
                    </div>
                </div>
                <div class="paper__method1">
                    <h3 class="paper__method__title"><span class="method__number">1</span>届出書類を取得し、<br class="sp-br">自分で作成して提出</h3>
                    <p class="paper__method1__top">国税庁のホームページから、以下の〈申請書様式〉をダウンロードして書類を作成します。そして、〈提出先と書類一覧〉に従って、管轄の諸官庁に提出します。</p>
                    <h4>〈申請書様式〉</h4>
                    <div class="papers__method1__items">
                        <div class="paper__method1__item">
                            <p>■法人設立届出書</p>
                            <ul>
                                <li><a hreh="https://www.nta.go.jp/taxes/tetsuzuki/shinsei/annai/hojin/annai/1554_2.html">税務署</a></li>
                                <li>税務事務所</li>
                                <li>市役所</li>
                            </ul>
                            <div class="paper__method1__item__image"><img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2021/12/paper__method1.png" alt=""></div>
                        </div>
                        <div class="paper__method1__item">
                            <p>■<a href="https://www.nta.go.jp/taxes/tetsuzuki/shinsei/annai/hojin/annai/1554_14.html">青色申告承認申請書</a></p>
                            <div class="paper__method1__item__image"><img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2021/12/paper__method2.png" alt=""></div>
                        </div>
                        <div class="paper__method1__item">
                            <p>■<a href="https://www.nta.go.jp/taxes/tetsuzuki/shinsei/annai/gensen/annai/1648_11.html">給与支払事務所等の開設届出書</a></p>
                            <div class="paper__method1__item__image"><img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2021/12/paper__method3.png" alt=""></div>
                        </div>
                        <div class="paper__method1__item">
                            <p>■<a href="https://www.nta.go.jp/taxes/tetsuzuki/shinsei/annai/gensen/annai/1648_14.html">源泉所得税の納期の特例に関する申請書</a></p>
                            <div class="paper__method1__item__image"><img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2021/12/paper__method4.png" alt=""></div>
                        </div>
                    </div>

                    <h4>〈提出先と書類一覧〉</h4>
                    <table class="paper__method1__table">
                        <tr>
                            <td></td>
                            <th colspan="3">届出先</th>
                        </tr>
                        <tr>
                            <td></td>
                            <th>所轄税務署<span class="precautions">※</span></th>
                            <th>所轄税務事務所</th>
                            <th>市区町村役場</th>
                        </tr>
                        <tr>
                            <th>提 出 資 料</th>
                            <td>
                                <p class="bold">■法人設立届出書</p>
                                <p class="bold">■青色申告承認申請書</p>
                                <p class="bold">■給与支払事務所等の開設届出書</p>
                                <p class="bold">■源泉所得税の納期の特例に関する申請書</p>
                            </td>
                            <td>
                                <p class="bold">■法人設立届出書</p> 
                                <p class="small">東京都23区の場合、書類名は「事業開始等申告書」</p>
                            </td>
                            <td>
                                <p class="bold">■法人設立届出書</p> 
                                <p class="small">東京都23区の場合、書類のご提出は必要ありません</p>
                            </td>
                        </tr>
                        <tr>
                            <th>添 付 資 料</th>
                            <td>定款の写し</td>
                            <td colspan="2">定款の写し<br>
                            履歴事項全部証明書（原本）</td>
                        </tr>
                    </table>
                    <p class="precautions__content">※登記住所により管轄の税務署は異なります。管轄の税務署は<a href="https://www.nta.go.jp/about/organization/access/map.html">こちら</a>よりご確認ください。</p>

                    <div class="paper__method1__caution">
                        <h4>注意事項</h4>
                        <div class="paper__method1__caution__text">
                            <p>● ㊞は、会社印鑑または代表個人の実印（若しくは認印）になります。</p>
                            <p>●「事業の目的」「事業種目」は定款「目的」全てを記載しなくても問題はありません。 </p>
                            <p>● 履歴事項全部証明書は原本を添付してください。 </p>
                            <p>● 原本が間に合わない場合は取り急ぎコピーを提出し、後日、原本を提出してください。 </p>
                            <p>● 役所によっては、原本でないと受け付けられないと言われることがあります。コピー可という役所もあるので、原本かコピーかを知りたい場合は直接、管轄の役所へ問合せください。</p>
                            <p>● 平成29年4月1日から税務署への履歴事項全部証明書の提出は不要となりました。 </p>
                            <p>● 提出資料は、2部作成してください（1部「会社保管用」。作成した書類のコピーでも可）。「会社保管用」にも役所から押印を受け保管してください。 </p>
                            <p>● 郵送する際は、返信用封筒を同封してください（ご自身の住所を記載、切手を貼り付け）。「会社保管用」に受付印が押印され、返送されます。</p>
                        </div>
                    </div>
                </div>


                <div class="paper__method2">
                    <h3 class="paper__method__title"><span class="method__number">2</span>マイナポータル「法人設立<br class="sp-br">ワンストップサービス」</h3>
                    <p class="paper__method2__top">「法人設立ワンストップサービス」では、管轄の諸官庁へそれぞれ個別に提出しなければいけない会社設立後の届出書類をマイナポータルという一つのオンラインサービスを利用して、これらの一連の手続を提出まで一度で行うことができるサービスです。内閣府が提供しています。</p>
                    <div class="paper__method2__img"><img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2021/12/paper__method5.png" alt=""></div>
                    <div class="paper__method2__content">
                        <div class="left item">
                            <h4>申請可能な手続き</h3>
                            <p><span class="gray">●</span>国税・地方税に関する設立届</p>
                            <p><span class="gray">●</span>雇用に関する届出</p>
                            <p><span class="gray">●</span>定款認証・設立登記</p>
                            <p><span class="gray">●</span>GビズIDの発行</p>
                        </div>
                        <div class="right item">
                            <h4>利用の際に必要なもの</h3>
                            <p><span class="gray">●</span>法人代表者のマイナンバーカード</p>
                            <p><span class="gray">●</span>マイナンバーカード対応のスマートフォンまたはパソコン</p>
                            <p><span class="gray">●</span>ICカードリーダライタ（パソコンをご利用の方のみ）</p>
                        </div>
                    </div>

                    <p class="paper__method2__bottom__small">以上のように税理士に依頼せずに会社設立後の届出書類を提出する方法がありますが、やはり<span class="bold">「よく分からない」「面倒」に感じられる</span>かもしれません。</p>
                    <p class="paper__method2__bottom__big">そのような方には、<br class="sp-br">会社設立後の届出書類<br>
                    電子申請キャンペーンの<br class="sp-br">ご利用をおススメします。</p> 
                </div>          
            </div>
        </div>
        <?php get_template_part('template/bottom-comment');?>
        <?php get_template_part('template/apply-block');?>
    </main>
<?php get_footer(); ?>