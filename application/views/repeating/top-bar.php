<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
        <div class="banner" style="background-color: #fee236" style="border: none">
            <a href="<?php echo base_url(); ?>?ap=dashboard">
				<img src="<?php echo base_url(); ?>img/banner-puti.png" alt="Rapid HTML"/>
			</a>
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>?ap=usersv&id=<?php echo $this->session->userdata('user_id');?>">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>cLogin/signout">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar header">
                <a class="navbar-brand" href="#">Hope Planner</a>"
            </div>
            <ul class="nav nav-pills nav-stacked main-menu">
                <li href="#">Test</a></li>
                <li href="#">Test2</a></li>
                <li href="#">Test3</a></li>
            </ul>
        </div>
	</div>
</body>
    <!-- topbar ends -->