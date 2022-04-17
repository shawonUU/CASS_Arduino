<?php
    include('dbcon.php');
    include('header.php');
?>

<h6 class=" text-white display-6 text-center">We created a <b>CASS Arduino</b> project for you with the "MAIL". The mail is not verified! we sent a verification mail to the email address.  </h6>
			
<div class="mt-5 " style="display: flex;justify-content: center;">
    <a  href="logout.php" style="margin-right: 5px;" class="btn btn-success sdo px-1 px-md-5">Logout</a>
    
    <a  href="sendVarificationMail.php" style="margin-left: 5px;" class="btn btn-primary sdo px-1 px-md-5">Send verification mail again</a>
</div>

<?php
    include('foter.php');
?>
