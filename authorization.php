<!DOCTYPE html>
<html lang="ru">
<head>
    <?
    require_once 'blocks/head.php';
    ?>
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Войти в панель администратора </div>

                            <div class="card-body">
                                <form class="authorizationForm" action="form-processing/authorization.php" method="post" >

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Логин</label>

                                        <div class="col-md-6">
                                            <input type="text"  name="login" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="login" class="col-md-4 col-form-label text-md-right">Пароль</label>

                                        <div class="col-md-6">
                                            <input type="text"  name="password" class="form-control">
                                        </div>
                                    </div>                                    

                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-outline-primary">
                                                Добавить товар 
                                            </button>
                                            
                                        </div>

                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
