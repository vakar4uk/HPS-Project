

<div class="row">
    <div class="text-center carriers">
    <?php foreach($carriers as $carrier) { ?>
        <div class="carrier-display col-lg-3 col-md-3">
            <div class="thumbnail">
                <img class="carrier-logo" src="../images/logos/<?php echo $carrier["logo"]; ?>.png" alt="...">
                <div class="caption">
                    <h3><?php echo $carrier["name"]; ?></h3>
                </div>
        </div>
            
        </div>        
        <?php } ?>
    </div>    
</div>

