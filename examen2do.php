<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.min.css">
</head>
<body>
    <div class="container">
        <h4 class="center">Calculadora Salario</h4>
        <form id="formulario" action="Examsal.php" method="get">
            <div class="input-field">
                <input type="text" class="text" name="nombre">
                <label for="">nombre</label>
            </div>
            <div class="input-field">
                <input type="text" class="text" name="sueldo">
                <label for="">Sueldo</label>
            </div>
            <div class="input-field">
            	<!--<select name="cargo" id="cargo" class="sele">-->
            	<select name="modalidad" id="modalidad" class="select">
            		<option value="Mes">Mes</option>
            		<option value="Quincen">Qincena</option>
            	</select>
            	<label>Modalidad</label>
            </div>
            	<label >
            		<input type="radio" name="bono" value="si">
            		<span>si</span>
            	</label>
            	<label>
            		<input type="radio" name="bono" value="no">
            		<span>no</span>
            	</label>
            <div class="row">
            <input id="btn" type="submit" value="calcular" class="btn center">            	
            </div>

        </form>        
    </div>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script> 
		$('#modalidad').formSelect();
        $("#btn").on("click", function(){
            $("#formulario").validate({
                rules:{
                    nombre:{
                        required:true,
						minlength:3,
                        maxlength:15
                    },
                    sueldo:{
                        required:true,
                        number:true
                    }
                },
                messages:{
                    nombre:{
                        required: 'Agrege su nombre',
						maxlength:"Por favor escriba maximo 15 caracteres"
                        
                    },
					sueldo:{
						required:'Agrege su sueldo',
						number:"Debe ser numero"
					}
                },
                errorElement:"div",
                errorClass:"asdasd",
                    errorPlacement: function(error, element){
                        error.insertAfter(element);
                    }
            })
        });
    </script>
</body>
</html>