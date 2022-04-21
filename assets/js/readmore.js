const parentcontainer = document.querySelector('.read-more-container');
parentcontainer.addEventListener('click', event=>{
    const current = event.target;
    const isReadmorebtn = current.className.includes('read-more-btn');
    if(!isReadmorebtn) return;
    const currentText = event.target.parentNode.querySelector('.read-more-text');
    currentText.classList.toggle('read-more-text--show');
    current.textContent = current.textContent.includes('Read More') ? "Read More...": "Read Less...";
})