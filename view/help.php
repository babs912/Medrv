<?php require_once ROOT.DS.'view'.DS.'layouts'.DS.'_header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1">
        <?php require_once ROOT.DS.'view'.DS.'layouts'.DS.'_sidenav.php'; ?>
        </div>
        <div class="col-sm-11 p-4">
             <h2>Guide d'utilisation de la plateforme </h2>
             <ul>
                 <li> 
                    <a href="#login">Se connecter</a> 
                    </li>
                 <li>
                     <a href="#appoint">Enregistrer un rendez-vous</a>
                </li>
             </ul>

             <div id="login">
                 <h3>Se connecter</h3>
                 <p>
                     Pour se connecter l'utilisateur qui est un membre du personnel doit taper 
                     son <strong>Pseudo</strong> et son <strong>Mot de passe</strong>. 
                     Il doit aussi selectionner le <strong>Service</strong> pour le quel il doit travailler.
                 </p>
             </div>

             <div id="appoint">
                 <h3>Enregistrer un rendez-vous</h3>
                 <p>
                    Sur la page de prise de rendez-vous L'utilisateur doit selectionner
                     une specialite puis un medecins si il y'en a plusieurs pour une sepcialite.
                 </p>
                 <p>
                     Une fois le medecin selectionne une fiche qui affiche les details du
                      medecin ainsi que des informaions de son planning s'affiche.
                      
                 </p>

                 <p>
                     Pour donnez le rendez-vous a ce medecin, on selectionne une date sur 
                     le calendrier et appuyer sur le bouton <strong>Ajouter un patient</strong> .

                     Ce button fait monter un modal qui contient le formulaire qui permet de saisir les informations du patients.

                 </p>
             </div>
        </div>
    </div>
</div>

