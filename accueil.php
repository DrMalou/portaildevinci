<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br>
<div class="row">

<div class="col-md-7">
    <div class="row">
        <div class="col-md-2">
        <img src="img/pdp.jpg" width="125px;" style="margin-left: 15px;">
        </div>
        <div class="col-md-10" id="info">
            <div class="row">
           <ul>
               <li>Nom</li>
               <li>Adresse</li>
               <li>Tel. Portable</li>
               <li>Tel. Fixe</li>
               <li>Mail perso</li>
               <li>Mail pro</li>

           </ul>
                <div><button type="button" class="btn btn-success">Modification</button>

                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Détails
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Identifiant</a>
                        <a class="dropdown-item" href="#">Num Badge</a>
                        <a class="dropdown-item" href="#">Id administratif</a>

                    </div>
                </div>

        </div>
        </div>
    </div>
    <br>
    <div class="col-md-12" id="scolarite" style="margin-left: 15px;">
        <h1>Scolarité</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Programme</th>
                <th scope="col">Axe et niveau</th>
                <th scope="col">Date de début</th>
                <th scope="col">Date de fin</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">PAIIMWB2</th>
                <td>ANNEE 2 - AXE DEVELOPPEMENT WEB</td>
                <td>2016</td>
                <td>2017</td>
            </tr>
            <tr>
                <th scope="row">PARPANS1</th>
                <td>RESTART POST BAC</td>
                <td>2017</td>
                <td>2018</td>
            </tr>

            </tbody>
        </table>
        <br>
    </div>
</div>

    <div class="col-md-5" id="stage">
        <h2>Offres de stage</h2>
        <nav class="navbar navbar-expand-lg" id="navstage">


            <div class="" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link" href="#" style="color: darkred;">ESILV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: dodgerblue;">EMLV</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: orangered;">
                            IIM
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Développement Web</a>
                            <a class="dropdown-item" href="#">Création et Design</a>
                            <a class="dropdown-item" href="#">Communication digitale</a>
                            <a class="dropdown-item" href="#">Animation 3D</a>
                            <a class="dropdown-item" href="#">Jeux-vidéo</a>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>

        <table class="table table-bordered table-light">
            <thead>
            <tr>
                <th scope="col">Stage</th>
                <th scope="col">Entreprise</th>
                <th scope="col">Secteur</th>
                <th scope="col">Période</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Consultant de Donald Trump</th>
                <td>WhiteHouse</td>
                <td>Dogsitting</td>
                <td>Dés que possible</td>
            </tr>
            <tr>
                <th scope="row">Hacker-Astronaute</th>
                <td>NASA</td>
                <td>Astronomie-informatique</td>
                <td>Demain</td>
            </tr>
            <tr>
                <th scope="row">Développeur web</th>
                <td>Microsoft</td>
                <td>Dev</td>
                <td>05/11/9865</td>
            </tr>
            <tr>
                <th scope="row">Testeur de vacances</th>
                <td>Emirates airlines</td>
                <td>Chill zouk</td>
                <td>Quand tu veux</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<br>
<div class="col-md-12 row" id="groupe" style="margin-left: 15px;">
    <div class="col-md-6">
    <h3>Groupes :</h3>
    <ul class="list-group">
        <li class="list-group-item list-group-item-primary">IIM-2-DW-1</li>
        <li class="list-group-item list-group-item-success">SK26</li>
        <li class="list-group-item list-group-item-danger">MIIMLV210117 COURS LV AN14</li>
        <li class="list-group-item list-group-item-warning">MMIASPS-0017 - MUSA</li>
        <li class="list-group-item list-group-item-info">COOP10</li>

    </ul>
    </div>
    <div class="col-md-6">
        <h3>Associations étudiantes</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Association</th>
                <th scope="col">Année scolaire</th>
                <th scope="col">Fonction</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">AMMA</th>
                <td>2017-2018</td>
                <td>Fighter</td>

            </tr>
            <tr>
                <th scope="row">Kickers</th>
                <td>2018-2019</td>
                <td>President</td>

            </tr>

            </tbody>
        </table>
        <br>
        <h3>Anglais</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Test</th>
                <th scope="col">Date</th>
                <th scope="col">Note</th>
                <th scope="col">Commentaire</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">TOEIC</th>
                <td>2016</td>
                <td>21/20</td>
                <td>Charmant</td>
            </tr>
            <tr>
                <th scope="row">TOEFL</th>
                <td>2017</td>
                <td>32/20</td>
                <td>Ténébreux</td>
            </tr>

            </tbody>
        </table>
    </div>

</div>

</body>
</html>