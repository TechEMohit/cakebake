<?php $this->start("page-css"); ?>
<?= $this->Html->css("plugins/table/datatable/datatables.css");?>
<?= $this->Html->css("plugins/table/datatable/dt-global_style.css"); ?>
<?= $this->Html->css("assets/css/tables/table-basic.css" ); ?>

<?php $this->end(); ?>

 <div class="row layout-top-spacing container-fluid">
                
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <?php $this->start('navBtn'); ?>
             <?= $this->Html->link(__('Add New'),['action' => "add"],['class' => "btn btn-primary mr-5"]) ?>
            <?php $this->end() ?>   
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th class="no-content">Actions</th>
                    </tr>
                </thead>
                <tbody>
                	<?php foreach ($blogs as $key => $blog): ?> 
                     <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $blog->title ?></td>
                        <td><?= $blog->category->category ?></td>
                        <td><img src="<?= $baseurl ?>webroot/image/<?= $blog->image ?>" class="w-50"></td>
                        <td><?= date("d M Y",strtotime($blog->date)) ?></td>
                        <td>
                        <ul class="table-controls">
                        <li><a href="<?= \Cake\Routing\Router::url(['action' =>'edit',$blog->id]) ?>"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                        <li><a href="<?= \Cake\Routing\Router::url(['action' =>'delete',$blog->id]) ?>" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                   		</ul>
                   	   </td>
                     </tr>
                	<?php endforeach ?>
                    
                </tbody>
                
            </table>
        </div>
    </div>

</div>


 <!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php $this->start("page-js"); ?>
<?= $this->Html->script("js/datatables.js");?>
<script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>
<?php $this->end(); ?>
<!-- END PAGE LEVEL SCRIPTS -->



