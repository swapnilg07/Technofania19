<!DOCTYPE html>
<html lang="en">
<head>
<title>technofania</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="css2/bootstrap.css">
	<link rel="stylesheet" href="css2/bootstrap.min.css">
	<link rel="stylesheet" href="css2/content.css">
	
	<link rel="stylesheet" href="css2/font-awesome.min.css">
 	<link rel="shortcut icon" href="images/tech.png" type="image/">
	<link rel="stylesheet" href="css2/animate.css">	
<style type="text/css"></style>
<script language='JavaScript' type='text/JavaScript'>
 




//OSOC

function disp1(){
var step=3; 
var y=document.getElementById('i1').offsetTop;
var x=document.getElementById('i1').offsetLeft;
if(y < 120 ){y= y +step;
document.getElementById('i1').style.top= y + "px";
	
 // vertical movment
}else{
if(x < 570){x= x +step;
document.getElementById('i1').style.left= x + "px"; // horizontal movment
}
}
}


function timer1(){
disp1();
var y=document.getElementById('i1').offsetTop;
var x=document.getElementById('i1').offsetLeft;
my_time=setTimeout('timer1()',10);
}



//timer2


function disp2(){
var step=3; // Change this step value
var y=document.getElementById('i2').offsetTop;
var x=document.getElementById('i2').offsetLeft;
if(120< y ){y= y -step;
document.getElementById('i2').style.top= y  +	"px";
 // vertical movment
}else{
if(x < 620){x= x +step;
document.getElementById('i2').style.left= x + "px"; // horizontal movment
}
}


}

function timer2(){
disp2();
var y=document.getElementById('i2').offsetTop;
var x=document.getElementById('i2').offsetLeft;
//document.getElementById("msg").innerHTML="X: " + x  + " Y : " + y
my_time=setTimeout('timer2()',10);
}


//timer 3



function disp3(){
var step=3; 
var y=document.getElementById('i3').offsetTop;
var x=document.getElementById('i3').offsetLeft;
if(120 < y ){y= y -step;
document.getElementById('i3').style.top= y + "px";
 // vertical movment
}else{
if(670 < x){x= x -step;
document.getElementById('i3').style.left= x + "px"; // horizontal movment
}
}


}

function timer3(){
disp3();
var y=document.getElementById('i3').offsetTop;
var x=document.getElementById('i3').offsetLeft;
//document.getElementById("msg").innerHTML="X: " + x  + " Y : " + y
my_time=setTimeout('timer3()',10);
}


//timer 4


function disp4(){
var step=3; // Change this step value
//alert("Hello");
var y=document.getElementById('i4').offsetTop;
var x=document.getElementById('i4').offsetLeft;
if(y < 120 ){y= y +step;
document.getElementById('i4').style.top= y + "px";
 // vertical movment
}else{
if(720 < x){x= x -step;
document.getElementById('i4').style.left= x + "px"; // horizontal movment
}
}


}

function timer4(){
disp4();

var y=document.getElementById('i4').offsetTop;
var x=document.getElementById('i4').offsetLeft;

my_time=setTimeout('timer4()',10);
}



//github

function disp5(){
var step=3; // Change this step value
//alert("Hello");
var y=document.getElementById('i5').offsetTop;
var x=document.getElementById('i5').offsetLeft;
if(y < 110 ){y= y +step;
document.getElementById('i5').style.top= y + "px";
 // vertical movment
}else{
if(550 < x){x= x -step;
document.getElementById('i5').style.left= x + "px"; // horizontal movment
}
}


}

function timer5(){
disp5();

var y=document.getElementById('i5').offsetTop;
var x=document.getElementById('i5').offsetLeft;

my_time=setTimeout('timer5()',10);
}

function disp6(){
var step=3;
var y=document.getElementById('i6').offsetTop;
var x=document.getElementById('i6').offsetLeft;
if(y < 110 ){y= y +step;
document.getElementById('i6').style.top= y + "px";
 // vertical movment
}else{
if(570 < x){x= x -step;
document.getElementById('i6').style.left= x + "px"; // horizontal movment
}
}
}

function timer6(){
disp6();

var y=document.getElementById('i6').offsetTop;
var x=document.getElementById('i6').offsetLeft;

my_time=setTimeout('timer6()',10);
}

function disp7(){
var step=3;
var y=document.getElementById('i7').offsetTop;
var x=document.getElementById('i7').offsetLeft;
if(y > 110 ){y= y -step;
document.getElementById('i7').style.top= y + "px";
 // vertical movment
}else{
if(580 < x){x= x -step;
document.getElementById('i7').style.left= x + "px"; // horizontal movment
}
}
}

function timer7(){
disp7();

var y=document.getElementById('i7').offsetTop;
var x=document.getElementById('i7').offsetLeft;

my_time=setTimeout('timer7()',10);
}

function disp8(){
var step=3;
var y=document.getElementById('i8').offsetTop;
var x=document.getElementById('i8').offsetLeft;
if(y > 110 ){y= y -step;
document.getElementById('i8').style.top= y + "px";
 // vertical movment
}else{
if(595 < x){x= x -step;
document.getElementById('i8').style.left= x + "px"; // horizontal movment
}
}
}

function timer8(){
disp8();

var y=document.getElementById('i8').offsetTop;
var x=document.getElementById('i8').offsetLeft;

my_time=setTimeout('timer8()',10);
}

