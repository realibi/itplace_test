{include file="global/head.tpl"}

<div class="jumbotron mb-50">
  <div class="container text-center">
    <h1>ITPLACE</h1>      
    <h3>Админка</h3>
  </div>
</div>



<div class="container">
    <h3 class="tac">Создание новости:</h3>
    <div class="forms">
        <form action="/news/add" method="POST">
            <div class="mdl-textfield mdl-js-textfield">
                <p>Заголовок:</p>
                <input class="mdl-textfield__input" type="text" id="title" name="title">
                <br><br>
                <p>Контент:</p>
                <textarea class="mdl-textfield__input" type="text" rows= "3" id="content" name="content"></textarea>
                <br><br>
                <input type="submit" value="Создать">
            </div>
        </form>
    </div>

    <br><br>
    <h3 class="tac">Новости созданные мной:</h3>
    <div class="news">
        {* Место для новостей, динамически загружается с js *}
    </div>
</div><br><br>

<script>
    $(document).ready(function(){
        getElementsAdmin();
        getUserRole();
    });
</script>