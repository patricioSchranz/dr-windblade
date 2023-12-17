<?php

// dump($blog_meta_datas);

$page = "news";

require __DIR__ . './../../views/header.php';

// foreach($pages as $page){
//     dump($page->snippet['creation_date'][1]);
//     dump($page->get_content());
   
//     $page->get_content();

//     dump($page->content);  
// }



?>

<!-- NEWS SECTION -->
<section class="news">
    <header class="news_header">
        <img src="./../graphics/pics/news.jpg" alt="a clock and some growing plants">
        <h1>News</h1>
    </header>

    <?php foreach($pages as $page) : $page->get_content() ?>

        <!-- NEWS ARTICLE -->
        <article class="news_article">
            <header class="news_article_header">
                <p class="time"><?= $page->snippet['creation_date'][1] ?></p>
                <h2><?= $page->post_title ?></h2>
            </header>

            <div class="news_article_content">
                <?= $page->snippet["image"][0] ?>
                <?= $page->content ?>
            </div>
        </article>
        
    <?php endforeach; ?>
 
</section>


<?php require __DIR__ . './../../views/footer.php';