<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Raleway&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.ls"></script>

    <title>TALLER CALCULADORA DE PHP</title>
</head> 
<body>
    <div class="container">
        <h1>calculadora PHP</h1>
        <hr>
        <form method="post">
            <label>Numero 1</label>
            <input type="number" max=10000 min=0 name="numero1" placeholder="0"
required autofocus >
             <label>Numero 2</label>
             <input type="number" max=10000 min=0  placeholder="0" name="numero2"
required >
             <hr>
             <input type="radio" class="from-check-input" name="opcion" value="sumar">
required > sumar
             <input type="radio" class="from-check-input" name="opcion" value="restar">
required> restar
             <input type="radio" class="from-check-input" name="opcion" 
value="multiplicar" required>Multiplicar
             <input type="radio" class="from-check-input" name="opcion"
value="division"required>Division
             <input type="radio" class="from-check-input" name="opcion"
value="potenciacion"required>Potenciacion
             <input type="radio" class="from-check-input" name="opcion"
value="concatenacion"required>concatenacion
             <hr>
            <input type="submit"class="btn btn-success w-25" value="Enviar">
            <input type="reset"class="btn btn-danger w-25" value="Limpiar">
        </form>
    </div>
    <div class="container">
        <?php
          <if if ($_POST){
                function sumar(){
                echo "La suma de lo numero es: ".
($_POST['numero1']+$_POST['numero2']);
            }
        function Restar (){
            echo "la resta de los numeros es:".($_POST['numero1']-$_POST[numero2]);
        } 
        function Multiplicar(){
            echo "la multiplicacion de los numero es:".
($_POST['numero1']*$_POST[numero2]);
    } 
    function Division(){
        if ($_POST['numero2']==0)
            $d="Error: division por 0";
        else
         $d=$_POST ['n[umero1']/$_POST['numero2'];
         echo "la division de los numeros es:".$d;
    }
    function Potenciacion(){
        echo "la potenciacion de los numeros es:".
($_POST['numero1'].$_POST['numero2']);        
    }
    switch ($_POST['opcion']){
        case 'sumar':
          sumar();
          break;
        case 'restar':
           Restar();
           break;
        case 'multiplicar':
           Multiplicar();
           break;
        case 'division':
           Division();
           break;
        case 'potenciacion':
           potenciacion();
           break;
        case 'concatenacion'
           concatenacion();
           break;
        default:
            echo "Error en la opcion seleccionada";
            break;
    }    
        ?>
    </div>
</body>  
</html>