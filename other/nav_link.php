<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]===1){
    $nav_link_logged = $_SESSION["loggedin"];
    $nav_link_imgUrl = $_SESSION["imgUrl"];
    $nav_link_user = $_SESSION["username"];
echo <<<END
    <div class="navigationLink" onmouseover="beingHovered('myAccountPopup')" onmouseout="hoverEnded('myAccountPopup')" id="navigationLink"><span class="glyphicon glyphicon-user"> </span> My Account</div>
    <div id="myAccountPopup" onmouseover="beingHovered('myAccountPopup')" onmouseout="hoverEnded('myAccountPopup')">
    <div id="popupUserImg"><img src='$nav_link_imgUrl'/></div>
    <div id="popupUsername"> $nav_link_user </div>
    <div id="popupUserDeatils">
        <div class="popupUserExtra" id="popupUserAccount">My Account</div>
        <div class="popupUserExtra" id="popupChangePasssword">Change Password</div>
    </div>
</div>
END;
}else{
echo <<<END
    <div class="navigationLink" id="navigationLink"><span class="glyphicon glyphicon-user"> </span><a href="student_login.php"> login/signup</a></div>
END;
}
?>



