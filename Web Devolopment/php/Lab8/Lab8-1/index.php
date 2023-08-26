<html>
<head>
	<meta charset="UTF-8" />
  <title>Lab8-1</title>
</head>
<body>

	<form id="veriler">
		<input type="text" name="veri1" placeholder="Veri 1">
		<input type="text" name="veri2" placeholder="Veri 2">
		<button id="gonder">Gönder</button>
    </form>
  	<div id="sonuc"></div>
</body>
<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>
	$(document).ready(function() {
        $("#gonder").click(function(e) {
        e.preventDefault();
        var veriler = $("#veriler").serialize();
        
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: veriler,
            success: function(response) {
            $("#sonuc").empty().append(response);
            }
        });
        });
    });
</script>

</html>