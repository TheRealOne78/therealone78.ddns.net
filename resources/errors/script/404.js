const err_res_url = "https://therealone78.ddns.net/resources/errors/";

const word = [
  "dukc"   , "duck"  ,
  "beg"    , "bed"   ,
  "yanny"  , "laurel",
  "talbe"  , "table" ,
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
let fileCollection = document.getElementsByClassName("file");

switch(extension) {
  /* Images */
  case "jpg":
  case "jpeg":
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
  for(let i = 0; i < fileCollection.length; i++)
    fileCollection[i].innerHTML = "image";
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
  for(let i = 0; i < fileCollection.length; i++)
    fileCollection[i].innerHTML = "document";
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
  for(let i = 0; i < fileCollection.length; i++)
    fileCollection[i].innerHTML = "archive";
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
  for(let i = 0; i < fileCollection.length; i++)
    fileCollection[i].innerHTML = "program";
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
  for(let i = 0; i < fileCollection.length; i++)
    fileCollection[i].innerHTML = "audio file";
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
  for(let i = 0; i < fileCollection.length; i++)
    fileCollection[i].innerHTML = "video";
    document.getElementById("img").src = `${err_res_url}img/404.video.svg`;
    break;
  /* Web page */
  case "html":
  case "htm":
  case "php":
  for(let i = 0; i < fileCollection.length; i++)
    fileCollection[i].innerHTML = "web page";
    document.getElementById("img").src = `${err_res_url}img/404.file.svg`;
    break;
  default:
    break;
};
