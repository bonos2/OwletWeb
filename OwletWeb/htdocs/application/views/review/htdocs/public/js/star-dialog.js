$('#submit').click(function(){
	$('#star-rate').dialogBox({
		hasClose: true,
		hasMask: true,
		title: '뱔점을 주세요!',
		content: 'star star..'
	});
});