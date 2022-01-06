<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
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
						<li class="menu__single"><a href="<?php echo esc_url( home_url( '/begin_about' ) ); ?>">
						はじめての方へ
						<span>
						<svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 324.4 210.9">
						<polygon points="162.2,210.9 0,48.7 48.7,0 162.2,113.5 275.7,0 324.4,48.7 	"></polygon>
						</svg>
						</span>
						</a>
						<ul class="menu__second-level">
							<li><a href="<?php echo esc_url( home_url( '/begin_about' ) ); ?>">お助け隊とは</a></li>
							<li><a href="<?php echo esc_url( home_url( '/begin_reason' ) ); ?>">選ばれる理由</a></li>
							<li><a href="<?php echo esc_url( home_url( '/begin_paper' ) ); ?>">会社設立後の届出書類</a></li>
							<li><a href="<?php echo esc_url( home_url( '/begin_tax-accountant' ) ); ?>">税理士は</a></li>
						</ul>
						</li>
						<li class="menu__single"><a href="<?php echo esc_url( home_url( '/campaign_manga' ) ); ?>">電子申請キャンペーン
						<span>
						<svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 324.4 210.9">
						<polygon points="162.2,210.9 0,48.7 48.7,0 162.2,113.5 275.7,0 324.4,48.7 	"></polygon>
						</svg>
						</span></a>
						<ul class="menu__second-level">
							<li><a href="<?php echo esc_url( home_url( '/campaign_flow' ) ); ?>">マンガで分かる</a></li>
							<li><a href="<?php echo esc_url( home_url( '/campaign_flow' ) ); ?>">ご利用の流れ</a></li>
						</ul>
						</li>
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
						<li><a href="<?php echo esc_url( home_url( '/campaign_manga' ) ); ?>">電子申請キャンペーン</a></li>
						<li><a href="<?php echo esc_url( home_url( '/voice' ) ); ?>">お客様の声</a></li>
						<li><a href="<?php echo esc_url( home_url( '/question' ) ); ?>">よくある質問</a></li>
						<li><a href="<?php echo esc_url( home_url( '/company' ) ); ?>">運営会社</a></li>
					</ul>
				</nav>
			</div>
			<!-- スマホ用メニュー -->
			
			<div class="header-contact">
				<div class="tel">
					<div class="inner">
						<p><i class="fas fa-phone-alt mr-1"></i><span>0120-955-761</span></p>
						<p class="smaller">受付時間：10:00〜16:30(平日)</p>
					</div>
				</div>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
					<div class="apply-form">
						<div class="inner">
							<p class="smaller">電子申請キャンペーン</p>
							<div class="mail-inner">
								<p class="bigger">お申込み</p>
								<img src="https://todokede.sakura.ne.jp/ne2/wp-content/uploads/2021/12/92d6bb98023672ab93f0c6767f9c4489.png" alt="">
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- レスポンシブ用メニューボタン -->
			<div class="navbtn">
                <i></i>
                <i></i>
                <i></i>
                <p class="navbtn_txt_menu">MENU</p>
                <p class="navbtn_txt_close">CLOSE</p>
            </div>
		</div>
	</header>