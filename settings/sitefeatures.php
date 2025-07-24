<?php

defined('MOODLE_INTERNAL') || die;

// Site features.
$temp = new admin_settingpage('theme_pinoverde_sitefeatures', get_string('sitefeatures', 'theme_pinoverde'));

// Enable or disable option for the site features block.
$name = 'theme_pinoverde/sitefblockstatus';
$title = get_string('status', 'theme_pinoverde');
$description = get_string('statusdesc', 'theme_pinoverde');
$default = NO;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Site feature block Title.
$name = 'theme_pinoverde/sitefeaturetitle';
$title = get_string('title', 'theme_pinoverde');
$description = get_string('titledesc', 'theme_pinoverde');
$default = 'lang:sitefeaturesdefault';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Site feature block description.
$name = 'theme_pinoverde/sitefeaturedesc';
$title = get_string('description', 'theme_pinoverde');
$description = get_string('description_desc', 'theme_pinoverde');
$default = 'lang:description_default';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);

// Select the number of site features show in the front page.
$name = 'theme_pinoverde/numberofsitefeature';
$title = get_string('numberofsitef', 'theme_pinoverde');
$description = get_string('numberofsitef_desc', 'theme_pinoverde');
$default = 4;
$choices = array_combine( range(1, 4), range(1, 4) );
$temp->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

$sitefeatures = get_config('theme_pinoverde', 'numberofsitefeature');
for ($i = 1; $i <= $sitefeatures; $i++) {

    // Site feature heading.
    $name = 'theme_pinoverde_sitefblock'.$i.'heading';
    $heading = get_string('sitefblock', 'theme_pinoverde', ['block' => $i]);
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Site feature enable/disable option.
    $name = 'theme_pinoverde/sitefblock'.$i.'status';
    $title = get_string('status', 'theme_pinoverde');
    $description = get_string('statusdesc', 'theme_pinoverde');
    $default = YES;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Site feature title.
    $name = 'theme_pinoverde/sitefblock'.$i.'title';
    $title = get_string('title', 'theme_pinoverde');
    $description = get_string('titledesc', 'theme_pinoverde');
    $default = 'lang:sb'.$i.'_default_title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Site feature content.
    $name = 'theme_pinoverde/sitefblock'.$i.'content';
    $title = get_string('content', 'theme_pinoverde');
    $description = get_string('content_desc', 'theme_pinoverde');
    $default = 'lang:sb_default_content';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    // Site feature icon.
    $name = 'theme_pinoverde/sitefblock'.$i.'icon';
    $title = get_string('icon', 'theme_pinoverde');
    $description = get_string('icondesc', 'theme_pinoverde');
    $default = 'lang:sitefblockicon'.$i.'_default';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Site feature url.
    $name = 'theme_pinoverde/sitefblock'.$i.'url';
    $title = get_string('url', 'theme_pinoverde');
    $description = get_string('urldesc', 'theme_pinoverde', ['block' => $i]);
    $default = 'http://www.example.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
}
$settings->add($temp);
