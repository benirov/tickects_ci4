$(document).ready(function(){

    $(".btn-login").click(function(){
        if($("#email").val() == ''){
            alert("Email is required", "", "red");
        }else{
            let data = new FormData();
            data.append("email", $("#email").val());
            $.when(postAjax('login', data)).done(function(oResp){
                console.log('oResp', oResp);
                if(oResp.code == 1){
                    alert("Redirecting in three seconds", "", "green");
                    setTimeout(() => {
                        document.location.href = '/PageController/listTickets';
                    },3000);

                }else{
                    alert("Email is not registered in Database", "", "yellow");
                }

            });
        }
    })

});