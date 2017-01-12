/**
 * WonderPlugin Carousel Skin Options
 * Copyright 2014 Magic Hills Pty Ltd - http://www.wonderplugin.com
 */

var WONDERPLUGIN_CAROUSEL_SKIN_TEMPLATE = {
	classic : {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>\n<div class="amazingcarousel-title">__TITLE__</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n #amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 4px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n	-moz-box-shadow:  0 1px 4px rgba(0, 0, 0, 0.2);\n	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font:14px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:center;\n	text-shadow:0px 1px 1px #fff;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 16px 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 4px;\n	background-color: #fff;\n	border: 1px solid #ddd;\n	-moz-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	-webkit-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 0%;\n	top: 50%;\n	margin-left: -48px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 50%;\n	margin-right: -48px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	width: 100%;\n	top: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 4px auto;\n}'
	},
	gallery: {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>\n<div class="amazingcarousel-title">__TITLE__</div>\n<div class="amazingcarousel-description">__DESCRIPTION__</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 4px;\n	background-color: #fff;\n	-moz-box-shadow:  0 1px 4px rgba(0, 0, 0, 0.2);\n	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font: bold 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 14px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-description {\n	position:relative;\n	font: 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 14px;		\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 8px 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 4px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 0%;\n	top: 50%;\n	margin-left: -60px;\n	margin-top: -24px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 50%;\n	margin-right: -60px;\n	margin-top: -24px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	width: 100%;\n	top: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 4px auto;\n}'
	},
	highlight: {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>\n<div class="amazingcarousel-title">__TITLE__</div>\n<div class="amazingcarousel-description">__DESCRIPTION__</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font: bold 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 14px;\n	height: 14px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-description {\n	position:relative;\n	font: 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 14px;		\n	height: 28px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 16px 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 4px;\n	background-color: #fff;\n	border: 1px solid #ddd;\n	-moz-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	-webkit-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 0%;\n	top: 50%;\n	margin-left: -60px;\n	margin-top: -24px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 50%;\n	margin-right: -60px;\n	margin-top: -24px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	width: 100%;\n	top: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 4px auto;\n}'
	},
	list: {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>\n<div class="amazingcarousel-text">\n	<div class="amazingcarousel-title">__TITLE__</div>\n	<div class="amazingcarousel-description">__DESCRIPTION__</div>\n</div>\n<div style="clear:both;"></div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n	width: 40%;\n	float: left;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text {\n	width: 60%;\n	float: left;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font: bold 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 16px;\n	height: 16px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-description {\n	position:relative;\n	font: 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 15px;		\n	height: 30px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 4px;\n	background-color: #fff;\n	border: 1px solid #ddd;\n	-moz-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	-webkit-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	right: 0%;\n	top: 100%;\n	margin-right: 32px;\n	margin-top: 8px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 100%;\n	margin-right: 0px;\n	margin-top: 8px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	top: 100%;\n	right: 0%;\n	margin-right: 64px;\n	margin-top: 14px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 0;\n}\n\n'
	},
	navigator: {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>\n<div class="amazingcarousel-text">\n	<div class="amazingcarousel-title">__TITLE__</div>\n	<div class="amazingcarousel-description">__DESCRIPTION__</div>\n</div>\n<div style="clear:both;"></div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n	width: 40%;\n	float: left;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text {\n	width: 60%;\n	float: left;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font: bold 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 16px;\n	height: 16px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-description {\n	position:relative;\n	font: 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 15px;		\n	height: 30px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 16px 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 4px;\n	background-color: #fff;\n	border: 1px solid #ddd;\n	-moz-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	-webkit-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	right: 0%;\n	top: 0%;\n	margin-right: 32px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 0%;\n	margin-right: 0px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	top: 0%;\n	right: 0%;\n	margin-right: 72px;\n	margin-top: -8px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 0;\n}\n\n'
	},
	showcase: {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>\n<div class="amazingcarousel-title">__TITLE__</div>\n<div class="amazingcarousel-description">__DESCRIPTION__</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font: bold 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 14px;\n	height: 14px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-description {\n	position:relative;\n	font: 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 14px;		\n	height: 28px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 4px;\n	background-color: #fff;\n	border: 1px solid #ddd;\n	-moz-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	-webkit-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 50%;\n	top: 0%;\n	margin-left: -16px;\n	margin-top: -36px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	left: 50%;\n	bottom: 0%;\n	margin-left: -16px;\n	margin-bottom: -36px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	top: 0%;\n	left: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 0 16px;\n}'
	},
	simplicity: {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>\n<div class="amazingcarousel-title">__TITLE__</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 4px;\n	-webkit-border-radius: 4px;\n	border-radius: 4px;\n	-moz-box-shadow:  0 1px 4px rgba(0, 0, 0, 0.2);\n	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font:14px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:center;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 16px 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 4px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 0%;\n	top: 45%;\n	margin-left: -48px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 45%;\n	margin-right: -48px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	width: 100%;\n	top: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 4px auto;\n}'
	},
	stylish: {
		skintemplate: '<div class="amazingcarousel-image">\n	__IMAGE__\n	<div class="amazingcarousel-text">\n		<div class="amazingcarousel-text-bg"></div>\n		<div class="amazingcarousel-title">__TITLE__</div>\n	</div>\n</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n	-moz-box-shadow:  0 1px 4px rgba(0, 0, 0, 0.2);\n	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text {\n	position:absolute;\n	left: 0px;\n	bottom: 0px;\n	text-align:center;\n	width: 100%;\n	display: none;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image:hover div.amazingcarousel-text {	\n	display: block;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text-bg {\n	position:absolute;\n	top: 0px;\n	left: 0px;\n	width: 100%;\n	height: 100%;\n	background-color: #333333;\n	opacity: 0.5;\n	filter: alpha(opacity=50);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font:14px "Open Sans", sans-serif;\n	color:#ffffff;\n	text-align:center;\n	width: 100%;\n	padding: 10px 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 8px 4px;\n	background-color: #fff;\n	border: 1px solid #ddd;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 0%;\n	top: 50%;\n	margin-left: -48px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 50%;\n	margin-right: -48px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	width: 100%;\n	top: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 16px auto;\n}'
	},
	thumbnail: {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>\n<div class="amazingcarousel-text">\n	<div class="amazingcarousel-title">__TITLE__</div>\n	<div class="amazingcarousel-description">__DESCRIPTION__</div>\n</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 8px;\n	background-color: #fff;\n	-moz-box-shadow:  0 1px 4px rgba(0, 0, 0, 0.2);\n	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text {\n	padding-right: 64px;\n}\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font: bold 14px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 16px;\n	height: 16px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-description {\n	position:relative;\n	font: 12px "Open Sans", sans-serif;\n	color:#333333;\n	margin:6px;\n	text-align:left;\n	line-height: 16px;		\n	height: 32px;\n	overflow: hidden;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 16px 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	right: 0%;\n	top: 100%;\n	margin-right: 32px;\n	margin-top: -64px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 100%;\n	margin-right: 0px;\n	margin-top: -64px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	width: 100%;\n	top: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 4px auto;\n}'
	},
	vertical: {
		skintemplate: '<div class="amazingcarousel-image">\n	__IMAGE__\n	<div class="amazingcarousel-text">\n		<div class="amazingcarousel-text-bg"></div>\n		<div class="amazingcarousel-title">__TITLE__</div>\n	</div>\n</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n	-moz-box-shadow:  0 1px 4px rgba(0, 0, 0, 0.2);\n	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text {\n	position:absolute;\n	left: 0px;\n	bottom: 0px;\n	text-align:center;\n	width: 100%;\n	display: none;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image:hover div.amazingcarousel-text {	\n	display: block;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text:hover {\n	display: block;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text-bg {\n	position:absolute;\n	top: 0px;\n	left: 0px;\n	width: 100%;\n	height: 100%;\n	background-color: #333333;\n	opacity: 0.5;\n	filter: alpha(opacity=50);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-title {\n	position:relative;\n	font:14px "Open Sans", sans-serif;\n	color:#ffffff;\n	text-align:center;\n	width: 100%;\n	padding: 10px 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 8px;\n	background-color: #fff;\n	border: 1px solid #ddd;\n	-moz-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	-webkit-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 50%;\n	top: 0%;\n	margin-left: -16px;\n	margin-top: -36px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	left: 50%;\n	bottom: 0%;\n	margin-left: -16px;\n	margin-bottom: -36px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	top: 0%;\n	left: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 16px;\n}'
	},
	testimonial: {
		skintemplate: '<div class="amazingcarousel-text">\n	<blockquote>__DESCRIPTION__</blockquote>\n	<cite>__TITLE__</cite>\n</div>\n<div class="amazingcarousel-image">__IMAGE__</div>\n<div style="clear:both;"></div>',
		skincss: '#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 0%;\n	top: 50%;\n	margin-left: 4px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 50%;\n	margin-right: 4px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	width: 100%;\n	top: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 4px auto;\n}\n\n@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n	width: 40%;\n	float: left;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text {\n	width: 60%;\n	float: left;\n}\n\n#amazingcarousel-CAROUSELID blockquote {\n	font: italic 14px Georgia, serif;\n	position: relative;\n	color: #333333;\n	text-align: left;\n	margin: 8px 18px 8px 24px;\n}\n\n#amazingcarousel-CAROUSELID  blockquote:before {\n	display: block;\n	content: "\\201C";\n	font-size: 48px;\n	position: absolute;\n	left: -24px;\n	top: -8px;\n	color: #666666;\n}\n\n#amazingcarousel-CAROUSELID  cite {\n	color: #999999;\n	font: italic 14px Georgia, serif;\n	display: block;\n	position: relative;\n	margin: 4px 18px;\n	text-align: right;\n}\n\n#amazingcarousel-CAROUSELID cite:before {\n	content: "\\2014 \\2009";\n}\n\n#amazingcarousel-container-CAROUSELID {\n	padding: 32px 0px; \n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 16px 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 6px;\n	background-color: #fff;\n	border: 1px solid #ddd;\n	-moz-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	-webkit-box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n	box-shadow: 0px 0px 5px 1px rgba(96, 96, 96, 0.1);\n}'
	},
	fashion: {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n	-moz-border-radius: 0px;\n	-webkit-border-radius: 0px;\n	border-radius: 0px;\n}\n\n#amazingcarousel-container-1 {\n	padding: 32px 48px; \n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 16px 0;\n}\n\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container:hover {\n	opacity: 0.7;\n	filter: alpha(opacity=70);\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 0%;\n	top: 50%;\n	margin-left: 0px;\n	margin-top: -30px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 50%;\n	margin-right: 0px;\n	margin-top: -30px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	width: 100%;\n	top: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 4px auto;\n}\n\n\n\n'
	},
	rotator: {
		skintemplate: '<div class="amazingcarousel-image">\n	__IMAGE__\n</div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 100%;\n	max-width: 100%;\n	border: 0;\n	margin: 0;\n	padding: 0;\n}\n\n#amazingcarousel-container-1 {\n	padding: 8px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 1px;\n	background-color: #fff;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 50%;\n	top: 0%;\n	margin-left: -18px;\n	margin-top: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	left: 50%;\n	bottom: 0%;\n	margin-left: -18px;\n	margin-bottom: 0px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	top: 0%;\n	left: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 16px;\n}'
	},
	testimonialcarousel: {
		skintemplate: '<div class="amazingcarousel-image">__IMAGE__</div>\n<div class="amazingcarousel-text">\n	<blockquote>__DESCRIPTION__</blockquote>\n	<cite>__TITLE__</cite>\n</div>\n<div style="clear:both;"></div>',
		skincss: '@import url(https://fonts.googleapis.com/css?family=Open+Sans);\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image {	\n	position: relative;\n	padding: 0px;\n	margin: 0 auto;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-image img {\n	display: block;\n	width: 120px;\n      margin: 0 auto;\n	border: 0;\n	padding: 0;\n	-moz-border-radius: 60px;\n	-webkit-border-radius: 60px;\n	border-radius: 60px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-text {\n}\n\n#amazingcarousel-CAROUSELID blockquote {\n	font: italic 14px Georgia, serif;\n	position: relative;\n	color: #333;\n	text-align: center;\n	margin: 8px 18px 8px 24px;\n}\n\n#amazingcarousel-CAROUSELID  cite {\n	color: #666;\n	font: italic 14px Georgia, serif;\n	display: block;\n	position: relative;\n	margin: 4px 18px;\n	text-align: center;\n}\n\n#amazingcarousel-container-1 {\n	padding: 10px 10px 20px 10px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-list-container { \n	padding: 16px 0;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-item-container {\n	text-align: center;\n	padding: 6px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-prev {\n	left: 0%;\n	top: 50%;\n	margin-left: 4px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-next {\n	right: 0%;\n	top: 50%;\n	margin-right: 4px;\n	margin-top: -16px;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-nav {\n	position: absolute;\n	width: 100%;\n	top: 100%;\n}\n\n#amazingcarousel-CAROUSELID .amazingcarousel-bullet-wrapper {\n	margin: 4px auto;\n}'
	}	
};