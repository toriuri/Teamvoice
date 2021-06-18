<?php include "../include/_header.php"; ?>

<?php include "../include/_gnb.php"; ?>

	<article class="guide-article">
					
		<div class="subtop-visual guide">
			<h1>개통안내</h1>
			
			<div class="tab-menu-list-wrap">
				<ul>
					<li><a href="application-guide.php" class="on">청약서 개통 안내</a></li>
					<li><a href="application-calc.php">청약서 금액 계산기</a></li>
				</ul>
			</div>
		</div>
	
		<section class="section application-download">
			<div class="container">
				
				<div class="title-wrap">
					<h1 class="title-h1">청약서 개통 안내</h1>
					<p>팀즈 클라우드 보이스 커넥트 서비스 개통에 대해 안내해드립니다.</p>
				</div>
				
				<div class="btn-area">
					<button type="button" class="btn btn--block btn--em">청약서 다운로드 <i class="xi-download"></i></button>
				</div>
			</div>
		</section>
		
		<section class="section application-guide">
			<div class="container">
				<p><i class="xi-error"></i> 아래 청약서의 입력 항목을 클릭하시면, 해당 항목에 대한 설명을 확인하실 수 있습니다.</p>
				
				<div class="box-wrap">
					<div class="application-box">
						<h1 class="section-title">팀즈 클라우드 보이스 커넥트 서비스 청약서</h1>
						
						<ul class="chk-list table-top">
							<li>
								<input type="checkbox" name="mode" id="new" class="tv-chk">
								<label for="new">신규</label>
							</li>
							<li>
								<input type="checkbox" name="mode" id="modify" class="tv-chk">
								<label for="modify">변경</label>
							</li>
						</ul>
						
						<table border="1" cellspacing="0" cellpadding="0" class="table">
							<caption>팀즈 클라우드 보이스 커넥트 서비스 청약서 가이드</caption>
							<colgroup>
								<col width="12%">
								<col width="12%">
								<col width="15%">
								<col width="23%">
								<col width="15%">
								<col width="23%">
							</colgroup>
							
							<tbody>
							<tr class="border-right">
								<td rowspan="6"><strong>고객사</strong></td>
								<td rowspan="4"><em>계약자</em></td>
								<th>법인명</th>
								<td>&nbsp;</td>
								<th>사업자등록번호</th>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th>대표자</th>
								<td>&nbsp;</td>
								<th>E-mail</th>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th>주소</th>
								<td colspan="3">&nbsp;</td>
							</tr>
							<tr>
								<th>핸드폰</th>
								<td>&nbsp;</td>
								<th>전화번호(유선)</th>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td rowspan="2"><em>성명</em></td>
								<th>법인명</th>
								<td>&nbsp;</td>
								<th>E-mail</th>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th>핸드폰</th>
								<td>&nbsp;</td>
								<th>전화번호(유선)</th>
								<td>&nbsp;</td>
							</tr>
							</tbody>
						</table>
						
						<table border="1" cellspacing="0" cellpadding="0" class="table">
							<caption>팀즈 클라우드 보이스 커넥트 서비스 청약서 가이드</caption>
							<colgroup>
								<col width="12%">
								<col width="27%">
								<col width="61%">
							</colgroup>
							
							<tbody>
							<tr>
								<td rowspan="2"><strong>기본 <br>서비스</strong></td>
								<th>서비스 인원</th>
								<td>(<div class="empty-box"></div>명)</td>
							</tr>
							
							<tr>
								<th>이용중인 전화 통신사</th>
								<td>
									<ul class="chk-list">
										<li>
											<input type="checkbox" name="u-telecom" id="KT" class="tv-chk">
											<label for="KT">KT</label>
										</li>
										<li>
											<input type="checkbox" name="u-telecom" id="SKBB" class="tv-chk">
											<label for="SKBB">SKBB</label>
										</li>
										<li>
											<input type="checkbox" name="u-telecom" id="LGU+" class="tv-chk">
											<label for="LGU+">LGU+</label>
										</li>
										<li>
											<input type="checkbox" name="u-telecom" id="etc" class="tv-chk">
											<label for="etc">기타</label>
										</li>
									</ul>
								</td>
							</tr>
							</tbody>
							
							<tbody>
							<tr>
								<td rowspan="5"><strong>부가 <br>서비스</strong></td>
								<th>댁내 장비 연동</th>
								<td>
									<ul class="chk-list">
										<li>
											<input type="checkbox" name="s1" id="s1-1" class="tv-chk">
											<label for="s1-1">PBX 연동</label>
										</li>
										<li>
											<input type="checkbox" name="s1" id="s1-2" class="tv-chk">
											<label for="s1-2">PSTN 연동</label>
										</li>
										<li>
											<input type="checkbox" name="s1" id="s1-3" class="tv-chk">
											<label for="s1-3">SIP 폰 전화기 연동</label>
										</li>
										<li>
											<input type="checkbox" name="s1" id="s1-4" class="tv-chk">
											<label for="s1-4">아날로그 전화기 연동</label>
										</li>
									</ul>
								</td>
							</tr>
							
							<tr>
								<th>팀즈 전화기</th>
								<td>
									<ul class="chk-list type1">
										<li>
											<input type="checkbox" name="s2" id="s2-1" class="tv-chk">
											<label for="s2-1">C450HD</label>
										</li>
										<li>
											<input type="checkbox" name="s2" id="s2-2" class="tv-chk">
											<label for="s2-2">C470HD</label>
										</li>
										<li>
											<input type="checkbox" name="s2" id="s2-3" class="tv-chk">
											<label for="s2-3">[Poly] CCX600</label>
										</li>
										<li>
											<input type="checkbox" name="s2" id="s2-4" class="tv-chk">
											<label for="s2-4">기타 (<div class="empty-box"></div>)</label>
										</li>
									</ul>
								</td>
							</tr>
							
							<tr>
								<th>팀즈 헤드셋</th>
								<td>
									<ul class="chk-list type2">
										<li>
											<input type="checkbox" name="s3" id="s3-1" class="tv-chk">
											<label for="s3-1">Voyager focus UC</label>
										</li>
										<li>
											<input type="checkbox" name="s3" id="s3-2" class="tv-chk">
											<label for="s3-2">Voyager 6200 UC</label>
										</li>
										<li>
											<input type="checkbox" name="s3" id="s3-3" class="tv-chk">
											<label for="s3-3">Evolve 20 Stereo</label>
										</li>
										<li>
											<input type="checkbox" name="s3" id="s3-4" class="tv-chk">
											<label for="s3-4">Evolve 30 Mono</label>
										</li>
										<li>
											<input type="checkbox" name="s3" id="s3-5" class="tv-chk">
											<label for="s3-5">기타 (<div class="empty-box"></div>)</label>
										</li>
									</ul>
								</td>
							</tr>
							
							<tr>
								<th>070 개통 서비스</th>
								<td>
									<ul class="chk-list">
										<li>
											<input type="checkbox" name="s4" id="s4-1" class="tv-chk">
											<label for="s4-1">인터넷전화 개통 (<div class="empty-box"></div>회선)</label>
										</li>
									</ul>
								</td>
							</tr>
							
							<tr>
								<th>기타</th>
								<td>
									<ul class="chk-list type1">
										<li>
											<input type="checkbox" name="s5" id="s5-1" class="tv-chk">
											<label for="s5-1">AA-CQ (MR서비스)</label>
										</li>
										<li>
											<input type="checkbox" name="s5" id="s5-2" class="tv-chk">
											<label for="s5-2">무선 AP 점검</label>
										</li>
										<li>
											<input type="checkbox" name="s5" id="s5-3" class="tv-chk">
											<label for="s5-3">기타(<div class="empty-box"></div>)</label>
										</li>
									</ul>
								</td>
							
							</tbody>
						</table>
						<p class="text-align-right">&#8251; 서비스 약정기간 : 36개월</p>
						
						<h2>계약금액 <span>(원, VAT별도)</span></h2>
						<table border="1" cellspacing="0" cellpadding="0" class="table table-center">
							<caption>팀즈 클라우드 보이스 커넥트 서비스 청약서 가이드</caption>
							<colgroup>
								<col width="50%">
								<col width="50%">
							</colgroup>
							
							<tfoot>
							<tr>
								<td>총액</td><td>￦ 0,000,000</td>
							</tr>
							</tfoot>
							
							<tbody>
							<tr>
								<th scope="col">물품명</th><th scope="col">금액</th>
							</tr>
							<tr>
								<td>서비스 개통비</td><td>￦ 0,000,000</td>
							</tr>
							<tr>
								<td>서비스 이용료 (36개월)</td><td>￦ 0,000,000</td>
							</tr>
							<tr>
								<td>부가 서비스</td><td>￦ 0,000,000</td>
							</tr>
							
							</tbody>
						</table>
						<p class="text-align-right">&#8251; 견적서 별첨</p>
						
						<div class="gray-box">
							<p class="text-align-center">본인은 신청서에 기재된 각종 서비스 및 약관에 대하여 충분한 설명을 듣고 위와 같이 신청합니다.</p>
							<p class="text-align-right">
								신청일 &nbsp;&nbsp;
								2021.
								<span class="empty-box"></span> .
								<span class="empty-box"></span> .
								<span class="empty-box"></span>
								신청인 <span class="empty-box"></span><span class="empty-box"></span>(인 또는 서명)
							</p>
							<p class="text-align-right">주식회사 넷케이티아이 대표이사 귀하</p>
						</div>
					
					</div>
				</div>
			</div>
		</section>
	
	</article>

<?php include "../include/_footer.php"; ?>