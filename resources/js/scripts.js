 function doesFileExist(urlToFile) {
     var xhr = new XMLHttpRequest();
     xhr.open('HEAD', urlToFile, false);
     xhr.send();
      
     if (xhr.status == "404") {
         return false;
     } else {
         return true;
     }
 }
 function updateRecip(){
    var doesExist = doesFileExist('../recip-ez/index.php');
    if(doesExist){
       document.getElementById('live').style.color = 'green';
       document.getElementById('live').innerHTML = "Currently live";
    }
    else{
       document.getElementById('live').style.color = 'red';
       document.getElementById('live').innerHTML = "Currently down";
    }
 }