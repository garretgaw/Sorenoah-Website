<html>
<link rel="stylesheet" href="../style.css" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #E4001D;
	font-weight: bold;
}
-->
</style>
<head>
<script language="JavaScript" type="text/javascript">
<!--
function checkform ( form )
{
  if (form.firstName.value == "") {
    alert( "Please enter your first name." );
    form.firstName.focus();
    return false ;
  }
  else if (form.lastName.value == "") {
    alert( "Please enter your last name." );
    form.lastName.focus();
    return false ;
  }
  else if (form.email.value == "") {
    alert( "Please enter your email address." );
    form.email.focus();
    return false ;
  }
  return true ;
}
//-->
</script>

</head>
<body>
<p class="level1">Questions, Business Challenges, Comments? Let us help&hellip;</p>
<br>
<p class="level2">Relationships are everything.</p>
<p>At Sorenoah, our clients work with us because we listen. We understand your business concerns around applying technology solutions that move your organization in the right direction.</p>
<br>
<p class="level2">Contact Us</p>
Please send us your contact information and we will get in touch with you within the next 24 hours.<br><br>
<form name="form1" method="post" action="../scripts/mailer.php" onsubmit="return checkform(this);">

<table width="600" border="0">
  <tr>
    <td width="250">First Name<font color="red">*</font></td>
    <td width="350">
        <input type="text" name="firstName">
	</td>
  </tr>
  <tr>
    <td scope="row"><div align="left">Last Name<font color="red">*</font></div></td>
    <td><input type="text" name="lastName"></td>
  </tr>
  <tr>
    <td scope="row"><div align="left">Company</div></td>
    <td><input type="text" name="company"></td>
  </tr>
  <tr>
    <td scope="row"><div align="left">Phone</div></td>
    <td><input type="text" name="phone"></td>
  </tr>
  <tr>
    <td scope="row"><div align="left">Email<font color="red">*</font></div></td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td scope="row"><div align="left">Questions / Comments </div></td>
    <td>
        <textarea name="comments" cols="50"></textarea>
	</td>
  </tr>
  <tr>
    <td scope="row"><div align="left"></div></td>
    <td align="right"><input type="submit" name="submit" value="Talk To Us" /></td>
  </tr>
</table>
</form>
<font color="red">*</font> Required fields

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "htt
p://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.
js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-1303819-2");
pageTracker._trackPageview();
} catch(err) {}
</script>
</body>
</html>