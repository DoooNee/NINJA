$(document).ready(function(){
    getFeedbackTable();

});






function getFeedbackTable(){
    console.log("aa");
    $.ajax({
        url: 'backend/danhsachphanhoi.php',
        type: 'get',
        // dataType: 'json',    
        data: {},
        success: function(response){
        
            console.log(response);
            $('#html_table').html(response);
           
        },
    });
}


