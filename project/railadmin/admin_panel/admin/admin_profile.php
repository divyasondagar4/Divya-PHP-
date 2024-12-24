<?php
  include_once('header.php');
  ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Profile</h1>
                    </div>
                </div>
              
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Profile
                        </div>
                    </div>
                    <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="card" style="width:400px;">
                            <img class="card-img-top"style="height:400px;" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
                       
                            </div>
                        </div>
                    <div class="col-lg-7 text-dark">
            <?php
            if (isset($_SESSION['admin_id']))
             {
       
            ?> 
                <div class="card-body" style="margin-top:120px">
                                <h1 class="card-title">Id : <?php echo $_SESSION['admin_id']?></h1>
							    <h1 class="card-title">Email : <?php echo $fetch->admin_email?></h1>							
                                <a href="#" class="btn btn-primary">Edit Profile</a>
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
        </div>
    </div>
    
   
<?php
  include_once('footer.php');
  ?>