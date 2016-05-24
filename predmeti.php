<html>
    
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<?php
require '01_konekcija.php';


echo 'Navigacija<br/>';
echo '<br/><a href="index.php?">"<--Natrag"</a><br/><br/>';
 

echo '<i>Student/ucenik: '.str_replace('_',' ',$_GET['imestud']).' '
        . ''.str_replace('_',' ',$_GET['prezStud']).':</i>'
                            . '<br/><br/>';

$query='SELECT p.nazPred, o.ocjena from pred p inner join ocjene o on p.sifPred=o.sifPred WHERE mbrStud ='.$_GET["id"].'';

        $result=mysql_query($query);

while ($row=  mysql_fetch_assoc($result))
{
   
echo '<i>'.$row["nazPred"].', '.$row["ocjena"].'</i><br/>';
}
?>
</body>
</html>

