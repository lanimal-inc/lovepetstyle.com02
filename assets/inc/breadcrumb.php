<nav class="topicPath" aria-label="パンくずリスト">
  <ol itemscope itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
        <span itemprop="name">トップページ</span>
      </a>
      <meta itemprop="position" content="1">
    </li>

    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <span itemprop="name"><?php the_title(); ?></span>
      <meta itemprop="position" content="2">
    </li>
  </ol>
</nav>