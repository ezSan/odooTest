let savedTitle = document.getElementById('savedTitle');
let likeadasBox = document.getElementById('likeadasBox');
let likes = JSON.parse(localStorage.getItem('Liked'))
let cantidadLikes = likes.length;
let dinamicP = document.createElement('p');
dinamicP.classList.add('dinamicP');
dinamicP.id =' dinamicP';
dinamicP.innerText = `Usted tiene ${cantidadLikes} publicaciones guardadas`;
savedTitle.insertAdjacentElement('afterend', dinamicP);






let createArticles =()=>{
    likes.map( x=>{
        let card = document.createElement('div');
        likeadasBox.appendChild(card);
        card.classList.add('card');
        let img = document.createElement('img');
        img.src= x.img;
        img.classList.add('cardImg');
        card.appendChild(img);
        let infoBox = document.createElement('div');
        infoBox.classList.add('infoBox');
        img.insertAdjacentElement('afterend', infoBox);
        let title = document.createElement('h5');
        title.innerHTML = x.title;
        title.classList.add('cardTitle');
        infoBox.appendChild(title);
        let provincia = document.createElement('p');
        provincia.innerHTML= x.subtitle;
        provincia.classList.add('cardSubtitle');
        title.insertAdjacentElement('afterend', provincia);        
        
        // agregar imagen y posicionar absoluta, padre relativo.


        let likeIcon = document.createElement('img');
        likeIcon.src="./assets/redHeart.png";
        card.appendChild(likeIcon);
        likeIcon.classList.add('cardLike');

        
        


        

    })
}

createArticles()