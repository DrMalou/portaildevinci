<?php require 'menu.php' ?>

<!--<h1 class="text-center"> Test </h1>-->

<div class="container">
	<div class="row">
		<div class="col-6 ctn1">

			<section class="ac-container ctncolor ovr">
					<h1 class="text-center">Documents</h1>

					<br>

					<button type="button" class="btn btn-secondary btn-lg btn-block btn-docs">REGLEMENT INTERIEUR IIM 2017-2018</button>
					<button type="button" class="btn btn-secondary btn-lg btn-block btn-docs">REGLEMENT PEDAGOGIQUE IIM 2017-2018</button>
					<button type="button" class="btn btn-secondary btn-lg btn-block btn-docs">REGLEMENT INTERIEUR CG 92 applicable au 16/08/2016</button>
					<button type="button" class="btn btn-secondary btn-lg btn-block btn-docs">CHARTE INFORMATIQUE ETUDIANT</button>

					<br><br>

					<div>
						<input id="ac-1" name="accordion-1" type="checkbox" /><!-- attribut checked pour l'ouvrir automatiquement-->
							<label for="ac-1" class="ovr">Scolarité</label>
								<article class="ac-small">
									<p class="text-left txt-docs"><a href="#">Calendrier académique 2017-2018</a><br>
									<a href="#">Guide d'usage HQ My print</a><br>
									<a href="#">Equipe IIM</a><br>
									<a href="#">Dates clés 2017 - 2018</a></p>
								</article>
					</div>
					<div>
						<input id="ac-3" name="accordion-3" type="checkbox" />
							<label for="ac-3" class="ovr">Stages</label>
								<article class="ac-small">
									<p class="text-left txt-docs"><a href="#">Lettre de mission en version anglaise</a><br>
									<a href="#">LETTRE DE MISSION 2017-2018</a><br>
									<a href="#">Comment obtenir votre convention de stage?</a></p>
								</article>
					</div>
					<div>
						<input id="ac-4" name="accordion-4" type="checkbox" />
							<label for="ac-4" class="ovr">Général</label>
								<article class="ac-small">
									<p class="text-left txt-docs"><a href="#">Que faire en cas de perte de badge?</a><br>
									<a href="#">Guide des premiers pas des outils numériques</a><br>
									<a href="#">Que faire en cas de perte de badge?</a><p>
								</article>
					</div>
					<div>
						<input id="ac-5" name="accordion-5" type="checkbox" />
							<label for="ac-5" class="ovr">Vie Associative</label>
								<article class="ac-medium">
									<p class="text-left txt-docs"><a href="#"> COFA : réglement</a><br>
									<a href="#">PEE : guide de l'étudiant</a><br>
									<a href="#">Créer une association</a><br>
									<a href="#">Charte des associations et des clubs du groupe Léonard de Vinci</a><br>
									<a href="#">Réglement des points de bonification</a><br>
									<a href="#">COFA : demande de subvention</a></p>
								</article>
					</div>
					<div>
						<input id="ac-6" name="accordion-6" type="checkbox" />
							<label for="ac-6" class="ovr">Sport</label>
								<article class="ac-small">
									<p class="text-left txt-docs"><a href="#">Licence Universitaire</a><br>
									<a href="#">Dossier Forest Hill</a></p>
								</article>
					</div>
				
				<br>

			</section>			

		</div>



		<div class="col-6">
			<section class="ac-container">
					<div>
						<input id="ac-2" name="accordion-2" type="checkbox" checked/>
							<label for="ac-2" class="ovr">Fichiers Experts 2017</label>
								<article class="ac-small">
									<table class="table ovr">
									  <thead class="thead-inverse text-center">
									    <tr>
									      <th>Document</th>
									      <th>Poids</th>
									      <th>Téléchargement</th>
									    </tr>
									  </thead>
									  <tbody class="text-center">									  
									  </tbody>
									</table>
								</article>
					</div>

					<div>
						<input id="ac-7" name="accordion-7" type="checkbox" checked/>
							<label for="ac-7" class="ovr">Certificats</label>
								<article class="ac-largePR">
									<table class="table ovr">
									  <thead class="thead-inverse text-center">
									    <tr>
									      <th>Document</th>
									      <th>Année Universitaire</th>
									      <th>Téléchargement</th>
									    </tr>
									  </thead>
									  <tbody class="text-center">
									    <tr>
									      <th scope="row">Certificat de scolarité</th>
									      <td>2016-2017</td>
									      <td><button>DL</button></td>
									    </tr>
									    <tr>
									      <th scope="row">Attestation sécurité sociale</th>
									      <td>2016-2017</td>
									      <td><button>DL</button></td>
									    </tr>
									    <tr>
									      <th scope="row">Certificat de scolarité</th>
									      <td>2017-2018</td>
									      <td><button>DL</button></td>
									    </tr>
									    <tr>
									      <th scope="row">Attestation sécurité sociale</th>
									      <td>2017-2018</td>
									      <td><button>DL</button></td>
									    </tr>
									    <tr>
									      <th scope="row">Certificat ImaginR</th>
									      <td>2017-2018</td>
									      <td><button>DL</button></td>
									    </tr>
									  </tbody>
									</table>
								</article>
					</div>

			</section>

		</div>
	</div>
</div>