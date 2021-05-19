<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="icon" href="../../src/img/icon.png">
    <link rel="stylesheet" href="../../src/css/style.css"> 
    <link rel="stylesheet" href="../../src/css/bootstrap.min.css">
    <title>Agenzia Immobiliare</title>
  </head>
 <style>
    body{
	background-image: url("../../src/img/Background.jpg");
	background-size: cover;
    background-position:center center;
    background-repeat: no-repeat;
    height:100vh;
    width:100%}
</style>
<body>
      <div class="col-12  col-md-10 col-lg-12 col-xl-10 col-xxl-10  ">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
  <div class ="container ">
  <a class="navbar-brand" href="#">
  <a href="#" class="navbar-brand"> Agenzia Immobiliare </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#"  role="button" data-toggle="dropdown" >
                      Annessi
                      </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../../view/tipoannesso/inser_tipoannesso.html">Inserisci</a>
                  <a class="dropdown-item" href="../../controller/tipoannesso/mod_tipoannesso.php">Modifica</a>
                  <a class="dropdown-item" href="../../controller/tipoannesso/canc_tipoannesso.php">Cancella</a>
                  <a class="dropdown-item" href="../../view/tipoannesso/lista_tipoannesso.php">Lista</a>
                </div>
              </li>
                  <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" >
                    DettagliAnnessi
                  </a>
                    <div class="dropdown-menu" >
                      <a class="dropdown-item" href="../../view/dettagliannessi/ins_dettannesso.php">Inserisci</a>
                      <a class="dropdown-item" href="../../controller/dettagliannessi/mod_dettannessi.php">Modifica</a>
                      <a class="dropdown-item" href="../../controller/dettagliannessi/canc_dettannessi.php">Cancella</a>
                      <a class="dropdown-item" href="../../view/dettagliannessi/lista_dettannessi.php">Lista</a>
                   </div>
                      </li>
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" >
                         Proprietari
                      </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                          <a class="dropdown-item" href="../../view/proprietari/inser_proprietari.html">Inserisci</a>
                          <a class="dropdown-item" href="../../controller/proprietari/mod_proprietari.php">Modifica</a>
                          <a class="dropdown-item" href="../../controller/proprietari/canc_proprietari.php">Cancella</a>
                          <a class="dropdown-item" href="../../view/proprietari/lista_proprietari.php">Lista</a>
                        </div>
                      </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown">
                          Immobili
                          </a>
                          <div class="dropdown-menu" >
                            <a class="dropdown-item" href="../../view/immobili/ins_immobile.php">Inserisci</a>
                            <a class="dropdown-item" href="../../controller/immobili/mod_immobili.php">Modifica</a>
                            <a class="dropdown-item" href="../../controller/immobili/canc_immobili.php">Cancella</a>
                            <a class="dropdown-item" href="../../view/immobili/lista_immobili.php">Lista</a>
                          </div>
                        </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#"  role="button" data-toggle="dropdown" >
                                      Tipo Immobile
                                  </a>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="../../view/tipoimmobile/inser_tipoImmobile.html">Inserisci</a>
                                        <a class="dropdown-item" href="../../controller/tipoimmobile/mod_tipoImmobile.php">Modifica</a>
                                        <a class="dropdown-item" href="../../controller/tipoimmobile/canc_tipoimmobile.php">Cancella</a>
                                        <a class="dropdown-item" href="../../view/tipoimmobile/lista_tipoimmobile.php">Lista</a>
                                        </div>
                                    
                                </li>
</nav>
</div>
    </div>
  </body>        
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

</html>
