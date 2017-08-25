<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{ trans('general.supplier') }}</h4>
        </div>
        <div class="modal-body">
            <div class="dynamic-form-row">
                <div class="col-md-4 col-xs-12"><label for="modal-name">{{ trans('general.name') }}:
                    </label></div>
                <div class="col-md-8 col-xs-12 required"><input type='text' id='modal-name' class="form-control"></div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.cancel') }}</button>
            <button type="button" class="btn btn-primary" id="modal-save">{{ trans('general.save') }}</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
