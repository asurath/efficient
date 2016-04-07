<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php global $args; if(is_single($post) || is_page()){ ?> <?php _e(get_post_meta( $post->ID, '_yoast_wpseo_title', true )); } else {} ?></title>
		<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
		<link rel='icon' type='image/x-icon' href='/favicon.ico' />
		<meta name="description" content="<?php if(is_single($post) || is_page()){ _e(get_post_meta( $post->ID, '_yoast_wpseo_metadesc', true )); }else {} ?>" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<style>
			<?php require_once(get_template_directory() . "/style.css"); ?>
		</style>
		<script type="text/javascript">
				function toggleSpan($this){			
					var el = $this;

					if(el.parentNode.className == "span-open")
						el.parentNode.className = "";
					else{
						document.getElementById("software").className = "";
						document.getElementById("hardware").className = "";
						el.parentNode.className = "span-open";
					}
				}
		</script>
	</head>
<body>
<div id="main"> 
	<h1>Arun&#39;s Tech Blog</h1>
        <div id="opaque-div"></div>
	<div id="menu">
	<a href="/">
		<div id="header">
			<img src="/wp-content/uploads/2016/04/profile-2.png" alt="profile-picture" >
			<span>A&#40;run&#39;s&#41;</span>
			<span>Tech Blog</span>
		</div>
	</a>
		<span id="software">
			<span onclick="toggleSpan(this);" >Software</span>
			<a href="/high-level-software">High</a>
			<a href="/low-level-software">Low</a>
		</span>
		<span id="hardware">
			<span onclick="toggleSpan(this);" >Hardware</span>
			<a href="/high-level-hardware">High</a>
			<a href="/low-level-hardware">Low</a>
		</span>
		<span id="misc">
			<span><a href="/miscellaneous">Miscellaneous</a></span>
		</span>
		<a href="https://plus.google.com/107049514009110422755/about">Google&#43;</a>
                <a href="http://www.linkedin.com/in/asurath">LinkedIn</a>
                <a href="https://github.com/asurath">GitHub</a>
                
	</div>
	<span id="psuedo-menu-icon">
	</span>
	<span id="menu-icon">
		<img src="/wp-content/themes/efficient/img/menu.svg" alt="menu-icon">
	</span>
	<div id="content">	