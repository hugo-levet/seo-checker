console.log("loaded preview.js");

function getDomain(url) {
  let domain = url.replace("http://", "").replace("https://", "");
  let index = domain.indexOf("/");
  if (index > 0) {
    domain = domain.substr(0, index);
  }
  if (domain.startsWith("www.")) {
    domain = domain.substr(4);
  }
  return domain;
}

async function getTwitterData(url) {
  // Get data from the server
  return await fetch(`/api/tweet.php?url=${url}`)
    .then((response) => response.json())
    .then((data) => {
      return data;
    })
    .catch((error) => {
      console.error("Error:", error);
      return null;
    });
}

function generatePLaySvg() {
  let svgPlay = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svgPlay.setAttribute("class", "play");
  svgPlay.setAttribute("viewBox", "0 0 60 61");
  svgPlay.setAttribute("aria-hidden", "true");
  let g = document.createElementNS("http://www.w3.org/2000/svg", "g");
  svgPlay.appendChild(g);
  let circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
  circle.setAttribute("cx", "30");
  circle.setAttribute("cy", "30.4219");
  circle.setAttribute("fill", "#333333");
  circle.setAttribute("r", "30");
  g.appendChild(circle);
  let path = document.createElementNS("http://www.w3.org/2000/svg", "path");
  path.setAttribute(
    "d",
    "M22.2275 17.1971V43.6465L43.0304 30.4218L22.2275 17.1971Z"
  );
  path.setAttribute("fill", "white");
  g.appendChild(path);

  return svgPlay;
}

async function generateTweetPreview(url, preview) {
  if (!preview) {
    preview = document.getElementById("preview");
  }
  preview.innerHTML = "";

  let twitterData = await getTwitterData(url);
  console.log(twitterData);

  if (!twitterData["twitter:card"]) {
    let card = document.createElement("div");
    card.className = "twitter-card";
    card.innerText = "No Twitter Card found";
    preview.appendChild(card);
    return card;
  }

  if (twitterData) {
    let card = document.createElement("a");
    card.className = "twitter-card";
    if (twitterData["twitter:card"]) {
      card.className += " " + twitterData["twitter:card"];
    }
    card.href = url;
    card.target = "_blank";
    preview.appendChild(card);

    let imageContainer = document.createElement("div");
    imageContainer.className = "image";
    card.appendChild(imageContainer);

    let image = document.createElement("img");
    if (twitterData["twitter:image"]) {
      image.src = twitterData["twitter:image"];
    } else {
      image.src = "/images/default.png";
    }
    image.onerror = function () {
      this.onerror = null;
      this.src = "/images/default.png";
    };
    if (twitterData["twitter:image:alt"]) {
      image.alt = twitterData["twitter:image:alt"];
    }
    imageContainer.appendChild(image);

    if (twitterData["twitter:card"] == "player") {
      let svgPlay = generatePLaySvg();
      imageContainer.appendChild(svgPlay);
    }

    let text = document.createElement("div");
    text.className = "text";
    card.appendChild(text);

    let link = document.createElement("div");
    link.className = "link";
    link.innerText = getDomain(url);
    if (twitterData["twitter:card"] == "summary_large_image") {
      link.innerText = "From " + link.innerText;
      preview.appendChild(link);
    } else {
      text.appendChild(link);
    }

    let title = document.createElement("div");
    title.className = "title";
    if (twitterData["twitter:card"] == "summary_large_image") {
      let titleSpan = document.createElement("span");
      titleSpan.innerText = twitterData["twitter:title"];
      title.appendChild(titleSpan);
    } else {
      title.innerText = twitterData["twitter:title"];
    }

    text.appendChild(title);

    // TODO limit size of description
    let description = document.createElement("div");
    description.className = "description";
    description.innerText = twitterData["twitter:description"];
    text.appendChild(description);

    return card;
  }
}

function handlePreviewForm(event) {
  event.preventDefault();

  let url = document.getElementById("url").value;

  generateTweetPreview(url);
}
