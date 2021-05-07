<?php
//file : app/config/constants.php

return [
	

	1	=> array(
			'singleFields'	=> array('hotelName'),

			'multiFields'	=> array(
				'basicInformation' => array('streetAddress','city','stateOrProvince','country','postalCode','primaryContactName','primaryContactEmail','primaryContactNumber','primaryFaxNumber','hotelType','propertyCurrency','propertyTimeZone','resDeliveryEmailPrimary','resDeliveryEmailSecondary','airportShuttle','govtFireApproved')


			),
			'formData' => array(
				'currencyTypes'	=> array(
					'United States dollar','Aruban florin','Bahamian dollar','Barbadian dollar','Bermudian dollar','Belize dollar','Canadian dollar','Cayman Islands dollar','Colombian peso','Costa Rican colón','Cuban convertible peso','Cuban peso','Danish krone','Dominican peso','East Caribbean dollar','Euro','Guatemalan quetzal','Haitian gourde','Honduran lempira','Jamaican dollar','Mexican peso','Netherlands Antillean guilder','Nicaraguan córdoba','Panamanian balboa','Trinidad and Tobago dollar'
				)
			),
			'requiredFields' => array(
				'hotelName', 'streetAddress', 'resDeliveryEmailPrimary' 
			),
			'requiredFieldLabels' => array(
				'Hotel Name', 'Street Address', 'Primary Email Address for Reservation Delivery'
			)
		),
	2 =>  array(
			'singleFields'	=> array('meetsAmerWithDisabAct','yearBuilt','yearRenovated','numberRooms','numberFloors','numberElevators','taxIncluded','serviceChargeIncluded'),

			'multiFields' => array(

				'taxesAndFees' => array('occupancyTaxFlatChargeAmt', 'occupancyTaxPercentageAmt', 'occupancyTaxNotes', 'roomTaxFlatChargeAmt', 'roomTaxPercentageAmt', 'roomTaxNotes', 'stateTaxFlatChargeAmt', 'stateTaxPercentageAmt', 'stateTaxNotes', 'serviceTaxFlatChargeAmt', 'serviceTaxPercentageAmt', 'serviceTaxNotes', 'otherTaxFlatChargeAmt', 'otherTaxPercentageAmt', 'otherTaxNotes'),

				'hotelRatingAward' =>	array('ratingAwardType1', 'ratingReceived1','ratingAwardType2', 'ratingReceived2','ratingAwardType3', 'ratingReceived3','ratingAwardType4', 'ratingReceived4','ratingAwardType5', 'ratingReceived5')
			)
		),
	3 => array(
		'singleFields' => array('areaExplained'),

		'multiFields'	=> array(

			'areaInformation' => array('airportNearby','inTheMountains','outerArea','inTheCountry','businessDistrict','onOrNearLake','city','onBeach','downtown','perimeterSuburban','entertainmentDistrict','resort','financialDistrict','other','highway','areaExplained'),

			'areaAttractions' => array('areaAttractions1','areaAttractions2','areaAttractions3','areaAttractions4','areaAttractions5','areaAttractions6','areaAttractions7','areaAttractions8','areaAttractions9','areaAttractions10','areaAttractions11','areaAttractions12','areaAttractions13','areaAttractions14','areaAttractions15','areaAttractions16','areaAttractions17','areaAttractions18','areaAttractions19','areaAttractions20','areaAttractions21','areaAttractions22','areaAttractions23','areaAttractions24','areaAttractions25','areaAttractions26','areaAttractions27','areaAttractions28','areaAttractions29','areaAttractions30','areaAttractions31','areaAttractions32','areaAttractions33','areaAttractions34','areaAttractions35','areaAttractions36','areaAttractions37','areaAttractions38','areaAttractions39','areaAttractions40'),
		)
	),
	4	=> array(
		'singleFields'	=> array(),

		'multiFields'	=> array(

			'corporateLocations' => array('companyName1', 'distanceCompanyToHotel1','compassDirectionCompanyToHotel1', 'directionsCompanyToHotel1','companyName2','distanceCompanyToHotel2','compassDirectionCompanyToHotel2', 'directionsCompanyToHotel2', 'companyName3', 'distanceCompanyToHotel3', 'compassDirectionCompanyToHotel3', 'directionsCompanyToHotel3','companyName4', 'distanceCompanyToHotel4', 'compassDirectionCompanyToHotel4', 'directionsCompanyToHotel4'),

			'nearbyCities'	=> array('cityAndStateName1', 'distanceCityToHotel1', 'compassDirectionCityToHotel1', 'directionsCityToHotel1', 'cityAndStateName2', 'distanceCityToHotel2', 'compassDirectionCityToHotel2', 'directionsCityToHotel2', 'cityAndStateName3', 'distanceCityToHotel3', 'compassDirectionCityToHotel3', 'directionsCityToHotel3', 'cityAndStateName4', 'distanceCityToHotel4', 'compassDirectionCityToHotel4', 'directionsCityToHotel4', 'cityAndStateName5', 'distanceCityToHotel5', 'compassDirectionCityToHotel5', 'directionsCityToHotel5', 'cityAndStateName6', 'distanceCityToHotel6', 'compassDirectionCityToHotel6', 'directionsCityToHotel6'),

			'nearestPublicServices'	=> array('serviceName1', 'distanceServiceToHotel1', 'compassDirectionServiceToHotel1', 'directionsServiceToHotel1', 'serviceName2', 'distanceServiceToHotel2', 'compassDirectionServiceToHotel2', 'directionsServiceToHotel2', 'serviceName3', 'distanceServiceToHotel3', 'compassDirectionServiceToHotel3', 'directionsServiceToHotel3'),

			'nearbySchools'	=> array('schoolName1', 'distanceSchoolToHotel1', 'compassDirectionSchoolToHotel1', 'directionsSchoolToHotel1', 'schoolName2', 'distanceSchoolToHotel2', 'compassDirectionSchoolToHotel2', 'directionsSchoolToHotel2'),
		)
	),
	5	=> array(
		'singleFields'	=> array('diningAndEntertainment'/*, 'travelAgentCommission'*/),

		'multiFields'	=> array(

			'airportInformation'	=> array('airportCodeOrName1', 'airportDistanceAndDirection1', 'directionsAirportToHotel1', 'airportCodeOrName2', 'airportDistanceAndDirection2', 'directionsAirportToHotel2', 'airportCodeOrName3', 'airportDistanceAndDirection3', 'directionsAirportToHotel3', 'airportCodeOrName4', 'sairportDistanceAndDirection4', 'directionsAirportToHotel4','airportCodeOrName5', 'sairportDistanceAndDirection5', 'directionsAirportToHotel5'),

			'specialEvents'	=> array('startAndEndDate1', 'event1', 'LocationAndComments1','startAndEndDate2', 'event2', 'LocationAndComments2', 'startAndEndDate3', 'event3', 'LocationAndComments3'),

			'safetyInfo' => array('fireSafety','alarmsMonitored','strobeLightsGuestRooms','strobeLightsHallways','strobeLightsPublicAreas','audibleAlarms','audibleAlarmsHallways','audibleAlarmsPublicAreas','audibleAlarmsRooms','audibleAlarmsHardwired','autoRecallElevators','linkToFireDept','autoFireDoors','disabledEmergencyPlan','emergencyEvacPlan','drillFreq','emerInfoInRooms','exitMapsInRooms','exitSignsLit','femaIDInsert','fireDetectorsHalls','fireDetectorsPublicAreas','sprinklersHalls','sprinklersPublicAreas'),

			'securityAndStaffTraining'	=> array('24HourSecurity','securityHours', 'overnightSecurity', 'parkingAttendant', 'firstAidAvailable', 'defibrillatoronSite', 'medicalEquipmentonSite', 'staffTrainedinCPR', 'securityPersonnelonSite', 'uniformSecurityonPremises', 'securityEscortsAvailable', 'staffTrainedinFirstAid', 'staffTrainedinAED', 'staffRCCertifiedinCPR', 'staffTrainedinDuplicateKeys'),
		)
	),
	6	=> array(
		'singleFields'	=> array(),

		'multiFields'	=> array(

			'safetyFeatures' => array('balconiesAccessible','deadboltsOrLocksGuestRooms','deadboltsonConnectingDoors','electronicKeyCards','emergencyCallButtonOnPhone','exteriorDoorsKeyAccess','guestRoomSecondLock','guestRoomDoorViewports','guestRoomsDoorsSelfClosing','AAASecurityStandard','multipleExits','wellLitParkingAreas','publicAddressSystem','roomWindowsOpen','roomWindowsLockingDevice','safetyChainsGuestRooms','secondaryLocksSlidingGlassDoors','secondaryLocksonWindows','keyAccessSecuredFloors','separateFloorsforWomen','swingBoltLock','stairwellsVentilated','videoSurveillanceExteriorFrontEntrance','videoSurveillanceParkingAreas','videoSurveillanceinHallways','videoSurveillancePublicAreas','videoSurveillanceMonitored24Hrs','videoSurveillance24HoursParkingArea','wellLitWalkways','keyAccessGym'),




			'accessibilityFeatures' => array('accessibleBaths','accessibleBathingControls','accessibleElevators','accessibleLightSwitch','accessibleWashBasins','adaptedBathrooms','amplifiedTelephones','bathroomDoors32Inches','brailleElevator','brailleLargePrintLiterature','brailleLargePrintMenus','doorbellWithStrobeLight','grabBarsInBathroom','handHeldShowerHead','safetyFeature','hearingInductionLoops','leverDoorHandles','loweredSink','loweredViewportInDoor','pillowAlarmsAvailable','raisedToiletSeat','rollInShower','roomsAccessibleForWheelchairs','specialNeedsMenu','ttyTdd','wideCorridors','wideEntrance','wideRestaurantEntrance')


		)
	),
	7	=> array(
			'singleFields'	=> array(), 

			'multiFields'	=> array(

				'generalPolicies'	=> array(
					'checkInTime','checkOutTime','holdReservationTime','extraPersonAllowed','extraPersonFee','extraChildFee','rollawayAdultFee','maximumNumAdultRollaways','rollawayChildFee','maximumNumChildrenRollaways','cribFee','maximumNumCribs','advBookingReq','advanceBooking','advanceBookingTimePeriod','childrenFree'),

				'guaranteeDepositPolicies'	=> array('holdGuaranteeDeposit','reservationHeldUntilHold', 'ifAfterHold', 'creditCardOrCheckHold','numNightsCheckDepositHold','reservationHeldUntilGuarantee','creditCardOrCheckGuarantee','numNightsCheckDepositGuarantee','holdGuaranteeDeposit','creditCardOrCheck','numNightsCreditCardDeposit','numNightsCheckDeposit','cancellationOfArrivalHours', 'cancellationOfArrivalDays', 'cancellationCharge','numberOfNightsForDeposit','depositDaysAfterBooking','depositDaysBeforeArrival','depositAddress'),



				'cancellationPolicy'	=> array('cancellationGroup','advancedBookingTimeType','advancedBookingTime','advanceBookingTimePeriod','timeBookedBy','consequenceGroup1','consequenceGroup2'),

				'exceptions'	=> array('from1', 'to1', 'policy1', 'from2', 'to2', 'policy2', 'from3', 'to3', 'policy3')
		)

	),
	8	=> array(
			'singleFields'	=> array(),


			'multiFieldLabels'	=> array('Beach','Bicycling','Boating','Bowling','Camping','Cardio Vascular Equipment', 'Casino','Child Activities','Children\'s Playground','Driving Range', 'Extensive Health Club', 'Fishing','Game Room','Golf','Heated Outdoor Pool', 'Hiking','Horseback Riding', 'Indoor/Outdoor Pool', 'Indoor Pool','Jacuzzi','Jet Skiing','Jogging Track/Trail', 'Limited Health Club', 'Massage','Mountain Biking', 'Mountain Climbing', 'Nature Trails','Outdoor Pool','Polo','Pool Table','Putting Green', 'Racquetball Court', 'Recreation (Sports) Court', 'Safari','Sailing','Sauna','Scuba Diving', 'Ski-in/Ski-out Access', 'Snorkeling','Snow Mobiling','Snow Skiing','Spa','Squash Courts','Sun Bed','Table Tennis','Tennis Courts','Walking Track','Weightlifting Equipment','Whirlpool','Windsurfing'),

			 

			'multiFields'	=> array(


				'propAmenities' => array(

						'onNearProp1','feeChargedAmenities1','additionalCommentsAmenities1',
						'onNearProp2','feeChargedAmenities2','additionalCommentsAmenities2',
						'onNearProp3','feeChargedAmenities3','additionalCommentsAmenities3',
						'onNearProp4','feeChargedAmenities4','additionalCommentsAmenities4',
						'onNearProp5','feeChargedAmenities5','additionalCommentsAmenities5',
						'onNearProp6','feeChargedAmenities6','additionalCommentsAmenities6',
						'onNearProp7','feeChargedAmenities7','additionalCommentsAmenities7',
						'onNearProp8','feeChargedAmenities8','additionalCommentsAmenities8',
						'onNearProp9','feeChargedAmenities9','additionalCommentsAmenities9',
						'onNearProp10','feeChargedAmenities10','additionalCommentsAmenities10',
						'onNearProp11','feeChargedAmenities11','additionalCommentsAmenities11',
						'onNearProp12','feeChargedAmenities12','additionalCommentsAmenities12',
						'onNearProp13','feeChargedAmenities13','additionalCommentsAmenities13',
						'onNearProp14','feeChargedAmenities14','additionalCommentsAmenities14',
						'onNearProp15','feeChargedAmenities15','additionalCommentsAmenities15',
						'onNearProp16','feeChargedAmenities16','additionalCommentsAmenities16',
						'onNearProp17','feeChargedAmenities17','additionalCommentsAmenities17','onNearProp18','feeChargedAmenities18','additionalCommentsAmenities18','onNearProp19','feeChargedAmenities19','additionalCommentsAmenities19','onNearProp20','feeChargedAmenities20','additionalCommentsAmenities20','onNearProp21','feeChargedAmenities21','additionalCommentsAmenities21','onNearProp22','feeChargedAmenities22','additionalCommentsAmenities22','onNearProp23','feeChargedAmenities23','additionalCommentsAmenities23','onNearProp24','feeChargedAmenities24','additionalCommentsAmenities24','onNearProp25','feeChargedAmenities25','additionalCommentsAmenities25','onNearProp26','feeChargedAmenities26','additionalCommentsAmenities26','onNearProp27','feeChargedAmenities27','additionalCommentsAmenities27','onNearProp28','feeChargedAmenities28','additionalCommentsAmenities28','onNearProp29','feeChargedAmenities29','additionalCommentsAmenities29','onNearProp30','feeChargedAmenities30','additionalCommentsAmenities30','onNearProp31','feeChargedAmenities31','additionalCommentsAmenities31','onNearProp32','feeChargedAmenities32','additionalCommentsAmenities32','onNearProp33','feeChargedAmenities33','additionalCommentsAmenities33','onNearProp34','feeChargedAmenities34','additionalCommentsAmenities34','onNearProp35','feeChargedAmenities35','additionalCommentsAmenities35','onNearProp36','feeChargedAmenities36','additionalCommentsAmenities36','onNearProp37','feeChargedAmenities37','additionalCommentsAmenities37','onNearProp38','feeChargedAmenities38','additionalCommentsAmenities38','onNearProp39','feeChargedAmenities39','additionalCommentsAmenities39','onNearProp40','feeChargedAmenities40','additionalCommentsAmenities40','onNearProp41','feeChargedAmenities41','additionalCommentsAmenities41','onNearProp42','feeChargedAmenities42','additionalCommentsAmenities42','onNearProp43','feeChargedAmenities43','additionalCommentsAmenities43','onNearProp44','feeChargedAmenities44','additionalCommentsAmenities44','onNearProp45','feeChargedAmenities45','additionalCommentsAmenities45','onNearProp46','feeChargedAmenities46','additionalCommentsAmenities46','onNearProp47','feeChargedAmenities47','additionalCommentsAmenities47','onNearProp48','feeChargedAmenities48','additionalCommentsAmenities48','onNearProp49','feeChargedAmenities49','additionalCommentsAmenities49','onNearProp50','feeChargedAmenities50','additionalCommentsAmenities50')
						

				
			)
		),
	9	=> array(
			'singleFields'	=> array(),

			'multiFieldLabels'	=> array('Air Conditioning in all guest rooms', 'Alarm Clock','Balcony','Black-Out Curtains','Ceiling Fan','Clothes Press','Closets In Room','Coffee / Tea Maker','Dining Table and Chairs','Fireplace','Full Size Mirror','Iron / Ironing Board','Jetted Tub / Hydro Spa','Laundry Basket/Clothes Hamper', 'Mini Bar','Newspaper','Ocean Front','Pool Side','Safe','Safe can hold 17 inch or 43.2 c', 'Seating Area with Sofa/Chair', 'Self-Controlled Heating/Cooling', 'Sofa-bed','Wet bar','Bathrobe','Bathroom Amenities', 'Bathtub/shower','Bathroom shared','Bathtub only','Bidet','Hair Dryer','Private Bath in all guest rooms','Bathroom Phone','Separate Bathtub and Shower', 'Separate Toilet Area','Shower only','Shower stall','CD Player','MP3 Line-in','Radio AM/FM','Stereo','Television','Blu-ray Player','Cable News Channel', 'Cable/Satellite TV','DVD Player','HDTV','Movies','No Adult Channels or Adult Channel Lockout','Pay Per View TV','Remote Controlled TV', 'Subtitles or Closed Caption', 'VCR','Video Games','Web Enabled TV','Web TV','Wide Screen','Kitchen','Conventional Oven','Dishwasher','Microwave','Pots, Pans, Serving Dishes','Plates, Glassware','Refrigerator - Full Size','Refrigerator - Mini','Refrigerator - Does it Have Icemaker', 'Silverware','Stove','Toaster','Duvet Covers','Non-Allergenic Pillows','Automated Wakeup Call','Direct Dial Phone','Speaker Phone','Two Line Phone','Telephone Jack Adapter for International Guests','Voice Mail','Electrical Adapters for International Guests','Power Converters for International Guests','Electrical Outlet at Desk Level', 'Ergonomic Desk Chair','Fax','High Speed Internet Access Modem / Data port','Printer','Spare Electrical Outlet at Desk','Work Desk with Lamp'),

			'multiFields'	=> array(

				'roomAmenities' => array('onProperty1', 'inAllRoomsProp1', 'feeChargedProp1', 'additionalPropComments1', 'onProperty2', 'inAllRoomsProp2', 'feeChargedProp2', 'additionalPropComments2', 'onProperty3', 'inAllRoomsProp3', 'feeChargedProp3', 'additionalPropComments3', 'onProperty4', 'inAllRoomsProp4', 'feeChargedProp4', 'additionalPropComments4', 'onProperty5', 'inAllRoomsProp5', 'feeChargedProp5', 'additionalPropComments5', 'onProperty6', 'inAllRoomsProp6', 'feeChargedProp6', 'additionalPropComments6', 'onProperty7', 'inAllRoomsProp7', 'feeChargedProp7', 'additionalPropComments7', 'onProperty8', 'inAllRoomsProp8', 'feeChargedProp8', 'additionalPropComments8', 'onProperty9', 'inAllRoomsProp9', 'feeChargedProp9', 'additionalPropComments9', 'onProperty10', 'inAllRoomsProp10', 'feeChargedProp10', 'additionalPropComments10', 'onProperty11', 'inAllRoomsProp11', 'feeChargedProp11', 'additionalPropComments11', 'onProperty12', 'inAllRoomsProp12', 'feeChargedProp12', 'additionalPropComments12', 'onProperty13', 'inAllRoomsProp13', 'feeChargedProp13', 'additionalPropComments13', 'onProperty14', 'inAllRoomsProp14', 'feeChargedProp14', 'additionalPropComments14', 'onProperty15', 'inAllRoomsProp15', 'feeChargedProp15', 'additionalPropComments15', 'onProperty16', 'inAllRoomsProp16', 'feeChargedProp16', 'additionalPropComments16', 'onProperty17', 'inAllRoomsProp17', 'feeChargedProp17', 'additionalPropComments17', 'onProperty18', 'inAllRoomsProp18', 'feeChargedProp18', 'additionalPropComments18', 'onProperty19', 'inAllRoomsProp19', 'feeChargedProp19', 'additionalPropComments19', 'onProperty20', 'inAllRoomsProp20', 'feeChargedProp20', 'additionalPropComments20', 'onProperty21', 'inAllRoomsProp21', 'feeChargedProp21', 'additionalPropComments21', 'onProperty22', 'inAllRoomsProp22', 'feeChargedProp22', 'additionalPropComments22', 'onProperty23', 'inAllRoomsProp23', 'feeChargedProp23', 'additionalPropComments23', 'onProperty24', 'inAllRoomsProp24', 'feeChargedProp24', 'additionalPropComments24', 'onProperty25', 'inAllRoomsProp25', 'feeChargedProp25', 'additionalPropComments25', 'onProperty26', 'inAllRoomsProp26', 'feeChargedProp26', 'additionalPropComments26', 'onProperty27', 'inAllRoomsProp27', 'feeChargedProp27', 'additionalPropComments27', 'onProperty28', 'inAllRoomsProp28', 'feeChargedProp28', 'additionalPropComments28', 'onProperty29', 'inAllRoomsProp29', 'feeChargedProp29', 'additionalPropComments29', 'onProperty30', 'inAllRoomsProp30', 'feeChargedProp30', 'additionalPropComments30', 'onProperty31', 'inAllRoomsProp31', 'feeChargedProp31', 'additionalPropComments31', 'onProperty32', 'inAllRoomsProp32', 'feeChargedProp32', 'additionalPropComments32', 'onProperty33', 'inAllRoomsProp33', 'feeChargedProp33', 'additionalPropComments33', 'onProperty34', 'inAllRoomsProp34', 'feeChargedProp34', 'additionalPropComments34', 'onProperty35', 'inAllRoomsProp35', 'feeChargedProp35', 'additionalPropComments35', 'onProperty36', 'inAllRoomsProp36', 'feeChargedProp36', 'additionalPropComments36', 'onProperty37', 'inAllRoomsProp37', 'feeChargedProp37', 'additionalPropComments37', 'onProperty38', 'inAllRoomsProp38', 'feeChargedProp38', 'additionalPropComments38', 'onProperty39', 'inAllRoomsProp39', 'feeChargedProp39', 'additionalPropComments39', 'onProperty40', 'inAllRoomsProp40', 'feeChargedProp40', 'additionalPropComments40', 'onProperty41', 'inAllRoomsProp41', 'feeChargedProp41', 'additionalPropComments41', 'onProperty42', 'inAllRoomsProp42', 'feeChargedProp42', 'additionalPropComments42', 'onProperty43', 'inAllRoomsProp43', 'feeChargedProp43', 'additionalPropComments43', 'onProperty44', 'inAllRoomsProp44', 'feeChargedProp44', 'additionalPropComments44', 'onProperty45', 'inAllRoomsProp45', 'feeChargedProp45', 'additionalPropComments45', 'onProperty46', 'inAllRoomsProp46', 'feeChargedProp46', 'additionalPropComments46', 'onProperty47', 'inAllRoomsProp47', 'feeChargedProp47', 'additionalPropComments47', 'onProperty48', 'inAllRoomsProp48', 'feeChargedProp48', 'additionalPropComments48', 'onProperty49', 'inAllRoomsProp49', 'feeChargedProp49', 'additionalPropComments49', 'onProperty50', 'inAllRoomsProp50', 'feeChargedProp50', 'additionalPropComments50', 'onProperty51', 'inAllRoomsProp51', 'feeChargedProp51', 'additionalPropComments51', 'onProperty52', 'inAllRoomsProp52', 'feeChargedProp52', 'additionalPropComments52', 'onProperty53', 'inAllRoomsProp53', 'feeChargedProp53', 'additionalPropComments53', 'onProperty54', 'inAllRoomsProp54', 'feeChargedProp54', 'additionalPropComments54', 'onProperty55', 'inAllRoomsProp55', 'feeChargedProp55', 'additionalPropComments55', 'onProperty56', 'inAllRoomsProp56', 'feeChargedProp56', 'additionalPropComments56', 'onProperty57', 'inAllRoomsProp57', 'feeChargedProp57', 'additionalPropComments57', 'onProperty58', 'inAllRoomsProp58', 'feeChargedProp58', 'additionalPropComments58', 'onProperty59', 'inAllRoomsProp59', 'feeChargedProp59', 'additionalPropComments59', 'onProperty60', 'inAllRoomsProp60', 'feeChargedProp60', 'additionalPropComments60', 'onProperty61', 'inAllRoomsProp61', 'feeChargedProp61', 'additionalPropComments61', 'onProperty62', 'inAllRoomsProp62', 'feeChargedProp62', 'additionalPropComments62', 'onProperty63', 'inAllRoomsProp63', 'feeChargedProp63', 'additionalPropComments63', 'onProperty64', 'inAllRoomsProp64', 'feeChargedProp64', 'additionalPropComments64', 'onProperty65', 'inAllRoomsProp65', 'feeChargedProp65', 'additionalPropComments65', 'onProperty66', 'inAllRoomsProp66', 'feeChargedProp66', 'additionalPropComments66', 'onProperty67', 'inAllRoomsProp67', 'feeChargedProp67', 'additionalPropComments67', 'onProperty68', 'inAllRoomsProp68', 'feeChargedProp68', 'additionalPropComments68', 'onProperty69', 'inAllRoomsProp69', 'feeChargedProp69', 'additionalPropComments69', 'onProperty70', 'inAllRoomsProp70', 'feeChargedProp70', 'additionalPropComments70', 'onProperty71', 'inAllRoomsProp71', 'feeChargedProp71', 'additionalPropComments71', 'onProperty72', 'inAllRoomsProp72', 'feeChargedProp72', 'additionalPropComments72', 'onProperty73', 'inAllRoomsProp73', 'feeChargedProp73', 'additionalPropComments73', 'onProperty74', 'inAllRoomsProp74', 'feeChargedProp74', 'additionalPropComments74', 'onProperty75', 'inAllRoomsProp75', 'feeChargedProp75', 'additionalPropComments75', 'onProperty76', 'inAllRoomsProp76', 'feeChargedProp76', 'additionalPropComments76', 'onProperty77', 'inAllRoomsProp77', 'feeChargedProp77', 'additionalPropComments77', 'onProperty78', 'inAllRoomsProp78', 'feeChargedProp78', 'additionalPropComments78', 'onProperty79', 'inAllRoomsProp79', 'feeChargedProp79', 'additionalPropComments79', 'onProperty80', 'inAllRoomsProp80', 'feeChargedProp80', 'additionalPropComments80', 'onProperty81', 'inAllRoomsProp81', 'feeChargedProp81', 'additionalPropComments81', 'onProperty82', 'inAllRoomsProp82', 'feeChargedProp82', 'additionalPropComments82', 'onProperty83', 'inAllRoomsProp83', 'feeChargedProp83', 'additionalPropComments83', 'onProperty84', 'inAllRoomsProp84', 'feeChargedProp84', 'additionalPropComments84', 'onProperty85', 'inAllRoomsProp85', 'feeChargedProp85', 'additionalPropComments85', 'onProperty86', 'inAllRoomsProp86', 'feeChargedProp86', 'additionalPropComments86'
					)

			)
		),
	10	=> array(
			'singleFields'	=> array(),

			'multiFieldLabels'	=> array('Airline Desk','Airport 1 Shuttle','AV Equipment','Barber Shop','Beauty Shop','Bellman','Beverage / Cocktail','Breakfast Buffet','Breakfast Continental','Breakfast Full','Business Center','Business Center Services','Car Rental Desk','Catering Services','Cellular Phone Rental','Childcare','Children Programs','Clothing Store','Coffee / Tea','Computer Rental','Concierge','Copy Service','Credit Card Access','Cribs','Currency Exchange','Day Rate','Doctor On Call','Dry Cleaning','Dry Cleaning Same Day','Early Check-in','Early Check-in Guarantee','Early Check-out Fee','Evening Turn Down','Express Check-in Fee','Express Check-out','Faxing Incoming','Faxing Outgoing','Florist','Food and Beverage Discount','Hair Salon','Handicap Parking','Grocery Shopping Service','Late Check-out','Late Check-out Guarantee','Laundry / Valet','Local Calls','Long Distance Access','Local Faxes','Luggage Hold','Newspaper','Notary Public','Office Rental','Parking','Garage/Covered Parking','Parking - Lot','Parking - Side Street','Parking - Valet','PC and Printer Available','Pool Side Service','Room Upgrade Confirmed','Room Upgrade on Availability','Shuttle to Local Attractions','Shuttle to Local Businesses','Secretary Service','Shoe Shine','Social Hour','Tour Desk','Translation','Video Billing','Video Rentals','Wakeup Calls','Welcome Gift'), 

			'multiFields'	=> array(

				'servicesAndAmenities' => array('servicesAmenYesNo1','servicesAmenFeeCharged1',
												'servicesAmenYesNo2','servicesAmenFeeCharged2',
												'servicesAmenYesNo3','servicesAmenFeeCharged3',
												'servicesAmenYesNo4','servicesAmenFeeCharged4',
												'servicesAmenYesNo5','servicesAmenFeeCharged5',
												'servicesAmenYesNo6','servicesAmenFeeCharged6',
												'servicesAmenYesNo7','servicesAmenFeeCharged7',
												'servicesAmenYesNo8','servicesAmenFeeCharged8',
												'servicesAmenYesNo9','servicesAmenFeeCharged9',
												'servicesAmenYesNo10','servicesAmenFeeCharged10',
												'servicesAmenYesNo11','servicesAmenFeeCharged11',
												'servicesAmenYesNo12','servicesAmenFeeCharged12',
												'servicesAmenYesNo13','servicesAmenFeeCharged13',
												'servicesAmenYesNo14','servicesAmenFeeCharged14',
												'servicesAmenYesNo15','servicesAmenFeeCharged15',
												'servicesAmenYesNo16','servicesAmenFeeCharged16',
												'servicesAmenYesNo17','servicesAmenFeeCharged17',
												'servicesAmenYesNo18','servicesAmenFeeCharged18',
												'servicesAmenYesNo19','servicesAmenFeeCharged19',
												'servicesAmenYesNo20','servicesAmenFeeCharged20',
												'servicesAmenYesNo21','servicesAmenFeeCharged21',
												'servicesAmenYesNo22','servicesAmenFeeCharged22',
												'servicesAmenYesNo23','servicesAmenFeeCharged23',
												'servicesAmenYesNo24','servicesAmenFeeCharged24',
												'servicesAmenYesNo25','servicesAmenFeeCharged25',
												'servicesAmenYesNo26','servicesAmenFeeCharged26',
												'servicesAmenYesNo27','servicesAmenFeeCharged27',
												'servicesAmenYesNo28','servicesAmenFeeCharged28',
												'servicesAmenYesNo29','servicesAmenFeeCharged29',
												'servicesAmenYesNo30','servicesAmenFeeCharged30',
												'servicesAmenYesNo31','servicesAmenFeeCharged31',
												'servicesAmenYesNo32','servicesAmenFeeCharged32',
												'servicesAmenYesNo33','servicesAmenFeeCharged33',
												'servicesAmenYesNo34','servicesAmenFeeCharged34',
												'servicesAmenYesNo35','servicesAmenFeeCharged35',
												'servicesAmenYesNo36','servicesAmenFeeCharged36',
												'servicesAmenYesNo37','servicesAmenFeeCharged37',
												'servicesAmenYesNo38','servicesAmenFeeCharged38',
												'servicesAmenYesNo39','servicesAmenFeeCharged39',
												'servicesAmenYesNo40','servicesAmenFeeCharged40',
												'servicesAmenYesNo41','servicesAmenFeeCharged41',
												'servicesAmenYesNo42','servicesAmenFeeCharged42',
												'servicesAmenYesNo43','servicesAmenFeeCharged43',
												'servicesAmenYesNo44','servicesAmenFeeCharged44',
												'servicesAmenYesNo45','servicesAmenFeeCharged45',
												'servicesAmenYesNo46','servicesAmenFeeCharged46',
												'servicesAmenYesNo47','servicesAmenFeeCharged47',
												'servicesAmenYesNo48','servicesAmenFeeCharged48',
												'servicesAmenYesNo49','servicesAmenFeeCharged49',
												'servicesAmenYesNo50','servicesAmenFeeCharged50',
												'servicesAmenYesNo51','servicesAmenFeeCharged51',
												'servicesAmenYesNo52','servicesAmenFeeCharged52',
												'servicesAmenYesNo53','servicesAmenFeeCharged53',
												'servicesAmenYesNo54','servicesAmenFeeCharged54',
												'servicesAmenYesNo55','servicesAmenFeeCharged55',
												'servicesAmenYesNo56','servicesAmenFeeCharged56',
												'servicesAmenYesNo57','servicesAmenFeeCharged57',
												'servicesAmenYesNo58','servicesAmenFeeCharged58',
												'servicesAmenYesNo59','servicesAmenFeeCharged59',
												'servicesAmenYesNo60','servicesAmenFeeCharged60',
												'servicesAmenYesNo61','servicesAmenFeeCharged61',
												'servicesAmenYesNo62','servicesAmenFeeCharged62',
												'servicesAmenYesNo63','servicesAmenFeeCharged63',
												'servicesAmenYesNo64','servicesAmenFeeCharged64',
												'servicesAmenYesNo65','servicesAmenFeeCharged65',
												'servicesAmenYesNo66','servicesAmenFeeCharged66',
												'servicesAmenYesNo67','servicesAmenFeeCharged67',
												'servicesAmenYesNo68','servicesAmenFeeCharged68',
												'servicesAmenYesNo69','servicesAmenFeeCharged69',
												'servicesAmenYesNo70','servicesAmenFeeCharged70',
												'servicesAmenYesNo71','servicesAmenFeeCharged71',
												'servicesAmenYesNo72','servicesAmenFeeCharged72')

			)
		),
	11	=> array(
			'singleFields'	=> array('propertyDescription'),

			'multiFieldLabels'	=> array('Accessible Baths','Accessible Wash Basins','Adapted Bathrooms','Accessible Bathing Controls','Accessible Light Switch','Accessible Elevators','Accessible Toilets','Braille / Large Print Menus','Braille / Large Print Hotel Literature','Service / Guide Dogs Allowed','Staff Trained for Disabled Guests','Disabled Emergency Plan','Emergency Codes/Buttons in Room','Hearing Induction Loops','Handrails in Bathrooms','Adapted Telephones','Pillow Alarms Available','Adapted Room Doors','Special Needs Menu','Television with subtitle or closed caption','Wide Entrance','Wide Corridors','Wide Restaurant Entrance','Fire Extinguishers','Restricted Room Access','No Kids Allowed','Group Rates','No Porn Films','Ski In / Out','Internet Free','High Speed Internet','Internet Hot Spot'), 

			'multiFields'	=> array(

				'accessibilityFeatures' => array(
						'accessFeatAvailOnPropYesNo1','accessFeatFeeCharged1',
						'accessFeatAvailOnPropYesNo2','accessFeatFeeCharged2',
						'accessFeatAvailOnPropYesNo3','accessFeatFeeCharged3',
						'accessFeatAvailOnPropYesNo4','accessFeatFeeCharged4',
						'accessFeatAvailOnPropYesNo5','accessFeatFeeCharged5',
						'accessFeatAvailOnPropYesNo6','accessFeatFeeCharged6',
						'accessFeatAvailOnPropYesNo7','accessFeatFeeCharged7',
						'accessFeatAvailOnPropYesNo8','accessFeatFeeCharged8',
						'accessFeatAvailOnPropYesNo9','accessFeatFeeCharged9',
						'accessFeatAvailOnPropYesNo10','accessFeatFeeCharged10','accessFeatAvailOnPropYesNo11','accessFeatFeeCharged11',
						'accessFeatAvailOnPropYesNo12','accessFeatFeeCharged12','accessFeatAvailOnPropYesNo13','accessFeatFeeCharged13',
						'accessFeatAvailOnPropYesNo14','accessFeatFeeCharged14','accessFeatAvailOnPropYesNo15','accessFeatFeeCharged15',
						'accessFeatAvailOnPropYesNo16','accessFeatFeeCharged16','accessFeatAvailOnPropYesNo17','accessFeatFeeCharged17',
						'accessFeatAvailOnPropYesNo18','accessFeatFeeCharged18','accessFeatAvailOnPropYesNo19','accessFeatFeeCharged19',
						'accessFeatAvailOnPropYesNo20','accessFeatFeeCharged20','accessFeatAvailOnPropYesNo21','accessFeatFeeCharged21',
						'accessFeatAvailOnPropYesNo22','accessFeatFeeCharged22','accessFeatAvailOnPropYesNo23','accessFeatFeeCharged23',
						'accessFeatAvailOnPropYesNo24','accessFeatFeeCharged24','accessFeatAvailOnPropYesNo25','accessFeatFeeCharged25',
						'accessFeatAvailOnPropYesNo26','accessFeatFeeCharged26','accessFeatAvailOnPropYesNo27','accessFeatFeeCharged27',
						'accessFeatAvailOnPropYesNo28','accessFeatFeeCharged28','accessFeatAvailOnPropYesNo29','accessFeatFeeCharged29',
						'accessFeatAvailOnPropYesNo30','accessFeatFeeCharged30','accessFeatAvailOnPropYesNo31','accessFeatFeeCharged31',
						'accessFeatAvailOnPropYesNo32','accessFeatFeeCharged32')
			)
		),

	12	=> array(
			'singleFields'	=> array('drivingDirections'),

			//'multiFieldLabels'	=> array(), 

			'multiFields'	=> array(

				'meetingFacilities' => array('numberMeetingRooms','totalAreaMeasurement','numberOfMeetingPersonnel','largestRoomCapacity','smallestRoomCapacity','largestRoomMeasurements','smallestRoomMeasurements','largestRoomSeatingFormat','smallestRoomSeatingFormat','videoConferencing'),
		

				'language'	=> array('arabic','german','russian','chinese','hebrew','spanish','english','italian','other1','french','japanese','other2') 
			)


		
		),
	13	=> array(
			'singleFields'	=> array(),

			//'multiFieldLabels'	=> array(), 

			'multiFields'	=> array(

				'extraDirections' => array('directionsFrom1','extraDirections1','directionsFrom2','extraDirections2'),

				'travelDetails'	=> array('parkingDetails',	'taxi1','taxiCost1','limo1','limoCost1','shuttle1','shuttleCost1','bus1','busCost1','train1','trainCost1',
															'taxi2','taxiCost2','limo2','limoCost2','shuttle2','shuttleCost2','bus2','busCost2','train2','trainCost2',
															'taxi3','taxiCost3','limo3','limoCost3','shuttle3','shuttleCost3','bus3','busCost3','train3','trainCost3','rentalCarAvail','additionalTrans'),

				'arrivalRequirements'	=> array('arrivalReq1','arrivalReq2'),

				'paymentMethods'	=> array('paymentMethod1','paymentMethod2','paymentMethod3','paymentMethod4','paymentMethod5','paymentMethod6','paymentMethod7','paymentMethod8','paymentMethod9','paymentMethod10','paymentMethod11')
			)
		),
	14	=> array(
			'singleFields'	=> array('hotelAdditionalInfo'),

			//'multiFieldLabels'	=> array(), 

			'multiFields'	=> array(

				'additionalInfo' => array('propMgmtSystemUsed','managementCompany'),

				'hotelClassification'	=> array('hotelClass','hotelClass2','hotelClass3'),

				'awards'	=> array('name1','yearReceived1','description1','name2','yearReceived2','description2'),

				'roomInventory'	=> array('roomInventory1','roomInventory2','roomInventory3','roomInventory4','roomInventory5','roomInventory6')
			)
		),

	15 => array(
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
		16 => array(
			'singleFields'	=> array(),
			'multiFieldLabels' => array(),
			'multiFields'	=> array(

				'rateTypes'	=> array('rateTypes1','rateTypes2','rateTypes3','rateTypes4','rateTypes5','rateTypes6','rateTypes7','rateTypes8','rateTypes9','rateTypes10','rateTypes11','rateTypes12','rateTypes13','rateTypes14','rateTypes15')
			)
		),

		17 => array(
			'singleFields'	=> array('formComplete'),
			'multiFieldLabels' => array(),
			'multiFields'	=> array(

				'signature'	=> array('signature1','signature2')
			)
		)
	
];