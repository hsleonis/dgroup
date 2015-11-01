<?php
/*
 News page
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

get_header();

while(have_posts()): the_post();
get_template_part('content','banner');
get_template_part('content','news');
endwhile;

get_footer();