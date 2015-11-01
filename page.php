<?php
/*
 Default page content
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

get_header();

while(have_posts()): the_post();
get_template_part('content','banner');
get_template_part('content','page');
endwhile;

get_footer();