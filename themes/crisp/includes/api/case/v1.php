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
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::NOT_IMPLEMENTED, "Invalid Request Method", [], null, 405);
    exit;
}


if (!crisp\api\Phoenix::getCasePG($_GET["case"] ?? $this->Query)) {
    echo \crisp\core\PluginAPI::response(\crisp\core\Bitmask::INVALID_CASE, $_GET["case"] ?? $this->Query, []);
    return;
}



echo \crisp\core\PluginAPI::response(\crisp\core\Bitmask::REQUEST_SUCCESS, $_GET["case"] ?? $this->Query, \crisp\api\Phoenix::getCasePG($_GET["case"] ?? $this->Query));
=======
=======
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
=======
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8

switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        require_once __DIR__ . '/GET/v1.php';
        break;
    default:
        echo \crisp\core\PluginAPI::response(crisp\core\Bitmask::NOT_IMPLEMENTED, "Invalid Request Method", [], null, 405);
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
=======
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
=======
>>>>>>> 507d6597ea9696a56e529a04ca4501e515d611d8
