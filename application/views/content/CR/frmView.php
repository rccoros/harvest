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
                <a href="<?php echo base_url(); ?>?ap=classrecord">Class Record</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> <?php echo $subject->name;?></h2>
        <div class="box-icon">
            <a href="<?php echo base_url(); ?>?ap=classrecorda" class="btn btn-round btn-default"><i
                    class="glyphicon glyphicon-plus"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Student Name</th>
        <?php foreach ($exams as $exam){ ?>
         <th><?php echo $exam->name;?></th>
        <?php } ?>
        <th>Average</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($grades as $grade){ 
        ?>
    <tr>
        <td><?php echo $grade -> first_name.' '.$grade -> last_name; ?></td>
        <td><?php echo $grade -> grade; ?></td>
        <td><?php echo $grade -> grade; ?></td>
    </tr>
    <?php } ?>

    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

            

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

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