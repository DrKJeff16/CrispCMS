/*jslint browser: true*/
/*global $, jQuery, alert*/

/*! 
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

'use strict';

function delay(fn, ms) {
    var timer = 0;
    return function (args) {
        clearTimeout(timer);
        timer = setTimeout(fn.bind(this, args), ms || 0);
    };
}
$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    $("#ratingsearch").on('keyup', delay(function () {
        $('body').tooltip('dispose');
        $("#searchLoading").show();
        $.get("/api/search/v3/?query=" + this.value, function (data) {
            $("#services").html(data.parameters.grid);
            $("#searchLoading").hide();
            $('[data-toggle="tooltip"]').tooltip();
        });
    }, 500));
});