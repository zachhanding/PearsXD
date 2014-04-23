$(document).ready(function() { 
	// update rendered pattern when user edits the textareas
	/*$('#markup textarea').live('keyup', function(e) {
		$('#pattern-wrap').html($(this).val());
	});
	$('#style textarea').live('keyup', function(e) {
		$('div.main style').html($(this).val());
	});
	
	// auto-select code in textarea when clipboard icon is clicked
	$('#markup a.clip').click(function(e){
		e.preventDefault();
        $('#markup textarea').select();
	});
	$('#style a.clip').click(function(e){
		e.preventDefault();
        $('#style textarea').select();
	});*/
	
	// expand/collapse side nav
	$('#nav-toggle').click(function(e) {
		e.preventDefault();
        $('body').toggleClass('expanded');
	});
    
    // expand/collapse side nav categories
    $('#nav h2 a').click(function(e){
        e.preventDefault();
        $(this).parent().next().slideToggle('fast');
    });
}); 