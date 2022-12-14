<?php 
    include_once 'backend/init.php';
		//header("location: login.php");
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>{BLOG-TITLE}</title>
    <?php $blogObj->getStyles();?>
</head>
<body>
<div class="wrapper">
<div class="inner-wrapper">
	<div class="header-wrap">
		<div class="header-wrap-inner flex fl-c">
			<div class="header flex fl-4">
				{HEADER}
			</div>
		<div class="nav">
			{NAV}
		</div>
	</div>
	<div class="web-body">
		<div class="web-body-inner flex fl-row">
			<div class="main">
				<section></section>
				<main>
					<div class="post-out-wrap">
					<div class="post-out-inner">
						<!-- Blog Posts -->
					 	{BLOG-POSTS}
					</div>
					</div>
				</main>
				<section></section>
			</div>
			<div class="aside">
				<aside>
					<div class="aside-wrap">
					<div class="aside-inner">
						{SIDE-BAR}
					</div>	
					</div>
				</aside>
			</div>
		</div>
	</div>
	<div class="footer">
	<div class="footer-inner flex fl-c">
		<footer class="fl-6">
			
			<div class="footer-col">
			<div class="footer-col-inner">	
				{FOOTER}
			</div>
			</div>

		</footer>
		<div class="copy-right">
			<div class="copyright-in flex fl-c">
				<div class="copy-head">
					<span>Copyright © 2022</span>
					<a href="http://www.chrismarene.com/">
						chrismarene.com
					</a><span>| Powered by</span> 
					<a href="#">
						C&E Food
					</a>
				</div>
				<div class="copy-footer">
					Design by <a href="https://www.facebook.com/ChrismareneStudios">
						Chrismarene Studios
					</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</div>
<?php 
    include_once 'partials/footers.php';
?>