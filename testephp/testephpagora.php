<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
<div id="teste"></div>
	<form action="php/adicionaveterinario.php" method="POST" enctype="multipart/form-data" id="formprod">
        <input type="file" name="foto-da-noticia" id="fo" >
        <input type="submit">
        </form>
<script type="text/javascript">
	$(document).ready(function(){
    $(document).on('submit','#formprod',function(event){
       event.preventDefault();
       var formData = new FormData(this);
    $.ajax({
        url: 'URL_SERVER",
        type: 'POST',
        data: formData,
        success: function (data) {
            alert(data)
        }
    });
    });
    });
</script>
</body>
</html>