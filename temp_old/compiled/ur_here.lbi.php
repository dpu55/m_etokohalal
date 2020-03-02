<div class="columnSpace">
				<script type="text/javascript">
		var privateobj=new Array;
		var slideobj=new Array;
		var silderHeight=0;	
		window.onload=initclickAndstyle;
		function initclickAndstyle(){
			$('.titleBar').bind('click', function() {
				listRefresh();
  				$(".z3g-showMoreCont").css("left","0px");
			});
			$(".barWrap").bind('click',function(){
				$(".z3g-showMoreCont").css("left","320px");
			});
			var totle= $("#ULColorChange li span");
				for(var i=0;i<totle.length;i++){
					privateobj[i]= totle[i];
				}
			var slidetotle= $("#thelist li div div span");
				for(var i=0;i<slidetotle.length;i++){
					slideobj[i]= slidetotle[i];
				}	
				var smileface= $("#smileface")[0];
				if(smileface){
					window.setTimeout(function(){window.history.go(-1)}, 3000);
				}
		}
		function changeSelect(url){
			window.location.href=url;
		}
		function gotoHome(){
			window.location.href="/";
		}
		</script>
<div id="ComContent_detailAndList01-001" class="ComContent_detailAndList01_c1">
	
	<section class="ComContent_detailAndList01-d1_c1">
			<h1 class="z3g-pageTitle">
		<span class="name" id="divContent_title"><?php echo $this->_var['ur_here']; ?> </span>
		<span class="titleBar active"><em class="title"><?php echo $this->_var['lang']['m_77']; ?></em>
			<em class="icon"></em>
		</span>
		<div class="clear-both"></div>
	</h1>
	
	
	<div id="divContent_describe" class="htmledit"> 
		

	</div>
	
	
		<section class="z3g-showMoreCont z3g-showMoreSection" style="top: 0px; left: 320px; ">
		<table cellspacing="0" cellpadding="0">
			<tbody><tr>
				<td class="barWrap active" valign="top">
					<span class="closeBar active"></span>
				</td>
				<td class="contWrap" style="min-height: 5631px; ">
					
					<div id="hScrollList" style="overflow-x: hidden; overflow-y: hidden; height: 415px; ">
					<ul id="thelist" style="position: absolute; top: 0px; left: 0px; ">
					
					<li class="item ">
						<div class="contDiv">
							<div class="active">
								<span id="5" class="name" onClick="javascript:window.location.href='article.php?id=33'"><?php echo $this->_var['lang']['m_78']; ?></span>
							</div>
						</div>
					</li>
					
					<li class="item ">
						<div class="contDiv">
							<div class="active">
								<span id="11" class="name" onClick="javascript:window.location.href='article.php?id=33'"><?php echo $this->_var['lang']['m_79']; ?></span>
							</div>
						</div>
					</li>
					
					<li class="item ">
						<div class="contDiv">
							<div class="active">
								<span id="12" class="name" onClick="javascript:window.location.href='article.php?id=33'"><?php echo $this->_var['lang']['m_80']; ?></span>
							</div>
						</div>
					</li>
					
					<li class="item ">
						<div class="contDiv">
							<div class="active">
								<span id="13" class="name" onClick="javascript:window.location.href='article.php?id=33'"><?php echo $this->_var['lang']['m_81']; ?></span>
							</div>
						</div>
					</li>
					
					<li class="item current">
						<div class="contDiv">
							<div class="active">
								<span id="14" class="name" onClick="javascript:window.location.href='article.php?id=33'"><?php echo $this->_var['lang']['m_82']; ?></span>
							</div>
						</div>
					</li>
					
					</ul>
					</div>
					
				</td>
			</tr>
		</tbody></table>
						<script type="text/javascript">
					var thelistScroll;
	function listRefresh(){
		$(".z3g-showMoreCont").css("top",myScroll.y*(-1) + "px");
		var wHeight = $(window).height(),
			footerH=$('#box_footerBody').height(),
			titleH = $(".titleTabWrap").height();
		$("#hScrollList").css("height",(wHeight - footerH - titleH)+"px");
		if(thelistScroll){
			thelistScroll.refresh();
		}
	}
	$(function(){
		var wHeight = $(window).height(),
			footerH=$('#box_footerBody').height(),
			titleH = $(".titleTabWrap").height();
		$("#hScrollList").css("height",(wHeight - footerH - titleH)+"px");
		thelistScroll = new iScroll('hScrollList', {
			zoom: false,
			hScroll: false,
			hScrollbar: false,
			vScrollbar : false,
			bounce: false,
			onBeforeScrollStart: function(e) {
				var target = e.target;
				thelistScroll.targetElement = target;
				thelistScroll.clickFunc = $(target).attr("onclick");
				while (target.nodeType != 1) target = target.parentNode;
				if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA' && target.tagName != 'BUTTON'){
					if(!$.os.ios){
						e.preventDefault();
					}
				}
			},
			onScrollMove :function(event){
				event.preventDefault();
				event.stopPropagation();
				thelistScroll.touchMoveFlag = true;
			},
			onTouchEnd : function(){
				if(thelistScroll.touchMoveFlag){
					$(thelistScroll.targetElement).removeAttr("onclick");
					setTimeout(function(){
						$(thelistScroll.targetElement).attr("onclick",thelistScroll.clickFunc);
						thelistScroll.targetElement = null;
						thelistScroll.clickFunc = null;
						thelistScroll.startY = null;
						thelistScroll.endY = null;
						thelistScroll.touchMoveFlag = false;
					},50);
				}
			}
		});
		$(".z3g-showMoreCont").bind("touchmove",function(event){
			event.preventDefault();
			event.stopPropagation();	
		});
	});
</script>
		</section>
	</section>
	
</div>
		</div>