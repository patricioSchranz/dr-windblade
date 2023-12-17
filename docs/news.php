<?php 

require __DIR__ . '/../blog/src/functions.php';
require __DIR__ . '/../blog/src/converter_init.php';
require __DIR__ . '/../blog/src/Page.php';

$pages_path = __DIR__  . '/../news/content/markdowns';
$pages = get_all_pages($pages_path, $md_converter);
$snippets = get_all_snippets($pages);
$blog_meta_datas = get_blog_metas($snippets);


extract($blog_meta_datas);

require __DIR__ . '/../news/views/news.view.php';