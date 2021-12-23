<?=$this->extend("user/layout/index"); ?>

<?=$this->section("content"); ?>
<div class="container" id="kt_content_container">
  <!--begin::Row-->
  <div class="row g-5 gx-xxl-8 mb-xxl-3">
    <!--begin::Col-->
    <div class="col-xxl-4">

      <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
          <!--begin::Details-->
          <?php if (session()->getFlashdata('error')):?>
          <div class="alert alert-dismissible bg-light-danger border border-danger d-flex flex-column flex-sm-row p-5 mb-10">
              <!--begin::Icon-->
              <span class="svg-icon svg-icon-2hx svg-icon-danger me-4 mb-5 mb-sm-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"></rect>
                    <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000"></path>
                    <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"></circle>
                  </g>
                </svg>
              </span>
              <!--end::Icon-->

              <!--begin::Wrapper-->
              <div class="d-flex flex-column pe-0 pe-sm-10">
                  <!--begin::Title-->
                  <h5 class="mb-1">Gagal</h5>
                  <!--end::Title-->
                  <!--begin::Content-->
                  <span><?=session()->getFlashdata('error')?></span>
                  <!--end::Content-->
              </div>
              <!--end::Wrapper-->

              <!--begin::Close-->
              <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                  <i class="bi bi-x fs-1 text-danger"></i>
              </button>
              <!--end::Close-->
          </div>
          <?php endif;?>
          <?php if (session()->getFlashdata('success')):?>
          <div class="alert alert-dismissible bg-light-success border border-success d-flex flex-column flex-sm-row p-5 mb-10">
              <!--begin::Icon-->
              <span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"></rect>
                    <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000"></path>
                    <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"></circle>
                  </g>
                </svg>
              </span>
              <!--end::Icon-->

              <!--begin::Wrapper-->
              <div class="d-flex flex-column pe-0 pe-sm-10">
                  <!--begin::Title-->
                  <h5 class="mb-1">Berhasil</h5>
                  <!--end::Title-->
                  <!--begin::Content-->
                  <span><?=session()->getFlashdata('success')?></span>
                  <!--end::Content-->
              </div>
              <!--end::Wrapper-->

              <!--begin::Close-->
              <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                  <i class="bi bi-x fs-1 text-success"></i>
              </button>
              <!--end::Close-->
          </div>
          <?php endif;?>
          <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
              <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                <img src="<?=base_url()?>/user/assets/media/avatars/avatar.svg" alt="image">
                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
              </div>
            </div>
            <!--end::Pic-->
            <!--begin::Info-->
            <div class="flex-grow-1">
              <!--begin::Title-->
              <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                <!--begin::User-->
                <div class="d-flex flex-column">
                  <!--begin::Name-->
                  <div class="d-flex align-items-center mb-2">
                    <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1"><?=$user['nama']?></a>
                    <?php if ($isPemilik) :?>
                      <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3">Pemilik Kost</a>
                      <?php endif ;?>
                  </div>
                  <!--end::Name-->
                  <!--begin::Info-->
                  <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                      <i class="bi bi-whatsapp fs-4 me-2"></i><?=$user['telepon']?>
                    </a>
                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                      <i class="bi bi-envelope fs-4 me-2"></i><?=$user['email']?>
                    </a>
                  </div>
                  <!--end::Info-->
                </div>
                <!--end::User-->
                
                <!--begin::Actions-->
                <div class="d-flex my-2">
                  <?php if (!$isPemilik) :?>
                  <a href="#" class="btn btn-primary me-3" id="kt_user_follow_button">
                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Double-check.svg-->
                    <span class="svg-icon svg-icon-3 d-none">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24"></polygon>
                          <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002)"></path>
                          <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002)"></path>
                        </g>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--begin::Indicator-->
                    <span class="indicator-label">Jadi Pemilik Kost</span>
                    <span class="indicator-progress">Mohon Tunggu...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator-->
                  </a>
                  <?php else :?>
                    <a href="<?=base_url()?>/ManageKost" target="blank" class="btn btn-success me-3">
                    <span class="svg-icon svg-icon-3 ">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24"></polygon>
                          <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002)"></path>
                          <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002)"></path>
                        </g>
                      </svg>
                    </span>  
                    Manage Kost</a>
                  <?php endif ;?>
                  <!--begin::Menu-->
                  <div class="me-0">
                    <button class="btn btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                      <i class="bi bi-three-dots fs-3"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                      <!--begin::Heading-->
                      <div class="menu-item px-3">
                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Pengaturan</div>
                      </div>
                      <!--end::Heading-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="<?=base_url()?>/Profile/edit" class="menu-link px-3">Ubah Profile</a>
                      </div>
                      <!--end::Menu item-->
                      <div class="separator my-2"></div>

                      <!--begin::Menu item-->
                      <div class="menu-item px-3 my-1">
                        <a href="<?=base_url()?>/Auth/out" class="menu-link px-3 text-danger">Log Out</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                  </div>
                  <!--end::Menu-->
                </div>
                <!--end::Actions-->
                
              </div>
              <!--end::Title-->
              <!--begin::Stats-->
              <div class="d-flex flex-wrap flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-grow-1 pe-8">
                  <!--begin::Stats-->
                  <div class="d-flex flex-wrap">
                    <?php if ($isPemilik) :?>
                    <!--begin::Stat-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                      <!--begin::Number-->
                      <div class="d-flex align-items-center">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-up.svg-->
                        <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24"></polygon>
                              <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1"></rect>
                              <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$"><?=$jumlah_kost?> Unit</div>
                      </div>
                      <!--end::Number-->
                      <!--begin::Label-->
                      <div class="fw-bold fs-6 text-gray-400">Jumlah Kost</div>
                      <!--end::Label-->
                    </div>
                    <!--end::Stat-->
                    <?php endif ;?>
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Stats-->
            </div>
            <!--end::Info-->
          </div>
          <!--end::Details-->

        </div>
      </div>
    </div>
  </div>
</div>
<?=$this->endSection(); ?>
<?=$this->section("script"); ?>
<script>
      // Follow button
      var initUserFollowButton = function() {
        var follow = document.querySelector('#kt_user_follow_button');

        if (follow) {
            follow.addEventListener('click', function(e){
                // Prevent default action 
                
                
                // Show indicator
                follow.setAttribute('data-kt-indicator', 'on');
                
                // Disable button to avoid multiple click 
				follow.disabled = true;

               
                jadiPemilk()
                setTimeout(function() {
                  follow.removeAttribute('data-kt-indicator');
                  follow.classList.add("btn-success");
                  follow.classList.remove("btn-light");
                  follow.querySelector(".svg-icon").classList.remove("d-none");
                  follow.querySelector(".indicator-label").innerHTML = 'Manage Kost';
                  follow.disabled = false;
                  follow.setAttribute('href', '<?=base_url()?>/Admin/Kost');
                  window.location.reload()
              }, 1000);   
                      
            });
        }                 
    }

function jadiPemilk() {

  $.ajax({
      url: '<?=base_url()?>/Profile/set',
      type: 'GET',
      dataType:'json',
      data: {id:1}
    })
    .done(function (res) {
      window.location.reload()
    })
    .fail(function(res) {
      console.log(res);
  })
}
</script>
<?=$this->endSection(); ?>
