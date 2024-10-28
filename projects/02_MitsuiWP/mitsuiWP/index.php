<?php

get_header();

echo "<div id=\"content\">\n";

while(have_posts()){
    the_post();
    the_title();
    the_content();
}

echo "</div>\n";

get_sidebar();
get_footer();
?>