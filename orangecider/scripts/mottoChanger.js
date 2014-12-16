var newMotto = "All this code...";
var today = new Date();
var day = today.getDate();
var month = today.getMonth() + 1;
if((day == 24 || day == 25) && month == 12) {
	newMotto = "Merry christmas, you!";
}
if(day == 31 && month == 10) {
	newMotto = "OooOOooOOooOOoo... Trick or treat!";
}
function changeMotto() {
	document.getElementById("motto").innerHTML = "<i>" + newMotto + "</i>";
}
