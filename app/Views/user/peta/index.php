<?=$this->extend("user/layout/index"); ?>

<?=$this->section("content"); ?>
<script src="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css" rel="stylesheet" />
<div class="container" id="kt_content_container">
  <!--begin::Row-->
  <div class="row g-5 gx-xxl-8 mb-xxl-3">
    <!--begin::Col-->
    <div class="col-xxl-4">
      <!--begin::Engage Widget 1-->
      <div class="card card-xxl-stretch">
        <!--begin::Card body-->
        <div class="card-body d-flex flex-column justify-content-between h-100">
          <div id='map' class="bg-secondary h-500px rounded"></div>
        </div>
        <!--end::Card body-->
      </div>
      <!--end::Engage Widget 1-->
    </div>
    <!--end::Col-->
  </div>
  <!--end::Row-->
  <script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiYnJ5YW5kLWoiLCJhIjoiY2t3cWJ6eHJ1MDMyZzJvcXExYmsyZm5kcSJ9.ChrYMZ7CHCDoJJT_Nzq5sQ';
  const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [128.17857791224313,-3.69565986030121], // starting position [lng, lat]
    zoom: 15 // starting zoom
  });
  // Create a new marker.
    const marker = new mapboxgl.Marker({
    })
    .setLngLat([128.17857791224313,-3.69565986030121])
    .setPopup(new mapboxgl.Popup().setHTML("<h6>Kampus</h6>"))
    .addTo(map);
    marker.togglePopup();
</script>
</div>
<?=$this->endSection(); ?>
<?=$this->section("script"); ?>


<?=$this->endSection(); ?>
