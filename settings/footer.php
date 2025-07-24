<?php

defined('MOODLE_INTERNAL') || die;

// Footer.
$temp = new admin_settingpage('theme_pinoverde_footer', get_string('footerheading', 'theme_pinoverde'));

// Footer general block heading.
$name = 'theme_pinoverde_footergeneralheading';
$heading = get_string('footerblockgeneral', 'theme_pinoverde');
$information = '';
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Footer background image file setting.
$name = 'theme_pinoverde/footerbgimg';
$title = get_string('footerbgimg', 'theme_pinoverde');
$description = get_string('footerbgimgdesc', 'theme_pinoverde');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'footerbgimg');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Footer background Overlay Opacity.
$name = 'theme_pinoverde/footerbgOverlay';
$title = get_string('footerbgOverlay', 'theme_pinoverde');
$description = get_string('footerbgOverlay_desc', 'theme_pinoverde');
$opacity = [];
$opacity = array_combine(range(0, 1, 0.1 ), range(0, 1, 0.1 ));
$setting = new admin_setting_configselect($name, $title, $description, '0.4', $opacity);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Copyright.
$name = 'theme_pinoverde/copyright_footer';
$title = get_string('copyright_footer', 'theme_pinoverde');
$description = '';
$default = get_string('copyright_default', 'theme_pinoverde');
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Footer Block 1 heading.
$name = 'theme_pinoverde_footerblock1heading';
$heading = get_string('footerblock', 'theme_pinoverde').' 1 ';
$information = '';
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Footer block 1 status (enable / disable) option.
$name = 'theme_pinoverde/footerb1_status';
$title = get_string('status', 'theme_pinoverde');
$description = get_string('fblock_statusdesc', 'theme_pinoverde');
$default = YES;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Footer block 1 title.
$name = 'theme_pinoverde/footerbtitle1';
$title = get_string('title', 'theme_pinoverde');
$description = get_string('footerbtitledesc', 'theme_pinoverde');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Enable and Disable footer logo.
$name = 'theme_pinoverde/footlogostatus';
$title = get_string('footerenable', 'theme_pinoverde');
$description = '';
$default = YES;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Footer Logo file setting.
$name = 'theme_pinoverde/footerlogo';
$title = get_string('footerlogo', 'theme_pinoverde');
$description = get_string('footerlogodesc', 'theme_pinoverde');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'footerlogo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Footer content.
$name = 'theme_pinoverde/footnote';
$title = get_string('footnote', 'theme_pinoverde');
$description = get_string('footnotedesc', 'theme_pinoverde');
$default = get_string('footnotedefault', 'theme_pinoverde');
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Footer Block 2 heading.
$name = 'theme_pinoverde_footerblock2heading';
$heading = get_string('footerblock', 'theme_pinoverde').' 2 ';
$information = '';
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Footer block 2 status (enable / disable) option.
$name = 'theme_pinoverde/footerb2_status';
$title = get_string('status', 'theme_pinoverde');
$description = get_string('fblock_statusdesc', 'theme_pinoverde');
$default = YES;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Footer block 2 title.
$name = 'theme_pinoverde/footerbtitle2';
$title = get_string('title', 'theme_pinoverde');
$description = get_string('footerbtitledesc', 'theme_pinoverde');
$default = 'lang:footerbtitle2default';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// INFO Link.
$name = 'theme_pinoverde/infolink';
$title = get_string('infolink', 'theme_pinoverde');
$description = get_string('infolink_desc', 'theme_pinoverde');
$default = get_string('infolinkdefault', 'theme_pinoverde');
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);

// Footer Block 3 heading.
$name = 'theme_pinoverde_footerblock3heading';
$heading = get_string('footerblock', 'theme_pinoverde').' 3 ';
$information = '';
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Footer block 3 status ( enable / diasble) option.
$name = 'theme_pinoverde/footerb3_status';
$title = get_string('status', 'theme_pinoverde');
$description = get_string('fblock_statusdesc', 'theme_pinoverde');
$default = YES;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Footer block 3 title.
$name = 'theme_pinoverde/footerbtitle3';
$title = get_string('title', 'theme_pinoverde');
$description = get_string('footerbtitledesc', 'theme_pinoverde');
$default = 'lang:footerbtitle3default';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Address.
$name = 'theme_pinoverde/address';
$title = get_string('address', 'theme_pinoverde');
$description = '';
$default = get_string('defaultaddress', 'theme_pinoverde');
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Email ID.
$name = 'theme_pinoverde/emailid';
$title = get_string('emailid', 'theme_pinoverde');
$description = '';
$default = get_string('defaultemailid', 'theme_pinoverde');
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Phone number.
$name = 'theme_pinoverde/phoneno';
$title = get_string('phoneno', 'theme_pinoverde');
$description = '';
$default = get_string('defaultphoneno', 'theme_pinoverde');
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Footer Block 4 heading.
$name = 'theme_pinoverde_footerblock4heading';
$heading = get_string('footerblock', 'theme_pinoverde').' 4 ';
$information = get_string('socialmediadesc', 'theme_pinoverde');
$setting = new admin_setting_heading($name, $heading, $information);
$temp->add($setting);

// Footer block 4 status.
$name = 'theme_pinoverde/footerb4_status';
$title = get_string('status', 'theme_pinoverde');
$description = get_string('fblock_statusdesc', 'theme_pinoverde');
$default = YES;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Footer block 4 Title.
$name = 'theme_pinoverde/footerbtitle4';
$title = get_string('title', 'theme_pinoverde');
$description = get_string('footerbtitledesc', 'theme_pinoverde');
$default = 'lang:footerbtitle4default';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Select the number of social media show on the footer.
$name = 'theme_pinoverde/numofsocialmedia';
$title = get_string('numofsocialmedia', 'theme_pinoverde');
$description = get_string('numofsocialmediadesc', 'theme_pinoverde');
$default = 4;
$choices = array_combine( range(1, 8), range(1, 8) );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

$numofsocialmedia = get_config('theme_pinoverde', 'numofsocialmedia');
for ($f = 1; $f <= $numofsocialmedia; $f++) {

    // Social media heading.
    $name = 'theme_pinoverde_socialmeida'.$f;
    $heading = get_string('socialmeida', 'theme_pinoverde', ['socialmedia' => $f]);
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Social media status (Enable or disable) option.
    $name = 'theme_pinoverde/socialmedia'.$f.'_status';
    $title = get_string('smediastatus', 'theme_pinoverde');
    $description = get_string('smediastatus_desc', 'theme_pinoverde');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Social media icon.
    $name = 'theme_pinoverde/socialmedia'.$f.'_icon';
    $title = get_string('icon', 'theme_pinoverde');
    $description = get_string('socialmediaicon_desc', 'theme_pinoverde');
    $default = get_string('socialmediaicon'.$f.'_default', 'theme_pinoverde');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Social link URL.
    $name = 'theme_pinoverde/socialmedia'.$f.'_url';
    $title = get_string('url', 'theme_pinoverde');
    $description = get_string('socialmediaurl_desc', 'theme_pinoverde');
    $default = get_string('socialmediaurl'.$f.'_default', 'theme_pinoverde');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Social link icon color.
    $name = 'theme_pinoverde/socialmedia'.$f.'_iconcolor';
    $title = get_string('iconcolor', 'theme_pinoverde');
    $description = get_string('socialmediaiconcolor_desc', 'theme_pinoverde');
    $default = get_string('socialmediaiconcolor'.$f.'_default', 'theme_pinoverde');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $temp->add($setting);
}
$settings->add($temp);
