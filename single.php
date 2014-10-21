<?php get_header(); ?>

<section id="main-content" class="clearfix">
    <section id="main-content-inner" class="container">
    <div class="article-container post">
        <?php while ( have_posts() ) : the_post(); ?>
        <header class="clearfix">
            <div class="article-details">
                <h1 class="title"><?php the_title(); ?></h1>
                <div class="meta">
                    <span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span>
                </div><!-- end .meta -->
            </div><!-- end .article-details -->  
        </header>
           
        <article <?php post_class("clearfix"); ?>> <?php the_content(); ?> <?php the_tags('Tags: ', ', ', '<br />'); ?> </article>

        <?php get_template_part("templates/bookrev_review_wrap_up_template"); ?>

        <?php wp_link_pages(); ?>

        <?php endwhile; ?>
            
        <?php comments_template(); ?>

    </div><!-- end .article-container -->

    <?php get_sidebar(); ?>

    </section><!-- end .main-content-inner -->
</section><!-- end #main-content -->

<?php get_footer(); ?>