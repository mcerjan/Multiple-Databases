<html>
    
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<?php

require '01_konekcija.php';

$query1="select o.mbrStud,u.imeStud,u.prezStud,round(avg(o.ocjena),1) "
        . "from ocjene o "
        . "inner join pred p on "
        . "o.sifPred=o.sifPred "
        . "inner join ucenici u on "
        . "o.mbrStud=u.mbrStud "
        . "group by o.mbrStud;";


$query2="select mbrStud, imeStud, prezStud from stud;";
$result2=  mysql_query($query2, $db);


$result=  mysql_query($query1, $db2);

while(($row=mysql_fetch_assoc($result))&& $row2=mysql_fetch_assoc($result2)){
    
        if($row["mbrStud"] = $row2["mbrStud"]){
    echo '<i>'.$row["mbrStud"].' '.$row["imeStud"].' '.$row["prezStud"].', '
            . '<a href="predmeti.php?id='.$row["mbrStud"].'&imestud='.str_replace(' ','_',$row["imeStud"]).''
            . '&prezStud='.str_replace(' ','_',$row["prezStud"]).'">'.$row["round(avg(o.ocjena),1)"].'</a></i><br/>';
        }
       
    #echo '<pre>'.print_r($row,1).'</pre>';
    }

?>
</body>
</html>
