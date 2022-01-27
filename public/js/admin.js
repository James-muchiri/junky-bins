

//// faqs submit


function faqsubmit() {
    console.log("save");

    var question = document.getElementById('question').value;
    
        var answer = document.getElementById('answer').value;
        var _token = document.getElementById('_token').value;
    
        var formdata = 'question=' + question + '&answer=' + answer + '&_token=' + _token;
        // validate the form input
        console.log(formdata);
       
    
    // AJAX code to submit form.
    $.ajax({
             type: "POST",
             url: "/admin/faqs_post", //call  to store form data
             data: formdata,
             cache: false,
             success: function(data) {
                 console.log(data);  
                 
          
            
             
          
                    document.getElementById("faqs_saved").style.display = "block"; 
                    $("#faqs_message").html(data);
                        
             },
    
        });
    };

//get faqs by id

function getfaqs(id){
    console.log("fetch data");

    var dataId = id;
    // console.log(dataId);

    $.ajax({
    type: 'get',
    data:  dataId,
    url: '/admin/getfaqs/'+dataId,
    dataType: 'json',
	cache: false,
    success:
        function( data ){
         console.log(data);
		 $(".editfaqs").html("");
         var t_data="";
		 t_data=t_data+
		 '<div class="form-group">'+
		 '<label for="question" class="col-form-label">Question:</label>'+
		 '<input type="text" class="form-control"  id="edit_question" value="'+ data.question+'" required>'+
		 '<input type="text" class="form-control"  id="id" value="' + data.id+'" hidden>'+
	   '</div>'+
	   '<div class="form-group">'+
	   '<label class="col-form-label" for="">Answer</label>'+
	   '<textarea class="form-control" id="edit_answer" maxlength="200" rows="5">'+ data.answer+'</textarea>'+
	'<span class="pull-right label label-default" id="count_message"></span>'+
	  '</div>';
	  $(".editfaqs").append(t_data);


        

        }
    });
};




//// faqs update


function faqupdate() {
    console.log("save");

    var question = document.getElementById('edit_question').value;    
        var answer = document.getElementById('edit_answer').value;
		var id = document.getElementById('id').value;
        var _token = document.getElementById('_token').value;
    
        var formdata = 'question=' + question + '&answer=' + answer + '&id=' + id + '&_token=' + _token;
        // validate the form input
        console.log(formdata);
       
    
    // AJAX code to submit form.
    $.ajax({
             type: "POST",
             url: "/admin/faqs_update", //call  to store form data
             data: formdata,
             cache: false,
             success: function(data) {
                 console.log(data);  
                 
          
            
             
          
                    document.getElementById("faqs_saved").style.display = "block"; 
                    $("#faqs_message").html(data);
                        
             },
    
        });
    };