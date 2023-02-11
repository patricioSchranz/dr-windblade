


// => handle the hamburger button click
hamburgerButton.addEventListener('click', ()=>{

    hamburgerButton.classList.toggle('hamburger-active')
    nav.classList.toggle('nav-in')
})

// => handle the mega-menu / sub-menu openers on viewports with hamburger menu
if(window.innerWidth <= 1350){

    // => remove the hover classes
    listPointServices.classList.remove('open_mega-menu')
    listPointBeautyAndBalance.classList.remove('open_sub-menu')

    // => mega menu opener => add click event instead of the hover class
    listPointServices.addEventListener('click', ()=>{
        const 
            minus = '\u2212',
            plus = '\u002B'

        megaMenu.classList.toggle('element-in')

        megaMenu.classList.contains('element-in')
        ? listPointServices.dataset.sign = minus
        : listPointServices.dataset.sign = plus
    })

     // => submenu opener => add click event instead of the hover class
    listPointBeautyAndBalance.addEventListener('click', ()=>{
        const 
            minus = '\u2212',
            plus = '\u002B'

        subMenu.classList.toggle('element-in')

        subMenu.classList.contains('element-in')
        ? listPointServices.dataset.sign = minus
        : listPointServices.dataset.sign = plus
    })
}
