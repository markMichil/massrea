<?php if($row->getGallery()): ?>
     <div class="single_page_listing_style">
         <?php $listGallery = $row->getGallery(); ?>
       
         <div class="container-fluid p0">
         
             <div class="row">
                 <div class="col-sm-6 col-lg-6 p0">
                     <div class="row m0">
                         <div class="col-lg-12 p0">
                             <div class="spls_style_one pr1 1px">
                                 <img class="img-fluid w100" src="<?php echo e($listGallery[0]['large']); ?>">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-lg-6 p0">
                     <div class="row m0">
                         <?php $large = $listGallery[0]; unset($listGallery[0]); $i = 0; ?>
                         <?php $__currentLoopData = $listGallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php if($i == 4) break ?>
                             <div class="col-sm-6 col-lg-6 p0">
                                 <div class="row m0">
                                     <div class="col-lg-12 p0">
                                         <div class="spls_style_one">
                                             <img class="img-fluid w100" src="<?php echo e($item['large']); ?>">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <?php $i++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                     </div>
                 </div>
             </div>
         </div>
         <div class="container">
            <div class="single_property_title">
                <a data-toggle="modal" data-target="#galleryModal" class="upload_btn"><span
                        class="flaticon-photo-camera"></span> <?php echo e(__('View Photos')); ?></a>
            </div>           
         </div>
     </div>
     <div class="sign_up_modal modal fade" id="galleryModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
                <div class="fullscreen-gallery">
                    <div class="fotorama" 
                        data-width="100%"
                        data-maxwidth="100%"
                        data-fit="cover"
                        data-ratio="16/9"
                        data-allowfullscreen="true"
                        data-nav="thumbs">
                        <?php $__currentLoopData = $listGallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e($item['large']); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
          </div>
        </div>
     </div>
 <?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/Property/Views/frontend/layouts/details/gallery_property.blade.php ENDPATH**/ ?>