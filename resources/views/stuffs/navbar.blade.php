<style>
    .navbar {
        background-color: #A5C9CA;
    }
</style>
<nav class="navbar navbar-expand-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Yui</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" href="/home" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/news">News</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="#">About Me</a>
                      <a class="dropdown-item" href="#">FAQ</a>
                  </div>
              </li>
          </ul>
          @auth
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hi, {{ auth()->user()->username}}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="/dashboard">Dashboard</a>
                    <hr class="dropdown-divider">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"> Logout </button>
                        </form>
                </div>
            </li>
              @else 
              <table>
                <tr>
                    <td>                 
                        <li class="nav-item" style="list-style: none">
                            <a href="/login" class="btn btn-primary"> Login </a>
                        </li> 
                    </td>
                </ul>
                    <td>
                        <li class="nav-item" style="list-style: none">
                            <a href="/register" class="btn btn-primary"> Register </a>
                        </li>
                    </td>
                </ul>
                </tr>
            </table>
          @endauth
          </form>
      </div>
</div>
</nav>