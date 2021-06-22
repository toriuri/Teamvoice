<?php include "../include/_header.php"; ?>

<?php include "../include/_gnb.php"; ?>

	<article class="membership-article">
		
		<div class="subtop-visual mypage">
			<h1>마이 페이지</h1>
			
			<div class="tab-menu-list-wrap">
				<ul>
					<li><a href="myinfo-step2.php" class="on">내 정보 확인</a></li>
					<li><a href="myinquiry.php">1 : 1 문의</a></li>
				</ul>
			</div>
		</div>
		
		<section class="section">
			<div class="container">
				
				<div class="title-wrap">
					<h1 class="title-h1">내 정보 확인</h1>
				</div>
				
				<form name="joinForm" action="" method="post" class="join-form" id="joinForm" >
					<fieldset>
						<legend>개인정보입력</legend>
						
						<ul class="input-list">
							<li>
								<label for="uid">아이디 <span>*</span></label>
								<input type="text" id="uid" class="tv-input" value="memberid" readonly>
							</li>
							<li>
								<label for="upw">비밀번호 <span>*</span></label>
								<input type="password" id="upw" class="tv-input">
							</li>
							<li>
								<label for="upw-confirm">비밀번호 확인 <span>*</span></label>
								<input type="password" id="upw-confirm" class="tv-input">
							</li>
							<li>
								<label for="uname">이름 <span>*</span></label>
								<input type="text" id="uname" class="tv-input" value="홍길동">
							</li>
							<li>
								<label for="birth">생년월일 <span>*</span></label>
								<input type="text" id="birth" class="tv-input" value="19990101">
							</li>
							<li class="gender">
								<label>성별 <span>*</span></label>
								<div class="input-wrap">
									<input type="radio" name="gender" id="man" class="tv-radio" checked>
									<label for="man">남</label>
								</div>
								<div class="input-wrap">
									<input type="radio" name="gender" id="woman" class="tv-radio">
									<label for="woman">여</label>
								</div>
							</li>
							<li>
								<label for="phone-number">휴대전화 <span>*</span></label>
								<input type="text" id="phone-number" class="tv-input" value="010-1234-1234">
							</li>
							<li>
								<label for="email">이메일 <span>*</span></label>
								<input type="email" id="email" class="tv-input" value="sample@domain.com">
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>청약정보입력</legend>
						
						<ul class="input-list">
							<li class="block">
								<label for="company-name">회사명 <span>*</span></label>
								<input type="text" id="company-name" class="tv-input" value="넷케이티아이">
							</li>
							<li class="block">
								<label for="subscription-info">가입 청약 정보 <span>*</span></label>
								<input type="text" id="subscription-info" class="tv-input" value="입력한 청약 정보 노출">
							</li>
						</ul>
					</fieldset>
				</form>
				
				<div class="btn-area multi">
					<button type="button" class="btn btn--lg btn--line w50" onclick="location.href='withdraw.php';">탈퇴</button>
					<button type="submit" class="btn btn--lg btn--em w50">수정</button>
				</div>
			</div>
		</section>
	
	</article>
	
<?php include "../include/_footer.php"; ?>