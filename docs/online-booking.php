<?php

$page = "online-booking";

require __DIR__ . './../views/header.php';

?>

<!-- E - MEDICATION -->
<section class="online-booking">

    <!-- BIG IMAGE -->
    <div class="online-booking_left-side">
        <picture class="animation-element animation--style_clippy-from-left-to-right animation--duration_500">
            <source srcset="./../graphics/pics/flowers-wmc-750.webp" media="(max-width: 750px)">
            <source srcset="./../graphics/pics/flowers-wmc-1500.webp" media="(max-width: 1500px)">
            <source srcset="./../graphics/pics/flowers.webp" media="(min-width: 1500px)">
            <img src="./../graphics/pics/flowers.webp" alt="flowers" loading="lazy">
        </picture>
    </div>

    <!-- CONTENT -->
    <div class="online-booking_right-side">
        <h2>Online Terminkalender</h2>

        <p>Dieses Service wird gerade erstellt.
        </p>

    </div>
</section>


<?php require __DIR__ . './../views/footer.php' ?> 