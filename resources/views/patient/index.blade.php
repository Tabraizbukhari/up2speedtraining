<html><head><title>Up2Speed</title><script>
var myimages=new Array()
function preloadimages(){
for (i=0;i<preloadimages.arguments.length;i++){
myimages[i]=new Image()
myimages[i].src=preloadimages.arguments[i]
}
}
//Enter path of images to be preloaded inside parenthesis. Extend list as desired.
preloadimages("https://www.up2speedtraining.com/patients/nlimages/navbgon.png","https://www.up2speedtraining.com/patients/nlimages/navbgpatienton.png","https://www.up2speedtraining.com/patients/nlimages/navbgexerciseson.png","https://www.up2speedtraining.com/patients/nlimages/navbgcodingon.png")

</script><script>
var divs=['subjective','objective','assessment','plan'];
var active='';
function scrollintoview(page){
  document.getElementById(page+'hr').scrollIntoView();
 // var coding=''; if(page=='assessmenticd.php') coding='coding';
  for(var i=0;i<divs.length;i++){ 
    document.getElementById(divs[i]+'td').style.backgroundImage="url(assets/demo2/nlimages/navbg.png)";
    document.getElementById(divs[i]+'link').style.color="#606062";
    document.getElementById(divs[i]+'link').style.fontWeight="normal";  
  }
  document.getElementById(page+'td').style.backgroundImage="url(assets/demo2/nlimages/navbgactive.png)";
  document.getElementById(page+'link').style.color="white";
  document.getElementById(page+'link').style.fontWeight="bold";
  active=page;
}
</script><link href="{{ asset('assets/demo/styles.css') }}" type="text/css" rel="stylesheet"></head>



<body class="font" ')"="" style="margin:0;padding:0;">
<script>
function showvisitdates(){
  if(document.getElementById('visitdropdown').style.display=='none')
    document.getElementById('visitdropdown').style.display='block';
  else if(document.getElementById('visitdropdown').style.display=='block')
    document.getElementById('visitdropdown').style.display='none';
}
</script>
<form name="encform" action="" method="">
<div style="position:fixed;top:0px;left:0px;z-index:1;width:100%">
<table id="mainmenutable" style="background-color:#5f5f61;color:white;background-image:url('assets/demo2/nlimages/headerbg.png');background-repeat:repeat-x;" width="100%" height="50" cellspacing="0" cellpadding="5" border="0"><tbody><tr height="50"><td style="padding:0px;" width="30%">
<table style="color:white;"><tbody><tr style="padding:0px;"><td style="padding:0px;" width="150" valign="middle" align="center"><a href="">
  <img src="{{ asset('assets/demo2/nlimages/up2speedsmall.png') }}" style="display:inline;" height="50"></a></td><td width="20"></td><td width="50" valign="middle" align="left"><a href="{{ route('logout') }}">
    <img src="{{ asset('assets/demo2/nlimages/logouticon.png') }}" height="60"></a></td><td width="50" valign="middle" align="left">
<a href="{{ route('admin')}}">
  <img src="{{ asset('assets/demo2/nlimages/adminicon.png') }}" height="60"></a></td>
<td width="300" align="center">Welcome,<br>Admin User</td></tr></tbody></table></td>

<td style="border-right:none;" id="tdpatientvisit" width="50%" valign="middle" align="center">
<script>if(window.innerWidth<1280) document.getElementById('tdpatientvisit').style.textAlign='center';</script>
<input type="hidden" name="page" value="">
<input type="hidden" name="gotodate">
<input type="hidden" name="encounterviewyear">
<input type="hidden" name="markbilling">
<script>function headerformsubmit(){
  //document.getElementById('headerpatientid').value=patientid;
  document.headerform.submit();
}</script> <form name="headerform" action="" method="" style="display:inline"><font size="+1">Please select a patient to begin!</font>&nbsp;&nbsp;&nbsp;<select name="patientid" id="headerpatientid" style="width:150px" onchange="location = this.value;"><option value="" selected="">Select...</option>
  @foreach($records as $record)
  <option value="{{ route('edit',$record->id) }}">
  {{$record->firstname}} , {{$record->lastname}} <br>
</option>
@endforeach

</select></form></td><td width="12%" align="right">
  <a href="{{ route('portalhome')}}" style="color:white;font-size:18px;">
    <img src="{{ asset('assets/demo2/nlimages/patientportal.png') }}" style="display:inline;" width="65"></a></td><td style="border-left:none;" width="4%" align="right"><img src="{{ asset('assets/demo2/images/spacer.png') }}" width="65"></td></tr>
<tr style="height:2px;" bgcolor="#ce0205"><td colspan="4" style="height:2px;padding:0px;" width="100%"></td></tr></tbody></table>
</div>
<table height="77"><tbody><tr><td><img src="{{ asset('assets/demo2/images/spacer.png') }}" height="77"></td></tr></tbody></table>
<table width="100%" cellspacing="0" cellpadding="0">
<tbody><tr><td width="238" valign="top" bgcolor="#f1f1f1">
<img src="{{ asset('assets/demo2/images/spacer.png') }}" width="238" height="1"><div id="sidebar" style="position:fixed;top:0px;left:0px;width:238px;height:100%;background-color:#f1f1f1;overflow-y:auto;overflow-x:hidden;"><div style="position:relative;height:77px;"></div>
<script>
function changebg(id,onoff,coding){
  if(id!=active){
    if(onoff=='on') document.getElementById(id+'td').style.backgroundImage='url(assets/demo2/nlimages/navbg'+coding+'on.png)';
    if(onoff=='off') document.getElementById(id+'td').style.backgroundImage='url(assets/demo2/nlimages/navbg'+coding+'.png)';
  }
}
</script>
<table style="background-color:#f1f1f1;" width="238" cellspacing="0" cellpadding="5" border="0">
<tbody><tr style="background-color:#d9d9d9;"><td style="padding:0px;" align="center"><table width="200"><tbody><tr>
<td style="width:50px;padding:0px;" valign="middle" align="center"><a href="?print=true">
  <img src="{{ asset('assets/demo2/nlimages/print.png') }}" width="40"></a></td>
