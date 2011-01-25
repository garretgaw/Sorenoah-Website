<?php
$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$company = $_REQUEST['company'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

$to = "garret.gaw@sorenoah.com";
$subject = "SORENOAH WEBSITE: Contact Us Page";
$body =   "Name:" . "$firstName $lastName\n"
        . "Company:" . "$company\n"
        . "Phone:" . "$phone\n"
        . "Email:" . "$email\n"
        . "Comments:" . "$comments\n";

if (mail($to, $subject, $body)) {
  echo("<html>
<link rel=\"stylesheet\" href=\"../style.css\" type=\"text/css\" />
<head>
</head>
<body>

<br><p>Thank you for your interest in Sorenoah. A member of our team will be in touch with you within 24 hours to explore your needs. Also, look for an automated e-mail confirmation. We look forward to working with you to design the Inspired Solution that assists you in building business success.</p>
<br>

<script type=\"text/javascript\">
var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"htt
p://www.\");
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.
js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try{
var pageTracker = _gat._getTracker(\"UA-1303819-2\");
pageTracker._trackPageview();
} catch(err) {}
</script>
</body>
</html>");
 } else {
  echo("<p>Message delivery failed...</p>");
 }
?>
