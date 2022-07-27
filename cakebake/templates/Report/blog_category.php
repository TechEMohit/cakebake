<main>
   <section class="section">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="breadcrumbs mb-4"> <?= $this->Html->link(__('Home'),['action' =>"/"])?>
                  <span class="mx-1">/</span>  <?= $this->Html->link(__('Articles'),['action' =>"/"])?>
                  <span class="mx-1">/</span>  <?= $this->Html->link(__('Travel'),['action' =>"/"])?>
               </div>
               <h1 class="mb-4 border-bottom border-primary d-inline-block"><?= $singleCategory->category ?></h1>
            </div>
            <div class="col-lg-8 mb-5 mb-lg-0">
               <div class="row">
               	<?php foreach ($blogs as $key => $blog): ?>
                  <div class="col-md-6 mb-4">
                     <article class="card article-card article-card-sm h-100">
                        <a href="<?= \Cake\Routing\Router::url(['action' =>'view',$blog->id,'controller' => 'Report']) ?>">
                           <div class="card-image">
                              <div class="post-info"> <span class="text-uppercase"><?= date('d M Y',strtotime($blog->date))?></span>
                                 <span class="text-uppercase">3 minutes read</span>
                              </div>
                              <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/image/<?= $blog->image?>" alt="Post Thumbnail" class="w-100" width="420" height="280">
                           </div>
                        </a>
                        <div class="card-body px-0 pb-0">
                           <ul class="post-meta mb-2">
                              <li><?= $this->Html->link(__($blog->category->category),['action' =>"blog-category",$blog->category_id]) ?>
                              </li>
                           </ul>
                           <h2><a class="post-title" href="<?= \Cake\Routing\Router::url(['action' =>'view',$blog->id,'controller' => 'Report']) ?>"><?= $blog->title ?></a></h2>
                           <?= substr($blog->description, 0,125) ?>...
                           <div class="content">
                           	<?= $this->Html->link(__('Read Full Article'),['action' =>"view",$blog->id],['class' =>"read-more-btn"]) ?>
                           </div>
                        </div>
                     </article>
                  </div>
               	<?php endforeach ?>

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
                                          Allow Unvaccinated Tourists</a>
                                       </h3>
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
                                 <a class="media align-items-center" href="article.html">
                                    <span class="image-fallback image-fallback-xs">No Image Specified</span>
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
                                <?php foreach ($categories as $category): ?>
					               <li><a href="<?= \Cake\Routing\Router::Url(['controller' =>'Report','action' =>'blog-category',$category->id])?>"><?= $category->category ?><span class="ml-auto">(3)</span></a>
					               </li>
					              <?php endforeach  ?>
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