<?php include "../include/_header.php"; ?>

<?php include "../include/_gnb.php"; ?>

	<article class="membership-article">
	
		<section class="section">
			<div class="container">
				
				<div class="title-wrap">
					<h1 class="title-h1">아이디 찾기</h1>
				</div>
				
				<div class="content-box find-box">
					<form name="loginForm" id="loginForm" action="" method="post">
						<fieldset>
							<legend class="blind">find-id</legend>
							
							<ul class="input-list">
								<li>
									<label for="uname">이름</label>
									<input type="text" id="uname" class="tv-input" placeholder="가입시 입력한 이름을 입력하세요.">
								</li>
								<li>
									<label for="ubirthday">생년월일</label>
									<input type="text" id="ubirthday" class="tv-input" placeholder="예) 19990101">
								</li>
								<li>
									<label for="uphone">휴대폰 번호</label>
									<input type="text" id="uphone" class="tv-input" placeholder="- 없이 숫자만 입력해주세요.">
								</li>
							</ul>
							
							<div class="btn-area">
								<button type="button" class="btn btn--block btn--em" onclick="location.href='find-id-result.php';">아이디 찾기</button>
							</div>
							
						</fieldset>
					</form>
				</div>
	
	
				
			</div>
		</section>
	 
	</article>

<?php include "../include/_footer.php"; ?>