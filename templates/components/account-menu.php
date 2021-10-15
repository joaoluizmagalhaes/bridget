<nav class="account__menu">
  <ul class="account__menu-list">
    <li class="account__menu-list-item">
      <a href="<?= esc_url(home_url()); ?>/minha-conta" class="active"><img src="<?php bloginfo('template_url'); ?>/_assets/img/profile.svg" alt="" class="svg account__menu-list-item-icon">Meus dados</a>
    </li>
    <li class="account__menu-list-item">
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/_assets/img/chart-1.svg" alt="" class="svg account__menu-list-item-icon">Minhas avaliações</a>
    </li>
    <li class="account__menu-list-item">
      <a href="<?= esc_url(home_url()); ?>/meus-anuncios"><img src="<?php bloginfo('template_url'); ?>/_assets/img/megaphone.svg" alt="" class="svg account__menu-list-item-icon">Meus anúncios</a>
    </li>
    <li class="account__menu-list-item">
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/_assets/img/heart.svg" alt="" class="svg account__menu-list-item-icon">Favoritos</a>
    </li>
    <li class="account__menu-list-item logout">
        <a href="<?= wp_logout_url(); ?>">Sair</a>
    </li>
  </ul>
</nav>