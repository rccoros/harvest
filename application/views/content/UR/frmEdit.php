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
                    <h2><i class="glyphicon glyphicon-edit"></i> Edit User</h2>

                    <div class="box-icon">
                    </div>
                </div>
                <div class="box-content">
                    <form role="form" action="<?php echo base_url();?>cUsers/update/?id=<?php echo $row -> id;?>" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name" value="<?php echo $row -> first_name;?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Middle Name</label>
                            <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Enter Middle Name" value="<?php echo $row -> middle_name;?>"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" value="<?php echo $row -> last_name;?>"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name Suffix</label>
                            <input type="text" class="form-control" name="name_suffix" id="name_suffix" placeholder="Enter Your Suffix Name if have" value="<?php echo $row -> name_suffix;?>"  required>
                        </div>
                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label" for="selectError2">Gender</label>
                                <div class="controls">
                                    <select data-placeholder="Your Gender" name="gender" id="gender" data-rel="chosen" required>
                                        <?php 
                                        $options = array("Male", "Female");
                                        foreach ($options as $option => $value) {
                                            if (strtolower($value) == strtolower($row -> gender)) {
                                                echo '<option value='.$value.' selected="selected">'.$value.'</option>';
                                            } else {
                                                echo '<option value='.$value.'>'.$value.'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Height</label>
                            <input type="text" class="form-control" name="height" id="height" placeholder="Enter Your Height" value="<?php echo $row -> height;?>"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Birthdate</label>
                            <input type="text" data-date-format="MM/DD/YYYY" class="form-control" name="birthdate" id="birthdate" placeholder="Enter Your Birthdate (dd-mm-yy)" value="<?php echo $row -> birthdate;?>"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Home Address" value="<?php echo $row -> address;?>"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contacts</label>
                            <input type="text" class="form-control" name="numbers" id="numbers" placeholder="Enter Your Contacts" value="<?php echo $row -> numbers;?>"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Emergency Contact Person</label>
                            <input type="text" class="form-control" name="emer_cont_person" id="emer_cont_person" placeholder="Enter Your Emergency Contact Person" value="<?php echo $row -> emer_cont_person;?>"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Emergency Contact No.</label>
                            <input type="text" class="form-control" name="emer_cont_number" id="emer_cont_number" placeholder="Enter Your Emergency Contact No." value="<?php echo $row -> emer_cont_number;?>" required>
                        </div>
                        <br />
                        <br />
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" value="<?php echo $row -> username;?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" value="<?php echo $row -> password;?>" required>
                        </div>
                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label" for="selectError2">Account Type</label>
                                <div class="controls">
                                    <select data-placeholder="Your Gender" name="account_type" id="account_type" data-rel="chosen" required>
                                        <?php 
                                        $options = array("Administrator", "User");
                                        foreach ($options as $option => $value) {
                                            if (strtolower($value) == strtolower($row -> account_type)) {
                                                echo '<option value='.$value.' selected="selected">'.$value.'</option>';
                                            } else {
                                                echo '<option value='.$value.'>'.$value.'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label" for="selectError2">TGIF HUB Member</label>
                                <div class="controls">
                                    <select data-placeholder="TGIF HUB Member" name="gym_member" id="gym_member" data-rel="chosen" required>
                                        <?php 
                                        $options = array("Yes", "No");
                                        foreach ($options as $option => $value) {
                                            if (strtolower($value) == strtolower($row -> gym_member)) {
                                                echo '<option value='.$value.' selected="selected">'.$value.'</option>';
                                            } else {
                                                echo '<option value='.$value.'>'.$value.'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label" for="selectError2">Herbalife Member</label>
                                <div class="controls">
                                    <select data-placeholder="Herbalife member" name="herbalife_member" id="herbalife_member" data-rel="chosen" required>
                                        <?php 
                                        $options = array("Yes", "No");
                                        foreach ($options as $option => $value) {
                                            if (strtolower($value) == strtolower($row -> herbalife_member)) {
                                                echo '<option value='.$value.' selected="selected">'.$value.'</option>';
                                            } else {
                                                echo '<option value='.$value.'>'.$value.'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
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