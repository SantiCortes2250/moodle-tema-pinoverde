<?php

function xmldb_theme_pinoverde_install() {
    global $CFG;

    if (method_exists('core_plugin_manager', 'reset_caches')) {
        core_plugin_manager::reset_caches();
    }

    $fs = get_file_storage();

        // Slider images.
        $i = 1;
        $fs = get_file_storage();
        $filerecord = new stdClass();
        $filerecord->component = 'theme_pinoverde';
        $filerecord->contextid = context_system::instance()->id;
        $filerecord->userid = get_admin()->id;
        $filerecord->filearea = 'slide1image';
        $filerecord->filepath = '/';
        $filerecord->itemid = 0;
        $filerecord->filename = 'slide1image.jpg';
        $fs->create_file_from_pathname($filerecord, $CFG->dirroot . '/theme/pinoverde/pix/home/slide1.jpg');

        // Logo image.
        $fs = get_file_storage();
        $filerecord = new stdClass();
        $filerecord->component = 'theme_pinoverde';
        $filerecord->contextid = context_system::instance()->id;
        $filerecord->userid = get_admin()->id;
        $filerecord->filearea = 'logo';
        $filerecord->filepath = '/';
        $filerecord->itemid = 0;
        $filerecord->filename = 'logo.png';
        $fs->create_file_from_pathname($filerecord, $CFG->dirroot . '/theme/pinoverde/pix/home/logo.png');

        // Footer logo image.
        $fs = get_file_storage();
        $filerecord = new stdClass();
        $filerecord->component = 'theme_pinoverde';
        $filerecord->contextid = context_system::instance()->id;
        $filerecord->userid = get_admin()->id;
        $filerecord->filearea = 'footerlogo';
        $filerecord->filepath = '/';
        $filerecord->itemid = 0;
        $filerecord->filename = 'footerlogo.png';
        $fs->create_file_from_pathname($filerecord, $CFG->dirroot . '/theme/pinoverde/pix/home/footerlogo.png');

        // Marketing spot image.
        $fs = get_file_storage();
        $filerecord = new stdClass();
        $filerecord->component = 'theme_pinoverde';
        $filerecord->contextid = context_system::instance()->id;
        $filerecord->userid = get_admin()->id;
        $filerecord->filearea = 'mspotmedia';
        $filerecord->filepath = '/';
        $filerecord->itemid = 0;
        $filerecord->filename = 'mspotmedia.png';
        $fs->create_file_from_pathname($filerecord, $CFG->dirroot . '/theme/pinoverde/pix/home/mspotmedia.png');
}
