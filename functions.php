<?php
/*
 Theme functions
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

require('admin/include.php');

function ucsmart($text)
{
   return preg_replace('/([^a-z\']|^)([a-z])/e', '"$1".strtoupper("<b>$2</b>")',
                       strtolower($text));
}

function admin_menu_js() {
    echo "<script type='text/javascript' > 
document.body.className+=' folded';                 
</script>";

}
add_action('admin_footer', 'admin_menu_js');