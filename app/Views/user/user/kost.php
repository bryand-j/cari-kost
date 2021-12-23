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
        <div class="card-body d-flex flex-column justify-content-between h-100 p-0 rounded-circle">
          <iframe  src="<?=base_url()?>/ManageKost" frameborder="0" onload="resizeIframe(this)" width="100%"></iframe>
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

<script>
  function resizeIframe(obj) {

    setInterval(() => {
      obj.style.height = (obj.contentWindow.document.documentElement.scrollHeight) + 'px';
    }, 100);
  }
</script>
<?=$this->endSection(); ?>
