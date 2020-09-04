<?php
if(isset($_POST['submit'])){
    if($_POST['name']!='' && $_POST['surname']!='' && $_POST['email']!='' && $_POST['yourmessage']!=''){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $message = $_POST['yourmessage'];
        mail("ahmedjahad123@gmail.com",$email,"Myname is ".$name." ".$surname." .".$message);
        echo("<span>Message sent succesfully! Thanks for your message.</span>");
    }
}
?>
