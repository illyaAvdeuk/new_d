<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$te=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($te){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$Jd=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($Jd){$$b=$Jd;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAETMzEREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD///8BwP//AYB//wGAf/8BgH//AYB//wGAf/8BgH//AYAB/wGAAf8BgAH/AcAA/wH+AP8B/wD/Af+B/wH///8B");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css");?>*{margin:0;padding:0}body{font:13px/18px Helvetica,Arial,sans-serif;background:#fff;color:#333}/* generic */
a,a:visited{color:#06c;text-decoration:none;border-bottom:1px dotted;}a:hover{border-bottom:1px solid #06c;background:#06c;color:#fff}p{padding-bottom:4px;margin-bottom:4px}h1{font-size:18px;font-weight:bold;padding-bottom:0px;height:40px;padding:0 0 8px 0;color:#666;border:0}h2{font:32px Georgia,serif;padding:10px 0 8px;margin:0;background:transparent;border:0;color:#333}h3{font-size:18px;font-weight:bold;padding:4px 0;margin:0}form#form{overflow:hidden}fieldset{float:left;min-height:48px;padding:0 4px 4px 4px;border:1px solid #ccc;margin-bottom:8px;margin-right:4px}fieldset div{margin-top:4px}input,select,textarea{font:13px Helvetica,Arial,sans-serif;color:#555;border:1px solid #999;padding:3px}input[name=query]{min-width:500px;}input[name=search]{min-widtH:50px;}input[type=submit]{background:#ccc;padding:2px;cursor:pointer;color:#333}input[type=submit]:hover{background:#bbb}input[type=image],input[type=checkbox]{border:0;padding:0}label input[type=checkbox],td input[type=radio],td span select{margin-right:4px}select{border:1px solid #999;padding:2px}fieldset select{margin-right:4px}option{padding:0 5px}optgroup{font-size:11px}code{background:#eee;padding:2px 4px;font:16px/20px Courier,monospace}code a:hover{background:transparent}table{margin:4px 0 8px;border:1px solid #ccc;font-size:inherit}tbody tr:hover td,tbody tr:hover th{background:#eee}thead tr:hover td,thead tr:hover th{background:#ddd}th,td{text-align:left;padding:2px 4px;vertical-align:top;font-weight:normal;border:1px dotted #ccc;border-width:0 0 0 1px;margin:0;background:inherit}thead th,thead td{white-space:nowrap;font-weight:bold;background:#ddd;border-color:#ddd}th:first-child,td:first-child{border-color:transparent;white-space:nowrap}td[align=right]{text-align:right}table code{font-size:13px;line-height:18px}.hidden{display:none}.error,.message{padding:0;background:transparent;font-weight:bold}.error{color:#c00}.message{color:#090}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\9;}/* specific */
#content{margin:0 0 0 320px;padding:50px 20px 40px 0;height:100%}#content:after{content:'.';clear:both;height:0;overflow:hidden;display:block}#lang{background:#333;color:#fff;position:fixed;top:0;left:0;width:100%;padding:0 20px 0 40px;line-height:40px;height:40px}#lang select{border-color:#333}#menu{background:#eee;position:fixed;top:60px;bottom:20px;overflow:auto;left:20px;width:240px;padding:10px 15px;border:5px solid #ccc;margin:0}#menu a{color:#333;margin-right:4px}#menu a:hover{background:#333;color:#fff;border-color:#333}#menu a.h1,#menu a.h1:hover{display:block;height:0;width:175px;padding:40px 0 0 0;overflow:hidden;float:left;border:0;margin:0;outline:0;background:url(http://www.bradezone.com/random/adminer_logo.gif) no-repeat;line-height:32px}#menu p{white-space:nowrap;border:0;padding:0 0 4px 0;margin:0 0 4px 0}#breadcrumb{background:#333;color:#fff;position:fixed;top:0;left:320px;width:100%;line-height:40px;padding:0;z-index:1;margin:0}#breadcrumb a{color:#ff9}#breadcrumb a:hover{background:transparent;color:#ff9;border-color:#ff9}#schema{margin-left:60px;position:relative;}/*#schema .table{padding:4px 8px;background:#f3f3f3}*/
#schema .table{border:1px solid silver;cursor:move;position:absolute;padding:4px 8px;background:#f3f3f3}#schema .references{position:absolute;}/* IE hacks */
*+html th:first-child,*+html td:first-child{border-color:inherit;white-space:inherit}* html #lang,* html #menu,* html #breadcrumb{position:absolute}* html #lang{padding-top:10px;height:30px}* html form#form{height:100%}<?php
}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript");?>
document.body.className='js';function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days,params){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date+(params||'');}
function verifyVersion(protocol){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=protocol+'://www.adminer.org/version.php';document.body.appendChild(script);}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;}}}
function formUncheck(id){document.getElementById(id).checked=false;}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){return;}
el=el.parentNode;}
el=el.firstChild.firstChild;el.click&&el.click();el.onclick&&el.onclick();}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function selectAddRow(field){var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[[0-9]+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[[0-9]+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function selectDblClick(td,event,text){var pos=event.rangeOffset;var value=(td.firstChild.firstChild?td.firstChild.firstChild.data:td.firstChild.data);var input=document.createElement(text?'textarea':'input');input.name=td.id;input.value=(value=='\u00A0'||td.getElementsByTagName('i').length?'':value);input.style.width=(td.clientWidth-14)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.x,event.y);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveStart('character',pos);range.select();}
td.ondblclick=function(){};}
function bodyLoad(version,protocol){var jushRoot=protocol + '://www.adminer.org/static/';var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank"';jush.urls.sql[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';jush.urls.sql_sqlset=jush.urls.sql[0];jush.urls.sqlset[0]=jush.urls.sql[0];jush.urls.sqlstatus[0]=jush.urls.sql[0];jush.urls.pgsql[0]='http://www.postgresql.org/docs/'+version+'/static/$key';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0];jush.urls.pgsqlset[0]='http://www.postgresql.org/docs/'+version+'/static/runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('pre',0);jush.highlight_tag('code');}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}
function selectValue(select){return select.value||select.options[select.selectedIndex].text;}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
var added='.',rowCount;function reEscape(s){return s.replace(/[\[\]\\^$*+?.(){|}]/,'\\$&');}
function idfEscape(s){return'`'+s.replace(/`/,'``')+'`';}
function editingNameChange(field){var name=field.name.substr(0,field.name.length-7);var type=formField(field.form,name+'[type]');var opts=type.options;var table=reEscape(field.value);var column='';var match;if((match=/(.+)_(.+)/.exec(table))||(match=/(.*[a-z])([A-Z].*)/.exec(table))){table=match[1];column=match[2];}
var plural='(?:e?s)?';var tabCol=table+plural+'_?'+column;var re=new RegExp('(^'+idfEscape(table+plural)+'\\.'+idfEscape(column)+'$'
+'|^'+idfEscape(tabCol)+'\\.'
+'|^'+idfEscape(column+plural)+'\\.'+idfEscape(table)+'$'
+')|\\.'+idfEscape(tabCol)+'$','i');var candidate;for(var i=opts.length;i--;){if(opts[i].value.substr(0,1)!='`'){if(i==opts.length-2&&candidate&&!match[1]&&name=='fields[1]'){return false;}
break;}
if(match=re.exec(opts[i].value)){if(candidate){return false;}
candidate=i;}}
if(candidate){type.selectedIndex=candidate;type.onchange();}}
function editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return false;}
var match=/([0-9]+)(\.[0-9]+)?/.exec(button.name);var x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var row=button.parentNode.parentNode;var row2=row.cloneNode(true);var tags=row.getElementsByTagName('select');var tags2=row2.getElementsByTagName('select');for(var i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}
tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var input=tags2[0];for(var i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}
tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}
if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}
tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}
added+='0';rowCount++;return true;}
function editingRemoveRow(button){var field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);button.parentNode.parentNode.style.display='none';return true;}
var lastType='';function editingTypeChange(type){var name=type.name.substr(0,type.name.length-6);var text=selectValue(type);for(var i=0;i<type.form.elements.length;i++){var el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}
if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}
if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}
if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}}}
function editingLengthFocus(field){var td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var edit=document.getElementById('enum-edit');var val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}
function editingLengthBlur(edit){var field=edit.parentNode.firstChild;var val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}
function columnShow(checked,column){var trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}
function partitionByChange(el){var partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}
function partitionNameChange(el){var row=el.parentNode.parentNode.cloneNode(true);row.firstChild.firstChild.value='';el.parentNode.parentNode.parentNode.appendChild(row);el.onchange=function(){};}
function foreignAddRow(field){var row=field.parentNode.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}
field.parentNode.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function indexesAddRow(field){var row=field.parentNode.parentNode.cloneNode(true);var spans=row.getElementsByTagName('span');for(var i=0;i<spans.length-1;i++){row.removeChild(spans[i]);}
var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[[0-9]+/,'$&1');selects[i].selectedIndex=0;}
var input=row.getElementsByTagName('input')[0];input.name=input.name.replace(/indexes\[[0-9]+/,'$&1');input.value='';field.parentNode.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function indexesAddColumn(field){var column=field.parentNode.cloneNode(true);var select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[[0-9]+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[[0-9]+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange=function(){};}
var that,x,y,em,tablePos;function schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function schemaMousemove(ev){if(that!==undefined){ev=ev||event;var left=(ev.clientX-x)/em;var top=(ev.clientY-y)/em;var divs=that.getElementsByTagName('div');var lineSet={};for(var i=0;i<divs.length;i++){if(divs[i].className=='references'){var div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var left1=-1;var isTop=true;var id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}
if(!lineSet[id]){var line=document.getElementById(divs[i].id.replace(/^....(.+)-[0-9]+$/,'refl$1'));var shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/em+'em';}
if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/em+'em';}
lineSet[id]=true;}}}
that.style.left=left+'em';that.style.top=top+'em';}}
function schemaMouseup(ev){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/em,(ev.clientX-x)/em];that=undefined;var s='';for(var key in tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/10000+'x'+Math.round(tablePos[key][1]*10000)/10000;}
cookie('adminer_schema='+encodeURIComponent(s.substr(1)),30,'; path="'+location.pathname+location.search+'"');}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$c;return$c;}function
idf_unescape($I){$nb=substr($I,-1);return
str_replace($nb.$nb,$nb,substr($I,1,-1));}function
escape_string($b){global$c;return
substr($c->quote($b),1,-1);}function
bracket_escape($I,$Xe=false){static$ee=array(':'=>':1',']'=>':2','['=>':3');return
strtr($I,($Xe?array_flip($ee):$ee));}function
h($G){return
htmlspecialchars($G,ENT_QUOTES);}function
nbsp($G){return(trim($G)!=""?h($G):"&nbsp;");}function
nl_br($G){return
str_replace("\n","<br>",$G);}function
checkbox($h,$p,$Aa,$he="",$ce=""){static$T=0;$T++;$e="<input type='checkbox'".($h?" name='$h' value='".h($p)."'":"").($Aa?" checked":"").($ce?" onclick=\"$ce\"":"")." id='checkbox-$T'>";return($he!=""?"<label for='checkbox-$T'>$e".h($he)."</label>":$e);}function
optionlist($Pc,$Ve=null,$Nd=false){$e="";foreach($Pc
as$Fa=>$u){if(is_array($u)){$e.='<optgroup label="'.h($Fa).'">';}foreach((is_array($u)?$u:array($Fa=>$u))as$g=>$b){$e.='<option'.($Nd||is_string($g)?' value="'.h($g).'"':'').(($Nd||is_string($g)?(string)$g:$b)===$Ve?' selected':'').'>'.h($b);}if(is_array($u)){$e.='</optgroup>';}}return$e;}function
html_select($h,$Pc,$p="",$Hb=true){if($Hb){return"<select name='".h($h)."'".(is_string($Hb)?" onchange=\"$Hb\"":"").">".optionlist($Pc,$p)."</select>";}$e="";foreach($Pc
as$g=>$b){$e.="<label><input type='radio' name='".h($h)."' value='".h($g)."'".($g==$p?" checked":"").">".h($b)."</label>";}return$e;}function
textarea($h,$p,$za=10,$ab=80){echo"<textarea name='$h' rows='$za' cols='$ab' style='width: 98%;' spellcheck='false'>".h($p)."</textarea>";}function
ini_bool($Cf){$b=ini_get($Cf);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
get_vals($i,$L=0){global$c;$e=array();$f=$c->query($i);if(is_object($f)){while($a=$f->fetch_row()){$e[]=$a[$L];}}return$e;}function
get_key_vals($i,$J=null){global$c;if(!is_object($J)){$J=$c;}$e=array();$f=$J->query($i);while($a=$f->fetch_row()){$e[$a[0]]=$a[1];}return$e;}function
unique_array($a,$F){foreach($F
as$x){if(ereg("PRIMARY|UNIQUE",$x["type"])){$e=array();foreach($x["columns"]as$g){if(!isset($a[$g])){continue
2;}$e[$g]=$a[$g];}return$e;}}$e=array();foreach($a
as$g=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$g)){$e[$g]=$b;}}return$e;}function
where($t){$e=array();foreach((array)$t["where"]as$g=>$b){$e[]=idf_escape(bracket_escape($g,1)).(ereg('\\.',$b)?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$t["null"]as$g){$e[]=idf_escape($g)." IS NULL";}return
implode(" AND ",$e);}function
where_check($b){parse_str($b,$wf);return
where($wf);}function
where_link($k,$L,$p,$vf="="){return"&where%5B$k%5D%5Bcol%5D=".urlencode($L)."&where%5B$k%5D%5Bop%5D=".urlencode($vf)."&where%5B$k%5D%5Bval%5D=".urlencode($p);}function
cookie($h,$p){$sc=array($h,(ereg("\n",$p)?"":$p),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off"));if(version_compare(PHP_VERSION,'5.2.0')>=0){$sc[]=true;}return
call_user_func_array('setcookie',$sc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($g){return$_SESSION[$g][DRIVER][SERVER][$_GET["username"]];}function
set_session($g,$b){$_SESSION[$g][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Mb,$A,$M){global$ca;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ca))."|username|".session_name()),$m);return"$m[1]?".(SID&&!$_COOKIE?SID."&":"").($Mb!="server"||$A!=""?urlencode($Mb)."=".urlencode($A)."&":"")."username=".urlencode($M).($m[2]?"&$m[2]":"");}function
redirect($ia,$ua=null){if(isset($ua)){restart_session();$_SESSION["messages"][]=$ua;}if(isset($ia)){header("Location: ".($ia!=""?$ia:"."));exit;}}function
query_redirect($i,$ia,$ua,$Tc=true,$sf=true,$Fd=false){global$c,$n,$q;if($sf){$Fd=!$c->query($i);}$cd="";if($i){$cd=$q->messageQuery($i);}if($Fd){$n=error().$cd;return
false;}if($Tc){redirect($ia,$ua.$cd);}return
true;}function
queries($i=null){global$c;static$la=array();if(!isset($i)){return
implode(";\n",$la);}$la[]=$i;return$c->query($i);}function
apply_queries($i,$D,$yf='table'){foreach($D
as$j){if(!queries("$i ".$yf($j))){return
false;}}return
true;}function
queries_redirect($ia,$ua,$Tc){return
query_redirect(queries(),$ia,$ua,$Tc,false,!$Tc);}function
remove_from_uri($Ta=""){return
substr(preg_replace("~(?<=[?&])($Ta".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($aa,$_f){return" ".($aa==$_f?$aa+1:'<a href="'.h(remove_from_uri("page").($aa?"&page=$aa":"")).'">'.($aa+1)."</a>");}function
get_file($g,$Wd=false){$qa=$_FILES[$g];if(!$qa||$qa["error"]){return$qa["error"];}return
file_get_contents($Wd&&ereg('\\.gz$',$qa["name"])?"compress.zlib://$qa[tmp_name]":($Wd&&ereg('\\.bz2$',$qa["name"])?"compress.bzip2://$qa[tmp_name]":$qa["tmp_name"]));}function
upload_error($n){$de=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($n?lang(0).($de?" ".lang(1,$de):""):lang(2));}function
odd($e=' class="odd"'){static$k=0;if(!$e){$k=-1;}return($k++%
2?$e:'');}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($G,$S=80,$if=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$S})($)?)u",$G,$m)){preg_match("(^([\t\r\n -~]{0,$S})($)?)",$G,$m);}return
h($m[1]).$if.(isset($m[2])?"":"<em>...</em>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($eb,$hf=array()){while(list($g,$b)=each($eb)){if(is_array($b)){foreach($b
as$Fa=>$u){$eb[$g."[$Fa]"]=$u;}}elseif(!in_array($g,$hf)){echo'<input type="hidden" name="'.h($g).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($j){$e=array();foreach(foreign_keys($j)as$B){foreach($B["source"]as$b){$e[$b][]=$B;}}return$e;}function
enum_input($E,$h,$d,$p){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ka);foreach($ka[1]as$k=>$b){$b=stripcslashes(str_replace("''","'",$b));$Aa=(is_int($p)?$p==$k+1:(is_array($p)?in_array($k+1,$p):$p===$b));echo" <label><input type='$E' name='$h' value='".($k+1)."'".($Aa?' checked':'').'>'.h($b).'</label>';}}function
input($d,$p,$N){global$ga,$q,$C;$h=h(bracket_escape($d["field"]));echo"<td class='function'>";$Y=(isset($_GET["select"])?array("orig"=>lang(3)):array())+$q->editFunctions($d);if($d["type"]=="enum"){echo
nbsp($Y[""])."<td>".($Y["orig"]?"<label><input type='radio' name='fields[$h]' value='-1' checked><em>$Y[orig]</em></label> ":""),$q->editInput($_GET["edit"],$d," name='fields[$h]'",$p);enum_input("radio","fields[$h]",$d,$p);}else{$cb=0;foreach($Y
as$g=>$b){if($g===""||!$b){break;}$cb++;}$Hb=($cb?" onchange=\"var f = this.form['function[".addcslashes($h,"\r\n'\\")."]']; if ($cb > f.selectedIndex) f.selectedIndex = $cb;\"":"");$Zb=" name='fields[$h]'$Hb";echo(count($Y)>1?html_select("function[$h]",$Y,!isset($N)||in_array($N,$Y)?$N:""):nbsp(reset($Y))).'<td>';$fe=$q->editInput($_GET["edit"],$d,$Zb,$p);if($fe!=""){echo$fe;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ka);foreach($ka[1]as$k=>$b){$b=stripcslashes(str_replace("''","'",$b));$Aa=(is_int($p)?($p>>$k)&1:in_array($b,explode(",",$p),true));echo" <label><input type='checkbox' name='fields[$h][$k]' value='".(1<<$k)."'".($Aa?' checked':'')."$Hb>".h($b).'</label>';}}elseif(ereg('binary|blob|bytea',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$h'$Hb>";}elseif(ereg('text|blob',$d["type"])){echo"<textarea ".($C!="sqlite"||ereg("\n",$p)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Zb>".h($p).'</textarea>';}else{$Ld=(!ereg('int',$d["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$d["length"],$m)?($m[1]+($m[3]?1:0)+($m[2]&&!$d["unsigned"]?1:0)):($ga[$d["type"]]?$ga[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($p)."'".($Ld?" maxlength='$Ld'":"").(ereg('char',$d["type"])&&$d["length"]>20?" size='40'":"")."$Zb>";}}}function
process_input($d){global$c,$q;$I=bracket_escape($d["field"]);$N=$_POST["function"][$I];$p=$_POST["fields"][$I];if($d["type"]=="enum"){if($p==-1){return
false;}if($p==""){return"NULL";}return
intval($p);}if($d["auto_increment"]&&$p==""){return
null;}if($N=="orig"){return
false;}if($N=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$p);}if(ereg('binary|blob|bytea',$d["type"])&&ini_bool("file_uploads")){$qa=get_file("fields-$I");if(!is_string($qa)){return
false;}return$c->quote($qa);}return$q->processInput($d,$p,$N);}function
search_tables(){global$q,$c;$oa=false;foreach(table_status()as$j=>$R){$h=$q->tableName($R);if(isset($R["Engine"])&&$h!=""&&(!$_POST["tables"]||in_array($j,$_POST["tables"]))){$f=$c->query("SELECT".limit("1 FROM ".table($j)," WHERE ".implode(" AND ",$q->selectSearchProcess(fields($j),array())),1));if($f->num_rows){if(!$oa){echo"<ul>\n";$oa=true;}echo"<li><a href='".h(ME."select=".urlencode($j)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($h)."</a>\n";}}}echo($oa?"</ul>":"<p class='message'>".lang(4))."\n";}function
dump_csv($a){foreach($a
as$g=>$b){if(preg_match("~[\"\n,;]~",$b)||$b===""){$a[$g]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$a)."\n";}function
apply_sql_function($N,$L){return($N?($N=="unixepoch"?"DATETIME($L, '$N')":($N=="count distinct"?"COUNT(DISTINCT ":strtoupper("$N("))."$L)"):$L);}function
password_file(){$Oc=ini_get("upload_tmp_dir");if(!$Oc){if(function_exists('sys_get_temp_dir')){$Oc=sys_get_temp_dir();}else{$Z=@tempnam("","");if(!$Z){return
false;}$Oc=dirname($Z);unlink($Z);}}$Z="$Oc/adminer.key";$e=@file_get_contents($Z);if($e){return$e;}$Ea=@fopen($Z,"w");if($Ea){$e=md5(uniqid(mt_rand(),true));fwrite($Ea,$e);fclose($Ea);}return$e;}function
is_email($pf){$_e='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$vc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$fa="$_e+(\\.$_e+)*@($vc?\\.)+$vc";return
preg_match("(^$fa(,\\s*$fa)*\$)i",$pf);}function
is_url($G){$vc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return
preg_match("~^https?://($vc?\\.)+$vc(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$G);}function
print_fieldset($T,$lf,$of=false){echo"<fieldset><legend><a href='#fieldset-$T' onclick=\"return !toggle('fieldset-$T');\">$lf</a></legend><div id='fieldset-$T'".($of?"":" class='hidden'").">\n";}function
bold($G,$kf){return($kf?"<b>$G</b>":$G);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}@ini_set("session.use_trans_sid",false);if(!ini_bool("session.auto_start")){session_name("adminer_sid");$sc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off"));if(version_compare(PHP_VERSION,'5.2.0')>=0){$sc[]=true;}call_user_func_array('session_set_cookie_params',$sc);session_start();}if(get_magic_quotes_gpc()){$eb=array(&$_GET,&$_POST,&$_COOKIE);while(list($g,$b)=each($eb)){foreach($b
as$Fa=>$u){unset($eb[$g][$Fa]);if(is_array($u)){$eb[$g][stripslashes($Fa)]=$u;$eb[]=&$eb[$g][stripslashes($Fa)];}else{$eb[$g][stripslashes($Fa)]=($te?$u:stripslashes($u));}}}unset($eb);}if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);$Yb=array('en'=>'English','ru'=>'Русский язык',);function
lang($I,$kd=null){global$Pa,$nd;$Xb=$nd[$I];if(is_array($Xb)&&$Xb){$hc=($kd==1?0:((!$kd||$kd>=5)&&ereg('cs|sk|ru',$Pa)?2:1));$Xb=$Xb[$hc];}$Oe=func_get_args();array_shift($Oe);return
vsprintf((isset($Xb)?$Xb:$I),$Oe);}function
switch_lang(){global$Pa,$Yb;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(5).": ".html_select("lang",$Yb,$Pa,"this.form.submit();")," <input type='submit' value='".lang(6)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$Pa="en";if(isset($Yb[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$Pa=$_COOKIE["adminer_lang"];}elseif(isset($Yb[$_SESSION["lang"]])){$Pa=$_SESSION["lang"];}else{$Nc=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ka,PREG_SET_ORDER);foreach($ka
as$m){$Nc[$m[1]]=(isset($m[3])?$m[3]:1);}arsort($Nc);foreach($Nc
as$g=>$pa){if(isset($Yb[$g])){$Pa=$g;break;}$g=preg_replace('~-.*~','',$g);if(!isset($Nc[$g])&&isset($Yb[$g])){$Pa=$g;break;}}}switch($Pa){case"en":$nd=array('Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','original','No tables.','Language','Use','File exists.','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','System','Server','Username','Password','Login','Permanent login','Select data','Show structure','Alter view','Alter table','New item','Edit',array('%d byte','%d bytes'),'Select','Functions','Aggregation','Search','anywhere','Sort','descending','Limit','Text length','Action','SQL command','open','save','Dump','Logout','database','schema','Create new table','select','No extension','None of the supported PHP extensions (%s) are available.','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','Too big POST data. Reduce the data or increase the %s configuration directive.','Database','Invalid database.','Databases have been dropped.','Select database','Create new database','Privileges','Process list','Variables','Status','%s version: %s through PHP extension %s','Logged as: %s','Collation','Tables','Drop','Are you sure?','No rows.','Foreign keys','collation','Column name','Parameter name','Type','Length','Options','Auto Increment','Default values','Comment','Add next','Move up','Move down','Remove','View','Table','Column','Indexes','Alter indexes','Source','Target','ON DELETE','ON UPDATE','Alter','Add foreign key','Triggers','Add trigger','Database schema','Export','Output','Format','Routines','Events','Data','edit','Create user','Error in query','%.3f s',array('%d row','%d rows'),array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),'No commands to execute.','Execute','Stop on error','File uploads are disabled.','File upload','Run file','Webserver file %s','History','Clear','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Insert','Save','Save and continue edit','Save and insert next','Delete','Table has been dropped.','Table has been altered.','Table has been created.','Create table','Maximum number of allowed fields exceeded. Please increase %s and %s.','Table name','engine','Partition by','Partitions','Partition name','Values','Indexes have been altered.','Index Type','Column (length)','Database has been dropped.','Database has been renamed.','Database has been created.','Database has been altered.','Alter database','Create database','Schema has been dropped.','Schema has been created.','Schema has been altered.','Alter schema','Create schema','Call',array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),'Foreign key has been dropped.','Foreign key has been altered.','Foreign key has been created.','Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.','Foreign key','Target table','Change','Add column','View has been dropped.','View has been altered.','View has been created.','Create view','Name','Event has been dropped.','Event has been altered.','Event has been created.','Alter event','Create event','Start','End','Every','On completion preserve','Routine has been dropped.','Routine has been altered.','Routine has been created.','Alter function','Alter procedure','Create function','Create procedure','Return type','Sequence has been dropped.','Sequence has been created.','Sequence has been altered.','Alter sequence','Create sequence','Trigger has been dropped.','Trigger has been altered.','Trigger has been created.','Alter trigger','Create trigger','Time','Event','User has been dropped.','User has been altered.','User has been created.','Hashed','Routine','Grant','Revoke',array('%d process has been killed.','%d processes have been killed.'),'Kill',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','Relations','Increase text length to modify this value.','Use edit link to modify this value.','Page','last','whole result','Clone','CSV Import','Import','Tables have been truncated.','Tables have been moved.','Tables have been dropped.','Schema','Tables and views','Search data in tables','Engine','Data Length','Index Length','Data Free','Rows','%d in total','Analyze','Optimize','Check','Repair','Truncate','Move to other database','Move','Sequences','Schedule','At given time',',',array('%d e-mail has been sent.','%d e-mails have been sent.'));break;case"ru":$nd=array('Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','исходный','В базе данных нет таблиц.','Язык','Выбрать','File exists.','Число','Дата и время','Строки','Двоичный тип','Network','Geometry','Списки','System','Сервер','Имя пользователя','Пароль','Войти','Оставаться в системе','Select data','Show structure','Изменить представление','Изменить таблицу','Новая запись','Редактировать',array('%d байт','%d байта','%d байтов'),'Выбрать','Функции','Агрегация','Поиск','в любом месте','Сортировать','по убыванию','Лимит','Длина текста','Действие','SQL запрос','открыть','сохранить','Дамп','Выйти','база данных','schema','Создать новую таблицу','выбрать','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','База данных','Плохая база данных.','Databases have been dropped.','Выбрать базу данных','Создать новую базу данных','Полномочия','Список процессов','Переменные','Состояние','Версия %s: %s с PHP-расширением %s','Вы вошли как: %s','Режим сопоставления','Таблицы','Удалить','Вы уверены?','Нет записей.','Внешние ключи','режим сопоставления','Название поля','Название параметра','Тип','Длина','Действие','Автоматическое приращение','Значения по умолчанию','Комментарий','Добавить еще','Переместить вверх','Переместить вниз','Удалить','Представление','Таблица','Колонка','Индексы','Изменить индексы','Источник','Цель','При стирании','При обновлении','Изменить','Добавить внешний ключ','Триггеры','Добавить триггер','Схема базы данных','Экспорт','Выходные данные','Формат','Хранимые процедуры и функции','События','Данные','редактировать','Создать пользователя','Ошибка в запросe','%.3f s',array('%d строка','%d строки','%d строк'),array('Запрос завершен, изменена %d запись.','Запрос завершен, изменены %d записи.','Запрос завершен, изменено %d записей.'),'Нет команд для выполнения.','Выполнить','Остановить при ошибке','Загрузка файлов на сервер запрещена.','Загрузить файл на сервер','Запустить файл','Файл %s на вебсервере','История','Очистить','Запись удалена.','Запись обновлена.','Item%s has been inserted.','Вставить','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть','Таблица была удалена.','Таблица была изменена.','Таблица была создана.','Создать таблицу','Достигнуто максимальное значение количества доступных полей. Увеличьте %s и %s.','Название таблицы','тип','Разделить по','Разделы','Название раздела','Параметры','Индексы изменены.','Тип индекса','Колонка (длина)','База данных была удалена.','База данных была переименована.','База данных была создана.','База данных была изменена.','Изменить базу данных','Создать базу данных','Schema has been dropped.','Schema has been created.','Schema has been altered.','Alter schema','Create schema','Вызвать',array('Была вызвана процедура, %d запись была изменена.','Была вызвана процедура, %d записи было изменено.','Была вызвана процедура, %d записей было изменено.'),'Внешний ключ был удален.','Внешний ключ был изменен.','Внешний ключ был создан.','Колонки должны иметь одинаковые типы данных, в результирующей колонке должен быть индекс, данные для импорта должны существовать.','Внешний ключ','Результирующая таблица','Изменить','Добавить колонку','Представление было удалено.','Представление было изменено.','Представление было создано.','Создать представление','Название','Событие было удалено.','Событие было изменено.','Событие было создано.','Изменить событие','Создать событие','Начало','Конец','Каждые','После завершения сохранить','Процедура была удалена.','Процедура была изменена.','Процедура была создана.','Изменить функцию','Изменить процедуру','Создать функцию','Создать процедуру','Возвращаемый тип','Sequence has been dropped.','Sequence has been created.','Sequence has been altered.','Alter sequence','Create sequence','Триггер был удален.','Триггер был изменен.','Триггер был создан.','Изменить триггер','Создать триггер','Время','Событие','Пользователь был удален.','Пользователь был изменен.','Пользователь был создан.','Хешировано','Процедура','Позволить','Запретить',array('Был завершен %d процесс.','Было завершено %d процесса.','Было завершёно %d процессов.'),'Завершить',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Двойной клик на значении, чтобы отредактировать',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Реляции','Increase text length to modify this value.','Use edit link to modify this value.','Страница','last','весь результат','Клонировать','Импорт CSV','Импорт','Таблицы были очищены.','Таблицы были перемещены.','Таблицы были удалены.','Схема','Таблицы и представления','Search data in tables','Тип','Объём данных','Объём индексов','Свободное место','Строк','Всего %d','Анализировать','Оптимизировать','Проверить','Исправить','Очистить','Переместить в другою базу данных','Переместить','Sequences','Расписание','В данное время',' ',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'));break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($jf,$M,$P,$ff='auth_error'){set_exception_handler($ff);parent::__construct($jf,$M,$P);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($i,$Va=false){$f=parent::query($i);if(!$f){$ef=$this->errorInfo();$this->error=$ef[2];return
false;}$this->store_result($f);return$f;}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result($f=null){if(!$f){$f=$this->_result;}if($f->columnCount()){$f->num_rows=$f->rowCount();return$f;}$this->affected_rows=$f->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($i,$d=0){$f=$this->query($i);if(!$f){return
false;}$a=$f->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$sa=array();$ca=array();$sa[]="SQLite";$sa[]="SQLite3";$sa[]="PDO_SQLite";if(extension_loaded("sqlite3")||extension_loaded("pdo_sqlite")){$ca["sqlite"]="SQLite 3";}if(extension_loaded("sqlite")||extension_loaded("pdo_sqlite")){$ca["sqlite2"]="SQLite 2";}if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite2"])?"sqlite":"sqlite3")){if(isset($_GET["sqlite2"])){class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Z){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Z);}function
query($i,$Va=false){$gf=($Va?"unbufferedQuery":"query");$f=@$this->_link->$gf($i,SQLITE_BOTH,$n);if(!$f){$this->error=$n;return
false;}elseif($f===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($f);}function
quote($G){return"'".sqlite_escape_string($G)."'";}function
result($i,$d=0){$f=$this->query($i);if(!is_object($f)){return
false;}$a=$f->_result->fetch();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($f){$this->_result=$f;if(method_exists($f,'numRows')){$this->num_rows=$f->numRows();}}function
fetch_assoc(){$a=$this->_result->fetch(SQLITE_ASSOC);if(!$a){return
false;}$e=array();foreach($a
as$g=>$b){$e[($g[0]=='"'?idf_unescape($g):$g)]=$b;}return$e;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$h=$this->_result->fieldName($this->_offset++);$fa='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($fa\\.)?$fa\$~",$h,$m)){$j=($m[3]!=""?$m[3]:idf_unescape($m[2]));$h=($m[5]!=""?$m[5]:idf_unescape($m[4]));}return(object)array("name"=>$h,"orgname"=>$h,"orgtable"=>$j,);}}}else{class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Z){$this->_link=new
SQLite3($Z);$Vc=$this->_link->version();$this->server_info=$Vc["versionString"];}function
query($i){$f=@$this->_link->query($i);if(!$f){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($f->numColumns()){return
new
Min_Result($f);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($G){return"'".$this->_link->escapeString($G)."'";}function
result($i,$d=0){$f=$this->query($i);if(!is_object($f)){return
false;}$a=$f->_result->fetchArray();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($f){$this->_result=$f;$this->num_rows=1;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$L=$this->_offset++;$E=$this->_result->columnType($L);return(object)array("name"=>$this->_result->columnName($L),"type"=>$E,"charsetnr"=>($E==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Z){$this->dsn(DRIVER.":$Z","","");}}}class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Z){if(is_readable($Z)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$Z)?$Z:dirname($_SERVER["SCRIPT_FILENAME"])."/$Z")." AS a")){$this->Min_SQLite($Z);return
true;}return
false;}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}}function
idf_escape($I){return'"'.str_replace('"','""',$I).'"';}function
table($I){return
idf_escape($I);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($i,$t,$H,$K=0,$Ja=" "){return" $i$t".(isset($H)?$Ja."LIMIT $H".($K?" OFFSET $K":""):"");}function
limit1($i,$t){global$c;return($c->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($i,$t,1):" $i$t");}function
db_collation($r,$W){global$c;return$c->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view')",1);}function
count_tables($z){return
array();}function
table_status($h=""){global$c;$e=array();$f=$c->query("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($h!=""?" AND name = ".$c->quote($h):""));while($a=$f->fetch_assoc()){$a["Auto_increment"]="";$e[$a["Name"]]=$a;}$f=$c->query("SELECT * FROM sqlite_sequence");if($f){while($a=$f->fetch_assoc()){$e[$a["name"]]["Auto_increment"]=$a["seq"];}}return($h!=""?$e[$h]:$e);}function
fk_support($R){global$c;return!$c->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($j){global$c;$e=array();$f=$c->query("PRAGMA table_info(".table($j).")");if(is_object($f)){while($a=$f->fetch_assoc()){$E=strtolower($a["type"]);$e[$a["name"]]=array("field"=>$a["name"],"type"=>(eregi("int",$E)?"integer":(eregi("char|clob|text",$E)?"text":(eregi("blob",$E)?"blob":(eregi("real|floa|doub",$E)?"real":"numeric")))),"full_type"=>$E,"default"=>$a["dflt_value"],"null"=>!$a["notnull"],"auto_increment"=>eregi('^integer$',$E)&&$a["pk"],"collation"=>null,"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$a["pk"],);}}return$e;}function
indexes($j,$J=null){global$c;$e=array();$Lb=array();foreach(fields($j)as$d){if($d["primary"]){$Lb[]=$d["field"];}}if($Lb){$e[""]=array("type"=>"PRIMARY","columns"=>$Lb,"lengths"=>array());}$f=$c->query("PRAGMA index_list(".table($j).")");if(is_object($f)){while($a=$f->fetch_assoc()){$e[$a["name"]]["type"]=($a["unique"]?"UNIQUE":"INDEX");$e[$a["name"]]["lengths"]=array();$qf=$c->query("PRAGMA index_info(".idf_escape($a["name"]).")");while($Qc=$qf->fetch_assoc()){$e[$a["name"]]["columns"][]=$Qc["name"];}}}return$e;}function
foreign_keys($j){global$c;$e=array();$f=$c->query("PRAGMA foreign_key_list(".table($j).")");if(is_object($f)){while($a=$f->fetch_assoc()){$B=&$e[$a["id"]];if(!$B){$B=$a;}$B["source"][]=$a["from"];$B["target"][]=$a["to"];}}return$e;}function
view($h){global$c;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$c->result("SELECT sql FROM sqlite_master WHERE name = ".$c->quote($h))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($r){return
false;}function
error(){global$c;return
h($c->error);}function
exact_value($b){global$c;return$c->quote($b);}function
create_database($r,$Q){global$c;if(file_exists($r)){$c->error=lang(7);return
false;}$v=new
Min_SQLite($r);$v->query('PRAGMA encoding = "UTF-8"');$v->query('CREATE TABLE adminer (i)');$v->query('DROP TABLE adminer');return
true;}function
drop_databases($z){global$c;$c->Min_SQLite(":memory:");foreach($z
as$r){if(!@unlink($r)){$c->error=lang(7);return
false;}}return
true;}function
rename_database($h,$Q){global$c;$c->Min_SQLite(":memory:");$c->error=lang(7);return@rename(DB,$h);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($j,$h,$o,$ib,$Ra,$ub,$Q,$rb,$sb){global$c;$w=array();foreach($o
as$d){if($d[1]){$w[]=($j!=""&&$d[0]==""?"ADD ":"  ").implode($d[1]);}}$w=array_merge($w,$ib);if($j!=""){foreach($w
as$b){if(!queries("ALTER TABLE ".table($j)." $b")){return
false;}}if($j!=$h&&!queries("ALTER TABLE ".table($j)." RENAME TO ".table($h))){return
false;}}elseif(!queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$w)."\n)")){return
false;}if($rb){queries("UPDATE sqlite_sequence SET seq = $rb WHERE name = ".$c->quote($h));}return
true;}function
alter_indexes($j,$w){foreach($w
as$b){if(!queries(($b[2]?"DROP INDEX":"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($j."_"))." ON ".table($j))." $b[1]")){return
false;}}return
true;}function
truncate_tables($D){return
apply_queries("DELETE FROM",$D);}function
drop_views($X){return
apply_queries("DROP VIEW",$X);}function
drop_tables($D){return
apply_queries("DROP TABLE",$D);}function
move_tables($D,$X,$ra){return
false;}function
trigger($h){global$c;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$c->result("SELECT sql FROM sqlite_master WHERE name = ".$c->quote($h)),$m);return
array("Timing"=>strtoupper($m[1]),"Event"=>strtoupper($m[2]),"Trigger"=>$h,"Statement"=>$m[3]);}function
triggers($j){global$c;$e=array();$f=$c->query("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".$c->quote($j));while($a=$f->fetch_assoc()){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$a["sql"],$m);$e[$a["name"]]=array($m[1],$m[2]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($h,$E){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($j,$s){return
queries("INSERT INTO ".table($j).($s?" (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")":"DEFAULT VALUES"));}function
last_id(){global$c;return$c->result("SELECT LAST_INSERT_ROWID()");}function
explain($c,$i){return$c->query("EXPLAIN $i");}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($rf){return
true;}function
create_sql($j){global$c;return$c->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".$c->quote($j));}function
use_sql($U){global$c;return"ATTACH ".$c->quote($U)." AS ".idf_escape($U);}function
trigger_sql($j,$V){global$c;return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".$c->quote($j)));}function
show_variables(){global$c;$e=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$g){$e[$g]=$c->result("PRAGMA $g");}return$e;}function
show_status(){$e=array();foreach(get_vals("PRAGMA compile_options")as$zf){list($g,$b)=explode("=",$zf,2);$e[$g]=$b;}return$e;}function
support($jb){return
ereg('^(view|trigger|variables|status)$',$jb);}$C="sqlite";$ga=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Wa=array_keys($ga);$pb=array();$bc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Y=array("hex","length","lower","round","unixepoch","upper");$lb=array("avg","count","count distinct","group_concat","max","min","sum");$Sb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$sa[]="PgSQL";$sa[]="PDO_PgSQL";if(extension_loaded("pgsql")||extension_loaded("pdo_pgsql")){$ca["pgsql"]="PostgreSQL";}if(isset($_GET["pgsql"])){define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Bf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($A,$M,$P){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($A,"'\\"))."' user='".addcslashes($M,"'\\")."' password='".addcslashes($P,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect($this->_string,PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Vc=pg_version($this->_link);$this->server_info=$Vc["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($G){return"'".pg_escape_string($this->_link,$G)."'";}function
select_db($U){if($U==DB){return$this->_database;}$e=@pg_connect($this->_connection." dbname='".addcslashes($U,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($e){$this->_link=$e;}return$e;}function
close(){$this->_link=@pg_connect($this->_string);}function
query($i,$Va=false){$f=@pg_query($this->_link,$i);if(!$f){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($f)){$this->affected_rows=pg_affected_rows($f);return
true;}return
new
Min_Result($f);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$d=0){$f=$this->query($i);if(!$f){return
false;}return
pg_fetch_result($f->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($f){$this->_result=$f;$this->num_rows=pg_num_rows($f);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$L=$this->_offset++;$e=new
stdClass;if(function_exists('pg_field_table')){$e->orgtable=pg_field_table($this->_result,$L);}$e->name=pg_field_name($this->_result,$L);$e->orgname=$e->name;$e->type=pg_field_type($this->_result,$L);$e->charsetnr=($e->type=="bytea"?63:0);return$e;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($A,$M,$P){$G="pgsql:host='".str_replace(":","' port='",addcslashes($A,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($G.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$M,$P);return
true;}function
select_db($U){return(DB==$U);}function
close(){}}}function
idf_escape($I){return'"'.str_replace('"','""',$I).'"';}function
table($I){return
idf_escape($I);}function
connect(){global$q;$c=new
Min_DB;$wa=$q->credentials();if($c->connect($wa[0],$wa[1],$wa[2])){return$c;}return$c->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($i,$t,$H,$K=0,$Ja=" "){return" $i$t".(isset($H)?$Ja."LIMIT $H".($K?" OFFSET $K":""):"");}function
limit1($i,$t){return" $i$t";}function
db_collation($r,$W){global$c;return$c->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$c;return$c->result("SELECT user");}function
tables_list(){global$c;return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($z){return
array();}function
table_status($h=""){global$c;$e=array();$f=$c->query("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", pg_catalog.obj_description(oid, 'pg_class') AS \"Comment\"
FROM pg_catalog.pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($h!=""?" AND relname = ".$c->quote($h):""));while($a=$f->fetch_assoc()){$e[$a["Name"]]=$a;}return($h!=""?$e[$h]:$e);}function
fk_support($R){return
true;}function
fields($j){global$c;$e=array();$Sc=$c->result("SELECT oid FROM pg_class WHERE relname = ".$c->quote($j));$f=$c->query("SELECT *, col_description($Sc, ordinal_position) AS comment FROM information_schema.columns WHERE table_name = ".$c->quote($j)." ORDER BY ordinal_position");if($f){while($a=$f->fetch_assoc()){$S=$a["character_maximum_length"];$e[$a["column_name"]]=array("field"=>$a["column_name"],"full_type"=>$a["data_type"].($S?"($S)":""),"type"=>$a["data_type"],"length"=>$S,"default"=>$a["column_default"],"null"=>($a["is_nullable"]=="YES"),"auto_increment"=>eregi("^nextval\\(",$a["column_default"]),"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>false,"comment"=>$a["comment"],);}}return$e;}function
indexes($j,$J=null){global$c;if(!is_object($J)){$J=$c;}$e=array();$Sc=$J->result("SELECT oid FROM pg_class WHERE relname = ".$J->quote($j));$y=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Sc AND attnum > 0",$J);$f=$J->query("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Sc AND ci.oid = i.indexrelid");while($a=$f->fetch_assoc()){$e[$a["relname"]]["type"]=($a["indisprimary"]=="t"?"PRIMARY":($a["indisunique"]=="t"?"UNIQUE":"INDEX"));$e[$a["relname"]]["columns"]=array();foreach(explode(" ",$a["indkey"])as$df){$e[$a["relname"]]["columns"][]=$y[$df];}$e[$a["relname"]]["lengths"]=array();}return$e;}function
foreign_keys($j){global$c;$e=array();$f=$c->query("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".$c->quote($j));while($a=$f->fetch_assoc()){$B=&$e[$a["constraint_name"]];if(!$B){$B=$a;}$B["source"][]=$a["column_name"];$B["target"][]=$a["ref"];}return$e;}function
view($h){global$c;return
array("select"=>$c->result("SELECT pg_get_viewdef(".$c->quote($h).")"));}function
collations(){return
array();}function
information_schema($r){return($r=="information_schema");}function
error(){global$c;$e=h($c->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$e,$m)){$e=$m[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($m[3]).'})(.*)~','\\1<b>\\2</b>',$m[2]).$m[4];}return
nl_br($e);}function
exact_value($b){global$c;return$c->quote($b);}function
create_database($r,$Q){return
queries("CREATE DATABASE ".idf_escape($r).($Q?" ENCODING ".idf_escape($Q):""));}function
drop_databases($z){global$c;$c->close();return
apply_queries("DROP DATABASE",$z,'idf_escape');}function
rename_database($h,$Q){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($h));}function
auto_increment(){return"";}function
alter_table($j,$h,$o,$ib,$Ra,$ub,$Q,$rb,$sb){global$c;$w=array();$la=array();foreach($o
as$d){$L=idf_escape($d[0]);$b=$d[1];if(!$b){$w[]="DROP $L";}else{$Wc=$b[5];unset($b[5]);if(isset($b[6])&&$d[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($d[0]==""){$w[]=($j!=""?"ADD ":"  ").implode($b);}else{if($L!=$b[0]){$la[]="ALTER TABLE ".table($j)." RENAME $L TO $b[0]";}$w[]="ALTER $L TYPE$b[1]";if(!$b[6]){$w[]="ALTER $L ".($b[3]?"SET$b[3]":"DROP DEFAULT");$w[]="ALTER $L ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($d[0]!=""||$Wc!=""){$la[]="COMMENT ON COLUMN ".table($j).".$b[0] IS ".($Wc!=""?substr($Wc,9):"''");}}}$w=array_merge($w,$ib);if($j==""){array_unshift($la,"CREATE TABLE ".table($h)." (\n".implode(",\n",$w)."\n)");}elseif($w){array_unshift($la,"ALTER TABLE ".table($j)."\n".implode(",\n",$w));}if($j!=""&&$j!=$h){$la[]="ALTER TABLE ".table($j)." RENAME TO ".table($h);}if($j!=""||$Ra!=""){$la[]="COMMENT ON TABLE ".table($h)." IS ".$c->quote($Ra);}if($rb!=""){}foreach($la
as$i){if(!queries($i)){return
false;}}return
true;}function
alter_indexes($j,$w){$ja=array();$Za=array();foreach($w
as$b){if($b[0]!="INDEX"){$ja[]=($b[2]?"\nDROP CONSTRAINT ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}elseif($b[2]){$Za[]=$b[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($j."_"))." ON ".table($j)." $b[1]")){return
false;}}return((!$ja||queries("ALTER TABLE ".table($j).implode(",",$ja)))&&(!$Za||queries("DROP INDEX ".implode(", ",$Za))));}function
truncate_tables($D){return
queries("TRUNCATE ".implode(", ",array_map('table',$D)));return
true;}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($D){return
queries("DROP TABLE ".implode(", ",array_map('table',$D)));}function
move_tables($D,$X,$ra){foreach($D
as$j){if(!queries("ALTER TABLE ".table($j)." SET SCHEMA ".idf_escape($ra))){return
false;}}foreach($X
as$j){if(!queries("ALTER VIEW ".table($j)." SET SCHEMA ".idf_escape($ra))){return
false;}}return
true;}function
trigger($h){global$c;$f=$c->query('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.$c->quote($_GET["trigger"]).' AND trigger_name = '.$c->quote($h));return$f->fetch_assoc();}function
triggers($j){global$c;$e=array();$f=$c->query("SELECT * FROM information_schema.triggers WHERE event_object_table = ".$c->quote($j));while($a=$f->fetch_assoc()){$e[$a["trigger_name"]]=array($a["condition_timing"],$a["event_manipulation"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($j,$s){return
queries("INSERT INTO ".table($j).($s?" (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")":"DEFAULT VALUES"));}function
last_id(){return
0;}function
explain($c,$i){return$c->query("EXPLAIN $i");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$c;return$c->result("SELECT current_schema()");}function
set_schema($Ia){global$c;return$c->query("SET search_path TO ".idf_escape($Ia));}function
use_sql($U){return"\connect ".idf_escape($U);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
support($jb){return
ereg('^(comment|view|scheme|sequence|trigger|variables|drop_col)$',$jb);}$C="pgsql";$ga=array();$Wa=array();foreach(array(lang(8)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(9)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(10)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(11)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(12)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(13)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$g=>$b){$ga+=$b;$Wa[$g]=array_keys($b);}$pb=array();$bc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Y=array("char_length","lower","round","to_hex","to_timestamp","upper");$lb=array("avg","count","count distinct","max","min","sum");$Sb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$sa[]="OCI8";$sa[]="PDO_OCI";if(extension_loaded("oci8")||extension_loaded("pdo_oci")){$ca["oracle"]="Oracle";}if(isset($_GET["oracle"])){define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($Bf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($A,$M,$P){$this->_link=@oci_new_connect($M,$P,$A);if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($G){return"'".str_replace("'","''",$G)."'";}function
select_db($U){return
true;}function
query($i,$Va=false){$f=oci_parse($this->_link,$i);if(!$f){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$e=@oci_execute($f);restore_error_handler();if($e){if(oci_num_fields($f)){return
new
Min_Result($f);}$this->affected_rows=oci_num_rows($f);}return$e;}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$d=1){$f=$this->query($i);if(!is_object($f)||!oci_fetch($f->_result)){return
false;}return
oci_result($f->_result,$d);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($f){$this->_result=$f;$this->num_rows=-1;}function
fetch_assoc(){return
oci_fetch_assoc($this->_result);}function
fetch_row(){return
oci_fetch_row($this->_result);}function
fetch_field(){$L=$this->_offset++;$e=new
stdClass;$e->name=oci_field_name($this->_result,$L);$e->orgname=$e->name;$e->type=oci_field_type($this->_result,$L);$e->charsetnr=(ereg("raw|blob|bfile",$e->type)?63:0);return$e;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($A,$M,$P){}function
select_db($U){}}}function
idf_escape($I){return'"'.str_replace('"','""',$I).'"';}function
table($I){return
idf_escape($I);}function
connect(){global$q;$c=new
Min_DB;$wa=$q->credentials();if($c->connect($wa[0],$wa[1],$wa[2])){return$c;}return$c->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($i,$t,$H,$K=0,$Ja=" "){return" $i$t".(isset($H)?($t?" AND":$Ja."WHERE").($K?" rownum > $K AND":"")." rownum <= ".($H+$K):"");}function
limit1($i,$t){return" $i$t";}function
db_collation($r,$W){global$c;return$c->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$c;return$c->result("SELECT USER FROM DUAL");}function
tables_list(){global$c;return
get_key_vals("SELECT table_name FROM all_tables WHERE tablespace_name = ".$c->quote(DB));}function
count_tables($z){return
array();}function
table_status($h=""){global$c;$e=array();$f=$c->query('SELECT table_name "Name" FROM all_tables'.($h!=""?' WHERE table_name = '.$c->quote($h):''));while($a=$f->fetch_assoc()){if($h!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
fk_support($R){return
false;}function
fields($j){global$c;$e=array();$f=$c->query("SELECT * FROM all_tab_columns WHERE table_name = ".$c->quote($j)." ORDER BY column_id");if($f){while($a=$f->fetch_assoc()){$E=$a["DATA_TYPE"];$S="$a[DATA_PRECISION],$a[DATA_SCALE]";if($S==","){$S=$a["DATA_LENGTH"];}$e[$a["COLUMN_NAME"]]=array("field"=>$a["COLUMN_NAME"],"full_type"=>$E.($S?"($S)":""),"type"=>strtolower($E),"length"=>$S,"default"=>$a["DATA_DEFAULT"],"null"=>($a["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}}return$e;}function
indexes($j,$J=null){return
array();}function
collations(){return
array();}function
information_schema($r){return
false;}function
error(){global$c;return
h($c->error);}function
exact_value($b){global$c;return$c->quote($b);}function
explain($c,$i){}function
alter_table($j,$h,$o,$ib,$Ra,$ub,$Q,$rb,$sb){$w=$Za=array();foreach($o
as$d){$b=$d[1];if($b&&$d[0]!=""&&idf_escape($d[0])!=$b[0]){queries("ALTER TABLE ".table($h)." RENAME COLUMN ".idf_escape($d[0])." TO $b[0]");}if($b){$w[]=($j!=""?($d[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($j!=""?")":"");}else{$Za[]=idf_escape($d[0]);}}if($j==""){return
queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$w)."\n)");}return(!$w||queries("ALTER TABLE ".table($h)."\n".implode("\n",$w)))&&(!$Za||queries("ALTER TABLE ".table($h)." DROP (".implode(", ",$Za).")"));}function
truncate_tables($D){return
apply_queries("TRUNCATE TABLE",$D);}function
drop_views($X){return
apply_queries("DROP VIEW",$X);}function
drop_tables($D){return
apply_queries("DROP TABLE",$D);}function
begin(){return
true;}function
insert_into($j,$s){return
queries("INSERT INTO ".table($j)." (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($rf){return
true;}function
support($jb){return
ereg("drop_col",$jb);}$C="oracle";$ga=array();$Wa=array();foreach(array(lang(8)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(9)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(10)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(11)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$g=>$b){$ga+=$b;$Wa[$g]=array_keys($b);}$pb=array();$bc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$Y=array("length","lower","round","upper");$lb=array("avg","count","count distinct","max","min","sum");$Sb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$sa[]="SQLSRV";$sa[]="MSSQL";if(extension_loaded("sqlsrv")||extension_loaded("mssql")){$ca["mssql"]="MS SQL";}if(isset($_GET["mssql"])){define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($A,$M,$P){$this->_link=@sqlsrv_connect($A,array("UID"=>$M,"PWD"=>$P));if($this->_link){$tf=sqlsrv_server_info($this->_link);$this->server_info=$tf['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($G){return"'".str_replace("'","''",$G)."'";}function
select_db($U){return$this->query("USE $U");}function
query($i,$Va=false){$f=sqlsrv_query($this->_link,$i);if(!$f){$this->_get_error();return
false;}return$this->store_result($f);}function
multi_query($i){$this->_result=sqlsrv_query($this->_link,$i);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($f=null){if(!$f){$f=$this->_result;}if(sqlsrv_field_metadata($f)){return
new
Min_Result($f);}$this->affected_rows=sqlsrv_rows_affected($f);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($i,$d=0){$f=$this->query($i);if(!is_object($f)){return
false;}$a=$f->fetch_row();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($f){$this->_result=$f;$this->num_rows=sqlsrv_has_rows($f);}function
_convert($a){foreach((array)$a
as$g=>$b){if(is_a($b,'DateTime')){$a[$g]=$b->format("Y-m-d H:i:s");}}return$a;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$d=$this->_fields[$this->_offset++];$e=new
stdClass;$e->name=$d["Name"];$e->orgname=$d["Name"];$e->type=($d["Type"]==1?254:0);return$e;}function
seek($K){for($k=0;$k<$K;$k++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($A,$M,$P){$this->_link=@mssql_connect($A,$M,$P);if($this->_link){$f=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$a=$f->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$a[0]] $a[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($G){return"'".str_replace("'","''",$G)."'";}function
select_db($U){return
mssql_select_db($U);}function
query($i,$Va=false){$f=mssql_query($i,$this->_link);if(!$f){$this->error=mssql_get_last_message();return
false;}if($f===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($f);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($i,$d=0){$f=$this->query($i);if(!is_object($f)){return
false;}return
mssql_result($f->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($f){$this->_result=$f;$this->num_rows=mssql_num_rows($f);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$e=mssql_fetch_field($this->_result);$e->orgtable=$e->table;$e->orgname=$e->name;return$e;}function
seek($K){mssql_data_seek($this->_result,$K);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($I){return"[".str_replace("]","]]",$I)."]";}function
table($I){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($I);}function
connect(){global$q;$c=new
Min_DB;$wa=$q->credentials();if($c->connect($wa[0],$wa[1],$wa[2])){return$c;}return$c->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($i,$t,$H,$K=0,$Ja=" "){return(isset($H)?" TOP (".($H+$K).")":"")." $i$t";}function
limit1($i,$t){return
limit($i,$t,1);}function
db_collation($r,$W){global$c;return$c->result("SELECT collation_name FROM sys.databases WHERE name =  ".$c->quote($r));}function
engines(){return
array();}function
logged_user(){global$c;return$c->result("SELECT SUSER_NAME()");}function
tables_list(){global$c;return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".$c->quote(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($z){global$c;$e=array();foreach($z
as$r){$c->select_db($r);$e[$r]=$c->result("SELECT COUNT(*) FROM information_schema.TABLES");}return$e;}function
table_status($h=""){global$c;$e=array();$f=$c->query("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".$c->quote(get_schema()).") AND type IN ('S', 'U', 'V')".($h!=""?" AND name = ".$c->quote($h):""));while($a=$f->fetch_assoc()){if($h!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
fk_support($R){return
true;}function
fields($j){global$c;$e=array();$f=$c->query("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".$c->quote(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".$c->quote($j));while($a=$f->fetch_assoc()){$S=$a["max_length"];$e[$a["name"]]=array("field"=>$a["name"],"full_type"=>$a["type"].($S?"($S)":""),"type"=>$a["type"],"length"=>$S,"default"=>$a["default"],"null"=>$a["is_nullable"],"auto_increment"=>$a["is_identity"],"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$a["is_identity"],);}return$e;}function
indexes($j,$J=null){global$c;if(!is_object($J)){$J=$c;}$e=array();$f=$J->query("SELECT indexes.name, key_ordinal, is_unique, is_primary_key, columns.name AS column_name
FROM sys.indexes
INNER JOIN sys.index_columns ON indexes.object_id = index_columns.object_id AND indexes.index_id = index_columns.index_id
INNER JOIN sys.columns ON index_columns.object_id = columns.object_id AND index_columns.column_id = columns.column_id
WHERE OBJECT_NAME(indexes.object_id) = ".$J->quote($j));if($f){while($a=$f->fetch_assoc()){$e[$a["name"]]["type"]=($a["is_primary_key"]?"PRIMARY":($a["is_unique"]?"UNIQUE":"INDEX"));$e[$a["name"]]["lengths"]=array();$e[$a["name"]]["columns"][$a["key_ordinal"]]=$a["column_name"];}}return$e;}function
collations(){$e=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$Q){$e[ereg_replace("_.*","",$Q)][]=$Q;}return$e;}function
information_schema($r){return
false;}function
error(){global$c;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$c->error)));}function
exact_value($b){global$c;return$c->quote($b);}function
create_database($r,$Q){return
queries("CREATE DATABASE ".idf_escape($r).($Q?" COLLATE ".idf_escape($Q):""));}function
drop_databases($z){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$z)));}function
rename_database($h,$Q){if($Q){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE ".idf_escape($Q));}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($h));return
true;}function
auto_increment(){return" IDENTITY";}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($j,$s){return
queries("INSERT INTO ".table($j).($s?" (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")":"DEFAULT VALUES"));}function
last_id(){global$c;return$c->result("SELECT SCOPE_IDENTITY()");}function
explain($c,$i){$c->query("SET SHOWPLAN_ALL ON");$e=$c->query($i);$c->query("SET SHOWPLAN_ALL OFF");return$e;}function
foreign_keys($j){global$c;$f=$c->query("EXEC sp_fkeys @fktable_name = ".$c->quote($j));$e=array();while($a=$f->fetch_assoc()){$B=&$e[$a["FK_NAME"]];$B["table"]=$a["PKTABLE_NAME"];$B["source"][]=$a["FKCOLUMN_NAME"];$B["target"][]=$a["PKCOLUMN_NAME"];}return$e;}function
truncate_tables($D){return
apply_queries("TRUNCATE TABLE",$D);}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($D){return
queries("DROP TABLE ".implode(", ",array_map('table',$D)));}function
move_tables($D,$X,$ra){return
apply_queries("ALTER SCHEMA ".idf_escape($ra)." TRANSFER",array_merge($D,$X));}function
trigger($h){global$c;$f=$c->query("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".$c->quote($h));$a=$f->fetch_assoc();$a["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$a["text"]);return$a;}function
triggers($j){global$c;$e=array();$f=$c->query("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".$c->quote($j));while($a=$f->fetch_assoc()){$e[$a["name"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$c;if($_GET["ns"]!=""){return$_GET["ns"];}return$c->result("SELECT SCHEMA_NAME()");}function
set_schema($Ia){return
true;}function
use_sql($U){return"USE ".idf_escape($U);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($jb){return
ereg('^(scheme|trigger|drop_col)$',$jb);}$C="mssql";$ga=array();$Wa=array();foreach(array(lang(8)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(9)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(10)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(11)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$g=>$b){$ga+=$b;$Wa[$g]=array_keys($b);}$pb=array();$bc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Y=array("len","lower","round","upper");$lb=array("avg","count","count distinct","max","min","sum");$Sb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$sa[]="MySQLi";$sa[]="MySQL";$sa[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$ca=array("server"=>"MySQL")+$ca;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($A,$M,$P){list($Se,$Rc)=explode(":",$A,2);return@$this->real_connect(($A!=""?$Se:ini_get("mysqli.default_host")),("$A$M"!=""?$M:ini_get("mysqli.default_user")),("$A$M$P"!=""?$P:ini_get("mysqli.default_pw")),null,(is_numeric($Rc)?$Rc:ini_get("mysqli.default_port")),(!is_numeric($Rc)?$Rc:null));}function
result($i,$d=0){$f=$this->query($i);if(!$f){return
false;}$a=$f->fetch_array();return$a[$d];}function
quote($G){return"'".$this->escape_string($G)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($A,$M,$P){$this->_link=@mysql_connect(($A!=""?$A:ini_get("mysql.default_host")),("$A$M"!=""?$M:ini_get("mysql.default_user")),("$A$M$P"!=""?$P:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($G){return"'".mysql_real_escape_string($G,$this->_link)."'";}function
select_db($U){return
mysql_select_db($U,$this->_link);}function
query($i,$Va=false){$f=@($Va?mysql_unbuffered_query($i,$this->_link):mysql_query($i,$this->_link));if(!$f){$this->error=mysql_error($this->_link);return
false;}if($f===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($f);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$d=0){$f=$this->query($i);if(!$f){return
false;}return
mysql_result($f->_result,0,$d);}}class
Min_Result{var$num_rows,$_result;function
Min_Result($f){$this->_result=$f;$this->num_rows=mysql_num_rows($f);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$e=mysql_fetch_field($this->_result);$e->orgtable=$e->table;$e->orgname=$e->name;$e->charsetnr=($e->blob?63:0);return$e;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($A,$M,$P){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$A)),$M,$P);return
true;}function
select_db($U){return$this->query("USE ".idf_escape($U));}function
query($i,$Va=false){$this->setAttribute(1000,!$Va);return
parent::query($i,$Va);}}}function
idf_escape($I){return"`".str_replace("`","``",$I)."`";}function
table($I){return
idf_escape($I);}function
connect(){global$q;$c=new
Min_DB;$wa=$q->credentials();if($c->connect($wa[0],$wa[1],$wa[2])){$c->query("SET SQL_QUOTE_SHOW_CREATE=1");$c->query("SET NAMES utf8");return$c;}return$c->error;}function
get_databases($We=true){$e=&get_session("databases");if(!isset($e)){if($We){restart_session();ob_flush();flush();}$e=get_vals("SHOW DATABASES");}return$e;}function
limit($i,$t,$H,$K=0,$Ja=" "){return" $i$t".(isset($H)?$Ja."LIMIT $H".($K?" OFFSET $K":""):"");}function
limit1($i,$t){return
limit($i,$t,1);}function
db_collation($r,$W){global$c;$e=null;$ja=$c->result("SHOW CREATE DATABASE ".idf_escape($r),1);if(preg_match('~ COLLATE ([^ ]+)~',$ja,$m)){$e=$m[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ja,$m)){$e=$W[$m[1]][0];}return$e;}function
engines(){global$c;$e=array();$f=$c->query("SHOW ENGINES");while($a=$f->fetch_assoc()){if(ereg("YES|DEFAULT",$a["Support"])){$e[]=$a["Engine"];}}return$e;}function
logged_user(){global$c;return$c->result("SELECT USER()");}function
tables_list(){global$c;return
get_key_vals("SHOW".($c->server_info>=5?" FULL":"")." TABLES");}function
count_tables($z){$e=array();foreach($z
as$r){$e[$r]=count(get_vals("SHOW TABLES IN ".idf_escape($r)));}return$e;}function
table_status($h=""){global$c;$e=array();$f=$c->query("SHOW TABLE STATUS".($h!=""?" LIKE ".$c->quote(addcslashes($h,"%_")):""));while($a=$f->fetch_assoc()){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Engine"]="VIEW";$a["Comment"]="";}if($h!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
fk_support($R){return($R["Engine"]=="InnoDB");}function
fields($j){global$c;$e=array();$f=$c->query("SHOW FULL COLUMNS FROM ".table($j));if($f){while($a=$f->fetch_assoc()){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$m);$e[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$m[1],"length"=>$m[2],"unsigned"=>ltrim($m[3].$m[4]),"default"=>($a["Default"]!=""||ereg("char",$m[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$m)?$m[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}}return$e;}function
indexes($j,$J=null){global$c;if(!is_object($J)){$J=$c;}$e=array();$f=$J->query("SHOW INDEX FROM ".table($j));if($f){while($a=$f->fetch_assoc()){$e[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$e[$a["Key_name"]]["columns"][]=$a["Column_name"];$e[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}}return$e;}function
foreign_keys($j){global$c,$Jb;static$fa='`(?:[^`]|``)+`';$e=array();$Ae=$c->result("SHOW CREATE TABLE ".table($j),1);if($Ae){preg_match_all("~CONSTRAINT ($fa) FOREIGN KEY \\(((?:$fa,? ?)+)\\) REFERENCES ($fa)(?:\\.($fa))? \\(((?:$fa,? ?)+)\\)(?: ON DELETE (".implode("|",$Jb)."))?(?: ON UPDATE (".implode("|",$Jb)."))?~",$Ae,$ka,PREG_SET_ORDER);foreach($ka
as$m){preg_match_all("~$fa~",$m[2],$Ca);preg_match_all("~$fa~",$m[5],$ra);$e[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$Ca[0]),"target"=>array_map('idf_unescape',$ra[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$e;}function
view($h){global$c;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$c->result("SHOW CREATE VIEW ".table($h),1)));}function
collations(){global$c;$e=array();$f=$c->query("SHOW COLLATION");while($a=$f->fetch_assoc()){$e[$a["Charset"]][]=$a["Collation"];}ksort($e);foreach($e
as$g=>$b){sort($e[$g]);}return$e;}function
information_schema($r){global$c;return($c->server_info>=5&&$r=="information_schema");}function
error(){global$c;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$c->error));}function
exact_value($b){global$c;return$c->quote($b)." COLLATE utf8_bin";}function
create_database($r,$Q){global$c;set_session("databases",null);return
queries("CREATE DATABASE ".idf_escape($r).($Q?" COLLATE ".$c->quote($Q):""));}function
drop_databases($z){set_session("databases",null);return
apply_queries("DROP DATABASE",$r,'idf_escape');}function
rename_database($h,$Q){global$c;$e=false;if(create_database($h,$Q)){$e=true;foreach(tables_list()as$j){if(!queries("RENAME TABLE ".table($j)." TO ".idf_escape($h).".".table($j))){$e=false;break;}}if($e){queries("DROP DATABASE ".idf_escape(DB));}}return$e;}function
auto_increment(){$Ed=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$x){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$x["columns"],true)){$Ed="";break;}if($x["type"]=="PRIMARY"){$Ed=" UNIQUE";}}}return" AUTO_INCREMENT$Ed";}function
alter_table($j,$h,$o,$ib,$Ra,$ub,$Q,$rb,$sb){global$c;$w=array();foreach($o
as$d){$w[]=($d[1]?($j!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($j!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$w=array_merge($w,$ib);$Rb="COMMENT=".$c->quote($Ra).($ub?" ENGINE=".$c->quote($ub):"").($Q?" COLLATE ".$c->quote($Q):"").($rb!=""?" AUTO_INCREMENT=$rb":"").$sb;if($j==""){return
queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$w)."\n) $Rb");}if($j!=$h){$w[]="RENAME TO ".table($h);}$w[]=$Rb;return
queries("ALTER TABLE ".table($j)."\n".implode(",\n",$w));}function
alter_indexes($j,$w){foreach($w
as$g=>$b){$w[$g]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($j).implode(",",$w));}function
truncate_tables($D){return
apply_queries("TRUNCATE TABLE",$D);}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($D){return
queries("DROP TABLE ".implode(", ",array_map('table',$D)));}function
move_tables($D,$X,$ra){$ve=array();foreach(array_merge($D,$X)as$j){$ve[]=table($j)." TO ".idf_escape($ra).".".table($j);}return
queries("RENAME TABLE ".implode(", ",$ve));}function
trigger($h){global$c;$f=$c->query("SHOW TRIGGERS WHERE `Trigger` = ".$c->quote($h));return$f->fetch_assoc();}function
triggers($j){global$c;$e=array();$f=$c->query("SHOW TRIGGERS LIKE ".$c->quote(addcslashes($j,"%_")));while($a=$f->fetch_assoc()){$e[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($h,$E){global$c,$Bb,$Qb,$ga;$ud=array("bit"=>"tinyint","bool"=>"tinyint","boolean"=>"tinyint","integer"=>"int","double precision"=>"float","real"=>"float","dec"=>"decimal","numeric"=>"decimal","fixed"=>"decimal","national char"=>"char","national varchar"=>"varchar");$pe="((".implode("|",array_keys($ga+$ud)).")(?:\\s*\\(((?:[^'\")]*|$Bb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$fa="\\s*(".($E=="FUNCTION"?"":implode("|",$Qb)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$pe";$ja=$c->result("SHOW CREATE $E ".idf_escape($h),2);preg_match("~\\(((?:$fa\\s*,?)*)\\)".($E=="FUNCTION"?"\\s*RETURNS\\s+$pe":"")."\\s*(.*)~is",$ja,$m);$o=array();preg_match_all("~$fa\\s*,?~is",$m[1],$ka,PREG_SET_ORDER);foreach($ka
as$Ta){$h=str_replace("``","`",$Ta[2]).$Ta[3];$td=strtolower($Ta[5]);$o[]=array("field"=>$h,"type"=>(isset($ud[$td])?$ud[$td]:$td),"length"=>preg_replace_callback("~$Bb~s",'normalize_enum',$Ta[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ta[8] $Ta[7]"))),"full_type"=>$Ta[4],"inout"=>strtoupper($Ta[1]),"collation"=>strtolower($Ta[9]),);}if($E!="FUNCTION"){return
array("fields"=>$o,"definition"=>$m[11]);}return
array("fields"=>$o,"returns"=>array("type"=>$m[12],"length"=>$m[13],"unsigned"=>$m[15],"collation"=>$m[16]),"definition"=>$m[17],);}function
routines(){global$c;$e=array();$f=$c->query("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".$c->quote(DB));while($a=$f->fetch_assoc()){$e[]=$a;}return$e;}function
begin(){return
queries("BEGIN");}function
insert_into($j,$s){return
queries("INSERT INTO ".table($j)." (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")");}function
last_id(){global$c;return$c->result("SELECT LAST_INSERT_ID()");}function
explain($c,$i){return$c->query("EXPLAIN $i");}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ia){return
true;}function
create_sql($j){global$c;return$c->result("SHOW CREATE TABLE ".table($j),1);}function
use_sql($U){return"USE ".idf_escape($U);}function
trigger_sql($j,$V){global$c;$f=$c->query("SHOW TRIGGERS LIKE ".$c->quote(addcslashes($j,"%_")));$e="";if($f->num_rows){while($a=$f->fetch_assoc()){$e.="\n".($V=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}}return$e;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($jb){global$c;return!ereg("scheme|sequence".($c->server_info<5.1?"|event|partitioning".($c->server_info<5?"|view|routine|trigger":""):""),$jb);}$C="sql";$ga=array();$Wa=array();foreach(array(lang(8)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(9)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(10)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(11)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(14)=>array("enum"=>65535,"set"=>64),)as$g=>$b){$ga+=$b;$Wa[$g]=array_keys($b);}$pb=array("unsigned","zerofill","unsigned zerofill");$bc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$Y=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$lb=array("avg","count","count distinct","group_concat","max","min","sum");$Sb=array(array("char"=>"md5/sha1/password/encrypt/uuid","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Pb="3.0.0-dev";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("passwords"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
loginForm(){global$ca,$sa;echo'<table cellspacing="0">
<tr><th>',lang(15),'<td>',(count($sa)>3?html_select("driver",$ca,DRIVER):"<input type='hidden' name='driver' value='".key($ca)."'>".reset($ca)),'</tr>
<tr><th>',lang(16),'<td><input name="server" value="',h(SERVER),'">
<tr><th>',lang(17),'<td><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(18);?><td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById('username').focus();
</script>
<?php

echo"<p><input type='submit' value='".lang(19)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(20))."\n";}function
login($Gf,$P){return
true;}function
tableName($Lc){return
h($Lc["Name"]);}function
fieldName($d,$qb=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Lc,$s=""){echo'<p class="tabs">';$Ha=array("select"=>lang(21),"table"=>lang(22));if(eregi("view",$Lc["Engine"])){$Ha["view"]=lang(23);}else{$Ha["create"]=lang(24);}if(isset($s)){$Ha["edit"]=lang(25);}foreach($Ha
as$g=>$b){echo" <a href='".h(ME)."$g=".urlencode($Lc["Name"]).($g=="edit"?$s:"")."'>".bold($b,isset($_GET[$g]))."</a>";}echo"\n";}function
backwardKeys($j,$Df){return
array();}function
backwardKeysPrint($Hf,$a){}function
selectQuery($i){global$C;return"<p><code class='jush-$C'>".h(str_replace("\n"," ",$i))."</code> <a href='".h(ME)."sql=".urlencode($i)."'>".lang(26)."</a>\n";}function
rowDescription($j){return"";}function
rowDescriptions($za,$bf){return$za;}function
selectVal($b,$v,$d){$e=($b!="<i>NULL</i>"&&$d["type"]=="char"?"<code>$b</code>":$b);if(ereg('binary|blob|bytea',$d["type"])&&!is_utf8($b)){$e=lang(27,strlen($b));}return($v?"<a href='$v'>$e</a>":$e);}function
editVal($b,$d){return$b;}function
selectColumnsPrint($_,$y){global$Y,$lb;print_fieldset("select",lang(28),$_);$k=0;$Pe=array(lang(29)=>$Y,lang(30)=>$lb);foreach($_
as$g=>$b){$b=$_GET["columns"][$g];echo"<div>".html_select("columns[$k][fun]",array(-1=>"")+$Pe,$b["fun"]),"(<select name='columns[$k][col]'><option>".optionlist($y,$b["col"],true)."</select>)</div>\n";$k++;}echo"<div>".html_select("columns[$k][fun]",array(-1=>"")+$Pe,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$k][col]' onchange='selectAddRow(this);'><option>".optionlist($y,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($t,$y,$F){print_fieldset("search",lang(31),$t);foreach($F
as$k=>$x){if($x["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$x["columns"]))."</i>) AGAINST"," <input name='fulltext[$k]' value='".h($_GET["fulltext"][$k])."'>",checkbox("boolean[$k]",1,isset($_GET["boolean"][$k]),"BOOL"),"<br>\n";}}$k=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$k][col]'><option value=''>(".lang(32).")".optionlist($y,$b["col"],true)."</select>",html_select("where[$k][op]",$this->operators,$b["op"]),"<input name='where[$k][val]' value='".h($b["val"])."'></div>\n";$k++;}}echo"<div><select name='where[$k][col]' onchange='selectAddRow(this);'><option value=''>(".lang(32).")".optionlist($y,null,true)."</select>",html_select("where[$k][op]",$this->operators),"<input name='where[$k][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($qb,$y,$F){print_fieldset("sort",lang(33),$qb);$k=0;foreach((array)$_GET["order"]as$g=>$b){if(isset($y[$b])){echo"<div><select name='order[$k]'><option>".optionlist($y,$b,true)."</select>",checkbox("desc[$k]",1,isset($_GET["desc"][$g]),lang(34))."</div>\n";$k++;}}echo"<div><select name='order[$k]' onchange='selectAddRow(this);'><option>".optionlist($y,null,true)."</select>",checkbox("desc[$k]",1,0,lang(34))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($H){echo"<fieldset><legend>".lang(35)."</legend><div>";echo"<input name='limit' size='3' value='".h($H)."'>","</div></fieldset>\n";}function
selectLengthPrint($yb){if(isset($yb)){echo"<fieldset><legend>".lang(36)."</legend><div>",'<input name="text_length" size="3" value="'.h($yb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".lang(37)."</legend><div>","<input type='submit' value='".lang(28)."'>","</div></fieldset>\n";}function
selectEmailPrint($If,$y){}function
selectColumnsProcess($y,$F){global$Y,$lb;$_=array();$Ga=array();foreach((array)$_GET["columns"]as$g=>$b){if($b["fun"]=="count"||(isset($y[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$Y)||in_array($b["fun"],$lb)))){$_[$g]=apply_sql_function($b["fun"],(isset($y[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$lb)){$Ga[]=$_[$g];}}}return
array($_,$Ga);}function
selectSearchProcess($o,$F){global$c;$e=array();foreach($F
as$k=>$x){if($x["type"]=="FULLTEXT"&&$_GET["fulltext"][$k]!=""){$e[]="MATCH (".implode(", ",array_map('idf_escape',$x["columns"])).") AGAINST (".$c->quote($_GET["fulltext"][$k]).(isset($_GET["boolean"][$k])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Ob=" $b[op]";if(ereg('IN$',$b["op"])){$Fb=process_length($b["val"]);$Ob.=" (".($Fb!=""?$Fb:"NULL").")";}elseif($b["op"]=="LIKE %%"){$Ob=" LIKE ".$this->processInput($o[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Ob.=" ".$this->processInput($o[$b["col"]],$b["val"]);}if($b["col"]!=""){$e[]=idf_escape($b["col"]).$Ob;}else{$ab=array();foreach($o
as$h=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$h=idf_escape($h);$ab[]=(ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($h USING utf8)":$h);}}$e[]=($ab?"(".implode("$Ob OR ",$ab)."$Ob)":"0");}}}return$e;}function
selectOrderProcess($o,$F){$e=array();foreach((array)$_GET["order"]as$g=>$b){if(isset($o[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$e[]=(isset($o[$b])?idf_escape($b):$b).(isset($_GET["desc"][$g])?" DESC":"");}}return$e;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($t,$bf){return
false;}function
messageQuery($i){global$C;restart_session();$T="sql-".count($_SESSION["messages"]);$hb=&get_session("history");$hb[$_GET["db"]][]=(strlen($i)>1e6?ereg_replace('[\x80-\xFF]+$','',substr($i,0,1e6))."\n...":$i);return" <a href='#$T' onclick=\"return !toggle('$T');\">".lang(38)."</a><div id='$T' class='hidden'><pre class='jush-$C'>".shorten_utf8($i,1000).'</pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($hb[$_GET["db"]])-1)).'">'.lang(26).'</a></div>';}function
editFunctions($d){global$Sb;$e=($d["null"]?"NULL/":"");foreach($Sb
as$g=>$Y){if(!$g||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Y
as$fa=>$b){if(!$fa||ereg($fa,$d["type"])){$e.="/$b";}}}}return
explode("/",$e);}function
editInput($j,$d,$Zb,$p){if($d["type"]=="enum"){return($d["null"]?"<label><input type='radio'$Zb value=''".(isset($p)||isset($_GET["select"])?"":" checked")."><em>NULL</em></label> ":"")."<input type='radio'$Zb value='0'".($p===0?" checked":"").">";}return"";}function
processInput($d,$p,$N=""){global$c;$h=$d["field"];$e=$c->quote($p);if(ereg('^(now|getdate|uuid)$',$N)){$e="$N()";}elseif(ereg('^current_(date|timestamp)$',$N)){$e=$N;}elseif(ereg('^([+-]|\\|\\|)$',$N)){$e=idf_escape($h)." $N $e";}elseif(ereg('^[+-] interval$',$N)){$e=idf_escape($h)." $N ".(preg_match("~^([0-9]+|'[0-9.: -]') [A-Z_]+$~i",$p)?$p:$e);}elseif(ereg('^(addtime|subtime|concat)$',$N)){$e="$N(".idf_escape($h).", $e)";}elseif(ereg('^(md5|sha1|password|encrypt)$',$N)){$e="$N($e)";}return$e;}function
dumpOutput($_,$p=""){$e=array('text'=>lang(39),'file'=>lang(40));if(function_exists('gzencode')){$e['gz']='gzip';}if(function_exists('bzcompress')){$e['bz2']='bzip2';}return
html_select("output",$e,$p,$_);}function
dumpFormat($_,$p=""){return
html_select("format",array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;'),$p,$_);}function
navigation($Mc){global$Pb,$c,$O,$C,$ca;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name();?></a>
<span class="version"><?php echo$Pb,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($Pb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Mc=="auth"){$cb=true;foreach((array)$_SESSION["passwords"]as$Mb=>$Ze){foreach($Ze
as$A=>$af){foreach($af
as$M=>$P){if(isset($P)){if($cb){echo"<p>\n";$cb=false;}echo"<a href='".h(auth_url($Mb,$A,$M))."'>($ca[$Mb]) ".h($M.($A!=""?"@$A":""))."</a><br>\n";}}}}}else{$z=get_databases();echo'<form action="" method="post">
<p class="logout">
<a href="',h(ME),'sql=">',bold(lang(38),isset($_GET["sql"])),'</a>
<a href="',h(ME),'dump=',urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"]),'">',bold(lang(41),isset($_GET["dump"])),'</a>
<input type="hidden" name="token" value="',$O,'">
<input type="submit" name="logout" value="',lang(42),'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();?>
<?php echo($z?html_select("db",array(""=>"(".lang(43).")")+$z,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="',lang(6),'"',($z?" class='hidden'":""),'>
';if($Mc!="db"&&DB!=""&&$c->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".lang(44).")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!=""){set_schema($_GET["ns"]);}}if($_GET["ns"]!==""){$D=tables_list();if(!$D){echo"<p class='message'>".lang(4)."\n";}else{$this->tablesPrint($D);$Ha=array();foreach($D
as$j=>$E){$Ha[]=preg_quote($j,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $C: [ '".addcslashes(h(ME),"\\'/")."table=\$&', /\\b(".implode("|",$Ha).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$C;\n";}echo"</script>\n";}echo'<p><a href="'.h(ME).'create=">'.bold(lang(45),$_GET["create"]==="")."</a>\n";}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($D){echo"<p id='tables'>\n";foreach($D
as$j=>$E){echo'<a href="'.h(ME).'select='.urlencode($j).'">'.bold(lang(46),$_GET["select"]==$j).'</a> ','<a href="'.h(ME).'table='.urlencode($j).'">'.bold($this->tableName(array("Name"=>$j)),$_GET["table"]==$j)."</a><br>\n";}}}$q=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($q->operators)){$q->operators=$bc;}function
page_header($He,$n="",$wc=array(),$Le=""){global$Pa,$Pb,$q,$c,$ca;header("Content-Type: text/html; charset=utf-8");header("X-Frame-Options: deny");$Ke=$He.($Le!=""?": ".h($Le):"");$Je=($_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off")?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$Pa,'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Ke.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$q->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.0-dev",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.0-dev";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($c)?substr($c->server_info,0,3):""),'\', \'',$Je,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Je');");?>">
<script type="text/javascript" src="<?php echo
h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.0-dev";?>"></script>
<script type="text/javascript" src="static/editing.js"></script>

<div id="content">
<?php

if(isset($wc)){$v=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($v?h($v):".").'">'.$ca[DRIVER].'</a> &raquo; ';$v=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$A=(SERVER!=""?h(SERVER):lang(16));if($wc===false){echo"$A\n";}else{echo"<a href='".($v?h($v):".")."'>$A</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($wc))){echo'<a href="'.h($v."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($wc)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($wc
as$g=>$b){$fc=(is_array($b)?$b[1]:$b);if($fc!=""){echo'<a href="'.h(ME."$g=").urlencode(is_array($b)?$b[0]:$b).'">'.h($fc).'</a> &raquo; ';}}}echo"$He\n";}}echo"<h2>$Ke</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$z=&get_session("databases");if(DB!=""&&$z&&!in_array(DB,$z,true)){$z=null;}if($n){echo"<div class='error'>$n</div>\n";}}function
page_footer($Mc=""){global$q;echo'</div>

';switch_lang();echo'<div id="menu">
';$q->navigation($Mc);echo'</div>
';session_write_close();ob_flush();flush();}function
int32($ba){while($ba>=2147483648){$ba-=4294967296;}while($ba<=-2147483649){$ba+=4294967296;}return(int)$ba;}function
long2str($u,$ed){$ha='';foreach($u
as$b){$ha.=pack('V',$b);}if($ed){return
substr($ha,0,end($u));}return$ha;}function
str2long($ha,$ed){$u=array_values(unpack('V*',str_pad($ha,4*ceil(strlen($ha)/4),"\0")));if($ed){$u[]=strlen($ha);}return$u;}function
xxtea_mx($ya,$xa,$_a,$Fa){return
int32((($ya>>5&0x7FFFFFF)^$xa<<2)+(($xa>>3&0x1FFFFFFF)^$ya<<4))^int32(($_a^$xa)+($Fa^$ya));}function
encrypt_string($jc,$g){if($jc==""){return"";}$g=array_values(unpack("V*",pack("H*",md5($g))));$u=str2long($jc,true);$ba=count($u)-1;$ya=$u[$ba];$xa=$u[0];$pa=floor(6+52/($ba+1));$_a=0;while($pa-->0){$_a=int32($_a+0x9E3779B9);$nc=$_a>>2&3;for($va=0;$va<$ba;$va++){$xa=$u[$va+1];$Cb=xxtea_mx($ya,$xa,$_a,$g[$va&3^$nc]);$ya=int32($u[$va]+$Cb);$u[$va]=$ya;}$xa=$u[0];$Cb=xxtea_mx($ya,$xa,$_a,$g[$va&3^$nc]);$ya=int32($u[$ba]+$Cb);$u[$ba]=$ya;}return
long2str($u,false);}function
decrypt_string($jc,$g){if($jc==""){return"";}$g=array_values(unpack("V*",pack("H*",md5($g))));$u=str2long($jc,false);$ba=count($u)-1;$ya=$u[$ba];$xa=$u[0];$pa=floor(6+52/($ba+1));$_a=int32($pa*0x9E3779B9);while($_a){$nc=$_a>>2&3;for($va=$ba;$va>0;$va--){$ya=$u[$va-1];$Cb=xxtea_mx($ya,$xa,$_a,$g[$va&3^$nc]);$xa=int32($u[$va]-$Cb);$u[$va]=$xa;}$ya=$u[$ba];$Cb=xxtea_mx($ya,$xa,$_a,$g[$va&3^$nc]);$xa=int32($u[0]-$Cb);$u[0]=$xa;$_a=int32($_a-0x9E3779B9);}return
long2str($u,true);}$c='';if(!$ca){page_header(lang(47),lang(48,implode(", ",$sa)),null);page_footer("auth");exit;}$O=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$wb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($g)=explode(":",$b);$wb[$g]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["passwords"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$g=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Bc=$q->permanentLogin();$wb[$g]="$g:".base64_encode($Bc?encrypt_string($_POST["password"],$Bc):"");cookie("adminer_permanent",implode(" ",$wb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($O&&$_POST["token"]!=$O){page_header(lang(42),lang(49));page_footer("db");exit;}else{foreach(array("passwords","databases","history")as$g){set_session($g,null);}$g=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($wb[$g]){unset($wb[$g]);cookie("adminer_permanent",implode(" ",$wb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(50));}}elseif($wb&&!$_SESSION["passwords"]){session_regenerate_id();$Bc=$q->permanentLogin();foreach($wb
as$g=>$b){list(,$Ue)=explode(":",$b);list($Mb,$A,$M)=array_map('base64_decode',explode("-",$g));$_SESSION["passwords"][$Mb][$A][$M]=decrypt_string($Ue,$Bc);}}function
auth_error($De=null){global$c,$q,$O;$Jc=session_name();$n="";if(!$_COOKIE[$Jc]&&$_GET[$Jc]&&ini_bool("session.use_only_cookies")){$n=lang(51);}elseif(isset($_GET["username"])){if(($_COOKIE[$Jc]||$_GET[$Jc])&&!$O){$n=lang(52);}else{$P=&get_session("passwords");if(isset($P)){$n=h($De?$De->getMessage():(is_string($c)?$c:lang(53)));$P=null;}}}page_header(lang(19),$n,null);echo"<form action='' method='post'>\n";$q->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$c=connect();}if(is_string($c)||!$q->login($_GET["username"],get_session("passwords"))){auth_error();exit;}$O=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$O;}$n=($_POST?($_POST["token"]==$O?"":lang(49)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(54,'"post_max_size"')));function
connect_error(){global$c,$Pb,$O,$n,$ca;$z=array();if(DB!=""){page_header(lang(55).": ".h(DB),lang(56),true);}else{if($_POST["db"]&&!$n){set_session("databases",null);queries_redirect(substr(ME,0,-1),lang(57),drop_databases($_POST["db"]));}page_header(lang(58),$n,false);echo"<p><a href='".h(ME)."database='>".lang(59)."</a>\n";foreach(array('privileges'=>lang(60),'processlist'=>lang(61),'variables'=>lang(62),'status'=>lang(63),)as$g=>$b){if(support($g)){echo"<a href='".h(ME)."$g='>$b</a>\n";}}echo"<p>".lang(64,$ca[DRIVER],"<b>$c->server_info</b>","<b>$c->extension</b>")."\n","<p>".lang(65,"<b>".h(logged_user())."</b>")."\n";$z=get_databases();if($z){$W=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td><input type='hidden' name='token' value='$O'>&nbsp;<th>".lang(55)."<td>".lang(66)."<td>".lang(67)."</thead>\n";foreach($z
as$r){$sd=h(ME)."db=".urlencode($r);echo"<tr".odd()."><td>".checkbox("db[]",$r,in_array($r,(array)$_POST["db"])),"<th><a href='$sd'>".h($r)."</a>","<td><a href='$sd&amp;database='>".nbsp(db_collation($r,$W))."</a>","<td align='right'><a href='$sd&amp;schema=' id='tables-".h($r)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".lang(68)."' onclick=\"return confirm('".lang(69)." (' + formChecked(this, /db/) + ')');\">\n","</form>\n";}}page_footer("db");echo"<script type='text/javascript'>\n";foreach(count_tables($z)as$r=>$b){echo"setHtml('tables-".addcslashes($r,"\\'/")."', '$b');\n";}echo"</script>\n";}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$c->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"]))){if(DB!=""){set_session("databases",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""&&(!isset($_GET["ns"])||!set_schema($_GET["ns"]))){redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());}function
select($f,$J=null){if(!$f->num_rows){echo"<p class='message'>".lang(70)."\n";}else{echo"<table cellspacing='0' class='nowrap'>\n";$Ha=array();$F=array();$y=array();$re=array();$ga=array();odd('');for($k=0;$a=$f->fetch_row();$k++){if(!$k){echo"<thead><tr>";for($na=0;$na<count($a);$na++){$d=$f->fetch_field();$Ba=$d->orgtable;$uc=$d->orgname;if($Ba!=""){if(!isset($F[$Ba])){$F[$Ba]=array();foreach(indexes($Ba,$J)as$x){if($x["type"]=="PRIMARY"){$F[$Ba]=array_flip($x["columns"]);break;}}$y[$Ba]=$F[$Ba];}if(isset($y[$Ba][$uc])){unset($y[$Ba][$uc]);$F[$Ba][$uc]=$na;$Ha[$na]=$Ba;}}if($d->charsetnr==63){$re[$na]=true;}$ga[$na]=$d->type;echo"<th".($Ba!=""||$d->name!=$uc?" title='".h(($Ba!=""?"$Ba.":"").$uc)."'":"").">".h($d->name);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$g=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($re[$g]&&!is_utf8($b)){$b="<i>".lang(27,strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($ga[$g]==254){$b="<code>$b</code>";}}if(isset($Ha[$g])&&!$y[$Ha[$g]]){$v="edit=".urlencode($Ha[$g]);foreach($F[$Ha[$g]]as$Fc=>$na){$v.="&where".urlencode("[".bracket_escape($Fc)."]")."=".urlencode($a[$na]);}$b="<a href='".h(ME.$v)."'>$b</a>";}}echo"<td>$b";}}echo"</table>\n";}}function
referencable_primary($Ye){$e=array();foreach(table_status()as$Da=>$j){if($Da!=$Ye&&fk_support($j)){foreach(fields($Da)as$d){if($d["primary"]){if($e[$Da]){unset($e[$Da]);break;}$e[$Da]=$d;}}}}return$e;}function
edit_type($g,$d,$W,$ea=array()){global$Wa,$pb,$Qb;?>
<td><select name="<?php echo$g,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist($Wa+($ea?array(lang(71)=>$ea):array()),$d["type"]),'</select>
<td><input name="',$g,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td>',"<select name='$g"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.lang(72).')'.optionlist($W,$d["collation"]).'</select>',($pb?"<select name='$g"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($pb,$d["unsigned"]).'</select> ':' ');}function
process_length($S){global$Bb;return(preg_match("~^\\s*(?:$Bb)(?:\\s*,\\s*(?:$Bb))*\\s*\$~",$S)&&preg_match_all("~$Bb~",$S,$ka)?implode(",",$ka[0]):preg_replace('~[^0-9,+-]~','',$S));}function
process_type($d,$qc="COLLATE"){global$c,$pb;return" $d[type]".($d["length"]!=""&&!ereg('^date|time$',$d["type"])?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$pb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $qc ".$c->quote($d["collation"]):"");}function
process_field($d,$ic){global$c;return
array(idf_escape($d["field"]),process_type($ic),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".($d["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$d["default"])?$d["default"]:$c->quote($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".$c->quote($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($E){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$g=>$b){if(ereg("$g|$b",$E)){return" class='$g'";}}}function
edit_fields($o,$W,$E="TABLE",$we=0,$ea=array(),$Ib=false){global$Qb;foreach($o
as$d){if($d["comment"]!=""){$Ib=true;break;}}echo'<thead><tr class="wrap">
';if($E=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($E=="TABLE"?lang(73):lang(74)),'<td>',lang(75),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(76),'<td>',lang(77);?>
<?php if($E=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(78),'">AI</acronym>
<td class="hidden">',lang(79);?>
<?php echo(support("comment")?"<td".($Ib?"":" class='hidden'").">".lang(80):"");?>
<?php }echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0-dev' alt='+' title='".lang(81)."'>";?><script type="text/javascript">row_count = <?php echo
count($o),';</script>
</thead>
';foreach($o
as$k=>$d){$k++;$Dd=$d[($_POST?"orig":"field")];$xe=(isset($_POST["add"][$k-1])||(isset($d["field"])&&!$_POST["drop_col"][$k]))&&(support("drop_col")||$Dd=="");echo'<tr',($xe?"":" style='display: none;'"),'>
',($E=="PROCEDURE"?"<td>".html_select("fields[$k][inout]",$Qb,$d["inout"]):""),'<th>';if($xe){echo'<input name="fields[',$k,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($o)>1?"":"editingAddRow(this, $we); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$k,'][orig]" value="',h($Dd),'">
';edit_type("fields[$k]",$d,$W,$ea);?>
<?php if($E=="TABLE"){echo'<td>',checkbox("fields[$k][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$k,'"';if($d["auto_increment"]){echo' checked';}echo'>
<td class="hidden">',checkbox("fields[$k][has_default]",1,$d["has_default"]),'<input name="fields[',$k,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Ib?"":" class='hidden'")."><input name='fields[$k][comment]' value='".h($d["comment"])."' maxlength='255'>":"");?>
<?php }?>
<?php

echo"<td>",(support("move_col")?"<input type='image' name='add[$k]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0-dev' alt='+' title='".lang(81)."' onclick='return !editingAddRow(this, $we, 1);'>&nbsp;"."<input type='image' name='up[$k]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=up.gif&amp;version=3.0.0-dev' alt='^' title='".lang(82)."'>&nbsp;"."<input type='image' name='down[$k]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=down.gif&amp;version=3.0.0-dev' alt='v' title='".lang(83)."'>&nbsp;":""),($Dd==""||support("drop_col")?"<input type='image' name='drop_col[$k]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.0-dev' alt='x' title='".lang(84)."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$Ib;}function
process_fields(&$o){ksort($o);$K=0;if($_POST["up"]){$nb=0;foreach($o
as$g=>$d){if(key($_POST["up"])==$g){unset($o[$g]);array_splice($o,$nb,0,array($d));break;}if(isset($d["field"])){$nb=$K;}$K++;}}if($_POST["down"]){$oa=false;foreach($o
as$g=>$d){if(isset($d["field"])&&$oa){unset($o[key($_POST["down"])]);array_splice($o,$K,0,array($oa));break;}if(key($_POST["down"])==$g){$oa=$d;}$K++;}}$o=array_values($o);if($_POST["add"]){array_splice($o,key($_POST["add"]),0,array(array()));}}function
normalize_enum($m){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($m[0][0].$m[0][0],$m[0][0],substr($m[0],1,-1))),'\\'))."'";}function
grant($da,$ma,$y,$xb){if(!$ma){return
true;}if($ma==array("ALL PRIVILEGES","GRANT OPTION")){return($da=="GRANT"?queries("$da ALL PRIVILEGES$xb WITH GRANT OPTION"):queries("$da ALL PRIVILEGES$xb")&&queries("$da GRANT OPTION$xb"));}return
queries("$da ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$y, ",$ma).$y).$xb);}function
drop_create($Za,$ja,$ia,$ye,$cf,$uf,$h){if($_POST["drop"]){return
query_redirect($Za,$ia,$ye,true,!$_POST["dropped"]);}$Sa=$h!=""&&($_POST["dropped"]||queries($Za));$xf=queries($ja);if(!queries_redirect($ia,($h!=""?$cf:$uf),$xf)&&$Sa){restart_session();$_SESSION["messages"][]=$ye;}return$Sa;}function
tar_file($Z,$Zc){$e=pack("a100a8a8a8a12a12",$Z,644,0,0,decoct(strlen($Zc)),decoct(time()));$ze=8*32;for($k=0;$k<strlen($e);$k++){$ze+=ord($e{$k});}$e.=sprintf("%06o",$ze)."\0 ";return$e.str_repeat("\0",512-strlen($e)).$Zc.str_repeat("\0",511-(strlen($Zc)+511)%
512);}function
dump_table($j,$V,$qd=false){global$c;if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($V){dump_csv(array_keys(fields($j)));}}elseif($V){$ja=create_sql($j);if($ja){if($V=="DROP+CREATE"){echo"DROP ".($qd?"VIEW":"TABLE")." IF EXISTS ".idf_escape($j).";\n";}echo($V!="CREATE+ALTER"?$ja:($qd?substr_replace($ja," OR REPLACE",6,0):substr_replace($ja," IF NOT EXISTS",12,0))).";\n\n";}if($V=="CREATE+ALTER"&&!$qd){$i="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".$c->quote($j)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$o=array();$f=$c->query($i);$Kb="";while($a=$f->fetch_assoc()){$Qa=$a["COLUMN_DEFAULT"];$a["default"]=(isset($Qa)?$c->quote($Qa):"NULL");$a["after"]=$c->quote($Kb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($Qa)?" DEFAULT ".($Qa=="CURRENT_TIMESTAMP"?$Qa:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".$c->quote($a["COLUMN_COMMENT"]):"").($Kb?" AFTER ".idf_escape($Kb):" FIRST"));echo", ADD $a[alter]";$o[]=$a;$Kb=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $i;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($o
as$a){echo"
				WHEN ".$c->quote($a["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $a[alter]', '');
					IF NOT (_column_default <=> $a[default]) OR _is_nullable != '$a[IS_NULLABLE]' OR _collation_name != '$a[COLLATION_NAME]' OR _column_type != ".$c->quote($a["COLUMN_TYPE"])." OR _extra != '$a[EXTRA]' OR _column_comment != ".$c->quote($a["COLUMN_COMMENT"])." OR after != $a[after] THEN
						SET @alter_table = CONCAT(@alter_table, ', MODIFY $a[alter]');
					END IF;";}echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".idf_escape($j)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dump_data($j,$V,$_=""){global$c,$C;$Be=($C=="sqlite"?0:1048576);if($V){if($_POST["format"]=="sql"&&$V=="TRUNCATE+INSERT"){echo"TRUNCATE ".idf_escape($j).";\n";}$o=fields($j);$f=$c->query(($_?$_:"SELECT * FROM ".idf_escape($j)),1);if($f){$kc="";$bb="";while($a=$f->fetch_assoc()){if($_POST["format"]!="sql"){dump_csv($a);}else{if(!$kc){$kc="INSERT INTO ".idf_escape($j)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$g=>$b){$a[$g]=(isset($b)?(ereg('int|float|double|decimal',$o[$g]["type"])?$b:$c->quote($b)):"NULL");}$ha=implode(",\t",$a);if($V=="INSERT+UPDATE"){$s=array();foreach($a
as$g=>$b){$s[]=idf_escape($g)." = $b";}echo"$kc ($ha) ON DUPLICATE KEY UPDATE ".implode(", ",$s).";\n";}else{$ha=($Be?"\n":" ")."($ha)";if(!$bb){$bb=$kc.$ha;}elseif(strlen($bb)+2+strlen($ha)<$Be){$bb.=",$ha";}else{$bb.=";\n";echo$bb;$bb=$kc.$ha;}}}}if($_POST["format"]=="sql"&&$V!="INSERT+UPDATE"&&$bb){$bb.=";\n";echo$bb;}}}}function
dump_headers($ue,$Af=false){$Z=($ue!=""?friendly_url($ue):"adminer");$Ab=$_POST["output"];$vb=($_POST["format"]=="sql"?"sql":($Af?"tar":"csv"));header("Content-Type: ".($Ab=="bz2"?"application/x-bzip":($Ab=="gz"?"application/x-gzip":($vb=="tar"?"application/x-tar":($vb=="sql"||$Ab!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Ab!="text"){header("Content-Disposition: attachment; filename=$Z.$vb".($Ab!="file"&&!ereg('[^0-9a-z]',$Ab)?".$Ab":""));}session_write_close();if($_POST["output"]=="bz2"){ob_start('bzcompress',1e6);}if($_POST["output"]=="gz"){ob_start('gzencode',1e6);}return$vb;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Jb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$gb=" onclick=\"return confirm('".lang(69)."');\"";$Bb='\'(?:\'\'|[^\'\\\\]|\\\\.)*\'|"(?:""|[^"\\\\]|\\\\.)*"';$Qb=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$l=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$l-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$c->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($l)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$l=$_GET["table"];$o=fields($l);if(!$o){$n=error();}$R=($o?table_status($l):array());page_header(($o&&$R["Engine"]=="VIEW"?lang(85):lang(86)).": ".h($l),$n);$q->selectLinks($R);if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(87)."<td>".lang(75).(support("comment")?"<td>".lang(80):"")."</thead>\n";foreach($o
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".lang(78)."</i>":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if($R["Engine"]!="VIEW"){echo"<h3>".lang(88)."</h3>\n";$F=indexes($l);if($F){echo"<table cellspacing='0'>\n";foreach($F
as$h=>$x){ksort($x["columns"]);$rc=array();foreach($x["columns"]as$g=>$b){$rc[]="<i>".h($b)."</i>".($x["lengths"][$g]?"(".$x["lengths"][$g].")":"");}echo"<tr title='".h($h)."'><th>$x[type]<td>".implode(", ",$rc)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($l).'">'.lang(89)."</a>\n";if(fk_support($R)){echo"<h3>".lang(71)."</h3>\n";$ea=foreign_keys($l);if($ea){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(90)."<td>".lang(91)."<td>".lang(92)."<td>".lang(93).($C!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($ea
as$h=>$B){$v=($B["db"]!=""?"<strong>".h($B["db"])."</strong>.":"").h($B["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$B["source"]))."</i>","<td><a href='".h($B["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($B["db"]),ME):ME)."table=".urlencode($B["table"])."'>$v</a>","(<em>".implode("</em>, <em>",array_map('h',$B["target"]))."</em>)","<td>$B[on_delete]\n","<td>$B[on_update]\n";if($C!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($l).'&name='.urlencode($h)).'">'.lang(94).'</a>';}}echo"</table>\n";}if($C!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($l).'">'.lang(95)."</a>\n";}}if(support("trigger")){echo"<h3>".lang(96)."</h3>\n";$tc=triggers($l);if($tc){echo"<table cellspacing='0'>\n";foreach($tc
as$g=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($g)."<td><a href='".h(ME.'trigger='.urlencode($l).'&name='.urlencode($g))."'>".lang(94)."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($l).'">'.lang(97)."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header(lang(98),"",array(),DB);$kb=array();$se=array();preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$_COOKIE["adminer_schema"],$ka,PREG_SET_ORDER);foreach($ka
as$k=>$m){$kb[$m[1]]=array($m[2],$m[3]);$se[]="\n\t'".addcslashes($m[1],"\r\n'\\/")."': [ $m[2], $m[3] ]";}$Tb=0;$Ce=-1;$Ia=array();$Fe=array();$Re=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$hc=0;$Ia[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$h=>$d){$hc+=1.25;$d["pos"]=$hc;$Ia[$a["Name"]]["fields"][$h]=$d;}$Ia[$a["Name"]]["pos"]=($kb[$a["Name"]]?$kb[$a["Name"]]:array($Tb,0));if(fk_support($a)){foreach(foreign_keys($a["Name"])as$b){if(!$b["db"]){$ta=$Ce;if($kb[$a["Name"]][1]||$kb[$b["table"]][1]){$ta=min(floatval($kb[$a["Name"]][1]),floatval($kb[$b["table"]][1]))-1;}else{$Ce-=.1;}while($Re[(string)$ta]){$ta-=.0001;}$Ia[$a["Name"]]["references"][$b["table"]][(string)$ta]=array($b["source"],$b["target"]);$Fe[$b["table"]][$a["Name"]][(string)$ta]=$b["target"];$Re[(string)$ta]=true;}}}$Tb=max($Tb,$Ia[$a["Name"]]["pos"][0]+2.5+$hc);}echo'<div id="schema" style="height: ',$Tb;?>em;">
<script type="text/javascript">
tablePos = {<?php echo
implode(",",$se)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Tb,';
document.onmousemove = schemaMousemove;
document.onmouseup = schemaMouseup;
</script>
';foreach($Ia
as$h=>$j){echo"<div class='table' style='top: ".$j["pos"][0]."em; left: ".$j["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($h).'"><strong>'.h($h)."</strong></a><br>\n";foreach($j["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<em>$b</em>":$b)."<br>\n";}foreach((array)$j["references"]as$Wb=>$lc){foreach($lc
as$ta=>$Kc){$xc=$ta-$kb[$h][1];$k=0;foreach($Kc[0]as$Ca){echo"<div class='references' title='".h($Wb)."' id='refs$ta-".($k++)."' style='left: $xc"."em; top: ".$j["fields"][$Ca]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$xc)."em;'></div></div>\n";}}}foreach((array)$Fe[$h]as$Wb=>$lc){foreach($lc
as$ta=>$y){$xc=$ta-$kb[$h][1];$k=0;foreach($y
as$ra){echo"<div class='references' title='".h($Wb)."' id='refd$ta-".($k++)."' style='left: $xc"."em; top: ".$j["fields"][$ra]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=arrow.gif) no-repeat right center;&amp;version=3.0.0-dev'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$xc)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Ia
as$h=>$j){foreach((array)$j["references"]as$Wb=>$lc){foreach($lc
as$ta=>$Kc){$_c=$Tb;$od=-10;foreach($Kc[0]as$g=>$Ca){$Me=$j["pos"][0]+$j["fields"][$Ca]["pos"];$Ge=$Ia[$Wb]["pos"][0]+$Ia[$Wb]["fields"][$Kc[1][$g]]["pos"];$_c=min($_c,$Me,$Ge);$od=max($od,$Me,$Ge);}echo"<div class='references' id='refl$ta' style='left: $ta"."em; top: $_c"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($od-$_c)."em;'></div></div>\n";}}}echo'</div>
';}elseif(isset($_GET["dump"])){$l=$_GET["dump"];if($_POST){$Ne="";foreach(array("output","format","db_style","table_style","data_style")as$g){$Ne.="&$g=".urlencode($_POST[$g]);}cookie("adminer_export",substr($Ne,1));$vb=dump_headers(($l!=""?$l:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));if($_POST["format"]=="sql"){echo"-- Adminer $Pb ".$ca[DRIVER]." dump

".($C!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".$c->quote($c->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$V=$_POST["db_style"];$z=array(DB);if(DB==""){$z=$_POST["databases"];if(is_string($z)){$z=explode("\n",rtrim(str_replace("\r","",$z),"\n"));}}foreach((array)$z
as$r){if($c->select_db($r)){if($_POST["format"]=="sql"&&ereg('CREATE',$V)&&($ja=$c->result("SHOW CREATE DATABASE ".idf_escape($r),1))){if($V=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($r).";\n";}echo($V=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ja):$ja).";\n";}if($_POST["format"]=="sql"){if($V){echo
use_sql($r).";\n\n";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$db="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ma){$f=$c->query("SHOW $Ma STATUS WHERE Db = ".$c->quote($r));while($a=$f->fetch_assoc()){$db.=($V!='DROP+CREATE'?"DROP $Ma IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$c->result("SHOW CREATE $Ma ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){$f=$c->query("SHOW EVENTS");if($f){while($a=$f->fetch_assoc()){$db.=($V!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$c->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}}if($db){echo"DELIMITER ;;\n\n$db"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$X=array();foreach(table_status()as$a){$j=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$Ee=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($j||$Ee){if(isset($a["Engine"])){if($vb=="tar"){ob_start();}dump_table($a["Name"],($j?$_POST["table_style"]:""));if($Ee){dump_data($a["Name"],$_POST["data_style"]);}if($_POST["format"]=="sql"&&$_POST["triggers"]){$tc=trigger_sql($a["Name"],$_POST["table_style"]);if($tc){echo"\nDELIMITER ;;\n$tc\nDELIMITER ;\n";}}if($vb=="tar"){echo
tar_file((DB!=""?"":"$r/")."$a[Name].csv",ob_get_clean());}elseif($_POST["format"]=="sql"){echo"\n";}}elseif($_POST["format"]=="sql"){$X[]=$a["Name"];}}}foreach($X
as$Ic){dump_table($Ic,$_POST["table_style"],true);}if($vb=="tar"){echo
pack("x512");}}if($V=="CREATE+ALTER"&&$_POST["format"]=="sql"){$i="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $i;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";$f=$c->query($i);while($a=$f->fetch_assoc()){$Ra=$c->quote($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".$c->quote($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $Ra THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$Ra;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))&&$_POST["format"]=="sql"){echo"SELECT @adminer_alter;\n";}}}exit;}page_header(lang(99),"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Ie=array('','USE','DROP+CREATE','CREATE');$me=array('','DROP+CREATE','CREATE');$nf=array('','TRUNCATE+INSERT','INSERT','INSERT+UPDATE');if($C=="sql"){$Ie[]='CREATE+ALTER';$me[]='CREATE+ALTER';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}$Aa=($_GET["dump"]=="");echo"<tr><th>".lang(100)."<td>".$q->dumpOutput(0,$a["output"])."\n","<tr><th>".lang(101)."<td>".$q->dumpFormat(0,$a["format"])."\n","<tr><th>".lang(55)."<td>".html_select('db_style',$Ie,$a["db_style"]).(support("routine")?checkbox("routines",1,$Aa,lang(102)):"").(support("event")?checkbox("events",1,$Aa,lang(103)):""),"<tr><th>".lang(67)."<td>".html_select('table_style',$me,$a["table_style"]).(support("trigger")?checkbox("triggers",1,$a["table_style"],lang(96)):""),"<tr><th>".lang(104)."<td>".html_select('data_style',$nf,$a["data_style"]),'</table>
<p><input type="submit" value="',lang(99),'">

<table cellspacing="0">
';$hd=array();if(DB!=""){$Aa=($l!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Aa onclick='formCheck(this, /^tables\\[/);'>".lang(67)."</label>","<th style='text-align: right;'><label>".lang(104)."<input type='checkbox' id='check-data'$Aa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$X="";foreach(table_status()as$a){$h=$a["Name"];$ec=ereg_replace("_.*","",$h);$Aa=($l==""||$l==(substr($l,-1)=="%"?"$ec%":$h));$rc="<tr><td>".checkbox("tables[]",$h,$Aa,$h,"formUncheck('check-tables');");if(eregi("view",$a["Engine"])){$X.="$rc\n";}else{echo"$rc<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$h,$Aa,"","formUncheck('check-data');")."</label>\n";}$hd[$ec]++;}echo$X;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($l==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(55)."</label></thead>\n";$z=get_databases();if($z){foreach($z
as$r){if(!information_schema($r)){$ec=ereg_replace("_.*","",$r);echo"<tr><td>".checkbox("databases[]",$r,$l==""||$l=="$ec%",$r,"formUncheck('check-databases');")."</label>\n";$hd[$ec]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$cb=true;foreach($hd
as$g=>$b){if($g!=""&&$b>1){echo($cb?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$g%")."'>".h($g)."</a>";$cb=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(60));$f=$c->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$f){echo'<form action=""><p>
';hidden_fields_get();?>
<?php echo
lang(17),': <input name="user">
',lang(16),': <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="',lang(26),'">
</form>
';$f=$c->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".lang(17)."<th>".lang(16)."</thead>\n";while($a=$f->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.lang(105).'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.lang(106)."</a>";}elseif(isset($_GET["sql"])){restart_session();$mf=&get_session("history");$hb=&$mf[DB];if(!$n&&$_POST["clear"]){$hb=array();redirect(remove_from_uri("history"));}page_header(lang(38),$n);if(!$n&&$_POST){$Ea=false;$i=$_POST["query"];if($_POST["webfile"]){$Ea=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$i=($Ea?fread($Ea,1e6):false);}elseif($_POST["file"]){$i=get_file("sql_file",true);}if(is_string($i)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($i)+memory_get_usage()+8e6);}if($i!=""&&strlen($i)<1e6&&(!$hb||end($hb)!=$i)){$hb[]=$i;}$Gc="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$ad=";";$K=0;$Od=true;$J=connect();if(is_object($J)&&DB!=""){$J->select_db(DB);}$la=0;$id="";while($i!=""){if(!$K&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$i,$m)){$ad=$m[1];$i=substr($i,strlen($m[0]));}else{preg_match('('.preg_quote($ad).'|[\'`"]|/\\*|-- |#|$)',$i,$m,PREG_OFFSET_CAPTURE,$K);$oa=$m[0][0];$K=$m[0][1]+strlen($oa);if(!$oa&&$Ea&&!feof($Ea)){$i.=fread($Ea,1e5);}else{if(!$oa&&rtrim($i)==""){break;}if(!$oa||$oa==$ad){$Od=false;$pa=substr($i,0,$m[0][1]);$la++;echo"<pre class='jush-$C' id='sql-$la'>".shorten_utf8(trim($pa),1000)."</pre>\n";ob_flush();flush();$gd=explode(" ",microtime());if(!$c->multi_query($pa)){echo"<p class='error'>".lang(107).": ".error()."\n";$id.=" <a href='#sql-$la'>$la</a>";if($_POST["error_stops"]){break;}}else{if(is_object($J)&&preg_match("~^$Gc*(USE)\\b~isU",$pa)){$J->query($pa);}do{$f=$c->store_result();$fd=explode(" ",microtime());$Sd=" <span class='time'>(".lang(108,max(0,$fd[0]-$gd[0]+$fd[1]-$gd[1])).")</span>";if(is_object($f)){select($f,$J);echo"<p>".($f->num_rows?lang(109,$f->num_rows):"").$Sd;if($J&&preg_match("~^($Gc|\\()*SELECT\\b~isU",$pa)){$T="explain-$la";echo", <a href='#$T' onclick=\"return !toggle('$T');\">EXPLAIN</a>\n","<div id='$T' class='hidden'>\n";select(explain($J,$pa));echo"</div>\n";}}else{if(preg_match("~^$Gc*(CREATE|DROP|ALTER)$Gc+(DATABASE|SCHEMA)\\b~isU",$pa)){restart_session();set_session("databases",null);session_write_close();}echo"<p class='message' title='".h($c->info)."'>".lang(110,$c->affected_rows)."$Sd\n";}$gd=$fd;}while($c->next_result());}$i=substr($i,$K);$K=0;}else{while(preg_match('~'.($oa=='/*'?'\\*/':(ereg('-- |#',$oa)?"\n":"$oa|\\\\.")).'|$~s',$i,$m,PREG_OFFSET_CAPTURE,$K)){$ha=$m[0][0];$K=$m[0][1]+strlen($ha);if(!$ha&&$Ea&&!feof($Ea)){$i.=fread($Ea,1e6);}elseif($ha[0]!="\\"){break;}}}}}}if($id&&$la>1){echo"<p class='error'>".lang(107).": $id\n";}if($Od){echo"<p class='message'>".lang(111)."\n";}}else{echo"<p class='error'>".upload_error($i)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$pa=$_GET["sql"];if($_POST){$pa=$_POST["query"];}elseif($_GET["history"]!=""){$pa=$hb[$_GET["history"]];}textarea("query",$pa,20);echo'<p>
<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(112),'">
',checkbox("error_stops",1,$_POST["error_stops"],lang(113)),'
<p>
';if(!ini_bool("file_uploads")){echo
lang(114);}else{?>
<?php echo
lang(115),': <input type="file" name="sql_file">
<input type="submit" name="file" value="',lang(116),'">
';}echo'
<p>';$jd=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$g=>$b){if(extension_loaded($b)){$jd[]=".$g";}}echo
lang(117,"<code>adminer.sql".($jd?"[".implode("|",$jd)."]":"")."</code>"),' <input type="submit" name="webfile" value="',lang(116),'">

';if($hb){print_fieldset("history",lang(118),$_GET["history"]!="");foreach($hb
as$g=>$b){echo'<a href="'.h(ME."sql=&history=$g").'">'.lang(26)."</a> <code class='jush-$C'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(119)."'>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$l=$_GET["edit"];$t=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$_b=(isset($_GET["select"])?$_POST["edit"]:$t);$o=fields($l);foreach($o
as$h=>$d){if(!isset($d["privileges"][$_b?"update":"insert"])||$q->fieldName($d)==""){unset($o[$h]);}}if($_POST&&!$n&&!isset($_GET["select"])){$ia=$_POST["referer"];if($_POST["insert"]){$ia=($_b?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ia)){$ia=ME."select=".urlencode($l);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($l),$t),$ia,lang(120));}else{$s=array();foreach($o
as$h=>$d){$b=process_input($d);if($b!==false&&$b!==null){$s[idf_escape($h)]=($_b?"\n".idf_escape($h)." = $b":$b);}}if($_b){if(!$s){redirect($ia);}query_redirect("UPDATE".limit1(table($l)." SET".implode(",",$s),"\nWHERE $t"),$ia,lang(121));}else{$f=insert_into($l,$s);$Rd=($f?last_id():0);queries_redirect($ia,lang(122,($Rd?" $Rd":"")),$f);}}}$Da=$q->tableName(table_status($l));page_header(($_b?lang(26):lang(123)),$n,array("select"=>array($l,$Da)),$Da);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($t){$_=array();foreach($o
as$h=>$d){if(isset($d["privileges"]["select"])){$_[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($h)." AS ":"")).idf_escape($h);}}$a=array();if($_){$f=$c->query("SELECT".limit(implode(", ",$_)." FROM ".table($l)," WHERE $t",(isset($_GET["select"])?2:1)));$a=$f->fetch_assoc();if(isset($_GET["select"])&&$f->fetch_assoc()){$a=null;}}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($o){echo"<table cellspacing='0'>\n";foreach($o
as$h=>$d){echo"<tr><th>".$q->fieldName($d);$Qa=$_GET["set"][bracket_escape($h)];$p=(isset($a)?($a[$h]!=""&&ereg("enum|set",$d["type"])?intval($a[$h]):$a[$h]):(!$_b&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Qa)?$Qa:$d["default"]))));if(!$_POST["save"]&&is_string($p)){$p=$q->editVal($p,$d);}$N=($_POST["save"]?(string)$_POST["function"][$h]:($t&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($p===false?null:(isset($p)?'':'NULL'))));if($d["type"]=="timestamp"&&$p=="CURRENT_TIMESTAMP"){$p="";$N="now";}input($d,$p,$N);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$O,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($o){echo"<input type='submit' value='".lang(124)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($_b?lang(125):lang(126))."'>\n";}}if($_b){echo"<input type='submit' name='delete' value='".lang(127)."'$gb>\n";}echo'</form>
';}elseif(isset($_GET["create"])){$l=$_GET["create"];$Kd=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Gd=referencable_primary($l);$ea=array();foreach($Gd
as$Da=>$d){$ea[idf_escape($Da).".".idf_escape($d["field"])]=$Da;}$Cc=array();$Dc=array();if($l!=""){$Cc=fields($l);$Dc=table_status($l);}if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($l),substr(ME,0,-1),lang(128));}else{$o=array();$ib=array();ksort($_POST["fields"]);$md=reset($Cc);$Kb="FIRST";foreach($_POST["fields"]as$g=>$d){$ic=(isset($ga[$d["type"]])?$d:$Gd[$ea[$d["type"]]]);if($d["field"]!=""){if($ic){if(!$d["has_default"]){$d["default"]=null;}$Qa=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($Qa!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$Qa;}if($g==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$Ud=process_field($d,$ic);if($Ud!=process_field($md,$md)){$o[]=array($d["orig"],$Ud,$Kb);}if(!isset($ga[$d["type"]])){$ib[]=($l!=""?"ADD ":"  ")."FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".idf_escape($ea[$d["type"]])." (".idf_escape($ic["field"]).")";}}$Kb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$o[]=array($d["orig"]);}if($d["orig"]!=""){$md=next($Cc);}}$sb="";if(in_array($_POST["partition_by"],$Kd)){$dd=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$g=>$b){$p=$_POST["partition_values"][$g];$dd[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($p!=""?" ($p)":" MAXVALUE");}}$sb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($dd?" (".implode(",",$dd)."\n)":($_POST["partitions"]?" PARTITIONS ".intval($_POST["partitions"]):""));}elseif($l!=""&&support("partitioning")){$sb.="\nREMOVE PARTITIONING";}$ua=lang(129);if($l==""){cookie("adminer_engine",$_POST["Engine"]);$ua=lang(130);}queries_redirect(ME."table=".urlencode($_POST["name"]),$ua,alter_table($l,$_POST["name"],$o,$ib,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Dc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Dc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?preg_replace('~[^0-9]+~','',$_POST["Auto_increment"]):""),$sb));}}page_header(($l!=""?lang(24):lang(131)),$n,array("table"=>$l),$l);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"")),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($l!=""){$a=$Dc;$a["name"]=$l;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($Cc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$Ub="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".$c->quote(DB)." AND TABLE_NAME = ".$c->quote($l);$f=$c->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Ub ORDER BY PARTITION_ORDINAL_POSITION LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$f->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();$f=$c->query("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Ub AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");while($Qc=$f->fetch_assoc()){$a["partition_names"][]=$Qc["PARTITION_NAME"];$a["partition_values"][]=$Qc["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$W=collations();$ld=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($ld&&count($a["fields"])>$ld){echo"<p class='error'>".h(lang(132,'suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$pd=engines();foreach($pd
as$ub){if(!strcasecmp($ub,$a["Engine"])){$a["Engine"]=$ub;break;}}echo'
<form action="" method="post" id="form">
<p>
',lang(133),': <input name="name" maxlength="64" value="',h($a["name"]),'">
',($pd?html_select("Engine",array(""=>"(".lang(134).")")+$pd,$a["Engine"]):""),' ',($W?html_select("Collation",array(""=>"(".lang(72).")")+$W,$a["Collation"]):""),' <input type="submit" value="',lang(124),'">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Ib=edit_fields($a["fields"],$W,"TABLE",$ld,$ea,$a["Comment"]!="");echo'</table>
<p>
',lang(78),': <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]);?>">
<script type="text/javascript">
document.write('<label><input type="checkbox" onclick="columnShow(this.checked, 5);"><?php echo
lang(79),'<\\/label>\');
</script>
',(support("comment")?checkbox("","",$Ib,lang(80),"columnShow(this.checked, 6); toggle('Comment');").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($Ib?'':' class="hidden"').'>':''),'<p>
<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(124),'">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="',lang(68),'"',$gb,'>';}?>
<?php
if(support("partitioning")){$ie=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",lang(135),$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Kd,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
',lang(136),': <input name="partitions" size="2" value="',h($a["partitions"]),'"',($ie||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($ie?"":" class='hidden'"),'>
<thead><tr><th>',lang(137),'<th>',lang(138),'</thead>
';foreach($a["partition_names"]as$g=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($g==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$g]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$l=$_GET["indexes"];$bd=array("PRIMARY","UNIQUE","INDEX");$R=table_status($l);if(ereg("MyISAM|Maria",$R["Engine"])){$bd[]="FULLTEXT";}$F=indexes($l);if($_POST&&!$n&&!$_POST["add"]){$w=array();foreach($_POST["indexes"]as$x){if(in_array($x["type"],$bd)){$y=array();$cc=array();$s=array();ksort($x["columns"]);foreach($x["columns"]as$g=>$L){if($L!=""){$S=$x["lengths"][$g];$s[]=idf_escape($L).($S?"(".intval($S).")":"");$y[]=$L;$cc[]=($S?$S:null);}}if($y){foreach($F
as$h=>$tb){ksort($tb["columns"]);ksort($tb["lengths"]);if($x["type"]==$tb["type"]&&array_values($tb["columns"])===$y&&(!$tb["lengths"]||array_values($tb["lengths"])===$cc)){unset($F[$h]);continue
2;}}$w[]=array($x["type"],"(".implode(", ",$s).")");}}}foreach($F
as$h=>$tb){$w[]=array($tb["type"],idf_escape($h),"DROP");}if(!$w){redirect(ME."table=".urlencode($l));}queries_redirect(ME."table=".urlencode($l),lang(139),alter_indexes($l,$w));}page_header(lang(88),$n,array("table"=>$l),$l);$o=array_keys(fields($l));$a=array("indexes"=>$F);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$g=>$x){if($x["columns"][count($x["columns"])]!=""){$a["indexes"][$g]["columns"][]="";}}$x=end($a["indexes"]);if($x["type"]||array_filter($x["columns"],'strlen')||array_filter($x["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$g=>$x){$a["indexes"][$g]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0">
<thead><tr><th>',lang(140),'<th>',lang(141),'</thead>
';$na=0;foreach($a["indexes"]as$x){echo"<tr><td>".html_select("indexes[$na][type]",array(-1=>"")+$bd,$x["type"],($na==count($a["indexes"])-1?"indexesAddRow(this);":1))."<td>\n";ksort($x["columns"]);foreach($x["columns"]as$k=>$L){echo"<span>".html_select("indexes[$na][columns][$k]",array(-1=>"")+$o,$L,($k==count($x["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$na][lengths][$k]' size='2' value='".h($x["lengths"][$k])."'> </span>\n";}echo"\n";$na++;}echo'</table>
<p>
<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(124),'">
<noscript><p><input type="submit" name="add" value="',lang(81),'"></noscript>
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(142),drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),lang(143),rename_database($_POST["name"],$_POST["collation"]));}else{$dc=explode("\n",str_replace("\r","",$_POST["name"]));$Xd=true;$nb="";foreach($dc
as$r){if(count($dc)==1||$r!=""){if(!create_database($r,$_POST["collation"])){$Xd=false;}$nb=$r;}}queries_redirect(ME."db=".urlencode($nb),lang(144),$Xd);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"])." COLLATE ".$c->quote($_POST["collation"]),substr(ME,0,-1),lang(145));}}page_header(DB!=""?lang(146):lang(147),$n,array(),DB);$W=collations();$h=DB;$qc=null;if($_POST){$h=$_POST["name"];$qc=$_POST["collation"];}elseif(DB!=""){$qc=db_collation(DB,$W);}elseif($C=="sql"){foreach(get_vals("SHOW GRANTS")as$da){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$da,$m)&&$m[1]){$h=stripcslashes(idf_unescape("`$m[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($h,"\n")?'<textarea name="name" rows="10" cols="40">'.h($h).'</textarea><br>':'<input name="name" value="'.h($h).'" maxlength="64">')."\n".($W?html_select("collation",array(""=>"(".lang(72).")")+$W,$qc):""),'<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(124),'">
';if(DB!=""){echo"<input type='submit' name='drop' value='".lang(68)."'$gb>\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0-dev' alt='+' title='".lang(81)."'>\n";}echo'</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$n){$v=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"]){query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$v,lang(148));}else{$v.=urlencode($_POST["name"]);if($_GET["ns"]==""){query_redirect("CREATE SCHEMA ".idf_escape($_POST["name"]),$v,lang(149));}elseif($_GET["ns"]!=$_POST["name"]){query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_POST["name"]),$v,lang(150));}else{redirect($v);}}}page_header($_GET["ns"]!=""?lang(151):lang(152),$n);$a=array("name"=>$_GET["ns"]);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(124),'">
';if($_GET["ns"]!=""){echo"<input type='submit' name='drop' value='".lang(68)."'$gb>\n";}echo'</form>
';}elseif(isset($_GET["call"])){$Na=$_GET["call"];page_header(lang(153).": ".h($Na),$n);$Ma=routine($Na,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Fb=array();$db=array();foreach($Ma["fields"]as$k=>$d){if(substr($d["inout"],-3)=="OUT"){$db[$k]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$Fb[]=$k;}}if(!$n&&$_POST){$Vd=array();foreach($Ma["fields"]as$g=>$d){if(in_array($g,$Fb)){$b=process_input($d);if($b===false){$b="''";}if(isset($db[$g])){$c->query("SET @".idf_escape($d["field"])." = $b");}}$Vd[]=(isset($db[$g])?"@".idf_escape($d["field"]):$b);}$i=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Na)."(".implode(", ",$Vd).")";echo"<p><code class='jush-$C'>".h($i)."</code> <a href='".h(ME)."sql=".urlencode($i)."'>".lang(26)."</a>\n";if(!$c->multi_query($i)){echo"<p class='error'>".error()."\n";}else{do{$f=$c->store_result();if(is_object($f)){select($f);}else{echo"<p class='message'>".lang(154,$c->affected_rows)."\n";}}while($c->next_result());if($db){select($c->query("SELECT ".implode(", ",$db)));}}}echo'
<form action="" method="post">
';if($Fb){echo"<table cellspacing='0'>\n";foreach($Fb
as$g){$d=$Ma["fields"][$g];$h=$d["field"];echo"<tr><th>".$q->fieldName($d);$p=$_POST["fields"][$h];if($p!=""&&ereg("enum|set",$d["type"])){$p=intval($p);}input($d,$p,(string)$_POST["function"][$h]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(153),'">
</form>
';}elseif(isset($_GET["foreign"])){$l=$_GET["foreign"];if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($l)."\nDROP ".($C=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($l),lang(155));}else{$Ca=array_filter($_POST["source"],'strlen');ksort($Ca);$ra=array();foreach($Ca
as$g=>$b){$ra[$g]=$_POST["target"][$g];}query_redirect("ALTER TABLE ".table($l).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Ca)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$ra)).")".(in_array($_POST["on_delete"],$Jb)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$Jb)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($l),($_GET["name"]!=""?lang(156):lang(157)));$n=lang(158)."<br>$n";}}page_header(lang(159),$n,array("table"=>$l),$l);$a=array("table"=>$l,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$ea=foreign_keys($l);$a=$ea[$_GET["name"]];$a["source"][]="";}$Ca=array_keys(fields($l));$ra=($l===$a["table"]?$Ca:array_keys(fields($a["table"])));$Yd=array();foreach(table_status()as$h=>$R){if(fk_support($R)){$Yd[]=$h;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){?>
<?php echo
lang(160),':
',html_select("table",$Yd,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(161),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(90),'<th>',lang(91),'</thead>
';$na=0;foreach($a["source"]as$g=>$b){echo"<tr>","<td>".html_select("source[".intval($g)."]",array(-1=>"")+$Ca,$b,($na==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".intval($g)."]",$ra,$a["target"][$g]);$na++;}echo'</table>
<p>
',lang(92),': ',html_select("on_delete",array(-1=>"")+$Jb,$a["on_delete"]),' ',lang(93),': ',html_select("on_update",array(-1=>"")+$Jb,$a["on_update"]),'<p>
<input type="submit" value="',lang(124),'">
<noscript><p><input type="submit" name="add" value="',lang(162),'"></noscript>
';}?>
<?php if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(68),'"',$gb,'>';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["view"])){$l=$_GET["view"];$Sa=false;if($_POST&&!$n){$Sa=drop_create("DROP VIEW ".table($l),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),lang(163),lang(164),lang(165),$l);}page_header(($l!=""?lang(23):lang(166)),$n,array("table"=>$l),$l);$a=array();if($_POST){$a=$_POST;}elseif($l!=""){$a=view($l);$a["name"]=$l;}echo'
<form action="" method="post">
<p>';textarea("select",$a["select"]);echo'<p>
<input type="hidden" name="token" value="',$O,'">
';if($Sa){echo'<input type="hidden" name="dropped" value="1">';}?>
<?php echo
lang(167),': <input name="name" value="',h($a["name"]),'" maxlength="64">
<input type="submit" value="',lang(124),'">
</form>
';}elseif(isset($_GET["event"])){$Xa=$_GET["event"];$Zd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Uc=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$n){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($Xa),substr(ME,0,-1),lang(168));}elseif(in_array($_POST["INTERVAL_FIELD"],$Zd)&&isset($Uc[$_POST["STATUS"]])){$ae="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".$c->quote($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".$c->quote($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".$c->quote($_POST["ENDS"]):""):"AT ".$c->quote($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";query_redirect(($Xa!=""?"ALTER EVENT ".idf_escape($Xa).$ae.($Xa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$ae)."\n".$Uc[$_POST["STATUS"]]." COMMENT ".$c->quote($_POST["EVENT_COMMENT"])." DO\n$_POST[EVENT_DEFINITION]",substr(ME,0,-1),($Xa!=""?lang(169):lang(170)));}}page_header(($Xa!=""?lang(171).": ".h($Xa):lang(172)),$n);$a=array();if($_POST){$a=$_POST;}elseif($Xa!=""){$f=$c->query("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".$c->quote(DB)." AND EVENT_NAME = ".$c->quote($Xa));$a=$f->fetch_assoc();}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(167),'<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>',lang(173),'<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>',lang(174),'<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>',lang(175),'<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Zd,$a["INTERVAL_FIELD"]),'<tr><th>',lang(63),'<td>',html_select("STATUS",$Uc,$a["STATUS"]),'<tr><th>',lang(80),'<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",lang(176)),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(124),'">
';if($Xa!=""){echo'<input type="submit" name="drop" value="',lang(68),'"',$gb,'>';}echo'</form>
';}elseif(isset($_GET["procedure"])){$Na=$_GET["procedure"];$Ma=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Sa=false;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$s=array();$o=(array)$_POST["fields"];ksort($o);foreach($o
as$d){if($d["field"]!=""){$s[]=(in_array($d["inout"],$Qb)?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Sa=drop_create("DROP $Ma ".idf_escape($Na),"CREATE $Ma ".idf_escape($_POST["name"])." (".implode(", ",$s).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"")."\n$_POST[definition]",substr(ME,0,-1),lang(177),lang(178),lang(179),$Na);}page_header(($Na!=""?(isset($_GET["function"])?lang(180):lang(181)).": ".h($Na):(isset($_GET["function"])?lang(182):lang(183))),$n);$W=get_vals("SHOW CHARACTER SET");sort($W);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Na!=""){$a=routine($Na,$Ma);$a["name"]=$Na;}echo'
<form action="" method="post" id="form">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$W,$Ma);if(isset($_GET["function"])){echo"<tr><td>".lang(184);edit_type("returns",$a["returns"],$W);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="hidden" name="token" value="',$O,'">
';if($Sa){echo'<input type="hidden" name="dropped" value="1">';}?>
<?php echo
lang(167),': <input name="name" value="',h($a["name"]),'" maxlength="64">
<input type="submit" value="',lang(124),'">
';if($Na!=""){echo'<input type="submit" name="drop" value="',lang(68),'"',$gb,'>';}echo'</form>
';}elseif(isset($_GET["sequence"])){$zb=$_GET["sequence"];if($_POST&&!$n){$v=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP SEQUENCE ".idf_escape($zb),$v,lang(185));}elseif($zb==""){query_redirect("CREATE SEQUENCE ".idf_escape($_POST["name"]),$v,lang(186));}elseif($zb!=$_POST["name"]){query_redirect("ALTER SEQUENCE ".idf_escape($zb)." RENAME TO ".idf_escape($_POST["name"]),$v,lang(187));}else{redirect($v);}}page_header($zb!=""?lang(188).": ".h($zb):lang(189),$n);$a=array("name"=>$zb);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(124),'">
';if($zb!=""){echo"<input type='submit' name='drop' value='".lang(68)."'$gb>\n";}echo'</form>
';}elseif(isset($_GET["trigger"])){$l=$_GET["trigger"];$Hc=trigger_options();$le=array("INSERT","UPDATE","DELETE");$Sa=false;if($_POST&&!$n&&in_array($_POST["Timing"],$Hc["Timing"])&&in_array($_POST["Event"],$le)&&in_array($_POST["Type"],$Hc["Type"])){$ge=" $_POST[Timing] $_POST[Event]";$xb=" ON ".table($l);$Sa=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($C=="pgsql"?$xb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($C=="mssql"?$xb.$ge:$ge.$xb)." $_POST[Type]\n$_POST[Statement]",ME."table=".urlencode($l),lang(190),lang(191),lang(192),$_GET["name"]);}page_header(($_GET["name"]!=""?lang(193).": ".h($_GET["name"]):lang(194)),$n,array("table"=>$l));$a=array("Trigger"=>$l."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(195),'<td>',html_select("Timing",$Hc["Timing"],$a["Timing"],"if (/^".h(preg_quote($l,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(addcslashes($l,"\r\n'\\"))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>',lang(196),'<td>',html_select("Event",$le,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>',lang(75),'<td>',html_select("Type",$Hc["Type"],$a["Type"]),'</table>
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="hidden" name="token" value="',$O,'">
';if($Sa){echo'<input type="hidden" name="dropped" value="1">';}?>
<?php echo
lang(167),': <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<input type="submit" value="',lang(124),'">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(68),'"',$gb,'>';}echo'</form>
';}elseif(isset($_GET["user"])){$Xc=$_GET["user"];$ma=array(""=>array("All privileges"=>""));$f=$c->query("SHOW PRIVILEGES");while($a=$f->fetch_assoc()){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$zc){$ma[$zc][$a["Privilege"]]=$a["Comment"];}}$ma["Server Admin"]+=$ma["File access on server"];$ma["Databases"]["Create routine"]=$ma["Procedures"]["Create routine"];unset($ma["Procedures"]["Create routine"]);$ma["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$ma["Columns"][$b]=$ma["Tables"][$b];}unset($ma["Server Admin"]["Usage"]);foreach($ma["Tables"]as$g=>$b){unset($ma["Databases"][$g]);}$pc=array();if($_POST){foreach($_POST["objects"]as$g=>$b){$pc[$b]=(array)$pc[$b]+(array)$_POST["grants"][$g];}}$Ya=array();$Ec="";if(isset($_GET["host"])&&($f=$c->query("SHOW GRANTS FOR ".$c->quote($Xc)."@".$c->quote($_GET["host"])))){while($a=$f->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$m)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$m[1],$ka,PREG_SET_ORDER)){foreach($ka
as$b){if($b[1]!="USAGE"){$Ya["$m[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$Ya["$m[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$m)){$Ec=$m[1];}}}if($_POST&&!$n){$Nb=(isset($_GET["host"])?$c->quote($Xc)."@".$c->quote($_GET["host"]):"''");$fb=$c->quote($_POST["user"])."@".$c->quote($_POST["host"]);$Yc=$c->quote($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Nb",ME."privileges=",lang(197));}else{if($Nb!=$fb){$n=!queries(($c->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $fb IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $Yc");}elseif($_POST["pass"]!=$Ec||!$_POST["hashed"]){queries("SET PASSWORD FOR $fb = ".($_POST["hashed"]?$Yc:"PASSWORD($Yc)"));}if(!$n){$oc=array();foreach($pc
as$Oa=>$da){if(isset($_GET["grant"])){$da=array_filter($da);}$da=array_keys($da);if(isset($_GET["grant"])){$oc=array_diff(array_keys(array_filter($pc[$Oa],'strlen')),$da);}elseif($Nb==$fb){$ke=array_keys((array)$Ya[$Oa]);$oc=array_diff($ke,$da);$da=array_diff($da,$ke);unset($Ya[$Oa]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Oa,$m)&&(!grant("REVOKE",$oc,$m[2]," ON $m[1] FROM $fb")||!grant("GRANT",$da,$m[2]," ON $m[1] TO $fb"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Nb!=$fb){queries("DROP USER $Nb");}elseif(!isset($_GET["grant"])){foreach($Ya
as$Oa=>$oc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Oa,$m)){grant("REVOKE",array_keys($oc),$m[2]," ON $m[1] FROM $fb");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(198):lang(199)),!$n);if($Nb!=$fb){$c->query("DROP USER $fb");}}}page_header((isset($_GET["host"])?lang(17).": ".h("$Xc@$_GET[host]"):lang(106)),$n,array("privileges"=>array('',lang(60))));if($_POST){$a=$_POST;$Ya=$pc;}else{$a=$_GET+array("host"=>$c->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Ec;if($Ec!=""){$a["hashed"]=true;}$Ya[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(17),'<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>',lang(16),'<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>',lang(18),'<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){?><script type="text/javascript">typePassword(document.getElementById('pass'));</script><?php }?>
<?php echo
checkbox("hashed",1,$a["hashed"],lang(200),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($c->server_info,0,3)."/en/grant.html'>".lang(60)."</a>";$k=0;foreach($Ya
as$Oa=>$da){echo'<th>'.($Oa!="*.*"?"<input name='objects[$k]' value='".h($Oa)."' size='10'>":"<input type='hidden' name='objects[$k]' value='*.*' size='10'>*.*");$k++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(16),"Databases"=>lang(55),"Tables"=>lang(86),"Columns"=>lang(87),"Procedures"=>lang(201),)as$zc=>$fc){foreach((array)$ma[$zc]as$mc=>$Ra){echo"<tr".odd()."><td".($fc?">$fc<td":" colspan='2'").' lang="en" title="'.h($Ra).'">'.h($mc);$k=0;foreach($Ya
as$Oa=>$da){$h="'grants[$k][".h(strtoupper($mc))."]'";$p=$da[strtoupper($mc)];if($zc=="Server Admin"&&$Oa!=(isset($Ya["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$h><option><option value='1'".($p?" selected":"").">".lang(202)."<option value='0'".($p=="0"?" selected":"").">".lang(203)."</select>";}else{echo"<td align='center'><input type='checkbox' name=$h value='1'".($p?" checked":"").($mc=="All privileges"?" id='grants-$k-all'":($mc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$k-all');\"")).">";}$k++;}}}echo"</table>\n",'<p>
<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(124),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(68),'"',$gb,'>';}echo'</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$n){$Cd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".ereg_replace("[^0-9]+","",$b))){$Cd++;}}queries_redirect(ME."processlist=",lang(204,$Cd),$Cd||!$_POST["kill"]);}page_header(lang(61),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);">
';$f=$c->query("SHOW PROCESSLIST");for($k=0;$a=$f->fetch_assoc();$k++){if(!$k){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0)."<td>".implode("<td>",array_map('nbsp',$a))."\n";}echo'</table>
<p>
<input type="hidden" name="token" value="',$O,'">
<input type="submit" value="',lang(205),'">
</form>
';}elseif(isset($_GET["select"])){$l=$_GET["select"];$R=table_status($l);$F=indexes($l);$o=fields($l);$ea=column_foreign_keys($l);$Hd=array();$y=array();$yb=null;foreach($o
as$g=>$d){$h=$q->fieldName($d);if(isset($d["privileges"]["select"])&&$h!=""){$y[$g]=html_entity_decode(strip_tags($h));if(ereg('text|blob',$d["type"])){$yb=$q->selectLengthProcess();}}$Hd+=$d["privileges"];}list($_,$Ga)=$q->selectColumnsProcess($y,$F);$t=$q->selectSearchProcess($o,$F);$qb=$q->selectOrderProcess($o,$F);$H=$q->selectLimitProcess();$Ub=($_?implode(", ",$_):"*")."\nFROM ".table($l);$Bd=($Ga&&count($Ga)<count($_)?"\nGROUP BY ".implode(", ",$Ga):"").($qb?"\nORDER BY ".implode(", ",$qb):"");if($_POST&&!$n){$je="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Lb=($F["PRIMARY"]?($_?array_flip($F["PRIMARY"]["columns"]):array()):null);foreach($_
as$g=>$b){$b=$_GET["columns"][$g];if(!$b["fun"]){unset($Lb[$b["col"]]);}}if($_POST["export"]){dump_headers($l);dump_table($l,"");if($_POST["format"]!="sql"){$a=array_keys($o);if($_){$a=array();foreach($_
as$b){$a[]=(ereg('^`.*`$',$b)?idf_unescape($b):$b);}}dump_csv($a);}if(!is_array($_POST["check"])||$Lb===array()){$_d=$t;if(is_array($_POST["check"])){$_d[]="($je)";}dump_data($l,"INSERT","SELECT $Ub".($_d?"\nWHERE ".implode(" AND ",$_d):"").$Bd);}else{$be=array();foreach($_POST["check"]as$b){$be[]="(SELECT".limit($Ub,"\nWHERE ".($t?implode(" AND ",$t)." AND ":"").where_check($b).$Bd,1).")";}dump_data($l,"INSERT",implode(" UNION ALL ",$be));}exit;}if(!$q->selectEmailProcess($t,$ea)){if($_POST["save"]||$_POST["delete"]){$f=true;$mb=0;$i=table($l);$s=array();if(!$_POST["delete"]){foreach($y
as$h=>$b){$b=process_input($o[$h]);if($b!==null){if($_POST["clone"]){$s[idf_escape($h)]=($b!==false?$b:idf_escape($h));}elseif($b!==false){$s[]=idf_escape($h)." = $b";}}}$i.=($_POST["clone"]?" (".implode(", ",array_keys($s)).")\nSELECT ".implode(", ",$s)."\nFROM ".table($l):" SET\n".implode(",\n",$s));}if($_POST["delete"]||$s){$yc="UPDATE";if($_POST["delete"]){$yc="DELETE";$i="FROM $i";}if($_POST["clone"]){$yc="INSERT";$i="INTO $i";}if($_POST["all"]||($Lb===array()&&$_POST["check"])||count($Ga)<count($_)){$f=queries($yc." $i".($_POST["all"]?($t?"\nWHERE ".implode(" AND ",$t):""):"\nWHERE $je"));$mb=$c->affected_rows;}else{foreach((array)$_POST["check"]as$b){$f=queries($yc.limit1($i,"\nWHERE ".where_check($b)));if(!$f){break;}$mb+=$c->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(206,$mb),$f);}elseif(!$_POST["import"]){if(!$_POST["val"]){$n=lang(207);}else{$f=true;$mb=0;foreach($_POST["val"]as$ob=>$a){$s=array();foreach($a
as$g=>$b){$g=bracket_escape($g,1);$s[]=idf_escape($g)." = ".$q->processInput($o[$g],$b);}$f=queries("UPDATE".limit1(table($l)." SET ".implode(", ",$s)," WHERE ".where_check($ob).($t?" AND ".implode(" AND ",$t):"")));if(!$f){break;}$mb+=$c->affected_rows;}queries_redirect(remove_from_uri(),lang(206,$mb),$f);}}elseif(is_string($qa=get_file("csv_file",true))){$qa=preg_replace("~^\xEF\xBB\xBF~",'',$qa);$f=true;$ab=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$qa,$ka);$mb=count($ka[0]);begin();$Ja=($_POST["separator"]=="csv"?",":";");foreach($ka[0]as$g=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Ja]*)$Ja~",$b.$Ja,$rd);if(!$g&&!array_diff($rd[1],$ab)){$ab=$rd[1];$mb--;}else{$s="";foreach($rd[1]as$k=>$Fc){$s.=", ".idf_escape($ab[$k])." = ".($Fc==""&&$o[$ab[$k]]["null"]?"NULL":$c->quote(str_replace('""','"',preg_replace('~^"|"$~','',$Fc))));}$s=substr($s,1);$f=queries("INSERT INTO ".table($l)." SET$s ON DUPLICATE KEY UPDATE$s");if(!$f){break;}}}if($f){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(208,$mb),$f);queries("ROLLBACK");}else{$n=upload_error($qa);}}}$Da=$q->tableName($R);page_header(lang(28).": $Da",$n);session_write_close();$s=null;if(isset($Hd["insert"])){$s="";foreach((array)$_GET["where"]as$b){if(count($ea[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$s.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$q->selectLinks($R,$s);if(!$y){echo"<p class='error'>".lang(209).($o?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($l).'">',"</div>\n";$q->selectColumnsPrint($_,$y);$q->selectSearchPrint($t,$y,$F);$q->selectOrderPrint($qb,$y,$F);$q->selectLimitPrint($H);$q->selectLengthPrint($yb);$q->selectActionPrint($yb);echo"</form>\n";$aa=$_GET["page"];if($aa=="last"){$La=$c->result("SELECT COUNT(*) FROM ".table($l).($t?" WHERE ".implode(" AND ",$t):""));$aa=floor(($La-1)/$H);}$i="SELECT".limit((intval($H)&&$Ga&&count($Ga)<count($_)&&$C=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Ub,($t?"\nWHERE ".implode(" AND ",$t):"").$Bd,($H!=""?intval($H):null),($aa?$H*$aa:0),"\n");echo$q->selectQuery($i);$f=$c->query($i);if(!$f){echo"<p class='error'>".error()."\n";}else{if($C=="mssql"){$f->seek($H*$aa);}$Ac=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$za=array();while($a=$f->fetch_assoc()){$za[]=$a;}if($_GET["page"]!="last"){$La=(intval($H)&&$Ga&&count($Ga)<count($_)?($C=="sql"?$c->result(" SELECT FOUND_ROWS()"):$c->result("SELECT COUNT(*) FROM ($i) x")):count($za));}if(!$za){echo"<p class='message'>".lang(70)."\n";}else{$Id=$q->backwardKeys($l,$Da);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr><td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(105)."</a>";$vd=array();$Y=array();reset($_);$qb=1;foreach($za[0]as$g=>$b){$b=$_GET["columns"][key($_)];$d=$o[$_?$b["col"]:$g];$h=($d?$q->fieldName($d,$qb):"*");if($h!=""){$qb++;$vd[$g]=$h;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($g).($_GET["order"][0]==$g&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$h)."</a>";}$Y[$g]=$b["fun"];next($_);}$cc=array();if($_GET["modify"]){foreach($za
as$a){foreach($a
as$g=>$b){$cc[$g]=max($cc[$g],min(40,strlen(utf8_decode($b))));}}}echo($Id?"<th>".lang(210):"")."</thead>\n";foreach($q->rowDescriptions($za,$ea)as$ba=>$a){$wd=unique_array($za[$ba],$F);$ob="";foreach($wd
as$g=>$b){$ob.="&".(isset($b)?urlencode("where[".bracket_escape($g)."]")."=".urlencode($b):"null%5B%5D=".urlencode($g));}echo"<tr".odd()."><td>".checkbox("check[]",substr($ob,1),in_array(substr($ob,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($_)!=count($Ga)||information_schema(DB)?'':" <a href='".h(ME."edit=".urlencode($l).$ob)."'>".lang(105)."</a>");foreach($a
as$g=>$b){if(isset($vd[$g])){$d=$o[$g];if($b!=""&&(!isset($Ac[$g])||$Ac[$g]!="")){$Ac[$g]=(is_email($b)?$vd[$g]:"");}$v="";$b=$q->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('binary|blob|bytea',$d["type"])&&$b!=""){$v=h(ME.'download='.urlencode($l).'&field='.urlencode($g).$ob);}if($b==""){$b="&nbsp;";}elseif($yb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,intval($yb)));}else{$b=h($b);}if(!$v){foreach((array)$ea[$g]as$B){if(count($ea[$g])==1||count($B["source"])==1){foreach($B["source"]as$k=>$Ca){$v.=where_link($k,$B["target"][$k],$za[$ba][$Ca]);}$v=h(($B["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($B["db"]),ME):ME).'select='.urlencode($B["table"]).$v);break;}}}if($g=="COUNT(*)"){$v=h(ME."select=".urlencode($l));$k=0;foreach((array)$_GET["where"]as$u){if(!array_key_exists($u["col"],$wd)){$v.=h(where_link($k++,$u["col"],$u["val"],$u["op"]));}}foreach($wd
as$Fa=>$u){$v.=h(where_link($k++,$Fa,$u,(isset($u)?"=":"IS NULL")));}}}if(!$v&&is_email($b)){$v="mailto:$b";}if(!$v&&is_url($a[$g])){$v="http://www.adminer.org/redirect/?url=".urlencode($a[$g]);}$T=h("val[$ob][".bracket_escape($g)."]");$p=$_POST["val"][$ob][bracket_escape($g)];$Td=h(isset($p)?$p:$a[$g]);$Md=strpos($b,"<em>...</em>");$Qd=is_utf8($b)&&!$Md&&$za[$ba][$g]==$a[$g]&&!$Y[$g];$Pd=ereg('text|blob',$d["type"]);echo(($_GET["modify"]&&$Qd)||isset($p)?"<td>".($Pd?"<textarea name='$T' cols='30' rows='".(substr_count($a[$g],"\n")+1)."'>$Td</textarea>":"<input name='$T' value='$Td' size='$cc[$g]'>"):"<td id='$T' ondblclick=\"".($Qd?"selectDblClick(this, event".($Pd?", 1":"").")":"alert('".($Md?lang(211):lang(212))."')").";\">".$q->selectVal($b,$v,$d));}}$q->backwardKeysPrint($Id,$za[$ba]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$zd);if($za||$aa){$yd=true;if($_GET["page"]!="last"&&intval($H)&&count($Ga)>=count($_)&&($La>=$H||$aa)){$La=$R["Rows"];if(!isset($La)||$t||2*$aa*$H>$La||($R["Engine"]=="InnoDB"&&$La<1e4)){ob_flush();flush();$La=$c->result("SELECT COUNT(*) FROM ".table($l).($t?" WHERE ".implode(" AND ",$t):""));}else{$yd=false;}}echo"<p class='pages'>";if(intval($H)&&$La>$H){$xd=floor(($La-1)/$H);echo
lang(213).":".pagination(0,$aa).($aa>5?" ...":"");for($k=max(1,$aa-4);$k<min($xd,$aa+5);$k++){echo
pagination($k,$aa);}echo($aa+5<$xd?" ...":"").($yd?pagination($xd,$aa):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(214)."</a>");}echo" (".($yd?"":"~ ").lang(109,$La).") ".checkbox("all",1,0,lang(215))."\n";if(!information_schema(DB)){echo'<fieldset><legend>',lang(26),'</legend><div>
<input type="submit" value="',lang(124),'" title="',lang(207),'">
<input type="submit" name="edit" value="',lang(26),'">
<input type="submit" name="clone" value="',lang(216),'">
<input type="submit" name="delete" value="',lang(127),'" onclick="return confirm(\'',lang(69);?> (' + (this.form['all'].checked ? <?php echo$La,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(99));echo$q->dumpOutput(1,$zd["output"])." ".$q->dumpFormat(1,$zd["format"]);echo" <input type='submit' name='export' value='".lang(99)."'>\n","</div></fieldset>\n";}print_fieldset("import",lang(217),!$f->num_rows);echo"<input type='hidden' name='token' value='$O'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$zd["format"],1);echo" <input type='submit' name='import' value='".lang(218)."'>\n","</div></fieldset>\n";$q->selectEmailPrint(array_filter($Ac,'strlen'),$y);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Rb=isset($_GET["status"]);page_header($Rb?lang(63):lang(62));$qe=($Rb?show_status():show_variables());if(!$qe){echo"<p class='message'>".lang(70)."\n";}else{echo"<table cellspacing='0'>\n";foreach($qe
as$g=>$b){echo"<tr>","<th><code class='jush-".$C.($Rb?"status":"set")."'>".h($g)."</code>","<td>".nbsp($b);}echo"</table>\n";}}else{$Qe=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Qe&&!$n&&!$_POST["search"]){$f=true;$ua="";if($C=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$f=truncate_tables($_POST["tables"]);}$ua=lang(219);}elseif($_POST["move"]){$f=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ua=lang(220);}elseif($_POST["drop"]){if($_POST["views"]){$f=drop_views($_POST["views"]);}if($f&&$_POST["tables"]){$f=drop_tables($_POST["tables"]);}$ua=lang(221);}elseif($_POST["tables"]&&($f=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$f->fetch_assoc()){$ua.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ua,$f);}page_header(($_GET["ns"]==""?lang(55).": ".h(DB):lang(222).": ".h($_GET["ns"])),$n,true);echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.lang(146)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(151):lang(152))."</a>\n":"");if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.lang(98)."</a>\n";$gc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);echo"<h3>".lang(223)."</h3>\n";$Ad=tables_list();if(!$Ad){echo"<p class='message'>".lang(4)."\n";}else{echo"<form action='' method='post'>\n","<p>".lang(224).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(31)."'>\n";if($_POST["search"]&&$_POST["query"]!=""){$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.lang(86).'<td>'.lang(225).'<td>'.lang(66).'<td>'.lang(226).'<td>'.lang(227).'<td>'.lang(228).'<td>'.lang(78).'<td>'.lang(229).(support("comment")?'<td>'.lang(80):'')."</thead>\n";foreach($Ad
as$h=>$E){$Ic=(isset($E)&&!eregi("table",$E));echo'<tr'.odd().'><td>'.checkbox(($Ic?"views[]":"tables[]"),$h,in_array($h,$Qe,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($h).'">'.h($h).'</a>';if($Ic){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($h).'">'.lang(85).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($h).'">?</a>';}else{echo"<td id='Engine-".h($h)."'>&nbsp;<td id='Collation-".h($h)."'>&nbsp;";foreach(array("Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$g=>$v){echo"<td align='right'><a href='".h(ME."$v=").urlencode($h)."' id='$g-".h($h)."'>?</a>";}}echo(support("comment")?"<td id='Comment-".h($h)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(230,count($Ad)),"<td>".$c->result("SELECT @@storage_engine"),"<td>".db_collation(DB,collations());foreach($gc
as$g=>$b){echo"<td align='right' id='sum-$g'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p><input type='hidden' name='token' value='$O'>".($C=="sql"?"<input type='submit' value='".lang(231)."'> <input type='submit' name='optimize' value='".lang(232)."'> <input type='submit' name='check' value='".lang(233)."'> <input type='submit' name='repair' value='".lang(234)."'> ":"")."<input type='submit' name='truncate' value='".lang(235)."' onclick=\"return confirm('".lang(69)." (' + formChecked(this, /tables/) + ')');\"> <input type='submit' name='drop' value='".lang(68)."' onclick=\"return confirm('".lang(69)." (' + formChecked(this, /tables|views/) + ')');\">\n";$dc=(support("scheme")?schemas():get_databases());if(count($dc)!=1&&$C!="sqlite"){$r=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(236).($dc?": ".html_select("target",$dc,$r):': <input name="target" value="'.h($r).'">')." <input type='submit' name='move' value='".lang(237)."'>\n";}}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.lang(131)."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.lang(166)."</a>\n";}if(support("routine")){echo"<h3>".lang(102)."</h3>\n";$oe=routines();if($oe){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(167).'<td>'.lang(75).'<td>'.lang(184)."<td>&nbsp;</thead>\n";odd('');foreach($oe
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.lang(94)."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.lang(183).'</a> <a href="'.h(ME).'function=">'.lang(182)."</a>\n";}if(support("sequence")){echo"<h3>".lang(238)."</h3>\n";$ne=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($ne){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(167)."</thead>\n";odd('');foreach($ne
as$b){echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".lang(189)."</a>\n";}if(support("event")){echo"<h3>".lang(103)."</h3>\n";$f=$c->query("SHOW EVENTS");if($f&&$f->num_rows){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(167)."<td>".lang(239)."<td>".lang(173)."<td>".lang(174)."</thead>\n";while($a=$f->fetch_assoc()){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?lang(240)."<td>".$a["Execute at"]:lang(175)." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.lang(172)."</a>\n";}page_footer();$R=table_status();if($R){echo"<script type='text/javascript'>\n";foreach($R
as$a){$T=addcslashes($a["Name"],"\\'/");echo"setHtml('Comment-$T', '".nbsp($a["Comment"])."');\n";if(!eregi("view",$a["Engine"])){foreach(array("Engine","Collation")as$g){echo"setHtml('$g-$T', '".nbsp($a[$g])."');\n";}foreach($gc+array("Auto_increment"=>0,"Rows"=>0)as$g=>$b){if($a[$g]!=""){$b=number_format($a[$g],0,'.',lang(241));echo"setHtml('$g-$T', '".($g=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b)."');\n";if(isset($gc[$g])){$gc[$g]+=($a["Engine"]!="InnoDB"||$g!="Data_free"?$a[$g]:0);}}elseif(array_key_exists($g,$a)){echo"setHtml('$g-$T');\n";}}}}foreach($gc
as$g=>$b){echo"setHtml('sum-$g', '".number_format($b,0,'.',lang(241))."');\n";}echo"</script>\n";}exit;}}page_footer();