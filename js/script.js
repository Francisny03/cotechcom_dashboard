	
new DataTable('#example');

$(document).ready(function() {
    // Loop through each span with class starting with 'p'
    $('span[class^="p"]').each(function() {
        var spanClass = $(this).attr('class');
        // Find the corresponding menu item and replace the class with 'active'
        $('.liens .' + spanClass).addClass('active').removeClass(spanClass);
    });
});