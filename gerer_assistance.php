<?php 
   include('functions.php');
  if (!isLoggedIn()) {
   $_SESSION['msg'] = "You must log in first";
   header('location: login.php');
}
   $delai=45;
   $url="#chat";
   header("Refresh: $delai;url=$url");
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
                                 <a class="nav-link" href="accueiltechnicien.php#content">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="didactiquetech.php#content">Didactique</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gerer_revision.php#content">Faire révision</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gerer_panne.php#content">Dépanner</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link active" href="assistancetech.php#content">Assister</a>
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
            <div class="row" id="content">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Assistance</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php 
   
                  if (isset($_POST['send_msg'])) {
                     $msg = htmlspecialchars(addslashes($_POST['msg_chat']));
                     $id_destinataire = $_SESSION['client']['id'];
                     $date = date('Y-m-d');
                     $heure = date('H:i');

                     if ($msg && $id_destinataire) {
                        include 'dbcon.php';
                        $query = "INSERT INTO messagerie (message, id_destinataire, date, heure) VALUES ('$msg', '$id_destinataire', '$date', '$heure')";
                        mysqli_query($con, $query);
                     }
                  }
                     if (isset($_POST['del_msg'])) {
                        include 'dbcon.php';
                        $qry_del = "DELETE FROM messagerie";
                        $result_del = mysqli_query($con, $qry_del);
                        if ($result_del) {
                           echo "<script language='javascript'>alert('Messagerie vidé avec succèss !')</script>";
                        } else{  
                           echo "<script language='javascript'>alert('La requete a échoué !')</script>";
                        }
                     }
                  ?>
               <br>
               <div class="col-md-10 offset-md-1" id="label">
                  <form id="request" class="main_form" method="post" action="">
                     <?php echo display_error(); ?>
                     <div class="row">
                        <div class="label">
                           <label>
                              <h3 style="color:#fff;">
                                 Discussion
                              </h3>
                           </label>
                        </div>
                        <div class="col-md-12 ">
                           <style type="text/css">
                              .chatbox {
                                 width: 100%;
                                 border: solid white 2px;
                                 color: white;
                                 padding-left: 2%;
                                 margin-bottom: 2%;
                                 background-color: grey;
                              }
                           </style>
                           <div class="chatbox" id="chat">
                              <!-- bonjour -->
                              <?php include 'serveur_message.php'; ?>
                           </div> 
                        </div>
                        <script type="text/javascript">
                           document.getElementById('chat').scrollTop=document.getElementById('chat').scrollHeight;
                        </script>
                        <div class="col-md-12">
                           <!-- <input class="contactus" placeholder="Mot de passe" type="password" name="password">  -->
                           <textarea class="contactus" name="msg_chat" placeholder="Tapez votre message ici..." required></textarea>
                        </div>
                        <?php  if (isset($_SESSION['client'])) : ?>
                        <input type="hidden" name="id_client" value="<?php echo ucfirst($_SESSION['client']['id']); ?>">
                        <?php endif ?>
                        <div class="col-md-12">
                           <button class="send_btn" name="send_msg">Envoyer</button><br>
                        </div>
                     </div>
                  </form>
                  <form method="post" action="">
                     <input type="submit" class="btn btn-danger btn-block" name="del_msg" value="Vider la discussion" id="vider">
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end revision form -->
 <?php include 'footer.php'; ?>