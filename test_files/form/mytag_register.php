
<body  style=" ">
    <div class="webformbox">
        <form id="registerfrm" name="registerfrm" method="POST" action="mytag_register.php">  
            <div id="formbox">
                <div id="formboxheader"><!--<h1>Register</h1>--></div>
                    <div id="form-leftcol">
                        <div class="formheadertitle" style="color:#109ed9">Account Register
                        </div>
                    </div>
                    <div id="form-rightcol">
                        <font color="#109ed9"></font>   
                        <div class="formfieldtext formfieldspace" style="color:#109ed9"><label for="username">Username</label>
                        </div>
                        <div class="formfieldtext formfieldspace">
                            <input type="text" autocomplete="off" name="register_username" maxlength="20" size="30" id="register_username" value="" class="inputtextfield validate[required,minSize[6],custom[onlyLetterNumber]]">
                            <span style="margin-left:20px" id="uname_availiblity"></span>
                        </div>
                        <div class="formfieldtext formfieldspace" style="color:#109ed9">
                            <label for="password">Password</label>
                        </div>
                        <div class="formfieldtext formfieldspace">
                            <input type="password" autocomplete="off" name="register_password" maxlength="20" size="30" id="register_password" value="" class="inputtextfield validate[required,minSize[6]]">
                        </div>
                        <div class="formfieldtext formfieldspace" style="color:#109ed9">
                            <label for="password">Confirm Password</label>
                        </div>
                        <div class="formfieldtext formfieldspace">
                            <input type="password" autocomplete="off" name="register_confirmpassword" maxlength="20" size="30" id="register_confirmpassword" value="" class="inputtextfield validate[required,equals[register_password]]">
                        </div>
                        <div>
                            <input type="hidden" name="register_accounttype" id="register_accounttype" value="1">
                        </div>
                        <div class="formfieldtext formfieldspace" style="color:#109ed9">
                            <label for="password">First Name</label>
                        </div>
                        <div class="formfieldtext formfieldspace">
                            <input type="text" name="register_name" maxlength="20" size="50" id="register_name" value="" class="inputtextfield validate[required]">
                        </div>
                        <div class="formfieldtext formfieldspace" style="color:#109ed9">
                            <label for="password">Last Name</label>
                        </div>
                        <div class="formfieldtext formfieldspace">
                            <input type="text" name="register_lastname" maxlength="20" size="50" id="register_lastname" value="" class="inputtextfield validate[required]">
                        </div>
                        <div class="formfieldtext formfieldspace" style="color:#109ed9">
                            <label for="password">Email</label></div>
                        <div class="formfieldtext formfieldspace">
                            <input type="text" name="register_email" maxlength="40" size="50" id="register_email" value="" class="inputtextfield validate[required,custom[email]]">
                        </div>
                        <div class="formfieldtext formfieldspace" style="color:#109ed9">
                            <label for="username">Contest Code</label> 
                            <span style="text-transform:lowercase; color:#109ed9">(optional)</span>
                        </div>
                        <div class="formfieldtext formfieldspace">
                            <input type="text" name="competitioncode" maxlength="20" size="20" id="competitioncode" value="" class="inputtextfield">
                        </div>
                        <div class="formfieldspacing formfieldtext textsmall">
                            <div class="fineprintlt">
                                <input name="" type="checkbox" value="" class="validate[required]" />
                            </div>
                        <div class="fineprintrt" style="color:#109ed9">
                            <label>I have read and accept the <a href="terms" target="_blank"><u>Terms</u></a> and consent to myTAG's <a href="policy" target="_blank"><u>Policy</u></a></label>
                        </div>
                    </div>
                    <div class="formfieldtext formfieldspace">&nbsp;
                    </div>
                        <input type="submit" name="register_bt" size="20" id="register_bt" value="Join" class="bluebutton">
                    </div>
                    <div class="clearboth">
                    </div>
                        <input type="hidden" name="op" id="op" value="register">
            </div>
        </form>
    </div>
    
<?php

 foreach ($_POST as $key => $value) {
        echo $key . ": " . $value . "<br/>" ;
    }    

?>    
    