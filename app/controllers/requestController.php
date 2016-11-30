<?php 
	
	// if(isset())

	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', 'root');
	define('DB', 'main');

	function DB(){
		$db = mysqli_connect('localhost', 'root', 'root', 'quantum-db');
		return $db;
	}

	$conn = DB();
	$result = $conn -> query('SELECT * FROM Amazon');
	$conn -> close();

	if($result -> num_rows !== 0){
		while($row = $result -> fetch_assoc()){
			$asin = $row['ASIN'];
			$title = $row['Title'];
			$msn = $row['MSN'];
			$price = $row['price'];

			include('row.part.php');

		}
	}
	// else echo '0';

	$requestASIN = 'B00A35X6NU';

	if(isset($requestASIN)):

		// 1. Enter the time stamp.

		$timestamp = gmdate("Y-m-d\TH:i:s\\Z", time());

		// 2. URL-encode the request

		$AWSAccessKeyId = 'AKIAIOWFZ4KTTJAKNLFQ';
		$AssociateTag = 'q0d9b-20';
		$ItemId = $requestASIN;
		$Operation = 'ItemLookup';
		$ResponseGroup = 'OfferFull';
		$ResponseGroup = 'ItemAttributes';
		$Service = 'AWSECommerceService';
		$Timestamp_encoded = urlencode($timestamp);
		$Version = '2013-08-01';

		$secretKey = 'DL6rUpqfXpMuQEVmiGGYgudKa0ePlbaR8OX4OjHB';

		$myString =  'AWSAccessKeyId=' . $AWSAccessKeyId . '&AssociateTag=' . $AssociateTag .'&ItemId=' . $ItemId . '&Operation=' . $Operation . '&ResponseGroup=' . $ResponseGroup . '&Service=' . $Service . '&Timestamp=' . $Timestamp_encoded . '&Version=' . $Version;

		$stringToSign = 'GET
webservices.amazon.com
/onca/xml
' . $myString;

		$signature = base64_encode(hash_hmac('SHA256', $stringToSign, $secretKey, True));

		$urlEncodedSignature = urlencode($signature);

		$requestUrl = 'http://webservices.amazon.com/onca/xml?' . $myString . '&Signature=' . $urlEncodedSignature;

		?>

		<a href="<?php echo $requestUrl; ?>">Link</a>
		<br>

		<?php

		$response = file_get_contents($requestUrl);
		$parsedXml = simplexml_load_string($response);

		$dom = new DOMDocument;
		$dom -> loadXml($response);

		$totalOffers = $dom -> getElementsByTagName('Item')->length;

		if($totalOffers!=0){

			$asin = $parsedXml -> Items -> Item -> ASIN;
			$title = $parsedXml -> Items -> Item -> ItemAttributes -> Title;
			$mpn = $parsedXml -> Items -> Item -> ItemAttributes -> MPN;
			$price = $parsedXml -> Items -> Item -> ItemAttributes -> ListPrice -> FormattedPrice;

			$arr = array("ASIN" => "$asin", "Title" => "$title", "MPN" => "$mpn", "Price" => "$price");

			echo json_encode($arr);

			// echo 'ASIN: ' . $asin . '<br>';
			// echo 'Title: ' . $title . '<br>';
			// echo 'MPN: ' . $mpn . '<br>';
			// echo 'Price: ' . $price . '<br>';
		}
		// else echo 'No offers found';

	endif;

?>