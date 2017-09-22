<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="l-header">
		<section>
			<div>
				<h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/structure/logo.png" width="222" height="38" alt="CookCampのロゴ">
				</h1>
				<p>誰でも作れる簡単料理レシピ掲載サイト</p>
			</div>
			<div>
				<form method="get" action="">
					<input type="search" placeholder="料理名・食材名で検索">
					<input type="submit" value="検索">
				</form>
			</div>
		</section>

		<nav class="l-header-nav">
			<ul>
				<li>新着</li>
				<li>料理から検索</li>
				<li>食材から検索</li>
				<li>旬の料理検索</li>
				<li>ランキング</li>
			</ul>
		</nav>
	</div>
</header>