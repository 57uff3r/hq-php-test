<?php
/**
 * Basic controller class
 *
 *
 */

class ApiController extends CController
{

    /**
     * Default layout for the webapp
     * @var string
     */
    public $answerTemplate = '//layouts/json';

    /**
     * Input data
     * @var mixed
     */
    public $request = null;

    /**
     * Get input data
     */
    public function init()
    {
        $data           = file_get_contents('php://input');
        $this->request  = json_decode($data);

        if (!$this->request || !is_array($this->request)) {
            return $this->error(Yii::t('system', 'Empty API input'));
        }
    }

    /**
     * API:success
     *
     * @param mixed $data - данные об успехе
     */
    public function success($data = null)
    {
        $status = true;
        $this->renderPartial($this->answerTemplate, compact('status', 'data'));
        Yii::app()->end();
    }

    /**
     * Api:error
     *
     * @param mixed $data - данные об ошибке
     */
    public function error($data = null)
    {
        $status = false;
        $this->renderPartial($this->answerTemplate, compact('status', 'data'));
        Yii::app()->end();
    }

    /**
     * Get platform header
     *
     * @return string
     */
    public function getPlatform() {
        $p = isset($_SERVER['HTTP_X_PLATFORM']) ? $_SERVER['HTTP_X_PLATFORM'] : 'unknown';
        if (isset($_SERVER['REQUEST_METHOD']) && $p == 'unknown' && $_SERVER['REQUEST_METHOD'] == 'GET') {
            $p = 'web';
        }

        return $p;
    }
}
