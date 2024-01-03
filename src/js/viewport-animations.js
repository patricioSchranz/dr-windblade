// ************************
// VIEWPORT ANIMATIONS
// ************************

// ::::::::::::::::::::::::
// REGLUAR EXPRESSIONS
// ::::::::::::::::::::::::

const 
    aniRegex = /\bani\w*\b/g,
    styleRegex = /\b\w*style\w*\b/g


    
// ::::::::::::::::::::::::
// ANIMATION ELEMENT CLASS
// ::::::::::::::::::::::::

class AnimationElement{

    constructor(animationElement){
        this.element = animationElement

        this.setAnimationStyle(this.element)
        this.setElementCssClasses(this.animationStyle)

        this.percent = 0.5
    }

    getAniClasses(element){
        const cssClasses = Array.from(element.classList)
        return cssClasses.filter( cssClass => aniRegex.test(cssClass) )  
    }

    setAnimationStyle(element) {
        const 
            aniClasses = this.getAniClasses(element),
            fullAniStyle = aniClasses.find( aniClass => styleRegex.test(aniClass)),
            splitAniStyle = fullAniStyle ? fullAniStyle.split("_") : null

            if(fullAniStyle) { this.element.classList.remove(fullAniStyle) }
            
            this.animationStyle = splitAniStyle ? splitAniStyle[1] : 'opacity-in'
    }

    setElementCssClasses(animationStyle){
        this.element.classList.add(animationStyle)
    }

    triggerAnimation(){
        if(isInPartOfViewport(this.element, this.percent) && window.getComputedStyle(this.element).display !== "none"){
            this.element.classList.add('in-right-place')
        }
    }
}


// ::::::::::::::::::::::::
// ELEMENTS
// ::::::::::::::::::::::::

const 
    declaredAnels = document.querySelectorAll('.anel'),
    animationElements = []

declaredAnels.forEach(element =>{
    animationElements.push(new AnimationElement(element) )
})

console.log(animationElements)


// ::::::::::::::::::::::::
// EVENTS
// ::::::::::::::::::::::::

document.addEventListener('scroll', ()=>{
    animationElements.forEach(animationElement =>{
        animationElement.triggerAnimation()
    })
})

window.addEventListener('load', ()=>{
    animationElements.forEach(animationElement =>{
        animationElement.triggerAnimation()
    })
})