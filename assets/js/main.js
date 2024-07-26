(function ($) {
	"use strict";

	/*=========================
	PRELOADER JS
	===========================*/
	$(window).on('load', function (event) {
		$('.preloader').delay(500).fadeOut(500);
	});


	    // sidebar menu clicking event
		const sidebarMenuLink = document.querySelectorAll(
			".sidebar-menu ul li.has-child"
		);
		const resBar = document.querySelectorAll(
			".humberger-bar, .sidebar-slide-overlay"
		);
		const resBarLink = document.querySelectorAll(
			".sidebar-menu ul li:not(.has-child)"
		);
		const sidebarMenuWrap = document.querySelectorAll(".sidebar-menu");
	
		sidebarMenuLink.forEach((link) => {
			link.addEventListener("click", () => {
				let submenu = document.querySelector(".submenu");
				link.classList.toggle("active");
				submenu.classList.toggle("active");
				if (submenu.style.maxHeight) {
					submenu.style.maxHeight = null;
				} else {
					submenu.style.maxHeight = submenu.scrollHeight + 10 + "px";
				}
			});
		});
		resBar.forEach((btn) => {
			btn.addEventListener("click", () => {
				sidebarMenuAction();
			});
		});
		resBarLink.forEach((link) => {
			link.addEventListener("click", () => {
				sidebarMenuAction();
			});
		});
		function sidebarMenuAction() {
			for (let i = 0; i < resBar.length; i++) {
				resBar[i].classList.toggle("active");
			}
			document.querySelector(".sidebar-slide").classList.toggle("active");
		}

		sidebarMenuWrap.forEach(wrap => {
			let menu = document.querySelector('.mainmenu ul')
			wrap.appendChild(menu.cloneNode(true))
		});

		
	// sticky
	var wind = $(window);
	var sticky = $('.header-area');
	var holder = $('.header-holder');
	wind.on('load', function () {
		holder.css('height', sticky.height())
	});
	wind.on('resize', function () {
		holder.css('height', sticky.height())
	});
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 150) {
			sticky.removeClass('sticky');
		} else {
			sticky.addClass('sticky');
		}
	});

	
   // niceSelect
   $("select").niceSelect();
	
})(jQuery);