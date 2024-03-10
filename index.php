<?php 

$page = 'index';

require __DIR__ . '/views/header-index.php';
?>

<!-- INTRO SECTION -->
        <section class="startpage_intro">
            <div class="startpage_intro_picture"></div>

            <div class="startpage_intro_heading-container">
                <h2>Ich bin Dr. Windblade</h2>
                <p>aus Liebe zum Mensch</p>
            </div>     
        </section>


<!-- LEISTUNGEN -->
        <section class="startpage_leistungen clippy-off">
            <header>
                <img src="./graphics/icons_n_co/caduceus.png" alt="caduceus">
                <h2 class="animate__animated">Meine Leistungen</h2>
            </header>


            <div class="startpage_leistungen_card-container">

        <!-- CARD KASSENLEISTUNGEN -->
            <!-- <div class="startpage_leistungen_card animate__animated" id="card-kassen">
                <div class="startpage_leistungen_card_header">
                    <img src="graphics/pics/stethoscope.webp" alt="stethoscope">
                    <h3>Kassenleistungen</h3>
                </div>

                <ul class="startpage_leistungen_card_list">
                    <li>
                        <span>Vorsorgeuntersuchung</span>
                    </li>
                    <li>
                        <span>Ruhe EKG</span>
                    </li>
                    <li>
                        <span>Lungenfunktion</span>
                    </li>
                    <li>
                        <span>uvm.</span>
                    </li>
                </ul>

                <button class="startpage_leistungen_card_button" id="button_kassenleistungen">zu den Kassenleistungen</button>
            </div> -->


        <!-- CARD WAHLARZTLEISTUNGEN -->
            <!-- <div class="startpage_leistungen_card animate__animated" id="card-wahlarzt">
                <div class="startpage_leistungen_card_header">
                    <img src="graphics/pics/analysis.webp" alt="stethoscope">
                    <h3>Wahlarztleistungen</h3>
                </div>

                <ul class="startpage_leistungen_card_list">
                    <li>
                        <span>24h EKG</span>
                    </li>
                    <li>
                        <span>24h Blutdruck</span>
                    </li>
                    <li>
                        <span>Eventrecorder</span>
                    </li>
                    <li>
                        <span>uvm.</span>
                    </li>
                </ul>

                <button class="startpage_leistungen_card_button" id="button_wahlarztleistungen">zu den Wahlarztleistungen</button>
            </div> -->

             <!-- KASSENLEISTUNGEN (big card) -->
             <div class="startpage_leistungen_card big-card animate__animated" id="card-kassen">
                <img src="graphics/pics/stethoscope.webp" alt="stethoscope">

                <div class="big-card_card-container">
                    <div class="startpage_leistungen_card_header">
                        <h3>Kassenleistungen</h3>
                    </div>
        
                    <ul class="startpage_leistungen_card_list">
                        <li>
                            <span>Vorsorgeuntersuchung</span>
                        </li>
                        <li>
                            <span>Ruhe EKG</span>
                        </li>
                        <li>
                            <span>Lungenfunktion</span>
                        </li>
                        <li>
                            <span>uvm.</span>
                        </li>
                    </ul>

                    <a class="startpage_leistungen_card_button" id="button_kassenleistungen" href="./docs/services.php#check-up">zu den Kassenleistungen</a>
                </div>
            </div>

            <!-- WAHLARZTLEISTUNGEN (big card) -->
            <div class="startpage_leistungen_card big-card animate__animated" id="card-wahlarzt">
                <img src="graphics/pics/analysis.webp" alt="stethoscope">

                <div class="big-card_card-container">
                    <div class="startpage_leistungen_card_header">
                        <h3>Wahlarztleistungen</h3>
                    </div>
        
                    <ul class="startpage_leistungen_card_list">
                    <li>
                        <span>24h EKG</span>
                    </li>
                    <li>
                        <span>24h Blutdruck</span>
                    </li>
                    <li>
                        <span>Eventrecorder</span>
                    </li>
                    <li>
                        <span>uvm.</span>
                    </li>
                </ul>
        
                    <a class="startpage_leistungen_card_button" id="button_wahlarztleistungen" href="./docs/private-services.php#rest-ekg">zu den Wahlarztleistungen</a>
                </div>
            </div>


        <!-- CARD ALTERNATIVE MEDIZIN(big card) -->
            <div class="startpage_leistungen_card big-card animate__animated" id="card-aesthetic">
                <img src="./graphics/pics/tea.webp" alt="woman" class="card-pic">

                <div class="big-card_card-container">
                    <div class="startpage_leistungen_card_header">
                        <h3>Alternative Medizin</h3>
                    </div>
        
                    <ul class="startpage_leistungen_card_list">
                        <li>
                            <span>Akupunktur</span>
                        </li>
                        <li>
                            <span>Schröpfen</span>
                        </li>
                        <li>
                            <span>Tibetische Massage</span>
                        </li>
                        <li>
                            <span>uvm.</span>
                        </li>
                    </ul>
        
                    <a class="startpage_leistungen_card_button" id="button_aesthetic" href="./docs/alternate-services.php#acupuncture">zur Alternativen Medizin</a>
                </div>
            </div>

        <!-- CARD WEITERE LEISTUNGEN (big card) -->
            <div class="startpage_leistungen_card big-card animate__animated" id="card-more">
                <img src="./graphics/pics/meditation.webp" alt="woman">

                <div class="big-card_card-container">
                    <div class="startpage_leistungen_card_header">
                        <h3>Weitere Leistungen</h3>
                    </div>
        
                    <ul class="big-card_list">
                        <li>
                            <a class="startpage_leistungen_card_button" id="button_corona" href="./docs/corona-services.php#covid-antigen">Alles zum Thema Corona</a>
                        </li>
                        <li>
                            <a class="startpage_leistungen_card_button" id="button_herz-fit" href="./docs/alternate-ways.php#qi-gong-group">Qi Gong Gruppe</a>
                        </li>
                        <li>
                            <a class="startpage_leistungen_card_button" id="button_physiotherapie"  href="./docs/physical-therapy.php">Physiotherapie</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div><!-- end card container -->


        <!-- BOTTOM (need 4 styling) -->
            <div class="startpage_leistungen_bottom"></div>

        </section><!-- end section "Meine Leistungen" -->


<?php

require __DIR__ . '/views/footer.php';

?>

