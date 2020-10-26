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
	  document.getElementById(divs[i]+'td').style.backgroundImage="url(nlimages/navbg.png)";
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
<table style="color:white;"><tbody><tr style="padding:0px;"><td style="padding:0px;" width="150" valign="middle" align="center"><a href="{{ route('patient') }}">
	<img src="{{ asset('assets/demo2/nlimages/up2speedsmall.png') }}" style="display:inline;" height="50"></a></td><td width="20"></td><td width="50" valign="middle" align="left">
		<a href="{{ route('logout') }}">
			<img src="{{ asset('assets/demo2/nlimages/logouticon.png') }}" height="60"></a></td><td width="50" valign="middle" align="left">
<a href="{{ route('admin') }}"><img src="{{ asset('assets/demo2/nlimages/adminicon.png') }}" height="60"></a></td>
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
}</script> <form name="headerform" action="" method="" style="display:inline"><font size="+1">Please select a patient to begin!</font>&nbsp;&nbsp;&nbsp;<select name="patientid" id="headerpatientid" style="width:150px" onchange="headerformsubmit();"><option value="" selected="">Select...</option>
	@foreach($records as $record)
	<option value="1">

{{$record->firstname}}, {{$record->lastname}} <br>
</option>
@endforeach
</select></form></td><td width="12%" align="right"><a href="{{ route('portalhome') }}" style="color:white;font-size:18px;"><img src="{{ asset('assets/demo2/nlimages/patientportal.png') }}" style="display:inline;" width="65"></a></td><td style="border-left:none;" width="4%" align="right"><a href="{{ route('patient') }}">
	<img src="{{ asset('assets/demo2/nlimages/home.png') }}" style="display:inline;" width="65"></a></td></tr>
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
<tr><td valign="top" align="center"><a style="color:black;text-decoration:none;" href="newpatient.php?print=true">PRINT</a></td><td style="padding:0px;" valign="top" align="center"></td><td valign="top" align="center"></td></tr></tbody></table></td></tr>
<tr><td>&nbsp;</td></tr><tr height="35"><td style="background-image: url('assets/demo2/nlimages/navbgpatient.png'); background-repeat: no-repeat; background-position: center center;" id="age.phptd" onmouseover="changebg('age.php','on','patient');" onmouseout="changebg('age.php','off','patient')" align="center"><a href="{{ route('patient')}}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">All Patients</div></a></td></tr><tr><td>&nbsp;</td></tr><tr height="35"><td style="background-image:url('assets/demo2/nlimages/navbgactive.png');background-repeat:no-repeat;background-position:center;" id="patient.phptd" align="center"><b><a href="{{ route('newpatient')}}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">New Patient</div></a></b></td></tr><tr><td>&nbsp;</td></tr><tr height="35"><td style="background-image: url('assets/demo2/nlimages/navbgpatient.png'); background-repeat: no-repeat; background-position: center center;" id="eduler.phptd" onmouseover="changebg('eduler.php','on','patient');" onmouseout="changebg('eduler.php','off','patient')" align="center"><a href="{{ route('scheduler')}}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Scheduler</div></a></td></tr></tbody></table>
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
<form action="{{ route('insertnewpatient') }}" method="POST">
@csrf
<input type="hidden" name="submit" value="Save">
<script>
function affect(id){
	document.getElementById(id).value='';
	document.getElementById(id).style.color='black';
}
function out(id){
	var theval; 
	if(id=='month'){ theval='mm'; }
	if(id=='day') theval='dd'; if(id=='year') theval='yyyy';
	if(document.getElementById(id).value==''){
	document.getElementById(id).style.color='gray';
	document.getElementById(id).value=theval;
	}
}
</script>
<center>
<table width="80%" cellspacing="0" cellpadding="10" border="0">
<tbody><tr><td colspan="8" style="border-top:2px solid #999494;border-bottom:2px solid #999494;"><font size="+2">New Patient</font></td></tr>
<tr bgcolor="#f1f1f1"><td colspan="8" style="border-bottom:2px solid #999494;"><b>Personal Information</b></td></tr>
<tr><td>First name:</td><td><input name="firstname"></td><td>M.I.</td><td><input name="middleinitial"></td>
<td>Last Name</td><td colspan="3"><input name="lastname"></td></tr>
<tr><td>Street:</td><td><input name="street"></td><td>City:</td><td><input name="city"></td>
<td>Zip Code:</td><td><input name="zip"></td><td>State:</td><td><select name="state"><option value="" selected=""></option>
<option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select></td></tr>
<tr><td>Home Phone:</td><td><input name="homephone"></td><td>Work Phone:</td><td><input name="workphone"></td>
<td>Cell Phone:</td><td><input name="cellphone"></td><td>Email:</td><td><input name="email"></td></tr>
<tr><td>DOB:</td><td><input name="dobmonth" id="month" value="mm" style="color:gray;" onfocus="affect('month');" size="1" onblur="out('month');"> / <input name="dobday" id="day" value="dd" style="color:gray;" onfocus="affect('day');" size="1" onblur="out('day');"> / <input name="dobyear" id="year" value="yyyy" style="color:gray;" onfocus="affect('year');" size="2" onblur="out('year');"></td><td>SSN:</td><td><input name="ssn"></td>
<td>Marital Status:</td><td><select name="maritalstatus"><option value="" selected=""></option><option value="Single">Single</option><option value="Married">Married</option></select></td><td>Sex:</td><td><input type="radio" name="sex" value="male"> Male
<input type="radio" name="sex" value="female"> Female</td></tr>

<tr bgcolor="#f1f1f1"><td colspan="8" style="border-top:2px solid #999494;border-bottom:2px solid #999494;"><b>Employer Information</b></td></tr>

<tr><td>Employer:</td><td><input name="employer"></td><td>Occupation</td><td><input name="occupation"></td>
<td>Status:</td><td><select name="status"><option value="" selected=""></option><option value="Active">Active</option>
	<option value="Inactive">Inactive</option></select></td></tr>
        
<tr bgcolor="#f1f1f1"><td colspan="8" style="border-top:2px solid #999494;border-bottom:2px solid #999494;"><b>Family Information</b></td></tr>

<tr><td>Spouse Last Name:</td><td><input name="spouselastname"></td><td>First Name:</td><td><input name="spousefirstname"></td>
<td>SSN:</td><td><input name="spousessn"></td><td>DOB:</td><td><input name="spousedob"></td></tr> 
    
<tr bgcolor="#f1f1f1"><td colspan="8" style="border-top:2px solid #999494;border-bottom:2px solid #999494;"><b>Emergency Contact</b></td></tr>
<tr><td>Name:</td><td><input name="emergencyname"></td>
<td>Relationship:</td><td><input name="emergencyrelationship"></td></tr>
<tr><td>Home Phone:</td><td><input name="emergencyhomephone"></td><td>Cell Phone:</td><td><input name="emergencycellphone"></td></tr>

<tr bgcolor="#d9d9d9"><td colspan="8" style="border-top:2px solid #999494;border-bottom:2px solid #999494;">
<input type="image" src="{{ asset('assets/demo2/nlimages/savebutton.png') }}" height="25"></td></tr>
</tbody></table></center>
</form>
    </td></tr></tbody></table></td></tr></tbody></table>
</form></body></html>