function disp9(){
var step=3;
var y=document.getElementById('i9').offsetTop;
var x=document.getElementById('i9').offsetLeft;
if(y > 110 ){y= y -step;
document.getElementById('i9').style.top= y + "px";
 // vertical movment
}else{
if(615 < x){x= x -step;
document.getElementById('i9').style.left= x + "px"; // horizontal movment
}
}
}

function timer9(){
disp9();

var y=document.getElementById('i9').offsetTop;
var x=document.getElementById('i9').offsetLeft;

my_time=setTimeout('timer9()',10);
}

function disp10(){
var step=3;
var y=document.getElementById('i10').offsetTop;
var x=document.getElementById('i10').offsetLeft;
if(y > 110 ){y= y -step;
document.getElementById('i10').style.top= y + "px";
 // vertical movment
}else{
if(635 < x){x= x -step;
document.getElementById('i10').style.left= x + "px"; // horizontal movment
}
}
}

function timer10(){
disp10();

var y=document.getElementById('i10').offsetTop;
var x=document.getElementById('i10').offsetLeft;

my_time=setTimeout('timer10()',10);
}

//MySQL
function disp11(){
var step=3;
var y=document.getElementById('i11').offsetTop;
var x=document.getElementById('i11').offsetLeft;
if(y > 338 ){y= y -step;
document.getElementById('i11').style.top= y + "px";
 // vertical movment
}else{
if(665 < x){x= x -step;
document.getElementById('i11').style.left= x + "px"; // horizontal movment
}
}
}

function timer11(){
disp11();

var y=document.getElementById('i11').offsetTop;
var x=document.getElementById('i11').offsetLeft;

my_time=setTimeout('timer11()',10);
}

function disp12(){
var step=3;
var y=document.getElementById('i12').offsetTop;
var x=document.getElementById('i12').offsetLeft;
if(y > 362 ){y= y -step;
document.getElementById('i12').style.top= y + "px";
 // vertical movment
}else{
if(665 < x){x= x -step;
document.getElementById('i12').style.left= x + "px"; // horizontal movment
}
}
}

function timer12(){
disp12();

var y=document.getElementById('i12').offsetTop;
var x=document.getElementById('i12').offsetLeft;

my_time=setTimeout('timer12()',10);
}
function disp13(){
var step=3;
var y=document.getElementById('i13').offsetTop;
var x=document.getElementById('i13').offsetLeft;
if(y > 400 ){y= y -step;
document.getElementById('i13').style.top= y + "px";
 // vertical movment
}else{
if(665<	 x){x= x -step;
document.getElementById('i13').style.left= x + "px"; // horizontal movment
}
}
}

function timer13(){
disp13();

var y=document.getElementById('i13').offsetTop;
var x=document.getElementById('i13').offsetLeft;

my_time=setTimeout('timer13()',10);
}

function disp14(){
var step=3;
var y=document.getElementById('i14').offsetTop;
var x=document.getElementById('i14').offsetLeft;
if(y > 430 ){y= y -step;
document.getElementById('i14').style.top= y + "px";
 // vertical movment
}else{
if(665 < x){x= x -step;
document.getElementById('i14').style.left= x + "px"; // horizontal movment
}
}
}

function timer14(){
disp14();

var y=document.getElementById('i14').offsetTop;
var x=document.getElementById('i14').offsetLeft;

my_time=setTimeout('timer14()',10);
}

function disp15(){
var step=3;
var y=document.getElementById('i15').offsetTop;
var x=document.getElementById('i15').offsetLeft;
if(y < 460 ){y= y +step;
document.getElementById('i15').style.top= y + "px";
 // vertical movment
}else{
if(665 < x){x= x -step;
document.getElementById('i15').style.left= x + "px"; // horizontal movment
}
}
}

function timer15(){
disp15();

var y=document.getElementById('i15').offsetTop;
var x=document.getElementById('i15').offsetLeft;

my_time=setTimeout('timer15()',10);
}

//mozilla

function disp16(){
var step=3;
var y=document.getElementById('i16').offsetTop;
var x=document.getElementById('i16').offsetLeft;
if(y > 163){y= y -step;
document.getElementById('i16').style.top= y + "px";
 // vertical movment
}else{
if(670< x){x= x -step;
document.getElementById('i16').style.left= x + "px"; // horizontal movment
}
}
}

function timer16(){
disp16();

var y=document.getElementById('i16').offsetTop;
var x=document.getElementById('i16').offsetLeft;

my_time=setTimeout('timer16()',10);
}

function disp17(){
var step=3;
var y=document.getElementById('i17').offsetTop;
var x=document.getElementById('i17').offsetLeft;
if(y >183 ){y= y -step;
document.getElementById('i17').style.top= y + "px";
 // vertical movment
}else{
if(667 > x){x= x +step;
document.getElementById('i17').style.left= x + "px"; // horizontal movment
}
}
}

function timer17(){
disp17();

var y=document.getElementById('i17').offsetTop;
var x=document.getElementById('i17').offsetLeft;

my_time=setTimeout('timer17()',10);
}

function disp18(){
var step=3;
var y=document.getElementById('i18').offsetTop;
var x=document.getElementById('i18').offsetLeft;
if(y > 208 ){y= y -step;
document.getElementById('i18').style.top= y + "px";
 // vertical movment
}else{
if(670 < x){x= x -step;
document.getElementById('i18').style.left= x + "px"; // horizontal movment
}
}
}

function timer18(){
disp18();

var y=document.getElementById('i18').offsetTop;
var x=document.getElementById('i18').offsetLeft;

my_time=setTimeout('timer18()',10);
}
function disp19(){
var step=3;
var y=document.getElementById('i19').offsetTop;
var x=document.getElementById('i19').offsetLeft;
if(y > 238 ){y= y -step;
document.getElementById('i19').style.top= y + "px";
 // vertical movment
}else{
if(675 < x){x= x -step;
document.getElementById('i19').style.left= x + "px"; // horizontal movment
}
}
}

