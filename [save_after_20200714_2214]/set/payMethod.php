<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0109';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">결제수단 검색</div>
				<div class="conGroup verticalManageSort">
					<table class="searchGroup">
						<colgroup>
							<col width="70">
							<col width="*">
							<col width="70">
							<col width="*">
						</colgroup>
						<tbody>
							<tr>
								<th>검색어</th>
								<td>
									<form autocomplete="on">
									<input class="tbox searchInput mt7" name="dd" type="text" placeholder="검색어를 입력해주세요.">
									</form>
								</td>
								<th>
									구분
								</th>
								<td>
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">카드</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">계좌이체</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>
									요청기간
								</th>
								<td colspan="4">
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="startDate" readonly="" placeholder="시작일">
									</div>
									<div class="betweenWaveText">~</div>
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="endDate" readonly="" placeholder="종료일">
									</div>

									<!-- <div class="btnGroup dateTermSort topLineSearchMod">
										<a href="javascript:setSearchDate('0d');" class="btn">당일</a>
										<a href="javascript:setSearchDate('1w');" class="btn">일주일</a>
										<a href="javascript:setSearchDate('1m');" class="btn">1개월</a>
										<a href="javascript:setSearchDate('3m');" class="btn">3개월</a>
										<a href="javascript:void(0);" class="btn">전체</a>
									</div> -->
									<div class="btnGroup inTableSearch">
										<a href="javascript:void(0);" class="btn searchSort">검색</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div class="btnGroup verticalBottomSort">
					<a href="javascript:void(0);" class="btn searchSort">검색</a>
				</div>
			</div>

			<div class="section horizontalManageSort searcManageSort quad1">
				<div class="titleBox manageHeadlineSort">검색결과</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="selectGroup monthSort">
							<select>
								<option selected>2020년</option>
								<option >2019년</option>
								<option >2018년</option>
								<option >2017년</option>
							</select>
							<select>
								<option selected>6월</option>
								<option >5월</option>
								<option >4월</option>
								<option >3월</option>
							</select>
						</div>
						<div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">추가</a>
						</div>
						<div class="sboxGroup listArraySort">
							<select class="sbox">
								<option>번호순▼</option>
								<option>번호순▲</option>
								<option>등록순▼</option>
								<option>등록순▲</option>
							</select>
							<select class="sbox">
								<option>40개씩</option>
								<option>80개씩</option>
								<option>100개씩</option>
							</select>
						</div>
					</div>
					<table class="searchResultTable ">
						<colgroup></colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>구분</th>
							<th>적요</th>
							<th>잔액</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>11</td>
						
							<td>카드</td>
							<td>우리은행 비씨카드</td>
							<td>1,000,000원</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="page_group underSort">
					<ul class="page_box">
						<li class="prev arrow">
							<a href="javascript:void(0);"></a>
						</li>
						<li class="pageNum on">
							<a href="javascript:void(0);">1</a>
						</li>
						<li class="pageNum">
							<a href="javascript:void(0);">2</a>
						</li>
						<li class="next arrow">
							<a href="javascript:void(0); "></a>
						</li>
					</ul>
				</div>
			</div>
















			<div class="horizontalGrandCover quad2">
				<div class="section horizontalManageSort fullMod limitedHeight2">
					<div class="titleBox manageHeadlineSort">상세정보</div>



					<div class="specInfoGroup hide">
						<div class="conGroup verticalManageSort">
							<div class="headLineBox listControlSort">
								<div class="titleBox inlistConSort">
									<div class="titleText">결제수단 정보</div>
								</div>
							</div>
							<table class="infoGroup">
								<colgroup>
									<col width="100">
									<col width="*">
								</colgroup>
								<tbody>
									<tr>
										<th>번호</th>
										<td>
											<input class="tbox regFullSort" value="11" readonly>
										</td>
									</tr>
									<tr>
										<th>등록일</th>
										<td>
											<input class="tbox regFullSort" value="2020-03-11 11:00" readonly>
										</td>
									</tr>

									<tr>
										<th>이름</th>
										<td>
											<input class="tbox regFullSort" value="우리비씨카드">
										</td>
									</tr>
									<tr>
										<th>구분</th>
										<td>
											<span class="sbox regFullSort">
												<a href="javascript:void(0);">카드</a>
												<ul>
													<li><a href="javascript:void(0);">은행계좌</a></li>
												</ul>
											</span>
										</td>
									</tr>
									<tr>
										<th>발급사/은행</th>
										<td>
											<span class="sbox regFullSort">
												<a href="javascript:void(0);">우리은행</a>
												<ul>
													<li><a href="javascript:void(0);">삼성카드</a></li>
													<li><a href="javascript:void(0);">롯데카드</a></li>
													<li><a href="javascript:void(0);">우리은행</a></li>
													<li><a href="javascript:void(0);">기업은행</a></li>
												</ul>
											</span>
										</td>
									</tr>
									<tr>
										<th>카드번호/계좌번호</th>
										<td>
											<input class="tbox regFullSort" value="1234-1234-1234">
										</td>
									</tr>
									<tr>
										<th>사용여부</th>
										<td>
											<span class="sbox regFullSort">
												<a href="javascript:void(0);">사용</a>
												<ul>
													<li><a href="javascript:void(0);">사용</a></li>
													<li><a href="javascript:void(0);">미사용</a></li>
												</ul>
											</span>
										</td>
									</tr>
									<tr>
										<th>지출상한(월)</th>
										<td>
											<input class="tbox regFullSort" value="2,000,000">
										</td>
									</tr>
									<tr>
										<th>사용액(월)</th>
										<td>
											<input class="tbox regFullSort" value="1,000,000" readonly>
										</td>
									</tr>
									<tr>
										<th>잔액(월)</th>
										<td>
											<input class="tbox regFullSort" value="1,000,000" readonly>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
					<div class="specRegGroup hide">
						<div class="conGroup verticalManageSort">
							<div class="headLineBox listControlSort">
								<div class="titleBox inlistConSort">
									<div class="titleText">결제수단 정보</div>
								</div>
							</div>
							<table class="infoGroup">
								<colgroup>
									<col width="100">
									<col width="*">
								</colgroup>
								<tbody>
									<tr>
										<th>이름</th>
										<td>
											<input class="tbox regFullSort" value="">
										</td>
									</tr>
									<tr>
										<th>구분</th>
										<td>
											<span class="sbox regFullSort">
												<a href="javascript:void(0);">-선택-</a>
												<ul>
													<li><a href="javascript:void(0);">은행계좌</a></li>
													<li><a href="javascript:void(0);">카드</a></li>
												</ul>
											</span>
										</td>
									</tr>
									<tr>
										<th>발급사/은행</th>
										<td>
											<span class="sbox regFullSort">
												<a href="javascript:void(0);">-선택-</a>
												<ul>
													<li><a href="javascript:void(0);">삼성카드</a></li>
													<li><a href="javascript:void(0);">롯데카드</a></li>
													<li><a href="javascript:void(0);">우리은행</a></li>
													<li><a href="javascript:void(0);">기업은행</a></li>
												</ul>
											</span>
										</td>
									</tr>
									<tr>
										<th>카드번호/계좌번호</th>
										<td>
											<input class="tbox regFullSort" value="">
										</td>
									</tr>
									<tr>
										<th>사용여부</th>
										<td>
											<span class="sbox regFullSort">
												<a href="javascript:void(0);">-선택-</a>
												<ul>
													<li><a href="javascript:void(0);">사용</a></li>
													<li><a href="javascript:void(0);">미사용</a></li>
												</ul>
											</span>
										</td>
									</tr>
									<tr>
										<th>지출상한(월)</th>
										<td>
											<input class="tbox regFullSort" value="">
										</td>
									</tr>
									
	
								</tbody>
							</table>
						</div>
					</div>
					<div class="btnGroup horizontalBottomSort">
						<a href="javascript:void(0);" class="btn saveSort">저장</a>
					</div>
				</div>
				<div class="section horizontalManageSort fullMod limitedHeight">
					<!-- <div class="titleBox manageHeadlineSort">상세정보</div> -->

					<div class="specInfoGroup hide">
						<div class="conGroup verticalManageSort">
							
						
							<div class="headLineBox listControlSort">
								<div class="titleBox inlistConSort">
									<div class="titleText">분기 정보</div>
									<a href="javascript:void(0);" class="btn headRightAbMod addquarterInfo">추가</a>
								</div>
							</div>


							<table class="searchResultTable ">
								<colgroup></colgroup>
								<thead>
								<tr>
									<th>No.</th>
									<th>분기(월)</th>
									<th>사용금액</th>
									<th>잔액</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>11</td>
									<td>1월</td>
									<td>2,000,000원</td>
									<td>1,000,000원</td>
								</tr>
								</tbody>
							</table>
						</div>
						<div class="page_group underSort">
							<ul class="page_box">
								<li class="prev arrow">
									<a href="javascript:void(0);"></a>
								</li>
								<li class="pageNum on">
									<a href="javascript:void(0);">1</a>
								</li>
								<li class="pageNum">
									<a href="javascript:void(0);">2</a>
								</li>
								<li class="next arrow">
									<a href="javascript:void(0); "></a>
								</li>
							</ul>
						</div>
						<!-- <div class="btnGroup horizontalBottomSort">
							<a href="javascript:void(0);" class="btn saveSort">저장</a>
						</div> -->
					</div>
				</div>
			</div>

			<div class="section horizontalManageSort searcManageSort quad3">
				<div class="titleBox manageHeadlineSort">월별 사용내역</div>

				<div class="specInfoGroup hide">	
					<div class="conGroup verticalManageSort bottomRowSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">사용내역</div>
								<!-- <a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">추가</a> -->
							</div>
							<div class="sboxGroup listArraySort">
								<select class="sbox">
									<option>번호순▼</option>
									<option>번호순▲</option>
									<option>등록순▼</option>
									<option>등록순▲</option>
								</select>
								<select class="sbox">
									<option>40개씩</option>
									<option>80개씩</option>
									<option>100개씩</option>
								</select>
							</div>
						</div>
						<table class="searchResultTable ">
							<colgroup></colgroup>
							<thead>
							<tr>
								<th>No.</th>
								<th>거래처</th>
								<th>사용금액</th>
								<th>잔액</th>
								<th>등록일</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>11</td>
								<td>에이디치히얌</td>
								<td>2,000,000원</td>
								<td>1,000,000원</td>
								<td>2020-06-05 13:05</td>
							</tr>
							<tr>
								<td colspan="5">합계 : 2,000,000원</td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="page_group underSort">
						<ul class="page_box">
							<li class="prev arrow">
								<a href="javascript:void(0);"></a>
							</li>
							<li class="pageNum on">
								<a href="javascript:void(0);">1</a>
							</li>
							<li class="pageNum">
								<a href="javascript:void(0);">2</a>
							</li>
							<li class="next arrow">
								<a href="javascript:void(0); "></a>
							</li>
						</ul>
					</div>
				</div>


			</div>


		</div>
	</div>
</div>




<script src="/sinwon/common/js/datePick.js"></script>
<script>
// :: 등록 버튼 클릭 시, 등록창 표시.
$(document).on('click', '.btn.addPlanBtn', function(){
	$('.quad2 .specInfoGroup').addClass('hide');
	$('.quad2 .conGroup.verticalManageSort .searchResultTable tr').removeClass('activated');
	$('.specRegGroup.hide').removeClass('hide');
});
// :: 검색 결과 클릭 시, 세부내역 표시.
$(document).on('click', '.quad1 .conGroup.verticalManageSort .searchResultTable td', function(){
	$('.quad2 .specInfoGroup.hide').removeClass('hide');
	$('.quad2 .specRegGroup').addClass('hide');
	$(this).parent().siblings('tr').removeClass('activated');
	$(this).parent('tr').addClass('activated');
});


// :: 분기 리스트 클릭 시, 사용내역 표시.
$(document).on('click', '.quad2 .conGroup.verticalManageSort .searchResultTable td', function(){
	$('.quad3 .specInfoGroup.hide').removeClass('hide');
	$(this).parent().siblings('tr').removeClass('activated');
	$(this).parent('tr').addClass('activated');
});



</script>
</body>
</html>