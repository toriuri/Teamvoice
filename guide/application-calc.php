<?php include "../include/_header.php"; ?>

<?php include "../include/_gnb.php"; ?>

	<article class="guide-article">
		
		<div class="subtop-visual guide">
			<h1>개통안내</h1>
			
			<div class="tab-menu-list-wrap">
				<ul>
					<li><a href="application-guide.php">청약서 개통 안내</a></li>
					<li><a href="application-calc.php" class="on">청약서 금액 계산기</a></li>
				</ul>
			</div>
		</div>
	
		<section class="section calc-box">
			<div class="container">
				
				<div class="title-wrap">
					<h1 class="title-h1">청약서 금액 계산기</h1>
					<p>필요한 서비스를 입력하시면 예상 금액을 확인해 보실 수 있습니다.</p>
				</div>
				
				<form name="calcForm" action="" method="post" class="calc-form" id="calcForm" >
					<fieldset>
						<legend>기본 서비스</legend>
						
						<table border="1" cellspacing="0" cellpadding="0" class="table">
							<caption>기본 서비스 입력</caption>
							<colgroup>
								<col class="c1"> <col class="c2">
							</colgroup>
							<tbody>
							<tr>
								<th scope="row">
									<label for="u-member">서비스 인원</label>
								</th>
								<td>
									<input type="text" id="u-member" class="tv-input" placeholder="서비스 인원을 입력하세요."> 명
								</td>
							</tr>
							<tr>
								<th scope="row">
									<label>이용 통신사</label>
								</th>
								<td>
									<ul class="input-list hor">
										<li>
											<input type="checkbox" name="u-tel" id="u-tel1" class="tv-chk">
											<label for="u-tel1">KT</label>
										</li>
										<li>
											<input type="checkbox" name="u-telecom" id="u-tel2" class="tv-chk">
											<label for="u-tel2">SKBB</label>
										</li>
										<li>
											<input type="checkbox" name="u-telecom" id="u-tel3" class="tv-chk">
											<label for="u-tel3">LGU+</label>
										</li>
									</ul>
								</td>
							</tr>
							</tbody>
						</table>
					</fieldset>
					
					<fieldset>
						<legend>부가 서비스</legend>
						
						<table border="1" cellspacing="0" cellpadding="0" class="table">
							<caption>부가 서비스 입력</caption>
							<colgroup>
								<col class="c1"> <col class="c2">
							</colgroup>
							<tbody>
							<tr>
								<th scope="row">
									<label>댁내 장비 연동(1E1 기준)</label>
								</th>
								<td>
									<ul class="input-list hor">
										<li>
											<input type="radio" name="d1" id="d1-1" class="tv-radio">
											<label for="d1-1">PBX 연동</label>
										</li>
										<li>
											<input type="radio" name="d1" id="d1-2" class="tv-radio">
											<label for="d1-2">PSTN 연동</label>
										</li>
									</ul>
									
									<ul class="input-list hor">
										<li>
											<input type="radio" name="d1" id="d1-3" class="tv-radio">
											<label for="d1-3">SIP폰 전화기 연동</label>
										</li>
										<li>
											<input type="radio" name="d1" id="d1-4" class="tv-radio">
											<label for="d1-4">아날로그 전화기 연동</label>
										</li>
									</ul>
								</td>
							</tr>
							
							<tr>
								<th scope="row">
									<label>팀즈 전화기</label>
								</th>
								<td>
									<ul class="input-list ver type1">
										<li>
											<label for="C450HD">C450HD</label>
											<input type="text" id="C450HD" class="tv-input" placeholder="0"> 개
										</li>
										<li>
											<label for="C470HD">C470HD</label>
											<input type="text" id="C470HD" class="tv-input" placeholder="0"> 개
										</li>
										<li>
											<label for="CCX600">CCX600</label>
											<input type="text" id="CCX600" class="tv-input" placeholder="0"> 개
										</li>
									</ul>
								</td>
							</tr>
							
							<tr>
								<th scope="row">
									<label>팀즈 전화기</label>
								</th>
								<td>
									<ul class="input-list ver type2">
										<li>
											<label for="V-focus">Voyager focus UC</label>
											<input type="text" id="V-focus" class="tv-input" placeholder="0"> 개
										</li>
										<li>
											<label for="V-6200">Voyager 6200 UC</label>
											<input type="text" id="V-6200" class="tv-input" placeholder="0"> 개
										</li>
										<li>
											<label for="E-20-S">Evolve 20 Stereo</label>
											<input type="text" id="E-20-S" class="tv-input" placeholder="0"> 개
										</li>
										<li>
											<label for="E-30-M">Evolve 30 Mono</label>
											<input type="text" id="E-30-M" class="tv-input" placeholder="0"> 개
										</li>
									</ul>
								</td>
							</tr>
							
							<tr>
								<th scope="row">
									<label>070 개통 서비스</label>
								</th>
								<td>
									<ul class="input-list ver type2">
										<li>
											<label for="i-phone">인터넷전화 개통 회선</label>
											<input type="text" id="i-phone" class="tv-input" placeholder="0"> 회선
										</li>
									</ul>
								</td>
							</tr>
							
							<tr>
								<th scope="row">
									<label>기타</label>
								</th>
								<td>
									<ul class="input-list hor">
										<li>
											<input type="checkbox" name="etc" id="AA-CQ" class="tv-chk">
											<label for="AA-CQ">AA-CQ (IVR 서비스)</label>
										</li>
										<li>
											<input type="checkbox" name="etc" id="AP" class="tv-chk">
											<label for="AP">무선 AP 점검</label>
										</li>
									</ul>
								</td>
							</tr>
							</tbody>
						</table>
					</fieldset>
				</form>
			
			</div>
		</section>
		
		<section class="section total-box">
			<div class="container">
				
				<h2 class="section-title">예상 금액</h2>
				
				<table border="1" cellspacing="0" cellpadding="0" class="table total">
					<caption>예상 금액 계산표</caption>
					<colgroup>
						<col class="c1"> <col class="c2">
					</colgroup>
					
					<tfoot>
					<tr>
						<th scope="row">총액</th>
						<td>
							<i class="xi-won"></i> 0
						</td>
					</tr>
					</tfoot>
					
					<tbody>
					<tr>
						<th scope="row">
							서비스 개통비
						</th>
						<td>
							<i class="xi-won"></i> 0
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							서비스 이용료 (36개월)
						</th>
						<td>
							<i class="xi-won"></i> 0
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							부가 서비스
						</th>
						<td>
							<i class="xi-won"></i> 0
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<dl class="add-service">
								<dt>PBX 연동</dt>
								<dd>상담문의</dd>
								<dt>070 개통 서비스</dt>
								<dd>상담문의</dd>
							</dl>
						</td>
					</tr>
					
					</tbody>
				</table>
				<p><i class="xi-error"></i> 위 금액은 부가 서비스의 상담문의가 필요한 항목이 제외된 예상금액입니다.</p>
			
			</div>
		</section>
	
</article>

<?php include "../include/_footer.php"; ?>