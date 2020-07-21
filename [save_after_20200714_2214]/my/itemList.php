<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0107';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">

			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">품목검색</div>
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
							</tr>
							<tr>
								
								<!-- <th>승인여부</th>
								<td>
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">승인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">미승인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">반려</div>
										</div>
									</div>
								</td> -->
							</tr>
							<tr>
								<th>계정과목</th>
								<td colspan="4">
									<!-- <span class="sbox">
										<a href="javascript:void(0);">고정비용</a>
										<ul>
											<li><a href="javascript:void(0);">고정비용</a></li>
											<li><a href="javascript:void(0);">변동비용</a></li>
										</ul>
									</span> -->
									<span class="sbox">
										<a href="javascript:void(0);">인건비</a>
										<ul>
											<li><a href="javascript:void(0);">인건비</a></li>
											<li><a href="javascript:void(0);">4대보험</a></li>
											<li><a href="javascript:void(0);">퇴직금</a></li>
											<li><a href="javascript:void(0);">관리비</a></li>
											<li><a href="javascript:void(0);">대출상환금</a></li>
										</ul>
									</span>
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
				<!-- <div class="btnGroup verticalBottomSort">
					<a href="javascript:void(0);" class="btn searchSort">검색</a>
				</div> -->
			</div>
			<div class="section horizontalManageSort searcManageSort extendMod">
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
							<a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">품목추가</a>
						</div>
						<!-- <div class="modifyHeadlineBtnGroup">
							<span class="sbox changeListInfoMod">
								<a href="javascript:void(0);">-선택-</a>
								<ul>
									<li><a href="javascript:void(0);">사용</a></li>
									<li><a href="javascript:void(0);">미사용</a></li>
								</ul>
							</span>
							<a href="javascript:void(0);" class="btn listDelSort ml5">선택수정</a>
							<a href="javascript:void(0);" class="btn listDelSort ml5">선택삭제</a>
						</div> -->
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
							<th>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</th>
							<th>No.</th>
							<th>품목코드</th>
							<th>유형</th>
							<th>품목명</th>
						
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>
								<div>11</div>
								<!-- <a href="javascript:void(0);" class="btn memoSort">메모</a> -->
							</td>
							<td>1144</td>
							<td>지출</td>
							<td>인건비</td>
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
				<div class="conGroup verticalManageSort">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">품목정보</div>
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
								<th>품목코드</th>
								<td>
									<input class="tbox regFullSort" value="1144">
								</td>
							</tr>
							<tr>
								<th>제목</th>
								<td>
									<input class="tbox regFullSort" value="에이디치히얌 정기 거래">
								</td>
							</tr>
							<tr>
								<th>별명</th>
								<td>
									<input class="tbox regFullSort" value="hd주거래">
								</td>
							</tr>
							<tr>
								<th>부서</th>
								<td>
									<input class="tbox regFullSort" value="원무부">
								</td>
							</tr>
							<tr>
								<th>거래업체명</th>
								<td>
									<input class="tbox regFullSort" value="에이디치히얌">
								</td>
							</tr>
							<tr>
								<th>상세내용</th>
								<td>
									<textarea class="tarea regFullSort">상세내용.</textarea>
								</td>
							</tr>
							<tr>
								<th>금액</th>
								<td>
									<input class="tbox regFullSort" value="15,000,000원">
								</td>
							</tr>
							<tr>
								<th>이월금</th>
								<td>
									<input class="tbox regFullSort" value="15,000,000원">
								</td>
							</tr>
							<tr>
								<th>결제유형</th>
								<td>
									<span class="sbox regFullSort">
										<a href="javascript:void(0);">수입</a>
										<ul>
											<li><a href="javascript:void(0);">수입</a></li>
											<li><a href="javascript:void(0);">지출</a></li>
										</ul>
									</span>
								</td>
							</tr>
							<tr>
								<th>결제방법</th>
								<td>
									<span class="sbox regFullSort">
										<a href="javascript:void(0);">현금</a>
										<ul>
											<li><a href="javascript:void(0);">계좌이체</a></li>
											<li><a href="javascript:void(0);">어음</a></li>
											<li><a href="javascript:void(0);">카드</a></li>
										</ul>
									</span>
								</td>
							</tr>
							<tr>
								<th>결제한도</th>
								<td>
									<input class="tbox regFullSort" value="15,000,000원">
								</td>
							</tr>
							<tr>
								<th>비고</th>
								<td>

									<textarea class="tarea regFullSort">
										관련 정보.
									</textarea>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- <div class="conGroup verticalManageSort specHiddenMod hide">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">상세정보</div>
						</div>
					</div>
					<table class="infoGroup">
						<colgroup>
							<col width="70">
							<col width="*">
						</colgroup>
						<tbody>
							<tr>
								<th>내용</th>
								<td>

									<textarea class="tarea regFullSort">
										시약병 50ml 구매
										메틸알코올 1L 구매
										하이드로클로로퀸 1L 구매
										에틸알코올 1L 구매
										액화 산소 1L 구매
									</textarea>
								</td>
							</tr>
							<tr>
								<th>
									계획지급월
								</th>
								<td>
									<div class="dateInputCase regFullSort">
										<input class="tbox dateBox shortMod" id="payDate" readonly="" placeholder="종료일">
									</div>
								</td>
							</tr>
							<tr>
								<th>
									실 해당월
								</th>
								<td>
									<div class="dateInputCase regFullSort">
										<input class="tbox dateBox shortMod" id="enterDate" readonly="" placeholder="종료일">
									</div>
								</td>
							</tr>
							<tr>
								<th>일 금액</th>
								<td>
									<input class="tbox regFullSort" value="10,000,000원">
								</td>
							</tr>
							<tr>
								<th>미수금 총액</th>
								<td>
									<input class="tbox regFullSort" value="30,000원">
								</td>
							</tr>
							<tr>
								<th>미수금 잔액</th>
								<td>
									<input class="tbox regFullSort" value="10,000원">
								</td>
							</tr>
							<tr>
								<th>
									은행/카드사
								</th>
								<td>
									<span class="sbox regFullSort">
										<a href="javascript:void(0);">전체</a>
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
									집행마감일
								</th>
								<td>
									<div class="dateInputCase regFullSort">
										<input class="tbox dateBox shortMod" id="exEndDate" readonly="" placeholder="종료일">
									</div>
								</td>
							</tr>
							<tr>
								<th>비고</th>
								<td>

									<textarea class="tarea regFullSort">
										관련 정보.
									</textarea>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btnGroup verticalBottomSort">
					<a href="javascript:void(0);" class="btn specShowMod">상세보기 ▼</a>
					<a href="javascript:void(0);" class="btn specHideMod hide">상세보기 닫기 ▲</a>
				</div> -->
				<div class="btnGroup horizontalBottomSort">
					<a href="javascript:void(0);" class="btn saveSort">저장</a>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="popup centerSort addPlanSort">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="//cleanadmin.heeyam.com//image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			계획추가
		</div>


		<div class="conGroup verticalManageSort">




			<table class="infoGroup">
				<colgroup>
					<col width="100">
					<col width="*">
				</colgroup>
				<tbody>
				<tr>
					<th>품목코드</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>제목</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>별명</th>
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
					<th>거래업체명</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>상세내용</th>
					<td>
						<textarea class="tarea regFullSort"></textarea>
					</td>
				</tr>
				<tr>
					<th>금액</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>이월금</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>유형</th>
					<td>
						<span class="sbox regFullSort">
							<a href="javascript:void(0);">수입</a>
							<ul>
								<li><a href="javascript:void(0);">수입</a></li>
								<li><a href="javascript:void(0);">지출</a></li>
							</ul>
						</span>
					</td>
				</tr>
				<tr>
					<th>분류1</th>
					<td>
						<span class="sbox regFullSort">
							<a href="javascript:void(0);">고정수입</a>
							<ul>
								<li><a href="javascript:void(0);">고정수입</a></li>
								<li><a href="javascript:void(0);">기타</a></li>
							</ul>
						</span>
					</td>
				</tr>
				<tr>
					<th>분류2</th>
					<td>
						<span class="sbox regFullSort">
							<a href="javascript:void(0);">대리점</a>
							<ul>
								<li><a href="javascript:void(0);">대리점</a></li>
								<li><a href="javascript:void(0);">직영영업소</a></li>
							</ul>
						</span>
					</td>
				</tr>
				<tr>
					<th>분류3</th>
					<td>
						<input class="tbox regFullSort" value="" placeholder="직접입력">
					</td>
				</tr>
				<tr>
					<th>결제방법</th>
					<td>
						<span class="sbox regFullSort">
							<a href="javascript:void(0);">현금</a>
							<ul>
								<li><a href="javascript:void(0);">계좌이체</a></li>
								<li><a href="javascript:void(0);">어음</a></li>
								<li><a href="javascript:void(0);">카드</a></li>
							</ul>
						</span>
					</td>
				</tr>
				<tr>
					<th>결제한도</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				</tbody>
			</table>
		</div>

		<div class="btnGroup verticalBottomSort">
			<a href="javascript:choicePop();" class="btn searchSort">등록</a>
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
$(document).on('click', '.btn.specSearchShowMod', function(){
	$('.specSearchHideMod.hide').removeClass('hide');
	$('.verticalManageSort.specSearchHiddenMod.hide').removeClass('hide');
	$(this).addClass('hide');

});
$(document).on('click', '.btn.specSearchHideMod', function(){
	$('.verticalManageSort.specSearchHiddenMod').addClass('hide');
	$('.btn.specSearchShowMod.hide').removeClass('hide');
	$(this).addClass('hide');
});

















// :: "계획 추가" 버튼 클릭 시, 계획 추가 팝업 나타나는 스크립트.
$(document).on('click', '.btn.addPlanBtn', function(){
	$('.popup.centerSort').show();
	$('.contents').addClass('overlay');
});
// :: 직원 추가 팝업창에서 "등록" 버튼 클릭 시, 팝업창 닫히는 스크립트.
function choicePop(){
	$('.popup.centerSort').hide();
	$('.contents').removeClass('overlay');
}
// :: 팝업창의 X 버튼 클릭 시, 팝업 닫기 스크립트.
function closePop(){
	$('.popup.centerSort').hide();
	$('.contents').removeClass('overlay');
}
// :: 팝업창 외부 클릭 시 팝업창 닫기 스크립트.
$(document).mouseup(function (e) {
	let overlay = $('.contents');
	let popupM = $('.popup.centerSort')

	if (!popupM.is(e.target) && popupM.has(e.target).length === 0){
		popupM.hide();
		overlay.removeClass('overlay');
	}
});
</script>
</body>
</html>