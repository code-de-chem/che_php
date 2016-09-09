<?php 
if (null!==filter_var($_POST["id"], FILTER_SANITIZE_STRING)) {
    $id = filter_var($_POST["id"], FILTER_SANITIZE_STRING);
    
} else {
    
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
        <div class="required display-none" id="loginError"></div>
        <form name="loginForm" id="loginForm" action="ISMLoginProcess.jsp" method="post">
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
        <form method="POST" action="addISMUser.jsp">
            <div class="mainDetailsEnter">
                <div class="row">
                    <div class="col-lg-3"><label for="newregNo">Registration Number:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="newregNo" id="newregNo" required="Required"/></div>
                    <div class="col-lg-3 required" id="errReg"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="username">Name:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="username" id="username" required="Required"/></div>
                    <div class="col-lg-3 required" id="errUser"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="ismEmail">ISM email:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="ismEmail" id="ismEmail" required="Required"/></div>
                    <div class="col-lg-3 required" id="errISMEmail"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="alternateEmail">Alternate Email:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="alternateEmail" id="alternateEmail" required="Required"/></div>
                    <div class="col-lg-3 required" id="errAEmali"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="username">Honours:</label></div>
                    <div class="col-lg-6"><input type="checkbox" name="honours" id="honours" value="Honours" /></div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <label for="username">Minors:</label>
                        <input type="checkbox" name="minors" id="minors" onclick="enableMinorText()" />
                    </div>
                    <div class="col-lg-6"><input type="text" name="minorBranch" id="minorBranch" disabled="disabled" value="NA" /></div>
                    <div class="col-lg-3 required" id="errMinor"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="contactNo">Contact Number:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="text" name="contactNo" id="contactNo" autocomplete="off" required="Required"/></div>
                    <div class="col-lg-3 required" id="errContact"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="newpassword">Password:<span class="required">*</span></label></div>
                    <div class="col-lg-6"><input type="password" name="newpassword" id="newpassword" autocomplete="off" required="Required"/> </div>
                    <div class="col-lg-3 required" id="errPass"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3"><label for="sex">Sex:</label></div>
                    <div class="col-lg-5">
                        <input type="radio" name="sex" id="male" value="male" checked="checked" /><label class="sexRadio" for="male">M</label>
                        <input type="radio" name="sex" id="female" value="female" /><label class="sexRadio" for="female">F</label>
                    </div>
                </div>
                
            <input type="hidden" name="newUser" value="newUser" required="required"/>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4"><input type="submit" value="Submit" /></div>
                </div>
            </div>
        </form>
    </div>
</div>




