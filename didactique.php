<?php 
   include('functions.php');
  if (!isLoggedIn()) {
   $_SESSION['msg'] = "You must log in first";
   header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>TakeCare</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong computer_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <h2><b style="color:#fff;">TAKECARE</b></h2>
                              <!-- <a href="index.html"><img src="images/logo.png" alt="#" /></a> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link active" href="didactique.php">Didactique</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="revision.php#content">Demander r??vision</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="panne.php#content">Soumettre panne</a>
                              </li>
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="product.php#content">Products</a>
                              </li> -->
                              <li class="nav-item">
                                 <a class="nav-link" href="assistance.php#content">Assistance</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="login.php">Login</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <!-- logged in client information -->
                  <div>
                  <?php 
                  // echo $_SESSION['success'];
                  if (isset($_SESSION['client'])) : ?>
                     <h3>
                        <strong style="color:#fff;"><?php echo $_SESSION['client']['pseudo']; ?></strong>
                        <small>
                           <i  style="color: #888;">(<?php echo ucfirst($_SESSION['client']['typeutilisateur']); ?>)</i> 
                           <br>
                           <a href="deconnexion.php" style="color: red;">logout</a>
                        </small>
                     </h3>
                  <?php endif ?>
               </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <!-- 1 -->
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Didactique</h2>
                     <p class="text-justify">&nbsp; &nbsp; &nbsp;La maintenance informatique correspond ?? l'ensemble des actions ?? r??aliser pour maintenir un parc informatique performant. Que vous soyez un particulier ou un professionnel, il est important de v??rifier r??guli??rement l'??tat de vos ordinateurs pour ??viter d'??ventuelles pannes ou diff??rentes failles dans votre syst??me informatique.</p>
                     <p style="margin-top: -10%;">Il existe trois types de maintenance informatique : la maintenance pr??ventive, la maintenance corrective, et la maintenance ??volutive.</p>
                     <p style="margin-top: -10%;">L'ordinateur occupe aujourd'hui une place centrale dans notre soci??t?? et contient la plupart du temps des donn??es sensibles sur nos vies ou sur l'activit?? de votre entreprise. La maintenance informatique est alors une solution propos??e pour garantir la s??curit?? de votre ordinateur. Si vous utilisez votre ordinateur pour les loisirs ou pour le travail, r??aliser une maintenance informatique va vous permettre de mener toutes  les actions n??cessaires au bon fonctionnement de vos machines.</p><br>
                     <p style="margin-top: -10%;"> vous pouvez consulter les images suivantes pour vous ??difier </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/about.jpg" alt="#"/></figure>
                  </div>
               </div>
               <!-- 2 -->
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/computer.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Qu'est ce que l'on appelle desktop ?</h2>
                     <p class="blog-post_text">Form??e des mot anglais "desk" (bureau) et "top" (dessus),
                          l'expression "desktop" caract??rise un bureau o?? l'on peut poser un ordinateur et, par extension, un ??cran.1 janv. 2021
                     </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <!-- 3 -->
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Qu'es ce que le microprocesseur ?</h2>
                     <p>
                     Le microprocesseur est la pi??ce principale d'un ordinateur.
                     C'est un processeur (CPU : Central Processing Unit ) miniaturis?? qui tient dans un seul circuit int??gr??. 
                     Il g??re l'ex??cution des instructions de l'ordinateur.
                     </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/cpu.jpg" alt="#"/></figure>
                  </div>
               </div>
               <!-- 4 -->
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/ddd.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Qu'est ce que l'on appelle le disque dur ?</h2>
                <p>
                Le disque dur est l'organe servant ?? conserver les donn??es de mani??re permanente, contrairement ?? la m??moire vive, qui s'efface ?? chaque red??marrage de l'ordinateur, c'est la raison pour laquelle on parle parfois de m??moire de masse pour d??signer les disques durs.
                Disque dur SSD est impropre car il n'y a plus de disques (ni de t??tes de lecture) mais des m??moires de stockage.
                </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <!-- 5 -->
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Qu'es ce que le disque dur m??canique ?</h2>
                <p>
                  Dans un disque dur m??canique il y a des disques qui tournent et des t??tes de lecture qui se d??placent pour lire les donn??es.
                </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/dd.jpg" alt="#"/></figure>
                  </div>
               </div>
               <!-- 6 -->
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/product7.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>C'est quoi la RAM d'un ordinateur LAPTOP ?</h2>
               <p>
                  plus petit que la RAM de DESKTOP, elle joue neanmoins le meme role
               </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <!-- 7 -->
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Chipset : qu'est-ce que c'est ?</h2>
               <p>
                 Jeu de composants en fran??ais. Compos?? de deux ??l??ments, le chipset permet aux diff??rents ??l??ments d'un ordinateur de s'??changer des donn??es.
                 Le circuit Northbridge g??re le trafic de donn??es entre le processeur et la m??moire vive, ainsi que les donn??es graphiques.
               </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/chipset.jpg" alt="#"/></figure>
                  </div>
               </div>
               <!-- 8 -->
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/ramdesktop.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>C'est quoi la RAM d'un ordinateur ?</h2>
                  <p>
                     RAM est l'abr??viation de ?? random access memory ?? qui signifie ?? m??moire vive ?? ou litt??ralement ?? m??moire ?? acc??s al??atoire ??.
                   Bien que ce terme puisse sembler myst??rieux, la RAM est un des ??l??ments fondamentaux les plus importants de l'informatique. 
                  </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <!-- 9 -->
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Clavier: qu'est-ce que c'est ?</h2>
                <p>
                Un clavier d???ordinateur est une interface homme-machine munie de touches permettant ?? l'utilisateur d'entrer dans l'ordinateur une s??quence de donn??es, notamment textuelle. 
                </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/clavier.jpg" alt="#"/></figure>
                  </div>
               </div>
               <!-- 10 -->
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/souris.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>la souris: qu'est-ce que c'est ?</h2>
                <p>
                Une souris est un dispositif de pointage pour ordinateur. 
                Elle est compos??e d'un petit bo??tier fait pour tenir sous la main, sur lequel se trouvent un ou plusieurs boutons, et une molette dans la plupart des cas.
                </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <!-- 11 -->
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>l'imprimante: qu'est-ce que c'est ?</h2>
                <p>
                Une imprimante est un engin permettant d'obtenir un document sur papier ?? partir d'un mod??le informatique du document. 
                Par exemple, un texte ??crit via un logiciel de traitement de texte sur ordinateur pourra ??tre imprim?? pour en obtenir une version papier (c'est un changement du support d'information). 
              </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/imprimante.jpg" alt="#"/></figure>
                  </div>
               </div>
               <!-- 12 -->
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/product5.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>le routeur: qu'est-ce que c'est ?</h2>
                <p>
                Un routeur est un appareil permettant de cr??er un r??seau Wi-Fi. Il doit pour cela ??tre reli?? ?? un modem. Il envoie les informations provenant d'Internet ?? vos appareils personnels (ordinateurs, t??l??phones et tablettes).
                Ces appareils connect??s ?? Internet chez vous constituent votre r??seau local (LAN).  
              </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <!-- 13 -->
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>le switch: qu'est-ce que c'est ?</h2>
                <p class="blog-post_text">
                Qu'est-ce qu'un switch? Un switch, commutateur ou commutateur r??seau en fran??ais, est un ??quipement qui fonctionne comme un pont multiports et qui permet de relier plusieurs segments d'un r??seau informatique entre eux.
                Le switch est charg?? d'analyser les trames qui arrivent sur les ports d'entr??e 
              </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/switch.jpg" alt="#"/></figure>
                  </div>
               </div>
               <!-- 14 -->
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/radiqteur.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                  <h2>Quel est le role du radiateur?</h2>
                <p>
                Le r??le du radiateur peut ??tre trouv?? dans son propre nom; c'est un appareil con??u pour extraire la chaleur des composants vitaux de votre ordinateur.
              </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <!-- 15 -->
               <div class="col-md-5">
                  <div class="titlepage">
                  <h2>Qu'est-ce que CMOS ?</h2>
                <p>
                 Le CMOS (Complementary metal-oxide-semiconductor) est une petite quantit?? de m??moire sur la carte m??re d'un ordinateur qui stocke les param??tres du BIOS (Basic Input/Output System).
                Le BIOS est le logiciel stock?? sur la puce m??moire de la carte m??re.
              </p>
                     <!-- <a class="read_more" href="#">Read More</a> -->
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/cmos.jpg" alt="#"/></figure>
                  </div>
               </div>
               <!-- /15 -->
            </div>
         </div>
      </div>
      </div>
      <!-- end about section -->
<?php include 'footer.php'; ?>

