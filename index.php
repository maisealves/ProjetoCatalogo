

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link  rel="stylesheet" href="css/materialize.min.css"  />
      <link rel="stylesheet" href="css/estilo.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script language="javascript" type="text/javascript">
        $(document).ready(function(){
          $('#btn_login').click(function(){
            alert('clicado');
          });
        });
      </script>

    </head>
    <body class ="bglogin">
      <div class="row" >
        <div class="col s12 m4 offset-m4">
        <div >
          <img class="imglogin" src="img/Agromakmaquinas.png">
        </div>
    <form method="POST" action="login.php" id="login"> 
      <div class="form-container" > 
          <div class="card-content" >
            <div class="form-field" >
              <label for="username">Usuário</label>
              <input type="text" id="username" name="usuario">
            </div>

            <div class="form-field">
              <label for="password">Senha</label>
              <input type="password" id="password" name="senha">
            </div>

            <div class="form-field">
              <button class="btn-large waves-effect waves-dark" style="width:100%; background-color: #1c0ad1;" id = "btn_login">Login</button>
            </div>
            <br/>
          </div>
        </div>
        </div>
      </div>
     

    </form> 

      <script src = "https://code.jquery-1.12.0.min.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>