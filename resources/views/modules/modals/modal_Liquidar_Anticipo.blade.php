<div class="modal fade modal-flex" id="abonos" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab-efectivo" role="tab">Pago en efectivo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-tarjeta" role="tab">Pago con tarjeta</a>
            </li>
            </ul>
            <div class="tab-content modal-body">
            <div class="tab-pane active" id="tab-efectivo" role="tabpanel">
    
                <form method="POST" action="">
                @csrf
    
                <div class="modal-body">
                    <div class="form-group">
                    <label for="">Monto del Abono</label>
                    <input id="my-input" name="cantidadAbono" class="form-control" type="number">
                    </div>
                </div>
    
                <input type="hidden" name="tipoPago" value="Pago en efectivo">
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
                </div>
                </form>
            </div>
    
            <div class="tab-pane" id="tab-tarjeta" role="tabpanel">
                <form method="POST" action="">
                @csrf
    
                <div class="modal-body">
                    <div class="form-group">
                    <label for="my-input">Monto del Abono</label>
                    <input id="my-input" name="cantidadAbono" class="form-control" type="number">
                    </div>
    
                    <div class="form-group">
                    <label for="my-input">Número de Autorización</label>
                    <input id="my-input" name="pinConfirmacion" class="form-control" type="text">
                    </div>
    
                    <input type="hidden" name="tipoPago" value="Pago con tarjeta">
                </div>
    
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    
    <!-- modal para liquidar -->
    
    <div class="modal fade" id="liquidacion" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-efectivo-liquidacion" role="tab">Pago en efectivo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-tarjeta-liquidacion" role="tab">Pago con tarjeta</a>
                        </li>
                    </ul>
    
                    <!-- En efectivo -->
                    <div class="tab-content modal-body">
                        <div class="tab-pane active" id="tab-efectivo-liquidacion" role="tabpanel">
                            
                            <form method="POST" action="/fiestas//liquidarFiesta">
                                @csrf
    
                                <div class="modal-body">
                                    <div class="form-group">
                                    <label for="">Liquidar fiesta</label>
                                        <input id="my-input" name="liquidacion" class="form-control" type="number">
                                    </div>
                                </div>
                                
                                <input type="hidden" name="tipoPago" value="Pago en efectivo">
    
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
                                </div>                    
                            </form>
                        </div>
                        
                        <!-- Liquidar Con tarjeta -->
                        <div class="tab-pane" id="tab-tarjeta-liquidacion" role="tabpanel">
                            <form method="POST" action="/fiestas//liquidarFiesta">
                                @csrf
    
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="my-input">Liquidar fiesta</label>
                                        <input id="my-input" name="liquidacion" class="form-control" type="number">
                                    </div>
    
                                    <div class="form-group">
                                        <label for="my-input">Número de Autorización</label>
                                        <input id="my-input" name="pinConfirmacion" class="form-control" type="text">
                                    </div>
                                
                                    <input type="hidden" name="tipoPago" value="Pago con tarjeta">
                                </div>
    
    
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Pagar</button>
                                </div>                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>