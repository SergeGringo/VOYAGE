<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Organisez votre prochain voyage sur mesure avec Voyages.">
    <title>Voyages — votre prochaine escapade</title>
    <link rel="stylesheet" href="../css/voyage.css">
    <link rel="stylesheet" href="../css/site.css">
</head>

<body>
    <nav class="navbar">
        <a href="#accueil" class="logo">voyages<span class="orange">.</span></a>
        <ul class="chit">
            <li><button type="button" class="pati" id="menu" aria-expanded="false" aria-controls="sidebar">MENU<span class="dess"><svg xmlns="http://www.w3.org/2000/svg"
                            height="26px" viewBox="0 -960 960 960" width="30px" fill="#5f6368">
                            <path
                                d="M120-240v-66.67h720V-240H120Zm0-206.67v-66.66h720v66.66H120Zm0-206.66V-720h720v66.67H120Z" />
                        </svg></span></button></li>
        </ul>
        <ul class="ligne">
            <li><a href="#accueil">ACCUEIL</a></li>
            <li><a href="#destinations">DESTINATIONS</a></li>
            <li><a href="#circuits">CIRCUITS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>

        <div class="sidebar" id="sidebar" aria-hidden="true">
            <button type="button" class="croix" id="close-menu" aria-label="Fermer le menu"><span class="zip"><svg xmlns="http://www.w3.org/2000/svg"
                                height="26px" viewBox="0 -960 960 960" width="30px" fill="#5f6368">
                                <path
                                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg></span></button>
            <ul class="toon">
                <li><a href="#accueil">ACCUEIL</a></li>
                <li><a href="#destinations">DESTINATIONS</a></li>
                <li><a href="#circuits">CIRCUITS</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <main>
    <section id="accueil" aria-label="Voyage au bord de la mer">
        <div class="texte">
            <h1><span class="clop">Organisez votre</span> <span class="modif">voyage sur mesure</span></h1>
            <div class="btn">
                <a class="cta" href="../formulaire/index.html">Préparer mon voyage</a>
            </div>
        </div>

    </section>
    <section class="carte" id="destinations" aria-label="Nos engagements">
        <div class="carte_1">
            <img src="../images/Design sans titre(0).png" alt="stylo">
            <h3>planifier</h3>
            <p>Confiez-nous vos rêves d’évasion en famille</p>
            <p>ou entre amis, nous trouverons la formule qui</p>
            <p>comblera vos attentes</p>
        </div>
        <div class="carte_1">
            <img src="../images/Design sans titre(55).png" alt="pile de livre">
            <h3>organiser</h3>
            <p>Bénéficiez de l’expertise de nos spécialistes de</p>
            <p>chaque destination : ils vous accompagnent</p>
            <p>dans la réalisation de votre voyage</p>
        </div>
        <div class="carte_1">
            <img src="../images/Design sans titre(1).png" alt="fusée">
            <h3>voyagez</h3>
            <p>Nous veillons à votre sécurité et à votre sérénité</p>
            <p>tout au long de votre voyage.</p>

        </div>
    </section>

    <section class="family_out" id="circuits" aria-label="Idées de voyage">
        <div class="go_in_family">
            <div class="partez">
                <h2>partez en <br>famille</h2>
                <p>Offrez le meilleur à ceux que</p>
                <p>vous aimez et partagez des</p>
                <p>moments fabuleux !</p>
            </div>
            <div class="cocotier">
                <img src="../images/WhatsApp Image 2024-05-20 à 11.59.11_e3a58b66.jpg"
                    alt="car de voyage avec cocotier">
            </div>
        </div>
        <div class="enjoy_free">
            <div class="envie">
                <h2>envie de <br>s'évader</h2>
                <p>Parfois, un peu d’évasion serait</p>
                <p>la bienvenue et ferait le plus</p>
                <p>grand bien !</p>
            </div>
            <div class="plage">
                <img src="../images/WhatsApp Image 2024-05-20 à 11.59.10_291df890.jpg" alt="plage">
            </div>

        </div>
    </section>

    <section class="formulaire" id="contact">
        <div class="contact">
            <div class="trait"></div>
            <h1>Contactez-nous</h1>
        </div>
        <form>


            <div class="conteneur_form">
                <div class="forme_1">
                    <label for="prenom">Prénom *</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" autocomplete="given-name" required>
                </div>

                <div class="forme_2">
                    <label for="nom">Nom *</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" autocomplete="family-name" required>
                </div>
            </div>
            <div class="conteneur_form1">
                <div class="forme_3">
                    <label for="mail">E-mail *</label>
                    <input type="email" id="mail" name="mail" placeholder="vous@exemple.fr" autocomplete="email" required>
                </div>

                <div class="forme_4">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" placeholder="06 00 00 00 00" autocomplete="tel">
                </div>
            </div>
            <div class="zone_de_texte">
                <label for="message">Message</label>
                <textarea name="message" id="message" required></textarea>
                <p class="those_informations">* Ces informations sont requises. L’envoi du formulaire nécessite un service de traitement côté serveur.</p>
                <button type="submit">Envoyer</button>
                <p class="contact_us" role="status" hidden></p>
            </div> 
        </form>
        
    </section>
    </main>
    <footer>
        <div class="pied">
            <h1> voyage <span id="lemonn">.</span></h1>
            <div class="copyright">
                <img src="../images/copyright_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.png" alt="copyright">
                <p>Tous droits réservés</p>

            </div>

        </div>
    </footer>

    <script src="../js/script.js"></script>

</body>

</html>