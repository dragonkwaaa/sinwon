<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0102';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
       

            <div class="subMenuTab">
                <a href="/sinwon/expense/expendList" class="btn subPartMod  activated">지출자료관리</a>
                <a href="/sinwon/expense/outcomeList" class="btn subPartMod">고정지출관리</a>
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

							<!-- <tr>
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
							</tr> -->
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
						<colgroup>
                            <col width="50">
                            <col width="100">
                            <col width="100">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="120">
                            <col width="80">
                            <col width="80">
                            <col width="100">
                            <!-- <col width="80"> -->
                            <col width="150">
                            <col width="80">
                            <!-- <col width="80">
                            <col width="80"> -->
                            <col width="80">
                            <col width="80">
                        </colgroup>
						<thead>
						<tr>
                            <th>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </th>
							<th>일</th>
                            <th>과목</th>
							<th>지출자료분류</th>
                            <th>일자</th>
                            <th>청구자</th>
							<th>부서</th>
                            <th>적요</th>
                            <th>금액(원)</th>
                            <th>결제수단</th>
                            <th>결제수단정보</th>
                            <!-- <th>작성자</th> -->
                            <th>비고</th>
                            <th>등록일</th>
                            <th>승인</th>
                            <!-- <th>중간승인</th>
                            <th>최종승인</th> -->
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
                            <td></td>
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
                                <div class="guideWord">
                                    <div>1. 지출결의서</div>
                                    <div>2. 기안서</div>
                                    <div>3. 품의서</div>
                                </div>
                                <input class="tbox regFullSort listMod" value="">
                            </td>
                            <td>
                                <!-- <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목명" value="">
                                </div> -->
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
                            <!-- <td></td> -->
                            <td>
								<input class="tbox regFullSort listMod" value="">
							</td>
                            <td></td>
							<td>
                                <!-- <div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn vertSort modifySort">일반승인</a>
                                </div> -->
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
							<td>2</td>
                            <td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목코드" value="1234">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목명" value="인건비(비급여)">
                                </div>
                            </td>
							<td>
                                <div class="guideWord">
                                    <div>1. 지출결의서</div>
                                    <div>2. 기안서</div>
                                    <div>3. 품의서</div>
                                </div>
                                <input class="tbox regFullSort listMod" value="지출결의서">
                            </td>
                            <td>
                                <!-- <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목명" value="">
                                </div> -->
                                <input class="tbox regFullSort listMod" value="20.07.01">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="곽주임">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" value="원무부">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" value="6월 업무 비급여">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="1,000,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="우리계좌1">
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="우리은행" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-1234-1234" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽주임" placeholder="예금주">
                                </div>
							</td>
                            <!-- <td>곽주임</td> -->
                            <td>
								<input class="tbox regFullSort listMod" value="">
							</td>

                            <td>
                                <div>2020.06.01 11:00</div>
                                <div>(등록자:곽주임)</div>
                            </td>
							<td>
                                <div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn vertSort modifySort">승인</a>
                                </div>
							</td>
                            <!-- <td>
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
									<a href="javascript:void(0);" class="btn vertSort modifySort">수정</a>
									<!-- <a href="javascript:void(0);" class="btn vertSort delSort mt3">이월</a> -->
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
                                <div>1234</div>
                                <div>인건비(비급여)</div>
                            </td>
							<td>
                                지출결의서
                            </td>
                            <td>
                                20.07.02
                            </td>
							<td>
                                곽주임
                            </td>
                            <td>
								원무부
							</td>
                            <td>
                                6월 업무 비급여
							</td>
							<td>
                                1,000,000
							</td>
							<td>
                                우리계좌1
							</td>
                            <td>
								<div>우리은행</div>
                                <div>1234-1234-1234</div>
                                <div>곽주임</div>
							</td>
                            <!-- <td>곽주임</td> -->
                            <td></td>
                            <td>
                                <div>2020.06.01 11:00</div>
                                <div>(등록자:곽주임)</div>
                            </td>
                            <td>
                                <div>2020.06.01 11:00</div>
                                <div>곽선생(주임)</div>
                            </td>
							<!-- <td>
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
							</td> -->
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

</script>
</body>
</html>
