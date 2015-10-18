<?php
/*
 Enterprise page
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

get_header();

while(have_posts()):the_post();
    get_template_part('content','enterprise');
endwhile;

get_footer();