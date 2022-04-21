<?php

namespace mfteam\nbch;

use mfteam\nbch\components\creditHistory\CreditHistoryComponent;
use mfteam\nbch\components\file\FileManagerInterface;
use mfteam\nbch\components\NbchEsignClientInterface;
use mfteam\nbch\components\tutdf\TutdfRequestComponent;
use yii\base\BootstrapInterface;

/**
 * Модуль обмена данными НБКИ
 * @property-read FileManagerInterface $file
 * @property-read TutdfRequestComponent $tutdf
 * @property-read CreditHistoryComponent $creditHistory
 * @property-read NbchEsignClientInterface $esignClient
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    /**
     * Код участника НБКИ
     * @var string
     */
    public $memberCode;
    
    /**
     * Наименование организации
     * @var string
     */
    public $partnerName;
    
    public $controllerNamespace = 'mfteam\nbch\controllers';
    
    public function bootstrap($app)
    {
        // default implementation ignored
    }
}