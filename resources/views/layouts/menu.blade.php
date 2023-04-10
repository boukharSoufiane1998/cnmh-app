<li class="nav-item">
    <a href="{{ route('couvertureMedicals.index') }}" class="nav-link {{ Request::is('couvertureMedicals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/couvertureMedicals.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('typeHandicaps.index') }}" class="nav-link {{ Request::is('typeHandicaps*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/typeHandicaps.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('services.index') }}" class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/services.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('niveauScolaires.index') }}" class="nav-link {{ Request::is('niveauScolaires*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/niveauScolaires.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('etatCivils.index') }}" class="nav-link {{ Request::is('etatCivils*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/etatCivils.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employes.index') }}" class="nav-link {{ Request::is('employes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/employes.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('members.index') }}" class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/members.plural')</p>
    </a>
</li>
