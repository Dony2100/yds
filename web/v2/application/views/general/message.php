<?php
if(isset($message)) {?>
<div class="card mb-3">
    <div class="card-body" align='center'>
        <?php if(isset($warning)) {?><img src='../theme/img/exclmarksign.gif'><?}?>
        <h3><?=$message?></h3>
    </div>
</div>
<?php }?>