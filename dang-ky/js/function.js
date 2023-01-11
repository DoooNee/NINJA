detectDevice();

function detectDevice(){
    if(navigator.userAgent.match(/iPad/i)){
     //code for iPad here
      console.log("ipad");
      var android = document.getElementById("android");
   		android.classList.add("hide");
      

    }

    if(navigator.userAgent.match(/iPhone/i)){
     //code for iPhone here 
      console.log("iphone");
      var android = document.getElementById("android");
   		android.classList.add("hide");

    }


    if(navigator.userAgent.match(/Android/i)){
     //code for Android here 
      console.log("android");
      var ios = document.getElementById("ios");
   		ios.classList.add("hide");
		
    }  

} 