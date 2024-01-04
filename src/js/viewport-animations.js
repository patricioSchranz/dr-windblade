// ************************
// VIEWPORT ANIMATIONS
// ************************

// ::::::::::::::::::::::::
// REGLUAR EXPRESSIONS
// ::::::::::::::::::::::::

const 
    animationRegex = /\banimation--\w*\b/g,
    styleRegex = /\b\w*style\w*\b/g,
    durationRegex = /\b\w*duration\w*\b/g


    
// ::::::::::::::::::::::::
// ANIMATION ELEMENT CLASS
// ::::::::::::::::::::::::

class AnimationElement{

    // .................
    // CONSTRUCTOR

    constructor(animationElement){
        this.element = animationElement

        this.setAnimationStyle(this.element)
        this.setAnimationDuration(this.element)

        this.setElementCssClass(this.animationStyle)

        this.percent = 0.5
    }

    // .................
    // CLASS CALLBACKS

    getAnimationClasses(element){
        const cssClasses = Array.from(element.classList)
        return cssClasses.filter( cssClass => animationRegex.test(cssClass) )  
    }

    // .......................
    // => SET CLASS PROPERTYS

    setAnimationStyle(element) {
        const 
            animationClasses = this.getAnimationClasses(element),
            fullAnimationStyle = animationClasses.find( animationClass => styleRegex.test(animationClass)),
            splitedAnimationStyle = fullAnimationStyle ? fullAnimationStyle.split("_") : null

            if(fullAnimationStyle) { this.element.classList.remove(fullAnimationStyle) }
            
            this.animationStyle = splitedAnimationStyle ? splitedAnimationStyle[1] : 'opacity-in'
    }

    setAnimationDuration(element){
        const 
            animationClasses = this.getAnimationClasses(element),
            fullAnimationDuration = animationClasses.find( animationClass => durationRegex.test(animationClass)),
            splitedAnimationDuration = fullAnimationDuration ? fullAnimationDuration.split("_") : null

            if(fullAnimationDuration) { this.element.classList.remove(fullAnimationDuration) }

            this.animationDuration = splitedAnimationDuration ? (splitedAnimationDuration[1] / 1000) : 'default'
    }

    // .............................
    // => MANIPULATE THE DOM ELEMENT

    setElementCssClass(animationStyle){
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
    declaredAnimationElements = document.querySelectorAll('.animation-element'),
    animationElements = []

declaredAnimationElements.forEach(element =>{
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