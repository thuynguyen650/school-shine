const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

const mobileMenu = $('.mobile-menu')
const mobileNav = $('.mobile-nav')

const mobileNavItems = $$('.mobile-nav-item--has-children')
const header = $('header')

// mobile nav onclick handle 
for(let mobileNavItem of mobileNavItems) {
    const _this = mobileNavItem
    mobileNavItem.onclick = function() {
        _this.style.height = _this.style.height === '180px' ? '32px' : '180px'
        _this.querySelector('.sub-nav-list').style.display =  _this.querySelector('.sub-nav-list').style.display === 'block' ? 'none' : 'block'
        _this.querySelector('.nav-icon--down').style.display =  _this.querySelector('.nav-icon--down').style.display === 'none' ? 'block' : 'none'
        _this.querySelector('.nav-icon--up').style.display =  _this.querySelector('.nav-icon--up').style.display === 'block' ? 'none' : 'block'
    }
}
console.log(mobileNavItems)

mobileMenu.onclick = () => {
    mobileNav.classList.toggle('show')   
    header.style.height = header.offsetHeight === 150 ? '360px' : '150px' 
}

window.onresize = () => {
    mobileNav.classList.remove('show')
    header.style.height = '150px' 
}