<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 8</title>
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
    <!--BOOSTRAP-->
    <link rel="stylesheet" href="../../../style.css?v=2.2">
</head>
<body>

<header class="navbar">
    <nav class="container-fluid d-flex rounded-bg shadow-lg">

    <div class=" d-flex justify-content-start ">
        <a class="navbar-brand" href="../../../index.html"><img src="https://cdn-icons-png.flaticon.com/512/8216/8216616.png" alt=""></a>

        <div class="dropdown me-2 mt-1"> 
          <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Practico 1
          </button>

          <ul class="dropdown-menu" role="menu">
            <li><a class="dropdown-item" href="../../../tp1/ejercicio1/vista/form.php" id="ejercicio1.php">ejercicio 1</a></li>
            <li><a class="dropdown-item" href="../../../tp1/ejercicio2/vista/form.php">ejercicio 2</a></li>
            <li><a class="dropdown-item" href="../../../tp1/ejercicio3/vista/form.php">ejercicio 3</a></li>
            <li><a class="dropdown-item" href="../../../tp1/ejercicio4/vista/form.php">ejercicio 4</a></li>
            <li><a class="dropdown-item" href="../../../tp1/ejercicio5/vista/form.php">ejercicio 5</a></li>
            <li><a class="dropdown-item" href="../../../tp1/ejercicio6/vista/form.php">ejercicio 6</a></li>
            <li><a class="dropdown-item" href="../../../tp1/ejercicio7/vista/form.php">ejercicio 7</a></li>
            <li><a class="dropdown-item" href="../../../tp1/ejercicio8/vista/form.php">ejercicio 8</a></li>
          </ul>

        </div>

        <div class="dropdown me-2 mt-1">

          <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Practico 2
          </button>

          <ul class="dropdown-menu" role="menu">
            <li><a class="dropdown-item" href="../../../tp2/ejercicio3/vista/form.php">ejercicio 1</a></li>
            <li><a class="dropdown-item" href="../../../tp2/ejercicio4/vista/form.php">ejercicio 2</a></li>
          </ul>

        </div>

        <div class="dropdown me-2 mt-1">

          <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Practico 3
          </button>

           <ul class="dropdown-menu" role="menu">
            <li><a class="dropdown-item" href="../../../tp3/ejercicio1/vista/form.php">ejercicio 1</a></li>
            <li><a class="dropdown-item" href="../../../tp3/ejercicio2/vista/form.php">ejercicio 2</a></li>
          </ul>

        </div>

      </div>
      <div class="justify-content-end m-1 p-2">
        <img src="../../../imagenes/pedco.jpg" alt="">
        <img src="../../../imagenes/githubLogo.png" alt="">
      </div>

    </nav>

  </header>

  <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

    <div class="container h-100 shadow-lg md  p-3 rounded">
    <h1 class="text-info bg-light col-md-12 rounded p-3">Cinem@s</h1>
     
    <form action="../action/formAction.php" method="post" enctype="multipart/form-data" id="formularioPelicula">
      <div class="row">

        <div class="col-md-6">
          <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
          </div>
          
          <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" name="director" id="director" class="form-control" required>
          </div>
          
          <div class="mb-3">
            <label for="produccion" class="form-label">Producción</label>
            <input type="text" name="produccion" id="produccion" class="form-control" required>
          </div>
          
          <div class="mb-3">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
          </div>
          <div class="mb-3  ancholabel">
            <label for="duracion" class="form-label">Duración</label>
            <input type="duracion" name="duracion" id="duracion" class="form-control" required maxlength="3" required>
          </div>
             <div class="invalid-feedback">
                Por favor seleccione un género.
            </div>
        </div>
        <style> 
           .ancholabel {
      width: 70px;
    }
        </style>
        
       
        <div class="col-md-6">
          
          
          <div class="mb-3">
            <label for="actores" class="form-label">Actores</label>
            <input type="text" name="actores" id="actores" class="form-control" required>
          </div>
          
          <div class="mb-3">
            <label for="guion" class="form-label">Guion</label>
            <input type="text" name="guion" id="guion" class="form-control" required>
            <div class="invalid-feedback">
                Este campo es obligatorio.
            </div>
          </div>
          
          <div class="mb-3 w-25">
            <label for="anio" class="form-label " >Año</label>
            <input type="number" name="anio" id="anio" class="form-control" maxlength="4" required>
            <div class="invalid-feedback">
                Este campo es obligatorio.
            </div>
          </div>
          
                <div class="mb-3">
          <label for="genero" class="form-label">Género</label>
          <select name="genero" id="genero" class="form-control" required>
              <option value="">Seleccione un género</option>
              <option value="comedia">Comedia</option>
              <option value="drama">Drama</option>
              <option value="accion">Acción</option>
              <option value="terror">Terror</option>
              <option value="romanticas">Románticas</option>
              <option value="suspenso">Suspenso</option>
          </select>
          <div class="invalid-feedback">
              Por favor, seleccione un género.
          </div>
      </div>
          <div class="mb-3">
        <label class="form-label">Restricción de Edad</label>
        
        <div class="form-check">
          <input type="radio" name="edad" id="edad1" value="Todos los publicos" class="form-check-input">
          <label for="edad1" class="form-check-label">Todos los publicos.</label>
        </div>
        
        <div class="form-check">
          <input type="radio" name="edad" id="edad2" value="Mayores de 7 años" class="form-check-input" required>
          <label for="edad2" class="form-check-label">Mayores de 7 años. </label>
          <div class="invalid-feedback">
                Este campo es obligatorio.
            </div>
        </div>
        
        <div class="form-check">
          <input type="radio" name="edad" id="edad3" value="Mayores de 18 años." class="form-check-input">
          <label for="edad3" class="form-check-label">Mayores de 18 años.</label>
          <div class="invalid-feedback">
                Este campo es obligatorio.
          </div>
        </div>
      </div>
    </div>
</div>
        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea name="sinopsis" id="sinopsis" class="form-control" rows="4" required></textarea>
            <div class="invalid-feedback">
                Este campo es obligatorio.
            </div>
          </div>
          <style>
            .altura {
                height: 120px;
            }
          </style>
      
      <div class="d-flex justify-content-end m-4">

        <input type="file" name="archive" id="archive" class="btn btn-primary"/>
        <button type="submit" class="btn btn-primary m-1">Enviar</button>
        <button type="reset" class="btn btn-secondary m-1">Resetear</button>

      </div>

    </form>

    </div>

  </main>
  
  <footer class="container-fluid d-flex justify-content-between bg-dark shadow-lg ">

    <div class="row text-light">
      <ul class="" style="list-style-type: none; padding-left: 60px; margin-top:14% ; margin-bottom:14%;">
        <li>Diego Rios</li>
        <li>Miguel Soto</li>
        <li>Juan Cruz Geslowski </li>
        <li>Valentin Bustos Villar </li>

      </ul>
    </div>

    <div class="row" style="margin-right: 50px; margin-top:10px;">
      <div class="col">
        <p class="text-light mt-5">Programacion Web Dinamica 2024 @</p>
      </div>

    </div>
  </footer>
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <script src="../vista/assets/validar_jquery.js"></script>

  
</body>
</html>