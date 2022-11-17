
const btnLike = document.getElementsByClassName('btnLike');

console.log(btnLike);

for(let i=0; i < btnLike.length ; i++){

    btnLike[i].addEventListener('click', (element)=>{
        
        let title = element.path[2].childNodes[1].innerText;
        let img = element.path[2].childNodes[3].currentSrc;
        let content = element.path[2].childNodes[5].innerText;
         
        console.log(title);
        console.log(img);
        console.log(content);

        let publicacionLikeada = {
            title, img, content
        }

        

        localStorage.setItem('Saved', JSON.stringify(publicacionLikeada) )



    });

}




 

