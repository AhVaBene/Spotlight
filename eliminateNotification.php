<?php
    require_once("bootstrap.php");
    if(isUserLoggedIn() && isset($_POST["id"])){
        if($_POST["post_id"] != "none"){
            $dbh->eliminateNotificationFromPost($_POST["post_id"], $_POST["id"]);
    }
    if($_POST["type"] != "comment"){
        $dbh->eliminateNotification($_POST["id"]);
    }else{
        $dbh->eliminateNotificationComment($_POST["id"]);
    }
}
?>