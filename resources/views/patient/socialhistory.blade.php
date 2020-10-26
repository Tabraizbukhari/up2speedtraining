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
	action="{{ route('updatesocialhistory',$data->id) }}" method="POST">
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
	   @endif</table></td><td width="12%" align="right"><a href="{{ route('portalhome') }}" style="color:white;font-size:18px;">
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

	<tr height="35"><td class="tdbg" background="{{ asset('assets/demo2/nlimages/navbgactive.png')}}" style="background-repeat:no-repeat;background-position:center;" align="center">
		<a href="{{URL::to('/socialhistory/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Social History</div></a></td></tr>

	<tr height="35"><td class="tdbg" background ="{{ asset('assets/demo2/nlimages/navbgpatient.png')}}" style="background-repeat:no-repeat;background-position:center;"  align="center"><a href="{{URL::to('/preexistingconditions/'.$data->id) }}" style="color:white;text-decoration:none;"><div style="width:100%;height:100%">Pre-Existing Conditions</div></a></td></tr>

	<tr height="35"><td class="tdbg" background ="{{ asset('assets/demo2/nlimages/navbgpatient.png')}}"style="background-repeat:no-repeat;background-position:center;" align="center"><a href="
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
   
<div id="visitlist" style="position: fixed; width: 1287px; left: 238px; top: 77px; height: auto; z-index: 1; overflow: auto visible; display: inline-block; white-space: nowrap;">
<table style="width: 1287px;" id="visittable" cellspacing="0" cellpadding="0" border="0" bgcolor="#d9d9d9">
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
<table height="30"><tbody><tr><td><img src="{{ asset('assets/demo2/images/spacer.png') }}" height="30"></td></tr></tbody></table>
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
function affect(id){
	if(document.getElementById(id).value=='mm'||document.getElementById(id).value=='dd'||document.getElementById(id).value=='yyyy'){
	document.getElementById(id).value='';
	document.getElementById(id).style.color='black';
	}
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
function formsubmit(thefile){
	document.patientinfoform.deleteimage.value=thefile;
	document.patientinfoform.submit();
}
</script>

<form action="" method="post">
<input type="hidden" name="submit" value="true">
<center><table width="80%" cellspacing="0" cellpadding="5" border="0"><tbody><tr><td colspan="8" style="border-top:2px solid #999494;border-bottom:2px solid #999494;"><font size="+2">Social History</font></td></tr>
<tr bgcolor="#f1f1f1"><td>&nbsp;</td><td align="center">Daily</td><td align="center">3x/wk</td><td align="center">2x/wk</td><td align="center">1x/wk</td><td align="center">2x/mo</td><td align="center">1x/mo</td><td align="center">Never</td></tr><tr><td colspan="8" style="border-top:2px solid #999494;border-bottom:2px solid #999494;"><b>Work</b></td></tr>
<tr bgcolor="#f1f1f1"><td>Standing:</td>
	<td align="center"><input type="radio" name="Standing" value="Daily" {{ $data->Standing == 'Daily' ? 'checked' : ''}}>
	</td>
	<td align="center"><input type="radio" name="Standing" value="3x/wk" {{ $data->Standing == '3x/wk' ? 'checked' : ''}}>
	</td>
	<td align="center">
	<input type="radio" name="Standing" value="2x/wk"
	{{ $data->Standing == '2x/wk' ? 'checked' : ''}}></td>
	<td align="center"><input type="radio" name="Standing" value="1x/wk" {{ $data->Standing == '1x/wk' ? 'checked' : ''}}>
	</td>
	<td align="center"><input type="radio" name="Standing" value="2x/mo" {{ $data->Standing == '2x/mo' ? 'checked' : ''}}>
	</td>
	<td align="center"><input type="radio" name="Standing" value="1x/mo" {{ $data->Standing == '1x/mo' ? 'checked' : ''}}>
	</td>
	<td align="center"><input type="radio" name="Standing" value="Never" {{ $data->Standing == 'Never' ? 'checked' : ''}}>
	</td></tr>

	<tr><td>Sit_at_a_desk:</td>
		<td align="center">
		<input type="radio" name="Sit_at_a_desk" value="Daily" {{ $data->Sit_at_a_desk == 'Daily' ? 'checked' : ''}}></td>
		<td align="center"><input type="radio" name="Sit_at_a_desk" value="3x/wk" {{ $data->Sit_at_a_desk == '3x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Sit_at_a_desk" value="2x/wk" {{ $data->Sit_at_a_desk == '2x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Sit_at_a_desk" value="1x/wk" {{ $data->Sit_at_a_desk == '1x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Sit_at_a_desk" value="2x/mo" {{ $data->Sit_at_a_desk == '2x/mo' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Sit_at_a_desk" value="1x/mo" {{ $data->Sit_at_a_desk == '1x/mo' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Sit_at_a_desk" value="Never" {{ $data->Sit_at_a_desk == 'Never' ? 'checked' : ''}}></td></tr>

		<tr bgcolor="#f1f1f1"><td>Work_on_a_computer:</td><td align="center">
		<input type="radio" name="Work_on_a_computer" value="Daily" {{ $data->Work_on_a_computer == 'Daily' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Work_on_a_computer" value="3x/wk" {{ $data->Work_on_a_computer == '3x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Work_on_a_computer" value="2x/wk" {{ $data->Work_on_a_computer == '2x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Work_on_a_computer" value="1x/wk" {{ $data->Work_on_a_computer == '1x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Work_on_a_computer" value="2x/mo" {{ $data->Work_on_a_computer == '2x/mo' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Work_on_a_computer" value="1x/mo" {{ $data->Work_on_a_computer == '1x/mo' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Work_on_a_computer" value="Never" {{ $data->Work_on_a_computer == 'Never' ? 'checked' : ''}}></td></tr><tr><td>Work_on_a_phone:</td>
		<td align="center">
		<input type="radio" name="Work_on_a_phone" value="Daily" {{ $data->Work_on_a_phone == 'Daily' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Work_on_a_phone" value="3x/wk" {{ $data->Work_on_a_phone == '3x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Work_on_a_phone" value="2x/wk" {{ $data->Work_on_a_phone == '2x/wk' ? 'checked' : ''}}></td>
		<td align="center"><input type="radio" name="Work_on_a_phone" value="1x/wk" {{ $data->Work_on_a_phone == '1x/wk' ? 'checked' : ''}}></td>
		<td align="center"><input type="radio" name="Work_on_a_phone" value="2x/mo" {{ $data->Work_on_a_phone == '2x/mo' ? 'checked' : ''}}></td>
		<td align="center"><input type="radio" name="Work_on_a_phone" value="1x/mo" {{ $data->Work_on_a_phone == '1x/mo' ? 'checked' : ''}}></td>
		<td align="center"><input type="radio" name="Work_on_a_phone" value="Never" {{ $data->Work_on_a_phone == 'Never' ? 'checked' : ''}}></td></tr>
		<tr bgcolor="#f1f1f1"><td>Moderate Heavy labor:</td>
		<td align="center">
		<input type="radio" name="Moderate_Heavy_labor" value="Daily" {{ $data->Moderate_Heavy_labor == 'Daily' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Moderate_Heavy_labor" value="3x/wk" {{ $data->Moderate_Heavy_labor == '3x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Moderate_Heavy_labor" value="2x/wk" {{ $data->Moderate_Heavy_labor == '2x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Moderate_Heavy_labor" value="1x/wk" {{ $data->Moderate_Heavy_labor == '1x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Moderate_Heavy_labor" value="2x/mo" {{ $data->Moderate_Heavy_labor == '2x/mo' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Moderate_Heavy_labor" value="1x/mo" {{ $data->Moderate_Heavy_labor == '1x/mo' ? 'checked' : ''}}></td>
		<td align="center"><input type="radio" name="Moderate_Heavy_labor" value="Never" {{ $data->Moderate_Heavy_labor == 'Never' ? 'checked' : ''}}></td></tr>
		<tr><td>Stay at home:</td>
		<td align="center">
		<input type="radio" name="Stay_at_home" value="Daily" {{ $data->Stay_at_home == 'Daily' ? 'checked' : ''}}></td>
		<td align="center"><input type="radio" name="Stay_at_home" value="3x/wk" {{ $data->Stay_at_home == '3x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Stay_at_home" value="2x/wk" {{ $data->Stay_at_home == '2x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Stay_at_home" value="1x/wk" {{ $data->Stay_at_home == '1x/wk' ? 'checked' : ''}}></td>
		<td align="center">
		<input type="radio" name="Stay_at_home" value="2x/mo" {{ $data->Stay_at_home == '2x/mo' ? 'checked' : ''}}></td>
	   <td align="center"><input type="radio" name="Stay_at_home" value="1x/mo" {{ $data->Stay_at_home == '1x/mo' ? 'checked' : ''}}></td>
	   <td align="center">
	   <input type="radio" name="Stay_at_home" value="Never" {{ $data->Stay_at_home == 'Never' ? 'checked' : ''}}></td></tr>
	   <tr bgcolor="#f1f1f1"><td>Deliver packages:</td><td align="center">
	   <input type="radio" name="Deliver_packages" value="Daily" {{ $data->Deliver_packages == 'Daily' ? 'checked' : ''}}></td><td align="center">
	   <input type="radio" name="Deliver_packages" value="3x/wk" {{ $data->Deliver_packages == '3x/wk' ? 'checked' : ''}}></td>
	   <td align="center">
	   <input type="radio" name="Deliver_packages" value="2x/wk" {{ $data->Deliver_packages == '2x/wk' ? 'checked' : ''}}></td>
	   <td align="center">
	   <input type="radio" name="Deliver_packages" value="1x/wk" {{ $data->Deliver_packages == '1x/wk' ? 'checked' : ''}}></td>
	   <td align="center">
	   <input type="radio" name="Deliver_packages" value="2x/mo" {{ $data->Deliver_packages == '2x/mo' ? 'checked' : ''}}></td>
	   <td align="center">
	   <input type="radio" name="Deliver_packages" value="1x/mo" {{ $data->Deliver_packages == '1x/mo' ? 'checked' : ''}}></td>
	   <td align="center">
	   	<input type="radio" name="Deliver_packages" value="Never" {{ $data->Deliver_packages == 'Never' ? 'checked' : ''}}></td></tr><tr><td>Retired:</td><td align="center">
	   	<input type="radio" name="Retired" 
	   	value="Daily" {{ $data->Retired == 'Daily' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Retired" 
	   	value="3x/wk" {{ $data->Retired == '3x/wk' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Retired" 
	   	value="2x/wk" {{ $data->Retired == '2x/wk' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Retired" 
	   	value="1x/wk" {{ $data->Retired == '1x/wk' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Retired" 
	   	value="2x/mo" {{ $data->Retired == '2x/mo' ? 'checked' : ''}}></td>
	   	<td align="center"><input type="radio" name="Retired" value="1x/mo" {{ $data->Retired == '1x/mo' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Retired" 
	   	value="Never" {{ $data->Retired == 'Never' ? 'checked' : ''}}></td></tr>
	   	<tr bgcolor="#f1f1f1"><td colspan="8" style="border-top:2px solid #999494;border-bottom:2px solid #999494;"><b>Habits</b></td></tr><tr><td>Tobacco Smoke:</td><td align="center">
	   	<input type="radio" name="Tobacco_Smoke" value="Daily" {{ $data->Tobacco_Smoke == 'Daily' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Tobacco_Smoke" value="3x/wk" {{ $data->Tobacco_Smoke == '3x/wk' ? 'checked' : ''}}></td><td align="center">
	   	<input type="radio" name="Tobacco_Smoke" value="2x/wk" {{ $data->Tobacco_Smoke == '2x/wk' ? 'checked' : ''}}></td><td align="center">
	   	<input type="radio" name="Tobacco_Smoke" value="1x/wk" {{ $data->Tobacco_Smoke == '1x/wk' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Tobacco_Smoke" value="2x/mo" {{ $data->Tobacco_Smoke == '2x/mo' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Tobacco_Smoke" value="1x/mo" {{ $data->Tobacco_Smoke == '1x/mo' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Tobacco_Smoke" value="Never" {{ $data->Tobacco_Smoke == 'Never' ? 'checked' : ''}}></td></tr><tr bgcolor="#f1f1f1"><td>Alcoholic beverages:</td><td align="center">
	   	<input type="radio" name="Alcoholic_beverages" value="Daily" {{ $data->Alcoholic_beverages == 'Daily' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Alcoholic_beverages" value="3x/wk" {{ $data->Alcoholic_beverages == '3x/wk' ? 'checked' : ''}}>
	   </td>
	   	<td align="center">
	   	<input type="radio" name="Alcoholic_beverages" value="2x/wk" {{ $data->Alcoholic_beverages == '2x/wk' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Alcoholic_beverages" value="1x/wk" {{ $data->Alcoholic_beverages == '1x/wk' ? 'checked' : ''}}></td><td align="center">
	   	<input type="radio" name="Alcoholic_beverages" value="2x/mo" {{ $data->Alcoholic_beverages == '2x/mo' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Alcoholic_beverages" value="1x/mo" {{ $data->Alcoholic_beverages == '1x/mo' ? 'checked' : ''}}></td><td align="center">
	   	<input type="radio" name="Alcoholic_beverages" value="Never" {{ $data->Alcoholic_beverages == 'Never' ? 'checked' : ''}}></td></tr>
	   	<tr><td>Caffeine:</td><td align="center">
	   	<input type="radio" name="Caffeine" value="Daily" {{ $data->Caffeine == 'Daily' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Caffeine" 
	   	value="3x/wk" {{ $data->Caffeine == '3x/wk' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Caffeine" value="2x/wk" {{ $data->Caffeine == '2x/wk' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Caffeine" value="1x/wk" {{ $data->Caffeine == '1x/wk' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Caffeine" 
	   	value="2x/mo" {{ $data->Caffeine == '2x/mo' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Caffeine" value="1x/mo" {{ $data->Caffeine == '1x/mo' ? 'checked' : ''}}></td><td align="center">
	   	<input type="radio" name="Caffeine" value="Never" {{ $data->Caffeine == 'Never' ? 'checked' : ''}}></td></tr>
	   	<tr bgcolor="#f1f1f1"><td><b>Exercise:</b></td><td align="center">
	   	<input type="radio" name="Exercise" value="Daily" {{ $data->Exercise == 'Daily' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Exercise" 
	   	value="3x/wk" {{ $data->Exercise == '3x/wk' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Exercise" 
	   	value="2x/wk" {{ $data->Exercise == '2x/wk' ? 'checked' : ''}}></td><td align="center">
	   	<input type="radio" name="Exercise" 
	   	value="1x/wk" {{ $data->Exercise == '1x/wk' ? 'checked' : ''}}></td><td align="center">
	   	<input type="radio" name="Exercise" 
	   	value="2x/mo" {{ $data->Exercise == '2x/mo' ? 'checked' : ''}}></td>
	   	<td align="center">
	   	<input type="radio" name="Exercise" 
	   	value="1x/mo" {{ $data->Exercise == '1x/mo' ? 'checked' : ''}}></td><td align="center">
	   	<input type="radio" name="Exercise" value="Never" {{ $data->Exercise == 'Never' ? 'checked' : ''}}></td></tr><tr bgcolor="#d9d9d9"><td colspan="8" style="border-top:2px solid #999494;border-bottom:2px solid #999494;padding-top:10px;padding-bottom:10px" align="right"><input type="image" src="{{ asset('assets/demo2/nlimages/savebutton.png') }}" height="25"></td></tr>
</tbody></table></center></form>
    </td></tr></tbody></table></td></tr></tbody></table>
</form></body></html>