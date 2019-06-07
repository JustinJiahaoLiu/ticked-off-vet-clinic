<div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky mt-2">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" style="color:orange;" href="/">
              <h5><i class="fas fa-home mr-2"></i>Dashboard</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:orange;" href="{{ route('pets') }}">
              <h5><i class="fas fa-table mr-2"></i>Management Pet Info</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:orange;" href="{{ route('statistics')}}">
              <h5><i class="fas fa-list-ul mr-2"></i>Statistics</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:orange;" href="{{ route('calculator')}}">
              <h5><i class="fas fa-calculator mr-2"></i>Boarding Cost Calc</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:orange;" href="{{route('export')}}">
              <h5><i class="fas fa-file-export mr-2"></i>Qick Export Pet Info</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:orange;" href="/about/company">
              <h5><i class="fas fa-question-circle mr-2"></i>About this company</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:orange;" href="/about/application">
              <h5><i class="fas fa-question-circle mr-2"></i>About this application</h5>
            </a>
          </li>
        </ul>
      </div>
    </nav>
