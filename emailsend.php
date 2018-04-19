<?php
  //Email information
  //$admin_email = "ra1420588117284@x-ro1wnxfu9kkimin588gc5sjhtdft0f7nobkw0r50t73gsglu.3b-dvosuao.cs50.case.sandbox.salesforce.com";
  //$email = "hamza.siddiqui1@gettectonic.com";
  

  $admin_email = $_REQUEST['sfemail'];
  $email = $_REQUEST['myemail'];
  //$start = $_REQUEST['start'];
  $limit = $_REQUEST['limit']; 

  $start=1;

if($admin_email && $email && $start && $limit){
  for($i=$start;$i<=$limit;$i++){

  $subject = "Test ".$i;
  $comment = "test body".$i;

  mail($admin_email, $subject, $comment, "From:" . $email);
}
} else { 
	echo "Please send GET parameters.<br> Or fill the below Form <br> Example:<br><br>
	http://www.pakdevs.com/salesforce.php?limit=<limit>&sfemail=<sf email>&myemail=<my email>
	<br><br>

	http://www.pakdevs.com/salesforce.php?limit=100&sfemail=ra1420588117284@x-ro1wnxfu9kkimin588gc5sjhtdft0f7nobkw0r50t73gsglu.3b-dvosuao.cs50.case.sandbox.salesforce.com&myemail=hassan.sharif@gettectonic.com";

echo '	<form method="get">
		<input type="text" name="sfemail" placeholder="ra1420588117284@x-ro1wnxfu9kkimin588gc5sjhtdft0f7nobkw0r50t73gsglu.3b-dvosuao.cs50.case.sandbox.salesforce.com" /><Br>
		<input type="text" name="myemail" placeholder="myemail@mydomain.com" /><Br>
		<input type="text" name="limit" placeholder="Number of emails" /><Br>
		<input type="submit" name="submit" /><Br>
	</form>';
	
}