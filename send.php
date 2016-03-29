<?php
	/* names of the fields as keys with there values as the array elements */
	$fields=array(
        'name' => NULL,
        'sex' => NULL,
        'birth' => NULL,
        'birthplace' => NULL,
        'putovnica' => NULL,
        'address' => NULL,
        'email' => NULL,
        'phone' => NULL,
        'school' => NULL,
        'grade' => NULL,
        'activity' => NULL,
        'mag' => NULL,
        'prog' => NULL,
        'lang' => NULL,
        'con' => NULL,
        'ss' => NULL,
        'heard' => NULL,
        'pay' => NULL,
        'letter' => NULL,
        'mletter' => NULL
    );

	foreach($fields as $key => $val)
	{
		$val = $_POST[$key];
		if(is_null($val))
		{
		    // checks value of each field
			$error_msg.="$key is empty";
			header( "Location: again.htm" );
			exit;
		}
	}

    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $birth = $_POST['birth'];
    $birthplace = $_POST['birthplace'];
    $putovnica = $_POST[ 'putovnica'];
    $address = $_POST['address' ];
    $email =	$_POST['email'];
    $phone = $_POST['phone'];
    $school = $_POST['school'];
    $grade = $_POST['grade'];
    $activity = $_POST['activity'];
    $mag = $_POST['mag'];
    $prog = $_POST['prog'];
    $lang = $_POST['lang'];
    $con = $_POST['con'];
    $ss = $_POST['ss'];
    $heard = $_POST['heard'];
    $pay = $_POST['pay'];
    $letter = $_POST['letter'];
    $mletter = $_POST['mletter'];

	// nobvezna pitanja
    $prog2 = $_POST['prog2'];
    $con2 = $_POST['con2'];
    $ss2 = $_POST['ss2'];
	$other2 = $_POST['other2'];
	$astro = $_POST['astro'];

	if($error_msg=='') {
        /* all is well so do what you need to */
        $body = <<<BODY
Name: $name
Sex: $sex
Date of birth: $birth
Birthplace: $birthplace
Putovnica: $putovnica
Address: $address
Email: $email
Telephone: $phone
School: $school
Grade: $grade
School activities: $activity
Reads magazines: $mag
Fields of interest in astronomy: $astro
Knows how to program: $prog
Programming languages: $prog2
Can speak: $lang
Participated on contests: $con
Contests: $con2
Participated on summer schools: $ss
Summer schools: $ss2
Heard for VSA: $heard $other2
Can find sponsor: $pay
Recommendation letter will arrive by: $letter
Motivation letter:
$mletter
BODY;
        mail('korado@astro.hr, stefan.cikota@gmail.com, vsa.visnjan@gmail.com, edu@sci.hr', 'VSA 2016 application', $body);
        header( "Location: thanks.htm" );
	}
