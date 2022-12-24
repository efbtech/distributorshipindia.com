//-- Web Validations
$(document).ready(function() {
    $("#contact-us-form").validate({
        rules: {
            fname: {
                required: true,
                namecheck: true,
            },
            lname: {
                required: true,
                namecheck: true,
            },
            email: {
                required: true,
                email: true,
            },            
            phone: {
                required: true,
                number: true,
                maxlength: '10',
                minlength: '10',
                mobcheck: true
            },
            subject: {
                required: true,
            },
            message: {
                required: true,
            },
        },
        messages: {
            fname: {
                required: "First Name is required.",
                namecheck: "First Name is not valid.",
            },
            lname: {
                required: "Last Name is required.",
                namecheck: "Last Name is not valid.",
            },
            email: {
                required: "Email ID is required.",
                email: "Email ID is not valid."
            },
            phone: {
                required: "Phone is required.",
                number: "Phone is not valid.",
                mobcheck: "Phone is not valid"
            },
            subject: {
                required: "Subject is required."
            },
            message: {
                required: "Message is required."
            },
        },
        submitHandler: function(form) {
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function(response) {
                    $("#successmsg").text('Thank You')
                    $("#contact-us-form").trigger('reset');
                },
                error: function (xhr) {
                    var jsonValue = jQuery.parseJSON(xhr.responseText)
                    $.each(jsonValue.errors,function(key,value){
                        $('#'+key+'err').text(value);
                    })
                }
            });
        }
    });
});

$(document).ready(function() {
    $("#subscribeForm").validate({
        rules: {
            email: {
                required: true,
                email: true,
            }
        },
        messages: {
            email: {
                required: "Email ID is required.",
                email: "Email ID is not valid."
            }
        },
        errorPlacement: function(error, element) {
            error.appendTo( element.parent("div").next("div") );
        },
        submitHandler: function(form) {
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function(response) {
                    $("#subscribeForm").trigger('reset');
                },
                error: function (xhr) {
                    var jsonValue = jQuery.parseJSON(xhr.responseText)
                    $.each(jsonValue.errors,function(key,value){
                        $('#'+key+'err').text(value);
                    })
                }
            });
        }
    });
});

$(document).ready(function() {
    $("#donationForm").validate({
        errorElement: 'div',
        rules: {
            customamount: {
                number: true,
            }
        },
        messages: {
            customamount: {
                number: "Enter a valid amount."
            }
        }
    });
});

$(document).ready(function() {
    $("#donationFormMonthly").validate({
        errorElement: 'div',
        rules: {
            customamountmonth: {
                number: true,
            }
        },
        messages: {
            customamountmonth: {
                number: "Enter a valid amount."
            }
        }
    });
});

//-- Admin Validations
//-- Admin login
$(document).ready(function () {
    $('#admin_login_form').validate({ // initialize the plugin
        errorElement: 'div',
        rules: {
            email: {
                required: true,
                email: true,
                minlength: 8,
                maxlength: 30,
            },
            password: {
                required: true
            }
        },
        messages: {
            email:{
                required : "Please Enter Email Id",
                email: "Please Enter a valid Email Id",
                minlength:"Email Id should be minimum 8 characters",
                maxlength:"Email Id should not cross 30 charachters"
            },
            password : {
                required:"Please Enter Your Password"
            }
        },
        css:{
            email:"red"
        }
    });
});

//-- Blog form
$(document).ready(function () {
    $('#blogForm').validate({ // initialize the plugin
        errorElement: 'div',
        rules: {
            blog_title: {
                required: true,
            },
            scheduled_date: {
                required: true
            },
            meta_desc: {
                required: true
            },
            blog_image: {
                required: function() {
                    return $("#edit_blog").val() == '';
                },
                filesize: 2,
                accept:"jpeg,png,jpg,svg"
            }
        },
        messages: {
            blog_title:{
                required : "Blog title is required",
            },
            scheduled_date : {
                required: "Scheduled date is required"
            },
            meta_desc : {
                required: "Meta description is required"
            },
            blog_image: {
                required: "Blog image is required"
            }
        }
    });
});

//-- Photo upload form
$(document).ready(function () {
    $('#mediaPhotoUploadForm').validate({ // initialize the plugin
        errorElement: 'div',
        rules: {
            media_name: {
                required: true,
            },
            media_path: {
                required: function() {
                    return $("#media_edit_photo").val() == '';
                },
                filesize: 2,
                accept:"jpeg,png,jpg,svg"
            }
        },
        messages: {
            media_name:{
                required : "Name is required",
            },
            media_path: {
                required: "Image is required"
            }
        }
    });
});

