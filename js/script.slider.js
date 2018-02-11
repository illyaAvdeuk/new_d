var example9 = new Mg({
			reference:"example9",
			click:{
				//activated:[0],
				cycle:true,
				interactive:true,
				multiLess:6,
				multiPlus:6,
				//scrollWheel:true,
				//dragWheel:true
			}
		});
		example9.click.onEvent = function(){
			var arr = this.multiActivated;
			var alpha = Math.PI*2/(arr.length);
			var xradius = 420;
			var yradius = 300; //ex1
			//var yradius = 260;
			for (var i=0;i<arr.length;i++){
				var path = $("#"+this.reference+"-item-"+ arr[i]);
				if(arr[i]==this.activated){
					var depth = 0;
				} else {
					var depth = example9.mapDistanceReverse(this.multiPlus, i, arr.length, 0);
				}
				//
				if ($(document).width() < 1400 ) {
					var xradius = 280;
					var yradius = 270;
					
				}
				
				//
				var theta = alpha*(this.activated-arr[i]-depth/6)+1.6; // -depth/6 will give additional distance based on depth: it gives space for activated
				var x = 20+xradius+Math.cos(theta)*xradius;
				var y = yradius+Math.sin(theta)*yradius;
				var w = h = y/4;
				var scale = 0.2+y/900;
				if(arr[i]==this.activated){scale = 1.35; y-=30;}
				if(arr[i]==this.activated && $(document).width() < 1400){scale = 1.05; y-=20;}
				path.clearQueue().stop().css("z-index", Math.round(y/10));
				if(perspective && transition){
					path.css(transition.css, transform.css+" 1.3s cubic-bezier("+bezcss+")");
					path.css(transform.css, "translate3d("+x+"px,"+y+"px,0) scale("+scale+")");
				}else{
					path.animate({transformJ:'translate('+x+','+y+') scale('+scale+')'},{queue:true, duration:1300, specialEasing: {transformJ:bez}});
				}
			}
			$("#"+this.reference+"-item-"+this.deactivated).removeClass("active");
			$("#"+this.reference+"-item-"+this.activated).addClass("active").css("z-index",100);
		}

		example9.click.scrollClick = function(){
			var path = $("#"+this.reference+"-click-scrollIn");
			path.addClass("active");
		}
		example9.click.scrollMove = function(){
			var path = $("#"+this.reference+"-click-scrollIn");
			if(perspective && transition){
				path.css(transition.css, transform.css+" 0s");
				path.css(transform.css, "translate3d("+this.scrollPosition+"px,0,0)");
			}else{
				path.clearQueue().stop().animate({left:this.scrollPosition},{queue:true, duration:0, specialEasing: {left:bez}});
			}
		}
		example9.click.scrollRelease = function(){
			var path = $("#"+this.reference+"-click-scrollIn");
			path.removeClass("active");
			if(perspective && transition){
				path.css(transition.css, transform.css+" 1.2s cubic-bezier("+bezcss+") 0s");
				path.css(transform.css, "translate3d("+this.scrollPosition+"px,0,0)");
			}else{
				path.clearQueue().stop().animate({left:this.scrollPosition},{queue:true, duration:300, specialEasing: {left:bez}});
			}
		}
		example9.click.dragMove = function(){
			var path = $("#"+this.reference+"-click-dragIn");
			if(perspective && transition){
				path.css(transition.css, transform.css+" 0s");
				path.css(transform.css, "translate3d("+this.dragPosition+"px,0,0)");
			}else{
				path.clearQueue().stop().animate({left:this.dragPosition},{queue:true, duration:0, specialEasing: {left:bez}});
			}
		}
		example9.click.dragRelease = function(){
			var path = $("#"+this.reference+"-click-dragIn");
			if(perspective && transition){
				path.css(transition.css, transform.css+" 1.2s cubic-bezier("+bezcss+") 0s");
				path.css(transform.css, "translate3d("+this.dragPosition+"px,0,0)");
			}else{
				path.clearQueue().stop().animate({left:this.dragPosition},{queue:true, duration:300, specialEasing: {left:bez}});
			}
		}

		example9.init();