<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/* 
=======
/*
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
=======
/*
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
=======
/*
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
 * Copyright (C) 2021 Justin René Back <justin@tosdr.org>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: ToS;DR\r\n"
    ]
];

$context = stream_context_create($opts);

$Response = json_decode(file_get_contents("https://api.github.com/repos/tosdr/browser-extensions/releases/latest", false, $context));

if (!isset($this->Query) || empty($this->Query)) {
    echo \crisp\core\PluginAPI::response(\crisp\core\Bitmask::NONE, "Latest GitHub Release", ["release" => $Response->tag_name]);
    exit;
} else {

    $Version = $this->Query;
    $Latest = $Response->tag_name;
    if (\crisp\api\Helper::startsWith($this->Query, "v")) {
        $Version = substr($Version, 1);
    }
    if (\crisp\api\Helper::startsWith($Latest, "v")) {
        $Latest = substr($Latest, 1);
    }

    echo \crisp\core\PluginAPI::response(\crisp\core\Bitmask::NONE, "Comparing versions", ["latest" => $Latest, "given" => $Version, "substring" => \crisp\api\Helper::startsWith($this->Query, "v"), "compare" => version_compare($Latest, $Version)]);
=======
=======
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
=======
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
$Interface = "default";

if (is_array($GLOBALS["route"]->GET)) {
    $Interface = array_key_first($GLOBALS["route"]->GET);

    $this->Query = $GLOBALS["route"]->GET[$Interface];
    if (strpos($GLOBALS["route"]->GET[$Interface], ".json")) {
        $this->Query = substr($this->Query, 0, -5);
    }
}

switch ($Interface) {
    default:
    case "v1":
        require_once __DIR__ . '/updatecheck/v1.php';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
=======
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
=======
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
}