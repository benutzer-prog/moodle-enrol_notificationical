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
 * Notificationical enrolment plugin.
 *
 * This plugin notifies users when an event occurs on their enrolments (enrol, unenrol, update enrolment)
 *
 * @package    enrol_notificationical
 * @copyright  based on the work by 2017 e-ABC Learning
 * @copyright  2019 by Thomas Winkler, Wunderbyte GmbH
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Osvaldo Arriola <osvaldo@e-abclearning.com>
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    /* Manage user notificationical-enrolments. */
    'enrol/notificationical:manage' => array(

        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW,
        )
    ),
    'enrol/notificationical:config' => array(

        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
        )
    ),
);
