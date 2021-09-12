		<?php if (connexionDAO::isLoggedOn()) { ?>
			<nav id="listedestinations">
			<a href="./?action=profil" class="listeD" title="C'est une destination in-cro-yable !">Mon profil</a>
		</nav> <?php
		}else { ?>
			<nav id="listedestinations">
				<a href="./?action=connexion" class="listeD" title="C'est une destination in-cro-yable !">Connexion</a>
			</nav><?php
		} ?>
		
		<!-- C'est l'image du logo + présentation du site -->
		<p> <a href="./?action=accueil"> <img src="images/logoTourismeideal.jpg" height="100" width="100" alt="logo du site" id="logo" title="Cliquez moi dessus pour retourner à l'accueil !"> </a></p> 

			<h1> TourismeIdéal </h1> 
			
			<h3> Bonjour et bienvenue sur ce nouveau site de tourisme !</h3>

			<p class="descriptionsite"> Ici sont présentée des destinations incontournables et ce qu'on peut y faire une fois sur place. <br/>
			 N'hésitez pas à laissez votre curseur sur la destination ou l'activité qui vous intéresse !</p>
			
			<h2><em> Voici les meilleures destinations où aller : </em></h2>
			
		<!-- La liste des destinations -->
		<nav id="listedestinations">
			<a href='./?action=dubai' class="listeD" title="C'est une destination in-cro-yable !"> Dubaï </a>
			<a href='./?action=thailande' class="listeD" title="La gastronomie y est très variée !">Thaïlande</a>
			<a href='./?action=cambodge' class="listeD" title="Les paysages y sont magnifiques !"> Cambodge </a>
		</nav>
		
		
		<!--Accueil + IMAGE -->
		
		<div class="partieAccueil">
    	<?php 

    	for ( $i=1 ; $i<4 ; $i++ ){ 
        
			$lesPhotos= photosDAO::get_PhotosByID($i); ?> 
        
			<a href="images/<?= $lesPhotos[0]['CheminPhoto'] ?>"><img src="images/<?= $lesPhotos[0]['CheminPhoto']?>" height="292" width="410" class="Photos" /></a>
		
		<?php } ?>
        </div> 
		
 
	<div class="TexteAccueil">
	<p class="accueiltexte"> Vous ne savez pas où allez pour vos prochaines vacances ? Vous ne voulez pas être déçus une fois arrivés à destination ? <br/> </p>
		<p class="descriptionsiteAccueil"><strong>Ce site est la solution à vos hésitations !</strong> <br/> 
		Nous vous présentons tout simplement 3 destinations <strong>in-con-tour-nable</strong> qui vous laisseront bouche-bée pendant tout votre séjour sur place !<br/>
		Activités, lieux à découvrir et les tarifs ... <strong>TOUT</strong> est indiqué sur ce site ! <br/>
		Vous serez plus que prêt pour votre voyage autour du monde !</p>
	</div>
	
	<!-- <div class="formulaire">
		<form>
			
			<p class="formTitre">Si vous avez des suggestions à nous proposer, envoyez les nous par mail ! Nous serons très heureux de les lire ! </p>
			
			<label for="nom" id="nom" >Votre nom :</label>
			<input type="text" name="nom" id="zoneE" placeholder="Lim" required />
		   
			<br />
		   
			<label for="prenom" id="prenom" >Votre prénom :</label>
			<input type="text" name="prenom" id="zoneE" placeholder="Pascal" required />
		   
			<br/>
		   
			<label for="email" id="email" >Votre e-mail :</label>
			<input type="email" name="email" id="zoneE" placeholder="pascallim@gmail.com" required/><br/>
		   
			<label for="commentaire" id="commentaire">Vos suggestions :</label>
			<textarea name="commentaire" id="commentaire" placeholder="Lâchez-vous ici !" required></textarea>

			<a href="mailto:pppascallim@gmail.com" class="boutonForm" input type="submit"> Envoyer</a>
		</form>	
	</div> -->
	
	
		