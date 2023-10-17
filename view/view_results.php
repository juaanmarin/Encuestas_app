<div class="option">
    <?php
        $widthBar = $percentage * 5;
        $style = "barra";

        if($survey->getOptionSelected() == $language['option']){
            $style = "barrita";
        }

        echo $language['option'];
    ?>

    <div class="<?php echo $style; ?>" style="width:<?php echo $widthBar.'px;' ?>"></div>
</div>