<?=$this->extend("user/layout/index"); ?>

<?=$this->section("content"); ?>
<div class="container" id="kt_content_container">
  <!--begin::Row-->
  <div class="row g-5 gx-xxl-8 mb-xxl-3">
    <!--begin::Col-->
    <div class="col-xxl-4">
      <!--begin::Wrapper-->
      <div class="w-lg-600px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100" method="post" novalidate="novalidate" id="kt_sign_up_form" action="<?=base_url()?>/Profile/submit">
          <!--begin::Input group-->
          <div class="row fv-row mb-7">
            <!--begin::Col-->
            <div class="col-xl-12">
              <label class="form-label fw-bolder text-dark fs-6">Nama</label>
              <input class="form-control form-control-lg form-control-solid" value="<?=$data['nama']?>" type="text" placeholder="" name="name" autocomplete="off" />
            </div>
            <!--end::Col-->
          </div>
          <!--end::Input group-->
          <!--begin::Input group-->
          <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Email</label>
            <input class="form-control form-control-lg form-control-solid" value="<?=$data['email']?>" type="email" placeholder="" name="email" autocomplete="off" />
          </div>

          <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">No WA</label>
            <input class="form-control form-control-lg form-control-solid" value="<?=$data['telepon']?>" type="tel" placeholder="" name="no_wa" autocomplete="off"/>
          </div>

          <!--begin::Actions-->
          <div class="text-center">
            <button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
              <span class="indicator-label">Ubah Profile</span>
              <span class="indicator-progress">Please wait... 
              <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
          </div>
          <!--end::Actions-->
        </form>
        <!--end::Form-->
      </div>
      <!--end::Wrapper-->
    </div>
  </div>
</div>
<?=$this->endSection(); ?>
<?=$this->section("script"); ?>
<script src="<?=base_url()?>/user/assets/js/custom/auth/edit.js"></script>
<?=$this->endSection(); ?>
