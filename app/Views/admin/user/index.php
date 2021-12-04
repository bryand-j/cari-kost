<?=$this->extend("admin/layout"); ?>

<?=$this->section("content"); ?>

<?=view('admin/user/subheader'); ?>

<div class="d-flex flex-column-fluid">
  <div class="container-fluid" >

    <!--begin::Row-->
    <div class="row">
      <div class="card card-custom gutter-b col-12">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
          <div class="card-title">
            <h3 class="card-label">Tabel Data <?=$title ?> 
            </h3>
          </div>
        </div>
        <div class="card-body">
          <!--begin: Datatable-->
          <div class="row align-items-center">
						<div class="col-lg-9 col-xl-8">
							<div class="row align-items-center">
								<div class="col-md-4 my-2 my-md-0">
									<div class="input-icon">
										<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
										<span>
											<i class="flaticon2-search-1 text-muted"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div id="dt-table"></div>
          
        </div>
        <!-- end:: card body-->

      </div>
      <!-- end:: card -->
    
    
    </div>
    <!--end::Row-->

  </div>
  <!--end::Container-->

</div>

<div id="modal-place">
	<div class="modal fade" id="bry-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true" >
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" id="isi" >
				
			</div>
		</div>
	</div>
</div>


<!--end::Entry-->
<?= view("admin/partials/_script") ?>
<?= view("admin/partials/_utils/crud") ?>
<script>
const tb_url='/admin/User/table';

//tampil tabel

getTable(tb_url);

// tampil form add

  $("#add-new").click( function(e) {
		
  	Crud.getHtml('/admin/User/formAdd',(result)=> {
			$('#isi').html(result);
  		$("#bry-modal").modal("show");
	  	$('#toggle').click(function(event) {
				if ($('#password').attr('type') =='password') {
					$('#password').attr('type', 'text');
				} 
				else {
					$('#password').attr('type', 'password');
				}
				$('.fa-eye , .fa-eye-slash').toggleClass('d-none');
			});
		
  		// tambah data
  		$('#isi #add-form').submit(function(event) {
				const btn = KTUtil.getById("kt_btn_1");
				event.preventDefault();
				KTUtil.btnWait(btn);
				
				Crud.post('/admin/User/save',new FormData(this),(result)=>{
					Dialog.toast(result.type,result.message);
					KTUtil.btnRelease(btn);
					$("#bry-modal").modal("hide");
					getTable(tb_url);
				})
			});
	  });	
  });


// hapus dataPaket

function hapus(id) {
	del('/admin/User/delete',id,()=>{
		getTable(tb_url);
	})
}

// tampil form edit
function formEdit(id) {
	Crud.getHtml('/admin/User/formEdit/'+id,(result)=> {
		$('#isi').html(result);
  	$("#bry-modal").modal("show");
  	$('#toggle').click(function(event) {
		if ($('#passworde').attr('type') =='password') {
			$('#passworde').attr('type', 'text');
		} 
		else {
			$('#passworde').attr('type', 'password');
		}
		$('.fa-eye , .fa-eye-slash').toggleClass('d-none');

	});

  	//update data
  	$('#isi #edit-form').submit(function(event) {
				const btn = KTUtil.getById("kt_btn_1");
				event.preventDefault();
				KTUtil.btnWait(btn);
				
				Crud.post('/admin/User/update',new FormData(this),(result)=>{
					Dialog.toast(result.type,result.message);
					KTUtil.btnRelease(btn);
					$("#bry-modal").modal("hide");
					getTable(tb_url);
				})
			});
  });
}

</script>

<?=$this->endSection(); ?>