document.getElementById('websiteInput').addEventListener('input', function() {
    var inputText = this.value.trim();
    var colorlessBtn = document.querySelector('.colorless_btn');
    var greenBtn = document.querySelector('.green_btn');
    
    if (inputText === "") {
        colorlessBtn.classList.remove('hidden');
        greenBtn.classList.add('hidden');
    } else {
        colorlessBtn.classList.add('hidden');
        greenBtn.classList.remove('hidden');
    }
});

// Function to open the overlay and display the image
function openOverlay(imageSrc) {
    var overlay = document.getElementById('overlay');
    var overlayImage = document.getElementById('overlay-image');

    overlayImage.src = imageSrc;
    overlay.style.display = 'block';
}

// Function to close the overlay
function closeOverlay() {
    var overlay = document.getElementById('overlay');
    overlay.style.display = 'none';
}

function hide_div() {
    $('#first_page').hide();
    $('#second_page').removeClass('hidden');
    $('#round-step2').removeClass('bg-[#BEBEBE]');
    $('#round-step2').addClass('bg-electricGreen');
    
    $('#second-step-text').removeClass('text-[#BEBEBE]');
    $('#second-step-text').addClass('text-electricGreen');
    
    $('#find-company-branding-div').addClass('hidden');
}

const colorPicker = document.getElementById('colorPicker');
const colorCode = document.getElementById('colorCode');

// Update color code when user changes color
colorPicker.addEventListener('input', function(event) {
    colorCode.textContent = event.target.value;

    let profile = document.getElementById('profile');
    let dashboard = document.getElementById('dashboard');
    profile.style.backgroundColor = event.target.value; 
    dashboard.style.backgroundColor = event.target.value; 
});


function show_div(){
    $('#responsive-card').removeClass('hidden');
    $('#view-card-btn').addClass('hidden')
}






document.getElementById('fileInput').addEventListener('change', function() {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('uploadedImage').src = e.target.result;
            document.getElementById('uploadedImage').style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});
document.getElementById('fileInput').addEventListener('change', function() {
    var input = this;
    var label = document.getElementById('imageNameLabel');
    if (input.files && input.files[0]) {
        label.textContent = input.files[0].name;
        label.classList.remove('hidden');
    }
});
document.getElementById('fileInput2').addEventListener('change', function() {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('uploadedImage2').src = e.target.result;
            document.getElementById('uploadedImage2').style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});
document.getElementById('fileInput2').addEventListener('change', function() {
    var input = this;
    var label = document.getElementById('imageNameLabel2');
    if (input.files && input.files[0]) {
        label.textContent = input.files[0].name;
        label.classList.remove('hidden');
    }
});


    function checkImagesUploaded() {
        var image1 = document.getElementById('uploadedImage').getAttribute('src');
        var image2 = document.getElementById('uploadedImage2').getAttribute('src');

        if (image1 && image1 !== 'data:,' && image2 && image2 !== 'data:,') {
            document.querySelector('.step_1').classList.remove('bg-[#BEBEBE]'); 
            document.querySelector('.step_1').classList.add('bg-[#1ED761]');
            document.querySelector('.step_1').classList.add('cursor-pointer');
            

            document.querySelector('.step_1').setAttribute('onclick', 'hide_div()');

        } else {
            document.querySelector('.step_1').classList.remove('bg-[#1ED761]');
            document.querySelector('.step_1').classList.remove('cursor-pointer');
            document.querySelector('.step_1').removeAttribute('onclick');
            document.querySelector('.step_1').classList.add('bg-[#BEBEBE]');
            document.getElementById('card-second-svg').classList.add('block');
        }



        if (image1 && image1 !== 'data:'){
            document.getElementById('card-second-svg').classList.add('hidden');
            document.getElementById('card-fourth-svg').classList.add('hidden');
            document.getElementById('above-img-div').classList.remove('hidden');
        }
        else{
            document.getElementById('card-second-svg').classList.add('block');
            document.getElementById('above-img-div').classList.add('hidden');
        }



        if (image2 && image2 !== 'data:'){
            document.getElementById('card-first-svg').classList.add('hidden');
            document.getElementById('card-third-svg').classList.add('hidden');
            document.getElementById('above-img-div2').classList.remove('hidden');
        }
        else{
            document.getElementById('card-first-svg').classList.add('block');
            document.getElementById('above-img-div2').classList.add('hidden');
        }
    }

    function handleImageUpload(input, target) {
        if (input.files && input.files[0]) {
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                document.getElementById(target).setAttribute('src', e.target.result);
                checkImagesUploaded();
            };

            reader.readAsDataURL(file);
        } else {
            document.getElementById(target).setAttribute('src', '');
            checkImagesUploaded();
        }
    }

    // Call checkImagesUploaded initially to set the initial state
    window.onload = checkImagesUploaded;

    function handleImageUpload(input, target, divId) {
        if (input.files && input.files[0]) {
            const file = input.files[0];
            const reader = new FileReader();
    
            reader.onload = function (e) {
                document.getElementById(target).setAttribute('src', e.target.result);
                // Check if the divId parameter is provided and hide the corresponding div
                if (divId) {
                    document.getElementById(divId).style.display = 'none';
                }
                checkImagesUploaded();
            };
    
            reader.readAsDataURL(file);
        } else {
            document.getElementById(target).setAttribute('src', '');
            checkImagesUploaded();
        }
    }





$(document).ready(function () {
    $('input[name="job_title"], input[name="f_name"], input[name="l_name"]').keyup(function(){
        var productNameInput = $(this).val();
        var responseDiv = $(this).attr('name') === 'job_title' ? $('#responseDiv, #responseDiv4') : 
                         $(this).attr('name') === 'f_name' ? $('#responseDiv2, #responseDiv5') : 
                                                                 $('#responseDiv3, #responseDiv6');
        responseDiv.text(productNameInput); // Set text content of the div
    });
});




$(document).ready(function() {
    de();
  
    $("#fileInput2").on("change", function() {
  
  
  
      if ($("#fileInput2").val() != "") {
        $("#above-img-div2").attr("style", "display:flex");
      } else {
        de();
      }
    });
    $("#close-svg2").click(function() {
      $("#fileInput2").val('');
      de();
    })
  
  })
  
  function de() {
    $("#above-img-div2").attr("style", "display:none");
    $('#uploadedImage2').attr("style", "display:none");
  }






  