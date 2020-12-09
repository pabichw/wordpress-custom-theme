window.onload = () => {
    const burgerBtn = document.getElementById('burger-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOptions = document.getElementsByClassName('mobile-menu__option');
    
    const maxWidth = window.innerWidth;

    burgerBtn.addEventListener('click', (e) => {
        const wasVisible = window.getComputedStyle(mobileMenu).right === "0px";

        // right: 100vw;
        mobileMenu.style.right = wasVisible ? '${maxWidth}px' : `0px`;
    })

    mobileMenu.addEventListener('click', (e) => {
        mobileMenu.style.right = `${maxWidth}px`;
    })
};
