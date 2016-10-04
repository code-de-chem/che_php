<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]===1){
    $nav_link_logged = $_SESSION["loggedin"];
    $nav_link_imgUrl = $_SESSION["imgUrl"];
    $nav_link_user = $_SESSION["username"];
    $nav_link_regNo = $_SESSION["regNo"];
echo <<<END
    <div class="navigationLink" onmouseover="beingHovered('myAccountPopup')" onmouseout="hoverEnded('myAccountPopup')" id="navigationLink"><span class="glyphicon glyphicon-user"> </span> My Account</div>
    <div id="myAccountPopup" onmouseover="beingHovered('myAccountPopup')" onmouseout="hoverEnded('myAccountPopup')">
    <div id="popupUserImg"><img src='$nav_link_imgUrl'/></div>
    <div id="popupUsername"> $nav_link_user </div>
    <div id="popupUserDeatils">
        <div class="popupUserExtra" id="popupUserAccount"><a href="studentProfile.php?id=$nav_link_regNo">My Account</a></div>
        <div class="popupUserExtra" id="popupChangePasssword"><a href="logout.php">log out</a></div>
    </div>
</div>
END;
}else{
echo <<<END
    <div class="navigationLink" id="navigationLink"><span class="glyphicon glyphicon-user"> </span><a href="student_login.php"> login/signup</a></div>
END;
}
?>



