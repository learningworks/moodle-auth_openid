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
 * Upgrade file for auth_openid.
 *
 * @package     auth_openid
 * @author      Donald Barrett <donald.barrett@learningworks.co.nz>
 * @copyright   2019 onwards, LearningWorks ltd
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// No direct access.
defined('MOODLE_INTERNAL') || die();

function xmldb_auth_openid_upgrade($oldversion) {
    if ($oldversion < 2019102500) {
        upgrade_fix_config_auth_plugin_names('openid');
        upgrade_plugin_savepoint(true, 2019102500, 'auth', 'openid');
    }
    if ($oldversion < 2019102505) {
        set_config('auth_openid_association_cleanup_frequency', 12);
        upgrade_plugin_savepoint(true, 2019102505, 'auth', 'openid');
    }
    return true;
}