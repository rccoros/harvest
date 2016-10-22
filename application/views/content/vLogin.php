<body>
<div class="ch-container">
    <div class="row" style="margin-top: 15%">
        <div class="well col-md-3 center login-box" style="background-color: #ececec">
            <div class="thumbnail" style="background-color: #fee236"><img src="<?php echo base_url(); ?>img/logo-text3_puti.png"></div>
            <form class="form-horizontal" action="<?php echo base_url(); ?>cLogin/signin" method="post">
                <fieldset>
                    <div class="input-group input-group-lg col-sm-12">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" required autofocus>
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-group input-group-lg col-sm-12">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                    </div>
                    <div class="clearfix"></div>

                    <p class="message align-left"><a href="#">Forgot Password?</a></p>
                    <div class="clearfix"></div>
					
                    <p class="center col-md-13">
                        <button type="submit" class="btn" style="background-color: #fee236">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->
