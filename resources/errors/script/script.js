const err_res_url = "https://therealone78.ddns.net/resources/errors/";

const textColorArr = [
  "#ffffff", //white  - 0
  "#0037DA", //blue   - 1
  "#3A96DD", //cyan   - 2
  "#13A10E", //green  - 3
  "#881798", //purple - 4
  "#C50F1F", //red    - 5
  "#C19C00"  //yellow - 6
];
let textColor = Math.floor(Math.random() * textColorArr.length);
let errItemCollection = document.getElementsByClassName("errItem");
errItemCollection[1].style.color = textColorArr[textColor];
let aCollection = document.getElementsByTagName("a");
for(let i = 0; i < aCollection.length; i++)
  aCollection[i].style.color = textColorArr[textColor];
let selectedCollection = document.getElementsByClassName("selected");
for(let i = 0; i < selectedCollection.length; i++)
  selectedCollection[i].style.background = textColorArr[textColor];
