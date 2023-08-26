<html>
<head>
<title>Lab8-2</title>
<script>
function showUser(str){
    if(str == ""){
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    else{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("txtHint").innerHTML =this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q=" + str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
    <select name="users" onchange="showUser(this.value)">
        <option value="">Kullanıcı Seç:</option>
        <option value="1095410030">Ceylan AKCI</option>
        <option value="1095410014">Emine SIVRI</option>
        <option value="1095410023">Emre ÇELIKOGLU</option>
        <option value="1095410002">Cihan TURK</option>
    </select>
</form>
<br>
<div id="txtHint"><b>Kullanıcılar Burada Listelenecek...</b></div>

</body>
</html>