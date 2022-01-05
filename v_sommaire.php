<div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
        <?php if ($_SESSION['Patient'] == true){  ?>
            <li >
               Patient  :<br>
               <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
            
               <li class="smenu">
              <a href="index.php?uc=" title ="ValiderFicheFrais">Valider les Fiches de Frais</a>
            </li>
            <li class="smenu">
              <a href="index.php?uc=" title="Suivre mes fiches de frais">Suivre des fiches de frais </a>
            </li>

            
            
            <?php }elseif{ ?>
            <li >
               Medecin :<br>
               <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
            </li>
            


           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
            <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
            </li>
         <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
         </li>

            <?php }else{ ?>
            <li>
                Pharmacien :<br>
                <?php echo $_SESSION['prenom']."  ".$_SESSION['nom'] ?>
            </li>


         </ul>
        
    </div>