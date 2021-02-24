<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="assets/css/main.css" rel="stylesheet">

    <title>MVC для WEB </title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <h2><?php echo $array['title'];?></h2>
                <p><?php echo $array['content']; ?></p>
                <p><small><i>&COPY;<?php echo $array['author']; ?></i></small></p>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
	
	<div class="container text-center">
		<div class="row">
			<div class="col-12">
				<hr>
					<a href="https://github.com/TSECoder/mvc-php" title="GitHub|TSECoder|MVC-PHP" target="_blank">GitHub</a>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-4">
				<h3>Model:</h3>
				<span class="mt-2">__model/views.php__</span>
				<p class="mt-2">
					Class View<br>
					{<br>
					....public function renderIndex($array)<br>
					....{<br>
					........require_once "views/index.php";<br>
					....}<br>
					}
				</p>
			</div>
			<div class="col-4">
				<h3>View:</h3>
				<span class="mt-2">__views/index.php__</span>
				<p class="mt-2">
					&lt;body&gt;<br>
					....&lt;h2&gt;&lt;?php echo $array['title'];?&gt;&lt;/h2&gt;<br>
					....&lt;p&gt;&lt;?php echo $array['content']; ?&gt;&lt;/p&gt;<br>
				    ....&lt;p&gt;&lt;?php echo $array['author']; ?&gt;&lt;/p&gt;<br>
				    &lt;/body&gt;
				</p>
			</div>
			<div class="col-4">
				<h3>Controller:</h3>
				<span class="mt-2">__controllers/main.php__</span>
				<p class="mt-2">
					class Main<br>
					{<br>
					....public function index()<br>
					....{<br>
					........$array = [<br>
					............title' => '<span>MVC для WEB</span>',<br>
					............content' => '<span>Шаблон проектирования MVC предполагает разделение данных приложения, пользовательского интерфейса и управляющей логики на три отдельных компонента: Модель, Представление и Контроллер – таким образом, что модификация каждого компонента может осуществляться независимо</span>.',<br>
					............author' => '<span>Martin</span>'<br>
					........];<br>
					........$view = new View();<br>
					........$view->renderIndex($array);<br>
					....}<br>
					}
				</p>
			</div>
		</div>
	</div>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<hr>
			</div>
		</div>
	</div>
	
	<div class="container text-center mt-5">
		<div class="row">
			<div class="col-12">
				<p>
					Copyright &COPY; <?= date("Y"); ?>
				</p>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="assets/js/main.js"></script>
  </body>
</html>