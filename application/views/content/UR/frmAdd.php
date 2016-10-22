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
            <a href="<?php echo base_url(); ?>?ap=usersa">Users</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Add User</h2>

                <div class="box-icon">
                </div>
            </div>
            <div class="box-content">
                <form role="form" action="<?php echo base_url();?>cUsers/insert/" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label><span class="required">*</span>
                        <input type="text" class="form-control" name="first_name" id="first_name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Middle Name</label><span class="required">*</span>
                        <input type="text" class="form-control" name="middle_name" id="middle_name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label><span class="required">*</span>
                        <input type="text" class="form-control" name="last_name" id="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Suffix Name</label>
                        <input type="text" class="form-control" name="name_suffix" id="name_suffix" >
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label" for="selectError2">Gender</label><span class="required">*</span>
                            <div class="controls">
                                <form role="form">
                                    <label class="radio-inline">
                                      <input type="radio" name="gender">Male
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="gender">Female
                                    </label>
                                </form>
                                <!--select class="chosen-select" name="gender" id="gender" data-rel="chosen" required>
                                    <option value=""></option>
                                        <option>Male</option>
                                        <option>Female</option>
                                </select-->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Height (cm)</label><span class="required">*</span>
                        <input type="text" class="form-control" name="height" id="height" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Birthdate (dd-mm-yy)</label><span class="required">*</span>
                        <input type="text" data-date-format="MM/DD/YYYY" class="form-control" name="birthdate" id="birthdate" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label><span class="required">*</span>
                        <input type="text" class="form-control" name="address" id="address" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact No.</label><span class="required">*</span>
                        <input type="text" class="form-control" name="numbers" id="numbers" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emergency Contact Person</label><span class="required">*</span>
                        <input type="text" class="form-control" name="emer_cont_person" id="emer_cont_person" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emergency Contact No.</label><span class="required">*</span>
                        <input type="text" class="form-control" name="emer_cont_number" id="emer_cont_number" required>
                    </div>
                    <br />
                    <br />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label><span class="required">*</span>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label><span class="required">*</span>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label" for="selectError2">Account Type</label><span class="required">*</span>
                            <div class="controls">
                                <form role="form">
                                    <label class="radio-inline">
                                      <input type="radio" name="account_type">Administrator
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="account_type">User
                                    </label>
                                </form>
                                <!--select class="chosen-select" name="account_type" id="account_type" data-rel="chosen" required>
                                    <option value=""></option>
                                    <option>Administrator</option>
                                    <option>User</option>
                                </select-->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label" for="selectError2">TGIF HUB Member</label><span class="required">*</span>
                            <div class="controls">
                                <!--select class="chosen-select" name="gym_member" id="gym_member" data-rel="chosen" required-->
                                    
                                <!--/select-->
                                <form role="form">
                                    <label class="radio-inline">
                                      <input type="radio" name="gym_member">Yes
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="gym_member">No
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label" for="selectError2">Herbalife Member</label><span class="required">*</span>
                            <div class="controls">
                                <form role="form">
                                    <label class="radio-inline">
                                      <input type="radio" name="herbalife_member">Yes
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="herbalife_member">No
                                    </label>
                                </form>
                                <!--select class="chosen-select" name="herbalife_member" id="herbalife_member" data-rel="chosen" required>
                                    <option value=""></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select-->
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
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

    <script>
        $('document').ready( function() {
            $('.chosen-select').chosen({
                "disable_search": true
            });
        })
    </script>

    <style type="text/css">
        .required{
            color:red;
        }
    </style>
    