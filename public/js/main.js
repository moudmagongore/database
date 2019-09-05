document.addEventListener('DOMContentLoaded', function(){
	//ecouter le click du boutton
	const formRecherche = document.querySelector('#envoyer');

	//recuperer la valeur
	formRecherche.onsubmit = function(event){
		event.preventDefault();
		
		const request = new XMLHttpRequest();
		request.open('POST', '/recherche');
		request.onload = function(){
			const data = JSON.parse(request.responseText);
			console.log(data);

			divResultats = document.querySelector("#resultats");
			divResultats.innerHTML = "";



			


			if(data.topics.length){

				data.topics.map(topic => {

					const topicDiv = document.createElement("div");

					const titre = document.createElement("div");
					titre.className = "titre";


					if(topic.contenu_lien) {
						titre.innerHTML = `<h1><a href=${topic.contenu_lien} target="_blank">${topic.titre}</a> </h1>`;
					}
					else if(topic.contenu_fichier) {
						titre.innerHTML = `<h1><a href=/contenu_fichier/${topic.contenu_fichier} target="_blank">${topic.titre}</a></h1>`;
					}
					else if(topic.description) {
						topicDiv.innerHTML = `
							<div class="desc">
								<h1>
									${topic.titre}
								</h1>
							</div>
						`;
					}
					topicDiv.appendChild(titre);




					if(topic.contenu_lien) {
						topicDiv.innerHTML += `
							<div class="lien">
								<h1>
									${topic.contenu_lien}
								</h1>
							</div>`;
					}
					else if(topic.contenu_fichier) {
						topicDiv.innerHTML += `
							<div class="fichier">
								<h1>
									${topic.contenu_fichier}
								</h1>
							</div>
						`;
					}	
					else if(topic.description) {
						topicDiv.innerHTML += `
							<div class="description">
								<h1>
									${topic.description}
								</h1>
							</div>
						`;
					}						

					divResultats.appendChild(topicDiv);
				});
			}
			else {
				divResultats.innerHTML = "<p> Aucun resultat trouve </p>";
			}
		}

		const form = new FormData();
		form.append('mot_cle', document.querySelector('#motCle').value);
		form.append('_token', document.querySelector('[name="_token"]').value);

		request.send(form);
	}	
});


		