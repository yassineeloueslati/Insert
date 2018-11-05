$(document).ready(function(e){
    $("#btn").click(function(){
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var phone = $("#phone").val();
        var job = $("#job").val();



        $.ajax({

        	type: 'POST',
        	data: {nom:nom,prenom:prenom,phone:phone,job:job},
        	url:  "insert.php",
        	success: function(result)
        	{
        		$("#alert").show(0).delay(5000).hide(0);
;
        		$("#show").html(result);
        		   $("#nom").val('');
        		   $("#prenom").val('');
        		   $("#phone").val('');
                   $("#job").val('');
        	}


        	})

    });
});

