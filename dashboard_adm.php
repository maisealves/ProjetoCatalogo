

<!DOCTYPE html>
  <html>
    <head> 
      <meta charset="UTF-8"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link  rel="stylesheet" href="css/materialize.min.css" />
      <link rel="stylesheet" href="css/estilo.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      
<!--Menu responsivo-->
      <nav>
        <div class="nav-wrapper blue darken-4">
          <label class="brand-logo center ">Adminstrador</label>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="dashboard_cadastrar.html">Cadastrar Produto</a></li>
            <li><a href="dashboard_user.html">Exibição de Usuário</a></li>
            <li><a href="logout.php">Sair</a></li>
          </ul>
          <ul class="side-nav blue darken-4" id="mobile-demo">
            <li><a href="#" class="white-text">Cadastrar Produto</a></li>
            <li><a href="dashboard_user.html" class="white-text">Exibição de Usuário</a></li>
            <li><a href="index.php" class="white-text">Sair</a></li>
        </ul>
      </div>
    </nav>
      <br>

<!--Modal pesquisa avançada-->
<!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger right blue darken-4" href="#modal1">      <i class="material-icons">filter_list</i>
    </a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
            <input placeholder="Informe o nome do produto" id="first_name" type="text" class="validate">
            <label for="first_name">Nome do produto</label>
            </div>
          </div>
      
          <label>Selecionar o tipo de equipamento</label>
          <select class="browser-default">
            <option value="" disabled selected>Escolha o equipamento</option>
            <option value="1">Furadeira</option>
            <option value="2">Machado</option>
            <option value="3">Facão</option>
          </select><br>

          <label>Selecionar o modelo do equipamento</label>
          <select class="browser-default">
            <option value="" disabled selected>Escolha o modelo</option>
            <option value="1">Ford</option>
            <option value="2">Shell</option>
            <option value="3">Optimiun</option>
            </select>
          <br>

          <label>Selecionar a marca do equipamento</label>
          <select class="browser-default">
            <option value="" disabled selected>Escolha a marca</option>
            <option value="1">Ford</option>
            <option value="2">Shell</option>
            <option value="3">Optimiun</option>
          </select>
        </form>
      </div>

    </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Pesquisar</a>
        </div>
  </div> <br><br><br>

<!--Pesquisa-->
    <div class="row">
      <form class="col s12">
        <div class="row container">
          <div class="input-field col s9">
            <input placeholder="Informe o nome do produto.." id="first_name" type="text" class="validate">
            <label for="first_name">Campo de busca</label>
          </div><br>
          <div class="col s3 ">
            <button class="btn waves-effect waves-light blue darken-4" type="submit" name="action" style="border-radius: 8px !important;">
            <i class="material-icons center" style="font-size: 18pt;">search</i>
            </button>
          </div>
        </div>
      </form>
    </div>
   
<!--Itens-->
    <div class="divider"></div>
      <div class=" section row">
      <img src="https://images.pexels.com/photos/834892/pexels-photo-834892.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="150px" height="150px" style="border-radius: 25px;" class="col s4 m3 l2">
      <h5 class="col s7"><span>&nbsp;</span>Furadeira</h5>
      <p class="col s8"><span>Modelo: &nbsp;</span>Skill VX8</p>
      <p class="col s8"><span>Fabricante: &nbsp;</span>Skill</p>
      <a href="#" class="col s3 right">Ver mais..</a>
    </div>
     <div class="divider"></div>
      <div class=" section row">
      <img src="https://images.pexels.com/photos/834892/pexels-photo-834892.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="150px" height="150px" style="border-radius: 25px;" class="col s4 m3 l2">
      <h5 class="col s7"><span>&nbsp;</span>Furadeira</h5>
      <p class="col s8"><span>Modelo: &nbsp;</span>Skill VX8</p>
      <p class="col s8"><span>Fabricante: &nbsp;</span>Skill</p>
      <a href="#" class="col s3 right">Ver mais..</a>
    </div>
     <div class="divider"></div>
      <div class=" section row">
      <img src="https://images.pexels.com/photos/834892/pexels-photo-834892.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="150px" height="150px" style="border-radius: 25px;" class="col s4 m3 l2">
      <h5 class="col s7"><span>&nbsp;</span>Furadeira</h5>
      <p class="col s8"><span>Modelo: &nbsp;</span>Skill VX8</p>
      <p class="col s8"><span>Fabricante: &nbsp;</span>Skill</p>
      <a href="#" class="col s3 right">Ver mais..</a>
    </div>
     <div class="divider"></div>
      <div class=" section row">
      <img src="https://images.pexels.com/photos/834892/pexels-photo-834892.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="150px" height="150px" style="border-radius: 25px;" class="col s4 m3 l2">
      <h5 class="col s7"><span>&nbsp;</span>Furadeira</h5>
      <p class="col s8"><span>Modelo: &nbsp;</span>Skill VX8</p>
      <p class="col s8"><span>Fabricante: &nbsp;</span>Skill</p>
      <a href="#" class="col s3 right">Ver mais..</a>
    </div>
     
   
 



      <!--Jquery-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
         $(document).ready(function(){
          $(".button-collapse").sideNav();
          $('.modal').modal();
         });
      </script>
    </body>
  </html>