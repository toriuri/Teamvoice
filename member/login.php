<?php include "../include/_header.php"; ?>

<?php include "../include/_gnb.php"; ?>

	<article class="membership-article">
		
		<section class="section">
			<div class="container">
				
				<div class="title-wrap">
					<h1 class="title-h1">로그인</h1>
				</div>
				
				<div class="content-box login-box">
					<form name="loginForm" id="loginForm" action="" method="post">
						<fieldset>
							<legend class="blind">로그인</legend>
							
							<ul class="input-list">
								<li>
									<label for="userid">아이디</label>
									<input type="text" id="userid" class="tv-input" placeholder="userid">
								</li>
								<li>
									<label for="userpw">비밀번호</label>
									<input type="password" id="userpw" class="tv-input">
								</li>
							</ul>
							
							<div class="btn-area">
								<button type="button" class="btn btn--block btn--em" onclick="location.href='../index.php';">로그인</button>
							</div>
							
							<ul class="login-box-bottom-link">
								<li>
									<a href="join-step1.php">신규회원가입</a>
								</li>
								<li>
									<a href="find-id.php">아이디 찾기</a>
									<a href="find-pw.php" class="text-link">비밀번호 찾기</a>
								</li>
							</ul>
							
						</fieldset>
					</form>
				</div>
				
			</div>
		</section>
	 
  </article>

<?php include "../include/_footer.php"; ?>