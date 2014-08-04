
<?php
require_once('../nusoap/nusoap.php');
function common($operation, $params)
{
		$proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
		$proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
		$proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
		$proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';
		$wsdlURL ='http://api2.fromdoppler.com/Default.asmx?wsdl';
		$client= new nusoap_client($wsdlURL,'wsdl',$proxyhost, $proxyport, $proxyusername, $proxypassword);
		$client->soap_defencoding='UTF-8';
		$result = $client->call($operation, $params);
		$err = $client->getError();
		if ($err) {
			echo '<p><b>Constructor error: ' . $err . '</b></p>';
		}
		else
		{
			print_r($_GET['callback']."([{\"status\":\"true\"}])");		
		}
}

function AddSubscriber($api,$list,$email)
{
	$operation ='AddSubscriber';
			$params = array(
						'APIKey'=>$api,
						'SubscribersListID'=>$list,
						'EMail'=>$email
						);
	common($operation,$params);
}



$apiKey='8EA4F0E0A0B9C3BCBA85071C9ED33FD3';
$List=503238;
$email=$_GET['email'];

AddSubscriber($apiKey,$List,$email);


?>

