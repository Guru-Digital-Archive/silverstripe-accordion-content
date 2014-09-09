<?php

HtmlEditorConfig::get('cms')->enablePlugins('template');
HtmlEditorConfig::get('cms')->insertButtonsAfter('tablecontrols', 'template');
HtmlEditorConfig::get('cms')->setOptions(array('template_templates' => array(
        array('title' => '3 Columns', 'src' => 'silverstripe-accordian-content/templates/accordian.html', 'description' => '4 Section accordian')
)));
