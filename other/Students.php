<?php 
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include './xdgh84hj56/db_de_54sd4fd4fds.php';
$BASE_DIR = "../";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Students</title>
        <?php include './common_import.php' ?>
    </head>
    <body>
        <?php include "./nav_link.php" ?>
        <?php include "./nav.php" ?>



<div class="container" id="try"> 
        
<?php include './banner.php' ?>        
        
        
        <div class="pageHeading"> Students</div>
        
        <div class="row">    
        <div class="col-lg-2">
                <ul>
                    <li id="faculty_link" class="btn-lg btn-link"><a href="Faculty.php">Faculty</a></li>
                    <li id="students_link" class="btn-lg btn-info"><a href="#">Students</a></li>
                    <li id="others_link" class="btn-lg btn-link"><a href="Faculty.php?other=true">Others</a></li>
                </ul>
            </div>
            
            <div class="col-lg-10">
        <?php
            try{
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                            or die('Could not connect to the database server' . mysqli_connect_error());
                    $query = "select * from ism_user_info where ism_user_verified = 1";
                    $result = $con->query($query);
                   $con->close();

                if ($result->num_rows > 0) {
echo <<<END
    <div class="studentsHead">Please suffix username with '@ce.ism.ac.in' to get students email Id.</div>
        <div class="studentListTable">
        <table>
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Username </th>
                </tr>
            </thead>
END;
                    while ($row = $result->fetch_assoc()) {
                        $stud_name = $row["ism_user_name"];
                        $stud_adm_no = $row["ism_admission_no"];
                        $stud_email = $row["ism_user_email"];
                        $stud_email_id = substr($stud_email, 0, strrpos($stud_email, "@"));
                        
                        echo '<tr>';
                        echo '<td><a href="studentProfile.php?id='.$stud_adm_no.'">'. $stud_name .'</a></td>';
                        echo '<td>'. $stud_email_id.'</td>';
                        echo '</tr>';
                    }
                    echo '</table></div>';
                }
                else {
                    echo 'We are sorry, Something went wrong. Please try after sometime. We appreciate your visit this.<br>';
                }
        }
        catch(Exception $e){
            echo 'We are sorry, Something went wrong. Please try after sometime. We appreciate your visit.<br>';
        }
                
        ?>
        </div>
            </div>

        
    <?php include './foot.php'?>
    </div>
        


    </body>
</html>