<?php

namespace mfteam\nbch\models\references;

use mfteam\nbch\models\references\BaseType;

/**
 * Справочник. Виды источников
 */
class SourceType extends BaseType
{
    public const T1 = '1';
    public const T2 = '2';
    public const T3 = '3';
    public const T4 = '4';
    public const T5 = '5';
    public const T6 = '6';
    public const T7 = '7';
    public const T8 = '8';
    public const T9 = '9';
    public const T10 = '10';
    public const T11 = '11';
    public const T12 = '12';
    public const T13 = '13';
    public const T14 = '14';
    public const T15 = '15';
    public const T16 = '16';
    public const T17 = '17';
    public const T99 = '99';
    public const EMPTY = '-';
    /**
     * @inheritDoc
     */
    public static function list(): array
    {
        return [
          self::T1 => 'Заимодавец (кредитор) – кредитная организация',
          self::T2 => 'Заимодавец – микрофинансовая организация',
          self::T3 => 'Заимодавец – кредитный потребительский кооператив',
          self::T4 => 'Заимодавец – сельскохозяйственный кредитный потребительский кооператив',
          self::T5 => 'Заимодавец-ломбард',
          self::T6 => 'Заимодавец – иная организация',
          self::T7 => 'Организация-лизингодатель',
          self::T8 => 'Оператор инвестиционной платформы',
          self::T9 => 'Организация-гарант',
          self::T10 => 'Организация – взыскатель платы за жилое помещение, коммунальные услуги или услуги связи',
          self::T11 => 'Федеральный орган исполнительной власти, уполномоченный на осуществление функций по обеспечению установленного порядка деятельности судов и исполнению судебных актов и актов других органов',
          self::T12 => 'Арбитражный управляющий',
          self::T13 => 'Ликвидационная комиссия или ликвидатор',
          self::T14 => 'Специализированное финансовое общество',
          self::T15 => 'Ипотечный агент',
          self::T16 => 'Кредитный управляющий синдиката кредиторов',
          self::T17 => 'Лицо, осуществляющее деятельность по возврату просроченной задолженности (коллекторская организация)',
          self::T99 => 'Иное лицо',
          self::EMPTY => 'Данные отсутствуют',
        ];
    }
}
