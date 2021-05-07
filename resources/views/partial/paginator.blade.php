<?php 
    if($viewType == 'longForm'){
        $pageCount = 17;
    }elseif($viewType == 'shortForm' || $viewType == 'CMForm' || $viewType == 'BE'){
        $pageCount = 6;
    }
?>

<div class="paginator align-center">
        
    <a href='{{ URL::to('formPage/'.$formType.'/1') }}'>First</a>

    <?php if($curPage > 1): ?>
        <a href='{{ URL::to('formPage/'.$formType.'/'. ($curPage - 1)) }}' >< Prev</a>
    <?php else: ?>
        <a href="#" class="inactive">< Prev</a>
    <?php endif; ?>


    <?php $startPage = ($curPage == 1)?1:$curPage - 1; ?>
    <?php for($i=$startPage; $i<=$pageCount; $i++): ?>
        <?php if($curPage == 1): ?>
            <?php if($i < $curPage + 3): ?>
                <a href='{{ URL::to('formPage/'.$formType.'/' . $i) }}' class='<?php echo ($i == $curPage)?"active":"" ?>'><?php echo $i ?></a> 
            <?php endif; ?>                                
        <?php elseif($curPage > ($pageCount -2)): ?>
            <a href='{{ URL::to('formPage/'.$formType.'/' . $i) }}' class='<?php echo ($i == $curPage)?"active":"" ?>'><?php echo $i ?></a>
        <?php else: ?>
            <?php if($i < $curPage + 2): ?>
                <a href='{{ URL::to('formPage/'.$formType.'/' . $i ) }}' class='<?php echo ($i == $curPage)?"active":"" ?>'><?php echo $i ?></a> 
            <?php endif; ?> 
        <?php endif; ?>
    <?php endfor; ?>
    

    <?php if($curPage < $pageCount): ?>
        <a href='{{ URL::to('formPage/'.$formType.'/' . ($curPage + 1) ) }}' >Next ></a>
    <?php else: ?>
        <a class="inactive">Next ></a>
    <?php endif; ?>
    

    <a href='{{ URL::to('formPage/'.$formType.'/'.$pageCount ) }}'>Last</a>
</div>