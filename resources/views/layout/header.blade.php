<div class="horizontal-menu">
    <nav class="navbar top-navbar">
        <div class="container">
            <div class="navbar-content">
                <a href="#" class="navbar-brand">
                    <img style="margin-right:5px;" height="50px;" src="https://cudimiod.pl/wp-content/uploads/2020/02/logo-04.19.png" /><span style="padding-top: 4px;">CRM</span>
                </a>
                <form class="search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <h5>{{$title}}</h5>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown nav-apps">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            <i data-feather="user"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item {{ active_class(['/']) }}">
                    <a href="#" class="nav-link">
                        <i class="link-icon fas fa-users"></i>
                        <span class="menu-title">Klienci</span>
                        <i class="link-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="category-heading">Zarządzanie klientami</li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/customers') }}">Wszyscy klienci</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/customers/#add') }}">Dodaj klienta</a></li>
                            <li class="category-heading">Opinie i komentarze</li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/customers/reviews') }}">Pokaż opinie</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ active_class(['/']) }}">
                    <a href="#" class="nav-link">
                        <i class="link-icon fas fa-file-alt"></i>
                        <span class="menu-title">Diety</span>
                        <i class="link-arrow"></i>
                    </a>
                    <div class="submenu">
                        <div class="col-group-wrapper row">
                            <div class="col-group col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="submenu-item">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="category-heading">Zarządzanie dietami</li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets') }}">Wszystkie diety</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/variants') }}">Warianty kaloryczne</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/types') }}">Typy diet</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="category-heading">Menu</li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/menu') }}">Pokaż całe menu</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/menu/#add') }}">Dodaj menu</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="category-heading">Produkty dodatkowe</li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/addons') }}">Wszystkie produkty</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/addons/#add') }}">Dodaj produkt</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="category-heading">Posiłki</li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/meal') }}">Wszystkie posiłki</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/meal/#add') }}">Dodaj posiłek</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="category-heading">Składniki</li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/ingredients') }}">Wszystkie składniki</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/ingredients/#add') }}">Dodaj składnik</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="category-heading">Potrawy</li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/dish') }}">Wszystkie potrawy</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/diets/dish/#add') }}">Dodaj potrawę</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item {{ active_class(['/']) }}">
                    <a href="#" class="nav-link">
                        <i class="link-icon fas fa-user"></i>
                        <span class="menu-title">Pracownicy</span>
                        <i class="link-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/staff') }}">Zarządzanie pracownikami</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/staff/roles') }}">Role i uprawnienia</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ active_class(['/']) }}">
                    <a href="#" class="nav-link">
                        <i class="link-icon fas fa-cog"></i>
                        <span class="menu-title">Ustawienia</span>
                        <i class="link-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="category-heading">Ustawienia systemowe</li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/settings/dictionary') }}">Słowniki</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
