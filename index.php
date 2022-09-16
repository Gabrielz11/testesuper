<!doctype html>
<html lang="en">

<head>
    <title>ATIVIDADE SUPER</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand navbar-light bg-light" >
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active"  aria-current="page" href="index.php">HOME<span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo">NOVO USUARIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar">LISTAR USUÁRIOS</a>
                </li>
            </ul>
        </nav>
    </header>
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 offset-md-12  ">
                    <?php 
                        include("config.php");
                        include("usuarios.php");
                        switch(@$_REQUEST["page"]){
                            case "novo":
                                include("newuser.php");
                            break;
                            case "listar":
                                include("listuser.php");
                            break;
                            case "salvar":
                                include("saveuser.php");
                            break;
                            default:
                                print "Seja Bem Vindo!";
                        }
                    ?>
                </div>
            </div>
        </div>


    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>
</html>