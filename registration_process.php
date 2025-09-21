<?php
if(! empty($_POST))
{
    extract($_POST);
    $error=array();
    
     if (empty($fnm)) {
        $error[] = "Please enter full name";
    }
    if(empty($email)){
        $error[]="please enter emal";
    }
    if(empty($pwd) || empty($cpwd)){
        $error[]="please enter pwd";
    }
    else if($pwd != $cpwd){
        $error[]="don't match password";
    }
    else if(strlen($pwd)<6)
    {
        $error[]="minimum 6 length";

    }
    if(empty($mno)){
        $error[]="please enter mno";
    }
    else if(is_numeric($mno)){
        $error[]="please enter numeric mno";
    }
    if(!empty($error)){
        foreach($error as $er){
            echo $er.'<br />';

        }
    }
    else{
        echo "all is well";
    }
}
else{
    header("location:registation.php");
}
?>