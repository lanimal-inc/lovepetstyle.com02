<?php include 'assets/inc/head.php'; ?>
<?php get_template_part('assets/inc/header'); ?>

<main class="front-page page-sec">

    <div class="container-fluid">

        <!-- カルーセルスライド！ -->
        <div class="row">
            <div id="c1" class="carousel slide taisaku_mobile" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                    <li data-target="#c1" data-slide-to="0" class="active"></li>
                    <li data-target="#c1" data-slide-to="1"></li>
                    <li data-target="#c1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active slide_center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_image4.jpg" alt="愛する家族のために幸せな時間をお届けします。4">
                    </div>
                    <div class="item slide_center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_image5.jpg" alt="愛する家族のために幸せな時間をお届けします。5">
                    </div>
                    <div class="item slide_center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_image6.jpg" alt="愛する家族のために幸せな時間をお届けします。6">
                    </div>
                    </div>
                </div>
            </div>



            <!-- ナビゲーションバー下部（モバイル用） -->
        <div class="row mobile_only">
            <!-- 背景 -->
            <div class="header_mobile_bottom">
                <!-- お問い合わせ -->
                <div class="floating-cta-mobile">
                    <a href="<?php echo home_url('/order/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_reserve_mobile.png" width="384" alt="予約ボタン"></a>
                </div>
                <style>
                    .floating-cta-mobile {
                        position: fixed;
                        bottom: 20px;
                        left: 50%;
                        transform: translateX(-50%);
                        z-index: 1000;
                    }

                    .cta-button {
                        background-color: #f7e160;
                        color: #000;
                        padding: 10px 20px;
                        border-radius: 50px;
                        text-decoration: none;
                        font-weight: bold;
                    }

                    @media (min-width: 768px) {
                        .floating-cta-mobile {
                            display: none;
                        }
                    }
                </style>


                <!-- 左側ボックス -->
                <div class="col-xs-6 header_mobile_info">
                    <!-- 電話 -->
                    <div class="header_mobile_tel"><span
                            style="font-size:12px; color:#fff;">お気軽にお問い合わせ下さい！</span><br>
                        <span style="font-size:8px; color:#f7e160;">きて！よいシッター わんにゃんGO！</span><br>
                        <span class="tel_link mobile_only" style="font-size:20px;">&nbsp;</span><span
                            class="tel_link" style="font-size:22px;">0120-984-125</span>
                        <span class="pc_only" style="font-size:20px;">&nbsp;</span><span class="pc_only"
                            style="font-size:22px;">0120-984-125</span>
                        <a href="http://ameblo.jp/lovepet-ebisu/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_brog_off.jpg"
                                width="180" alt="お世話ブログ"></a>
                    </div>
                    <!-- /左側ボックス -->
                </div>

                <!-- 右側ボックス -->
                <div class="col-xs-6  header_mobile_info">
                    <!-- 営業時間 -->
                    <div class="header_mobile_title">営業時間（年中無休）
                    </div>
                    <div class="header_mobile_detail">AM9:00～PM21:00</div>
                    <!-- お電話受付時間 -->
                    <div class="header_mobile_title">お電話受付時間（年中無休）
                    </div>
                    <div class="header_mobile_detail">AM9:00～PM18:00</div>
                    <!-- メール受付 -->
                    <div class="header_mobile_title">メール受付（24時間対応）
                    </div>
                    <div class="header_mobile_detail">info@lovepetstyle.jp</div>
                    <!-- 右側ボックス -->
                </div>

                <!--?/背景 -->
            </div>
            <!--?/row -->
        </div>


        <!-- ナビゲーションバー下部（PC用） -->
        <div class="row pc_only">
            <div class="header_down_pc"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/navbar_back.png); height:380px; padding:30px 0 0 0;">
                <div class="nav"> <ul> <li class="item top_on"><a href="<?php echo home_url('/'); ?>">トップページ</a></li>
                        <li class="item sitter"><a href="<?php echo home_url('/sitter/'); ?>">シッター紹介</a></li>
                        <li class="item area"><a href="<?php echo home_url('/area/'); ?>">対応エリア</a></li>
                        <li class="item love"><a href="<?php echo home_url('/love/'); ?>">動物愛護への取り組み</a></li>
                        <li class="item safe"><a href="<?php echo home_url('/safe/'); ?>">安全安心対策のご紹介</a></li>

                        <li class="item question"><a href="<?php echo home_url('/question/'); ?>">よくあるご質問</a></li>
                        <li class="item hospital"><a href="<?php echo home_url('/hospital/'); ?>">動物病院のご紹介</a></li>
                        <!-- <li class="item photo"><a href="<?php echo home_url('/photo/'); ?>">お客様写真館</a></li> -->
                        <li class="item voice"><a href="<?php echo home_url('/voice/'); ?>">お客様からの声</a></li>
                    </ul>
                    </div>
                <div class="col-xs-12 rezarb_box flow_a_rezave">
                    <ul class="rezarb_list">
                        <li class="pc_only"><a href="<?php echo home_url('/order/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_reserve_off.png"
                                    alt="予約ボタン"></a></li>
                        <li class="mobile_only"><a href="<?php echo home_url('/order/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_reserve_mobile.png"
                                    alt="予約ボタン"></a></li>
                    </ul>
                </div>

                <div class="col-md-1"></div>
                <div class="col-md-3 header_down_pc_brog pc_only"><a href="http://ameblo.jp/lovepet-ebisu/"
                        target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_brog_off.jpg" alt="お世話ブログ"></a>
                </div>
                <div class="col-md-3 header_down_pc_tel"><span
                        style="font-size:14px; color:#fff;">お気軽にお問い合わせ下さい！</span><br>
                    <span style="font-size:12px; color:#f7e160;">きて！よいシッター わんにゃんGO！</span><br>
                    <span style="font-size:28px; color:#fff;">&nbsp;</span><span
                        style="font-size:30px; color:#fff;">0120-984-125</span>
                </div>
                <div class="col-md-5 header_down_pc_info"><span style="font-size:16px;">営業時間：<span
                            style="color:#fff;">AM9:00～PM21:00（年中無休）</span><br>お電話受付時間：<span
                            style="color:#fff;">AM9:00～PM18:00（年中無休）</span><br>24時間メール受付：<span
                            style="color:#fff;">info@lovepetstyle.jp</span></span>

                </div>
            </div>
        </div>

    </div>

    <div id="link_top_2"></div>
    <!-- <div class="top-news top_3_box wrap_whtstime_1_pc">
        <div class="top-news-inner">
            <p>「お友達紹介キャンペーン」開催！<br>
                ご紹介いただいた会員様は お世話1回無料。
                ご紹介でご登録されたお客様は 登録料4,000円無料。<br><br>

                期間：4月1日〜4月30日までこのお得な機会をぜひご利用ください。
            </p>
        </div>
    </div> -->
    <div class="top_3_box wrap_whtstime_1_pc">
        <div class="top_1_title">
            <div class="section-header">
                <h2 class="section-title"><span class="section-title_small">ペットのお世話でお悩みの方は</span><br>ペットシッターのご利用が<br class="sp">おすすめ</h2>
            </div>
        </div>
        <ul class="top_3_list">
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_10_kansen.png" alt="感染された時にお世話が不安な方"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_11_hitorigurashi.png" alt="1人暮らしで家を多く空ける方"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_12_stress.png" alt="ワンちゃん、ネコちゃんのストレスが心配な方"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_1_travel.png" alt="ご旅行に行かれる時"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_2_business.png" alt="急なご出張、この子を誰にも頼めない時"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_3_job.png" alt="お仕事が忙しくてペットのお世話が出来ない時"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_4_mental.png" alt="うちの子は神経質でペットホテルには合わない時"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_5_shy.png" alt="ワンちゃん、ネコちゃんが人見知りで心配な方"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_6_longtime.png" alt="長時間のペットシッターをご検討の方"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_7_bigdog.png" alt="大型犬等、力の強いワンちゃんを男性ペットシッターに預けたい方"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_8_sick.png" alt="散歩が大好きなのに病気や怪我で連れて行けない時"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/copy_9_care.png" alt="大切なペットに介護の必要が生じてしまった時"></li>
        </ul>
        <div class="clear"></div>
        <div class="top_3_text">
            <div>
                <div class="top_3_text_2">
                    具体的なペットシッター内容についてはコチラをご覧下さい。東京23区、どこでもお伺い致します。メールでのお見積もりやご相談も、無料で受け付けておりますのでお気軽にお問合わせ下さい。
                </div>
                <span class="pc_only"><a href="<?php echo home_url('/job/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_link_job_off.png"
                            alt="シッター内容のご案内"></a></span>
                <span class="mobile_only"><a href="<?php echo home_url('/job/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_link_job_mobile.png"
                            alt="シッター内容のご案内"></a></span>
            </div>
        </div>
    </div>


    <!-- 対応エリア -->
    <div class="top_3_box wrap_whtstime_1_pc">
        <div class="top_1_title">
            <div class="section-header">
                <h2 class="section-title"><span class="section-title_small">東京23区の</span><br>ペットシッター対応エリア</h2>
            </div>
        </div>
        <div class="sec_inner erea_box_link">
            <div class="erea_box_link_in">
                <a href="<?php echo home_url('/area/#tokyo'); ?>" class="imgArea">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_link_tokyo_top.png" alt="東京エリア">
                </a>
            </div>
            </div>
    </div>


    <!-- 安心してご利用いただくために -->
    <div id="link_top_3"></div>
    <div class="top_4_box wrap_whtstime_1_pc">
        <div class="top_1_title">
            <div class="section-header">
                <h2 class="section-title"><span class="section-title_small">東京23区で選ばれるペットシッター</span><br>LOVEPET（ラブペット）に<br class="sp">ついて</h2>
            </div>
        </div>
        <ul class="merits_list">
            <li class="merits_list_item">
                <h3 class="merits_list_item__title">ペットシッター<br>補償制度加入店です</h3>
                <hr>スタッフ全員がペットシッターの保険制度を含むペットシッター補償に加入し、万全を期して大切なペットのお世話をしております。
            </li>
            <li class="merits_list_item">
                <h3 class="merits_list_item__title">女性ペットシッターが<br>在籍しています</h3>
                <hr>一人暮らしの女性も安心です。ご希望の方は優先的に派遣いたしますのでお気軽にご相談下さい。
            </li>
            <li class="merits_list_item">
                <h3 class="merits_list_item__title">鍵のお取り扱いに<br>ついて①</h3>
                <hr>「鍵預り証」及び、返却の際の「鍵返却証」の手交を発行いたします。<span
                    style="color:#603f26; font-weight:bold;">社員証の提示、在籍シッター全員に身元保証人を立てて細心の注意を払います</span>
            </li>
            <li class="merits_list_item">
                <h3 class="merits_list_item__title">鍵のお取り扱いに<br>ついて②</h3>
                <hr>定期的なお客様には鍵の保管庫により厳重にLOVE PETの事務所にて保管・管理しております。
            </li>
            <li class="merits_list_item">
                <h3 class="merits_list_item__title">お客様のプライバシーを<br>厳守いたします</h3>
                <hr>お客様の指定通りされたお部屋のみ使用し、お客様の家内事情はいかなる事があっても他言しません。個人情報に関する法律を遵守します。
            </li>
            <li class="merits_list_item">
                <h3 class="merits_list_item__title">圧倒的なサービスで、<br>お客様の満足をお約束します</h3>
                <hr>スマホ等を使った24時間遠隔操作カメラや緊急震災対策システムの導入等、サービスの充実に取り組んでいます。<br>詳しい内容は<span class="page_link"><a
                        href="<?php echo home_url('/first/?id=link_first_1'); ?>">&nbsp;コチラ&nbsp;</a></span>をご覧下さい。
            </li>
        </ul>
        <div class="clear"></div>
    </div>


    <!-- メディア掲載情報 -->
    <div id="link_top_4"></div>
    <div class="top_5_box wrap_whtstime_1_pc">
        <!-- タイトル -->
        <div class="top_1_title">
            <div class="section-header">
                <h2 class="section-title"><span class="section-title_small">ペットシッターとしての</span><br>メディア掲載実績｜LOVEPET（ラブペット）</h2>
            </div>
        </div>
        <ul class="top_5_list">
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media_photo1.png" alt="Wan">2012年2月14日に発行された雑誌<strong>「Wan」</strong>に掲載されました。</li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media_photo2.png" alt="いぬのきもち">2012年4月10日に発行された雑誌<strong>「いぬのきもち」</strong>に掲載されました。
            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media_photo3.png"
                    alt="注目情報はこれだ！">2012年3月26日に発行の<strong>「注目情報はこれだ！」</strong>に、ペット業界からは唯一注目され取材を受け、掲載されました。</li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media_photo4.png" alt="猫びより">2012年12月12日に発行された雑誌<strong>「猫びより」</strong>に掲載されました。</li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media_photo5.png" alt="ONE BRAND">2013年9月1日に発行されたマガジン<strong>「ONE
                    BRAND」</strong>に協賛としてご紹介されました。</li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media_photo6.png"
                    alt="Pekumaga3-4月号">2016年3月1日に発行された<strong>Pekumaga3-4月号</strong>に東京で大注目のベストペットシッターとして取材を受け掲載されました。
            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/media_photo7.png" alt="COMPANY TANK">2016年5月1日発行された<strong>COMPANY
                    TANK</strong>に注目企業として女優の杉田かおるさんより取材を受けました。</li>

            <li>
                <p class="radio_text">
                    <strong>TV放送</strong>
                    <br>●2016年6月1日　　TBS『トコトン掘り下げ隊！生き物にサンキュー！！』放送
                    <br>●2017年10月4日　フジテレビ『おじゃMAP!!』撮影協力
                    <br>●2017年11月3日　AbemaTV『72時間ホンネテレビ』撮影協力
                    <br>●2018年3月25日　日本テレビ『おしゃれイズム』放送
                </p>
                <p></p>
            </li>

            <li>
                <p class="radio_text">
                    <span class="pc_only">
                        <audio src="<?php echo get_template_directory_uri(); ?>/assets/img/radio.mp3" controls preload="none"></audio>
                    </span>
                    <br>LOVE PETが<strong>ラジオ</strong>で放送されました<br>
                    放送日：2011年12月9日<br>
                    放送局：FM Fuji 78.6MHZ<br>
                    放送時間：AM 9:30～9:54<br>
                    <span class="mobile_only radio">
                        <span class="page_link">
                            <a href="<?php echo home_url('/radio/'); ?>" target="_blank" onclick="window.open(this.href, '', 'width=350,height=30'); return false;">ご視聴はコチラ</a>
                        </span>
                        （別ウインドウで開きます）
                    </span>
                </p>
            </li>
        </ul>
        <!--フロートクリア用-->
        <div class="clear"></div>
        <!-- top_5_box -->
    </div>


    <!-- 3大セールスポイント -->
    <div class="top_6_box wrap_whtstime_1_pc">
        <ul class="top_6_list">
            <li class="top_6_listitem top_6_listitem01"><a href="<?php echo home_url('/safe/'); ?>">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_sinsai_off_v260515.png" width="300" alt="欣求震災対策システム"></div>
                </a></li>
            <li class="top_6_listitem top_6_listitem02"><a href="<?php echo home_url('/safe/#link_camera'); ?>">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_kamera_off_v260515.png" width="300" alt="大反響!!24h遠隔操作カメラ"></div>
                </a></li>
        </ul>
    </div>


    <!-- キャンペーン情報 -->
    <div id="link_top_1"></div>
    <div class="top_1_box">

        <div class="top_1_title">
            <div class="section-header">
                <h2 class="section-title">ペットシッターのお知らせ＆<br class="sp">お世話記録<br><span class="section-title_small">LOVEPET（ラブペット）会員様</span></h2>
            </div>
        </div>

        <div class="top_1_cam">
            <div>
                <span class="cam_top">
                    <span class="icon-new" style="color:#ae1f24;"> </span>&nbsp;
                    NEW 2025年3月23日 GWのご予約を開始致します！<br><br>
                    <span class="cam_now">
                        ☆GWのご予約を開始します！☆<br><br>
                        GW年始期間は【4/29（水） ～ 5/10（日）】までとします。<br>
                        大変混雑が予想されますので、お早目のご予約をお願い致します。<br>
                        ※ご予約状況により予約を終了する場合がございますので予めご了承ください。<br>
                        ※日程がお分かり次第お早目のご予約をお願い致します。<br><br>
                    </span><br>
                    <hr>

                    <span class="cam_top">2025年11月10日 年末年始のご予約を開始致します！<br><br>
                    <span class="cam_now">
                        ☆年末年始のご予約を開始します！☆<br><br>
                        年末年始期間は【12月27日（土）～1月4日（日）】までとします。<br>
                        大変混雑が予想されますので、お早目のご予約をお願い致します。<br>
                        ※ご予約状況により予約を終了する場合がございますので予めご了承ください。<br>
                        ※日程がお分かり次第お早目のご予約をお願い致します<br><br>
                    </span><br>
                    <hr>

                    <span class="cam_top">2025年9月1日 シルバーウィークのご予約を開始致します！<br><br>
                    <span class="cam_now">
                        ☆シルバーウィークのご予約を開始します！☆<br><br>
                        シルバーウィーク期間は【9月16日（火）～9月24日（水）】までとします。<br>
                        大変混雑が予想されますので、お早目のご予約をお願い致します。<br>
                        ※ご予約状況により予約を終了する場合がございますので予めご了承ください。<br>
                        ※日程がお分かり次第お早目のご予約をお願い致します<br><br>
                    </span><br>
                    <hr>

                    <span class="cam_top">2025年7月1日 お盆のご予約を開始致します！<br><br>
                    <span class="cam_now">
                        ☆お盆のご予約を開始致します！☆<br><br>
                        お盆期間は【8月9日（土）～8月17日（日）】までとします。<br>
                        大変混雑が予想されますので、お早目のご予約をお願い致します。<br>
                        ※ご予約状況により予約を終了する場合がございますので予めご了承ください。<br>
                        ※日程がお分かり次第お早目のご予約をお願い致します。<br><br>
                    </span><br>
                    <hr>

                    <span class="cam_top">2025年4月1日　GWのご予約を開始致します<br><br>
                    <span class="cam_now">
                        ☆GWののご予約を開始します!☆<br><br>
                        GW期間は【4月26日（土）～5月11日（日）】までとします。<br>
                        大変混雑が予想されますので、お早目のご予約をお願い致します。<br>
                        ※ご予約状況により予約を終了する場合がございますので予めご了承ください。<br>
                        ※日程がお分かり次第お早目のご予約をお願い致します。<br><br>
                    </span><br>
                    <hr>

                    <span class="cam_top">2024年11月1日 年末年始のご予約を開始致します！<br><br>
                    <span class="cam_now">
                        ☆年末年始のご予約を開始します！☆<br><br>
                        年末年始期間は【12月28日（土）～1月5日（日）】までとします。<br>
                        大変混雑が予想されますので、お早目のご予約をお願い致します。<br>
                        ※ご予約状況により予約を終了する場合がございますので予めご了承ください。<br>
                        ※日程がお分かり次第お早目のご予約をお願い致します。<br><br>
                    </span><br>
                    <hr>

                    <span class="cam_top">2021年9月15日　安全なお散歩を行う為、ダブルリードを採用致しました！<br><br>
                    <span class="cam_now">
                        この度、弊社では更なる安全性を確保する為、お散歩時のダブルリードを必須とする事と致しました。<br>
                        お客様のご用意頂くリードとは別に、シッターが持参する肩掛けのリードも同時に装着し、これまで以上に安心・安全でお散歩ができるよう配慮を致します。
                    </span><br>
                    <hr>

                    <span class="cam_top"><span style="color:#ae1f24;"></span>&nbsp;2020年11月19日
                        トリミングサロン＆動物病院通院代行コースを開始いたしました！<br><br>
                        <span class="cam_now">
                            昨今の社会情勢により外出する事を控えられている方、連れていきたいけれどご都合が悪いという方はどうぞお気軽にご利用くださいませ。<br>
                            ※ご利用にあたり、注意事項に同意して頂く必要がございます。詳細は<a href="<?php echo home_url('/job/#trimming'); ?>">コチラ</a>をご覧ください<br>
                        </span><br>
                        <hr>

                    <span class="cam_title"><span style="color:#ae1f24;"></span>&nbsp;2020年1月1日 第1弾フランチャイズ募集開始！</span><br><br>
                    <span class="cam_now">
                        2020年1月1日より待望の第1弾フランチャイズの募集を開始しました！エリアは【東京23区・神奈川県西区・中区】資料請求、詳細等はこちらをご覧ください。<br><br>
                        <span class="page_link">
                            <a href="<?php echo home_url('/franchise/'); ?>">&nbsp;<?php echo home_url('/franchise/'); ?>&nbsp;</a>
                        </span>
                        <br>
                    </span><br>
                    <hr>

                    <span class="cam_title">2012年3月1日</span><br>
                    <span class="cam_old">動物病院紹介サービスがご利用出来ます。動物病院をお探しの方はぜひご相談ください。詳細は<a href="<?php echo home_url('/hospital/'); ?>">コチラ</a>。</span><br>
                    <hr>
            </div>
            </div>

        <center>
            <div class="top_f_cam pc_only">
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v17.0"></script>
                <div class="fb-page" data-href="https://www.facebook.com/lovepet.ebisu" data-tabs="timeline"
                    data-width="400" data-height="600" data-small-header="false" data-adapt-container-width="true"
                    data-hide-cover="true" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/lovepet.ebisu" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/lovepet.ebisu">Love Pet</a>
                    </blockquote>
                </div>
            </div>
        </center>
        <div class="clear"></div>
    </div>

<?php get_template_part('assets/inc/footer'); ?>