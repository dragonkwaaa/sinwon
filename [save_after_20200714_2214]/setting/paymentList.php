<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'111';
	$subCode				=	'003';
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
				<div class="titleBox manageHeadlineSort">결제수단목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">결제수단등록</a>
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
						<colgroup>
                            <col width ="50">
                            <col width ="80">
                            <col width ="80">
                            <col width ="80">
                            <col width ="120">
                            <col width ="120">
                            <col width ="200">
                            <col width ="100">
                        </colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>결제수단코드</th>
                            <th>구분</th>
                            <th>분류</th>
							<th>명칭</th>
                            <th>결제수단정보</th>
                            <th>비고</th>
                            <th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>3</td>
							<td>
								<input class="tbox regFullSort listMod onlyNum" value="" maxlength="4"/>
							</td>
                            <td>
                                <!-- <select class="sbox regFullSort">
							    	<option>1. 카드</option>
							    	<option>2. 계좌</option>
							    </select> -->
                                <input class="tbox regFullSort listMod" value="">
                            </td>
							<td>
                                <!-- <select class="sbox regFullSort listMod">
							    	<option>1. 법인</option>
							    	<option>2. 개인</option>
							    </select> -->
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
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
								</div>
							</td>
						</tr>
                        <tr>
							<td>2</td>
							<td>
								<input class="tbox regFullSort listMod onlyNum" value="1125" maxlength="4"/>
							</td>
                            <td>
                                <!-- <select class="sbox regFullSort">
							    	<option>1. 카드</option>
							    	<option>2. 계좌</option>
							    </select> -->
                                <input class="tbox regFullSort listMod" value="카드">
                            </td>
							<td>
                                <!-- <select class="sbox regFullSort">
							    	<option>1. 법인</option>
							    	<option>2. 개인</option>
							    </select> -->
                                <input class="tbox regFullSort listMod" value="법인">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="우리카드1">
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
                                <input class="tbox regFullSort listMod" value="">
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
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>
								<input class="tbox regFullSort listMod onlyNum" value="1144" maxlength="4"/>
							</td>
                            <td>
                                <!-- <select class="sbox regFullSort">
							    	<option>1. 카드</option>
							    	<option>2. 계좌</option>
							    </select> -->
                                <input class="tbox regFullSort listMod" value="계좌">
                            </td>
							<td>
                                <!-- <select class="sbox regFullSort">
							    	<option>1. 법인</option>
							    	<option>2. 개인</option>
							    </select> -->
                                <input class="tbox regFullSort listMod" value="개인">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="우리계좌1">
                            </td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="우리은행">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="1234-1234-1234">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="곽반장">
                                </div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" value="">
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
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="10">검색결과가 없습니다.</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="section horizontalManageSort extendMod">
				<div class="titleBox manageHeadlineSort">상세정보</div>
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort underBtnMod">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">결제수단정보</div>
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
								<th>결제수단코드</th>
								<td>
									<input class="tbox regFullSort" value="1125">
								</td>
							</tr>
                            <tr>
								<th>구분</th>
								<td>
									<input class="tbox regFullSort" value="계좌">
								</td>
							</tr>
                            <tr>
								<th>분류</th>
								<td>
									<input class="tbox regFullSort" value="개인">
								</td>
							</tr>
							<tr>
								<th>명칭</th>
								<td>
									<input class="tbox regFullSort" value="우리계좌1">
								</td>
							</tr>
                            <tr>
								<th>은행/카드사</th>
								<td>
									<input class="tbox regFullSort" value="우리은행">
								</td>
							</tr>
                            <tr>
								<th>계좌/카드번호</th>
								<td>
									<input class="tbox regFullSort" value="1234-1234-1234">
								</td>
							</tr>
                            <tr>
								<th>예금주</th>
								<td>
									<input class="tbox regFullSort" value="곽반장">
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
								<div class="titleText">결제수단등록</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
                            <tr>
								<th>결제수단코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>구분</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>분류</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>명칭</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>은행/카드사</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>계좌/카드번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>예금주</th>
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
				</div>
				<div class="btnGroup horizontalBottomSort">
					<a href="javascript:void(0);" class="btn saveSort hide">저장</a>
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
    $('.btn.saveSort.hide').removeClass('hide');
	$('.specRegGroup').addClass('hide');
	$(this).parent().siblings('tr').removeClass('activated');
	$(this).parent('tr').addClass('activated');
});
// :: 집행등록 버튼 클릭 시, 등록창 표시.
$(document).on('click', '.btn.addPlanBtn', function(){
	$('.specInfoGroup').addClass('hide');
	$('.conGroup.verticalManageSort .searchResultTable tr').removeClass('activated');
	$('.specRegGroup.hide').removeClass('hide');
    $('.btn.saveSort.hide').removeClass('hide');
});
</script>
</body>
</html>