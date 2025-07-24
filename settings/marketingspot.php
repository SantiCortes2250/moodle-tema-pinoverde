<?php

defined('MOODLE_INTERNAL') || die;

// Marketing Spot.
$temp = new admin_settingpage('theme_pinoverde_marketingspot', get_string('mspotheading', 'theme_pinoverde'));

// Marketing Spot heading.
$name = 'theme_pinoverde_mspotheading';
$heading = get_string('mspotheading', 'theme_pinoverde');
$information = '';
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Enable or disable option for marketing spot .
$name = 'theme_pinoverde/mspotstatus';
$title = get_string('status', 'theme_pinoverde');
$description = get_string('statusdesc', 'theme_pinoverde');
$default = NO;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Marketing Spot Title.
$name = 'theme_pinoverde/mspottitle';
$title = get_string('title', 'theme_pinoverde');
$description = get_string('titledesc', 'theme_pinoverde');
$default = 'lang:aboutus';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Marketing Spot description.
$name = 'theme_pinoverde/mspotdesc';
$title = get_string('description', 'theme_pinoverde');
$description = get_string('description_desc', 'theme_pinoverde');
$default = 'lang:description_default';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);

// Marketing Spot content.
$name = 'theme_pinoverde/mspotcontent';
$title = get_string('content', 'theme_pinoverde');
$description = get_string('content_desc', 'theme_pinoverde');
$default = get_string('mspotdesc', 'theme_pinoverde');
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$temp->add($setting);

// Marketing Spot Media.
$name = 'theme_pinoverde/mspotmedia';
$title = get_string('media', 'theme_pinoverde');
$description = get_string('mspotmedia_desc', 'theme_pinoverde');
$default = '<img src="https://res.cloudinary.com/lmsace/image/upload/v1593602097/about-img_rztwgu.jpg">';
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mspotmedia', 0,
                ['accepted_types' => 'web_image']);
$temp->add($setting);
$settings->add($temp);
