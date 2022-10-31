window.addEventListener('load', () => {
	const $hamburgerMenu = document.getElementById('hamburger-menu');
	
	$hamburgerMenu.addEventListener('click', collapseMenu);

})

function collapseMenu(event){
	let $mobileNav = document.getElementById('mobile-nav');
	const isCollapsed = $mobileNav.classList.contains('collapse');

	if(isCollapsed){
		$mobileNav.classList.remove('collapse');
		return;
	}

	$mobileNav.classList.add('collapse');
}

