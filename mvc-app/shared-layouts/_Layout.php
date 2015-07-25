<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <title>Hey</title>
   <?php 
    include '../shared-scripts/_css.php';
    include '../shared-scripts/_js.php';
   ?>
   
   <script type="text/javascript" class="init">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>   
	<style>
	   body { 
	   padding-top: 70px; 
	   }
	</style>
  </head>
  <body>
    
    <!-- Nav Header Goes Here... -->
    <?php include '_admin-navbar.php';  include '_admin-sidebar.php'; ?>  	 
    <!-- END Nav Header -->
    
    <!-- Container Goes Here -->
   
        <!-- Body Goes Here -->
			 
			  
			  
    <!-- END Container -->
  </body>
</html>