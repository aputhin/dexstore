<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuários <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('list?admin=1') }}">Admin</a></li>
                        <li><a href="{{ url('list') }}">User</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>