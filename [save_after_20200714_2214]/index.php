<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'0100';
?>
<body>

<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>

	<div class="wrapper">
		<div class="contents">
			<div class="section dashStatusSort">
				<div class="conGroup">
					<div class="statusBox">
						<div class="statusTitle">처리 현황</div>
						<div class="statusCountBox">
							<span>246건</span>
							<i class="statusIcon jadeMod"></i>
						</div>
					</div>
					<div class="statusBox">
						<div class="statusTitle">미처리 현황</div>
						<div class="statusCountBox">
							<span>255건</span>
							<i class="statusIcon amethyst"></i>
						</div>
					</div>
					<div class="statusBox">
						<div class="statusTitle">승인 현황</div>
						<div class="statusCountBox">
							<span>42건</span>
							<i class="statusIcon emerald"></i>
						</div>
					</div>
					<div class="statusBox">
						<div class="statusTitle">미승인 현황</div>
						<div class="statusCountBox">
							<span>400건</span>
							<i class="statusIcon topaz"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="section dashTableSort mt34">
				<div class="titleBox sectionSort">
					<div>승인요청내역</div>
					<a href="/sinwon/plan/executeList" class="btn regLinkBtn">승인하기</a>
				</div>
				<div class="conGroup tableSort">
					<table class="listTable">
						<colgroup>
							<col width="30">
							<col width="30">
							<col width="100">
							<col width="60">
						</colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>유형</th>
							<th>제목</th>
							<th>상태</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>지출결의서</td>
							<td>에이디치히얌 정기 구매</td>
							<td>승인</td>
						</tr>
						<tr>
							<td>2</td>
							<td>기안서</td>
							<td>바이엘 제약 의약품 구입 안건</td>
							<td>미승인</td>
						</tr>
						<tr>
							<td>3</td>
							<td>품의서</td>
							<td>의료세트 구매 절차</td>
							<td>반려</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="section dashTableSort mt34">
				<div class="titleBox sectionSort">
					<div>공지사항</div>
				</div>
				<div class="conGroup tableSort">
					<table class="listTable">
						<colgroup>
							<col width="30">
							<col width="30">
							<col width="100">
							<col width="60">
						</colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>작성자</th>
							<th>제목</th>
							<th>분류</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>강동원</td>
							<td>징검다리 연휴 기간 정기 구매 처리 건에 관하여.</td>
							<td>전체공지</td>
						</tr>
						<tr>
							<td>2</td>
							<td>강동원</td>
							<td>품의서 내역 확인 및 수정 규칙</td>
							<td>관리자공지</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
</script>
</body>
</html>