<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Account</li>
    </ol>
    <div class="registration">
        <div class="registration_left">
            <h2>new user? <span> create an account </span></h2>
            <!-- [if IE]
               < link rel='stylesheet' type='text/css' href='ie.css'/>
            [endif] -->

            <!-- [if lt IE 7]>
               < link rel='stylesheet' type='text/css' href='ie6.css'/>
            <! [endif] -->
            <script>
                (function() {

                    // Create input element for testing
                    var inputs = document.createElement('input');

                    // Create the supports object
                    var supports = {};

                    supports.autofocus   = 'autofocus' in inputs;
                    supports.required    = 'required' in inputs;
                    supports.placeholder = 'placeholder' in inputs;

                    // Fallback for autofocus attribute
                    if(!supports.autofocus) {

                    }

                    // Fallback for required attribute
                    if(!supports.required) {

                    }

                    // Fallback for placeholder attribute
                    if(!supports.placeholder) {

                    }

                    // Change text inside send button on submit
                    var send = document.getElementById('register-submit');
                    if(send) {
                        send.onclick = function () {
                            this.innerHTML = '...Sending';
                        }
                    }

                })();
            </script>
            <div class="registration_form">
                <?php if ($result): ?>
                    <p>Вы зарегестированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)):?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?> </li>
                            <?php endforeach; ?>
                            </ul>
                <?php endif; ?>
                <!-- Form -->
                <form  action="" method="post">
                    <div>
                        <label>
                            <input placeholder="name" type="text" tabindex="1" name="name" value="<?php echo $name;?>">
                        </label>
                    </div>
                    <div>
                        <label>
                            <input placeholder="email" type="email" tabindex="3" name="email" value="<?php echo $email;?>">
                        </label>
                    </div>
                    <div>
                        <label>
                            <input placeholder="Mobile" type="tel" tabindex="3" name="mobile" value="<?php echo $mobile;?>">
                        </label>
                    </div>
                    <div>
                        <label>
                            <input placeholder="password" type="password" tabindex="4" name="password" value="<?php echo $password;?>">
                        </label>
                    </div>
                    <div>
                        <input type="submit" value="create an account" id="register-submit" name="submit">
                    </div>
                    <!--<div class="sky-form">
                        <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree Terms & conditions &nbsp;<a class="terms" href="#"> terms of service</a> </label>
                    </div>-->
                </form>
                <!-- /Form -->
                <?php endif;?>
            </div>
        </div>
        <div class="registration_left">
            <h2>existing user</h2>
            <div class="registration_form">
                <!-- Form -->
                <form>
                    <div>
                        <label>
                            <input placeholder="email" type="email" tabindex="3" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input placeholder="password" type="password" tabindex="4" required>
                        </label>
                    </div>
                    <div>
                        <input type="submit" value="sign in">
                    </div>
                    <div class="forget">
                        <a href="#">forgot your password</a>
                    </div>
                </form>
                <!-- /Form -->
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
