<?php
get_header();
?>
    <div class="l-content-wrapper">
		<?php get_sidebar(); ?>
        <main>
            <div class="l-season-recipe">
                <h2>簡単!おすすめレシピ</h2>
				<?php while ( have_posts() ) : the_post(); ?>
                    <section class="l-season-recipe-wrapper">
                        <figure>
							<?php the_post_thumbnail(); ?>
                        </figure>
                        <article>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
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