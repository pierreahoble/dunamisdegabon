/* 

Social Share Links:

WhatsApp:
https://wa.me/?text=[post-title] [post-url]

Facebook:
https://www.facebook.com/sharer.php?u=[post-url]

Twitter:
https://twitter.com/share?url=[post-url]&text=[post-title]

Pinterest:
https://pinterest.com/pin/create/bookmarklet/?media=[post-img]&url=[post-url]&is_video=[is_video]&description=[post-title]

LinkedIn:
https://www.linkedin.com/shareArticle?url=[post-url]&title=[post-title]

*/

const facebookBtn = document.querySelector(".facebook-btn");
const twitterBtn = document.querySelector(".twitter-btn");
const pinterestBtn = document.querySelector(".pinterest-btn");
const linkedinBtn = document.querySelector(".linkedin-btn");
const whatsappBtn = document.querySelector(".whatsapp-btn");
 
function init() {
  const pinterestImg = document.querySelector(".whatsImg");
  const whatsImg = document.querySelector(".whatsImg");
  const moncode = document.querySelector("#moncode");
  var variableRecuperee = document.getElementById("moncode").value;
	
  let postUrl = encodeURI("https://dunamisdegabon.com");
  let postTitle = encodeURI("Bonjour je vous invite à vous inscrire sur la plateforme dunamisdegabon; En devenant client DUNAMIS CLUB, nous vous donnons la possibilité de disposer des revenus supplémentaires par vos simples achats. DUNAMIS DEVELOPPEMENT et les entreprises nationales se sont engagés dans une convention de partenariat pour amorcer ensemble un développement durable.- Des remises exceptionnelles sur vos achats dans le réseau DUNAMIS CLUB;- Un avantage intéressant pour bénéficier des meilleures conditions tarifaires pour vos achats dans les boutiques, supermarchés, acquisitions de matériels, vos séminaires, formations ou événements clients, location d’hôtels, frais de formation …;- Accès à une plateforme d'achats vous permettant d'obtenir des réductions sur des services B to B (réservations d'hôtels, de voitures, etc...);- Cet avantage est particulièrement destiné aux clients de DUNAMIS CLUB;- Tous les jours, 3% du montant de vos achats de biens et services auprès des entreprises du réseau sont crédités sur votre compte sans limitation;- Gagner des prix en fin d’année afin de réaliser vos rêves; Inscrivez-vous via le premier lien pour devenir client DUNAMIS:");
  let postImg = encodeURI(whatsImg.src);
  let postImgw = encodeURI(whatsImg.src);
  let postcode = encodeURI(variableRecuperee);


  facebookBtn.setAttribute(
    "href",
    `https://www.facebook.com/sharer.php?u=${postUrl}&text=${postTitle}`
  );

  twitterBtn.setAttribute(
    "href",
    `https://twitter.com/share?url=${postUrl}&text=${postTitle}`
  );

  pinterestBtn.setAttribute(
    "href",
    `https://pinterest.com/pin/create/bookmarklet/?media=${postImg}&url=${postUrl}&description=${postTitle}`
  );

  linkedinBtn.setAttribute(
    "href",
    `https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`
  );

  whatsappBtn.setAttribute(
    "href",
    `https://wa.me/?media=${postImgw}&text=${postTitle} ${postcode} ${postUrl}`
  );
}

init();
