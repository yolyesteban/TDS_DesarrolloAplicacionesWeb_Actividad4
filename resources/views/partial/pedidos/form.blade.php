<form action="@if ($pedido->codigoPedido != null)
    /pedidos/{{$pedido->codigoPedido}}/editar
@else
    /pedidos/nuevo
@endif" method="post">

    {{csrf_field()}}

    <input type="hidden" id="codigoPedido" name="codigoPedido" value="{{$pedido->codigoPedido}}">

    <div class="row">
        <div class="col-sm-6">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" value="{{$pedido->cantidad}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="codigoProducto" class="form-label">Producto</label>
            <input type="text" class="form-control" id="codigoProducto" name="codigoProducto" placeholder="Producto" value="{{$pedido->codigoProducto}}" required="">
        </div>

        <div class="col-12">
            <label for="codigoEmpleado" class="form-label">Empleado</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="codigoEmpleado" name="codigoEmpleado" placeholder="Empleado" value="{{$pedido->codigoEmpleado}}" required="">
            </div>
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>

</form>


