<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

get_header(); ?>
    <div class="items">
        <div class="container text-center d-flex justify-content-between">
            <div class="row">
                <div class="c1 col-sm">
                    <p class="widgets_icon"><i class="fab fa-wordpress fa-4x"></i></p>
                    <p>We specialize in creating custom WordPress plugins. Custom plugins, custom databases, 
                        custom wp_query, custom dashboards, we have done it.
                    </p>
                </div>
                <div class="c2 col-sm">
                    <p class="widgets_icon"><i class="fab fa-laravel fa-4x"></i></p>
                    <p>We specialize in creating custom WordPress themes. Custom WordPress Responsive Themes 
                        from scratch. Themes using Bootstrap and Foundation.
                    </p>
                </div>
                <div class="c3 col-sm">
                    <p class="widgets_icon"><i class="fab fa-php fa-4x"></i></p>
                    <p>We pride ourselves on Customer Service. Besides loving WordPress, we love our Customers and make sure they are happy!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="plugins">
        <div class="container text-center d-flex justify-content-between">
            <div class="row">
                <div class="p1 col-sm">
                    <p class="widgets_icon"><i class="fas fa-users fa-2x"></i></p>
                    <p>We specialize in creating custom WordPress plugins. Custom plugins, custom databases, 
                        custom wp_query, custom dashboards, we have done it.
                    </p>
                </div>
                <div class="p2 col-sm">
                    <p class="widgets_icon"><i class="fas fa-users fa-2x"></i></p>
                    <p>We specialize in creating custom WordPress themes. Custom WordPress Responsive Themes 
                        from scratch. Themes using Bootstrap and Foundation.
                    </p>
                </div>
                <!-- <div class="p3 col-sm">
                    <h5>Client Showcase</h5>
                    <p>We pride ourselves on Customer Service. Besides loving WordPress, we love our Customers and make sure they are happy!
                    </p>
                </div> -->
            </div>
        </div>
    </div>

    <div class="blogposts">
        <div class="container text-center d-flex justify-content-between">
           
            
            <div class="row bprow">
                <?php if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) : the_post();
            ?>
                <div class="bpcol col-sm-12 col-md-6">
                    <div class="card">
                        <?php if ( has_post_thumbnail() && is_single() ) : ?>
                            <div class="post-thumbnail">
                                <img class="card-img-top" src="<?php the_post_thumbnail('full', array('class' => 'rounded')); ?>" alt="Card image cap">
                            </div><!--  .post-thumbnail -->
                            <?php else : ?>
                                <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <img class="card-img-top" src="<?php the_post_thumbnail('full', array('class' => 'rounded')); ?>" alt="Card image cap"> 
                                </a>
                            </div><!--  .post-thumbnail -->
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h5>
                            <p class="card-text">
                                <?php
                                the_content( sprintf(
                                    /* translators: %s: Name of current post. */
                                    wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'strappress' ), array( 'span' => array( 'class' => array() ) ) ),
                                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                ) );

                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'strappress' ),
                                    'after'  => '</div>',
                                ) );
                            ?>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            <div class="card-footer text-muted">
                                <?php strappress_entry_footer(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;

					the_posts_navigation();

                endif; 
            ?>
            </div>
           
        </div>
    </div>

	

<?php

get_footer();
