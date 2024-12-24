<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel Railway</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

                 
         
     
<?php
  include_once('header.php');
  ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Restaurant</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Edit Restaurant
                        </div>
                        <div class="panel-body">
                            <form role="form"  method="post" enctype="multipart/form-data">
                                        <!-- <div class="form-group">
                                            <label>shop_id</label>
                                            <input class="form-control" type="number" name="">
                                            <p class="help-block">Enter Shop ID here.</p>
                                        </div> -->
									<div class="form-group">
                                            <label>Restaurant_name</label>
                                            <input class="form-control"  type="text" name="name" value="<?php echo $fetch->name;?>">
                                     <p class="help-block">Enter Restaurant name here.</p>
                                        </div>
                                            <div class="form-group">
                                            <label>address</label>
                                            <textarea class="form-control" rows="3" name="address"><?php echo $fetch->address;?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>image</label>
                                            <input class="form-control" type="file" name="image">
                                            <p class="help-block">Upload File here.</p>
                                            <img src="assets/img/restaurant/<?php echo $fetch->image;?>" width="50px" height="50px">
                                        </div>
                                      
                                        
										<div class="form-group">
                                            <label>Select city</label>
                                            <select name="city_id" class="form-control" >
												<option>Select City</option>
											<?php
											foreach($loca_arr as $w)
											{
											?>
                                                <option value="<?php echo $w->city_id?>" selected><?php echo $w->city_name?></option>
											<?php
											}
											?>	
                                            </select>

                                        <div class="form-group">
                                            <label>google_profile</label>
                                            <input class="form-control" type="url" name="Google_Profile" value="<?php echo $fetch->Google_Profile;?>">
                                            <p class="help-block">Enter URL here.</p>
                                        </div>
                                        <button type="submit" name="update"class="btn btn-info">Save Changes</button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
   <?php
  include_once('footer.php');
  ?>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>
