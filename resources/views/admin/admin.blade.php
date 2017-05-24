@include('partials/admin/header')

<div class="hidden-sm hidden-xs" style="height:20vh;"></div>

<div class="container-fluid">
	
	<div class="row">
        <div class="col-md-3 text-center hidden-sm hidden-xs"></div>
		<div class="col-md-3 text-center">
			<i class="fa fa-user-circle-o fa-5x img-rounded" aria-hidden="true"></i>
			<h3>
				Estudiantes
			</h3>
		</div>
		<div class="col-md-3 text-center">
			<i class="fa fa-database fa-5x img-rounded" aria-hidden="true"></i>
			<h3>
				Documentos
			</h3>
		</div>
        <div class="col-md-3 text-center hidden-sm hidden-xs"></div>
	</div>
    <div style="height:5vh;"></div>
	<div class="row">
        <div class="col-md-3 text-center hidden-sm hidden-xs"></div>
		<div class="col-md-3 text-center">
			<i class="fa fa-credit-card fa-5x img-rounded" aria-hidden="true"></i>
			<h3>
				Pagos
			</h3>
		</div>
		<div class="col-md-3 text-center">
			<i class="fa fa-gears fa-5x img-rounded" aria-hidden="true"></i>
			<h3>
				Reportes
			</h3>
		</div>
        <div class="col-md-3 text-center hidden-sm hidden-xs"></div>
	</div>
</div>


@include('partials/admin/footer')