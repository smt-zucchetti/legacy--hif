@extends('layouts.formMaster', ['curPage'=>6, 'formType' => 'longForm'])

@section('title', 'Form Page 5')

@section('form')

        @include('partial/formOpen')

                        <input type="hidden" name="curPage" value="6" />

                   
                    <div class="form-row"><h2>Miscellaneous Information: Safety Continued (Please Check All That Apply)</h2></div>
                    <div class="form-row myGrid">
                        <div class="col-xs-12"><h3>Facility and Room Safety Features</h3></div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('balconiesAccessible', 1, null, ['id' => 'balconiesAccessible']) }}   
                            {{ Form::label('balconiesAccessible', 'Balconies Accessible to Adjoining Rooms') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('deadboltsOrLocksGuestRooms', 1, null, ['id' => 'deadboltsOrLocksGuestRooms']) }}   
                            {{ Form::label('deadboltsOrLocksGuestRooms', 'Deadbolts/Secondary Locks on All Guest Room Doors') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('deadboltsonConnectingDoors', 1, null, ['id' => 'deadboltsonConnectingDoors']) }}   
                            {{ Form::label('deadboltsonConnectingDoors', 'Deadbolts on connecting doors') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('electronicKeyCards', 1, null, ['id' => 'electronicKeyCards']) }}   
                            {{ Form::label('electronicKeyCards', 'Electronic Key Cards') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('emergencyCallButtonOnPhone', 1, null, ['id' => 'emergencyCallButtonOnPhone']) }}   
                            {{ Form::label('emergencyCallButtonOnPhone', 'Emergency Call Button on Phone') }}
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-1">
                                {{ Form::checkbox('exteriorDoorsKeyAccess', 1, null, ['id' => 'exteriorDoorsKeyAccess']) }}   
                            </div>
                            <div class="col-xs-11 margin-left-negative">
                                {{ Form::label('exteriorDoorsKeyAccess', 'All Exterior doors (except lobby entrance) of facility require key access at night
or automatically lock?') }}
                            </div>
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('guestRoomSecondLock', 1, null, ['id' => 'guestRoomSecondLock']) }}   
                            {{ Form::label('guestRoomSecondLock', 'Guest Room Doors Have a Second Lock') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('guestRoomDoorViewports', 1, null, ['id' => 'guestRoomDoorViewports']) }}   
                            {{ Form::label('guestRoomDoorViewports', 'All Guest Room Doors Have Viewports') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('guestRoomsDoorsSelfClosing', 1, null, ['id' => 'guestRoomsDoorsSelfClosing']) }}   
                            {{ Form::label('guestRoomsDoorsSelfClosing', 'All Guest Rooms Doors Self Closing') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('AAASecurityStandard', 1, null, ['id' => 'AAASecurityStandard']) }}   
                            {{ Form::label('AAASecurityStandard', 'Hotel complies with AAA Security Standards') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('multipleExits', 1, null, ['id' => 'multipleExits']) }}   
                            {{ Form::label('multipleExits', 'Multiple Exits on Each Floor') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('wellLitParkingAreas', 1, null, ['id' => 'wellLitParkingAreas']) }}   
                            {{ Form::label('wellLitParkingAreas', 'All Parking Areas Well Lit') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('publicAddressSystem', 1, null, ['id' => 'publicAddressSystem']) }}   
                            {{ Form::label('publicAddressSystem', 'Public Address System') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('roomWindowsOpen', 1, null, ['id' => 'roomWindowsOpen']) }}   
                            {{ Form::label('roomWindowsOpen', 'Room Windows Open') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('roomWindowsLockingDevice', 1, null, ['id' => 'roomWindowsLockingDevice']) }}   
                            {{ Form::label('roomWindowsLockingDevice', 'Room Windows that open have locking device') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('safetyChainsGuestRooms', 1, null, ['id' => 'safetyChainsGuestRooms']) }}   
                            {{ Form::label('safetyChainsGuestRooms', 'Safety Chains on Guest Room Door') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('secondaryLocksSlidingGlassDoors', 1, null, ['id' => 'secondaryLocksSlidingGlassDoors']) }}   
                            {{ Form::label('secondaryLocksSlidingGlassDoors', 'Secondary Locks on Sliding Glass Doors') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('secondaryLocksonWindows', 1, null, ['id' => 'secondaryLocksonWindows']) }}   
                            {{ Form::label('secondaryLocksonWindows', 'Secondary Locks on Windows') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('keyAccessSecuredFloors', 1, null, ['id' => 'keyAccessSecuredFloors']) }}   
                            {{ Form::label('keyAccessSecuredFloors', 'Key Access Only Secured Floors Available') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('separateFloorsforWomen', 1, null, ['id' => 'separateFloorsforWomen']) }}   
                            {{ Form::label('separateFloorsforWomen', 'Separate Floors for Women') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('swingBoltLock', 1, null, ['id' => 'swingBoltLock']) }}   
                            {{ Form::label('swingBoltLock', 'Swing Bolt Lock') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('stairwellsVentilated', 1, null, ['id' => 'stairwellsVentilated']) }}   
                            {{ Form::label('stairwellsVentilated', 'All Stair Wells Ventilated') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('videoSurveillanceExteriorFrontEntrance', 1, null, ['id' => 'videoSurveillanceExteriorFrontEntrance']) }}   
                            {{ Form::label('videoSurveillanceExteriorFrontEntrance', 'Video Surveillance of Exterior Front Entrance') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('videoSurveillanceParkingAreas', 1, null, ['id' => 'videoSurveillanceParkingAreas']) }}   
                            {{ Form::label('videoSurveillanceParkingAreas', 'Video Surveillance of All Parking Areas') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('videoSurveillanceinHallways', 1, null, ['id' => 'videoSurveillanceinHallways']) }}   
                            {{ Form::label('videoSurveillanceinHallways', 'Video Surveillance in Hallways') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('videoSurveillancePublicAreas', 1, null, ['id' => 'videoSurveillancePublicAreas']) }}   
                            {{ Form::label('videoSurveillancePublicAreas', 'Video Surveillance in All Public Areas') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('videoSurveillanceMonitored24Hrs', 1, null, ['id' => 'videoSurveillanceMonitored24Hrs']) }}   
                            {{ Form::label('videoSurveillanceMonitored24Hrs', 'Video Surveillance Monitored 24 hrs. a day') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('videoSurveillance24HoursParkingArea', 1, null, ['id' => 'videoSurveillance24HoursParkingArea']) }}   
                            {{ Form::label('videoSurveillance24HoursParkingArea', 'Video Surveillance Recorded 24 hours a day Parking Area') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('wellLitWalkways', 1, null, ['id' => 'wellLitWalkways']) }}   
                            {{ Form::label('wellLitWalkways', 'Well Lit Walkways') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('keyAccessGym', 1, null, ['id' => 'keyAccessGym']) }}   
                            {{ Form::label('keyAccessGym', 'Key Access only to Health Club/Gym') }}
                        </div>
                    </div>
                    <br><br>
                    <div class="form-row myGrid">
                        <div class="col-xs-12"><h3>Accessibility Features</h3></div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('accessibleBaths', 1, null, ['id' => 'accessibleBaths']) }}   
                            {{ Form::label('accessibleBaths', 'Accessible Baths') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('accessibleBathingControls', 1, null, ['id' => 'accessibleBathingControls']) }}   
                            {{ Form::label('accessibleBathingControls', 'Accessible Bathing Controls') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('accessibleElevators', 1, null, ['id' => 'accessibleElevators']) }}   
                            {{ Form::label('accessibleElevators', 'Accessible Elevators') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('accessibleLightSwitch', 1, null, ['id' => 'accessibleLightSwitch']) }}   
                            {{ Form::label('accessibleLightSwitch', 'Accessible Light Switch') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('accessibleWashBasins', 1, null, ['id' => 'accessibleWashBasins']) }}   
                            {{ Form::label('accessibleWashBasins', 'Accessible Wash Basins') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('adaptedBathrooms', 1, null, ['id' => 'adaptedBathrooms']) }}   
                            {{ Form::label('adaptedBathrooms', 'Adapted Bathrooms') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('amplifiedTelephones', 1, null, ['id' => 'amplifiedTelephones']) }}   
                            {{ Form::label('amplifiedTelephones', 'Amplified Telephones') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('bathroomDoors32Inches', 1, null, ['id' => 'bathroomDoors32Inches']) }}   
                            {{ Form::label('bathroomDoors32Inches', 'Bathroom doors at least 32 inches wide') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('brailleElevator', 1, null, ['id' => 'brailleElevator']) }}   
                            {{ Form::label('brailleElevator', 'Braille Elevator') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('brailleLargePrintLiterature', 1, null, ['id' => 'brailleLargePrintLiterature']) }}   
                            {{ Form::label('brailleLargePrintLiterature', 'Braille/Large Print Hotel Literature') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                         <div class="col-xs-6">
                            {{ Form::checkbox('brailleLargePrintMenus', 1, null, ['id' => 'brailleLargePrintMenus']) }}   
                            {{ Form::label('brailleLargePrintMenus', 'Braille/Large Print Menus') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('doorbellWithStrobeLight', 1, null, ['id' => 'doorbellWithStrobeLight']) }}   
                            {{ Form::label('doorbellWithStrobeLight', 'Doorbell with Strobe Light') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('grabBarsInBathroom', 1, null, ['id' => 'grabBarsInBathroom']) }}   
                            {{ Form::label('grabBarsInBathroom', 'Grab Bars in Bathroom') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('handHeldShowerHead', 1, null, ['id' => 'handHeldShowerHead']) }}   
                            {{ Form::label('handHeldShowerHead', 'Hand-Held Shower Head') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('safetyFeature', 1, null, ['id' => 'safetyFeature']) }}   
                            {{ Form::label('safetyFeature', 'Safety Feature') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('hearingInductionLoops', 1, null, ['id' => 'hearingInductionLoops']) }}   
                            {{ Form::label('hearingInductionLoops', 'Hearing Induction Loops') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('leverDoorHandles', 1, null, ['id' => 'leverDoorHandles']) }}   
                            {{ Form::label('leverDoorHandles', 'Lever Door Handles') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('loweredSink', 1, null, ['id' => 'loweredSink']) }}   
                            {{ Form::label('loweredSink', 'Lowered Sink') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('loweredViewportInDoor', 1, null, ['id' => 'loweredViewportInDoor']) }}   
                            {{ Form::label('loweredViewportInDoor', 'Lowered Viewport in Door') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('pillowAlarmsAvailable', 1, null, ['id' => 'pillowAlarmsAvailable']) }}   
                            {{ Form::label('pillowAlarmsAvailable', 'Pillow Alarms Available') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('raisedToiletSeat', 1, null, ['id' => 'raisedToiletSeat']) }}   
                            {{ Form::label('raisedToiletSeat', 'Raised Toilet Seat') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('rollInShower', 1, null, ['id' => 'rollInShower']) }}   
                            {{ Form::label('rollInShower', 'Roll-in Shower') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('roomsAccessibleForWheelchairs', 1, null, ['id' => 'roomsAccessibleForWheelchairs']) }}   
                            {{ Form::label('roomsAccessibleForWheelchairs', 'Rooms accessible for wheelchairs') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('specialNeedsMenu', 1, null, ['id' => 'specialNeedsMenu']) }}   
                            {{ Form::label('specialNeedsMenu', 'Special Needs Menu') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('ttyTdd', 1, null, ['id' => 'ttyTdd']) }}   
                            {{ Form::label('ttyTdd', 'TTY/TDD') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('wideCorridors', 1, null, ['id' => 'wideCorridors']) }}   
                            {{ Form::label('wideCorridors', 'Wide Corridors') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('wideEntrance', 1, null, ['id' => 'wideEntrance']) }}   
                            {{ Form::label('wideEntrance', 'Wide Entrance') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('wideRestaurantEntrance', 1, null, ['id' => 'wideRestaurantEntrance']) }}   
                            {{ Form::label('wideRestaurantEntrance', 'Wide Restaurant Entrance') }}
                        </div>
                    </div>

    @include('partial/formClose');

        @stop