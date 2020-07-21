<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0104';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<!-- <div class="section horizontalManageSort searcManageSort topLineMod">
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
			</div> -->
			<div class="section horizontalManageSort searcManageSort fullMod">
				<div class="titleBox manageHeadlineSort">영업소목록</div>
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
								<!-- <option>전체</option> -->
								<option selected>1주</option>
								<option>2주</option>
								<option>3주</option>
								<option>4주</option>
								<option>5주</option>
							</select>
						</div>

						<div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
                            <a href="javascript:void(0);" class="btn headRightAbMod saveBtn">변경사항 저장</a>
							<a href="javascript:void(0);" class="btn headRightAbMod addStaffBtn">수입등록</a>
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
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(주)</th>
							<td>
								<div class="tAlignR mt5">일일합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">누계 : 100,000,000 원</div>
								<div class="tAlignR mt5">일 평균 : 200,000,000 원</div>
								<div class="tAlignR mt5">월 예상 : 200,000,000 원</div>
							</td>
						</tr>
						</tbody>
					</table>
					<table class="searchResultTable">
						<colgroup></colgroup>
						<!-- <thead>
						<tr>
							<th>No.</th>
							<th>구분</th>
							<th>과목</th>
							<th>코드</th>
							<th>업체명</th>
							<th>적요</th>
							<th>결제수단</th>
							<th>은행/카드사</th>
							<th>계좌/카드번호</th>
							<th>예금주</th>
							<th>지출</th>
							<th>미지급금</th>
							<th>지급일자</th>
							<th>비고</th>
							<th>등록일</th>
							<th>관리</th>
						</tr>
						</thead> -->
						<tbody>
						<tr>
							<td rowspan="3">구분</td>
							<td>요일</td>
							<td>일요일</td>
							<td>월요일</td>
							<td>화요일</td>
							<td>수요일</td>
							<td>목요일</td>
							<td>금요일</td>
							<td>토요일</td>
							<td>월총엽업일수</td>
						</tr>
						<tr>
							<!-- <td>구분</td> -->
							<td>영업일수</td>
							<td></td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>
							<td>26</td>
						</tr>
						<tr>
							<!-- <td>구분</td> -->
							<td>영업소</td>
							<td>4일</td>
							<td>5일</td>
							<td>6일</td>
							<td>7일</td>
							<td>8일</td>
							<td>9일</td>
							<td>10일</td>
							<td>누계</td>
						</tr>

						<tr>
							<td rowspan="7">본사</td>
							<td>
                                <input class="tbox regFullSort listMod" value="인천1">
                            </td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="">
								<span>원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="19,017,605">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,739,514">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,302,136">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="12,796,104">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="13,989,156">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="9,580,367">
                                <span>원</span>
                            </td>
							<td></td>
						</tr>
						<tr>
							<!-- <td>본사</td> -->
							<td>
                                <input class="tbox regFullSort listMod" value="인천2">
                            </td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="">
								<span>원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="19,017,605">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,739,514">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,302,136">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="12,796,104">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="13,989,156">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="9,580,367">
                                <span>원</span>
                            </td>
							<td></td>
						</tr>
						<tr>
							<!-- <td>본사</td> -->
							<td>
                                <input class="tbox regFullSort listMod" value="인천3">
                            </td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="">
								<span>원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="19,017,605">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,739,514">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,302,136">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="12,796,104">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="13,989,156">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="9,580,367">
                                <span>원</span>
                            </td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>일계</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>누계</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>일평균</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>월예상</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
						</tr>



						<tr>
							<td rowspan="7">지사</td>
							<td>
                                <input class="tbox regFullSort listMod" value="부산">
                            </td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="">
								<span>원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="19,017,605">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,739,514">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,302,136">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="12,796,104">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="13,989,156">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="9,580,367">
                                <span>원</span>
                            </td>
							<td></td>
                        </tr>
                        
						<tr>
							<!-- <td>본사</td> -->
							<td>
                                <input class="tbox regFullSort listMod" value="안양">
                            </td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="">
								<span>원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="19,017,605">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,739,514">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,302,136">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="12,796,104">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="13,989,156">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="9,580,367">
                                <span>원</span>
                            </td>
							<td></td>
						</tr>
						<tr>
							<!-- <td>본사</td> -->
							<td>
                                <input class="tbox regFullSort listMod" value="서울">
                            </td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="">
								<span>원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="19,017,605">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,739,514">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,302,136">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="12,796,104">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="13,989,156">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="9,580,367">
                                <span>원</span>
                            </td>
							<td></td>
                        </tr>
                        

						<tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>일계</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td>111,000,000</td>
						</tr>
						<tr class="confirmed"> 
							<!-- <td>본사</td> -->
							<td>누계</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td>111,000,000</td>
						</tr>
						<tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>일평균</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>월예상</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
                        </tr>
                        



                        <tr>
							<td rowspan="5">대리점</td>
							<td>
                                <input class="tbox regFullSort listMod" value="부산 사상">
                            </td>
							<td>
								<input class="tbox regFullSort listMod priceMod" value="">
								<span>원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="19,017,605">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,739,514">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="16,302,136">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="12,796,104">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="13,989,156">
                                <span>원</span>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="9,580,367">
                                <span>원</span>
                            </td>
							<td></td>
						</tr>
                        <tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>일계</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td>111,000,000</td>
						</tr>
						<tr class="confirmed"> 
							<!-- <td>본사</td> -->
							<td>누계</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td>111,000,000</td>
						</tr>
						<tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>일평균</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<!-- <td>본사</td> -->
							<td>월예상</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
                        </tr>























						<tr>
							<td rowspan="4">total</td>
							<td>일일합계</td>
							<td>-</td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
						</tr>
						<tr>
							<td>누계</td>
							<td></td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
						</tr>
						<tr>
							<td>일평균</td>
							<td></td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
						</tr>
						<tr>
							<td>월예상</td>
							<td></td>
							<td>19,017,605</td>
							<td>16,739,514</td>
							<td>16,302,136</td>
							<td>12,796,104</td>
							<td>13,989,156</td>
							<td>9,580,367</td>
							<td></td>
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
		</div>
	</div>
</div>











<div class="popup centerSort addStaffSort">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="//cleanadmin.heeyam.com//image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			수익추가
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup">
				<colgroup>
					<col width="100">
					<col width="*">
				</colgroup>
				<tbody>
					<tr>
						<th>구분</th>
						<td>
							<select class="sbox regFullSort listMod">
								<option>선택</option>
								<option selected>1. 본사</option>
								<option>2. 지사</option>
								<option>3. 대리점</option>
							</select>
							<!-- <input class="tbox regFullSort listMod" value=""> -->
						</td>
					</tr>
					<tr>
						<th>영업소</th>
						<td>
							<!-- <select class="sbox regFullSort listMod">
								<option>선택</option>
								<option selected>1. 인천1</option>
								<option>2. 인천2</option>
								<option>직접입력</option>
							</select> -->
							<input class="tbox regFullSort listMod" value="">
						</td>
					</tr>
					<!-- <tr>
						<th>날짜</th>
						<td>
							<input class="tbox dateBox regFullSort" id="payDate">
						</td>
					</tr>
					<tr>
						<th>금액(원)</th>
						<td>
							<input class="tbox regFullSort priceMod">
						</td>
					</tr> -->
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