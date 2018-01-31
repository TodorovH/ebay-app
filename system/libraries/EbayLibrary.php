<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CI_EbayLibrary {

	public $site_id = 3;

	public function GeteBayOfficialTime($config) {

		$call_name = 'GeteBayOfficialTime';
		
		// Generate XML request
		$xml_request = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
						<" . $call_name . "Request xmlns=\"urn:ebay:apis:eBLBaseComponents\">
						<RequesterCredentials>
							<eBayAuthToken>" . $config['auth_token'] . "</eBayAuthToken>
						</RequesterCredentials>
						</" . $call_name . "Request>";

		$response = $this->EbayConnection($config, $call_name, $xml_request);

		echo $response;
	}

	public function GetItem($config, $itemId) {

		$call_name = 'GetItem';
		
		// Generate XML request
		$xml_request = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
						<" . $call_name . "Request xmlns=\"urn:ebay:apis:eBLBaseComponents\">
						<RequesterCredentials>
						<eBayAuthToken>" . $config['auth_token'] . "</eBayAuthToken>
						</RequesterCredentials>
						<DetailLevel>ReturnAll</DetailLevel>
						<IncludeItemSpecifics>true</IncludeItemSpecifics>
						<IncludeWatchCount>true</IncludeWatchCount>
						<ItemID>" . $itemId . "</ItemID>
						</" . $call_name . "Request>"; 

		$response = $this->EbayConnection($config, $call_name, $xml_request);

		echo $response;
	}

	public function ReviseItemPrice($config, $itemId, $newPrice) {

		$call_name = 'ReviseItem';
		
		// Generate XML request
		$xml_request = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
						<" . $call_name . "Request xmlns=\"urn:ebay:apis:eBLBaseComponents\">
						<RequesterCredentials>
						<eBayAuthToken>" . $config['auth_token'] . "</eBayAuthToken>
						</RequesterCredentials>
						<Item ComplexType=\"ItemType\">
						<ItemID>" . $itemId . "</ItemID>
						<Currency>USD</Currency>
						<StartPrice>" . $newPrice . "</StartPrice>
						</Item>
						</" . $call_name . "Request>​"; 

		$response = $this->EbayConnection($config, $call_name, $xml_request);

		echo $response;
	}

	public function ReviseItemTitle($config, $itemId, $newTitle) {

		$call_name = 'ReviseItem';
		
		// Generate XML request
		$xml_request = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
						<" . $call_name . "Request xmlns=\"urn:ebay:apis:eBLBaseComponents\">
						<RequesterCredentials>
						<eBayAuthToken>" . $config['auth_token'] . "</eBayAuthToken>
						</RequesterCredentials>
						<Item ComplexType=\"ItemType\">
						<ItemID>" . $itemId . "</ItemID>
						<Title>" . $newTitle . "</Title>
						</Item>
						</" . $call_name . "Request>​"; 

		$response = $this->EbayConnection($config, $call_name, $xml_request);

		echo $response;
	}

	private function EbayConnection($config, $call_name, $xml_request) {
		// Create headers to send with CURL request.
		$headers = array
		(
			'X-EBAY-API-COMPATIBILITY-LEVEL: '	. $config['compat_level'],
			'X-EBAY-API-DEV-NAME: '				. $config['dev_id'],
			'X-EBAY-API-APP-NAME: '				. $config['app_id'],
			'X-EBAY-API-CERT-NAME: '			. $config['cert_id'],
			'X-EBAY-API-CALL-NAME: '			. $call_name, 
			'X-EBAY-API-SITEID: '				. $this->site_id,
		);

		// Send request to eBay and load response in $response
		$connection = curl_init();
		curl_setopt($connection, CURLOPT_URL, $config['api_endpoint']);
		curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($connection, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($connection, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($connection, CURLOPT_POST, 1);
		curl_setopt($connection, CURLOPT_POSTFIELDS, $xml_request);
		curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($connection);
		curl_close($connection);

		return $response;
	}
}