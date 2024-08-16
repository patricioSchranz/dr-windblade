<?php 

$page = 'team';

require __DIR__ . "/../views/header.php" ;

?>

<!-- TEAM -->
<section class="team">

    <!-- HEADER -->
    <header class="team_header">
        <div class="left-side">

            <picture class="animation-element animation--style_windblade-img-duo-left animation--duration_1000">
                <source srcset="./../graphics/pics/team-1-wmc-750.webp" media="(max-width: 750px)">
                <source srcset="./../graphics/pics/team-1-wmc-1500.webp" media="(max-width: 1500px)">
                <source srcset="./../graphics/pics/team-1.webp" media="(min-width: 1500px)">
                <img src="./../graphics/pics/team-1.webp" alt="medical team" loading="lazy">
            </picture>

            <picture class="animation-element animation--style_windblade-img-duo-right animation--duration_1000">
                <source srcset="./../graphics/pics/team-2-wmc-750.webp" media="(max-width: 750px)">
                <source srcset="./../graphics/pics/team-2-wmc-1500.webp" media="(max-width: 1500px)">
                <source srcset="./../graphics/pics/team-2.webp" media="(min-width: 1500px)">
                <img src="./../graphics/pics/team-2.webp" alt="medical team" loading="lazy">
            </picture>
        </div>

        <div class="right-side">
            <h1>Unser Team</h1>

            <picture class="animation-element animation--style_opacity-in animation--duration_1000">
                <source srcset="./../graphics/pics/team-3-wmc-750.webp" media="(max-width: 750px)">
                <source srcset="./../graphics/pics/team-3-wmc-1500.webp" media="(max-width: 1500px)">
                <source srcset="./../graphics/pics/team-3.webp" media="(min-width: 1500px)">
                <img src="./../graphics/pics/team-3.webp" alt="medical team" loading="lazy">
            </picture>
        </div>
    </header>

    <!-- TEAM MEMBERS -->
    <section class="team_members">
        <h2 class="hidden">Team Members</h2>

        <!-- DR WINDBLADE -->
        <div class="team_members_member-container">

            <picture class="animation-element animation--style_trans-rotate-y-right-light animation--duration_500">
                <source srcset="./../graphics/pics/dr-winblade-wmc-750.webp" media="(max-width: 750px)">
                <source srcset="./../graphics/pics/dr-winblade-wmc-1500.webp" media="(max-width: 1500px)">
                <source srcset="./../graphics/pics/dr-winblade.webp" media="(min-width: 1500px)">
                <img src="./../graphics/pics/dr-winblade.webp" alt="dr-windblade" loading="lazy">
            </picture>

            <div class="text">
                <h3>Dr. Windblade</h3>

                <ul>
                   <li class="animation-element animation--style_fade-up animation--delay_500 animation--duration_500">Fachärztin für Innere Medizin</li> 
                </ul>
            </div>
        </div>

        <!-- TAMARA ELVES -->
        <div class="team_members_member-container">

            <picture class="animation-element animation--style_trans-rotate-y-left-light animation--duration_500">
                <source srcset="./../graphics/pics/tamara-elves-wmc-750.webp" media="(max-width: 750px)">
                <source srcset="./../graphics/pics/tamara-elves-wmc-1500.webp" media="(max-width: 1500px)">
                <source srcset="./../graphics/pics/tamara-elves.webp" media="(min-width: 1500px)">
                <img src="./../graphics/pics/tamara-elves.webp" alt="tamara elves" loading="lazy">
            </picture>

            <div class="text">
                <h3>Tamara Elves</h3>

                <ul>
                    <li class="animation-element animation--style_fade-up animation--delay_500 animation--duration_500">Ordinationsassistentin</li>
                    <li class="animation-element animation--style_fade-up animation--delay_500 animation--duration_500">Empfang</li>
                    <li class="animation-element animation--style_fade-up animation--delay_500 animation--duration_500">Organisation</li> 
                </ul>
            </div>
        </div>

        <!-- SOFIA SKYBLUE -->
        <div class="team_members_member-container">
    
            <picture class="animation-element animation--style_trans-rotate-y-right-light animation--duration_500">
                <source srcset="./../graphics/pics/sofia-skyblue-wmc-750.webp" media="(max-width: 750px)">
                <source srcset="./../graphics/pics/sofia-skyblue-wmc-1500.webp" media="(max-width: 1500px)">
                <source srcset="./../graphics/pics/sofia-skyblue.webp" media="(min-width: 1500px)">
                <img src="./../graphics/pics/sofia-skyblue.webp" alt="sofia skyblue" loading="lazy">
            </picture>

            <div class="text">
                <h3>Sofia Skyblue</h3>

                <ul>
                    <li class="animation-element animation--style_fade-up animation--delay_500 animation--duration_500">Diplomkrankenschwester</li>
                    <li class="animation-element animation--style_fade-up animation--delay_500 animation--duration_500">Labor</li>
                    <li class="animation-element animation--style_fade-up animation--delay_500 animation--duration_500">Med. Diagnostik</li> 
                </ul>
            </div>
        </div>

        <!-- ANNA MARISSA -->
        <div class="team_members_member-container">

            <picture class="animation-element animation--style_trans-rotate-y-left-light animation--duration_500">
                <source srcset="./../graphics/pics/anna-marissa-wmc-750.webp" media="(max-width: 750px)">
                <source srcset="./../graphics/pics/anna-marissa-wmc-1500.webp" media="(max-width: 1500px)">
                <source srcset="./../graphics/pics/anna-marissa.webp" media="(min-width: 1500px)">
                <img src="./../graphics/pics/anna-marissa.webp" alt="anna marissa" loading="lazy">
            </picture>

            <div class="text">
                <h3>Anna Marissa</h3>

                <ul>
                    <li class="animation-element animation--style_fade-up animation--delay_500 animation--duration_500">Physiotherapeutin</li>
                </ul>
            </div>
        </div>
       
    </section>
</section>

<?php require __DIR__ . "/../views/footer.php" ?>