<?php
//file : app/config/shortFormDB.php

return [
	

	1 =>  [
			'singleFields'	=> [],

			'multiFields' => [
				'page1Data'	=> ['propertyName','numberRooms','checkInTime','checkOutTime','streetAddress','city','stateProvince','postalCode','website','telephoneNumber','emailForResDelivery','additionalEmails','hotelDescription'],
			],
			'requiredFields' => [],
			'requiredFieldLabels' => []

		],
	2	=> [
			'singleFields'	=> [],

			'multiFields'	=> [
				'page2Data' => ['language','location','currency','creditCardsAccepted1','creditCardsAccepted2','creditCardsAccepted3','creditCardsAccepted4','creditCardsAccepted5','creditCardsAccepted6','creditCardsAccepted7','creditCardsAccepted8','childAgeRanges','taxes'],
			],
			'requiredFields' => [],
			'requiredFieldLabels' => []
		],
	3 => [
		
			'singleFields' => [],

			'multiFields'	=> [
				'page3Data'	=> ['roomCode1', 'roomName1', 'maxNoRooms1', 'minRate1', 'maxPeopleMaxBedSpaces1', 'minNoPeople1','roomCode2', 'roomName2', 'maxNoRooms2', 'minRate2', 'maxPeopleMaxBedSpaces2', 'minNoPeople2','roomCode3', 'roomName3', 'maxNoRooms3', 'minRate3', 'maxPeopleMaxBedSpaces3', 'minNoPeople3','roomCode4', 'roomName4', 'maxNoRooms4', 'minRate4', 'maxPeopleMaxBedSpaces4', 'minNoPeople4','roomCode5', 'roomName5', 'maxNoRooms5', 'minRate5', 'maxPeopleMaxBedSpaces5', 'minNoPeople5'],
			],
			'requiredFields' => [],
			'requiredFieldLabels' => []
		],
	4	=> [
		'singleFields'	=> [],

		'multiFields'	=> [
			'page4Data' => ['paymentPolicy', 'cancellationPolicy']
		],
		'requiredFields' => [],
		'requiredFieldLabels' => []
	],
	5 => [
			'singleFields'	=> [],

			'multiFields'	=> [

				'page5Data' => ['rateCode1','rateName1','validityDates1','rateDerivedDesc1','rateCode2','rateName2','validityDates2','rateDerivedDesc2','rateCode3','rateName3','validityDates3','rateDerivedDesc3']
			],
			'requiredFields' => [],
			'requiredFieldLabels' => []
		],
		
	6 => [
			'singleFields'	=> ['formComplete'],
			'multiFieldLabels' => [],
			'multiFields'	=> [

				'signature'	=> ['signature1','signature2']
			],
			'requiredFields' => [],
			'requiredFieldLabels' => []
		]
	
];