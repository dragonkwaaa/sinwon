<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0106';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<div class="subMenuTab">
				<a href="/sinwon/plan/executeList" class="btn subPartMod">전체집행계획</a>
				<a href="javascript:void(0);" class="btn subPartMod activated">구매자금집행계획</a>
			</div>
			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">검색</div>
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
								<td colspan="4">
									<span class="sbox">
										<a href="javascript:void(0);">전체</a>
										<ul>
											<li><a href="javascript:void(0);">업체명</a></li>
											<li><a href="javascript:void(0);">지점명</a></li>
											<li><a href="javascript:void(0);">대리점명</a></li>
											<li><a href="javascript:void(0);">업체명</a></li>
											<li><a href="javascript:void(0);">내역/계약명</a></li>
										</ul>
									</span>
									<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
								</td>
							</tr>
							<tr>
								<th>
									집행수단
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
											<div class="checkBoxTitle">현금</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">계좌이체</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">어음</div>
										</div>
									</div>
								</td>
								<th>
									거래처구분
								</th>
								<td>
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">전체</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">법인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">개인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">기타</div>
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

									<div class="btnGroup dateTermSort topLineSearchMod">
										<a href="javascript:setSearchDate('0d');" class="btn">당일</a>
										<a href="javascript:setSearchDate('1w');" class="btn">일주일</a>
										<a href="javascript:setSearchDate('1m');" class="btn">1개월</a>
										<a href="javascript:setSearchDate('3m');" class="btn">3개월</a>
										<a href="javascript:void(0);" class="btn">전체</a>
									</div>
									<div class="btnGroup inTableSearch">
										<a href="javascript:void(0);" class="btn searchSort">검색</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- <div class="btnGroup verticalBottomSort">
					<a href="javascript:void(0);" class="btn searchSort">검색</a>
				</div> -->
			</div>
			<div class="section horizontalManageSort searcManageSort extendMod">
				<div class="titleBox manageHeadlineSort">검색결과</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">집행등록</a>
						</div>
						<div class="sboxGroup listArraySort">
							<span class="sbox">
								<a href="javascript:void(0);">번호순▼</a>
								<ul>
									<li><a href="javascript:void(0);">번호순▼</a></li>
									<li><a href="javascript:void(0);">번호순▲</a></li>
								</ul>
							</span>
							<span class="sbox">
								<a href="javascript:void(0);">40개씩</a>
								<ul>
									<li><a href="javascript:void(0);">80개씩</a></li>
									<li><a href="javascript:void(0);">100개씩</a></li>
								</ul>
							</span>
						</div>
					</div>
					<table class="searchResultTable ">
						<colgroup></colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>종류</th>
							<th>구분</th>
							<th>거래업체</th>
							<th>내역/계약명</th>
							<th>총 금액</th>
							<th>미지급금</th>
							<th>분할납부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>11</td>
							<td>지출결의서</td>
							<td>고정비</td>
							<td>
								<div>메디포럼</div>
								<div>(법인)</div>
							</td>
							<td>6월 메디포럼 물품구입</td>
							<td>12,000</td>
							<td>4,000</td>
							<td>Y</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">승인</a>
									<a href="javascript:void(0);" class="btn delSort">반려</a>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="9">
								<div class="tAlignR">법인카드합계 : 100,000 원</div>
								<div class="tAlignR mt5">개인카드합계 : 50,000,000 원</div>
								<div class="tAlignR mt5">B2B 합계 : 50,000,000 원</div>
								<div class="tAlignR mt5">현금합계 : 50,000,000 원</div>
								<div class="tAlignR mt5">종이어음합계 : 50,000,000 원</div>
								<div class="tAlignR mt5">총계 : 100,000,000 원</div>
							</td> 
						</tr>
						<tr>
							<td colspan="9">검색결과가 없습니다.</td>
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
			<div class="section horizontalManageSort extendMod">
				<div class="titleBox manageHeadlineSort">상세정보</div>
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort underBtnMod">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">집행계획정보</div>
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
									<th>지역</th>
									<td>
										<input class="tbox regFullSort" value="서울">
									</td>
								</tr>
								<tr>
									<th>지사명</th>
									<td>
										<input class="tbox regFullSort" value="강남지사">
									</td>
								</tr>
								<tr>
									<th>대리점</th>
									<td>
										<input class="tbox regFullSort" value="-">
									</td>
								</tr>
								<tr>
									<th>부서</th>
									<td>
										<input class="tbox regFullSort" value="원무부">
									</td>
								</tr>
								<tr>
									<th>요청자</th>
									<td>
										<input class="tbox regFullSort" value="곽반장">
									</td>
								</tr>
								<tr>
									<th>종류</th>
									<td>
										<input class="tbox regFullSort" value="지출결의서">
									</td>
								</tr>
								<tr>
									<th>구분</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">고정비</a>
											<ul>
												<li><a href="javascript:void(0);">고정비</a></li>
												<li><a href="javascript:void(0);">변동비</a></li>
												<li><a href="javascript:void(0);">기타</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>내역/계약명</th>
									<td>
										<input class="tbox regFullSort" value="6월 메디포럼 물품구입">
									</td>
								</tr>
								<tr>
									<th>거래처</th>
									<td>
										<input class="tbox regFullSort" value="메디포럼">
									</td>
								</tr>
								<tr>
									<th>이월금(전월)</th>
									<td>
										<input class="tbox regFullSort" value="0" readonly>
									</td>
								</tr>
								<tr>
									<th>이월금(당월)</th>
									<td>
										<input class="tbox regFullSort" value="2,000">
									</td>
								</tr>





								<tr>
									<th>총 금액</th>
									<td>
										<input class="tbox regFullSort" value="12,000">
									</td>
								</tr>
								<tr>
									<th>누적 지급액</th>
									<td>
										<input class="tbox regFullSort" value="4,000">
									</td>
								</tr>
								<tr>
									<th>미지급금</th>
									<td>
										<input class="tbox regFullSort" value="8,000">
									</td>
								</tr>
								<tr>
									<th>집행상태</th>
									<td>
										<input class="tbox regFullSort" value="승인">
									</td>
								</tr>
								<tr>
									<th>발안일자</th>
									<td>
										<input class="tbox regFullSort" value="2020-06-10" readonly>
									</td>
								</tr>
								<tr>
									<th>지급요청일</th>
									<td>
										<input class="tbox regFullSort" value="2020-06-14" readonly>
									</td>
								</tr>
								<tr>
									<th>
										집행수단
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">카드</a>
											<ul>
												<li><a href="javascript:void(0);">카드</a></li>
												<li><a href="javascript:void(0);">현금</a></li>
												<li><a href="javascript:void(0);">계좌이체</a></li>
												<li><a href="javascript:void(0);">어음</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>
										은행/카드사
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">신한카드</a>
											<ul>
												<li><a href="javascript:void(0);">신한카드</a></li>
												<li><a href="javascript:void(0);">롯데카드</a></li>
												<li><a href="javascript:void(0);">삼성카드</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>
										카드/계좌번호
									</th>
									<td>
										<input class="tbox regFullSort" value="1234-1234-1234">
									</td>
								</tr>
								<tr>
									<th>
										예금주
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										집행마감일
									</th>
									<td>
										<div class="dateInputCase regFullSort">
											<input class="tbox regFullSort" value="2020-06-15" readonly>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										분할납부
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">Y</a>
											<ul>
												<li><a href="javascript:void(0);" class="popOpSel equalPaySort">Y</a></li>
												<li><a href="javascript:void(0);" class="popOpSel customPaySort">N</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr class="popOpShow equalPaySort">
									<th>
										회전월(회)
									</th>
									<td>
										<input class="tbox regFullSort" value="3">
									</td>
								</tr>
								<tr>
									<th>
										1회 납부금
									</th>
									<td>
										<input class="tbox regFullSort" value="4,000" readonly>
									</td>
								</tr>
								<tr class="popOpShow customPaySort hide">
									<th>
										납부금 직접입력
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										해당월
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										결제일
									</th>
									<td>
										<input class="tbox regFullSort" value="2">
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
								<div class="titleText">집행계획등록</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
								<tr>
									<th>지역</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>지사명</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>대리점</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>부서</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>요청자</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										종류
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">-선택-</a>
											<ul>
												<li><a href="javascript:void(0);">집행결의서</a></li>
												<li><a href="javascript:void(0);">품의서</a></li>
												<li><a href="javascript:void(0);">기안서</a></li>
												<li><a href="javascript:void(0);">기타</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>
										구분
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">-선택-</a>
											<ul>
												<li><a href="javascript:void(0);">고정비</a></li>
												<li><a href="javascript:void(0);">변동비</a></li>
												<li><a href="javascript:void(0);">예산</a></li>
												<li><a href="javascript:void(0);">기타</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>계약명</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>거래처명</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>이월금(차월)</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>총 금액</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>발안 일자</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>지급 요청일</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										집행수단
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">-선택-</a>
											<ul>
												<li><a href="javascript:void(0);">카드</a></li>
												<li><a href="javascript:void(0);">현금</a></li>
												<li><a href="javascript:void(0);">계좌이체</a></li>
												<li><a href="javascript:void(0);">어음</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>
										은행/카드사
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">-선택-</a>
											<ul>
												<li><a href="javascript:void(0);">신한카드</a></li>
												<li><a href="javascript:void(0);">롯데카드</a></li>
												<li><a href="javascript:void(0);">삼성카드</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>
										카드/계좌번호
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										예금주
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										집행마감일
									</th>
									<td>
										<div class="dateInputCase regFullSort">
											<input class="tbox dateBox shortMod" id="exEndDate" readonly="" placeholder="종료일 선택">
										</div>
									</td>
								</tr>
								<tr>
									<th>
										분할납부
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">-선택-</a>
											<ul>
												<li><a href="javascript:void(0);" class="popOpSel equalPaySort">Y</a></li>
												<li><a href="javascript:void(0);" class="popOpSel customPaySort">N</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr class="popOpShow equalPaySort hide">
									<th>
										회전월(회)
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr class="popOpShow customPaySort hide">
									<th>
										납부금 직접입력
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										해당월
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										결제일
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>비고</th>
									<td>
										<textarea class="tarea regFullSort"></textarea>
									</td>
								</tr>
							</tbody>
						</table>
					</div>


					<!-- :: ksg_20200622_1558 open : 자세히 보기 파트. 사용 여지가 있으므로 남겨둠.  -->
					<!-- <div class="conGroup verticalManageSort specHiddenMod hide">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">추가입력사항</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>
									분할납부
								</th>
								<td>
									<span class="sbox regFullSort">
										<a href="javascript:void(0);">-선택-</a>
										<ul>
											<li><a href="javascript:void(0);" class="popOpSel equalPaySort">Y</a></li>
											<li><a href="javascript:void(0);" class="popOpSel customPaySort">N</a></li>
										</ul>
									</span>
								</td>
							</tr>
							<tr class="popOpShow equalPaySort hide">
								<th>
									회전월(회)
								</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr class="popOpShow customPaySort hide">
								<th>
									납부금 직접입력
								</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>
									해당월
								</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>
									결제일
								</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="btnGroup verticalBottomSort">
						<a href="javascript:void(0);" class="btn specShowMod">상세보기 ▼</a>
						<a href="javascript:void(0);" class="btn specHideMod hide">상세보기 닫기 ▲</a>
					</div> -->
					<!-- :: ksg_20200622_1558 close  -->
				</div>
				<div class="btnGroup horizontalBottomSort">
					<a href="javascript:void(0);" class="btn saveSort">저장</a>
				</div>
			</div>
		</div>
	</div>
