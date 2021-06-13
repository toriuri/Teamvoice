<?php	$this_page = basename($_SERVER[PHP_SELF]); ?>

<header id="header">
	
	<div class="header-bar">
		<h1 class="logo">
			<a href="../index.php">
				<img src="../assets/image/common/kti-logo@2x.png" alt="Teamsvoice">
			</a>
		</h1>
		
		<ul class="gnb-list">
			<li>
				<a href="#">상품소개</a>
				<ul>
					<li>
						<a href="../product/teams-cloud.php">팀즈 클라우드 보이스 커넥트</a>
					</li>
					<li>
						<a href="../product/teams-device.php">팀즈 단말기</a>
					</li>
					<li>
						<a href="../product/live-teams.php">라이브 팀즈</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">개통안내</a>
				<ul>
					<li>
						<a href="../guide/application-guide.php">청약서 개통 안내</a>
					</li>
					<li>
						<a href="../guide/application-calc.php">청약서 금액 계산기</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">고객지원</a>
				<ul>
					<li>
						<a href="../customer/notice.php">공지사항</a>
					</li>
					<li>
						<a href="../customer/faq.php">자주하는 질문</a>
					</li>
					<li>
						<a href="../customer/inquiry.php">1:1 문의</a>
					</li>
					<li>
						<a href="../customer/reference.php">자료실</a>
					</li>
				</ul>
			</li>
		</ul>
		
		<ul class="membership">
			<li>
				<a href="../member/join-step1.php"><i class="xi-user-o"></i> 회원가입</a>
			</li>
			<li>
				<a href="../member/login.php"><i class="xi-lock-o"></i> 로그인</a>
			</li>
		</ul>
		
		<ul class="membership" style="display: none">
			<li>
				<a href="../mypage/myinfo-step1.php"><i class="xi-user-o"></i> 마이페이지</a>
			</li>
			<li>
				<a href="#"><i class="xi-lock-o"></i> 로그아웃</a>
			</li>
		</ul>
	
	</div>
	
	<div class="btn-side-menu">
		<a href="#side-nav">
			<span class="blind">Side Navigation</span>
			<div class="m-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</a>
	</div>

</header>

<div class="side-nav" id="side-nav">
	<div class="inner">
		
		<div class="header-bar">
			<h1 class="logo">
				<a href="../index.php">
					<img src="../assets/image/common/kti-logo@2x.png" alt="Teamsvoice">
				</a>
			</h1>
			
			<ul class="membership" style="display: none">
				<li>
					<a href="../member/join-step1.php"><i class="xi-user-o"></i> 회원가입</a>
				</li>
				<li>
					<a href="../member/login.php"><i class="xi-lock-o"></i> 로그인</a>
				</li>
			</ul>
			
			<ul class="membership">
				<li>
					<a href="../mypage/myinfo-step1.php"><i class="xi-user-o"></i> 마이페이지</a>
				</li>
				<li>
					<a href="#"><i class="xi-lock-o"></i> 로그아웃</a>
				</li>
			</ul>
		</div>
		
		<nav class="gnb-wrap" id='gnb-wrap'>
			<ul class="gnb-list-box">
				<li>
					<h2>상품소개</h2>
					<ul>
						<li>
							<a href="../product/teams-cloud.php">팀즈 클라우드 보이스 커넥트</a>
						</li>
						<li>
							<a href="../product/teams-device.php">팀즈 단말기</a>
						</li>
						<li>
							<a href="../product/live-teams.php">라이브 팀즈</a>
						</li>
					</ul>
				</li>
				
				<li>
					<h2>개통안내</h2>
					<ul>
						<li>
							<a href="../guide/application-guide.php">청약서 개통 안내</a>
						</li>
						<li>
							<a href="../guide/application-calc.php">청약서 금액 계산기</a>
						</li>
					</ul>
				</li>
				
				<li>
					<h2>고객지원</h2>
					<ul>
						<li>
							<a href="../customer/notice.php">공지사항</a>
						</li>
						<li>
							<a href="../customer/faq.php">자주하는 질문</a>
						</li>
						<li>
							<a href="../customer/inquiry.php">1:1 문의</a>
						</li>
						<li>
							<a href="../customer/reference.php">자료실</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	
	</div>
</div>

<main id="main" class="main">