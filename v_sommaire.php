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
              <a href="index.php?uc=" title ="ValiderFicheFrais">Lorem Ipsum</a>
            </li>
            <li class="smenu">
              <a href="index.php?uc=" title="Suivre mes fiches de frais">Lorem Ipsum </a>
            </li>

            
            
            <?php }elseif{ ?>
            <li >
               Medecin :<br>
               <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
            </li>
            


           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Lorem Ipsum</a>
           </li>
            <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Lorem Ipsum</a>
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
