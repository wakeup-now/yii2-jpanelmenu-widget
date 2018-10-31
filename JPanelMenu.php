<?php
namespace raoul2000\widget\jpanelmenu;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Json;
use raoul2000\widget\jpanelmenu\JPanelMenuAsset;

/**
 * JPanelMenu is a wrapper for the [jPanelMenu jQuery plugin](http://jpanelmenu.com/).
 *
 * @author Raoul
 */
class JPanelMenu extends Widget
{

	/**
	 * @var string name of the variable referencing the JPanelMenu instance
	 */
	public $instanceName = 'jPM';
	/**
	 *
	 * @var boolean when TRUE, the JPanelMenu is activated just after creation, otherwise it is
	 * developer job to activate it.
	 */
	public $autoEnable = true;

	/**
	 * @var array plugin options.
	 * @see http://jpanelmenu.com/#options
	 */
	public $pluginOptions = [];

	/**
	 * Checks that a value is provided for the "selector" attribute.
	 * @see \yii\base\Object::init()
	 */
	public function init()
	{
		parent::init();
		if (empty($this->instanceName)) {
			throw new InvalidConfigException('The "instanceName" property must be set.');
		}
	}

	/**
	 * @see \yii\base\Widget::run()
	 */
	public function run()
	{
		$this->registerClientScript();
	}

	/**
	 * Generates and registers javascript to start the plugin.
	 */
	public function registerClientScript()
	{
		$view = $this->getView();
		JPanelMenuAsset::register($view);

		$options = empty($this->pluginOptions) ? "" : Json::encode($this->pluginOptions);
		$js = "var ". $this->instanceName." = $.jPanelMenu(" . $options . ")";
		$view->registerJs($js);
		if ($this->autoEnable) {
			$js = $this->instanceName . '.on();';
			$view->registerJs($js);
		}
	}
}
