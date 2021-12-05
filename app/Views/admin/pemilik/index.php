<?=$this->extend("admin/layout"); ?>

<?=$this->section("content"); ?>

<?=view('admin/kost/subheader'); ?>

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
<?= view("admin/partials/_script") ?>
<?= view("admin/partials/_utils/crud") ?>
<div id="modal-place">
	<div class="modal fade" id="bry-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true" >
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" id="isi" >
				
			</div>
		</div>
	</div>
</div>


<!--end::Entry-->

<script>
const tb_url='<?=$base?>/table';

//tampil tabel

getTable(tb_url);

// tampil form add

$("#add-new").click( function(e) {
	
	Crud.getHtml('<?=$base?>/formAdd',(result)=> {
		$('#isi').html(result);
		// tambah data
	});	
});


// hapus dataPaket

function hapus(id) {
	del('<?=$base?>/delete',id,()=>{
		getTable(tb_url);
	})
}

// tampil form edit
function formEdit(id) {
	Crud.getHtml('<?=$base?>/formEdit/'+id,(result)=> {
		$('#isi').html(result);
	});
  	
}

</script>

<?=$this->endSection(); ?>