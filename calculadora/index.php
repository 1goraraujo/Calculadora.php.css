<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Calculadora</title>
  <!-- Chamada do Bootstrap via CDN -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Carregamento da fonte Share Tech Mono do Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap">
  <!-- Arquivo CSS personalizado -->
  <link rel="stylesheet" href="style.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
      <h1>Calculadora</h1>
      <div id="calculadora">

        <form action="" method="POST">
          <div id="display">
            <div id="resultados">
              Resultado:
              <?php
                  if(isset($_POST['acao'])):
                  $n1 = str_replace(',', '.', $_POST['n1']);
                  $n2 = str_replace(',', '.', $_POST['n2']);
                  $tipo = $_POST['tipo'];

                    if($tipo === '+'):
                      $calcular = $n1+$n2;
                    elseif($tipo === '-'):
                      $calcular = $n1-$n2;
                    elseif($tipo === '*'):
                      $calcular = $n1*$n2;
                    elseif($tipo === '/'):
                     $calcular = $n1/$n2;
                  endif;
                     $calcular = str_replace('.',',',$calcular);
                    echo "$n1 $tipo $n2 + $calcular";
                endif;

              ?>

            </div>
          </div>
          <div id="keyboard">
            <div class="row">
              <div class="col-12">
                <input type="text" name="n1" class="form-control mb-3" placeholder="Digite um numero:" required>
              </div>
           
            <div class="col-12">
              <select class="form-select mb-3 bg-info" name="tipo" required>
                <option selected>Selecione um operador</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
              </select>
            </div>
            <div class="col-12">
              <input type="text" name="n2" class="form-control mb-3" placeholder="Digite um numero:" required>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-danger" name="acao">=</button>
            </div>
           </div>
          </div>
        </form>
      </div>
    </div>
</body>
</html>
