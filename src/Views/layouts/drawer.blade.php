<header class="mdl-color--blue-grey-900 mdl-color-text--blue-grey-100 mdl-layout__header-row mdl-shadow--2dp node-drawer-header">
  <div class="mdl-layout-spacer"></div>
  <img src="/vendor/kelnebenath/noderesource/images/node-logo.png"></img>
</header>
<div class="node-profile mdl-shadow--6dp">
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col">
      <img src="/images/profile-photo.jpg" id="node-user-photo" width="64" height="64" class="mdl-shadow--6dp">
    </div>
    <div class="mdl-cell mdl-cell--8-col">
      Welcome,
      <strong>{{ Auth::user()->name }}</strong>
    </div>
  </div>
</div>
<nav class="node-nav-menu mdl-navigation">
  <a href="{{route('nr_dashboard')}}" class="mdl-navigation__link"><i class="material-icons" role="presentation">home</i>Dashboard</a>
  <a href="{{route('nr_node')}}" class="mdl-navigation__link"><i class="material-icons node-rect_rotation" role="presentation">share</i>Nodify</a>
  <a href="{{route('nr_dnode')}}" class="mdl-navigation__link"><i class="material-icons node-vertical_flip" role="presentation">call_split</i>Distribute</a>
  <a href="{{route('nr_modularize')}}" class="mdl-navigation__link"><i class="material-icons" role="presentation">extension</i>Modularize</a>
</nav>
