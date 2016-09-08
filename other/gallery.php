<?php
    $BASE_DIR = "../";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gallery</title>
        <link rel="shortcut icon" href="../assets/images/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css"></link>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>-->
        <link rel="stylesheet" href="http://localhost:8084/ChemicalIsm/assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/navigation.css"></link>
        <link rel="stylesheet" type="text/css" href="../assets/css/Student.css"></link>
        <script type="text/javascript" src="../assets/js/jquery.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
        <script type="text/javascript">
            function beingHovered(current) {
                document.getElementById(current).style.visibility = 'visible';
            }
            function hoverEnded(current) {
                document.getElementById(current).style.visibility = 'hidden';
            }
        </script>
    </head>
    <body>
        <div class="navigationLink" id="navigationLink"><a href="../index.jsp"></a>link</div>
        <div id="myAccountPopup" onmouseover="beingHovered('myAccountPopup')" onmouseout="hoverEnded('myAccountPopup')">
            <div id="popupUserImg"><img src=" imgUrl"/></div>
            <div id="popupUsername"> (String) session.getAttribute("ISMusername")</div>
            <div id="popupUserDeatils">
                <div class="popupUserExtra" id="popupUserAccount">My Account</div>
                <div class="popupUserExtra" id="popupChangePasssword">Change Password</div>
            </div>
        </div>


        <?php include "./nav.php" ?><%-- for navigation link --%> 


        <div class="container" id="try">    
            <div class="row">

                <?php
                $dir = $BASE_DIR."assets/images/events";
                $i = 0;
                if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        while (($file = readdir($dh)) !== false) {
                            if($file !== "."&$file!==".."){
                                $i++;
                                echo '<div class="col-lg-4">';
                                echo '<img class="thumbnail eventsPic" src="'.$dir.'/'.$file.'" alt="Can not load image">';
                                echo '</div>';
                            }
                            if($i%3 === 0){
                                echo ' </div><div class="row">';
                            }
                        }
                        closedir($dh);
                    }
                }
                ?>
                
           


            </div>


<?php include "./foot.php" ?>



        </div>
    </body>
</html>


