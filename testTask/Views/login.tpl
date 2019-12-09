{include file="global/head.tpl"}

<div class="container py-3">

    <div class="row">

        <div class="col-12 col-lg-4 offset-lg-4">

            <h3 class="mb-3 text-center">
                {$title}
            </h3>

            <form action="/signin" method="post">

                <div class="form-group">
                    <input type="text" class="form-control text-center" name="login" placeholder="Логин">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control text-center" name="password" placeholder="Пароль">
                </div>

                <div class="form-group m-0">
                    <input class="btn btn-primary btn-block" type="submit" value="Войти">
                </div>
            </form>

        </div>

    </div>

</div>

{include file="global/footer.tpl"}