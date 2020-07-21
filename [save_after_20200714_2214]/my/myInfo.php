<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/head.php';
	$lCode					=	'';
?>
<body>

<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/sinwon/common/pages/header.php'; ?>

	<div class="wrapper">
		<div class="contents">
			<div class="section regimentSect">


			<div class="titleBox sectionSort">권한설정</div>

			<div class="conGroup regInfoSort">
				
				<div class="tabGroup conRadioSort">
					<ul>
						<li>
							<div class="checkBoxCase">
								<div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
								<div class="checkBoxTitle">대시보드</div>
							</div>
						</li>
						<li>
							<div class="checkBoxCase">
								<div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
								<div class="checkBoxTitle">지출요청관리</div>
							</div>
						</li>
						<li>
							<div class="checkBoxCase">
								<div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
								<div class="checkBoxTitle">직원관리</div>
							</div>
						</li>
					</ul>
				</div>
			
			</div>


				<div class="titleBox sectionSort">내 정보</div>
				<div class="conGroup regInfoSort">
				
					<div class="subConGroup">
						<div class="mt15">
							<input class="tbox" value="dragonkwaaa" readonly/>
						</div>
						<div class="mt15">
							
							<input class="tbox" value="곽반장"/> 
						</div>
						<div class="mt15">
							<input class="tbox" value="****" readonly/>
							<a href="javascript:changePass()" class="btn f_white bg_emerald withTbox">비밀번호 변경</a>
						</div>
						<div class="mt15 passResetHide">
							<div>
								<input class="tbox" placeholder="새 비밀번호를 입력해주세요"/>
							</div>
							<div>
								<input class="tbox mt15" placeholder="새 비밀번호를 다시 한번 입력해주세요"/>
							</div>
						</div>
						<div class="mt15">
							<span class="sbox">
								<a href="javascript:void(0);">원무부</a>
								<ul>
									<li><a href="javascript:void(0);">약제부</a></li>
									<li><a href="javascript:void(0);">간호부</a></li>
								</ul>
							</span>
							<span class="sbox ml7">
								<a href="javascript:void(0);">과장</a>
								<ul>
									<li><a href="javascript:void(0);">사원</a></li>
									<li><a href="javascript:void(0);">주임</a></li>
									<li><a href="javascript:void(0);">대리</a></li>
									<li><a href="javascript:void(0);">부장</a></li>
								</ul>
							</span>
						</div>
						
						
						<div class="mt15">
							<input class="tbox" value="010-1234-1234"/>
							<!-- <a class="btn f_white bg_emerald withTbox col_emerald">중복확인</a> -->
						</div>
						<div class="mt15">
							<input class="tbox" value="02-1234-1234"/>
							<!-- <a class="btn f_white bg_emerald withTbox col_emerald">중복확인</a> -->
						</div>
					</div>
				</div>
				<div class="btnGroup">
					<a href="/sinwon/staff/" class="btn f_white bg_navy">저장</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
// :: 비밀번호 변경 버튼 클릭 시, 재입력 인풋 등장.
function changePass(){
	$('.passResetHide').show();
}

</script>
</body>
</html>