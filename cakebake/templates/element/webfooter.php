<footer class="bg-dark mt-5">
  <div class="container section">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <a class="d-inline-block mb-4 pb-2" href="index.html">
          <img loading="prelaod" decoding="async" class="img-fluid" src="<?= $baseurl ?>webroot/img/logo-white.png" alt="Reporter Hugo">
        </a>
        <ul class="p-0 d-flex navbar-footer mb-0 list-unstyled">
          <li class="nav-item my-0">
           <?= $this->Html->link(__('About'),['action' => "about-me"],['class' => "nav-link"]) ?>
          </li>
          <li class="nav-item my-0">
           <?= $this->Html->link(__('Privacy Policy'),['action' => "privacy-policy"],['class' => "nav-link"]) ?>
          </li>
          <li class="nav-item my-0">
           <?= $this->Html->link(__('Terms Conditions'),['action' => "terms-condition"],['class' => "nav-link"]) ?>
          </li>
          <li class="nav-item my-0"> <a class="nav-link" href="#">404 Page</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copyright bg-dark content"> Developed By <a href="https://themefisher.com/">@</a></div>
</footer>