//-- Video upload form
$(document).ready(function () {
    $('#mediaVideoUploadForm').validate({ // initialize the plugin
        errorElement: 'div',
        rules: {
            media_name: {
                required: true,
            },
            media_path: {
                required: function() {
                    return $("#media_edit_video").val() == '';
                },
                filesize: 2,
                accept:"jpeg,png,jpg,svg"
            },
            media_path_vid: {
                required: function() {
                    return $("#media_edit_video").val() == '';
                },
                accept:"mp4,mkv,3gp"
            }
        },
        messages: {
            media_name:{
                required : "Name is required",
            },
            media_path: {
                required: "Thumbnail is required"
            },
            media_path_vid: {
                required: "Video is required"
            }
        }
    });
});

//-- Campaign form
$(document).ready(function () {
    $('#campaignForm').validate({ // initialize the plugin
        errorElement: 'div',
        rules: {
            campaigns_title: {
                required: true,
                namecheck: true,
            },
            campaigns_orgainsed_by: {
                required: true,
                namecheck: true,
            },
            campaigns_feat_img: {
                required: function() {
                    return $("#edit_campaign").val() == '';
                },
                filesize: 2,
                accept:"jpeg,png,jpg,svg"
            },
            campaigns_detail_img: {
                required: function() {
                    return $("#edit_campaign").val() == '';
                },
                filesize: 2,
                accept:"jpeg,png,jpg,svg"
            },
            campaigns_start_date: {
                required: true
            },
            campaigns_end_date: {
                required: true
            },
            campaigns_amount: {
                required: true,
                number: true
            },
            campaigns_comment: {
                required: true,
            },
            campaigns_meta_desc: {
                required: true,
            }
        },
        messages: {
            campaigns_title:{
                required : "Campaign Title is required",
            },
            campaigns_orgainsed_by:{
                required : "Campaign Orgainser is required",
            },
            campaigns_feat_img: {
                required: "Campaign Feat Image is required"
            },
            campaigns_detail_img: {
                required: "Campaign Detail Image is required"
            },
            campaigns_start_date: {
                required: "Start date is required"
            },
            campaigns_end_date: {
                required: "End date is required"
            },
            campaigns_amount: {
                required: "Amount is required",
                number: 'Enter a valid amount'
            },
            campaigns_comment: {
                required: "Comment is required",
            },
            campaigns_meta_desc: {
                required: "Meta description is required",
            },
        }
    });
});

//-- News form
$(document).ready(function () {
    $('#mediaNewsForm').validate({ // initialize the plugin
        errorElement: 'div',
        rules: {
            media_name: {
                required: true,
            },
            media_path: {
                required: function() {
                    return $("#news_edit").val() == '';
                },
                filesize: 2,
                accept:"jpeg,png,jpg,svg"
            },
            media_meta_desc: {
                required: true
            }
        },
        messages: {
            media_name:{
                required : "News Title is required.",
            },
            media_path:{
                required : "News Image is required.",
            },
            media_meta_desc: {
                required: "News Meta Description is required."
            }
        }
    });
});

//------------------------------ Custom Functions
//-- File size validations
$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param * 2097152) //-- 2097152 bytes of 2 MB 
}, 'File size must be less than {0} MB');

//-- Password Validations
$.validator.addMethod("pwcheck", function(value) {
    return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
        &&
        /[a-z]/.test(value) // has a lowercase letter
        &&
        /\d/.test(value) // has a digit
});
//-- Only white space validations
$.validator.addMethod("whitespacecheck", function(value) {
    return /^[a-zA-Z][a-zA-Z ]*$/.test(value) // mobile number validations
 });
//-- Mobile number validations
$.validator.addMethod("mobcheck", function(value) {
    return /^(?:(?:\(\s*[\-]\s*)?|[0]?)?[56789]\d{9}$/.test(value) // mobile number validations
 });
//-- Allow only text validations
$.validator.addMethod("namecheck", function(value) {
    return /^[a-zA-Z ]+$/.test(value) // allow only text validations
 });
//-- Allow only text validations
$.validator.addMethod("namechecknum", function(value) {
    return /^[a-zA-Z0-9 ]+$/.test(value) // allow only text validations
 });
 //-- Latitude validations
 $.validator.addMethod('latCoord', function(value, element) {
    console.log(this.optional(element))
  return this.optional(element) ||
    value.length >= 4 && /^(?=.)-?((8[0-5]?)|([0-7]?[0-9]))?(?:\.[0-9]{1,20})?$/.test(value);
  }, 'Your Latitude format has error.')
 //-- Longitude validations 
  $.validator.addMethod('longCoord', function(value, element) {
    console.log(this.optional(element))
  return this.optional(element) ||
    value.length >= 4 && /^(?=.)-?((0?[8-9][0-9])|180|([0-1]?[0-7]?[0-9]))?(?:\.[0-9]{1,20})?$/.test(value);
  }, 'Your Longitude format has error.')

//-- hide validation messages on select2 boxes
$('.select2').on('focusout', function() { // focus out of Select 2
    $('.data__select').valid(); // trigger validation of hidden select
});