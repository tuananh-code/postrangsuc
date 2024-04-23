<div class="modal-dialog" role="document">
    <div class="modal-content">

        {!! Form::open([
            'url' => action('TaxonomyController@update', [$category->id]),
            'method' => 'PUT',
            'id' => 'category_edit_form',
            'files' => true
        ]) !!}

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">@lang('messages.edit')</h4>
        </div>

        <div class="modal-body">
            @php
                $name_label = !empty($module_category_data['taxonomy_label']) ? $module_category_data['taxonomy_label'] : __('category.category_name');
                $cat_code_enabled = isset($module_category_data['enable_taxonomy_code']) && !$module_category_data['enable_taxonomy_code'] ? false : true;
                
                $cat_code_label = !empty($module_category_data['taxonomy_code_label']) ? $module_category_data['taxonomy_code_label'] : __('category.code');
                
                $enable_sub_category = isset($module_category_data['enable_sub_taxonomy']) && !$module_category_data['enable_sub_taxonomy'] ? false : true;
                
                $category_code_help_text = !empty($module_category_data['taxonomy_code_help_text']) ? $module_category_data['taxonomy_code_help_text'] : __('lang_v1.category_code_help');
            @endphp
            <div class="form-group">
                {!! Form::label('name', $name_label . ':*') !!}
                {!! Form::text('name', $category->name, ['class' => 'form-control', 'required', 'placeholder' => $name_label]) !!}
            </div>
            @if ($cat_code_enabled)
                <div class="form-group">
                    {!! Form::label('short_code', $cat_code_label . ':') !!}
                    {!! Form::text('short_code', $category->short_code, [
                        'class' => 'form-control',
                        'placeholder' => $cat_code_label,
                    ]) !!}
                    <p class="help-block">{!! $category_code_help_text !!}</p>
                </div>
            @endif
            <div class="form-group">
                {!! Form::label('description', ('Hình ảnh danh mục') . ':') !!}
                {!! Form::file('description', [
                    'class' => 'form-control',
                    'accept' => 'image/*',
                    'id' => 'updateImg'
                ]) !!}
                <small>
                    <p class="help-block">@lang('purchase.max_file_size', ['size' => config('constants.document_size_limit') / 1000000]) <br> @lang('lang_v1.aspect_ratio_should_be_1_1')</p>
                </small>
            </div>
            {{-- <div class="form-group">
                {!! Form::label('image', __('Hình ảnh danh mục') . ':') !!}
                {!! Form::file('image', ['id' => 'upload_image', 'accept' => 'image/*']) !!}
                <small>
                    <p class="help-block">@lang('purchase.max_file_size', ['size' => config('constants.document_size_limit') / 1000000]) <br> @lang('lang_v1.aspect_ratio_should_be_1_1')</p>
                </small>
            </div> --}}
            @if (!empty($parent_categories) && $enable_sub_category)
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('add_as_sub_cat', 1, !$is_parent, [
                                'class' => 'toggler',
                                'data-toggle_id' => 'parent_cat_div',
                            ]) !!} @lang('lang_v1.add_as_sub_txonomy')
                        </label>
                    </div>
                </div>
                <div class="form-group @if ($is_parent) {{ 'hide' }} @endif"
                    id="parent_cat_div">
                    {!! Form::label('parent_id', __('lang_v1.select_parent_taxonomy') . ':') !!}
                    {!! Form::select('parent_id', $parent_categories, $selected_parent, ['class' => 'form-control']) !!}
                </div>
            @endif
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">@lang('messages.update')</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('messages.close')</button>
        </div>

        {!! Form::close() !!}

    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
