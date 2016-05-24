<?php



$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'fakultet';


$db = mysql_connect ($db_host, $db_user, $db_pass, true);
mysql_set_charset('utf8',$db);

if (!$db)
{
    echo 'Doslo je do problema kod spajanja na bazu.<br/>';
}
else {
    echo 'Uspjesno ste spojeni na bazu.<br/>';
    if (mysql_select_db($db_name))
    {
        echo 'Uspjesno odabrana baza.<br/>';   
    }   
    else {
        echo 'Problem kod odabira baze: ('.  mysql_errno().') '.mysql_error().
                '<br/>';
        
    }
}

$db_host2 = 'localhost';
$db_user2 = 'root';
$db_pass2 = '';
$db_name2 = 'skola';


$db2 = mysql_connect ($db_host2, $db_user2, $db_pass2, true);
mysql_set_charset('utf8',$db2);

if (!$db2)
{
    echo 'Doslo je do problema kod spajanja na bazu.<br/>';
}
else {
    echo 'Uspjesno ste spojeni na bazu.<br/>';
    if (mysql_select_db($db_name2))
    {
        echo 'Uspjesno odabrana baza.<br/>';   
    }   
    else {
        echo 'Problem kod odabira baze: ('.  mysql_errno().') '.mysql_error().
                '<br/>';
        
    }
}


