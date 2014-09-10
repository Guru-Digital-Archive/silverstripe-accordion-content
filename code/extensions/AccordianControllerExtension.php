<?php

class AccordianControllerExtension extends Extension {

    public function onAfterInit() {
        Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
        Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery-ui/jquery-ui.js');
        Requirements::javascript("silverstripe-accordian-content/assets/javascript/main.js");
        Requirements::css("silverstripe-accordian-content/assets/css/styles.css");
    }

}
