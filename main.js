window.addEventListener("scroll", ()=>{
    let nav = document.querySelector("nav");
    nav.classList.toggle("scrolling", window.scrollY>0);
})