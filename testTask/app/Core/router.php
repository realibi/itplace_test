<?php
 //header("Access-Control-Allow-Origin: *");

use Controllers\LoginController;
use Core\Helpers;
use Core\RenderEngine;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Models\Auth;
use Models\Password;
use Models\Tables\Users;
use Core\Abstracts\Controller;

$router = new Klein();
$newsController = new \Controllers\NewsController();
$routesController = new \Controllers\RoutesController();
$loginController = new \Controllers\LoginController();
$userController = new \Controllers\UserController();

$router->get("/?", function (Request $request, Response $response) use ($routesController) {
    return $response->redirect("/login")->send();
});

$router->get("/login", function (Request $request, Response $response) use ($routesController, $loginController) {
    setcookie("user_id", "");
    setcookie("user_role", "");
    $routesController->redirect("login");
});

$router->post("/signin", function (Request $request, Response $response) use ($routesController, $loginController, $userController) {

    $user = $loginController->login($request->param("login"), $request->param("password"));

    if($user) {
        setcookie("user_id", $user["id"], false, "/");
        setcookie("user_role", $user["role_id"], false, "/");

        if($userController->getUserRole($request->param("login")) == "1"){
            return $response->redirect("/admin/dashboard")->send();
        }
        else if($userController->getUserRole($request->param(login)) == "2") {
            return $response->redirect("/news")->send();
        }
    }
    else{
        return $response->redirect("/login")->send();
    }
});

$router->get("/logout/?", function (Request $request, Response $response) {
    return $response->redirect("/login")->send();
});

$router->with("/news", function () use ($router, $newsController, $routesController) {

    $router->get("/?", function (Request $request, Response $response) use ($routesController) {
        
        return $routesController->redirect("index");
    });

    $router->get("/allNews", function (Request $request, Response $response) use ($newsController) {
        return $newsController->getNews();
    });

    $router->post("/add", function (Request $request, Response $response) use ($newsController, $routesController) {
        if($_COOKIE["user_role"] == 1) {
            $newsController->addNews($request->param(title), $request->param(content), date('Y-m-d H:i:s'), $_COOKIE['user_id']);
            return $response->redirect("/admin/dashboard")->send();
        }
        else{
            return $response->redirect("/login")->send();
        }
    });

    $router->get("/editNews/[:id]/?", function (Request $request, Response $response) use ($newsController, $routesController) {
        echo "hello";
        if($_COOKIE["user_role"] == 1) {

            setcookie("editing_news_id", $request->id);
            //$newsController->addNews($request->param(title), $request->param(content), date('Y-m-d H:i:s'), $_COOKIE['user_id']);
            return $routesController->redirect("/admin/editNews");
        }
        else{
            return $response->redirect("/login")->send();
        }
    });

    $router->get("/deleteNews/[:id]/?", function (Request $request, Response $response) use ($newsController, $routesController) {
        if($_COOKIE["user_role"] == 1) {
            $newsController->deleteNews($request->id);
            return $routesController->redirect("admin/dashboard");
        }
        else{
            return $response->redirect("/login")->send();
        }
    });

    $router->get("/getNews/[:id]/?", function (Request $request, Response $response) use ($newsController) {
        
        return $newsController->getNews($request->id);
    });
});

$router->with("/admin", function () use ($router, $routesController) {

    $router->get("/?", function (Request $request, Response $response) {
        return $response->redirect(Helpers::url("admin", "dashboard"))->send();
    });

    $router->get("/dashboard/?", function (Request $request, Response $response) use ($routesController) {
        if($_COOKIE["user_role"] == 1){
            return $routesController->redirect("admin/dashboard");
        }
        else{
            return $response->redirect("/login")->send();
        }
    });
});

$router->with("/users", function () use ($router, $routesController, $userController) {

    $router->get("/get/?", function (Request $request, Response $response) use ($userController){
        return $userController->get();
    });

    $router->get("/get/[:id]?", function (Request $request, Response $response) use ($userController){
        return $userController->get($request->id);
    });
});

$router->dispatch();