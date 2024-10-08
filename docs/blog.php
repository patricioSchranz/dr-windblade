<?php 

require __DIR__ . '/../blog/src/functions.php';
require __DIR__ . '/../blog/src/converter_init.php';
require __DIR__ . '/../blog/src/Page.php';

// $current_host = $_SERVER['HTTP_HOST'];

// => the path is needed to built the link to a single post
$current_path = explode("?", $_SERVER['REQUEST_URI']);

$pages_path = __DIR__  . '/../blog/content/markdowns';
$pages = get_all_pages($pages_path, $md_converter);
$snippets = get_all_snippets($pages);
$blog_meta_datas = get_blog_metas($snippets);


extract($blog_meta_datas);


isset($_GET["single"])
? require __DIR__ . '/../blog/views/posts/single.view.php'
: require __DIR__ . '/../blog/views/posts/archive.view.php';