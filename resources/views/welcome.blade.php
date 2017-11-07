<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Github User Info</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Materialize -->
	{{ Html::script('js/jquery.js') }}
	{{ Html::script('js/materialize.js') }}
	{{ Html::style('css/materialize.css') }}

    </head>
    <body>
    <header>
	<nav>
		<div class="nav-wrapper center-align blue">
			<a href="#" class="">GitHub User Info</a>
		</div>
	</nav>
    </header>
    <main>
	<div class="container">
		<div class="row">
			<h5 class="center-align">Type a github username account to get info</h5>
		</div>
		<div class="row">
			<form class="col s12" action="/show/" method="get">
				<div class="row">
					<div class="input-field col s10 offset-s1">
						<i class="material-icons prefix">account_circle</i>
						<input name="username" id="username" type="text" class="validate"/>
						<label for="username">Username</label>
						@if(Session::has('message'))
							<text style="color: red">{{ Session::get('message') }}</text>
						@endif
					</div>
					
					<div class="input-field col s10 offset-s1">
						<button class="btn waves-effect waves-light blue" type="submit">Submit
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
     </main>
	<footer class="page-footer grey fixed">
		<div class="footer-copyright">
			<div class="container">
				© 2017
			</div>
		</div>
	</footer>
    </body>
</html>
