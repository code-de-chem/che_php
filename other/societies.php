<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Societies</title>
        <link rel="shortcut icon" href="../assets/images/favicon.ico" />
        <script><?php include "../assets/js/activities.js" ?></script>
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="http://localhost:8084/ChemicalIsm/assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/navigation.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/Student.css" />
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
        <div class="navigationLink" id="navigationLink"><a href="../index.jsp"></a><%= link %></div>
        <div id="myAccountPopup" onmouseover="beingHovered('myAccountPopup')" onmouseout="hoverEnded('myAccountPopup')">
            <div id="popupUserImg"><img src="<%= imgUrl %>"/></div>
            <div id="popupUsername"><%= (String)session.getAttribute("ISMusername") %></div>
            <div id="popupUserDeatils">
                <div class="popupUserExtra" id="popupUserAccount">My Account</div>
                <div class="popupUserExtra" id="popupChangePasssword">Change Password</div>
            </div>
        </div>


        <?php include "nav.php" ?>


        <div class="container" id="try">

            <div id="banner">
                <div id="dept">CHEMICAL ENGINEERING</div>
                <div id="clg">Indian School Of Mines, Dhanbad</div>
            </div>

            <div class="pageHeading"> Societies </div>


            <div class="row">
                <div class="mainPlacements">
                    <div class="contentPlacements">
                        Meritorious students who successfully complete BTech program with flying colours are likely to be placed in reputed firms such as Haliburton, SchlumBurger, BHEL, BOC India, BPCL, Coal India, Dr. Reddy’s, DRDO, Fluent India, Fluidyn, Foster Wheeler, GE India Technology, GAIL India, GM, Honeywell, IOCL, Ispat Industries, ISRO, ITC, Jindal, NALCO, OIL India, ONGC, RCF, Reliance, SAIL, Tata Chemicals, Tata Steel, Tridiagonal Solutions, Vedanta, etc
                        <br/><br/> In Academic years 2014-15 several reputed companies visited campus.<br/><br/>
                        The Highest package offered was 10.6 LPA.<br/><br/>
                        The Average package offered was 6.4 LPA.

                    </div>
                </div>
            </div>    


            <?php include "foot.php" ?>


        </div>
    </body>
</html>


