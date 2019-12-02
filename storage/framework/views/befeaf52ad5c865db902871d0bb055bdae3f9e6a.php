<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-bottom: 20px;" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h3>نمایش اطلاعات</h3>
            </div>
        </div>
    </div>

  <div class="row" >
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>کد ارگان:</strong>
              <?php echo e($ghorfeha->organid); ?>

          </div>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>سال:</strong>
                <?php echo e($ghorfeha->yearofreq); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>راهپیمایی :</strong>
                <?php echo e($ghorfeha->marchigtype); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تعداد غرفه :</strong>
                <?php echo e($ghorfeha->numberghorfeh); ?>

            </div>
        </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>متراژ :</strong>
              <?php echo e($ghorfeha->meteraj); ?>

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>متراژ کل:</strong>
              <?php echo e($ghorfeha->meterajkol); ?>

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>نوع سازه :</strong>
              <?php echo e($ghorfeha->structuretype); ?>

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>نوع فعالیت :</strong>
              <?php echo e($ghorfeha->activitytype); ?>

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>نام مسئول غرفه :</strong>
              <?php echo e($ghorfeha->ghormasname); ?>

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>نام  خانوادگی مسئول غرفه :</strong>
              <?php echo e($ghorfeha->ghormasfamily); ?>

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>کدملی :</strong>
              <?php echo e($ghorfeha->ghormasnational); ?>

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>تلفن ثابت :</strong>
              <?php echo e($ghorfeha->ghormasphone); ?>

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>تلفن همراه :</strong>
              <?php echo e($ghorfeha->ghormasmobile); ?>

          </div>
      </div>
      <div class="col-md-3 px-0">
          <div class="form-group">
              <strong>تصویر مسئول :</strong>
              <img src="/storage/app/public/image/<?php echo e($ghorfeha->ghormasphoto); ?>" class="img-thumbnail" />
          </div>
      </div>

  </div>
    <td class="align-middle"><a href="<?php echo e(route('ghorfeha.index')); ?>" class="btn btn-primary">بازگشت</a></td>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/ghorfeha/show.blade.php ENDPATH**/ ?>