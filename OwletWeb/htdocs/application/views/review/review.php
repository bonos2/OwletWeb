
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
				<?php
				for($j = 0; $j < count ( $ImageArrayList ); $j ++) {
					echo "<li><img src=\"";
					echo $ImageArrayList [$j] ['url'];
					echo "\">";
				}
				?>
				
				</ul>
			</div>
		</section>
	</div>
</div>

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div id="text-info">
			<!--그냥 '리뷰'라고 텍스트 넣음-->
			리뷰
		</div>
		<div id="line-head"></div>
		<div id="container-reply">
			<form action="" method="post" name="responsive_form"
				id="responsive_form" autocomplete="off">
				<div class="responsive_form_container">
					<div class="input_label" id="input_label_un">ID</div>
					<input type="text" name="username" id="username" maxlength="10">
				</div>



				<div id="ops-star-container">
					<div class="star-text-con">
						<div class="ops" id="taste">맛</div>
						<div class="star-reply" id="taste-star">
							<input name="adv1" type="radio" class="star {split:2} required" />
							<input name="adv1" type="radio" class="star {split:2}" /> <input
								name="adv1" type="radio" class="star {split:2}" /> <input
								name="adv1" type="radio" class="star {split:2}" /> <input
								name="adv1" type="radio" class="star {split:2}" /> <input
								name="adv1" type="radio" class="star {split:2}"
								checked="checked" /> <input name="adv1" type="radio"
								class="star {split:2}" /> <input name="adv1" type="radio"
								class="star {split:2}" /> <input name="adv1" type="radio"
								class="star {split:2}" /> <input name="adv1" type="radio"
								class="star {split:2}" />
						</div>
					</div>
					<div class="star-text-con">
						<div class="ops" id="kindness">친절도</div>
						<div class="star-reply" id="kindness-star">
							<input name="adv2" type="radio" class="star {split:2} required" />
							<input name="adv2" type="radio" class="star {split:2}" /> <input
								name="adv2" type="radio" class="star {split:2}" /> <input
								name="adv2" type="radio" class="star {split:2}" /> <input
								name="adv2" type="radio" class="star {split:2}" /> <input
								name="adv2" type="radio" class="star {split:2}"
								checked="checked" /> <input name="adv2" type="radio"
								class="star {split:2}" /> <input name="adv2" type="radio"
								class="star {split:2}" /> <input name="adv2" type="radio"
								class="star {split:2}" /> <input name="adv2" type="radio"
								class="star {split:2}" />
						</div>
					</div>
					<div class="star-text-con">
						<div class="ops" id="mood">분위기</div>
						<div class="star-reply" id="mood-star">
							<input name="adv3" type="radio" class="star {split:2} required" />
							<input name="adv3" type="radio" class="star {split:2}" /> <input
								name="adv3" type="radio" class="star {split:2}" /> <input
								name="adv3" type="radio" class="star {split:2}" /> <input
								name="adv3" type="radio" class="star {split:2}" /> <input
								name="adv3" type="radio" class="star {split:2}"
								checked="checked" /> <input name="adv3" type="radio"
								class="star {split:2}" /> <input name="adv3" type="radio"
								class="star {split:2}" /> <input name="adv3" type="radio"
								class="star {split:2}" /> <input name="adv3" type="radio"
								class="star {split:2}" />
						</div>
					</div>
				</div>


				<!-- 패스워드 기능은 아직 구현하지 않는다. -->
				<!--         <div class="responsive_form_container">
		            <div class="input_label">Password</div>
		            <input type="password"  name="password" id="password">
		        </div> -->

				<div class="responsive_form_container">
					<div class="input_label">Review</div>
					<textarea name="message" id="message" maxlength="200"></textarea>
				</div>
				<input name="submit" id="submit" type="button" value="Submit">
				<!-- type=submit -->

			</form>

			<script src="/public/js/form-js.js"></script>
		</div>
		<div id="line-mid"></div>
		<ol data-role="listview" class="timeline" id="updates">

		<?php
		for($i = 0; $i < $DataArrayList->count (); $i ++) {
			echo "<li>";
			echo "<div class=\"col-md-4\">
					<!--리플 박스. 무지 많다..-->
					<div class=\"userIDReply\" id=\"testId1\">";
			echo $DataArrayList [$i] ['author'];
			echo "</div><div class=\"starReply\" id=\"testStar1\"><div class=\"tasteReply\">맛 : ";
			echo $DataArrayList [$i] ['star_good'];
			echo "</div><div class=\"kindnessReply\"> 친절도 : ";
			echo $DataArrayList [$i] ['star_service'];
			echo "</div><div class=\"moodReply\"> 분위기 : ";
			echo $DataArrayList [$i] ['star_mood'];
			echo "</div></div><div class=\"contentReply\" id=\"testCon1\">";
			echo $DataArrayList [$i] ['contents'];
			echo "</div><div class=\"timeReply\">";
			echo $DataArrayList [$i] ['reply_date'];
			echo "</div></div><div class=\"seperator\"></div>";
			echo "</li>";
		}
		
		?>
		</ol>