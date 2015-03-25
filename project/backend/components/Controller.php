<?php
/**
 * Basic controller class
 *
 *
 */

class Controller extends CController
{

    /**
     * Default layout for the webapp
     * @var string
     */
    public $layout='//layouts/basic.twig';

    /**
     * Page not found
     */
    public function notFound()
    {
        throw new CHttpException(404, Yii::t('system', 'Page not found'));
    }
}
