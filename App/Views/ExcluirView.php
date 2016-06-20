@layout('layout/SimpleView')
@section('interior')
<div class="container-fluid">
    <div class="panel panel-danger" id="cadastrado">
        <div class="panel-body">{{id}} deletado com Sucesso</div>
    </div>
</div>
<script>
    window.setTimeout(function () {
        window.location.href = '../financeiro';
    }, 800);
</script>
@endsection