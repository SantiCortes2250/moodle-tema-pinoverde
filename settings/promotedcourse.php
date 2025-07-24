<?php

defined('MOODLE_INTERNAL') || die;

// Promoted Courses.
$temp = new admin_settingpage('theme_pinoverde_promotedcourse', get_string('promotedcoursesheading', 'theme_pinoverde'));

// Promoted Courses Heading.
$name = 'theme_pinoverde_promotedcoursesheading';
$heading = get_string('promotedcoursesheading', 'theme_pinoverde');
$information = '';
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Enable / Disable option for Promoted Courses.
$name = 'theme_pinoverde/pcoursestatus';
$title = get_string('status', 'theme_pinoverde');
$description = get_string('statusdesc', 'theme_pinoverde');
$default = YES;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Promoted courses Block title.
$name = 'theme_pinoverde/promotedtitle';
$title = get_string('title', 'theme_pinoverde');
$description = get_string('promotedtitledesc', 'theme_pinoverde');
$default = 'lang:promotedtitledefault';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Promoted courses block description.
$name = 'theme_pinoverde/promotedcoursedesc';
$title = get_string('description', 'theme_pinoverde');
$description = get_string('description_desc', 'theme_pinoverde');
$default = 'lang:description_default';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);

// Promoted courses.
$name = 'theme_pinoverde/promotedcourses';
$title = get_string('pcourses', 'theme_pinoverde');
$description = get_string('pcoursesdesc', 'theme_pinoverde');
$default = [];
$courses[0] = '';
$cnt = 0;
if ($ccc = get_courses('all', 'c.sortorder ASC', 'c.id,c.shortname,c.visible,c.category')) {
    foreach ($ccc as $cc) {
        if ($cc->visible == "0" || $cc->id == "1") {
            continue;
        }
        $cnt++;
        $courses[$cc->id] = $cc->shortname;
        // Set some courses for default option.
        if ($cnt < 8) {
            $default[] = $cc->id;
        }
    }
}
$coursedefault = implode(",", $default);
$setting = new admin_setting_configtext($name, $title, $description, $coursedefault);
$temp->add($setting);
$settings->add($temp);
