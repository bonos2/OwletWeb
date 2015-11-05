		
		<footer id="footer">
			<p>&copy; Company 2014</p>
		</footer>
	</div>
	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/public/libs/bootstrap-3.3.5/dist/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	<script defer src="/public/js/jquery.flexslider.js"></script>
	<script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<script type="text/javascript">
	$(document).ready(function() {
	$('#submit').on('click', function(e) {
		e.preventDefault();


		var name,score,content, code;
		name = $('#username').val();
// 		score = $('#input-reviewer-score').val();
		score = 3;
		content = $('#message').val();
		code = "<?=$code?>";
		// ajax
		$.ajax({
			type: 'POST',
			url: 'http://127.0.0.1/review/insert',
			data: {
				_name: name,
				_score: score,
				_content: content,
				_code : code
			},
			success: function(msg) {
			},
			error : function(xhr, status, error) {
			},

			dataType: 'json'
		});
		location.href='http://127.0.0.1/review/init/<?=$code?>';
	});
	$('#updateButton').on('click',function(e){
		
	});
});
	</script>

	<!-- Optional FlexSlider Additions -->
	<script src="/public/js/jquery.easing.js"></script>
	<script src="/public/js/jquery.mousewheel.js"></script>
	<script defer src="/public/js/demo.js"></script>

	
</body>
</html>