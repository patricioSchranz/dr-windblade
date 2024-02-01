<?php 

$page = 'team';

require __DIR__ . "/../views/header.php" ;

?>

<!-- TEAM -->
<section class="team">

    <!-- HEADER -->
    <header class="team_header">
        <div class="left-side">
            <img src="../graphics/pics/team-1.jpg" alt="medical team" class="animation-element animation--style_windblade-img-duo-left animation--duration_1000">
            <img src="../graphics/pics/team-2.jpg" alt="medical team" class="animation-element animation--style_windblade-img-duo-right animation--duration_1000">
        </div>

        <div class="right-side">
            <h1>Unser Team</h1>

            <img src="../graphics/pics/team-3.jpg" alt="medical team" class="animation-element animation--style_opacity-in animation--duration_1000">
        </div>
    </header>

    <!-- TEAM MEMBERS -->
    <section class="team_members">
        <h2 class="hidden">Team Members</h2>

        <!-- DR WINDBLADE -->
        <div class="team_members_member-container">
            <img src="../graphics/pics/dr-winblade.jpg" alt="dr-windblade">

            <div class="text">
                <h3>Dr. Windblade</h3>

                <ul>
                   <li>Fachärztin für Innere Medizin</li> 
                </ul>
            </div>
        </div>

        <!-- TAMARA ELVES -->
        <div class="team_members_member-container">
            <img src="../graphics/pics/tamara-elves.jpg" alt="tamara elves">

            <div class="text">
                <h3>Tamara Elves</h3>

                <ul>
                    <li>Ordinationsassistentin</li>
                    <li>Empfang</li>
                    <li>Organisation</li> 
                </ul>
            </div>
        </div>

        <!-- SOFIA SKYBLUE -->
        <div class="team_members_member-container">
            <img src="../graphics/pics/sofia-skyblue.jpg" alt="sofia skyblue">

            <div class="text">
                <h3>Sofia Skyblue</h3>

                <ul>
                    <li>Diplomkrankenschwester</li>
                    <li>Labor</li>
                    <li>Med. Diagnostik</li> 
                </ul>
            </div>
        </div>

        <!-- ANNA MARISSA -->
        <div class="team_members_member-container">
            <img src="../graphics/pics/anna-marissa.jpg" alt="anna marissa">

            <div class="text">
                <h3>Anna Marissa</h3>

                <ul>
                    <li>Physiotherapeutin</li>
                </ul>
            </div>
        </div>
       
    </section>
</section>

<?php require __DIR__ . "/../views/footer.php" ?>