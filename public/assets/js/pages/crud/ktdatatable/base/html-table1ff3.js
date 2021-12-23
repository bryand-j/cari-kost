"use strict";
// Class definition

var KTDatatableHtmlTableDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {

		var datatable = $('#kt_datatable').KTDatatable({
			data: {
				saveState: {cookie: false},
			},
			search: {
				input: $('#kt_datatable_search_query'),
				key: 'generalSearch'
			},
			rows:{
				autoHide:false
			},
			layout: {
				scroll: true,
				height: 550,
			},
			columns: [
			 	{
	                field: 'No',
	                sortable: 'asc',
	                width: 50,
	                textAlign: 'left',
            	},
            	{
	                field: 'Selesai',
	                sortable: 'asc',
	                width: 120,
	                textAlign: 'center',
            	}
      ],
			translate: {
				records: {
						processing: 'Memuat...',
						noRecords: 'Tidak Ada Data',
				},
				toolbar: {
						pagination: {
								items: {
										default: {
												first: 'Pertama',
												prev: 'Sebelumnya',
												next: 'Berikutnya',
												last: 'Terakhir',
												more: 'Lainya',
												select: 'Pilih Jumlah per halaman',
										},
										info: 'Menampilkan  {{start}} - {{end}} dari {{total}} data',
								},
						},
				},
			}
		});



        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

    };

    return {
        // Public functions
        init: function() {
            // init dmeo
            demo();
        },
    };
}();

