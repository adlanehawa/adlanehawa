 <link rel="stylesheet" type="text/css" href="tabl.css">
<header>
<h1>       CEM MALLEK HADDAD   </h1>
 <h2>   liste des specialites et leurs statut  </h2> 

</header>

<table border=''>
<tr>
	<td>specialite</td>
   
	<td>niveau etudier</td>
    <td>statut </td>
</tr>

<button> <a href="form.html">inscription</a></button>
<button> <a href="page01.html">pr&eacute;c&eacute;dent</a></button>
<?php
$conn=  mysqli_connect('localhost','root','','enseignants') or die(mysqli_error());

$sql="SELECT    * FROM  ancien_enseignant   "; 



//*where statut !== en fonction  GROUPBY  specialite";specialite,SUM(statut)*/

$resultat=mysqli_query($conn,$sql);


 while($row=mysqli_fetch_assoc($resultat)){
	echo"
	<tr>
	<td>{$row['specialite']}</td>
	<td>{$row['class_etud']}</td>
	<td>{$row['statut']}</td>
     </tr>\n";
 }
echo "</table>";
?>