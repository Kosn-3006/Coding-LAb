<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login</title>
    <style>
        *{
            /*border: 1px solid Red;*/
        }
        .grid{
            margin-top: 114px;
            margin-bottom: 50px;
            display: grid;
            grid-template-rows: 1fr  ;
            grid-template-columns: 1fr ;
            background-color: white;
            margin-right: 960px;
            height:478px ;
            border:1px solid dimgrey;
        }
        .grid > div{
            background-color: white;
            text-align: center;
        }
        p{
            border: 1px solid gray;

        }
        h3{
            text-align:left;
        }
        .bg-login{
            background-image:url("picture/login.png");
            background-size: cover;
            background-repeat: no-repeat;
        }

    </style>
</head>
<body>
    <header><a href="WebPage.html"><img src="picture/rent.png" alt="avis_logo" class="mx-4 my-2" style="width: 80px;"></a></header>
    <hr>
    <main>
        <div class="bg-login">
            <br>
            <div class=" bg-light col-4 m-5" style="padding: 50px">
                <hr>
                <h2 style="font-family:Times New Roman; color:dimgrey "> <strong> CAR RENTAL </strong></h2>
                <hr>
                <br>
                <h3 style="font-family:Times New Roman; color: dimgrey"> <strong> WELCOME </strong></h3>
                <br>
                <h3 style="font-family:Times New Roman; color: dimgrey "> <strong> ДОБРО ПОЖАЛОВАТЬ </strong></h3>
                <br>
                <form action="webpage.html" method="get">
                    <div><input class="form-control m-1" type="submit" value="Enter"></div>
                    <div><input class="form-control m-1" type="submit" value="Войти"></div>
                </form>
            </div>
            <br>
        </div>
    </main>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>
</html>