</div>



<script src="/sinwon/common/js/datePick.js"></script>
<script>

// :: 상세보기 표시, 숨기기.
$(document).on('click', '.btn.specShowMod', function(){
	$('.specHideMod.hide').removeClass('hide');
	$('.verticalManageSort.specHiddenMod.hide').removeClass('hide');
	$(this).addClass('hide');

});
$(document).on('click', '.btn.specHideMod', function(){
	$('.verticalManageSort.specHiddenMod').addClass('hide');
	$('.btn.specShowMod.hide').removeClass('hide');
	$(this).addClass('hide');
});


// :: 상세검색 표시, 숨기기. 
// $(document).on('click', '.btn.specSearchShowMod', function(){
// 	$('.specSearchHideMod.hide').removeClass('hide');
// 	$('.verticalManageSort.specSearchHiddenMod.hide').removeClass('hide');
// 	$(this).addClass('hide');

// });
// $(document).on('click', '.btn.specSearchHideMod', function(){
// 	$('.verticalManageSort.specSearchHiddenMod').addClass('hide');
// 	$('.btn.specSearchShowMod.hide').removeClass('hide');
// 	$(this).addClass('hide');
// });





// :: "계획 추가" 버튼 클릭 시, 계획 추가 팝업 나타나는 스크립트.
// $(document).on('click', '.btn.addPlanBtn', function(){
// 	$('.popup.centerSort').show();
// 	$('.contents').addClass('overlay');
// });
// :: 직원 추가 팝업창에서 "등록" 버튼 클릭 시, 팝업창 닫히는 스크립트.
// function choicePop(){
// 	$('.popup.centerSort').hide();
// 	$('.contents').removeClass('overlay');
// }
// :: 팝업창의 X 버튼 클릭 시, 팝업 닫기 스크립트.
// function closePop(){
// 	$('.popup.centerSort').hide();
// 	$('.contents').removeClass('overlay');
// }
// :: 팝업창 외부 클릭 시 팝업창 닫기 스크립트.
// $(document).mouseup(function (e) {
// 	let overlay = $('.contents');
// 	let popupM = $('.popup.centerSort')

