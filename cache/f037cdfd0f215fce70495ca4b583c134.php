<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $this->value['WebTitle']; ?></title>
		<meta name="author" content="<?php echo $this->value['WebKeywords']; ?>">
		<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>">
		<meta name="description" content="<?php echo $this->value['WebDescription']; ?>">
		<link href="<?php echo $this->value['StylePath']; ?>/css/style.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.min.css" />
		<style id='global-styles-inline-css' type='text/css'>
			body {
				--wp--preset--color--black: #000000;
				--wp--preset--color--cyan-bluish-gray:
					#abb8c3;
				--wp--preset--color--white: #ffffff;
				--wp--preset--color--pale-pink:
					#f78da7;
				--wp--preset--color--vivid-red: #cf2e2e;
				--wp--preset--color--luminous-vivid-orange:
					#ff6900;
				--wp--preset--color--luminous-vivid-amber: #fcb900;
				--wp--preset--color--light-green-cyan:
					#7bdcb5;
				--wp--preset--color--vivid-green-cyan: #00d084;
				--wp--preset--color--pale-cyan-blue:
					#8ed1fc;
				--wp--preset--color--vivid-cyan-blue: #0693e3;
				--wp--preset--color--vivid-purple:
					#9b51e0;
				--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
				--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan:
					linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
				--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange:
					linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
				--wp--preset--gradient--luminous-vivid-orange-to-vivid-red:
					linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
				--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray:
					linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
				--wp--preset--gradient--cool-to-warm-spectrum:
					linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
				--wp--preset--gradient--blush-light-purple:
					linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
				--wp--preset--gradient--blush-bordeaux:
					linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
				--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
				--wp--preset--gradient--pale-ocean:
					linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
				--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
				--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
				--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
				--wp--preset--duotone--grayscale:
					url('#wp-duotone-grayscale');
				--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
				--wp--preset--duotone--blue-red:
					url('#wp-duotone-blue-red');
				--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
				--wp--preset--duotone--magenta-yellow:
					url('#wp-duotone-magenta-yellow');
				--wp--preset--duotone--purple-green:
					url('#wp-duotone-purple-green');
				--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
				--wp--preset--font-size--small:
					13px;
				--wp--preset--font-size--medium: 20px;
				--wp--preset--font-size--large:
					36px;
				--wp--preset--font-size--x-large: 42px;
			}

			.has-black-color {
				color: var(--wp--preset--color--black) !important;
			}

			.has-cyan-bluish-gray-color {
				color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}

			.has-white-color {
				color: var(--wp--preset--color--white) !important;
			}

			.has-pale-pink-color {
				color:
					var(--wp--preset--color--pale-pink) !important;
			}

			.has-vivid-red-color {
				color:
					var(--wp--preset--color--vivid-red) !important;
			}

			.has-luminous-vivid-orange-color {
				color:
					var(--wp--preset--color--luminous-vivid-orange) !important;
			}

			.has-luminous-vivid-amber-color {
				color:
					var(--wp--preset--color--luminous-vivid-amber) !important;
			}

			.has-light-green-cyan-color {
				color:
					var(--wp--preset--color--light-green-cyan) !important;
			}

			.has-vivid-green-cyan-color {
				color:
					var(--wp--preset--color--vivid-green-cyan) !important;
			}

			.has-pale-cyan-blue-color {
				color:
					var(--wp--preset--color--pale-cyan-blue) !important;
			}

			.has-vivid-cyan-blue-color {
				color:
					var(--wp--preset--color--vivid-cyan-blue) !important;
			}

			.has-vivid-purple-color {
				color:
					var(--wp--preset--color--vivid-purple) !important;
			}

			.has-black-background-color {
				background-color:
					var(--wp--preset--color--black) !important;
			}

			.has-cyan-bluish-gray-background-color {
				background-color:
					var(--wp--preset--color--cyan-bluish-gray) !important;
			}

			.has-white-background-color {
				background-color:
					var(--wp--preset--color--white) !important;
			}

			.has-pale-pink-background-color {
				background-color:
					var(--wp--preset--color--pale-pink) !important;
			}

			.has-vivid-red-background-color {
				background-color:
					var(--wp--preset--color--vivid-red) !important;
			}

			.has-luminous-vivid-orange-background-color {
				background-color:
					var(--wp--preset--color--luminous-vivid-orange) !important;
			}

			.has-luminous-vivid-amber-background-color {
				background-color:
					var(--wp--preset--color--luminous-vivid-amber) !important;
			}

			.has-light-green-cyan-background-color {
				background-color:
					var(--wp--preset--color--light-green-cyan) !important;
			}

			.has-vivid-green-cyan-background-color {
				background-color:
					var(--wp--preset--color--vivid-green-cyan) !important;
			}

			.has-pale-cyan-blue-background-color {
				background-color:
					var(--wp--preset--color--pale-cyan-blue) !important;
			}

			.has-vivid-cyan-blue-background-color {
				background-color:
					var(--wp--preset--color--vivid-cyan-blue) !important;
			}

			.has-vivid-purple-background-color {
				background-color:
					var(--wp--preset--color--vivid-purple) !important;
			}

			.has-black-border-color {
				border-color:
					var(--wp--preset--color--black) !important;
			}

			.has-cyan-bluish-gray-border-color {
				border-color:
					var(--wp--preset--color--cyan-bluish-gray) !important;
			}

			.has-white-border-color {
				border-color:
					var(--wp--preset--color--white) !important;
			}

			.has-pale-pink-border-color {
				border-color:
					var(--wp--preset--color--pale-pink) !important;
			}

			.has-vivid-red-border-color {
				border-color:
					var(--wp--preset--color--vivid-red) !important;
			}

			.has-luminous-vivid-orange-border-color {
				border-color:
					var(--wp--preset--color--luminous-vivid-orange) !important;
			}

			.has-luminous-vivid-amber-border-color {
				border-color:
					var(--wp--preset--color--luminous-vivid-amber) !important;
			}

			.has-light-green-cyan-border-color {
				border-color:
					var(--wp--preset--color--light-green-cyan) !important;
			}

			.has-vivid-green-cyan-border-color {
				border-color:
					var(--wp--preset--color--vivid-green-cyan) !important;
			}

			.has-pale-cyan-blue-border-color {
				border-color:
					var(--wp--preset--color--pale-cyan-blue) !important;
			}

			.has-vivid-cyan-blue-border-color {
				border-color:
					var(--wp--preset--color--vivid-cyan-blue) !important;
			}

			.has-vivid-purple-border-color {
				border-color:
					var(--wp--preset--color--vivid-purple) !important;
			}

			.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
				background:
					var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
			}

			.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
				background:
					var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
			}

			.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
				background:
					var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
			}

			.has-luminous-vivid-orange-to-vivid-red-gradient-background {
				background:
					var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
			}

			.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
				background:
					var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
			}

			.has-cool-to-warm-spectrum-gradient-background {
				background:
					var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
			}

			.has-blush-light-purple-gradient-background {
				background:
					var(--wp--preset--gradient--blush-light-purple) !important;
			}

			.has-blush-bordeaux-gradient-background {
				background:
					var(--wp--preset--gradient--blush-bordeaux) !important;
			}

			.has-luminous-dusk-gradient-background {
				background:
					var(--wp--preset--gradient--luminous-dusk) !important;
			}

			.has-pale-ocean-gradient-background {
				background:
					var(--wp--preset--gradient--pale-ocean) !important;
			}

			.has-electric-grass-gradient-background {
				background:
					var(--wp--preset--gradient--electric-grass) !important;
			}

			.has-midnight-gradient-background {
				background:
					var(--wp--preset--gradient--midnight) !important;
			}

			.has-small-font-size {
				font-size:
					var(--wp--preset--font-size--small) !important;
			}

			.has-medium-font-size {
				font-size:
					var(--wp--preset--font-size--medium) !important;
			}

			.has-large-font-size {
				font-size:
					var(--wp--preset--font-size--large) !important;
			}

			.has-x-large-font-size {
				font-size:
					var(--wp--preset--font-size--x-large) !important;
			}
		</style>
		<link rel='stylesheet' id='slick-css'
			href='<?php echo $this->value['StylePath']; ?>/css/autoptimize_single_13b1b6672b8cfb0d9ae7f899f1c42875.css' type='text/css'
			media='all' />
		<link rel='stylesheet' id='dashicons-css' href='<?php echo $this->value['StylePath']; ?>/css/dashicons.min.css' type='text/css'
			media='all' />
		<link rel='stylesheet' id='maxslider-css'
			href='<?php echo $this->value['StylePath']; ?>/css/autoptimize_single_8ec57c25cc65bf88cbe1b7c87dd21f7c.css' type='text/css'
			media='all' />
		<link rel='stylesheet' id='shipin-1-style-css'
			href='<?php echo $this->value['StylePath']; ?>/css/autoptimize_single_db8115a254acac76dfb00433730e062b.css' type='text/css'
			media='all' />
		<link rel='stylesheet' id='genericons-style-css'
			href='<?php echo $this->value['StylePath']; ?>/css/autoptimize_single_13a6500ddf36c6dd581877aefc78d34d.css' type='text/css'
			media='all' />
		<link rel='stylesheet' id='flaticon-style-css'
			href='<?php echo $this->value['StylePath']; ?>/css/autoptimize_single_942ebaa0fffe3f4f2f03fc1977a3dd96.css' type='text/css'
			media='all' />
		<link rel='stylesheet' id='shipin-1-responsive-style-css'
			href='<?php echo $this->value['StylePath']; ?>/css/autoptimize_single_63b297e459f52e6b634589bb80339f33.css' type='text/css'
			media='all' />
		<link rel='stylesheet' id='wsocial-css'
			href='<?php echo $this->value['StylePath']; ?>/css/autoptimize_single_3d1f7c1bc875fe0aa5875364e059eb8a.css' type='text/css'
			media='all' />
		<style type="text/css">
			/* Theme Colors */
			/* Primary Color */
			a:hover,
			.site-title a,
			.site-header .search-icon:hover .fa,
			.posts-nav-menu ul li a:hover,
			.sidebar .widget a:hover,
			.site-footer .widget a:hover,
			.author-box a:hover,
			article.hentry .edit-link a:hover,
			.comment-content a:hover,
			.entry-meta a:hover,
			.entry-title a:hover,
			.content-list .entry-title a:hover,
			.content-list .entry-title a:hover span,
			.content-list .entry-category a:after,
			.pagination .page-numbers:hover,
			.pagination .page-numbers.current,
			.author-box .author-meta .author-name a:hover,
			article.hentry .edit-link a,
			.author-box a,
			.page-content a,
			.entry-content a,
			.comment-author a,
			.comment-content a,
			.comment-reply-title small a:hover,
			.sidebar .widget a,
			.friend-nav li a:hover,
			.tooltip .left .contact-info h3,
			.single #primary .entry-footer .entry-like a,
			.single #primary .entry-footer .entry-sponsor span,
			.zhuanti-heading .section-sub-menu a:hover,
			.mini-page h4 a:hover,
			.mini-page ul li a:hover,
			.single-breadcrumbs a:hover,
			.bottom-right span.icon-link .text,
			.bottom-right a .text,
			#site-bottom a:hover,
			.sf-menu li a:hover,
			.sf-menu li.sfHover a,
			.sf-menu li.current-menu-item a:hover,
			.thumbnail-link:hover .entry-title,
			.thumb-link:hover .entry-title,
			.section-heading .section-sub-menu a:hover,
			.home-primary-area .setup-notice a,
			.has-video .sf-menu li a:hover,
			.video-content .expand-icon .fa:hover,
			.video-content .related-videos .hentry .thumbnail-link:hover .entry-title,
			.sidebar .widget .widget-title a:hover,
			#tag_letter li a,
			#all_tags li a,
			#all_tags li a:hover {
				color: #00aeff;
			}

			button,
			.btn,
			input[type="submit"],
			input[type="reset"],
			input[type="button"],
			.sidebar .widget .widget-title:before,
			.related-content .section-title:before,
			.wide-related-videos .section-title:before,
			.comment-reply-title:before,
			.comments-title:before,
			.posts-nav-menu ul li a:after,
			.single #primary .entry-footer .entry-like a:hover,
			.single #primary .entry-footer .entry-sponsor span:hover,
			.content-list .entry-category a,
			.entry-tags .tag-links a:hover,
			.must-log-in a,
			.widget_tag_cloud .tagcloud a:hover,
			.section-heading .block-more a:hover,
			#post-nav a:hover,
			#post-nav .no-next:hover,
			#tag_letter li a:hover {
				background-color: #00aeff;
			}

			.sf-menu li li a:hover {
				background-color:
					#00aeff !important;
			}

			.entry-tags .tag-links a:hover,
			#all_tags li a:hover {
				border-color: #00aeff;
			}

			@media only screen and (min-width: 1080px) {
				.header-search {
					border-color: #00aeff;
				}
			}

			@media only screen and (max-width: 959px) {
				#primary-menu {
					background-color: #00aeff;
				}
			}

			/* Secondary Color
				*/
			.content-list .entry-title span,
			.page-content a:hover,
			.entry-content a:hover,
			article.hentry .edit-link a:hover,
			.author-box .author-meta .author-name a:hover,
			.sidebar .widget_custom_text h4 {
				color: #ff4c4c;
			}

			.sidebar .widget_custom_text:hover {
				border-color: #ff4c4c;
			}

			.sidebar .widget_custom_text .widget-title {
				background-color: #ff4c4c;
			}

			.video-content .entry-like a {
				color: #00be06;
			}

			.video-content .entry-like a:hover,
			.video-content .entry-sponsor span {
				background-color: #00be06;
			}

			.video-content .entry-like a,
			.video-content .entry-sponsor span {
				border-color: #00be06;
			}

			.entry-title {
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			}
		</style>
		<script type='text/javascript' src='<?php echo $this->value['StylePath']; ?>/js/jquery.min.js' id='jquery-core-js'></script>
		<style>
			.swiper {
				width: 100%;
				height: 100%;
			}

			.swiper-slide {
				text-align: center;
				font-size: 18px;
				background: #fff;

				/* Center slide text vertically */
				display: -webkit-box;
				display: -ms-flexbox;
				display: -webkit-flex;
				display: flex;
				-webkit-box-pack: center;
				-ms-flex-pack: center;
				-webkit-justify-content: center;
				justify-content: center;
				-webkit-box-align: center;
				-ms-flex-align: center;
				-webkit-align-items: center;
				align-items: center;
			}

			.swiper-slide img {
				display: block;
				width: 100%;
				height: 100%;
				object-fit: cover;
			}
		</style>
	</head>
	<body class="home blog wp-custom-logo hfeed">
		<div id="page" class="site">
			<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
			<div id="content" class="site-content site_container container clear">
				<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
				<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img src="<?php echo $TopPicUrl?>"
							style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;"></a></p>
				<?php } ?>
			</div>
			<style>
				@media (min-width:576px) {
					.modal-dialog {
						max-width: 500px;
						margin: 1.75rem auto
					}

					.modal-dialog-scrollable {
						max-height: calc(100% - 3.5rem)
					}

					.modal-dialog-scrollable .modal-content {
						max-height: calc(100vh - 3.5rem)
					}

					.modal-dialog-centered {
						min-height: calc(100% - 3.5rem)
					}

					.modal-dialog-centered:before {
						height: calc(100vh - 3.5rem)
					}

					.modal-sm {
						max-width: 300px
					}
				}

				@media (min-width:992px) {

					.modal-lg,
					.modal-xl {
						max-width: 800px
					}
				}

				@media (min-width:1200px) {
					.modal-xl {
						max-width: 1140px
					}
				}

				.modal-content {
					width: 75%;
				}

				.modal-header {
					display: -webkit-box;
					display: -ms-flexbox;
					display: flex;
					-webkit-box-align: start;
					-ms-flex-align: start;
					align-items: flex-start;
					-webkit-box-pack: justify;
					-ms-flex-pack: justify;
					justify-content: space-between;
					padding: 1rem;
					border-bottom: 1px solid #e9ecef;
					border-top-left-radius: 0.3rem;
					border-top-right-radius: 0.3rem;
				}

				#warningAlert {
					text-align: left;
					padding: 20px 0;
				}

				.modal-footer {
					display: -webkit-box;
					display: -ms-flexbox;
					display: flex;
					-webkit-box-align: center;
					-ms-flex-align: center;
					align-items: center;
					-webkit-box-pack: end;
					-ms-flex-pack: end;
					justify-content: flex-end;
					padding: 1rem;
					border-top: 1px solid #e9ecef;
					border-bottom-right-radius: 0.3rem;
					border-bottom-left-radius: 0.3rem;
				}

				.btn-group-sm>.btn,
				.btn-sm {
					padding: 0.25rem 0.5rem;
					font-size: .875rem;
					line-height: 1.5;
					border-radius: 0.2rem;
				}

				.btn-sm:hover {
					color: #ffffff;
				}
			</style>
			<script src="<?php echo $this->value['StylePath']; ?>/js/jquery-3.5.1.min.js"></script>
			<script src="<?php echo $this->value['StylePath']; ?>/js/bootstrap.min.js"></script>

			<script>
				var sessiondata = sessionStorage.getItem("modal");
				if (!sessiondata) {
					$("#warnModal").show();
				} else {
					$("#warnModal").hide();
				}

				function hideWarning() {
					sessionStorage.setItem("modal", "true");
					$("#warnModal").hide();
				}
			</script>
			<div id="content" class="site-content site_container container clear">
				<div id="primary" class="content-area full-width clear">
					<div id="featured-slider" class="slider-with-grid">
						<div class="owl-theme bxslider">
							<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/swiper-bundle.min.css" />
							<div class="swiper mySwiper">
								<div class="swiper-wrapper">
									<?php  $VideoType=1;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
									<div class="swiper-slide">
										<div class="featured-slide hentry">
											<a class="thumbnail-link" href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
												<div class="thumbnail-wrap">
													<img style="width:100%;" src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"
														class="attachment-shipin_1_featured_large_thumb size-shipin_1_featured_large_thumb wp-post-image"
														alt="" />
												</div>
											</a>
											<div class="entry-header clear" style="display:block;">
												<h2 class="entry-title">
													<a target="_blank" href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
														<?php 	echo  $MYSQLVOD['d_name'] ?> </a>
												</h2>
											</div>
											<div class="gradient">
											</div>
										</div>
									</div>
									<?php  } ?>
								</div>
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-pagination"></div>
							</div>

							<!-- Swiper JS -->
							<script src="<?php echo $this->value['StylePath']; ?>/js/swiper-bundle.min.js"></script>

							<!-- Initialize Swiper -->
							<script>
								var swiper = new Swiper(".mySwiper", {
									spaceBetween: 30,
									centeredSlides: true,
									autoplay: {
										delay: 2500,
										disableOnInteraction: false,
									},
									pagination: {
										el: ".swiper-pagination",
										clickable: true,
									},
									navigation: {
										nextEl: ".swiper-button-next",
										prevEl: ".swiper-button-prev",
									},
								});
							</script>
						</div>
					</div>
					<div id="featured-grid">
						<ul class="clear">
							<?php  $VideoType=2;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
							<li class="featured-post hentry">
								<a class="thumbnail-link" href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
									<div class="thumbnail-wrap">
										<img style="height:120px;" src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"
											class="attachment-shipin_1_list_thumb size-shipin_1_list_thumb wp-post-image" />
										<div class="video-length">
											18:32 </div>
										<div class="gradient">
										</div>
									</div>
									<div class="entry-header">
										<h2 class="entry-title">
											<?php 	echo  $MYSQLVOD['d_name'] ?></h2>
									</div>
								</a>
								<div class="entry-sub-title">
									<i class="fa fa-youtube-play">
									</i>
									<?php 	echo   rand(5, 10000); ?>
							</li>
							<?php  } ?>
						</ul>
					</div>
					<div class="clear">
					</div>
					<style>
						@media screen and (min-width: 900px) and (max-width: 1200px),
						(min-width: 1200px) {
							.one-post-big img {
								width: 448px;
								height: 200px;
							}

						}

						@media only screen and (max-width: 959px) {
							.one-post-big img {
								height: 120px;
							}
						}

						@media only screen and (max-width: 767px) {}
					</style>
					<main id="main" class="site-main clear">
						<div class="home-primary-area clear">
							<div id="zhutibaba-home-block-3" class="widget widget-dameiti-home-block">
								<div class="content-block primary-block clear">
									<div class="block-list   clear">
										<?php  $VideoType=3;  $Count=12;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
										<div class="post-big hentry">
											<a class="thumbnail-link" href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
												<div class="thumbnail-wrap">
													<img style="height:120px;" src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"
														class="attachment-shipin_1_list_thumb size-shipin_1_list_thumb wp-post-image" />
													<div class="video-length">
													</div>
													<div class="gradient">
													</div>
												</div>
												<div class="entry-header">
													<h2 class="entry-title">
														<?php 	echo  $MYSQLVOD['d_name'] ?></h2>
												</div>
											</a>
											<div class="entry-views">
												<i class="fa fa-youtube-play">
												</i>
												<?php 	echo   rand(5, 10000); ?>
											</div>
										</div>
										<?php  } ?>
									</div>
								</div>
							</div>
						</div>
						<div id="zhutibaba-home-block-5" class="widget widget-dameiti-home-block">
							<div class="content-block primary-block clear">
								<div class="section-heading clear">
									<h3 class="section-title">
										<a target="_blank" href="/?m=video_list*4*1">
											<?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['4'];echo $shuzua['name']; ?>
										</a>
									</h3>
								</div>
								<div id="zhutibaba-home-block-3" class="widget widget-dameiti-home-block">
									<div class="content-block primary-block clear">
										<div class="block-list   clear">
											<?php  $VideoType=4;  $Count=12;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
											<div class="post-big hentry">
												<a class="thumbnail-link" href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
													<div class="thumbnail-wrap">
														<img style="height:120px;" src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"
															class="attachment-shipin_1_list_thumb size-shipin_1_list_thumb wp-post-image" />
														<div class="video-length">
														</div>
														<div class="gradient">
														</div>
													</div>
													<div class="entry-header">
														<h2 class="entry-title">
															<?php 	echo  $MYSQLVOD['d_name'] ?></h2>
													</div>
												</a>
												<div class="entry-views">
													<i class="fa fa-youtube-play">
													</i>
													<?php 	echo   rand(5, 10000); ?>
												</div>
											</div>
											<?php  } ?>
										</div>
									</div>
								</div>
								<div id="zhutibaba-home-block-5" class="widget widget-dameiti-home-block">
									<div class="content-block primary-block clear">
										<div class="section-heading clear">
											<h3 class="section-title">
												<a target="_blank" href="/?m=video_list*5*1">
													<?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['5'];echo $shuzua['name']; ?>
												</a>
											</h3>
										</div>
										<div id="zhutibaba-home-block-3" class="widget widget-dameiti-home-block">
											<div class="content-block primary-block clear">
												<div class="block-list   clear">
													<?php  $VideoType=5;  $Count=12;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
													<div class="post-big hentry">
														<a class="thumbnail-link" href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
															<div class="thumbnail-wrap">
																<img style="height:120px;" src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"
																	class="attachment-shipin_1_list_thumb size-shipin_1_list_thumb wp-post-image" />
																<div class="video-length">
																</div>
																<div class="gradient">
																</div>
															</div>
															<div class="entry-header">
																<h2 class="entry-title">
																	<?php 	echo  $MYSQLVOD['d_name'] ?></h2>
															</div>
														</a>
														<div class="entry-views">
															<i class="fa fa-youtube-play">
															</i>
															<?php 	echo   rand(5, 10000); ?>
														</div>
													</div>
													<?php  } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="zhutibaba-home-block-5" class="widget widget-dameiti-home-block">
									<div class="content-block primary-block clear">
										<div class="section-heading clear">
											<h3 class="section-title">
												<a target="_blank" href="/?m=video_list*6*1">
													<?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['6'];echo $shuzua['name']; ?>
												</a>
											</h3>
										</div>
										<div id="zhutibaba-home-block-3" class="widget widget-dameiti-home-block">
											<div class="content-block primary-block clear">
												<div class="block-list   clear">
													<?php  $VideoType=6;  $Count=12;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
													<div class="post-big hentry">
														<a class="thumbnail-link" href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
															<div class="thumbnail-wrap">
																<img style="height:120px;" src="<?php 	echo  $MYSQLVOD['d_pic'] ?>"
																	class="attachment-shipin_1_list_thumb size-shipin_1_list_thumb wp-post-image" />
																<div class="video-length">
																</div>
																<div class="gradient">
																</div>
															</div>
															<div class="entry-header">
																<h2 class="entry-title">
																	<?php 	echo  $MYSQLVOD['d_name'] ?></h2>
															</div>
														</a>
														<div class="entry-views">
															<i class="fa fa-youtube-play">
															</i>
															<?php 	echo   rand(5, 10000); ?>
														</div>
													</div>
													<?php  } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</main>
				</div>
				<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
	</body>
</html>