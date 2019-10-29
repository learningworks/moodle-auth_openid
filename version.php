<?php
/**
 * OpenID module version information
 *
 * @author Brent Boghosian <brent.boghosian@remote-learner.net>
 * @copyright Copyright (c) 2011 Onwards Remote-Learner.net Inc. (http://www.remote-learner.net)
 * @author Stuart Metcalfe <info@pdl.uk.com>
 * @copyright Copyright (c) 2007 Canonical
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package openid
 */

$plugin->version  = 2019102503;  // The current module version (Date: YYYYMMDDXX)
$plugin->requires = 2015101600;  // Requires this Moodle version
$plugin->release = '3.3.0.1';    // ELIS Component Version
$plugin->component = 'auth_openid';
$plugin->dependencies = [
    'tool_openid' => ANY_VERSION
];