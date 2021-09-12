<?php if (connexionDAO::isLoggedOn()) { ?>
        <nav id="listedestinations">
            <a href="./?action=profil" class="listeD" title="C'est une destination in-cro-yable !">Mon profil</a>
        </nav> <?php
    }else { ?>
        <nav id="listedestinations">
            <a href="./?action=connexion" class="listeD" title="C'est une destination in-cro-yable !">Connexion</a>
        </nav><?php
    } ?>
       
    <p><a href="./?action=accueil"><img src="images/logoTourismeideal.jpg" height="100" width="100" alt="logo du site" id="logo"></a></p> 

        <h1> TourismeIdéal </h1> 
        
        <h3> Bonjour et bienvenue sur ce nouveau site de tourisme !</h3>

        <p class="descriptionsite"> Ici sont présentée des destinations incontournables et ce qu'on peut y faire une fois sur place. <br/>
         N'hésitez pas à laissez votre curseur sur la destination ou l'activité qui vous intéresse !</p>
        
        <h2><em> Voici les meilleures destinations où aller : </em></h2>
        
    <!-- La liste des destinations -->
    <nav id="listedestinations">
         <a href="./?action=thailande" class="listeDgauche" title="La gastronomie y est très variée !">Thaïlande</a>
         <a href="./?action=cambodge" class="listeDdroite" title="Les paysages y sont magnifiques !"> Cambodge </a>
    </nav>

    <!-- TEXTE DUBAI + IMAGE -->
    
        <div id="partiefull"><h3 id="dubai" class="titres"> Dubaï </h3><br/>
			
            <div class="flottant"> <p class="textegauche"> 
        Vous rêvez du désert et de la mer ? de grattes-ciels vertigineux par la même occasion ? et surtout de températures exotiques ?<br/>
        Dubaï est la destination idéale pour vous !
        Avec un peu moins de 7h de vol et un léger décalage horaire, le soleil et un véritable dépaysement vous attend à la clé !
        Cette villes aux multiples facettes, avec d'un côté le Dubaï moderne et ses infrastructures hors-normes, et de l'autre le Vieux Dubaï, et ses nombreux souks et 
        bâteaux traditionnels.
        <strong>Cette capitale de tous les possibles saura vous ravir :</strong> passer une journée dans un aquarium géant, partir à l'aventure en 4x4 dans le désert, skier dans un centre 
        commercial, monter dans la plus haute tour du monde, vous détendre sur une magnifique plage, dormir dans un hôtel de luxe ou sous une tente traditionnelle... <br/>
    
        <span>-Prix moyen du billet (A/R)</span>: 400€ voire plus pour un vol direct, 300€ à 330€ pour un vol avec escale.<br/>
        <span>-Quand partir au meilleur prix ?</span>: En Février, Mars ou en Mai. </p> 
                
        <a href="images/imagedubai2.jpg"><img src="images/imagedubaiMini.jpg" height="292" width="410" alt="Photo de Dubaï" title="Cliquez pour agrandir" class="Photos" /></a>
                
                <p class="textedroite"> <strong><u>Les meilleures choses à faire :</u></strong><br/> 
                <br/>
                <a href="images/the-dubai-mall.jpg" class="listeac" title="C'est simplement gigantesque !">1-Le Dubai Mall (et son Food court) </a><br/>
                <a href="images/skidubai.jpg" class="listeac" title="Impensable !">2- Skier dans l'une des stations de ski en intérieur</a><br/>
                <a href="images/parcaquatiquedubai.jpg" class="listeac" title="La température extérieure est vraiment idéale pour ça !">3- Passez une journée dans l'un des parcs aquatiques de Dubai en bord de mer</a><br/>
                <a href="images/aquariumdubai.jpg" class="listeac" title="L'immersion est totale, on se croirait au fond de l'océan !">4- Allez dans l'aquarium du Dubai Mall</a><br/>
                <a href="images/burjkhalifa.jpg" class="listeac" title="La tour la plus haute du monde !"> 5- Monter en haut du Burj Khalifa </a><br/>
                <a href="images/dubainuit.jpg" class="listeac" title="C'est merveilleux !"> 6- Voir Dubaï et ses grands buildings de nuit</a></p>
            </div> 
        </div>
