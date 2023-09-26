const searchInput= document.getElementById('MyInput');
const images=document.querySelectorAll('.activity');

searchInput.addEventListener('input',()=>{
  const searchTerm = searchInput.value.toLowerCase();
   images.forEach(image =>{
    const caption = image.querySelector('img').getAttribute('data-caption').toLowerCase();

    if(caption.includes(searchTerm)){
      image.style.display = 'block';
    }
    else{
      image.style.display = 'none';
    }
   });
});

