const isInPartOfViewport = (element, percent)=>{
    const elementRect = element.getBoundingClientRect()

    // console.log('window inner height', window.innerHeight)
    // console.log('element top =>' , elementRect.top)
    // console.log('element => \n', element)

    return(elementRect.top <= window.innerHeight * percent)
}

// => check if elements are in a part of the viewport
window.addEventListener('scroll', ()=>{
    // isInPartOfViewport(sectionLeistungen, 1) && console.log('element is in viewport')
    // isInPartOfViewport(sectionLeistungen, 1) || console.log('element is not in viewport')

    console.log('scroll y', window.scrollY)

    // 'SECTION LEISTUNGEN'
    if(isInPartOfViewport(sectionLeistungen, 0.9)){
        sectionLeistungen.classList.replace('clippy-off', 'clippy-on')
    }
    else{
        sectionLeistungen.classList.replace('clippy-on', 'clippy-off')
    }

    // 'SECTION LEISTUNGEN HEADING'
    if(isInPartOfViewport(sectionLeistungen, 0.5)){
        sectionLeistungenHeading.classList.add('animate__fadeInUp')
    }
    // else{
    //     sectionLeistungenHeading.classList.remove('animate__fadeInUp')
    // }
})