
<!-- BRAHIM BEN LHOUCINE AINANE YOUSSEF -->


<!-- EXERCICE 1 : -->

<!DOCTYPE html>
<html>
<head>
	<title>tp</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<?php 
$my_array = array("imgexo1/img1.jpeg","imgexo1/img2.jpg","imgexo1/img3.png");
shuffle($my_array);?>
<div class="row">
<?php 	
for($i=0;$i<sizeof($my_array);$i++){?>
<div class="col-sm-3">
<img src="<?php echo $my_array[$i]; ?>"  height="500" width="500">
</div>
<?php  }?>
</div>


</body>
</html>


<!-- EXERCICE 2 : -->


 
<?php

try {
    $file_handle = fopen("commande.txt", "rb");
    if (! $file_handle) {
        throw new Exception("Could not open the file!");
    }


    while (!feof($file_handle) ) {
        $line_of_text = fgets($file_handle);
        $parts = explode('|', $line_of_text);
        echo "$parts[0] | $parts[1] | $parts[2] | $parts[3] |$parts[4] | $parts[5] <br> ";
    }
    fclose($file_handle);
    
}
catch (Exception $e) {
    echo "Error (File: ".$e->getFile().", line ".
          $e->getLine()."): ".$e->getMessage();
}

?>

<!-- EXERCICE 3 : -->



</table>




<h1> Central d'achats</h1>
<h2> Commande client</h2>
<table  border="1">

    <tr>
        <td height='60' align="center" bgcolor=" #b3b3ff">numero de commande </td>
        <td height='60'align="center"bgcolor=" #b3b3ff" >nemero de client</td>
        <td height='60'align="center"bgcolor=" #b3b3ff">date de comande</td>
        <td height='60'align="center"bgcolor=" #b3b3ff">designation article </td>
        <td height='60'align="center" bgcolor=" #b3b3ff">quantite </td>
        <td height='60'align="center"bgcolor=" #b3b3ff">prix unitaire </td>
        <td height='60'align="center"bgcolor=" #b3b3ff">date de livraison</td>
        <td height='60' align="center"bgcolor=" #b3b3ff">Adresse client </td>
        
    </tr>
<?php

try {
    $file_handle = fopen("commande.txt", "rb");
    if (! $file_handle) {
        throw new Exception("Could not open the file!");
    }


    while (!feof($file_handle) ) {
        $line_of_text = fgets($file_handle);
        $parts = explode('|', $line_of_text);
        echo "<tr><td height='30'>$parts[0]</td><td>$parts[1]</td><td height='30'>$parts[2]</td><td>$parts[3]</td><td height='30'>$parts[4]</td><td>$parts[5]</td><td height='30'>$parts[6]</td><td>$parts[7]</td></tr>";
    }
    fclose($file_handle);
    
}
catch (Exception $e) {
    echo "Error (File: ".$e->getFile().", line ".
          $e->getLine()."): ".$e->getMessage();
}

?>
</table>