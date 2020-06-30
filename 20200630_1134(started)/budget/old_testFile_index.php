<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0101';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">



			<!-- :: ksg_20200621_2121 open : 사용할수도. 예산관리 페이지에서 수입과 지출을 구분하는 탭. 페이지 최상단 버전. 고유 케이스 가진 버전.  -->
			<!-- <div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">세부항목</div>
				<div class="conGroup verticalManageSort">
					<a href="javascript:void(0);" class="btn subPartMod">수입</a>
					<a href="javascript:void(0);" class="btn subPartMod activated">지출</a>
				</div>
			</div> -->
			<!-- :: ksg_20200621_2121 close  -->


			<!-- :: ksg_20200621_2122 open : 사용할수도. 예산관리 페이지에서 수입과 지출을 구분하는 탭. 페이지 최상단 버전. 케이스 없이 버튼만 최상단 표시되는 버전.  -->
			<!-- <div class="subMenuTab">
				<a href="javascript:void(0);" class="btn subPartMod">수입</a>
				<a href="javascript:void(0);" class="btn subPartMod activated">지출</a>
			</div> -->
			<!-- :: ksg_20200621_2122 close  -->
			




			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">예산검색</div>
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
									<select class="sbox">
										<option>전체</option>
										<option>과목명</option>
										<option>적요명</option>
									</select>
									<input class="tbox searchInput topLineSearchMod" placeholder="검색어를 입력해주세요.">
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
											<div class="checkBoxTitle">전체</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">수입</div>
										</div>
										<!-- <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">이월금</div>
										</div> -->
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">고정비</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">변동비</div>
										</div>
										<!-- <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">매입예산</div>
										</div> -->
									</div>
								</td>
							</tr>

							<tr>
								<th>
									상태
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
											<div class="checkBoxTitle">승인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">미승인</div>
										</div>
									</div>
								</td>

								<th>
									검색기간
								</th>
								<td>
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
			</div>
			<div class="section horizontalManageSort searcManageSort fullMod">
				<div class="titleBox manageHeadlineSort">예산목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">

						<div class="selectGroup monthSort">
							<select>
								<option selected>2020년</option>
								<option>2019년</option>
								<option>2018년</option>
								<option>2017년</option>
							</select>
							<select>
								<option>전체</option>
								<option>6월</option>
								<option>5월</option>
								<option selected>4월</option>
								<option>3월</option>
							</select>
							<select>
								<option>전체</option>
								<option selected>1일</option>
								<option>2일</option>
								<option>3일</option>
								<option>4일</option>
							</select>
						</div>

						<div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
							<!-- <a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">예산등록</a> -->
						</div>
						<!-- <div class="listSelector leftSort">
							<a href="javascript:void(0);" class="btn subPartMod">수입</a>
							<a href="javascript:void(0);" class="btn subPartMod activated">지출</a>
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
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR mt5">수입 예상 : 120,000,000 원</div>
								<div class="tAlignR mt5">지출 총계 : 100,000,000 원</div>
								<div class="tAlignR mt5">손익 : 20,000,000 원</div>
							</td>
						</tr>
						
						</tbody>
					</table>



					<table class="searchResultTable ">
						<colgroup></colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>구분</th>
							<th>과목</th>
							<th>적요</th>
							<th>수입</th>
							<th>지출</th>
							<!-- <th>비율</th> -->
							<th>결제수단</th>
							<th>결제일</th>
							<th>집행마감일</th>
							<th>비고</th>
							<th>등록/수정일</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>3</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>선택</option>
									<option>예상수입</option>
									<option>고정비</option>
									<option>변동비</option>
								</select>
							</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>선택</option>
									<option>1. 인건비(급여)</option>
									<option>2. 공과금</option>
								</select>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort priceMod onlyNum" value="">
							</td>
							<td>
								<input class="tbox regFullSort priceMod onlyNum" value="">
							</td>
							<td>
								-
							</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>선택</option>
									<option>1. 국민카드1</option>
									<option>2. 국민카드2</option>
								</select>
							</td>
							<td>
								<input class="tbox dateBox regFullSort" id="payDate">
							</td>
							<td>
								<input class="tbox dateBox regFullSort" id="exEndDate">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								2020-06-23 13:00
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
									<!-- <a href="javascript:void(0);" class="btn delSort">승인</a> -->
								</div>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>예상수입</option>
									<option>고정비</option>
									<option selected>변동비</option>
								</select>
							</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>1. 소모품비(관리)</option>
									<option>2. 소모품비(영업)</option>

								</select>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="원무부 7월 인건비">
							</td>
							<td>
								<input class="tbox regFullSort priceMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort priceMod" value="6,050,000">
							</td>
							<td>
								60%
							</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>1. 국민카드1</option>
									<option>2. 국민카드2</option>
								</select>
							</td>
							<td>
								<input class="tbox dateBox regFullSort" id="payDate" value="2020-06-11">
							</td>
							<td>
								<input class="tbox dateBox regFullSort" id="exEndDate" value="2020-06-22">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="사업소득세 포함">
							</td>
							<td>
								2020-06-23 13:00
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
									<a href="javascript:void(0);" class="btn delSort mt3">승인</a>
								</div>
							</td>
						</tr>
						<tr class="confirmed">
							<td>1</td>
							<td>
								<div class="tAlignL selectAltMod">변동비</div>
							</td>
							<td>
								<div class="tAlignL selectAltMod">1. 소모품비(관리)</div>
							</td>
							<td>
								원무부 7월 소모품비
							</td>
							<td>
								<!-- <input class="tbox regFullSort priceMod" value="" readonly> -->
							</td>
							<td>
								<div class="tAlignR">4,050,000</div>
							</td>
							<td>
								40%
							</td>
							<td>
								<!-- <select class="sbox regFullSort listMod">
									<option>1. 국민카드1</option>
									<option selected>2. 국민카드2</option>
								</select> -->
								<div class="tAlignL selectAltMod">1. 국민카드2</div>
							</td>
							<td>
								<!-- <input class="tbox dateBox regFullSort" id="payDate" readonly=""> -->
								2020-05-13 12:00
							</td>
							<td>
								<!-- <input class="tbox dateBox regFullSort" id="exEndDate" readonly=""> -->
								2020-06-01 11:11
							</td>
							<td>
								외주,시약, 소모품비,등등
							</td>
							<td>
								2020-06-23 13:00
							</td>
							<td>
								승인됨
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






			<!-- <div class="section horizontalManageSort extendMod">
				<div class="titleBox manageHeadlineSort">상세정보</div>
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort underBtnMod">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">예산정보</div>
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
									<th>등록자</th>
									<td>
										<input class="tbox regFullSort" value="원무부 대리 곽반장" readonly>
									</td>
								</tr>
								<tr>
									<th>구분</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">고정비</a>
											<ul>
												<li><a href="javascript:void(0);">고정비</a></li>
												<li><a href="javascript:void(0);">이월금</a></li>
												<li><a href="javascript:void(0);">변동비</a></li>
												<li><a href="javascript:void(0);">기타</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>과목</th>
									<td>
										<input class="tbox regFullSort" value="인건비(급여)">
									</td>
								</tr>
								<tr>
									<th>적요</th>
									<td>
										<input class="tbox regFullSort" value="원무부 7월 인건비">
									</td>
								</tr>
								<tr>
									<th>집행대상</th>
									<td>
										<input class="tbox regFullSort" value="원무부">
									</td>
								</tr>
								<tr>
									<th>수입</th>
									<td>
										<input class="tbox regFullSort" value="-">
									</td>
								</tr>
								<tr>
									<th>지출</th>
									<td>
										<input class="tbox regFullSort" value="-">
									</td>
								</tr>
								<tr>
									<th>집행상태</th>
									<td>
										<input class="tbox regFullSort" value="미승인" readonly>
									</td>
								</tr>
								<tr>
									<th>발안일자</th>
									<td>
										<input class="tbox regFullSort" value="2020-06-10" readonly>
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
									<th>비고</th>
									<td>
										<textarea class="tarea regFullSort"></textarea>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort underBtnMod">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">예산등록</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
								<tr>
									<th>등록자</th>
									<td>
										<input class="tbox regFullSort" value="원무부 대리 곽반장">
									</td>
								</tr>
								<tr>
									<th>구분</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">-선택-</a>
											<ul>
												<li><a href="javascript:void(0);">고정비</a></li>
												<li><a href="javascript:void(0);">이월금</a></li>
												<li><a href="javascript:void(0);">변동비</a></li>
												<li><a href="javascript:void(0);">기타</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>과목</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>적요</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>집행대상</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>수입</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>지출</th>
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
											<input class="tbox regFullSort" value="2020-06-15" readonly>
										</div>
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
				</div>
				<div class="btnGroup horizontalBottomSort">
					<a href="javascript:void(0);" class="btn saveSort">저장</a>
				</div>
			</div> -->
		</div>
	</div>
