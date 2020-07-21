<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
    $lCode					=	'0101';
    $subCode				=	'021';
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
											<div class="checkBoxTitle">이체대기</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">이체완료</div>
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
						<!-- <div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
                        </div> -->
                        
						<div class="sboxGroup listArraySort">
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
                        </div>
					</div>
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR mt5">수입 합계 : 120,000,000 원</div>
                                <div class="tAlignR mt5">지출 합계 : 120,000,000 원</div>
								<div class="tAlignR mt5">고정비용 소계 : 60,000,000 원</div>
                                <div class="tAlignR mt5">변동비용 소계 : 60,000,000 원</div>
								<div class="tAlignR mt5">예산대비증감 총계 : 0 원</div>
							</td>
						</tr>
						
						</tbody>
					</table>
					<table class="searchResultTable ">
						<colgroup>
							<col width="50">
							<col width="100">
							<col width="120">
							<col width="80">
							<col width="120">
							<col width="100">
							<col width="100">
							<col width="110">
							<col width="100">
							<col width="100">
							<col width="100">
                            <col width="150">
							<col width="100">
                            <col width="80">
                            <col width="80">
						</colgroup>
						<thead>
						<tr>
							<th rowspan="2">No.</th>
							<th rowspan="2">과목</th>
                            <th rowspan="2">거래처</th>
                            <th rowspan="2">직원</th>
                            <th rowspan="2">적요</th>
							<th colspan="2">예산</th>
							<th rowspan="2">결제수단</th>
							<th rowspan="2">결제수단정보</th>
							<th rowspan="2">결제일</th>
							<th rowspan="2">비고</th>
                            <th rowspan="2">등록일</th>
                            <th rowspan="2">이체선택</th>
                            <th rowspan="2">일반승인</th>
                            <th rowspan="2">중간승인</th>
                            <th rowspan="2">최종승인</th>
							<th rowspan="2">관리</th>
						</tr>
						<tr>
							<th>수입(원)</th>
							<th>지출(원)</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>3</td>
                            <td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목명" value="">
                                </div>
                            </td>
                            <td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="거래처코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="거래처명" value="">
                                </div>
                            </td>
                            <td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="직원코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="직원명" value="">
                                </div>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="">
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
								<input class="tbox regFullSort listMod" placeholder="" value="">
							</td>
							<td>
								<!-- <div>2020-06-23 13:00</div>
                                <div>(등록자:곽주임)</div> -->
							</td>
                            <td>
                                <!-- <div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn selcSort activated">해제</a>
								</div> -->
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
                        <tr>
							<td>2</td>
                            <td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목코드" value="1122">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목명" value="소모품비(관리)">
                                </div>
                            </td>
                            <td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="거래처코드" value="1234">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="거래처명" value="의약품도매점">
                                </div>
                            </td>
                            <td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="3311" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="곽대리" value="">
                                </div>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="1,000,000">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="국민계좌1">
							</td>
							<td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="국민은행" placeholder="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-1234-1234" placeholder="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽반장" placeholder="">
                                </div>
							</td>
							<td>
								<input class="tbox dateBox regFullSort listMod" id="payDate_2">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="에이디치히얌 소모품 구매">
							</td>
							<td>
                                <div>2020-06-23 13:00</div>
                                <div>(등록자:곽주임)</div>
							</td>
                            <td>
                                <div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn selSort activated">이체 선택</a>
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
							</td>
							<td>
                                <div class="btnGroup inListTable">
                                    <div>
                                        <a href="javascript:void(0);" class="btn modifySort">수정</a>
                                    </div>
									<div>
                                        <a href="javascript:void(0);" class="btn delSort mt3">승인</a>
                                    </div>
								</div>
							</td>
						</tr>
						<tr class="confirmed">
							<td>1</td>
                            <td>
								<div>1244</div>
                                <div>인건비(급여)</div>
							</td>
                            <td>
								<div>1234</div>
                                <div>약품소매점</div>
							</td>
                            <td>
								<div>1234</div>
                                <div>곽소장</div>
							</td>
                            <td>
								인건비 지급
							</td>
                            <td>
                                <div class="priceWord"></div>
                            </td>
                            <td>
								<div class="priceWord">4,050,000</div>
							</td>
							<td>
								우리은2
                            </td>
							<td>
                                <div>우리은행</div>
                                <div>1234-1234-1234</div>
								<div>곽반장</div>
							</td>
							<td>
								2020-05-13 12:00
							</td>
                            <td>
								6월 인건비 납부
							</td>
							<td>
                                <div>2020-06-23 13:00</div>
                                <div>(등록자:곽주임)</div>
							</td>
                            <td>
                                <div>2020-06-23 13:00</div>
                                <div>(실행자:곽주임)</div>
                            </td>
                            <td>
                                <div></div>
                                <div>2020.06.01 11:00</div>
                                <div>(승인자:곽주임)</div>
                            </td>
                            <td>
                                <div></div>
                                <div>2020.06.01 11:00</div>
                                <div>(승인자:곽소장)</div>
							</td>
                            <td>
                                <div></div>
                                <div>2020.06.01 11:00</div>
                                <div>(승인자:이사님)</div>
							</td>
							<td>
								승인됨
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
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


// :: 선택하기 버튼 스크립트. 
$(document).on('click', '.btn.selSort', function(){
    $(this).toggleClass('activated');
});


</script>
</body>
</html>