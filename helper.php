<?php
/*
*Имя приложения:VM Reviews
*Версия:1
*Автор:Boyko Dmitry
*Дата:19.12.2016
*Описание:быстрый отзыв для VM.
*/
defined('_JEXEC') or die('Restricted access');
class Helper{
	public static function getImages($params)
    {
		$i=0;
		$Path='images/'.$params['FolderImages'];
		if(file_exists($Path)){//загрузить масив фотографий
			$FViews = scandir($Path);
			foreach($FViews as $ifiles){
			  if($ifiles!='.' AND $ifiles!='..' AND $ifiles!='index.html')
			  {
				$res[$i++]=$Path.'/'.$ifiles;
			  }
			}
		}else{//Нет каталога
			echo '<div class="slider-dix-warning">';
			echo JText::_('MOD_SLIDER_DIX_ERROR_FOLDER');
			echo '</div>';
		}
        return $res;
    }
	public static function getStyle($params){
		$styles='';
		if($params['AutoSize']==0){
			$styles='style="width: '.$params['Width'].'px; height: '.$params['Height'].'px;"';
		}
		
		return $styles;
	}
	
	public static function getButtonView($params){
		$but='';
		if($params['ButtonView']==0){
			$but=" ,'prev':'.sdnone .p','next':'.sdnone .n'";
		}
		
		return $but;
	}

}

