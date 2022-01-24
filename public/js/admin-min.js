
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


