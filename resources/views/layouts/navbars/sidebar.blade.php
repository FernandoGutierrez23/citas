<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('GESTOR DE CITAS') }}
    </a>
  </div>

  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Agenda') }}</p>
        </a>
      </li>
    <!--  
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('/img/laravel.svg') }}"></i>
          <p>{{ __('Laravel') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    -->
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('add-administradores') }}">
          <i class="material-icons">group_add</i>
            <p>{{ __('Nuevo Administrador') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'list-admins' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">supervisor_account</i>
          <p>{{ __('Lista de Administradores') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'new-date' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('vista-pacientes') }}">
          <i class="material-icons">face</i>
            <p>{{ __('Nuevo Paciente') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'list-pacientes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('paciente.index') }}">
          <i class="material-icons">contact_page</i>
            <p>{{ __('Lista de Pacientes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'add-date' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('vista-citas') }}">
          <i class="material-icons">date_range</i>
          <p>{{ __('Agregar Cita') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'list-citas' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('cita.index') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Citas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">record_voice_over</i>
            <p>{{ __('Inclusión') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notificaciones') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
