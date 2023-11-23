<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', __('models/typeHandicaps.fields.nom').':') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required', 'maxlength' => 191, 'maxlength' => 191]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/typeHandicaps.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>