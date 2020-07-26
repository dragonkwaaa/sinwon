<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'110';
	$subCode				=	'010';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<div class="subMenuTab">
                <a href="/sinwon/settlement/" class="btn subPartMod <?=($subCode == '010' ? ' activated' : '')?>">회사운영예산결산</a>
                <a href="/sinwon/settlement/ex_indexTwo" class="btn subPartMod <?=($subCode == '011' ? ' activated' : '')?>">일일현금지출결산</a>
                <a href="/sinwon/settlement/ex_index" class="btn subPartMod <?=($subCode == '012' ? ' activated' : '')?>">구매자금지출결산</a>
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
				<div class="titleBox manageHeadlineSort">결산목록</div>
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
                        <div class="sboxGroup listArraySort">
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">카드잔액관리</a>
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
						<!-- <div class="titleBox inlistConSort">
							<div class="titleText">검색결과</div>
                            <a href="javascript:void(0);" class="btn headRightAbMod addStaffBtn">카드잔액관리</a>
						</div> -->
						
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
                            <col width="100">
                            <col width="120">
                            <col width="80">
                            <col width="50">
                            <col width="100">
                            <col width="100">
                       
                        </colgroup>
						<thead>
						<tr>
							<th rowspan="2">일</th>
                            <th rowspan="2">과목구분</th>
							<th rowspan="2">과목</th>
                            <th colspan="2">예산</th>
                            <th colspan="2">결산</th>
                            <th rowspan="2">예산대비 증감</th>
                            <th rowspan="2">관리</th>

						</tr>
                        <tr>
                            <th>수입</th>
                            <th>지출</th>
                            <th>수입</th>
                            <th>지출</th>
                        </tr>
						</thead>
						<tbody>
						
						<tr>
							<td>5</td>
							<td>
                                <div class="accInfoGroup">
                                  2
                                </div>
                                <div class="accInfoGroup">
                                  고정비용
                                </div>
                            </td>
                            <td>
                                <div class="accInfoGroup">
                                  1111
                                </div>
                                <div class="accInfoGroup">
                                  인건비(급여)
                                </div>
                            </td>
                            <td>
                                0 원
							</td>
							<td>
								0 원
							</td>
                            <td>
                                0 원
							</td>
                            <td>
                                1,0,000,000 원
							</td>
                            <td>
                                - 1,0,000,000 원
							</td>
                            
							
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">수정</a>
									<!-- <a href="javascript:void(0);" class="btn delSort mt3">집행</a> -->
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
