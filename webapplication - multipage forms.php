<?php

$nameErr = "";
$ageErr = "";

$name = "";
$age = "";
$email = "";
$color = "";
$drink = "";
$sport = "";
$fruit = "";
$noErr = false;
$value = "";

$malechecked = $femalechecked = $otherchecked = "";
$gender = "";
$showPage = 1;

if (isset($_REQUEST['button'])) {
	if ($_REQUEST['button'] == 'Page 1') $showPage=1;
	if ($_REQUEST['button'] == 'Page 2') $showPage=2;
	if ($_REQUEST['button'] == 'Summary') $showPage=3;
	if ($_REQUEST['button'] == 'Validate') $showPage=4;
	
	
	if (isset($_REQUEST['button'])) {
	$noErr = true;
	// must be second time - need to validate data!
	
	$name = $_REQUEST['full'];
    $age = $_REQUEST['age'];
	$gender= $_REQUEST['gender'];
	$email = $_REQUEST['email'];
	
    $color = $_GET['color'];
    $drink = $_GET['drink'];
    $fruit = $_GET['fruit'];
    $sport = $_GET['sport'];
	
}	


	
	if (isset($_REQUEST['gender'])) {
	foreach ($_REQUEST['gender'] as $value) {
		if ($value =='Male') $malechecked = 'checked';
		if ($value =='Female') $femalechecked = 'checked';
		if ($value =='Other') $otherchecked = 'checked';
		
		}				
	
    }	
    }
	

if ($showPage == 1){

echo "

<html>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<body>

<form action='' method='get'>

<h2> Welcome to the site ! </h2>

<h3> Please, fill in our registration form. </h3>

   Full Name: <input type='text' name='full' value='$name' required \n /><br>
   Age : <input type='text' name='age' value='$age' \n /><br>
   Email Address : <input type='text' name='email' value='$email' \n /><br>
   Gender? <input type='checkbox' name='gender[]' value='Male' $malechecked \n /> Male
   <input type='checkbox' name='gender[]' value='Female' $femalechecked \n /> Female 
   <input type='checkbox' name='gender[]' value='Other' $otherchecked \n /> Other <br>


   <br>
   
   <input type='submit' name='button' value='Page 2'> 
   
    <input type='text' name='color' value='$color' hidden/> <br>
    <input type='text' name='drink' value='$drink' hidden/> <br>
    <input type='text' name='fruit' value='$fruit' hidden/> <br>
    <input type='text' name='sport' value='$sport' hidden/> <br>
   
   
 </form>

   <script>
      $(document).ready(function(){
          $('input:checkbox').click(function() {
          $('input:checkbox').not(this).prop('checked', false);
        });
      });
  </script>

 </body>
 </html>
";
}

if ($showPage == 2) {

echo "

<html>
<body>

<form action='' method='get'>

<h3> What is your favorite... </h3>

Color: <input type='text' name='color' value='$color'\n /> <br>
Drink: <input type='text' name='drink' value='$drink'\n /> <br>
Fruit: <input type='text' name='fruit' value='$fruit'\n /> <br>
Sport: <input type='text' name='sport' value='$sport'\n /> <br>

<br>

<input type='submit' name='button' value='Page 1'> 
<input type='submit' name='button' value='Summary'> 

<input type='text' name='full' value='$name' hidden/> 
<input type='text' name='age' value='$age' hidden />
<input type='text' name='email' value='$email' hidden />
<input type='checkbox' name='gender[]' value='Male' $malechecked hidden /> 
   <input type='checkbox' name='gender[]' value='Female' $femalechecked hidden /> <br>
   <input type='checkbox' name='gender[]' value='Other' $otherchecked hidden /> <br>
   
 </form>
 </body>
 </html>


";

}

if ($showPage == 3) {

	echo "
	
<html>
<body>
	
<form action='' method='get'>

	
<h2> Summary... </h2>
	
Hello <strong> $name </strong> \n <br>
You are <strong> $age </strong> years old \n <br>
Your email address is <strong> $email </strong> \n <br>
Gender: <strong> $value </strong> <br> \n <br>

<strong> Here is a list of your preferences: </strong> \n <br><br>
<Strong> Color: </strong> $color \n <br>
<Strong> Drink: </strong> $drink \n <br>
<Strong> Fruit: </strong> $fruit \n <br>
<Strong> Sport: </strong> $sport \n <br>


    <input type='text' name='color' value='$color' hidden/> 
    <input type='text' name='drink' value='$drink' hidden/> 
    <input type='text' name='fruit' value='$fruit' hidden/> 
    <input type='text' name='sport' value='$sport' hidden/>
    <input type='text' name='full' value='$name' hidden/> 
    <input type='text' name='age' value='$age' hidden />
	<input type='text' name='email' value='$email' hidden />
	
	<input type='checkbox' name='gender[]' value='Male' $malechecked hidden /> 
   <input type='checkbox' name='gender[]' value='Female' $femalechecked hidden /> 
   <input type='checkbox' name='gender[]' value='Other' $otherchecked hidden /><br>

<br>	
    <input type='submit' name='button' value='Page 2'> 
	<input type='submit' name='button' value='Validate'>

</form>
</html>
</body>
";
}

if($showPage == 4) {
	
echo "
<html>
<body>
 
 <h3> Thank you for submitting your information. \n<br> 
 You will receive a confirmation email from us shortly. \n <br> <br>
 Have a nice day ! \n </h2> 

</body>
</html>

";	
}

?>