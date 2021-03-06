<!-- Employee Form Sample -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #87CEFA">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New User Record</h4>
      </div>
	   <form method="post">
		  <div class="modal-body">
	    	<div class="form-group">
				<label for="txtusername">Username</label>
				<input type="text" class="form-control" name="txtusername" placeholder="Username">
			</div>
			
			<div class="form-group">
				<label for="txtpassword">Password</label>
				<input type="password" class="form-control" name="txtpassword" placeholder="Password">
			</div>
			
			<div class="form-group">
				<label for="txtfname">First Name</label>
				<input type="text" class="form-control" name="txtfname" placeholder="First Name">
			</div>
			
			<div class="form-group">
				<label for="txtlname">Last Name</label>
				<input type="text" class="form-control" name="txtlname" placeholder="Last Name">
			</div>			
			
			<div class="form-group">
				<label for="txtaddress">Home Address</label>
				<input type="text" class="form-control" name="txtaddress" placeholder="Address">
			</div>

			<div class="form-group">
				<label for="txtcontact">Contact Number</label>
				<input type="text" class="form-control" name="txtcontact" placeholder="Contact Number">
			</div>
			
			<div class="form-group">
				<label for="txtemail">E-mail Address</label>
				<input type="email" class="form-control" name="txtemail" placeholder="E-mail">

			</div>
			
			<div class="form-group">
				<label for="cbousertype">User Type</label>
				<select type="" class="form-control" name="cbousertype">
					<option>Select</option>
					<option>1</option>
					<option>2</option>
				</select>
			</div>						
		
			<div class="form-group">
				<label for="exampleInputFile">Browse Profile Picture</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			</div>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-success" name="btnadd">Add New</button>
		  </div>
<?php		  
 if(isset($_POST["btnadd"]))
 {		

		include_once 'controller/userControl.php';
		$array = array(
		"userID" => "null",
		"userName" => $_POST["txtusername"],
		"userPassword" => $_POST["txtpassword"],
		"userFirstName" => $_POST["txtfname"],
		"userLastName" => $_POST["txtlname"],
		"userContactNum" => $_POST["txtcontact"],	
		"userAddress" => $_POST["txtaddress"],
		"userEmail" => $_POST["txtemail"],	
		"userStatus" => 1,
		"userTypeID" => $_POST["cbousertype"]
		);
		echo $array;
		$obj = new userControl;
		$obj->create($array);			
 }
?>		  
	  </form>
    </div>
  </div>
</div>