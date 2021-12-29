<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<?php wp_head();?>
	<title>会社設立後のお助け隊｜日本企業支援センター</title>
</head>
<body>
	<header>
		<div class="l-header">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2021/12/logo.png" alt="">
				</a>
			</div>
			<div class="header-menu">
				<nav>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/begin_about' ) ); ?>">はじめての方へ</a></li>
						<li><a href="<?php echo esc_url( home_url( '/campaign_flow' ) ); ?>">電子申請キャンペーン</a></li>
						<li><a href="<?php echo esc_url( home_url( '/voice' ) ); ?>">お客様の声</a></li>
						<li><a href="<?php echo esc_url( home_url( '/question' ) ); ?>">よくある質問</a></li>
						<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>">運営会社</a></li>
					</ul>
				</nav>
			</div>

			<!-- スマホ用メニュー -->
			<div class="header-nav">
				<nav>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/begin_about' ) ); ?>">はじめての方へ</a></li>
						<li><a href="<?php echo esc_url( home_url( '/campaign_flow' ) ); ?>">電子申請キャンペーン</a></li>
						<li><a href="<?php echo esc_url( home_url( '/voice' ) ); ?>">お客様の声</a></li>
						<li><a href="<?php echo esc_url( home_url( '/question' ) ); ?>">よくある質問</a></li>
						<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>">運営会社</a></li>
					</ul>
				</nav>
			</div>
			<!-- スマホ用メニュー -->
			
			<!-- レスポンシブ用メニューボタン -->
			<div class="navbtn">
                <i></i>
                <i></i>
                <i></i>
                <p class="navbtn_txt_menu">MENU</p>
                <p class="navbtn_txt_close">CLOSE</p>
            </div>
			<div class="header-contact">
				<div class="tel">
					<div class="inner">
						<p><span>0120-955-761</span></p>
						<p class="smaller">受付時間：10:00〜16:30(平日)</p>
					</div>
				</div>
				<div class="apply-form">
					<div class="inner">
						<p class="smaller">電子申請キャンペーン</p>
						<p class="bigger">お申込み</p>
					</div>
				</div>
			</div>
		</div>
	</header>