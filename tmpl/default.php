<?php
/*
*Имя приложения:VM Reviews
*Версия:1
*Автор:Boyko Dmitry
*Дата:19.12.2016
*Описание:быстрый отзыв для VM.
*/
defined('_JEXEC') or die;
$Auto=$params['AutoInterval'];
if($params['AutoMove']==0)$Auto=0;
//Сортровка по убыванию
if($params['Sort']=='dsc'){
	rsort($res);
}
//
$sliderClass='';
switch ($params['Style']) {
    case 'move':
        $sliderClass='slider-dix';
        break;
    case 'extinction':
        $sliderClass='SliderDO';
        break;
    case 'transition':
        $sliderClass='SliderDE';
        break;
}
?>
<div class="SliderDIX_<?=$module->id?> <?=$sliderClass?>" <?=$Style?> >
<?php
if(count($Images)>0){
	foreach($Images as $image){
		?>
		<img src="/<?=$image?>" alt="<?=$image?>">	
		<?php
	}
}
?>
</div>
<script language="JavaScript" type="text/javascript">
	<?php if($params['Style']=='move'):?>
	jQuery('.SliderDIX_<?=$module->id?>').SliderDIX({'interval':<?=$params['SpeedInterval']?>,'auto':<?=$Auto;?>,'adaptive':<?=$adaptive;?><?=$ButView;?>}) ;
	<?php endif;?>
	<?php if($params['Style']=='extinction'):?>
	jQuery('.SliderDIX_<?=$module->id?>').SliderDO({ 'interval':<?=$params['SpeedInterval']?>,'auto':<?=$Auto;?>,'adaptive':<?=$adaptive;?><?=$ButView;?>}) ;
	<?php endif;?>
	<?php if($params['Style']=='transition'):?>
	jQuery('.SliderDIX_<?=$module->id?>').SliderDExtinction({'interval':<?=$params['SpeedInterval']?>,'auto':<?=$Auto;?>,'adaptive':<?=$adaptive;?><?=$ButView;?>}) ;
	<?php endif;?>
</script>
