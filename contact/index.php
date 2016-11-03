<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HTML5 Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.form.js"></script>
<link rel="stylesheet" href="css/style.css">
<script>
$(function(){
$('#contact').validate({
submitHandler: function(form) {
    $(form).ajaxSubmit({
    url: 'process.php',
    success: function() {
    $('#contact').hide();
    $('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
    }
    });
    }
});         
});
</script>
</head>

<body>

<div id="contact-form">	

<form id="contact" method="post" action="">
<fieldset>	

<label for="name">Name</label>
<input type="text" name="name" placeholder="Full Name" title="Enter your name" class="required">

<label for="email">E-mail</label>
<input type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">

<label for="phone">Phone</label>
<input type="tel" name="phone" placeholder="ex. (555) 555-5555">

<!--<label for="website">Website</label>
<input type="url" name="url" placeholder="http://">-->

<label for="message">Question/Comment</label>
<textarea name="message"></textarea>

<input type="submit" name="submit" class="button" id="submit" value="Send Message" />

</fieldset>
</form>

</div><!-- /end #contact-form -->

<script src="js/modernizr-min.js"></script>
<script>
if (!Modernizr.input.placeholder){
      $('input[placeholder], textarea[placeholder]').placeholder();
}
</script>
</body>
</html>