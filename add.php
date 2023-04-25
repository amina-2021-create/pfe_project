<?php

if (isset($_POST['ID'])) {
  $id = $_POST['ID'];
  echo ($id);
  $sql = "INSERT INTO `absence`(`Id_User`, `ID_SEANCE`, `ETAT`) VALUES ('$id', '1', 'abs')";

  if (mysqli_query($dsn, $sql)) {
    echo "Nouvelle ligne insérée avec succès.";
  } else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($dsn);
  }
}

// requête d'insertion de données




  /*$sql = " INSERT INTO absence VALUES ()";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $res=$stmt->fetch();
  if(isset($res['Id_User'])){
      $res["message"]='ok';    
  }else{
      $res["message"]='non';
          
  }
  
  echo json_encode($res);

}


/*
if (isset($_POST['ID'])) {
    $id = $_POST ['ID'];
    echo "L'id_user est : " .$id;
} else {
    echo "Id_User n'a pas été défini";
}
*/


 


/*if(isset($_POST['Id_User']) && isset($_POST['ID_SEANCE'])){
  $cne=$_POST['Id_User'];
  $seance=$_POST['ID_SEANCE'];
  $sql = "INSERT INTO absence (Id_User, ID_SEANCE) VALUES ('$cne','$seance')";

  // Exécution de la requête d'insertion
  if ($conn->query($sql) === TRUE) {
    echo "Ligne insérée avec succès.";
  } else {
    echo "Erreur d'insertion de ligne : " . $conn->error;
  }
}*/
