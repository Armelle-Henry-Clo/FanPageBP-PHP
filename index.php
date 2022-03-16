<?php require_once 'inc/header.php';
// debug($_SESSION);
;?>


    <header>
        <!----navigation----->        
        <nav>
                <ul>
                    <li> <a href="#">Accueil</a></li>
                    <li> <a href="#album">Albums</a></li>
                    <li> <a href="#film">Films</a></li>
                    <li> <a href="#concert">Concert</a></li>
                    <li> <a href="#shop">Boutique</a></li>
                    <li> <a href="#forum">Forum</a></li>
                    <li> <a href="#contact">Mon Compte</a></li>
                </ul>
        </nav>

        <h1>BLACK PINK</h1>
   
    </header>



    <main class="container mx-auto">
        <!---Sections contenant des articles ----------->
            <section class="flex mx-auto">
                    <article class="col-xs-3">
                        <h3>Lisa</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia porro voluptatem autem ipsam modi! Ullam assumenda vero laborum quis! Dolore fugiat asperiores commodi vel necessitatibus distinctio sed esse, sectetur adipisicing elit. Ipsa rerum asperiores dolore dignissimos laboriosam perferendis, blanditiis quo aperiam a, ea molestiae voluptates obcaecati. Minus ipsam, deleniti numquam ipsum hic perferendis. </p>
                    </article>
                    <article class="col-xs-3">
                        <h3>Jisoo</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis tempore vitae quidem libero, aspernatur ipsa fuga dolore recusandae quod nemo commodi error. Rem eum, harum in non dolores ratione nam.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quam cum libero, eos inventore est incidunt quaerat quis maxime exercitationem consequatur autem vero dnsequatur iusto blanditiis inventore, quibusdam quas aperiam sunt delectus, laudantium sed in perferendis, nisi nostrum eveniet! Nobis voluptas quis asperiores quas!</p>
                    </article>
                    <article class="col-xs-3">
                        <h3>Jennie</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ut atque enim provident! Rem id, quis animi sed voluptatum doloremque quae repellendus eligendi blanditiis molestias consequatur dicta a facere numquam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cumque, laudantium quae doloribus, sed corporis officia placeat similique nulla nostrum minus veniam, quasi porro saepe perferendis tenetur fuga tempore? Quod.</p>
                    </article>
                    <article class="col-xs-3">
                        <h3>Rosé</h3> 
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ipsum, obcaecati culpa soluta rem, at similique dolorem ab ipsam repellendus hic voluptatum eaque perspiciatis? Voluptatum totam non a assumenda quos.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed veniam quod delectus maiores dolor qui illum, nobis praesentium. Excepturi doloribus harum molestias, ducimus ullam eaque maxime iste perferendis soluta quia!</p>
                    </article>                   
            </section> <hr> <br>

        <!-------------section Disques--------------------->
            <div id="album">
                <h2>ALBUMS</h2>
    <!-------------------album ----->

    <?php 
    $resultats = executeRequete("SELECT * FROM albums",array(

    ));
    $albums= $resultats->fetchAll(PDO::FETCH_ASSOC);

    foreach($albums as $album) :
    ;?>
                
            <div class="d-flex">
                <div class="card mb-3 border-dark" style="max-width: 700px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= $album['photo'];?>" alt="Photo d'album des Black Pink">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $album['title'];?></h5>
                                <p class="card-text"> <?= $album['text'];?></p><p class="card-text"><small class="text-muted">
                                <a href="<?= $album['link'];?>" target="blank"> Ecoutez maintenant</a></small></p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <?php endforeach; ?>
