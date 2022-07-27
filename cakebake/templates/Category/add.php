<?php $this->start('page-css') ?>
<?= $this->Html->css("assets/css/scrollspyNav.css") ?>
<?php $this->end(); ?>
<div class="">
   <div class="container">
     
      <div class="row layout-top-spacing">
         <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
               <div class="widget-header">
                  <div class="row">
                     <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add Category Here</h4>
                     </div>
                  </div>
               </div>
               <div class="widget-content widget-content-area">
                <?= $this->Form->create($category) ?>



                <?php
                 echo $this->Form->control('Category',['name' => 'category','value' => $category->category ,'class' => "form-control mb-3"]); 
                ?>
                <?php echo $this->Form->submit('Submit',['class' => "mt-4 mb-4 btn btn-primary"]); ?>
                <?= $this->Form->end(); ?> 

                    
                   
                     <!-- <div class="form-group mb-4">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </div> -->
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $this->start('page-js'); ?>
<?= $this->Html->script('js/scrollspyNav.js') ?>
<?php $this->end(); ?>