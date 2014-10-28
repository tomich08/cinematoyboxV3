<?php 
//the id of which product to show starts off as a default. 
$chosen_id = 1;
//before it runs the query, replace that id # with the one the user chose. if user clicked one on the ALL Products page.  
if(isset($_POST['detail_id'])){
	$chosen_id=$_POST['detail_id'];
}
//bring in the function code from an external document:
include("includes/functionlib.php");
//run a query using one of the functions from that include. 
$results = run_my_query('SELECT * FROM products WHERE id='.$chosen_id); 

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
    <?php
				
					//following while loop retrieves information from database. 
					$results->data_seek(0);
					
					while($row=$results->fetch_assoc()){
						
						$prodhead = $row['prod_head'];

				?>
    <h2><?php /*imports the name of each individual product*/ echo $prodhead; ?></h2>
    <?php
				
				}
				?>
    </div>
    	<aside>
        	<ul>
               	<li><a href="products.php">Back</a></li>
                </ul>
            <div id="sidenav" class="clearfix">
            	
                
             
                <div class="side_nav_bar">
                <h3>Shop Home Cinema</h3>
                </div>
                <div class="side_nav_2">
                <ul>
                <li><a href="#test">Menu</a></li>
                </ul>
                </div> 
          		
           
                
                <nav class="nav_drop1">
                	<div class="nav_drop">
                    <ul>
                        <li><a href="#">LCD Televisions</a></li>
                        <li><a href="#">LED Televisions</a></li>
                        <li><a href="#">Projection Screens</a></li>
                        <li><a href="#">Audio</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Remotes</a></li>
                        <li><a href="#">Blu Ray Players</a></li>
                    </ul>
                    
                </nav>
            </div>
		</aside>
        
        <article class="clearfix">
            <div class="products-box">
            	<?php
				
					//following while loop retrieves information from database. 
					$results->data_seek(0);
					
					while($row=$results->fetch_assoc()){
						$id = $row['id'];	
						$producttype = $row['product_type'];
						$prodhead = $row['prod_head'];
						$brand = $row['brand'];
						$price = $row['price'];
						$bg = $row['bg_img'];
						$prod_desc = $row['prod_desc'];
					
					
				
				?>
               </div> 
                 
                
            	
               
       		
           <div class="products_detail">
            <div class="pic_box_det">
                <img src="img/<?php /*imports each individual image of the products*/ echo $bg; ?>" alt="photo of <?php echo $brand; ?>" class="detailpic"/> 
          
          
          
                  <div class="full_desc"
                 <p><?php /*imports the detailed product description of each item*/ echo $prod_desc; ?></p>
                 </div>
                     </div>   
            <div class="add-to-cart_det clearfix">
            	<h5>$<?php /*imports the indiv*/echo $price;?></h5>
                <p>Price does not include tax.  Delivery and installation available for an extra charge.</p>
                <input type="submit"  class="submit2" value="Add to Cart"/>
            </div>
           </div> 
           
            
            	<?php
				
				}
				?>
                
                
                
                
                
             
             
                    	
                    	
                
                
                
                
                
            
        </article>
        </main>
        
       
       
                        <!--<img src="img/<?php /*display thumbnail*/ echo $p_thumb; ?>" alt="photo of <?php /*display the name*/ echo $p_name;?>"/>-->
                 
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
</html>
