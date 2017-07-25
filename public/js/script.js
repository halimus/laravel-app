/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $('.showdiv').click(function () {
        var id = $(this).attr('rel');
        $('div[id^="div-"]').hide();
        $('#div-'+id).show();
        return false;
    });

});

