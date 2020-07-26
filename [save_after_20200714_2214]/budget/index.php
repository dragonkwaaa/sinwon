<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
    $lCode					=	'0101';
    $subCode				=	'021';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">

            <div class="subMenuTab">
				<a href="/sinwon/budget/" class="btn subPartMod <?=($subCode == '021' ? ' activated' : '')?>">회사운영예산</a>
				<a href="/sinwon/budget/ex_index" class="btn subPartMod <?=($subCode == '022' ? ' activated' : '')?>">구매자금예산</a>
			</div> 

			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">예산검색</div>
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
										<option>과목명</option>
										<option>적요명</option>
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
											<div class="checkBoxTitle">고정비</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">변동비</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
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
											<div class="checkBoxTitle">이체대기</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">이체완료</div>
										</div>
									</div>
								</td>

								<th>
									검색기간
								</th>
								<td>
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
				<div class="titleBox manageHeadlineSort">예산목록</div>
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
                            <a href="javascript:void(0);" class="btn listTopSort">선택 항목 이체</a>
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
								<div class="tAlignR mt5">수입 합계 : 120,000,000 원</div>
                                <div class="tAlignR mt5">지출 합계 : 120,000,000 원</div>
								<div class="tAlignR mt5">고정비용 소계 : 60,000,000 원</div>
                                <div class="tAlignR mt5">변동비용 소계 : 60,000,000 원</div>
								<div class="tAlignR mt5">예산대비증감 총계 : 0 원</div>
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
                            <th rowspan="2">
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </th>
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
                            <td></td>
							<td>2</td>
							<td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="구분 코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목 구분명" value="">
                                </div>
                            </td>
							<td>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목코드" value="">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" placeholder="과목명" value="">
                                </div>
                            </td>
							<!-- <td>
                                <input class="tbox regFullSort listMod" value="">
							</td> -->
							<!-- <td>
								<input class="tbox regFullSort listMod" value="">
							</td> -->
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
                            <td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod priceMod onlyNum" value="">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod onlyNum" value="" readonly="">
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


// :: 선택하기 버튼 스크립트. 
$(document).on('click', '.btn.selSort', function(){
    $(this).toggleClass('activated');
});


</script>
</body>
</html>