function timer19(){
disp19();

var y=document.getElementById('i19').offsetTop;
var x=document.getElementById('i19').offsetLeft;

my_time=setTimeout('timer19()',10);
}

function disp20(){
var step=3;
var y=document.getElementById('i20').offsetTop;
var x=document.getElementById('i20').offsetLeft;
if(y > 260 ){y= y -step;
document.getElementById('i20').style.top= y + "px";
 // vertical movment
}else{
if(672 > x){x= x +step;
document.getElementById('i20').style.left= x + "px"; // horizontal movment
}
}
}

function timer20(){
disp20();

var y=document.getElementById('i20').offsetTop;
var x=document.getElementById('i20').offsetLeft;

my_time=setTimeout('timer20()',10);
}
function disp21(){
var step=3;
var y=document.getElementById('i21').offsetTop;
var x=document.getElementById('i21').offsetLeft;
if(y < 285 ){y= y +step;
document.getElementById('i21').style.top= y + "px";
 // vertical movment
}else{
if(676 < x){x= x -step;
document.getElementById('i21').style.left= x + "px"; // horizontal movment
}
}
}

function timer21(){
disp21();

var y=document.getElementById('i21').offsetTop;
var x=document.getElementById('i21').offsetLeft;

my_time=setTimeout('timer21()',10);
}

function disp22(){
var step=3;
var y=document.getElementById('i22').offsetTop;
var x=document.getElementById('i22').offsetLeft;
if(y > 308){y= y -step;
document.getElementById('i22').style.top= y + "px";
 // vertical movment
}else{
if(670 < x){x= x -step;
document.getElementById('i22').style.left= x + "px"; // horizontal movment
}
}
}

function timer22(){
disp22();

var y=document.getElementById('i22').offsetTop;
var x=document.getElementById('i22').offsetLeft;

my_time=setTimeout('timer22()',10);
}

//GIMP
function disp23(){
var step=3;
var y=document.getElementById('i23').offsetTop;
var x=document.getElementById('i23').offsetLeft;
if(y < 140){y= y +step;
document.getElementById('i23').style.top= y + "px";
 // vertical movment
}else{
if(770 > x){x= x +step;
document.getElementById('i23').style.left= x + "px"; // horizontal movment
}
}
}

function timer23(){
disp23();

var y=document.getElementById('i23').offsetTop;
var x=document.getElementById('i23').offsetLeft;

my_time=setTimeout('timer23()',10);
}

function disp24(){
var step=3;
var y=document.getElementById('i24').offsetTop;
var x=document.getElementById('i24').offsetLeft;
if(y > 140){y= y -step;
document.getElementById('i24').style.top= y + "px";
 // vertical movment
}else{
if(800> x){x= x +step;
document.getElementById('i24').style.left= x + "px"; // horizontal movment
}
}
}

function timer24(){
disp24();

var y=document.getElementById('i24').offsetTop;
var x=document.getElementById('i24').offsetLeft;

my_time=setTimeout('timer24()',10);
}
function disp25(){
var step=3;
var y=document.getElementById('i25').offsetTop;
var x=document.getElementById('i25').offsetLeft;
if(y < 140){y= y +step;
document.getElementById('i25').style.top= y + "px";
 // vertical movment
}else{
if(810 > x){x= x +step;
document.getElementById('i25').style.left= x + "px"; // horizontal movment
}
}
}

function timer25(){
disp25();

var y=document.getElementById('i25').offsetTop;
var x=document.getElementById('i25').offsetLeft;

my_time=setTimeout('timer25()',10);
}
function disp26(){
var step=3;
var y=document.getElementById('i26').offsetTop;
var x=document.getElementById('i26').offsetLeft;
if(y > 140){y= y -step;
document.getElementById('i26').style.top= y + "px";
 // vertical movment
}else{
if(840 > x){x= x +step;
document.getElementById('i26').style.left= x + "px"; // horizontal movment
}
}
}

function timer26(){
disp26();

var y=document.getElementById('i26').offsetTop;
var x=document.getElementById('i26').offsetLeft;

my_time=setTimeout('timer26()',10);
}

function disp27(){
var step=3;
var y=document.getElementById('i27').offsetTop;
var x=document.getElementById('i27').offsetLeft;
if(y < 110){y= y +step;
document.getElementById('i27').style.top= y + "px";
 // vertical movment
}else{
if(495 > x){x= x +step;
document.getElementById('i27').style.left= x + "px"; // horizontal movment
}
}
}

function timer27(){
disp27();

var y=document.getElementById('i27').offsetTop;
var x=document.getElementById('i27').offsetLeft;

my_time=setTimeout('timer27()',10);
}

function disp28(){
var step=3;
var y=document.getElementById('i28').offsetTop;
var x=document.getElementById('i28').offsetLeft;
if(y > 110){y= y -step;
document.getElementById('i28').style.top= y + "px";
 // vertical movment
}else{
if(520 > x){x= x +step;
document.getElementById('i28').style.left= x + "px"; // horizontal movment
}
}
}

