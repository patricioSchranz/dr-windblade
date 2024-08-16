<?php

$page = 'office';

require __DIR__ . '/../views/header.php';

?>

<!-- OFFICE -->
<section class="office">

    <!-- IMAGE ROW TOP -->
    <div class="office_image-row top">
        <picture class="animation-element animation--style_clippy-from-left-to-right animation--duration_500">
                <source srcset="./../graphics/pics/waiting-room-wmc-750.webp" media="(max-width: 750px)">
                <source srcset="./../graphics/pics/waiting-room-wmc-1500.webp" media="(max-width: 1500px)">
                <source srcset="./../graphics/pics/waiting-room.webp" media="(min-width: 1500px)">
                <img src="./../graphics/pics/waiting-room.webp" alt="waiting room" loading="lazy">
        </picture>

        <picture class="animation-element animation--style_clippy-from-right-to-left animation--duration_500 animation--delay_500">
            <source srcset="./../graphics/pics/lab-wmc-750.webp" media="(max-width: 750px)">
            <source srcset="./../graphics/pics/lab-wmc-1500.webp" media="(max-width: 1500px)">
            <source srcset="./../graphics/pics/lab.webp" media="(min-width: 1500px)">
            <img src="./../graphics/pics/lab.webp" alt="laboratory" loading="lazy">
        </picture>
    </div>

    <!-- CONTENT -->
    <div class="office_content">
        <h2>Ordination</h2>

        <div class="office_content_contact-details">

            <!-- PHONE -->
            <div class="detail animation-element animation--style_clippy-circle animation--duration_500 animation--delay_1000 animation--trigger-point_100">
                <a href="tel:+436503335588">
                    <img src="../graphics/icons_n_co/phone.svg" alt="phone icon">
                </a>
               <a href="tel:+436503335588">0650/3335588</a> 
            </div>

            <!-- FAX -->
            <div class="detail animation-element animation--style_clippy-circle animation--duration_500 animation--delay_1000 animation--trigger-point_100">
                <img src="../graphics/icons_n_co/fax.svg" alt="fax icon">
               <p>04254/3335588</p> 
            </div>

            <!-- MAIL -->
            <div class="detail animation-element animation--style_clippy-circle animation--duration_500 animation--delay_1000 animation--trigger-point_100">
                <a href="mailto:office@dr-windblade.uv?subject=Request%20for%20an%20appointment">
                    <img src="../graphics/icons_n_co/mail.svg" alt="mail icon">
                </a> 
               <a href="mailto:office@dr-windblade.uv?subject=Request%20for%20an%20appointment">office@dr-windblade.uv</a> 
            </div>

            <!-- ADRESS -->
            <div class="detail animation-element animation--style_clippy-circle animation--duration_500 animation--delay_1000 animation--trigger-point_100">
                <a href="https://goo.gl/maps/m4tEFiAVJgjFW82DA" rel="external" target="_blank">
                 <img src="../graphics/icons_n_co/adress.svg" alt="adress icon">
                </a>
               <div class="adress">
                    <p>Eulenweg 7</p>
                    <p>9020 Klagenfurt</p>
                    <p>Österreich</p>
               </div> 
            </div>
            
        </div>   
    </div>

    <div class="office_image-row bottom">
        <picture class="animation-element animation--style_clippy-from-left-to-right animation--duration_500 animation--delay_500 animation--trigger-point_100">
            <source srcset="./../graphics/pics/flower-wmc-750.webp" media="(max-width: 750px)">
            <source srcset="./../graphics/pics/flower-wmc-1500.webp" media="(max-width: 1500px)">
            <source srcset="./../graphics/pics/flower.webp" media="(min-width: 1500px)">
            <img src="./../graphics/pics/flower.webp" alt="thymian" loading="lazy">
        </picture>

        <picture class="animation-element animation--style_clippy-from-right-to-left animation--duration_500 animation--trigger-point_100">
            <source srcset="./../graphics/pics/doctor-wmc-750.webp" media="(max-width: 750px)">
            <source srcset="./../graphics/pics/doctor-wmc-1500.webp" media="(max-width: 1500px)">
            <source srcset="./../graphics/pics/doctor.webp" media="(min-width: 1500px)">
            <img src="./../graphics/pics/doctor.webp" alt="doctors room" loading="lazy">
        </picture>
    </div>

</section>





<?php require __DIR__ . '/../views/footer.php' ?>