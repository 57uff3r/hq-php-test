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