function timer28(){
disp28();

var y=document.getElementById('i28').offsetTop;
var x=document.getElementById('i28').offsetLeft;

my_time=setTimeout('timer28()',10);
}
function disp29(){
var step=3;
var y=document.getElementById('i29').offsetTop;
var x=document.getElementById('i29').offsetLeft;
if(y < 137){y= y +step;
document.getElementById('i29').style.top= y + "px";
 // vertical movment
}else{
if(495 > x){x= x +step;
document.getElementById('i29').style.left= x + "px"; // horizontal movment
}
}
}

function timer29(){
disp29();

var y=document.getElementById('i29').offsetTop;
var x=document.getElementById('i29').offsetLeft;

my_time=setTimeout('timer29()',10);
}

function disp30(){
var step=3;
var y=document.getElementById('i30').offsetTop;
var x=document.getElementById('i30').offsetLeft;
if(y > 140){y= y -step;
document.getElementById('i30').style.top= y + "px";
 // vertical movment
}else{
if(520 > x){x= x +step;
document.getElementById('i30').style.left= x + "px"; // horizontal movment
}
}
}

function timer30(){
disp30();

var y=document.getElementById('i30').offsetTop;
var x=document.getElementById('i30').offsetLeft;

my_time=setTimeout('timer30()',10);
}

function disp31(){
var step=3;
var y=document.getElementById('i31').offsetTop;
var x=document.getElementById('i31').offsetLeft;
if(y < 110){y= y +step;
document.getElementById('i31').style.top= y + "px";
 // vertical movment
}else{
if(660 > x){x= x +step;
document.getElementById('i31').style.left= x + "px"; // horizontal movment
}
}
}

function timer31(){
disp31();

var y=document.getElementById('i31').offsetTop;
var x=document.getElementById('i31').offsetLeft;

my_time=setTimeout('timer31()',10);
}

function disp32(){
var step=3;
var y=document.getElementById('i32').offsetTop;
var x=document.getElementById('i32').offsetLeft;
if(y > 110){y= y -step;
document.getElementById('i32').style.top= y + "px";
 // vertical movment
}else{
if(685 > x){x= x +step;
document.getElementById('i32').style.left= x + "px"; // horizontal movment
}
}
}

function timer32(){
disp32();

var y=document.getElementById('i32').offsetTop;
var x=document.getElementById('i32').offsetLeft;

my_time=setTimeout('timer32()',10);
}

function disp33(){
var step=3;
var y=document.getElementById('i33').offsetTop;
var x=document.getElementById('i33').offsetLeft;
if(y > 110){y= y -step;
document.getElementById('i33').style.top= y + "px";
 // vertical movment
}else{
if(715 < x){x= x -step;
document.getElementById('i33').style.left= x + "px"; // horizontal movment
}
}
}

function timer33(){
disp33();

var y=document.getElementById('i33').offsetTop;
var x=document.getElementById('i33').offsetLeft;

my_time=setTimeout('timer33()',10);
}


function disp34(){
var step=3;
var y=document.getElementById('i34').offsetTop;
var x=document.getElementById('i34').offsetLeft;
if(y > 110){y= y -step;
document.getElementById('i34').style.top= y + "px";
 // vertical movment
}else{
if(735 > x){x= x +step;
document.getElementById('i34').style.left= x + "px"; // horizontal movment
}
}
}

function timer34(){
disp34();

var y=document.getElementById('i34').offsetTop;
var x=document.getElementById('i34').offsetLeft;

my_time=setTimeout('timer34()',10);
}

function disp35(){
var step=3;
var y=document.getElementById('i35').offsetTop;
var x=document.getElementById('i35').offsetLeft;
if(y < 110){y= y +step;
document.getElementById('i35').style.top= y + "px";
 // vertical movment
}else{
if(760 > x){x= x +step;
document.getElementById('i35').style.left= x + "px"; // horizontal movment
}
}
}

function timer35(){
disp35();

var y=document.getElementById('i35').offsetTop;
var x=document.getElementById('i35').offsetLeft;

my_time=setTimeout('timer35()',10);
}

function disp36(){
var step=3;
var y=document.getElementById('i36').offsetTop;
var x=document.getElementById('i36').offsetLeft;
if(y > 110){y= y -step;
document.getElementById('i36').style.top= y + "px";
 // vertical movment
}else{
if(775 > x){x= x +step;
document.getElementById('i36').style.left= x + "px"; // horizontal movment
}
}
}

function timer36(){
disp36();

var y=document.getElementById('i36').offsetTop;
var x=document.getElementById('i36').offsetLeft;

my_time=setTimeout('timer36()',10);
}

function disp37(){
var step=3;
var y=document.getElementById('i37').offsetTop;
var x=document.getElementById('i37').offsetLeft;
if(y < 110){y= y +step;
document.getElementById('i37').style.top= y + "px";
 // vertical movment
}else{
if(800 > x){x= x +step;
document.getElementById('i37').style.left= x + "px"; // horizontal movment
}
}
}

function timer37(){
disp37();

var y=document.getElementById('i37').offsetTop;
var x=document.getElementById('i37').offsetLeft;

my_time=setTimeout('timer37()',10);
}

function disp38(){
var step=3;
var y=document.getElementById('i38').offsetTop;
var x=document.getElementById('i38').offsetLeft;
if(y > 113){y= y -step;
document.getElementById('i38').style.top= y + "px";
 // vertical movment
}else{
if(820> x){x= x +step;
document.getElementById('i38').style.left= x + "px"; // horizontal movment
}
}
}

function timer38(){
disp38();

var y=document.getElementById('i38').offsetTop;
var x=document.getElementById('i38').offsetLeft;

my_time=setTimeout('timer38()',10);
}

