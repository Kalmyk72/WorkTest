<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;
use Bitrix\Main\Context;

Loc::loadMessages(__FILE__);

class CurrencyFilterComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $request = Context::getCurrent()->getRequest();

        $this->arResult = [
            'FORM_ACTION' => $this->arParams['FORM_ACTION'] ?: $request->getRequestedPage(),
            'FILTER_VALUES' => $this->getFilterValues(),
        ];

        $this->includeComponentTemplate();
    }

    protected function getFilterValues()
    {
        $request = Context::getCurrent()->getRequest();

        return [
            'CODE' => $request->get('code'),
            'DATE_FROM' => $request->get('date_from'),
            'DATE_TO' => $request->get('date_to'),
            'COURSE_FROM' => $request->get('course_from'),
            'COURSE_TO' => $request->get('course_to'),
        ];
    }
}
