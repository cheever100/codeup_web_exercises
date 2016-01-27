Uize.module('Zazzle.ActionButtons');
Uize.module({name:'Zazzle.ActionButtons.LinkButtonShare',superclass:'Uize.Widget.Button',required:['Uize.Data.Compare','Uize.Url'],builder:function(e_$){'use strict';var e__=function(e_a,e_b){return Uize.Data.Compare.identical(e_a,e_b)?e_b:e_a;
};var e_c=e_$.subclass(null,function(){var m=this,e_d=false,e_e=Uize,e_f=e_e.Widget.Dialog,e_g=e_f&&m.addChild('palette',e_f,{shown:e_d,offsetX:'adjacent',offsetY:'adjacent'});m.wire('Click',function(){m.openDialog(m.e_h)});
if(e_g){m.wire('Share Email',function(){m.openDialog('email')});m.addChild('linkShare',e_e.Widget.Button).wire('Click',function(){m.openDialog('link');m.fire({name:'Track Event',bubble:true,extra:{ax:'shareButtonClassic',
service:'link',isSpp: !!zPage.children.product}});});}}),e_i=e_c.prototype;e_i.openDialog=function(e_h){var m=this;m.callInherited('showShareDialog')(Uize.copyInto(m.get(),{showFirst:e_h,showImageBox:m.e_j,
dialogProperties:m.e_k?{emailParams:{realviewParams:m.e_k}}:null}));};e_c.stateProperties({e_l:'productId',e_m:{name:'productParams',conformer:e__},e_k:{name:'realviewParams',conformer:e__},e_n:'isStorePage',
e_j:'showImageOnEmailTab',e_o:'showSocialNetworks',e_p:'showEmailThis',e_q:'showLinkToThis',e_h:'showFirst',e_r:'showGeneral',e_s:'showFacebook',e_t:'showTwitter',e_u:'showWordpress',e_v:'showBlogger',
e_w:'showGooglePlus',e_x:'showPinterest',e_y:{name:'templateParams',conformer:e__},e_z:{name:'twitterParams',conformer:e__},e_A:{name:'pinterestParams',conformer:e__}});return e_c;}});
Uize.module({name:'ZazzleWww.Results.RelatedVizLite',superclass:'Zazzle.Results.Cell',required:['Uize.Widget.Collection.Dynamic','Zazzle.Widget.mV2'],builder:function(g_$){'use strict';var g__=Uize,g_a=null
;return g_$.subclass({mixins:Zazzle.Widget.mV2,stateProperties:{g_b:{name:'productId',value:g_a},g_c:'relatedVizLiteTitle',g_d:'numPages'},children:{},omegastructor:function(){var m=this;},instanceMethods:{
g_e:function(){var m=this,g_f=m.get('page');m.web('prev').display(g_f>1);m.web('next').display((g_f*m.get('pageSize'))<m.get('numResults'));},g_g:function(){var m=this,g_h=m.get('numResults');m.web('recentlyViewedTitle').display(g_h);
},getServiceParams:function(){var m=this;return g__.copyInto(g_$.doMy(m,'getServiceParams'),{pd:m.g_b,numPages:m.g_d});},updateUi:function(){var m=this;m.g_e();g_$.doMy(m,'updateUi');},wireUi:function(){
var m=this;if(!m.isWired){m.wireNode('prev','click',function(){m.set({page:Math.max(m.get('page')-1,1)});});m.wireNode('next','click',function(){m.set({page:Math.min(m.get('page')+1,Math.ceil(m.get('numResults')/m.get('pageSize')))});
});m.wire('Updated Data',function(){m.g_g();m.g_e();});g_$.doMy(m,'wireUi');}}},set:{collectionWidgetClass:Uize.Widget.Collection.Dynamic}});}});
Uize.module('ZazzleWww.Widgets.Rooter');
Uize.module({name:'ZazzleWww.Widgets.Rooter.Page',superclass:'ZazzleWww.Page',required:['Uize.Url','Zazzle.Widget.mV2','Zazzle.Widgets.Rooter.mProductModel'],builder:function(g_$){'use strict';var g__=true,
g_a=null,g_b=Uize,g_c=g_b.Url,g_d=Zazzle;return g_$.subclass({mixins:[g_d.Widget.mV2,g_d.Widgets.Rooter.mProductModel],stateProperties:{g_e:'activeAttribute',g_f:'activeDesignArea',g_g:'designId',g_h:'displayStoreHandle',
g_i:'hasUserTitle',g_j:'iframe',g_k:'isCustomizing',g_l:'preferredView',g_m:'productAttributes',g_n:'productId',g_o:'productOption',g_p:{name:'productOptionString',derived:'productOption: Uize.Url.toParams(productOption)'
},g_q:'productTypeName',g_r:'quantity',g_s:'templateParams',g_t:'title'},children:{product:g_a},modelBindings:{designId:'<-product',isCustomizing:'<-design',productAttributes:'<-product',productId:'<-product',
productOption:'<-product',productTypeName:'<-product',quantity:'pricing',templateParams:'<-design'},childBindings:{activeAttribute:'<-product',activeDesignArea:'<-product',hasUserTitle:'<-product',preferredView:'<-product',
title:'product'},cssBindings:{isCustomizing:['notCustomizing','isCustomizing']},alphastructor:function(){var m=this;m.addedChildren.whenever('product',function(){var g_u=m.children.product;g_u.addedModels.whenever(
'product',function(){m.addModel('product',g_u.models.product)});});},eventBindings:{product:{'Ready to Post For Sale':function(){this.handlePostForSale()},'Ready to Submit':function(e){this.handleAddToCart(e.data)}
},':Enable Navigation Warning':function(e){var m=this,g_v=e.timeout||100;window.onbeforeunload=function(){return m.localize('leaveProductPageWarning');};setTimeout(function(){window.onbeforeunload=undefined;
},g_v);}},instanceMethods:{getUrl:function(){var m=this;return g_c.resolve([g_$.doMy(this,'getUrl'),{gl:m.g_h},m.models.product.getQueryParams()])},handleAddToCart:function(g_w){var m=this,g_n=(g_w&&g_w.productId)||m.g_n,
g_g=m.g_g;if(g_n)g_g=g_a;else if(g_g)g_n=g_a;location.href=g_c.resolve(m.get('urls').addToCart,{multi:g__,product:g_c.toParams(Uize.copyInto({pt:m.g_q,pd:g_n,dz:g_g,qty:m.g_r,tl:m.g_t},m.g_m))});},handlePostForSale:function(){
var m=this,g_x=m.get('env').params,g_y=m.models,g_z=g_y.product,g_A=g_y.design;location.href=g_c.resolve([m.getInherited('urls').postDesign,{dz:g_A.get('designId'),pt:g_A.get('productTypeName'),istmp:!g_b.isEmpty(g_A.get('templateFields')),
rpd:g_z.get('isBlankInstance')?g_a:g_A.get('originalProductId'),tl:m.g_i?m.g_t:g_a,cmid:g_x.cmid,rcmid:g_x.rcmid,gl:g_x.gl,cg:g_x.cg,ifr:g_x.ifr,tag:g_x.tag},g_z.get('productAttributes')]);}}});}});
Uize.module('ZazzleWww.Widgets.Spp');
Uize.module({name:'ZazzleWww.Widgets.Spp.Page',superclass:'ZazzleWww.Widgets.Rooter.Page',builder:function(h_$){'use strict';return h_$.subclass({children:{product:null}});}});
Uize.module({name:'ZazzleWww.Widgets.Spp.Page.Main',required:['Uize.Json','Uize.Web.xDom','Uize.Widget.Button','Uize.Widget.Fleeting','Zazzle.ActionButtons.LinkButtonShare','Zazzle.MediaGallery','Zazzle.Models.Rooter.DesignObject',
'Zazzle.Results.Reviews','Zazzle.ReviewSummary','ZazzleWww.AccessoriesUi','ZazzleWww.AddToIdeaboard','ZazzleWww.Widgets.ProductSuggestedIdeaboards','ZazzleWww.Results.RelatedVizLite','ZazzleWww.Models.IdeaBoards'
],builder:function(i_$){'use strict';var i__=true,i_a=null,i_b=Uize,i_c={'Accessory Added':function(e){var m=this;if(e.bundleId)location.href=m.get('env').www+e.bundleId;i_d(m,e.parentProductId);},'Before Add':function(e){
var m=this,i_e=m.models;e.handled=i__;i_e.design.productize({preferredViewId:i_e.design.preferredViewId},function(i_f){if(i_f&&i_f.productId){var i_g=i_f.productId,i_h=m.children;i_h.accessoriesUi.set({productId:i_g});
i_h.accessoriesUiMore.set({productId:i_g});e.handler&&e.handler(i_g);}else m.inform({state:'error',message:m.localize('productizeFailedAccessory')});});},'Cancel Add':function(e){i_d(this,e.parentProductId);
}},i_d=function(m,i_g){var i_i=m.models.design,i_j={productId:i_i.get('isCustomizing')?i_a:i_g};i_i.set('productId',i_g);m.children.accessoriesUi.set(i_j);m.children.accessoriesUiMore.set(i_j);};return i_$.subclass({
stateProperties:{i_k:'mainDesignView',i_l:'mediaItems',i_m:'showAccessories',i_n:'showGetStartedUi',i_o:'showMoreAccessories',i_p:{name:'showSuggestedIdeaboards',value:false}},children:{accessoriesUi:ZazzleWww.AccessoriesUi,
accessoriesUiMore:ZazzleWww.AccessoriesUi,addToIdeaboard:i_a,bundleComponentsUi:i_a,email:i_b.Widget.Button,mediaGallery:i_a,suggestedIdeaboards:ZazzleWww.Widgets.ProductSuggestedIdeaboards,relatedVizLite:ZazzleWww.Results.relatedVizLite,
productTypeReviews:i_a,productTypeReviewsSummary:i_a,share:Zazzle.ActionButtons.LinkButtonShare},cssBindings:{showAccessories:['hideAccessories',''],showMoreAccessories:['hideMoreAccessories',''],showSuggestedIdeaboards:['hideSuggestedIdeaboards','']
},childBindings:{productAttributes:['->accessoriesUi.attributes','->accessoriesUiMore.attributes','->share.productParams','->addToIdeaboard.productAttributes'],productOptionString:['->productTypeReviews.attributes',
'->productTypeReviewsSummary.attributes'],quantity:['->accessoriesUi','->accessoriesUiMore'],showAccessories:{child:'accessoriesUi',property:'values',direction:'<-',valueAdapter:{bToA:'!Uize.isEmpty(value)'
}},showMoreAccessories:{child:'accessoriesUiMore',property:'values',direction:'<-',valueAdapter:{bToA:'!Uize.isEmpty(value)'}},templateParams:'->share'},alphastructor:function(){var m=this;m.whenever('wired',function(){
m.children.product.children.views.children.view&&m.children.product.children.views.children.view.children.mainView.wire('Update Realview URL',function(){if(m.i_k){var i_q=m.get('env');m.web('mainDesignView').attribute('src',m.i_k.getImageUrl(
m.models.product.get('isCustomizing')?i_q.dynamicRealview:i_q.staticRealview,152));}});if(m.children.productTypeReviews){m.children.productTypeReviews.set({ajaxBoth:true});}if(m.children.productTypeReviewsSummary){
m.children.productTypeReviewsSummary.set({ajaxBoth:true});}});m.whenever('wired,showGetStartedUi,activeDesignArea',function(){m.callInherited('useDialog')({component:{name:'ZazzleWww.GetStartedDialogUi',
params:{pd:m.get('productTypeName')}},widgetProperties:{name:'getStartedDialog',mooringNode:m.children.product.getNode('right'),offsetX:-50},submitHandler:function(i_f){m.unmet('showGetStartedUi');var
 i_r=m.get('activeDesignArea'),i_s=[];i_b.forEach(i_f.templateFields,function(i_t){i_t.value&&i_s.push({type:i_t.type,value:i_t.value});});i_r.addDesignObjects(i_s,{modifyNewlyCreated:function(i_u,i_v){
var i_w=[];i_b.forEach(i_u,function(i_x){if(i_x.get('type')==Zazzle.Models.Rooter.DesignObject.Type.Image)i_w.push(i_x);});!i_b.isEmpty(i_w)&&i_r.scaleDesignObjectsBy('autosize',1,{objectBlob:i_w});i_v();
}});},'After Hide':function(){m.fire('Get Started Dialog Closed');}});});},omegastructor:function(){var m=this;m.addModel('ideaboardsModel',ZazzleWww.Models.IdeaBoards,{serviceUrlBase:m.get('env').service,
csrfToken:m.get('env').csrfToken,userId:m.get('user').isLoggedIn?m.get('user').id:0});},modelBindings:{mainDesignView:'<-product'},eventBindings:{':Changed.mainDesignView':function(e){var m=this,i_k=e.newValue
;if(i_k)m.web('mainDesignView').attribute('src',i_k.getImageUrl(m.get('env').dynamicRealview,152));},'#editLink:click':function(){var m=this;m.ensureLoggedIn({callback:function(){m.callInherited('useDialog')({
component:{name:'ZazzleWww.EditProductFormDialog',params:{pds:m.get('productId'),ts: +new Date}},widgetProperties:{name:'editProductDialog'},submitHandler:function(){location.reload();}});}});},'#violationLink:click':function(){
var m=this,i_y=function(){m.ensureLoggedIn({callback:function(){m.useDialog({component:{name:'zazzlewww.reportViolationFormDialog',params:{mbr:m.get('user').id,pd:m.models.product.get('productId')}},
widgetProperties:{name:'reportViolationFormDialog'}});}});};m.get('user').isLoggedIn?i_y():m.useDialog({component:{name:'zazzlewww.reportViolationConfirmDialog',params:{header:m.localize('violationSigninHeader'),
text:m.localize('violationSigninText')}},widgetProperties:{name:'violationSigninDialog',state:'info',title:m.localize('violationTitle'),okText:m.localize('signIn')},submitHandler:function(i_z){i_z&&i_y()
;}});},accessoriesUi:i_c,accessoriesUiMore:i_c,'bundleComponentsUi:Component Removed':function(e){location.href=this.get('env').www+e.bundleId;},'email:Click':function(){var m=this,i_A=m.models.product,
i_B=zPage.children.product.children.views.children.view.children.mainView;m.callInherited('useDialog')({component:{name:'ZazzleWww.Widgets.Dialog.EmailShare.Product',params:{imageId:i_A.get('preferredView').get('value'),
imageUrl:i_B.get('value'),product:i_b.Url.toParams(m.models.product.serialize())}},widgetProperties:{name:'emailShareDialog'}});},':Rating Clicked':function(e){var m=this;m.children.productTypeReviews&&
m.children.productTypeReviews.set('ratingsFilterValue',e.rating);},'suggestedIdeaboards:Updated Data':function(){var m=this;m.set('showSuggestedIdeaboards',m.children.suggestedIdeaboards.get('numResults')>0&&
m.children.suggestedIdeaboards.get('numIdeaboards')>0);}},modelEventBindings:{'product:Changed.productOption':function(){this.reloadMediaGallery();}},instanceMethods:{reloadMediaGallery:function(){var
 m=this,i_C=m.children.mediaGallery;if(i_C)m.callInherited('loadHtmlIntoNode')({node:m.getNode('mediaGalleryWrapper'),injectMode:'inner replace'},{cp:i_C.Class.moduleName,idPrefix:i_C.get('idPrefix'),
productOptions:i_b.Url.toParams(m.models.product.get('productOption')),productTypeName:m.models.product.get('productTypeName'),tl:m.localize('mediaGalleryHeaderText')},{cache:'never',beforeInject:function(i_D,i_E){
i_C.unwireUi();i_D();i_C.wireUi();}});}}});}});
Uize.module({name:'ZazzleWww.Widgets.Spp.Page.Main.Desktop',required:['Uize.Json','Zazzle.Widgets.Spp.Product.Desktop.Marketplace'],builder:function(j_$){'use strict';var j__=Uize;return j_$.subclass({
stateProperties:{j_a:{name:'isBelowBreakpoint',derived:'windowWidth: windowWidth < 768'},j_b:'moreOptionsBubbleShown',j_c:{name:'showMoreOptionsBelowBubble',onChange:function(){var m=this,j_d=function(){
m.met('moreOptionsBubbleShown');m.web(window).wire('scroll',function j_e(){m.set({j_c:false});m.web(window).unwire('scroll',j_e);});document.body.addEventListener('click',function j_f(){m.set({j_c:false});
document.body.removeEventListener('click',j_f,true);},true);};if(m.j_c){if(m.get('showGetStartedUi'))m.wire('Get Started Dialog Closed',j_d);else j_d();}else m.unmet('moreOptionsBubbleShown');}},j_g:'windowWidth'
},children:{product:Zazzle.Widgets.Spp.Product.Desktop.Marketplace},alphastructor:function(){var m=this;m.whenever('wired',function(){var j_h=m.web('relatedProductsTopShell'),j_i=m.web('relatedProducts')
;m.web(window).resize(function(){m.j_j();});m.j_j();!Uize.isEmpty(j_h)&& !Uize.isEmpty(j_i)&&j_h.append(j_i);});},childBindings:{isBelowBreakpoint:'->product.isNarrow'},cssBindings:{moreOptionsBubbleShown:['','moreOptionsBubbleShown']
},htmlBindings:{isBelowBreakpoint:function(j_a){var m=this,j_k=m.web('reviewsShell'),j_l=m.web('recommendationsShell');if(j_a){j_l.insertAfter(j_k);}else if(j_a===false)j_k.insertAfter(j_l);}},eventBindings:{
'accessoriesUiMore:Changed.values':function(){this.children.accessoriesScrolly.updateUi();}},instanceMethods:{j_j:function(){var m=this,j_m=m.web(window),j_n=m.web('moreOptionsBelow'),j_o=j_n.width(),
j_p=m.children.product,j_q=j_p.web('right'),j_r=j_q.coords(true),j_s=j_q.width(),j_t=j_p.children.attributes.web(),j_u=j_t.coords(true),j_v=j_t.height();m.set({j_g:j_m.width()});j_n.css('left',j_r.left+(j_s-j_o)/2);
if(m.j_c===undefined&&j_u.top+j_v-50>j_m.height())m.set({j_c:true});}}});}});

