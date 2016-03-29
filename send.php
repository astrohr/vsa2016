<?php
	/* names of the fields as keys with there values as the array elements */
	$fields=array('name' => $name, 'sex' => $sex, 'birth' => $birth, 'birthplace' => $birthplace, 'putovnica' => $putovnica, 'address' => $address, 'email' => $email,	'phone' => $phone, 'school' => $school, 'grade' => $grade, 'activity' => $activity, 'mag' => $mag,	'prog' => $prog, 'lang' => $lang, 'con' => $con, 'ss' => $ss, 'heard' => $heard, 'pay' => $pay, 'letter' => $letter, 'mletter' => $mletter);

	foreach($fields as $key => $val)
	{
		$val=$_REQUEST[$key];
		if(empty($val))
		{ // checks value of each field
			$error_msg.="$key is empty";
			header( "Location: again.htm" );
		}
	}





    $name =  $_REQUEST['name'];
    $sex =  $_REQUEST['sex'];
    $birth =$_REQUEST['birth'];
    $birthplace = $_REQUEST['birthplace'];
    $putovnica = $_REQUEST[ 'putovnica'];
    $address= $_REQUEST['address' ];
    $email=	$_REQUEST['email'];
    $phone= $_REQUEST['phone'];
    $school=$_REQUEST['school'];
    $grade=$_REQUEST['grade'];
    $activity=$_REQUEST['activity'];
    $mag=$_REQUEST['mag'];
    $prog=$_REQUEST['prog'];
    $lang=$_REQUEST['lang'];
    $con=$_REQUEST['con'];
    $ss=$_REQUEST['ss'];
    $heard= $_REQUEST['heard'];
    $pay=$_REQUEST['pay'];
    $letter=$_REQUEST['letter'];
    $mletter=$_REQUEST['mletter'];

	// nobvezna pitanja
    $prog2 = $_REQUEST['prog2'];
    $con2 = $_REQUEST['con2'];
    $ss2 = $_REQUEST['ss2'];
	$other2 = $_REQUEST['other2'];
	$astro = $_REQUEST['astro'];

	if($error_msg=='') {
	/* all is well so do what you need to */
	$body=" Name: ".$name."\n Sex: ".$sex."\n Date of birth: ".$birth."\n Birthplace: ".$birthplace."\n Putovnica: ".$putovnica."\n Address: ".$address."\n Email: ".$email."\n Telephone: ".$phone.	"\n School: ".$school."\n Grade: ".$grade."\n School activities: ".$activity."\n Reads magazines: ".$mag."\n Fields of interest in astronomy: ".$astro."\n Knows how to program: ".$prog."\n Programming languages: ".$prog2."\n Can speak: ".$lang."\n Participated on contests: ".$con."\n Contests: ".$con2."\n Participated on summer schools: ".$ss."\n Summer schools: ".$ss2."\n Heard for VSA: ".$heard." ".$other2."\n Can find sponsor: ".$pay."\n Recommendation letter will arrive by: ".$letter."\n Motivation letter: \n".$mletter;
	mail('korado@astro.hr, stefan.cikota@gmail.com, vsa.visnjan@gmail.com, edu@sci.hr', 'VSA 2016 application', $body);
	header( "Location: thanks.htm" );
	}

?>