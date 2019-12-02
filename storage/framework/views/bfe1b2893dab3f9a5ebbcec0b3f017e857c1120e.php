<!-- edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <script>
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
    <script type='text/javascript'>
        $(document).ready({
            // Department Change
            $('#province').change(function(){
            // Department id
            var id = $(this).val();
            // Empty the dropdown
            $('#city').find('option').not(':first').remove();
            // AJAX request
            $.ajax({
                url: 'city/'+id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    var len = 0;
                    if(response['data'] != null){
                        len = response['data'].length;
                    }
                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){
                            var id = response['data'][i].id;
                            var name = response['data'][i].name;
                            var option = "<option value='"+id+"'>"+name+"</option>";
                            $("#city").append(option);
                        }
                    }
                }
            });
        });
        });
    </script>
    <div class="card uper">
        <div class="card-header" align="center">
           ویرایش ارگان
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div><br />
            <?php endif; ?>
          <form method="post" action="<?php echo e(route('organs.update', $organss->id)); ?>">
             <!--  <div class="form-group">
                    csrf
                    method('PATCH')
                    <label for="name">نام گروه :</label>
                <input type="text" class="form-control" name="group_name" value="<?php echo e($organss->group_name); ?>"/>

                </div> -->
                 <div class="form-group">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('PATCH'); ?>
                     <label for="gname">نام گروه :</label>

                     <select id="group_name" class="form-control" name="group_name" multiple="multiple">
                         <option value='0'>-- انتخاب گروه --</option>
                         <?php $__currentLoopData = $groupnamedata['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $groupnamedata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($groupnamedata->group_name); ?>"
                             <?php if($groupnamedata->group_name==$organss->group_name): ?>
                                 selected='selected'
                             <?php endif; ?>>
                             <?php echo e($groupnamedata->group_name); ?>

                         </option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                 </div>
                <div class="form-group">
                    <label for="code">کد ارگان :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="3" maxlength="5" class="form-control" name="organ_code" value="<?php echo e($organss->organ_code); ?>"/>
                </div>
              <div class="form-group">
                  <label for="oname">نام ارگان :</label>
                  <input type="text" class="form-control" name="organ_name" value="<?php echo e($organss->organ_name); ?>"/>
              </div>
                 <div class="form-group">
                     <?php echo csrf_field(); ?>
                     <label for="province">نام استان :</label>
                     <select id="province" class="form-control" name="province">
                         <option value=''>-- انتخاب استان --</option>
                         <?php $__currentLoopData = $oprovince['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oprovincedata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value='<?php echo e($oprovincedata->id); ?>'
                                 <?php if($oprovincedata->id==$organss->province): ?>
                                     selected='selected'
                                 <?php endif; ?>>
                                 <?php echo e($oprovincedata->pname); ?>

                             </option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                 </div>
                 <div class="form-group">
                     <?php echo csrf_field(); ?>
                     <label for="city">نام شهر :</label>
                     <select id="city" class="form-control" name="city">
                         <option value=''>-- انتخاب شهر --</option>
                     </select>
                 </div>
              <div class="form-group">
                  <label for="address">آدرس :</label>
                  <input type="text" class="form-control" name="organ_address" value="<?php echo e($organss->organ_address); ?>"/>
              </div>
              <td><a href="<?php echo e(route('organs.index')); ?>" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">بروز رسانی ارگان</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/organs/edit.blade.php ENDPATH**/ ?>