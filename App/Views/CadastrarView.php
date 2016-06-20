@layout('layout/SimpleView')
@section('interior')
        <div class="container-fluid">
		    <div class="panel panel-success" id="cadastrado">
		        <div class="panel-body">{{mensagem}}</div>
		    </div>
		</div>
		<script>
		    window.setTimeout(function () {
		        window.location.href = '../{{modulo}}';
		    }, 800);
		</script>
@endsection