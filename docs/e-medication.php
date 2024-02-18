<?php

$page = "e-medication";

require __DIR__ . './../views/header.php';

?>

<!-- E - MEDICATION -->
<section class="e-medication">

    <!-- BIG IMAGE -->
    <div class="e-medication_left-side">
        <img src="../graphics/pics/pharmacy.jpg" alt="pharmacy" class="animation-element animation--style_clippy-from-left-to-right animation--duration_500">
    </div>

    <!-- CONTENT -->
    <div class="e-medication_right-side">
        <h2 class="animation-element animation--style_fade-up animation--delay_500 animation--trigger-point_100"">E - Medikation</h2>

        <p class="animation-element animation--style_clippy-circle animation--duration_100 animation--delay_800 animation--trigger-point_100"">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium et aspernatur quia nihil aliquam, dolorum sunt est veritatis maiores dolore. Quae, odio atque ratione cupiditate esse reiciendis quos dolore quis.
        Aperiam culpa eos labore sapiente voluptates ab necessitatibus repellat adipisci explicabo! Itaque asperiores, assumenda reprehenderit atque laborum deleniti officiis nam, et facere earum error voluptates sunt nobis, mollitia odio? Asperiores?
        </p>


        <div class="container-user-data animation-element animation--style_clippy-circle animation--duration_100 animation--delay_1300 animation--trigger-point_100">
            <p class="text-hint">
                Bitte schreiben Sie eine Mail mit vollständigen Angaben aller Art, insbesondere:
            </p>

            <ul class="required-data">
                <li>Vor- und Nachname</li>
                <li>Sozialversicherungsnummer</li>
                <li>Geburtsdatum</li>
                <li>vollständige Adresse</li>
                <li>Telefonnummer</li>
                <li>benötigte Medikamente</li>
            </ul>

            <a class="text-hint" href="mailto:office@windblade.at">office@windblade.at</a>
        </div>
       
    </div>
</section>




<?php require __DIR__ . './../views/footer.php' ?> 