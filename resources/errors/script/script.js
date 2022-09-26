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

const word = [
  "duck"   , "dukc"  ,
  "bed"    , "beg"   ,
  "yanny"  , "laurel",
  "table"  , "talbe" ,
  "watcha" , "watch" ,
  "hello"  , "yellow",
  "mask"   , "task"  ,
  "windows", "linux" ,
  "tree"   , "free"
];
let wi = Math.floor(Math.random() * word.length);
if(wi % 2 === 1)
  wi--;
document.getElementById("w1").innerHTML = `"${word[wi]}"`;
document.getElementById("w2").innerHTML = `"${word[wi+1]}"`;

const letterCase = [
  "towel"  , "TOWEL" ,
  "house"  , "House" ,
  "light"  , "lighT" ,
  "book"   , "booK"  ,
  "person" , "PERSON",
  "gel"    , "GEL"   ,
  "camera" , "cAmera",
  "pillow" , "Pillow",
  "smile"  , "sMiLe"
];
let li = Math.floor(Math.random() * letterCase.length);
if(li % 2 === 1)
  li--;
document.getElementById("l1").innerHTML = `"${letterCase[li]}"`;
document.getElementById("l2").innerHTML = `"${letterCase[li+1]}"`;

/* Get filename extension */
let fileName = document.URL;
let extension = fileName.split(/[#?]/)[0].split('.').pop().trim().toLowerCase();

switch(extension) {
  /* Images */
  case "jpg":
  case "png":
  case "gif":
  case "webp":
  case "tiff":
  case "psd":
  case "raw":
  case "bmp":
  case "heif":
  case "indd":
  case "svg":
    document.getElementById("file").innerHTML = "image";
    document.getElementById("img").src = `${err_res_url}img/404.img.svg`;
    break;
  /* Documents */
  case "pdf":
  case "docx":
  case "doc":
  case "rtf":
  case "odt":
  case "pdf":
  case "xls":
  case "xlsx":
  case "ods":
  case "ppt":
  case "pptx":
  case "odp":
  case "txt":
    document.getElementById("file").innerHTML = "document";
    document.getElementById("img").src = `${err_res_url}img/404.file.svg`;
    break;
  /* Archives */
  case "tar":
  case "gz":
  case "xz":
  case "bz":
  case "bz2":
  case "lz":
  case "lz4":
  case "lzma":
  case "lzo":
  case "zip":
  case "7z":
  case "rar":
  case "iso":
  case "br":
  case "sz":
  case "zst":
    document.getElementById("file").innerHTML = "archive";
    document.getElementById("img").src = `${err_res_url}img/404.file.svg`;
    break;
  /* Executables */
  case "appimage":
  case "jar":
  case "run":
  case "sh":
  case "jar":
  case "py":
  case "exe":
  case "dmg":
  case "apk":
  case "out":
  case "app":
  case "cmd":
  case "bat":
  case "command":
  case "vbs":
  case "ps1":
    document.getElementById("file").innerHTML = "program";
    document.getElementById("img").src = `${err_res_url}img/404.file.svg`;
    break;
  /* Audio */
  case "pcm":
  case "wav":
  case "aiff":
  case "mp3":
  case "aac":
  case "ogg":
  case "wma":
  case "flac":
  case "alac":
    document.getElementById("file").innerHTML = "audio file";
    document.getElementById("img").src = `${err_res_url}img/404.music.svg`;
    break;
  /* Video */
  case "mp4":
  case "mov":
  case "avi":
  case "flv":
  case "mkv":
  case "wmv":
  case "avchd":
  case "webm":
  case "mpeg":
  case "m4a":
    document.getElementById("file").innerHTML = "video";
    document.getElementById("img").src = `${err_res_url}img/404.video.svg`;
    break;
  /* Web page */
  case "html":
  case "htm":
  case "php":
    document.getElementById("file").innerHTML = "web page";
    document.getElementById("img").src = `${err_res_url}img/404.file.svg`;
    break;
  default:
    break;
};
