
var pointerstr=[];
var pointerdiv=[];
var spinalpointers=0;
var upperpointers=0;
var lowerpointers=0;

function tdcheck(id,check){
	if(check==null) check='';
	if(check==''||(check!=''&&document.getElementById(check+'select').value!='')){
	document.getElementById(id+'check').checked=!document.getElementById(id+'check').checked;
	if(document.getElementById(id+'check').checked){
		 if(document.getElementById(id+'img')) document.getElementById(id+'img').src='/assets/demo2/nlimages/chart/check.png'; }
	else{
		if(document.getElementById(id+'img')) document.getElementById(id+'img').src='/assets/demo2/nlimages/spacer.png'; }
	if(document.getElementById(id+'check').onchange) document.getElementById(id+'check').onchange();
	}
}
function populatepointer(id,pointerstr){
	var pointerdiv=document.getElementById('pointer'+id).innerHTML;
	if(pointerstr!='') document.getElementById('pointer'+id).innerHTML='<span style="color:green"><b>'+pointerstr+'</b></span><br>'+pointerdiv+'<img src="images/minuspointer.png" width="15" height="15" onclick="window.event.stopPropagation();removepointer(\''+id+'\',\''+text+'\',\'0\',\'procmod\')" class="no-print">';
}
var stptaps=['29200','29240','29260','29530','29540','29799','29260wrist','29520','29540foot'];
var stptapareas=['thoracic','shoulder','elbow','knee','ankle','lumbar','wrist','hip','foot'];
function selectpointer(id,text,i,category,vertical,color,override){
	if(id=='97124'){ text=procon.split('%SE%');text=text[0]+' ('+text[1]+')'; }
	if(id=='97026'){ text=modon.split('%SE%');text=text[0]+' ('+text[1]+')'; }
	if(document.getElementById('selectpointer'+id).value!="cancel"){
	var tempval=document.getElementById('pointer97110value').value;
	if(color==null) color='green';
	if(pointerstr[i]==null) pointerstr[i]='';
	if(category=='spinal') spinalpointers++;
	if(category=='upper'){ upperpointers++; }
	if(category=='lower') lowerpointers++;
	if(category=='stptap'){ if(id=='29240'||id=='29260'||id=='29260wrist') upperpointers++; if(id=='29530'||id=='29540'||id=='29520'||id=='29540foot') lowerpointers++; }
	/*if(spinalpointers>0) { document.getElementById('spinalbg').style.backgroundImage='url(nlimages/chart/bluebg.png)';
		} 
	if(upperpointers>0) {  document.getElementById('upperbg').style.backgroundImage='url(nlimages/chart/purplebg.png)';
		} 
	if(lowerpointers>0) { document.getElementById('lowerbg').style.backgroundImage='url(nlimages/chart/orangebg.png)';
		}*/ 
	if(pointerstr[i]!='') pointerstr[i]+=', ';
	pointerstr[i]+=document.getElementById('selectpointer'+id).value;
	if(pointerdiv[i]==null) { pointerdiv[i]=document.getElementById('pointer'+id).innerHTML;
	}
	if(vertical=='vertical'||vertical=='stptap'){
		document.getElementById('pointer'+id).innerHTML='<span style="color:'+color+'"><b>'+pointerstr[i]+'</b></span><br><br>'+pointerdiv[i].replace('onclick="window.event.stopPropagation();"',' onclick="window.event.stopPropagation();removepointer(\''+id+'\',\''+text+'\',\''+i+'\',\''+category+'\',\''+vertical+'\',null,\''+color+'\')"');
	}
	else if(vertical=='adj'||vertical=='spinal'){
		document.getElementById('pointerstr'+id).innerHTML='<span style="color:'+color+'"><b>'+pointerstr[i]+'</b></span>';
		document.getElementById('pointer'+id).innerHTML=pointerdiv[i].replace('onclick="window.event.stopPropagation();"',' onclick="window.event.stopPropagation();removepointer(\''+id+'\',\''+text+'\',\''+i+'\',\''+category+'\',\''+vertical+'\',null,\''+color+'\')"');
		setspinalheight();
	}
	else
		document.getElementById('pointer'+id).innerHTML=pointerdiv[i]+' <span style="color:'+color+'"><b>'+pointerstr[i]+'</b></span> <img src="images/minuspointer.png" width="15" height="15" onclick="window.event.stopPropagation();removepointer(\''+id+'\',\''+text+'\',\''+i+'\',\''+category+'\',\''+vertical+'\',null,\''+color+'\')" class="no-print">';
	document.getElementById('pointer'+id+'value').value=pointerstr[i];
	document.getElementById('pointer'+id).style.display='block';
	document.getElementById('select'+id).style.display='none';
		if(id=='29200'){ setspinalheight(); document.getElementById('thoradjdiv').style.height=document.getElementById('thoradjtd').offsetHeight; }
		if(id=='29240'||id=='29260'||id=='29260wrist'){ setupperheight(); setadjpointerheight(); }
		if(id=='29530'||id=='29540'||id=='29520'||id=='29540foot'){ setlowerheight(); setadjpointerheight(); }
		if(id.indexOf('98943')!=-1) setadjpointerheight();
	if(document.getElementById('showpointerdiv'+document.getElementById('selectpointer'+id).value).innerHTML=='')
		document.getElementById('showpointerdiv'+document.getElementById('selectpointer'+id).value).innerHTML=text;
	else
		document.getElementById('showpointerdiv'+document.getElementById('selectpointer'+id).value).innerHTML+=', '+text;
	if (document.getElementById('showpointers'+document.getElementById('selectpointer'+id).value).value=='')
		document.getElementById('showpointers'+document.getElementById('selectpointer'+id).value).value+=text;
	else
		document.getElementById('showpointers'+document.getElementById('selectpointer'+id).value).value+=', '+text;
if(id=='97110'&&tempval==document.getElementById('pointer97112value').value&&document.getElementById('97112check').checked&&!override){
		document.getElementById('selectpointer97112').value=document.getElementById('selectpointer'+id).value;
		selectpointer('97112','NEURO (97112)','2','procmod','vertical',null,'green');
	}
	document.getElementById(id+'check').checked=true;
	document.getElementById(id+'check').onchange();
	}
	else{
	document.getElementById('pointer'+id).style.display='block';
	document.getElementById('select'+id).style.display='none';
		if(id=='29200'){ setspinalheight();	document.getElementById('thoradjdiv').style.height=document.getElementById('thoradjtd').offsetHeight; }
		if(id=='29240'||id=='29260'||id=='29260wrist'){ setupperheight(); setadjpointerheight(); }
		if(id=='29530'||id=='29540'||id=='29520'||id=='29540foot'){ setlowerheight(); setadjpointerheight(); }
		if(id.indexOf('98943')!=-1) setadjpointerheight();
	}
}
function removepointer(id,text,i,category,vertical,letter,color){
	var tempval=document.getElementById('pointer97110value').value;
	var removedpointer;
	if(letter==null||letter=='')
		removedpointer=pointerstr[i].substring(pointerstr[i].length-1);
	else
		removedpointer=letter;
	pointerstr[i]=pointerstr[i].split(', ');
	for(var ind=0;ind<pointerstr[i].length;ind++){
		if(pointerstr[i][ind]==removedpointer){
			pointerstr[i].splice(ind,1);
		}
	}
	pointerstr[i]=pointerstr[i].join(', ');
	if(category=='spinal') spinalpointers--;
	if(category=='upper') upperpointers--;
	if(category=='lower') lowerpointers--;
	if(category=='stptap'){ if(id=='29240'||id=='29260'||id=='29260wrist') upperpointers--; if(id=='29530'||id=='29540'||id=='29520'||id=='29540foot') lowerpointers--; }
	/*if(spinalpointers==0&&spinalrows>0) {
document.getElementById('spinalbg').style.backgroundImage='url(nlimages/chart/yellowbg.png)';
  } 	
	/if(upperpointers==0&&upperrows>0) { 
	document.getElementById('upperbg').style.backgroundImage='url(nlimages/chart/yellowbg.png)';
		//document.getElementById('uppertd'+index).style.color="#000000"; }
		 } 	
	if(lowerpointers==0&&lowerrows>0) { 
	document.getElementById('lowerbg').style.backgroundImage='url(nlimages/chart/yellowbg.png)';
		} 	*/
	if(pointerstr[i]!=''){	
		var passletter; if(letter!=null) passletter="'"+letter+"'";
		if(vertical=='vertical'||vertical=='stptap'){
			document.getElementById('pointer'+id).innerHTML='<span style="color:'+color+'"><b>'+pointerstr[i]+'</b></span><br><br>'+pointerdiv[i].replace('onclick="window.event.stopPropagation();"',' onclick="window.event.stopPropagation();removepointer(\''+id+'\',\''+text+'\',\''+i+'\',\''+category+'\',\''+vertical+'\','+passletter+',\''+color+'\')"');
		}
		else if(vertical=='adj'||vertical=='spinal'){
			document.getElementById('pointerstr'+id).innerHTML='<span style="color:'+color+'"><b>'+pointerstr[i]+'</b></span>';
			document.getElementById('pointer'+id).innerHTML=pointerdiv[i].replace('onclick="window.event.stopPropagation();"',' onclick="window.event.stopPropagation();removepointer(\''+id+'\',\''+text+'\',\''+i+'\',\''+category+'\',\''+vertical+'\','+passletter+',\''+color+'\')"');
		}
		else
			document.getElementById('pointer'+id).innerHTML=pointerdiv[i]+' <span style="color:'+color+'"><b>'+pointerstr[i]+'</b></span> <img src="images/minuspointer.png" width="15" height="15" onclick="window.event.stopPropagation();removepointer(\''+id+'\',\''+text+'\',\''+i+'\',\''+category+'\',\''+vertical+'\','+passletter+',\''+color+'\')" class="no-print">';
	}
	else{
		if(document.getElementById('pointerstr'+id)) document.getElementById('pointerstr'+id).innerHTML='';
		document.getElementById('pointer'+id).innerHTML=pointerdiv[i];
	}
	document.getElementById('pointer'+id+'value').value=pointerstr[i];
	var div=document.getElementById('showpointerdiv'+removedpointer);
	var divarr=div.innerText.split(', ');
	for(var ind=0;ind<divarr.length;ind++){
		if(divarr[ind]==text)
			divarr.splice(ind,1);
	}
	divarr=divarr.join(', ');
	div.innerText=divarr;
	document.getElementById('showpointers'+removedpointer).value=divarr;
	document.getElementById(id+'check').onchange();
		if(id=='29200'){ setspinalheight(); }
		if(id=='29240'||id=='29260'||id=='29260wrist'){ setupperheight(); setadjpointerheight(); }
		if(id=='29530'||id=='29540'||id=='29520'||id=='29540foot'){ setlowerheight(); setadjpointerheight(); }
		if(id.indexOf('98943')!=-1) setadjpointerheight();
	if(id=='97110'&&document.getElementById('97112check').checked&&tempval==document.getElementById('pointer97112value').value){
		removepointer('97112','NEURO (97112)','2','procmod','vertical',letter,color);
	}
}
	
