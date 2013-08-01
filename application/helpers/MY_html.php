<?php  defined('SYSPATH') OR die('No direct access allowed.');

class html extends html_Core{
	public static $strHtml;
	
	public static function div($conteudo, array $attributos = NULL, array $arrStyle= NULL){
		return '<div '.html::attributes($attributos).' '.html::style($arrStyle).'>'.$conteudo.'</div>';
	}

	public static function paragrafo($conteudo, array $attributos = NULL, array $arrStyle= NULL){
		return '<p '.html::attributes($attributos).' '.html::style($arrStyle).'>'.$conteudo.'</p>';
	}
	
	public static function style(array $arrStyle = NULL){
		if (empty($arrStyle))
			return '';
		
		$compiled = 'style="';
		foreach ($arrStyle as $key => $val)
		{
			$compiled .= $key.':'.htmlspecialchars($val, ENT_QUOTES, Kohana::CHARSET).";";
		}
		$compiled .= '"';
		
		return $compiled;
	}
	
	public static function createTable ( $conteudo , array $attributos = NULL, array $arrStyle= NULL){
		return '<table cellpadding="0" cellspacing="0" '.html::attributes($attributos).' '.html::style($arrStyle).'>'.$conteudo.'</table>';
	} 
	
	public static function createRow ( $conteudo , array $attributos = NULL, array $arrStyle= NULL){
		return '<tr '.html::attributes($attributos).' '.html::style($arrStyle).'>'.$conteudo.'</tr>';
	}
	
	public static function createColTh ( $conteudo , array $attributos = NULL, array $arrStyle= NULL){
		
		if ( is_string($conteudo))
			return '<th '.html::attributes($attributos).' '.html::style($arrStyle).'>'.$conteudo.'</th>';
		
		$strHtml='';
		foreach ( $conteudo as $strConteudo){
			$strHtml .= '<th '.html::attributes($attributos).' '.html::style($arrStyle).'>'.$strConteudo.'</th>'."\r\n";
		}
		
		return $strHtml;
	}
	
	public static function createColTd ( $conteudo , array $attributos = NULL, array $arrStyle= NULL){
		if ( is_string($conteudo))
			return '<td '.html::attributes($attributos).' '.html::style($arrStyle).'>'.$conteudo.'</td>';
		
		$strHtml='';
		foreach ( $conteudo as $strConteudo){
			$strHtml .= '<td '.html::attributes($attributos).' '.html::style($arrStyle).'>'.$strConteudo.'</td>'."\r\n";
		}
		
		return $strHtml;
	}
}