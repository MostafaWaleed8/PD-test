const brew = document.querySelector("#brew");
const npm = document.querySelector("#npm");
const yarn = document.querySelector("#yarn");

const copyIcon1 = document.querySelector("#copy1");
const copyIcon2 = document.querySelector("#copy2");
const copyIcon3 = document.querySelector("#copy3");

copyIcon1.addEventListener("click", () => {
  window.navigator.clipboard.writeText(brew.innerText);
  copyIcon1.setAttribute("class", "fas fa-check");
});
copyIcon2.addEventListener("click", () => {
  window.navigator.clipboard.writeText(npm.innerText);
  copyIcon2.setAttribute("class", "fas fa-check");
});
copyIcon3.addEventListener("click", () => {
  window.navigator.clipboard.writeText(yarn.innerText);
  copyIcon3.setAttribute("class", "fas fa-check");
});

