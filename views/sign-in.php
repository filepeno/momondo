<?php
$page_title = 'Sign in';
$page_href = '/sign-in';
$page_id = 'sign-in-page';
require_once '../partials/html-head.php'
?>

<?php
require_once '../partials/side-header.php'
?>

<?php
require_once '../partials/top-header.php'
?>
<div id="main-wrapper">
    <main>
        <section class="form-wrapper">
            <div class="bg-img"></div>
            <h1>Sign in or create an account</h1>
            <!--<p>Track prices, organise travel plans and access member-only deals with your momondo account.</p>-->
            <form id="email-form" onsubmit="return false" data-component="form-validation">
                <div class="input-wrapper">
                    <label for="user_email">What is your email address?</label>
                    <input class="sign-in-input" data-validate="email" type="text" name="user_email" id="user-email" placeholder="Please enter your email">
                    <p class="validation-msg">Hello</p>
                </div>
                <button class="continue-btn gradient-btn" data-component="sign-in" type="submit">Continue</button>
            </form>
            <form id="password-form" class="inactive" onsubmit="return false" data-component="form-validation">
                <div class="input-wrapper">
                    <label for="user_password">Please enter the password for <span>example@gmail.com</span></label>
                    <input class="sign-in-input" data-validate="str" type="text" name="user_password" id="user-password" placeholder="Password">
                    <p class="validation-msg">Hello</p>
                </div>
                <button class="continue-btn gradient-btn" type="submit">Continue</button>
            </form>
        </section>
    </main>
</div>
<?php
require_once '../partials/footer.php'
?>


<?php
require_once '../partials/html-bottom.php'
?>