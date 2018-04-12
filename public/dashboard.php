<?php
/**
 * Created by PhpStorm.
 * User: PanoPort
 * Date: 10/04/2018
 * Time: 22:50
 */

include "function/connexion.php";

include "src/header.php";
?>

<script type="text/javascript" src="js/dashboard.js"></script>
<title>Tableau de bord</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Tableau de bord</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php"><i class="material-icons">directions_run</i></a></li>
        </ul>
    </div>
</nav>
<div style="margin-top: 5%;" class="container center-align">
    <div class="row">
        <div class="col s12">
            <a onclick="getForm();" class="waves-effect waves-light btn large_btn blue lighten-1">
                <p>Creer un QCM</p>
            </a>
            <a href="qcm.php" class="waves-effect waves-light btn large_btn green lighten-1">
                <p>Liste des QCM</p>
                <p id="number_of_qcm"></p>
            </a>
            <a href="qcm.php" class="waves-effect waves-light btn large_btn red lighten-1">
                <p>Paramètre QCM</p>
            </a>
        </div>
    </div>
</div>
<div id="create_qcm" class="container hide">
    <?php include "options/create_form.php"; ?>
</div>
</body>
</html>