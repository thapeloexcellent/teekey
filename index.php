<?php get_header(); ?>
<div class="container py-5">
    <div class="row">
        <div class="col">
            <?php
            $pagename = $post->post_title;
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            } else {
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            }
            ?>
        </div>
    </div>
</div>


<?php
get_footer(); ?>