   <main>
         <section class="section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 mb-5 mb-lg-0">
                     <article>
                        <img loading="lazy" decoding="async" src="<?= $baseurl ?>webroot/image/<?= $blog->image ?>" alt="Post Thumbnail" class="w-100">
                        <ul class="post-meta mb-2 mt-4">
                           <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:5px;margin-top:-4px" class="text-dark" viewBox="0 0 16 16">
                                 <path d="M5.5 10.5A.5.5 0 0 1 6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
                                 <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                 <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                              </svg>
                              <span><?= date("d M, Y",strtotime($blog->date))?></span>
                           </li>
                        </ul>
                        <h1 class="my-3"><?= $blog->title ?></h1>
                        <ul class="post-meta mb-4">
                           <li><?= $this->Html->link(__($blog->category->category),['action' => "blog-category",$blog->category_id])?> 
                              <!-- <a href="/categories/destination"><?= $blog->category->category ?></a> -->
                           </li>
                        </ul>
                        <div class="content text-left">
                          <?= $blog->description ?>
                          
                           <hr>
                           <h2 id="image">Image</h2>
                           <img loading="lazy" decoding="async" class="w-100 d-block mb-4" src="<?= $baseurl ?>webroot/image/<?= $blog->image ?>" alt="THIS IS AN IMAGE">
                           <hr>
                           <h2 id="youtube-video">Youtube video</h2>
                           <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                              <iframe src="https://www.youtube-nocookie.com/embed/DDpXdljhstg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;" allowfullscreen title="YouTube Video"allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </div>
                        </div>
                     </article>
                     <div class="mt-5">
                        <div id="disqus_thread"></div>
                        <script type="application/javascript">
                           var disqus_config = function () {
                               
                               
                               
                               };
                               (function() {
                                   if (["localhost", "127.0.0.1"].indexOf(window.location.hostname) != -1) {
                                       document.getElementById('disqus_thread').innerHTML = 'Disqus comments not available by default when the website is previewed locally.';
                                       return;
                                   }
                                   var d = document, s = d.createElement('script'); s.async = true;
                                   s.src = '//' + "themefisher-template" + '.disqus.com/embed.js';
                                   s.setAttribute('data-timestamp', +new Date());
                                   (d.head || d.body).appendChild(s);
                               })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                        </noscript>
                        <a href="https://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
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