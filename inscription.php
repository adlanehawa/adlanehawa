
<?php
$conn=  mysqli_connect('localhost','root','','enseignants') or die(mysqli_error());
echo "demande envoyer attend une reponse 
       consulter votre email ...";

$NOM=$_POST['n1'];
$PRENOM=$_POST['p1'];
$DATE=$_POST['d1'];
$GENRE=$_POST['g1'];
$SITUATION=$_POST['sf'];
$DIPLOME=$_POST['dip'];
$SPECIALITE=$_POST['sp'];
$EXPERIANCE=$_POST['e1'];
$ADRESSE=$_POST['a1'];
$EMAIL=$_POST['user_email'];
$NTELEPHONE=$_POST['user_Ntelephone'];

$req="INSERT INTO enseignantform (Nom,Prenom,email,datnaiss,diplome,specialite,Ntele,genre,situation,experiance,adresse) values ('$NOM','$PRENOM','$EMAIL','$DATE','$DIPLOME','$SPECIALITE','$NTELEPHONE','$GENRE','$SITUATION','$EXPERIANCE','$ADRESSE')";
if(mysqli_query($conn,$req))
	echo "Insertion ressite ...";
else
	echo "Insertion echoue ....";

?>
