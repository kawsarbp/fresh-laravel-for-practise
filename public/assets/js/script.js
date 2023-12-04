//responsive navigation start
function Menu(e){
    let navRes = document.querySelector('.navRes')
    e.name === 'menu' ? (e.name = 'close',navRes.classList.add('top-[70px]'),navRes.classList.add('opacity-100')) : (e.name = 'menu',navRes.classList.remove('top-[70px]'),navRes.classList.remove('opacity-0'))
}
//responsive navigation end
