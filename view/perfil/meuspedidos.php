<?php
session_start();
if(!isset($_SESSION["email"]) || empty($_SESSION["email"])){ 
  session_destroy();
  ?>
  <form action="../newlc/view/logiin.php" name="myForm" id="myForm" method="post">
      <input type="hidden" name="msg" value="OA00">
  </form>
  <script>
      document.getElementById('myForm').submit(); 
  </script>
  <?php
  exit();
  }
 
?>
<?php
  $title = "Seu Brechó";
  include_once("../header/header.php");
?>
<div class="mobile-menu" style="margin-top: -1px; background-color: #e6c2bf;">

<li class="nav-item">
<button class="btn" id="btn-home"><a class="inicio-button" href="#">INICIO</a></button>
</li>

<li class="nav-item">
<div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    FEMININO
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Feminino-sup">PARTE SUPERIOR</a>
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Feminino-inf">PARTE INFERIOR</a>
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Feminino-cal">CALÇADOS</a>
  </div>
</div>
</li>


<li class="nav-item">
<div class="dropdown">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  MASCULINO
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Masculino-sup">PARTE SUPERIOR</a>
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Masculino-inf">PARTE INFERIOR</a>
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Masculino-cal">CALÇADOS</a>
</div>
</div>
</li>


<li class="nav-item">
<div class="dropdown">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
  INFANTIL
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Infantil-sup">PARTE SUPERIOR</a>
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Infantil-inf">PARTE INFERIOR</a>
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Infantil-cal">CALÇADOS</a>
</div>
</div>
</li>
</ul>
</div>

</div>
<!-- Menu Fim -->

<?php
require_once "../../model/Manager.php";
$managers = new Managers();
$stt = $managers->getCadastro($_SESSION['email']);
?>

	


  <div class="tab">
   <h5>Dados pessoas</h5>
    <button class="tablinks" id="botaomenu" onclick="openCity(event, 'London')" style="border-top: 1px solid #9C9FA3;";><i class="fa-solid fa-user"></i> Meu perfil </button>
    <button class="tablinks" id="botaomenu" onclick="openCity(event, 'Paris')"><i class="fa-solid fa-bag-shopping"></i> Meus pedidos </button>
    <a href="logout.php"><button class="ll" id="ll"><i class="fa-solid fa-bag-shopping"></i>Sair</button></a>
  </div>

  
  <div id="London" class="tabcontent">
  <div class="dadospessoais">
    <div class="container2" id="formulario">
    
    
        <div class="card" id="card2">
   
         <div class="card-header">
         Dados pessoais
         </div>
         <div class="box3">

   <form style="width: 80%;">
  <fieldset disabled>
    <br>
 
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><strong>Nome:</strong></label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $stt[0]['nome'];?>" style="border-color: #31363B;">
    </div>
    <br>
    <br>

    <div class="mb-3">
        <label for="disabledTextInput" class="form-label"><strong>Email:</strong></label>
        <input type="email" id="disabledTextInput" class="form-control" placeholder="<?php echo $_SESSION['email'];?>" style="border-color: #31363B;">
      </div>

      
    
    
  </fieldset>
</form>

       </div>
        </div>
        </div>
   
   
             <div class="container2" >
       
       
               <div class="card" id="card2" style="margin-left: 10%;">
          
                <div class="card-header">
                Dados do Usuario
                </div>
                <div class="box3">
          
               <img src="./image/perfil.png" alt="" width="50%" style="border-radius: 100%;">
          
              <h2><?php echo $stt[0]['nome'];?></h2>
              <strong><p><?php echo $_SESSION['email'];?></p></strong>
              </div>
            </div>
        </div>
    </div>
      </div>

     
  <div id="Paris" class="tabcontent">
    <div class="d-flex flex-column wrapper">
    <?php
    $statement = $managers->mostraPedido($_SESSION['email']);
    foreach($statement as $statement){
    ?>

      <main class="flex-fill">
          <div class="container">
             
              <ul class="list-group mb-3"  style="width: 90%;">
                  <li class="list-group-item py-3">
                      <div class="row g-3">
                          <div class="col-4 col-md-3 col-lg-2">
                              <a href="#">
                                  <img src="../produto/img/<?php echo $statement['img'];?>" class="img-thumbnail">
                              </a>
                          </div>
                          <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center" >
                              <h4 >
                                  <b ><a href="#" class="text-decoration-none text-danger"><?php echo $statement['nome'];?></a></b>
                              </h4>
                          </div>
                          <div
                              class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                              <div class="input-group">
                                
                                  <input type="text" class="form-control text-center border-dark" value="1">
                              
     
                              </div>
                              <div class="text-end mt-2">
                                  <span class="text-dark">Valor Item: <?php echo $statement['preco'];?></span>
                              </div>
                          </div>
                      </div>
                  </li>
                 
              </ul>
          </div>
      </main>

    <?php
    }
?>

  </div>
  

  </div>
  
  


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="tab.js"></script>
<script src="perfil.js"></script>
</html>