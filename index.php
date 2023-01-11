<?php
ini_set('display_errors', 1);
header("Content-type: text/html; charset=utf-8");
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/images/icon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="description" content="Bienvenue sur mon site, je m'appelle Kilyan Tual et ce site va vous permettre d'en savoir plus sur moi ! Venez vite découvrir mon travail !">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <title>Kilyan Tual - CV Numérique</title>
</head>

<body>
    <header>
        <h1>Kilyan Tual</h1>

        <nav>
            <ul>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#parcours">Parcours</a></li>
                <li><a href="#realisations">Réalisations</a></li>
                <li><a href="#portraitChinois">Portrait chinois</a></li>
            </ul>
        </nav>
        <a href="#contact" class="button">
            Contact
        </a>

    </header>
    <main>

        <section class="heropage">
            <div class="heropageContent">
                <img src="assets/images/kilyan.png" alt="Kilyan" class="imageTitre">
                <h2>18 ans - MMI</h2>
                <a href="#presentation" class="link">Me découvrir</a>
                <div class="reseaux">
                    <a href="https://www.instagram.com/awikz_k" target="_blank"><img src="assets/images/logo-instagram.svg" alt="instagram"></a>
                    <a href="https://www.linkedin.com/in/kilyan-tual-b28a13257/" target="_blank"><img src="assets/images/logo-linkedin.svg" alt="linkedin"></a>
                </div>
            </div>
            <img src="assets/images/moi.webp" alt="Kilyan Tual" class="portrait">
        </section>

        <section class="presentation" id="presentation">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
                <path fill="#000618" fill-opacity="1" d="M0,64L80,85.3C160,107,320,149,480,144C640,139,800,85,960,58.7C1120,32,1280,32,1360,32L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
            </svg>

            <div class="presentationContent">
                <h2>Qui suis-je ?</h2>
                <p>Je m'appelle <strong>Kilyan Tual</strong>, j'ai 18 ans et je suis actuellement un BUT Métiers du Multimédia et de l'Internet. J'ai toujours été passionné du <strong>graphisme</strong> et
                    de l'<strong>informatique</strong>, je pense être quelqu'un de <strong>sérieux</strong> et de <strong>rigoureux</strong> dans mon travail. Grâce à cette formation, j'ai développé un ensemble <strong>diversifié</strong> de compétences. Je suis toujours à la recherche de nouveaux défis et d'opportunités pour mettre en valeur mes <strong>capacités</strong>, 
                    et je suis ravi de vous partager mon travail sur ce site Web. 
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 100 1440 200">
                <path fill="#000618" fill-opacity="1" d="M0,128L80,154.7C160,181,320,235,480,234.7C640,235,800,181,960,170.7C1120,160,1280,192,1360,208L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </section>

        <section class="competences" id="competences">
            <h2>Compétences</h2>
            <?php
            $lecteur = new SplFileObject("php/competences.csv", 'r');
            while ($lecteur->eof() == false) {
                $ligne = $lecteur->fgets();
                if ($ligne != "") {
                    $tab = explode(";", $ligne);
                    $titreLogiciel = $tab[0];
                    $nomLogiciel = $tab[1];
                    $noteLogiciel = $tab[2];
            ?>
                    <div class="logiciel">
                        <img src="assets/images/logo-<?php echo ($nomLogiciel) ?>.svg" alt="<?php echo ($nomLogiciel) ?>">
                        <h3><?php echo ($titreLogiciel) ?></h3>
                        <div class="barre">
                            <div class="note" style="width: <?php echo ($noteLogiciel) ?>%"></div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>

        </section>
        <div class="delimitation1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
                <path fill="#000618" fill-opacity="1" d="M0,96L80,96C160,96,320,96,480,117.3C640,139,800,181,960,192C1120,203,1280,181,1360,170.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 100 1440 170">
                <path fill="#000618" fill-opacity="1" d="M0,192L80,176C160,160,320,128,480,138.7C640,149,800,203,960,208C1120,213,1280,171,1360,149.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </div>
        <section class="parcours" id="parcours">
            <h2>Mon parcours</h2>

            <div class="parcoursContent">

                <?php
                $lecteur = new SplFileObject("php/parcours.csv", 'r');
                while ($lecteur->eof() == false) {
                    $ligne = $lecteur->fgets();
                    if ($ligne != "") {
                        $tab = explode("$", $ligne);
                        $titreParcours = $tab[0];
                        $annees = $tab[1];
                        $description = $tab[2];
                        $losange = $tab[3];

                ?>
                        <div class="parcoursElement">
                            <p><?php echo ($titreParcours) ?></p>
                            <p><?php echo ($annees) ?></p>
                            <?php echo ($losange) ?>
                            <p class="parcoursDescription lycee"><?php echo ($description) ?></p>
                        </div>

                <?php
                    }
                }
                ?>


            </div>
            <svg class="barreParcours" width="100%" height="100%" viewBox="0 0 1920 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g transform="matrix(0.798561,0,0,0.420104,203.577,17.99)">
                    <rect x="88.062" y="50" width="1718.34" height="26.195" style="fill:white;" />
                </g>
            </svg>

        </section>

        <section class="realisations" id="realisations">
            <h2>Mes réalisations</h2>
            <h3>Projets personnels</h3>
            <div class="gallery">
                <?php
                $lecteur = new SplFileObject("php/galerie-fictive.csv", 'r');
                while ($lecteur->eof() == false) {
                    $ligne = $lecteur->fgets();
                    if ($ligne != "") {
                        $tab = explode(";", $ligne);
                        $nomImage = $tab[0];
                        $description = $tab[1];
                ?>
                        <div class="galleryElement">
                            <img src="assets/images/realisations/<?php echo ($nomImage) ?>.webp" alt="<?php echo ($description) ?>">
                            <p><?php echo ($description) ?></p>
                        </div>

                <?php
                    }
                }
                ?>
            </div>

            <h3>Projets scolaires</h3>
            <div class="gallery">
                <?php
                $lecteur = new SplFileObject("php/galerie-scolaire.csv", 'r');
                while ($lecteur->eof() == false) {
                    $ligne = $lecteur->fgets();
                    if ($ligne != "") {
                        $tab = explode(";", $ligne);
                        $nomImage = $tab[0];
                        $description = $tab[1];
                        $lien = $tab[2];
                ?>
                        <div class="galleryElement">
                            <?php
                            if ($lien != "none") {
                            ?>
                                <a href="<?php echo ($lien) ?>">



                                    <img src="assets/images/realisations/<?php echo ($nomImage) ?>.webp" alt="<?php echo ($description) ?>">
                                </a>
                            <?php
                            } else {
                            ?>
                                <img src="assets/images/realisations/<?php echo ($nomImage) ?>.webp" alt="<?php echo ($description) ?>">
                            <?php
                            }
                            ?>
                            <p><?php echo ($description) ?></p>
                        </div>

                <?php
                    }
                }
                ?>
            </div>

        </section>
        <div class="delimitation2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
                <path fill="#000618" fill-opacity="1" d="M0,64L80,85.3C160,107,320,149,480,144C640,139,800,85,960,58.7C1120,32,1280,32,1360,32L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 100 1440 200">
                <path fill="#000618" fill-opacity="1" d="M0,128L80,154.7C160,181,320,235,480,234.7C640,235,800,181,960,170.7C1120,160,1280,192,1360,208L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </div>

        <section id="portraitChinois" class="portraitChinois">
            <h2>Mon portrait chinois</h2>
            <div class="portraitContent">
                <?php
                $lecteur = new SplFileObject("php/portrait-chinois.csv", 'r');
                while ($lecteur->eof() == false) {
                    $ligne = $lecteur->fgets();
                    if ($ligne != "") {
                        $tab = explode(";", $ligne);
                        $si = $tab[0];
                        $image = $tab[1];
                        $alors = $tab[2];
                        $description = $tab[3];
                ?>
                        <div class="portraitCard">
                            <div class="front">
                                <p>Si j'étais <span><?php echo ($si) ?></span> je serais...</p>
                            </div>
                            <div class="back">
                                <p class="titre"><?php echo ($alors) ?></p>
                                <img src="assets/images/portrait/image-<?php echo ($image) ?>" alt="<?php echo ($alors) ?>">
                                <p><?php echo ($description) ?></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <!-- <div class="portraitCard">
                    <div class="front">
                        <p>Si j'étais <span>un logiciel</span> je serais...</p>
                    </div>
                    <div class="back">
                        <p class="titre">Illustrator</p>
                        <img src="assets/images/logo-illustrator.svg" alt="Illustrator">
                        <p><strong>Illustrator</strong> est un logiciel de design vectoriel, il représente ma <strong>créativité</strong></p>
                    </div>
                </div> -->
            </div>
        </section>

        <section id="contact" class="contact">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
                <path fill="#000618" fill-opacity="1" d="M0,64L80,85.3C160,107,320,149,480,144C640,139,800,85,960,58.7C1120,32,1280,32,1360,32L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
            </svg>
            <h2>Me contacter</h2>
            <div class="contactContent">
                <form action="index.php#contact" method="get">
                    <fieldset>
                        <label for="message">Votre message</label>
                        <textarea name="message" id="message" required placeholder="Demande de renseignements, remarques..."></textarea>
                    </fieldset>
                    <fieldset>
                        <label for="nom">Votre nom</label>
                        <input type="text" name="nom" id="nom" placeholder="Ex: John Doe" required>
                        <label for="mail">Votre adresse mail</label>
                        <input type="email" name="mail" id="mail" placeholder="ex: john.doe@gmail.com" required>
                        <p>Vous pouvez aussi me contacter avec:</p>
                        <div class="reseaux">
                            <a href="https://www.instagram.com/awikz_k" target="_blank"><img src="assets/images/logo-instagram.svg" alt="instagram"></a>
                            <a href="https://www.linkedin.com/in/kilyan-tual-b28a13257/" target="_blank"><img src="assets/images/logo-linkedin.svg" alt="linkedin"></a>
                        </div>
                        <p>Mail: kilyan.tual@gmail.com</p>
                        <p>Numéro de téléphone: 06.37.74.84.04</p>

                        <?php

                        if (isset($_GET['nom']) && isset($_GET["mail"]) && isset($_GET["message"])) {
                            if (($_GET['nom'] != "") && ($_GET['mail'] != "") && ($_GET['message'] != "")) {

                                require(__DIR__ . "/src/PHPMailer.php"); // Ajoute le fichier contenant le code de la classe PHPMailer
                                require(__DIR__ . "/src/SMTP.php"); // le code de la classe SMTP
                                require(__DIR__ . "/src/Exception.php"); // le code de la classe Exception
                                $mail = new PHPMailer\PHPMailer\PHPMailer();
                                // Configuration du serveur SMTP
                                $mail->SMTPDebug = 0; // Active/désactive les messages de mise au point
                                $mail->isSMTP(); // Utilise le protocole SMTP
                                $mail->Host = "smtp.gmail.com"; // Configure le nom du serveur serveur SMTP
                                $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS; // Active le cryptage sécurisé TLS
                                $mail->Port = 465; // Configure le numéro de port
                                $mail->SMTPAuth = true; // Active le mode authentification
                                $mail->Username = "kilyantual.iut@gmail.com"; // Identifiant du compte SMTP
                                $mail->Password = "oqnrzdfirpccnkju"; // Mot de passe du compte SMTP
                                // Destinataires
                                $mail->setFrom("kilyantual.iut@gmail.com", "Mailer");
                                $mail->addAddress("kilyantual.iut@gmail.com", $_GET['nom']); // Ajout du destinataire
                                // Contenu du mail
                                $mail->isHTML(true);
                                $mail->Subject = "Mail de " . $_GET['nom'] . ' - ' . $_GET['mail'];
                                $mail->Body = $_GET["message"];
                                $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
                                if ($mail->send() != false) {
                        ?>
                                    <p style="color:greenyellow">Message envoyé avec succès</p>
                        <?php

                                }
                            }
                        }
                        ?>
                    </fieldset>

                    <button type="submit">Envoyer</button>

                </form>

            </div>


        </section>

    </main>
</body>

</html>