<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0102';
?>
<body>

<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>

	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/leftMenu.php'; ?>
		<div class="contents">
			<div class="tabGroup conSelectSort pageChangeSort">
				<ul>
					<li>
						<a href="javascript:void(0);" class="activated">지출결의서관리</a>
					</li>
					<li>
						<a href="/sinwon/expense/draftList">기안서관리</a>
					</li>
					<li>
						<a href="/sinwon/expense/intentList">품의서관리</a>
					</li>
				</ul>
			</div>
			<div class="section searchSort">
				<div class="titleBox sectionSort">지출결의서관리</div>
				<div class="conGroup regInfoSort">


					<div class="mt15">
						<span class="sbox">
							<a href="javascript:void(0);">전체</a>
							<ul>
								<li><a href="javascript:void(0);">작성자</a></li>
								<li><a href="javascript:void(0);">부서</a></li>
							</ul>
						</span>
						<input class="tbox searchInput ml7" placeholder="검색어를 입력해주세요."/>
						<!-- <a class="btn f_white bg_emerald withTbox">조회</a> -->
					</div>



					<div class="dateSelectGroup mt15">
						<div class="dateInputCase mb10">
							<input class="tbox dateBox shortMod" id="startDate" readonly="" placeholder="검색 시작일">
						</div>
						<div class="dateInputCase ml7 mb10 mr10">
							<input class="tbox dateBox shortMod" id="endDate" readonly="" placeholder="검색 종료일">
						</div>
						<div class="btnGroup dateTermSort">
							<a href="javascript:setSearchDate('0d');" class="btn">당일</a>
							<a href="javascript:setSearchDate('1w');" class="btn">일주일</a>
							<a href="javascript:setSearchDate('1m');" class="btn">1개월</a>
							<a href="javascript:setSearchDate('3m');" class="btn">3개월</a>
							<a href="javascript:void(0);" class="btn">전체</a>
						</div>
					</div>


					
					<div class="mt15 specHideMod hide">
						<!-- <span class="sbox">
							<a href="javascript:void(0);">- 상세조건검색 -</a>
							<ul>
								<li><a href="javascript:void(0);">이름</a></li>
								<li><a href="javascript:void(0);">직책</a></li>
							</ul>
						</span> -->

						<div class="mt15">
							<div class="radioCase">
								<div class="radioIconBox">
									<input type="radio" name="confirmCheck" value="1" checked="">
									<label></label>
								</div>
								<div class="radioTitle">승인</div>
							</div>
							<div class="radioCase ml50">
								<div class="radioIconBox">
									<input type="radio" name="confirmCheck" value="2" checked="">
									<label></label>
								</div>
								<div class="radioTitle">미승인</div>
							</div>
							<div class="radioCase ml50">
								<div class="radioIconBox">
									<input type="radio" name="confirmCheck" value="3" checked="">
									<label></label>
								</div>
								<div class="radioTitle">반려</div>
							</div>
						</div>



						<div class="mt15">
							<span class="sbox">
								<a href="javascript:void(0);">집행요청수단</a>
								<ul>
									<li><a href="javascript:void(0);">카드</a></li>
									<li><a href="javascript:void(0);">현금</a></li>
									<li><a href="javascript:void(0);">계좌이체</a></li>
								</ul>
							</span>
							<!-- <a class="btn f_white bg_emerald withTbox">조회</a> -->
						</div>

						<div class="dateSelectGroup mt15">
							<div class="dateInputCase mt15">
								<input class="tbox dateBox shortMod" id="registeredDate" readonly="" placeholder="집행요청일">
							</div>
							<!-- <div class="dateInputCase ml7">
								<input class="tbox dateBox shortMod" id="enterDate" readonly="" placeholder="입사일 선택">
							</div> -->
						</div>
						<!-- <input class="tbox" placeholder="상세검색의 검색어를 입력해주세요."/> -->
					</div>
					<div class="btnGroup searchBottomSort">
						<a href="javascript:void(0);" class="btn halfcut f_white bg_emerald">조회</a>
						<a href="javascript:void(0);" class="btn halfcut f_white bg_emerald  specHideMod hide">상세검색 닫기 ▲</a>
						<a href="javascript:void(0);" class="btn halfcut f_white bg_emerald  specShowMod">상세검색 ▼</a>
					</div>
				</div>
			</div>
			<div class="section tableSect mt20">
				<div class="conGroup tableSort titleUnlinked">


					<div class="headLineBox listControlSort">
						<a href="javascript:void(0);" class="btn listDelSort">선택삭제</a>
						<span class="sbox widthresized ml7">
							<a href="javascript:void(0);">-선택-</a>
							<ul>
								<li><a href="javascript:void(0);">승인</a></li>
								<li><a href="javascript:void(0);">미승인</a></li>
							</ul>
						</span>
						<a href="javascript:void(0);" class="btn listDelSort ml7">선택수정</a>
						<a href="/sinwon/expese/expendReg" class="btn headRightAbMod">결의서 추가</a>

						<div class="sboxGroup listArraySort">
							<span class="sbox">
								<a href="javascript:void(0);">번호순▼</a>
								<ul>
									<li><a href="javascript:void(0);">번호순▼</a></li>
									<li><a href="javascript:void(0);">번호순▲</a></li>
								</ul>
							</span>
							<span class="sbox ml7">
								<a href="javascript:void(0);">40개씩</a>
								<ul>
									<li><a href="javascript:void(0);">80개씩</a></li>
									<li><a href="javascript:void(0);">100개씩</a></li>
								</ul>
							</span>
						</div>
					</div>
					<table class="listTable gapTdSort">
						<colgroup>
							<col width="30">
							<col width="30">
							<col width="50">
							<col width="50">
							<col width="50">
							<col width="50">
							<col width="50">
							<col width="50">
							<col width="50">
							<col width="50">
							<col width="50">
						</colgroup>
						<thead>
						<tr>
							<th>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</th>
							<th>No.</th>
							<th>작성자</th>
							<th>거래처명</th>
							<th>제목</th>
							<th>금액(원)</th>
							<th>집행가능여부</th>
							<th>발안일자</th>
							<th>지급요청일</th>
							<th>등록일</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>
								<div>1</div>
								<a href="javascript:void(0);" class="btn memoSort">메모</a>
							</td>
							<td>
								<div>원무처</div>
								<div class="f_semiBold mt7">곽반장</div>
							</td>
							<td>에이디치히얌</td>
							<td>지출결의서_1_1</td>
							<td>1,000,000</td>
							<td>
								<div class="f_emerald">집행가능</div>
							</td>
							<td>2020-03-01 11:00</td>
							<td>2020-03-26 11:00</td>
							<td>2020-03-01 15:00</td>
							
							<td>
								<a href="/sinwon/expense/expendReg" class="btn modifySort">수정</a>
								<a href="javascript:void(0);" class="btn delSort">삭제</a>
								<a href="javascript:void(0);" class="btn modifySort">비고</a>
							</td>
						</tr>
					
						</tbody>
					</table>
				</div>
				<div class="btnGroup centerSort">
					<a href="javascript:void(0);" class="btn f_white bg_navy">저장</a>
					<a href="javascript:void(0);" class="btn printSort ml6">출력</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/sinwon/common/js/datePick.js"></script>
<script>

// :: 상세검색 표시, 숨기기.
$(document).on('click', '.btn.specShowMod', function(){
	$('.specHideMod.hide').removeClass('hide');
	$(this).addClass('hide');
});
$(document).on('click', '.btn.specHideMod', function(){
	$('.specHideMod').addClass('hide');
	$('.btn.specShowMod.hide').removeClass('hide');
	$(this).addClass('hide');
});

</script>
</body>
</html>