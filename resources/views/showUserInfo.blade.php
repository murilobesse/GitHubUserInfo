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
		<div class="card-panel grey lighten-5 z-depth-1">
			<div class="row">
				<div class="center-align">
					<img src={{ $userData->avatar_url }} class="circle responsive-img" style="max-height:150px; max-width: 150px; min-height: 100px; min-width: 100px;">
				</div>
			</div>
			<div class="row">
				<h5 class="center-align">{{ $userData->name }}</h5>
			</div>
			<div class="row">
				<div class="center-align">
					<h6>Login: {{ $userData->login }}</h6>
					<h6>User since: {{ $userData->created_at }}</h6>
					<h6>Company: {{ $userData->company }}</h6>
					<h6>Blog/Site: {{ $userData->blog }}</h6>
					<h6>Location: {{ $userData->location }}</h6>
					<h6>E-Mail: {{ $userData->email }}</h6>

					<div class="input-field col s10 offset-s1">
						<a class="btn waves-effect waves-light grey" href="{{ URL::previous() }}">Back
							<i class="material-icons right">arrow_back</i>
						</a>
					</div>
				</div>
			</div>
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
