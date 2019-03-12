var id = 0;

function remove(element) {
    if (confirm("Do you want to remove that TO DO?") == true) {
        element.parentNode.removeChild(element);
        document.cookie = element.id +'=; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }
}

function mes_from_prompt(message) {
    var div = document.createElement("div");
    div.innerHTML = message;
    div.id = id + "";
    div.className = "a";
    div.setAttribute("onclick", "remove(this)");
    var list = document.getElementById("ft_list");
    list.insertBefore(div, list.firstChild);
    var str = id + "" + "=" + message + ";expires=Fri, 30 Nov 2018 01:00:00 UTC;";
    document.cookie = str;
    id++;
    console.log(document.cookie);
}

function newElement() {
    var person = prompt("Add a new task to your list");
    if (person != null && person != "")
    {
        mes_from_prompt(person);
    }
}

window.onload = function() {
    document.cookie;
    if (document.cookie != "")
    {
        var array = document.cookie.split(";");
        for (var i = 0; i < array.length; i++) {
            mes_from_prompt(array[i].split("=")[1]);
        }
    }
    console.log(document.cookie);
  };
