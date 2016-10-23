<body>
    <!-- topbar starts -->
        <div class="banner" style="background-color: #fee236" style="border: none">
            <a href="<?php echo base_url(); ?>?ap=dashboard">
				<img src="<?php echo base_url(); ?>img/banner-puti.png" alt="Rapid HTML"/>
			</a>
        </div>
            <div class="container-fluid" style="right: true">
            <ul class="nav nav-pills main-menu navbar-right">
                <li if($GET['page']="dashboard"){style="class=\active\";"}><a href="?ap=dashboard">Home</a></li>
                <li if($GET['page']="calendar"){style="class=\active\";"}><a href="?ap=calendar">Lesson Plan</a></li>
                <li if($GET['page']="statistics"){style="class=\active\";"}><a href="?ap=statistics">Statistics</a></li>
                <li if($GET['page']="classrecord"){style="class=\active\";"}><a href="?ap=classrecord">Class Record</a></li>
                <li if($GET['page']="about"){style="class=\active\";"}><a href="?ap=about">About</a></li>
                <li if($GET['page']="signout")><a href="<?php echo base_url(); ?>?ap=signout">Logout</a></li>
            </ul>
        </div>
</body>
    <!-- topbar ends -->