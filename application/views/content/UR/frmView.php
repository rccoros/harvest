<noscript>
    <div class="alert alert-block col-md-12">
        <h4 class="alert-heading">Warning!</h4>

        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
            enabled to use this site.</p>
    </div>
</noscript>

<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url(); ?>?ap=dashboard">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>?ap=userse">Users</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> View User</h2>

                    <div class="box-icon">
                    </div>
                </div>
                <div class="box-content">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label><br/>
                        <span><?php echo $user -> first_name; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Middle Name</label><br/>
                        <span><?php echo $user -> middle_name; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label><br/>
                        <span><?php echo $user -> last_name; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name Suffix</label><br/>
                        <span><?php echo $user -> name_suffix; ?></span>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label" for="selectError2">Gender</label><br/>
                            <span><?php echo $user -> gender; ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Height</label><br/>
                        <span><?php echo $user -> height; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Birthdate</label><br/>
                        <span><?php echo $user -> birthdate; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label><br/>
                        <span><?php echo $user -> address; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contacts</label><br/>
                        <span><?php echo $user -> numbers; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emergency Contact Person</label><br/>
                        <span><?php echo $user -> emer_cont_person; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emergency Contact No.</label><br/>
                        <span><?php echo $user -> emer_cont_number; ?></span>
                    </div>
                    <br />
                    <br />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label><br/>
                        <span><?php echo $user -> username; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label><br/>
                        <span><?php echo $user -> password; ?></span>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label" for="selectError2">Account Type</label><br/>
                            <span><?php echo $user -> account_type; ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label" for="selectError2">TGIF HUB Member</label><br/>
                            <span><?php echo $user -> gym_member; ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label" for="selectError2">Herbalife Member</label><br/>
                            <span><?php echo $user -> herbalife_member; ?></span>
                        </div>
                    </div>
                    <br />
                </div>

            </div>
        </div>
    </div>


    <!--/span-->

</div><!--/row-->

<!-- content ends -->
</div><!--/#content.col-md-0-->

<hr>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
            </div>
        </div>
    </div>
</div>