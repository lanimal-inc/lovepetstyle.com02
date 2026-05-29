<body <?php body_class(); ?>>

    <header class="site-header">
        <div id="link_pagetop"></div>
        <div class="header_top">
            <?php if (is_front_page()) : ?>
                <h1 class="header_top_txt">東京23区のペットシッターならLOVEPET（ラブペット）｜散歩代行・トレーニング対応</h1>
            <?php else : ?>
                <p class="header_top_txt">東京23区のペットシッターならLOVEPET（ラブペット）｜散歩代行・トレーニング対応</p>
            <?php endif; ?>
        </div>
        <nav class="navbar navbar-default navbar-fixed-top mobile_only" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/navbar_back.png);">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
                        <span class="sr-only">ナビゲーション</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="row">
                        <div class="header_rogo">
                            <div>
                                <a href="<?php echo home_url('/'); ?>" class="navbar-brand">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_rogo.png" width="128" alt="LOVE PET">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="mainNav">
                        <ul class="nav navbar-nav navbar-right nav_linktop_mobile">
                            <li style="text-align: center;">
                                <a href="<?php echo home_url('/'); ?>">
                                    <span class="icon-top3"></span>&nbsp;トップページ
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right nav_mobile">
                            <li><a href="<?php echo home_url('/first/'); ?>"><span class="icon-first3"></span>&nbsp;初めてのお客様</a></li>
                            <li><a href="<?php echo home_url('/flow/'); ?>"><span class="icon-frow3"></span>&nbsp;ご利用の流れ</a></li>
                            <li><a href="<?php echo home_url('/job/'); ?>"><span class="icon-job3"></span>&nbsp;シッター内容</a></li>
                            <li><a href="<?php echo home_url('/menu/'); ?>"><span class="icon-price3"></span>&nbsp;料金プラン</a></li>
                            <li><a href="<?php echo home_url('/sitter/'); ?>"><span class="icon-sitter3"></span>&nbsp;シッター紹介</a></li>
                            <li class="area"><a href="<?php echo home_url('/area/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_area_white_aicon.png" alt="">対応エリア</a></li>
                            <li><a href="<?php echo home_url('/love/'); ?>"><span class="icon-love3"></span>&nbsp;動物愛護</a></li>
                            <li><a href="<?php echo home_url('/safe/'); ?>"><span class="icon-safe3"></span>&nbsp;安全安心対策</a></li>
                            <li><a href="<?php echo home_url('/question/'); ?>"><span class="icon-question3"></span>&nbsp;よくあるご質問</a></li>
                            <li><a href="<?php echo home_url('/hospital/'); ?>"><span class="icon-hospital3"></span>&nbsp;動物病院</a></li>
                            <!-- <li><a href="<?php echo home_url('/photo/'); ?>"><span class="icon-photo3"></span>&nbsp;お客様写真館</a></li> -->
                            <li><a href="<?php echo home_url('/voice/'); ?>"><span class="icon-voice3"></span>&nbsp;お客様からの声</a></li>
                            <li style="text-align: center; padding:8px 0 0 0;"><a href="<?php echo home_url('/about/'); ?>">会社概要</a></li>
                            <li style="text-align: center; padding:8px 0 0 0;"><a href="<?php echo home_url('/order/'); ?>">ご予約・問合せ</a></li>
                            <li style="text-align: center; padding:8px 0 0 0;"><a href="<?php echo home_url('/privacy/'); ?>">プライバシーポリシー</a></li>
                            <li style="text-align: center; padding:8px 0 0 0;"><a href="<?php echo home_url('/sitemap/'); ?>">サイトマップ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="header_2nd pc_only">
            <div class="nav">
                <ul>
                    <li class="item <?php echo is_page('first') ? 'first_on' : 'first'; ?>" style="margin:15px 0 0 0;">
                        <a href="<?php echo home_url('/first/'); ?>">初めてのお客様</a>
                    </li>
                    <li class="item <?php echo is_page('flow') ? 'flow_on' : 'flow'; ?>" style="margin:15px 90px 0 60px;">
                        <a href="<?php echo home_url('/flow/'); ?>">ご利用の流れ</a>
                    </li>
                    <li class="rogo" style="margin:10px 0 10px 0;">
                        <div>
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brandrogo_b.png" alt="LOVEPETロゴ">
                            </a>
                        </div>
                    </li>
                    <li class="item <?php echo is_page('job') ? 'job_on' : 'job'; ?>" style="margin:15px 60px 0 90px;">
                        <a href="<?php echo home_url('/job/'); ?>">シッター内容</a>
                    </li>
                    <li class="item <?php echo is_page('menu') ? 'price_on' : 'price'; ?>" style="margin:15px 0 0 0;">
                        <a href="<?php echo home_url('/menu/'); ?>">料金プラン</a>
                    </li>
                </ul>
            </div>

            <?php if ( ! is_front_page() ) : ?>
                <div class="nav" style="padding: 0 0 20px 0;">
                    <ul>
                        <li class="item top current"><a href="<?php echo home_url('/'); ?>">トップページ</a></li>
                        <li class="item <?php echo is_page('sitter') ? 'sitter_on' : 'sitter'; ?>">
                            <a href="<?php echo home_url('/sitter/'); ?>">シッター紹介</a>
                        </li>
                        <li class="item <?php echo is_page('area') ? 'area_on' : 'area'; ?>">
                            <a href="<?php echo home_url('/area/'); ?>">対応エリア</a>
                        </li>
                        <li class="item <?php echo is_page('love') ? 'love_on' : 'love'; ?>">
                            <a href="<?php echo home_url('/love/'); ?>">動物愛護への取り組み</a>
                        </li>
                        <li class="item <?php echo is_page('safe') ? 'safe_on' : 'safe'; ?>">
                            <a href="<?php echo home_url('/safe/'); ?>">安全安心対策のご紹介</a>
                        </li>
                        <li class="item <?php echo is_page('question') ? 'question_on' : 'question'; ?>">
                            <a href="<?php echo home_url('/question/'); ?>">よくあるご質問</a>
                        </li>
                        <li class="item <?php echo is_page('hospital') ? 'hospital_on' : 'hospital'; ?>">
                            <a href="<?php echo home_url('/hospital/'); ?>">動物病院のご紹介</a>
                        </li>
                        <!-- <li class="item <?php echo is_page('photo') ? 'photo_on' : 'photo'; ?>">
                            <a href="<?php echo home_url('/photo/'); ?>">お客様写真館</a>
                        </li> -->
                        <li class="item <?php echo is_page('voice') ? 'voice_on' : 'voice'; ?>">
                            <a href="<?php echo home_url('/voice/'); ?>">お客様からの声</a>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </header>