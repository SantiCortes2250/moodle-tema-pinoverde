<?php

defined('MOODLE_INTERNAL') || die;

// Jumbotron.
$temp = new admin_settingpage('theme_pinoverde_jumbotron', get_string('jumbotronheading', 'theme_pinoverde'));

// Jumbotron heading.
$name = 'theme_pinoverde_jumbotronheading';
$heading = get_string('jumbotronheading', 'theme_pinoverde');
$information = '';
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Jumbotron Enable or disable option.
$name = 'theme_pinoverde/jumbotronstatus';
$title = get_string('status', 'theme_pinoverde');
$description = get_string('statusdesc', 'theme_pinoverde');
$default = NO;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Jumbotron Title.
$name = 'theme_pinoverde/jumbotrontitle';
$title = get_string('title', 'theme_pinoverde');
$description = get_string('titledesc', 'theme_pinoverde');
$default = 'lang:learnanytime';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Jumbotron Description.
$name = 'theme_pinoverde/jumbotrondesc';
$title = get_string('description', 'theme_pinoverde');
$description = get_string('description_desc', 'theme_pinoverde');
$default = 'lang:learnanytimedesc';
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT);
$temp->add($setting);

// Jumbotron button text.
$name = 'theme_pinoverde/jumbotronbtntext';
$title = get_string('buttontxt', 'theme_pinoverde');
$description = get_string('jumbotronbtntext_desc', 'theme_pinoverde');
$default = 'lang:viewallcourses';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$temp->add($setting);

// Jumbotron button link.
$name = 'theme_pinoverde/jumbotronbtnlink';
$title = get_string('buttonlink', 'theme_pinoverde');
$description = get_string('jumbotronbtnlink_desc', 'theme_pinoverde');
$default = 'http://www.example.com/';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$temp->add($setting);

// Jumbotron button target.
$name = 'theme_pinoverde/jumbotronbtntarget';
$title = get_string('buttontarget', 'theme_pinoverde');
$description = get_string('jumbotronbtntarget_desc', 'theme_pinoverde');
$default = NEWWINDOW;
$choices = [
    SAMEWINDOW => get_string('sameWindow', 'theme_pinoverde'),
    NEWWINDOW => get_string('newWindow', 'theme_pinoverde'),
];
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);
$settings->add($temp);
