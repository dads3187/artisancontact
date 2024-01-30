<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <!--affichage a la taille de l'écran-->

    <meta name="viewport" content="width-device-width,initial-scale=1,user-scalable=0">


    <title>projet 3</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind&family=Mulish:wght@600&display=swap" rel="stylesheet">
 <!--toujour mettre link bostraps et script à la fin pour valider les modification avec le site-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


        <!--mettre toujour c'est lien quand on fait les css pour faire le lien-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
    
    <header class="flex">
        <h4>ARTISANS</h4>

        <nav>
            <ul class="nav nav-pills justify-content-center">
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
        </nav>

        <div>Icon</div>


    </header>

    <section id="slider" class="flex overlay">
            <h1>Artisans d'ici et d'ailleurs</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae deserunt sed ad. </p>

                <button class="btn btn-primary">Rechercher un produit</button>

    </section>

    <section id="presentation" class="flex">
        <div>
            <h4>Présentation</h4>
            <h3>L'innovation est notre passion</h3>
            <button class="btn btn-primary" >Contact</button>
        </div>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab labore odit perspiciatis fuga animi iusto alias magni tenetur, similique ipsa, distinctio dicta iure dolores neque consequuntur ad quo voluptates tempore.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

        </div> 
    </section>

    <section id="produits" class="flex">
        <article>
            <img src="img/interior-with-antuques-small.jpg">
            <h3>Produit n°1</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </article>

        <article>
            <img src="img/jewelry-and-bijouterie-small.jpg">
            <h3>Produit n°2</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </article>

        <article>
            <img src="img/leather-crafting-tools-small.jpg">
            <h3>Produit n°3</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </article>

        <article>
            <img src="img/close-up-of-male-hand-of-potter-examining-clay-cup-small.jpg">
            <h3>Produit n°4</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </article>

        <article>
            <img src="img/ceramic-craft-ware-small.jpg">
            <h3>Produit n°5</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </article>

        <article>
            <img src="img/close-up-interior-of-modern-fashion-showroom-small.jpg">
            <h3>Produit n°6</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </article>

    </section>

    <section id="pourquoi">

        <h4>POURQUOI NOUS CHOISIR</h4>

        <div id="article" class="flex">
            <article>
            <img src="img/Icon-Idea-osj6biskjmfmkqdbepwnbc3cuylf6pparnzforpngk.png">
            <h3>Icone n°1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>

            <article>
            <img src="img/Icon-quality-osj6zgqkmp7kb5lalkhjbsl1lal095r5q67ori7mys.png">
            <h3>Icone n°2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>

            <article>
            <img src="img/Icon-speed-osj726hsdgxdulnaqqqqj3wzdd76hoj8rm26oa6ozo.png">
            <h3>Icone n°3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>

            <article>
            <img src="img/Icon-graphic-osj79c1ke2py7r96yu2iiaxa4xxr2qxp30t863ktms.png">
            <h3>Icone n°4</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>

            <article>
            <img src="img/Icon-world-osj7b22wx52vi0r2wkvw2v9pcdfz6rrzbjv9ud0u84.png">
            <h3>Icone n°5</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>

            <article>
            <img src="img/Icon-packaging-osj7cnf2i19d68fslro4systkvld8b3lvfnw48ntok.png">
            <h3>Icone n°6</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>
        </div>

    </section>

    <section id="concept" class="flex">

        <div>
            <img src="img/woman-rolling-out-material-for-craft-small.jpg" alt="">

        </div>

        <div>
            <h4>Parlons du concept</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, pariatur. Ad quam ab iusto molestias suscipit nisi labore cumque magni doloribus eos ipsam quidem excepturi et, debitis in inventore vero.</p>
            <button class="btn btn-primary">Details</button>
        </div>
    </section>

    <section id="deco" class="flex ">
        <div>
            <img src="img/paper-waste-for-recycle-small-768x1024.jpg">
        </div>
        <div class="align-self-center">
            <h4>Lorem ipsum .</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui libero, assumenda dolor explicabo tenetur quisquam sunt distinctio nemo accusantium, quod porro lorem djfdmfjkfmjd elfkezpkfeop vefekf,eklf efkef,kefle. </p>
        </div>
        <div>
            <img src="img/shopping-leather-handmade-crafts-shop-bags-craftsmanship-small-768x1024.jpg"
        </div>

    </section>

    <section id="témoignage" class="overlay">
        <h4>Les témoignages</h4>
        <div class="flex">
            <article>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, quisquam?</p>
                <div class="flex1">
                        <div class="photo">
                        <img src="img/testimonial-1.jpg">
                        </div>
                        <div class="identite">
                            <h5>Nom Prenom</h5>
                            <h6>Métier</h6>
                        </div>
                </div>
            </article>

            <article>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, quisquam?</p>
                <div class="flex1">
                    <div class="photo">
                        <img src="img/testimonial-2.jpg">
                    </div>
                    <div class="identite">
                        <h5>Nom Prenom</h5>
                        <h6>Métier</h6>
                    </div>
                </div>

            </article>

            <article>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, quisquam?</p>
                <div class="flex1">
                        <div class="photo">
                            <img src="img/testimonial-1.jpg">
                        </div>
                        <div class="identite">
                            <h5>Nom Prenom</h5>
                            <h6>Métier</h6>
                        </div>
                </div>

            </article>

            <article>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, quisquam?</p>
                <div class="flex1">
                        <div class="photo">
                            <img src="img/testimonial-2.jpg">
                        </div>
                        <div class="identite">
                            <h5>Nom Prenom</h5>
                            <h6>Métier</h6>
                        </div>
                </div>

            </article>
        </div>
    </section>

    <section id="Contact" class="flex">
        <div>
            <h4>Lorem, ipsum dolor sit amet.</h4>

            <p>LABORE ET DOLORE NOSTRUM</p>

        </div>
        <div class="btn-contact">
            <button href="contact.html" class="btn btn-primary">contact</button>
    
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