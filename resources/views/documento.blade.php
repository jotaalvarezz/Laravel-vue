<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>PDF</title>
    <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:black;
        }
    </style>
</head>
<body>
    <h1><center>Frutas del catalogo</center></h1>
        <hr>
        <div class="contenido">
            <div class="row">
                <?php foreach ($frutas as $fruta) : ?>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$fruta->imagen}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <span>{{$fruta->amount}}</span>
                            <p class="card-text">{{$fruta->description}}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                <?php endforeach ?>
            </div>
            
        </div>
</body>
</html>