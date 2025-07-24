<?php

defined('MOODLE_INTERNAL') || die;

// Home page slider.
$temp = new admin_settingpage('theme_pinoverde_slideshow', get_string('slideshowheading', 'theme_pinoverde'));
$temp->add(new admin_setting_heading('theme_pinoverde_slideshow', get_string('slideshowheadingsub', 'theme_pinoverde'),
format_text(get_string('slideshowdesc', 'theme_pinoverde'), FORMAT_MARKDOWN)));

// Enable or disable option for slider show / hide in the home page.
$name = 'theme_pinoverde/toggleslideshow';
$title = get_string('toggleslideshow', 'theme_pinoverde');
$description = get_string('toggleslideshowdesc', 'theme_pinoverde');
$default = YES;
$choices = [
    YES => get_string('yes'),
    NO => get_string('no'),
];
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Enable or diable option for home page slider auto scroll.
$name = 'theme_pinoverde/autoslideshow';
$title = get_string('autoslideshow', 'theme_pinoverde');
$description = get_string('autoslideshowdesc', 'theme_pinoverde');
$default = YES;
$choices = [
    YES => get_string('yes'),
    NO => get_string('no'),
];
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Give interval time for home page slider.
$name = 'theme_pinoverde/slideinterval';
$title = get_string('slideinterval', 'theme_pinoverde');
$description = get_string('slideintervaldesc', 'theme_pinoverde');
$default = 3500;
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_INT);
$temp->add($setting);

// Select the overlay opacity value for the home page slider.
$name = 'theme_pinoverde/slideOverlay';
$title = get_string('slideOverlay', 'theme_pinoverde');
$description = get_string('slideOverlay_desc', 'theme_pinoverde');
$opacity = [];
$opacity = array_combine(range(0, 1, 0.1 ), range(0, 1, 0.1 ));
$setting = new admin_setting_configselect($name, $title, $description, '0.4', $opacity);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Select the number of slides show in the homepage.
$name = 'theme_pinoverde/numberofslides';
$title = get_string('numberofslides', 'theme_pinoverde');
$description = get_string('numberofslides_desc', 'theme_pinoverde');
$default = 3;
$choices = [
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => '10',
    11 => '11',
    12 => '12',
];
$temp->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

// Slideshow settings.
$numberofslides = get_config('theme_pinoverde', 'numberofslides');
for ($i = 1; $i <= $numberofslides; $i++) {

    // This is the descriptor for Slide.
    $name = 'theme_pinoverde/slide' . $i . 'info';
    $heading = get_string('slideno', 'theme_pinoverde', ['slide' => $i]);
    $information = get_string('slidenodesc', 'theme_pinoverde', ['slide' => $i]);
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable or disable option for slide show.
    $name = 'theme_pinoverde/slide' . $i .'status';
    $title = get_string('slideStatus', 'theme_pinoverde', ['slide' => $i]);
    $description = get_string('slideStatus_desc', 'theme_pinoverde', ['slide' => $i]);
    $default = YES;
    $choices = [
        YES => get_string('enable', 'theme_pinoverde'),
        NO => get_string('disable', 'theme_pinoverde'),
    ];
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // Slider image uploaded option.
    $name = 'theme_pinoverde/slide' . $i . 'image';
    $title = get_string('slideimage', 'theme_pinoverde');
    $description = get_string('slideimagedesc', 'theme_pinoverde');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide' . $i . 'image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable or disable option for SlideShow content.
    $name = 'theme_pinoverde/slide' . $i .'contentstatus';
    $title = get_string('slidecontentstatus', 'theme_pinoverde', ['slide' => $i]);
    $description = get_string('slidecontentstatus_desc', 'theme_pinoverde', ['slide' => $i]);
    $default = YES;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Give a caption for the home page slider.
    $name = 'theme_pinoverde/slide' . $i . 'caption';
    $title = get_string('slidecaption', 'theme_pinoverde');
    $description = get_string('slidecaptiondesc', 'theme_pinoverde');
    $default = get_string('slidecaptiondefault', 'theme_pinoverde', ['slideno' => sprintf('%02d', $i)]);
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $temp->add($setting);

    // Give a description for the home page slider.
    $name = 'theme_pinoverde/slide' . $i . 'desc';
    $title = get_string('slidedesc', 'theme_pinoverde');
    $description = get_string('slidedesctext', 'theme_pinoverde');
    $default = get_string('slidedescdefault', 'theme_pinoverde');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    // Give a text for the home page slider button.
    $name = 'theme_pinoverde/slide' . $i . 'btntext';
    $title = get_string('slidebtntext', 'theme_pinoverde');
    $description = get_string('slidebtntext_desc', 'theme_pinoverde');
    $default = 'lang:knowmore';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $temp->add($setting);

    // Give a url for the home page slider button.
    $name = 'theme_pinoverde/slide' . $i . 'btnurl';
    $title = get_string('slidebtnlink', 'theme_pinoverde');
    $description = get_string('slidebtnlink_desc', 'theme_pinoverde');
    $default = 'http://www.example.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Select the target of the button for the home page slider.
    $name = 'theme_pinoverde/slide' . $i . 'btntarget';
    $title = get_string('slidebtntarget', 'theme_pinoverde');
    $description = get_string('slidebtntarget_desc', 'theme_pinoverde', ['slide' => $i]);
    $default = NEWWINDOW;
    $choices = [
        SAMEWINDOW => get_string('sameWindow', 'theme_pinoverde'),
        NEWWINDOW => get_string('newWindow', 'theme_pinoverde'),
    ];
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // Give a content width for the home page slider.
    $name = 'theme_pinoverde/slide' . $i . 'contFullwidth';
    $title = get_string('slideCont_full', 'theme_pinoverde');
    $description = get_string('slideCont_fulldesc', 'theme_pinoverde');
    $default = "50";
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Select the content position option for the home page slider.
    $name = 'theme_pinoverde/slide' . $i . 'contentPosition';
    $title = get_string('slidecontent', 'theme_pinoverde', ['slide' => $i]);
    $description = get_string('slidecontentdesc', 'theme_pinoverde');
    $default = 'centerRight';
    $choices = [
        "topLeft" => get_string("topLeft", "theme_pinoverde"),
        "topCenter" => get_string("topCenter", "theme_pinoverde"),
        "topRight" => get_string("topRight", "theme_pinoverde"),
        "centerLeft" => get_string("centerLeft", "theme_pinoverde"),
        "center" => get_string("center", "theme_pinoverde"),
        "centerRight" => get_string("centerRight", "theme_pinoverde"),
        "bottomLeft" => get_string("bottomLeft", "theme_pinoverde"),
        "bottomCenter" => get_string("bottomCenter", "theme_pinoverde"),
        "bottomRight" => get_string("bottomRight", "theme_pinoverde"),
        ];
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);
}
/* Slideshow Settings End*/
$settings->add($temp);
