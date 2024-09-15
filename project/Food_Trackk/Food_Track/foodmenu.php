<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Food Menu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- -----form css------ -->
    <!-- <link href="css/order.css" rel="stylesheet"> -->
    <link href="css/foodmenu.css" rel="stylesheet">

    <!-- food cards cdn -->
    <link href=" https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php
            include_once('header.php');
            ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Select Food</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!--station Start -->
        <header>
            <h1>Order Food in Ahmedabad (12345) Train</h1>
            <div class="date-join">

                <p>Journey Date: 03-Aug-2024</p>
            </div>


            <section>
        </header>

        <div class="main-restaurant">
            <h1>maninagar Restaurants</h1>
            <div class="container mt-5 mb-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-white border rounded">
                            <div class="col-md-3 mt-1">
                                <img class="img-fluid img-responsive rounded product-image" src="img/resatau.jpg">
                            </div>
                            <div class="col-md-6 mt-1">
                                <h5>R&R restaurant</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><span>Rating : </span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><span>station : </span><span>ahmedabad</span></div>
                                </div>

                                <div class="mt-1 mb-1 spec-1"><span>veg</span><span class="dot"></span><span>non-veg</span></div>
                                <p class="text-justify text-truncate para mb-0">North Indian, Chinese, South I...
                                    Min. Order: ₹50<br><br></p>
                                    <a href="#">google profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ------------------------------food-menu--------------------------------- -->

        <div class="food-menu">
            <h1> Food Menu </h1>
            <div class="container  justify-content-center mt-50 mb-50">

                <div class="row">
                  
                  <h4>pizza</h4>
                    <div class="col-md-4">
                   
                        <div class="card card-body " style=" width:100%;">
                            <div class="media align-items-center  text-lg-left flex-column flex-lg-row" style="display: flex; width:100%;">

                                <div class="mr-2 mb-3 mb-lg-0">

                                    <img src="img/pizaa.jpg" width="150" height="150" style="margin:10px;" alt="">
                                </div>



                                <div class="media-body">
                                    <h3 class="media-title font-weight-semibold  ">
                                        <a href="#" data-abc="true">Pizza</a>
                                    </h3>
                                    <h5 class="media-title font-weight-semibold">
                                        <a href="#" data-abc="true">Restaurant ID</a>
                                    </h5>

                                    <!-- <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">ved</a></li>
                                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">non-veg</a></li>
                                        </ul> -->

                                    <p class="mb-3">Veg Classic Pizza</p>

                                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                        <h3 class="mb-0 font-weight-semibold">Rs. 349/-</h3>

                                    </div>
                                    <!-- <ul class="list-inline list-inline-dotted mb-0">
                                            <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                            <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                        </ul> -->
                                       


                                </div>
                             
                            </div>

                            <a href="cart" style="width:100%;"> <button type="button" class="btn btn-warning mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                            Add to cart</button></a>

                            <a href="cart" style="width:100%;"> <button type="button" class="btn btn-info mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                           View cart</button></a>
                        </div>
                     </div>


                     <div class="col-md-4">
                   
                   <div class="card card-body " style=" width:100%;">
                       <div class="media align-items-center  text-lg-left flex-column flex-lg-row" style="display: flex; width:100%;">

                           <div class="mr-2 mb-3 mb-lg-0">

                               <img src="img/pizaa.jpg" width="150" height="150" style="margin:10px;" alt="">
                           </div>



                           <div class="media-body">
                               <h3 class="media-title font-weight-semibold  ">
                                   <a href="#" data-abc="true">Pizza</a>
                               </h3>
                               <h5 class="media-title font-weight-semibold">
                                   <a href="#" data-abc="true">Restaurant ID</a>
                               </h5>

                               <!-- <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                       <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">ved</a></li>
                                       <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">non-veg</a></li>
                                   </ul> -->

                               <p class="mb-3">Veg Classic Pizza</p>

                               <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                   <h3 class="mb-0 font-weight-semibold">Rs. 299/-</h3>

                               </div>
                               <!-- <ul class="list-inline list-inline-dotted mb-0">
                                       <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                       <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                   </ul> -->
                                  


                           </div>
                        
                       </div>

                       <a href="cart" style="width:100%;"> <button type="button" class="btn btn-warning mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                       Add to cart</button></a>

                       <a href="cart" style="width:100%;"> <button type="button" class="btn btn-info mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                      View cart</button></a>
                   </div>
                </div>

                <div class="col-md-4">
                   
                   <div class="card card-body " style=" width:100%;">
                       <div class="media align-items-center  text-lg-left flex-column flex-lg-row" style="display: flex; width:100%;">

                           <div class="mr-2 mb-3 mb-lg-0">

                               <img src="img/pizaa.jpg" width="150" height="150" style="margin:10px;" alt="">
                           </div>



                           <div class="media-body">
                               <h3 class="media-title font-weight-semibold  ">
                                   <a href="#" data-abc="true">Pizza</a>
                               </h3>
                               <h5 class="media-title font-weight-semibold">
                                   <a href="#" data-abc="true">Restaurant ID</a>
                               </h5>

                               <!-- <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                       <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">ved</a></li>
                                       <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">non-veg</a></li>
                                   </ul> -->

                               <p class="mb-3">Veg Classic Pizza</p>

                               <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                   <h3 class="mb-0 font-weight-semibold">Rs. 449/-</h3>

                               </div>
                               <!-- <ul class="list-inline list-inline-dotted mb-0">
                                       <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                       <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                   </ul> -->



                           </div>
                       </div>

                       <button type="button" class="btn btn-warning mt-4 tect-black"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                       <button type="button" class="btn btn-info mt-4 tect-black"><i class="icon-cart-add mr-2"></i> view cart</button>




                   </div>
               
           </div>

             
            </div>
            
       
            <div class="row">
                  
            <h4>Thali</h4>
                    <div class="col-md-4">
                   
                        <div class="card card-body " style=" width:100%;">
                            <div class="media align-items-center  text-lg-left flex-column flex-lg-row" style="display: flex; width:100%;">

                                <div class="mr-2 mb-3 mb-lg-0">

                                    <img src="img/thali.jpg" width="150" height="150" style="margin:10px;" alt="">
                                </div>



                                <div class="media-body">
                                    <h3 class="media-title font-weight-semibold  ">
                                        <a href="#" data-abc="true">Gujrati Thali</a>
                                    </h3>
                                    <h5 class="media-title font-weight-semibold">
                                        <a href="#" data-abc="true">Restaurant ID</a>
                                    </h5>

                                    <!-- <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">ved</a></li>
                                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">non-veg</a></li>
                                        </ul> -->

                                    <p class="mb-3">Veg Thali</p>

                                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                        <h3 class="mb-0 font-weight-semibold">Rs. 179/-</h3>

                                    </div>
                                    <!-- <ul class="list-inline list-inline-dotted mb-0">
                                            <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                            <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                        </ul> -->
                                       


                                </div>
                             
                            </div>

                            <a href="cart" style="width:100%;"> <button type="button" class="btn btn-warning mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                            Add to cart</button></a>

                            <a href="cart" style="width:100%;"> <button type="button" class="btn btn-info mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                           View cart</button></a>
                        </div>
                     </div>


                     <div class="col-md-4">
                   
                   <div class="card card-body " style=" width:100%;">
                       <div class="media align-items-center  text-lg-left flex-column flex-lg-row" style="display: flex; width:100%;">

                           <div class="mr-2 mb-3 mb-lg-0">

                               <img src="img/thali.jpg" width="150" height="150" style="margin:10px;" alt="">
                           </div>



                           <div class="media-body">
                               <h3 class="media-title font-weight-semibold  ">
                                   <a href="#" data-abc="true">Gujrati Thali</a>
                               </h3>
                               <h5 class="media-title font-weight-semibold">
                                   <a href="#" data-abc="true">Restaurant ID</a>
                               </h5>

                               <!-- <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                       <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">ved</a></li>
                                       <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">non-veg</a></li>
                                   </ul> -->

                               <p class="mb-3">Veg Thali</p>

                               <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                   <h3 class="mb-0 font-weight-semibold">Rs. 229/-</h3>

                               </div>
                               <!-- <ul class="list-inline list-inline-dotted mb-0">
                                       <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                       <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                   </ul> -->
                                  


                           </div>
                        
                       </div>

                       <a href="cart" style="width:100%;"> <button type="button" class="btn btn-warning mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                       Add to cart</button></a>

                       <a href="cart" style="width:100%;"> <button type="button" class="btn btn-info mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                      View cart</button></a>
                   </div>
                </div>

                <div class="col-md-4">
                   
                   <div class="card card-body " style=" width:100%;">
                       <div class="media align-items-center  text-lg-left flex-column flex-lg-row" style="display: flex; width:100%;">

                           <div class="mr-2 mb-3 mb-lg-0">

                               <img src="img/thali.jpg" width="150" height="150" style="margin:10px;" alt="">
                           </div>



                           <div class="media-body">
                               <h3 class="media-title font-weight-semibold  ">
                                   <a href="#" data-abc="true">Gujrati Thali</a>
                               </h3>
                               <h5 class="media-title font-weight-semibold">
                                   <a href="#" data-abc="true">Restaurant ID</a>
                               </h5>

                               <!-- <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                       <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">ved</a></li>
                                       <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">non-veg</a></li>
                                   </ul> -->

                               <p class="mb-3">Veg Thali</p>

                               <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                   <h3 class="mb-0 font-weight-semibold">Rs. 249/-</h3>

                               </div>
                               <!-- <ul class="list-inline list-inline-dotted mb-0">
                                       <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                       <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                   </ul> -->



                           </div>
                       </div>

                       <button type="button" class="btn btn-warning mt-4 tect-black"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                       <button type="button" class="btn btn-info mt-4 tect-black"><i class="icon-cart-add mr-2"></i> view cart</button>




                   </div>
               
           </div>

             
            </div>

        
        <div class="row">
                  
        <h4>Dessert</h4>
                          <div class="col-md-4">
                         
                              <div class="card card-body " style=" width:100%;">
                                  <div class="media align-items-center  text-lg-left flex-column flex-lg-row" style="display: flex; width:100%;">
      
                                      <div class="mr-2 mb-3 mb-lg-0">
      
                                          <img src="img/cake.jpg" width="150" height="150" style="margin:10px;" alt="">
                                      </div>
      
      
      
                                      <div class="media-body">
                                          <h3 class="media-title font-weight-semibold  ">
                                              <a href="#" data-abc="true">Cake</a>
                                          </h3>
                                          <h5 class="media-title font-weight-semibold">
                                              <a href="#" data-abc="true">Restaurant ID</a>
                                          </h5>
      
                                          <!-- <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                                  <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">ved</a></li>
                                                  <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">non-veg</a></li>
                                              </ul> -->
      
                                          <p class="mb-3">Icecream Cake</p>
                                          <p class="mb-3">500g</p>
      
                                          <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                              <h3 class="mb-0 font-weight-semibold">Rs. 349/-</h3>
      
                                          </div>
                                          <!-- <ul class="list-inline list-inline-dotted mb-0">
                                                  <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                                  <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                              </ul> -->
                                             
      
      
                                      </div>
                                   
                                  </div>
      
                                  <a href="cart" style="width:100%;"> <button type="button" class="btn btn-warning mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                                  Add to cart</button></a>
      
                                  <a href="cart" style="width:100%;"> <button type="button" class="btn btn-info mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                                 View cart</button></a>
                              </div>
                           </div>
      
      
                           <div class="col-md-4">
                         
                         <div class="card card-body " style=" width:100%;">
                             <div class="media align-items-center  text-lg-left flex-column flex-lg-row" style="display: flex; width:100%;">
      
                                 <div class="mr-2 mb-3 mb-lg-0">
      
                                     <img src="img/cake.jpg" width="150" height="150" style="margin:10px;" alt="">
                                 </div>
      
      
      
                                 <div class="media-body">
                                     <h3 class="media-title font-weight-semibold  ">
                                         <a href="#" data-abc="true">Cake</a>
                                     </h3>
                                     <h5 class="media-title font-weight-semibold">
                                         <a href="#" data-abc="true">Restaurant ID</a>
                                     </h5>
      
                                     <!-- <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                             <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">ved</a></li>
                                             <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">non-veg</a></li>
                                         </ul> -->
      
                                     <p class="mb-3">Icecream Cake</p>
                                     <p class="mb-3">500g</p>
      
                                     <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                         <h3 class="mb-0 font-weight-semibold">Rs. 299/-</h3>
      
                                     </div>
                                     <!-- <ul class="list-inline list-inline-dotted mb-0">
                                             <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                             <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                         </ul> -->
                                        
      
      
                                 </div>
                              
                             </div>
      
                             <a href="cart" style="width:100%;"> <button type="button" class="btn btn-warning mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                             Add to cart</button></a>
      
                             <a href="cart" style="width:100%;"> <button type="button" class="btn btn-info mt-4 text-black" style="width:100%;"><i class="icon-cart-add mr-2"></i> 
                            View cart</button></a>
                         </div>
                      </div>
      
                      <div class="col-md-4">
                         
                         <div class="card card-body " style=" width:100%;">
                             <div class="media align-items-center  text-lg-left flex-column flex-lg-row" style="display: flex; width:100%;">
      
                                 <div class="mr-2 mb-3 mb-lg-0">
      
                                     <img src="img/cake.jpg" width="150" height="150" style="margin:10px;" alt="">
                                 </div>
      
      
      
                                 <div class="media-body">
                                     <h3 class="media-title font-weight-semibold  ">
                                         <a href="#" data-abc="true">Cake</a>
                                     </h3>
                                     <h5 class="media-title font-weight-semibold">
                                         <a href="#" data-abc="true">Restaurant ID</a>
                                     </h5>
      
                                     <!-- <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                             <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">ved</a></li>
                                             <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">non-veg</a></li>
                                         </ul> -->
      
                                     <p class="mb-3">icecream Cake</p>
                                     <p class="mb-3">500g</p>
      
                                     <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                         <h3 class="mb-0 font-weight-semibold">Rs. 329/-</h3>
      
                                     </div>
                                     <!-- <ul class="list-inline list-inline-dotted mb-0">
                                             <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                             <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                         </ul> -->
      
      
      
                                 </div>
                             </div>
      
                             <button type="button" class="btn btn-warning mt-4 tect-black"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                             <button type="button" class="btn btn-info mt-4 tect-black"><i class="icon-cart-add mr-2"></i> view cart</button>
      
      
      
      
                         </div>
                     
                 </div>
      
                   
                  </div>






















    </div>
    </div>
    </div>
    </div>

    </form>

    </section>
    </header>

    <!--station End -->


    <!-- Footer Start -->
    <?php
    include_once('footer.php');
    ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/restaurant.js"></script> -->
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>