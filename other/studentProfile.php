<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include './xdgh84hj56/db_de_54sd4fd4fds.php';
$BASE_DIR = "../";
?>
<?php
if (null!==filter_var($_GET["id"], FILTER_SANITIZE_STRING)) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_STRING);
} else {
    header($prevUrl);
}
$flag = false;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Student Profile</title>
        <?php include './common_import.php' ?>
    </head>
    <body>
        <?php include "./nav_link.php" ?>
        <?php include "./nav.php" ?>



        <div class="container" id="try"> 

            <?php include './banner.php' ?>    
            <div class="pageHeading"> Students </div>

            <div class="row">
                <?php
                try {
                    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                            or die('Could not connect to the database server' . mysqli_connect_error());
                    $dir = $BASE_DIR . "assets/images/faculties/";
                    $query = "Select * from ismism.ism_user_info where ism_admission_no = '" . trim($id)."'";
                    $result = $con->query($query);
                    if ($result->num_rows > 0) {
                       
                        while ($row = $result->fetch_assoc()) {
                            if ($row["ism_user_verified"] != 1) {
                                echo 'Student profile id pending for approval, Please visit after sometime.';
                            } else {
                                $flag = true;
                                $name = $row["ism_user_name"];
                                $email = $row["ism_user_email"];
                                $altEmail = $row["ism_alternate_email"];
                                $honours = $row["ism_user_honours"];
                                $minors = $row["ism_user_minor"];
                                if ($honours == 1) {
                                    $honour = "YES";
                                }
                                if ($minors == 1) {
                                    $minor = $row["ism_user_minor_info"];
                                }
                                echo <<<END
                                <div class="col-lg-3 thumbnail"><img src=" $imgUrl " /></div>
                                <div class="col-lg-9">
                <table id="studentDetail">
                    <tr><td>Name:</td> <td> $name </td></tr>
                    <tr><td>ISM Email:</td> <td> $email </td></tr>
                    <tr><td>Alternate Email:</td> <td> $altEmail </td></tr>
                    <tr><td>Honours:</td> <td> $honour </td></tr>
                    <tr><td>Minors:</td> <td> $minor </td></tr>
                </table>
            </div>
END;
                            }
                        }
                    } else {
                        echo 'We are sorry, Something went wrong. Please try after sometime. We appreciate your visit this.<br>';
                    }
                } catch (Exception $e) {
                    echo 'We are sorry, Something went wrong. Please try after sometime. We appreciate your visit.<br>';
                    exit();
                }
                
                if ($flag) {
                    $query = "Select * from ismism.ism_user_details where ism_user_admission_no = " . $id;
                    $result = $con->query($query);
                    $con->close();
                    if($result->num_rows>0){
                        while ($row = $result->fetch_assoc) {
                            $data = $row["ism_user_details_data"];
                            echo '<div class="well">';
                            echo '<div>'. $data. '</div>';
                            echo '</div>';
                        }
                    }
                }
                ?>      

               <!--
                if((session.getAttribute("ISMloggedin") == "true") && (originalAdmNo.equals((String)admissionNo)) ){

                

                <div class="addDetails">
                    <form method="POST" action="addISMDetails.jsp">
                        <div class="blogSubmitFormRow">
                            <label for="otherDetails">Other Details</label>
                            <textarea cols="80" id="otherDetails" name="otherDetails" rows="10">Add your details here</textarea>
                        </div><br/><br/>
                        <div class="profileSubmit"><input type="submit" value="Submit" /></div>
                    </form>
                </div>





                <ckeditor:replace replace="otherDetails" basePath="../ckeditor/" />
                
                }
                -->
            </div>

            <?php include "./foot.php" ?>

        </div>
    </body>
</html>

