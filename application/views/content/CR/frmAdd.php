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
                <h2><i class="glyphicon glyphicon-plus"></i> Add Subject</h2>

                <div class="box-icon">
                </div>
            </div>
            <div class="box-content">
                <form role="form" action="<?php echo base_url();?>cRecords/insert/" method="post">
                    <div class="form-group">
                        <label for="subject">Subject</label><span class="required">*</span>
                        <input type="text" class="form-control" name="subject" id="subject"  required autofocus>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                    <br />

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
    