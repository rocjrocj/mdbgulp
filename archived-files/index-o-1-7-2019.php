
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
    //print_r($projects); // Dump all data of the Array


    $recent = array();
    $featured = array();
    $all = array();
    foreach ($projects as $rkey => $project){
      if ($project->field_recent == 'On'){
        $recent[] = $project;
      } else if ($project->field_featured == 'On') {
        $featured[] = $project;
      } else if ($project->field_recent != 'On' && $project->field_featured != 'On') {
        $all[] = $project;
      }
    }
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
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../dist/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../dist/css/style.css" rel="stylesheet">

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
    </style>
</head>

<body>

    <?php
    /*echo "recent - " . count($recent);
    echo "featured - " . count($featured);
    echo "all - " . count($all);*/
    ?>

    <header>
        <!-- Full Page Intro -->
        <div class="view">
            <video class="video-intro" poster="" playsinline autoplay muted loop>
                <source src="../dist/vid/HomepageVideo.mp4" type="video/mp4">
            </video>
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradientz d-flex justify-content-center align-items-center rgba-blue-light">
                <!-- Content -->
                <div class="container px-md-3 px-sm-0">
                    <!--Grid row-->
                    <div class="row wow fadeIn">
                        <!--Grid column-->
                        <div class="col-md-12 mb-4 white-text text-centerz smooth-scroll">
                            <h1 class="display-3z font-weight-boldz white-text mb-0 pt-md-5 pt-5 wow fadeIn text-uppercase letterspace10 home-rj orange-textz darken-1z" data-wow-delay="0.3s" data-wow-duration="5.0s">RocJohnson.com</h1>
                            <hr class="hr-light my-4 w-100 wow fadeIn text-left" data-wow-delay="0.4s" data-wow-duration="4.0s">
                            <h4 class="subtext-header mt-2 mb-4z wow fadeIn line-height34" data-wow-delay="0.5s" data-wow-duration="3.0s">A Web professional with 20+ years' experience delivering strategic and innovative digital solutions</h4>
                            <div class="d-flex justify-content-centerz font-small text-uppercasez pt-3z mb-4">
                                <div class="pr-3">
                                    <a href="mailto:roc@rocjohnson.com" class="white-text wow fadeIn line-height34z" data-wow-delay="0.5s" data-wow-duration="3.0s"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;roc@rocjohnson.com</a>
                                </div>
                                <div>
                                    <a href="tel:9016287763" class="white-text wow fadeIn line-height34z" data-wow-delay="0.5s" data-wow-duration="4.0s"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;901-628-7763</a>
                                </div>
                            </div>
                            <a href="#about" class="btn btn-rounded btn-outline-white wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2.0s">
                                About Me &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                            <a href="#portfolio" class="btn btn-rounded btn-outline-white wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2.0s">
                                Portfolio of Work &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                            <a href="#cv" class="btn btn-rounded btn-outline-white wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2.0s">
                                Digital CV &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i>
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
    <!-- Projects section v.3 -->
    <section class="my-5 container" id="about">
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-boldz text-centerz mb-4 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="4.0s">My Story</h2>
        <!-- Section description -->
        <p class="mb-4 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="5.0s"><strong>The Elevator Pitch</strong> &mdash; I am a web and marketing professional with 20+ years of experience delivering strategic and innovative digital marketing solutions with 10 years of experience building and leading engineering and multi-disciplinary teams. Expert in digital design, development and strategy for mobile, tablet and desktop as well as leading local and remote teams to success with large-scale web and product implementations.</p>
        <p class="mb-4 wow fadeIn" data-wow-delay="0.5s" data-wow-duration="6.0s"><strong>The Plain English Translation</strong> &mdash; I have been designing and developing websites for a long time. I have been delivering "pixel-perfect" code for agencies and creatives since before "pixel-perfect" was a phrase. I wrote my first JavaScript "rollover" with about 1000 lines of js in 1996. I have been obsessed with animation and interactivity on the web ever since I saw the first version of Flash (originally called Future Splash) in 1997. Along the way I taught myself, along with the help of a few great mentors, server-side scripting, backend development and database design and development.</p>
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 my-5 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="4.0s"">
                <!--Image-->
                <img src="../dist/img/logo-v2-blue.png" alt="Sample project image" class="img-fluid roundedz z-depth-1z p-5">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7 mt-4">
                <!-- Grid row -->
                <div class="row mb-4 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="5.0s"">
                    <div class="col-md-1 col-2">
                        <i class="fa fa-cogs fa-2x cyan-text"></i>
                    </div>
                    <div class="col-md-11 col-10">
                        <h5 class="font-weight-boldz mb-4">Current &mdash; Manager, Web Engineering, <a href="https://healthgrades.com" target="_blank">Healthgrades.com</a></h5>
                        <p class="grey-textz mb-4">Since March of 2017, I have been leading a team of Web Engineers and Front-End Developers responsible for Healthgrades product development on the EPE and HGMD squads as well as delivering award-winning Enterprise and Marketing Campaign Sites for the nation's largest healthcare systems.</p>
                    </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3 wow fadeIn" data-wow-delay="0.5s" data-wow-duration="6.0s"">
                    <div class="col-md-1 col-2">
                        <i class="fa fa-code fa-2x red-text"></i>
                    </div>
                    <div class="col-md-11 col-10">
                        <h5 class="font-weight-boldz mb-3">Technology at Healthgrades</h5>
                        <p class="grey-textz">Healthgrades leverages a mix of technology stacks to back its many products and websites &mdash;</p>
                        <ul>
                            <li>EPE and Client Delivery tech stacks include Drupal 8, PHP, MySQL, jQuery and Vue.js on Pantheon</li>
                            <li>HGMD tech stack includes .NET, Angular, React and Bootstrap on AWS</li>
                        </ul>
                        <!--<p>Other development tools and processes include &mdash;</p>
                        <ul>
                            <li>Git, Composer, Gulp, Drush, Lando and Webpack</li>
                            <li>Particle and Pattern Lab</li>
                            <li>Scrum, Kanban and Agile development practices</li>
                            <li>Jira and Confluence</li>
                        </ul>-->
                    </div>
                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <hr class="my-5 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="4.0s">

        <!-- Grid row -->
        <div class="row mt-5">

            <!-- Grid column -->
            <div class="col-lg-7 mt-4z">

                <!-- Grid row -->
                <div class="row mt-4z wow fadeIn" data-wow-delay="0.4s" data-wow-duration="5.0s">
                    <div class="col-md-1 col-2">
                        <i class="fa fa-history fa-2x indigo-text"></i>
                    </div>
                    <div class="col-md-11 col-10">
                        <h5 class="font-weight-boldz mb-4">Previous Experience &mdash;</h5>
                        <h6>Director, Web Services, <a href="https://methodisthealth.org" target="_blank">Methodist Le Bonheur Healthcare</a></h6>
                        <p class="grey-textz">Served as Director of Web Services for a large healthcare system to develop Web, Mobile/Tablet and Social Media Strategies for organization-wide web initiatives.</p>
                        <h6><a href="http://rocjohnson.com" target="_blank">RocJohnson.com</a></h6>
                        <p class="grey-textz mb-4">Served as Principal with expertise in web strategy, mobile/tablet strategy, social media strategy, website design and development, mobile app design and development, mobile web design and development, responsive web design, mobile first, content strategy, UI/UX, SEO, SEM and team building.</p>
                    </div>
                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.5s" data-wow-duration="6.0s">
                <!--Image-->
                <img src="../dist/img/logos.jpg" alt="Sample project image" class="img-fluid roundedz z-depth-1z">
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
                    <h2 class="white-text py-2 wow fadeInUpz fadeIn" data-wow-delay="0.3s" data-wow-duration="4.0s">Recent</h2>

                    <!-- Card deck -->
                    <div class="card-deck my-2">
                      <?php
                        $i = 0;
                        foreach ($recent as $project) :
                          $i++;
                      ?>
                        <!-- Card -->
                        <div class="card mb-4 wow fadeIn z-depth-5 hoverable"<?php if ($i === 1): ?> data-wow-delay="0.3s" data-wow-duration="5.0s"><?php elseif ($i === 2): ?> data-wow-delay="0.4s" data-wow-duration="6.0s"><?php endif; ?>
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
                                <p class="card-text"><?php echo $project->field_project_description; ?></p>
                                <p class="card-text text"><strong>Client:</strong> <?php echo $project->field_client; ?></p>
                                <p class="card-text text"><strong>Produced with:</strong> <?php echo $project->field_produced_with; ?></p>
                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <?php if (empty($project->field_link_to_project) != ""): ?>
                                <a href="<?php echo $project->field_link_to_project; ?>" class="btn btn-primary btn-md" target="_blank">Visit Site <i class="fa fa-arrow-right ml-1"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- Card -->
                        <?php endforeach; ?>
                    </div>
                    <!-- Card deck -->
                  <?php
                    foreach ($featured as $project) :
                  ?>
                    <h2 class="white-text py-2 wow fadeInUpz fadeIn" data-wow-delay="0.3s" data-wow-duration="4.0s">Featured</h2>
                    <!--Card-->
                    <div class="card my-2 wow fadeInUpz fadeIn z-depth-5z hoverable" data-wow-delay="0.4s" data-wow-duration="7.0s">
                        <!--Card image-->
                        <div class="view overlay slideInUpz zoom">
                            <img src="../dist/img/bourdain-1.jpg" style="width: 100%;" class="img-fluid" alt="">
                            <a href="#">
                                <div class="maskz rgba-white-slightz"></div>
                            </a>
                        </div>
                        <!--Card content-->
                        <div class="card-body text-center mb-3">
                            <!--Title-->
                            <h3 class="card-title mt-2 pb-2 text-centerz"><strong>Featured Past Project:</strong> <?php echo $project->field_project_name; ?></h3>
                            <!--Text-->
                            <p class="card-text"><?php echo $project->field_project_description; ?></p>
                            <p class="card-text text"><strong>Client:</strong> <?php echo $project->field_client; ?>
                            <!--<p class="card-text text">-->&nbsp; <strong>Produced with:</strong> <?php echo $project->field_produced_with; ?></p>
                            <a href="<?php echo $project->field_link_to_project; ?>" class="btn btn-primary purple-gradientz btn-roundedz" target="_blank">Visit Site <i class="fa fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                    <!--/.Card-->
                  <?php endforeach; ?>
                    <h2 class="white-text py-2 mt-5 wow fadeInUpz fadeIn" data-wow-delay="0.2s" data-wow-duration="2.0s">Additional Work</h2>
                    <!-- Card deck -->
                    <div class="card-deck my-3">
                    <?php
                    $i = 0;
                    foreach ($all as $project) :
                        $i++;
                    ?>
                    <!-- Card deck -->
                    <!--<div class="card-deck">-->

                            <?php /*endif; */?>

                            <!-- Card -->
                            <!--<div class="card mb-4 wow fadeIn z-depth-5 hoverable"<?php /*if ($i === 1): */?> data-wow-delay="0.2s" data-wow-duration="3.0s"><?php /*elseif ($i === 2): */?> data-wow-delay="0.3s" data-wow-duration="4.0s"><?php /*elseif ($i === 3): */?> data-wow-delay="0.4s" data-wow-duration="5.0s">--><?php /*endif; */?>

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
                                    <p class="card-text text"><?php echo $project->field_project_description; ?></p>
                                    <p class="card-text text"><strong>Client:</strong> <?php echo $project->field_client; ?></p>
                                    <p class="card-text text"><strong>Produced with:</strong> <?php echo $project->field_produced_with; ?></p>

                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <div class="text-centerz pt-3z"><a href="<?php echo $project->field_link_to_project; ?>" class="btn btn-primary btn-md" target="_blank">Visit Site <i class="fa fa-arrow-right ml-1"></i></a></div>

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
                <div class="d-flex justify-content-between">
                    <h1>Digital CV</h1>
                    <a href="../dist/Roc-Johnson-Sep-2018.pdf" class="btn btn-primary" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbsp;Download PDF of CV</a>
                </div>

                <h2>Roc Johnson</h2>
                <p>207 Plyersmill Road<br/>
                    Cary, NC 27519<br/>
                    901 628 7763<br/>
                    <a href="mailto:roc@rocjohnson.com" target="_blank">roc@rocjohnson.com</a><br/>
                    <a href="http://www.rocjohnson.com" target="_blank">www.rocjohnson.com</a>
                </p>


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
        <div class="d-flex justify-content-center font-small text-uppercasez pt-3">
            <div class="pr-3">
                <a href="mailto:roc@rocjohnson.com"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;roc@rocjohnson.com</a>
            </div>
            <div>
                <a href="tel:9016287763"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;901-628-7763</a>
            </div>
        </div>

        <hr class="my-1">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.linkedin.com/in/roc-johnson-3609924/" target="_blank"><i class="fa fa-linkedin-square mr-3"></i></a>
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://twitter.com/rocj" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/channel/UCw2EMg6b9dX15SkC1PKouEw?view_as=subscriber" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <!--<a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fa fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fa fa-pinterest mr-3"></i>
            </a>-->

            <a href="https://github.com/rocjrocj" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

           <!-- <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fa fa-codepen mr-3"></i>
            </a>-->
        </div>
        <!-- Social icons -->

        <!--Copyright-->
       <!-- <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> RocJohnson.com </a>
        </div>-->
        <!--/.Copyright-->

    </footer>



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../dist/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../dist/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../dist/js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>
