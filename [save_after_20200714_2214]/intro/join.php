<!DOCTYPE html>
<html lang="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/head.php';?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/header.php';?>


	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/top.php';?>


	<div class="contents">




        <div class="topSearchGroup">
            <span class="txtLiner">내 폰 팔면 얼마 받을 수 있나요?</span>
            <div class="sboxGroup">
                <select class="sbox nomSort">
					<option>전체</option>
					<option>과목명</option>
					<option>적요명</option>
                </select>
                <select class="sbox nomSort">
					<option>전체</option>
					<option>과목명</option>
					<option>적요명</option>
                </select>
            </div>
            <span class="txtLiner">S급 매입시세</span>
            <span class="txtLiner priceSort">10,000원</span>
            <a href="javascript:void(0);" class="bgBtn nomSort">판매 신청하기</a>
        </div>
        <div class="mainCon userRegSort">
            <div class="lfFloat">
                <div class="titleBox">회원가입</div>
                <ul class="menuGroup">
                    <li>
                        <a href="javascript:void(0);" class="tOnlyBtn">약관동의</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="tOnlyBtn activated">정보입력</a>
                    </li>
                </ul>
            </div>




		    <div class="rtSection">
                <div class="titleBox sectSort">정보입력</div>
                <div class="regGroup joinSort">
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="아이디"/>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="비밀번호"/>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="비밀번호 확인"/>
                        <div class="tipBox redSort">비밀번호가 일치하지 않습니다.</div>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="이름"/>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="닉네임"/>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="이메일"/>
                    </div>
                    <div class="tBoxGroup btnMixSort">
                        <input class="tbox" placeholder="휴대폰번호 ('-'빼고 입력)"/>
                        <a href="javascript:void(0);" class="bgBtn">인증</a>
                    </div>
                    <div class="tBoxGroup btnMixSort">
                        <input class="tbox" placeholder="인증번호"/>
                        <a href="javascript:void(0);" class="bgBtn">완료</a>
                        <div class="tipBox blackSort">인증되었습니다.</div>
                        <div class="tipBox tCount">2:29</div>
                    </div>
                </div>
                <div class="btnGroup regBotSort">
                    <a href="javascript:void(0);" class="bgBtn">가입 완료</a>
                </div>
            </div>
        </div>
        <a href="javascript:Void(0);" class="icBtn rtFloat"></a>
    </div>
    <!-- <div class="pageBot">
            <ul class="ntList">
		    	<li>
                    <span class="titleBox ntSort">공지사항</span>
                    <span class="infoBox">설연휴 우체국 픽업신청 제한 안내</span>
		    	    <a href="javascript:void(0);" class="moreBtn">MORE</a>
		        </li>
		    </ul>
        </div> 
    </div> -->
    <?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/bottom.php';?>


    <?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/footer.php';?>


</div>


<!-- <script src="/intro/js/join.js"></script> -->


</body>
</html>