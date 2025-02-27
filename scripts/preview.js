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

async function generateTweetPreview(url, preview) {
  if (!preview) {
    preview = document.getElementById("preview");
  }
  preview.innerHTML = "";

  let twitterData = await getTwitterData(url);
  console.log(twitterData);

  if (twitterData) {
    let card = document.createElement("a");
    card.className = "twitter-card";
    if (twitterData["twitter:card"]) {
      card.className += " " + twitterData["twitter:card"];
    }
    card.href = url;
    card.target = "_blank";
    preview.appendChild(card);

    let image = document.createElement("img");
    if (twitterData["twitter:image"]) {
      image.src = twitterData["twitter:image"];
    } else {
      // TODO add default image
    }
    if (twitterData["twitter:image:alt"]) {
      image.alt = twitterData["twitter:image:alt"];
    }
    card.appendChild(image);

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
    title.innerText = twitterData["twitter:title"];
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
