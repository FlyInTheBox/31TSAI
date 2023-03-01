let card = document.querySelector('.card-container');
		let cardLeft = document.querySelector('.card-left');
		let cardRight = document.querySelector('.card-right');
		let cardLiked = document.querySelector('.card-liked');
        let cardDisliked = document.querySelector('.card-disliked');
		let startX;
		let startY;
		let currentX;
		let currentY;
		let dragging = false;

		card.addEventListener('mousedown', function(e) {
			startX = e.clientX;
			startY = e.clientY;
			dragging = true;
			card.classList.add('dragging');
		});

		document.addEventListener('mousemove', function(e) {
			if (dragging) {
				currentX = e.clientX;
				currentY = e.clientY;
				let diffX = currentX - startX;
				let diffY = currentY - startY;
				card.style.transform = 'translate(' + diffX + 'px, ' + diffY + 'px)';
				let leftButton = document.querySelector('.button-dislike');
				let rightButton = document.querySelector('.button-like');
				if (diffX > 0) {
					leftButton.style.opacity = 0;
					rightButton.style.opacity = diffX / (window.innerWidth / 2);
				} else if (diffX < 0) {
					rightButton.style.opacity = 0;
					leftButton.style.opacity = Math.abs(diffX) / (window.innerWidth / 2);
				}
			}
		});

		document.addEventListener('mouseup', function(e) {
			if (dragging) {
				dragging = false;
				card.classList.remove('dragging');
				card.style.transform = '';
				let diffX = currentX - startX;
				if (diffX > window.innerWidth / 3) {
					card.classList.add('card-right');
					cardLiked.style.opacity = 1;
				} else if (diffX < -window.innerWidth / 3) {
					card.classList.add('card-left');
					cardDisliked.style.opacity = 1;
				} else {
					card.classList.add('card');
				}
				setTimeout(function() {
					card.remove();
					let newCard = document.createElement('div');
					newCard.classList.add('card-container');
					let randomNumber = Math.floor(Math.random() * 100);
					newCard.innerHTML = `
						<div class="card" style="background-image: url(https://picsum.photos/300/400?random=${randomNumber})"></div>
						<div class="buttons">
							<div class="button button-dislike">&#10005;</div>
							<div class="button button-like">&#10003;</div>
						</div>
					`;
					document.querySelector('#container').appendChild(newCard);
					card = document.querySelector('.card-container');
					cardLeft = document.querySelector('.card-left');
					cardRight = document.querySelector('.card-right');
					cardLiked = document.querySelector('.card-liked');
					cardDisliked = document.querySelector('.card-disliked');
				}, 300);
			}
		});

		document.querySelector('.button-like').addEventListener('click', function() {
			card.classList.add('card-liked');
			setTimeout(function() {
				card.remove();
				let newCard = document.createElement('div');
				newCard.classList.add('card-container');
				let randomNumber = Math.floor(Math.random() * 100);
				newCard.innerHTML = `
					<div class="card" style="background-image: url(https://picsum.photos/300/400?random=${randomNumber})"></div>
					<div class="buttons">
						<div class="button button-dislike">&#10005;</div>
						<div class="button button-like">&#10003;</div>
					</div>
				`;
				document.querySelector('#container').appendChild(newCard);
				card = document.querySelector('.card-container');
				cardLeft = document.querySelector('.card-left');
                cardRight = document.querySelector('.card-right');
cardLiked = document.querySelector('.card-liked');
cardDisliked = document.querySelector('.card-disliked');
}, 300);
});
document.querySelector('.button-dislike').addEventListener('click', function() {
    card.classList.add('card-disliked');
    setTimeout(function() {
        card.remove();
        let newCard = document.createElement('div');
        newCard.classList.add('card-container');
        let randomNumber = Math.floor(Math.random() * 100);
        newCard.innerHTML = `
            <div class="card" style="background-image: url(https://picsum.photos/300/400?random=${randomNumber})"></div>
            <div class="buttons">
                <div class="button button-dislike">&#10005;</div>
                <div class="button button-like">&#10003;</div>
            </div>
        `;
        document.querySelector('#container').appendChild(newCard);
        card = document.querySelector('.card-container');
        cardLeft = document.querySelector('.card-left');
        cardRight = document.querySelector('.card-right');
        cardLiked = document.querySelector('.card-liked');
        cardDisliked = document.querySelector('.card-disliked');
    }, 300);
});


