<?php
/*
*Имя приложения:VM Reviews
*Версия:1
*Автор:Boyko Dmitry
*Дата:19.12.2016
*Описание:быстрый отзыв для VM.
*/
defined('_JEXEC') or die('Restricted access');
require_once dirname(__FILE__) . '/helper.php';//Подключаем файл
//Подключение JS И CSS
$doc = JFactory::getDocument();
$doc->addStyleSheet('modules/mod_slider_dix/slider_dix/styles.css'); 
$doc->addScript('modules/mod_slider_dix/slider_dix/slider_dix.js');    
//
$Images=Helper::getImages($params);
$Style=Helper::getStyle($params);
$ButView=Helper::getButtonView($params);
//
$adaptive="'no'";//фиксированый размер
if($params['AutoSize']==1)$adaptive="'yes'";//выключена адаптивность


// подключаем шаблон
require(JModuleHelper::getLayoutPath('mod_slider_dix'));




