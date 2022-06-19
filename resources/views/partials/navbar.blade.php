<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <span>TodosApp</span>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item" href="/about">
        About Us
      </a>

      @auth
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="/todos">
          Todos
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item" href="/todos/create">
            Add Todo
          </a>
        </div>
      </div>
      @endauth
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          @guest
          <a href="{{route('register')}}" class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a href="{{route('login')}}" class="button is-light">
            Log in
          </a>
          @else
          <a href="{{route('logout')}}" class="button is-danger">
            Logout
          </a>
          @endguest
        </div>
      </div>
    </div>
  </div>
</nav>