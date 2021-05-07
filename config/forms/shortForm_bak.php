<?php
//file : app/config/shortFormDB.php

return [
	

	1	=> array(
			'singleFields'	=> array('hotelName','yearBuilt','yearRenovated','numberRooms','numberFloors', 'numberNonSmokingRooms', 'aaaRating', 'starRating'),

			'multiFields'	=> array(
				'basicInformation' => array('streetAddress','city','stateOrProvince','country','postalCode','url','propertyCurrency','resDeliveryEmailPrimary','primaryContactNumber','primaryFaxNumber'),
				'hotelTypeMulti' => array(
					'allSuites','bAndB','allInclusive','beachfront','conventionCenter','extendedStay','ranchFarm','standardHotel','apartmentsVillas','historicProperty','motel','resortSpaLodge'
				),
				'marketTier' => array(
					'economy', 'midscale', 'upperMidscale', 'upper', 'upperUpscale', 'luxury'
				)
			),
			'formData' => array(
				'currencyTypes'	=> array(
					'United States dollar','Aruban florin','Bahamian dollar','Barbadian dollar','Bermudian dollar','Belize dollar','Canadian dollar','Cayman Islands dollar','Colombian peso','Costa Rican colón','Cuban convertible peso','Cuban peso','Danish krone','Dominican peso','East Caribbean dollar','Euro','Guatemalan quetzal','Haitian gourde','Honduran lempira','Jamaican dollar','Mexican peso','Netherlands Antillean guilder','Nicaraguan córdoba','Panamanian balboa','Trinidad and Tobago dollar'
				),
				'hotelTypeMultiLabels'	=> array('All Suites','B & B','All Inclusive','Beachfront','Convention Center','Extended Stay','Ranch/Farm','Standard Hotel','Apartments/Villas','Historic Property','Motel','Resort/Spa/Lodge'
				),
				'marketTierLabels' => array('Economy', 'Midscale', 'Upper Midscale', 'Upper', 'Upper Upperscale', 'Luxury'
				)
			),
			'requiredFields' => array(
				'hotelName', 'streetAddress', 'resDeliveryEmailPrimary' 
			),
			'requiredFieldLabels' => array(
				'Hotel Name', 'Street Address', 'Primary Contact Email'
			)
		),
	2 =>  array(
			'singleFields'	=> array('frontDeskArrangements','childrenPolicyText'),

			'multiFields' => array(

				'generalPolicies'	=> array('checkInTime','checkOutTime'),

				'paymentMethods'	=> array('paymentMethod1','paymentMethod3','paymentMethod4','paymentMethod5','paymentMethod6','paymentMethod7','paymentMethod8'),
				'familyPolicies'	=> array('familyPolicy1','familyPolicy2','familyPolicy3','familyPolicy4','familyPolicy5','familyPolicy6','familyPolicy7'),
			
				'petPolicies'	=> array('petPolicy1','petPolicy2','petPolicy3','petPolicy4'),

				'rateTypes'	=> array('rateTypes12')
			)
		),




	3 => array(
		'singleFields' => array('taxIncluded','serviceChargeIncluded'),

		'multiFields'	=> array(

			'guaranteeDepositPolicies'	=> array('holdGuaranteeDeposit','reservationHeldUntilHold','numNightsCreditCardDeposit','cancellationOfArrivalHours', 'cancellationOfArrivalDays', 'cancellationCharge'),

			'cancellationPolicy'	=> array('cancellationGroup','consequenceGroup1','consequenceGroup2'),

			'taxesAndFees' => array('occupancyTaxFlatChargeAmt', 'occupancyTaxPercentageAmt', 'occupancyTaxNotes', 'roomTaxFlatChargeAmt', 'roomTaxPercentageAmt', 'roomTaxNotes', 'stateTaxFlatChargeAmt', 'stateTaxPercentageAmt', 'stateTaxNotes', 'serviceTaxFlatChargeAmt', 'serviceTaxPercentageAmt', 'serviceTaxNotes', 'otherTaxFlatChargeAmt', 'otherTaxPercentageAmt', 'otherTaxNotes'),

			'rateTypes'	=> array('rateTypes16','rateTypes17','rateTypes18','rateTypes19')

		)
	),
	4	=> array(
		'singleFields'	=> array('hotelDescription','locationDescription','facilitiesDescription','meetingFacilitiesDescription','diningDescription','recreationDescription','areaAttractionsDescription','miscellaneousInformation'),

		'multiFieldLabels'	=> array(

			'amenitiesAndFacilities' => array('24 Hour Room Service','ADA Accessible','Air Conditioning','Bar','Breakfast included in all rates','Business Center','Copy Service','Fax Service','Fitness Facilities','Free Local Calls','Free Parking','Free WiFi in Meeting Rooms','Free WiFi in Public Spaces','Free WiFi in Room','Guest Laundry Facility','High Speed Internet','Indoor Pool','Interior Doorways to Room','Jacuzzi','Meal Plan','Meeting Rooms Available','No Adult Channels Offered','Outdoor Pool','Parking fee charged','Restaurant','Room Service','Smoke-Free Property','Smoking Rooms Available','Wheelchair Access')
			),

		'multiFields'	=> array(

			'amenitiesAndFacilities' => array('amenitiesAndFacilities1','amenitiesAndFacilities2','amenitiesAndFacilities3','amenitiesAndFacilities4','amenitiesAndFacilities5','amenitiesAndFacilities6','amenitiesAndFacilities7','amenitiesAndFacilities8','amenitiesAndFacilities9','amenitiesAndFacilities10','amenitiesAndFacilities11','amenitiesAndFacilities12','amenitiesAndFacilities13','amenitiesAndFacilities14','amenitiesAndFacilities15','amenitiesAndFacilities16','amenitiesAndFacilities17','amenitiesAndFacilities18','amenitiesAndFacilities19','amenitiesAndFacilities20','amenitiesAndFacilities21','amenitiesAndFacilities22','amenitiesAndFacilities23','amenitiesAndFacilities24','amenitiesAndFacilities25','amenitiesAndFacilities26','amenitiesAndFacilities27','amenitiesAndFacilities28','amenitiesAndFacilities29')
		)
	),
	5 => array(
			'singleFields'	=> array(),

			'multiFieldLabels'	=> array(

				'roomAmenities' => array('No Smoking','Balcony','Private Bathroom','Hair Dryer (on request)','Telephone','Safe Box','TV','DVD','Radio','Internet (high speed)','Laundry Service','Coffee/Tea Maker','Iron/Board','Show No Smoking Icon','Fireplace','Thermal Bath','Jetted Bath','Fax','Desk','LCD TV','VCR','Hi-Fi System','Internet (WiFi)','Bathrobe','Kitchen','Iron/Board on request','Terrace','Air Conditioning','Hair Dryer','Alarm Clock','Mini Bar','Dogs Allowed','Satellite TV','VCR (on request)','Internet (Modem)','Daily Newspaper','Pool Towels','Microwave','Trouser Press')
			),
			'multiFields'	=> array(

				'roomDescriptions1' => array('roomTypeCode1','pmsCode1','roomName1','marketingLine11','marketingLine11','marketingLine21','roomType1','numRooms1','numBedrooms1','maxPersons1','maxRollaways1','beddingInfo1','king1','kingNum1','queen1','queenNum1','doubleFull1','doubleFullNum1','twin1','twinNum1','detailedRoomDesc1','other11','other21','other31','lakeView1','seaView1','mtView1','parkView1','other11','other21','other31','lakeView1','seaView1','mtView1','parkView'),

				'roomAmenities1' => array('noSmoking1','balcony1','privateBathroom1','hairDryer1','telephone1','safeBox1','TV1','DVD1','radio1','internetHighSpeed1','laundryService1','coffeeTeaMaker1','ironBoard1','showNoSmokingIcon1','fireplace1','thermalBath1','jettedBath1','fax1','desk1','LCDTV1','VCR1','hiFiSystem1','internetWiFi1','bathrobe1','kitchen1','ironBoardOnRequest1','terrace1','airConditioning1','hairDryer21','alarmClock1','miniBar1','dogsAllowed1','satelliteTV1','VCRonRequest1','internetModem1','dailyNewspaper1','poolTowels1','microwave1','trouserPress1'),

				'roomDescriptions2' => array('roomTypeCode2','pmsCode2','roomName2','marketingLine12','marketingLine12','marketingLine22','roomType2','numRooms2','numBedrooms2','maxPersons2','maxRollaways2','beddingInfo2','king2','kingNum2','queen2','queenNum2','doubleFull2','doubleFullNum2','twin2','twinNum2','detailedRoomDesc2','other12','other22','other32','lakeView2','seaView2','mtView2','parkView2','other12','other22','other32','lakeView2','seaView2','mtView2','parkView'),

				'roomAmenities2' => array('noSmoking2','balcony2','privateBathroom2','hairDryer2','telephone2','safeBox2','TV2','DVD2','radio2','internetHighSpeed2','laundryService2','coffeeTeaMaker2','ironBoard2','showNoSmokingIcon2','fireplace2','thermalBath2','jettedBath2','fax2','desk2','LCDTV2','VCR2','hiFiSystem2','internetWiFi2','bathrobe2','kitchen2','ironBoardOnRequest2','terrace2','airConditioning2','hairDryer22','alarmClock2','miniBar2','dogsAllowed2','satelliteTV2','VCRonRequest2','internetModem2','dailyNewspaper2','poolTowels2','microwave2','trouserPress2'),

				'roomDescriptions3' => array('roomTypeCode3','pmsCode3','roomName3','marketingLine13','marketingLine13','marketingLine23','roomType3','numRooms3','numBedrooms3','maxPersons3','maxRollaways3','beddingInfo3','king3','kingNum3','queen3','queenNum3','doubleFull3','doubleFullNum3','twin3','twinNum3','detailedRoomDesc3','other13','other23','other33','lakeView3','seaView3','mtView3','parkView3','other13','other23','other33','lakeView3','seaView3','mtView3','parkView'),

				'roomAmenities3' => array('noSmoking3','balcony3','privateBathroom3','hairDryer3','telephone3','safeBox3','TV3','DVD3','radio3','internetHighSpeed3','laundryService3','coffeeTeaMaker3','ironBoard3','showNoSmokingIcon3','fireplace3','thermalBath3','jettedBath3','fax3','desk3','LCDTV3','VCR3','hiFiSystem3','internetWiFi3','bathrobe3','kitchen3','ironBoardOnRequest3','terrace3','airConditioning3','hairDryer23','alarmClock3','miniBar3','dogsAllowed3','satelliteTV3','VCRonRequest3','internetModem3','dailyNewspaper3','poolTowels3','microwave3','trouserPress3'),

				'roomDescriptions4' => array('roomTypeCode4','pmsCode4','roomName4','marketingLine14','marketingLine14','marketingLine24','roomType4','numRooms4','numBedrooms4','maxPersons4','maxRollaways4','beddingInfo4','king4','kingNum4','queen4','queenNum4','doubleFull4','doubleFullNum4','twin4','twinNum4','detailedRoomDesc4','other14','other24','other34','lakeView4','seaView4','mtView4','parkView4','other14','other24','other34','lakeView4','seaView4','mtView4','parkView'),

				'roomAmenities4' => array('noSmoking4','balcony4','privateBathroom4','hairDryer4','telephone4','safeBox4','TV4','DVD4','radio4','internetHighSpeed4','laundryService4','coffeeTeaMaker4','ironBoard4','showNoSmokingIcon4','fireplace4','thermalBath4','jettedBath4','fax4','desk4','LCDTV4','VCR4','hiFiSystem4','internetWiFi4','bathrobe4','kitchen4','ironBoardOnRequest4','terrace4','airConditioning4','hairDryer24','alarmClock4','miniBar4','dogsAllowed4','satelliteTV4','VCRonRequest4','internetModem4','dailyNewspaper4','poolTowels4','microwave4','trouserPress4'),

				'roomDescriptions5' => array('roomTypeCode5','pmsCode5','roomName5','marketingLine15','marketingLine15','marketingLine25','roomType5','numRooms5','numBedrooms5','maxPersons5','maxRollaways5','beddingInfo5','king5','kingNum5','queen5','queenNum5','doubleFull5','doubleFullNum5','twin5','twinNum5','detailedRoomDesc5','other15','other25','other35','lakeView5','seaView5','mtView5','parkView5','other15','other25','other35','lakeView5','seaView5','mtView5','parkView'),

				'roomAmenities5' => array('noSmoking5','balcony5','privateBathroom5','hairDryer5','telephone5','safeBox5','TV5','DVD5','radio5','internetHighSpeed5','laundryService5','coffeeTeaMaker5','ironBoard5','showNoSmokingIcon5','fireplace5','thermalBath5','jettedBath5','fax5','desk5','LCDTV5','VCR5','hiFiSystem5','internetWiFi5','bathrobe5','kitchen5','ironBoardOnRequest5','terrace5','airConditioning5','hairDryer25','alarmClock5','miniBar5','dogsAllowed5','satelliteTV5','VCRonRequest5','internetModem5','dailyNewspaper5','poolTowels5','microwave5','trouserPress5'),

				'roomDescriptions6' => array('roomTypeCode6','pmsCode6','roomName6','marketingLine16','marketingLine16','marketingLine26','roomType6','numRooms6','numBedrooms6','maxPersons6','maxRollaways6','beddingInfo6','king6','kingNum6','queen6','queenNum6','doubleFull6','doubleFullNum6','twin6','twinNum6','detailedRoomDesc6','other16','other26','other36','lakeView6','seaView6','mtView6','parkView6','other16','other26','other36','lakeView6','seaView6','mtView6','parkView'),

				'roomAmenities6' => array('noSmoking6','balcony6','privateBathroom6','hairDryer6','telephone6','safeBox6','TV6','DVD6','radio6','internetHighSpeed6','laundryService6','coffeeTeaMaker6','ironBoard6','showNoSmokingIcon6','fireplace6','thermalBath6','jettedBath6','fax6','desk6','LCDTV6','VCR6','hiFiSystem6','internetWiFi6','bathrobe6','kitchen6','ironBoardOnRequest6','terrace6','airConditioning6','hairDryer26','alarmClock6','miniBar6','dogsAllowed6','satelliteTV6','VCRonRequest6','internetModem6','dailyNewspaper6','poolTowels6','microwave6','trouserPress6'),

				'roomDescriptions7' => array('roomTypeCode7','pmsCode7','roomName7','marketingLine17','marketingLine17','marketingLine27','roomType7','numRooms7','numBedrooms7','maxPersons7','maxRollaways7','beddingInfo7','king7','kingNum7','queen7','queenNum7','doubleFull7','doubleFullNum7','twin7','twinNum7','detailedRoomDesc7','other17','other27','other37','lakeView7','seaView7','mtView7','parkView7','other17','other27','other37','lakeView7','seaView7','mtView7','parkView'),

				'roomAmenities7' => array('noSmoking7','balcony7','privateBathroom7','hairDryer7','telephone7','safeBox7','TV7','DVD7','radio7','internetHighSpeed7','laundryService7','coffeeTeaMaker7','ironBoard7','showNoSmokingIcon7','fireplace7','thermalBath7','jettedBath7','fax7','desk7','LCDTV7','VCR7','hiFiSystem7','internetWiFi7','bathrobe7','kitchen7','ironBoardOnRequest7','terrace7','airConditioning7','hairDryer27','alarmClock7','miniBar7','dogsAllowed7','satelliteTV7','VCRonRequest7','internetModem7','dailyNewspaper7','poolTowels7','microwave7','trouserPress7'),

				'roomDescriptions8' => array('roomTypeCode8','pmsCode8','roomName8','marketingLine18','marketingLine18','marketingLine28','roomType8','numRooms8','numBedrooms8','maxPersons8','maxRollaways8','beddingInfo8','king8','kingNum8','queen8','queenNum8','doubleFull8','doubleFullNum8','twin8','twinNum8','detailedRoomDesc8','other18','other28','other38','lakeView8','seaView8','mtView8','parkView8','other18','other28','other38','lakeView8','seaView8','mtView8','parkView'),

				'roomAmenities8' => array('noSmoking8','balcony8','privateBathroom8','hairDryer8','telephone8','safeBox8','TV8','DVD8','radio8','internetHighSpeed8','laundryService8','coffeeTeaMaker8','ironBoard8','showNoSmokingIcon8','fireplace8','thermalBath8','jettedBath8','fax8','desk8','LCDTV8','VCR8','hiFiSystem8','internetWiFi8','bathrobe8','kitchen8','ironBoardOnRequest8','terrace8','airConditioning8','hairDryer28','alarmClock8','miniBar8','dogsAllowed8','satelliteTV8','VCRonRequest8','internetModem8','dailyNewspaper8','poolTowels8','microwave8','trouserPress8'),

				'roomDescriptions9' => array('roomTypeCode9','pmsCode9','roomName9','marketingLine19','marketingLine19','marketingLine29','roomType9','numRooms9','numBedrooms9','maxPersons9','maxRollaways9','beddingInfo9','king9','kingNum9','queen9','queenNum9','doubleFull9','doubleFullNum9','twin9','twinNum9','detailedRoomDesc9','other19','other29','other39','lakeView9','seaView9','mtView9','parkView9','other19','other29','other39','lakeView9','seaView9','mtView9','parkView'),

				'roomAmenities9' => array('noSmoking9','balcony9','privateBathroom9','hairDryer9','telephone9','safeBox9','TV9','DVD9','radio9','internetHighSpeed9','laundryService9','coffeeTeaMaker9','ironBoard9','showNoSmokingIcon9','fireplace9','thermalBath9','jettedBath9','fax9','desk9','LCDTV9','VCR9','hiFiSystem9','internetWiFi9','bathrobe9','kitchen9','ironBoardOnRequest9','terrace9','airConditioning9','hairDryer29','alarmClock9','miniBar9','dogsAllowed9','satelliteTV9','VCRonRequest9','internetModem9','dailyNewspaper9','poolTowels9','microwave9','trouserPress9'),

				'roomDescriptions10' => array('roomTypeCode10','pmsCode10','roomName10','marketingLine110','marketingLine110','marketingLine210','roomType10','numRooms10','numBedrooms10','maxPersons10','maxRollaways10','beddingInfo10','king10','kingNum10','queen10','queenNum10','doubleFull10','doubleFullNum10','twin10','twinNum10','detailedRoomDesc10','other110','other210','other310','lakeView10','seaView10','mtView10','parkView10','other110','other210','other310','lakeView10','seaView10','mtView10','parkView'),

				'roomAmenities10' => array('noSmoking10','balcony10','privateBathroom10','hairDryer10','telephone10','safeBox10','TV10','DVD10','radio10','internetHighSpeed10','laundryService10','coffeeTeaMaker10','ironBoard10','showNoSmokingIcon10','fireplace10','thermalBath10','jettedBath10','fax10','desk10','LCDTV10','VCR10','hiFiSystem10','internetWiFi10','bathrobe10','kitchen10','ironBoardOnRequest10','terrace10','airConditioning10','hairDryer210','alarmClock10','miniBar10','dogsAllowed10','satelliteTV10','VCRonRequest10','internetModem10','dailyNewspaper10','poolTowels10','microwave10','trouserPress10'),
				

				) 

			),
		6 => array(
			'singleFields'	=> array('formComplete'),
			'multiFieldLabels' => array(),
			'multiFields'	=> array(

				'signature'	=> array('signature1','signature2')
			)
		)
	
];