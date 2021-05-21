<div class="form-group row">
    <div class="col-xs-6">
        <label name="rateCode{{$i}}">Rate Code</label>
        <?php $fieldName = "rateCode".$i; ?>
        <input type="text" name="rateCode{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-6">
        <label name="rateName{{$i}}">Rate Name</label>
        <?php $fieldName = "rateName".$i; ?>
        <input type="text" name="rateName{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-6">
        <label name="validityDates{{$i}}">Validity Dates (usually 10 years out)</label>
        <?php $fieldName = "validityDates".$i; ?>
        <input type="text" name="validityDates{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-6">
        <label name="rateDerivedDesc{{$i}}">Should this rate be derived off anohter rate? If so, how?</label>
        <?php $fieldName = "rateDerivedDesc".$i; ?>
        <textarea name="rateDerivedDesc{{$i}}"  class="form-control"><?php echo $UserData->$fieldName ?></textarea>
    </div>
</div>
