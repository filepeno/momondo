<?php
$page_title = 'Sign in';
$page_href = '/sign-in';
$page_id = 'sign-in-page';
require_once '../partials/html-head.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_x.php';

if ($_SESSION) {
    Header('Location: /');
    exit();
}
?>

<?php
require_once '../partials/side-header.php'
?>

<?php
require_once '../partials/top-header.php'
?>
<div id="main-wrapper">
    <main>
        <section class="form-wrapper" data-component="sign-in">
            <div class="bg-img"></div>
            <h1 class="section-title"><?= $dictionary["{$language}_sign_in_main_title"] ?></h1>
            <!--<p>Track prices, organise travel plans and access member-only deals with your momondo account.</p>-->

            <!-- EMAIL-FORM-->
            <form id="email-form" onsubmit="return false" data-component="form-validation">
                <div class="input-wrapper">
                    <label for="user_email">What is your email address?</label>
                    <input class="sign-in-input" data-validate="email" type="text" name="user_email" placeholder="Please enter your email">
                    <p class="validation-msg"></p>
                </div>
                <button class="continue-btn gradient-btn" type="submit">Continue</button>
            </form>

            <!-- LOG-IN-FORM-->
            <form id="log-in-form" class="inactive" onsubmit="return false" data-component="form-validation">
                <div class="input-wrapper">
                    <label for="user_password">Please enter the password for <span class="emphasize">example@gmail.com</span></label>
                    <input class="sign-in-input" data-validate="str" data-min="<?= _USER_PASSWORD_MIN_LEN ?>" data-max="<?= _USER_PASSWORD_MAX_LEN ?>" maxlength="<?= _USER_PASSWORD_MAX_LEN ?>" type="password" name="user_password" placeholder="Password">
                    <p class="validation-msg"></p>
                </div>
                <input style="display:none" type="text" name="user_email">
                <button class="continue-btn gradient-btn" type="submit">Sign in</button>
            </form>

            <!-- SIGN-UP-FORM-->
            <p style="display:none" id="sign-up-heading" class="type-light">The email <span class="emphasize">*email*</span> does not have an account yet. Create an account by filling out the form below.</p>
            <form id="sign-up-form" class="inactive" onsubmit="return false" data-component="form-validation">
                <input style="display:none" type="text" name="user_email">
                <div class="input-wrapper">
                    <label for="user_first_name">First name</label>
                    <input class="sign-in-input" data-validate="str" data-min="<?= _USER_FIRST_NAME_MIN_LEN ?>" data-max="<?= _USER_FIRST_NAME_MAX_LEN ?>" maxlength="<?= _USER_FIRST_NAME_MAX_LEN ?>" type="text" name="user_first_name">
                    <p class="validation-msg"></p>
                </div>
                <div class="input-wrapper">
                    <label for="user_last_name">Last name</label>
                    <input class="sign-in-input" data-validate="str" data-min="<?= _USER_LAST_NAME_MIN_LEN ?>" data-max="<?= _USER_LAST_NAME_MAX_LEN ?>" maxlength="<?= _USER_LAST_NAME_MAX_LEN ?>" type="text" name="user_last_name">
                    <p class="validation-msg"></p>
                </div>
                <div class="input-wrapper">
                    <label for="user_password">Password</label>
                    <input class="sign-in-input" data-validate="str" data-min="<?= _USER_PASSWORD_MIN_LEN ?>" data-max="<?= _USER_PASSWORD_MAX_LEN ?>" maxlength="<?= _USER_PASSWORD_MAX_LEN ?>" type="password" name="user_password">
                    <p class="validation-msg"></p>
                </div>
                <div class="input-wrapper">
                    <label for="user_password_repeat">Repeat password</label>
                    <input class="sign-in-input" data-validate="match" data-match-name="user_password" type="password" name="user_password_repeat">
                    <p class="validation-msg"></p>
                </div>
                <button class="continue-btn gradient-btn" type="submit">Sign up</button>
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