<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_client']))
{
    $client_id = mysqli_real_escape_string($con, $_POST['delete_client']);

    $query = "DELETE FROM client WHERE id='$client_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Client Deleted Successfully";
        header("Location: list_user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Client Not Deleted";
        header("Location: list_user.php");
        exit(0);
    }
}
if(isset($_POST['update_client']))
{
    $client_id = mysqli_real_escape_string($con, $_POST['client_id']);

    $pseudo = mysqli_real_escape_string($con, $_POST['pseudo']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $type = mysqli_real_escape_string($con, $_POST['typeutilisateur']);

    $query = "UPDATE client SET pseudo='$pseudo', email='$email', typeutilisateur='$type' WHERE id='$client_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User updated Successfully";
        header("Location: list_user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: list_user.php");
        exit(0);
    }

}



if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

//Submit Revision
if(isset($_POST['submit_revision']))
{
    $type_revision = mysqli_real_escape_string($con, $_POST['type_revision']);
    $intitule = mysqli_real_escape_string($con, $_POST['intitule']);
    $date_revision = date('Y-m-d');
    $id_client = mysqli_real_escape_string($con, $_POST['id_client']);

    $query = "INSERT INTO revision (type_revision, intitule, date_revision, id_client) VALUES ('$type_revision','$intitule','$date_revision','$id_client')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Révision envoyé avec succès !";
        header("Location: revision.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Echec d'envoi";
        header("Location: revision.php");
        exit(0);
    }
}

//Faire la révision

if (isset($_POST['faire_rev'])) {
    $id_faire_rev = mysqli_real_escape_string($con, $_POST['id_faire_rev']);

    $query = "DELETE FROM revision WHERE id_revision=$id_faire_rev";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        echo "<script language='javascript'>alert('Intervention faite avec succès !')<script>";
        $delai=1;
        $url="gerer_revision.php#content";
        header("Refresh: $delai;url=$url");
        exit(0);
    }
    else
    {
        echo "<script language='javascript'>alert('Echec d'intervention !')<script>";
        $delai=1;
        $url="gerer_revision.php#content";
        header("Refresh: $delai;url=$url");
        exit(0);
    }
}

//Submit Panne
if(isset($_POST['submit_panne']))
{
    $type_panne = mysqli_real_escape_string($con, $_POST['type_panne']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $date_panne = date('Y-m-d');
    $id_client = mysqli_real_escape_string($con, $_POST['id_client']);

    $query = "INSERT INTO panne (type_panne, description, date_panne, id_client) VALUES ('$type_panne','$description','$date_panne','$id_client')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['messag'] = "Panne soummise avec succès !";
        header("Location: panne.php");
        exit(0);
    }
    else
    {
        $_SESSION['messag'] = "Echec d'envoi de la panne";
        header("Location: panne.php");
        exit(0);
    }
}

//Faire la panne
if (isset($_POST['faire_pan'])) {
    $id_faire_pan = mysqli_real_escape_string($con, $_POST['id_faire_pan']);

    $query = "DELETE FROM panne WHERE id_panne=$id_faire_pan";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        echo "<script language='javascript'>alert('Intervention faite avec succès !')<script>";
        $delai=1;
        $url="gerer_panne.php#content";
        header("Refresh: $delai;url=$url");
        exit(0);
    }
    else
    {
        echo "<script language='javascript'>alert('Echec d'intervention !')<script>";
        $delai=1;
        $url="gerer_panne.php#content";
        header("Refresh: $delai;url=$url");
        exit(0);
    }
}

?>