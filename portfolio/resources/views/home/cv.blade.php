@include('layouts.header')
<body>
<div class="buttons d-flex flex-column">
    <a href="mailto:n.durassierbonheur@epsi.fr" class="btn btn-secondary btn-lg active m-2" role="button" aria-pressed="true"><i class="fa fa-envelope"></i></a>
    <a href="https://www.linkedin.com/in/nathalie-durassier-bonheur-604083171/" class="btn btn-secondary btn-lg active m-2" role="button" aria-pressed="true"><i class="fab fa-linkedin"></i></a>
    <a href="https://github.com/NathDB" class="btn btn-secondary btn-lg active m-2" role="button" aria-pressed="true"><i class="fab fa-github"></i></a>
</div>
<div class="pageContent shadow-lg p-3 bg-white rounded">
    <div class="cvFond d-flex flex-columns">
        <img src="/images/nathalieDB.jpg" class="photo d-inline p-3" alt="...">
        <h1 class="nom">Nathalie DURASSIER-BONHEUR</h1>
    </div>

    <div class="card bloc">
        <h3>A propos de moi...</h3>
        <div class="card-body">
            Je suis actuellement étudiante à EPSI, école d'ingénierie informatique, sur Nantes.<br>
            Sociable, souriante et soucieuse de bien faire, je suis à la recherche d'un stage et/ou d'une alternance.<br>
        </div>
    </div>
    <div class="card bloc">
        <h3>Mes compétences</h3>
        <div class="card-body">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-file-code fa-2x"></i>
                                &nbsp;Développement Web
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <b>HTML/CSS</b><br>
                            <b>PHP</b><br>
                            <b>Symfony</b><br>
                            <b>JS</b><br>
                            <b>React</b><br>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-terminal fa-2x"></i>
                                &nbsp;Programmation Objet
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <b>C</b> : Travaux sur l'algorithmie, Réalisations de jeux en console.<br>
                            <b>C++</b>: Réalisations de jeux en console.<br>
                            <b>C#</b> : Réalisations de jeux en console.<br>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-server fa-2x"></i>
                                &nbsp;Administration Systèmes et Réseaux
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Mis en place de serveurs web, base de données, dns, dhcp.<br> Configuration de machines diverses : routeurs, swicth, pc. <br>Utilisation de différents systèmes d'exploitation : Windows, Linux (CentOS, Suse, Debian et Ubuntu).<br>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fas fa-database fa-2x"></i>
                                &nbsp;Base de Données
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            Exploitation, Conception et Réalisation de bases de données<br>
                            Outils utilisés : MySQL, MongoDB.<br>
                            Méthode Merise<br>
                            Modélisations en UML<br>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fas fa-balance-scale fa-2x"></i>
                                &nbsp;Droit et Environnement Juridique
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            Notions en droits.<br>
                            Notions en management et économie d'entreprise.<br>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fas fa-comments fa-2x"></i>
                                &nbsp;Langues
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            Anglais : Niveau B2 (Parlé, Lu et Ecrit) / Score TOEIC de 750 <br>
                            Espagnol : Niveau B2 (Parlé, Lu et Ecrit)<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card bloc">
        <h3>Mes expériences professionnelles</h3>
        <div class="card-body">
            <div class="media">
                <img src="/images/obs.png" class="mr-3" width="120px" height="50px" alt="...">
                <div class="media-body">
                    <h4 class="mt-0">Développeuse chez Orange Business Service</h4>
                    Stage de première année.<br>
                    Durée de 5 semaines (Mai/Juin 2019)<br>
                    Mission : Créer une interface utilisateur en ReactJS afin d'y intégrer un serveur chat. Les fonctionnalités principales ont été développées.<br>
                    Outils utilisés : ReactJS, Socket.io, PhpStorm, Git, Trello, Docker, MongoDB.<br>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="media">
                <i class="fas fa-laptop-code fa-5x mr-4"></i>
                <div class="media-body ml-2">
                    <h4 class="mt-0">Projet Développement/Administration Système et Réseau</h4>
                    Projet d'Etude dans le cadre de la 1ère année en Bachelor Informatique.<br>
                    De février à avril 2019.<br>
                    Missions : Développer un intranet pour une bijouterie dans le cadre d'une informatisation de l'entreprise.<br>
                    Développement des fonctionnalités de l'intranet (ajouter, modifier et suprimer le suivi des bijoux).<br>
                    Mise en place du réseau nécessaire à l'entreprise (configurations des machines, routeurs et switchs).<br>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="media">
                <img src="/images/paprika.png" class="mr-3" width="120px" height="50px" alt="...">
                <div class="media-body">
                    <h4 class="mt-0">Vendeuse polyvalente chez Paprika</h4>
                    Job étudiant dans un magasin de prêt-à-porter féminin.<br>
                    D'avril à septembre 2018.<br>
                    Missions : vente, encaissement, conseils de Vente, gestion des livraisons, fermeture/ouverture du magasin.<br>
                </div>
            </div>
        </div>
    </div>
    <div class="card bloc">
        <h3>Expériences personnelles</h3>
        <div class="card-body">
            <div class="media">
                <img src="/images/devfest.jpg" class="mr-3" width="120px" height="50px" alt="...">
                <div class="media-body">
                    <h4 class="mt-0">Bénévole au DevFest Nantes 2019</h4>
                    21-22 octobre 2019<br>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="media">
                <img src="/images/epsi.png" class="mr-3" width="120px" height="80px" alt="...">
                <div class="media-body">
                    <h4 class="mt-0">Embassadrice EPSI-WIS</h4>
                    Embassadrice pour les écoles EPSI et WIS<br>
                    Depuis octobre 2019.<br>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="media">
                <img src="/images/bde.jpg" class="mr-3" width="100px" height="100px" alt="...">
                <div class="media-body ml-3">
                    <h4 class="mt-0">Membre du BDE EPSI-WIS</h4>
                    Membre du Bureau Des Elèves des écoles EPSI et WIS<br>
                    Porteuse de projets : création, organisation et réalisation des différents événements du BDE (soirée jeux de société, Escape Game,...)<br>
                    Depuis juin 2019.<br>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="media">
                <img src="/images/collecte.jpg" class="mr-3" width="100px" height="100px" alt="...">
                <div class="media-body ml-3">
                    <h4 class="mt-0">Bénévole pour la Banque Alimentaire 44</h4>
                    Collectes alimentaires dans des centres commerciaux<br>
                    Collectes 2 fois par an depuis 2016<br>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@include('layouts.footer')
