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
 * OU multiple response question type version file.
 *
 * @package   qtype_answersselect
 * @copyright 2008 The Open University & 2021 Joseph R�zeau
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$plugin->version   = 2021071100;
$plugin->requires  = 2020061500;
$plugin->component = 'qtype_answersselect';
$plugin->maturity  = MATURITY_ALPHA;
$plugin->release   = '0.1 for Moodle 3.9+';

$plugin->dependencies = array(
    'qtype_multichoice' => 2020061500,
);

$plugin->outestssufficient = true;