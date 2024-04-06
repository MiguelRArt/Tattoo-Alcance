function Componente(imgSrc, date, likesCount) {
    let boxDiv = document.createElement('div');
    boxDiv.classList.add('box');

    let img = document.createElement('img');
    img.classList.add('img');
    img.src = imgSrc;
    boxDiv.appendChild(img);

    let descriptionDiv = document.createElement('div');
    descriptionDiv.classList.add('description');
    let dateLabel = document.createElement('label');
    dateLabel.textContent = date;
    descriptionDiv.appendChild(dateLabel);
    let likesDiv = document.createElement('div');
    likesDiv.classList.add('likes');
    let likesCountP = document.createElement('p');
    likesCountP.textContent = likesCount;
    likesDiv.appendChild(likesCountP);
    let heartIcon = document.createElement('ion-icon');
    heartIcon.setAttribute('name', 'heart');
    likesDiv.appendChild(heartIcon);
    descriptionDiv.appendChild(likesDiv);

    boxDiv.appendChild(descriptionDiv);

    return boxDiv;
}
  
let appContainer = document.getElementById('app');

fetch('data.json')
.then(response => response.json())
.then(data => {      
    data.boxes.forEach(function(Data) {
    let imgSrc = Data.img.src;
    let date = Data.description.date;
    let likesCount = Data.description.likes.count;
    let boxComponent = Componente(imgSrc, date, likesCount);
    appContainer.appendChild(boxComponent);
    });
})
.catch(error => console.log(error));