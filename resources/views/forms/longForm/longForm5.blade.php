@extends('layouts.formMaster', ['curPage'=>5, 'formType' => 'longForm'])

@section('title', 'Form Page 5')

@section('form')

                    @include('partial/formOpen')
                        <input type="hidden" name="curPage" value="5" />

                    
                    <div class="form-row"><h2>Airport Information</h2></div>
                    <div class="form-row myGrid labels">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-2">{{ Form::label('Airport Code or Name') }}</div>
                        <div class="col-xs-3">{{ Form::label('Distance/ compass direction from Airport to hotel') }}</div>
                        <div class="col-xs-3">{{ Form::label('Directions from Airport to Property') }}</div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-4">{{ Form::label('Primary Airport') }}</div>
                        <div class="col-xs-2">{{ Form::text('airportCodeOrName1', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('airportDistanceAndDirection1', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('directionsAirportToHotel1', null, array('class' => 'form-control')) }}</div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-4">{{ Form::label('Secondary Airport') }}</div>
                        <div class="col-xs-2">{{ Form::text('airportCodeOrName2', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('airportDistanceAndDirection2', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('directionsAirportToHotel2', null, array('class' => 'form-control')) }}</div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-4">{{ Form::label('Alternate Airports (within 100 miles of hotel)') }}</div>
                        <div class="col-xs-2">{{ Form::text('airportCodeOrName3', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('airportDistanceAndDirection3', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('directionsAirportToHotel3', null, array('class' => 'form-control')) }}</div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-4">{{ Form::label('City Center') }}</div>
                        <div class="col-xs-2">{{ Form::text('airportCodeOrName4', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('sairportDistanceAndDirection4', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('directionsAirportToHotel4', null, array('class' => 'form-control')) }}</div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-4">{{ Form::label('Closest Major Center') }}</div>
                        <div class="col-xs-2">{{ Form::text('airportCodeOrName5', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('sairportDistanceAndDirection5', null, array('class' => 'form-control')) }}</div>
                        <div class="col-xs-3">{{ Form::text('directionsAirportToHotel5', null, array('class' => 'form-control')) }}</div>
                    </div>
                    <br><br>
                    <div class="form-row"><h2>Dining & Entertainment: Dining</h2></div>
                    <div class="form-row myGrid">
                        <div class="col-xs-8">{!! Form::textarea('diningAndEntertainment', null, array('class' => 'form-control textarea')) !!}</div>
                    </div>         
                    <br><br>
                    <div class="form-row"><h2>Special Events</h2></div>
                    <div class="form-row myGrid">
                        <div class="col-xs-12">
                            {{ Form::label('Describe any major events, such as festivals, fairs, conventions, sporting events, etc.') }}
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-4 small-text">{{ Form::label('START DATE to END DATE') }}</div>
                            <div class="col-xs-4 small-text">{{ Form::label('EVENT') }}</div>
                            <div class="col-xs-4 small-text">{{ Form::label('LOCATION / COMMENTS') }}</div>
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-4">{{ Form::text('startAndEndDate1', null, array('class' => 'form-control')) }}</div>
                            <div class="col-xs-4">{{ Form::text('event1', null, array('class' => 'form-control')) }}</div>
                            <div class="col-xs-4">{{ Form::text('LocationAndComments1', null, array('class' => 'form-control')) }}</div>
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-4">{{ Form::text('startAndEndDate2', null, array('class' => 'form-control')) }}</div>
                            <div class="col-xs-4">{{ Form::text('event2', null, array('class' => 'form-control')) }}</div>
                            <div class="col-xs-4">{{ Form::text('LocationAndComments2', null, array('class' => 'form-control')) }}</div>
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-4">{{ Form::text('startAndEndDate3', null, array('class' => 'form-control')) }}</div>
                            <div class="col-xs-4">{{ Form::text('event3', null, array('class' => 'form-control')) }}</div>
                            <div class="col-xs-4">{{ Form::text('LocationAndComments3', null, array('class' => 'form-control')) }}</div>
                        </div>
                    </div>
                    <br><br>
                    <!--<div class="form-row"><h2>Miscellaneous Information: Travel Agent Commission</h2></div>
                    <div class="form-row myGrid">
                        <div class="col-xs-12">
                            {{ Form::label('Ex: A 10% travel agent commission will be paid on actualized reservations for all   commissionable rates.') }}
                        </div>
                        <div class="col-xs-12">{{ Form::text('travelAgentCommission', null, array('class' => 'form-control')) }}</div>
                    </div>
                    <br><br>-->
                    <div class="form-row"><h2>Miscellaneous Information: Safety (Please Check All That Apply)</h2></div>
                    <div class="form-row myGrid">
                        <div class="col-xs-12"><h3>Alarms and Fire Detection Equipment</h3></div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('fireSafety', 1, null, ['id' => 'fireSafety']) }}   
                            {{ Form::label('fireSafety', 'Property meets Requirements for Fire Safety') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('alarmsMonitored', 1, null, ['id' => 'alarmsMonitored']) }}   
                            {{ Form::label('alarmsMonitored', 'Alarms Continuously Monitored') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('strobeLightsGuestRooms', 1, null, ['id' => 'strobeLightsGuestRooms']) }}   
                            {{ Form::label('strobeLightsGuestRooms', 'Alarms Have Strobe Lights for Deaf/Hard Hearing in all Guest Rooms') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('strobeLightsHallways', 1, null, ['id' => 'strobeLightsHallways']) }}   
                            {{ Form::label('strobeLightsHallways', 'Alarms Have Strobe Lights for Deaf/Hard of Hearing in all Hallways') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('strobeLightsPublicAreas', 1, null, ['id' => 'strobeLightsPublicAreas']) }}   
                            {{ Form::label('strobeLightsPublicAreas', 'Alarms Have Strobe Lights for Deaf/Hard of Hearing in all Public Areas') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('audibleAlarms', 1, null, ['id' => 'audibleAlarms']) }}   
                            {{ Form::label('audibleAlarms', 'Audible Alarms') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('audibleAlarmsHallways', 1, null, ['id' => 'audibleAlarmsHallways']) }}   
                            {{ Form::label('audibleAlarmsHallways', 'Audible Smoke Alarms in All Halls') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('audibleAlarmsPublicAreas', 1, null, ['id' => 'audibleAlarmsPublicAreas']) }}   
                            {{ Form::label('audibleAlarmsPublicAreas', 'Audible Smoke Alarms in All Public Areas') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('audibleAlarmsRooms', 1, null, ['id' => 'audibleAlarmsRooms']) }}   
                            {{ Form::label('audibleAlarmsRooms', 'Audible Smoke Alarms in All Rooms') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('audibleAlarmsHardwired', 1, null, ['id' => 'audibleAlarmsHardwired']) }}   
                            {{ Form::label('audibleAlarmsHardwired', 'All Audible Smoke Alarms Hardwired') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('autoRecallElevators', 1, null, ['id' => 'autoRecallElevators']) }}   
                            {{ Form::label('autoRecallElevators', 'Auto Recall Elevators') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('linkToFireDept', 1, null, ['id' => 'linkToFireDept']) }}   
                            {{ Form::label('linkToFireDept', 'Auto Link to Fire Department') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('autoFireDoors', 1, null, ['id' => 'autoFireDoors']) }}   
                            {{ Form::label('autoFireDoors', 'Automatic Fire Doors') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('disabledEmergencyPlan', 1, null, ['id' => 'disabledEmergencyPlan']) }}   
                            {{ Form::label('disabledEmergencyPlan', 'Disabled Emergency Plan') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('emergencyEvacPlan', 1, null, ['id' => 'emergencyEvacPlan']) }}   
                            {{ Form::label('emergencyEvacPlan', 'Emergency Evacuation Plan') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('drillFreq', 1, null, ['id' => 'drillFreq']) }}   
                            {{ Form::label('drillFreq', 'Emergency Evacuation Drill Frequency') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('emerInfoInRooms', 1, null, ['id' => 'emerInfoInRooms']) }}   
                            {{ Form::label('emerInfoInRooms', 'Emergency Info in All Room') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('exitMapsInRooms', 1, null, ['id' => 'exitMapsInRooms']) }}   
                            {{ Form::label('exitMapsInRooms', 'Exit Maps in Rooms') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('exitSignsLit', 1, null, ['id' => 'exitSignsLit']) }}   
                            {{ Form::label('exitSignsLit', 'Exit Signs Lit') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::text('femaIDInsert', null, ['id' => 'femaIDInsert', 'class' => 'super-short']) }}   
                            {{ Form::label('femaIDInsert', 'FEMA ID Insert ID Here') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('fireDetectorsHalls', 1, null, ['id' => 'fireDetectorsHalls']) }}   
                            {{ Form::label('fireDetectorsHalls', 'Fire Detectors in all Halls') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('fireDetectorsPublicAreas', 1, null, ['id' => 'fireDetectorsPublicAreas']) }}   
                            {{ Form::label('fireDetectorsPublicAreas', 'Fire Detectors in all Public Areas') }}
                        </div>
                    </div>
                    <div class="form-row myGrid">
                        <div class="col-xs-6">
                            {{ Form::checkbox('sprinklersHalls', 1, null, ['id' => 'sprinklersHalls']) }}   
                            {{ Form::label('sprinklersHalls', 'Sprinklers in All Halls') }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::checkbox('sprinklersPublicAreas', 1, null, ['id' => 'sprinklersPublicAreas']) }}   
                            {{ Form::label('sprinklersPublicAreas', 'Sprinklers in All Public Areas') }}
                        </div>
                    </div>
                    <br><br>
                    <div class="form-row myGrid">
                        <div class="form-row myGrid">
                            <div class="col-xs-12"><h3>Security and Staff Training</h3></div>
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-6">
                                {{ Form::checkbox('24HourSecurity', 1, null, ['id' => '24HourSecurity']) }}   
                                {{ Form::label('24HourSecurity', '24 Hour Security') }}<br>
                                {{ Form::label('securityHours', 'If no, what are the hours? Insert Hours Here') }}
                                {{ Form::text('securityHours', null, array('class' => 'form-control')) }}
                            </div>
                            <div class="col-xs-6">
                                {{ Form::checkbox('overnightSecurity', 1, null, ['id' => 'overnightSecurity']) }}   
                                {{ Form::label('overnightSecurity', 'Overnight Security') }}<br>
                                {{ Form::checkbox('parkingAttendant', 1, null, ['id' => 'parkingAttendant']) }}   
                                {{ Form::label('parkingAttendant', 'Parking Attendant') }}<br>
                                {{ Form::checkbox('firstAidAvailable', 1, null, ['id' => 'firstAidAvailable']) }}   
                                {{ Form::label('firstAidAvailable', 'First Aid Available') }}
                            </div>
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-6">
                                {{ Form::checkbox('defibrillatoronSite', 1, null, ['id' => 'defibrillatoronSite']) }}   
                                {{ Form::label('defibrillatoronSite', 'Automated External Defibrillator on Site (AED)') }}
                            </div>
                            <div class="col-xs-6">
                                {{ Form::checkbox('medicalEquipmentonSite', 1, null, ['id' => 'medicalEquipmentonSite']) }}   
                                {{ Form::label('medicalEquipmentonSite', 'Basic Medical Equipment on Site') }}
                            </div>
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-6">
                                {{ Form::checkbox('staffTrainedinCPR', 1, null, ['id' => 'staffTrainedinCPR']) }}   
                                {{ Form::label('staffTrainedinCPR', 'Staff Trained in CPR') }}
                            </div>
                            <div class="col-xs-6">
                                {{ Form::checkbox('securityPersonnelonSite', 1, null, ['id' => 'securityPersonnelonSite']) }}   
                                {{ Form::label('securityPersonnelonSite', 'Security Personnel on Site') }}
                            </div>
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-6">
                                {{ Form::checkbox('uniformSecurityonPremises', 1, null, ['id' => 'uniformSecurityonPremises']) }}   
                                {{ Form::label('uniformSecurityonPremises', 'Uniform Security on Premises') }}
                            </div>
                            <div class="col-xs-6">
                                {{ Form::checkbox('securityEscortsAvailable', 1, null, ['id' => 'securityEscortsAvailable']) }}   
                                {{ Form::label('securityEscortsAvailable', 'Security Escorts Available on Request') }}
                            </div>
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-6">
                                {{ Form::checkbox('staffTrainedinFirstAid', 1, null, ['id' => 'staffTrainedinFirstAid']) }}   
                                {{ Form::label('staffTrainedinFirstAid', 'Staff Trained in First Aid') }}
                            </div>
                            <div class="col-xs-6">
                                 {{ Form::checkbox('staffTrainedinAED', 1, null, ['id' => 'staffTrainedinAED']) }}   
                                {{ Form::label('staffTrainedinAED', 'Staff Trained in Automated External Defibrillator Usage (AED)') }}
                            </div>
                        </div>
                        <div class="form-row myGrid">
                            <div class="col-xs-6">
                               {{ Form::checkbox('staffRCCertifiedinCPR', 1, null, ['id' => 'staffRCCertifiedinCPR']) }}   
                                {{ Form::label('staffRCCertifiedinCPR', 'Staff Red Cross Certified in CPR') }}
                            </div>
                            <div class="col-xs-6">
                                {{ Form::checkbox('staffTrainedinDuplicateKeys', 1, null, ['id' => 'staffTrainedinDuplicateKeys']) }}   
                                {{ Form::label('staffTrainedinDuplicateKeys', 'Staff Trained in Duplicate Keys') }}
                            </div>
                        </div>
    @include('partial/formClose');


        @stop