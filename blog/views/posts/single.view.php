<?php

require __DIR__ . '/../layout/header.view.php';

$searched_post_title = $_GET["single"] ? $_GET["single"] : '' ;
$searched_post = '';

$count_of_pages = count($pages);
$next_single_post = '';
$previous_single_post = '';

foreach($pages as $idx => $page){
    if($page->post_title === $searched_post_title){ 
        $searched_post = $page ; 
        $searched_post->get_content();

        // => set next single post
        if($idx <= ($count_of_pages - 2)){
            $next_single_post = urlencode($pages[$idx + 1]->post_title);
        }

        // => set previous single post
        if($idx > 0){
            $previous_single_post = urlencode($pages[$idx - 1 ]->post_title);
        }

    }
}


if($searched_post === ''){
    // die('No post found');
    header("Location: $current_path[0]");
}

if(empty($previous_single_post)) { $previous_single_post = $_GET['single'] ; }
if(empty($next_single_post)) { $next_single_post = $_GET['single'] ; }

?>

<nav class="single-nav">
    <a href="./blog.php"><img src="../graphics/icons_n_co/back-akzent-3.png" alt="back arrow"></a>

    <div class="single-nav-links">
        <?php if($previous_single_post !== $_GET['single']) : ?>
            <a href="./blog.php?single=<?php echo $previous_single_post; ?>">Previous Post</a>

            <?php else : ?>
            <a href="./blog.php?single=<?php echo $previous_single_post; ?>" class="aimless-link">Previous Post</a>

        <?php endif; ?>

        <?php if($next_single_post !== $_GET['single']) : ?>
            <a href="./blog.php?single=<?php echo $next_single_post; ?>">Next Post</a>

            <?php else : ?>
            <a href="./blog.php?single=<?php echo $next_single_post; ?>" class="aimless-link">Next Post</a>

        <?php endif; ?> 
    </div>
   
</nav>

<header class="single-header">
    <?php if(!empty($searched_post->snippet["image"])) : ?>
        <?php echo $searched_post->snippet["image"][0] ?>

        <?php else : ?>
            <img src="../graphics/pics/buddha-1920.jpg" alt="buddha">
    <?php endif; ?>

  <h1 class="post-title"><?php echo $searched_post->post_title ?></h1>
</header>

<main class="single-main">
    <?php echo $searched_post->content ?>
</main>

<?php require __DIR__ . '/../layout/footer.view.php'; ?>