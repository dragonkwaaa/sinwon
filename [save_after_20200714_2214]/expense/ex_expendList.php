<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0102';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
        <div class="subMenuTab">
			<a href="/sinwon/expense/expendList" class="btn subPartMod ">현금집행</a>
			<a href="/sinwon/expense/ex_expendList" class="btn subPartMod activated">구매자금집행</a>
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
								<td>
									<select class="sbox">
										<option>전체</option>
										<option>업체명</option>
										<option>과목</option>
										<option>코드</option>
									</select>
									<input class="tbox searchInput topLineSearchMod" placeholder="검색어를 입력해주세요.">
								</td>
								<th>
									결제수단
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
									과목
								</th>
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
											<div class="checkBoxTitle">활동비</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">미지급금</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">지급수수료</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>
									검색기간
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
			</div>
			<div class="section horizontalManageSort searcManageSort fullMod">
				<div class="titleBox manageHeadlineSort">지출목록</div>
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
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR mt5">총 합계금액 : 100,000,000 원</div>
								<div class="tAlignR mt5">총 미지급금 : 100,000,000 원</div>
							</td>
						</tr>
						</tbody>
					</table>
					<table class="searchResultTable">
						<colgroup></colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<!-- <th>구분</th>
                            <th>과목</th> -->
                            <th>문서분류</th>
                            <th>업체명</th>
                            <th>약정</th>
                            <th>분할횟수</th>
                            <th>월금액</th>
                            <th>해당월</th>
                            <th>본예산금액</th>
                            <th>미지급금</th>
                            <th>지급방식</th>
                            <th>지급수단</th>
                            <th>지급수단정보</th>
                            <th>비고</th>
                            <th>등록일</th>
                            <th>승인</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>5</td>
							<td>
                                <input class="tbox regFullSort listMod" value="">
                            </td>
                            <!-- <td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목명" value="">
                                </div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="">
							</td> -->
							<td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="업체코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="업체명" value="">
                                </div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="">
                            </td>

                            <td>
								<input class="tbox regFullSort listMod" value="">
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
								<input class="tbox regFullSort listMod" value="">
							</td>
                            <td></td>
                            <td></td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>

						<tr>
							<td>4</td>
							<td>
                                <input class="tbox regFullSort listMod" value="기안서">
							</td>
							<td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="업체코드" value="(1144)">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="업체명" value="투제이온">
                                </div>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="1,000,000">
                                <div class="priceWord">원</div>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="1">
                                <div class="priceWord">회</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="50,000">
                                <div class="priceWord">원</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="10,000">
                                <div class="priceWord">원</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="50,000">
                                <div class="priceWord">원</div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="0">
                                <div class="priceWord">원</div>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="법인카드">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="우리은행5">
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="우리은행">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="1234-1234-1234">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="">
                                </div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="투제이온 변동비 비고">
							</td>
                            <td>2020.06.04 15:00</td>
                            <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn vertSort modifySort">승인1</a>
									<a href="javascript:void(0);" class="btn vertSort delSort mt3">승인2</a>
								</div>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn vertSort modifySort">수정</a>
									<a href="javascript:void(0);" class="btn vertSort delSort mt3">최종승인</a>
									<a href="javascript:void(0);" class="btn vertSort modifySort mt3">이월</a>
								</div>
							</td>
						</tr>

                        <tr>
							<td>3</td>
							<td>
                                <input class="tbox regFullSort listMod" value="품의서">
							</td>
							<td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="업체코드" value="(3511)">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="업체명" value="투제이온">
                                </div>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="1,000,000">
                                <div class="priceWord">원</div>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="1">
                                <div class="priceWord">회</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="50,000">
                                <div class="priceWord">원</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="10,000">
                                <div class="priceWord">원</div>
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="50,000">
                                <div class="priceWord">원</div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="0">
                                <div class="priceWord">원</div>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="B2B">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="기업은1">
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="기업은행">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="1234-1234-1234">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="곽반장">
                                </div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="투제이온 고정비 비고">
							</td>
                            <td>2020.06.04 15:00</td>
                            <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn vertSort modifySort">승인1</a>
									<a href="javascript:void(0);" class="btn vertSort delSort mt3">승인2</a>
								</div>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn vertSort modifySort">수정</a>
									<a href="javascript:void(0);" class="btn vertSort delSort mt3">최종승인</a>
									<a href="javascript:void(0);" class="btn vertSort modifySort mt3">이월</a>
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

</script>
</body>
</html>