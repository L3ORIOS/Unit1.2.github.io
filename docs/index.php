<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unit 1.2</title>
        <meta charset="utf-8">
        <!-- Core theme CSS (includes Bootstrap)-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css">
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand">Desarrollo Web En Entorno Servidor</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" >Uniti 1.2</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        
        <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')" >
            <div class="contenido" >
                <div >
                    <img  src="./assets/php.png" alt="..." />
                    <h1 class="text-white fs-3 fw-bolder">Unit 1.2 - Introduction to PHP</h1>
                    <p class="text-white-50 mb-0">Delivery of exercices 1, 2, 3, 4, 5, 6</p>
                    <p class="text-white-50 mb-0">LEOBARDO SALVADOR RÍOS SUÁREZ</p>
                </div>
            </div>
        </header>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                    <?php
                        echo"<br /><p>**********exercise 1**********</p><br />";
                        $int = 3;
                        $float = 7.2;
                        $hexa = 0x0C;
                        $result = $int + $float + $hexa;
                        echo "<p>";
                        echo"The sum of 3 + 7.2 + 0x0C is... ".$result;
                        echo "</p>";

                        echo"<br /><p>**********exercise 2**********</p><br />";
                        $Mark = 10;
                        define("SUBJECT","DWES");
                        $DataTime = date('m-d-Y h:i:s:a',time());
                        echo "<p>";
                        echo "I hope to get a ".$Mark." in ".SUBJECT."( ".$DataTime." )";
                        echo "</p>";

                        echo"<br /><p>**********exercise 3**********</p><br />";
                        include('functions.php');
                        spanishDate();
                        factorial(5);

                        echo"<br /><p>**********exercise 4**********</p><br />";
                        multiplication(10);

                        echo"<br /><p>**********exercise 5**********</p><br />";
                        pricelt(500);

                        echo"<br /><p>**********exercise 6**********</p><br />";
                        phpinfo();

                     ?>   
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Leobardo Salvador Ríos Suárez</p></div>
            <br>
            <div class="contenido">
                <div>
                    <img class="imgIESPERE" src="./assets/descarga.png" alt="..." >
                </div>
            </div>
            
        </footer>
       
        
        
    </body>
</html>

