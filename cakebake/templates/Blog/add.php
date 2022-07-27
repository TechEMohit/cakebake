<?php $this->start('page-css') ?>
<?= $this->Html->css("assets/css/scrollspyNav.css") ?>
<?php $this->end(); ?>
<div class="">
   <div class="container">
     
      <?php $this->start('navBtn'); ?>
       <?= $this->Html->link(__('List'),['action' => "index"],['class' => "btn btn-primary mr-5"]) ?>
      <?php $this->end() ?>
            
      <div class="row layout-top-spacing">
         <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
               <div class="widget-header">
                  <div class="row">
                     <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit Blog Here</h4>
                     </div>
                     <div class="text-center ml-5 text-danger">
                      <?= $this->Flash->render() ?> 
                     </div>
                  </div>
               </div>
               <div class="widget-content widget-content-area">
                <?= $this->Form->create($blog,["type" => "file"]) ?>

                <?php

                 $categories_list = [];
                 foreach ($categories as $key => $value) {
                    $categories_list[$value->id]  =$value->category;
                 }
                 echo $this->Form->control('Title',['name' => 'title','class' => "form-control mb-3",'placeholder'=>'name@example.com']); 
                 echo $this->Form->label('Category');
                 echo $this->Form->select('Category',$categories_list,['name' =>"category_id",'empty' => "Select Category",'class' => "form-control mb-3"]); 
                 echo $this->Form->control('Description',['name' => "description",'type' =>"textarea",'class'=>'form-control mb-3']);
                 echo $this->Form->label('Blog Image');
                 echo $this->Form->file('image',['class'=>'form-control-file']);

                ?>
                <!-- <img src="<?= $baseurl?>webroot/image/<?= $blog->image ?>" class="w-100 h-50 mt-3">  -->
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