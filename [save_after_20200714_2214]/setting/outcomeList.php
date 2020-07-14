<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'111';
	$subCode				=	'005';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/setting/pages/headLine.php';?>
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
								<td colspan="2">
									<select class="sbox">
										<option>지출명</option>
										<option>지출코드</option>
									</select>
									<input class="tbox searchInput nearBtnMod" placeholder="검색어를 입력해주세요.">
                                    <div class="btnGroup inTableSearch">
								    	<a href="javascript:void(0);" class="btn searchSort">검색</a>
								    </div>
								</td>
                                
								<!-- <th>지급수단</th> -->
								<!-- <td>
									<div class="inTableCheckGroup">
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
											<div class="checkBoxTitle">개인카드</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">B2B</div>
										</div>
									</div>
								</td> -->
							</tr>
							<!-- <tr>
								<th>
									결제수단
								</th>
								<td colspan="4">
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">국민카드1</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">국민카드2</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">이사님삼성카드</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">현대카드1</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">현대카드2</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">현대카드3</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">삼성카드1</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">삼성카드2</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">삼성카드3</div>
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
			
			<div class="section horizontalManageSort searcManageSort extendMod">
				<div class="titleBox manageHeadlineSort">고정지출목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">지출등록</a>
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
							<th>지출코드</th>
							<th>지출명(적요)</th>
							<th>계정과목</th>
							<th>거래처</th>
							<th>금액</th>
                            <th>지급수단</th>
                            <th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>4001</td>
							<td>대구 임대료 선불</td>
							<td>임대료</td>
							<td>대구(곽반장)</td>
							<td>650,000(지출)</td>
							<td>
								<div>계좌이체</div>
								<div>(국민은행)</div>
                            </td>
                            <td>
                                <div class="inTableRadioGroup">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_3" value="1">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="userUse_3" value="2" checked="">
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
						<tr>
							<td colspan="9">
                                <div class="emtyAlarm">검색결과가 없습니다.</div>
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
					<div class="conGroup verticalManageSort underBtnMod">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">고정지출정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>No.</th>
								<td>
									<input class="tbox regFullSort" value="1" readonly>
								</td>
							</tr>
							<tr>
								<th>등록일</th>
								<td>
									<input class="tbox regFullSort" value="2020-06-01 11:00" readonly>
								</td>
							</tr>
							<tr>
								<th>지출코드</th>
								<td>
									<input class="tbox regFullSort" value="4001">
								</td>
							</tr>
							<tr>
								<th>지출명(적요)</th>
								<td>
									<input class="tbox regFullSort" value="대구 임대료 선불">
								</td>
							</tr>
							<tr>
								<th>구분</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 고정비용</option>
										<option>2. 변동비용</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>계정과목</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 인건비(급여)</option>
										<option>2. 공과금</option>
										<option selected>3. 임대료</option>
										<option>4. 관리비</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>거래처</th>
								<td>
									<select class="sbox regFullSort">
										<option selected>0. 직접입력</option>
										<option>1. 메디드림(개인)</option>
										<option>2. 명진병리과</option>
										<option>3. 녹십자</option>
										<option>4. 티앤씨</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>
									<div>거래처</div>
									<div>직접입력</div>
								</th>
								<td>
									<input class="tbox regFullSort" value="대구 임대료 선불">
								</td>
							</tr>
							<tr>
								<th>거래형태</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 입금</option>
										<option selected>2. 지출</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>금액</th>
								<td>
									<input class="tbox regFullSort" value="650,000">
								</td>
							</tr>


							<tr>
								<th>지급수단</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 법인카드</option>
										<option>2. 개인카드</option>
										<option>3. B2B</option>
										<option selected>4. 계좌이체</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>결제수단</th>
								<td>
									<select class="sbox regFullSort">
										<option>1. 국민은행</option>
										<option>2. 국민은행1</option>
										<option selected>3. 국민은행2</option>
										<option>4. 우리은행1</option>
										<option>5. 우리은행2</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>계좌번호</th>
								<td>
									<input class="tbox regFullSort onlyNum" value="1234-1234-1234" readonly>
								</td>
							</tr>
							<tr>
								<th>예금주</th>
								<td>
									<input class="tbox regFullSort onlyNum" value="대구 곽반장" readonly>
								</td>
							</tr>
							<tr>
								<th>해당월(연.월)</th>
								<td>
									<input class="tbox regFullSort onlyNum" value="19.10">
								</td>
							</tr>
							<tr>
								<th>회전일</th>
								<td>
									<input class="tbox regFullSort onlyNum" value="6">
								</td>
							</tr>
							<tr>
								<th>결제일</th>
								<td>
									<input class="tbox dateBox regFullSort" id="payDate" readonly="">
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
								<div class="titleText">고정지출등록</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>지출코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>지출명(적요)</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>구분</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 고정비용</option>
										<option>2. 변동비용</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>계정과목</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 인건비(급여)</option>
										<option>2. 공과금</option>
										<option>3. 임대료</option>
										<option>4. 관리비</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>거래처</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>0. 직접입력</option>
										<option>1. 메디드림(개인)</option>
										<option>2. 명진병리과</option>
										<option>3. 녹십자</option>
										<option>4. 티앤씨</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>
									<div>거래처</div>
									<div>직접입력</div>
								</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>거래형태</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 입금</option>
										<option>2. 지출</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>금액</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>


							<tr>
								<th>지급수단</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 법인카드</option>
										<option>2. 개인카드</option>
										<option>3. B2B</option>
										<option>4. 계좌이체</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>결제수단</th>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 국민은행</option>
										<option>2. 국민은행1</option>
										<option>3. 국민은행2</option>
										<option>4. 우리은행1</option>
										<option>5. 우리은행2</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>계좌번호</th>
								<td>
									<input class="tbox regFullSort onlyNum" value="" readonly>
								</td>
							</tr>
							<tr>
								<th>예금주</th>
								<td>
									<input class="tbox regFullSort onlyNum" value="" readonly>
								</td>
							</tr>
							<tr>
								<th>해당월(연.월)</th>
								<td>
									<input class="tbox regFullSort onlyNum" value="">
								</td>
							</tr>
							<tr>
								<th>회전일</th>
								<td>
									<input class="tbox regFullSort onlyNum" value="">
								</td>
							</tr>
							<tr>
								<th>결제일</th>
								<td>
									<input class="tbox dateBox regFullSort" id="payDate" readonly="">
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