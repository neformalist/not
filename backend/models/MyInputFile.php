<?php

namespace backend\models;

use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\AssetsCallBack;
use yii\helpers\Html;
use yii\helpers\Json;


class MyInputFile extends InputFile {
    
    
    public function run()
	{
		if ($this->hasModel()) {
			$replace['{input}'] = Html::activeTextInput($this->model, $this->attribute, $this->options);
		} else {
			$replace['{input}'] = Html::textInput($this->name, $this->value, $this->options);
		}

		$replace['{button}'] = Html::tag($this->buttonTag,$this->buttonName, $this->buttonOptions);


		echo strtr($this->template, $replace);

		AssetsCallBack::register($this->getView());

		if (!empty($this->multiple))
			$this->getView()->registerJs("mihaildev.elFinder.register(" . Json::encode($this->options['id']) . ", function(files, id){ var _f = []; for (var i in files) { _f.push(files[i].url); } \$('#' + id).val(_f.join(', ')).trigger('change', [files, id]); return true;}); $(document).on('click','#" . $this->buttonOptions['id'] . "', function(){mihaildev.elFinder.openManager(" . Json::encode($this->_managerOptions) . ");});");
		else
			$this->getView()->registerJs("mihaildev.elFinder.register(" . Json::encode($this->options['id']) . ", function(file, id){ \$('#' + id).val(file.url).trigger('change', [file, id]);; $('#img').attr('src', file.url); return true;}); $(document).on('click', '#" . $this->buttonOptions['id'] . "', function(){mihaildev.elFinder.openManager(" . Json::encode($this->_managerOptions) . ");});");
	}
}
