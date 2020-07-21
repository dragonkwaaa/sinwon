<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0112';
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
										<option>번호</option>
										<option>이름</option>
										<option>발급사명</option>
										<option>카드/계좌번호</option>
									</select>
									<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
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
											<div class="checkBoxTitle">계좌이체</div>
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
								<!-- <th>
									거래처구분
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
											<div class="checkBoxTitle">법인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">개인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">기타</div>
										</div>
									</div>
								</td> -->
							</tr>
							<tr>
								<th>
									요청기간
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
				<!-- <div class="btnGroup verticalBottomSort">
					<a href="javascript:void(0);" class="btn searchSort">검색</a>
				</div> -->
			</div>


			<div class="section horizontalManageSort searcManageSort quad1">
				<div class="titleBox manageHeadlineSort">검색결과</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="selectGroup monthSort">
							<select>
								<option selected>2020년</option>
								<option >2019년</option>
								<option >2018년</option>
								<option >2017년</option>
							</select>
							<select>
								<option selected>6월</option>
								<option >5월</option>
								<option >4월</option>
								<option >3월</option>
							</select>
						</div>
						<div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
							<a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">추가</a>
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
							<th>결제수단</th>
							<th>수단명</th>
							<th>총 금액(월)</th>
							<th>사용금(월)</th>
							<th>잔액(월)</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>2</td>
						
							<td>카드</td>
							<td>국민은행1</td>
							<td>1,000,000</td>
							<td>500,000</td>
							<td>500,000</td>
						</tr>
						<tr>
							<td>1</td>
						
							<td>카드</td>
							<td>국민은행3</td>
							<td>1,000,000</td>
							<td>500,000</td>
							<td>500,000</td>
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


			<div class="horizontalGrandCover quad2 secondPayListSort">
				<div class="titleBox manageHeadlineSort">분기내역</div>
				
				<div class="listGroup secondSort hide">
					<div class="conGroup verticalManageSort bottomRowSort">
						<div class="headLineBox listControlSort">
							<div class="selectGroup monthSort">
								<!-- <select>
									<option selected>2020년</option>
									<option >2019년</option>
									<option >2018년</option>
									<option >2017년</option>
								</select>
								<select>
									<option selected>6월</option>
									<option >5월</option>
									<option >4월</option>
									<option >3월</option>
								</select> -->
							</div>
							<div class="titleBox inlistConSort">
								<div class="titleText">분기내역</div>
								<a href="javascript:void(0);" class="btn headRightAbMod addPlanBtn">추가</a>
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
								<th>거래명</th>
								<th>거래처</th>
								<th>총 금액(월)</th>
								<!-- <th>납부금(월)</th> -->
								<th>미납금(월)</th>
								<th>회전일</th>
								<th>결제일</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>1</td>
								<td>대구 임대료</td>
								<td>곽반장(개인)</td>
								<td>1,000,000</td>
								<!-- <td>500,000</td> -->
								<td>500,000</td>
								<td>2</td>
								<td>12.06</td>
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

			</div>

			<div class="section horizontalManageSort searcManageSort quad3">
				
				<div class="titleBox manageHeadlineSort">상세정보</div>
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort underBtnMod">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">분기상세정보</div>
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
									<th>거래명</th>
									<td>
										<input class="tbox regFullSort" value="대구 임대료">
									</td>
								</tr>
								<tr>
									<th>업체번호</th>
									<td>
										<input class="tbox regFullSort onlyNum" value="">
									</td>
								</tr>
								<tr>
									<th>지역</th>
									<td>
										<select class="sbox full">
											<option selected>1. 서울</option>
											<option>2. 경기</option>
											<option>3. 대전</option>
											<option>4. 대구</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>지사명</th>
									<td>
										<select class="sbox full">
											<option selected>1. 강남지사</option>
											<option>2. 강북지사</option>
											<option>3. 강서지사</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>거래명</th>
									<td>
										<input class="tbox regFullSort" value="" readonly>
									</td>
								</tr>
								<tr>
									<th>부서</th>
									<td>
										<select class="sbox full">
											<option selected>1. 원무부</option>
											<option>2. 강북지사</option>
											<option>3. 강서지사</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>요청자</th>
									<td>
										<input class="tbox regFullSort" value="곽반장">
									</td>
								</tr>
								<tr>
									<th>종류</th>
									<td>
										<select class="sbox regFullSort">
											<option selected>1. 지출결의서</option>
											<option>2. 품의서</option>
											<option>3. 기안서</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>구분</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. 고정비</option>
											<option selected>2. 변동비</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>과목</th>
									<td>
										<select class="sbox regFullSort">
											<option selected>1. 대여비</option>
											<option>2. 소모품비</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>내역/계약명</th>
									<td>
										<input class="tbox regFullSort" value="컬러프린터 대여">
									</td>
								</tr>
								<tr>
									<th>거래처</th>
									<td>
										<input class="tbox regFullSort" value="자이온솔루션(법인)">
									</td>
								</tr>
								
								<tr>
									<th>이월금(전월)</th>
									<td>
										<input class="tbox regFullSort" value="0" readonly>
									</td>
								</tr>
								<tr>
									<th>이월금(당월)</th>
									<td>
										<input class="tbox regFullSort" value="2,000">
									</td>
								</tr>
								<tr>
									<th>총 금액</th>
									<td>
										<input class="tbox regFullSort" value="12,000">
									</td>
								</tr>
								<tr>
									<th>누적 지급액</th>
									<td>
										<input class="tbox regFullSort" value="4,000">
									</td>
								</tr>
								<tr>
									<th>미지급금</th>
									<td>
										<input class="tbox regFullSort" value="8,000">
									</td>
								</tr>
								<tr>
									<th>집행상태</th>
									<td>
										<select class="sbox regFullSort">
											<option selected>1. 승인</option>
											<option>2. 미승인</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>발안일자</th>
									<td>
										<input class="tbox dateBox regFullSort" id="enterDate" readonly="">
									</td>
								</tr>
								<tr>
									<th>지급요청일</th>
									<td>
										<input class="tbox dateBox regFullSort" id="payDate" readonly="">
									</td>
								</tr>
								<tr>
									<th>
										집행수단
									</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. 카드</option>
											<option>2. 현금</option>
											<option>3. 계좌이체</option>
											<option>4. 어음</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>
										은행/카드사
									</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. 신한카드</option>
											<option>2. 롯데카드</option>
											<option>3. 삼성카드1</option>
											<option>4. 삼성카드2</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>
										카드/계좌번호
									</th>
									<td>
										<input class="tbox regFullSort" value="1234-1234-1234" readonly>
									</td>
								</tr>
								<tr>
									<th>
										예금주
									</th>
									<td>
										<input class="tbox regFullSort" value="곽주임" readonly>
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
									<th>
										분할납부
									</th>
									<td>
										<select class="sbox regFullSort">
											<option>1. Y</option>
											<option>2. N</option>
										</select>
									</td>
								</tr>
								<tr class="popOpShow equalPaySort">
									<th>
										회전월(회)
									</th>
									<td>
										<input class="tbox regFullSort" value="3">
									</td>
								</tr>
								<tr>
									<th>
										1회 납부금
									</th>
									<td>
										<input class="tbox regFullSort" value="4,000" readonly>
									</td>
								</tr>
								<tr class="popOpShow customPaySort hide">
									<th>
										납부금 직접입력
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										해당월
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										결제일
									</th>
									<td>
										<input class="tbox regFullSort" value="2">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">집행계획등록</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
								<tr>
									<th>지역</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>지사명</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>대리점</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>부서</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>요청자</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										종류
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">-선택-</a>
											<ul>
												<li><a href="javascript:void(0);">집행결의서</a></li>
												<li><a href="javascript:void(0);">품의서</a></li>
												<li><a href="javascript:void(0);">기안서</a></li>
												<li><a href="javascript:void(0);">기타</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>
										구분
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">-선택-</a>
											<ul>
												<li><a href="javascript:void(0);">고정비</a></li>
												<li><a href="javascript:void(0);">변동비</a></li>
												<li><a href="javascript:void(0);">예산</a></li>
												<li><a href="javascript:void(0);">기타</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr>
									<th>계약명</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>거래처명</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>이월금(차월)</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>총 금액</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>발안 일자</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>지급 요청일</th>
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
											<input class="tbox dateBox shortMod" id="exEndDate" readonly="" placeholder="종료일 선택">
										</div>
									</td>
								</tr>
								<tr>
									<th>
										분할납부
									</th>
									<td>
										<span class="sbox regFullSort">
											<a href="javascript:void(0);">-선택-</a>
											<ul>
												<li><a href="javascript:void(0);" class="popOpSel equalPaySort">Y</a></li>
												<li><a href="javascript:void(0);" class="popOpSel customPaySort">N</a></li>
											</ul>
										</span>
									</td>
								</tr>
								<tr class="popOpShow equalPaySort hide">
									<th>
										회전월(회)
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr class="popOpShow customPaySort hide">
									<th>
										납부금 직접입력
									</th>
									<td>
										<input class="tbox regFullSort" value="">
									</td>
								</tr>
								<tr>
									<th>
										해당월
									</th>
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
									<th>비고</th>
									<td>
										<textarea class="tarea regFullSort"></textarea>
									</td>
								</tr>
							</tbody>
						</table>
					</div>


					<!-- :: ksg_20200622_1558 open : 자세히 보기 파트. 사용 여지가 있으므로 남겨둠.  -->
					<!-- <div class="conGroup verticalManageSort specHiddenMod hide">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">추가입력사항</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>
									분할납부
								</th>
								<td>
									<span class="sbox regFullSort">
										<a href="javascript:void(0);">-선택-</a>
										<ul>
											<li><a href="javascript:void(0);" class="popOpSel equalPaySort">Y</a></li>
											<li><a href="javascript:void(0);" class="popOpSel customPaySort">N</a></li>
										</ul>
									</span>
								</td>
							</tr>
							<tr class="popOpShow equalPaySort hide">
								<th>
									회전월(회)
								</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr class="popOpShow customPaySort hide">
								<th>
									납부금 직접입력
								</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>
									해당월
								</th>
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
							</tbody>
						</table>
					</div>
					<div class="btnGroup verticalBottomSort">
						<a href="javascript:void(0);" class="btn specShowMod">상세보기 ▼</a>
						<a href="javascript:void(0);" class="btn specHideMod hide">상세보기 닫기 ▲</a>
					</div> -->
					<!-- :: ksg_20200622_1558 close  -->
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
// :: 등록 버튼 클릭 시, 등록창 표시.
$(document).on('click', '.btn.addPlanBtn', function(){
	$('.quad2 .specInfoGroup').addClass('hide');
	$('.quad2 .conGroup.verticalManageSort .searchResultTable tr').removeClass('activated');
	$('.specRegGroup.hide').removeClass('hide');
});
// :: 검색 결과 클릭 시, 분기 리스트 표시.
$(document).on('click', '.quad1 .conGroup.verticalManageSort .searchResultTable td', function(){
	// $('.quad2 .specInfoGroup.hide').removeClass('hide');
	$('.quad2 .listGroup.hide').removeClass('hide');
	$('.quad2 .specRegGroup').addClass('hide');
	$(this).parent().siblings('tr').removeClass('activated');
	$(this).parent('tr').addClass('activated');
});


// :: 분기 리스트 클릭 시, 사용내역 표시.
$(document).on('click', '.quad2 .conGroup.verticalManageSort .searchResultTable td', function(){
	$('.quad3 .specInfoGroup.hide').removeClass('hide');
	$(this).parent().siblings('tr').removeClass('activated');
	$(this).parent('tr').addClass('activated');
});



</script>
</body>
</html>