<?php

namespace humhub\modules\smartVillage\controllers;

use humhub\components\Controller;

class IndexController extends Controller
{

    public $subLayout = "@smartVillage/views/layouts/default";

    /**
     * Renders the index view for the module
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

