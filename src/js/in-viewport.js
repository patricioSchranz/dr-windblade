const isInPartOfViewport = (element, percent)=>{
    const elementRect = element.getBoundingClientRect()

    // console.log('window inner height', window.innerHeight)
    // console.log('element top =>' , elementRect.top)
    // console.log('element => \n', element)

    return(elementRect.top <= window.innerHeight * percent)
}

