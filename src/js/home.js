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

    // 'SECTION LEISTUNGEN'
    if(isInPartOfViewport(sectionLeistungen, 0.9)){
        sectionLeistungen.classList.replace('clippy-off', 'clippy-on')
    }
    else{
        sectionLeistungen.classList.replace('clippy-on', 'clippy-off')
    }


    // 'CARDS'
    if(isInPartOfViewport(cardInsurance, 0.5)){
        // cardInsurance.classList.add('animate__fadeInUp')
        cardInsurance.classList.add('perspective-off')
    }

    if(isInPartOfViewport(cardPrivate, 0.5)){
        cardPrivate.classList.add('perspective-off')
    }

    if(isInPartOfViewport(cardAesthetic, 0.5)){
        cardAesthetic.classList.add('perspective-off')
    }

    if(isInPartOfViewport(cardMore, 0.5)){
        cardMore.classList.add('perspective-off')
    }
})