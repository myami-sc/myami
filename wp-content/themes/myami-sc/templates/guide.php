<?php

/**
 * Template Name: guide page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-guide">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="guide-step sticky-element">
                    <ul class="step-list">
                        <li class="step-item">
                            <a onclick="lenis.scrollTo('#ttl1'); return false;" class="step-link s1">イベント申込みの流れ</a>
                        </li>
                        <li class="step-item">
                            <a onclick="lenis.scrollTo('#ttl2'); return false;" class="step-link s2">新規申込みについて</a>
                        </li>
                        <li class="step-item">
                            <a onclick="lenis.scrollTo('#ttl3'); return false;" class="step-link s3">申請書について</a>
                        </li>
                    </ul>
                </div>
                <div class="p-inner">
                    <section class="guide-area area1">
                        <h2 id="ttl1" class="p-title">イベント申込みの流れ</h2>
                        <div class="area-content">
                            <div class="content-box">
                                <p class="num">01</p>
                                <h3 class="title">（ 空き状況の確認 ）</h3>
                                <ul class="list">
                                    <li>イベントカレンダーにてイベントスペースのご利用状況をご確認ください。<br /><br /><strong class="notice">※開催スペースにお間違いがないようご確認ください</strong></li>
                                    <li>予約可能催事の受付日程につきましては、3ヶ月後の末日までの予約が可能となります。<br /><br /><strong class="notice">例：1/15の場合、４月末まで予約が可能</strong></li>
                                </ul>
                                <button class="btn"><a href="<?php echo esc_url(home_url('events')); ?>"><span>カレンダーを確認する</span></a></button>
                            </div>
                            <div class="content-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/guide/guide_img_01.png')); ?>" class="img" alt="イベント申込みイメージ"></div>
                        </div>
                        <div class="area-content --reverse">
                            <div class="content-box">
                                <p class="num">02</p>
                                <h3 class="title">（ フォームの入力 ）</h3>
                                <ul class="list">
                                    <li>お問い合わせの種類をご選択後、各項目をご入力ください。</li>
                                    <li>新規でのお申込みの場合は日程予約の前に事前に提出いただく書類がございます。<br />書類については<a onclick="lenis.scrollTo('#ttl2'); return false;">新規申込について</a>をご覧ください。</li>
                                    <li>日程が複数の場合の申込みは確認事項にその旨をご記載ください。</li>
                                </ul>
                                <button class="btn"><a href="<?php echo esc_url(home_url('events/entry')); ?>"><span>イベントフォームへ</span></a></button>
                            </div>
                            <div class="content-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/guide/guide_img_02.png')); ?>" class="img" alt="イベント申込みイメージ"></div>
                        </div>
                        <div class="area-content">
                            <div class="content-box">
                                <p class="num">03</p>
                                <h3 class="title">（ 日程の確定 ）</h3>
                                <ul class="list">
                                    <li>申請書をお送りいただき、正式に日程が確定した場合は確定メールをお送りしております。</li>
                                    <li>カレンダーの更新タイミングによって既に予定が埋まってしまっている場合がございます。</li>
                                </ul>
                            </div>
                            <div class="content-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/guide/guide_img_03.png')); ?>" class="img" alt="イベント申込みイメージ"></div>
                        </div>
                        <div class="area-content --reverse">
                            <div class="content-box">
                                <p class="num">04</p>
                                <h3 class="title">（ 催事当日 ）</h3>
                                <ul class="list">
                                    <li>搬入口にある防災センターにて受付をお願い致します。</li>
                                    <li>事前に搬入経路をご確認いただき、搬入口から店内へ持ち込みをお願い致します。</li>
                                    <li>使用備品の貸出しは当日警備員にお申し付けください。</li>
                                    <li>物販の場合は、営業終了後、サービスカウンターにて日報をご記載ください。そちらを３F事務所までお持ちいただき当日精算となります。</li>
                                </ul>
                            </div>
                            <div class="content-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_05.jpg')); ?>" class="img" alt="イベント申込みイメージ"></div>
                        </div>
                        <div class="area-content">
                            <div class="content-box">
                                <p class="num">05</p>
                                <h3 class="title">（ キャンセルについて ）</h3>
                                <ul class="list">
                                    <li>①変更の届出<br />お申し込みのお手続きを頂いた後、利用者の都合により、利用期日、時間を変更される場合や申し込みを取消される場合は、すみやかにメールまたはお電話にてご連絡下さい。<br /><br /><strong class="notice">※利用期日、時間等の変更により、追加料金あるいは取消料金を申し受ける場合があります。</strong></li>
                                    <li>②キャンセルによる使用料金等の取扱い<br />申込みの確定後、出店者様都合による取消の場合は下記の通りキャンセル料を申し受けます。<br /><br /><strong class="notice">○ご使用日の14日前以降のキャンセル ＝ 基本使用料金の全額</strong></li>
                                </ul>
                            </div>
                            <div class="content-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/guide/guide_img_05.jpg')); ?>" class="img" alt="イベント申込みイメージ"></div>
                        </div>
                    </section>
                    <section class="guide-area area2">
                        <h2 id="ttl2" class="p-title">新規申込みについて</h2>
                        <div class="new-application">
                            <div class="left">
                                <h3 class="title">事前提出書類の項目一覧</h3>
                                <p class="text">新規申込みの場合は、事前に提出いただく資料がございます。</p>
                            </div>
                            <div class="right">
                                <dl>
                                    <dt>会社謄本（現在事項全部証明書）</dt>
                                    <dd>半年以内発行のもの（写し可）<br />個人事業主の場合は不要</dd>
                                    <dt>住民票（個人出店の場合）</dt>
                                    <dd>半年以内発行のもの（写し可）</dd>
                                    <dt>食品営業許可証（食品営業の場合）</dt>
                                    <dd>開催期間中有効のもの（写し）</dd>
                                    <dt>催事企画書</dt>
                                    <dd></dd>
                                    <dt>会社概要、事業履歴書、他店開催実績</dt>
                                    <dd></dd>
                                    <dt>販売品目一覧</dt>
                                    <dd>当店にて販売予定のものすべて記載</dd>
                                </dl>
                            </div>
                        </div>
                        <button class="btn"><a href="<?php echo esc_url(home_url('events/file')); ?>"><span>申請書類はこちら</span></a></button>
                        <div class="area-content --grid">
                            <div class="content-box --line">
                                <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_notice03.png')); ?>" class="img" alt="告知アイコン"></div>
                                <h3 class="title">事前告知について</h3>
                                <p class="text">弊社SNSやHPにて掲載可能な画像を複数枚お送りください。</p>
                                <p class="text">PRポイントなど告知の文書に指定がございましたら、メールまたは資料にてお送りください。</p>
                            </div>
                            <div class="content-box --line">
                                <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_bnr.png')); ?>" class="img" alt="広告アイコン"></div>
                                <h3 class="title">広告バナー掲載について</h3>
                                <p class="text">当HPのメニュー内に広告用のバナーを設置いただけます。</p>
                                <p class="text">指定したリンク先への遷移も可能となります。</p>
                                <p class="text">催事の告知や自社HPのPRでご利用いただけます。</p>
                                <p class="text">料金は固定となり1箇所、1ヶ月設置で5,000円となります。</p>
                            </div>
                        </div>
                    </section>
                    <section class="guide-area area3">
                        <h2 id="ttl3" class="p-title">催事申請書について</h2>
                        <div class="area-content --grid">
                            <div class="content-box --line">
                                <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_schedule02.png')); ?>" class="img" alt="カレンダーアイコン"></div>
                                <h3 class="title">日時</h3>
                                <p class="text">搬入、搬出を含めた時間を記載ください。</p>
                                <p class="text">搬入は原則当日となります。規模により前日搬入をご希望の場合はご相談下さい。</p>
                            </div>
                            <div class="content-box --line">
                                <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_lending02.png')); ?>" class="img" alt="貸出用品アイコン"></div>
                                <h3 class="title">貸出用品</h3>
                                <p class="text">１日ごとに料金が発生致します。貸出品ごとの料金につきましては申請書事務処理欄の貸出用品料金をご覧ください。</p>
                                <p class="text">搬入は原則当日となります。規模により前日搬入をご希望の場合はご相談下さい。</p>
                            </div>
                            <div class="content-box --line">
                                <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_conditions04.png')); ?>" class="img" alt="使用条件アイコン"></div>
                                <h3 class="title">使用条件</h3>
                                <p class="text">[売上歩合]：ご利用を希望されているスペースごとに％が異なります。物販を希望されている場合はこちらとなります。</p>
                                <p class="text">[固定料金]：ご利用を希望されているスペースごとに金額が異なります。物販以外はこちらとなります。</p>
                            </div>
                            <div class="content-box --line">
                                <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_pay.png')); ?>" class="img" alt="精算方法アイコン"></div>
                                <h3 class="title">精算方法</h3>
                                <p class="text">[現金精算]：使用条件が売上歩合の場合は、当日３F事務所にてご精算となります。詳しくは当日３F事務所またはサービスカウンターにてご確認ください。</p>
                                <p class="text">[請求書発行銀行振込精算]：後日、メールにてご請求をお送りいたしますので翌月末までにお支払いお願いいたします。</p>
                                <p class="text">※振込手数料は貴社ご負担にて、請求金額全額をご入金くださいますようお願い申し上げます。</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>