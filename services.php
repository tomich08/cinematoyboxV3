<?php
//make a var to store where our xml file is.
$file = 'data/services.xml'; 





?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cinema Toybox - Online Home Theater Catalog - Product Details</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href='http://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/responsive-nav.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/IE8Style1.css">
<![endif]-->
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
</head>

<body class="clearfix">
	<header class="clearfix">
            <div id="topheader">
                <div class="content">
                <?php /* if else statement sets condition so the user can tell if they are looged in or logged out*/ if(isset($_SESSION['logged_in'])){?>
    <li><a href="process-logout.php">Log Out</a></li>
    <?php }else{?>
    <li><a href="login.php">Admin</li></a>
    <?php } ?>
             
                </div>
            </div>
           
            
            <div id="midbanner" class="clearfix">
            	<div class="content">
               	  <div id="logoWrap" class="content">
                       <a href="index.php"><img src="img/logo3.png" alt="Cinema Toybox" id="logo"/></a>
                  </div>
               
            
            	  <nav id="aboutNav">
                  	<ul>
                    	<li><a href="index.php"><img src="img/homebutton.png" alt="Home" class="social"></a></li>
                        <li><a href="about.php"><img src="img/aboutbutton.png" alt="About" class="social"></a></li>
                        <li><a href="contact.php"><img src="img/contactbutton.png" alt="contact" class="social"></a></li>
                        <!--<li><a href="#"><img src="img/FACEBOOK.gif" alt="Facebook" class="social"></a></li>
                    	<li><a href="#"><img src="img/TWITTER.gif" alt="twitter" class="social"></a></li>
                    	<li><a href="#"><img src="img/PINTEREST.gif" alt="pinterest" class="social"></a></li>-->
                        <li><a href="#"><img src="img/CART.png" alt="Shopping Cart" class="social"></a></li>
                    </ul>
                  </nav>
                   
           		</div>
            </div>
            
            
            
            <div id="bottomheader" class="clearfix">
                <div class="content"> 
                  	<nav id="mainNav" class="nav-collapse">       
                  		<ul>
                            <li id="link1"><a href="HDTV.php"><img src="img/HDTVNAV.gif" alt="HDTVs" class="navIcons"/></a></li>
                            <li><a href="projectors.php"><img src="img/PROJECTOR.gif" alt="Projectors" class="navIcons"/></a></li>
                            <li><a href="screens.php"><img src="img/SCREEN.gif" alt="Projection Screens" class="navIcons"/></a></li>
                            <li><a href="homeaudio.php"><img src="img/AUDIO.gif" alt="Home Audio" class="navIcons"/></a></li>
                            <li><a href="accessories.php"><img src="img/ACCESSORIES.gif" alt="accessories" class="navIcons"/></a></li>
                            <li><a href="services.php"><img src="img/SERVICES.gif" alt="Our Services" class="navIcons"></a></li>
                        </ul>
                    </nav>
                 </div>
            </div>
    </header>   
<!--END HEADER AND NAVIGATION-->  
    <main>
    
    
    
            
           
     
   
                  
                <div class="special">  
               <h2>Services</h2>
               </div>
            
                 
    
    		<div id="services">
            <?php
			
			//load the xml data in var $staff/object.  
			$uservices = simplexml_load_file($file) or die('Error:simplexml_load_file failed');
			//loop through the child elements of our XML <staff>root element, doing what's in{} to each <employee>.  We'll refer to the chunk of data in each <employee> element as 'e_data'.->is the object operator. => is the double arrow operator for accessing array values. 
			foreach($uservices->children() as $service=> $s_data){
			//store into vars each bit of data we want from the employee
			$s_title = $s_data->service_title;
			$s_info = $s_data->service_info;
			$s_info2 = $s_data->service_info_2;
			$s_cost = $s_data->service_cost;
			$s_specials = $s_data->service_specials;
			$s_id = $s_data['id'];	
			//display and appealing HTML content structure and output those vars where appropriate:
			?>
           
            	<h4><?php echo $s_title;?></h4>
                <p><?php echo $s_info;?></p><br/>
                <p><?php echo $s_info2;?></p><br/>
                <p><?php echo $s_cost;?></p><br/>
                <p><?php echo $s_specials;?></p><br/>
            
            <?php	
			}//closes for each.
			?>  
            
         </div>
	
            
        
        </main>
        
       
        
       
                 
       <footer>
			<h6>&copy; 2014 Matt Tomich</h6>
   			 <p>This site is intended for student purposes only.  Thank you for visiting!</p>
		</footer>         

<script src="js/jquery-1.11.0.js"></script>   
<script src="js/responsive-nav.js"></script>
<script src="js/script.js"></script>
<script>

  var nav = responsiveNav(".nav-collapse");

</script>
</body>
</html>
