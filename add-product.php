<?php 


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
    <main class="addMain">
    			<div class="special">
               <h2>Add Products</h2>
               </div>
         
                <form action="process-product.php" method="post" enctype="multipart/form-data" id="addForm"/>
                
                	<div id="form1">
                	<p class="addInv">What type of product?
                    <select name="prod_type" >
                        <option>Accessories</option>
                        <option>Theater Kit</option>
                        <option>Audio</option>
                        <option>Television</option>
           			 </select><span id="feedtype"></span></p>
                    
                    <p class="addInv">Name of product:<input type="text" name="prod_name" /><span id="feedname"> </span></p>
                    
                    <p class="addInv">What is the brand?
                    <select name="brand-type">
                        <option>Innotech</option>
                        <option>Kiawi</option>
                        <option>Patson Electronics</option>
                        <option>Miatchi</option>
           			 </select><span id="feedbrand"></span></p>
                     </div>
                     
                     <div id="form2">
                    <p class="addInv">Price of new product:$<input type="text" name="newprice" /><span id="feedprice"></span></p>
                    
                    <p class="addInv">Brief product description: <input type="TEXTAREA" name="brief_desc" /><span id="feedbdesc"></span></p>
                    
                    <p class="addInv">Full product description: <input type="TEXTAREA" name="full_desc" /><span id="feedfdesc"></span></p>
                    </div>
                    
                    <div id="formimg">
                    <p class="addInv" id="imgleft">Thumbnail Img product<input type="file" name="newthumb"/><span id="feedthumb"></span></p>
                    
                    <p class="addInv" id="imgright">Full size image of product<input type="file" name="new_full_pic" /><span id="feedpic"></span></p>
                	
                    </div>
                    <input type="submit" value="Add this Product" class="addprod"/>
                </form>
                
                
      
	
    </main>
    
    
        
       
                 
       <footer>
			<h6>&copy; 2014 Matt Tomich</h6>
   			 <p>This site is intended for student purposes only.  Thank you for visiting!</p>
		</footer>   
       
    <script src="js/add-product.js"></script>
    <script src="js/jquery-1.11.0.js"></script>   
<script src="js/responsive-nav.js"></script>
<script src="js/script.js"></script>
<script>

  var nav = responsiveNav(".nav-collapse");

</script>
</body>
</html>
