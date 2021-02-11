<!DOCTYPE html>
<html>
<head>
	<title>Anotações</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container-anotacoes">


</div><!--container-anotacoes-->


<div class="btn-add">+</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script>
    $(function(){
        $('.btn-add').click(function(){
            var el = '<div class="anotacao-single"><textarea placeholder="Sua nova anotação..."></textarea></div>' ;
            $('.container-anotacoes').append(el);
        })
    })
</script>

</body>
</html>