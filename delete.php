
<?php
    include 'create.PHP';
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $nbr=$cnx_bd->exec("drop table   students ; ");
      echo " étudiant Supprimer avec succées !" ; 
    ?>
