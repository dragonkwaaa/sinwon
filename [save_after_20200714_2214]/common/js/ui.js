// :: 셀렉트박스 스크립트(공용)
$(document).on('click', '.sbox > a', function(){
	$('.sbox > a').not($(this)).siblings('ul').slideUp(200);
	$(this).siblings('ul').slideToggle();
})
// :: 셀렉트박스 내용 선택시, 셀렉트박스 리스트 닫기 스크립트(공용)
$(document).on('click', '.sbox ul li', function(){
	$(this).parent('ul').slideToggle();
})	


//  :: 페이징 스크립트
$(document).on('click', '.page_group a',function(){
	let pageGroup	=	$(this).parent('li.pageNum').siblings('li');
	$(pageGroup).removeClass('on');
	$(this).parent('li.pageNum').addClass('on');
});



// :: 자동검색기능
$(function() {
	var avaliableText = ["곽반장","곽부장","주팀장","곽과장","곽주임"];
	$(".searchInput").autocomplete({
		source: avaliableText,
		select: function(event, ui) {
			// console.log(ui.item);
		},
		focus: function(event, ui) {
			return false;
			//event.preventDefault();
		}
	});
});