<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'110';
	$subCode				=	'011';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<div class="subMenuTab">
				<a href="/sinwon/settlement/" class="btn subPartMod <?=($subCode == '011' ? ' activated' : '')?>">현금지출결산</a>
				<a href="/sinwon/settlement/ex_index" class="btn subPartMod <?=($subCode == '012' ? ' activated' : '')?>">구매자금지출결산</a>
			</div> 
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
								<td colspan="2">
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
							</tr>
						</tbody>
					</table>
				</div>
			</div> -->
			<div class="section horizontalManageSort searcManageSort budgetLeftMod">
				<div class="titleBox manageHeadlineSort">지출결산목록</div>
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
								<!-- <option>전체</option> -->
								<option>6월</option>
								<option>5월</option>
								<option selected>4월</option>
								<option>3월</option>
							</select>
							<!-- <select>
								<option>전체</option>
								<option selected>1일</option>
								<option>2일</option>
								<option>3일</option>
								<option>4일</option>
							</select> -->
						</div>
						<!-- <div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
						</div> -->
						
					</div>
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
                                <div>
								    <div class="tAlignR mt5">예산수입 합계 : 3,000,000 원</div>
                                    <div class="tAlignR mt5">예산지출 합계 : 3,000,000 원</div>
                                    <div class="tAlignR mt5">결산수입 합계 : 0 원</div>
                                    <div class="tAlignR mt5">예산지출 합계 : 2,000,000 원</div>
                                </div>
							</td>
						</tr>
						</tbody>
					</table>
					<table class="searchResultTable">
						<colgroup>
                            <col width="50">
                            <col width="80">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                        </colgroup>
						<thead>
						<tr>
							<th rowspan="2">No.</th>
							<th rowspan="2">구분</th>
							<th rowspan="2">과목</th>
							<th colspan="2">예산</th>
							<th colspan="2">결산</th>
							<th rowspan="2">예산대비증감</th>
                        </tr>
                        <tr>
                            <th>수입</th>
                            <th>지출</th>
                            <th>수입</th>
                            <th>지출</th>
                        </tr>
						</thead>
						<tbody>
						<tr class="activated">
							<td>7</td>
							<td rowspan="2">현금</td>
							<td>
                                <div>(1111))</div>
                                <div>직영업소 수입</div>
                            </td>
							<td>
								<div class="tAlignR">1,000,000 원</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>6</td>
							<td>
                                <div>(1234)</div>
                                <div>대리점 수입</div>
                            </td>
							<td>
								<div class="tAlignR">1,000,000 원</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<th colspan="3">현금소계</th>
							<td>
								<div class="tAlignR">2,000,000 원</div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td rowspan="3">카드</td>
							<td>
                                <div>(2111)</div>
                                <div>인건비(급여)</div>
                            </td>
							<td></td>
							<td>
								<div class="tAlignR f_red">1,000,000 원</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
                            <td>4</td>
                            <td>
                                <div>(2331)</div>
                                <div>4대보험</div>
                            </td>
							<td></td>
							<td>
								<div class="tAlignR f_red">1,000,000 원</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
                            <td>3</td>
                            <td>
                                <div>(2345)</div>
                                <div>공과금</div>
                            </td>
							<td></td>
							<td>
								<div class="tAlignR f_red">1,000,000 원</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<th colspan="3">카드소계</th>
							<td>
								<div class="tAlignR"></div>
							</td>
							<td>
								<div class="tAlignR f_red">3,000,000 원</div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
						</tr>
						<!-- <tr>
							<td>2</td>
                            <td rowspan="2">변동비용</td>
                            <td>
                                <div>(4366)</div>
                                <div>소모품비(관리)</div>
                            </td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div class="tAlignR">1,000,000 원</div>
							</td>
							<td></td>
						</tr>
						<tr>
                            <td>1</td>
                            <td>
                                <div>(4322)</div>
                                <div>매입비(업체)</div>
                            </td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div class="tAlignR">1,000,000 원</div>
							</td>
							<td></td>
						</tr>
						<tr class="confirmed">
							<th colspan="3">변동비용소계</th>
							<td>
								<div class="tAlignR"></div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
							<td>
								<div class="tAlignR">2,000,000 원</div>
							</td>
							<td>
								<div class="tAlignR"></div>
							</td>
						</tr> -->
						</tbody>
					</table>
				</div>
			</div>

            <div class="section horizontalManageSort searcManageSort budgetRightMod">
				<div class="titleBox manageHeadlineSort">일일현급지급목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">




                    <div class="conGroup sectInSearch">
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
				    						<option>전체</option>
				    						<option>업체명</option>
				    						<option>거래그룹</option>
				    					</select>
				    					<input class="tbox searchInput nearBtnMod" placeholder="검색어를 입력해주세요.">
                                        <div class="btnGroup inTableSearch">
				    						<a href="javascript:void(0);" class="btn searchSort">검색</a>
				    					</div>
				    				</td>
				    			</tr>
				    		</tbody>
				    	</table>
				    </div>








					<div class="headLineBox listControlSort">
						<!-- <div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
						</div> -->
					</div>
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR">수입 합계 : 120,000,000 원</div>
                                <div class="tAlignR mt5">지출 합계 : 120,000,000 원</div>
								<div class="tAlignR mt5">총 합계 : 240,000,000 원</div>
							</td>
						</tr>
						
						</tbody>
					</table>
					<table class="searchResultTable ">
						<colgroup>
							<col width="50">
							<col width="100">
							<col width="80">
							<col width="80">
							<col width="80">
							<col width="100">
							<col width="120">
							<col width="150">
                            <col width="80">
                            <col width="80">
						</colgroup>
						<thead>
						<tr>
							<th rowspan="2">No.</th>
                            <th rowspan="2">거래처</th>
                            <th rowspan="2">내역</th>
							<th colspan="2">금액</th>
                            <!-- <th rowspan="2">청구자</th> -->
							<th rowspan="2">결제수단</th>
							<th rowspan="2">결제수단정보</th>
							<th rowspan="2">비고</th>
							<th rowspan="2">등록일</th>
							<!-- <th rowspan="2">관리</th> -->
						</tr>
						<tr>
							<th>수입</th>
							<th>지출</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>2</td>
							<td>
                                <div>2101</div>
                                <div>녹십자</div>
                            </td>
							<!-- <td>
                                <input class="tbox regFullSort listMod" value="">
                            </td> -->
                            <td>
							</td>
							<td>
                            </td>
                            <td>
                                <div class="tAlignR f_red">1,000,000 원</div>
							</td>
                            <td>
                                우리계좌1
							</td>
                            <td>
								<div>우리은행</div>
                                <div>1234-1234-1234</div>
                                <div>곽반장</div>
							</td>
                            <td>
                                녹십자 매입비
							</td>
							<td>
								2020-06-23 13:00
							</td>
							<!-- <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td> -->
                        </tr>
                        <tr>
							<td>1</td>
							<td>
                                <div>2101</div>
                                <div>녹십자</div>
                            </td>
							<td>
                                녹십자 6월 매입비
                            </td>
                            <td>
							</td>
                            <td>
                                <div class="tAlignR f_red">1,000,000 원</div>
							</td>
                            <td>
                                우리계좌1
							</td>
                            <td>
								<div>우리은행</div>
                                <div>1234-1234-1234</div>
                                <div>곽반장</div>
							</td>
                            <td>
                                녹십자 매입비
							</td>
							<td>
								2020-06-23 13:00
							</td>
							<!-- <td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td> -->
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