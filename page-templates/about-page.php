<?php
/*
 * Template Name: About Page
 */
  ?>
  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>
            <?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?>
        </title> 
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
       <?php  
    

        wp_head(); ?>   
        
    </head>             
    <body <?php body_class(); ?>  >
        <div class="main-container">
            <div class="container_24">
                <div class="grid_24">
                    <div class="header">
                        <div class="grid_16 alpha">
                            <div class="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php if (businesspro_get_option('businesspro_logo') != '') { ?><?php echo businesspro_get_option('businesspro_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
                        </div>
                        <div class="grid_8 omega">
                            <div class="header-info">
                                <?php if (businesspro_get_option('businesspro_topright_cell') != '') { ?>
                                    <p class="cell"><img src="<?php echo get_template_directory_uri(); ?>/images/call-us.png"  class="call-us" />&nbsp; <?php echo stripslashes(businesspro_get_option('businesspro_topright_cell')); ?></p>
                                <?php } else { ?>
                                    <p class="cell"><img src="<?php echo get_template_directory_uri(); ?>/images/call-us.png"  class="call-us" />&nbsp;Call Us (9924241667)</p>
                                <?php } ?>
                                <?php if (businesspro_get_option('businesspro_topright_text') != '') { ?>
                                    <p><?php echo stripslashes(businesspro_get_option('businesspro_topright_text')); ?></p>
                                <?php } else { ?>
                                    <p><?php _e('B4, Sahajand Complex, C. G. Road, Ahmedabad, Gujarat, India','business-pro'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!--start Menu wrapper-->
                    <div class="menu_wrapper">
                    <div class="menu-position">
                        <div class="grid_18">
                            <div id="MainNav">
                                <a href="#" class="mobile_nav closed"><?php _e('Pages Navigation Menu','business-pro'); ?><span></span></a>
                                <?php businesspro_nav(); ?> 
                                <div class="grid_6 omega">
                            <div class="top-search">

                                
                            </div>
                        </div>
                            </div></div>
                    </div>    
                    </div>
                    <!--End Menu wrapper-->
                    <div class="clear"></div>

<div class="page-heading">
    <h1 class="page-title"><?php the_title(); ?></h1>
</div>
<div class="clear"></div>
<!--Start Page Content -->
<div class="page-content-container">
    <div class="page-content">
        <div class="grid_16 alpha">
            <div class="content-bar">                     
                <?php
                $limit = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts('showposts=' . $limit . '&paged=' . $paged);
                $wp_query->is_archive = true;
                $wp_query->is_home = false;
                ?>
                <!-- Start the Loop. -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                        <!--post start-->
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(esc_attr__('Permalink to %s', 'business-pro'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
                            <div class="post_content">
                                <?php if (has_post_thumbnail()) { ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                                    </a>
                                <?php } else { ?>
                                  
                                        <?php businesspro_get_image(595, 300); ?> 
                                        <?php                                   
                                }
                                ?>	
                                <?php the_excerpt(); ?>
                                <div class="clear"></div>
                                <?php if (has_tag()) { ?>
                                    <div class="tag">
                                        <?php the_tags(__('Post Tagged with ', ', ', '')); ?>
                                    </div>
                                <?php } ?>
                                <a class="read_more" href="<?php the_permalink() ?>"><?php _e('Read More', 'business-pro'); ?></a> </div>

                            <ul class="post_meta clearfix">
                                <li class="posted_by"><span><?php _e('Posted by', 'business-pro'); ?></span>&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/admin.png" /><?php the_author_posts_link(); ?></li>
                                <li class="post_category"><span><?php _e('Posted in', 'business-pro'); ?></span>&nbsp;&nbsp;<?php the_category(', '); ?></li>
                                <li class="post_date"><img src="<?php echo get_template_directory_uri(); ?>/images/date.png" />&nbsp;&nbsp; <?php echo get_the_time('M, d, Y') ?></li>
                                <li class="post_comment"><img src="<?php echo get_template_directory_uri(); ?>/images/comment.png" />&nbsp;&nbsp;<span><?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?></span></li>
                            </ul>
                        </div>
                        <!--End Post-->
                    <?php
                    endwhile;
                else:
                    ?>
                    <div class="post">
                        <p>
                        <?php _e('Sorry, no posts matched your criteria.', 'business-pro'); ?>
                        </p>
                    </div>
                    <?php endif; ?>
                <!--End Loop-->   
                <nav id="nav-single" style="margin-top:20px;"> <span class="nav-previous">
        <?php next_posts_link( __( '&larr; Older posts', 'business-pro' ) ); ?>
        </span> <span class="nav-next">
        <?php previous_posts_link( __( 'Newer posts &rarr;', 'business-pro' ) ); ?>
        </span> </nav>
            </div>
        </div>
        <div class="grid_8 omega">
            <!--Start Sidebar-->
            
            <!--End Sidebar-->
        </div> 
    </div>
</div>
</div>
</div>
</div>
