<!DOCTYPE html>
<html lang="de" class="default">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../graphics/icons_n_co/favicon-32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../graphics/icons_n_co/favicon-96.png" sizes="96x96">
    <link rel="apple-touch-icon" sizes="180x180" href="../graphics/icons_n_co/favicon-180.png">
    <title>Dr. Windblade</title>

    <!-- <link rel="stylesheet" href="style/common.css"> -->
    <!-- <link rel="stylesheet" href="./node_modules/animate.css/animate.css"> -->

    <?php switch($page) :
        case "services" ?>
            <link rel="stylesheet" href="../style/services.css">
            <?php break; ?>

        <?php case "private-services" ?>
        <?php case "alternate-services" ?>
        <?php case "corona-services" ?>
            <link rel="stylesheet" href="../style/services.css">
            <?php break; ?>

        <?php case "physical-therapy" ?>
            <link rel="stylesheet" href="../style/physical-therapy.css">
            <?php break; ?>

        <?php case "team" ?>
            <link rel="stylesheet" href="../style/team.css">
            <?php break; ?>

        <?php case "office" ?>
            <link rel="stylesheet" href="../style/office.css">
            <?php break; ?>

        <?php case "e-medication" ?>
            <link rel="stylesheet" href="../style/e-medication.css">
            <?php break; ?>

        <?php case "alternate-ways" ?>
            <link rel="stylesheet" href="../style/alternate-ways.css">
            <?php break; ?>

        <?php case "online-booking" ?>
            <link rel="stylesheet" href="../style/online-booking.css">
        <?php break; ?>

        <?php case "blog" ?>
            <link rel="stylesheet" href="../style/blog.css">
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
                <a href="../index.php">
                    <img src="../graphics/icons_n_co/heart-shaped-tree.png" alt="heart" class="header_logo">
                </a>

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
                            </li>

                        <!-- WAHLARZTLEISTUNGEN-->
                            <li class="header_mega-menu_list-point">
                                    <a href="./private-services.php#rest-ekg" class="header_mega-menu_sub-heading">Wahlarztleistungen</a>

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
                            </li>

                        <!-- ALTERNATIVE MEDIZIN -->
                            <li class="header_mega-menu_list-point">
                                <a href="./alternate-services.php#acupuncture" class="header_mega-menu_sub-heading">Alternative Medizin</a>

                                <ul class="header_mega-menu_list">
                                    <li>
                                        <a href="./alternate-services.php#acupuncture">TCM</a>

                                        <ul class="header_mega-menu_sub-list">
                                            <li>
                                                <a href="./alternate-services.php#acupuncture">Akupunktur</a>
                                            </li>
                                            <li>
                                                <a href="./alternate-services.php#tuina">Tuina</a>
                                            </li>
                                            <li>
                                                <a href="./alternate-services.php#moxibustion">Moxibustion</a>
                                            </li>
                                            <li>
                                                <a href="./alternate-services.php#nutritional-advice">Ernährungsberatung</a>
                                            </li>
                                            <li>
                                                <a href="./alternate-services.php#qi-gong">Qigong</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="./alternate-services.php#cupping">Schröpfen</a>
                                    </li>
                                    <li>
                                        <a href="./alternate-services.php#tibetian-massage">Tibetische Massage</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- CORONA-->
                            <li class="header_mega-menu_list-point">
                                <a href="./corona-services.php#covid-antigen" class="header_mega-menu_sub-heading">Corona</a>

                                <ul class="header_mega-menu_list">
                                    <li>
                                        <a href="./corona-services.php#covid-antigen">Covid 19 - Antigentest</a>
                                    </li>
                                    <li>
                                        <a href="./corona-services.php#covid-pcr">Covid 19 - PCR Test</a>
                                    </li>
                                    <li>
                                        <a href="./corona-services.php#covid-accompaniment">Long Covid Begleitung</a>
                                    </li>
                                </ul>
                            </li>

                        </ul><!-- END MEGA MENU-->
                    </li><!-- END LEISTUNGEN-->

                <!-- ALTERNATE WAYS -->
                    <li class="header_link-list_sub-menu-opener open_sub-menu" data-sign="&#43;">
                        <a href="./alternate-ways.php">Alternative Wege</a>

                        <!-- SUB MENU -->
                        <ul class="header_sub-menu">

                            <!-- TCM -->
                            <li class="header_sub-menu_sub-sub-opener" data-sign="&#43;">
                                <a href="./alternate-ways.php#tcm">TCM</a>

                                <ul class="header_sub-menu_sub-menu on-top">
                                    <li>
                                        <a href="./alternate-ways.php#acupuncture">Akupunktur</a>
                                    </li>
                                    <li>
                                        <a href="./alternate-ways.php#tuina">Tuina</a>
                                    </li>
                                    <li>
                                        <a href="./alternate-ways.php#moxibustion">Moxibustion</a>
                                    </li>
                                    <li>
                                        <a href="./alternate-ways.php#nutritional-advice">Ernährungsberatung</a>
                                    </li>
                                    <li>
                                        <a href="./alternate-ways.php#qi-gong">Qigong</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- SCHRÖPFEN -->
                            <li>
                                <a href="./alternate-ways.php#cupping">Schröpfen</a>
                            </li>

                             <!-- TIBETISCHE MASSAGE -->
                             <li>
                                <a href="./alternate-ways.php#tibetian-massage">Tibetische Massage</a>
                            </li>

                             <!-- Qi Gong Gruppe -->
                             <li>
                                <a href="./alternate-ways.php#qi-gong-group">Qi Gong Gruppe</a>
                            </li>

                              <!-- Meditation Gruppe -->
                              <li>
                                <a href="./alternate-ways.php#meditation-group">Meditationsgruppe</a>
                            </li>
                        </ul><!-- END SUB MENU -->
                    </li><!-- END ALTERNATIGE WEGE -->

                <!-- AKTUELLES -->
                    <li>
                        <a href="#">Aktuelles</a>
                    </li>

                <!-- PHYSIOTHERAPIE -->
                    <li>
                        <a href="./physical-therapy.php">Physiotherapie</a>
                    </li>

                <!-- TEAM -->
                     <li>
                        <a href="./team.php">Team</a>
                    </li>

                <!-- ORDINATION -->
                     <li>
                        <a href="./office.php">Ordination</a>
                    </li>

                <!-- Blog -->
                    <li>
                        <a href="./blog.php">Blog</a>
                    </li>

                <!-- E - MEDIKATION -->
                    <li class="button-li">
                        <a href="./e-medication.php" class="button_e-medikation">E - Medikation</a>
                    </li>

                <!-- ONLINE TERMINKALENDER -->
                    <li class="button-li">
                        <a href="./online-booking.php" class="button_e-medikation">Online Terminkalender</a>
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