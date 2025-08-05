<?php

namespace currency\test;

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;
use Bitrix\Main\Entity\Validator;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class ExampleTable extends DataManager
{
    public static function getTableName()
    {
        return 'currency_rates_table';
    }

    public static function getConnectionName()
    {
        return 'default';
    }

    public static function getMap()
    {
        return array(
            new Entity\IntegerField('Id',array(
                'primary' => true,
                'autocomplete' => true)),

            new Entity\StringField('Code', array(
                'required' => true,
                'validation' => function() {
                    return array(
                        new Entity\Validator\Length(null, 3)
                    );
                }
            )),

            new Entity\DateField('Date', array('required' => true)),

            new Entity\FloatField('Course', array('required' => true))
        );
    }
}
