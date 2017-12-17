			function lib_bwcheck()
				{this.ver=navigator.appVersion; this.agent=navigator.userAgent
				this.dom=document.getElementById?1:0
				this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom)?1:0;
				this.ie6=(this.ver.indexOf("MSIE 6")>-1 && this.dom)?1:0;
				this.ie4=(document.all && !this.dom)?1:0;
				this.ie=this.ie4||this.ie5||this.ie6
				this.mac=this.agent.indexOf("Mac")>-1
				this.operaAny=this.agent.indexOf("Opera/")>-1
				this.opera5=this.agent.indexOf("Opera 5")>-1
				this.opera=(this.operaAny || this.opera5)
				this.ns6=(this.dom && parseInt(this.ver) >= 5) ?1:0; 
				this.ns4=(document.layers && !this.dom)?1:0;
				this.bw=(this.ie6 || this.ie5 || this.ie4 || this.ns4 || this.ns6 || this.opera5 || this.dom)
				return this}
			var bw=new lib_bwcheck()

			function checkOpera()
				{if(bw.opera)
					{window.location.href='';}
				}
			function resizeBars()
				{if(bw.ie)
					{line1.style.width = eval(document.body.clientWidth);
					line2.style.width = eval(document.body.clientWidth);
					line3.style.width = eval(document.body.clientWidth);
					line4.style.width = eval(document.body.clientWidth);}
				}
			function setEvents()
				{document.onmousemove = fnTrackMouse;}
			function fnTrackMouse()
				{if(bw.ie)
					{var MaxYSize = 100;
					if(event.clientY * 0.1 < MaxYSize)
						{line1.style.posTop = event.clientY * 0.1; line1.style.visibility='visible';}
					else
						{line1.style.visibility='hidden';}
										if(event.clientY * 0.11 < MaxYSize)
						{line2.style.posTop = event.clientY * 0.11; line2.style.visibility='visible';}
					else
						{line2.style.visibility='hidden';}
						
					if(event.clientX * 0.07 < MaxYSize)
						{line3.style.posTop = event.clientX * 0.07; line3.style.visibility='visible';}
					else
						{line3.style.visibility='hidden';}
					if(event.clientX * 0.09 < MaxYSize)
						{line4.style.posTop = event.clientX * 0.09; line4.style.visibility='visible';}
					else
						{line4.style.visibility='hidden';}
				}
		}