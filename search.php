<?php 

if(isset($_GET['search-type'])) {
    $type = $_GET['search-type'];
    if($type == 'jobs') {
        load_template(TEMPLATEPATH . '/search-jobs.php');
    } else {
        load_template(TEMPLATEPATH . '/search-news.php');
    }
}