var spinalrows=0; var upperrows=0; var lowerrows=0;
function highlightrow(id,category){
	//if(category!='spinal'){
		var finish=4; if(category=='upper') finish=3;
		if(document.getElementById(id+'check').checked){
			if(category=='spinal') spinalrows++; if(category=='upper') upperrows++; if(category=='lower') lowerrows++;
			document.getElementById(id+'td').style.backgroundImage="url(/assets/demo2/nlimages/chart/pinkbg.png)";
			//if(document.getElementById(id+'lefttd')) document.getElementById(id+'lefttd').style.backgroundImage="url(nlimages/chart/pinkbg.png)";
			//if(document.getElementById(id+'righttd')) document.getElementById(id+'righttd').style.backgroundImage="url(nlimages/chart/pinkbg.png)";
			if((category=='spinal'&&spinalrows>0&&spinalpointers==0)||(category=='upper'&&upperrows>0&&upperpointers==0)||(category=='lower'&&lowerrows>0&&lowerpointers==0)){
				//document.getElementById(category+'bg').style.backgroundImage='url(nlimages/chart/yellowbg.png)';
			}
		}
		else{
			if(category=='spinal') spinalrows--; if(category=='upper') upperrows--; if(category=='lower') lowerrows--;
				var bg=''; if(category=='spinal') bg='bluebg'; if(category=='upper') bg='purplebg'; if(category=='lower') bg='orangebg';
			document.getElementById(id+'td').style.backgroundImage="url(/assets/demo2/nlimages/chart/"+bg+".png)";
			//if(document.getElementById(id+'lefttd')) document.getElementById(id+'lefttd').style.backgroundImage="url(nlimages/chart/"+bg+".png)";
			//if(document.getElementById(id+'righttd')) document.getElementById(id+'righttd').style.backgroundImage="url(nlimages/chart/"+bg+".png)";
			if((category=='spinal'&&spinalrows==0)||(category=='upper'&&upperrows==0)||(category=='lower'&&lowerrows==0)){
				var bg=''; if(category=='spinal') bg='bluebg'; if(category=='upper') bg='purplebg'; if(category=='lower') bg='orangebg';
				//document.getElementById(category+'bg').style.backgroundImage='url(nlimages/chart/'+bg+'.png' ;
			}
		}
	//}
}
function highlightboxes(id,cat){
	if(cat=='stptap'){
		var complete=true;
		for(var i=0;i<stptaps.length;i++){	
			if(document.getElementById(stptaps[i]+'check').checked&&document.getElementById('pointer'+stptaps[i]+'value').value=='') complete=false;
		}
		if(!complete){
			document.getElementById('stptaptd').style.backgroundImage='url(/assets/demo2/nlimages/chart/yellowbg.png)';
			document.getElementById('stptaptd').style.color='black';
		}
		else{
			document.getElementById('stptaptd').style.backgroundImage='url(/assets/demo2/nlimages/chart/blackbg.png)';
			document.getElementById('stptaptd').style.color='white';
		}
	}		
		if(document.getElementById(id+'check').checked&&document.getElementById('pointer'+id+'value').value==''){
			document.getElementById(id+cat+'td').style.backgroundImage='url(/assets/demo2/nlimages/chart/yellowbg.png)';
			document.getElementById(id+cat+'td').style.color='black';
		}
		else if(document.getElementById(id+'check').checked&&document.getElementById('pointer'+id+'value').value!=''){
			document.getElementById(id+cat+'td').style.backgroundImage='url(/assets/demo2/nlimages/chart/pinkbg.png)';
			if(cat=='stptap') document.getElementById(id+'stptaptd').style.color='black';
		}
		else{
			var bg='graybg';if(cat=='stptap'){
			bg='blackbg'; }
			if(id=='98943shoulder'||id=='98943elbow'||id=='98943wrist') bg='purplebg';
			if(id=='98943hip'||id=='98943knee'||id=='98943ankle'||id=='98943foot') bg='orangebg';
			if(id=='98940'||id=='98941') document.getElementById(id+cat+'td').style.backgroundImage='';
			else document.getElementById(id+cat+'td').style.backgroundImage='url(/assets/demo2/nlimages/chart/'+bg+'.png)';
			if(bg=='blackbg') document.getElementById(id+cat+'td').style.color='white';
		}
}
function highlightcolumns(id,mp){
	if(document.getElementById(id+'check').checked){
		if(document.getElementById(mp+'select').value=='')
			document.getElementById(mp+'column1').style.backgroundImage='url(/assets/demo2/nlimages/chart/yellowbg.png)';
		else
			document.getElementById(mp+'column1').style.backgroundImage='url(/assets/demo2/nlimages/chart/pinkbg.png)';
		if(document.getElementById('pointer'+id+'value').value==''){
			document.getElementById(mp+'column0').style.backgroundImage='url(/assets/demo2/nlimages/chart/yellowbg.png)';
			document.getElementById(mp+'header').style.backgroundImage='url(/assets/demo2/nlimages/chart/yellowbg.png)';
		}
		else{
			document.getElementById(mp+'column0').style.backgroundImage='url(/assets/demo2/nlimages/chart/pinkbg.png)';
			document.getElementById(mp+'header').style.backgroundImage='url(/assets/demo2/nlimages/chart/pinkbg.png)';
		}
		//for(var i=0;document.getElementById(mp+'column'+i)!=null;i++){
			//if(i!=1) document.getElementById(mp+'column'+i).style.backgroundImage='url(nlimages/chart/pinkbg.png)';
		//}
	}
	else{
			document.getElementById(mp+'header').style.backgroundImage='url(/assets/demo2/nlimages/chart/graybg.png)';
			document.getElementById(mp+'column0').style.backgroundImage='url(/assets/demo2/nlimages/chart/graybg.png)';
			document.getElementById(mp+'column1').style.backgroundImage='url(/assets/demo2/nlimages/chart/graybg.png)';
			document.getElementById(mp+'column2').style.backgroundImage='url(/assets/demo2/nlimages/chart/graybg.png)';
			document.getElementById(mp+'column3').style.backgroundImage='url(/assets/demo2/nlimages/chart/graybg.png)';
		//for(var i=0;document.getElementById(mp+'column'+i)!=null;i++){
		//	document.getElementById(mp+'column'+i).style.backgroundImage='url(nlimages/chart/graybg.png)';
		//}
	}
}
var theareas=['cervical','thoracic','lumbar','si','shoulder','elbow','wrist','hip','knee','ankle','foot'];
function showchecks(id,mp,code){
	if(document.getElementById(id).value!=''){
		if(document.getElementById(code+'check').checked){
			document.getElementById(mp+'column1').style.backgroundImage='url(/assets/demo2/nlimages/chart/pinkbg.png)';
			document.getElementById(mp+'column2').style.backgroundImage='url(/assets/demo2/nlimages/chart/pinkbg.png)';
			if(mp=='te'||mp=='neure')
			document.getElementById(mp+'column3').style.backgroundImage='url(/assets/demo2/nlimages/chart/pinkbg.png)';
			for(var i=4;document.getElementById(mp+'column'+i)!=null;i++){
				//window.alert(mp+'unitareacheck'+(i-4));
				if(document.getElementById(theareas[i-4]+mp+'unitareacheck').checked)
					document.getElementById(mp+'column'+i).style.backgroundImage='url(/assets/demo2/nlimages/chart/pinkbg.png)';
				else
					document.getElementById(mp+'column'+i).style.backgroundImage='url(/assets/demo2/nlimages/chart/graybg.png)';
			}
		}
		for(var i=0;i<11;i++){
			document.getElementById(i+'%SE%'+mp).style.display="block";
		}
		if(document.getElementById(id).value=='1')
			document.getElementById(mp+'time').innerText='15';
		else if(document.getElementById(id).value=='2')
			document.getElementById(mp+'time').innerText='30';
		else
			document.getElementById(mp+'time').innerText='';
		if(document.getElementById(mp+'plus')) document.getElementById(mp+'plus').style.display='block';
	}
	else{
		if(document.getElementById(code+'check').checked){
			document.getElementById(mp+'column1').style.backgroundImage='url(/assets/demo2/nlimages/chart/yellowbg.png)';
			//document.getElementById(mp+'column2').style.backgroundImage='url(nlimages/chart/graybg.png)';
			//document.getElementById(mp+'column3').style.backgroundImage='url(nlimages/chart/graybg.png)';
			for(var i=2;document.getElementById(mp+'column'+i)!=null;i++){
				document.getElementById(mp+'column'+i).style.backgroundImage='url(/assets/demo2/nlimages/chart/graybg.png)';
			}
		}
		for(var i=0;i<11;i++){
			document.getElementById(i+'%SE%'+mp).style.display="none";
		}
		document.getElementById(mp+'time').innerText='';
		if(document.getElementById(mp+'plus')) document.getElementById(mp+'plus').style.display='none';
	}
}
var viewportwidth;
var viewportheight;
function calculatewindow(){
	 if (typeof window.innerWidth != 'undefined')
	 {
		  viewportwidth = window.innerWidth,
		  viewportheight = window.innerHeight
	 }
	 else if (typeof document.documentElement != 'undefined'
		 && typeof document.documentElement.clientWidth !=
		 'undefined' && document.documentElement.clientWidth != 0)
	 {
		   viewportwidth = document.documentElement.clientWidth,
		   viewportheight = document.documentElement.clientHeight
	 }
	 else
	 {
		   viewportwidth = document.getElementsByTagName('body')[0].clientWidth,
		   viewportheight = document.getElementsByTagName('body')[0].clientHeight
	 }
}
function adjustdiv(){
	calculatewindow();
	var divkeys=Array('te','neure','mass','mr','trac','es','us','inflz')
	for(var i=0;i<divkeys.length;i++){
		if(document.getElementById(divkeys[i]+'exercisediv')){
			document.getElementById(divkeys[i]+'exercisediv').style.left=(viewportwidth/2-600)+'px';
			document.getElementById(divkeys[i]+'exercisediv').style.top=(viewportheight/2+400)+'px';
		}
	}
}
function removechild(){
	document.body.removeChild(document.getElementById("newDiv"));
}

