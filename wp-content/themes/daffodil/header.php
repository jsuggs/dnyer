<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta http-equiv="imagetoolbar" content="no" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE]>
	<style type="text/css">
	  .clearfix {
		zoom: 1;     /* triggers hasLayout */
		display: block;     /* resets display for IE/Win */
		}  /* Only IE can see inside the conditional comment
		and read this CSS rule. Don't ever use a normal HTML
		comment inside the CC or it will close prematurely. */
	</style>
	<![endif]-->

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body>

<div id="container1">
	<div id="container2">
	<div id="container3">
	<div id="container4">



<div class="clearfix">
	<?php get_sidebar(); ?>

	<div id="rightcol">
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<div>
				<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
			</div>
		</form>

		<div id="navcontainer">
			<ul id="navlist">
				<li <?php if ($post->post_type != 'page') echo " class=\"current_page_item\""; ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
				<?php wp_list_pages('depth=1&title_li='); ?>
			</ul>
		</div>
	</div><!--/rightcol-->

	<div id="page">

		<div id="header1">
		<div id="header2">
		<div id="header3">
		<div id="header4">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div><!--/header4-->
		</div><!--/header3-->
		</div><!--/header2-->
		</div><!--/header1-->

		<div id="content">