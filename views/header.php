<!DOCTYPE html>
<html lang="de" class="default">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Windblade</title>

    <!-- <link rel="stylesheet" href="style/common.css"> -->
    <!-- <link rel="stylesheet" href="./node_modules/animate.css/animate.css"> -->

    <?php switch($page) :
        case 'index' ?>
            <link rel="stylesheet" href="./style/home.css">
            <?php break; ?>

        <?php case "services" ?>
            <link rel="stylesheet" href="../style/services.css">
            <?php break; ?>

        <?php case "private-services" ?>
            <link rel="stylesheet" href="../style/services.css">
            <?php break; ?>

    <?php endswitch; ?>

</head>
<body>
    <div class="big-container">

<!-- HEADER-->
        <header class="header">

            <!-- MAIN HEADING (hidden => only 4 the outline)-->
            <h1 class="hidden">Dr. Windblade</h1>

            <!-- LOGO -->

            <?php if($page === 'index') :?>
                <a href="#">
                    <img src="graphics/icons_n_co/heart-shaped-tree.png" alt="heart" class="header_logo">
                </a>

                <?php else :?>

                <a href="../index.php">
                    <img src="../graphics/icons_n_co/heart-shaped-tree.png" alt="heart" class="header_logo">
                </a>

            <?php endif; ?>

            <!-- NAV -->
            <nav class="header_nav">

                <!-- TITLE 4 THE NAV -->
                <h2 class="hidden">Hauptnavigation</h2>

                <!-- NAV LINKS -->
                <ul class="header_link-list">

                     <!-- LEISTUNGEN-->
                    <li class="header_link-list_mega-menu-opener open_mega-menu" data-sign="&#43;">
                        <span class="header_menu-hint">Leistungen</span>

                        <!-- MEGA MENU -->
                        <ul class="header_mega-menu">

                        <!-- KASSENLEISTUNGEN-->
                            <li class="header_mega-menu_list-point">

                            <?php if($page === 'index') : ?>
                                <a href="./docs/services.php#check-up" class="header_mega-menu_sub-heading">Kassenleistungen</a>

                                <ul class="header_mega-menu_list">
                                    <li>
                                        <a href="./docs/services.php#check-up">Vorsorgeuntersuchung</a>
                                    </li>
                                    <li>
                                        <a href="./docs/services.php#rest-ekg">Ruhe EKG</a>
                                    </li>
                                    <li>
                                        <a href="./docs/services.php#lung-function">Lungenfunktion</a>
                                    </li>
                                    <li>
                                        <a href="./docs/services.php#unfusion-therapy">Infusionstherapie</a>
                                    </li>
                                </ul>

                            <?php else :?>
                                <a href="./services.php#check-up" class="header_mega-menu_sub-heading">Kassenleistungen</a>

                                <ul class="header_mega-menu_list">
                                    <li>
                                        <a href="./services.php#check-up">Vorsorgeuntersuchung</a>
                                    </li>
                                    <li>
                                        <a href="./services.php#rest-ekg">Ruhe EKG</a>
                                    </li>
                                    <li>
                                        <a href="./services.php#lung-function">Lungenfunktion</a>
                                    </li>
                                    <li>
                                        <a href="./services.php#infusion-therapy">Infusionstherapie</a>
                                    </li>
                                </ul>
                            <?php endif; ?>
                            </li>

                        <!-- WAHLARZTLEISTUNGEN-->
                            <li class="header_mega-menu_list-point">
                                <?php if($page === 'index') :?>
                                <a href="./docs/private-services.php" class="header_mega-menu_sub-heading">Wahlarztleistungen</a>

                                <ul class="header_mega-menu_list">
                                    <li>
                                        <a href="./docs/private-services.php#rest-ekg">Ruhe EKG</a>
                                    </li>
                                    <li>
                                        <a href="./docs/private-services.php#24-ekg">24h EKG</a>
                                    </li>
                                    <li>
                                        <a href="./docs/private-services.php#24-blood-pressure">24h Blutdruck</a>
                                    </li>
                                    <li>
                                        <a href="./docs/private-services.php#eventrecorder">Eventrecorder</a>
                                    </li>
                                    <li>
                                        <a href="./docs/private-services.php#lung-function">Lungenfunktion</a>
                                    </li>
                                    <li>
                                        <a href="./docs/private-services.php#ergometrie">Ergometrie</a>
                                    </li>
                                    <li>
                                        <a href="./docs/private-services.php#thyroid-sonography">Schilddrüsensonographie</a>
                                    </li>
                                    <li>
                                        <a href="./docs/private-services.php#op-suitability">OP Fähigkeit</a>
                                    </li>
                                    <li>
                                        <a href="./docs/private-services.php#special-topics">Spezialthemen</a>
                                    </li>
                                    <li>
                                        <a href="./docs/private-services.php#physical-therapy">Physiotherapie</a>
                                    </li>
                                </ul>

                                <?php else :?>
                                    <a href="./private-services.php" class="header_mega-menu_sub-heading">Wahlarztleistungen</a>

                                    <ul class="header_mega-menu_list">
                                        <li>
                                            <a href="./private-services.php#rest-ekg">Ruhe EKG</a>
                                        </li>
                                        <li>
                                            <a href="./private-services.php#24-ekg">24h EKG</a>
                                        </li>
                                        <li>
                                            <a href="./private-services.php#24-blood-pressure">24h Blutdruck</a>
                                        </li>
                                        <li>
                                            <a href="./private-services.php#eventrecorder">Eventrecorder</a>
                                        </li>
                                        <li>
                                            <a href="./private-services.php#lung-function">Lungenfunktion</a>
                                        </li>
                                        <li>
                                            <a href="./private-services.php#ergometrie">Ergometrie</a>
                                        </li>
                                        <li>
                                            <a href="./private-services.php#thyroid-sonography">Schilddrüsensonographie</a>
                                        </li>
                                        <li>
                                            <a href="./private-services.php#op-suitability">OP Fähigkeit</a>
                                        </li>
                                        <li>
                                            <a href="./private-services.php#special-topics">Spezialthemen</a>
                                        </li>
                                        <li>
                                            <a href="./private-services.php#physical-therapy">Physiotherapie</a>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </li>

                        <!-- ALTERNATIVE MEDIZIN -->
                            <li class="header_mega-menu_list-point">
                                <a href="#" class="header_mega-menu_sub-heading">Alternative Medizin</a>

                                <ul class="header_mega-menu_list">
                                    <li>
                                        <a href="#">TCM</a>

                                        <ul class="header_mega-menu_sub-list">
                                            <li>
                                                <a href="#">Akupunktur</a>
                                            </li>
                                            <li>
                                                <a href="#">Tuina</a>
                                            </li>
                                            <li>
                                                <a href="#">Moxibustion</a>
                                            </li>
                                            <li>
                                                <a href="#">Ernährungsberatung</a>
                                            </li>
                                            <li>
                                                <a href="#">Qigong</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Schröpfen</a>
                                    </li>
                                    <li>
                                        <a href="#">Tibetische Massage</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- CORONA-->
                            <li class="header_mega-menu_list-point">
                                <a href="#" class="header_mega-menu_sub-heading">Corona</a>

                                <ul class="header_mega-menu_list">
                                    <li>
                                        <a href="#">Covid 19 - Antigentest</a>
                                    </li>
                                    <li>
                                        <a href="#">Covid 19 - PCR Test</a>
                                    </li>
                                    <li>
                                        <a href="#">Long Covid Begleitung</a>
                                    </li>
                                </ul>
                            </li>

                        </ul><!-- END MEGA MENU-->
                    </li><!-- END LEISTUNGEN-->

                <!-- TCM -->
                    <li class="header_link-list_sub-menu-opener open_sub-menu" data-sign="&#43;">
                        <a href="#">Alternative Wege</a>

                        <!-- SUB MENU -->
                        <ul class="header_sub-menu">

                            <!-- TCM -->
                            <li class="header_sub-menu_sub-sub-opener" data-sign="&#43;">
                                <a href="#">TCM</a>

                                <ul class="header_sub-menu_sub-menu">
                                    <li>
                                        <a href="#">Akupunktur</a>
                                    </li>
                                    <li>
                                        <a href="#">Tuina</a>
                                    </li>
                                    <li>
                                        <a href="#">Moxibustion</a>
                                    </li>
                                    <li>
                                        <a href="#">Ernährungsberatung</a>
                                    </li>
                                    <li>
                                        <a href="#">Qigong</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- SCHRÖPFEN -->
                            <li>
                                <a href="#">Schröpfen</a>
                            </li>

                             <!-- TIBETISCHE MASSAGE -->
                             <li>
                                <a href="#">Tibetische Massage</a>
                            </li>

                             <!-- Qi Gong Gruppe -->
                             <li>
                                <a href="#">Qi Gong Gruppe</a>
                            </li>

                              <!-- Meditation Gruppe -->
                              <li>
                                <a href="#">Meditationsgruppe</a>
                            </li>
                        </ul><!-- END SUB MENU -->
                    </li><!-- END ALTERNATIGE WEGE -->

                <!-- AKTUELLES -->
                    <li>
                        <a href="#">Aktuelles</a>
                    </li>

                <!-- PHYSIOTHERAPIE -->
                    <li>
                        <a href="#">Physiotherapie</a>
                    </li>

                <!-- TEAM -->
                     <li>
                        <a href="#">Team</a>
                    </li>

                <!-- ORDINATION -->
                     <li>
                        <a href="#">Ordination</a>
                    </li>

                <!-- Blog -->
                    <li>
                        <a href="#">Blog</a>
                    </li>

                <!-- E - MEDIKATION -->
                    <li class="button-li">
                        <button class="button_e-medikation">E - Medikation</button>
                    </li>

                <!-- ONLINE TERMINKALENDER -->
                    <li class="button-li">
                        <button class="button_online-terminkalender">Online Terminkalender</button>
                    </li>

                </ul>
            </nav>

            <!-- HAMBURGER -->
            <button class="hamburger_button">
                <span class="hamburger_line"></span>
                <span class="hamburger_line"></span>
                <span class="hamburger_line"></span>
            </button>
        </header>