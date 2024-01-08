const  
    sectionLeistungen = document.querySelector('.startpage_leistungen'),
    introImage = document.querySelector('.startpage_intro_picture'),
    sectionLeistungenHeading = sectionLeistungen.querySelector('header h2'),

    cardInsurance = document.querySelector('#card-kassen'),
    cardPrivate = document.querySelector('#card-wahlarzt'),
    cardAesthetic = document.querySelector('#card-aesthetic'),
    cardMore = document.querySelector('#card-more')


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
    // if(isInPartOfViewport(sectionLeistungen, 0.5)){
    //     sectionLeistungenHeading.classList.add('animate__fadeInUp')
    // }
    // else{
    //     sectionLeistungenHeading.classList.remove('animate__fadeInUp')
    // }

    // 'CARDS'
    if(isInPartOfViewport(cardInsurance, 0.5)){
        // cardInsurance.classList.add('animate__fadeInUp')
        cardInsurance.classList.add('perspective-off')
    }

    if(isInPartOfViewport(cardPrivate, 0.5)){
        // setTimeout(()=>{
        //     // cardPrivate.classList.add('animate__fadeInUp')
        //     cardPrivate.classList.add('perspective-off')
        // }, 1000)  
        cardPrivate.classList.add('perspective-off')
    }

    if(isInPartOfViewport(cardAesthetic, 0.5)){
        // cardAesthetic.classList.add('animate__fadeInUp')
        cardAesthetic.classList.add('perspective-off')
    }

    if(isInPartOfViewport(cardMore, 0.5)){
        // cardMore.classList.add('animate__fadeInUp')
        cardMore.classList.add('perspective-off')
    }
})