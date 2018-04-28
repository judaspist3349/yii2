<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest99() {
        $a = 3;
        $b = 5;
        $sum555 = $a + $b;


        // echo 'สวัสดีชาวโลก';
        return $this->render('test1', ['sum' => $sum555, 'a' => $a, 'bb' => $b]);
    }

    public function actionTest2($name=null) {
        
       $param = ['name' => $name];
        return $this->render('test1', $param);
    }

}
