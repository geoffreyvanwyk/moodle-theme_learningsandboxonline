<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Learning Sandbox Online config.
 *
 * @package    theme_learningsandboxonline
 * @copyright  2024 Geoffrey Bernardo van Wyk <geoffrey@vanwyk.biz>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'learningsandboxonline';
$THEME->parents = ['boost'];
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->usefallback = true;
$THEME->enable_dock = false;
$THEME->yuicssmodules = [];
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->haseditswitch = true;
// This is the function that returns the SCSS source for the main file in our
// theme. We override the boost version because we want to allow presets
// uploaded to our own theme file area to be selected in the preset list.
$THEME->scss = function($theme) {
    return theme_learningsandboxonline_get_main_scss_content($theme);
};

