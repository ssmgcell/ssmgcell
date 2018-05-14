<?php session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>SSM GMS User | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <section id="container" >
<?php include("includes/header.php");?>
<?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                              	<div class="col-md-2 col-sm-2 box0">
                        <div>
                 
                  </div></div>	
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
                                <?php 
                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and status is null");
$num1 = mysqli_num_rows($rt);
{?>
					  			<h3><?php echo htmlentities($num1);?></h3>
                  			</div>
					  			<p><?php echo htmlentities($num1);?> Complaints not Process yet</p>
                  		</div>
                      <?php }?>


                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_news"></span>
                    <?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
                  <h3><?php echo htmlentities($num1);?></h3>
                        </div>
                  <p><?php echo htmlentities($num1);?> Complaints Status in process</p>
                      </div>
  <?php }?>

                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_news"></span>
                       <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
                  <h3><?php echo htmlentities($num1);?></h3>
                        </div>
                  <p><?php echo htmlentities($num1);?> Complaint has been closed</p>
                      </div>

<?php }?>
                  	
                  	
                  	</div><!-- /row mt -->	
                  
				  
		       </section>
			   		    
      <div class="l-content" role="main">
                              <h1 class='page-title'>Instructions for Grievance Statements and Supporting Documents</h1>
                              
        <a id="main-content"></a>
                                        <div  about="/privilege-and-tenure-committee/grievance-information" typeof="foaf:Document" class="ds-1col node node--page view-mode-full node--full node--page--full clearfix">

  
  <div class="field field--name-body field--type-text-with-summary field--label-hidden"><div class="field__items"><div class="field__item even" property="content:encoded"><h5>Please contact your campus Privilege and Tenure Chair if you are considering filing a grievance.&nbsp; All formal grievance letters should be sent to the chair of the committee.</h5><h5><span style="line-height: 1.538em;">Grievance Statement&nbsp;</span></h5><p>The parties of a grievance are usually a faculty member and an administrator who took action or failed to take action with which the former disagrees and the disagreement is based on&nbsp;perceived violation(s) of rights and/or privileges as outlined by the Board of Regents.</p><p>The first paragraph of the grievance statement need not be long. However, it should provide in&nbsp;broad terms, a description of the grievance. Discussion of your grievance with the Chair of the&nbsp;Privilege &amp; Tenure (P &amp; T) Committee may facilitate selection of a broad descriptor(s) for the&nbsp;action(s) that you believe are below a named University standard(s).</p><h5>Specific Action(s) Appealed</h5><p>Describe briefly and specifically the action(s) being appealed. Describe these actions&nbsp;chronologically. When available, cite documentation, e.g., “(see document No. 2),” for&nbsp;each action in this section as listed in your Table of Contents for Supporting Documents.&nbsp;</p><p>Make sure the date when the perceived infraction occurred is clearly indicated.&nbsp;</p><p>You are given 30 days to file a grievance with the possibility of a 30 day extension.</p><h5>Reasons for Appeal(s)</h5><p>Provide brief explanations of why you are appealing each of the above actions. The&nbsp;order for each explanation should coincide with the above list of actions you are&nbsp;appealing. You will have an opportunity to expand on these reasons during your&nbsp;investigation interview.&nbsp;</p><h5>Relief Requested</h5><p><span style="line-height: 1.538em;">Detail what will resolve your grievance, for instance, how a perceived due process error&nbsp;or some other perceived unfair administrative action might be handled. Discussion of&nbsp;your grievance with the Chair of the Privilege &amp; Tenure Committee may facilitate a&nbsp;proposal for resolution of your grievance.&nbsp;</span></p><h5>Table of Contents for Supporting Documents<strong>&nbsp;</strong></h5><ul><li>Provide a table of contents for the supporting documents cited in your grievance statement. &nbsp;</li><li><span style="line-height: 1.538em;">These documents should be listed chronologically and attached to your grievance statement.&nbsp;</span></li><li>Documents include but are not limited to copies of letters, emails, departmental guidelines,&nbsp;<span style="line-height: 1.538em;">University level standards, policies and procedures, as well as sections of state or federal laws&nbsp;</span><span style="line-height: 1.538em;">cited in the Specific Action(s) Appealed section of the grievance statement.&nbsp;</span></li></ul>
   
      </section>
	  
<?php include("includes/footer.php");?>
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
  
  </body>
</html>
<?php } ?>
