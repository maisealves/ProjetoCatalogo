<!DOCTYPE html>
  <html>
    <head>
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
            <label class="brand-logo center">Cadastrar Produto</label>
            <a href="dashboard_adm.html" class="waves-effect waves-light" style="margin-left: 8%;"><i class="large material-icons">keyboard_backspace</i>
            </a>         
          </div>
      </nav>

      <div class="row container center" ">
        <div style="margin-top: 1%;">
          <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="https://images.pexels.com/photos/3637782/pexels-photo-3637782.jpeg?cs=srgb&dl=madeira-construcao-regua-vintage-3637782.jpg&fm=jpg"></a>
            <a class="carousel-item" href="#two!"><img src="https://images.pexels.com/photos/834892/pexels-photo-834892.jpeg?cs=srgb&dl=atividade-broca-concepcao-de-madeira-834892.jpg&fm=jpg"></a>
            <a class="carousel-item" href="#three!"><img src="https://images.pexels.com/photos/1094770/pexels-photo-1094770.jpeg?cs=srgb&dl=aco-ambiente-de-trabalho-aparelhos-atividade-1094770.jpg&fm=jpg"></a>
            <a class="carousel-item" href="#four!"><img src="https://images.pexels.com/photos/1409221/pexels-photo-1409221.jpeg?cs=srgb&dl=afiado-agulhas-alfinetes-aparelhos-1409221.jpg&fm=jpg"></a>
            
          </div>
          <div>
            <i class="small material-icons">add_a_photo</i>
          </div>
        </div>
            
      </div>

      <div class="row container" style="border-top: 1px solid black;">
      <form class="s12" method="POST" action="php_action/cadastra_produto.php" id="formCadastraproduto">

        <div class="input-field col s12">
            <input placeholder="Nome do Produto" id="nome_produto" type="text" class="validate" name="nome_produto">
            <label for="nome_produto">Nome do Produto</label>
          </div>

        <div class="input-field col s12">
            <input placeholder="Modelo do Produto" id="modelo_produto" type="text" class="validate" name="modelo_produto">
            <label for="modelo_produto">Modelo do Produto</label>
         </div>
        
         <div class="input-field col s12">
            <input placeholder="Ano do Produto" id="ano_produto" type="text" class="validate" name="ano_produto">
            <label for="ano_produto">Ano do Produto</label>
         </div>
        
         <div class="input-field col s12">
            <textarea placeholder="Especificações do Produto" class="materialize-textarea" name="especificacoes_produto"></textarea>
          <label for="especificacoes_produto">Especificações do Produto</label>
         </div>
        
       
        
        <div class="divider black" style="margin-top: 1%; margin-bottom: 2%;"></div>
        <div class="col s12 center">
          <button class="btn waves-effect waves-light  blue darken-4 " name = "btn-cadastrar"  type="submit" name="action" style="border-radius: 4px;">Cadastrar
          </button>&nbsp;&nbsp;
        </div>
      </form><br>
      
    </div>
      

      <!--Jquery-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
         $(document).ready(function(){
         $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
            });
         });
      </script>
    </body>
  </html>