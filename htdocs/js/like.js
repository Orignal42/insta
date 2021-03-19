
let likeBtns = document.querySelectorAll('#likeBtn');
let userId = document.querySelector('[data-idUser]').getAttribute('data-idUser');
let userPhoto = document.querySelector('[data-idPhoto]').getAttribute('data-idPhoto');

console.log("data-IdPhoto");
likeBtns.forEach(likeBtn => {
    likeBtn.addEventListener('click',function(e){
       console.log(e.target.getAttribute('data-idphoto');
       console.log("data-IdUser");
    })
  })