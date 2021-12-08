<?=$this->extend("user/layout/index"); ?>

<?=$this->section("content"); ?>
<div class="container" id="kt_content_container">
  <!--begin::Row-->
  <div class="row g-5 gx-xxl-8 mb-xxl-3">
    <!--begin::Col-->
    <div class="col-xxl-4">
      <!--begin::Engage Widget 1-->
      <div class="card card-xxl-stretch">
        <!--begin::Card body-->
        <div class="card-body d-flex flex-column justify-content-between h-100">
          <!--begin::Section-->
          <div class="pt-12">
            <!--begin::Title-->
            <div class="text-center fs-1 line-height-lg"><span class="fw-boldest">Selamat Datang </span><span>👏</span></div>
            <!--end::Title-->
            <!--begin::Text-->
            <div class="text-center text-gray-600 fs-5 fw-bold pt-4"></div>
            <!--end::Text-->
            <div class="my-5 flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom h-250px" style="background-image:url('<?=base_url()?>/user/assets/media/illustrations/run.png')"></div>

            <!--begin::Action-->
            <div class="text-center py-7 mb-10">
              <a href="<?=base_url()?>/Eksplor" class="btn btn-primary fs-6 px-6">Eksplor Tempat Kost</a>
            </div>
            <!--end::Action-->
          </div>
          <!--end::Section-->
          <!--begin::Image-->
          <!--end::Image-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end::Engage Widget 1-->
    </div>
    <!--end::Col-->
  </div>
  <!--end::Row-->
</div>
<?=$this->endSection(); ?>
<?=$this->section("script"); ?>

<script src="">
  // ini script
  alert('ok');
</script>
<?=$this->endSection(); ?>
