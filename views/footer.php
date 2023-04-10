<!-- FOOTER -->
<footer class="footer">

<!-- OPEN TIMES-->
        <section class="footer_open-times">
            <h2>Öffnungszeiten</h2>

          <!-- ORDINATION -->
          <div class="footer_open-times_ordination">
            <h3>Ordination: </h3>

            <div class="weekday-container">
               <p>Montag</p>
               <div class="weekday-container_time-wrapper">
                    <time>08:00</time> - <time>13:00</time>
               </div>
            </div>

             <div class="weekday-container">
                <p>Dienstag</p>
                <div class="weekday-container_time-wrapper">
                     <time>14:00</time> - <time>19:00</time>
                </div>
             </div>

             <div class="weekday-container">
                <p>Mittwoch</p>
                <div class="weekday-container_time-wrapper">
                     <time>07:30</time> - <time>12:30</time>
                </div>
             </div>

             <div class="weekday-container">
                <p>Donnerstag</p>
                <div class="weekday-container_time-wrapper">
                     <time>08:00</time> - <time>13:00</time>
                </div>
             </div>

             <div class="weekday-container">
                <p>Freitag</p>
                <div class="weekday-container_time-wrapper">
                     <time>08:00</time> - <time>10:00</time>
                </div>
             </div>
          </div><!-- end ordination times -->


          <!-- COVID -->
          <div class="footer_open-times_covid">
            <h3>Covid-19 Ag + PCR Test :</h3>

            <div class="weekday-container">
               <p>Mo - Fr</p>
               <div class="weekday-container_time-wrapper">
                    <time>09:00</time> - <time>11:00</time>
               </div>
            </div>
          </div><!-- end covid times -->

        </section>


    <!-- CONTACT-->
        <section class="footer_contact">
            <h2 class="hidden">Kontakt</h2>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10958.664299076168!2d14.27471763787281!3d46.63335876611274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4770738648f236dd%3A0xbb75cc4856b431b!2sKreuzbergl!5e0!3m2!1sde!2sat!4v1676971160780!5m2!1sde!2sat"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-maps"></iframe >

            <!-- ADRESS-->
            <adress>

                <!-- POSTAL ADRESS -->
                <div class="footer_contact_adress">
                    <strong>Dr. Christina Windblade</strong>
                    <strong>Internistin</strong>
                    <p>Optimus Straße 13</p>
                    <p>9020 Klagenfurt</p>
                </div>

                <div class="footer_contact_telephone">
                    <div class="telephone-container">
                        <p>Tel. :</p>
                        <a href="tel:+4312345">0463/12345</a>
                    </div>
                    <div class="telephone-container">
                        <p>Fax :</p>
                        <a href="tel:+4312345">0463/12345 4</a>
                    </div>
                    <div class="telephone-container">
                        <p>Beauty Telefon :</p>
                        <a href="tel:+4312345">0463/12345 34</a>
                    </div>
                    
                </div>
            </adress>
        </section>


    <!-- IMPORTANT PAGES -->
        <section class="footer_important-pages">
            <h2>Wichtige Seiten</h2>

            <ul>
                <li>
                    <a href="#">Kassenleistungen</a>
                </li>
                <li>
                    <a href="#">Wahlarztleistungen</a>
                </li>
                <li>
                    <a href="#">Ästhetische Medizin</a>
                </li>
                <li>
                    <a href="#">Beauty & Balance</a>
                </li>
                <li>
                    <a href="#">Physiotherapie</a>
                </li>
            </ul>
        </section>
    </footer>

    

</div><!-- end big container-->

<!-- SCRIPTS -->

<?php if($page === "index") :?>
    <!-- <script src="src/js/resize.js"></script> -->
    <script src="src/js/dom-elements.js"></script>
    <script src="src/js/hamburger_navigation.js"></script>
    <script src="src/js/header.js"></script>
    <script src="src/js/in-viewport.js"></script>

    <?php else :?>
        <script src="../src/js/dom-elements.js"></script>
        <script src="../src/js/hamburger_navigation.js"></script>
        <script src="../src/js/header.js"></script>
        <script src="../src/js/in-viewport.js"></script>

<?php endif; ?>
</body>
</html>