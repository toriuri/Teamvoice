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
						<strong class="on">01</strong>
						약관 동의
					</li>
					<li>
						<strong class="">02</strong>
						회원정보입력
					</li>
					<li>
						<strong class="">03</strong>
						가입완료
					</li>
				</ul>
				
				<h2 class="section-title">이용약관</h2>
				<div class="iframe-box">
					<iframe width="100%" height="100%" frameborder="0" src="../policy/term.html"></iframe>
				</div>
				
				<p class="agree-chk">
					<input type="checkbox" id="agree-ok" class="tv-chk"> <label for="agree-ok">이용 약관에 동의 합니다.</label>
				</p>
				
				<div class="btn-area">
					<button type="button" class="btn btn--lg btn--em" onclick="location.href='join-step2.php';">다음으로</button>
				</div>
			
			</div>
		</section>
	
	</article>

<?php include "../include/_footer.php"; ?>