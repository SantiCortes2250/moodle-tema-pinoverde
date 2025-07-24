<?php


defined('MOODLE_INTERNAL') || die;

// General section.
$temp = new admin_settingpage('theme_pinoverde_header', get_string('headerheading', 'theme_pinoverde'));

// Nav style select option.
$name = 'theme_pinoverde/navstyle';
$title = get_string('navstyle', 'theme_pinoverde');
$description = get_string('navstyle_desc', 'theme_pinoverde');
$default = LOGO;
$choices = [
    LOGO => get_string('logo', 'theme_pinoverde'),
    SITENAME => get_string('sitename', 'theme_pinoverde'),
    LOGOANDSITENAME => get_string('logoandsitename', 'theme_pinoverde'),
];
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Logo file upload option.
$name = 'theme_pinoverde/logo';
$title = get_string('logo', 'theme_pinoverde');
$description = get_string('logodesc', 'theme_pinoverde');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Favicon upload option.
$name = 'theme_pinoverde/favicon';
$title = get_string('favicon', 'theme_pinoverde', null, true);
$description = get_string('favicon_desc', 'theme_pinoverde', null, true);
$setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon', 0);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Primary pattern color select option.
$name = 'theme_pinoverde/primarycolor';
$title = get_string('primarycolor', 'theme_pinoverde');
$description = get_string('primarycolor_desc', 'theme_pinoverde');
$default = "";
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Secondary pattern color select option.
$name = 'theme_pinoverde/secondarycolor';
$title = get_string('secondarycolor', 'theme_pinoverde');
$description = get_string('secondarycolor_desc', 'theme_pinoverde');
$default = "";
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Header style select option.
$name = 'theme_pinoverde/themestyleheader';
$title = get_string('themestyleheader', 'theme_pinoverde');
$description = get_string('themestyleheader_desc', 'theme_pinoverde');
$default = THEMEBASED;
$choices = [
    THEMEBASED => get_string('themebased', 'theme_pinoverde'),
    MOODLEBASED => get_string('moodlebased', 'theme_pinoverde'),
];
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Select the size for site inner pages.
$name = 'theme_pinoverde/pagesize';
$title = get_string('pagesize', 'theme_pinoverde');
$description = get_string('pagesize_desc', 'theme_pinoverde');
$default = '1';
$choices = [
    'container' => get_string('container', 'theme_pinoverde'),
    'default' => get_string('moodledefault', 'theme_pinoverde'),
    'custom' => get_string('custom', 'theme_pinoverde'),

];
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Give a custom size for site inner pages.
$name = 'theme_pinoverde/pagesizecustomval';
$title = get_string('pagesizecustomval', 'theme_pinoverde');
$description = get_string('pagesizecustomval_desc', 'theme_pinoverde');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_INT);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Content font size.
$name = 'theme_pinoverde/fontsize';
$title = get_string('fontsize', 'theme_pinoverde');
$description = get_string('fontsize_desc', 'theme_pinoverde');
$default = THEMEDEFAULT;
$sizes = [
    THEMEDEFAULT => get_string('default'),
    SMALL => get_string('small', 'theme_pinoverde'),
    MEDIUM => get_string('medium', 'theme_pinoverde'),
    LARGE => get_string('large', 'theme_pinoverde'),
];
$setting = new admin_setting_configselect($name, $title, $description, $default, $sizes);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Select the available course type option.
$name = 'theme_pinoverde/availablecoursetype';
$title = get_string('availablecoursetype', 'theme_pinoverde');
$description = get_string('availablecoursetype_desc', 'theme_pinoverde');
$default = CAROUSEL;
$choices = [
    CAROUSEL => get_string('carousel', 'theme_pinoverde'),
    MOODLEBASED => get_string('moodlebased', 'theme_pinoverde'),
];
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Select the combo list box type option.
$name = 'theme_pinoverde/comboListboxType';
$title = get_string('comboListboxType', 'theme_pinoverde');
$description = get_string('comboListboxType_desc', 'theme_pinoverde');
$default = COLLAPSE;
$choices = [
    EXPAND => get_string('expand', 'theme_pinoverde'),
    COLLAPSE => get_string('collapse', 'theme_pinoverde'),
];
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Background image setting.
$name = 'theme_boost/backgroundimage';
$title = get_string('backgroundimage', 'theme_boost');
$description = get_string('backgroundimage_desc', 'theme_pinoverde');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Uploaded option for login page background image.
$name = 'theme_pinoverde/loginbg';
$title = get_string('loginbg', 'theme_pinoverde');
$description = get_string('loginbg_desc', 'theme_pinoverde');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbg', 0);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Enable or disable option for "Back to top" option.
$name = 'theme_pinoverde/backToTop_status';
$title = get_string('backToTop_status', 'theme_pinoverde');
$description = get_string('backToTop_statusdesc', 'theme_pinoverde');
$default = YES;
$choices = [
    YES => get_string('yes'),
    NO => get_string('no'),
];
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Custom CSS file.
$name = 'theme_pinoverde/customcss';
$title = get_string('customcss', 'theme_pinoverde');
$description = get_string('customcssdesc', 'theme_pinoverde');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Create theme presets heading.
$name = 'theme_pinoverde/presetheading';
$title = get_string('presetheading', 'theme_pinoverde', null, true);
$setting = new admin_setting_heading($name, $title, null);
$temp->add($setting);

// Replicate the preset setting from theme_boost, but use our own file area.
$name = 'theme_pinoverde/preset';
$title = get_string('preset', 'theme_boost', null, true);
$description = get_string('preset_desc', 'theme_boost', null, true);
$default = 'default.scss';

$context = context_system::instance();
$fs = get_file_storage();
$files = $fs->get_area_files($context->id, 'theme_pinoverde', 'preset', 0, 'itemid, filepath, filename', false);

$choices = [];
foreach ($files as $file) {
    $choices[$file->get_filename()] = $file->get_filename();
}
$choices['default.scss'] = 'pinoverde';
$choices['eguru'] = 'Eguru';
$choices['klass'] = 'Klass';
$choices['enlightlite'] = 'Enlightlite';

$setting = new admin_setting_configthemepreset($name, $title, $description, $default, $choices, 'pinoverde');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Replicate the preset files setting from theme_boost.
$name = 'theme_pinoverde/presetfiles';
$title = get_string('presetfiles', 'theme_boost', null, true);
$description = get_string('presetfiles_desc', 'theme_boost', null, true);
$setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
        ['maxfiles' => 20, 'accepted_types' => ['.scss']]);
$temp->add($setting);
$settings->add($temp);
