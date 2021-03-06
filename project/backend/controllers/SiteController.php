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
        $currencies = Order::$currencies;
        $values     = $_POST;
        $errors     = [];
        $result     = 0;

        if ($values) {
            $record             = new Order();
            $record->attributes = $values;

            if (!$record->validate()) {
                $errors = $record->errors;
                return $this->renderPartial('index', compact('values', 'errors', 'currencies', 'result'));
            }

            $result = $record->process();
        }

        return $this->renderPartial('index', compact('values', 'errors', 'currencies', 'result'));
    }

    /**
     * Error page
     */
    public function actionError()
    {
        $this->renderPartial('error', array('error' => Yii::app()->errorHandler->error));
    }

}