const updateVhUnit = () => {
  const vhUnit = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vhUnit}px`);
}

const handleMenu = () => {
  hamburger.classList.toggle('hamburger--active')
  nav.classList.toggle('nav--active')
}

const closeNav = ({ target }) => {
  if (!target.classList.contains('nav__link')) {
    return
  }
  hamburger.classList.remove('hamburger--active');
  nav.classList.remove('nav--active');
}

const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('nav');

document.addEventListener('DOMContentLoaded', () => {
//   window.addEventListener('resize', updateVhUnit);
  hamburger.addEventListener('click', handleMenu)
  nav.addEventListener('click', closeNav)
//   updateVhUnit();
})
