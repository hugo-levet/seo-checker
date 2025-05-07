function handleWindowClick(event) {
  event.preventDefault();
  let url = event.target.getAttribute("href");
  window.open(
    url,
    "_blank",
    "location=yes,height=720,width=900,scrollbars=yes,status=yes"
  );
}

document.addEventListener("DOMContentLoaded", function () {
  console.log("loaded global.js");

  let links = document.querySelectorAll("[openOnNewWindow]");
  links.forEach((link) => {
    link.addEventListener("click", handleWindowClick);
  });
});
