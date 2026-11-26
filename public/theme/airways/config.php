<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

/**
 * Los Angeles Airways theme configuration.
 *
 * @package    theme_airways
 * @copyright  2026 Los Angeles Airways
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'airways';
$THEME->parents = ['boost'];
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->usefallback = true;
$THEME->scss = function($theme) {
    return theme_boost_get_main_scss_content($theme) . file_get_contents(__DIR__ . '/scss/airways.scss');
};
$THEME->prescsscallback = 'theme_airways_get_pre_scss';
$THEME->extrascsscallback = 'theme_airways_get_extra_scss';
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
