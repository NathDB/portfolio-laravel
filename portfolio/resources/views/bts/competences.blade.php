@include('layouts.header')
<div class="pageContent shadow-lg p-3 bg-white rounded">
    <div class="stageFond d-flex flex-columns">
        <h1 class="nom">BTS SIO - Compétences</h1>
    </div>
    <p> </p>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="obligatoire-tab" data-toggle="tab" href="#obligatoire" role="tab" aria-controls="obligatoire" aria-selected="true">Obligatoire</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="un-tab" data-toggle="tab" href="#un" role="tab" aria-controls="un" aria-selected="false">1.0</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="deux-tab" data-toggle="tab" href="#deux" role="tab" aria-controls="deux" aria-selected="false">2.0</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="trois-tab" data-toggle="tab" href="#trois" role="tab" aria-controls="trois" aria-selected="false">3.0</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="quatre-tab" data-toggle="tab" href="#quatre" role="tab" aria-controls="quatre" aria-selected="false">4.0</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="cinq-tab" data-toggle="tab" href="#cinq" role="tab" aria-controls="cinq" aria-selected="false">5.0</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="obligatoire" role="tabpanel" aria-labelledby="obligatoire-tab">
            <div class="accordion mb-4 mt-4" id="accordionObligatoire">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="align-middle material-icons">check</i> 
                                Participation à un projet d’évolution d’un SI (solution applicative et d’infrastructure portant prioritairement sur le domaine de spécialité du candidat)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionObligatoire">
                        <div class="card-body">
                            <u>PPE1</u> – Adaptation et restauration d’une application web d’une association sportive. Travail effectué en groupe.<br>
                            <br>Productions associées :
                            <ul>
                                <li>Fiches des incidents</li>
                                <li>Description de l’application</li>
                            </ul>                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="align-middle material-icons">check</i> 
                                Prise en charge d’incidents et de demandes d’assistance liés au domaine de spécialité du candidat
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionObligatoire">
                        <div class="card-body">
                            <u>PPE2</u> – Participation au projet de développement d’une application web. Projet effectué en groupe.<br>
                            <br>Productions associées :
                            <ul>
                                <li>Description de l’application</li>
                                <li>Cahier des charges</li>
                                <li>Planning</li>
                            </ul>                          
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="align-middle material-icons">check</i> 
                                Elaboration de documents relatifs à la production et à la fourniture de services                            
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionObligatoire">
                        <div class="card-body">
                            <u>PPE2</u> – Participation au projet de développement d’une application web. Projet effectué en groupe.<br>
                            <br>Productions associées :
                            <ul>
                                <li>Documentation utilisateur</li>
                                <li>Compte-rendu du projet</li>
                            </ul>                          
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="align-middle material-icons">check</i> 
                                Productions relatives à la mise en place d’un dispositif de veille technologique et à l’étude d’une technologie, d’un composant, d’un outil ou d’une méthode
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionObligatoire">
                        <div class="card-body">
                            <u>PPE1</u> – Participation au projet de développement d’une application web. Projet effectué en groupe.<br>
                            <br>Productions associées :
                            <ul>
                                <li>Etude du BIOS</li>
                                <li>Portfolio : mise en place d'une veille technologique</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="un" role="tabpanel" aria-labelledby="un-tab">
            <div class="accordion mb-4 mt-4" id="accordionUn">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="align-middle material-icons">check</i> 
                                A1.1.1 Analyse du cahier des charges d'un service à produire
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionUn">
                        <div class="card-body">
                            <u>PPE3</u> – Solution back-end : application Ifrocean en C# : Réalisation d’une solution applicative en C#.<br>                        
                            <br>Productions associées :
                            <ul>
                                <li>Cahier des charges</li>
                                <li>Liste des acteurs concernés</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="align-middle material-icons">clear</i> 
                                A1.1.2 Étude de l'impact de l'intégration d'un service sur le système informatique                           
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="align-middle material-icons">check</i> 
                                A1.1.3 Étude des exigences liées à la qualité attendue d'un service
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionUn">
                        <div class="card-body">
                            <u>PPE4</u> – Solution front-end : application Ifrocean en Symfony : Réalisation d’une application web en Symfony.<br>                       
                            <br>Productions associées :
                            <ul>
                                <li>Cahier des charges</li>
                                <li>Description des données manipulées et échangées par le service</li>
                                <li>Description des technologies utilisées</li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="align-middle material-icons">check</i> 
                                A1.2.1 Élaboration et présentation d'un dossier de choix de solution technique
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionUn">
                        <div class="card-body">
                            <u>Stage de 1ère Année :</u> – DLJ GROUP : Projet interne. Choix de la solution technique pour le développement d’une application web.<br>                   
                            <br>Productions associées :
                            <ul>
                                <li>Cahier des charges</li>
                                <li>Spécifications fonctionnelles et techniques</li>
                                <li>Tableau comparatif des solutions testées</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="align-middle material-icons">clear</i> 
                                A1.2.2 Rédaction des spécifications techniques de la solution retenue                            
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="align-middle material-icons">clear</i> 
                                A1.2.2 Rédaction des spécifications techniques de la solution retenue                            
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="align-middle material-icons">clear</i> 
                                A1.2.3 Évaluation des risques liés à l'utilisation d'un service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="align-middle material-icons">clear</i> 
                                A1.2.4 Détermination des tests nécessaires à la validation d'un service
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="align-middle material-icons">clear</i> 
                                A1.2.5 Définition des niveaux d'habilitation associés à un service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="align-middle material-icons">clear</i> 
                                A1.3.1 Test d'intégration et d'acceptation d'un service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEleven">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                <i class="align-middle material-icons">clear</i> 
                                A1.3.2 Définition des éléments nécessaires à la continuité d'un service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwelve">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                <i class="align-middle material-icons">check</i> 
                                A1.3.3 Accompagnement de la mise en place d'un nouveau service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionUn">
                        <div class="card-body">
                            <u>Stage de 1ère Année :</u> – OBS : Projet interne. Présentation de la production à l’ensemble du service de l'entreprise.<br>                    
                            <br>Productions associées :
                            <ul>
                                <li>Description et conditions d’utilisation du service</li>
                                <li>Description de l’entreprise</li>
                                <li>Rapport d'activité</li>
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThirteen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                <i class="align-middle material-icons">clear</i> 
                                A1.3.4 Déploiement d'un service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFourteen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                <i class="align-middle material-icons">check</i> 
                                A1.4.1 Participation à un projet 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionUn">
                        <div class="card-body">
                            <u>Stage de 1ère Année :</u> – OBS : Projet interne. Participation à un projet interne de l’entreprise.<br>                      
                            <br>Productions associées :
                            <ul>
                                <li>Planning du projet</li>
                                <li>Rapport d'activité</li>
                                <li>Logiciel de gestion de projet : Trello, Excel</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFifteen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                <i class="align-middle material-icons">clear</i> 
                                A1.4.2 Évaluation des indicateurs de suivi d'un projet et justification des écarts 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionUn">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSixteen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                <i class="align-middle material-icons">check</i> 
                                A1.4.3 Gestion des ressources 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionUn">
                        <div class="card-body">
                            <u>Stage de 2ème Année :</u> – DLJ GROUP : Projet interne. Gestion des ressources dans la participation au projet.<br>                      
                            <br>Productions associées :
                            <ul>
                                <li>Planning du projet</li>
                                <li>Rapport d'activité</li>
                                <li>Logiciel de gestion de projet : Taskworld</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div class="tab-pane fade" id="deux" role="tabpanel" aria-labelledby="deux-tab">
            <div class="accordion mb-4 mt-4" id="accordionDeux">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link text-warning" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="align-middle material-icons">clear</i> 
                                A2.1.1 Accompagnement des utilisateurs dans la prise en main d'un service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionDeux">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>                        
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="align-middle material-icons">clear</i> 
                                A2.1.2 Évaluation et maintien de la qualité d'un service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionDeux">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="align-middle material-icons">clear</i> 
                                A2.2.1 Suivi et résolution d'incidents  
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionDeux">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="align-middle material-icons">clear</i> 
                                A2.2.2 Suivi et réponse à des demandes d'assistance 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionDeux">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>                        
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="align-middle material-icons">clear</i> 
                                A2.2.3 Réponse à une interruption de service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionDeux">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="align-middle material-icons">clear</i> 
                                A2.3.1 Identification, qualification et évaluation d'un problème                             
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionDeux">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="align-middle material-icons">check</i> 
                                A2.3.2 Proposition d'amélioration d'un service 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionDeux">
                        <div class="card-body">
                            <u>Stage de 2ème année</u> – DLJ GROUP : Adaptation et restauration d’une application web d’une association sportive. Travail effectuée en groupe. Amélioration d’une application web.<br>                      
                            <br>Productions associées :
                            <ul>
                                <li>Service opérationnel et documenté</li>
                                <li>Propositions d’amélioration du service</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="trois" role="tabpanel" aria-labelledby="trois-tab">
            <div class="accordion mb-4 mt-4" id="accordionTrois">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="align-middle material-icons">check</i> 
                                A3.2.1 Installation et configuration d'éléments d'infrastructure  
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionTrois">
                        <div class="card-body">
                            <u>PPE2 :</u> Conception d’une application pour une entreprise (bijouterie Chimère). Projet en groupe. Installation et configuration d’une infrastructure permettant l’hébergement d’une solution applicative.<br>                     
                            <br>Productions associées :
                            <ul>
                                <li>Cahier des charges</li>
                                <li>Schéma de l'infrastructure</li>
                                <li>Eléments d'infrastructure installés</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="align-middle material-icons">clear</i> 
                                A3.2.2 Remplacement ou mise à jour d'éléments défectueux ou obsolètes 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionTrois">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="quatre" role="tabpanel" aria-labelledby="quatre-tab">
            <div class="accordion mb-4 mt-4" id="accordionQuatre">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="align-middle material-icons">check</i> 
                                A4.1.1 Proposition d'une solution applicative 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <u>PPE4</u> – Solution front-end : application Ifrocean en Symfony : Réalisation d’une application web en Symfony.<br>                  
                            <br>Productions associées :
                            <ul>
                                <li>Cahier des charges</li>
                                <li>Description de l'application</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="align-middle material-icons">check</i> 
                                A4.1.2 Conception ou adaptation de l'interface utilisateur d'une solution applicative 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <u>Stage de 1ère année</u> – OBS : Projet interne. Réalisation d’une interface utilisateur. Projet interne à l’entreprise.<br>                        
                            <br>Productions associées :
                            <ul>
                                <li>Maquettes de l'UI</li>
                                <li>Description de l'architecture de la solution applicative</li>
                            </ul>                        
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="align-middle material-icons">check</i> 
                                A1.1.3 Étude des exigences liées à la qualité attendue d'un service
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <u>PPE4</u> – Solution front-end : application Ifrocean en Symfony : Réalisation d’une application web en Symfony.<br>                        
                            <br>Productions associées :
                            <ul>
                                <li>Cahier des charges</li>
                                <li>Description des données manipulées et échangées par le service</li>
                                <li>Description des technologies utilisées</li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="align-middle material-icons">check</i> 
                                A4.1.3 Conception ou adaptation d'une base de données                             
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <u>PPE3</u> – Solution back-end : application Ifrocean en C# : Conception de la base de données d’une solution applicative.<br>                        
                            <br>Productions associées :
                            <ul>
                                <li>Base de données</li>
                                <li>Schéma UML de la base de données</li>
                                <li>Description de la base de données</li>
                                <li>Schéma relationnel de la base de données</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="align-middle material-icons">check</i> 
                                A4.1.4 Définition des caractéristiques d'une solution applicative
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <u>Stage de 2ème année</u> – DLJ GROUP : Projet interne. Réalisation d’une application web de gestions de ressources.<br>
                            <br>Productions associées :
                            <ul>
                                <li>Outil de développement : Visual Studio Code</li>
                                <li>Planning</li>
                                <li>Description de l’architecture de la solution applicative</li>
                                <li>Spécifications techniques</li>
                            </ul>   
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="align-middle material-icons">clear</i> 
                                A4.1.5 Prototypage de composants logiciels
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="align-middle material-icons">check</i> 
                                A4.1.6 Gestion d'environnements de développement et de test                             
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <u>Stage de 2ème année</u> – DLJ GROUP : Projet interne. Mise en place de l’environnement de développement pour la réalisation d’une application web.<br>
                            <br>Productions associées :
                            <ul>
                                <li>Description de l’environnement de développement sous Docker</li>
                                <li>Documentation technique de Docker</li>
                                <li>Base de données de l’application</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="align-middle material-icons">clear</i> 
                                A4.1.7 Développement, utilisation ou adaptation de composants logiciels          
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="align-middle material-icons">clear</i> 
                                A4.1.8 Réalisation des tests nécessaires à la validation d'éléments adaptés ou développés 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="align-middle material-icons">check</i> 
                                A4.1.9 Rédaction d'une documentation technique                            
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <u>PPE3</u> –  Solution back-end : application Ifrocean en C# : Réalisation de la documentation technique de l’application.<br>
                            <br>Productions associées :
                            <ul>
                                <li>Documentation technique de la solution applicative</li>
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEleven">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                <i class="align-middle material-icons">check</i> 
                                A4.1.10 Rédaction d'une documentation d'utilisation                             
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <u>PPE4</u> –  Solution front-end : application Ifrocean en Symfony : Réalisation de la documentation utilisateur de l’application.<br>
                            <br>Productions associées :
                            <ul>
                                <li>Documentation d'utilisation de l'application</li>
                            </ul>                    
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwelve">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                <i class="align-middle material-icons">clear</i> 
                                A4.2.1 Analyse et correction d'un dysfonctionnement, d'un problème de qualité de service ou de sécurité                            
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>  
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThirteen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                <i class="align-middle material-icons">clear</i>
                                A4.2.2 Adaptation d'une solution applicative aux évolutions de ses composants                              
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFourteen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                <i class="align-middle material-icons">clear</i> 
                                A4.2.3 Réalisation des tests nécessaires à la mise en production d'éléments mis à jour 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>                        
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFifteen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                <i class="align-middle material-icons">clear</i> 
                                A4.2.4 Mise à jour d'une documentation technique
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionQuatre">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="cinq" role="tabpanel" aria-labelledby="cinq-tab">
            <div class="accordion mb-4 mt-4" id="accordionCinq">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link text-warning" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="align-middle material-icons">clear</i> 
                                A5.1.1 Mise en place d'une gestion de configuration 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCinq">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>                        
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="align-middle material-icons">clear</i> 
                                A5.1.2 Recueil d'informations sur une configuration et ses éléments
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionCinq">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="align-middle material-icons">clear</i> 
                                A5.1.3 Suivi d'une configuration et de ses éléments 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionCinq">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="align-middle material-icons">clear</i> 
                                A5.1.4 Étude de propositions de contrat de service (client, fournisseur) 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionCinq">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="align-middle material-icons">clear</i> 
                                A5.1.5 Évaluation d'un élément de configuration ou d'une configuration  
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionCinq">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="align-middle material-icons">clear</i> 
                                A5.1.6 Évaluation d'un investissement informatique 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionCinq">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="align-middle material-icons">clear</i> 
                                A5.2.1 Exploitation des référentiels, normes et standards adoptés par le prestataire
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionCinq">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="align-middle material-icons">check</i> 
                                A5.2.2 Veille technologique 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionCinq">
                        <div class="card-body">
                            <u>PPE1 :</u> Veille technologique.<br>                     
                            <br>Productions associées :
                            <ul>
                                <li>Dossier de la veille technologique</li>
                                <li>Cahier des charges</li>
                                <li>Planning</li>
                            </ul>                         
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-warning" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="align-middle material-icons">clear</i> 
                                A5.2.3 Repérage des compléments de formation ou d'auto-formation
                            </button>
                        </h2>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionCinq">
                        <div class="card-body">
                            <i>Cette compétence n'a pas encore été développée.</i>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="align-middle material-icons">check</i> 
                                A5.2.4 Étude d˜une technologie, d'un composant, d'un outil ou d'une méthode
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionCinq">
                        <div class="card-body">
                            <u>PPE2 :</u> Etude du modèle MVC, pour intégration au projet.<br>                      
                            <br>Productions associées :
                            <ul>
                                <li>Etude du modèle MVC</li>
                                <li>Intégration du modèle MVC sur l’application de l’association sportive</li>
                            </ul>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</div>
@include('layouts.footer')

