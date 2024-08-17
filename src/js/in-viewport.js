const isInPartOfViewport = (element, percent)=>{
    const elementRect = element.getBoundingClientRect()

    return(elementRect.top <= window.innerHeight * percent)
}

