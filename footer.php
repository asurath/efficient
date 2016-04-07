			<span id="copyr" >© Copyright 2015, All Rights Reserved</span>
			</div>
		</div>
		<footer>
			<script type="text/javascript">
				window.lastWidth = 0;
				function toggleMenu(){
					window.lastWidth = window.innerWidth;
					var el = document.getElementById("main");
					var el2 = document.getElementById("menu-icon");
					var el3 = document.getElementById("psuedo-menu-icon");
					var el4 = document.getElementById("opaque-div");

					if(el.className == "menu-open"){		
						document.getElementsByTagName("html")[0].style.width = "";
						document.body.style.width = "";		
						document.getElementById("content").style.left = "";
						el.className = "";
						el2.className = "";
						el3.className = "";
						el4.className = "";
					}
					else{
						document.getElementsByTagName("html")[0].style.width = window.innerWidth + "px";
						document.body.style.width = window.innerWidth + "px";
						document.getElementById("content").style.left = "310px";
						el.className = "menu-open";
						el2.className = "menu-open";
						el3.className = "menu-open";
						el4.className = "menu-open-opaque";
					}
				}
				function toggleMenuWrap(){
					if(window.lastWidth == window.innerWidth) return;
					toggleMenuResize();
				}
				function toggleMenuResize(){
					window.lastWidth = window.innerWidth;
					document.getElementsByTagName("html")[0].style.width = "";
					document.body.style.width = "";		
					document.getElementById("content").style.left = "";
					document.getElementById("main").className = "";
					document.getElementById("menu-icon").className = "";
					document.getElementById("psuedo-menu-icon").className = "";
					document.getElementById("opaque-div").className = "";
				}
				function clickOutHandler(){
					if(window.innerWidth > 800) return;
					toggleMenuResize();
				}
				document.getElementById("psuedo-menu-icon").onclick = toggleMenu;		
				document.getElementById("opaque-div").onclick = clickOutHandler;
				window.addEventListener("resize", toggleMenuWrap);
				window.addEventListener("orientationchange", toggleMenuResize);
			</script>	
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			  ga('create', 'UA-58765610-1', 'auto');
			  ga('send', 'pageview');
			
			</script>
		</footer>
	</body>
</html>
