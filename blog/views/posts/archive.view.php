<?php

// require __DIR__ . '/../layout/header.view.php';
$page = "blog";
require __DIR__ . '/../../../views/header.php';


$filtered_pages;
$filter;

$all_posts_count = count($pages);

if(isset($_GET['archive'])){
    $searched_meta = $_GET['archive'];
    $searched_term = $_GET['term'];

    $filtered_pages = array_filter($pages, function ($page) {
        global $searched_meta;
        global $searched_term;

        if($searched_meta === 'hashtags'){
           $page_hashtags = $page->snippet[$searched_meta][1];

        //    dump($page_hashtags);
        //    dump($searched_term);

            if(is_array($page_hashtags)) {
                foreach($page_hashtags as $hashtag){
                    $count = 0;
    
                    $hashtag = trim(str_replace('#', '', $hashtag));
    
                    // dump($hashtag);
    
                    $hashtag === $searched_term 
                    ? $count++
                    : $count = $count;
    
                    if( ($count === 1 ) && ( $hashtag === $searched_term )){ return $page ;}
               }
            }
           

           return;
        }


        $category_term = isset($page->snippet[$searched_meta][1]) ? $page->snippet[$searched_meta][1] : '' ;

        if($category_term === $searched_term){  return $page; }
       
    });

    $pages = $filtered_pages;

    $filter_upper_chars = strtoupper($searched_meta);
    $filter_upper_chars = str_replace('_', ' ', $filter_upper_chars);
    $filter = "<span>Angewendeter Filter : </span><span class='searched-term'>{$searched_term}</span>";

}

$selected_posts_count = count($pages);


$offset = 0;
$limit = 4;
$page_count;

$pagination_number;
$pagination_limit = 3;

$last_page = ceil((count($pages) / $limit));

// print($last_page);


if (!isset ($_GET['page']) ) {  
    $page_count = 1;  
    $pagination_number = 1;
} 
else {  
    $page_count = (int) $_GET['page']; 
    $pagination_number = (int) $_GET['page' ];
    $offset = ((int) $_GET['page'] * $limit) - $limit;


    if($pagination_number > $last_page ){
        $pagination_number = 1;  
    }
   
}  

usort($pages, function($a, $b) {
    return strtotime($b->snippet['creation_date'][1]) - strtotime($a->snippet['creation_date'][1]);
});

// foreach($pages as $page){
//    dump($page->snippet['creation_date'][1]);
// }

// print($offset);
// print($limit);

$page_selection = array_slice($pages, $offset, $limit);


?>

