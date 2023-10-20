<?php
include_once("connection.php");
?>  
<div class="slider-area">
  <img src="https://img.freepik.com/premium-photo/baby-kids-toys-white-background-teddy-bear-wooden-educational-toys-desk-overhead-view_908985-25670.jpg?size=626&ext=jpg&ga=GA1.1.1413502914.1696896000&semt=ais" width="600" height="500">
  <img src="https://img.freepik.com/premium-photo/baby-kids-toys-white-background-teddy-bear-wooden-educational-toys-desk-overhead-view_908985-25670.jpg?size=626&ext=jpg&ga=GA1.1.1413502914.1696896000&semt=ais" width="600" height="500">
</div>
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Lish of product</h2>
                        <div class="product-carousel">
                        
                       
                           <?php
						  
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--A product -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="200" height="200">
                                 
                                </div>
                                
                                <h2><a href="?page=quanly_product details&ma=<?php echo  $row['Product_ID']?>"> <?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?></ins> 
                                </div> 
                            </div>
                
                <?php
				}
				?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
   
                
    
    
   
  