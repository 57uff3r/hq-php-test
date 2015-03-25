<?php
/**
 * Basic website controller
 *
 */


class SiteController extends Controller
{

    /**
     * Index page action
     *
     */
    public function actionIndex()
    {
        // var_dump($_POST);
        $this->renderPartial('index');
    }

    /**
     * Error page
     */
    public function actionError()
    {
        $this->renderPartial('error', array('error' => Yii::app()->errorHandler->error));
    }

}