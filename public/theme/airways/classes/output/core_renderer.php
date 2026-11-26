<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

namespace theme_airways\output;

defined('MOODLE_INTERNAL') || die();

/**
 * Core renderer for Los Angeles Airways branding.
 *
 * @package    theme_airways
 * @copyright  2026 Los Angeles Airways
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class core_renderer extends \theme_boost\output\core_renderer {

    /**
     * Return the supplied Airways logo for page headers.
     *
     * @param int|null $maxwidth Maximum width requested by the caller.
     * @param int|null $maxheight Maximum height requested by the caller.
     * @return \moodle_url
     */
    public function get_logo_url($maxwidth = null, $maxheight = 200) {
        return $this->image_url('logo', 'theme');
    }

    /**
     * Return the supplied Airways logo for the compact navigation bar.
     *
     * @param int|null $maxwidth Maximum width requested by the caller.
     * @param int|null $maxheight Maximum height requested by the caller.
     * @return \moodle_url
     */
    public function get_compact_logo_url($maxwidth = 300, $maxheight = 300) {
        return $this->image_url('logo', 'theme');
    }
}
