<?php

$page = 'office';

require __DIR__ . './../views/header.php';

?>

<!-- OFFICE -->
<section class="office">

    <!-- IMAGE ROW TOP -->
    <div class="office_image-row top">
        <img src="./../graphics/pics/waiting-room.jpg" alt="waiting room">
        <img src="./../graphics/pics/lab.jpg" alt="laboratory">
    </div>

    <!-- CONTENT -->
    <div class="office_content">
        <h2>Ordination</h2>

        <div class="office_content_contact-details">

            <!-- PHONE -->
            <div class="detail">
                <a href="tel:+436503335588">
                    <img src="../graphics/icons_n_co/phone.svg" alt="phone icon">
                </a>
               <a href="tel:+436503335588">0650/3335588</a> 
            </div>

            <!-- FAX -->
            <div class="detail">
                <img src="../graphics/icons_n_co/fax.svg" alt="fax icon">
               <p>04254/3335588</p> 
            </div>

            <!-- MAIL -->
            <div class="detail">
                <a href="mailto:office@dr-windblade.uv?subject=Request%20for%20an%20appointment">
                    <img src="../graphics/icons_n_co/mail.svg" alt="mail icon">
                </a> 
               <a href="mailto:office@dr-windblade.uv?subject=Request%20for%20an%20appointment">office@dr-windblade.uv</a> 
            </div>

            <!-- ADRESS -->
            <div class="detail">
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
        <img src="../graphics/pics/flower.jpg" alt="thymian">
        <img src="../graphics/pics/doctor.jpg" alt="doctors room">
    </div>

</section>





<?php require __DIR__ . './../views/footer.php' ?>