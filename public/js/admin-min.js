
             $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                  var value = $(this).val().toLowerCase();
                  $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                  });
                });
              });








(function() {
    'use strict';

    // Toggle sidebar on Menu button click
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active1');
        $('#body').toggleClass('active');
     $('#header').toggleClass('active');
     $('#content').toggleClass('active');
    });

        // Toggle sidebar on Menu button click on phone
        $('#sidebarCollapse2').on('click', function() {
        $('#sidebar').toggleClass('active');
        $('#body').toggleClass('active');
    });

    // Auto-hide sidebar on window resize if window size is small
    // $(window).on('resize', function () {
    //     if ($(window).width() <= 768) {
    //         $('#sidebar, #body').addClass('active');
    //     }
    // });
})();


function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();







$.noConflict();

jQuery(document).ready(function($) {




	// Counter Number
	$('.count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 3000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});






// Load Resize
                $(window).on("load resize", function(event) {
                    var windowWidth = $(window).width();
                    if (windowWidth<1010) {
                        $('body').addClass('small-device');
                    } else {
                        $('body').removeClass('small-device');
                    }

                });


            });


//snackbar
                function myFunction() {
                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                }


//new category            


                      

                        $('#new_category').on('submit', function(e) {
                            e.preventDefault(); 
                            var name = $('#name').val();
                            var cat_description = $('#cat_description').val();
                            var _token = $('#_token').val();
                            $.ajax({
                                type: "POST",
                                url: '/admin/new_category',
                                data: {
                                    name:name,
                                    cat_description:cat_description,
                                    _token: _token
                                    },
                                success: function( msg ) {
                                    alert( msg );
                                }
                            });
                        });
                 

                        ////////////////////////////test


                        if ( window.history.replaceState ) {
                            window.history.replaceState( null, null, window.location.href );
                        }
        
        // checkbok
        $(function () {
            $('#search').on('keyup', function () {
                var pattern = $(this).val();
                $('.items-collection .items').hide();
                $('.items-collection .items').filter(function () {
                    return $(this).text().match(new RegExp(pattern, 'i'));
                }).show();
            });
        });
        
        
        
        
        
        // text count
                        var text_max = 200;
        $('#count_message').html('0 / ' + text_max );
        
        $('#text').keyup(function() {
          var text_length = $('#text').val().length;
          var text_remaining = text_max - text_length;
          
          $('#count_message').html(text_length + ' / ' + text_max);
        });
        
        
        // image preview
        
        
        function preview_image(event) 
        {
         var reader = new FileReader();
         reader.onload = function()
         {
          var output = document.getElementById('output_image');
          output.src = reader.result;
         }
         reader.readAsDataURL(event.target.files[0]);
        }
        
        //sider
        
                        $(document).ready(function(){
        
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        
        $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;
        
        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 600
        });
        });
        
        $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
        
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;
        
        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
        },
        duration: 600
        });
        });
        
        
        
        $(".submit").click(function(){
        return false;
        })
        
        });
////text area

tinymce.init({
    selector: '#txtarea', 
    width: 850,
    height: 300,
    theme: "silver",
    
    
    plugins: [
               "advlist autolink lists link image charmap print preview anchor",
               "searchreplace visualblocks code fullscreen",
               "insertdatetime media table contextmenu paste imagetools"
           ],
           toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
           toolbar2: "preview",
      
    
           image_title: true,
               automatic_uploads: true,
               relative_urls: false,
           paste_data_images: true,
                     images_upload_url: '/upload',
               file_picker_types: 'image',
               file_picker_callback: function(cb, value, meta) {
                   var input = document.createElement('input');
                   input.setAttribute('type', 'file');
                   input.setAttribute('accept', 'image/*');
                   input.onchange = function() {
                       var file = this.files[0];
   
                       var reader = new FileReader();
                       reader.readAsDataURL(file);
                       reader.onload = function () {
                           var id = 'blobid' + (new Date()).getTime();
                           var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                           var base64 = reader.result.split(',')[1];
                           var blobInfo = blobCache.create(id, file, base64);
                           blobCache.add(blobInfo);
                           cb(blobInfo.blobUri(), { title: file.name });
                       };
                   };
                   input.click();
               },
    init_instance_callback : function(editor) {
   var freeTiny = document.querySelector('.tox .tox-notification--in');
   freeTiny.style.display = 'none';
   }
   });
   $(document).ready(function() {
   $('#btnValue').click(function() {
   $("#divkarea").html("");
   var content = tinymce.get("txtarea").getContent();
   $("#divkarea").html(content);
   });
   });        

   $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    
  }); 

  