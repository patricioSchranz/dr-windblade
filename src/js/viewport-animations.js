// ************************
// VIEWPORT ANIMATIONS
// ************************

// ::::::::::::::::::::::::
// REGLUAR EXPRESSIONS
// ::::::::::::::::::::::::

const 
    animationRegex = /\banimation--\w*\b/g,
    styleRegex = /\b\w*style\w*\b/g,
    durationRegex = /\b\w*duration\w*\b/g,
    delayRegex = /\b\w*delay\w*\b/g,
    timingRegex = /\b\w*timing\w*\b/g,
    triggerPointRegex = /\b\w*trigger-point\w*\b/g


    
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
        this.setAnimationDelay(this.element)
        this.setAnimationTiming(this.element)
        this.setAnimationTriggerPoint(this.element)

        this.setElementCssClass(this.animationStyle)
        this.setElementCSSDurationProperty(this.animationDuration)
        this.setElementCSSDelayProperty(this.animationDelay)
        this.setElementCSSTimingProperty(this.animationTiming)

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

    setAnimationDelay(element){
        const 
            animationClasses = this.getAnimationClasses(element),
            fullAnimationDelay = animationClasses.find( animationClass => delayRegex.test(animationClass)),
            splitedAnimationDelay = fullAnimationDelay ? fullAnimationDelay.split("_") : null

            if(fullAnimationDelay) { this.element.classList.remove(fullAnimationDelay) }

            this.animationDelay = splitedAnimationDelay ? (splitedAnimationDelay[1] / 1000) : 'default'
    }

    setAnimationTiming(element){
        const 
            animationClasses = this.getAnimationClasses(element),
            fullAnimationTiming = animationClasses.find( animationClass => timingRegex.test(animationClass)),
            splitedAnimationTiming = fullAnimationTiming ? fullAnimationTiming.split("_") : null


            if(fullAnimationTiming) { this.element.classList.remove(fullAnimationTiming) }

            this.animationTiming = splitedAnimationTiming ? splitedAnimationTiming[1] : 'default'
    }

    setAnimationTriggerPoint(element){
        const 
            animationClasses = this.getAnimationClasses(element),
            fullAnimationTriggerPoint = animationClasses.find( animationClass => triggerPointRegex.test(animationClass)),
            splitedAnimationTriggerPoint = fullAnimationTriggerPoint ? fullAnimationTriggerPoint.split("_") : null

            if(fullAnimationTriggerPoint) { this.element.classList.remove(fullAnimationTriggerPoint) }

            this.animationTriggerPoint = splitedAnimationTriggerPoint ? (splitedAnimationTriggerPoint[1] / 100) : 0.7
    }


    // .................................................
    // => MANIPULATE THE DOM ELEMENT AND CSS PROPERTIES

    setElementCssClass(animationStyle){
        this.element.classList.add(animationStyle)
    }

    setElementCSSDurationProperty(duration){
        if(!isNaN(duration)){ this.element.style.setProperty('--animation-duration', `${duration}s`) }
    }

    setElementCSSDelayProperty(delay){
        if(!isNaN(delay)){ this.element.style.setProperty('--animation-delay', `${delay}s`) }
    }

    setElementCSSTimingProperty(timing){
        if(timing !== 'default'){ this.element.style.setProperty('--animation-timing', `${timing}`) }
    }

    triggerAnimation(){
        if(isInPartOfViewport(this.element, this.animationTriggerPoint) && window.getComputedStyle(this.element).display !== "none"){
            console.log(this.animationTriggerPoint)
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