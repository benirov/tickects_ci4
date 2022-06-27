function alert(title, message, type = 'green'){

    iziToast.show({
        theme: 'dark',
        icon: 'icon-person',
        title: title,
        message: message,
        position: 'bottomCenter', 
        progressBarColor: type,
    });
}

function getAjax(url, dat = {}, o = true){
        return $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            data: dat,
            processData: false,
            contentType: false,
            async: o,
            beforeSend: function() {
                $(".loader-section").show()
            },
            success: function(e) {
                $(".loader-section").hide()
            },
            complete: function(e) {
                $(".loader-section").hide()
            },
            error: function(e) {
                $(".loader-section").hide()
            }

        })
}

function postAjax(url, dat = {}, o = true){
    return $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        data: dat,
        processData: false,
        contentType: false,
        async: o,
        beforeSend: function() {
            $(".loader-section").show()
        },
        success: function(e) {
            $(".loader-section").hide()
        },
    })
}

function getDetailTickect(id){

    $.when(getAjax('getDetailTickect/'+id)).done(function(oResp){
        console.log('oResp', oResp);
        if(oResp.code == 1){
            generateInfoHistory(oResp.data);
        }else{
            alert("Data not found", "", "yellow");
        }

    });

}

function generateInfoHistory(data){
    let info = `<ul class="timeline">`;

    let dir = 'r';
    $.each(data, function(i, element){
        
        dir = (dir == 'r') ? 'l' : 'r';

        info += `<li>
                    <div class="direction-${dir}">
                    <div class="flag-wrapper">
                        <span class="flag wbg">${element.create_at}</span>
                        <span class="time-wrapper hide"><span class="time">${element.title}</span></span>
                    </div>
                    <div class="desc">${element.descripcion}</div>
                    </div>
                </li>`;
    });

    info += `</ul>`;

    $(".history-content").html(info);

}