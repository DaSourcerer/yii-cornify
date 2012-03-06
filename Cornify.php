<?php
/* This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://sam.zoy.org/wtfpl/COPYING for more details. */ 

/**
 * This class simplifies the usage of the Cornify webservice within the Yii framework.
 * 
 * @author Da:Sourcerer
 * @version 1.0.1
 * @license http://sam.zoy.org/wtfpl/COPYING WTFPL 2.0
 */

class Cornify extends CWidget {
	public $image='http://www.cornify.com/assets/cornify.gif';
	
	public function init()
	{
		Yii::app()->getClientScript()->registerScriptFile('http://www.cornify.com/js/cornify.js');
	}
	
	public function run()
	{
		echo CHtml::link(CHtml::image($this->image, 'Cornify'), '#', array('onclick' => 'cornify_add()'));
	}
}
