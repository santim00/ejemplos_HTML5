<?php
require_once('nusoap/nusoap.php');
function common($api,$operation,$params)
{
	$proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
	$proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
	$proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
	$proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';
	if ($api==1)
	{
		$wsdlURL ='http://api.fromdoppler.com/Default.asmx?wsdl';
	}
	else 
	{
		$wsdlURL ='http://api2.fromdoppler.com/Default.asmx?wsdl';
	}
	$client= new nusoap_client($wsdlURL,'wsdl',$proxyhost, $proxyport, $proxyusername, $proxypassword);
	$client->soap_defencoding='UTF-8';
	$result = $client->call($operation, $params);
	$rta=0;
	if ($client->fault) 
	{
		echo '<h2>Fault</h2><pre>';
		print_r($result);
		
		echo '</pre>';
		echo '<h2>Request</h2><pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
		echo '<h2>Response</h2><pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
		echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';

	} 
	else 
	{
		// Check for errors
		$err = $client->getError();
		if ($err) {
			// Display the error
			echo '<h2>Error</h2><pre>' . $err . '</pre>';
		} else {
			// Display the result
			//echo '<h2>Result</h2><pre>';
			//print_r($result);
			$rta=1;
			//echo '</pre>';
		}
	}
	
	return $rta;
}

function AddSubscriber($api,$apiKey,$List,$email)
{
	$operation ='AddSubscriber';
	$params = array(
				'APIKey'=>$apiKey,
				'SubscribersListID'=>$List,
				'EMail'=>$email
				);
	$result=common($api,$operation,$params);
}

function AddSubscriberwithName($api,$apiKey,$List,$email,$firstname,$lastname)
{
	$operation ='AddSubscriberwithName';
	$params = array(
				'APIKey'=>$apiKey,
				'SubscribersListID'=>$List,
				'FirstName'=>$firstname,
				'LastName'=>$lastname,
				'EMail'=>$email
				);
	$result=common($api,$operation,$params);
} 
       
function AddSubscriberwithNameandCustoms($api,$apiKey,$List,$email,$firstname,$lastname,$customField)
{

	$operation ='AddSubscriberwithNameandCustoms';				
	$params = array(
				'APIKey'=>$apiKey,
				'SubscribersListID'=>$List,
				'FirstName'=>$firstname,
				'LastName'=>$lastname,
				'EMail'=>$email,
				'CustomsFields' => $customField	
				);
						
	$result=common($api,$operation,$params);
}



if (isset($_POST["ebook"]))
{
	$apiKey='8EA4F0E0A0B9C3BCBA85071C9ED33FD3';
	if ($_POST["ebook"]=="1"){
		$List = 543181;
	}
	if ($_POST["ebook"]=="2"){
		$List = 543187;
	}
	if ($_POST["ebook"]=="3"){
		$List = 543188;
	}
	if ($_POST["ebook"]=="i1"){
		$List = 543188;
	}
	
	$api=2;
	$email=(isset($_POST["email"])) ? $email=$_POST['email'] : $email=" ";
	AddSubscriber($api,$apiKey,$List,$email);
}



/*****************************/

/*
	Guía HTML id 543181 
	Infografía social media id 543185
	ABC email marketing id 543187
	Brian Massey id 543188 
*/

/****************************/

?>
