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
 * Settings for auth_openid.
 *
 * @package     auth_openid
 * @author      Donald Barrett <donald.barrett@learningworks.co.nz>
 * @copyright   2019 onwards, LearningWorks ltd
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// No direct access.
defined('MOODLE_INTERNAL') || die();

require_once("$CFG->dirroot/auth/openid/locallib.php");

// Only render for users that have the site config capability.
if ($hassiteconfig) {
    // Used for the component name in the get_string function.
    $componentname = 'auth_openid';

    // Container for the settings.
    $openidsettings = [];

    // User settings headers.
    $settingname = "$componentname/headingusersettings";
    $visiblename = get_string('auth_openid_user_settings', $componentname);
    $description = get_string('auth_openid_user_description', $componentname);
    $openidsettings[] = new admin_setting_heading($settingname, $visiblename, $description);

    // Allow account change.
    $settingname    = "{$componentname}/{$componentname}_allow_account_change";
    $visiblename    = get_string('allowaccountchange', $componentname);
    $description    = get_string('auth_openid_allow_account_change_key', $componentname);
    $default        = '';
    $openidsettings[] = new admin_setting_configcheckbox($settingname, $visiblename, $description, $default);

    // Allow multiple identities.
    $settingname    = "{$componentname}/{$componentname}_allow_multiple";
    $visiblename    = get_string('allowmultiple', $componentname);
    $description    = get_string('auth_openid_allow_multiple_key', $componentname);
    $default        = '';
    $openidsettings[] = new admin_setting_configcheckbox($settingname, $visiblename, $description, $default);

    // Limit to OpenID auth only.
    $settingname    = "{$componentname}/{$componentname}_limit_login";
    $visiblename    = get_string('openidloginonly', $componentname);
    $a              = new stdClass;
    $a->url         = $CFG->wwwroot .'/auth/openid/login.php?login=all';
    if (!empty(get_config($componentname, 'auth_openid_custom_login')) || file_exists(openid_login_file())) {
        $a->url .= '&openid=1';
    }
    $description    = get_string('auth_openid_limit_login', $componentname, $a);
    $default        = '';
    $openidsettings[] = new admin_setting_configcheckbox($settingname, $visiblename, $description, $default);

    // OpenID URL.
    $settingname    = "{$componentname}/{$componentname}_custom_login";
    $visiblename    = get_string('auth_openid_custom_login', $componentname);
    $fparam         = new stdClass;
    $fparam->file   = openid_login_file();
    $a              = new stdClass;
    $a->url         = "{$CFG->wwwroot}/auth/openid/login.php?openid=1";
    $a->customfile  = '';
    if (empty(get_config($componentname, 'auth_openid_custom_login') && file_exists(openid_login_file()))) {
        $a->customfile = get_string('openid_login_theme', 'auth_openid', $fparam);
    }
    $description    = get_string('auth_openid_custom_login_config', $componentname, $a);
    $default        = '';
    $openidsettings[] = new admin_setting_configtext($settingname, $visiblename, $description, $default);

    // Google Apps domain.
    $settingname    = "{$componentname}/{$componentname}_google_apps_domain";
    $visiblename    = get_string('auth_openid_google_apps_domain', $componentname);
    $description    = get_string('auth_openid_google_apps_config', $componentname);
    $default        = '';
    $openidsettings[] = new admin_setting_configtext($settingname, $visiblename, $description, $default);

    // Require confirmation when switching auth.
    $settingname    = "{$componentname}/{$componentname}_confirm_switch";
    $visiblename    = get_string('confirmswitchauth', $componentname);
    $description    = get_string('auth_openid_confirm_switch', $componentname);
    $default        = '';
    $openidsettings[] = new admin_setting_configcheckbox($settingname, $visiblename, $description, $default);

    // Send email when switching to OpenID.
    $settingname    = "{$componentname}/{$componentname}_email_on_change";
    $visiblename    = get_string('sendemailswitch', $componentname);
    $description    = get_string('auth_openid_email_on_change', $componentname);
    $default        = '';
    $openidsettings[] = new admin_setting_configcheckbox($settingname, $visiblename, $description, $default);

    // Allow new moodle account creation.
    $settingname    = "{$componentname}/{$componentname}_create_account";
    $visiblename    = get_string('allownewaccount', $componentname);
    $description    = get_string('auth_openid_create_account', $componentname);
    $default        = '';
    $openidsettings[] = new admin_setting_configcheckbox($settingname, $visiblename, $description, $default);

    // Match fields.
    $settingname    = "{$componentname}/{$componentname}_match_fields";
    $visiblename    = get_string('matchopenidfields', $componentname);
    $description    = get_string('auth_openid_match_fields_config', $componentname);
    $default        = '';
    $openidsettings[] = new admin_setting_configtext($settingname, $visiblename, $description, $default);

    // Non whitelisted servers.
    $settingname    = "{$componentname}/openid_non_whitelisted_status";
    $visiblename    = get_string('openid_non_whitelisted_status', $componentname);
    $description    = get_string('openid_non_whitelisted_info', $componentname);
    $confirmstring  = get_string('confirm', $componentname);
    $denystring     = get_string('deny', $componentname);
    $allowstring    = get_string('allow', $componentname);
    $choices        = [$confirmstring, $denystring, $allowstring];
    $default        = '';
    $openidsettings[] = new admin_setting_configselect($settingname, $visiblename, $description, $default, $choices);

    // Force OpenID users to main page on login.
    $settingname    = "{$componentname}/{$componentname}_clear_wantsurl";
    $visiblename    = get_string('forcemainsitepage', $componentname);
    $description    = get_string('auth_openid_clear_wantsurl_key', $componentname);
    $default        = '';
    $openidsettings[] = new admin_setting_configcheckbox($settingname, $visiblename, $description, $default);

    // Login form for returning users.
    $settingname    = "{$componentname}/{$componentname}_use_default_login_form";
    $visiblename    = get_string('auth_openid_use_default_login_form', $componentname);
    $description    = get_string('auth_openid_use_default_login_form_info', $componentname);
    $default        = '';
    $openidsettings[] = new admin_setting_configcheckbox($settingname, $visiblename, $description, $default);

    // Servers heading.
    $settingname = "$componentname/headingserversettings";
    $visiblename = get_string('auth_openid_servers_settings', $componentname);
    $toolurl     = new moodle_url('/admin/tool/openid/servers.php');
    $link        = html_writer::link($toolurl, get_string('clickhere', $componentname));
    $description = get_string('auth_openid_servers_description', $componentname). ' '.$link;
    $openidsettings[] = new admin_setting_heading($settingname, $visiblename, $description);

    // Add the settings to the settings page.
    foreach ($openidsettings as $setting) {
        $settings->add($setting);
    }
}
