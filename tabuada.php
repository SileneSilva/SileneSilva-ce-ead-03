<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>
      Tabuada Gerada!
    </title>
    <link rel='stylesheet'
          type='text/css'
          href='estiloSaida.css'>
    <?php    
      //Obtendo valores do formulário
      foreach ($_POST as $chave => $valor)
        $$chave = $valor;    
    ?>
  </head>
  <body>
    <?php      
      
      for ($i = $tabuadaI; $i <= $tabuadaF; $i++) {
        
        echo "<div class='tabuada'>" .
             "<table border='1'>".
             "  <caption>Tabuada do " . $i . "</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Fórmula</th>" .
             "    <th>Valor</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $nInicio; $j <= $nFim; $j++) {
          
          echo "<tr>" . 
               "  <td>" . $i . " x " . $j . "</td>" .
               "  <td>" . ($i * $j) . "</td>" .
               "</tr>";          
        } 

        echo "  </tbody>" .
             " </table>" .
             " </div>";
      }
      
    ?>
  </body>
</html>