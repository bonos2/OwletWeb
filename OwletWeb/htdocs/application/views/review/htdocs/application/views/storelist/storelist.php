
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
				<?php for($i=0;$i<count($ImageArrayList);$i++){
					echo "<li><img src=\"" ;
					echo $ImageArrayList[$i]['url'];
					echo "\">/>";
				}?>
				
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
			<form id="form-reply" method="POST">
				<!--리플 폼: 입력 창, 버튼-->
				<div id="container-reviewer">
					<div id="reviewer-id">
						<label for="input-reviewer-id" id="id">ID</label> <input
							type="text" id="input-reviewer-id" maxlength="7"
							placeholder="7자 이내">
							<input
							type="text" id="input-reviewer-score" maxlength="20"
							placeholder="7자 이내">
					</div>
				</div>
				<div id="input-reply">
					<!--입력창-->
					<!-- <div id="container-textarea"> -->
					<textarea id="input-reply-textarea" maxlength="300"
						placeholder="300자 이내로 리뷰를 남겨주세요."></textarea>
					<!-- </div> -->
					<!-- <div id="container-submit-button"> -->
					<button id="submit-button">입력</button>
					<!-- </div> -->

				</div>
			</form>
		</div>
		<ol data-role="listview" class="timeline" id="updates">
		<?php 
		for($i=0;$i<$DataArrayList->count();$i++){
			echo"<li>";
			echo "<div class=\"col-md-4\">
				<div class=\"boxReply\" id=\"box-reply-1\">
					<!--리플 박스. 무지 많다..-->
					<div class=\"userIDReply\" id=\"testId1\">";
			echo $DataArrayList[$i]['author'];
			echo "</div><div class=\"starReply\" id=\"testStar1\"><div class=\"tasteReply\">맛 : ";
			echo $DataArrayList[$i]['star_taste'];
			echo "</div><div class=\"kindnessReply\"> 친절도 : ";
			echo $DataArrayList[$i]['star_service'];
			echo "</div><div class=\"moodReply\"> 분위기 : ";
			echo $DataArrayList[$i]['star_mood'];
			echo "</div></div><div class=\"contentReply\" id=\"testCon1\">";
			echo $DataArrayList[$i]['contents'];
			echo"</div>";
			echo "</div>";
			echo"</li>";
		}
		
		
		
		?>
		</ol>
			<div class="col-md-4">
				<div class="boxReply" id="box-reply-1">
					<!--리플 박스. 무지 많다..-->
					<div class="userIDReply" id="testId1">동서 보리</div>
					<div class="starReply" id="testStar1">
						<div class="tasteReply">맛: 4.0</div>
						<div class="kindnessReply">친절도: 4.5</div>
						<div class="moodReply">분위기: 3.6</div>
					</div>
					<div class="contentReply" id="testCon1">국가원로자문회의의 조직·직무범위 기타 필요한
						사항은 법률로 정한다. 계엄을 선포한 때에는 대통령은 지체없이 국회에 통고하여야 한다. 나는 헌법을 준수하고 국가를
						보위하며 조국의 평화적 통일과 국민의 자유와 복리의 증진 및 민족문화의 창달에 노력하여 대통령으로서의 직책을 성실히
						수행할 것을 국민 앞에 엄숙히 선서합니다.모든 국민은 직업선택의 자유를 가진다. 국가는 농수산물의 수급균형과 유통구조의
						개선에 노력하여 가격안정을 도모함으로써 농·어민의 이익을 보호한다. 모든 국민은 인간으로서의 존엄과 가치를 가지며,
						행복을 추구할 권리를 가진다. 국가는 개인이 가지는 불가침의 기본적 인권을 확인하고 이를 보장할 의무를 진다.</div>
					<!--리플 내용-->
					<div class="timeReply" hint="10월 28일 2015 07:22:40 GMT">어제</div>
					<!--리플 시간-->
					<div class="seperator"></div>
					<!--리플 구분-->
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxReply" id="box-reply-2">
					<div class="userIDReply" id="testId1">제트스트림</div>
					<div class="starReply" id="testStar1">
						<div class="tasteReply">맛: 2.3</div>
						<div class="kindnessReply">친절도: 3.5</div>
						<div class="moodReply">분위기: 3.6</div>
					</div>
					<div class="contentReply">제1항의 탄핵소추는 국회재적의원 3분의 1 이상의 발의가 있어야 하며, 그
						의결은 국회재적의원 과반수의 찬성이 있어야 한다. 다만, 대통령에 대한 탄핵소추는 국회재적의원 과반수의 발의와
						국회재적의원 3분의 2 이상의 찬성이 있어야 한다. 중앙선거관리위원회는 대통령이 임명하는 3인, 국회에서 선출하는
						3인과 대법원장이 지명하는 3인의 위원으로 구성한다. 위원장은 위원중에서 호선한다. 형사피해자는 법률이 정하는 바에
						의하여 당해 사건의 재판절차에서 진술할 수 있다.</div>
					<div class="timeReply" hint="10월 25일 2015 07:22:40 GMT">약 4일 전</div>
					<div class="seperator"></div>
				</div>
			</div>
			<!--test reply 끝-->
			<div class="moreData">
				<button id ="updateButton" class ="ui-btn" >더보기</button>
			
			</div>
		</div>
	</div>