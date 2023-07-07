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
 * This template is based on Boost for use at Haverford College. Its primary 
 * role is to customize the login page. Thanks to Andrea Kaldrovics at Bryn Mawr 
 * College for her help in developing this child theme. Thanks also to Kristian 
 * Ringer for his excellent explanations on YouTube, https://youtu.be/WLa1ZS3kdWU.
 *
 * @package     theme_boost_hc
 * @copyright   2023, Haverford College
 * @author      Sharon Strauss
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */
 
defined('MOODLE_INTERNAL') || die();

$plugin->component = 'theme_boost_hc';
$plugin->version = 2023041201;
$plugin->release = 'v4.1.1';
$plugin->requires = '2022111800';   
$plugin->dependencies = [
    'theme_boost' => '2022112800'
     ];
