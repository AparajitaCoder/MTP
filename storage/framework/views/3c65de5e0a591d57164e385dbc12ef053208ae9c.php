<?php $__env->startSection('content'); ?>
<section class="content">
	<?php echo $__env->make('user.includes.innovation_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
	
	<div class="right-side col-md-9" style="max-width:800px !important;">
  
		<div class="content-area clearfix">
            <div class="post-list">
            <h3 class="mb-1">
                Public Challanges  
            </h3>		
        	<table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                    <tr>   						
                        <th>No</th>                        
                        <th>Name</th>                                   
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pchallanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pidea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>	
                    	                 	
                        <td><?php echo e($index + 1); ?></td>                        
                        <td><?php echo e($pidea->title); ?></td>                        
                        <td><?php echo $pidea->description; ?></td>     
                        <td>    
                           <form method="post" action="<?php echo e(route('innovationapply')); ?>" class="clear">
            				<?php echo e(csrf_field()); ?>        
            					<input type="hidden" name="idea_id" value="<?php echo e($pidea->id); ?>">
                				<div class="col-md-12">               					
                                    <button type="submit" class="btn btn-default yellow-btn">Suggest solution and get reward</button>                                         					
                				</div>
            				</form> 
						</td> 
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                
            </table>
            
            </div>
			<div class="pagination">
				<?php echo e($ideas->links()); ?>

			</div>
			
			
			<div class="col-md-12 user-rigtpart">
            	 <?php echo $__env->make('common.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <h1>Please send your challenges here</h1>        
                <div class="edit-profile-info pd0">
                  <form action="<?php echo e(route('addchallenge')); ?>" method="POST" enctype="multipart/form-data" role="form">
                  <?php echo e(csrf_field()); ?>           
                    <div class="row">
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Name</label></div>
                        <div class="col-md-10 pull-left">                  
                          <input class="form-control" type="text" name="name" required placeholder="Your Name">
                        </div>
                      </div>
                      
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Email</label></div>
                        <div class="col-md-10 pull-left">                  
                          <input class="form-control" type="email" name="email" required placeholder="Your Email">
                        </div>
                      </div>
                      
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Mobile</label></div>
                        <div class="col-md-10 pull-left">                  
                          <input class="form-control" type="text" name="mobile" required placeholder="Your Mobile">
                        </div>
                      </div>
                      
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Title</label></div>
                        <div class="col-md-10 pull-left">                  
                          <input class="form-control" type="text" name="title" required placeholder="Challenge Title">
                        </div>
                      </div>
                      
                      <div class="col-md-12 pull-left">
                      	<div class="col-md-2 pull-left"><label>Description</label></div>
                        <div class="col-md-10 pull-left">                  
                          <textarea class="form-control" name="description" required placeholder="Challenge Description" rows="7"></textarea>
                        </div>
                      </div>
        			  			  
                      <div class="action col-md-12">
                      <div class="col-md-2 pull-left"></div>
                        <div class="col-md-10 pull-left">                  
                          <input type="submit" class="btn btn-default yellow-btn" value="Submit" name="submit">       
                        </div>
                                 
                      </div>
                    </div>
                  </form>
                </div>
            </div>
            
            <h3 class="mb-1">
               Top ten public challange soloution providers winners
            </h3>		
        	<table class="table table-striped table-bordered dataTable">
                <thead>
                    <tr>   						
                        <th style="width:100px;">No</th>                        
                        <th>Name</th>                       
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $top10ch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $ideach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>              	
                        <td ><?php echo e($index + 1); ?></td>                        
                        <td><?php echo e($ideach->first_name); ?> <?php echo e($ideach->last_name); ?></td>   
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                
            </table>
    
		</div>
	</div> 		
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>