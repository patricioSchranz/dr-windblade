let lastScrollPosition

window.addEventListener('scroll', (event)=>{

    let currentScrollPosition= window.scrollY
    // console.log('current scroll position =>', currentScrollPosition)

    if(currentScrollPosition > 0 && currentScrollPosition > lastScrollPosition){
        // console.log('page is scrolled down')
        header.style.top = '-5rem'
    }
    else if(currentScrollPosition < lastScrollPosition){
        // console.log('page is scrolled up')
        header.style.top = '0'
    }

    lastScrollPosition = window.scrollY
})