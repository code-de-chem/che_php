<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include './xdgh84hj56/db_de_54sd4fd4fds.php';
$BASE_DIR = "../";
?>
<?php
$other = false;
if (null !== filter_var($_GET["other"], FILTER_SANITIZE_STRING)) {
    $other = filter_var($_GET["other"], FILTER_SANITIZE_STRING);
    if (!($other === true || $other === false)) {
    echo $other;
        $other = false;
    }
} else {
    $other = false;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Faculties</title>
        <?php include './common_import.php' ?>
        <script type="text/javascript">
            function facultyClicked() {
                document.getElementById('mainFaculty').style.display = 'block';
                document.getElementById('otherFaculty').style.display = 'none';
                document.getElementById('faculty_link').classList.add("btn-info");
                document.getElementById('faculty_link').classList.remove("btn-link");
                document.getElementById('others_link').classList.remove("btn-info");
                document.getElementById('others_link').classList.add("btn-link");
                document.getElementById('students_link').classList.remove("btn-info");
            }
            ;
            function otherClicked() {
                document.getElementById('mainFaculty').style.display = 'none';
                document.getElementById('otherFaculty').style.display = 'block';
                document.getElementById('faculty_link').classList.remove("btn-info");
                document.getElementById('faculty_link').classList.add("btn-link");
                document.getElementById('others_link').classList.add("btn-info");
                document.getElementById('others_link').classList.remove("btn-link");
                document.getElementById('students_link').classList.remove("btn-info");
            }
            ;
        </script>
<?php
        echo $other.' reached';
if($other===true){
        echo '<script type="text/javascript">onDocumentLoad(otherClicked());</script>';
}
?>
    </head>
    <body>
        <?php include "./nav_link.php" ?>
        <?php include "./nav.php" ?>



        <div class="container" id="try">
            <?php include './banner.php' ?> 
            <div id="mainTitleFaculty">
                Chemical Engineering Department List
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <ul>
                        <li id="faculty_link" class="btn-lg btn-info" onclick="facultyClicked()"><a href="#">Faculty</a></li>
                        <li id="students_link" class="btn-lg btn-link"><a href="Students.php">Students</a></li>
                        <li id="others_link" class="btn-lg btn-link" onclick="otherClicked()"><a href="#">Others</a></li>
                    </ul>
                </div>

                <div class="col-lg-10 mainFaculty row" id="mainFaculty">
                    <?php
                    try {
                        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                                or die('Could not connect to the database server' . mysqli_connect_error());
                        $dir = $BASE_DIR . "assets/images/faculties/";
                        $query = "select * from faculties where type = 0";
                        $result = $con->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['faculties_id'];
                                $name = $row['faculties_name'];
                                $researchTopic = $row["faculties_research"];
                                $designation = $row["faculties_designation"];
                                $specialization = $row["faculties_specialization"];
                                $contactEmail = $row["faculties_email"];
                                if (file_exists($dir . $id . '.jpg')) {
                                    $imgUrl = $dir . $id . '.jpg';
                                } else {
                                    $imgUrl = $BASE_DIR . 'assets/images/dp/default_male.jpg';
                                }
                                echo <<<END
                <div class = "col-lg-6 col-md-6 col-sm-6 col-xs-6 professor">
                    <div class = "image thumbnail"><img src = "$imgUrl"/></div>
                    <div class = "professorName"> $name </div>
                    <div class = "professorContact"><span class = "contactSpan" onclick = "contactProf( $id )">Contact: $contactEmail</span></div>
                    <div><a href = "facultyDetail.php?id=$id ">More..</a></div>
                    <!--<div class = "professorDesg"></div>
                    <div class = "professorSpec"><span class = "heading">Specialization: </span>  </div>
                    <div class = "professorRes"><span class = "heading">Research Topic: </span>  </div>
                    <div class = "profCV"><a href = "../assets/file/cv_faculties/cv_id.pdf">Download</a></div>
                    -->
                </div>
END;
                            }
                        } else {
                            echo 'We are sorry, Something went wrong. Please try after sometime. We appreciate your visit.<br>';
                        }
                        $con->close();
                    } catch (Exception $e) {
                        echo 'We are sorry, Something went wrong. Please try after sometime. We appreciate your visit.<br>';
                    }
                    ?>     

                </div>

                <div id = "otherFaculty">
                    This section is under other Faculty
                </div>
            </div>


<?php include './foot.php' ?>      

        </div>

    </body>
</html>
