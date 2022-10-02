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
   <body class="main-layout">
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
                              <!-- <a href="index.php"><img src="images/logo.png" alt="#" /></a> -->
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
                                 <a class="nav-link" href="accueiltechnicien.php#content">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="didactique.phptech#content">Didactique</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gerer_revision.php#content">Faire révision</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link active" href="gerer_panne.php#content">Dépanner</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="assistancetech.php#content">Assister</a>
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
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
               <li data-target="#banner1" data-slide-to="3"></li>
               <li data-target="#banner1" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Système de Maintenance</span>
                                 <h1>TakeCare</h1>
                                 <p>L'application qui vient redynamiser la maintenance informatique </p>
                                 <a href="gerer_revision.php#content">Faire révision </a> <a href="gerer_panne.php#content">Dépanner </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Système de Maintenance</span>
                                 <h1>TakeCare</h1>
                                 <p>L'application qui vient redynamiser la maintenance informatique </p>
                                 <a href="gerer_revision.php#content">Faire révision </a> <a href="gerer_panne.php#content">Dépanner </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Système de Maintenance</span>
                                 <h1>TakeCare</h1>
                                 <p>L'application qui vient redynamiser la maintenance informatique </p>
                                 <a href="gerer_revision.php#content">Faire révision </a> <a href="gerer_panne.php#content">Dépanner </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Système de Maintenance</span>
                                 <h1>TakeCare</h1>
                                 <p>L'application qui vient redynamiser la maintenance informatique </p>
                                 <a href="login.php#content">Faire révision </a> <a href="creercompte.php#content">Dépanner </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Système de Maintenance</span>
                                 <h1>TakeCare</h1>
                                 <p>L'application qui vient redynamiser la maintenance informatique </p>
                                 <a href="gerer_revision.php#content">Faire révision </a> <a href="gerer_panne.php#content">Dépanner </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row" id="content">
               <div class="col-md-12">
                  <div class="box_text">
                     <h3>Nouveaux Dépanages</h3>
                  <?php 
                   include 'dbcon.php';
                   ?>
                  <table class="table table-bordered table-hover table-striped">
                     <thead>
                         <tr>
                             <th class="info">N°</th>
                             <th class="info">Type de panne</th>
                             <th class="info">Description</th>
                             <th class="info">Par le client</th>
                             <th class="info">le</th>
                             <th class="info text-dark"><center>Action</center></th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php 
                             // Afficher le contenu de révision
                             $query = "SELECT * FROM panne";
                             $resultat = mysqli_query($con, $query);
                             $i=1;
                             while ($rows = mysqli_fetch_assoc($resultat)) {
                               $id_clients = $rows['id_client'];
                               // Afficher le contenu de révision
                               $qry = "SELECT * FROM client WHERE id=$id_clients";
                               $res = mysqli_query($con, $qry);
                               while ($lignes = mysqli_fetch_assoc($res)) {
                                            
                            ?>
                           <tr>
                               <td><?=$i?></td>
                               <td><?=$rows['type_panne']?></td>
                               <td><?=$rows['description']?></td>
                               <td><?=$lignes['pseudo']?></td>
                               <td><?=$rows['date_panne']?></td>
                               <td align="center">
                                    <form method="POST" action="code.php">
                                       <input type="hidden" name="id_faire_pan" value="<?=$rows['id_panne']?>">
                                       <a href="intervenir_panne.php?client=<?=$lignes['pseudo']?>">
                                          <b class="text-dark">INTERVENIR</b>
                                       </a>
                                       <button type="submit" name="faire_pan" style="border: none; background: none;" class="btn btn-default">
                                          <b class="text-danger"> <span class="fa fa-trash fa-lg"></span></b>
                                        </button>
                                    </form>
                                 </td>
                                 </tr>
                        <?php
                        $i++;
                        }
                         } ?>
                     </tbody>
                  </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br><br>
<?php include 'footer.php'; ?>

