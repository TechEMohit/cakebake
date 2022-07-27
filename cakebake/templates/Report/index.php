<main>
  <section class="section">
    <div class="container">
      <div class="row no-gutters-lg">
        <div class="col-12">
          <h2 class="section-title">Latest Articles</h2>
        </div>
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="row">
            <?php foreach ($blogs as $key=> $blog): if ($key < 1){  ?>
            <div class="col-12 mb-4">
              <article class="card article-card">
                <a href="article.html">
                  <div class="card-image">
                    <div class="post-info"> <span class="text-uppercase">04 Jun 2021</span>
                      <span class="text-uppercase">3 minutes read</span>
                    </div>
                    <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/image/<?= $blog->image?>" alt="Post Thumbnail" class="w-100">
                  </div>
                </a>
                <div class="card-body px-0 pb-1">
                  <ul class="post-meta mb-2">
                    <li> <a href="#!"><?= $blog->category->category ?></a>
                    </li>
                  </ul>
                  <h2 class="h1"><a class="post-title" href="article.html"><?= $blog->title ?></a></h2>
                  <?= substr($blog->description,0,190) ?>...
                  <div class="content"> 
                    <?= $this->Html->link(__("Read Full Article"),['action' => 'view',$blog->id],['class' =>"read-more-btn"])?>
                  </div>
                </div>
              </article>
            </div>
            <?php }else{ ?>

            <div class="col-md-6 mb-4">
              <article class="card article-card article-card-sm h-100">
                <a href="<?= \Cake\Routing\Router::url(['action' => 'view',$blog->id]) ?>">
                  <div class="card-image">
                    <div class="post-info"> <span class="text-uppercase">03 Jun 2021</span>
                      <span class="text-uppercase">2 minutes read</span>
                    </div>
                    <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/image/<?= $blog->image?>" alt="Post Thumbnail" class="w-100">
                  </div>
                </a>
                <div class="card-body px-0 pb-0">
                  <ul class="post-meta mb-2">
                    <li> <a href="#!">travel</a>
                    </li>
                  </ul>
                  <h2><?= $this->Html->link(__($blog->title),['action' =>'view',$blog->id]) ?> </h2>
                  <p class="card-text"><?= substr($blog->description,0,125) ?>...</p>
                  <div class="content"> <?= $this->Html->link(__("Read Full Article"),['action' =>'view',$blog->id],['class' => 'read-more-btn']) ?>
                  </div>
                </div>
              </article>
            </div>
            <?php } endforeach ?>

            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <nav class="mt-4">
                    <!-- pagination -->
                    <nav class="mb-md-50">
                      <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link" href="#!" aria-label="Pagination Arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                            </svg>
                          </a>
                        </li>
                        <li class="page-item active "> <a href="index.html" class="page-link">
                            1
                          </a>
                        </li>
                        <li class="page-item"> <a href="#!" class="page-link">
                            2
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#!" aria-label="Pagination Arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
  <div class="widget-blocks">
    <div class="row">
     
      <div class="col-lg-12 col-md-6">
        <div class="widget">
          <h2 class="section-title mb-3">Recommended</h2>
          <div class="widget-body">
            <div class="widget-list">
              <article class="card mb-4">
                <div class="card-image">
                  <div class="post-info"> <span class="text-uppercase">1 minutes read</span>
                  </div>
                  <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/img/post/post-9.jpg" alt="Post Thumbnail" class="w-100">
                </div>
                <div class="card-body px-0 pb-1">
                  <h3><a class="post-title post-title-sm"
                      href="article.html">Portugal and France Now
                      Allow Unvaccinated Tourists</a></h3>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor …</p>
                  <div class="content"> <a class="read-more-btn" href="article.html">Read Full Article</a>
                  </div>
                </div>
              </article>
              <a class="media align-items-center" href="article.html">
                <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/img/post/post-2.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">These Are Making It Easier To Visit</h3>
                  <p class="mb-0 small">Heading Here is example of hedings. You can use …</p>
                </div>
              </a>
              <a class="media align-items-center" href="article.html"> <span class="image-fallback image-fallback-xs">No Image Specified</span>
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">No Image specified</h3>
                  <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                </div>
              </a>
              <a class="media align-items-center" href="article.html">
                <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/img/post/post-5.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">Perfect For Fashion</h3>
                  <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                </div>
              </a>
              <a class="media align-items-center" href="article.html">
                <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/img/post/post-9.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">Record Utra Smooth Video</h3>
                  <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-6">
        <div class="widget">
          <h2 class="section-title mb-3">Categories</h2>
          <div class="widget-body">
            <ul class="widget-list">
              <?php foreach ($categories as $key => $value): ?>              
              <li><a href="<?= \Cake\Routing\Router::url(['action' =>'blog-category',$value->id,'controller' =>'Report']) ?>"><?= $value->category?><span class="ml-auto">(2)</span></a>
              </li>
            <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </section>
</main>