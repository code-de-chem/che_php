<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include './xdgh84hj56/db_de_54sd4fd4fds.php';
$BASE_DIR = "../";
?>
<?php
$loginErrMsg = "";
$ismEmail = "";
$contactNo = "";
$newregNo = "";
$username = "";
$alternateEmail = "";
if (null !== filter_var($_POST["login"], FILTER_SANITIZE_STRING)) {

    $id = filter_var($_POST["login"], FILTER_SANITIZE_STRING);
    if ($id === "login") {
        $regNo = filter_var($_POST["regNo"], FILTER_SANITIZE_STRING);
        $pass = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
        if ($regNo !== "" && $pass !== "") {
            $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                    or die('Could not connect to the database server' . mysqli_connect_error());
            $query = "Select * from ism_user_info where ism_admission_no ='" . $regNo . "'and ism_user_password = '" . $pass . "'";
            $result = $con->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo $row["ism_user_name"];
                }
            } else {
                $loginErrMsg = "Invalid username or password.";
            }
        } else {
            $loginErrMsg = "Invalid username or password.";
        }
    } else if ($id === "new") {
        $newregNo = filter_var($_POST["newregNo"], FILTER_SANITIZE_STRING);
        if ($newregNo === "" || strlen($newregNo) < 10) {
            $errReg = "Invalid registration No.";
        }
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
        if ($username === "" || strlen($username) < 3) {
            $errUser = "Invalid Name, must be more than 2 chars";
        }
        $ismEmail = filter_var($_POST["ismEmail"], FILTER_SANITIZE_STRING);
        if ($ismEmail === "" || strlen($ismEmail) < 5 || strpos($ismEmail, "@") < 0) {
            $errISMEmail = "Invalid email";
        }
        $alternateEmail = filter_var($_POST["alternateEmail"], FILTER_SANITIZE_STRING);
        if ($alternateEmail === "" || strlen($alternateEmail) < 5 || strpos($alternateEmail, "@") < 0) {
            $errAEmali = "Invalid email";
        }
        $honours = filter_var($_POST["honours"], FILTER_SANITIZE_STRING);
        if ($honours === "Honours") {
            $honours = 1;
        } else {
            $honours = 0;
        }
        $minors = filter_var($_POST["minors"], FILTER_SANITIZE_STRING);
        if ($minors === "minors") {
            $minors = 1;
        } else {
            $minors = 0;
        }
        $minorBranchInfo = filter_var($_POST["minorBranchInfo"], FILTER_SANITIZE_STRING);
        $contactNo = filter_var($_POST["contactNo"], FILTER_SANITIZE_STRING);
        if ($contactNo === "" || strlen($contactNo) < 10) {
            $errContact = "Invalid mobile no, must be 10 digits";
        }
        $newpassword = filter_var($_POST["newpassword"], FILTER_SANITIZE_STRING);
        if ($newpassword === "" || strlen($newpassword) < 6) {
            $errPass = "must be more than 5 chars";
        }
        $sex = filter_var($_POST["sex"], FILTER_SANITIZE_STRING);
        if ($sex === "female") {
            $sex = 1;
        } else {
            $sex = 0;
        }
        $zero = 0;$one = 1;
        if (!$errReg && !$errUser && !$errISMEmail && !$errAEmali && !$errContact && !$errPass) {
            try{
            $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                    or die('Could not connect to the database server' . mysqli_connect_error());
            $query = "INSERT INTO `ism_user_info` (`ism_admission_no`,`ism_user_name`, `ism_user_email`, `ism_alternate_email`, `ism_user_honours`, `ism_user_minor`, `ism_user_minor_info`, `ism_user_contact_no`, `ism_user_gender`, `ism_user_password`, `ism_user_is_teacher`, `ism_user_verified`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $con->prepare($query);
            $stmt_bind = $stmt->bind_param('ssssiisiisii', $newregNo, $username, $ismEmail, $alternateEmail, $honours, $minors, $minorBranchInfo, $contactNo, $sex, $newpassword, $zero, $one);
            
            if (!$stmt->execute()) {
                echo 'Sorry, Error in registration, please contact web Administrator or try Again.<br>';
            }
            }  catch (Exception $e){
                echo 'Something went wrong please try again later.<br>';
            }
        }
    }
}
?>

