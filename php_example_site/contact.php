<?php $title = 'Contact Us';
require_once 'templates/header.php';
?>
<div class="row space">
    <h4 class="rtn-msg text-center"></h4>
</div>
<form id="contact-form" action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="large-4 large-offset-4 medium-6 medium-offset-3 columns">
    <div class="row">
        <h3 class="subheader">Contact Form</h3>
    </div>
    <div class="row">
        <label for="name">Name
            <input id="name" name="name" type="text" placeholder="Full Name"/>
        </label>
    </div>
    <div class="row">
        <label for="email">Email Address
            <input id="email" name="email" type="email" placeholder="example@domain.com"/>
        </label>
    </div>
    <div class="row">
        <label for="phone">Phone Number
            <input id="phone" name="phone" type="text" placeholder="Home, Mobile, or Work"/>
        </label>
    </div>
    <div class="row">
        <label for="message">Message
            <textarea id="message" name="message" rows="8" placeholder="Message"></textarea>
        </label>
    </div>
    <div class="row text-center">
        <div class="large-6 medium-6 columns">
            <input class="button small" type="reset" id="reset" value="Clear">
        </div>
        <div class="large-6 medium-6 columns">
            <input class="button success small" type="submit" id="submit" name="submit" value="Submit">
        </div>
    </div>
</form>
<?php require_once 'templates/footer.php';?>