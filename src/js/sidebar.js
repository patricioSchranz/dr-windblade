// **********************
// SIDEBAR JS
// **********************

const 
    sidebarLinks = document.querySelectorAll('.blog_sidebar a'),
    sidebarClose = document.querySelector(".sidebar-close"),
    sidebar = document.querySelector('.blog_sidebar'),
    filterButton = document.querySelector('.blog-filter'),
    windowHeight = window.innerHeight,
    documentHeight = document.querySelector('body').offsetHeight,
    footerHeight = document.querySelector('.footer').offsetHeight

// => show the filter button
document.addEventListener('scroll', ()=>{

   if(scrollY > (windowHeight * 0.2) && scrollY < (documentHeight - footerHeight) ){
    filterButton.classList.contains('visible-button') || filterButton.classList.add('visible-button')
   }

   if(scrollY < (windowHeight * 0.2) ){
    filterButton.classList.contains('visible-button') && filterButton.classList.remove('visible-button')
   }

   if(scrollY >= (documentHeight - (footerHeight + windowHeight) ) ){
    filterButton.classList.contains('visible-button') && filterButton.classList.remove('visible-button')
   }

})


// => open the sidebar
filterButton.addEventListener('click', ()=>{
    sidebar.classList.toggle('visible-sidebar')
})


// => close the sidebar
sidebarClose.addEventListener('click', () =>{
    sidebar.classList.toggle('visible-sidebar')
})

sidebarLinks.forEach(link => link.addEventListener('click', () => {
    sidebar.classList.toggle('visible-sidebar')
}))