</div>


<script src="/sinwon/common/js/datePick.js"></script>
<script>





// :: 납부방식 선택 시 회전월, 납부금 직접입력 파트가 선택적으로 표시되는 스크립트.
// $(document).ready(function(){
// 	// $('.optionShow.equalPaySort').hide();
// 	$('.infoOpShow.customPaySort').hide();
// });
// $(document).on('click', '.infoOpSel.equalPaySort', function(){
// 	$('.infoOpShow.equalPaySort').show();
// 	$('.infoOpShow.customPaySort').hide();
// });
// $(document).on('click', '.infoOpSel.customPaySort', function(){
// 	$('.infoOpShow.equalPaySort').hide();
// 	$('.infoOpShow.customPaySort').show();
// });



// :: 팝업창에서 납부방식 선택 시 회전월, 납부금 직접입력 파트가 선택적으로 표시되는 스크립트.
// $(document).ready(function(){
// 	$('.popOpShow.equalPaySort').hide();
// 	$('.popOpShow.customPaySort').hide();
// });
// $(document).on('click', '.popOpSel.equalPaySort', function(){
// 	$('.popOpShow.equalPaySort').show();
// 	$('.popOpShow.customPaySort').hide();
// });
// $(document).on('click', '.popOpSel.customPaySort', function(){
// 	$('.popOpShow.equalPaySort').hide();
// 	$('.popOpShow.customPaySort').show();
// });





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
