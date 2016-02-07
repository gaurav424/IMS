<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                data = xmlhttp.response;
				$("#location").html(data);
            }
        };
        xmlhttp.open("GET","php/display_item.php?type_of="+str,true);
        xmlhttp.send();
    }
}
function showDetails(str1) {
    if (str1 == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                data = xmlhttp.response;
				$("#model_num").html(data);
            }
        };
        xmlhttp.open("GET","php/display_Details.php?Tag_Num="+str1,true);
        xmlhttp.send();
    }
}
function EmpDetails(str3) {
    if (str3 == "") {
        document.getElementById("emp_Details").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                data = xmlhttp.response;
				$("#emp_Details").html(data);
            }
        };
        xmlhttp.open("GET","php/emp_Details.php?emp_Id="+str3,true);
        xmlhttp.send();
    }
}
</script>