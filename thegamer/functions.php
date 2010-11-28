<?php

function echo_title() {
    wp_title('|', true, 'right').bloginfo('name');
}


function wpcontent_dir() {
    return bloginfo('wpurl').'/wp-content/themes/thegamer/';
}


function css_dir() {
    echo wpcontent_dir().'css';
}


function images_dir() {
    echo wpcontent_dir().'images';
}


function js_dir() {
    echo wpcontent_dir().'js';
}


function echo_category() {
    
    if (is_home()) {
        echo 'home';
        return;
    }
    
    $category = get_the_category();
    $category = $category[0]->slug;
    
    echo $category;
}


function get_user_name() {
	global $userdata;
    
	get_currentuserinfo();
	return $userdata->user_login;
}

?>