// 	if (!popupM.is(e.target) && popupM.has(e.target).length === 0){
// 		popupM.hide();
// 		overlay.removeClass('overlay');
// 	}
// });




// :: 납부방식 선택 시 회전월, 납부금 직접입력 파트가 선택적으로 표시되는 스크립트.
$(document).ready(function(){
	// $('.optionShow.equalPaySort').hide();
	$('.infoOpShow.customPaySort').hide();
});
$(document).on('click', '.infoOpSel.equalPaySort', function(){
	$('.infoOpShow.equalPaySort').show();
	$('.infoOpShow.customPaySort').hide();
});
$(document).on('click', '.infoOpSel.customPaySort', function(){
	$('.infoOpShow.equalPaySort').hide();
	$('.infoOpShow.customPaySort').show();
});



// :: 팝업창에서 납부방식 선택 시 회전월, 납부금 직접입력 파트가 선택적으로 표시되는 스크립트.
// $(document).ready(function(){
// 	$('.popOpShow.equalPaySort').hide();
// 	$('.popOpShow.customPaySort').hide();
// });
$(document).on('click', '.popOpSel.equalPaySort', function(){
	$('.popOpShow.equalPaySort').show();
	$('.popOpShow.customPaySort').hide();
});
$(document).on('click', '.popOpSel.customPaySort', function(){
	$('.popOpShow.equalPaySort').hide();
	$('.popOpShow.customPaySort').show();
});





// :: 검색 결과 클릭 시, 상세정보 표시.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable td', function(){
	$('.specInfoGroup.hide').removeClass('hide');
	$('.specRegGroup').addClass('hide');
	$(this).parent().siblings('tr').removeClass('activated');
	$(this).parent('tr').addClass('activated');
});
// :: 집행등록 버튼 클릭 시, 등록창 표시.
$(document).on('click', '.btn.addPlanBtn', function(){
	$('.specInfoGroup').addClass('hide');
	$('.conGroup.verticalManageSort .searchResultTable tr').removeClass('activated');
	$('.specRegGroup.hide').removeClass('hide');
});

</script>
</body>
</html>