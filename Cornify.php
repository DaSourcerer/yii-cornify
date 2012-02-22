<?php
/*   Copyright 2011 Da:Sourcerer
 *
 *   Licensed under the Apache License, Version 2.0 (the "License");
 *   you may not use this file except in compliance with the License.
 *   You may obtain a copy of the License at
 *
 *       http://www.apache.org/licenses/LICENSE-2.0
 *
 *   Unless required by applicable law or agreed to in writing, software
 *   distributed under the License is distributed on an "AS IS" BASIS,
 *   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *   See the License for the specific language governing permissions and
 *   limitations under the License.
 */

/**
 * This class simplifies the usage of the Cornify webservice within the Yii framework.
 * 
 * @author Da:Sourcerer
 * @version 1.0
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License 2
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
