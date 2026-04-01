<?php
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php"); 


$getlogdtls = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM adminlogin WHERE id='".$_SESSION['user_id']."'"));


if(isset($_GET['action']) && $_GET['action']=='deleteimg')
{
	$delimgsuc = mysqli_query($conn,"UPDATE adminlogin SET profile_pic='' WHERE id='".$_SESSION['user_id']."'");	
	unlink("profile_pic/".$_GET['val']);
	if($delimgsuc){
		header('location:profile.php?msg=image_deleted');
	}
}


if(isset($_POST['submit']))
{
	extract($_POST);
	extract($_FILES);
	
	
	if(isset($_FILES['profile_pic']['name']))
    {
      $profile_pic = basename($_FILES['profile_pic']['name']);	
      $target = 'profile_pic/' . basename($_FILES['profile_pic']['name']);
      move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target);
    }
	else {
	$profile_pic = $getlogdtls['profile_pic'];	
		
	}
	
	
	
	
	$updatequery = mysqli_query($conn,"UPDATE adminlogin SET password='".$password."', phone_num='".$phone_num."', profile_pic='".$profile_pic."' WHERE id='".$_SESSION['user_id']."'");
	
	if($updatequery){
		
		header('location:profile.php?msg=profile_updated');
	}
	
	
}


?>

<script type="text/javascript">

function delimg(id,val){
	
var conf = confirm("Are you sue want to delete image?");
if(conf == true){
	window.location.href='profile.php?action=deleteimg&id='+id+"&val="+val;
}
	
}

function validations()
{
	var  password = document.getElementById('password').value;
	 if(password==''){
		document.getElementById('password_err').innerHTML='Enter Password';
		document.getElementById('password').focus();
		return false;
	 }
	 
	 var  phone_num = document.getElementById('phone_num').value;
	 if(phone_num==''){
		document.getElementById('phone_num_err').innerHTML='Enter Phone Number';
		document.getElementById('phone_num').focus();
		return false;
	 }
	
	
	
	
}

</script>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            My profile
            <small>Preview</small>
          </h1>
		  <?php include("include/common_messages.php"); ?>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">My Profile</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" enctype="multipart/form-data" onsubmit="return validations();">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control" value="<?=$getlogdtls['username']?>" id="username" placeholder="Enter Username">
                    </div>
										
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" value="<?=$getlogdtls['password']?>" id="password" placeholder="Password">
                    <div id="password_err" class="class_err"></div>
					</div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" name="phone_num" class="form-control" id="phone_num" value="<?=$getlogdtls['phone_num']?>"placeholder="Phone Number">
					<div id="phone_num_err" class="class_err"></div>
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputFile">Profile Photo</label>
                      <input type="file" id="profile_pic" name="profile_pic" accept="image/*">
                      <p class="help-block">[JPEP | JPG | PNG | SVG]</p>
                    </div>
                    <?php  if(isset($getlogdtls['profile_pic']) && $getlogdtls['profile_pic']!='') { ?>					 
					
                    <a href="javascript:void;" onClick="delimg('<?=$getlogdtls['id'];?>','<?=$getlogdtls['profile_pic'];?>')"><img src="profile_pic/<?=$getlogdtls['profile_pic'];?>" height="100"></a>
					
					<?php } ?> 
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
                  </div>
                </form>
              </div><!-- /.box -->

              <!-- Form Element sizes -->
             

           

             

            </div><!--/.col (left) -->
            <!-- right column -->
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include("include/footer.php"); ?>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
