function handleTabClick(event) {
  let tab = event.target;
  let tabContainer = tab.closest(".tab-container");
  let tabs = tabContainer.querySelectorAll("header[role='tablist'] > div");
  let panels = tabContainer.querySelectorAll("div[role='tabpanel']");

  tabs.forEach((t) => {
    t.setAttribute("aria-selected", "false");
  });
  panels.forEach((p) => {
    p.style.display = "none";
  });

  tab.setAttribute("aria-selected", "true");
  let panel = tabContainer.querySelector(
    `div#${tab.getAttribute("aria-controls")}`
  );
  panel.style.display = "block";
}

document.addEventListener("DOMContentLoaded", function () {
  console.log("loaded tag.js");
  let tabContainers = document.getElementsByClassName("tab-container");

  Array.from(tabContainers).forEach((tabContainer) => {
    let tabs = tabContainer.querySelectorAll("header[role='tablist'] > div");

    tabs.forEach((tab) => {
      tab.addEventListener("click", handleTabClick);
    });
  });
});
