<div class="option">
    <?php
        $widthBar = $percentage * 5;
        $style = "barra";

        if($survey->getOptionSelected() == $language['option']){
            $style = "barra_selected";
        }

        echo $language['option'];
    ?>

    <div class="<?php echo $style; ?>" style="width:<?php echo $widthBar.'px;' ?>">
        <?php echo $percentage . '%';?>
    </div>
</div>