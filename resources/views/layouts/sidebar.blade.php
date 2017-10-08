<aside class="sidebar">
    <h1>Agrotech</h1>
    <input type="checkbox" id="menu-checkbox">

    <label for="menu-checkbox" class="menu-btn"><i class="material-icons">menu</i></label>

    <nav>
        <a class="{{ Request::is('/') ? 'active' : '' }}" href="/"><i class="material-icons">dashboard</i> Panel de control</a>
        <a class="{{ Request::is('statistics') ? 'active' : '' }}" href="/statistics"><i class="material-icons">assessment</i> Estadísticas</a>
        <a class="{{ Request::is('settings') ? 'active' : '' }}" href="/settings"><i class="material-icons">settings</i> Ajustes</a>
    </nav>
</aside>