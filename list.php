<link rel="stylesheet" type="text/css" href="list.css">
<header>
<h1>       CEM MALLEK HADDAD   </h1>
<h2>       Liste des demandes des nouveaux enseignants   </h2>
<header>
<table border='1'>
<tr>
	<td>Nom</td>
    <td>Prenom </td>
	<td>email</td>
    <td>date de naissance </td>
	<td>diplome</td>
    <td>Specialite </td>
	<td>N telephone</td>
   
	<td>Situation</td>
    <td>Experiance</td>
	<td>Adresse</td>
    
</tr>

<?php
$conn=  mysqli_connect('localhost','root','','enseignants') or die(mysqli_error());


$sql = "SELECT   * FROM  enseignantform";

$result=mysqli_query($conn,$sql);


 while($row=mysqli_fetch_assoc($result)){
	 echo"
	<tr>
	<td>{$row['Nom']}</td>
	<td>{$row['Prenom']}</td>
	<td>{$row['email']}</td>
	<td>{$row['datnaiss']}</td>
	<td>{$row['diplome']}</td>
	<td>{$row['specialite']}</td>
	<td>{$row['Ntele']}</td>
	<td>{$row['situation']}</td>
	<td>{$row['experiance']}</td>
	<td>{$row['adresse']}</td>
     </tr> ";
 }
	

echo "</table>";
?>