			<div class="content blog" id="blog-cat-2">

<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- //             Post                                                  // -->
<!-- /////////////////////////////////////////////////////////////////////// -->
				<div id="post_area">
                    <div id="post_wrapper">
<?php if (  $wp_query->have_posts()) : while (have_posts()) : the_post();  ?>
<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- //             Entry                                                 // -->
<!-- /////////////////////////////////////////////////////////////////////// -->
                        <div class="entry"  id="post-<?php the_ID();?>">
                            <div class="post_info_holder">
                                <h1 class="post_title"><?php get_post_title(); ?></h1>
                            <div class="post_info">
                            	<p>
                                    <?php echo_post_meta_info(); ?>
                                </p>
                            </div><!-- END div.post_info -->
                            </div>
                            <?php main_post_image($post->ID, 460, 360); ?>
                            <div class="post_content">
                            <?php get_post_content(); ?>
                            </div><!-- END div.post_content -->
                            <div class="clear"></div>
                        </div><!-- END div.entry -->
						<?php endwhile; endif; fPagination::Render(); ?>

                    </div><!-- END div#post_wrapper -->

<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- //             Comments                                              // -->
<!-- /////////////////////////////////////////////////////////////////////// -->

				</div><!-- END div#post_area -->
<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- //             Sidebar                                               // -->
<!-- /////////////////////////////////////////////////////////////////////// -->
<?php require_once(get_template_dir()."/templates/sidebar/sidebar-1.php") ?>

                <div class="clear"></div>
			</div><!-- END div#content -->