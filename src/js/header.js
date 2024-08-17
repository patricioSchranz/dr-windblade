let lastScrollPosition

window.addEventListener('scroll', (event)=>{

    let currentScrollPosition= window.scrollY

    if(currentScrollPosition > 0 && currentScrollPosition > lastScrollPosition){
        header.style.top = '-5rem'
    }
    else if(currentScrollPosition < lastScrollPosition){
        header.style.top = '0'
    }

    lastScrollPosition = window.scrollY
})