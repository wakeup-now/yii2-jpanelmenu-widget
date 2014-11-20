<?php
namespace raoul2000\widget\jpanelmenu;

use yii\web\AssetBundle;


/**
 * @author Raoul <raoul.boulard@gmail.com>
 */
class JPanelMenuAsset extends AssetBundle
{
	public $js = [
		'jquery.jpanelmenu.js'
	];
	public $depends = [
		'yii\web\JqueryAsset'
	];
	/**
	 * @see \yii\web\AssetBundle::init()
	 */
	public function init()
	{
		$this->sourcePath = __DIR__.'/assets';
		return parent::init();
	}
}
