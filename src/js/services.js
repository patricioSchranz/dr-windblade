// -----------------------------------------
// DEFAULT REITER NAVIGATION
// ------------------------------------------

if(window.innerWidth > 1350){
    const reiterLinks = document.querySelectorAll(".services_reiter_list a")

    const addAClick = (link)=>{
        reiterLinks.forEach(reiterLink =>{
            reiterLink.classList.remove('clicked')
        })

        link.classList.toggle('clicked')
    }

    window.addEventListener('load', ()=>{
        const 
            theUrl = window.location.href,
            hashtagIndex = theUrl.indexOf('#'),
            searchedId = theUrl.slice(hashtagIndex)

        // console.log(hashtagIndex)
        // console.log(searchedId)

        reiterLinks.forEach(link =>{
            // console.log(link.href)

            if(link.href === theUrl){
                addAClick(link)
            }
        })
        
    })

    // => add "clicked" class on clicked links
    reiterLinks.forEach(link =>{
        link.addEventListener('click', ()=>{

            // console.log('link')

            addAClick(link)
        })
    })

    megaMenuLinks.forEach(megaMenuLink =>{
        megaMenuLink.addEventListener('click', ()=>{
            const megaMenuLinkHref = megaMenuLink.href
            let reiterLinkEquivalent

        reiterLinks.forEach(link =>{
                if(link.href === megaMenuLinkHref){
                    reiterLinkEquivalent = link
                }
            })

            addAClick(reiterLinkEquivalent)
        })
    })

}



// -------------------------------------------
// REITER NAVIGATION MAX WIDTH 1350px
// --------------------------------------------


if(window.innerWidth <= 1350){
    console.log('max width 1350px')

    const 
        alternateReiterLinks = document.querySelectorAll('.outer-heading'),
        servicesContents = document.querySelectorAll('.services_service_content')

    let foundAnchor = false

    // callback => show the right tab
    const showTheRightTab = (searchedID)=>{
        alternateReiterLinks.forEach(reiterLink =>{
            if(reiterLink.dataset.id === searchedID){
                foundAnchor = true
    
                alternateReiterLinks.forEach( link => link.classList.remove('active'))
    
                reiterLink.classList.add('active')
                
                servicesContents.forEach(content =>{
                    content.classList.remove('active')
                })
    
                reiterLink.nextElementSibling.classList.toggle('active')
            }
        })
    }

    alternateReiterLinks.forEach(link =>{
        link.addEventListener('click', ()=>{
            alternateReiterLinks.forEach( reiterLink => reiterLink.classList.remove('active'))
            
            servicesContents.forEach(content =>{
                content.classList.remove('active')

                if(link.nextElementSibling == content){
                    content.classList.toggle('active')
                    link.classList.add('active')
                    window.scrollTo(0,0)
                    console.log(scrollY)
                }
               
            })
        })
    })

    window.addEventListener('load', ()=>{
        const anchorLink = '#' + window.location.href.split("#")[1]

        showTheRightTab(anchorLink)
       
        if (foundAnchor === false) { alternateReiterLinks[0].click() }
    })

    megaMenuLinks.forEach(megaMLink =>{
        megaMLink.addEventListener('click', ()=>{
            const 
                megaMenuLinkHref = link.href,
                hashtagIndex = megaMenuLinkHref.indexOf('#'),
                searchedContentId = megaMenuLinkHref.slice(hashtagIndex)

            showTheRightTab(searchedContentId)
        })
    })
}



