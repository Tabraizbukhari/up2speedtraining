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
	  document.getElementById(divs[i]+'td').style.backgroundImage="url('assets/demo2/nlimages/navbg.png')";
	  document.getElementById(divs[i]+'link').style.color="#606062";
	  document.getElementById(divs[i]+'link').style.fontWeight="normal";  
  }
  document.getElementById(page+'td').style.backgroundImage="url('assets/demo2/nlimages/navbgactive.png')";
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
<form name="encform" enctype="multipart/form-data" 
	action="{{ route('patientinfo',$data->id) }}" method="POST">
	@csrf
    @method('PUT')
 <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
<div style="position:fixed;top:0px;left:0px;z-index:1;width:100%">
<table background="{{asset('assets/demo2/nlimages/headerbg.png')}}" id="mainmenutable" style="background-color:#5f5f61;color:white;background-repeat:repeat-x;" width="100%" height="50" cellspacing="0" cellpadding="5" border="0">
<tbody><tr height="50"><td style="padding:0px;" width="30%">
<table style="color:white;"><tbody><tr style="padding:0px;"><td style="padding:0px;" width="150" valign="middle" align="center"><a href="{{ route('patient')}}"><img src="{{ asset('assets/demo2/nlimages/up2speedsmall.png') }}" style="display:inline;" height="50"></a></td><td width="20"></td><td width="50" valign="middle" align="left"><a href="{{ route('logout') }}"><img src="{{ asset('assets/demo2/nlimages/logouticon.png') }}" height="60"></a></td><td width="50" valign="middle" align="left">
<a href="{{ route('admin')}}">
	<img src="{{ asset('assets/demo2/nlimages/adminicon.png') }}" height="60"></a></td>
<td width="300" align="center">Welcome,<br>Admin User</td></tr></tbody></table></td>

<td style="border-right:none;" id="tdpatientvisit" width="50%" valign="middle" align="center">
<script>if(window.innerWidth<1280) document.getElementById('tdpatientvisit').style.textAlign='center';</script>
<input type="hidden" name="page" value="patientinfo.php">
<input type="hidden" name="gotodate">
<input type="hidden" name="encounterviewyear">
<input type="hidden" name="markbilling">
<table><tbody><tr><td></td><td width="10"></td><td style="color:white;"><font size="+1"><strong>Patient selected:</strong> {{$data->lastname }},{{$data->firstname }}&nbsp;&nbsp;
	<a href="?clear=true">
		<img src="{{ asset('assets/demo2/nlimages/checkwhitebox.png') }}" style="display:in-line;position:absolute;top:22px;" height="30"></a>&nbsp;    <script>
	if(window.innerWidth<=1412) document.write('<br>');else document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');</script>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div style="display:inline;position:relative;"> <strong>Visit: </strong> <select name="pick" onchange="javascript:pickencounter();">
			<option value="" selected="">Select</option>
			@foreach($visits as $visit)
			<option value="{{ $visit->id }}">
			{{$visit->datemonth}}/{{$visit->dateday}}/{{$visit->dateyear}}
			</option>
			@endforeach
		</select>&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="{{ asset('assets/demo2/nlimages/calendar.png') }}" onclick="showvisitdates()" ;="" style="display:in-line;position:absolute;top:-6px;" height="30">
		@if(count($visits)==0)
		<div style="position:absolute;width:300;top:107px;left:0px;background-color:#f1f1f1;display:none;color:black;border:2px solid #d9d9d9;z-index:1;text-align:center;" id="visitdropdown"></div></div>
		@else
		<div style="position:absolute;width:300;top:107px;left:0px;background-color:#f1f1f1;display:none;color:black;border:2px solid #d9d9d9;z-index:1;text-align:center;" id="visitdropdown">
			@foreach($visits as $visit)
			<b>#1:</b> 
			<img src="{{ asset('assets/demo2/nlimages/radioactive.png') }}" height="14"> {{$visit->datemonth}}/{{$visit->dateday}}/{{$visit->dateyear}} <a href="javascript:pickanencounter('04/09/2020','editvisits.php')"><img src="{{ asset('assets/demo2/nlimages/edit.png') }}" height="14"></a><br>
		    @endforeach</div></div></div>
	   @endif</font></td></tr></tbody></table></td><td width="12%" align="right"><a href="{{ route('portalhome') }}" style="color:white;font-size:18px;">
		<img src="{{ asset('assets/demo2/nlimages/patientportal.png') }}" style="display:inline;" width="65"></a></td><td style="border-left:none;" width="4%" align="right">
			<a href="{{ route('patient')}}">
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
<style type="text/css">
.tdbg
{

}
.tdbg:hover {
	background-image: url('/assets/demo2/nlimages/navbgpatientactive.png')
}

