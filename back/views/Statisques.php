<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 22/04/2018
 * Time: 00:20
 */
require_once '../core/livreurC.php';
$commande= new livreurC();
$dataPoints = array(
    array("label"=> "Libre", "y"=> (int)$commande->CountLivreurLibre()),
    array("label"=> "Conge", "y"=> (int)$commande->CountLivreurConge()),
    array("label"=> "Livraison", "y"=> (int)$commande->CountLivreurEnLivraison())

);

?>
<!--
 Author: W3layouts
 Author URL: http://w3layouts.com
 License: Creative Commons Attribution 3.0 Unported
 License URL: http://creativecommons.org/licenses/by/3.0/
 -->
<!DOCTYPE HTML>
<html>
<head>
    <title>Dashboard Mer bleue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <!-- tables -->
    <link rel="stylesheet" type="text/css" href="css/table-style.css" />
    <link rel="stylesheet" type="text/css" href="css/basictable.css" />
    <script type="text/javascript" src="js/jquery.basictable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').basictable();

            $('#table-breakpoint').basictable({
                breakpoint: 768
            });

            $('#table-swap-axis').basictable({
                swapAxis: true
            });

            $('#table-force-off').basictable({
                forceResponsive: false
            });

            $('#table-no-resize').basictable({
                noResize: true
            });

            $('#table-two-axis').basictable();

            $('#table-max-height').basictable({
                tableWrapper: true
            });
        });
    </script>
    <!-- //tables -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
</head>
<body>
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            <div class="header-main">
                <div class="logo-w3-agile">
                    <h1><a href="index.html">Pooled</a></h1>
                </div>
                <div class="w3layouts-left">

                    <!--search-box-->
                    <div class="w3-search-box">
                        <form action="#" method="post">
                            <input type="text" placeholder="Search..." required="">
                            <input type="submit" value="">
                        </form>
                    </div><!--//end-search-box-->
                    <div class="clearfix"> </div>
                </div>
                <div class="w3layouts-right">
                    <div class="profile_details_left"><!--notifications of menu start -->
                        <ul class="nofitications-dropdown">
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new messages</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="images/in11.jpg" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="images/in10.jpg" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="images/in9.jpg" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new notification</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="images/in8.jpg" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="images/in6.jpg" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="images/in7.jpg" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all notifications</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 8 pending task</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar yellow" style="width:40%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar green" style="width:90%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar red" style="width: 33%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar  blue" style="width: 80%;"></div>
                                            </div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all pending tasks</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <!--notification menu end -->

                    <div class="clearfix"> </div>
                </div>
                <div class="profile_details w3l">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="images/in4.jpg" alt=""> </span>
                                    <div class="user-name">
                                        <p>Seif</p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down"></i>
                                    <i class="fa fa-angle-up"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                                <li> <a href="Disconnect.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"> </div>
            </div>
            <!--heder end here-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Gestion livraison</li>
            </ol>
            <div class="agile-grids">
                <!-- tables -->

                <script>
                    window.onload = function () {

                        var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            exportEnabled: true,
                            title:{
                                text: "Statisques Livreurs"
                            },
                            subtitles: [{
                                text: "Nombre"
                            }],
                            data: [{
                                type: "pie",
                                showInLegend: "true",
                                legendText: "{label}",
                                indexLabelFontSize: 16,
                                indexLabel: "{label} - #percent%",
                                yValueFormatString: "฿#,##0",
                                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                            }]
                        });
                        chart.render();

                    }
                </script>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


                <!-- //tables -->
            </div>
            <!-- script-for sticky-nav -->
            <script>
                $(document).ready(function() {
                    var navoffeset=$(".header-main").offset().top;
                    $(window).scroll(function(){
                        var scrollpos=$(window).scrollTop();
                        if(scrollpos >=navoffeset){
                            $(".header-main").addClass("fixed");
                        }else{
                            $(".header-main").removeClass("fixed");
                        }
                    });

                });
            </script>
            <!-- /script-for sticky-nav -->
            <!--inner block start here-->
            <div class="inner-block">

            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            <div class="copyrights">
                <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>
    <!--//content-inner-->
    <!--/sidebar-menu-->
    <div class="sidebar-menu">
                    <header class="logo1">
                        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
                    </header>
                        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
                                    <ul id="menu" >
                                        <li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
                                        
                                        
                                         <li id="menu-academico" ><a href="inbox.html"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span><div class="clearfix"></div></a></li>
                                    <li><a href="gallery.php"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gestion clients</span><div class="clearfix"></div></a></li>
                                    <li id="menu-academico" ><a href="charts.php"><i class="fa fa-bar-chart"></i><span>Gestion commande</span><div class="clearfix"></div></a></li>
                                     <li id="menu-academico" ><a href="afficherRec.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion reclamation</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       
                    </li>
                  <li id="menu-academico" ><a href="afficherRen.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion rendez_vous</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><a href="rendez.php">Ajouter rendez_vous</a></li>
                       <li id="menu-academico-avaliacoes" ><a href="statistiques.php">statistiques rendez_vous</a></li>
                  
                      </ul>
                    </li>
                                    <li id="menu-academico" ><a href="button.php"><i class="fa fa-bar-chart"></i><span>Gestion produit</span><div class="clearfix"></div></a></li>
                                
                                     <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion promotion</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                           <ul id="menu-academico-sub" >
                                           <li id="menu-academico-avaliacoes" ><a href="pajouter.php">Ajouter</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="form.php">Modifier</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="psupprimer.php">Supprimer</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="prechercher.php">Rechercher</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="affectpromo">Affecter une promotion</a></li>
                                          </ul>
                                        </li>




                                    <li id="menu-academico" ><a href="catalogue.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion catalogue</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                           <ul id="menu-academico-sub" >
                                           <li id="menu-academico-avaliacoes" ><a href="cajouter.php">Ajouter</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="form1.php">Modifier</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="csupprimer.php">Supprimer</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="crechercher.php">Rechercher</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="prechercher.php">Affecter un catalogue</a></li>
                                          </ul>
                                        </li>
                                        
                                    <li><a href="AjouterLivraison.php"><i class="fa fa-table"></i>  <span>Ajouter Livraison</span><div class="clearfix"></div></a></li>
                    <li><a href="AjouterLivreur.php"><i class="fa fa-table"></i>  <span>Ajouter Livreur</span><div class="clearfix"></div></a></li>
                    <li><a href="Afficherlivraison.php"><i class="fa fa-table"></i>  <span>Afficher Livraison</span><div class="clearfix"></div></a></li>
                    <li><a href="AfficherLivreur.php"><i class="fa fa-table"></i>  <span>Afficher Livreur</span><div class="clearfix"></div></a></li>
                    <li><a href="Statisques.php"><i class="fa fa-table"></i>  <span>Statisques Livreurs</span><div class="clearfix"></div></a></li>
                                    <li><a href="maps.php"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Gestion tendance</span><div class="clearfix"></div></a></li>
                                  </ul>
                                </div>
                              </div>
    <div class="clearfix"></div>
</div>
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }

        toggle = !toggle;
    });
</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- /Bootstrap Core JavaScript -->

</body>
</html>


