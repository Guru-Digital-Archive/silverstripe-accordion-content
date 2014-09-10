<?php

HtmlEditorConfig::get('cms')->enablePlugins('template');
HtmlEditorConfig::get('cms')->insertButtonsAfter('tablecontrols', 'template');
HtmlEditorConfig::get('cms')->setOptions(array('template_templates' => array(
        array('title' => '4 Section accordian', 'src' => 'silverstripe-accordian-content/templates/accordian.html', 'description' => 'Add a 4 section accordion content to your page')
)));
