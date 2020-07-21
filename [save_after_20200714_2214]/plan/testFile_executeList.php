<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0106';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
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
											<div class="checkBoxTitle">지출</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
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
											<div class="checkBoxTitle">집행</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">집행대기</div>
										</div>
										<!-- <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">반려</div>
										</div> -->
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
								<div class="tAlignR mt5">금액 합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">잔액 합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">이월 합계 : 10,000,000 원</div>
								<!-- <div class="tAlignR mt5">미지급금 합계 : 100,000,000 원</div> -->
							</td>
						</tr>
						</tbody>
					</table>
					<table class="searchResultTable">
						<colgroup></colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>거래처명</th>
							<!-- <th>계약명</th> -->
							<th>거래그룹</th>
							<th>약정</th>
							<th>분할</th>
							<th>해당월</th>
							<th>금액</th>
							<th>잔액</th>
							<th>회전월/일</th>
							<th>결제수단</th>
							<th>은행/카드사</th>
							<th>계좌/카드번호</th>
							<th>예금주</th>
							<th>결제일</th>
							<!-- <th>분할금</th>
							<th>당월분</th> -->
							<!-- <th>본 예산</th> -->
							<!-- <th>배정 예산(-20%)</th> -->
							<!-- <th>총 미지급금</th> -->
							<!-- <th>지급일자</th> -->
							<th>비고</th>
							<th>등록일</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>7</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>선택</option>
									<option>1. 녹십자</option>
									<option>2. 한진택배</option>
									<option>3. 에이디치히얌</option>
									<option>직접입력</option>
								</select>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<!-- <td>
								<input class="tbox regFullSort listMod" value="">
							</td> -->
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
								<select class="sbox regFullSort listMod">
									<option>선택</option>
									<option>1. 국민카드1</option>
									<option>2. 국민카드2</option>
									<option>3. 우리계좌1</option>
									<option>직접입력</option>
								</select>
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
							<td></td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
									<!-- <a href="javascript:void(0);" class="btn delSort">승인</a> -->
								</div>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>선택</option>
									<option selected>1. 녹십자</option>
									<option>2. 한진택배</option>
									<option>3. 에이디치히얌</option>
									<option>직접입력</option>
								</select>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<!-- <td>
								<input class="tbox regFullSort listMod" value="6월 납입금">
							</td> -->
							<td>
								<input class="tbox regFullSort listMod" value="1그룹">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="150,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="5개월">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="19.3~5">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="30,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="180,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="4일">
							</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>선택</option>
									<option>1. 국민카드1</option>
									<option selected>2. 국민카드2</option>
									<option>3. 우리계좌1</option>
									<option>직접입력</option>
								</select>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="국민은행">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="1234-1234-1234">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="6">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="6월 납입금 그룹1번">
							</td>
							<td>2020.06.04 12:00</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
									<a href="javascript:void(0);" class="btn delSort mt3">집행</a>
									<a href="javascript:void(0);" class="btn modifySort mt3">이월</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>
								<div class="tAlignL selectAltMod">1. 녹십자</div>
							</td>
							<!-- <td>
								6월 납입금 이월
							</td> -->
							<td></td>
							<td></td>
							<td></td>
							<td>
								20.01
							</td>
							<td>
								5,000,000
							</td>
							<td>
								5,000,000
							</td>
							<td>
								6
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								이월
							</td>
							<td>2020.06.01 11:00</td>
							<td>
								이월됨
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>선택</option>
									<option selected>1. 녹십자</option>
									<option>2. 한진택배</option>
									<option>3. 에이디치히얌</option>
									<option>직접입력</option>
								</select>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<!-- <td>
								<input class="tbox regFullSort listMod" value="6월 납입금">
							</td> -->
							<td>
								<input class="tbox regFullSort listMod" value="이월그룹1">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="19.01">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="30,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="30,000">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<select class="sbox regFullSort listMod">
									<option>선택</option>
									<option>1. 국민카드1</option>
									<option>2. 국민카드2</option>
									<option selected>3. 우리계좌1</option>
									<option>직접입력</option>
								</select>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="국민은행">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="1234-1234-1234">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="곽반장">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="6">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="6월 납입금 수정안">
							</td>
							<td>2020.06.04 12:00</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
									<a href="javascript:void(0);" class="btn delSort mt3">집행</a>
									<a href="javascript:void(0);" class="btn modifySort mt3">이월</a>
								</div>
							</td>
						</tr>
						<tr class="changed">
							<td>3</td>
							<td>
								<div class="tAlignL selectAltMod">1. 녹십자</div>
							</td>
							<td>
								이월그룹1
							</td>
							<td></td>
							<td></td>
							<td>
								19.01
							</td>
							<td>
								30,000
							</td>
							<td>
								30,000
							</td>
							<td></td>
							<td>
								3. 우리계좌1
							</td>
							<td>
								국민은행
							</td>
							<td>
								1234-1234-1234
							</td>
							<td>
								곽반장
							</td>
							<td>
								6
							</td>
							<td>
								6월 납입금 
							</td>
							<td>2020.06.03 11:00</td>
							<td>수정됨</td>
						</tr>
						<tr class="changed">
							<td>2</td>
							<td>
								<div class="tAlignL selectAltMod">1. 녹십자</div>
							</td>
							<td>
								이월그룹1
							</td>
							<td></td>
							<td></td>
							<td>
								19.01
							</td>
							<td>
								-30,000
							</td>
							<td>
								-30,000
							</td>
							<td></td>
							<td>
								3. 우리계좌1
							</td>
							<td>
								국민은행
							</td>
							<td>
								1234-1234-1234
							</td>
							<td>
								곽반장
							</td>
							<td>
								6
							</td>
							<td>
								6월 납입금 수정(1회)
							</td>
							<td>2020.06.03 11:00</td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<td>1</td>
							<td>
								<div class="tAlignL selectAltMod">1. 녹십자</div>
							</td>
							<td></td>
							<td></td>
							<td>
								5개월
							</td>
							<td>
								20.01
							</td>
							<td>
								5,000,000
							</td>
							<td>
								5,000,000
							</td>
							<td>
								6
							</td>
							<td>
								2. 국민카드1
							</td>
							<td>
								국민은행
							</td>
							<td>
								1234-1234-1234
							</td>
							<td></td>
							<td>
								5
							</td>
							<td>
								6월 녹십자 지급
							</td>
							<td>2020.06.01 11:00</td>
							<td>
								집행됨
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