<?php require 'menu.php' ?>

<div class="container">
	<div class="row">
			<div class="col-12">
				<section class="">

						<br>

						<div id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="card">
							    <div class="card-header" role="tab" id="headingOne">
							      <h5 class="mb-0">
							        
							          <p data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="text-center">Choix de périodes</p>
							        
							      </h5>
							    </div>

							    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
							      <div class="card-block">
							        <button type="button" class="btn btn-secondary btn-lg btn-block">2016-2017 Semestre 1</button>
							        <button type="button" class="btn btn-secondary btn-lg btn-block">2016-2017 Semestre 2</button>
							        <button type="button" class="btn btn-primary btn-lg btn-block">2017-2018 Semestre 3</button>
							      </div>
							    </div>
							  </div>
						
						</div>

						<br>
									
						<div class="alert alert-danger" role="alert">
						  <strong>Vous avez 3 absences !</strong>
						</div>

					

						<table class="table">
						  <thead class="thead-inverse">
						    <tr>
						      <th>#</th>
						      <th>Cours</th>
						      <th>Type</th>
						      <th>Jour</th>
						      <th>Créneau</th>
						      <th>Durée</th>
						      <th>Modalité</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="table-info">
						      <th scope="row">1</th>
						      <td>Sport</td>
						      <td>Cours SP</td>
						      <td>2017-09-15</td>
						      <td>17:15:00</td>
						      <td>01:15:00</td>
						      <td>EXCUSE</td>
						    </tr>
						    <tr class="table-active">
						      <th scope="row">2</th>
						      <td>Algorithmie</td>
						      <td>Cours SP</td>
						      <td>2017-10-27</td>
						      <td>14:00:00</td>
						      <td>03:30:00</td>
						      <td>ABSENT</td>
						    </tr>
						    <tr class="table-info">
						      <th scope="row">3</th>
						      <td>Anglais</td>
						      <td>Cours SP</td>
						      <td>2017-11-09</td>
						      <td>15:45:00</td>
						      <td>01:15:00</td>
						      <td>ABSENT</td>
						    </tr>
						  </tbody>
						</table>

				</section>
			</div>
	</div>
</div>	