<!--
                <div>
                    <img class="colle" src="https://cdns.klimg.com/kapanlagi.com/p/headline/476x238/foto-blackpink-tiba-di-korea-dari-indon-723712.jpg" height="200px" width="230px" alt="BP2022"> 
                </div>
                <div>
                    <img class="img-fluid w-100 colle" src="https://lyricstranslate.com/files/styles/artist/public/9625e1856793c21e243e58d1284d28f2.jpg" alt="BPink">
                </div>
            </div> <hr> <br>
             -->

   <!------------------FILMS---------------------------->         
            <div id="film">
                <h2>FILM</h2> <br>
                <div class="film">
                    <p> Les filles du groupe coréen BLACKPINK qui a battu tous les      records évoquent leurs rêves, et les embûches trouvées sur le chemin de leur succès météorique.
                    </p> <br>
                    <div class="flex gap-3 w-100 mx-auto">
                        <img src="https://fr.web.img5.acsta.net/c_310_420/pictures/21/06/30/15/27/1247064.jpg" alt="Affiche de film"> <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo corrupti sed provident, iste libero quisquam voluptate esse non cumque perspiciatis, omnis saepe consequuntur necessitatibus nostrum odit. Quod temporibus soluta voluptatum.</p>
                    </div>
                    <div class="flex">
                        <p>
                        Nouvelle preuve que la musique dépasse les frontières et surmonte les barrières de la langue, le documentaire BLACKPINK: LIGHT UP THE SKY entre dans l'intimité des quatre membres de Blackpink, de leurs années de formation jusqu'à la consécration actuelle et leur succès international sans précédent pour un groupe de K-pop féminin.
                        </p> <br> 
                        <img class="w-50" src="https://fr.web.img6.acsta.net/c_310_420/pictures/20/09/14/11/39/3822299.jpg" alt="BP on Netflix">   
                    </div> 
                </div> <br> <br>

    <!-----------Bande -Annonce---------------------------------------------------------------------->
                <iframe class="w-100" width="700" height="500" src="https://www.youtube.com/embed/hxFf1FqCJaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> <hr> <br>
           
            <div id="concert"> 
                <h2>Concert</h2>
                <img class="w-100" src="http://just-music.fr/wp-content/uploads/2020/12/Blackpink-JustMusic.fr_.jpg" alt="TheShow"> <br> 
                <p>
                    Les Blackpink vous donnent rendez-vous pour un concert live stream diffusé sur YouTube le 27 décembre 2020 à 6h (heure française) ! « The show » sera ensuite en ligne durant toute la journée du lendemain et en rediffusions ultérieures sur la chaîne des filles pour tous les « Blinks » qui auront payé leur accès. 
                </p> 
                <iframe class="w-100" width="700" height="500" src="https://www.youtube.com/embed/-PNCVDiRm2c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br><p>Vous ne vous êtes pas réveillé(e) à temps? Pas de panique! Voici une séance de rattrapage!<a href="https://youtu.be/GXasK3_K_us" target="blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Logo_of_Blackpink.svg/1200px-Logo_of_Blackpink.svg.png" alt="Logo of Blackpink.svg" width="80px" height="20px"></a></p>
  
            </div>
            <hr>

            <div id="shop">
                <h2>LA BOUTIQUE</h2>
                <p><img class="w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Logo_of_Blackpink.svg/1200px-Logo_of_Blackpink.svg.png" alt="Logo of Blackpink.svg"></p>


<!---------------VITRINE-------------------------------->

<?php 
    $resultats = executeRequete("SELECT * FROM products",array(

    ));
    $products= $resultats->fetchAll(PDO::FETCH_ASSOC);

    foreach($products as $product) :

        // debug($product);
    ;?>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="card h-100">
                            <img src="<?= $product['photo'];?>" class="card-img-top w-100" alt="Livre">
                            <div class="card-body">
                            <h5 class="card-title"><?= $product['title'];?></h5>
                            <p class="card-text"><?= $product['text'];?></p>
                        </div>
                            <div class="card-footer">
                                <span><?= $product['price'];?>€</span>
                                <small class="text-muted"><a href="https://www.paypal.com/signin?locale.x=fr_BE">Achetez maintenant</a></small>
                            </div>
                        </div>
                
                </div>

<?php endforeach; ?>            
                        <br> <hr>
            