<td style="width:100px;padding:0px;" valign="middle" align="center"></td>
<td style="width:50px;padding:0px;" valign="middle" align="center"> </td></tr>
<tr><td valign="top" align="center"><a style="color:black;text-decoration:none;" href="?print=true">PRINT</a></td><td style="padding:0px;" valign="top" align="center"></td><td valign="top" align="center"></td></tr></tbody></table></td></tr>
<tr><td>&nbsp;</td></tr><tr height="35"><td style="background-image:url('assets/demo2/nlimages/navbgactive.png');background-repeat:no-repeat;background-position:center;" id="age.phptd" align="center"><b><a href="{{ route('patient') }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">All Patients</div></a></b></td></tr><tr><td>&nbsp;</td></tr><tr height="35"><td style="background-image: url('assets/demo2/nlimages/navbgpatient.png'); background-repeat: no-repeat; background-position: center center;" id="patient.phptd" onmouseover="changebg('patient.php','on','patient');" onmouseout="changebg('patient.php','off','patient')" align="center"><a href="{{ route('newpatient') }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">New Patient</div></a></td></tr><tr><td>&nbsp;</td></tr><tr height="35"><td style="background-image: url('assets/demo2/nlimages/navbgpatient.png'); background-repeat: no-repeat; background-position: center center;" id="eduler.phptd" onmouseover="changebg('eduler.php','on','patient');" onmouseout="changebg('eduler.php','off','patient')" align="center"><a href="{{ route('scheduler') }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Scheduler</div></a></td></tr></tbody></table>
</div>
</td>



<td id="viewport" width="100%" valign="top" align="left">
<script>var yearon="2020";//pickayear(yearon);
</script><script>
function pickencounter(){
  document.encform.submit();
}
function pickanencounter(thedate,theaction,bill,billq){
  if(billq==null){
    document.encform.gotodate.value=thedate;
    if(theaction!=null) document.encform.page.value=theaction;
    document.encform.markbilling.value=bill;
    document.encform.submit();
  }
  else if(window.confirm('Mark billing for visit '+thedate+' as '+billq+'?')){
    document.encform.gotodate.value=thedate;
    if(theaction!=null) document.encform.page.value=theaction;
    document.encform.markbilling.value=bill;
    document.encform.submit();
  }
}
  var basewidth=0;
var greatesti;
function pickayear(theyear){
  //window.alert(yearon);
  //if(theyear!=yearon){
    //document.encform.encounterviewyear.value=theyear;
    //if(theaction!=null) document.encform.page.value=theaction;
    //document.encform.submit();
    for(var i=0;document.getElementById('encountertd'+yearon+i);i++){
      document.getElementById('encountertd'+yearon+i).style.display='none';
    }
    for(var i=0;document.getElementById('encountertd'+theyear+i);i++){
      document.getElementById('encountertd'+theyear+i).style.display='table-cell';
      greatesti=i;
    }
    if(document.getElementById('yeartd'+yearon))
      document.getElementById('yeartd'+yearon).style.backgroundImage='url(nlimages/tabyearinactive.png)';
    document.getElementById('yeartd'+theyear).style.backgroundImage='url(nlimages/tabyearactive.png)';
    yearon=theyear;
    if(parseInt(document.getElementById('viewport').offsetWidth)<basewidth+(greatesti+1)*150){
      document.getElementById('visittable').style.width=basewidth+(greatesti+1)*150+'px';
    }
    else{
      document.getElementById('visittable').style.width=parseInt(document.getElementById('viewport').offsetWidth)+'px';
    }
  //}
}
function changewidth(){
  /*window.alert(parseInt(document.getElementById('viewport').offsetWidth)+' '+(basewidth+greatesti*150));  
    if(parseInt(document.getElementById('viewport').offsetWidth)<basewidth+greatesti*150)
      document.getElementById('visittable').style.width=basewidth+(greatesti+1)*150+'px';*/
}
/*for(var i=0;document.getElementById('encountertd'+yearoon+i);i++){
  document.getElementById('encountertd'+yearoon+i).style.display='table-cell';
  greatesti=i;
}*/
window.addEventListener("resize", changewidth);
var headershown='';
function headerpreview(uniquekey,encounterdate,billing,payment,claimnumber,datesent,billedamount,codedamount,billingpaid,billingnotes,paymentnotes){
  var xpos=document.getElementById('headerbilling'+uniquekey).getBoundingClientRect().left;
  if(document.getElementById('headerbp')){
    if(headershown==''||headershown!=uniquekey){
      if(xpos-130+300-208>parseInt(document.getElementById('viewport').offsetWidth)) document.getElementById('headerbp').style.left=document.getElementById('viewport').offsetWidth+238-355;
      //window.alert(parseInt(document.getElementById('viewport').offsetWidth)+' '+(xpos-130+300-238).toString());
      else document.getElementById('headerbp').style.left=xpos-130;
      document.getElementById('headerbp').innerHTML='<table style="border:1px solid #fefefe;" border="1" cellspacing="0" cellpadding="2" width="100%"><tr><td><u>'+encounterdate+'</u></td><td align="right">'+
      '<span style="float:right;"><a href="javascript:headerpreview(\''+uniquekey+'\');"><img src="images/delete.png"></a></td></tr><tr><td colspan="2">&nbsp;</td></tr>'+
        '<tr><td><b>Billing</b>: </td><td>'+billing+'</td></tr>'+
        '<tr><td>Claim #: </td><td>'+claimnumber+'</td></tr>'+
        '<tr><td>Date Sent: </td><td>'+datesent+'</td></tr>'+
        '<tr><td>Billed Amount: <span style="float:right;">$</span></td><td>'+billedamount+'</td></tr>'+
        '<tr><td>(Coded Amount:) <span style="float:right;">$</span></td><td>'+codedamount+'</td></tr>'+
        '<tr><td colspan="2"><strong>Billing Notes:</strong></td></tr><tr><td colspan="2">'+billingnotes+'</td></tr>'+
        '<tr><td><b>Payment</b>: </td><td>'+payment+'</td></tr>'+
        '<tr><td>Insurance Payment: <span style="float:right;">$</span></td><td>'+billingpaid+'</td></tr>'+
        '<tr><td colspan="2"><strong>Payment Notes:</strong></td></tr><tr><td colspan="2">'+paymentnotes+'</td></tr></table>';
      document.getElementById('headerbp').style.display='block';
      headershown=uniquekey;
    }
    else{
      document.getElementById('headerbp').style.display='none';
      headershown='';
    }
  }
}
</script>
<table width="100%" cellpadding="10 "><tbody><tr><td width="100%" valign="top">
<script>

