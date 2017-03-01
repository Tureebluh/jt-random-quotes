var firstRun = true;

$('#quoteGenerator').on('click', function(e) {
    e.preventDefault();
	if(!firstRun){
		fadeOutOpacity();
	} else {
		getQuote();
		firstRun = false;
	}
	
});
function fadeInOpacity(){
	$(".quote").animate({opacity: 1}, 2000);
}
function fadeOutOpacity(){
	$(".quote").animate({opacity: 0}, 2000, function(){
		getQuote();
	});
}	
function getQuote(){
	$.ajax( {
		url: 'http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1',
		success: function(data) {
			var post = data.shift();
			$('#quote-author').text(post.title.replace(/\W /g, ''));
			$('#quote-content').html("<span id=\"lQuotation\">&#8220 </span>" + post.content + "<span id=\"rQuotation\">&#8221</span>");

			// If the Source is available, display it. Otherwise hide it.
			if (typeof post.custom_meta !== 'undefined' && typeof post.custom_meta.Source !== 'undefined') {
			$('#quote-source').html('Source: ' + post.custom_meta.Source);
			} else {
			$('#quote-source').text('');
			}
			fadeInOpacity();
		},
		cache: false
	});
}
