yii2-jpanelmenu-widget
==========================
The JPanelMenu widget is a wrapper for the [JPanelMenu jQuery plugin](http://jpanelmenu.com/), 
"*for easily creating and managing off-canvas content.*".

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist raoul2000/yii2-jpanelmenu-widget "*"
```

or add

```
"raoul2000/yii2-jpanelmenu-widget": "*"
```

to the require section of your `composer.json` file.



Usage
-----
Using JPanelMenu widget is easy. For instance, add following code to your view file : 

```php
<!-- This is the menu that will be rendered in our side panel -->
<div style="display:none;">
	<div id="menu1">
		<h3>Menu Options</h3>
		<hr/>
		<ul class="nav nav-pills nav-stacked">
		  <li role="presentation" class="active"><a href="#">Home</a></li>
		  <li role="presentation"><a href="#">Profile</a></li>
		  <li role="presentation"><a href="#">Messages</a></li>
		</ul>
	</div>
</div>

<!-- This button will trigger menu open/close actions-->
<button class="trigger1">toggle menu</button>

<?php
	// create and register the widget with some options.
	raoul2000\widget\jpanelmenu\JPanelMenu::widget([
		'pluginOptions' => [
			'menu' => '#menu1',
			'trigger' => '.trigger1',
			'duration' => 100
		]
	]);
?>
			
```


For more information on the plugin options, please refer to [JPanelMenu github page](https://github.com/acolangelo/jPanelMenu/).

License
-------

**yii2-jpanelmenu-widget** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.