<?php require('header.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <div class="container">
  	<div class="row">
    
    <div class="col-md-12">
        	<img src="img/pic.jpg" class="img img-responsive" width="100%">
            <!--size 980 x 200px -->
    </div> 

   </div>
  	<div class="row">
    	<div class="col-md-12">
      <?php require('menu.php');?>
        </div>
    </div>
        </div>


           
     <!-- <div class="row" style="padding-top:100px">
        <div class="col-md-4"></div>
    	      <div class="col-md-4" style="background-color:#f4f4f4">
              <h3 align="center">         
                <span class="glyphicon glyphicon-lock"> </span>เจ้าหน้าที่เข้าสู่ระบบ</h3>
                <form ACTION="<?php echo $loginFormAction; ?>"  name="formlogin" method="POST" id="login" class="form-horizontal"> 
                  <form action="login.php" method="post">  
                    <div class="form-group">
                      <div class="col-sm-12">
                      <input  name="admin_user" type="text" required class="form-control" id="admin_user" placeholder="Username" />
                      </div>
                    </div>
                      
                    <div class="form-group">
                      <div class="col-sm-12">
                      <input name="admin_pass" type="password" required class="form-control" id="admin_pass" placeholder="Password" />
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-12">
                      <button type="submit" class="btn btn-primary" id="btn">
                      <span class="glyphicon glyphicon-log-in"> </span> เข้าสู่ระบบ</button>
                  </form>
                        </div>
                          </div>
                </form>
        </div>
      </div>
           
     
  -->


 </body>
</html>