.tdbg1
{

}
.tdbg1:hover {
	background-image: url('/assets/demo2/nlimages/navbgon.png')
}

.tdbg2
{

}
.tdbg2:hover {
	background-image: url('/assets/demo2/nlimages/navbgcodingon.png')
}

.tdbg3
{

}
.tdbg3:hover {
	background-image: url('/assets/demo2/nlimages/navbgexerciseson.png')
}
</style>
<table style="background-color:#f1f1f1;" width="238" cellspacing="0" cellpadding="5" border="0">
<tbody><tr style="background-color:#d9d9d9;"><td style="padding:0px;" align="center"><table width="200"><tbody><tr>
<td style="width:50px;padding:0px;" valign="middle" align="center"><a href="?print=true">
	<img src="{{ asset('assets/demo2/nlimages/print.png') }}" width="40"></a></td>
<td style="width:100px;padding:0px;" valign="middle" align="center"><a href="">
	<img src="{{ asset('assets/demo2/nlimages/new.png') }}" style="display:inline" width="40"></a></td>
<td style="width:50px;padding:0px;" valign="middle" align="center"> </td></tr>
<tr><td valign="top" align="center"><a style="color:black;text-decoration:none;" href="?print=true">PRINT</a></td><td style="padding:0px;" valign="top" align="center"><a style="color:black;text-decoration:none;" href="">NEW VISIT</a></td><td valign="top" align="center"></td></tr></tbody></table></td></tr>
<tr><td "="" align="center">
	<img src="{{ asset('assets/demo2/nlimages/patientinformation.png') }}"></td></tr><tr height="35">
		<td background="{{ asset('assets/demo2/nlimages/navbgpatient.png')}}" style="background-repeat:no-repeat;background-position:center;" id="ientinfo.phptd" align="center"><b><a href="" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Patient Info</div></a></b></td></tr>

	<tr height="35"><td class="tdbg" background="{{ asset('assets/demo2/nlimages/navbgpatient.png')}}"style="background-repeat:no-repeat;background-position:center;"  align="center" >
		<a href="{{URL::to('/familyhistory/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Family History</div></a></td></tr>

	<tr height="35"><td class="tdbg" background="{{ asset('assets/demo2/nlimages/navbgpatient.png')}}" style="background-repeat:no-repeat;background-position:center;" align="center">
		<a href="{{URL::to('/socialhistory/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Social History</div></a></td></tr>

	<tr height="35"><td class="tdbg" background ="{{ asset('assets/demo2/nlimages/navbgpatient.png')}}" style="background-repeat:no-repeat;background-position:center;"  align="center"><a href="{{URL::to('/preexistingconditions/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Pre-Existing Conditions</div></a></td></tr>

	<tr height="35"><td class="tdbg" background ="{{ asset('assets/demo2/nlimages/navbgactive.png')}}"style="background-repeat:no-repeat;background-position:center;" align="center"><a href="
		{{ URL::to('/insuranceinfo/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Insurance Info</div></a></td></tr>


	<tr height="35"><td class="tdbg" background ="{{ asset('assets/demo2/nlimages/navbgpatient.png')}}"style="background-repeat:no-repeat;background-position:center;" align="center"><a href="" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Billing</div></a></td></tr><tr><td "="" align="center">

		<img src="{{ asset('assets/demo2/nlimages/visitinformation.png') }}"></td></tr><tr height="35">
			<td class="tdbg1" background ="{{ asset('assets/demo2/nlimages/navbg.png')}}"style="background-repeat:no-repeat;background-position:center;" align="center"><a href="{{ URL::to('/subjective/'.$data->id) }}" style="color:white;text-decoration:none;">

				<div style="width:100%;height:100%">Subjective</div></a></td></tr><tr height="35"><td class="tdbg1" background ="{{ asset('assets/demo2/nlimages/navbg.png')}}"style="background-repeat:no-repeat;background-position:center;" align="center">
					<a href="{{ URL::to('/subjective/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">

				Objective</div></a></td></tr><tr height="35"><td td class="tdbg1" background ="{{ asset('assets/demo2/nlimages/navbg.png')}}"style="background-repeat:no-repeat;background-position:center;"  align="center">
					<a href="{{ URL::to('/subjective/'.$data->id) }}" style="color:white;text-decoration:none;">

					<div style="width:100%;height:100%">Assessment</div></a></td></tr><tr height="35"><td class="tdbg1" background ="{{ asset('assets/demo2/nlimages/navbg.png')}}"style="background-repeat:no-repeat;background-position:center;" align="center">
						<a href="{{ URL::to('/subjective/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Plan</div></a></td></tr>

					<tr height="35">
					<td class="tdbg2"background="{{ asset('assets/demo2/nlimages/navbgcoding.png') }}"style="background-repeat:no-repeat;background-position:center;" align="center"><a href="{{ URL::to('/assessmenticd/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Daily Coding</div></a></td></tr>
					<tr height="35">
					<td class="tdbg3" background="{{ asset('assets/demo2/nlimages/navbgexercises.png') }}"style="background-repeat:no-repeat;background-position:center;"  align="center"><a href="{{URL::to('/exercises/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Exercises</div></a></td></tr><tr height="35">
					<td class="tdbg" background="{{ asset('assets/demo2/nlimages/navbgpatient.png') }}" style="background-repeat:no-repeat;background-position:center;"  align="center">
						<a href="{{URL::to('/algorithm/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Progress Notes</div></a></td></tr>

					<tr height="35"><td class="tdbg"background="{{ asset('assets/demo2/nlimages/navbgpatient.png') }}"style="background-repeat:no-repeat;background-position:center;" align="center"><a href="{{URL::to('/algorithm/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Algorithm</div></a></td></tr>

					<tr height="35"><td class="tdbg"background="{{ asset('assets/demo2/nlimages/navbgpatient.png') }}" style="background-repeat:no-repeat;background-position:center;"  align="center"><a href="{{URL::to('/progress/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Patient Overview</div></a></td></tr><tr height="35">

					<td class="tdbg" background="{{ asset('assets/demo2/nlimages/navbgpatient.png') }}" style="background-repeat:no-repeat;background-position:center;"  align="center"><a href="{{ URL::to('/examsrom/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Exams</div></a></td></tr>

					<tr height="35"><td class="tdbg" background="{{ asset('assets/demo2/nlimages/navbgpatient.png') }}" style="background-repeat:no-repeat;background-position:center;" align="center"><a href="{{URL::to('/scheduler1/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Scheduler</div></a></td></tr></tbody></table>
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
   
<div id="visitlist" style="position: fixed; width: 1470px; left: 238px; top: 77px; height: auto; z-index: 1; overflow: auto visible; display: inline-block; white-space: nowrap;">
<table style="width: 1470px;" id="visittable" cellspacing="0" cellpadding="0" border="0" bgcolor="#d9d9d9">
<tbody><tr height="30"><td>&nbsp;</td>
</tr></tbody></table></div>
	<div style="text-align:left;position:fixed;top:107px;right:0px;height:330px;width:320px;display:none;background-color:#ebf5e5;border:1px solid #15b100;z-index:+2;padding:15px;" id="headerbp">
				</div>
<script>
var position=basewidth+0;
document.getElementById('visittable').style.width=basewidth+(0)*150+'px';
var viewportwidth=document.getElementById('viewport').offsetWidth;
document.getElementById('visitlist').style.width=document.getElementById('viewport').offsetWidth;
if(parseInt(document.getElementById('visittable').style.width.replace('px',''))<parseInt(document.getElementById('viewport').offsetWidth))
	document.getElementById('visittable').style.width=document.getElementById('viewport').offsetWidth;
if(position+150>viewportwidth)
document.getElementById('visitlist').scrollLeft=position;
</script>
<table height="30"><tbody><tr><td><img src="images/spacer.png" height="30"></td></tr></tbody></table>
        <br>
 <table width="100%" cellpadding="10 "><tbody><tr><td width="100%" valign="top">
<script>

if(window.innerWidth<1280){
	if(document.getElementById('visitlist')) document.getElementById('visitlist').style.top='69px';
	document.getElementById('sidebar').style.top='72px';
	document.getElementById('mainmenutable').style.height='70px';
}

</script>
<script>
function checkother(i){
	var carrier=document.getElementById('carriername'+i).value;
	if(carrier=='Other'){ document.getElementById('carriername'+i).style.display='none';
	document.getElementById('carriernameother'+i).style.display='block';
	document.getElementById('carriernameother'+i).focus();
	}
}
function cancelother(){
	if(document.getElementById('carriernameother'+i).value==''){
		document.getElementById('carriername'+i).style.display='block';
		document.getElementById('carriernameother'+i).style.display='none';
		document.getElementById('carriername'+i).value='';
	}
}
function addsubmit(){
	document.insuranceform.add.value='true';
	document.insuranceform.submit();
}
function deletesubmit(i){
	document.insuranceform.todelete.value=i;
	document.insuranceform.submit();
}
</script>
<form action="" method="post" name="insuranceform">
<input type="hidden" name="tosubmit" value="true">
<input type="hidden" name="add">
<input type="hidden" name="toadd" value="">
<input type="hidden" name="tosave" value="1">
 <input type="hidden" name="todelete"><center>
<table>
<tbody><tr><td colspan="1" style="border-top:2px solid #999494;border-bottom:2px solid #999494;padding:5px;"><font size="+2">Insurance Information</font>
  <img src="{{ asset('assets/demo2/nlimages/addbutton.png') }}" onclick="addsubmit();" style="display:inline"> </td></tr>
<tr>
<td><table cellspacing="0" cellpadding="10">
<tbody><tr bgcolor="#f1f1f1"><td>Insurance #1:</td><td>
<input type="radio" name="insuranceprimary" value="0" checked=""> Primary</td><td>
<img src="{{ asset('assets/demo2/nlimages/deletebutton.png') }}" onclick="deletesubmit(0)">
</td></tr>
<tr><td>Insurance Annual Reset Date:</td><td colspan="2">
<input name="resetmonth0" value="January" disabled="">
<input name="resetdate0" value="1" disabled="">
</td></tr>
<tr><td>Effective Date:</td><td colspan="2">
<input name="effectivemonth0" value="January" disabled="">
<input name="effectiveday0" value="1" disabled="">
<input name="effectiveyear0" value="2019" disabled="">
</td></tr>
<tr><td>End Date:</td><td colspan="2">
<input name="endmonth0" value="January" disabled="">
<input name="endday0" value="1" disabled="">
<input name="endyear0" value="2019" disabled="">
</td></tr>
<tr bgcolor="#f1f1f1"><td>Carrier Name:</td><td colspan="2">
<select name="carriername0"><option value=""></option>
	<option value="BLUE CROSS BLUE SHIELD" {{ old('carriername0', $data->carriername0) == 'BLUE CROSS BLUE SHIELD' ? 'selected="selected"' : '' }}>BLUE CROSS BLUE SHIELD</option>
	<option value="AARP" {{ old('carriername0', $data->carriername0) == 'AARP' ? 'selected="selected"' : '' }}>AARP</option>
	<option value="AETNA" {{ old('carriername0', $data->carriername0) == 'AETNA' ? 'selected="selected"' : '' }}>AETNA</option>
	<option value="CIGNA" {{ old('carriername0', $data->carriername0) == 'CIGNA' ? 'selected="selected"' : '' }}>CIGNA</option>
	<option value="HEALTHCOMP" {{ old('carriername0', $data->carriername0) == 'HEALTHCOMP' ? 'selected="selected"' : '' }}>HEALTHCOMP</option>
	<option value="HEALTHNET OF CALIFORNIA &amp; OREGON" {{ old('carriername0', $data->carriername0) == 'HEALTHNET OF CALIFORNIA &amp; OREGON' ? 'selected="selected"' : '' }}>HEALTHNET OF CALIFORNIA &amp; OREGON</option><option value="UHC - UNITED HEALTH CARE"
	{{ old('carriername0', $data->carriername0) == 'UHC - UNITED HEALTH CARE' ? 'selected="selected"' : '' }}>UHC - UNITED HEALTH CARE</option>
	<option value="UMR-WAUSAU" {{ old('carriername0', $data->carriername0) == 'UMR-WAUSAU' ? 'selected="selected"' : '' }}>UMR-WAUSAU</option><option value="SECURE HORIZONS" {{ old('carriername0', $data->carriername0) == 'SECURE HORIZONS' ? 'selected="selected"' : '' }}>SECURE HORIZONS</option>
	<option value="Other" {{ old('carriername0', $data->carriername0) == 'Other' ? 'selected="selected"' : '' }}>Other</option></select><input name="carriernameother0" id="carriernameother0" value="{{ old('carriernameother0',$data->carriernameother0) }}" style="display:none;" onblur="javascript:cancelother();">
</td></tr>
<tr><td>Insured Name:</td><td colspan="2">
<input name="insuredname0" value="{{ old('insuredname0',$data->insuredname0) }}"></td></tr>
<tr><td>Claims Adjuster:</td><td colspan="2">
<input name="claimsadjuster0" value="{{ old('claimsadjuster0',$data->claimsadjuster0) }}"></td></tr>
<tr bgcolor="#f1f1f1"><td>Insured DOB:</td><td colspan="2"><input name="insureddob0" value="{{ old('insureddob0',$data->insureddob0) }}"></td></tr>
<tr><td>Relationship to Insured:</td><td colspan="2"><select name="relationshiptoinsured0"><option value="Self" selected="">Self</option>
<option value="Spouse" {{ old('relationshiptoinsured0', $data->relationshiptoinsured0) == 'Spouse' ? 'selected="selected"' : '' }}>Spouse</option>
<option value="Child" {{ old('relationshiptoinsured0', $data->relationshiptoinsured0) == 'Child' ? 'selected="selected"' : '' }}>Child</option></select></td></tr>
<tr bgcolor="#f1f1f1"><td>Insured's Policy Number:</td><td colspan="2">
<input name="policynumber0" value="{{ old('policynumber0',$data->policynumber0) }}"></td></tr>
<tr><td>Group Number:</td><td colspan="2"><input name="groupnumber0" value=""></td></tr>
<tr bgcolor="#f1f1f1"><td>Claim Number:</td><td colspan="2">
<input name="claimnumber0" value="{{ old('claimnumber0',$data->claimnumber0) }}"></td></tr>
<tr><td>Phone Number:</td><td colspan="2"><input name="phonenumber0" value="{{ old('phonenumber0',$data->phonenumber0) }}"></td></tr>
<tr bgcolor="#f1f1f1"><td>Visits Used With Up2Speed:</td><td> <b>0</b></td><td>(For year <u>2020</u>)</td></tr>
<script> function changetotal(i){ var total=0; 
var visitsused=parseInt(document.getElementById('visitsused'+i).value);
if(visitsused!=parseInt(document.getElementById('visitsused'+i).value)) visitsused=0;
var visitsauthorized=parseInt(document.getElementById('visitsauthorized'+i).value);
var remainingstr='Visits Remaining: <b>'+(visitsauthorized-(total+visitsused))+'</b>';
if(visitsauthorized!=parseInt(document.getElementById('visitsauthorized'+i).value)) remainingstr='Visits Remaining: <b>N/A</b>';
document.getElementById('totalvisitsused'+i).innerHTML='Total Visits Used: <b>'+(total+visitsused)+'</b>';
if(document.getElementById('visitsauthorized'+i).value!='UNLIMITED'){ document.getElementById('visitsremaining'+i).innerHTML=remainingstr;  
document.getElementById('unlimited'+i).checked=false; }
else{ document.getElementById('visitsremaining'+i).innerHTML="Visits Remaining: <b>&infin;</b>"; document.getElementById('unlimited'+i).checked=true; }
} 
function selectbg(inout,ti){
	document.getElementById('ins'+inout+ti).checked='true';
	if(inout=='in') { document.getElementById('tdin'+ti).style.backgroundImage='url(nlimages/buttonred.png)';
		document.getElementById('tdout'+ti).style.backgroundImage='url(nlimages/buttonblack.png)'; }
	if(inout=='out') { document.getElementById('tdout'+ti).style.backgroundImage='url(nlimages/buttonred.png)';
		document.getElementById('tdin'+ti).style.backgroundImage='url(nlimages/buttonblack.png)'; }
}
function adddeductible(ti){
	document.getElementById('numdeductible'+ti).value=	parseInt(document.getElementById('numdeductible'+ti).value)+1;
	document.getElementById("adddiv"+ti).style.display="none";
	document.getElementById("adddeductible"+ti).style.display="table-row";
}
function removedeductible(ti){
	document.getElementById('numdeductible'+ti).value=	parseInt(document.getElementById('numdeductible'+ti).value)-1;
	document.getElementById("adddiv"+ti).style.display="block";
	document.getElementById("adddeductible"+ti).style.display="none";
}
function deletedeductible(ti,di){
	document.getElementById('deletedeductible'+ti).value=di;
	document.insuranceform.submit();
}
function setunlimited(ti){
	if(document.getElementById('unlimited'+ti).checked)
		document.getElementById('visitsauthorized'+ti).value='UNLIMITED';
	else
		document.getElementById('visitsauthorized'+ti).value='';
	document.getElementById('visitsauthorized'+ti).onchange();
}
</script>
<tr><td>Visits Used Elsewhere:</td><td>
<input name="visitsused0" id="visitsused0" value="{{ old('visitsused0',$data->visitsused0) }}" onchange="javascript:changetotal(0)"></td>
<td><div id="totalvisitsused0">Total Visits Used: <b>0</b></div></td></tr>
<tr><td>Number of Visits Authorized:</td><td><input style="width:100px" name="visitsauthorized0" id="visitsauthorized0" value="{{ old('visitsauthorized0',$data->visitsauthorized0) }}" onchange="javascript:changetotal(0)">
<input type="checkbox" id="unlimited0" onchange="javascript:setunlimited(0);"> Unlimited</td><td><div id="visitsremaining0">Visits Remaining: <b>N/A</b></div></td></tr>
<input type="hidden" name="numdeductible0" id="numdeductible0" value="1"><input type="hidden" name="deletedeductible0" id="deletedeductible0"><tr bgcolor="#f1f1f1"><td>Deductible for billing:</td><td>$ <input name="billingdeductible0-0" value=""></td>
<td>For year: <input name="billingdeductibleyear0-0" value="{{ old('billingdeductibleyear0',$data->billingdeductibleyear0) }}"> &nbsp;&nbsp;
	<img src="{{ asset('assets/demo2/images/delete.png') }}" style="display:inline" onclick="deletedeductible('0','0')" width="15" height="15"><span style="float:right" id="adddiv0"><a href="javascript:adddeductible('0');">Add</a></span></td></tr>
    <tr style="display:none;" id="adddeductible0" bgcolor="#f1f1f1"><td></td><td>$ 
    <input name="billingdeductible1" 
    value="{{ old('billingdeductible1',$data->billingdeductible1) }}"></td>
<td><table cellspacing="0" cellpadding="0"><tbody><tr><td>For year: 
<input name="billingdeductibleyear1" value=" 
{{ old('billingdeductibleyear1',$data->billingdeductibleyear1) }}"> &nbsp;&nbsp;
	<img src="{{ asset('assets/demo2/images/delete.png') }}" style="display:inline" onclick="removedeductible('0');" width="15" height="15"></td></tr></tbody></table></td></tr>
<tr bgcolor="#f1f1f1"><td colspan="3" align="center"><table width="800" cellspacing="0" cellpadding="0"><tbody><tr><td align="center">Use if the billing deductible has changed from year to year. If left blank or if year is not specified, deductible for billing and YTD calculations will default to deductible for whichever in or out of network is selected.</td></tr></tbody></table></td></tr>
<tr bgcolor="#f1f1f1"><td>Select:<div style="display:none"><input type="radio" id="insin0" name="insnetwork0" value="in"> In
<input type="radio" id="insout0" name="insnetwork0" value="out"> Out</div></td><td align="center"><table width="200" height="30" cellspacing="0" cellpadding="0"><tbody><tr height="30">
<td id="tdin0" background="{{ asset('assets/demo2/nlimages/buttonblack.png')}}"style="background-size:200px 30px;color:white;" width="200" align="center"><a href="" style="color:white;text-decoration:none;"><div style="width:200px;height:20px"><b>IN NETWORK</b></div></a></td></tr></tbody></table></td><td align="center"><table width="200" height="30" cellspacing="0" cellpadding="0"><tbody><tr height="30"><td id="tdout0" background="{{ asset('assets/demo2/nlimages/buttonblack.png')}}"style="background-size:200px 30px;color:white;" width="200" align="center"><a href="" style="color:white;text-decoration:none;"><div style="width:200px;height:20px"><b>OUT OF NETWORK</b></div></a></td></tr></tbody></table></td></tr>
<tr><td>Deductible</td><td align="center">$ <input name="insindeductible0" value="{{ old('insindeductible0',$data->insindeductible0) }}"></td>
	<td align="center">$ 
	<input name="insoutdeductible0" value="{{ old('insoutdeductible0',$data->insoutdeductible0) }}"></td></tr>
<tr bgcolor="#f1f1f1"><td>Remaining</td><td align="center">
<input name="insinremaining0" value="{{ old('insinremaining0',$data->insinremaining0) }}"></td>
	<td align="center">
<input name="insoutremaining0" value="{{ old('insoutremaining0',$data->insoutremaining0) }}"></td></tr>
<tr><td>Co-Insurance</td><td align="center">
<input name="insincoinsurance0" value="{{ old('insincoinsurance0',$data->insincoinsurance0) }}"></td>
	<td align="center">
	<input name="insoutcoinsurance0" value="{{ old('insoutcoinsurance0',$data->insoutcoinsurance0) }}"></td></tr>
<tr bgcolor="#f1f1f1"><td>Co-Pay</td><td align="center"><input name="insincopay0" value="{{ old('insincopay0',$data->insincopay0) }}"></td>
	<td align="center">
	<input name="insoutcopay0" value="{{ old('insoutcopay0',$data->insoutcopay0) }}"></td></tr>
<tr><td>Notes</td><td colspan="2" align="center">
	<textarea name="insnotes0" rows="3" cols="50"> {{ old('insnotes0',$data->insnotes0) }}</textarea></td></tr>
</tbody></table></td>
</tr><tr bgcolor="#d9d9d9"><td colspan="1" style="border-top:2px solid #999494;border-bottom:2px solid #999494;" valign="middle" align="right">
 <input id="savebutton" type="image" 
 src="{{ asset('assets/demo2/nlimages/savebutton.png') }}" height="25"> </td></tr>
</tbody></table>
</center>
    </form></td></tr></tbody></table></td></tr></tbody></table>
</form></body></html>