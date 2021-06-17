<?php include "../include/_header.php"; ?>

<?php include "../include/_gnb.php"; ?>

	<article class="membership-article">
		
		<section class="section">
			<div class="container">
				
				<div class="title-wrap">
					<h1 class="title-h1">회원가입</h1>
				</div>
				
				<ul class="membership-step">
					<li>
						<strong class="pass">01</strong>
						약관 동의
					</li>
					<li>
						<strong class="on">02</strong>
						회원정보입력
					</li>
					<li>
						<strong class="">03</strong>
						가입완료
					</li>
				</ul>
				
				<form name="joinForm" action="" method="post" class="join-form" id="joinForm" >
					<fieldset>
						<legend class="blind">개인정보입력</legend>
						
						<h2 class="section-title">개인정보입력</h2>
						
						<ul class="input-list">
							<li>
								<label for="uid">아이디 <span>*</span></label>
								<input type="text" id="uid" class="tv-input">
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
								<input type="text" id="uname" class="tv-input">
							</li>
							<li>
								<label for="birth">생년월일 <span>*</span></label>
								<input type="text" id="birth" class="tv-input" placeholder="예) 19990101">
							</li>
							<li>
								<label>성별 <span>*</span></label>
								<div class="input-wrap">
									<input type="radio" name="gender" id="man" class="tv-radio">
									<label for="man">남</label>
								</div>
								<div class="input-wrap">
									<input type="radio" name="gender" id="woman" class="tv-radio">
									<label for="woman">여</label>
								</div>
							</li>
							<li>
								<label for="phone-number">휴대전화 <span>*</span></label>
								<input type="text" id="phone-number" class="tv-input" placeholder="- 없이 숫자만 입력해주세요.">
							</li>
							<li class="block email-box">
								<label for="email">이메일 <span>*</span></label>
								<input type="email" id="email" class="tv-input" placeholder="인증받으실 이메일 주소를 입력하세요.">
								<button type="button" class="btn btn--mid btn--lgray">인증 코드 발송</button>
							</li>
							<li class="block email-box">
								<input type="text" class="tv-input" placeholder="인증 코드를 입력하세요.">
								<div class="entry-time">4:59</div>
								<button type="button" class="btn btn--mid btn--lgray">확인</button>
							</li>
						</ul>
						
					</fieldset>
					
					<fieldset>
						<h2 class="section-title">청약정보입력</h2>
						<ul class="input-list">
							<li class="block">
								<label for="company-name">회사명 <span>*</span></label>
								<input type="text" id="company-name" class="tv-input" placeholder="회사명을 입력하세요.">
							</li>
							<li class="block">
								<label for="subscription-info">가입 청약 정보 <span>*</span></label>
								<input type="text" id="subscription-info" class="tv-input" placeholder="가입 청약 정보를 입력하세요.">
								<p><i class="xi-error"></i> 청약 가입 고객만 회원 가입이 가능합니다. 회원가입을 신청하시면 관리자가 확인 후 승인해드립니다.</p>
							</li>
						</ul>
					</fieldset>
				</form>
				
				<div class="btn-area">
					<button type="submit" class="btn btn--lg btn--em" onclick="location.href='join-step3.php';">확인</button>
				</div>
			</div>
		</section>
	
	</article>

<?php include "../include/_footer.php"; ?>