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
 * Automatically generated strings for Moodle 2.1 installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Administreerimiskataloog';
$string['availablelangs'] = 'Saadaval keelte nimekiri';
$string['chooselanguagehead'] = 'Keele valik';
$string['chooselanguagesub'] = 'Palun vali keel installeerimiseks. Seda keelt kasutatakse samuti vaikimisi keelena saidil, kuigi seda võib muuta hiljem.';
$string['clialreadyinstalled'] = 'Fail config.php juba eksisteerib, palun kasuta admin/cli/upgrade.php kui soovid uuendada oma saiti.';
$string['cliinstallheader'] = 'Moodle {$a} käsurea põhine installeerimise programm';
$string['databasehost'] = 'Andmebaasi host';
$string['databasename'] = 'Andmebaasi nimi';
$string['databasetypehead'] = 'Vali andmebaasi draiver';
$string['dataroot'] = 'Andmete kataloog';
$string['datarootpermission'] = 'Andmete kataloogide õigus';
$string['dbprefix'] = 'Tabeli eesliide';
$string['dirroot'] = 'Moodle kataloog';
$string['environmenthead'] = 'Keskkonna kontrollimine...';
$string['environmentsub2'] = 'Iga Moodle väljalaskel on oma minimaalne PHP versiooni nõue ja kohustuslikud PHP laiendused.
Täielik keskkonna kontroll tehakse enne iga installeerimist ja uuendamist. Palun võta ühendust serveri administraatoriga, kui sa ei sa kuidas installeerida või võimaldada PHP laiendusi.';
$string['errorsinenvironment'] = 'Keskkonna sobivuse kontroll ebaõnnestus!';
$string['installation'] = 'Installeerimine';
$string['langdownloaderror'] = 'Kahjuks keelt "{$a}" ei saanud alla tõmmata. Paigaldamine jätkub inglise keeles.';
$string['memorylimithelp'] = '<p>PHP mälu limiit sinu serveri jaoks on hetkel {$a}.</p>
<p>See võib hiljem tekitada Moodle\'il mäluprobleeme, eriti kui sul on palju mooduleid ja/või kasutajaid.
</p>
<p>Me soovitame, et sa konfigureeriksid PHP kõrgema limiidi peale, näiteks 40M. Selle teostamiseks on mitu viisi:</p>
<ol>
<li>Kui võimalik, siis kompileeri PHP uuesti parameetriga <i>--enable-memory-limit</i>.
See lubab Moodle\'il ise mälu limiiti määrata.</li>
<li>Kui sul on juurdepääs oma php.ini failile, siis saad muuta seal <b>memory_limit</b> väärtuseks nt. 40M. Kui sul ei ole juurdepääsu, siis võiksid paluda administraatoril seda teha.</li>
<li>Mõnedes PHP-serverites saad luua Moodle kataloogi .htaccess faili, mis sisaldab rida:<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Kuigi mõnedes serverites tõkestab see <b>kõigi</b> PHP lehtede tööd (sa näed veateateid, kui vaatad lehti), nii et pead eemaldama .htaccess faili.</p></li>
</ol>';
$string['paths'] = 'Rajad';
$string['pathserrcreatedataroot'] = 'Andmete kataloogi ({$a->dataroot}) ei saa installeerija luua.';
$string['pathshead'] = 'Radade kinnitused';
$string['pathsrodataroot'] = 'Andmete juurkataloog (Dataroot) ei ole kirjutatav.';
$string['pathsroparentdataroot'] = 'Ülemkataloog ({$a->parent}) ei ole kirjutatav. Installeerija ei saanud andmete kataloogi ({$a->dataroot}) luua.';
$string['pathssubadmindir'] = 'Väga vähesed veebihostid kasutavad /admin spetsiaalse URL-na, et pääseda ligi kontrollpaneelile või millegile sarnasele. Kahjuks on see konfliktis Moodle administreerimislehtedega. Sa saad olukorda parandada, kui nimetad kataloogi admin ümber oma üaigalduses ning kirjutad selle uue nime siia. Näiteks: <em>moodleadmin</em>. See parandab administreerimisliidese lingid Moodle\'s.';
$string['pathssubdataroot'] = 'Sa pead näitama koha, kuhu Moodle saaks salvestada üles laetud failid. See kataloog peab olema loetav JA KIRJUTATAV veebiserveri kasutaja poolt (tavaliselt \'nobody\' or \'apache\'), samas see kataloog ei tohiks olla ligipääsetav otse veebi kaudu. Kui kataloogi ei eksisteeri, siis installeerija püüab selle ise luua.';
$string['pathssubdirroot'] = 'Täistee Moodle paigalduse kataloogile.';
$string['pathssubwwwroot'] = 'Täielik veebiaadress, kust kaudu Moodle\'le ligi pääsetakse.
Ei ole võimalik kasutada mitmest kohast kohast ligipääsu.
Kui Su sait omab mitut avalikku aadress, siis pead seadistama ümbersuunamised kõikidelt teistest aadressidelt.
Kui Su sait on ligipääsetav nii Internetist kui intranetist (sisevõrgust), siis kasuta Interneti ehk avalikku aadressi ja seadista DNS sellisellt, et intraneti kasutajad kasutaksid ka avalikku aadressi.
Kui aadress pole korrektne, siis palun muuda URL oma brauseris, et taasalustada installeerimist erineva väärtusega.';
$string['pathsunsecuredataroot'] = 'Andmete juurkataloogi asukoht pole turvamine';
$string['pathswrongadmindir'] = 'Admin kataloogi ei eksisteeri';
$string['phpextension'] = '{$a} PHP laiendus';
$string['phpversion'] = 'PHP versioon';
$string['phpversionhelp'] = '<p>Moodle vajab vähemalt PHP versiooni 4.3.0 või 5.1.0 (5.0.x-ga on terve rida teada probleeme).</p>
<p>Sinu jooksev versioon on {$a}</p>
<p>Sa pead oma PHP-d uuendama või kolima hosti, kus on uuem PHP versioon!
(5.0.x sa võid ka minna tagasi versioonile 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Sa näed seda lehte, sest oled edukalt installeerinud ja käivitanud <strong>{$a->packname} {$a->packversion}</strong> paketi Sinu arvutis. Õnnitleme!';
$string['welcomep30'] = 'See <strong>{$a->installername}</strong> väljalase rakendusi loomaks keskkonda, millel <strong>Moodle</strong> hakkab will operate, namely:';
$string['welcomep40'] = 'Pakett sisaldab ka <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Kasutamaks kõiki selle rakendusi selles paketis on kaetud nende vastavad litsentsid. Täielik <strong>{$a->installername}</strong> pakett on <a href="http://www.opensource.org/docs/definition_plain.html">avatud lähtekoodil</a> ja jaotatud <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> litsentsi alusel.';
$string['welcomep60'] = 'Järgnevatel lehtedel juhitakse sind läbi mõnede lihtsate sammude seadistamaks ja seadmaks üles <strong>Moodle</strong> oma arvutis. Sa võid nõustuda vaikeväärtustega või fakultatiivselt täiendada vastavalt oma vajadustele.';
$string['welcomep70'] = 'Vajuta "Järgmine" nuppu all jätkamaks <strong>Moodle</strong> paigaldamisega.';
$string['wwwroot'] = 'Veebiaadress';
