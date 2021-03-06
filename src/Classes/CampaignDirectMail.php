<?php namespace Fungku\NetSuite\Classes;

class CampaignDirectMail {
	public $internalId;
	public $campaignGroup;
	public $template;
	public $description;
	public $subscription;
	public $channel;
	public $cost;
	public $status;
	public $dateScheduled;
	public $promoCode;
	public $customFieldList;
	static $paramtypesmap = array(
		"internalId" => "string",
		"campaignGroup" => "RecordRef",
		"template" => "RecordRef",
		"description" => "string",
		"subscription" => "RecordRef",
		"channel" => "RecordRef",
		"cost" => "float",
		"status" => "CampaignCampaignDirectMailStatus",
		"dateScheduled" => "dateTime",
		"promoCode" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

