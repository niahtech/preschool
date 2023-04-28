<!-- <?php
$db = new mysqli('localhost', 'root', '', 'preskool');
$sql="UPDATE bio set CSC101='45' ,CHEM101 ='67',CHEM103='89',BIO101='67',GNS101='77',MEE101='',MTS101='56',PHY101='77',PHY107='46' WHERE id= ";

if($db->query($sql)=== TRUE
)
{
    echo 'record updaet successful';
}
else{
    'error upadting red'.$db->error;
}

$sqm="UPDATE bio set courses='CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107' where id= ";
if($db->query($sqm)=== TRUE
)
{
    echo 'record updaet successful';
}
else{
    'error upadting red'.$db->error;
}
$sqO="UPDATE bio set BIO101=67,CHEM101=60,MTS101=89 WHERE id= ";

if($db->query($sqO)=== TRUE
)
{
    echo 'record updaet successful';
}
else{
    'error upadting red'.$db->error;
}

$sqN="UPDATE bio set courses='BIO101,CHEM101,MTS101' where id=";
if($db->query($sqN)=== TRUE
)
{
    echo 'record updaet successful';
}
else{
    'error upadting red'.$db->error;
}


?> -->
