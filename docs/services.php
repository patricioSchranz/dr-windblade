<?php

$page = 'services';

require __DIR__ . './../views/header.php';
?>

<!-- HEADING -->
    <div class="services_heading">
        <h1>Kassenleistungen</h1>
    </div>

<!-- REITER NAVIGATION -->
    <div class="services_reiter">
        <ul class="services_reiter_list">
            <li>
                <a href="#check-up">Vorsorgeuntersuchung</a>
            </li>
            <li>
                <a href="#rest-ekg">Ruhe EKG</a>
            </li>
            <li>
                <a href="#lung-function">Lungenfunktion</a>
            </li>
            <li>
                <a href="#infusion-therapy">Infusionstherapie</a>
            </li>
        </ul>
    </div>

<!-- SERVICES --> 

    <!-- VORSORGEUNTERSUCHUNG -->
    <section class="services_service" id="check-up">
        <h2 class="outer-heading" data-id="#check-up">Vorsorgeuntersuchung</h2>

        <div class="services_service_content">

            <!-- timing declaration should not include white spaces 
            the trigger point is in percent of the viewport height  -->
            <figure 
                class="
                    animation-element
                    animation--style_the-circle-grows
                    animation--duration_1000
                    animation--delay_0
                    animation--timing_cubic-bezier(.47,.03,.68,.36)
                    animation--trigger-point_70
                    " id="figure-an">
                <img src="../graphics/pics/yoga-1.jpg" >
            </figure>
            
            <div class="services_service_text">
                <h2 class="animation-element animation--style_flipping-headline animation--delay_300" id="h2-an">Vorsorgeuntersuchung</h2>

                <p class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90" id="para-an">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellendus deserunt minima iusto quibusdam ea ipsa quas aliquam dolores maxime, nobis molestias voluptates omnis adipisci animi ratione, vero ducimus recusandae.
                </p>

                <h3 class="animation-element animation--style_clippy-from-left-to-right animation--duration_1000 animation--trigger-point_90" id="h3-an">Lorem ipsum dolor sit amet.</h3>

                <ul id="ul-an">
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90" >
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                </ul>

                <p class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90" id="para-2-an">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem magni accusantium atque saepe. Dicta tenetur amet quo exercitationem itaque alias ab totam hic esse, recusandae quasi optio? Fugit, quisquam adipisci.
                Porro hic aut vel distinctio fugit, repellendus omnis adipisci in suscipit aliquam non dolorum eligendi aliquid, esse eaque doloribus ea et labore modi exercitationem quisquam! Voluptatum reprehenderit nam quidem fugiat!</p>
            </div>  
        </div>
        
    </section>


    <!-- RUHE EKG -->
    <section class="services_service" id="rest-ekg">
        <h2 class="outer-heading" data-id="#rest-ekg">Ruhe EKG</h2>

        <div class="services_service_content">

            <figure class="
                    animation-element
                    animation--style_the-circle-grows
                    animation--duration_1000
                    animation--delay_0
                    animation--timing_cubic-bezier(.47,.03,.68,.36)
                    animation--trigger-point_70
                    ">
                <img src="../graphics/pics/yoga-2.jpg">
            </figure>
            
            <div class="services_service_text">
                <h2 class="animation-element animation--style_flipping-headline animation--delay_300" >Ruhe EKG</h2>

                <p class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellendus deserunt minima iusto quibusdam ea ipsa quas aliquam dolores maxime, nobis molestias voluptates omnis adipisci animi ratione, vero ducimus recusandae.</p>

                <h3 class="animation-element animation--style_clippy-from-left-to-right animation--duration_1000 animation--trigger-point_90">Lorem ipsum dolor sit amet.</h3>

                <ul>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                </ul>

                <p class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem magni accusantium atque saepe. Dicta tenetur amet quo exercitationem itaque alias ab totam hic esse, recusandae quasi optio? Fugit, quisquam adipisci.
                Porro hic aut vel distinctio fugit, repellendus omnis adipisci in suscipit aliquam non dolorum eligendi aliquid, esse eaque doloribus ea et labore modi exercitationem quisquam! Voluptatum reprehenderit nam quidem fugiat!</p>
            </div>  
        </div>
        
    </section>


    <!-- LUNGENFUNKTION -->
    <section class="services_service" id="lung-function">
        <h2 class="outer-heading" data-id="#lung-function">Lungenfunktion</h2>

        <div class="services_service_content">

            <figure class="
                    animation-element
                    animation--style_the-circle-grows
                    animation--duration_1000
                    animation--delay_0
                    animation--timing_cubic-bezier(.47,.03,.68,.36)
                    animation--trigger-point_70
                    ">
                <img src="../graphics/pics/yoga-3.jpg">
            </figure>
            

            <div class="services_service_text">
                <h2 class="animation-element animation--style_flipping-headline animation--delay_300">Lungenfunktion</h2>

                <p class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellendus deserunt minima iusto quibusdam ea ipsa quas aliquam dolores maxime, nobis molestias voluptates omnis adipisci animi ratione, vero ducimus recusandae.</p>

                <h3 class="animation-element animation--style_clippy-from-left-to-right animation--duration_1000 animation--trigger-point_90">Lorem ipsum dolor sit amet.</h3>

                <ul>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                </ul>

                <p class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem magni accusantium atque saepe. Dicta tenetur amet quo exercitationem itaque alias ab totam hic esse, recusandae quasi optio? Fugit, quisquam adipisci.
                Porro hic aut vel distinctio fugit, repellendus omnis adipisci in suscipit aliquam non dolorum eligendi aliquid, esse eaque doloribus ea et labore modi exercitationem quisquam! Voluptatum reprehenderit nam quidem fugiat!</p>
            </div>  
        </div>
        
    </section>


    <!-- INFUSTIONSTHERAPIE -->
    <section class="services_service" id="infusion-therapy">
        <h2 class="outer-heading" data-id="#infusion-therapy">Infusionstherapie</h2>

        <div class="services_service_content">

            <figure class="
                    animation-element
                    animation--style_the-circle-grows
                    animation--duration_1000
                    animation--delay_0
                    animation--timing_cubic-bezier(.47,.03,.68,.36)
                    animation--trigger-point_70
                    ">
                <img src="../graphics/pics/yoga-4.jpg">
            </figure>
           
            <div class="services_service_text">
                <h2 class="animation-element animation--style_flipping-headline animation--delay_300">Infustionstherapie</h2>

                <p class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellendus deserunt minima iusto quibusdam ea ipsa quas aliquam dolores maxime, nobis molestias voluptates omnis adipisci animi ratione, vero ducimus recusandae.</p>

                <h3 class="animation-element animation--style_clippy-from-left-to-right animation--duration_1000 animation--trigger-point_90">Lorem ipsum dolor sit amet.</h3>

                <ul>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                    <li class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">
                        Lorem, ipsum dolor.
                    </li>
                </ul>

                <p class="animation-element animation--style_fade-up animation--duration_500 animation--trigger-point_90">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem magni accusantium atque saepe. Dicta tenetur amet quo exercitationem itaque alias ab totam hic esse, recusandae quasi optio? Fugit, quisquam adipisci.
                Porro hic aut vel distinctio fugit, repellendus omnis adipisci in suscipit aliquam non dolorum eligendi aliquid, esse eaque doloribus ea et labore modi exercitationem quisquam! Voluptatum reprehenderit nam quidem fugiat!</p>
            </div>  
        </div>
       
    </section>



<?php require __DIR__ . './../views/footer.php' ?>