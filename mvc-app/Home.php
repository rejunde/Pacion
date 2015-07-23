<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>MVC</title>
</head>
<body>
<?php include 'shared-layouts/_Layout.php'; ?>
<div class="col-md-2">
    <div class="list-group">
        <a class="list-group-item" href="Home.php"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
        <a class="list-group-item" href="#"><i class="fa fa-book fa-fw"></i>&nbsp; Posts</a>
        <a class="list-group-item" href=""><i class="fa fa-pencil fa-fw"></i>&nbsp; Topics</a>
        <a class="list-group-item" href="user%20record.php?control=viewrecord&func=listall"><i class="fa fa-wrench fa-fw"></i>&nbsp; Maintenance</a>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h5 class="pull-left"><span class="fa fa-users"></span>&nbsp;<strong>Employee List</strong></h5>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-wrench fa-fw"></span>&nbsp;Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#userModal">Add Record</a></li>
                    <li><a href="#">Import Records</a></li>
                    <li><a href="#">Export Records</a></li>                   
                </ul>
            </div>
        </div>
        <div class="panel-body">

            <!-- Data Table Goes Here-->
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>User type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>User type</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                </tbody>
            </table>
            <!-- End Data Table-->

        </div>
    </div>
</div>
<?php
 include '/views/modals/employee-modal.php';
?>
</body>

</html>