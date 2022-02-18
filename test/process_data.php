<?php

//process_data.php

if(isset($_POST["email"]))
{
    sleep(5);
    $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "");

    $success = '';

    $name = $_POST["name"];

    $email = $_POST["email"];

    $comment = $_POST["comment"];

    $gender = $_POST["gender"];

    $name_error = '';
    $email_error = '';
    $comment_error = '';
    $gender_error = '';

    if(empty($name))
    {
        $name_error = 'Name is Required';
    }
    else
    {
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
        {
            $name_error = 'Only Letters and White Space Allowed';
        }
    }

    if(empty($email))
    {
        $email_error = 'Email is Required';
    }
    else
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $email_error = 'eMail is invalid';
        }
    }
    if(empty($comment))
    {
        $comment_error = 'Comment is Required Field';
    }

    if(empty($gender))
    {
        $gender_error = 'Please Select your gender';
    }

    if($name_error == '' && $email_error == '' && $comment_error == '' && $gender_error == '')
    {
        //put insert data code here

        $data = array(
            ':name'			=>	$name,
            ':email'		=>	$email,
            ':comment'		=>	$comment,
            ':gender'		=>	$gender
        );

        $query = "
		INSERT INTO data_sample 
		(name, email, comment, gender) 
		VALUES (:name, :email, :comment, :gender)
		";

        $statement = $connect->prepare($query);

        $statement->execute($data);
    }

    $output = array(
        'name'	=>	$name,
        'email'	=>	$email,
        'comment'	=>	$comment,
        'gender'	=>	$gender
    );
    echo json_encode($output);
}

?>