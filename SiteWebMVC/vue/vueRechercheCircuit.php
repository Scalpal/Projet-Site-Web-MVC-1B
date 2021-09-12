	<!-- Formulaire de recherche de circuit -->

<div class="formulaireCircuit">
		
	<div class="formulaireCircuitBoxes">
		<form action="./?action=recherche" method="post" id="RechercheCircuit">
			<p> 
				<label for="circuit">Votre recherche de circuit : </label><br/>
				
				<select name="destinations" id="circuitDestination">
					
					<optgroup label="Émirats arabes unis">
						<option value="" disabled selected hidden> Destination (Pays ou continent)</option>
						<option value="1">Dubaï </option>
					</optgroup>
					
					<optgroup label="Asie">
						<option value="2">Thaïlande </option>
						<option value="3">Cambodge</option>
					</optgroup>

				</select>
			</p>
	
			<p> 
				<select name="VilleDepart" id="circuitDepart">
					
						<option value="" disabled selected hidden> Ville de départ </option>
						<option value="Paris">Paris </option>
						<option value="Lille">Lille</option>
						<option value="Bordeaux">Bordeaux</option>
						<option value="Nice">Nice</option>
						<option value="Marseille">Marseille</option>

				</select>
			</p>
			
			<input type="date" value="DateDepart" id="circuitDepart"/>

			<p> 
				<select name="Duree" id="circuitDepart">
					
					<option value="" disabled selected hidden> Durée</option>
					<option value="2"> 2 Jours </option>
					<option value="5"> 5 Jours </option>
					<option value="7"> 7 Jours </option>
					<option value="14"> 14 Jours </option>
					<option value="21"> 21 Jours</option>

				</select>
			</p>

			<p> 
				<select name="PrixCircuit" id="circuitDepart">
					
					<option value="" disabled selected hidden> Limite de prix </option>
					<option value="2000"> Supérieur à 2000 euros </option>
					<option value="5000"> Supérieur à 5000 euros </option>
					<option value="15000"> Supérieur à 15 000 euros </option>

				</select>
			</p>
		
	</div>
			<input type="submit" value="Rechercher" id="circuitRecherche"/>
		</form>
        
</div>