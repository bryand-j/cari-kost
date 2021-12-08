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
          <!--begin::Input wrapper-->
          <div class=" position-relative">
              <!--begin::Input-->
              <input type="search" class="form-control form-control-solid form-control-lg " placeholder="Cari" name="Cari Kost"/>
              <!--end::Input-->

              <!--begin::CVV icon-->
              <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                  <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                  <span class="svg-icon svg-icon-2hx">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"/>
                      <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"/>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
              </div>
              <!--end::CVV icon-->
          </div>
          <!--end::Input wrapper-->

          <h4 class="mt-10 mb-5 text-muted">Favorit Saya</h4>
          <div class="row g-5">
            <?php 
            if(!$data){
              echo '<h4 class="text-center text-muted">Anda Belum Ada Favorit</h4>';
            }
            foreach ($data as $kost) :?>
            <div class="mb-5 col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-bordered card-flush card-stretch my-card" style="background-image:url('<?=base_url()?>/user/assets/media/stock/600x600/img-22.jpg')">
                <div class="card-header mb-n10">
                    <h3 class="card-title"></h3>
                    <div class="card-toolbar me-n8 mt-n6 ">
                      <?=isfav('1',$kost['id'])?>
                    </div>
                </div>
                <a href="<?=base_url()?>/Eksplor?detail=<?=$kost['id']?>" class="card-body h-150px"></a>
                
                <div class="card-footer pb-3 px-3 ">
                
                  <h5 class="lh-0 w-100 text-white"><?=$kost['nama']?> <small class="float-end badge badge-warning"><?=$kost['jenis']?></small></h5>
                  <small class="lh-1"><i class="bi bi-geo-alt-fill text-white"></i> <?=$kost['alamat']?></small>
                  <div class="mt-3 text-primary fs-6 fw-bold"><?=rupiah($kost['harga'])?> <small>/bulan</small> <small class="fs-8 float-end text-white fw-normal ">Sisa <?= ((float) $kost['jumlah_kamar']) - ((float) $kost['terisi'])?> Kmr</small></div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
            
            
            
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

<script src="">
  // ini script
  alert('ok');
</script>
<?=$this->endSection(); ?>
