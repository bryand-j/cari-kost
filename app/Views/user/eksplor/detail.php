<?=$this->extend("user/layout/index"); ?>

<?=$this->section("content"); ?>
<style>
  .cropimg {
    width: 100%; /* width of container */
    height: 350px; /* height of container */
    object-fit: cover;
}
</style>
<div class="container" id="kt_content_container">
  <!--begin::Row-->
  <div class="row g-5 gx-xxl-8 mb-xxl-3">
    <!--begin::Col-->
    <div class="col-xxl-4">
      <!--begin::Engage Widget 1-->
      <div class="card card-xxl-stretch">
        <!--begin::Card body-->
        <div class="card-body d-flex flex-column justify-content-between h-100">
          <div class="d-flex">
            <a href="<?=base_url()?>/Eksplor" class="btn btn-icon btn-sm btn-primary rounded-circle me-4"><i class="bi bi-arrow-left fs-4"></i></a>
            <h4 class="mt-3 mb-5 text-muted">Detail <?=$title?></h4>
          </div>
          <div class="row g-5">
            <div class="col-12 col-lg-8">
              <img class="cropimg rounded" src="<?=base_url()?>/user/assets/media/stock/600x600/img-22.jpg" alt="Kost">
            </div>
            <div class="col-12 col-lg-4 border-gray-300 border-dashed rounded p-3">
              <div class="mb-5">
                <h4 class="text-black mb-7"><?=$title?></h4>
                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-2">
                  <a href="#" class="text-muted text-hover-primary pe-2">Katogory</a>
                  <div class="m-0 badge badge-light-warning"><?=$data['jenis']?></div>
                </div>
                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-2">
                  <a href="#" class="text-muted text-hover-primary pe-2">Sisa</a>
                  <div class="m-0 text-primary">
                  <?= ((float) $data['jumlah_kamar']) - ((float) $data['terisi'])?> Kamar
                  </div>
                </div>
                <div class="d-flex fw-bold fs-5 text-muted ">
                  <a href="#" class="text-muted text-hover-primary pe-2">Fasilitas</a>
                </div>
                <div class="mx-3 text-muted lh-1 mb-4">
                  <p  style="white-space: pre;"><?=$data['fasilitas']?></p>
                </div>
                <div class="d-flex flex-stack fw-bold fs-5 text-muted ">
                  <a href="#" class="text-muted text-hover-primary pe-2">Alamat</a>
                </div>
                <div class="mx-3 lh-1 text-muted mb-4">
                  <p> <i class="bi bi-geo-alt-fill"></i> <?=$data['alamat']?></p>
                </div>
                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                  <a href="#" class="text-muted text-hover-primary pe-2">Harga</a>
                  <div class="m-0 fs-2 text-success"><?=rupiah($data['harga'])?> <small>/bulan</small></div>
                </div>
                <div class="d-flex  fw-bold fs-5 mt-10 justify-content-center">
                  <a href="https://wa.me/<?=$pemilik['no_wa']?>?text=Hallo, Saya ingin Bertanya Tentang Kost <?=$title?>" target="blank" class="btn btn-success me-3"><i class="bi bi-whatsapp fs-4 me-2"></i>Whatsapp</a>
                  <a href="mailto:<?=$pemilik['email']?>" class="btn btn-secondary" target="blank"><i class="bi bi-envelope fs-4 me-2"></i>Email</a>
                </div> 
              </div>
            </div>

          </div>
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

<?=$this->endSection(); ?>
