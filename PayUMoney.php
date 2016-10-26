<?php

namespace khuddus\payumoney;

/**
 * This is just an example.
 */
class PayUMoney extends \yii\base\Widget
{
     
    public function run()
    {
        return $this->render("@khuddus/payumoney/views/PayUMoney_form", [
             
        ]);
    }
}
