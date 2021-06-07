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
 * lib.php
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
 
// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();
// We will add callbacks here as we add features to our theme.
function theme_boost_hc_get_main_scss_content($theme) {                                                                                
    global $CFG;                                                                                                                    
 
    $scss = '';                                                                                                                     
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;                                                 
    $fs = get_file_storage();                                                                                                       
 
    $context = context_system::instance();                                                                                          
    if ($filename == 'default.scss') {                                                                                              
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.                      
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');                                        
    } else if ($filename == 'plain.scss') {                                                                                         
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.                      
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/plain.scss');                                          
 
    } else if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_boost_hc', 'preset', 0, '/', $filename))) {              
        // This preset file was fetched from the file area for theme_boost_hc and not theme_boost (see the line above).                
        $scss .= $presetfile->get_content();                                                                                        
    } else {                                                                                                                        
        // Safety fallback - maybe new installs etc.                                                                                
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');                                        
    }                                                                                                                                       
 
    return $scss;                                                                                                                   
}