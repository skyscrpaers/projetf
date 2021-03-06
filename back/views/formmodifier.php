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
									<?php 

       require_once ("../../config.php");

$db=config::getConnexion();
$nb1=$db->query('SELECT COUNT(*) FROM `produit` WHERE datev<Current_Date')->fetchColumn();

?>
<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php if ($nb1 > 0 ){echo 1;}?></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have new notification</h3>
													
												</div>
											</li>
											<li><a href="#">
											   <div class="notification_desc">
												<a href="pconsulterproduitperime.php"><p>Vous Avez <?php echo $nb1?> Produits Perimee.Verifier Stock.</p></a>
												
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 
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
													<p>Malorum</p>
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
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Gestion produits</li>
            </ol>
<div class="agile3-grids">
</form>
<h2>Liste des produits</h2>
<?PHP
 function afficherModifierproduit($idproduit)
	{
		$db = config::getConnexion();
		$sql = 'SELECT * FROM produit WHERE idproduit= :idproduit';
		$req = $db->prepare($sql);
		$req->bindValue(':idproduit',$idproduit);
		$req->execute();
		$result = $req->fetch(PDO::FETCH_OBJ);
		return $result;
	}
require_once ("../core/produitc.php");
$produit=new produitC();
$listeProduits=$produit->afficherproduit();
$affe=afficherModifierproduit($_GET['idproduit']);
?>
	<table border="3">
<tr>
<td>Code Produit</td>
<td>Nom Produit</td>
<td>Date Validite</td>
<td>Quantite</td>
<td>Prix</td>
</tr>
<?PHP
foreach($listeProduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['idproduit']; ?></td>
	<td><?PHP echo $row['nomproduit']; ?></td>
	<td><?PHP echo $row['datev']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<?PHP
}
?>
</table>
</table>
<form method="POST" action="modifierproduit.php">
<table>
			<h2>Modifier Produit(vous devez entrez l'id du produit en question)</h2>
<tr>
<td>Code Produit</td>
<td><input type="text" name="idproduit" value="<?PHP echo $affe->idproduit;?>" ></td>
</tr>
<tr>
<td>Nom Produit</td>
<td><input type="text" name="nomproduit" value="<?PHP echo $affe->nomproduit;?>"></td>
</tr>
<tr>
<td>Date Validite</td>
<td><input type="date" name="datev" value="<?PHP echo $affe->datev;?>"></td>
</tr>
<tr>
<td>Quantite</td>
<td><input type="text" name="quantite" value="<?PHP echo $affe->quantite;?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="text" name="prix" value="<?PHP echo $affe->prix;?>"></td>
</tr>
<tr>
<td><input type="submit" name="ajouter" value="Modifier"></td>
</tr>

</table>
</form>	
<h2>Rechercher un produit</h2>
	<?PHP
require_once("../core/produitC.php");
$produit=new produitC();
//echo ($_POST["rech"]);
if (isset($_POST["rechr"]))
{
$rech=$_POST["rechr"];
$listeProduits=$produit->rechercherproduit($rech);
require_once ("prechercherproduit.php");
}
?>
<form method="POST" action="#">
<input type="text" name="rechr">
<input type="submit" name="rechercher" value="rechercher">
	</form>
<table border="3">
<tr>
<td>Code Produit</td>
<td>Nom Produit</td>
<td>Date Validite</td>
<td>Quantite</td>
<td>Prix</td>
<td>Actions</td>
</tr>
<?PHP
foreach($listeProduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['idproduit']; ?></td>
	<td><?PHP echo $row['nomproduit']; ?></td>
	<td><?PHP echo $row['datev']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idproduit']; ?>" name="idproduit"></td>
	<?PHP
}
?>
</table>

	
				<!-- buttons -->
				
				<!-- Color-variations -->
				
				<!-- //Color-variations -->
				
					<!-- //button-states -->
					<!-- button-sizes -->
					
					<!-- //button-sizes -->
					<!-- icon-hover-effects -->
					
					
					<!-- //icon-hover-effects -->
					<div class="clearfix"> </div>
				</div>
				<!-- //buttons -->
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
	 <p>© 2016 Pooled . All Rights Reserved </p>
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
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
										
										 <li id="menu-academico" ><a href="inbox.html"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span><div class="clearfix"></div></a></li>
									<li><a href="gallery.html"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gestion produits</span><div class="clearfix"></div></a></li>
									<li id="menu-academico" ><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Gestion commande</span><div class="clearfix"></div></a></li>
									<li id="menu-academico" ><a href="icons.html"><i class="fa fa-bar-chart"></i><span>Gestion sav</span><div class="clearfix"></div></a></li>
									<li id="menu-academico" ><a href="button.php"><i class="fa fa-bar-chart"></i><span>Gestion produit</span><div class="clearfix"></div></a></li>
									 <li><a href="tabels.html"><i class="fa fa-table"></i>  <span>Gestion livraison</span><div class="clearfix"></div></a></li>
									 <li><a href="calendar.html"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Gestion promotion</span><div class="clearfix"></div></a></li>
									<li><a href="maps.html"><i class=fa fa-map-marker" aria-hidden="true"></i>  <span>Maps</span><div class="clearfix"></div></a></li>
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