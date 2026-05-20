<?php include 'assets/inc/head.php'; ?>
<?php get_template_part('assets/inc/header'); ?>

<?php
$slug = get_post( $post )->post_name;
?>
<main class="page-<?php echo esc_attr( $slug ); ?>_main page-sec">

	<!--タイトル（PC）-->
	<!--背景-->
	<div class="title_box">
		<!--パンくずリスト-->
		<?php get_template_part('assets/inc/breadcrumb'); ?>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--アイコン-->
		<div class="section-maintitleWrap">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_3_job_l.png" class="center-block" alt="シッター内容">
			<div class="section-maintitle"><h1 class="section-maintitle_title">ペットシッターのお世話内容</h1></div>
		</div>
		<!-- /title_box -->
	</div>

	<!-- ==========================================================================
	1.犬の場合
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_job_1"></div>
	<div class="job_box_01">
		<div class="job_box_inner">
			<!--文章-->
			<p class="job_text_1">ご要望がありましたらお気軽にご相談ください。お世話は、事前の打ち合わせでお客様が行ってる<span
					style="color:#603f26; font-weight:bold;">「いつものお世話」</span>の方法を伺い、それに沿って行います。<br>
				事前の打ち合わせについては<span class="page_link"><a href="<?php echo home_url('/flow/'); ?>" target="_blank">「ご利用の流れ」</a></span>ページをご覧ください。</p><br>
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">犬のお世話内容</h2>
			</div>
			<!--写真-->
			<span class="flow_c_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3_job_p01.jpg" class="center-block" alt="犬の散歩"></span>
			<!--キャッチコピー-->
			<h3 class="job_midashi1">通常のペットシッターサービス</h3><br>
			<!--項目-->
			<table class="job_koumoku_1">
				<tr>
					<td>お散歩</td>
					<td>ご飯の用意</td>
					<td>トイレの処理</td>
				</tr>
			</table>
			<!--文章-->
			<p class="job_text_1">■開始前に手や衣服の除菌をし、専用のスリッパを履いてからお世話に入ります。<br>
				■お散歩は普段歩き慣れているコースを歩き、途中のトイレの処理も行います。<br>
				■リードやお散歩バッグ、排泄の処理に必要なグッズ等はお客様の物をご利用させて頂きますので、予めご用意をお願い致します。<br>
				■お散歩時の安全面を考えダブルリードを採用しております。お客様のリードと別にシッターが持参する肩掛けのリードも装着して安全にお散歩を致します。<br>
				■遊びが好きな子にはペットシッターが普段に近い方法で一緒に遊びます。<br>
				■ご要望があればブラッシングなどのお手入れも承ります。<br>
				■ペットシッター終了後、<span style="color:#603f26; font-weight:bold;">報告書</span>の提出、及び<span
					style="color:#603f26; font-weight:bold;">報告メール、LINE</span>を致します。</p><br>
			<!--キャッチコピー-->
			<h3 class="job_midashi1">犬のお散歩代行</h3><br>
			<!--項目-->
			<table class="job_koumoku_1">
				<tr>
					<td>お散歩のみ</td>
				</tr>
			</table>
			<!--文章-->
			<p class="job_text_1">■お散歩は普段歩き慣れているコースを歩き、途中のトイレの処理も行います。<br>


				■お散歩代行コースは40分の時間制となりますが、時間の延長も可能でドックランにも足を運べます。<br>

				■リードやお散歩バッグ、排泄の処理に必要なグッズ等はお客様の物をご利用させて頂きますので、予めご用意をお願い致します。<br>

				■お散歩時の安全面を考えダブルリードを採用しております。お客様のリードと別にシッターが持参する肩掛けのリードも装着して安全にお散歩を致します。</p><br>
			<!--job_box_inner -->
		</div>
		<!--job_box_01-->
	</div>

	<!-- ==========================================================================
	2.猫の場合
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_job_2"></div>
	<div class="job_box_02">
		<div class="job_box_inner">
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">猫のお世話内容</h2>
			</div>
			<!--写真-->
			<span class="flow_c_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3_job_p02.jpg" class="center-block" alt="猫のブラッシング"></span>
			<!--空白行-->
			<p style="height:50px; display: block;"></p>
			<!--項目-->
			<table class="job_koumoku_1">
				<tr>
					<td>ご飯の用意</td>
					<td>トイレの掃除</td>
					<td>遊び相手</td>
				</tr>
			</table>
			<!--文章-->
			<p class="job_text_1">■開始前に手や衣服の除菌をし、専用のスリッパを履いてからお世話に入ります。<br>
				■人懐っこい子ならばいつもと同じように遊びます。人見知りで隠れてしまう子の場合、長時間滞在すると、かえってストレスになる事もあるので、様子を見ながらお世話します。<br>
				■ご要望があればブラッシングなどのお手入れも承ります。<br>
				■ペットシッター終了後、<span style="color:#603f26; font-weight:bold;">報告書</span>の提出、及び<span
					style="color:#603f26; font-weight:bold;">報告メール、LINE</span>を致します。</p>
			<!--job_box_inner -->
		</div>
		<!--job_box_02-->
	</div>
	<!-- ==========================================================================
	3.24時間ペットシッティング＆宿泊コース
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_job_3"></div>
	<div class="job_box_01">
		<div class="job_box_inner">
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">24時間ペット<br class="sp">シッティング・宿泊コース</h2>
			</div>
			<!--写真-->
			<span class="flow_c_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p06.jpg" class="center-block" alt="犬と就寝"></span>
			<!--空白行-->
			<p style="height:50px; display: block;"></p>
			<!--文章-->
			<p class="job_text_1">
				業界初の24時間ペットシッティングのご紹介です。お留守番が苦手なペットや、寂しがり屋なペットには勿論、少しでも目を離す事ができない大切なペットを、ハイクラスなペットシッターが24時間体制でお世話致します。
			</p><br>
			<!--項目-->
			<table class="job_koumoku_2">
				<tr>
					<td>お散歩</td>
					<td>ご飯</td>
				</tr>
			</table>
			<!--文章-->
			<p class="job_text_1">■お散歩･･･朝・夕方2回（1回のみのワンちゃんの場合は1回）<br>
				■ご飯･･･ご希望の時間帯に与えます。</p><br>
			<!--キャッチコピー-->
			<h3 class="job_midashi1">いつも通りの生活環境で<br class="sp">ペットのお世話</h3><br>
			<!--文章-->
			<p class="job_text_1">通常のコースよりも、更にお客様の生活状況を詳しくお伺いし、起床時間から就寝時間までいつも通りの生活リズムでお世話を致します。<br><br>
				■急な体調不良にも気付く事ができ、万が一の場合には、通院先や提携先の動物病院へ連れていき、ペットの体調不良にも迅速に対応を致します。<br>
				■開始前に手や衣服の除菌をし、専用のスリッパを履いてからお世話に入ります。<br>
				■ペットシッター中の報告もお世話の要所（例：<span
					style="color:#603f26; font-weight:bold;">起床時、お散歩後、食事後、就寝前</span>）でお送り致しますので、24時間ご安心してご利用頂けます。<br><br>
				■宿泊コースは基本のお世話内容で12時間対応させて頂きます。その他の内容は飼い主様とご相談させて頂きます。</p>
			<!--job_box_inner -->
		</div>
		<!--job_box_01-->　
	</div>
	<!-- ==========================================================================
	4.ウサギ等の小動物の場合
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_job_4"></div>
	<div class="job_box_02">
		<div class="job_box_inner">
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">うさぎ・小動物の<br class="sp">お世話内容</h2>
			</div>
			<!--写真-->
			<span class="flow_c_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3_job_p04.jpg" class="center-block" alt="リスのシッター"></span>
			<!--空白行-->
			<p style="height:50px; display: block;"></p>
			<!--項目-->
			<table class="job_koumoku_2">
				<tr>
					<td>ご飯の用意</td>
					<td>トイレの掃除</td>
				</tr>
			</table>
			<!--文章-->
			<p class="job_text_1">■開始前に手や衣服の除菌をし、専用のスリッパを履いてからお世話に入ります。<br>
				■小動物のお世話は、飼い主さんによって様々です。ペットにストレスを与えない事に注意して、普段と変わらないお世話をさせて頂きます。<br>
				■ペットシッター終了後、<span style="color:#603f26; font-weight:bold;">報告書</span>の提出、及び<span
					style="color:#603f26; font-weight:bold;">報告メール、LINE</span>を致します。</p>
			<!--job_box_inner -->
		</div>
		<!--job_box_02-->
	</div>
	<!-- ==========================================================================
	4.の次　10.　トリミングサロン＆動物病院通院代行コース
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_job_55"></div>
	<div class="job_box_01">
		<div class="job_box_inner">
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">トリミングサロン・<br class="sp">動物病院の通院代行</h2>
			</div>
			<!--写真-->
			<span class="flow_c_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3_job_p10.jpg" class="center-block" alt="トリミング"></span>
			<!--空白行-->
			<p style="height:50px; display: block;"></p>
			<!--項目-->
			<p class="job_text_1">
				飼い主様に代わりにプロのペットシッターが大切なご家族をトリミングサロンや動物病院へ安全に送迎します。トリミングサロンや動物病院へ連れていきたいけれど、外出をする事を控えられている方、足を怪我してしまい、連れて行くことができない方、どうしても家にいなければいけない予定と重なってしまっている方など、様々なニーズにお応えいたします。
			</p><br>
			<!--文章-->
			<p class="job_text_1">■当店の会員様であることが条件となります。ご新規のお客様は事前打ち合わせによるペットシッター会員のお手続きをお願いいたします。<br>
				■送迎先のトリミングサロンや動物病院は過去にご利用歴がある所とし、新規での対応は致しません。<br>
				■ペットに著しい凶暴性が見られる場合は、送迎が困難と判断しお断りさせて頂きます。<br>
				■送迎時は飼い主様のご在宅を必須とし、受け渡し、引き渡し時の立会いとキャリーバッグへの搬入をお客様で行って頂きます。<br>
				■急患の場合は可能な限り対応いたしますので、まずはご相談くださいませ。<br><br>
				※その他ご利用にあたり、注意事項に同意して頂く必要がございます。</p>
			<!--job_box_inner -->
		</div>
		<!--job_box_02-->
	</div>

	<!-- ==========================================================================
	6.ペット介護　
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_job_6"></div>
	<div class="job_box_01">
		<div class="job_box_inner">
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">ペット介護サービス</h2>
			</div>
			<!--写真-->
			<span class="flow_c_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3_job_p06.jpg" class="center-block" alt="犬の食事風景"></span>
			<!--空白行-->
			<p style="height:50px; display: block;"></p>
			<!--文章-->
			<p class="job_text_1">
				老齢により、以前に比べて窮屈になってしまったペットの生活を少しでも快適な状態にします。介助だけでなく、再び元気になってくれる事を目的とした介護を行います。言葉が通じないペットだからこそ、心の言葉を汲み取り、愛情を込めて介護のお手伝いを致します。<br><br>
				【例】<br>
				・排泄や食事の介助を必要とするので、家を留守にする事ができない。<br>
				・年齢の為、自力での歩行が困難で、足腰が弱くなり立つこともできない。<br>
				・年齢と共に夜鳴きが出て来てしまい、対処の方法を知りたい。<br>
				・昔と違った行動や、言う事を聞かなくなったりと、痴呆の様な症状が発生している。<br><br>
				■日頃、行なっている介護を代行させて頂いたり、飼い主様と一緒に介護のお手伝いをさせて頂いたりとペットの介護レベルに応じて、様々な方法でペットと飼い主様の負担を取り除ける様に努力致します。<br>
				■ペットシッター終了後、<span style="color:#603f26; font-weight:bold;">報告書</span>の提出、及び<span
					style="color:#603f26; font-weight:bold;">報告メール、LINE</span>を致します。</p>
			<!--job_box_inner -->
		</div>
		<!--job_box_02-->
	</div>
	<!-- ==========================================================================
	7.シャンプーコース
