/* jce - 2.9.30 | 2022-09-14 | https://www.joomlacontenteditor.net | Copyright (C) 2006 - 2022 Ryan Demmer. All rights reserved | GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html */
!function(){var DOM=tinymce.DOM,DomParser=tinymce.html.DomParser,HtmlSerializer=tinymce.html.Serializer;tinymce.create("tinymce.plugins.SourcePlugin",{init:function(ed,url){function isCodeEditorActive(){return"block"==ed.getElement().style.display}var self=this;self.editor=ed,ed.plugins.fullscreen&&(ed.onFullScreen.add(function(ed,state){var element=ed.getElement(),header=DOM.getPrev(element,".wf-editor-header");if(state){var vp=DOM.getViewPort();DOM.setStyle(element,"height",vp.h-header.offsetHeight)}else DOM.setStyle(element,"height",ed.settings.container_height)}),ed.onFullScreenResize.add(function(ed,vp){var element=ed.getElement();DOM.setStyle(element,"height",vp.h)})),ed.onInit.add(function(ed){if(ed.onBeforeGetContent.add(function(ed,e){0!=isCodeEditorActive()&&(e.no_events=!0)}),0!=isCodeEditorActive()){var activeTab=sessionStorage.getItem("wf-editor-tabs-"+ed.id)||ed.settings.active_tab||"";if("wf-editor-source"===activeTab){ed.hide(),DOM.show(ed.getElement());var element=ed.getElement(),container=element.parentNode,width=ed.settings.container_width||sessionStorage.getItem("wf-editor-container-width");DOM.hasClass(container,"mce-fullscreen")||DOM.setStyle(element,"width",width)}}})},validateContent:function(content){var ed=this.editor,args={no_events:!0,format:"raw"},settings={};if(tinymce.extend(settings,ed.settings),args.content=content,ed.settings.validate){args.format="html",args.load=!0,ed.onBeforeGetContent.dispatch(ed,args),settings.verify_html=!1,settings.forced_root_block=!1,settings.validate=!0;var parser=new DomParser(settings,ed.schema),serializer=new HtmlSerializer(settings,ed.schema);args.content=serializer.serialize(parser.parse(args.content),args),args.get=!0,ed.onPostProcess.dispatch(ed,args),content=args.content}return content},insertContent:function(v){var ed=this.editor,el=ed.getElement();if(document.selection){el.focus();var s=document.selection.createRange();s.text=v}else if(el.selectionStart||"0"==el.selectionStart){var startPos=el.selectionStart,endPos=el.selectionEnd;el.value=el.value.substring(0,startPos)+v+el.value.substring(endPos,el.value.length)}else el.value+=v},getContent:function(){var ed=this.editor,args={};return args.content=ed.getElement().value,ed.onWfEditorSave.dispatch(ed,args),args.content},save:function(){var content=this.getContent();return this.editor.getElement().value=content,content},hide:function(){var ed=this.editor;DOM.hide(ed.getElement())},toggle:function(){var ed=this.editor,element=ed.getElement(),container=element.parentNode,header=DOM.getPrev(element,".wf-editor-header"),ifrHeight=parseInt(DOM.get(ed.id+"_ifr").style.height,10)||ed.settings.height,o=tinymce.util.Storage.getHash("TinyMCE_"+ed.id+"_size");o&&o.height&&(ifrHeight=o.height),DOM.isHidden(element)?(DOM.show(element),DOM.removeClass(container,"mce-loading"),ed.onChange.dispatch()):DOM.hide(element);var height=ed.settings.container_height||sessionStorage.getItem("wf-editor-container-height")||ifrHeight;if(DOM.hasClass(container,"mce-fullscreen")){var vp=DOM.getViewPort();height=vp.h-header.offsetHeight}DOM.setStyle(element,"height",height);var width=ed.settings.container_width||sessionStorage.getItem("wf-editor-container-width");DOM.hasClass(container,"mce-fullscreen")||DOM.setStyle(element,"width",width)},getSelection:function(){return document.getSelection()},getCursorPos:function(){return 0}}),tinymce.PluginManager.add("source",tinymce.plugins.SourcePlugin)}();