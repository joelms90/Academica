<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.back{ 
  background-image:url("/img/welcome.jpg"); 
  background-size: cover;
  background-repeat: no-repeat;
}
.shadow{ 
  background: linear-gradient(
      rgba(0, 0, 0, 0.4),
      rgba(0, 0, 0, 0.4)
    );
}

</style>
    <title>Tareas</title>
  </head>
  <body class="back ">
    <div class="container-fluid shadow pb-5 ">
      <div class="mt-5">
        <h1 class="display-2 text-white">
          <p class="text-justify text-center ">
          Bienvenido  a la Aplicación <br>  de Tareas 
          </p>
        </h1>
      </div>
      <div class="text-center mt-5">
       
        <a class="btn btn-primary btn-lg mr-5" href="{{ route('login') }}">Inicio de Sesión
        </a>
        <a class="btn btn-secondary btn-lg ml-5" href="{{ route('register') }}">
        Registro
        </a>
      </div>
      <div class="mt-5">
        <h3 class="display-5 text-white">
          <p class="text-justify text-center ">
          Para comenzar<br> inicia sessión o regístrate
          </p>
        </h3>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>