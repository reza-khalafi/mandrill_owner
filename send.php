<?php
/**
@Developed by Reza Khalafi
@r.khalafi65@gmail.com  - 2015 
*/
require('mandrill.php');
class sender extends mandrill
{
	
	function __construct()
	{   
		try
		{
			$hostname  = 'localhost';   //Enter host name
			$username  = 'root';        //Enter Username
			$password  = 'root';        //Enter password
			$dbname    = 'uitips';      //Enter database name
			$table     = 'newsletter';   //Enter email table
			$field     = 'email_newsletter';   //Enter email field

			$pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
	        $stmt = $pdo->prepare(" select * from `$table` ");
			$stmt->execute();    
			$fetch = $stmt->fetchAll();	

		}
		catch(Exception $e)
		{
			echo ($e->getMessage());
		}  



		for ($i=0; $i < count($fetch); $i++)
		{
			$payload = array(
					        'message'     => array(
					        'subject'     => 'Uitips',
					        'html'        => $_POST['content'], 
					        'from_email'  => 'uitips@info.com',
					        'to' => array(array('email'=>$fetch[$i][$field]))
							                       )
				            );

		    $response = mandrill::request('messages/send', $payload);
		}//End of while
	    

	    if($response)
	    {
	    	echo '<h2 style="color:green" >Email sent.</h2>';
	    }
	    else
	    {
	        echo '<h2 style="color:red" >Email not sent.</h2>';
	    }	    
	}//End of construct



}

$sent_mail = new sender();


?>    