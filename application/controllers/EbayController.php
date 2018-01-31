<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EbayController extends CI_Controller {

	public function index()
	{
		$this->config->load('ebay_config');
		return $this->config->item('ebay_credentials');
	}

	public function geteBayOfficialTime()
	{
		$config = $this->index();
		$response = $this->el->GeteBayOfficialTime($config);
		echo $response;
	}

	// route: ebay-app/index.php/ebaycontroller/getItem/$itemId
	public function getItem($itemId)
	{
		$config = $this->index();
		$response = $this->el->GetItem($config, $itemId);
		echo $response;
	}

	// route: ebay-app/index.php/ebaycontroller/reviseItemPrice/$itemId/$newPrice
	public function reviseItemPrice($itemId, $newPrice)
	{
		$config = $this->index();
		$response = $this->el->ReviseItemPrice($config, $itemId, $newPrice);
		echo $response;
	}

	// route: ebay-app/index.php/ebaycontroller/reviseItemTitle/$itemId/$newTitle
	public function reviseItemTitle($itemId, $newTitle)
	{
		$config = $this->index();
		$response = $this->el->ReviseItemTitle($config, $itemId, $newTitle);
		echo $response;
	}
}
