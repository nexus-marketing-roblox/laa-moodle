<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

/**
 * Theme callbacks for Los Angeles Airways.
 *
 * @package    theme_airways
 * @copyright  2026 Los Angeles Airways
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Add the Airways palette before Boost compiles its Bootstrap styles.
 *
 * @param theme_config $theme The theme configuration.
 * @return string SCSS variables inherited by Boost.
 */
function theme_airways_get_pre_scss($theme) {
    return theme_boost_get_pre_scss($theme) . "\n" . '
$primary: #29b8d3;
$secondary: #1c4059;
$link-color: #087f9b;
$body-bg: #f3fbfd;
';
}

/**
 * Add the people image as a background on the login panel and site home.
 *
 * @param theme_config $theme The theme configuration.
 * @return string Additional SCSS for the Airways background image.
 */
function theme_airways_get_extra_scss($theme) {
    $scss = theme_boost_get_extra_scss($theme);
    $imageurl = $theme->image_url('people_background', 'theme')->out(false);
    $scss .= "\n";
    $scss .= 'body.pagelayout-login #page .login-layout-left {';
    $scss .= " background-image: linear-gradient(135deg, rgba(9, 57, 81, .30), rgba(30, 169, 198, .12)), url('{$imageurl}') !important;";
    $scss .= ' background-size: cover; background-position: center;';
    $scss .= '}';
    // Boost's default panel labels its stock illustration as AI-generated; this is user-supplied art.
    $scss .= 'body.pagelayout-login #page .login-layout-left::after { content: none; }';
    $scss .= 'body.pagelayout-frontpage #region-main {';
    $scss .= " background-image: linear-gradient(rgba(248, 253, 254, .88), rgba(248, 253, 254, .94)), url('{$imageurl}');";
    $scss .= ' background-size: cover; background-position: center; background-attachment: fixed;';
    $scss .= ' border: 1px solid #d4edf3; border-radius: 1rem; padding: 1rem;';
    $scss .= '}';
    $scss .= 'body.pagelayout-frontpage #region-main .block {';
    $scss .= ' background-color: rgba(255, 255, 255, .94); border: 1px solid #d8edf2; border-radius: .75rem;';
    $scss .= ' box-shadow: 0 .35rem 1.25rem rgba(23, 69, 91, .07);';
    $scss .= '}';
    return $scss;
}
