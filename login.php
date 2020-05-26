<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<link rel="icon" type="image/x-icon" href="assets/img/SkillClass.png" />
<link href="css/css.css" rel="stylesheet" />
<!------ Include the above in your HEAD tag ---------->

<script src="js/login.js">
</script>

<title>Skill Class Login</title>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="assets/img/LogoSkillClass.png" id="icon" alt="User Icon" width="150" height="240"/>
        </div>

        <!-- Login Form -->
        <form method="POST">
            <input type="text" id="Usuario" class="fadeIn second" name="Usuario" placeholder="Usuario">
            <input type="text" id="Contraseña" class="fadeIn third" name="Contraseña" placeholder="Contraseña">
            <button type="submit" id="Ingresar" class="fadeIn fourth" value="Ingresar">
              Enviar
            </button>

        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>