function creatediv(type,file,path,width,height,isdir){
	newDiv = document.createElement("div");
	newDiv.id="newDiv";
	if(type=="delete"){
		newDiv.innerHTML = "<form name=deleteform action=delete.php method=post><span class=content><center>"+
			"<input type=hidden name=path value=\""+path+"\">"+
			"<input type=hidden name=forsure value=true>"+
			"<br>Are you sure you want to delete:<br><br>"+file+" ?<br><br>"+
			"<a href=\"javascript:deleteform.submit();\" class=link>Yes</a><br><br>"+
			"<a href=\"javascript:removechild();\" class=link>No</a></center></span></form>";
	}
	if(type=="rename"){
		innerh = "<form name=renameform action=rename.php method=post><span class=content><center>"+
			"<input type=hidden name=path value=\""+path+"\">"+
			"<br>Enter the new name for "+file;
		if(!isdir)
			innerh+=",<br>including the extension:";
		innerh+="<br><br><input name=newname class=nfwtextbox value=\""+file+"\" size=30><br><br><input type=image src=../images/buttons/submit.jpg>";
		newDiv.innerHTML = innerh;
	}
	newDiv.style.position='absolute';
	screenwidth=screen.width;
	screenheight=screen.height;
	newDiv.style.left=(screenwidth/2-width/2)+'px';
	newDiv.style.top=(screenheight/2-height/2)+'px';
	newDiv.style.width=width+'px';
	newDiv.style.height=height+'px';
	newDiv.style.border='2px solid #004389';
	newDiv.style.background='#C5E2FF';
//	newDiv.style.border-left: 1px solid red";
	// add the newly created element and it's content into the DOM
	//my_div = document.getElementById("upload");
	document.body.appendChild(newDiv);
}