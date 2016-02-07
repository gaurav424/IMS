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
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","php/display_item.php?type_of="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
   <option value="0">Please select Item.</option>
                                <option value="LP">Laptop</option>
                                <option value="DK">Desktop</option>
                                <option value="PR">Printer</option>
                                <option value="SC">Scanner</option>
                                <option value="CM">Camera</option>
                                <option value="SWT">Switch</option>
                                <option value="TP">Telephone</option>
                        `        <option value="UPS">UPS</option>
                                <option value="LAN">LAN Cable</option>
                                <option value="CAB">Cable</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

