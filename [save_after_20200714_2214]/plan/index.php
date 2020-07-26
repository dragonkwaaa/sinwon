<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0106';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">

            <div class="subMenuTab">
				<a href="/sinwon/plan/" class="btn subPartMod  activated">일일현금지출관리</a>
                <a href="/sinwon/plan/ex_index" class="btn subPartMod ">구매자금예산집행</a>
                <a href="/sinwon/plan/transferList" class="btn subPartMod">이체리스트</a>
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
										<option>거래그룹</option>
									</select>
									<input class="tbox searchInput nearBtnMod" placeholder="검색어를 입력해주세요.">
                                    <div class="btnGroup inTableSearch">
								    	<a href="javascript:void(0);" class="btn searchSort">검색</a>
								    </div>
								</td>
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
											<div class="checkBoxTitle">미승인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">일반승인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">중간승인</div>
										</div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">최종승인</div>
										</div>
									</div>
								</td>
								<!-- <th>
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
											<div class="checkBoxTitle">지출</div>
										</div>
									</div>
								</td> -->
							</tr>

							<tr>
								<!-- <th>
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
								</td> -->
								<!-- <th>
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
											<div class="checkBoxTitle">집행</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">집행대기</div>
										</div>
										
									</div>
								</td> -->
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
			<div class="section horizontalManageSort searcManageSort fullMod">
				<div class="titleBox manageHeadlineSort">집행목록</div>
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
								<div class="tAlignR mt5">금액 합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">잔액 합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">이월 합계 : 10,000,000 원</div>
								<!-- <div class="tAlignR mt5">미지급금 합계 : 100,000,000 원</div> -->
							</td>
						</tr>
						</tbody>
                    </table>
                    










					<table class="searchResultTable">
						<colgroup>
                            <col width="50">
                            <!-- <col width="80"> -->
                            <col width="80">
                            <col width="100">
                            <col width="80">
                            <col width="120">
                            <col width="80">
                            <col width="80">
                            <col width="100">
                            <col width="100">
                            <col width="80">
                            <col width="150">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="80">
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
							<th rowspan="2">과목</th>
                            <th rowspan="2">거래처</th>
							<th rowspan="2">적요</th>
                            <th colspan="2">입금</th>
                            <th colspan="2">지출</th>
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
							<td>6</td>
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
                                <input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							
							<td>
								<input class="tbox regFullSort listMod priceMod" value="">
								
							</td>
                            <td>
								<input class="tbox regFullSort listMod priceMod" value="">
								
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
                           
                            <!-- <td>
                                <input class="tbox regFullSort listMod" value="">
							</td> -->
                            <!-- <td>
                                <input class="tbox regFullSort listMod" value="">
							</td> -->
                            <td>
								<input class="tbox dateBox regFullSort listMod" id="payDate_2">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								2020.06.05 11:00
							</td>
                           
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
									<!-- <a href="javascript:void(0);" class="btn delSort">승인</a> -->
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
							<td>5</td>
							<td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목코드" value="1234">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목명" value="인건비(급여)">
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
								<input class="tbox regFullSort listMod" value="곽이사">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="인건비 지급">
							</td>
							
							<td>
								<input class="tbox regFullSort listMod priceMod" value="">
								
							</td>
                            <td>
								<input class="tbox regFullSort listMod priceMod" value="1,000,000">
								
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="30">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="국민계좌1">
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="국민은행" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-1234-1234" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽반장" placeholder="예금주">
                                </div>
							</td>
                            <!-- <td>
                                <input class="tbox regFullSort listMod" value="곽부장">
							</td> -->
                            <!-- <td>
                                <input class="tbox regFullSort listMod" value="곽부장">
							</td> -->
                            <td>
								<input class="tbox dateBox regFullSort listMod" id="payDate_2">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" value="인건비 지급함">
							</td>
                            <td>
								2020.06.05 11:00
							</td>
                           
							<!-- <td>
                                <div class="btnGroup inListTable">
                                    <input class="tbox regFullSort listMod" value="" placeholder="이월일자">
                                    <a href="javascript:void(0);" class="btn vertSort delSort mt3">이월</a>
                                </div>
							</td> -->
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
									<!-- <a href="javascript:void(0);" class="btn delSort mt3">마감</a> -->
									<!-- <a href="javascript:void(0);" class="btn delSort mt3">이월</a> -->
								</div>
							</td>
						</tr>
						</tbody>
                    </table>
                    


				</div>
				<!-- <div class="page_group underSort">
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
				</div> -->
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
