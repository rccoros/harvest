<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>?ap=dashboard"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> POS</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url(); ?>?ap=poss"> Sales</a></li>
                                <li><a href="<?php echo base_url(); ?>?ap=posr"> Reports</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>?ap=users"><i class="glyphicon glyphicon-user"></i><span> Users</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Measurements</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url(); ?>?ap=measurements"> Weights</a></li>
                                <li><a href="<?php echo base_url(); ?>?ap=measurement"> Reports</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>?ap=inventory"><i class="glyphicon glyphicon-list-alt"></i><span> Inventory</span></a></li>
                        <li class="nav-header hidden-md">Schedules</li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Schedules</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url(); ?>?ap=schedules">Schedules</a></li>
                                <li><a href="<?php echo base_url(); ?>?ap=scheduler">Reports</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Polls</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url(); ?>?ap=polle">Events</a></li>
                                <li><a href="<?php echo base_url(); ?>?ap=pollr">Reports</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->