<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Ewmc</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/staff_login.png" />
                </div>
                <div class="col-md-8">
                    <form role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <select class="form-control" placeholder="Login By" name="user_type" >
                                    <option value=""> Login By</option>
                                </select>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>