<!-- BLOG -->
<section class="blog">

    <!-- INTRO SECTION -->
    <header class="blog_intro-section">
        <picture>
            <source srcset="./../graphics/pics/blog-wmc-750.webp" media="(max-width: 750px)">
            <source srcset="./../graphics/pics/blog-wmc-1500.webp" media="(max-width: 1500px)">
            <source srcset="./../graphics/pics/blog.webp" media="(min-width: 1500px)">
            <img src="./../graphics/pics/blog.webp" alt="a desk with some fancy accesoirs and a notebook" loading="lazy">
        </picture>
        <h2 class="animation-element animation--style_clippy-circle animation--duration_500 animation--trigger-point_95 animation--delay_0">
            Blog
        </h2>
    </header>



    <!-- BLOG INFO -->
    <aside class="blog_info">
        <h3 class="hidden">Blog Info</h3>

        <!-- FILTER -->
        <p class="blog_info_filter">
            <?php if(isset($filter)) :?>
                    <?= $filter ?>
                <?php else : ?>
                    Alle Beiträge
            <?php endif; ?>

            <span class="blog-filter">
                <img src="./../graphics/icons_n_co/filter.svg" alt="filter icon" >
            </span>  
        </p>

        <!-- WHOLE POSTS -->
        <p class="blog_info_posts animation-element animation--style_clippy-from-left-to-right">
            <?php if ($selected_posts_count === 1) : ?>
                Unser Blog hat insgesamt <span><?= $all_posts_count ?></span> Beiträge, davon wird dir gerade 
                <span>einer</span> aufgelistet.

                <?php else : ?>
                    Unser Blog hat insgesamt <span><?= $all_posts_count ?></span> Beiträge, davon werden dir gerade 
                    <span><?= $selected_posts_count ?></span> aufgelistet.

            <?php endif; ?>
           
        </p>

        <!-- PAGES -->
        <p class="blog_info_pages animation-element animation--style_clippy-from-left-to-right">
            Seite <?= $page_count ?> von <?= ceil( count($pages) / $limit ) ?>
        </p>

        <!-- POSTS ON CURRENT PAGE -->
        <p class="blog_info_visible-posts-count animation-element animation--style_clippy-from-left-to-right animation--delay_500">
            <?php if($page_count != $last_page) : ?>
                Beiträge <?= $offset + 1 ?> - <?= ($offset +1)  + ($limit - 1) ?>

                <?php else : ?>
                    <?php 
                        $posts_per_page = $selected_posts_count / ( $selected_posts_count / $limit);
                        $last_page_posts_count = $selected_posts_count - $posts_per_page * ($page_count - 1);

                    ?>

                    <strong>Post <?= $offset + 1 ?> - <?= $offset + $last_page_posts_count ?></strong>

            <?php endif; ?>  
        </p>
    </aside>



    <!-- POST CARDS  CONTAINER -->
    <section class="blog_post-cards-container">
        <h3 class="hidden">Beiträge</h3>

        <?php foreach($page_selection as $page) : ?>
            <!-- POST CARD -->
            <a href='<?php echo "{$current_path[0]}?single={$page->post_title}" ?>' class="blog_post-cards-container_card-link animation-element animation--style_zoom-up animation--duration_700">

                <!-- POST CARD -->
                <article class="blog_post-cards-container_archive-card">
                    <!-- HEADER --> 
                    <header>

                        <h4 class="page-card_title"><?php echo $page->post_title ?></h4>

                        <?php if (isset($page->snippet['author'][1])) : ?>
                            <p class="page-card_meta">By : <?php echo $page->snippet['author'][1] ?></p>
                        <?php endif; ?>

                        <?php if (isset($page->snippet['creation_date'][1])) : ?>
                            <p class="page-card_meta">Created : <?php echo $page->snippet['creation_date'][1] ?></p>
                        <?php endif; ?>
                        
                        <?php if (isset($page->snippet['category'][1])) : ?>
                            <p class="page-card_meta">Category : <?php echo $page->snippet['category'][1] ?></p>
                        <?php endif; ?>

                        <?php if (isset($page->snippet['sub_category'][1])) : ?>
                            <p class="page-card_meta">Sub category : <?php echo $page->snippet['sub_category'][1] ?></p>
                        <?php endif; ?>
                        
                        <figure class="page-card_meta hashtags">
                            <?php   if( is_array($page->snippet['hashtags'][0]) ) : ?>
                                <figcaption>Hashtags :</figcaption>
                                <ul >
                                    <?php 
                                            foreach($page->snippet['hashtags'][0] as $hashtag) {
                                                echo $hashtag;
                                            }
                                    ?>
                                </ul>
                            <?php endif; ?>
                        </figure>
                    
                    </header>


                    <!-- EXCERPT & IMAGE -->
                    <div class="page-card_preview">

                    <?php if(isset($page->snippet['image'][0]) ) :?>
                        <figure>
                            <?php echo $page->snippet['image'][0] ?>
                        </figure>
                    <?php endif ; ?>
                        
                        <p class="page-card_excerpt"><?php echo $page->snippet['excerpt'][1] ?></p> 
                    </div>
                </article>

            </a>
        <?php endforeach; ?>

        <!-- PAGINATION -->
        <div class="blog_post-cards-container_pagination-container">

            <!-- previous link -->
            <?php if ($page_count > 1) : ?>

                <?php if(count($_GET) < 2) : ?>
                    <a href="?page=<?php echo $page_count - 1; ?>">Previous</a>

                <?php else :?> 
                    <?php 
                        $params  = array_merge( $_GET, array( 'page' => $page_count - 1 ) ); 
                        $new_query_string = http_build_query( $params );
                    ?>
                    <a href="?<?= $new_query_string ?>">Previous</a>

                <?php endif; ?>
                    
                <?php else : ?>
                <a href="#" class="aimless-link">Previous</a>

            <?php endif; ?>
            

            <!-- numbered links -->
            <?php 

                $loop_count = 1;

                /**
                 * $limit => posts per page
                 * $pagination_limit => limit of numbered links
                 * $pagination_number => number of the page for which a link should be created
                 */

        
                for($i = 1; $i < count($pages); $i+= $limit){

                    if($loop_count <= $pagination_limit){

                        // no filter is active
                        if(count($_GET) < 2) {
                            $query_string = "page=$pagination_number"; 
                        }

                        // a filter is active
                        else{
                            $params  = array_merge( $_GET, array( 'page' => $pagination_number ) ); 
                            $query_string = http_build_query( $params ); 
                        }

                    
                        // => mark the link of the last page
                        // if($pagination_number == $last_page){
                        //     echo "<a href='?$query_string' class='last-pagination-elem'>$pagination_number</a>";
                        // } 

                        // => mark the link of the current page
                        if( 
                            ( isset($_GET['page']) && $pagination_number == $_GET['page'] ) || 
                            ( !isset($_GET['page']) && $i === 1 ) 
                            ){
                            echo "<a href='?$query_string' class='current-page'>$pagination_number</a>";
                        }
                        else{
                            echo "<a href='?$query_string'>$pagination_number</a>";
                        }
                        
                        $loop_count++;

                        if($pagination_number < $last_page){
                            $pagination_number++;
                        }
                        else{
                            $pagination_number = 1; 
                        }
                        
                    }
                    else{
                        echo '...';
                        break;
                    }
                
                }
            ?>

            <!-- next link -->
            <?php if ($page_count < (count($pages) / $limit) ) : ?>
                <a href="?page=<?php echo $page_count + 1; ?>">Next</a>

                <?php else : ?>
                <a href="#" class="aimless-link">Next</a>

            <?php endif; ?>  
        </div>

    </section>



    <!-- SIDEBAR --> 
    <aside class="blog_sidebar">
        <h3 class="hidden">Sidebar</h3>

        <img src="./../graphics/icons_n_co/close.svg" alt="close icon" class="sidebar-close">

        <a href="blog.php" class="all-posts"><span>Alle Beiträge anzeigen</span></a>

        <!-- CATEGORIES -->
        <figure>
            <figcaption>Kategorien</figcaption>
            <ul>
                <?php foreach($categories as $category){ ?>
                    <li>
                        <a href="?archive=category&term=<?php echo urlencode($category) ?>"><?= $category ?></a>
                    </li>
                <?php } ?>
            </ul>
        </figure>

        <!-- SUB CATEGORIES -->
        <figure>
            <figcaption>Unterkategorien</figcaption>
            <ul>
                <?php foreach($sub_categories as $sub_category){ ?>
                    <li>
                        <a href="?archive=sub_category&term=<?php echo urlencode($sub_category) ?>"><?= $sub_category ?></a>
                    </li>
                <?php } ?>
            </ul>
        </figure>

        <!-- AUTHORS -->
        <figure>
            <figcaption>Autoren</figcaption>
            <ul>
                <?php foreach($authors as $author){ ?>
                    <li>
                        <a href="?archive=author&term=<?php echo urlencode($author) ?>"><?= $author ?></a>
                    </li>
                <?php } ?>
            </ul>
        </figure>

   

        <!-- HASHTAGS -->
        <figure>
            <figcaption>Hashtags</figcaption>
            <ul>
                <?php foreach($hashtags as $hashtag){ ?>
                    <li>
                        <a href="?archive=hashtags&term=<?php echo urlencode($hashtag) ?>"><?= $hashtag ?></a>
                    </li>
                <?php } ?>
            </ul>
        </figure>
    </aside>
    


</section>



<?php $page = 'blog'; ?>
<?php require __DIR__ . '/../../../views/footer.php'; ?>