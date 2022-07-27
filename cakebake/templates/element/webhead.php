<header class="navigation">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <a class="navbar-brand order-1 py-0" href="<?= \Cake\Routing\Router::url(['controller' => 'Report', 'action' => '/']) ?>">
        <img loading="prelaod" decoding="async" class="img-fluid" src="<?= $baseurl ?>webroot/img/logo.png" alt="Reporter Hugo">
      </a>
      <div class="navbar-actions order-3 ml-0 ml-md-4">
        <button aria-label="navbar toggler" class="navbar-toggler border-0" type="button" data-toggle="collapse"
          data-target="#navigation"> <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <form action="#!" class="search order-lg-3 order-md-2 order-3 ml-auto">
        <input id="search-query" name="s" type="search" placeholder="Search..." autocomplete="off">
      </form>
      <div class="collapse navbar-collapse text-center order-lg-2 order-4" id="navigation">
        <ul class="navbar-nav mx-auto mt-3 mt-lg-0">
          <li class="nav-item">
              <?= $this->Html->link(__("About Me"),['action' => "about-me"],['class' => "nav-link"]) ?>
          </li>
          <li class="nav-item dropdown"> 

            <a class="nav-link dropdown-toggle" href="#" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Articles
            </a>
            <div class="dropdown-menu"> 
              <?= $this->Html->link(__("Travel"),['action' => "travel"],['class' => "dropdown-item"]) ?>
              <?= $this->Html->link(__("Lifestyle"),['action' => "travel"],['class' => "dropdown-item"]) ?>
              <?= $this->Html->link(__("Cruises"),['action' => "travel"],['class' => "dropdown-item"]) ?>
            </div>
          </li>
          <li class="nav-item">
              <?= $this->Html->link(__("Contact"),['action' => "contact-us"],['class' => "nav-link"]) ?>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>