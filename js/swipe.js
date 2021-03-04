

// img ID為pd_img
// 說明文字ID為pd_text
// 超連結ID為aurl
// 滑動頁面ID為 home

$( document ).on( "pagecreate", "#home", function() {
    $( document ).on( "swipeleft swiperight", "#home", function( e ) {
        if ( e.type === "swipeleft" ) {
            showprev();
        }else if ( e.type === "swiperight" ) {
            shownext();
        }
    });
});


var pdindex=0;
var pdImgSrc,pdcurBook,arURL;

var arBKSrc=new Array("mb01.jpg","mb02.jpg","mb03.jpg","mb04.jpg","mb05.jpg","mb06.jpg","mb07.jpg","mb08.jpg","mb09.jpg","mb10.jpg",);
var arBKName=new Array("HTC One A","HTC New HC","HTC BUTTSSA","HTC CUSS one","HTC YY-1s","HTC TNY 2s","HTC QQs Ps","HTC GG one","HTC Vivi two","HTC Rain Top");
var arURL=new Array("https://24h.pchome.com.tw/prod/DGBMHK-A900AZ8TG",
	"https://24h.pchome.com.tw/prod/DGCC9S-A900B0J3J?fq=/S/DYAW03",
	"https://24h.pchome.com.tw/prod/DGCC9S-A900ATUJ8",
	"https://24h.pchome.com.tw/prod/DYAW38-A900B3NY8?fq=/S/DYAW38",
	"https://24h.pchome.com.tw/prod/DGCC92-A900B1J30?fq=/S/DYAW2X",
	"https://24h.pchome.com.tw/prod/DGCC9S-A900ATUJ8",
	"https://24h.pchome.com.tw/prod/DYAW38-A900B3NY8?fq=/S/DYAW38",
	"https://24h.pchome.com.tw/prod/DGCC92-A900B1J30?fq=/S/DYAW2X",
	"https://24h.pchome.com.tw/prod/DGCC9S-A900B0J3J?fq=/S/DYAW03",
	"https://24h.pchome.com.tw/prod/DGCC9S-A900ATUJ8");

function showprev() {
	pdindex --;
	if(pdindex<0){
		pdindex=9;
	}
	pdImgSrc="./images/" + arBKSrc[pdindex];
	pdcurBook=arBKName[pdindex];
	adURL=arURL[pdindex];
	$("#aurl").attr("href",adURL);
	$('#pd_img').attr("src", pdImgSrc); 
	$("#pd_text").text(pdcurBook);
}

function shownext() {
	pdindex ++;
	if(pdindex>9){
		pdindex=0
	}
	pdImgSrc="./images/" + arBKSrc[pdindex];
	pdcurBook=arBKName[pdindex];
	adURL=arURL[pdindex];
	$("#aurl").attr("href",adURL);
	$('#pd_img').attr("src", pdImgSrc); 
	$("#pd_text").text(pdcurBook);
}