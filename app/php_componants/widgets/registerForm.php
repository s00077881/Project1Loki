<section id="register" class="register-section">
    <div class="container">
        <div class="row">
            <div id="regFormTitle" class="col-md-8">
                <div class="col-md-10 col-md-offset-3">
                    <img src="images/logo.png">
                    <h1 class="hidden-xs">Welcome Aboard</h1>
                    <p>Soon You will enjoy the full benifits of a Loci account.</p>
                </div>
            </div>
            <div id="regFormContainer" class="col-md-6 col-md-offset-2">
                <form id="regisForm" action="#register" method="POST" data-parsley-validate data-parsley-errors-messages-disabled>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputFName" class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-9">
                                <input id="inputFName" type="text" placeholder="e.g. John" class="form-control regTextBox" data-parsley-trigger="change" data-parsley-required="true" data-parsley-error-message="First name is required!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputLName" class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-9">
                                <input id="inputLName" type="text" placeholder="e.g. Smith" class="form-control regTextBox" data-parsley-trigger="change" data-parsley-required="true" data-parsley-error-message="Last name is required!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input id="inputEmail" type="email" placeholder="e.g. example@example.com" class="form-control regTextBox" class="form-control" data-parsley-trigger="change" data-parsley-type="email" data-parsley-required="true" data-parsley-error-message="You must enter an email address!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPass" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input id="inputPass" type="password" placeholder="Minimum 6 characters" class="form-control regTextBox" data-parsley-trigger="change" data-parsley-minlength="6" data-parsley-required="true" data-parsley-error-message="You must enter a Password (minumum 6 characters)!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassConfirm" class="col-sm-3 control-label">Confim Password</label>
                            <div class="col-sm-9">
                                <input id="inputPassConfirm" type="password" placeholder="Minimum 6 characters" class="form-control regTextBox" data-parsley-trigger="change" data-parsley-minlength="6" data-parsley-required="true" data-parsley-error-message="You must enter a Password (minumum 6 characters)!">
                            </div>
                        </div>

                        <div class="col-md-9 col-md-offset-3 checkboxRow">
                            <label>I Have Read and Agree to the <a href="#">Terms & Conditions.</a></label>
                            <input id="" name="termsCon" type="checkbox" class="regCheckBox" data-parsley-required="true" data-parsley-error-message="You must accept the terms & conditions!">
                        </div>

                        <div class="col-md-9 checkboxRow">
                            <label>* Required Field</label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-md-offset-6 removepadding">
                        <input type="submit" class="form-control col-md-6 btn regButton" value="Register Now">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div></div>
        </div>
    </div>
    <!--End Reg Form-->
</section>
<!--End Register-->