if(window.innerWidth<1280){
  if(document.getElementById('visitlist')) document.getElementById('visitlist').style.top='69px';
  document.getElementById('sidebar').style.top='72px';
  document.getElementById('mainmenutable').style.height='70px';
}

</script>

<!--Make sure the form has the autocomplete function switched off:-->

<style>
* { box-sizing: border-box; }
.autocompletefirst {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
.autocompletefirst-items {
  font: 16px Arial; 
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocompletefirst-items div {
  font: 16px Arial; 
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}
.autocompletefirst-items div:hover {
  font: 16px Arial; 
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}
.autocompletefirst-active {
  /*when navigating through the items using the arrow keys:*/
  font: 16px Arial; 
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

.autocompletelast {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
.autocompletelast-items {
  font: 16px Arial; 
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocompletelast items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocompletelast-items div {
  font: 16px Arial; 
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}
.autocompletelast-items div:hover {
  font: 16px Arial; 
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}
.autocompletelast-active {
  /*when navigating through the items using the arrow keys:*/
  font: 16px Arial; 
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
<script>
function autocomplete(inp, arr,div) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + div+"-list");
      a.setAttribute("class", div+"-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + div+"-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add(div+"-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove(div+"-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName(div+"-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
}
</script><script>
function formsubmit(patientid,theaction){
  document.getElementById('patientid').value=patientid;
  if(theaction!=null) document.getElementById('action').value=theaction;
  document.form.submit();
}
function showfilter(){
  if(document.getElementById('filterdiv').style.display=='block')
  document.getElementById('filterdiv').style.display='none';
  else if(document.getElementById('filterdiv').style.display=='none')
  document.getElementById('filterdiv').style.display='block';
}
function encountersubmit(patientid,date,action){
  document.getElementById('patientid').value=patientid;
  document.getElementById('encounterdate').value=date;
  document.getElementById('action').value=action;
  document.form.submit();
}
function newencountersubmit(){
  if(document.form.patientselect.value!=""){
    document.getElementById('patientid').value=document.form.patientselect.value;
    document.getElementById('newencounter').value='true';
    document.form.submit();
  }
  else
    window.alert('Please select a patient!'); 
}
function showhide(id,phone){
  if(document.getElementById('encounter'+id).style.display=='block'&&phone!='phone'){
    document.getElementById('encounter'+id).style.display='none';
    document.getElementById('img'+id).src='images/plus.png';
    document.getElementById('selectedpatients').value=document.getElementById('selectedpatients').value.replace(id+'%SE%','');
  }
  else if(document.getElementById('encounter'+id).style.display=='none'){
    document.getElementById('encounter'+id).style.display='block';
    document.getElementById('img'+id).src='assets/demo2/images/minus.png';
    document.getElementById('selectedpatients').value+=id+'%SE%';
  }
}
function showall(){
  for(var i=0;i<patientids.length;i++){
    document.getElementById('encounter'+patientids[i]).style.display='block';
    document.getElementById('img'+patientids[i]).src='assets/demo2/images/minus.png';
    document.getElementById('selectedpatients').value+=patientids[i]+'%SE%';
  }
}
function hideall(){
  for(var i=0;i<patientids.length;i++){
    document.getElementById('encounter'+patientids[i]).style.display='none';
    document.getElementById('img'+patientids[i]).src='images/plus.png';
    document.getElementById('selectedpatients').value='';
  }
}
function deletevisit(patientid,encounterdate){
  if(window.confirm('Are you sure you want to delete all data for the visit on '+encounterdate+'?')){
    document.form.patientid.value=patientid;
    document.form.encounterdate.value=encounterdate;
    document.form.deleteencounter.value="true";
    document.form.submit();
  }
}

function printsubmit(){
    document.form.action="?print=true";
  document.form.submit();
  }
</script>
<center><hr><table width="80%"><tbody><tr><td width="50%"><font size="+2">All Patients</font></td><td width="50%" align="right">
<table class="no-print"><tbody><tr><td align="center"><a href="{{ route('newpatient') }}">
  <img src="{{ asset('assets/demo2/nlimages/newpatient.png') }}" height="50"><br><br>New Patient</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td align="center"><a href="javascript:newencountersubmit();">
    <img src="{{ asset('assets/demo2/nlimages/newvisit.png') }}" height="50"><br><br>New Visit</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td align="center"><a href="javascript:printsubmit();"><img src="{{ asset('assets/demo2/nlimages/printicon.png') }}" height="50"><br><br>Print</a></td></tr></tbody></table>
</td></tr></tbody></table><hr></center><br>
<div id="filterdiv" style="display:block">
<form action="" method="" autocomplete="off" name="manageform">
<input type="hidden" name="patientid">
<input type="hidden" name="filterpatient">
<input type="hidden" name="starshowfirst" value="">
<input type="hidden" name="phoneshowfirst" value="">
<input type="hidden" name="filter" value="Filter">
<center>
<table width="80%" cellpadding="10" bgcolor="#f1f1f1"><tbody><tr><td width="100%">
<b>Filter By:</b><br><br>
<table width="100%"><tbody><tr><td>
<table width="100%" cellpadding="5"><tbody><tr><td><strong>Patient:</strong></td><td>First Name: 
  <div class="autocompletefirst">
    <input id="firstname" type="text" name="firstname" value="">
  </div></td><td>Last Name: 
  <div class="autocompletelast">
  
    <input id="lastname" type="text" name="lastname" value="">
    </div></td></tr>
    <tr><td><strong>Show Only:</strong></td>
    <td colspan="2"><input type="radio" name="showonly" value="cash"> Cash Patients 
    <input type="radio" name="showonly" value="insurance"> Insurance Patients
    <input type="radio" name="showonly" value="pi"> PI Patients</td></tr>
<tr><td><strong>Visit:</strong></td><td>Date: 
<select name="datemonth"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8" selected="">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
<select name="dateday"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27" selected="">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
<select name="dateyear"><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020" selected="">2020</option></select></td><td><b>Select range:</b> <input type="radio" name="selectrange" value="visits" checked=""> Visits <input type="radio" name="selectrange" value="lastaccessed"> Last accessed</td></tr>
<tr><td></td><td>
Select Dates: 
<select name="onor">
<option value="All">All</option><option value="On">On</option><option value="On or Before">On or Before</option><option value="On or After">On or After</option></select>
</td><td><table><tbody><tr><td></td><td><input type="radio" name="last" value="Today"> Today</td><td><input type="radio" name="last" value="Yesterday"> Yesterday </td></tr>
<tr><td>Last:</td><td><input type="radio" name="last" value="3 Days"> 3 Days</td><td><input type="radio" name="last" value="Week"> Week</td><td><input type="radio" name="last" value="Month"> Month</td>
</tr></tbody></table> </td></tr></tbody></table></td><td valign="top" align="center"><br><input type="image" alt="Filter" src="{{ asset('assets/demo2/nlimages/filterbutton.png') }}" width="101"></td></tr></tbody></table>
</td></tr></tbody></table><br>
</center></form></div>
<center><table class="no-print" width="80%"><tbody><tr><td>
Select a patient to view data, or select an option to jump to that section: <br>  <br>
<script>
function submitsort(){
  if(""!="Filter")
  document.manageform.filter.value='';
  document.manageform.submit();
}
function submitdefault(thedefault){
  document.manageform.changedefault.value=thedefault;
  document.manageform.submit();
  
}
</script>
<input type="hidden" name="changedefault">
<table><tbody><tr><td>Sort by: <select name="sortby" onchange="javascript:submitsort();" id="sortby">
<option value="lastname" selected="">Last Name</option>
<option value="firstname">First Name</option>
<option value="created">Recently Created</option>
<option value="accessed">Recently Accessed</option>
<option value="cash">Cash Patients</option>
<option value="insurance">Insurance Patients</option>
<option value="piwc">PI / WC Patients</option></select> 
(Default View)</td><td> <div id="showbillingpayment" style="display: block;"><input type="radio" name="showbillpay" id="showall" onclick="filterbillpay();" checked=""> Show All <strong>Billing</strong>: <input type="radio" name="showbillpay" id="showincomplete" onclick="filterbillpay();"> Incomplete <input type="radio" name="showbillpay" id="showready" onclick="filterbillpay();"> Ready <input type="radio" name="showbillpay" id="showcomplete" onclick="filterbillpay();"> Complete <strong>Payment</strong>: <input type="radio" name="showbillpay" id="showwaiting" onclick="filterbillpay();"> Waiting <input type="radio" name="showbillpay" id="showpartial" onclick="filterbillpay();"> Partial <input type="radio" name="showbillpay" id="showfull" onclick="filterbillpay();"> Full</div></td></tr></tbody></table></td></tr></tbody></table></center><br>
<form name="form" action="" method="" autocomplete="off" onsubmit="javascript:starsubmit();bpsubmit();phonesubmit();">
      <input type="hidden" name="passfilterpatient" value="">
    <input type="hidden" name="passfirstname" value="">
    <input type="hidden" name="passlastname" value="">
<input type="hidden" name="starpid" id="starpid">
<input type="hidden" name="staronoff">
<input type="hidden" name="starpriority">
<input type="hidden" name="starnotes">
<input type="hidden" name="billpayuniquekey">
<input type="hidden" name="billorpay">
<input type="hidden" name="billpaystatus">
<input type="hidden" name="billingstatus" id="billingstatus"><input type="hidden" name="paymentstatus" id="paymentstatus"><input type="hidden" name="billingclaimnumber" id="billingclaimnumber"><input type="hidden" name="billingdatesent" id="billingdatesent"><input type="hidden" name="billingamount" id="billingamount"><input type="hidden" name="billingnotes" id="billingnotes"><input type="hidden" name="billingdeductible" id="billingdeductible"><input type="hidden" name="billingpaid" id="billingpaid"><input type="hidden" name="paymentnotes" id="paymentnotes"><input type="hidden" name="phonecall" id="phonecall"><input type="hidden" name="phonecalldate" id="phonecalldate"><input type="hidden" name="phonecalltime" id="phonecalltime"><input type="hidden" name="phonecallnumber" id="phonecallnumber"><input type="hidden" name="phonecallemail" id="phonecallemail"><input type="hidden" name="phonecallnotes" id="phonecallnotes"><input type="hidden" name="selectedpatients" id="selectedpatients">
<input type="hidden" name="patientid" id="patientid">
<input type="hidden" name="encounterdate" id="encounterdate">
<input type="hidden" name="newencounter" id="newencounter">
<input type="hidden" name="action" id="action">
<input type="hidden" name="deletepatient">
<input type="hidden" name="deleteencounter">
<input type="hidden" name="sortby" id="formsortby" value="lastname">
        <input type="hidden" name="markphone" id="markphone">
        <input type="hidden" name="markphonestatus" id="markphonestatus">
                <input type="hidden" name="markonly" id="markonly">
             
<center>
<script>
function starfirstsubmit(yn){
  document.manageform.starshowfirst.value=yn;
  document.manageform.submit();
}
function phonefirstsubmit(yn){
  document.manageform.phoneshowfirst.value=yn;
  document.manageform.submit();
}
</script>
<table style="border-top:2px solid #999494;border-bottom:2px solid #999494;" width="85%" cellspacing="0" cellpadding="10">
<tbody><tr><td width="4%" align="center"></td><td width="2%" align="left"><table><tbody><tr><td><img src="{{ asset('assets/demo2/nlimages/starfirst.png') }}" onclick="starfirstsubmit('no');" height="20"></td><td>
<img src="{{ asset('assets/demo2/nlimages/phonefirstinactive.png') }}" onclick="phonefirstsubmit('yes');" height="20"></td></tr></tbody></table></td><td width="2%" align="center"></td><td width="72%"><b>Patient Name</b></td><td class="no-print" width="10%" align="center"><b>Shortcuts</b></td><td class="no-print" width="10%" align="center"><b>Delete</b></td></tr>
</tbody></table>
<script>
function showphoto(i){
  document.getElementById('photo'+i).style.display='block';
}
function hidephoto(i){
  document.getElementById('photo'+i).style.display='none';
}
function showpayment(i){
  document.getElementById('paymentdrop'+i).style.display='block';
}
function hidepayment(i){
  document.getElementById('paymentdrop'+i).style.display='none';
}
function star(pid,onoff){
  document.form.starpid.value=pid;
  document.form.staronoff.value=onoff;
  document.form.submit();
}
var shownstar='';
function previewstar(pid,onoff){
  if(shownstar==''){
    if(onoff=='on'){
      document.getElementById('stardiv'+pid).style.display='block';
    }
    if(onoff=='off'){
      document.getElementById('stardiv'+pid).style.display='none';
    }
  }
}
function showstar(pid){
  if(document.getElementById('stardiv'+pid).style.display=='none'||shownstar==''){
    if(shownstar!='') document.getElementById('stardiv'+shownstar).style.display='none';
    document.getElementById('stardiv'+pid).style.display='block';
    document.form.starpid.value=pid;
    shownstar=pid;
  }
  else{
    document.getElementById('stardiv'+pid).style.display='none';
    document.form.starpid.value='';
    shownstar='';
  }
}
function starchange(pid,priority){
  document.getElementById('starbilling'+pid).src="nlimages/manageicons/starbillinginactive.png";
  document.getElementById('starlow'+pid).src="nlimages/manageicons/starlowinactive.png";
  document.getElementById('starmedium'+pid).src="nlimages/manageicons/starmediuminactive.png";
  document.getElementById('starhigh'+pid).src="nlimages/manageicons/starhighinactive.png";
  document.getElementById('star'+priority+pid).src="nlimages/manageicons/star"+priority+"active.png";
  document.getElementById('starpriority'+pid).value=priority;
}
function starsubmit(tosubmit){
  if(document.getElementById("starpid").value!=''){
    document.form.starpriority.value=document.getElementById('starpriority'+document.getElementById("starpid").value).value;
    document.form.starnotes.value=document.getElementById('starnotes'+document.getElementById("starpid").value).value;
  }
  if(tosubmit) document.form.submit();
}
function changeinputcolor(uniquekey){
  document.getElementById('billingamount'+uniquekey).style.color='black';
}
function selectfilterpatient(pid){
  document.manageform.patientid.value=pid;
  document.manageform.filterpatient.value=pid;
  document.manageform.submit();
}
var phoneshown;
function showphone(uniquekey,patient){
  if(document.getElementById('phone'+uniquekey)){
    if(document.getElementById('phone'+uniquekey).style.display=='none'){
      document.getElementById('phone'+uniquekey).style.display='block';
      document.form.markphone.value=uniquekey;
      document.form.selectedpatients.value=patient;
    }
    else if(document.getElementById('phone'+uniquekey).style.display=='block'){
      document.getElementById('phone'+uniquekey).style.display='none';
      document.form.markphone.value='';
      document.form.selectedpatients.value='';
    }
    if(phoneshown!=null&&phoneshown!=uniquekey) document.getElementById('phone'+phoneshown).style.display='none';
    phoneshown=uniquekey;
  }
}
function phonesubmit(){
  if(document.form.markphone.value!=''){
    var phonearr=['phonecalldate','phonecalltime','phonecallnumber','phonecallemail','phonecallnotes'];
    for(var i=0;i<phonearr.length;i++){
      document.getElementById(phonearr[i]).value=document.getElementById(phonearr[i]+document.form.markphone.value).value;
    }
    
  if(document.getElementById('phonecall'+document.form.markphone.value+'yes').checked) document.getElementById('phonecall').value='yes'; 
  else{  document.getElementById('phonecall').value='no'; }
  }
}
function phonestatus(uniquekey,yesno){
  if(yesno=='yes'){ document.getElementById('phonecall'+uniquekey+'no').checked=false; document.getElementById('phonecall').value='yes'; }
  if(yesno=='no'){ document.getElementById('phonecall'+uniquekey+'yes').checked=false; document.getElementById('phonecall').value='no'; }
}
function markphoned(uniquekey,status,patient){
  document.form.markphone.value=uniquekey;
  document.form.markphonestatus.value=status;
  document.form.selectedpatients.value=patient;
  document.form.markonly.value='true';
  document.form.submit();
}
var shownphone=''; var patienthascall=[];
function previewphoneall(patientid,onoff){
  if(patienthascall[patientid]){
    if(shownphone==''){
      if(document.getElementById('phoneall'+patientid)){  if(onoff=='on') document.getElementById('phoneall'+patientid).style.display='block';
        else document.getElementById('phoneall'+patientid).style.display='none';
      }
    }
  }
}
function showphoneall(patientid){
  if(patienthascall[patientid]){
    if(document.getElementById('phoneall'+patientid).style.display=='none'||shownphone==''){
      if(shownphone!='') document.getElementById('phoneall'+shownphone).style.display='none';
      document.getElementById('phoneall'+patientid).style.display='block';
      //document.form.starpid.value=patientid;
      shownphone=patientid;
    }
    else{
      document.getElementById('phoneall'+patientid).style.display='none';
      //document.form.starpid.value='';
      shownphone='';
    }
  }
}
var bpshown,shown,shownuk;
function bpsubmit(){
  if(document.form.billorpay.value!=''&&document.form.billpayuniquekey.value!=""){
    var billarr=['billingclaimnumber','billingdatesent','billingamount','billingnotes'];
    var payarr=[/*'billingdeductible',*/'billingpaid','paymentnotes'];
    var arr;
    if(document.form.billorpay.value=='billing') arr=billarr; if(document.form.billorpay.value=='payment') arr=payarr;
    for(var i=0;i<arr.length;i++){
      document.getElementById(arr[i]).value=document.getElementById(arr[i]+document.form.billpayuniquekey.value).value;
    }
    //billingincomplete,billingready,billingcomplete,paymentwaiting,paymentpartial,paymentfull
  }
}
function previewbp(uniquekey,billorpay,onoff){
  if(shown==null){
    if(onoff=='on'){
      document.getElementById(billorpay+uniquekey).style.display='block';
      document.getElementById('encounterlink'+uniquekey).style.color='black';
      document.getElementById('encounterlink'+uniquekey).style.textDecoration='none';
    }
    if(onoff=='off'){
      document.getElementById(billorpay+uniquekey).style.display='none';
      document.getElementById('encounterlink'+uniquekey).style.color='blue';
      document.getElementById('encounterlink'+uniquekey).style.textDecoration='underline';
    }
  }
}
function showbp(uniquekey,billorpay,status,patient){
  if(shown!=null&&shown!=billorpay+uniquekey){ 
    document.getElementById(shown).style.display='none';
    if(shownuk!=uniquekey){
      document.getElementById('encounterlink'+shownuk).style.color='blue';
      document.getElementById('encounterlink'+shownuk).style.textDecoration='underline'; }
  }
  if(document.getElementById(billorpay+uniquekey).style.display=='none'||shown==null){
    document.getElementById(billorpay+uniquekey).style.display='block';
    document.form.billpayuniquekey.value=uniquekey;
    document.form.billorpay.value=billorpay;
    document.form.billpaystatus.value=status;
    document.getElementById('encounterlink'+uniquekey).style.color='black';
    document.getElementById('encounterlink'+uniquekey).style.textDecoration='none';
    document.form.selectedpatients.value=patient;
    shown=billorpay+uniquekey; shownuk=uniquekey;
  }
  else if(document.getElementById(billorpay+uniquekey).style.display=='block'&&shown!=null){
    document.getElementById(billorpay+uniquekey).style.display='none';
    document.form.billpayuniquekey.value='';
    document.form.billorpay.value='';
    document.form.billpaystatus.value='';
    document.getElementById('encounterlink'+uniquekey).style.color='blue';
    document.getElementById('encounterlink'+uniquekey).style.textDecoration='underline';
    var arr=[/*'billing','payment',*/'billingclaimnumber','billingdatesent','billingamount','billingnotes','billingdeductible','billingpaid','paymentnotes'];
    for(var i=0;i<arr.length;i++){
      document.getElementById(arr[i]).value='';
    }
    document.form.selectedpatients.value='';
    shown=null; shownuk=null;
  }
}
function bpstatus(uniquekey,billpay,status,patient){
  if(billpay=='billing'&&status=='incomplete'){ document.getElementById('billingready'+uniquekey).checked=false; document.getElementById('billingcomplete'+uniquekey).checked=false; }
  if(billpay=='billing'&&status=='complete'){ document.getElementById('billingready'+uniquekey).checked=false; document.getElementById('billingincomplete'+uniquekey).checked=false; }
  if(billpay=='billing'&&status=='ready'){ document.getElementById('billingcomplete'+uniquekey).checked=false; document.getElementById('billingincomplete'+uniquekey).checked=false; }
  if(billpay=='payment'&&status=='waiting'){ document.getElementById('paymentpartial'+uniquekey).checked=false; document.getElementById('paymentfull'+uniquekey).checked=false; }
  if(billpay=='payment'&&status=='partial'){ document.getElementById('paymentwaiting'+uniquekey).checked=false; document.getElementById('paymentfull'+uniquekey).checked=false; }
  if(billpay=='payment'&&status=='full'){ document.getElementById('paymentpartial'+uniquekey).checked=false; document.getElementById('paymentwaiting'+uniquekey).checked=false; }
  document.form.billpayuniquekey.value=uniquekey;
  document.form.billorpay.value=billpay;
  document.form.billpaystatus.value=status;
  document.form.selectedpatients.value=patient;
  //document.form.submit();
}
function filterbillpay(){
  var billingsrc,paymentsrc;
  for(var i=0;i<allpatientids.length;i++){
    billingsrc=document.getElementById('billingimg'+allpatientids[i]).src.split('/');
    paymentsrc=document.getElementById('paymentimg'+allpatientids[i]).src.split('/');
    billingsrc=billingsrc[billingsrc.length-1];
    paymentsrc=paymentsrc[paymentsrc.length-1];
    if(document.getElementById("showall").checked){
      document.getElementById('patienttable'+allpatientids[i]).style.display='block'; 
      document.getElementById('encounter'+allpatientids[i]).style.display='none'; 
      }
    else if(document.getElementById("showcomplete").checked&&billingsrc=='billingcomplete.png'){
      document.getElementById('patienttable'+allpatientids[i]).style.display='block'; 
      document.getElementById('encounter'+allpatientids[i]).style.display='block'; 
      }
    else if(document.getElementById("showincomplete").checked&&billingsrc=='billingincomplete.png'){
      document.getElementById('patienttable'+allpatientids[i]).style.display='block'; 
      document.getElementById('encounter'+allpatientids[i]).style.display='block'; }
    else if(document.getElementById("showready").checked&&billingsrc=='billingready.png'){
      document.getElementById('patienttable'+allpatientids[i]).style.display='block'; 
      document.getElementById('encounter'+allpatientids[i]).style.display='block'; }
    else if(document.getElementById("showwaiting").checked&&paymentsrc=='paymentwaiting.png'){
      document.getElementById('patienttable'+allpatientids[i]).style.display='block'; 
      document.getElementById('encounter'+allpatientids[i]).style.display='block'; }
    else if(document.getElementById("showpartial").checked&&paymentsrc=='paymentpartial.png'){
      document.getElementById('patienttable'+allpatientids[i]).style.display='block'; 
      document.getElementById('encounter'+allpatientids[i]).style.display='block'; }
    else if(document.getElementById("showfull").checked&&paymentsrc=='paymentfull.png'){
      document.getElementById('patienttable'+allpatientids[i]).style.display='block'; 
      document.getElementById('encounter'+allpatientids[i]).style.display='block'; }
    else{ 
      document.getElementById('patienttable'+allpatientids[i]).style.display='none';
      document.getElementById('encounter'+allpatientids[i]).style.display='none'; }
    //if(document.getElementById("showincomplete").checked=='true')
    //if(document.getElementById("showready").checked=='true')
    //if(document.getElementById("showpartial").checked=='true')
    //if(document.getElementById("showfull").checked=='true')
    //if(document.getElementById("showwaiting").checked=='true')
  }
}
function showhideyear(pid,year){
  if(document.getElementById('patientid'+pid+'year'+year)){
    if(document.getElementById('patientid'+pid+'year'+year).style.display=='none'){
      document.getElementById('patientid'+pid+'year'+year).style.display='block';
      document.getElementById('patientid'+pid+'year'+year+'plus').src='assets/demo2/images/minus.png';
    }
    else if(document.getElementById('patientid'+pid+'year'+year).style.display=='block'){
      document.getElementById('patientid'+pid+'year'+year).style.display='none';
      document.getElementById('patientid'+pid+'year'+year+'plus').src='images/plus.png';
    }
  }
}
</script>

<div id="patienttable0">
  @foreach($records as $index => $record)

  <table style="border-top:1px solid black;" width="85%" cellspacing="0" cellpadding="0" bgcolor="#d2d2d0">
    @if ($index % 2 == 0)
    <tbody><tr height="25" bgcolor="#d2d2d0">
    @else
    <tbody><tr height="25" bgcolor="#FFFFFF">
    @endif
  <td width="2%" align="center"><input type="radio" name="patientselect" value="0" class="no-print" onclick="selectfilterpatient('0');"></td>
  <td width="6%" align="center"><table id="patient0"><tbody><tr height="20"><td style="padding-top:0px;padding-bottom:0px;width:25px;" align="center"><div style="position:relative;"><table width="25"><tbody><tr><td width="25" align="center">
    <img src="{{ asset('assets/demo2/nlimages/manageicons/starinactive.png') }}" onmouseover="previewstar('0','on');" onmouseout="previewstar('0','off');" onclick="showstar('0')" ondblclick="star('0','off');" height="20"></td></tr></tbody></table><div style="text-align: left; position: absolute; top: 23px; height: 230px; width: 300px; display: none; background-color: rgb(253, 255, 122); border: 1px solid rgb(255, 144, 0); z-index: 1; padding: 15px;" id="stardiv0">
        (Double-click to star/unstar)<span style="float:right;"><img src="{{ asset('assets/demo2/images/delete.png') }}" onclick="showstar('0');" width="20" height="20"></span><br><br>
        <table cellspacing="0" cellpadding="0"><tbody><tr valign="bottom">
          <td width="80">Priority:</td>
          <td width="35" valign="bottom">
          <img id="starbilling0" 
          src="{{ asset('assets/demo2/nlimages/manageicons/starbillingactive.png') }}" onclick="starchange('0','billing');" ondblclick="starsubmit(true);" height="20"></td>
          <td width="35" valign="bottom">
          <img id="starhigh0" 
          src="{{ asset('assets/demo2/nlimages/manageicons/starhighinactive.png') }}" onclick="starchange('0','high');" ondblclick="starsubmit(true);" height="20"></td>
          <td width="35" valign="bottom">
          <img id="starmedium0" src="{{ asset('assets/demo2/nlimages/manageicons/starmediuminactive.png') }}" onclick="starchange('0','medium');" ondblclick="starsubmit(true);" height="20"></td>
          <td width="35" valign="bottom">
          <img id="starlow0" src="{{ asset('assets/demo2/nlimages/manageicons/starlowinactive.png') }}" onclick="starchange('0','low');" ondblclick="starsubmit(true);" height="20"></td><td width="30"><a href="javascript:star('0','off');">Unstar</a></td></tr></tbody></table><br>
          <input type="hidden" id="starpriority0" value="billing">
          <center><textarea style="width:250px;height:75px;" id="starnotes0"></textarea><br><br>
          <input type="image" src="{{ asset('assets/demo2/nlimages/submitbutton.png') }}"></center>
        </div></div></td><td style="padding=top:0px;padding-bottom:0px;" width="25" align="center"><div style="position:relative;">
  <img id="phonecallicon0" src="{{ asset('assets/demo2/nlimages/manageicons/phoneinactive.png') }}" onmouseover="previewphoneall('0','on');" onmouseout="previewphoneall('0','off');" onclick="showphoneall('0');" width="20" height="20">
   <div style="text-align:left;position:absolute;top:23px;left;0px;height:350px;width:300px;display:none;background-color:#d2d2d2;border:1px solid #e62129;z-index:1;padding:15px;" id="phoneall0"></div></div></td><td style="padding-top:0px;padding-bottom:0px;" width="25" align="center"><div style="position:relative;" class="no-print">
    <img src="{{ asset('assets/demo2/nlimages/manageicons/cashicon.png') }}" style="z-index:-1;" onmouseover="showpayment('0');" onmouseout="hidepayment('0');" width="20" height="20"><div style="text-align:left;position:absolute;top:23px;left;0px;height:275px;width:400px;display:none;background-color:#ebf5e5;border:1px solid #15b100;z-index:1;padding:15px;" id="paymentdrop0">Cost per visit: $15<br><br>Package: Evaluation Sports (up to 60 mins) </div></div></td><td style="padding-top:0px;padding-bottom:0px;" width="25"><img src="{{ asset('assets/demo2/images/spacer.png') }}" width="20" height="20"></td></tr></tbody></table></td>
  <td width="20%" valign="middle"><a href="javascript:showhide('0');" style="text-decoration:none;color:black">
  <img src="{{ asset('assets/demo2/images/plus.png') }}" id="img0" class="no-print"> {{$record->lastname}},{{$record->firstname }}</a></td><td width="49%" align="left"><img src="{{ asset('assets/demo2/images/spacer.png') }}" id="billingimg0" width="15" height="15"> 
    <img src="{{ asset('assets/demo2/nlimages/billing/paymentwaiting.png') }}" id="paymentimg0" width="15" height="15"></td>
  <td width="10%" align="center">
  
  <table cellspacing="0" cellpadding="0"><tbody><tr><td width="20" align="center"><a href="{{ route('edit',$record->id) }}"><img src="{{ asset('assets/demo2/nlimages/patienticonnew.png') }}" class="no-print" height="20"></a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="20" align="center"><a href="javascript:formsubmit('0','billing.php');"><img src="{{ asset('assets/demo2/nlimages/billingnew.png') }}" class="no-print" height="20"></a></td></tr></tbody></table>
  
  </td>
  <td width="10%" align="center">
    <a href="{{URL::to('/delete/'.$record->id) }}" onclick="return confirm('Are you sure you want to delete this patient?');"><img src="{{ asset('assets/demo2/nlimages/delete.png') }}" height="20"></a>
                @csrf
                @method('DELETE')</td></tr></tbody></table></div>
    </div>
    @endforeach

    <script>document.getElementById("phoneall0").innerHTML='';</script>

  </tr></tbody></table>
      
      </td>
      
      <td width="10%" align="center">

      </td></tr></tbody></table></div></div><script>document.getElementById("phoneall1").innerHTML='';</script></center><br>
<script>var patientids=['0','3','6','10','11','9','8','5','2','4','1'];
</script>
<center><table class="no-print" width="80%"><tbody><tr><td width="100%" align="right">
  <img src="{{ asset('assets/demo2/nlimages/showallbutton.png') }}" onclick="javascript:showall()"> <img src="{{ asset('assets/demo2/nlimages/hideallbutton.png') }}" onclick="javascript:hideall()"></td></tr></tbody></table></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<script> var firstname=['Cash','Johnny','Johnny','jimmy','Frank','Jim','Ben','Md Sano','fsdf','','Poonam'];</script><script> var lastname=['Patient','Test','Sample','Buffett','Sample','Jones','Horton','Islam','dfs','',''];</script><script>
autocomplete(document.getElementById("firstname"), firstname,'autocompletefirst');
autocomplete(document.getElementById("lastname"), lastname,'autocompletelast');
document.getElementById('paymentimg0').src='assets/demo2/nlimages/billing/paymentwaiting.png';document.getElementById('paymentimg3').src='assets/demo2/nlimages/billing/paymentwaiting.png';document.getElementById('paymentimg6').src='nlimages/billing/paymentwaiting.png';document.getElementById('paymentimg10').src='nlimages/billing/paymentfull.png';document.getElementById('paymentimg11').src='nlimages/billing/paymentfull.png';document.getElementById('paymentimg9').src='nlimages/billing/paymentfull.png';document.getElementById('paymentimg8').src='nlimages/billing/paymentfull.png';document.getElementById('paymentimg5').src='nlimages/billing/paymentwaiting.png';document.getElementById('billingimg2').src='nlimages/billing/billingincomplete.png';document.getElementById('paymentimg2').src='nlimages/billing/paymentwaiting.png';document.getElementById('billingimg4').src='nlimages/billing/billingincomplete.png';document.getElementById('paymentimg4').src='nlimages/billing/paymentwaiting.png';document.getElementById('billingimg1').src='nlimages/billing/billingincomplete.png';document.getElementById('paymentimg1').src='nlimages/billing/paymentpartial.png';document.getElementById('showbillingpayment').style.display='block';
var allpatientids=['0','3','6','10','11','9','8','5','2','4','1'];
</script>
    </form></td></tr></tbody></table></td></tr></tbody></table>
</form></body></html>