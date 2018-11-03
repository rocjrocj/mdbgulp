
<?php
/**
 * Created by PhpStorm.
 * User: rjohnson
 * Date: 7/14/18
 * Time: 3:46 PM
 */

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => 'http://dev-rjmdb.pantheonsite.io/api/projects',
CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$data = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

$projectsx = json_decode($data,true);
$projects = json_decode($data);
//print_r($projects);        // Dump all data of the Array

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RocJohnson.com - A Web professional with 20+ years' experience</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">


    <style>
        /* Required for full background image */

        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 100vh;
            }
        }

        .top-nav-collapse {
            background-color: #563e91 !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }

        @media (max-width: 991px) {
            .navbar:not(.top-nav-collapse) {
                background: #563e91 !important;
            }
        }
        }

        /*.rgba-gradient {
            background: -moz-linear-gradient(45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
            background: -webkit-linear-gradient(45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
            background: linear-gradient(to 45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
        }*/
    </style>


</head>

<body>

    <!-- Start your project here-->



    <header>
        <!-- Full Page Intro -->
        <div class="view">
            <video class="video-intro" poster="" playsinline autoplay muted loop>
                <!--<source src="vid/544225670-640_adpp_is.mp4" type="video/mp4">-->
                <!--<source src="vid/483291049-640_adpp_is.mp4" type="video/mp4">-->
                <!--<source src="vid/845840292-640_adpp_is.mp4" type="video/mp4">-->
                <!--<source src="vid/598602128-640_adpp_is.mp4" type="video/mp4">-->
                        <!--<source src="vid/541903908-640_adpp_is.mp4" type="video/mp4">-->
                <!--<source src="vid/473290089-640_adpp_is.mp4" type="video/mp4">-->
                <!--<source src="vid/610205932-640_adpp_is.mp4" type="video/mp4">-->
                <!--<source src="vid/472714963-640_adpp_is.mp4" type="video/mp4">-->
                <source src="vid/HomepageVideo.mp4" type="video/mp4">
            </video>
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradientz d-flex justify-content-center align-items-center rgba-black-strong">
                <!-- Content -->
                <div class="container px-md-3 px-sm-0">
                    <!--Grid row-->
                    <div class="row wow fadeIn">
                        <!--Grid column-->
                        <div class="col-md-12 mb-4 white-text text-centerz smooth-scroll">
                            <h1 class="display-3z font-weight-boldz white-text mb-0 pt-md-5 pt-5 wow fadeIn text-uppercase letterspace10 home-rj orange-textz darken-1z" data-wow-delay="0.3s" data-wow-duration="5.0s">RocJohnson.com</h1>
                            <hr class="hr-light my-4 w-100 wow fadeIn text-left" data-wow-delay="0.4s" data-wow-duration="4.0s">
                            <h4 class="subtext-header mt-2 mb-4 wow fadeIn line-height34" data-wow-delay="0.5s" data-wow-duration="3.0s">A Web professional with 20+ years' experience delivering strategic and innovative digital solutions</h4>
                            <a href="#portfolio" class="btn btn-rounded btn-outline-white wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2.0s">
                                Interactive CV &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                            <a href="#portfolio" class="btn btn-rounded btn-outline-white wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2.0s">
                                Portfolio of Work &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>


    <div class="the-story">
        <h2>The Story</h2>
        <div class="container body">
            <h3>The Story</h3>
            <p>The Elevator Pitch &mdash; I am a web and marketing professional with 20+ years of experience delivering strategic and innovative digital marketing solutions with 10 years of experience building and leading engineering and multi-disciplinary teams. Expert in digital design, development and strategy for mobile, tablet and desktop as well as leading local and remote teams to success with large-scale web and product implementations.</p>
            <p>The Plain English Translation &mdash; I have been designing and developing websites for a long time. I have been delivering "pixel-perfect" code for agencies and creatives since before "pixel-perfect" was a phrase. I wrote my first JavaScript "rollover" with about 1000 lines of js in 1996. I have been obsessed with animation and interactivity on the web ever since I saw the first version of Flash (originally called Future Splash) in 1997. Along the way I taught myself, along with the help of a few great mentors, server-side scripting, backend development and database design and development.</p>
        </div>
    </div>



    <!-- Projects section v.3 -->
    <section class="my-5 container">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-centerz my-5z">The Story</h2>
        <!-- Section description -->
        <p>The Elevator Pitch &mdash; I am a web and marketing professional with 20+ years of experience delivering strategic and innovative digital marketing solutions with 10 years of experience building and leading engineering and multi-disciplinary teams. Expert in digital design, development and strategy for mobile, tablet and desktop as well as leading local and remote teams to success with large-scale web and product implementations.</p>
        <p>The Plain English Translation &mdash; I have been designing and developing websites for a long time. I have been delivering "pixel-perfect" code for agencies and creatives since before "pixel-perfect" was a phrase. I wrote my first JavaScript "rollover" with about 1000 lines of js in 1996. I have been obsessed with animation and interactivity on the web ever since I saw the first version of Flash (originally called Future Splash) in 1997. Along the way I taught myself, along with the help of a few great mentors, server-side scripting, backend development and database design and development.</p>

        <div class="d-flex justify-content-between">
            <p class="mr-5 flex-fill">The Elevator Pitch &mdash; I am a web and marketing professional with 20+ years of experience delivering strategic and innovative digital marketing solutions with 10 years of experience building and leading engineering and multi-disciplinary teams. Expert in digital design, development and strategy for mobile, tablet and desktop as well as leading local and remote teams to success with large-scale web and product implementations.</p>
            <p class="ml-5 flex-fill">The Plain English Translation &mdash; I have been designing and developing websites for a long time. I have been delivering "pixel-perfect" code for agencies and creatives since before "pixel-perfect" was a phrase. I wrote my first JavaScript "rollover" with about 1000 lines of js in 1996. I have been obsessed with animation and interactivity on the web ever since I saw the first version of Flash (originally called Future Splash) in 1997. Along the way I taught myself, along with the help of a few great mentors, server-side scripting, backend development and database design and development.</p>
        </div>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 mb-5">
                <!--Image-->
                <img src="https://mdbootstrap.com/img/Photos/Others/images/83.jpg" alt="Sample project image" class="img-fluid rounded z-depth-1">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">

                <!-- Grid row -->
                <div class="row mb-3">
                    <div class="col-md-1 col-2">
                        <i class="fa fa-book fa-2x cyan-text"></i>
                    </div>
                    <div class="col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Education</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                            aperiam minima elit assumenda voluptate velit.</p>
                    </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3">
                    <div class="col-md-1 col-2">
                        <i class="fa fa-code fa-2x red-text"></i>
                    </div>
                    <div class="col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Technology</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                            aperiam minima elit assumenda voluptate velit.</p>
                    </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">
                    <div class="col-md-1 col-2">
                        <i class="fa fa-money fa-2x deep-purple-text"></i>
                    </div>
                    <div class="col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Finance</h5>
                        <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores
                            nam, aperiam minima elit assumenda voluptate velit.</p>
                    </div>
                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <hr class="my-5">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-7">

                <!-- Grid row -->
                <div class="row mb-3">
                    <div class="col-md-1 col-2">
                        <i class="fa fa-bar-chart fa-2x indigo-text"></i>
                    </div>
                    <div class="col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Marketing</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                            aperiam minima elit assumenda voluptate velit.</p>
                    </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3">
                    <div class="col-md-1 col-2">
                        <i class="fa fa-music fa-2x pink-text"></i>
                    </div>
                    <div class="col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Entertainment</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                            aperiam minima elit assumenda voluptate velit.</p>
                    </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-lg-0 mb-5">
                    <div class="col-md-1 col-2">
                        <i class="fa fa-smile-o fa-2x blue-text"></i>
                    </div>
                    <div class="col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Communication</h5>
                        <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores
                            nam, aperiam minima elit assumenda voluptate velit.</p>
                    </div>
                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-5">
                <!--Image-->
                <img src="https://mdbootstrap.com/img/Photos/Others/images/82.jpg" alt="Sample project image" class="img-fluid rounded z-depth-1">
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Projects section v.3 -->







    <!--Main Layout-->
    <main class="warning-color-dark">








        <div class="container">
            <!--Grid row-->
            <div class="row py-5">
                <!--Grid column-->
                <div class="col-md-12 text-centerz" id="portfolio">
                    <h1 class="white-textz text-warningz white-text op50z wow fadeInUpz fadeIn" data-wow-delay="0.3s" data-wow-duration="4.0s">Portfolio of Work</h1>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumzzz.</p> -->



                    <!--Card-->
                    <div class="card my-5 wow fadeInUpz fadeIn z-depth-5z hoverablez" data-wow-delay="0.4s" data-wow-duration="7.0s">

                        <!--Card image-->
                        <div class="view overlay slideInUpz zoom">
                            <img src="img/bourdain-1.jpg" style="width: 100%;" class="img-fluid" alt="">
                            <a href="#">
                                <div class="maskz rgba-white-slightz"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body text-center mb-3">
                            <!--Title-->
                            <h3 class="card-title mt-2 pb-4"><strong>Featured Project:</strong> Anthony Bourdain &mdash; No Reservations</h3>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="btn btn-primary purple-gradientz btn-roundedz">Button</a>
                        </div>

                    </div>
                    <!--/.Card-->




                    <!-- Card deck -->
                    <div class="card-deck">


                        <?php

                        $i = 0;
                        //$c = count($projects);
                        //if (is_float($c)) {

                        //}

                        foreach ($projects as $project) :
                            $i++;

                            /*if ($i === 4) :
                                $i = 5;*/

                            ?>
                    <!-- Card deck -->
                    <!--<div class="card-deck">-->

                            <?php /*endif; */?>

                            <!-- Card -->
                            <div class="card mb-4 wow fadeIn z-depth-5 hoverable"<?php if ($i === 1): ?> data-wow-delay="0.2s" data-wow-duration="3.0s"><?php elseif ($i === 2): ?> data-wow-delay="0.3s" data-wow-duration="4.0s"><?php elseif ($i === 3): ?> data-wow-delay="0.4s" data-wow-duration="5.0s"><?php endif; ?>



                                <!--Card image-->
                                <div class="view overlay zoom">
                                    <img class="card-img-top" src="http://dev-rjmdb.pantheonsite.io/<?php echo $project->field_project_image_large; ?>" alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!--Card content-->
                                <div class="card-body">

                                    <!--Title-->
                                    <h4 class="card-title"><?php echo $project->field_project_name; ?></h4>
                                    <!--Text-->
                                    <p class="card-text text"> <?php echo $project->field_project_description; ?></p>
                                    <p class="card-text text"><strong>Client:</strong> <?php echo $project->field_client; ?></p>
                                    <p class="card-text text"><strong>Produced with:</strong> <?php echo $project->field_produced_with; ?></p>

                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <div class="text-center pt-3"><button type="button" class="btn btn-primary btn-md">Read more</button></div>

                                </div>

                            </div>
                            <!-- Card -->




                            <?php if ($i === 3) :

                          $i = 0;
                          ?>
                            </div>
                            <!-- /Card deck -->
                        <!-- Card deck -->
                        <div class="card-deck">
                            <?php endif; ?>

                        <?php endforeach; ?>







    </main>
    <!--Main Layout-->





    <div class="container">
        <!--Grid row-->
        <div class="row py-5">
            <!--Grid column-->
            <div class="col-md-12 text-centerz" id="cv">

                <h1>Interactive CV</h1>

                <h2>Current</h2>



            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>




                <div class="container">
        <!--Grid row-->
        <div class="row py-5">
            <!--Grid column-->
            <div class="col-md-12 text-centerz" id="cv">

                <h1>Interactive CV</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumzzz.</p>







                <h2>Roc Johnson</h2>
                <p>207 Plyersmill Road<br/>
                    Cary, NC 27519<br/>
                    901 628 7763<br/>
                    <a href="">roc@rocjohnson.com</a><br/>
                    <a href="">www.rocjohnson.com</a></p>


                <h6>QUALIFICATIONS:</h6>
                <p>A web and marketing professional with 20+ years of experience delivering strategic and innovative digital marketing solutions with 10 years of experience building and leading engineering and multi-disciplinary teams. Expert in digital design, development and strategy for mobile, tablet and desktop as well as leading local and remote teams to success with large-scale web and product implementations.</p>

                <ul>
                    <li>Work with and lead local, remote and offshore teams driving large-scale enterprise websites, digital marketing campaigns and product implementations to successful completion </li>
                    <li>Adept at leading multiple teams on complex projects using different tech stacks </li>
                    <li>In depth experience working on multiple Agile and Kanban teams building products for the healthcare and automotive industries</li>
                    <li>Expertise leading digital marketing, social media strategy, SEO and SEM</li>
                    <li>Expert in digital design, development and strategy for mobile, tablet and desktop</li>
                    <li>Expert in Front-end development using HTML, CSS and JavaScript as well as other frameworks including .NET, PHP, Node, Angular, React and Vue </li>
                    <li>Experience with AWS and Microsoft Azure</li>
                </ul>

                <h6>PROGRAMMING/SCRIPTING/FRAMEWORKS/LIBRARIES:</h6>
                <p>.NET, PHP, C#, Node, Angular, React, HTML5, CSS3, SCSS, JavaScript, jQuery, Socket.io</p>
                <h6>CMS/DATA:</h6>
                <p>Drupal 7, 8, WordPress, Sitecore, dotCMS, Sharepoint, Vignette/OpenText, MS SQL, MySQL, custom built CMS in .NET and PHP</p>
                <h6>TOOLS/OTHER:</h6>
                <p>Agile, Scrum, Kanban, Composer, NPM, Gulp, Git, Jira, Confluence, Responsive Web, Mobile First, Content Strategy</p>
                <h6>PROFESSIONAL EXPERIENCE:</h6>
                <p>Mar 2017-Present, Manager, Web Engineering, Healthgrades.com</p>
                <p>Lead a team of Web Engineers involved in both product development for the EPE and HGMD squads as well as client delivery of Enterprise and Campaign solutions leveraging Healthgrades’ suite of products to deliver highly unique and targeted digital experiences.</p>

                <ul>
                    <li>EPE and client delivery tech stack include Drupal 7 & 8 for CMS, PHP, MySQL, jQuery and Vue on Pantheon</li>
                    <li>HGMD tech stack includes .NET, Angular, React and Bootstrap on AWS</li>
                    <li>Other development tools include Git, Composer, Drush and Lando</li>
                    <li>Implemented Scrum and Agile development practices including the adoption of Jira and Confluence </li>
                    <li>Worked closely with Project Managers, Designers and Content teams to improve process for more effective delivery </li>
                    <li>Identified team skillsets to more efficiently divide work between Front-end Development, Back-end Development and DevOps </li>
                    <li>Award-winning Enterprise websites include MelroseWakefield Healthcare (www.melrosewakefield.org),  Southcoast Health (www.southcoast.org), UPMC Susquehanna (www.susquehannahealth.org), Andrews Sports Medicine & Orthopaedic Center (www.andrewssportsmedicine.com) and Tampa General Hospital (www.tgh.org) </li>
                </ul>

                <p>Jan 2017-Mar 2017, Front-End Developer/Lead UI/UX Designer, Alegion</p>
                <p>Short-term contract as RocJohnson.com with Alegion, a Crowdsourcing Automation for AI Training Data startup, leading the UI/UX design and front-end development with Alegion’s engineering team.</p>

                <ul>
                    <li>Led the UI/UX for Alegion’s Data Labeling/Tagging, Data Collection/Enrichment, Content Moderation and Data Categorization applications</li>
                    <li>Front-end development using Material Design for Bootstrap, HTML, CSS, jQuery, Symfony and React</li>
                    <li>Agile team using Scrum for product development and release</li>
                    <li>Sample pages - http://alegioncd.rocjohnson.com/ </li>
                </ul>

                <p>Mar 2016-Aug 2016, Full Stack Developer, Tronix</p>
                <p>Short-term contract as RocJohnson.com with Tronix, an Automotive Relationship Management application startup, as Full Stack Engineer for the back-end client management suite.</p>

                <ul>
                    <li>Began contract implementing new UI/UX for version 2.0 of Tronix</li>
                    <li>Agile team using Scrum for product development and release</li>
                    <li>Ended contract as Full Stack Developer working in .NET MVC, AngularJS and MS SQL</li>
                </ul>

                <p>Feb 2016-Apr 2016, Web Engineer, Browsium</p>
                <p>Short-term contract as RocJohnson.com with Browsium Enterprise Browser Management Solutions troubleshooting Enterprise Applications for web application remediation and browser management solutions using Browsium’s proprietary Ion software.</p>

                <ul>
                    <li>Debugged broken Enterprise Applications using Fiddler, JavaScript and Development Tools</li>
                    <li>Applied fixes on top of Enterprise Applications using Browsium Ion saving Enterprises millions in licensing and upgrades</li>
                </ul>

                <p>Jan 2015-Mar 2017, Principal, RocJohnson.com</p>
                <p>Returned as Principal with expertise in web strategy, mobile/tablet strategy, social media strategy, website design and development, mobile app design and development, mobile web design and development, responsive web design, mobile first, content strategy, UI/UX, SEO, SEM and team building.</p>

                <ul>
                    <li>Web and Mobile strategy, development and execution</li>
                    <li>Digital Product strategy and development</li>
                    <li>Social Media strategy and execution</li>
                    <li>Digital Health consulting with 15+ years’ experience in healthcare industry</li>
                    <li>Design and develop web sites and web applications for international, national, regional and local clients</li>
                    <li>Clients include The World Bank, National Geographic, The Smithsonian's National Museum of Natural History, Ocean Conservancy, FedEx, Smith & Nephew, Hilton Worldwide, DC.gov, IRS.gov, The Discovery Channel, Food Network and HGTV</li>
                </ul>

                <p>Nov 2008-Dec 2015, Director of Web Services, Methodist Le Bonheur Healthcare</p>
                <p>Served as Director of Web Services for a large healthcare system to develop Web, Mobile/Tablet and Social Media Strategies for organization-wide web initiatives.</p>

                <ul>
                    <li> Developed web, mobile and social media strategies leading the Web Steering and Web Advisory Committees</li>
                    <li>Launched pilot of beacon and geofencing technologies in January 2015</li>
                    <li>Worked with COO to develop and integrate the myMethodist Health & Wellness program into our mobile apps to promote wellness in the community</li>
                    <li>Among the first healthcare systems in the nation to launch Mobile First and Responsive Design websites</li>
                    <li>Led Content Strategy projects for both external and internal websites improving the patient online experience</li>
                    <li>Launched multiple incremental redesigns of external websites including MethodistHealth.org, LeBonheur.org and MethodistMD.org</li>
                    <li>Among the first healthcare systems in the nation to be chosen by Google for their Indoor Maps project</li>
                    <li>Launched Consumer Engagement Patient Portal for system-wide online services</li>
                    <li>Implemented Online Bill Pay with revenue of exceeding $15 mil since July 2012</li>
                    <li>Led the design and development of our mobile app for iOS and Android</li>
                    <li>Implemented real-time ER Wait Times on MethodistHealth.org, mobile web, our mobile app and Facebook</li>
                    <li>Established $100,000 in yearly savings by migrating to an open source Content Management System and open source internal productivity tools</li>
                    <li>Developed web and video strategies for Physician Alignment and Physician Profile initiatives</li>
                    <li>Reorganized and managed strong in-house web team including Web Designers, Web Developers, Web Editors and Web Coordinator</li>
                    <li>Developed SEO and SEM strategies for external websites</li>
                    <li>Leading Innovation Team with focus on open data, interoperability and improved online patient experience</li>
                    <li>Member of the Patient Portal Steering Committee</li>
                </ul>

                <p>Nov 2004-Nov 2008, Principal, RocJohnson.com</p>
                <p>Served as Principal with expertise in web strategy, mobile/tablet strategy, social media strategy, website design and development, mobile app design and development, mobile web design and development, responsive web design, mobile first, content strategy, UI/UX, SEO, SEM and team building.</p>

                <ul>
                    <li>Web and Mobile strategy, development and execution</li>
                    <li>Digital Product strategy and development</li>
                    <li>Social Media strategy and execution</li>
                    <li>Digital Health consulting with 15+ years’ experience in healthcare industry</li>
                    <li>Design and develop web sites and web applications for international, national, regional and local clients</li>
                    <li>Clients include The World Bank, National Geographic, The Smithsonian's National Museum of Natural History, Ocean Conservancy, FedEx, Smith & Nephew, Hilton Worldwide, DC.gov, IRS.gov, The Discovery Channel, Food Network and HGTV</li>
                </ul>

                <p>Mar 2004-Nov 2004, Director of Interactive, archer>malmo advertising</p>
                <p>Served as Director of Interactive for the most broadly awarded full-service advertising agency in the southeast region.</p>

                <ul>
                    <li> Led the implementation of a new strategic initiative for the agency's interactive department</li>
                    <li>Restructured the interactive team to strengthen internal web development skills</li>
                    <li>Generated new interactive opportunities with the agency's existing clients</li>
                    <li>Led the team to new successes with troubled existing projects</li>
                    <li>Cut outdated projects with little to no ROI</li>
                </ul>


                <p>Mar 2003-Mar 2004, Managing Partner, Johnson/Graber, LLC</p>
                <p>Served as Managing Partner as well as lead Web Designer and Web Developer for the small local interactive, advertising and brand strategy agency.</p>

                <ul>
                    <li>Led the creation and growth of Johnson/Graber into a successful, award-winning interactive agency</li>
                    <li>Led interactive design and development projects to successful completion for clients including Fortune 500 companies as well as prominent local, regional and national companies</li>
                </ul>


                <p>Feb 2001-Mar 2003, Principal, internet<dot>design</dot></p>
                <p>Served as Principal and sole-proprietor as well as lead Web Designer and Web Developer for internet<dot>design.</p>

                <ul>
                    <li>Led the creation and growth of internet<dot>design into a successful interactive boutique</li>
                    <li>Led interactive design and development projects to successful completion for clients including </li>
                    <li>Fortune 500 companies</li>
                    <li>Partnered with many local and regional advertising agencies to develop interactive solutions for their clients</li>
                </ul>

                <p>Apr 1999-Feb 2001, Chief Web Developer/Designer, Sossaman + Associates </p>
                <p>Served as both Chief Web Developer and Web Designer for local advertising agency Sossaman + Associates.</p>

                <ul>
                    <li>Led the Web team as Chief Web Developer/Designer</li>
                    <li>Designed and developed award-winning web sites and interactives for many of the advertising agency's clients</li>
                    <li>Assisted in growing the web team during changing times in web industry</li>
                    <li>Created direction for the web team and implemented the team's web process</li>
                </ul>

                <p>Jan 1997-Apr 1999, Senior Design Technologist, Towery Publishing, Inc.</p>
                <p>Served as Senior Design Technologist, Web Designer and Web Producer for Towery Publishing, Inc.</p>

                <ul>
                    <li>Led the web department in merging Towery's design and technology skills to create Web sites with award-winning design combined with cutting-edge technology</li>
                    <li>Brought all Towery books to the web in a dynamic and easy-to-maintain Web site</li>
                    <li>Designed and developed Towery's MapLocator site and custom Content Management System</li>
                </ul>

                <p>Jan 1995-Jan 1997, Web Designer, Internet Marketing Consultants, LLC</p>
                <p>Served as Web Designer and HTML Coder for one of the first local web design agencies.</p>

                <ul>
                    <li>Launched some of the first websites in the Memphis area</li>
                    <li>Designed first generation websites using early graphic technologies such as animated gif and image maps</li>
                    <li>Coded first generation websites using early technologies such as HTML 2.0, frames, and JavaScript for Netscape 2.0</li>
                    <li>Coded websites for first generation web browsers including Netscape 2.0 and Internet Explorer 2.0</li>
                </ul>


                <h6>ACCOMPLISHMENTS:</h6>

                <ul>
                    <li>Presented "The Rise of Mobile Web" at the 2013 Annual Healthcare Internet Conference</li>
                    <li>Presented "Impactful Usability" at the 2011 Annual Healthcare Internet Conference</li>
                    <li>Awarded Best of Show and two Gold ADDY awards at the Memphis Ad Fed ADDY Awards for the Flash-based Web site for The Lofts Memphis</li>
                    <li>Awarded a Gold ADDY at the Memphis Ad Fed ADDY Awards for the design and development of the Flash-based game "Dress Rockey" for the Memphis Redbirds</li>
                    <li>Awarded Judges' Special Award and a Gold ADDY at the Memphis Ad Fed ADDY Awards for the Flash-based Web site for Allen Hoshall</li>
                    <li>Chosen to speak on "Using Web Technology to Enhance Brand Positioning" at the ITEC Conference in Memphis, TN</li>
                </ul>


                <h6>ASSOCIATIONS:</h6>
                <p>Member of Methodist Le Bonheur Healthcare's Associate Partners' Council for improving the patient experience</p>

                <h6>EDUCATION:</h6>
                <p>San Francisco State University, San Francisco, CA, Fall 1995 </p>
                <p>Multimedia Studies Program</p>

                <p>University of Memphis, Memphis, TN, 1989-1994 </p>
                <p>Bachelor of Arts, major in Music Business</p>

                <p><em>References Available Upon Request. Please visit www.RocJohnson.com to view portfolio of work.</em></p>


















            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>



    <footer class="page-footer text-center font-small mt-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

        <!--Call to action-->
        <div class="pt-4">
            <a class="btn btn-outline-white waves-effect waves-light" href="https://mdbootstrap.com/getting-started/" target="_blank" role="button">Download MDB
                <i class="fa fa-download ml-2"></i>
            </a>
            <a class="btn btn-outline-white waves-effect waves-light" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank" role="button">Start free tutorial
                <i class="fa fa-graduation-cap ml-2"></i>
            </a>
        </div>
        <!--/.Call to action-->

        <div>RocJohnson.com</div>
        <div class="d-flex justify-content-center font-small text-uppercase">
            <div>
                <i class="fa fa-envelope" aria-hidden="true"></i> roc@rocjohnson.com
            </div>
            <div>
                <i class="fa fa-phone" aria-hidden="true"></i> 901-628-7763
            </div>
        </div>

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fa fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fa fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fa fa-codepen mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->

    </footer>




    <!--<div style="height: 100vh">
        <div class="flex-center flex-column">
            <h1 class="animated fadeIn mb-4">Material Design for Bootstrapzzz</h1>

            <h5 class="animated fadeIn mb-3">Thank you for using our product. We're glad you're with us.</h5>

            <p class="animated fadeIn text-muted">MDB Team</p>
        </div>
    </div>-->
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>
