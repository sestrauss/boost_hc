<?php
// Every file should have GPL and copyright in the header
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

/*
 * version.php
 *
 * This template is based on Boost for use at Haveroford College. It's primary 
 * role is to customize the login page. Thanks to Andrea Kaldrovics at Bryn Mawr 
 * College for her help in developing this child theme. Thanks also to Kristian 
 * Ringer for his excellent explainations on YouTube.
 *
 * @package     theme_boost_hc
 * @copyright   2021, Haverford College
 * @author      Sharon Strauss
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */
 
defined('MOODLE_INTERNAL') || die();

$plugin->component = 'theme_boost_hc';
$plugin->version = 2021042301;
$plugin->release = 'v1.01';
$plugin->requires = 2020110900;
$plugin->supported = [310, 310];
$plugin->maturity = MATURITY_STABLE;
$plugin->dependencies = array('theme_boost' => 2020110900);
