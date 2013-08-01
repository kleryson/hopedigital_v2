<?php  defined('SYSPATH') OR die('No direct access allowed.');
class html extends html_Core{
	public static $strHtml;
	
	public static function div($conteudo, array $attributos = NULL){
		return '<div '.html::attributes($attributos).'>'.$conteudo.'</div>';
	}
	
}