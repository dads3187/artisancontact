<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
    <title>Contact</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hind&family=Mulish:wght@600&display=swap" rel="stylesheet">
        <!--toujour mettre link bostraps et script à la fin pour valider les modification avec le site-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <header>
        <?php
        //connexion dbb
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="artisan-php";

        //créer connexion dbb
        $conn=new mysqli("localhost","root","root","artisan-php");

        //vérifier la connexion
        if($conn->connect_error){
            die("echec de la connexion:" .$conn->connect_error);
        }

        //récupérer les données formulaires
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        //préparer et éxécuter requête ,insertion données

        $sql="INSERT INTO Contact (name,email,message) VALUES ('$name','$email','$message')";

        if ($conn->query($sql)=== TRUE) {
            echo "votre message a bien été envoyé avec succés ,merci.";
        }else{
            echo "Une erreur s'est produite lors de l'envoi de votre message ! " . $conn->error;
        }
        
        //fermer la connexion dbb
        $conn->close();
        ?>
        
        <nav class="navbar-expand-md fixed-top">
            <div class="container">
                <!--marque+ lien -->
                <a href="index.php">
                    <h4>ARTISANS</h4>
                </a>
                <!--bouton-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <!--menu-->
            <div id="navSupportedContent" class="collapse navbar-collapse">


                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                    <a href="index.php" class="nav-link active">Accueil</a>
                    </li >
                    <li class="nav-item">
                    <a href="about.php" class="nav-link">A propos</a>
                    </li>
                    <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>

                <!--icone recherche-->
                <form role="search">
                    <input type="search" placeholder="Mots clés" class="">
                    <button type="submit" class="btn btn-outline-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                        viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </form>
            </div>
            </div>


        </nav>

    </header> 
    
        <main class="container-fluid">
            <section class="row bg-dark text-danger overlay align-items-center mask1" id="presentation-about">
                <h1 class="text-center">Contactez-nous</h1>
            </section>
            
           
            <section class="row">
                
                <div class="col-md-4 offset-md-2 p-0">
                    <img src="img/open-space-interior-small.jpg" class="img-fluid rounded-top-pill vignette">

                </div>
                <div class="col-md-4">
                    <h2>Parlons de vous</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                        <form action="" method="POST">
<!--div class"mb-3" espacement entre chaque block (nom email et texte)-->
                            <div class="mb-3">
                                <input type="text" name="name" placeholder="Votre Nom" required class="form-control">
                            </div>

                            <div class="mb-3">
                            <input type="email" name="email" placeholder="Votre email" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <textarea placeholder="Votre message" name="message" class="form-control">   
                                </textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Envoyer" class="btn btn-primary form-control">
                            </div>
                    </form>
                </div>

            </section>
            <section class="row d-flex flex-row justify-content-center">

                <div class="col-md-3 offset-2">
                    <h5>sous-titre</h5>
                    <h4 class="mb-3">NOS OFFRES</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel vero perspiciatis sequi deleniti inventore natus labore dolores aliquam possimus voluptatibus magnam.</p>
                </div>

                <div class="col-md-3">
                    <h5>COORDONNEES</h5>
                    <p>FORMATION31</p>
                    <p>20 route de baylac</p>
                    <p>31400 TOULOUSE</p>
                    <p>Tel0561487395</p>
                    <p>e-mail:formation31@gmail.com</p>

                </div>
                <div class="col-md-3">
                    <h5>INFORMATION</h5>
                    <p>FORMATION31</p>
                    <p>20 route de baylac</p>
                    <p>31400 TOULOUSE</p>
                    <p>Tel:05.61.48.73.95</p>
                    <p>e-mail:formation31@gmail.com</p>

                </div>

            </section>










  <section id="information" class="flex">
        <div>
            <h4> A propos </h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, neque necessitatibus, inventore nihil consequatur dolores magni itaque quaerat, sunt cupiditate ex consequuntur quisquam iure sint molestias maxime. Voluptates, reiciendis. Minus.</p>

        </div>
        <div>
            <h4>Suivez-nous</h4>

            <a href="#facebook">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="#twitter">
                <i class="bi bi-twitter-x"></i>
            </a>
            <a href="#instagram">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="pinterest">    
                <i class="bi bi-pinterest"></i>
            </a>
            
        </div>
            <div class="souscrire">

                <h4>Souscrire</h4>

                <h6>SOUSCRIRE A NOTRE NEWSLETTER</h6>

                <form action="" method="">

                    <input type="email" placeholder="votre email" required class="form-control"><br>

                    <input type="submit" value="s'abonner" class="btn btn-primary">
                </form>
            </div>
    </section>
            <footer id="copy" class="flex">
                <p>Copyright 2023 Formation 31</p>
            </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>