<?php

namespace mfteam\nbch\components;

use yii\base\Exception;

interface NbchEsignClientInterface
{
    /**
     * Устанавливаем контент файла
     * @param string $content
     * @return $this
     */
    public function setSrcContent(string $content): NbchEsignClientInterface;
    
    /**
     * @return bool
     * @throws Exception
     */
    public function nbkiUnzip();
    
    /**
     * @return array|string
     */
    public function getResponseResult();
}