function disp39(){
var step=3;
var y=document.getElementById('i39').offsetTop;
var x=document.getElementById('i39').offsetLeft;
if(y < 110){y= y +step;
document.getElementById('i39').style.top= y + "px";
 // vertical movment
}else{
if(842< x){x= x -step;
document.getElementById('i39').style.left= x + "px"; // horizontal movment
}
}
}

function timer39(){
disp39();

var y=document.getElementById('i39').offsetTop;
var x=document.getElementById('i39').offsetLeft;

my_time=setTimeout('timer39()',10);
}

function disp40(){
var step=3;
var y=document.getElementById('i40').offsetTop;
var x=document.getElementById('i40').offsetLeft;
if(y > 110){y= y -step;
document.getElementById('i40').style.top= y + "px";
 // vertical movment
}else{
if(860> x){x= x +step;
document.getElementById('i40').style.left= x + "px"; // horizontal movment
}
}
}

function timer40(){
disp40();

var y=document.getElementById('i40').offsetTop;
var x=document.getElementById('i40').offsetLeft;

my_time=setTimeout('timer40()',10);
}
function disp41(){
var step=3;
var y=document.getElementById('i41').offsetTop;
var x=document.getElementById('i41').offsetLeft;
if(y > 172){y= y -step;
document.getElementById('i41').style.top= y + "px";
 // vertical movment
}else{
if(642< x){x= x -step;
document.getElementById('i41').style.left= x + "px"; // horizontal movment
}
}
}

function timer41(){
disp41();

var y=document.getElementById('i41').offsetTop;
var x=document.getElementById('i41').offsetLeft;

my_time=setTimeout('timer41()',10);
}

function disp42(){
var step=3;
var y=document.getElementById('i42').offsetTop;
var x=document.getElementById('i42').offsetLeft;
if(y > 195){y= y -step;
document.getElementById('i42').style.top= y + "px";
 // vertical movment
}else{
if(642< x){x= x -step;
document.getElementById('i42').style.left= x + "px"; // horizontal movment
}
}
}

function timer42(){
disp42();

var y=document.getElementById('i42').offsetTop;
var x=document.getElementById('i42').offsetLeft;

my_time=setTimeout('timer42()',10);
}

function disp43(){
var step=3;
var y=document.getElementById('i43').offsetTop;
var x=document.getElementById('i43').offsetLeft;
if(y > 220){y= y -step;
document.getElementById('i43').style.top= y + "px";
 // vertical movment
}else{
if(640< x){x= x -step;
document.getElementById('i43').style.left= x + "px"; // horizontal movment
}
}
}

function timer43(){
disp43();

var y=document.getElementById('i43').offsetTop;
var x=document.getElementById('i43').offsetLeft;

my_time=setTimeout('timer43()',10);
}
function disp44(){
var step=3;
var y=document.getElementById('i44').offsetTop;
var x=document.getElementById('i44').offsetLeft;
if(y > 245){y= y -step;
document.getElementById('i44').style.top= y + "px";
 // vertical movment
}else{
if(642< x){x= x -step;
document.getElementById('i44').style.left= x + "px"; // horizontal movment
}
}
}

function timer44(){
disp44();

var y=document.getElementById('i44').offsetTop;
var x=document.getElementById('i44').offsetLeft;

my_time=setTimeout('timer44()',10);
}
function disp45(){
var step=3;
var y=document.getElementById('i45').offsetTop;
var x=document.getElementById('i45').offsetLeft;
if(y < 272){y= y +step;
document.getElementById('i45').style.top= y + "px";
 // vertical movment
}else{
if(642< x){x= x -step;
document.getElementById('i45').style.left= x + "px"; // horizontal movment
}
}
}

function timer45(){
disp45();

var y=document.getElementById('i45').offsetTop;
var x=document.getElementById('i45').offsetLeft;

my_time=setTimeout('timer45()',10);
}

function disp46(){
var step=3;
var y=document.getElementById('i46').offsetTop;
var x=document.getElementById('i46').offsetLeft;
if(y < 292){y= y +step;
document.getElementById('i46').style.top= y + "px";
 // vertical movment
}else{
if(640> x){x= x +step;
document.getElementById('i46').style.left= x + "px"; // horizontal movment
}
}
}

function timer46(){
disp46();

var y=document.getElementById('i46').offsetTop;
var x=document.getElementById('i46').offsetLeft;

my_time=setTimeout('timer46()',10);
}

function disp47(){
var step=3;
var y=document.getElementById('i47').offsetTop;
var x=document.getElementById('i47').offsetLeft;
if(y < 332){y= y +step;
document.getElementById('i47').style.top= y + "px";
 // vertical movment
}else{
if(642< x){x= x -step;
document.getElementById('i47').style.left= x + "px"; // horizontal movment
}
}
}

function timer47(){
disp47();

var y=document.getElementById('i47').offsetTop;
var x=document.getElementById('i47').offsetLeft;

my_time=setTimeout('timer47()',10);
}
function disp48(){
var step=3;
var y=document.getElementById('i48').offsetTop;
var x=document.getElementById('i48').offsetLeft;
if(y > 365){y= y -step;
document.getElementById('i48').style.top= y + "px";
 // vertical movment
}else{
if(642< x){x= x -step;
document.getElementById('i48').style.left= x + "px"; // horizontal movment
}
}
}

function timer48(){
disp48();

var y=document.getElementById('i48').offsetTop;
var x=document.getElementById('i48').offsetLeft;

my_time=setTimeout('timer48()',10);
}
function disp49(){
var step=3;
var y=document.getElementById('i49').offsetTop;
var x=document.getElementById('i49').offsetLeft;
if(y > 385){y= y -step;
document.getElementById('i49').style.top= y + "px";
 // vertical movment
}else{
if(642< x){x= x -step;
document.getElementById('i49').style.left= x + "px"; // horizontal movment
}
}
}

