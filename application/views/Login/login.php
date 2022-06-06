<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyPapper-Login</title>
    <!-- link do css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="text-center">
    <div class="row">
        <div class="d-flex col">
            <img src="img/SP.png" alt="">
        </div>
        <div class="d-flex col justify-content-center me-5 ">
            <main class="form-signin mt-5">
                <h1 class="h3 mb-5 fw-normal mt-5">Por favor, faça o login</h1>
                <form>

                    <div class="form-floating mt-5">
                        <input type="email" class="form-control " style="width: 500px;"
                            id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" >Email </label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="password" class="form-control " 
                            id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" >Senha</label>
                    </div>

                    <p class="mt-5">Não é cadastrado? Clique<a href="cadastro2.html" style="text-decoration:none">
                            aqui</a> </p>

                    <button class="w-100 btn btn-lg color-primary mt-5" style="color:white" type="submit">Login</button>
                </form>
            </main>
        </div>
    </div>







</body>

</html>