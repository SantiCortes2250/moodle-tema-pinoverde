<?php

defined('MOODLE_INTERNAL') || die;

$plugin->version    = 2025071901; // This component release level.
$plugin->maturity   = MATURITY_STABLE; // This version's maturity level.
$plugin->release    = 'v5.0.1'; // This version's release version.
$plugin->requires   = 2024042200; // This version's moodle require release.
$plugin->component  = 'theme_pinoverde'; // This component type_name.
$plugin->dependencies = [
    'theme_boost'  => 2025041400, // This version depended the component and its require release.
];
