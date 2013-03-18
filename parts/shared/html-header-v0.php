<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>
	<script type="text/javascript" src="//use.typekit.net/zqz4ldg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript">
	var templateDir = "<?php bloginfo( 'template_directory' ); ?>";
	</script>
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/les.less" />
	<script type="text/javascript">
	var templateDir = "<?php bloginfo('template_directory') ?>";
	less = {
		env: "development", // or "production"
		async: false,       // load imports async
		fileAsync: false,   // load imports async when in a page under 
		// a file protocol
		poll: 1000,         // when in watch mode, time in ms between polls
		functions: {},      // user functions, keyed by name
		dumpLineNumbers: "comments", // or "mediaQuery" or "all"
		relativeUrls: false,// whether to adjust url's to be relative
		// if false, url's are already relative to the
		// entry less file
		rootpath: templateDir+"/" // a path to add on to the start of every url 
		//resource
	};
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/tools/less.js" type="text/javascript"></script>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div id="wrapper-page" class="">
		<!-- to TOP -->
		<div id="elevate-me">
			<a href="#" class="button-up">
				<span class="overlay"></span>
				<span class="icon"></span>
			</a>
		</div>	