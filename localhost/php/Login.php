<?php
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
session_start();
setcookie("id", $data['id'], time()+60*60*24*30, "/");
setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true);


$mysql = new mysqli('localhost', 'root', 'root', 'registration');
$Login = filter_var(trim($_POST['Login']),
FILTER_SANITIZE_STRING);
if(isset($_POST['submit']))
{

    $sql="SELECT Login, Password, Name, SeconcName, ThirdName, Telephone, MailIndex, Adress, Email FROM users WHERE Login='".mysqli_real_escape_string($mysql,$_POST['Login'])."' LIMIT 1";
    //$sqlK="SELECT Kard, Kod, Name, SeconcName FROM users WHERE Kard='".mysqli_real_escape_string($mysql,$_POST['Kard'])."' LIMIT 1";
    $query = mysqli_query($mysql,$sql);
    //$queryK = mysqli_query($mysql,$sqlK);
    //var_dump($query);
    $data = mysqli_fetch_array($query);
    //$dataK = mysqli_fetch_array($queryK);
    //var_dump($data);
   
    if($data['Password'] === $_POST['Password'])
    {
        $hash = md5(generateCode(10));

        if(!empty($_POST['not_attach_ip']))
        {
            
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

     
        $Where="UPDATE users SET user_hash='".$hash."' ".$insip." WHERE id='".$data['id']."'";
        mysqli_query($mysql, $Where);
        
        $_SESSION["Login"] = $Login;
        $_SESSION["SeconcName"] = $data['SeconcName'];
        $_SESSION["Name"] = $data['Name'];
        $_SESSION["ThirdName"] = $data['ThirdName'];
        $_SESSION["Telephone"] = $data['Telephone'];
        $_SESSION["MailIndex"] = $data['MailIndex'];
        $_SESSION["Adress"] = $data['Adress'];
        $_SESSION["Email"] = $data['Email'];
         
        header('Location: /Kabinet.php'); 
        exit();
    }
    elseif ($dataK['Kod'] === $_POST['Kod']) {
        $hash = md5(generateCode(10));

        if(!empty($_POST['not_attach_ip']))
        {
     
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

        $Where="UPDATE users SET user_hash='".$hash."' ".$insip." WHERE id='".$data['id']."'";
        mysqli_query($mysql, $Where);

        $_SESSION["Login"] = $Login;
        $_SESSION["SeconcName"] = $dataK['SeconcName'];
        $_SESSION["Name"] = $dataK['Name'];
        $_SESSION["ThirdName"] = $dataK['ThirdName'];
        $_SESSION["Telephone"] = $dataK['Telephone'];
        $_SESSION["MailIndex"] = $dataK['MailIndex'];
        $_SESSION["Adress"] = $dataK['Adress'];
        $_SESSION["Email"] = $dataK['Email'];

        header('Location: /Kabinet.php'); 
        exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }

$mysql->close();
}
?>