// Empty JS for your own code to be here
if (window.location.protocol!='http:')
{
    var m_host="https://"+document.domain +"/";
}
else
{
    var m_host="http://"+document.domain +"/";
}


    //******************************************************************************************************************

$(document).ready(function(){
    PopUpHide();
});

function PopUpHide(){
    $("#myModal").html();
    $("#myModal").hide();



}

function slidego(id) {
   str="#slide"+id;
    $(str).glide({
        autoplay: 3500,
        hoverpause: true, // set to false for nonstop rotate
        arrowRightText: '&rarr;',
        arrowLeftText: '&larr;'
    });

}

function slideshow(id){

    var url = m_host+'preview/'+id;
    $.ajax({
        url: url,
        type: "GET",
        data: ({id:id}),
        success: function(shinfo){

            html=shinfo;
            $("#myModal").html(html);
            $("#myModal").show();
            slidego(id);

        }
    });
};

function crmaddedform(id){

    var url = m_host+'crm/addform';
    $.ajax({
        url: url,
        type: "GET",
        data: ({}),
        success: function(shinfo){

            html=shinfo;
            $("#nclass").append(html);

        }
    });
};



function nclassaddedform() {

    s='<input type="hidden" readonly="readonly" name="id[]" value="">     \
        <div class="col-md-2">                                               \
        <input type="text" name="key[]" value="" style="width:96%;" >          \
        </div>                                                                      \
        <div class="col-md-8">                                                       \
        <input type="text" name="name[]" value="" style="width:96%;" >  \
        </div>                                                                         \
        <div  class="col-md-2">        </div>   \
        <div style="clear: both"></div>';
    $("#nclass").append(s);
}

function  ukataddedform() {

    s='<input type="hidden" readonly="readonly" name="id[]" value="">     \
        <div class="col-md-2"></div>                                            \                                                                    \
        <div class="col-md-8">                                                       \
        <input type="text" name="name[]" value="" style="width:96%;" >  \
        </div>                                                                         \
        <div  class="col-md-2">        </div>   \
        <div style="clear: both"></div>';
    $("#nclass").append(s);
}

function bbbcrmaddedform() {

    s='<div class="col-md-1"> \
        <input type="text" name="kat[]" value="0" style="width:96%;" > \
        </div>\
        <div class="col-md-5">\
        <input type="text" name="name[]" value="" style="width:96%;" >\
        </div>\
        <div class="col-md-1">\
        <input type="number" name="time[]" value="1" style="width:96%;" >\
        </div>\
        <div class="col-md-1">\
        <input type="number" name="price[]" value="1" style="width:96%;" >\
        </div>\
        <div class="col-md-1">\
        <input type="number" name="status[]" value="1" style="width:96%;" >\
        </div>\
        <div style="clear: both"></div>';
    $("#nclass").append(s);
}
