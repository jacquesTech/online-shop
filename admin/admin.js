// add alert
function addalert(txt, success) {
    if (success) {
        const warning = "<div  id='alert' role=\"alert\" class=\"alert alert-success d-sm-flex justify-content-sm-center align-items-sm-center\"><span><strong>" + txt + "</strong></span><span onclick=\"document.getElementById('alert').remove()\" class=\"closealert\" >&times;</span></div>";
        $("#content").append(warning);
    } else {
        const warning = "<div  id='alert' role=\"alert\" class=\"alert alert-warning d-sm-flex justify-content-sm-center align-items-sm-center\"><span><strong>" + txt + "</strong></span><span onclick=\"document.getElementById('alert').remove()\" class=\"closealert\" >&times;</span></div>";
        $("#content").append(warning);
    }
    $('#alert').animate({'opacity': '0'}, 3000, function () {
        $('#alert').remove();
    })
}

// validate
$(document).ready(function () {
    $("#product_details_form").validate({
        rules: {
            productname: {
                required: true,
                minlength: 3
            },
            producttitle: {
                required: true,
                minlength: 3
            },
            productkeyword: {
                required: true,
                minlength: 3
            },
            productimg: {
                required: true,
            },
            productqyt: {
                number: true,
                required: true,
                min: 0,
                minlength: 1,
            },
            productdic: {
                number: true,
                required: true,
                min: 0,
                minlength: 1,
            },
            productprice: {
                number: true,
                required: true,
                min: 1000,
                minlength: 4,
            },
            productcat: {
                required: true,
            },
            productbrand: {
                required: true,
            },
            producttext: {
                required: true,
                minlength: 100,
            },
        }
    });
});

// FormData
function FormData(formid) {
    var inputdata, elmts, L;
    elmts = $(formid).find(":input");
    inputdata = {};
    L = elmts.length;
    for (var i = 0; i < L; i++) {
        inputdata[elmts[i].name] = elmts[i].value;
    }
    return inputdata;
}


// add extra option

// function addnewcat() {
//     var newval = document.getElementById('newcatgory').value
//     $.ajax({
//         url: "admin-app.php",
//         method: "POST",
//         cache: false,
//         data: {newcatgory:newval},
//         success: function (data) {
//         addalert("دسته شما اضاف شد",true)
//         }
//     })
// }
//
// function addnewbrand() {
//     var newval = document.getElementById('newbrand').value
//     $.ajax({
//         url: "admin-app.php",
//         method: "POST",
//         cache: false,
//         data: {newbrand:newval},
//         success: function (data) {
//             addalert("برند شما اضاف شد",true)
//         }
//     })
// }

$('#addimg').on('click', addimg);
$('#removeimg').on('click', removeimg);
$('#addcolor').on('click', addcolor);
$('#removecolor').on('click', removecolor);
$('#addFeature').on('click', addFeature);
$('#removeFeature').on('click', removeFeature);

// img
function addimg() {
    var new_chq_no = parseInt($('#total_chq_img').val()) + 1;
    var new_input = "<input required accept='image/*'  type='file' class='form-control' name='new_img_" + new_chq_no + "' id='new_img_" + new_chq_no + "'>";
    $('#new_chq_img').append(new_input);
    $('#total_chq_img').val(new_chq_no);
}

function removeimg() {
    var last_chq_no = $('#total_chq_img').val();
    if (last_chq_no > 0) {
        $('#new_img_' + last_chq_no).remove();
        $('#new_img_' + last_chq_no + "-error").remove();
        $('#total_chq_img').val(last_chq_no - 1);
    }
}

//color
function addcolor() {
    var new_chq_no = parseInt($('#total_chq_color').val()) + 1;
    var new_input = "<input type='color' required class='form-control form-control-color' name='new_color" + new_chq_no + "' id='new_color" + new_chq_no + "'>";
    $('#new_chq_color').append(new_input);
    $('#total_chq_color').val(new_chq_no);
}

function removecolor() {
    var last_chq_no = $('#total_chq_color').val();

    if (last_chq_no > 0) {
        $('#new_color' + last_chq_no).remove();
        $('#new_color' + last_chq_no + "-error").remove();
        $('#total_chq_color').val(last_chq_no - 1);
    }
}

//Feature
function addFeature() {
    var new_chq_no = parseInt($('#total_chq_Feature').val()) + 1;
    var new_input = "<div class = \"d-flex align-items-center align-items-sm-center\" id = 'newfeature" + new_chq_no + "' >" +
        "<input name='new_feature_ky" + new_chq_no + "'  id='new_feature_ky" + new_chq_no + "' class = \"form-control\" type = \"text\"  placeholder = \"ویژگی\"/>" +
        "<i class = \"fas fa-paperclip\"></i>" +
        "<input name ='new_feature_val" + new_chq_no + "'  id='new_feature_val" + new_chq_no + "' class = \"form-control\" type = \"text\"  placeholder = \"مشخصه\"/>" + "</div>";
    // $('#new_chq_Feature').append(new_input);
    // var itm = document.getElementById("newfeature");
    // var cln = itm.cloneNode(true);
    // cln.setAttribute("id", "newfeature" + new_chq_no)
    $("#new_chq_Feature").append(new_input);
    $('#total_chq_Feature').val(new_chq_no);
}

function removeFeature() {
    var last_chq_no = $('#total_chq_Feature').val();

    if (last_chq_no > 0) {
        $('#newfeature' + last_chq_no).remove();
        $('#total_chq_Feature').val(last_chq_no - 1);
    }
}

