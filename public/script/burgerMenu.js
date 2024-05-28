window.onload = ()=>{
    const burger = document.querySelector('.burger')
    const menu = document.querySelector('.menuResponsive')
    const cross = document.querySelector('.cross')
    const html = document.querySelector('html')
    burger.addEventListener('click', (e)=>{
        menu.classList.add("displayFlex")
        cross.classList.remove('displayNone')
        burger.classList.add("displayNone")
        html.classList.add('menu')
    })
    cross.addEventListener('click', (e)=>{
        burger.classList.remove('displayNone')
        cross.classList.add("displayNone")
        menu.classList.remove("displayFlex")
        html.classList.remove('menu')
    })
}