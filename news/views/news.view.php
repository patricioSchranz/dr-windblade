<?php

// dump($blog_meta_datas);

$page = "news";

require __DIR__ . './../../views/header.php';

usort($pages, function($a, $b) {
    return strtotime($b->snippet['creation_date'][1]) - strtotime($a->snippet['creation_date'][1]);
});

?>

<!-- NEWS SECTION -->
<section class="news">
    <header class="news_header">
        <img src="./../graphics/pics/time-2.jpg" alt="a clock and some growing plants">
        <h2>News</h2>
    </header>

    <!-- ARTICLE CONTAINER -->

    <div class="news_article-container">
        <?php foreach($pages as $page) : $page->get_content() ?>
            <!-- NEWS ARTICLE -->
            <article class="news_article">
                        <header class="news_article_header">
                                <p class="time"><?= $page->snippet['creation_date'][1] ?></p>
                            
                            <h2><?= $page->post_title ?></h2>
                        </header>

                        <div class="news_article_content">
                        <?php if(isset($page->snippet["image"][0])) : ?>
                            <?= $page->snippet["image"][0] ?>
                        <?php endif ?>
                            <?= $page->content ?>
                        </div>
                    </article>
        <?php endforeach; ?>
    </div>
 
</section>


<?php require __DIR__ . './../../views/footer.php';