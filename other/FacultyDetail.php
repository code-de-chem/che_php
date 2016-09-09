<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include './xdgh84hj56/db_de_54sd4fd4fds.php';
$BASE_DIR = "../";
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
            }
            ;
            function otherClicked() {
                document.getElementById('mainFaculty').style.display = 'none';
                document.getElementById('otherFaculty').style.display = 'block';
            }
            ;

        </script>
    </head>
    <body>
        <?php include "./nav_link.php" ?>
        <?php include "./nav.php" ?>



        <div class="container" id="try">
            <?php include './banner.php' ?> 

            <div class="pageHeading">Faculty Details</div>
            <div class="row">
                <div class="col-lg-2">
                    <ul>
                        <li id="faculty_link" class="btn-lg btn-info"><a href="Faculty.jsp">Faculty</a></li>
                        <li id="students_link" class="btn-lg btn-link"><a href="Students.jsp">Students</a></li>
                        <li id="others_link" class="btn-lg btn-link"><a href="Faculty.jsp">Others</a></li>
                    </ul>
                </div>

                <div class="col-lg-10">
                    <%
                    if(new File(session.getServletContext().getRealPath("/assets")+"//images//faculties//"+id+".jpg").exists()){
                    imgUrl = "../assets/images/faculties/"+id+".jpg";
                    }
                    else{
                    imgUrl = "../assets/images/dp/default_male.jpg";
                    }
                    try{
                    Class.forName("com.mysql.jdbc.Driver").newInstance();
                    Connection con = DriverManager.getConnection(ches.ism.helper.DBpwd.DBURL, ches.ism.helper.DBpwd.UN, ches.ism.helper.DBpwd.PWD);
                    PreparedStatement ps = con.prepareStatement("select * from ismism.faculties where faculties_id = ?");
                    ps.setInt(1, id);

                    ResultSet rs = ps.executeQuery();
                    while(rs.next()){
                    name = rs.getString("faculties_name");
                    researchTopic = rs.getString("faculties_research");
                    designation = rs.getString("faculties_designation");
                    specialization = rs.getString("faculties_specialization");
                    contactEmail = rs.getString("faculties_email");
                    }
                    %>
                    <div class="col-lg-3"><img class="thumbnail" src="<%= imgUrl %>" /></div>
                    <div class="col-lg-9">
                        <div><span class="facultySubSubHeading">Name: </span><%= name %></div>
                        <div><span class="facultySubSubHeading">Research Topic:  </span><%= researchTopic %></div>
                        <div><span class="facultySubSubHeading">Designation:  </span><%= designation %></div>
                        <div><span class="facultySubSubHeading">Specialization: </span> <%= specialization %></div>
                        <div><span class="facultySubSubHeading">Contact:  </span><%= contactEmail %></div>
                    </div>

                    <%
                    }
                    catch(Exception ex){

                    }

                    %>



                </div>

            </div>

            <div class="row">            
                <div class="col-lg-2"></div>            

                <div class="col-lg-10">

                    <ul id="facultyDetailTab" class="nav nav-tabs">
                        <li class="active"><a href="#facultyEducation" data-toggle="tab">Education</a></li>
                        <li><a href="#facultyCourses" data-toggle="tab">Courses</a></li>
                        <li><a href="#facultyResearch" data-toggle="tab">Research</a></li>
                        <li><a href="#facultyAwards" data-toggle="tab">Awards &amp; Honors</a></li>
                        <li><a href="#facultyPublications" data-toggle="tab">Publications</a></li>
                    </ul>


                    <div id="facultyTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="facultyEducation">
                            <p>Dummy content <br/> Education background of teachers</p>
                        </div>
                        <div class="tab-pane fade" id="facultyCourses">
                            <p>Dummy content <br/> What are the cources that are being taught by the faculties</p>
                        </div>
                        <div class="tab-pane fade" id="facultyResearch">
                            <p>Dummy content <br/> Research introduction of faculties</p>
                        </div>
                        <div class="tab-pane fade" id="facultyAwards">
                            <p>Dummy content <br/> Achievments of faculties I think nothing is gonna be here
                            </p>
                        </div>
                        <div class="tab-pane fade" id="facultyPublications">
                            <p>Dummy content <br/> This section is for publications. I will try to hook up with google scholar.
                            </p>
                        </div>
                    </div>


                </div>

            </div>

            <%@include file="foot.jsp"  %><%-- for Footer link --%>            

        </div>
    </body>
</html>
