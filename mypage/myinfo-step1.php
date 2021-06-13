<?php include "../include/_header.php"; ?>

<?php include "../include/_gnb.php"; ?>

  <article class="membership-article">

		<section class="section">
			<div class="container">
				
				<div class="title-wrap">
					<h1 class="title-h1">내 정보 확인</h1>
				</div>
				
				<div class="content-box mypage-box">
					<h2 class="">본인 확인</h2>
					<p>회원 정보를 안전하게 보호하기 위해 비밀번호를 한 번 더 입력해주세요.</p>
					
					<ul class="input-list">
						<li>
							<label for="userpw">
								<input type="password" id="userpw" class="tv-input">
							</label>
						</li>
					</ul>
					
					<div class="btn-area">
						<button type="button" class="btn btn--block btn--em" onclick="location.href='myinfo-step2.php';">확인</button>
					</div>
				</div>
				
			</div>
		</section>
	 
  </article>
				
<?php include "../include/_footer.php"; ?>