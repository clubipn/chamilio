﻿if (!Array.indexOf){Array.prototype.indexOf=function(A){for (var i=0;i<this.length;i++){if (this[i]==A) return i;};return-1;}};var _editor_lang="en";var _available_langs='en,af,ar,ast,bg,bn,bs,ca,cs,da,de,el,en-au,en-ca,en-uk,eo,es,et,eu,fa,fi,fo,fr-ca,fr,fur,gl,gu,he,hi,hr,hu,id,is,it,ja,ka,km,ko,lt,lv,mk,mn,ms,nb,nl,no,oc,pl,prs,ps,pt-br,pt,qu,ro,ru,sk,sl,sr-latn,sr,sv,sw,th,tr,uk,vi,yo,zh-cn,zh';_available_langs=_available_langs.split(',');if (FCKConfig.DefaultLanguage){if (_available_langs.indexOf(FCKConfig.DefaultLanguage)>=0){_editor_lang=FCKConfig.DefaultLanguage;}};var IM_directEdit=false;var FCKImageManager=function(A) {this.Name=A;};FCKImageManager.prototype.GetState=function() {return FCK_TRISTATE_OFF;};FCKCommands.RegisterCommand('ImageManager',new FCKImageManager('ImageManager'));var oImageManagerItem=new FCKToolbarButton('ImageManager',"ImageManager",null,null,false,true);oImageManagerItem.IconPath=FCKConfig.ImagesIcon;FCKToolbarItems.RegisterItem('ImageManager',oImageManagerItem);FCKImageManager.prototype.Execute=function() {ImageManager_click(FCK,null);};function ImageManager_click(A,B) {var C=FCK.Selection.GetSelectedElement();if (C){if (FCK.IsRealImage(C)){var D=new FCKDialogCommand('Image',FCKLang.DlgImgTitle,'dialog/fck_image.html',600,455);D.Execute();return;}};var E={};if(FCKSelection.GetType()=='Control') {var F=FCK.Selection.GetSelectedElement();} if(FCKSelection.GetType()=='Text') {var F=FCKSelection.GetParentElement();};if (F!=null&&F.nodeName.toLowerCase()=='img') var H=F;if (H){E.f_url=H.src?H.src:'';E.f_alt=H.alt?H.alt:'';E.f_title=H.title?H.title:'';E.f_width=H.style.width?H.style.width:H.width;E.f_height=H.style.height?H.style.height:H.height;E.f_border=H.border?H.border:'';E.f_align=H.align?H.align:'';E.f_className=H.className?H.className:'';if (H.hspace){E.f_horiz=(H.hspace>=0)?H.attributes['hspace'].nodeValue:'';};if (H.vspace){E.f_vert=(H.vspace>=0)?E.f_vert=H.attributes['vspace'].nodeValue:'';}} else {E=null;};var I=new ImageManager();I.insert(E);};function setAttrib(A,B,C,D) {if (!D&&C!=null) {var E=new RegExp('[^0-9%]','g');C=C.replace(E,'');};if (C!=null&&C!='') {A.setAttribute(B,C);} else {A.removeAttribute(B);}};function ImageManager(){};ImageManager.prototype.insert=function(A){if (IM_directEdit){var B=FCK.Selection.GetSelectedElement();if (B!=null&&B.nodeName.toLowerCase()=='img'){lastSlashPosition=B.src.lastIndexOf('/')+1;imgFileName=B.src.substring(lastSlashPosition);var C=FCKConfig.PluginsPath+'ImageManager/editor.php?img='+"/"+imgFileName;OpenDialog(C,null,A,'FCKDialog_ImageEditor','Edit image',713,596);}else{alert("no image selected");return false;}}else{var D=FCKConfig.PluginsPath+'ImageManager/manager.php?base_url_alt='+FCKConfig.CreateDocumentDir;OpenDialog(D,function(G) {if (!G) return false;var B=FCK.Selection.GetSelectedElement();if (B!=null&&B.nodeName.toLowerCase()=='img') var F=B;if (!F) {F=FCK.CreateElement('IMG');};setAttrib(F,"_fcksavedurl",G.f_url_alt,true);setAttrib(F,'src',G.f_url_alt,true);setAttrib(F,'alt',G.f_alt,true);setAttrib(F,'title',G.f_title,true);setAttrib(F,'align',G.f_align,true);setAttrib(F,'border',G.f_border);setAttrib(F,'hspace',G.f_horiz);setAttrib(F,'vspace',G.f_vert);setAttrib(F,'width',G.f_width);setAttrib(F,'height',G.f_height);setAttrib(F,'className',G.f_className,true);return;},A,'FCKDialog_ImageManager','Insert Image',900,535);}};function OpenDialog(A,B,C,D,E,F,G){if (FCKConfig.OpenImageManagerInANewWindow&&FCKConfig.OpenImageManagerInANewWindow.toString()=='true') {Dialog(A,B,C);} else {if (typeof C=="undefined") {C=window;};FCKDialog.OpenDialog(D,E,A,F,G);Dialog._arguments=C;Dialog._return=function (H) {if (H&&B) {B(H);}};}};function Dialog(A,B,C) {if (typeof C=="undefined") {C=window;};Dialog._geckoOpenModal(A,B,C);};Dialog._parentEvent=function(A) {setTimeout(function() { if (Dialog._modal&&!Dialog._modal.closed) { Dialog._modal.focus() } },50);if (Dialog._modal&&!Dialog._modal.closed) {Dialog._stopEvent(A);}};Dialog._return=null;Dialog._modal=null;Dialog._arguments=null;Dialog._geckoOpenModal=function(A,B,C) {var D="hadialog"+A;var E=/\W/g;D=D.replace(E,'_');var F=window.open(A,D,"toolbar=no,menubar=no,personalbar=no,width=10,height=10,scrollbars=no,resizable=yes,modal=yes,dependable=yes");Dialog._modal=F;Dialog._arguments=C;function capwin(w) {Dialog._addEvent(w,"click",Dialog._parentEvent);Dialog._addEvent(w,"mousedown",Dialog._parentEvent);Dialog._addEvent(w,"focus",Dialog._parentEvent);};function relwin(w) {Dialog._removeEvent(w,"click",Dialog._parentEvent);Dialog._removeEvent(w,"mousedown",Dialog._parentEvent);Dialog._removeEvent(w,"focus",Dialog._parentEvent);};capwin(window.document);for (var i=0;i<window.frames.length;capwin(window.frames[i++].document));Dialog._return=function (G) {if (G&&B) {B(G);};relwin(window.document);for (var i=0;i<window.frames.length;relwin(window.frames[i++].document));Dialog._modal=null;};};Dialog._addEvent=function(A,B,C) {if (Dialog.is_ie) {A.attachEvent("on"+B,C);} else {A.addEventListener(B,C,true);}};Dialog._removeEvent=function(A,B,C) {if (Dialog.is_ie) {A.detachEvent("on"+B,C);} else {A.removeEventListener(B,C,true);}};Dialog._stopEvent=function(A) {if (Dialog.is_ie) {A.cancelBubble=true;A.returnValue=false;} else {A.preventDefault();A.stopPropagation();}};Dialog.agt=navigator.userAgent.toLowerCase();Dialog.is_ie=((Dialog.agt.indexOf("msie")!=-1)&&(Dialog.agt.indexOf("opera")==-1));
