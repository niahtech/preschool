
<?php
include 'libs/connection.inc.php';
$firstName = ['May','April','June','Augustine','Sade','Seun','Tunde'];
$lastName = ['Coker','Olu','Wells','Tyler','Peterson','Sundey','Adeoye','Babalola'];
$Department = ['ANIMAL PRODUCTION AND HEALTH','COMPUTER SCIENCE'];
$Address = ['Festac,Gate 1,Lagos.','Abusoro,Ijoka,Akure.','Danny Cole Street, Agro-Project Phase 2,PorthHarcourt.','Elegede Close,Off-Bodija,Akure.','Ayodele Taiwo Street,Alagbaka,Akure.','Benin-Owo Express Way,Akure.','Odo-Osun Street,Ido-Ekiti,Ekiti State.',"Moses Hall, Redemption Camp, Ogun State." ];
$Number=['09067588845','08067856493','09095890537','07035467899','08067412357','09064312345','07079964435','09045536789','08036196282','07033053364'];
$Gender =['Male','Female'];
$Religion=['Christianity'];
$std_ID1=['1','2','3','4','5','6','7','8','9','11','70','19','56','58','56','57'];
$std_ID2=['16','12','44','10','38','26','39','47','38','68','00','30','69','22','66','20','91','67'];
$std_ID3=['a','b','c','d','e','f','g','h','i'];
$password=['ENTER'];
// $password1=['sess','look','bee','123','55','67','writes','deegreat','too','spending'];
// $password2=['23','i_am','bold','sunny','rabbit','yul','bossman','qwerty','sandman'];
// $password3=['!','#','$','.'];
$gns101=['70','75','77','64','74'];
$bio101=['68','72','80','86','77','79'];
$csc101=['76','68','60','67','89','69'];
$chem101=['77','82','86','69','72','80'];

$chem103=['78','69','70','89','62','66'];
$mee101=['78','92','74','90','66','75','76','99'];
$mts101=['80','51','64','77','99','78','61'];
$phy101=['48','62','38','66','70'];
$phy107=['91','60','80'];

// function randmix($a,$b){
//     shuffle($a);
//     shuffle($b);
//     foreach($a as $i=>$val){
//         $product []=$val.$b[$i];
//     }
//     return $product;
// }
// print_r(randmix($std_ID1,$std_ID2));



for($i=0; $i<2; $i++){
    $name=$firstName[rand(0,count($firstName)-1)].' '.$lastName[rand(0,count($firstName)-1)];
    $fName=$firstName[rand(0,count($firstName)-1)];
    $lName=$lastName[rand(0,count($lastName)-1)];
    $dept=$Department[rand(0,count($Department)-1)];
    $email=strtolower($fName.$lName)."@gmail.com";
    $Add=$Address[rand(0,count($Address)-1)];
    $pn=$Number[rand(0,count($Number)-1)];
    $gen=$Gender[rand(0,count($Gender)-1)];
    $rel=$Religion[rand(0,count($Religion)-1)];
    $shuff1=$std_ID1[rand(0,count($std_ID1)-1)];
    $shuff2=$std_ID2[rand(0,count($std_ID2)-1)];
    $shuff3=$std_ID3[rand(0,count($std_ID3)-1)];



    $pass=$password[rand(0,count($password)-1)];
    $hash_password =password_hash($pass,PASSWORD_BCRYPT);

    // $pass1=$password1[rand(0,count($password1)-1)];
    // $pass2=$password2[rand(0,count($password2)-2)];
    // $pass3=$password3[rand(0,count($password3)-1)];
    // $pass=  $pass1.$pass2.$pass3;
    $shuff='STD_'.$shuff1.$shuff2.$shuff3;

    $gns1=$gns101[rand(0,count($gns101)-1)];
    $bio1=$bio101[rand(0,count($bio101)-1)];
    $csc1=$csc101[rand(0,count($csc101)-1)];
    $chem1=$chem101[rand(0,count($chem101)-1)];
    $chem3=$chem103[rand(0,count($chem103)-1)];
    $mee1=$mee101[rand(0,count($mee101)-1)];
    $mts1=$mts101[rand(0,count($mts101)-1)];
    $phy1=$phy101[rand(0,count($phy101)-1)];
    $phy7=$phy107[rand(0,count($phy107)-1)];
    $scores=$gns1.' '.$bio1.' '.$csc1.' '.$chem1.' '.$chem3.' '.$mee1.' '.$mts1.' '.$phy1.' '.$phy7;
    echo $fName." ";
    echo $lName;
    echo "<br>";
    echo "$dept"."<br>";
    echo $email."<br>";
    echo "$Add"."<br>";
    echo "$pn"."<br>";
    echo "$gen"."<br>";
    echo "$rel"."<br>";
    echo $shuff.'<br>';
    echo $hash_password.'<br>';
    echo $scores.'<br>';
    echo "<br>";
        // $feedb= $db->query("INSERT into bio(FirstName,LastName,Email,presentAddress,PhoneNumber,Gender,Religion,department,studentId,Password) values('$fName','$lName','$email','$Add','$pn','$gen','$rel','$dept','$shuff','$hash_password') ");
        //  $feedb="record successful";
    
    
}
