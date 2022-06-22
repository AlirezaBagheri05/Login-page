    function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    function set_cookie(name ,data , time){
            document.cookie = name+'='+data+';max-age= '+time;
    }
    var username = getCookie("resulotion");
    if (username != "") {
        
    } else {
            var wh ="Screen Width: " + screen.width+"  Screen Height: " + screen.height;
            var t = 365*24*60*60;
            set_cookie('resulotion',wh, t);
            var now =  new Date();
            set_cookie('date',now);
    }

//                document.getElementById("demo").innerHTML = "<br />Screen Width: " + screen.width;
//                document.getElementById("demo").innerHTML = document.getElementById("demo").innerHTML +"<br />Screen Height: " + screen.height;