function timer49(){
disp49();

var y=document.getElementById('i49').offsetTop;
var x=document.getElementById('i49').offsetLeft;

my_time=setTimeout('timer49()',10);
}
function disp50(){
var step=3;
var y=document.getElementById('i50').offsetTop;
var x=document.getElementById('i50').offsetLeft;
if(y < 435){y= y +step;
document.getElementById('i50').style.top= y + "px";
 // vertical movment
}else{
if(642 < x){x= x -step;
document.getElementById('i50').style.left= x + "px"; // horizontal movment
}
}
}

function timer50(){
disp50();

var y=document.getElementById('i50').offsetTop;
var x=document.getElementById('i50').offsetLeft;

my_time=setTimeout('timer50()',10);
}

function disp51(){
var step=3;
var y=document.getElementById('i51').offsetTop;
var x=document.getElementById('i51').offsetLeft;
if(y < 460){y= y +step;
document.getElementById('i51').style.top= y + "px";
 // vertical movment
}else{
if(642 < x){x= x -step;
document.getElementById('i51').style.left= x + "px"; // horizontal movment
}
}
}

function timer51(){
disp51();

var y=document.getElementById('i51').offsetTop;
var x=document.getElementById('i51').offsetLeft;

my_time=setTimeout('timer51()',10);
}

function disp52(){
var step=2;
var y=document.getElementById('i52').offsetTop;
var x=document.getElementById('i52').offsetLeft;
if(y > 490){y= y -step;
document.getElementById('i52').style.top= y + "px";
 // vertical movment
}else{
if(615 < x){x= x -step;
document.getElementById('i52').style.left= x + "px"; // horizontal movment
}
}
}

function timer52(){
disp52();

var y=document.getElementById('i52').offsetTop;
var x=document.getElementById('i52').offsetLeft;

my_time=setTimeout('timer52()',10);
}



function disp54(){
var step=3;
var y=document.getElementById('i54').offsetTop;
var x=document.getElementById('i54').offsetLeft;
if(y < 487){y= y +step;
document.getElementById('i54').style.top= y + "px";
 // vertical movment
}else{
if(642 < x){x= x -step;
document.getElementById('i54').style.left= x + "px"; // horizontal movment
}
}
}

function timer54(){
disp54();

var y=document.getElementById('i54').offsetTop;
var x=document.getElementById('i54').offsetLeft;

my_time=setTimeout('timer54()',10);
}


</script>
</head>
<style type="text/css">
	

.social-icon {
  position: relative;
  padding: 0;
  margin: 0;
  text-align: center;
}
.ic
{
  margin-top: -18%;
}
.social-icon li {
  display:list-item;
  list-style: none;
}

.social-icon li a {
  background: #343592;
  border-radius: 100%;
  color: white;
  cursor: pointer;
  font-size: 20px;
  text-decoration: none;
  transition: all 0.4s ease-in-out;
  width: 45px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  vertical-align: middle;
  position: relative;
  top: 0;
  margin: 0px 6px 10px 6px;
}

.social-icon li a.fa-facebook:hover {
  background: #4267b2;
  color: #ffffff;
  transform: scale(1.2);
  top: -5px;
}
.social-icon li a.fa-wordpress:hover {
  background: #38A1F3;
  color: #ffffff;
  transform: scale(1.2);
  top: -5px;
}
.social-icon li a.fa-university:hover {
  background: #00061a;
  color: #ffffff;
  transform: scale(1.2);
  top: -5px;
}


</style>
<body >
	<div class="container-fluid" >
	<div class="col-sm-2" >
		<img src="images/nitt.png" alt="NITT" style="float: left;width: 85px;height: 80px;">
	</div>
	<div class="col-sm-8" ">
		
		     <nav>
       <div class="row clearfix">
         <ul class="main-nav animated slideInDown" id="bar-Id" style="font-style: timesnow; color: #00061a; ">
           <li><a href="index.php">Home</a></li>
           <li><a href="event.php">Events</a></li>
           <li><a href="team.php">Our Team</a></li>
           <li><a href="loginform.php">Register</a></li>
           <li><a href="contact.php">Contact</a></li>
         </ul>
         
       </div>
     </nav>


	</div>
	<div class="col-sm-2" >
		<img src="images/logo.png" alt="OSOC"  style="float: right;width: 85px;height: 90px;">            
	</div>

</div>
	

		<h2 style="text-align: center;margin-top: 2px;"><img src="images/t2.png" style="height: 500px;width: 550px " alt="Technofenia" ></h2>


		<!-- osoc -->
	<div id='i1'  style="position:absolute; left: 0%; top: 0%;width: 150px;height: 40px;">
<img src='images/o.png' onload="timer1()" style="width: 50px;height: 70px;" >
</div>
	<div id='i2'  style="position:absolute; left: 400px; top: 600px;width: 150px;height: 40px;">
<img src='images/s.png' onload="timer2()" style="width: 50px; height: 70px;" >
</div>
<div id='i3'  style="position:absolute; left: 800px; top: 600px;width: 150px;height: 40px;">
<img src='images/o.png' onload="timer3()" style="width: 50px;height: 70px;">
</div>
<div id='i4'  style="position:absolute; left: 1000px; top: 0px;width: 150px;height: 40px;">
<img src='images/c.png' onload="timer4()" style="width: 50px;height: 70px;">
</div>

