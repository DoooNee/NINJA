$(document).ready(function(){
    $('input[type="file"]').change(function(e){
        fileName = e.target.files[0].name;
        console.log(fileName);
    });

    $("#but_upload").click(function(){

        var fd = new FormData();
        var files = $('#file')[0].files;
        
        // Check file selected or not
        if(files.length > 0 ){
           fd.append('file',files[0]);

           $.ajax({
              url: 'backend/uploadFile.php',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(response){
                 if(response != 0){
                    $("#img").attr("src",response); 
                    $(".preview img").show(); // Display image element
                 }else{
                    alert('file not uploaded');
                 }
              },
           });
        }else{
           alert("Please select a file.");
        }
    });

    // change_category();
        $(".btnn").click(function () {
            $(".btnn").removeClass("category-active");
            $(this).addClass("category-active");   
        });  
});


