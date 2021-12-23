<?=$this->extend("admin/layout"); ?>

<?=$this->section("content"); ?>

<?=view('admin/kost/subheader'); ?>

<div class="d-flex flex-column-fluid">
  <div class="container-fluid" >
	<div class="dropdown my-drop" style="position: absolute;">
		<button class="btn btn-secondary dropdown-toggle d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Dropdown button
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#" onclick="ubah()">Ubah</a>
				<a class="dropdown-item" href="#" onclick="hapuss()">Hapus</a>
		</div>
	</div>

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
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content" id="isi" >
				<div class="modal-body row justify-content-center align-items-center" style="height: 500px; overflow: auto;">
					<h5 class="mr-2">Memuat... </h5>
					<div class="spinner spinner-primary "> </div>
					
				</div>
			</div>
		</div>
	</div>
</div>


<!--end::Entry-->

<script>
const tb_url='<?=$base?>/table';
let idd=0;

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

function addImg(id) {
	Crud.getHtml('<?=$base?>/formUpload/'+id,(result)=> {
		$('#isi').html(result);
	});
}

 function coba (e ,id) {
	// that.preventDefault();
	console.log(e)
	e.preventDefault()
	$(".my-drop")
	.css({
      top: e.clientY,
      left: e.clientX
    });
	$(".my-drop .dropdown-toggle").dropdown('show')

		idd=id

 }

 function ubah() {
	formEdit(idd)
 }


</script>


<?=$this->endSection(); ?>