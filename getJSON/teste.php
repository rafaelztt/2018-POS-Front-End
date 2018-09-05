<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("button").click(function(){


      // $.getJSON("http://localhost/json.php", {"id": 1}, function(data,status, xhr){
      $.getJSON("http://localhost/json.php", function(data,status, xhr){

        if(data.pessoas){

          $.each(data.pessoas, function(i, obj){
            $("#resp").append(i + ": " + obj.nome + "<br/>");
          });

          // $("#resp").text(data.pessoas[0].nome);

        } else {
          alert("Erro ao buscar o objeto...");
        }

        // Status da requisição
        $(".status").html("Status: " + status + "<br/>");


        // Informações da requisição
        $.each(xhr, function(i, field){
           $(".status").append(i + ": " + field + "<br/>");
        });

      });
    });
  });
</script>
</head>
<body>

  <button>Get JSON data</button>

  <div id="resp"></div>

  <br>

  <div class="status"></div>

</body>
</html>