<!--------------------FORUM---------------------------->
        <div id="forum">
            <h2>FORUM</h2>
        
            <p class="blink"><img class="w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Logo_of_Blackpink_Fandom.svg/1200px-Logo_of_Blackpink_Fandom.svg.png" alt="Logo of Blackpink Fandom.svg"></p>

            <div class="d-flex">
                <aside> 
                    <div>

                    <?php 
    $resultats = executeRequete("SELECT * FROM forum",array(

    ));
    $forums= $resultats->fetchAll(PDO::FETCH_ASSOC);

    foreach($forums as $forum) :

        // debug($forum);
    ;?>
                        <p><?= $forum['comments'];?><br><span><?= $forum['pseudo'];?></span></p>
                      
                        <?php endforeach; ?>

                    </div>
                </aside>  
                <br>
    <!----------------------Quizz------------------------------->   
    
    
    <?php 
    $resultats = executeRequete("SELECT * FROM quizz",array(

    ));
    $quizz= $resultats->fetchAll(PDO::FETCH_ASSOC);

    
  
    ;?>
                <form action="" method="get">
                    <fieldset>
                        <legend>Quelle Blink es tu?</legend>  <br><br>
                        <label for="prefer">Quelle est ta Black Pink préférée?</label><br>

               <?php    foreach ($quizz as $quiz) :        ?>
                        <input type="radio" name="chanteuse" id="" value="<?=$quiz['chanteuse'] ;?>">
                        <label for="<?= $quiz['chanteuse'];?>"><?=$quiz['chanteuse'] ;?></label> <br> 
                        <?php endforeach; 
                        // debug($_GET);
                        ?>
                        <br>

                        <label for="feat">Quel est ton featuring préféré?</label><br><br>
                        
                        <?php    foreach ($quizz as $quiz) :         ?>
                        <input type="checkbox" name="featuring[]" id="<?=$quiz['featuring'] ;?>" value="featuring[]">
                        <label for="featuring[]"><?= $quiz['featuring'] ;?></label> <br>
                   
                        <?php endforeach; ?>        
                  <br>
                        <button type="reset" class="btn btn-dark btn-sm text-light border-secondary">Reset</button>
                        <button type="submit" class="btn btn-sm btn-dark text-light border-secondary" >
  Click
</button>
                    </fieldset>

                </form>  <hr> <br> 
            </div>
        </div>

<?php  


if(!empty($_GET['chanteuse'] && !empty($_GET['featuring']))) :  ;?>  

           <figure><blockquote class="blockquote text-center"><p>
 <?php      
 
   if($_GET['featuring'] > 1) :
    foreach ($_GET['featuring'] as $value):
    // debug($quiz);
        echo ($_GET['chanteuse'] .  ' est vraiment top dans '  . $quiz['featuring'] . '!');
        
 endforeach; endif; ?>
</p>

</blockquote>
        
        
    <img class="w-75 border border-dark border-4" src="https://k-gen.fr/wp-content/uploads/2022/01/bp-tenues-comms05.jpg" alt="Couverture des Black Pink">
    </figure>



    <?php 
            
// endif; 
endif;      
        

   // <!-----Formulaire pour contacter les artistes-->



if(!empty($_POST)):
    // debug($_POST);

    $mail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

$resultat = executeRequete("INSERT INTO user (pseudo, password, email, date_inscription) VALUES (:pseudo, :password, :email, :date_inscription)", array(
    ':pseudo' => $_POST['pseudo'],
    ':password' => $mdp,
    ':email' => $mail,
    ':date_inscription' => date('Y/m/d')
));

$message = "FELICITATIONS!!!";
mail($mail ,'Bravo!',$message);


$_SESSION['messages']['success'][] = 'Vous venez de recevoir un email!';
    echo '<script>window.location="'. SITE .'index.php"</script>';

    // else : 
    //     $_SESSION['messages']['danger'][] = 'oups!';
    //     echo '<script>window.location="'. SITE .'index.php"</script>'; 

   endif
;?>
<br>
        <div id="contact">
            <h2>MON COMPTE</h2>
            <div class="flex w-100">
                <form action="" method="post">
                    <fieldset>
                       <legend>Mon compte</legend> <br>
                       <label for="pseudo">Pseudo</label>
                        <input type="text" id="pseudo" name="pseudo" required value="pseudo" ><br> 
                            <br>
                        <label for="mdp">Mot de passe</label>
                        <input type="password" id="mdp" name="mdp" minlength="6" maxlength="12" ><br> <br> 

                        <label for="email">Votre email</label>
                        <input type="email" id="email" name="email" required> <br> <br>              
                         <br> <br> 
                        
                        <button type="submit" value="submit">Envoi</button>
                    </fieldset>  
                </form>
               
  <!----------------------photo a droite du formulaire------------------->          
                <div>
                <img class="w-100 m-2" src="img/Blackpink whistle.jpeg" width="500" height="500" alt="badge">
                </div> 
            </div>
         <hr> <br>
        </div>
    </main>

<?php require_once 'inc/footer.php' ;?>