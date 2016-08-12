<?php
    // This is the file that holds the ASIDE post format
    // This shows the only the meta information of the blog post
?>

<h3>ASIDE POST: <?php the_title(); ?></h3>

<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a') ?>, in <?php the_category(); ?></small>

<hr>