<?php
    include("formVal.php");
?>
<?php
    include("../sections/_header.php");
?>
<section>
    <div class="animated" id="name">
        Welcome: <?php echo $name; ?>
    </div>
    <br>
    <div class="animated" id="color">
        We know you love <span id="favcolor"><?php echo $color; ?></span>
    </div>
    <br>
    <div class="animated" id="animal">
        You like <?php echo $animal; ?>s
    </div>
    <br>
    <div class="animated" id="hobby">
        And enjoy <?php echo $hobby; ?>
    </div>
    <br>
    <button class="btn">Start Animation</button>
</section>
<script type="text/javascript" src="<?php echo 'https://'.$host.'/Lab20/jquery/animations.js'?>"></script> 
<?php
    include("../sections/_footer.php");
?>