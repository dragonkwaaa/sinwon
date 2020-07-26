<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
    $lCode					=	'0101';
    $subCode				=	'022';
    $thirdCode				=	'0221';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">

            <div class="subMenuTab">
				<a href="/sinwon/budget/" class="btn subPartMod <?=($subCode == '021' ? ' activated' : '')?>">회사운영예산</a>
				<a href="/sinwon/budget/ex_index" class="btn subPartMod <?=($subCode == '022' ? ' activated' : '')?>">구매자금예산</a>
            </div> 
            


            <div class="subMenuTab">
				<a href="/sinwon/budget/ex_index" class="btn subPartMod <?=($thirdCode == '0221' ? ' activated' : '')?>">1차결제목록</a>
				<a href="/sinwon/budget/ex_indexTwo" class="btn subPartMod <?=($thirdCode == '0222' ? ' activated' : '')?>">2차결제목록</a>
			</div> 






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
									</div>
								</td>
							</tr>

                            <tr>
								<th>
									결제수단
								</th>
								<td colspan="3">
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
											<div class="checkBoxTitle">어음</div>
										</div>
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
                        <div class="sboxGroup listArraySort">
                            <a href="javascript:void(0);" class="btn listTopSort">선택 항목 이체</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">카드잔액관리</a>
							<select class="sbox">
								<option>번호순▼</option>
								<option>번호순▲</option>
								<option>등록순▼</option>
								<option>등록순▲</option>
                                <option>과목순▼</option>
								<option>과목순▲</option>
							</select>
							<select class="sbox">
								<option>40개씩</option>
								<option>80개씩</option>
								<option>100개씩</option>
							</select>
                        </div>
        
						<!-- <div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
                            <a href="javascript:void(0);" class="btn headRightAbMod addStaffBtn">카드잔액관리</a>
						</div> -->
						<!-- <div class="sboxGroup listArraySort">
                            <a href="javascript:void(0);" class="btn listTopSort">선택 항목 이체</a>
							<select class="sbox">
								<option>번호순▼</option>
								<option>번호순▲</option>
								<option>등록순▼</option>
								<option>등록순▲</option>
                                <option>과목순▼</option>
								<option>과목순▲</option>
							</select>
							<select class="sbox">
								<option>40개씩</option>
								<option>80개씩</option>
								<option>100개씩</option>
							</select>
						</div> -->
                    </div>
                    
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR">수입 합계 : 120,000,000 원</div>
                                <div class="tAlignR mt5">지출 합계 : 120,000,000 원</div>
								<div class="tAlignR mt5">고정비용 소계 : 60,000,000 원</div>
                                <div class="tAlignR mt5">변동비용 소계 : 60,000,000 원</div>
								<div class="tAlignR mt5">잔액 : 0 원</div>
							</td>
						</tr>
						
						</tbody>
                    </table>
                    





					<table class="searchResultTable ">
						<colgroup>
							<col width="50">
							<col width="80">
							<!-- <col width="100"> -->
							<col width="120">
							<col width="100">
							<col width="80">
							<col width="80">
							<col width="80">
							<col width="80">
							<col width="80">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <!-- <col width="100">
                            <col width="150">
                            <col width="100">
                            <col width="80"> -->
                            <col width="80">
						</colgroup>
						<thead>
						<tr>
                            <th rowspan="2">
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </th>
							<th rowspan="2">일</th>
							<th rowspan="2">구분</th>
							<th rowspan="2">거래처</th>
                            <th rowspan="2">해당월</th>
                            <th rowspan="2">회전일</th>
                            <th rowspan="2">분할금액</th>
                            <th rowspan="2">당월분</th>
                            <th rowspan="2">합계금액</th>
                            <th rowspan="2">총미지급금</th>
							<th rowspan="2">지급일자</th>
							<th rowspan="2">결제수단</th>
							<th rowspan="2">결제수단정보</th>
							<th rowspan="2">결제일</th>
							<th rowspan="2">비고</th>
							<th rowspan="2">등록일</th>
							<th rowspan="2">관리</th>
						</tr>
						</thead>
						<tbody>

                        <tr>
                            <td></td>
							<td>2</td>
							<td>
                                <input class="tbox regFullSort listMod" value="">
							</td>
							<td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="거래처코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="거래처명" value="">
                                </div>
                            </td>
							<!-- <td>
                                <input class="tbox regFullSort listMod" value="">
							</td> -->
							<!-- <td>
								<input class="tbox regFullSort listMod" value="">
							</td> -->
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
                            <td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod onlyNum" value="" readonly="">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod onlyNum" value="" readonly="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="">
                                <select class="sbox regFullSort listMod mt5">
							    	<option selected="">선택</option>
							    	<option>1. 카드</option>
                                    <option>2. 계좌이체</option>
                                    <option>3. 어음</option>
                                    <option>4. B2B</option>
							    </select>
							</td>
							<td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="예금주">
                                </div>
							</td>
							<td>
								<input class="tbox dateBox regFullSort listMod" id="payDate_2">
							</td>
                            <td>
								<input class="tbox dateBox regFullSort listMod" id="exEndDate">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
                                <div>2020-06-23 13:00</div>
                                <div>(등록자:곽주임)</div>
							</td>
                           
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
						<tr>
                            <td>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </td>
							<td>1</td>
							<td>
                                <input class="tbox regFullSort listMod" value="카드">
							</td>
							<td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="거래처코드" value="1111">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="거래처명" value="비품구매점">
                                </div>
                            </td>
							<!-- <td>
                                <input class="tbox regFullSort listMod" value="">
							</td> -->
							<!-- <td>
								<input class="tbox regFullSort listMod" value="">
							</td> -->
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="19.02">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="30">
							</td>
                            <td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="1,000,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="1,000,000">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod onlyNum" value="10,000,000" readonly="">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod onlyNum" value="9,000,000" readonly="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="우리카드1">
                                <select class="sbox regFullSort listMod mt5">
							    	<option selected="">선택</option>
							    	<option>1. 카드</option>
                                    <option>2. 계좌이체</option>
                                    <option>3. 어음</option>
                                    <option>4. B2B</option>
							    </select>
                                <div class="f_bold mt5">카드잔액 : 1,000,000,000원</div>
							</td>
							<td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="우리은행" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-1234-1234" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽반장" placeholder="예금주">
                                </div>
							</td>
							<td>
								<input class="tbox dateBox regFullSort listMod" id="payDate_2">
							</td>
                            <td>
								<input class="tbox dateBox regFullSort listMod" id="exEndDate">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="비품 구매 1건">
							</td>
							<td>
                                <div>2020-06-23 13:00</div>
                                <div>(등록자:곽주임)</div>
							</td>
                            <!-- <td>
                                <div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn selSort">이체 선택</a>
								</div>
                            </td>
                            <td>
                                <div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn vertSort modifySort">일반승인</a>
                                </div>
							</td>
                            <td>
                                <div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn vertSort modifySort">중간승인</a>
                                </div>
							</td>
                            <td>
                                <div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn vertSort modifySort">최종승인</a>
                                </div>
							</td> -->
							<td>
                                <div class="btnGroup inListTable">
                                    <div>
                                        <a href="javascript:void(0);" class="btn modifySort">수정</a>
                                    </div>
									<!-- <div>
                                        <a href="javascript:void(0);" class="btn delSort mt3">이체</a>
                                    </div> -->
								</div>
							</td>
						</tr>
						</tbody>
                    </table>
                    
                    
				</div>
			</div>
		</div>
	</div>
</div>



<div class="popup centerSort addStaffSort">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="//cleanadmin.heeyam.com//image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			카드잔액관리
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup">
				<colgroup>
					<col width="100">
					<col width="*">
				</colgroup>
                <thead>
                <tr>
                    <th>카드명</th>
                    <th>잔액(원)</th>
                </tr>
                </thead>
				<tbody>
					<tr>
						<td>현대카드1</td>
						<td>
							<input class="tbox regFullSort listMod priceMod" value="">
						</td>
					</tr>
					<tr>
						<td>우리카드1</td>
						<td>
							<input class="tbox regFullSort listMod priceMod" value="">
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
