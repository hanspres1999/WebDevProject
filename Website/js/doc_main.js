$(document).ready(function () {
    //initial
    $('#main-contents').load('doc_main/new_patient.html');
    //handle menu clicks
    $('ul#bar li a').click(function () {
        var page = $(this).attr('href');
        $('#main-contents').load('doc_main/' + page + '.html');
        return false;
    });
});