<!-- github -->
<div id='i5'  style="position:absolute; left: 1000px; top: 0px;width: 150px;height: 40px;">
<img src='images/g.png' onload="timer5()" style="width: 20px;height: 40px;">
</div>
<div id='i6'  style="position:absolute; left: 700px; top: 0px;width: 150px;height: 40px;">
<img src='images/i.png' onload="timer6()" style="width: 11px;height: 40px;">
</div>
<div id='i7'  style="position:absolute; left: 900px; top: 200px;width: 150px;height: 40px;">
<img src='images/ts.png' onload="timer7()" style="width: 15px;height: 40px;">
</div>
<div id='i8'  style="position:absolute; left: 800px; top: 200px;width: 150px;height: 40px;">
<img src='images/h.png' onload="timer8()" style="width: 20px;height: 40px;">
</div>
<div id='i9'  style="position:absolute; left: 880px; top: 160px;width: 150px;height: 40px;">
<img src='images/u.png' onload="timer9()" style="width: 20px;height: 40px;">
</div>
<div id='i10'  style="position:absolute; left: 880px; top: 160px;width: 150px;height: 40px;">
<img src='images/b.png' onload="timer10()" style="width: 20px;height: 40px;">
</div>


<!-- MySQL -->
<div id='i11'  style="position:absolute; left: 1000px; top: 400px;width: 150px;height: 40px;">
<img src='images/m3.png' onload="timer11()" style="width: 35px;height: 45px;">
</div>
<div id='i12'  style="position:absolute; left: 880px; top: 500px;width: 150px;height: 40px;">
<img src='images/y3.png' onload="timer12()" style="width: 35px;height: 45px;">
</div>
<div id='i13'  style="position:absolute; left: 690px; top: 600px;width: 150px;height: 40px;">
<img src='images/s3.png' onload="timer13()" style="width: 35px;height: 45px;">
</div>
<div id='i14'  style="position:absolute; left: 900px; top: 550px;width: 150px;height: 40px;">
<img src='images/q3.png' onload="timer14()" style="width: 35px;height: 45px;">
</div>
<div id='i15'  style="position:absolute; left: 800px; top: 360px;width: 150px;height: 40px;">
<img src='images/l3.png' onload="timer15()" style="width: 35px;height: 45px;">
</div>

<!-- mozilla -->
<div id='i16'  style="position:absolute; left: 900px; top: 400px;width: 150px;height: 40px;">
<img src='images/m4.png' onload="timer16()" style="width: 30px;height: 40px;">
</div>
<div id='i17'  style="position:absolute; left: 600px; top: 200px;width: 150px;height: 40px;">
<img src='images/o4.png' onload="timer17()" style="width: 30px;height: 45px;">
</div>
<div id='i18'  style="position:absolute; left: 700px; top: 300px;width: 150px;height: 40px;">
<img src='images/z4.png' onload="timer18()" style="width: 25px;height: 40px;">
</div>
<div id='i19'  style="position:absolute; left: 750px; top: 250px;width: 150px;height: 40px;">
<img src='images/i4.png' onload="timer19()" style="width: 15px;height: 30px;">
</div>
<div id='i20'  style="position:absolute; left: 560px; top: 350px;width: 150px;height: 40px;">
<img src='images/l4.png' onload="timer20()" style="width: 15px;height: 35px;">
</div>
<div id='i21'  style="position:absolute; left: 860px; top: 50px;width: 150px;height: 40px;">
<img src='images/l4.png' onload="timer21()" style="width: 15px;height: 35px;">
</div>
<div id='i22'  style="position:absolute; left: 790px; top: 420px;width: 150px;height: 40px;">
<img src='images/a4.png' onload="timer22()" style="width: 25px;height: 40px;">
</div>

<!-- GIMP -->
<div id='i23'  style="position:absolute; left: 250px; top: 0px;width: 150px;height: 40px;">
<img src='images/g5.png' onload="timer23()" style="width: 25px;height: 35px;">
</div>
<div id='i24'  style="position:absolute; left: 150px; top: 200px;width: 150px;height: 40px;">
<img src='images/i5.png' onload="timer24()" style="width: 10px;height: 35px;">
</div>
<div id='i25'  style="position:absolute; left: 120px; top: 100px;width: 150px;height: 40px;">
<img src='images/m5.png' onload="timer25()" style="width: 25px;height: 35px;">
</div>
<div id='i26'  style="position:absolute; left: 500px; top: 350px;width: 150px;height: 40px;">
<img src='images/p5.png' onload="timer26()" style="width: 25px;height: 35px;">
</div>
<!-- NODE -->
<div id='i27'  style="position:absolute; left: 420px; top: 0px;width: 150px;height: 40px;">
<img src='images/n6.png' onload="timer27()" style="width: 30px;height: 45px;">
</div>
<div id='i28'  style="position:absolute; left: 150px; top: 200px;width: 150px;height: 40px;">
<img src='images/o6.png' onload="timer28()" style="width: 30px;height: 45px;">
</div>
<div id='i29'  style="position:absolute; left: 120px; top: 100px;width: 150px;height: 40px;">
<img src='images/d6.png' onload="timer29()" style="width: 30px;height: 45px;">
</div>
<div id='i30'  style="position:absolute; left: 500px; top: 400px;width: 150px;height: 40px;">
<img src='images/e6.png' onload="timer30()" style="width: 30px;height: 45px;">
</div>

