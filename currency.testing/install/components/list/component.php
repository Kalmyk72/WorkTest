<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\UI\PageNavigation;
use currency\test\ExampleTable;

Loc::loadMessages(__FILE__);

class CurrencyListComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $arParams['FILTER_NAME'] = $arParams['FILTER_NAME'] ?? 'currencyFilter';
        $arParams['PAGE_SIZE'] = (int)($arParams['PAGE_SIZE'] ?? 10);
        $arParams['SHOW_COLUMNS'] = is_array($arParams['SHOW_COLUMNS'])
            ? $arParams['SHOW_COLUMNS']
            : ['CODE', 'DATE', 'COURSE'];

        return $arParams;
    }

    public function executeComponent()
    {
        $this->prepareFilter();
        $this->prepareNavigation();
        $this->getCurrencyList();

        $this->includeComponentTemplate();
    }

    protected function prepareFilter()
    {
        $request = Context::getCurrent()->getRequest();
        $filter = [];

        if ($code = $request->get('code')) {
            $filter['=Code'] = $code;
        }

        if ($dateFrom = $request->get('date_from')) {
            $filter['>=Date'] = $dateFrom;
        }

        if ($dateTo = $request->get('date_to')) {
            $filter['<=Date'] = $dateTo;
        }

        if ($courseFrom = $request->get('course_from')) {
            $filter['>=Course'] = (float)$courseFrom;
        }

        if ($courseTo = $request->get('course_to')) {
            $filter['<=Course'] = (float)$courseTo;
        }

        $this->arResult['FILTER'] = $filter;
    }

    protected function prepareNavigation()
    {
        $nav = new PageNavigation('currency-nav');
        $nav->allowAllRecords(false)
            ->setPageSize($this->arParams['PAGE_SIZE'])
            ->initFromUri();

        $this->arResult['NAV'] = $nav;
    }

    protected function getCurrencyList()
    {
        $nav = $this->arResult['NAV'];
        $filter = $this->arResult['FILTER'];

        $query = ExampleTable::query()
            ->setSelect(['*'])
            ->setFilter($filter)
            ->setOffset($nav->getOffset())
            ->setLimit($nav->getLimit());

        $result = $query->exec();

        $nav->setRecordCount($query->queryCountTotal());

        $this->arResult['ITEMS'] = $result->fetchAll();
    }
}