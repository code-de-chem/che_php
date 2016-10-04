<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Activities</title>
        <?php include './common_import.php' ?>
        <script type="text/javascript" src="../assets/js/activities.js" ></script>
    </head>
    <body>
        <?php include "./nav_link.php" ?>
        <?php include "./nav.php" ?>


        <div class="container" id="try">

            <?php include 'banner.php' ?>

            <div class="pageHeading"> Activities</div>

            <div class="row">
                <div class="col-lg-2 mainActivities">
                    <div id="activityList">   
                        <div class="activitySection" onclick="showActivity('ChES_events')">ChES</div>
                        <div class="activitySection" onclick="showActivity('Guest_Lectures')">Guest Lectures</div>
                        <div class="activitySection" onclick="showActivity('Concetto_2015')">Concetto 2015</div>
                        <div class="activitySection" onclick="showActivity('Concetto_2014')">Concetto 2014</div>
                        <div class="activitySection" onclick="showActivity('Concetto_2013')">Concetto 2013</div>
                        <div class="activitySection" onclick="showActivity('Concetto_2012')">Concetto 2012</div>
                    </div>
                </div>

                <div class="col-lg-8" id="activities">
                    <div class="activitiesSubSection" id="activity_home">
                        <div class="activityEventContentMain" id="mainPage" >CATALYCA is a cloister of Chemical Engineers where engulfment of whimsical ideas, innovation and thoughts takes place. It is a persona of Chemical Engineering Department through which it organizes events in annual technical fest CONCETTO.</div> 
                    </div>
                    <div class="activitiesSubSection" id="ChES_events">
                        <div class="activitySubSectionHead">Events under ChES</div>
                        <div class="activityEvent">
                            <div class="activityEventName" onclick="display('activityEventContent', 'inklingAlpha')">Inkling Alpha</div>
                            <div class="activityEventContent" id="inklingAlpha">Industries are no way apart from engineering college. They are the two faces of a single coin. This event will provide engineering students a chance to come up with their thoughts, ideas and the most important innovation in terms of development and efficiency of industries. Fresh brains have fresh idea and they need a platform to cook the idea. So, this is the most awaiting platform that the most innovative and creative brains needed.</div>
                        </div>
                        <div class="activityEvent">
                            <div class="activityEventName" onclick="display('activityEventContent', 'inklingAlpha2_0')">Inkling Alpha 2.0</div>
                            <div class="activityEventContent" id="inklingAlpha2_0" >CATALYCA invites participants to manifests their ieas on the topic & present it technically. It is the golden opportunity to remove stage fear and to improve soft skills.</div>
                        </div>
                    </div>
                    <div class="activitiesSubSection" id="Guest_Lectures">
                        <div class="activitySubSectionHead">Guest Lectures</div>
                        We had several guest lectures so we can put lot of stuffs here.
                    </div>
                    <div class="activitiesSubSection" id="Concetto_2015">
                        <div class="activitySubSectionHead">Concetto 2015</div>
                        This is the upcoming event
                    </div>
                    <div class="activitiesSubSection" id="Concetto_2014">
                        <div class="activitySubSectionHead">Concetto 2014</div>
                        <div class="activityEvent">
                            <div class="activityEventName" onclick="display('activityEventContent', 'brainquest')">BRAINQUEST</div>
                            <div class="activityEventContent" id="brainquest">
                                If you are an enthusiastic puzzleteir and a good team player, cravingly waiting for an opportunity to showcase your skills, BRAINQUEST provides you the chance to showcase them by competing in a fierce battle of wits against the most intellectual of brains. With a variety of events from treasure hunts to presentations, BRAINQUEST provides you a quizzing experience you've never imagined.
                                <br/><a href="https:/www.facebook.com/brainquest.concetto14" target="new">Reach us</a>
                            </div>
                        </div>
                        <div class="activityEvent">
                            <div class="activityEventName" onclick="display('activityEventContent', 'dessein')">DESSEIN LA MODELE</div>
                            <div class="activityEventContent" id="dessein">Industries are no way apart from engineering college. They are the two faces of a single coin. This event will provide engineering students a chance to come up with their thoughts, ideas and the most important innovation in terms of development and efficiency of industries. Fresh brains have fresh idea and they need a platform to cook the idea. So, this is the most awaiting platform that the most innovative and creative brains needed.</div>
                        </div>
                        <div class="activityEvent">
                            <div class="activityEventName" onclick="display('activityEventContent', 'chemifuge')">CHEMIFUGE</div>
                            <div class="activityEventContent" id="chemifuge" >CATALYCA invites participants to manifests their ideas on the topic & present it technically. It is the golden opportunity to remove stage fear and to improve soft skills.</div>
                        </div>
                    </div>
                    <div class="activitiesSubSection" id="Concetto_2013"><div class="text">
                            <div class="activitySubSectionHead">Concetto 2013</div>
                            <div class="activityEvent">
                                <div class="activityEventName" onclick="display('activityEventContent', 'paper2013')">PAPER PRESENTATION</div>
                                <div class="activityEventContent" id="paper2013">A  Paper presentation was organized on the topic “BHOPAL GAS TRAGEDY – CAUSES AND EFECTS”. A Team of 3 members were allowed to participate.students had to send their abstract in not more than 500 words to event coordinator.Best 3 were selected for the final round.</div>
                            </div>
                            <div class="activityEvent">
                                <div class="activityEventName" onclick="display('activityEventContent', 'workshop2013')">Workshop</div>
                                <div class="activityEventContent" id="workshop2013">A three day extensive workshop on “ASPEN plus” was organized by “CHES” for interested students of 2nd  year and 3rd year. A total of 32 students participated in the workshop. People from the industry were invited to conduct this wokshop.</div>
                            </div>
                            <div class="activityEvent">
                                <div class="activityEventName" onclick="display('activityEventContent', 'model2013')">WORKING MODEL</div>
                                <div class="activityEventContent" id="model2013" >Participants were required to make a small working model of “HEAT EXCHANGER”. Participants had to participate in teams of five members. Participants were judged on the efficiency and cost-effectiveness of their working model. </div>
                            </div>
                        </div>
                    </div>
                    <div class="activitiesSubSection" id="Concetto_2012"><div class="text">
                            <div class="activitySubSectionHead">Concetto 2012</div>
                            <div class="activityEvent">
                                <div class="activityEventName" onclick="display('activityEventContent', 'paper2012')">PAPER PRESENTATION</div>
                                <div class="activityEventContent" id="paper2012">A Paper presentation was organized on the topic “INDUSTRIAL SAFETY MEASURES IN CHEMICAL PLANTS”.<br/>
                                    A total of 8 teams participated. Each team consisted of 4 members. Each team had to send it abstract to the event co-ordinator. Best 3 abstracts were selected FOR FINAL ROUND.</div>
                            </div>
                            <div class="activityEvent">
                                <div class="activityEventName" onclick="display('activityEventContent', 'quiz2012')">QUIZ</div>
                                <div class="activityEventContent" id="quiz2012">A quiz was organized on the topic “modern innovations  in chemical engineering”. The event was organized in two rounds. Each team consisted of 3 members.The first round was qualifier round .Out of the 10 teams that participated 3 were selected for the final round.</div>
                            </div>
                            <div class="activityEvent">
                                <div class="activityEventName" onclick="display('activityEventContent', 'workshop2012')">WORKSHOP</div>
                                <div class="activityEventContent" id="workshop2012" >A three day extensive workshop on matlab was organized by “CHES” for interested students. A total of 43 students participated in the workshop.on the 3rd day a test was taken and students were given certificates.</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 linkToGallery"><a href="gallery.php">Gallery</a></div>
            </div>    


            <?php include "foot.php" ?>

        </div>
    </body>
</html>