=========================================================================== -->
	<!-- ページリンク用 -->
	<!-- <div id="link_job_7"></div>
	<div class="job_box_02">
		<div class="job_box_inner">
			<h2><span class="job_title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3_job_title07.png" class="center-block" alt="シャンプーコース"></span>
			</h2>
			<span class="flow_c_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3_job_p07.jpg" class="center-block" alt="犬のシャンプー風景"></span>
			<p style="height:50px; display: block;"></p>
			<p class="job_text_1">
				シャンプーコースでは、飼い主様のご自宅でシャンプーやお手入れを行うサービスです。開始前に手や衣服の除菌をし、専用のスリッパを履いてからお世話に入ります。お風呂場を貸して頂き、ワンちゃんの体をシャンプー致します。<br><br>
				シャンプー以外でも爪切り、耳掃除、足裏、肛門周り、お腹の毛のカット、肛門腺絞り等のお手入れも各種行なっておりますので、お気軽にお申し付け下さい。<br><br>
				■シャンプーの内容は、シャンプーと各種お手入れが含まれております。<br>
				■シャンプーコースでお客様にご用意して頂く物は、基本的にシャンプーのみとなっております。<br>
				■ドライヤーやタオル、爪切りやバリカン等の道具は全てご用意致します。<br>
				■シャンプーが無いお客様は、私達が厳選して選んだ無添加シャンプーのご使用させて頂きます。<br>
				■ペットシッター終了後、<span style="color:#603f26; font-weight:bold;">報告書</span>の提出、及び<span
					style="color:#603f26; font-weight:bold;">報告メール、LINE</span>を致します。</p>
		</div>
	</div> -->
	<!-- ==========================================================================
	8.その他（熱帯魚・爬虫類等）のペット　
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_job_8"></div>
	<div class="job_box_02">
		<div class="job_box_inner">
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">熱帯魚・爬虫類などの<br class="sp">お世話内容</h2>
			</div>
			<!--写真-->
			<span class="flow_c_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3_job_p08.jpg" class="center-block" alt="爬虫類のシッター風景"></span>
			<!--空白行-->
			<p style="height:50px; display: block;"></p>
			<!--文章-->
			<p class="job_text_1">その他、水槽で飼っている熱帯魚や海水魚等の場合は、ご飯の用意が基本的なお世話の内容となります。<br><br>
				■トラブルの原因となりますので、水槽のお掃除や水の入れ替えなどは致しませんので、予めご了承ください。<br>
				■開始前に手や衣服の除菌をし、専用のスリッパを履いてからお世話に入ります。<br>
				■爬虫類等のペットもお気軽にご相談ください。<br>
				■ペットシッター終了後、<span style="color:#603f26; font-weight:bold;">報告書</span>の提出、及び<span
					style="color:#603f26; font-weight:bold;">報告メール、LINE</span>を致します。</p>
			<!--job_box_inner -->
		</div>
		<!--job_box_02-->
	</div>

<?php get_template_part('assets/inc/footer'); ?>