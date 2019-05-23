<?php
namespace frontend\components\widgets\HeaderWidget;

use yii\base\Widget;

class HeaderWidget extends Widget
{



    public function run()
    {
      return $this->render('index');
    }

}
