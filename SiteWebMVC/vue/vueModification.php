<body id="reservation">

<p> <a href="./?action=accueil"> <img src="images/logoTourismeideal.jpg" height="100" width="100" alt="logo du site" id="logo" title="Cliquez moi dessus pour
retourner à l'accueil !"></a></p> 

<h1> TourismeIdéal </h1> 

<div class="formulaireReservation">
		<form action="./?action=modification" method="post">
			
			<p class="formTitre">Veuillez remplir les champs pour finaliser votre réservation : </p>

            <label for="nom" id="infoReserv" >Votre ID client :</label>
			    <input type="text" name="IdClient" id="zoneEReserv" value="<?= $InfosPersonne["IdClient"] ?>" disabled="disabled" required />
		   
			<br />
		   
			<label for="prenom" id="infoReserv" >Nouveau nom :</label>
			    <input type="text" name="NomClient" id="zoneEReserv" placeholder="Insérez votre nouveau nom" required />
		   
			<br/>

            <label for="prenom" id="infoReserv" >Nouveau prenom :</label>
			    <input type="text" name="PrenomClient" id="zoneEReserv" placeholder="Insérez votre nouveau prénom" required />
		   
			<br/>

            <label for="adresse" id="infoReserv" >Nouvelle adresse :</label>
			    <input type="text" name="AdresseClient" id="zoneEReserv" placeholder="Insérez votre nouvelle adresse" required />
		   
			<br/>

            <label for="tel" id="infoReserv" >Nouveau numéro de télélphone :</label>
			    <input type="text" name="TelClient" id="zoneEReserv" placeholder="Insérez votre nouveau numéro de téléphone" required />
		   
            <br/>

            <label for="email" id="infoReserv" >Nouvel e-mail :</label>
			    <input type="text" name="MailClient" id="zoneEReserv" placeholder="Insérez votre nouvel e-mail" required />
		   
			<br/>

            <label for="mdp" id="infoReserv" >Nouvel mot de passe :</label>
			    <input type="text" name="MdpClient" id="zoneEReserv" placeholder="Insérez votre nouveau mot de passe" required />
		   
			<br/>
		   
			<input type="submit" value="Confirmer" class="boutonForm" />
		</form>	