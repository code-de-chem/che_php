<?php
$BASE_DIR = "../";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gallery</title>
        <?php include './common_import.php' ?>
    </head>
    <body>
        <?php include "./nav_link.php" ?>
        <?php include "./nav.php" ?>

        <div class="container" id="try">    
            <?php include 'banner.php' ?>
            <div class="row">

                <?php
                $dir = $BASE_DIR . "assets/images/events";
                $i = 0;
                if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        while (($file = readdir($dh)) !== false) {
                            if ($file !== "." & $file !== "..") {
                                $i++;
                                echo '<div class="col-lg-4">';
                                echo '<img class="thumbnail eventsPic" src="' . $dir . '/' . $file . '" alt="Can not load image">';
                                echo '</div>';
                            }
                            if ($i % 3 === 0) {
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


