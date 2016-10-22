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
                        <label for="exampleInputEmail1">Last Name</label><br/>
                        <span><?php echo $user -> last_name; ?></span>
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label><br/>
                        <span><?php echo $user -> username; ?></span>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label" for="selectError2">Account Type</label><br/>
                            <span><?php echo $user -> type; ?></span>
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