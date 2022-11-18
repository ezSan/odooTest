


let savedArticles = localStorage.getItem('Liked');
let newArray = []

const setStorage =()=>{
    savedArticles
    ? getDataAndPushInArray()
    : console.log ('No hay nada Likeado')
}

let getDataAndPushInArray =()=>{
    let oldLikes = [JSON.parse(savedArticles)]
    newArray = [...oldLikes];
    console.log(newArray)
}

document.addEventListener('DOMContentLoaded', setStorage)

const btnLike = document.getElementsByClassName('btnLike');



for(let i=0; i < btnLike.length ; i++){

    btnLike[i].addEventListener('click', (element)=>{
        
        let title = element.path[2].childNodes[1].innerText;
        let subtitle = element.path[2].childNodes[3].innerText;
        let img = element.path[2].childNodes[5].currentSrc;
        let content = element.path[2].childNodes[7].innerText;   
        
        

         let publicacionLikeada = {
            title, img, content, subtitle
        }
         
        console.log(publicacionLikeada);
        

        newArray.push(publicacionLikeada);
        localStorage.setItem('Liked', JSON.stringify(newArray)); 



    });

}




 