<script type="text/javascript">
    function enableMinorText() {
        var minor = document.getElementById("minors").checked;
        if (minor) {
            document.getElementById("minorBranch").value = "";
            document.getElementById("minorBranch").disabled = false;
        }
        else {
            document.getElementById("minorBranch").value = "NA";
            document.getElementById("minorBranch").disabled = true;
        }
    }
</script>

<div class="row">
    <div class="col-lg-4" id="mainLoginISMStudent">
        <div class="loginHead">Already Have Account? Login</div>
<?php
if ($loginErrMsg !== "") {
    echo '<div class="required" id="loginError">' . $loginErrMsg . '</div>';
}
?>
        <form name="loginForm" id="loginForm" action="stud_login_form.php" method="post">
            <div class="row" id="usernameSpan">
                <div class="col-lg-4"><label for="regNo">Registration Number:</label></div>
                <div class="col-lg-8"><input type="text" name="regNo" id="regNo" maxlength="10" required="Required" /></div>
            </div>
            <div class="row" id="passwordSpan">
                <div class="col-lg-4"><label for="password">Password:</label></div>
                <div class="col-lg-8"><input type="password" name="password" id="password" required="Required" /><br /></div>
            </div>
            <input type="hidden" name="login" value="login" required="required"/>
            <div class="row" id="submitSpan">
                <div class="col-lg-3"></div>
                <div class="col-lg-4"><input type="submit" value="Login" /></div>
            </div>
        </form>

    </div>
    <div class="col-lg-8" id="mainNewUser">
        <div class="loginHead">New User? Please signup</div>
        <div><span class="required">* fields are mandatory</span></div>
        <form method="POST" action="stud_login_form.php">
            <div class="mainDetailsEnter">
                <div class="row">
                    <div class="col-lg-3"><label for="newregNo">Registration Number:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="newregNo" id="newregNo" required="Required" value="<?php if ($newregNo) {
    echo $newregNo;
} ?>"/></div>
                    <div class="col-lg-3 required" id="errReg">
                        <?php if ($errReg) {
                            echo $errReg;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="username">Name:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="username" id="username" required="Required" value="<?php if ($username) {
                            echo $username;
                        } ?>"/></div>
                    <div class="col-lg-3 required" id="errUser">
                        <?php
                        if ($errUser) {
                            echo $errUser;
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="ismEmail">ISM email:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="ismEmail" id="ismEmail" required="Required" value="<?php if ($ismEmail) {
                            echo $ismEmail;
                        } ?>"/></div>
                    <div class="col-lg-3 required" id="errISMEmail">
<?php
if ($errISMEmail) {
    echo $errISMEmail;
}
?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="alternateEmail">Alternate Email:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="alternateEmail" id="alternateEmail" required="Required" value="<?php if ($alternateEmail) {
    echo $alternateEmail;
} ?>"/></div>
                    <div class="col-lg-3 required" id="errAEmali">
<?php
if ($errAEmali) {
    echo $errAEmali;
}
?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="username">Honours:</label></div>
                    <div class="col-lg-6"><input type="checkbox" name="honours" id="honours" value="Honours" /></div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <label for="username">Minors:</label>
                        <input type="checkbox" name="minors" id="minors" value="minors" onclick="enableMinorText()" />
                    </div>
                    <div class="col-lg-6"><input type="text" name="minorBranchInfo" id="minorBranchInfo" disabled="disabled" value="NA" /></div>
                    <div class="col-lg-3 required" id="errMinor"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="contactNo">Contact Number:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="contactNo" id="contactNo" autocomplete="off" required="Required" value="<?php if ($contactNo) {
                            echo $contactNo;
                        } ?>"/></div>
                    <div class="col-lg-3 required" id="errContact">
<?php
if ($errContact) {
    echo $errContact;
}
?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="newpassword">Password:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="password" name="newpassword" id="newpassword" autocomplete="off" required="Required"/> </div>
                    <div class="col-lg-3 required" id="errPass">
<?php
if ($errPass) {
    echo $errPass;
}
?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="sex">Sex:</label></div>
                    <div class="col-lg-5">
                        <input type="radio" name="sex" id="male" value="male" checked="checked" /><label class="sexRadio" for="male">M</label>
                        <input type="radio" name="sex" id="female" value="female" /><label class="sexRadio" for="female">F</label>
                    </div>
                </div>

                <input type="hidden" name="login" value="new" required="required"/>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4"><input type="submit" value="Submit" /></div>
                </div>
            </div>
        </form>
    </div>
</div>