<!-- Kubernetes -->
<div id='i31'  style="position:absolute; left: 600px; top: 0px;width: 150px;height: 40px;">
<img src='images/k7.png' onload="timer31()" style="width: 25px;height: 40px;">
</div>
<div id='i32'  style="position:absolute; left: 450px; top: 400px;width: 250px;height: 40px;">
<img src='images/u7.png' onload="timer32()" style="width: 25px;height: 40px;">
</div>
<div id='i33'  style="position:absolute; left: 800px; top: 300px;width: 150px;height: 40px;">
<img src='images/b7.png' onload="timer33()" style="width: 25px;height: 40px;">
</div>
<div id='i34'  style="position:absolute; left: 700px; top: 400px;width: 150px;height: 40px;">
<img src='images/e7.png' onload="timer34()" style="width: 25px;height: 40px;">
</div>
<div id='i35'  style="position:absolute; left: 650px; top: 0px;width: 150px;height: 40px;">
<img src='images/r7.png' onload="timer35()" style="width: 15px;height: 40px;">
</div>
<div id='i36'  style="position:absolute; left: 500px; top: 200px;width: 150px;height: 40px;">
<img src='images/n7.png' onload="timer36()" style="width: 25px;height: 40px;">
</div>
<div id='i37'  style="position:absolute; left: 420px; top: 100px;width: 150px;height: 40px;">
<img src='images/e7.png' onload="timer37()" style="width: 25px;height: 40px;">
</div>
<div id='i38'  style="position:absolute; left: 800px; top: 400px;width: 150px;height: 40px;">
<img src='images/t7.png' onload="timer38()" style="width: 20px;height: 40px;">
</div>
<div id='i39'  style="position:absolute; left: 1000px; top: 0px;width: 150px;height: 40px;">
<img src='images/e7.png' onload="timer39()" style="width: 25px;height: 40px;">
</div>
<div id='i40'  style="position:absolute; left: 700px; top: 200px;width: 150px;height: 40px;">
<img src='images/s7.png' onload="timer40()" style="width: 25px;height: 40px;">
</div>

<!-- DragonFly BSD -->
<div id='i41'  style="position:absolute; left: 1000px; top: 300px;width: 150px;height: 40px;">
<img src='images/d8.png' onload="timer41()" style="width: 25px;height: 40px;">
</div>
<div id='i42'  style="position:absolute; left: 900px; top: 450px;width: 250px;height: 40px;">
<img src='images/r8.png' onload="timer42()" style="width: 15px;height: 40px;">
</div>
<div id='i43'  style="position:absolute; left: 800px; top: 300px;width: 150px;height: 40px;">
<img src='images/a8.png' onload="timer43()" style="width: 25px;height: 40px;">
</div>
<div id='i44'  style="position:absolute; left: 700px; top: 400px;width: 150px;height: 40px;">
<img src='images/g8.png' onload="timer44()" style="width: 25px;height: 40px;">
</div>
<div id='i45'  style="position:absolute; left: 650px; top: 0px;width: 150px;height: 40px;">
<img src='images/o8.png' onload="timer45()" style="width: 22px;height: 40px;">
</div>
<div id='i46'  style="position:absolute; left: 500px; top: 203px;width: 150px;height: 40px;">
<img src='images/n8.png' onload="timer46()" style="width: 25px;height: 40px;">
</div>
<div id='i47'  style="position:absolute; left: 920px; top: 100px;width: 150px;height: 40px;">
<img src='images/f8.png' onload="timer47()" style="width: 25px;height: 40px;">
</div>
<div id='i48'  style="position:absolute; left: 800px; top: 450px;width: 150px;height: 40px;">
<img src='images/l8.png' onload="timer48()" style="width: 10px;height: 38px;">
</div>
<div id='i49'  style="position:absolute; left: 1000px; top: 500px;width: 150px;height: 40px;">
<img src='images/y8.png' onload="timer49()" style="width: 20px;height: 40px;">
</div>
<div id='i50'  style="position:absolute; left: 800px; top: 300px;width: 150px;height: 40px;">
<img src='images/b8.png' onload="timer50()" style="width: 25px;height: 40px;">
</div>
<div id='i51'  style="position:absolute; left: 700px; top: 200px;width: 150px;height: 40px;">
<img src='images/s8.png' onload="timer51()" style="width: 25px;height: 40px;">
</div>
<div id='i52'  style="position:absolute; left: 1000px; top: 100px;width: 150px;height: 40px;">
<img src='images/f.png' onload="timer52()" style="width: 350px;height: 500px;">
</div>
<div id='i54'  style="position:absolute; left: 900px; top: 200px;width: 150px;height: 40px;">
<img src='images/d8.png' onload="timer54()" style="width: 25px;height: 40px;">
</div>


				<!-- socail button -->
   				 <div class="wow fadeInUp ic" style="float: right;" data-wow-delay="1.5s">
                 <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook" onclick="window.open('https://www.facebook.com/osocnitt/')" ></a></li><br>
                    <li><a href="#" class="fa fa-university" onclick="window.open('http://osoc.nitt.edu/')"></a></li><br>
                    <li><a href="#" class="fa fa-wordpress"  onclick="window.open('https://osocnitt.wordpress.com/')" ></a></li>
          		</ul>	
          		</div>

                         
                <script type="text/javascript" src="js2/particles.js"></script>
				<script type="text/javascript" src="js2/par.js"></script>
				<script src="js2/jquery.min.js"></script>
  				<script src="/js2/bootstrap.min.js"></script>															
																	

	
	
				<script src="js2/wow.min.js"></script>	
                <script>
              	new WOW().init();
                </script>

</body>
</html>

