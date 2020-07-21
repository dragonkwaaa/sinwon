<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0103';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<!-- <div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">직원검색</div>
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
									<select class="sbox">
										<option>전체</option>
										<option>직원명</option>
										<option>부서명</option>
										<option>지사/대리점</option>
									</select>
									<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
								</td>
							</tr>
							<tr>
								<th>소속</th>
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
											<div class="checkBoxTitle">본사</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">지사</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">대리점</div>
										</div>
									</div>
								</td>
								<th>
									사용여부
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
											<div class="checkBoxTitle">사용</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">미사용</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>권한</th>
								<td colspan="4">
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
											<div class="checkBoxTitle">대시보드</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">예산관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">집행관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">결산관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">기초항목 관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">지출요청</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">수입관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">직원관리</div>
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
									<div class="btnGroup inTableSearch">
										<a href="javascript:void(0);" class="btn searchSort">검색</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> -->
			<div class="section horizontalManageSort searcManageSort extendMod">
				<div class="titleBox manageHeadlineSort">직원목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<!-- <div class="selectGroup monthSort">
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
						</div> -->
						<div class="titleBox inlistConSort">
							<div class="titleText">직원목록</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">직원추가</a>
						</div>
						<!-- <div class="sboxGroup listArraySort">
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
						</div> -->
					</div>
					<table class="searchResultTable ">
						<colgroup></colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>직원명</th>
							<th>아이디</th>
							<!-- <th>비밀번호</th> -->
							<!-- <th>소속</th> -->
                            <th>승인 등급</th>
							<th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div>2</div>
							</td>
							<td>곽반장</td>
							<td>
								sinwon1
							</td>
                            <td>
								중간승인자
							</td>
							<!-- <td>
							</td> -->
							<td>
								<div class="inTableRadioGroup">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse" value="1" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse" value="2" checked="">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn delSort">삭제</a>
								</div>
							</td>
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
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">직원정보</div>
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
										<input class="tbox regFullSort" value="2" readonly>
									</td>
								</tr>
								<tr>
									<th>등록일</th>
									<td>
										<input class="tbox regFullSort" value="2020-03-11 11:00" readonly>
									</td>
								</tr>
								<!-- <tr>
									<th>입사일</th>
									<td>
										<input class="tbox regFullSort" value="2020-03-11 11:00" readonly>
									</td>
								</tr> -->
								<tr>
									<th>직원명</th>
									<td>
										<input class="tbox regFullSort" value="곽반장">
									</td>
								</tr>
								<tr>
									<th>아이디</th>
									<td>
										<input class="tbox regFullSort" value="sinwon1">
									</td>
								</tr>
								<tr>
									<th>비밀번호</th>
									<td>
										<input class="tbox regFullSort" value="asdf1">
									</td>
								</tr>
								<!-- <tr>
									<th>소속</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. 본사</option>
											<option selected>2. 인천지사</option>
											<option>3. 경기지사</option>
											<option>4. 부산지사</option>
										</select>
									</td>
								</tr> -->
								<!-- <tr>
									<th>부서</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. 간호부</option>
											<option selected>2. 원무부</option>
										</select>
									</td>
								</tr> -->
								<!-- <tr>
									<th>직급</th>
									<td>
										<input class="tbox regFullSort" value="과장">
									</td>
								</tr> -->
								<!-- <tr>
									<th>사용여부</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. 사용</option>
											<option>2. 미사용</option>
										</select>
									</td>
								</tr> -->
                                <tr>
									<th>승인 등급</th>
									<td>
                                        <select class="sbox regFullSort listMod">
							            	<option>선택</option>
							            	<option selected="">1. 일반승인자</option>
							            	<option>2. 중간승인자</option>
							            	<option>3. 최종승인자</option>
							            </select>
									</td>
								</tr>
								<tr>
									<th>권한</th>
									<td>
										<div class="inTableRadioGroup inListSort">
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">대시보드</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="" checked>
													<label></label>
												</div>
												<div class="checkBoxTitle">예산관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="" checked>
													<label></label>
												</div>
												<div class="checkBoxTitle">집행관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">결산관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">기초항목관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">지출요청</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">수입관리</div>
											</div>
											<div class="checkBoxCase">
												<div class="checkBoxIconBox">
													<input type="checkbox" name="" value="">
													<label></label>
												</div>
												<div class="checkBoxTitle">직원관리</div>
											</div>
										</div>
									</td>
								</tr>
								<!-- <tr>
									<th>휴대폰번호</th>
									<td>
										<input class="tbox regFullSort" value="010-1234-1234">
									</td>
								</tr>
								<tr>
									<th>회사 전화번호</th>
									<td>
										<input class="tbox regFullSort" value="02-1234-1234">
									</td>
								</tr> -->
							</tbody>
						</table>
					</div>
				</div>
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">직원등록</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<!-- <tr>
								<th>입사일</th>
								<td>
									<input class="tbox regFullSort" value="2020-03-11 11:00" readonly>
								</td>
							</tr> -->
							<tr>
								<th>직원명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>아이디</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>비밀번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<!-- <tr>
								<th>분류</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 본사</option>
										<option>2. 지사</option>
										<option>3. 대리점</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>소속</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 본사</option>
										<option>2. 인천지사</option>
										<option>3. 경기지사</option>
										<option>4. 부산지사</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>부서</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 간호부</option>
										<option>2. 원무부</option>
									</select>
								</td>
							</tr> -->
							<!-- <tr>
								<th>직급</th>
								<td>
									<input class="tbox regFullSort" value="과장">
								</td>
							</tr> -->
							<!-- <tr>
								<th>사용여부</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 사용</option>
										<option>2. 미사용</option>
									</select>
								</td>
                            </tr> -->
                            <tr>
								<th>승인 등급</th>
								<td>
                                    <select class="sbox regFullSort listMod">
							        	<option>선택</option>
							        	<option selected="">1. 일반승인자</option>
							        	<option>2. 중간승인자</option>
							        	<option>3. 최종승인자</option>
							        </select>
								</td>
							</tr>
							<tr>
								<th>권한</th>
								<td>
									<div class="inTableRadioGroup inListSort">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">대시보드</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">예산관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">집행관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">결산관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">기초항목관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">지출요청</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">수입관리</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">직원관리</div>
										</div>
									</div>
								</td>
							</tr>
							<!-- <tr>
								<th>휴대폰번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>회사 전화번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr> -->
							</tbody>
						</table>
					</div>
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













// :: "직원 추가" 버튼 클릭 시, 직원 추가 팝업 나타나는 스크립트.
$(document).on('click', '.btn.addStaffBtn', function(){
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