<?php
get_header();
?>

    <section class="l-main-view">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/contents/mainView.jpg" width="960"
                 height="auto" alt="家庭で簡単フレンチ特集">
        </figure>
    </section>
    <div class="l-content-wrapper">

		<?php get_sidebar(); ?>

        <main>
            <section class="l-new-recipe">
                <h2>新着レシピ</h2>
                <ul>
                    <li>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contents/newRecipes1.jpg"
                                 width="80" height="80" alt="季節の彩り野菜">
                            <figcaption>季節の彩り野菜</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contents/newRecipes2.jpg"
                                 width="80" height="80" alt="簡単かぼちゃスープ">

                            <figcaption>簡単かぼちゃスープ</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contents/newRecipes3.jpg"
                                 width="80" height="80" alt="ヘルシー米粉パン">
                            <figcaption>ヘルシー米粉パン</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contents/newRecipes4.jpg"
                                 width="80" height="80" alt="ぷりぷりエビ料理">
                            <figcaption>ぷりぷりエビ料理</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contents/newRecipes5.jpg"
                                 width="80" height="80" alt="かんたん鴨南蛮">
                            <figcaption>かんたん鴨南蛮</figcaption>
                        </figure>
                    </li>
                </ul>

            </section>
            <section class="l-now-washoku">
                <h2>今だからこそ見直したい「和食」</h2>
                <div>

                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/contents/topics.jpg" width="230"
                             height="auto" alt="今だからこそ見直したい「和食」">
                    </figure>

                    <article>
                        <p>普段、私たちが何気なく口にしている和食ですが、その基本は、一汁三菜。ご飯、味噌汁、お漬物、の他、主菜（魚またはお肉）、副菜として季節毎の野菜と豆類で構成されます。</p>
                        <p>
                            昔から「旬の野菜を食べましょう」と言いますが、それは素材がじっくりと時間をかけて蓄積してきた旨みや栄養価が最高になったところでいただいて、効率よく栄養を取り風邪などの予防をしましょうね、ということです。</p>
                        <p>それでは各季節毎の旬の野菜について調べてみましょう。</p>
                    </article>
                </div>
                <nav><a href="">続きを読む</a></nav>
            </section>


            <div class="l-season-recipe">
                <h2>簡単!おすすめレシピ</h2>

				<?php while ( have_posts() ) : the_post(); ?>
                    <section class="l-season-recipe-wrapper">
                        <figure>
							<?php the_post_thumbnail(); ?>
                        </figure>
                        <article>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <nav></nav>
                        </article>
                    </section>
				<?php endwhile; ?>
            </div>
        </main>

		<?php get_sidebar( ad ); ?>


    </div>

<?php
get_footer();