document.addEventListener('DOMContentLoaded', () => {
  const elements = Array.from(document.getElementsByTagName('li'));
  let prevElement = null;
  elements.forEach(element => {
    const link = element.querySelector('a');
    link.addEventListener('click', event => {
      event.preventDefault();
      if (prevElement) {
        prevElement.classList.remove('border');
        const prevLink = prevElement.querySelector('a');
        prevLink.style.color = '';
      }
      link.style.color = '#A48EFF';
      element.classList.add('border');
      prevElement = element;
    });
  });
});