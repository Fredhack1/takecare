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
                              <!-- <a href="index.html"><img src="images/logo.png" alt="#" /></a> -->
                              <h2><b style="color:#fff;">TAKECARE</b></h2>
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
                                 <a class="nav-link" href="didactique.php">Didactique</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link active" href="revision.php">Demander revision</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="panne.php">Soumettre panne</a>
                              </li>
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="product.php">Products</a>
                              </li> -->
                              <li class="nav-item">
                                 <a class="nav-link" href="assistance.php">Assistance</a>
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
      <!--  revision form -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Revision</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <form id="request" class="main_form" method="post" action="code.php">
                     <?php echo display_error(); ?>
                     <div class="row">
                        <?php 

                           if (isset($_SESSION['message'])) {
                            echo "<div><p><i class='text-warning'>" . $_SESSION['message'] . "</i></p></div>";
                         }
                        ?>
                        <div class="label">
                           <label>
                              <h3 style="color:#fff;">
                                 Type de révision
                              </h3>
                           </label>
                        </div>
                        <div class="col-md-12 ">
                           <select class="contactus" name="type_revision">
                             <option value="Revision complete"><b style="color:#000;"><font color="black">Révision complète</b></font></option>
                             <option value="Revision specifié"><b style="color:#000;">Révision spécifié</b></option>
                           </select> 
                        </div>
                        <div class="col-md-12">
                           <!-- <input class="contactus" placeholder="Mot de passe" type="password" name="password">  -->
                           <textarea class="contactus" name="intitule" placeholder="Décrivez votre révision ici..." required></textarea>
                        </div>
                        <?php  if (isset($_SESSION['client'])) : ?>
                        <input type="hidden" name="id_client" value="<?php echo ucfirst($_SESSION['client']['id']); ?>">
                        <?php endif ?>
                        <div class="col-md-12">
                           <button class="send_btn" name="submit_revision">Envoyer</button><br>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end revision form -->
 <?php include 'footer.php'; ?>