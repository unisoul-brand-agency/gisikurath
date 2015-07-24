			<?php
    			$prevPost = get_previous_post(true);
    			$nextPost = get_next_post(true);
				?>
 
    			<?php $prevPost = get_previous_post(true);
        		if($prevPost) {
            		$args = array(
                		'posts_per_page' => 1,
                		'include' => $prevPost->ID
            		);
            		$prevPost = get_posts($args);
            		foreach ($prevPost as $post) {
                	setup_postdata($post);
    			?>
        		<div class="single-post-prev">
                <div class="post-nav-heading-prev">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
        	<!-- ADD THE THUMBNIAL AND LINK IT TO THE POST -->
            		<a class="post-nav-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        	<!-- ALSO WITH THE TITLE -->
            		
        	<!-- SHOW THE CUTOM EXCERPT LENGTH -->
            		<p><?php $content = get_the_content(); echo wp_trim_words( $content , '20' ); ?></p>
        	<!-- FINALLY SHOW AN ACTUAL NAVIGATIONAL PROMPT -->           
             		<a class="previous" href="<?php the_permalink(); ?>">
                        <i class="fa ">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="prev-icon" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><path d="M14.1 2.6L6.7 10 M14.1 17.4L6.7 10" class="prev-icon"/>
                            </svg>
                        </i> 
                    </a>
        		</div>

    		<?php
               
            } //end foreach
        } // end if
          
        $nextPost = get_next_post(true);
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    ?>
        <div class="single-post-next">
            <div class="post-nav-heading-next">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>
            <a class="post-nav-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            
            <p><?php $content = get_the_content(); echo wp_trim_words( $content , '20' ); ?></p>
             
            <a class="previous" href="<?php the_permalink(); ?>">
                <i class="fa">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="next-icon" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><path d="M6.7 17.4l7.4-7.4 M6.7 2.6l7.4 7.4" class="next-icon"/>
                    </svg>
                </i>
            </a>
        </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>