<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Products
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Product 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Title </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_title" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
              <!--     <div class="form-group"> form-group Begin 
                       
                      <label class="col-md-3 control-label"> Product Url </label> 
                      
                      <div class="col-md-6"> col-md-6 Begin 
                          
                          <input name="product_url" type="text" class="form-control" required>

                          <br>

                          <p style="font-weight:bold;font-style:italic;font-size:16px;"> Use Dash '-' for url </p>
                          
                      </div> col-md-6 Finish 
                       
                   </div>form-group Finish -->
                   

                   <div class="form-group">
                         <label class="col-md-3 control-label">Expiry Date</label>
                             <div class="col-md-6">
                         <input name="expiry_date" type="date" class="form-control" required>
                     </div>
                    </div>


                    <div class="form-group">
                            <label class="col-md-3 control-label"> Life Span </label>
                              <div class="col-md-6">
                             <input name="lifespan" type="text" class="form-control" required >
                        </div>
                    </div>
                   
                
                   
                 <!--   <div class="form-group">form-group Begin -->
                       
                     <!-- <label class="col-md-3 control-label"> Category </label> 
                      
                      <div class="col-md-6"> col-md-6 Begin -->
                          
                          <!--<select name="cat" class="form-control"> form-control Begin 
                              
                              <option selected disabled> Select a Category </option>-->
                              
                              <?php 
                              
                             // $get_cat = "select * from categories";
                              //$run_cat = mysqli_query($con,$get_cat);
                              
                              //while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                 // $cat_id = $row_cat['cat_id'];
                                 // $cat_title = $row_cat['cat_title'];
                                  
                                 // echo "
                                  
                                 // <option value='$cat_id'> $cat_title </option>
                                  
                                 // ";
                                  
                              //}
                              
                              ?>
                              
                        <!--  </select> form-control Finish -->
                          
                      <!--</div> col-md-6 Finish -->
                       
                   <!--</div> form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Image 1 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img1" type="file" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Image 2 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img2" type="file" class="form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Image 3 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img3" type="file" class="form-control form-height-custom">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Price </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_price" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <!-- <div class="form-group">  form-group Begin -->
                       
                     <!-- <label class="col-md-3 control-label"> Sale Price </label> -->
                      
                     <!-- <div class="col-md-6"> col-md-6 Begin -->
                          
                          <!--<input name="product_sale" type="text" class="form-control">-->
                          
                    <!--  </div> col-md-6 Finish -->
                       
                  <!-- </div> form-group Finish -->
                   
                  <!-- <div class="form-group">form-group Begin -->
                       
                      <!-- <label class="col-md-3 control-label"> Product Keywords </label> 
                      <div class="col-md-6">col-md-6 Begin 
                          
                          <input name="product_keywords" type="text" class="form-control" required>
                          
                      </div> col-md-6 Finish -->
                       
                   <!--</div> form-group Finish -->
                   
                   <div class="form-group">
    <label class="col-md-3 control-label"> Product Descriptions </label>
    <div class="col-md-6">
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#descriptions" class="tab_link">
                    Product Descriptions
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="descriptions">
                <textarea name="product_desc" id="desc_editor" class="form-control">
                    
                </textarea>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label"> Product Quantity </label>
    <div class="col-md-6">
        <input name="product_quan" type="text" class="form-control" required >
    </div>
</div>


                       
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Label </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->

                        <select name="product_label">
                        
                            <option selected disabled> Select Label Product </option>
                        
                            <option value="new">New Product</option>
                        
                            <option value="sale">Sale Product</option> 

                        </select>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>


<?php 

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    //$product_url = $_POST['product_url'];
    //$product_cat = $_POST['product_cat'];
    //$cat = $_POST['cat'];
    $manufacturer_id = $_POST['manufacturer'];
    $date = $_POST['expiry_date'];
    $product_price = $_POST['product_price'];
   // $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    $product_features = $_POST['product_quan'];
   // $product_status = $_POST['product_status'];
    $product_sale = $_POST['product_sale'];
    $product_label = $_POST['product_label'];
    $lifespan = $_POST['product_lifespan'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    $insert_product = "insert into products (p_cat_id,cat_id,manufacturer_id,expiry_date,product_title,product_url,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc,product_quan,product_status,product_label,product_sale) values ('$product_cat','$cat','$manufacturer_id',NOW(),'$product_title','$product_url','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc','$product_features','$product_status','$product_label','$product_sale')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
        
    }
    
}

?>


<?php } ?>