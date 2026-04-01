<?php
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php"); 


$getaccdtls = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_access_rights WHERE user_id='".$_GET['user_id']."'"));





if(isset($_POST['submit']))
{
	extract($_POST);
	
	//echo '<pre>'; print_r($_POST); exit;
	
	if(isset($_POST['dsh_read'])) { $dsh_read = '1'; } else { $dsh_read = '0'; } 
	if(isset($_POST['dsh_write'])) { $dsh_write = '1'; } else { $dsh_write = '0'; } 
	if(isset($_POST['dsh_delete'])) { $dsh_delete = '1'; } else { $dsh_delete = '0'; }
	
	if(isset($_POST['app_delete'])) { $app_delete = '1'; } else { $app_delete = '0'; }
	if(isset($_POST['app_write'])) { $app_write = '1'; } else { $app_write = '0'; }
	if(isset($_POST['app_read'])) { $app_read = '1'; } else { $app_read = '0'; }
	
	if(isset($_POST['usr_delete'])) { $usr_delete = '1'; } else { $usr_delete = '0'; }
	if(isset($_POST['usr_write'])) { $usr_write = '1'; } else { $usr_write = '0'; }
	if(isset($_POST['usr_read'])) { $usr_read = '1'; } else { $usr_read = '0'; }
	
	if(isset($_POST['acc_delete'])) { $acc_delete = '1'; } else { $acc_delete = '0'; }
	if(isset($_POST['acc_write'])) { $acc_write = '1'; } else { $acc_write = '0'; }
	if(isset($_POST['acc_read'])) { $acc_read = '1'; } else { $acc_read = '0'; }
	
	
	if(mysqli_query($conn,"UPDATE tbl_access_rights SET dsh_read='".$dsh_read."',dsh_write='".$dsh_write."',dsh_delete='".$dsh_delete."',app_delete='".$app_delete."',app_write='".$app_write."',app_read='".$app_read."',usr_delete='".$usr_delete."',usr_write='".$usr_write."',usr_read='".$usr_read."',acc_delete='".$acc_delete."',acc_write='".$acc_write."',acc_read='".$acc_read."' WHERE user_id='".$user_id."'")){
		header('location:list_access_rights.php?user_id='.$_GET['user_id'].'&action=access_updated');
	}
	
}


?>

<script type="text/javascript">


function validations()
{
	var  user_id = document.getElementById('user_id').value;
	 if(user_id=='-1'){
		document.getElementById('user_id_err').innerHTML='Select user to assign rights';
		document.getElementById('user_id').focus();
		return false;
	 }
	 
	

}

function changeuser(val){
	
	window.location.href="list_access_rights.php?user_id="+val;
	
}



</script>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           List Users
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
                  <h3 class="box-title">List Access Rights</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" enctype="multipart/form-data" onsubmit="return validations();">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">List Users</label>
					<select name="user_id" id="user_id" class="form-control" onChange="changeuser(this.value);">
					<option value="-1">Select user</option>
                    <?php  $getusers = mysqli_query($conn,"SELECT * FROM adminlogin ORDER BY full_name ASC");
                              while($setusers = mysqli_fetch_array($getusers)){
					?>
					<option value="<?=$setusers['id']?>" <? if($_GET['user_id']==$setusers['id']){ echo "SELECTED='SELECTED'"; }?>><?=$setusers['full_name'];?></option>
				    <? } ?>
					</select>
					<div id="user_id_err" class="class_err"></div>
					</div>
					 <div class="form-group">
					 Dashboard:  Read    <input type="checkbox" name="dsh_read" value="1" <? if($getaccdtls['dsh_read']=='1'){ echo "CHECKED='CHECKED'"; }?> >
					             Edit:   <input type="checkbox" name="dsh_write" value="1" <? if($getaccdtls['dsh_write']=='1'){ echo "CHECKED='CHECKED'"; }?>>
							     Delete: <input type="checkbox" name="dsh_delete" value="1" <? if($getaccdtls['dsh_delete']=='1'){ echo "CHECKED='CHECKED'"; }?>><br/>
					</div>	 <div class="form-group">		 
					 Applicants:  Read    <input type="checkbox" name="app_read" value="1" <? if($getaccdtls['app_read']=='1'){ echo "CHECKED='CHECKED'"; }?>>
					              Edit:   <input type="checkbox" name="app_write" value="1" <? if($getaccdtls['app_write']=='1'){ echo "CHECKED='CHECKED'"; }?>>
							      Delete: <input type="checkbox" name="app_delete" value="1" <? if($getaccdtls['app_delete']=='1'){ echo "CHECKED='CHECKED'"; }?>><br/>	
								  
                    </div>
					
					<div class="form-group">		 
					 Users:  Read    <input type="checkbox" name="usr_read" value="1" <? if($getaccdtls['usr_read']=='1'){ echo "CHECKED='CHECKED'"; }?>>
					              Edit:   <input type="checkbox" name="usr_write" value="1" <? if($getaccdtls['usr_write']=='1'){ echo "CHECKED='CHECKED'"; }?>>
							      Delete: <input type="checkbox" name="usr_delete" value="1" <? if($getaccdtls['usr_delete']=='1'){ echo "CHECKED='CHECKED'"; }?>><br/>	
								  
                    </div>
					<div class="form-group">		 
					 Access Rights:  Read    <input type="checkbox" name="acc_read" value="1" <? if($getaccdtls['acc_read']=='1'){ echo "CHECKED='CHECKED'"; }?>>
					              Edit:   <input type="checkbox" name="acc_write" value="1" <? if($getaccdtls['acc_write']=='1'){ echo "CHECKED='CHECKED'"; }?>>
							      Delete: <input type="checkbox" name="acc_delete" value="1" <? if($getaccdtls['acc_delete']=='1'){ echo "CHECKED='CHECKED'"; }?>><br/>	
								  
                    </div>
					
					
                  </div><!-- /.box-body -->

				  
				  <?php  if($getaccessdtls['acc_write']=='1' && $getaccessdtls['acc_delete']=='1') { ?>
                  <div class="box-footer">
                    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
                  </div>
				  <?php } ?>
				  
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
