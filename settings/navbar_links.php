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
 * Version details
 *
 * @package    theme_adaptable
 * @copyright  2019 Jeremy Hopkins (Coventry University)
 * @author     G J Barnard - {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

defined('MOODLE_INTERNAL') || die;

// Navbar links.
$temp = new admin_settingpage('theme_adaptable_navbar_links', get_string('navbarlinkssettings', 'theme_adaptable'));
if ($ADMIN->fulltree) {
    $temp->add(new admin_setting_heading('theme_adaptable_navbar', get_string('navbarlinksettingsheading', 'theme_adaptable'),
        format_text(get_string('navbarlinksettingsdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Help section.
    $temp->add(new admin_setting_heading('theme_adaptable_help_heading',
        get_string('headernavbarhelpheading', 'theme_adaptable'),
        format_text(get_string('headernavbarhelpheadingdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Enable help link.
    $name = 'theme_adaptable/enablehelp';
    $title = get_string('enablehelp', 'theme_adaptable');
    $description = get_string('enablehelpdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/helpprofilefield';
    $title = get_string('helpprofilefield', 'theme_adaptable');
    $description = get_string('helpprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/enablehelp2';
    $title = get_string('enablehelp', 'theme_adaptable');
    $description = get_string('enablehelpdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/helpprofilefield2';
    $title = get_string('helpprofilefield', 'theme_adaptable');
    $description = get_string('helpprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/helptarget';
    $title = get_string('helptarget', 'theme_adaptable');
    $description = get_string('helptargetdesc', 'theme_adaptable');
    $choices = array(
        '_blank' => get_string('targetnewwindow', 'theme_adaptable'),
        '_self' => get_string('targetsamewindow', 'theme_adaptable'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, '_blank', $choices);
    $temp->add($setting);
}

// Create page.
$ADMIN->add('theme_adaptable', $temp);
