// **********************
// SIDEBAR JS
// **********************

const 
    sidebarLinks = document.querySelectorAll('.blog_sidebar a'),
    sidebarClose = document.querySelector(".sidebar-close"),
    sidebar = document.querySelector('.blog_sidebar'),
    filterButton = document.querySelector('.blog-filter')


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

