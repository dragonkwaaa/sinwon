<header>
	<div class="logoCase">
		<!-- <i class="logo longSort"></i> -->
		<span>신원 의료재단</span>
	</div>

	<div class="headerNav headerMainSort">
		<a href="/sinwon/" class="<?=($lCode == '0100' ? ' activated' : '')?> mr20">
			<!-- <i class="dashboardIcon"></i> -->
			<span class="">대시보드</span>
		</a>
		<a href="/sinwon/budget/" class="<?=($lCode == '101' ? ' activated' : '')?> mr20">
			<!-- <i class="dashboardIcon"></i> -->
			<span class="">예산관리</span>
		</a>
		<a href="/sinwon/plan/" class="<?=($lCode == '0106' ? ' activated' : '')?> mr20">
			<!-- <i class="engineerIcon"></i> -->
			<span class="">집행관리</span>
		</a>
		<a href="/sinwon/settlement/" class="<?=($lCode == '110' ? ' activated' : '')?> mr20">
			<!-- <i class="branchIcon"></i> -->
			<span class="">결산관리</span>
		</a>
		<a href="/sinwon/setting/subjectList.php" class="<?=($lCode == '111' ? ' activated' : '')?> mr20">
			<!-- <i class="branchIcon"></i> -->
			<span class="">기초항목 관리</span>
		</a>

		<a href="/sinwon/expense/expendList" class="<?=($lCode == '0102' ? ' activated' : '')?> mr20">
			<!-- <i class="branchIcon"></i> -->
			<span class="">지출자료관리</span>
		</a>
		<a href="/sinwon/income/" class="<?=($lCode == '0104' ? ' activated' : '')?> mr20">
			<!-- <i class="reportIcon"></i> -->
			<span class="">영업소관리</span>
		</a>
		<!-- <a href="/sinwon/outcome/" class="<?=($lCode == '0105' ? ' activated' : '')?> mr20">
			<span class="">고정지출관리</span>
		</a> -->
		
		<!-- <a href="/sinwon/my/itemList" class="<?=($lCode == '0107' ? ' activated' : '')?> mr20">
			<span class="">품목관리</span>
		</a> -->
		<a href="/sinwon/staff/" class="<?=($lCode == '0103' ? ' activated' : '')?> mr20">
			<!-- <i class="staffIcon"></i> -->
			<span class="">관리자목록</span>
		</a>
		<!-- <a href="/sinwon/set/payMethod" class="<?=($lCode == '0109' ? ' activated' : '')?> mr20">
			<span class="">결제수단 관리</span>
		</a> -->
		<!-- <a href="/sinwon/pay/" class="<?=($lCode == '0112' ? ' activated' : '')?> mr20">
			<span class="">결제관리</span>
		</a> -->
	</div>







	<div class="headerNav rightSideSort">
		<!-- <a href="/sinwon/my/chiefLog" class="btn userGradeSort">최고관리자</a>
		<a href="/sinwon/my/myInfo" class="btn userGradeSort">내 정보</a> -->
		<!-- <a href="javascript:void(0);" class="btn userGradeSort">최고관리자</a> -->
        <div class="userGradeSort">adUser1234(최고관리자)</div>
		<!-- <a href="javascript:void(0);" class="btn userGradeSort">내 정보</a> -->
		<a href="/sinwon/intro/login" class="btn logoutSort">로그아웃</a>
	</div>
</header>