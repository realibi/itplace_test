var user_id = getCookie("user_id");
var user_role;

$(document).ready(function(){
    getElements();
    getUserRole();
});

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function getUserRole(){
    $.ajax({
        url: "/users/get/" + user_id,
        method: "GET",
        success: function(data) {
            let user = JSON.parse(data);
            user_role = user["role_id"];
        }
    })
}

function getElements(){
    $.ajax({
        url: "/news/allNews",
        method: "GET",
        success: function(data) {
            var array = JSON.parse(data);
            $(".news").html(" ");
            array.forEach(function(item, i, data) {
                $(".news").append("<div class='col-md-6 col-sm-12 col-xs-12 mb-50 t22'><div class='panel panel-primary'><div class='panel-heading tac'>" + item["title"] + "</div><div class='panel-body'>" + item["content"] + "</div><div class='panel-footer t16'> Дата создания: " + item["datetime"] + "</div></div></div>");
            })
        }
    });
}

function getElementsAdmin(){
    $.ajax({
        url: "/news/allNews",
        method: "GET",
        success: function(data) {
            var array = JSON.parse(data);
            $(".news").html(" ");
            array.forEach(function(item, i, data) {

                if(item["author_id"] === user_id){
                    $(".news").append("<div class='col-md-6 col-sm-12 col-xs-12 mb-50 t22'><div class='panel panel-primary'><div class='panel-heading tac'>" + item["title"] + "<button onclick = 'deleteNews(" + item["id"] + ")'>Удалить</button>" + "</div><div class='panel-body'>" + item["content"] + "</div><div class='panel-footer t16'> Дата создания: " + item["datetime"] + "</div></div></div>");
                }

            });
        }
    });
}

function deleteNews(id){
    $.ajax({
        url: "/news/deleteNews/" + id,
        method: "GET"
    });
}