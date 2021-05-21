<div class="form-group row">
    <div class="col-xs-6">
        <label for="roomCode{{$i}}">Room Code</label>
        <?php $fieldName = "roomCode".$i; ?>
        <input type="text" name="roomCode{{$i}}" id="roomCode{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-6">
        <label for="roomCode{{$i}}">Room Name</label>
        <?php $fieldName = "roomName".$i; ?>
        <input type="text" name="roomName{{$i}}" id="roomName{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-6">
        <label for="maxNoRooms{{$i}}">Max No. Rooms</label>
        <?php $fieldName = "maxNoRooms".$i; ?>
        <input type="text" name="maxNoRooms{{$i}}" id="maxNoRooms{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-6">
        <label for="minRate{{$i}}">Min Rate</label>
        <?php $fieldName = "minRate".$i; ?>
        <input type="text" name="minRate{{$i}}" id="minRate{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-6">
        <label for="maxPeopleMaxBedSpaces{{$i}}">Max N. People/Max Bed Spaces</label>
        <?php $fieldName = "maxPeopleMaxBedSpaces".$i; ?>
        <input type="text" name="maxPeopleMaxBedSpaces{{$i}}" id="maxPeopleMaxBedSpaces{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-6">
        <label for="minNoPeople{{$i}}">Min No. People</label>
        <?php $fieldName = "minNoPeople".$i; ?>
        <input type="text" name="minNoPeople{{$i}}" id="minNoPeople{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
    </div>
</div>
