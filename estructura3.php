<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Estructuras de Control</title>
  </head>
  <body>
  <div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
        <h3>Estructura SWITCH</h3>
            <hr>
            <?php 
            $dia = 6;
            switch ($dia) {
                case 1:
                    echo "Lunes";
                    break;
                    case 2:
                        echo "Martes";
                        break;
                        case 3:
                            echo "Miercoles";
                            break;
                            case 4:
                                echo "Jueves";
                                break;
                                case 5:
                                    echo "Viernes";
                                    break;
                                    case 6:
                                        echo "Sabado";
                                        break;
                                        case 7:
                                            echo "Domingo";
                                            break;
                                    default:
                                            echo "El valor no es valido";
            }
            ?>

        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>