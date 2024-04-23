@extends('layouts.app')
@section('title', __('buysell.add_buy_sell'))

@section('content')

@php
$custom_labels = json_decode(session('business.custom_labels'), true);
@endphp
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>@lang('buysell.add_buy_sell') <i class="fa fa-keyboard-o hover-q text-muted" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="bottom" data-content="@include('purchase.partials.keyboard_shortcuts_details')" data-html="true" data-trigger="hover" data-original-title="" title=""></i></h1>
</section>

<!-- Main content -->
<section class="content">
	@if(count($business_locations) > 0)
	<div class="row">
		<div class="col-sm-3">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-map-marker"></i>
					</span>
					{!! Form::select('select_location_id', $business_locations, $default_location->id ?? null, ['class' => 'form-control input-sm',
					'id' => 'select_location_id',
					'required', 'autofocus'], $bl_attributes); !!}
					<span class="input-group-addon">
						@show_tooltip(__('tooltip.sale_location'))
					</span>
				</div>
			</div>
		</div>
	</div>
	@endif

	<!-- Page level currency setting -->
	<input type="hidden" id="p_code" value="{{$currency_details->code}}">
	<input type="hidden" id="p_symbol" value="{{$currency_details->symbol}}">
	<input type="hidden" id="p_thousand" value="{{$currency_details->thousand_separator}}">
	<input type="hidden" id="p_decimal" value="{{$currency_details->decimal_separator}}">

	@include('layouts.partials.error')
	<input type="hidden" id="item_addition_method" value="{{$business_details->item_addition_method}}">
	{!! Form::open(['url' => action('BuySellPosController@store'), 'method' => 'post', 'id' => 'add_buy_sell_form', 'files' => true ]) !!}


	<!-- Add contact and location -->

	@component('components.widget', ['class' => 'box-solid'])
	{!! Form::hidden('location_id', !empty($default_location) ? $default_location->id : null , ['id' => 'location_id', 'data-receipt_printer_type' => !empty($default_location->receipt_printer_type) ? $default_location->receipt_printer_type : 'browser', 'data-default_payment_accounts' => !empty($default_location) ? $default_location->default_payment_accounts : '']); !!}

	@if(!empty($price_groups))
	@if(count($price_groups) > 1)

	<div class="col-sm-4">
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fas fa-money-bill-alt"></i>
				</span>
				@php
				reset($price_groups);
				@endphp
				{!! Form::hidden('hidden_price_group', key($price_groups), ['id' => 'hidden_price_group']) !!}
				{!! Form::select('price_group', $price_groups, null, ['class' => 'form-control select2', 'id' => 'price_group']); !!}
				<span class="input-group-addon">
					@show_tooltip(__('lang_v1.price_group_help_text'))
				</span>
			</div>
		</div>
	</div>

	@else
	@php
	reset($price_groups);
	@endphp
	{!! Form::hidden('price_group', key($price_groups), ['id' => 'price_group']) !!}
	@endif
	@endif

	{!! Form::hidden('default_price_group', null, ['id' => 'default_price_group']) !!}

	@if(in_array('types_of_service', $enabled_modules) && !empty($types_of_service))
	<div class="col-md-4 col-sm-6">
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-external-link-square-alt text-primary service_modal_btn"></i>
				</span>
				{!! Form::select('types_of_service_id', $types_of_service, null, ['class' => 'form-control', 'id' => 'types_of_service_id', 'style' => 'width: 100%;', 'placeholder' => __('lang_v1.select_types_of_service')]); !!}

				{!! Form::hidden('types_of_service_price_group', null, ['id' => 'types_of_service_price_group']) !!}

				<span class="input-group-addon">
					@show_tooltip(__('lang_v1.types_of_service_help'))
				</span>
			</div>
			<small>
				<p class="help-block hide" id="price_group_text">@lang('lang_v1.price_group'): <span></span></p>
			</small>
		</div>
	</div>
	<div class="modal fade types_of_service_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"></div>
	@endif

	@if(in_array('subscription', $enabled_modules))
	<div class="col-md-4 pull-right col-sm-6">
		<div class="checkbox">
			<label>
				{!! Form::checkbox('is_recurring', 1, false, ['class' => 'input-icheck', 'id' => 'is_recurring']); !!} @lang('lang_v1.subscribe')?
			</label><button type="button" data-toggle="modal" data-target="#recurringInvoiceModal" class="btn btn-link"><i class="fa fa-external-link"></i></button>@show_tooltip(__('lang_v1.recurring_invoice_help'))
		</div>
	</div>
	@endif
	<div class="clearfix"></div>
	<div class="@if(!empty($commission_agent)) col-sm-3 @else col-sm-4 @endif">
		<div class="form-group">
			{!! Form::label('contact_id', __('contact.customer') . ':*') !!}
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-user"></i>
				</span>
				<input type="hidden" id="default_customer_id" value="{{ $walk_in_customer['id']}}">
				<input type="hidden" id="default_customer_name" value="{{ $walk_in_customer['name']}}">
				<input type="hidden" id="default_customer_balance" value="{{ $walk_in_customer['balance'] ?? ''}}">
				<input type="hidden" id="default_customer_address" value="{{ $walk_in_customer['shipping_address'] ?? ''}}">
				@if(!empty($walk_in_customer['price_calculation_type']) && $walk_in_customer['price_calculation_type'] == 'selling_price_group')
				<input type="hidden" id="default_selling_price_group" value="{{ $walk_in_customer['selling_price_group_id'] ?? ''}}">
				@endif
				{!! Form::select('contact_id',
				[], null, ['class' => 'form-control mousetrap', 'id' => 'customer_id', 'placeholder' => 'Enter Customer name / phone', 'required']); !!}
				<span class="input-group-btn">
					<button type="button" class="btn btn-default bg-white btn-flat add_new_customer" data-name=""><i class="fa fa-plus-circle text-primary fa-lg"></i></button>
				</span>
			</div>
		</div>
		<small>
			<strong>
				@lang('lang_v1.billing_address'):
			</strong>
			<div id="billing_address_div">
				{!! $walk_in_customer['contact_address'] ?? '' !!}
			</div>
			<br>
			<strong>
				@lang('lang_v1.shipping_address'):
			</strong>
			<div id="shipping_address_div">
				{{$walk_in_customer['supplier_business_name'] ?? ''}},<br>
				{{$walk_in_customer['name'] ?? ''}},<br>
				{{$walk_in_customer['shipping_address'] ?? ''}}
			</div>
		</small>
	</div>

	<div class="col-md-3">
		<div class="form-group">
			<div class="multi-input">
				{!! Form::label('pay_term_number', __('contact.pay_term') . ':') !!} @show_tooltip(__('tooltip.pay_term'))
				<br />
				{!! Form::number('pay_term_number', $walk_in_customer['pay_term_number'], ['class' => 'form-control width-40 pull-left', 'placeholder' => __('contact.pay_term')]); !!}

				{!! Form::select('pay_term_type',
				['months' => __('lang_v1.months'),
				'days' => __('lang_v1.days')],
				$walk_in_customer['pay_term_type'],
				['class' => 'form-control width-60 pull-left','placeholder' => __('messages.please_select')]); !!}
			</div>
		</div>
	</div>

	@if(!empty($commission_agent))
	<div class="col-sm-3">
		<div class="form-group">
			{!! Form::label('commission_agent', __('lang_v1.commission_agent') . ':') !!}
			{!! Form::select('commission_agent',
			$commission_agent, null, ['class' => 'form-control select2']); !!}
		</div>
	</div>
	@endif
	<div class="@if(!empty($commission_agent)) col-sm-3 @else col-sm-4 @endif">
		<div class="form-group">
			{!! Form::label('transaction_date', __('sale.sale_date') . ':*') !!}
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</span>
				{!! Form::text('transaction_date', $default_datetime, ['class' => 'form-control', 'readonly', 'required']); !!}
			</div>
		</div>
	</div>
	@if(!empty($status))
	<input type="hidden" name="status" id="status" value="{{$status}}">
	@else
	<div class="@if(!empty($commission_agent)) col-sm-3 @else col-sm-4 @endif">
		<div class="form-group">
			{!! Form::label('status', __('sale.status') . ':*') !!}
			{!! Form::select('status', $statuses, null, ['class' => 'form-control select2', 'required']); !!}
		</div>
	</div>
	@endif
	@if($sale_type != 'sales_order')
	<div class="col-sm-3">
		<div class="form-group">
			{!! Form::label('invoice_scheme_id', __('invoice.invoice_scheme') . ':') !!}
			{!! Form::select('invoice_scheme_id', $invoice_schemes, $default_invoice_schemes->id, ['class' => 'form-control select2', 'placeholder' => __('messages.please_select')]); !!}
		</div>
	</div>
	@endif
	@can('edit_invoice_number')
	<div class="col-sm-3">
		<div class="form-group">
			{!! Form::label('invoice_no', $sale_type == 'sales_order' ? __('restaurant.order_no') : __('sale.invoice_no') . ':') !!}
			{!! Form::text('invoice_no', null, ['class' => 'form-control', 'placeholder' => $sale_type == 'sales_order' ? __('restaurant.order_no') : __('sale.invoice_no')]); !!}
			<p class="help-block">@lang('lang_v1.keep_blank_to_autogenerate')</p>
		</div>
	</div>
	@endcan

	@php
	$custom_field_1_label = !empty($custom_labels['sell']['custom_field_1']) ? $custom_labels['sell']['custom_field_1'] : '';

	$is_custom_field_1_required = !empty($custom_labels['sell']['is_custom_field_1_required']) && $custom_labels['sell']['is_custom_field_1_required'] == 1 ? true : false;

	$custom_field_2_label = !empty($custom_labels['sell']['custom_field_2']) ? $custom_labels['sell']['custom_field_2'] : '';

	$is_custom_field_2_required = !empty($custom_labels['sell']['is_custom_field_2_required']) && $custom_labels['sell']['is_custom_field_2_required'] == 1 ? true : false;

	$custom_field_3_label = !empty($custom_labels['sell']['custom_field_3']) ? $custom_labels['sell']['custom_field_3'] : '';

	$is_custom_field_3_required = !empty($custom_labels['sell']['is_custom_field_3_required']) && $custom_labels['sell']['is_custom_field_3_required'] == 1 ? true : false;

	$custom_field_4_label = !empty($custom_labels['sell']['custom_field_4']) ? $custom_labels['sell']['custom_field_4'] : '';

	$is_custom_field_4_required = !empty($custom_labels['sell']['is_custom_field_4_required']) && $custom_labels['sell']['is_custom_field_4_required'] == 1 ? true : false;
	@endphp
	@if(!empty($custom_field_1_label))
	@php
	$label_1 = $custom_field_1_label . ':';
	if($is_custom_field_1_required) {
	$label_1 .= '*';
	}
	@endphp

	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('custom_field_1', $label_1 ) !!}
			{!! Form::text('custom_field_1', null, ['class' => 'form-control','placeholder' => $custom_field_1_label, 'required' => $is_custom_field_1_required]); !!}
		</div>
	</div>
	@endif
	@if(!empty($custom_field_2_label))
	@php
	$label_2 = $custom_field_2_label . ':';
	if($is_custom_field_2_required) {
	$label_2 .= '*';
	}
	@endphp

	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('custom_field_2', $label_2 ) !!}
			{!! Form::text('custom_field_2', null, ['class' => 'form-control','placeholder' => $custom_field_2_label, 'required' => $is_custom_field_2_required]); !!}
		</div>
	</div>
	@endif
	@if(!empty($custom_field_3_label))
	@php
	$label_3 = $custom_field_3_label . ':';
	if($is_custom_field_3_required) {
	$label_3 .= '*';
	}
	@endphp

	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('custom_field_3', $label_3 ) !!}
			{!! Form::text('custom_field_3', null, ['class' => 'form-control','placeholder' => $custom_field_3_label, 'required' => $is_custom_field_3_required]); !!}
		</div>
	</div>
	@endif
	@if(!empty($custom_field_4_label))
	@php
	$label_4 = $custom_field_4_label . ':';
	if($is_custom_field_4_required) {
	$label_4 .= '*';
	}
	@endphp

	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('custom_field_4', $label_4 ) !!}
			{!! Form::text('custom_field_4', null, ['class' => 'form-control','placeholder' => $custom_field_4_label, 'required' => $is_custom_field_4_required]); !!}
		</div>
	</div>
	@endif
	<div class="col-sm-3">
		<div class="form-group">
			{!! Form::label('upload_document', __('purchase.attach_document') . ':') !!}
			{!! Form::file('sell_document', ['id' => 'upload_document', 'accept' => implode(',', array_keys(config('constants.document_upload_mimes_types')))]); !!}
			<p class="help-block">
				@lang('purchase.max_file_size', ['size' => (config('constants.document_size_limit') / 1000000)])
				@includeIf('components.document_help_text')
			</p>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group">
			<label for="standard">Gold standard*</label>
			<input name="standard" type="text" class="form-control" id="standard" value="99.99">
			<!-- <select name="standard" class="form-control" id="standard">
				<option value="99.99">24K Gold (99,99% pure)(default)</option>
				<option value="91.67">22K Gold (91,67% pure)</option>
				<option value="75">18K Gold (75% pure)</option>
				<option value="58.5">14K Gold (58,3% pure)</option>
				<option value="41.7">10K Gold (41,7% pure)</option>
			</select> -->
		</div>
	</div>
	<div class="clearfix"></div>

	@if(!empty($pos_settings['enable_sales_order']) && $sale_type != 'sales_order')
	<div class="col-sm-3">
		<div class="form-group">
			{!! Form::label('sales_order_ids', __('lang_v1.sales_order').':') !!}
			{!! Form::select('sales_order_ids[]', [], null, ['class' => 'form-control select2', 'multiple', 'id' => 'sales_order_ids']); !!}
		</div>
	</div>
	<div class="clearfix"></div>
	@endif
	<!-- Call restaurant module if defined -->
	@if(in_array('tables' ,$enabled_modules) || in_array('service_staff' ,$enabled_modules))
	<span id="restaurant_module_span">
	</span>
	@endif
	@endcomponent







	<!-- Add sell -->
	@component('components.filters2', ['class' => 'box-primary', 'title' => __('buysell.add_sell')])
	<div class="col-sm-10 col-sm-offset-1">
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default bg-white btn-flat" data-toggle="modal" data-target="#configure_search_modal" title="{{__('lang_v1.configure_product_search')}}"><i class="fas fa-search-plus"></i></button>
				</div>
				{!! Form::text('search_product2', null, ['class' => 'form-control mousetrap', 'id' => 'search_product2',
				'placeholder' => __('lang_v1.search_product_placeholder'),
				'disabled' => is_null($default_location)? true : false,
				'autofocus' => is_null($default_location)? false : true,
				]); !!}
				<span class="input-group-btn">
					<button type="button" class="btn btn-default bg-white btn-flat pos_add_quick_product" data-href="{{action('ProductController@quickAdd')}}" data-container=".quick_add_product_modal"><i class="fa fa-plus-circle text-primary fa-lg"></i></button>
				</span>
			</div>
		</div>
	</div>

	<div class="row col-sm-12 pos_product_div" style="min-height: 0">

		<input type="hidden" name="sell_price_tax" id="sell_price_tax" value="{{$business_details->sell_price_tax}}">

		<!-- Keeps count of product rows -->
		<input type="hidden" id="product_row_count" value="0">
		@php
		$hide_tax = '';
		if( session()->get('business.enable_inline_tax') == 0){
		$hide_tax = 'hide';
		}
		@endphp
		<div class="table-responsive">
			<table class="table table-condensed table-bordered table-striped table-responsive" id="pos_table">
				<thead>
					<tr>
						<th class="text-center">
							@lang('sale.product')
						</th>
						<th class="text-center">
							@lang('sale.qty')
						</th>
						@if(!empty($pos_settings['inline_service_staff']))
						<th class="text-center">
							@lang('restaurant.service_staff')
						</th>
						@endif
						<th class="text-center">
							@lang('sale.processing_price')
						</th>
						<th class="text-center ">
							@lang('receipt.discount')
						</th>

						<th class="text-center {{$hide_tax}}">
							@lang('sale.price_inc_tax')
						</th>
						@if(!empty($common_settings['enable_product_warranty']))
						<th>@lang('lang_v1.warranty')</th>
						@endif
						<th class="text-center">
							@lang('sale.original_weight')
						</th>
						<th class="text-center">
							@lang('sale.seed_weight')
						</th>
						<th class="text-center">
							@lang('sale.golden_weight')
						</th>
						<th class="text-center">
							@lang('sale.golden_age')
						</th>
						<th class="text-center">
							@lang('sale.after_the_change')
						</th>
						<th class="text-center">
							@lang('sale.total_payable')
						</th>
						<th class="text-center"><i class="fas fa-times" aria-hidden="true"></i></th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
		<div class="table-responsive">
			<table class="table table-condensed table-bordered table-striped">
				<tr>
					<td>
						<div class="pull-right">
							<b>@lang( 'purchase.total_amount_of_gold' ):</b>
							<span id="total_subtotal_sell" class="display_currency"></span>
							<!-- This is total before purchase tax-->
							<input type="hidden" id="total_subtotal_input_sell" value=0 name="total_before_tax">
							&nbsp;&nbsp;&nbsp;&nbsp;
							<b>@lang('sale.item'):</b>
							<span class="total_quantity">0</span>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<b>@lang('sale.total_processing'): </b>
							<span class="price_total">0</span>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	@endcomponent

	<!-- Add buy -->
	@component('components.filters3', ['class' => 'box-primary', 'title' => __('buysell.add_buy')])
	<div class="row">
		<div class="col-sm-2">
			<div class="form-group">
				<input type="hidden" value="1" class="purchase_quantity">
				<button type="button" class="btn add_product"><i class="fa fa-plus"></i> @lang( 'product.add_new_product' ) </button>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="table-responsive">
				<table class="table table-condensed table-bordered table-th-green text-center table-striped" id="purchase_entry_table">
					<thead>
						<tr>
							<th>#</th>
							<th>@lang( 'product.commodities' )</th>
							<th class="text-center">
								@lang('sale.original_weight')
							</th>
							<th class="text-center">
								@lang('sale.seed_weight')
							</th>
							<th class="text-center">
								@lang('sale.golden_weight')
							</th>
							<th class="text-center">
								@lang('sale.golden_age')
							</th>
							<th class="text-center">
								@lang('sale.after_the_change')
							</th>
							<th><i class=" fa fa-trash" aria-hidden="true"></i></th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
			<hr />
			<div class="pull-right col-md-5">
				<table class="pull-right col-md-12">
					<tr>
						<th class="col-md-7 text-right">@lang( 'lang_v1.total_items' ):</th>
						<td class="col-md-5 text-left">
							<span id="total_quantity_buy" class="display_currency"></span>
						</td>
					</tr>
					<tr class="hide">
						<th class="col-md-7 text-right">@lang( 'purchase.total_before_tax' ):</th>
						<td class="col-md-5 text-left">
							<span id="total_st_before_tax" class="display_currency"></span>
							<input type="hidden" id="st_before_tax_input" value=0>
						</td>
					</tr>
					<tr>
						<th class="col-md-7 text-right">@lang( 'purchase.total_amount_of_gold' ):</th>
						<td class="col-md-5 text-left">
							<span id="total_subtotal_buy" class="display_currency"></span>
							<!-- This is total before purchase tax-->
							<input type="hidden" id="total_subtotal_input_buy" value=0 name="total_before_tax">
						</td>
					</tr>
				</table>
			</div>

			<input type="hidden" id="row_count" value="0">
		</div>
	</div>
	@endcomponent

	<!-- Add discount -->
	@component('components.filters4', ['class' => 'box-solid'])
	<div class="col-md-4  @if($sale_type == 'sales_order') hide @endif">
		<div class="form-group">
			{!! Form::label('discount_type', __('sale.discount_type') . ':*' ) !!}
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-info"></i>
				</span>
				{!! Form::select('discount_type', ['fixed' => __('lang_v1.fixed'), 'percentage' =>
				__('lang_v1.percentage')], 'percentage' , ['class' => 'form-control','placeholder' =>
				__('messages.please_select'), 'required', 'data-default' => 'percentage']); !!}
			</div>
		</div>
	</div>
	@php
	$max_discount = !is_null(auth()->user()->max_sales_discount_percent) ? auth()->user()->max_sales_discount_percent :
	'';

	//if sale discount is more than user max discount change it to max discount
	$sales_discount = $business_details->default_sales_discount;
	if($max_discount != '' && $sales_discount > $max_discount) $sales_discount = $max_discount;

	$default_sales_tax = $business_details->default_sales_tax;

	if($sale_type == 'sales_order') {
	$sales_discount = 0;
	$default_sales_tax = null;
	}
	@endphp
	<div class="col-md-4 @if($sale_type == 'sales_order') hide @endif">
		<div class="form-group">
			{!! Form::label('discount_amount', __('sale.discount_amount') . ':*' ) !!}
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-info"></i>
				</span>
				{!! Form::text('discount_amount', @num_format($sales_discount), ['class' => 'form-control input_number',
				'data-default' => $sales_discount, 'data-max-discount' => $max_discount, 'data-max-discount-error_msg'
				=> __('lang_v1.max_discount_error_msg', ['discount' => $max_discount != '' ? @num_format($max_discount)
				: '']) ]); !!}
			</div>
		</div>
	</div>
	<div class="col-md-4 @if($sale_type == 'sales_order') hide @endif"><br>
		<b>@lang( 'sale.discount_amount' ):</b>(-)
		<span class="display_currency" id="total_discount">0</span>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-12 well well-sm bg-light-gray @if(session('business.enable_rp') != 1 || $sale_type == 'sales_order') hide @endif">
		<input type="hidden" name="rp_redeemed" id="rp_redeemed" value="0">
		<input type="hidden" name="rp_redeemed_amount" id="rp_redeemed_amount" value="0">
		<div class="col-md-12">
			<h4>{{session('business.rp_name')}}</h4>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				{!! Form::label('rp_redeemed_modal', __('lang_v1.redeemed') . ':' ) !!}
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-gift"></i>
					</span>
					{!! Form::number('rp_redeemed_modal', 0, ['class' => 'form-control direct_sell_rp_input',
					'data-amount_per_unit_point' => session('business.redeem_amount_per_unit_rp'), 'min' => 0,
					'data-max_points' => 0, 'data-min_order_total' => session('business.min_order_total_for_redeem') ]);
					!!}
					<input type="hidden" id="rp_name" value="{{session('business.rp_name')}}">
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<p><strong>@lang('lang_v1.available'):</strong> <span id="available_rp">0</span></p>
		</div>
		<div class="col-md-4">
			<p><strong>@lang('lang_v1.redeemed_amount'):</strong> (-)<span id="rp_redeemed_amount_text">0</span></p>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-4  @if($sale_type == 'sales_order') hide @endif">
		<div class="form-group">
			{!! Form::label('tax_rate_id', __('sale.order_tax') . ':*' ) !!}
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-info"></i>
				</span>
				{!! Form::select('tax_rate_id', $taxes['tax_rates'], $default_sales_tax, ['placeholder' =>
				__('messages.please_select'), 'class' => 'form-control', 'data-default'=> $default_sales_tax],
				$taxes['attributes']); !!}

				<input type="hidden" name="tax_calculation_amount" id="tax_calculation_amount" value="@if(empty($edit)) {{@num_format($business_details->tax_calculation_amount)}} @else {{@num_format(optional($transaction->tax)->amount)}} @endif" data-default="{{$business_details->tax_calculation_amount}}">
			</div>
		</div>
	</div>
	<div class="col-md-4 col-md-offset-4  @if($sale_type == 'sales_order') hide @endif">
		<b>@lang( 'sale.order_tax' ):</b>(+)
		<span class="display_currency" id="order_tax">0</span>
	</div>

	<div class="col-md-12">
		<div class="form-group">
			{!! Form::label('sell_note',__('sale.sell_note')) !!}
			{!! Form::textarea('sale_note', null, ['class' => 'form-control', 'rows' => 3]); !!}
		</div>
	</div>
	<input type="hidden" name="is_direct_sale" value="1">
	@endcomponent


	<!-- Add shipping -->
	@component('components.filters5', ['class' => 'box-primary', 'title' => __('buysell.shipping')])
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('shipping_details', __('sale.shipping_details')) !!}
			{!! Form::textarea('shipping_details',null, ['class' => 'form-control','placeholder' =>
			__('sale.shipping_details') ,'rows' => '3', 'cols'=>'30']); !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('shipping_address', __('lang_v1.shipping_address')) !!}
			{!! Form::textarea('shipping_address',null, ['class' => 'form-control','placeholder' =>
			__('lang_v1.shipping_address') ,'rows' => '3', 'cols'=>'30']); !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!!Form::label('shipping_charges', __('sale.shipping_charges'))!!}
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-info"></i>
				</span>
				{!!Form::text('shipping_charges',@num_format(0.00),['class'=>'form-control input_number','placeholder'=>
				__('sale.shipping_charges')]);!!}
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-4">
		<div class="form-group">
			@if (is_array($shipping_statuses))
			{!! Form::label('shipping_status', __('lang_v1.shipping_status')) !!}
			{!! Form::select('shipping_status',$shipping_statuses, null, ['class' => 'form-control','placeholder' =>
			__('messages.please_select')]); !!}
			@endif
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('delivered_to', __('lang_v1.delivered_to') . ':' ) !!}
			{!! Form::text('delivered_to', null, ['class' => 'form-control','placeholder' =>
			__('lang_v1.delivered_to')]); !!}
		</div>
	</div>
	@php
	$shipping_custom_label_1 = !empty($custom_labels['shipping']['custom_field_1']) ?
	$custom_labels['shipping']['custom_field_1'] : '';

	$is_shipping_custom_field_1_required = !empty($custom_labels['shipping']['is_custom_field_1_required']) &&
	$custom_labels['shipping']['is_custom_field_1_required'] == 1 ? true : false;

	$shipping_custom_label_2 = !empty($custom_labels['shipping']['custom_field_2']) ?
	$custom_labels['shipping']['custom_field_2'] : '';

	$is_shipping_custom_field_2_required = !empty($custom_labels['shipping']['is_custom_field_2_required']) &&
	$custom_labels['shipping']['is_custom_field_2_required'] == 1 ? true : false;

	$shipping_custom_label_3 = !empty($custom_labels['shipping']['custom_field_3']) ?
	$custom_labels['shipping']['custom_field_3'] : '';

	$is_shipping_custom_field_3_required = !empty($custom_labels['shipping']['is_custom_field_3_required']) &&
	$custom_labels['shipping']['is_custom_field_3_required'] == 1 ? true : false;

	$shipping_custom_label_4 = !empty($custom_labels['shipping']['custom_field_4']) ?
	$custom_labels['shipping']['custom_field_4'] : '';

	$is_shipping_custom_field_4_required = !empty($custom_labels['shipping']['is_custom_field_4_required']) &&
	$custom_labels['shipping']['is_custom_field_4_required'] == 1 ? true : false;

	$shipping_custom_label_5 = !empty($custom_labels['shipping']['custom_field_5']) ?
	$custom_labels['shipping']['custom_field_5'] : '';

	$is_shipping_custom_field_5_required = !empty($custom_labels['shipping']['is_custom_field_5_required']) &&
	$custom_labels['shipping']['is_custom_field_5_required'] == 1 ? true : false;
	@endphp

	@if(!empty($shipping_custom_label_1))
	@php
	$label_1 = $shipping_custom_label_1 . ':';
	if($is_shipping_custom_field_1_required) {
	$label_1 .= '*';
	}
	@endphp

	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('shipping_custom_field_1', $label_1 ) !!}
			{!! Form::text('shipping_custom_field_1',
			!empty($walk_in_customer['shipping_custom_field_details']['shipping_custom_field_1']) ?
			$walk_in_customer['shipping_custom_field_details']['shipping_custom_field_1'] : null, ['class' =>
			'form-control','placeholder' => $shipping_custom_label_1, 'required' =>
			$is_shipping_custom_field_1_required]); !!}
		</div>
	</div>
	@endif
	@if(!empty($shipping_custom_label_2))
	@php
	$label_2 = $shipping_custom_label_2 . ':';
	if($is_shipping_custom_field_2_required) {
	$label_2 .= '*';
	}
	@endphp

	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('shipping_custom_field_2', $label_2 ) !!}
			{!! Form::text('shipping_custom_field_2',
			!empty($walk_in_customer['shipping_custom_field_details']['shipping_custom_field_2']) ?
			$walk_in_customer['shipping_custom_field_details']['shipping_custom_field_2'] : null, ['class' =>
			'form-control','placeholder' => $shipping_custom_label_2, 'required' =>
			$is_shipping_custom_field_2_required]); !!}
		</div>
	</div>
	@endif
	@if(!empty($shipping_custom_label_3))
	@php
	$label_3 = $shipping_custom_label_3 . ':';
	if($is_shipping_custom_field_3_required) {
	$label_3 .= '*';
	}
	@endphp

	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('shipping_custom_field_3', $label_3 ) !!}
			{!! Form::text('shipping_custom_field_3',
			!empty($walk_in_customer['shipping_custom_field_details']['shipping_custom_field_3']) ?
			$walk_in_customer['shipping_custom_field_details']['shipping_custom_field_3'] : null, ['class' =>
			'form-control','placeholder' => $shipping_custom_label_3, 'required' =>
			$is_shipping_custom_field_3_required]); !!}
		</div>
	</div>
	@endif
	@if(!empty($shipping_custom_label_4))
	@php
	$label_4 = $shipping_custom_label_4 . ':';
	if($is_shipping_custom_field_4_required) {
	$label_4 .= '*';
	}
	@endphp

	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('shipping_custom_field_4', $label_4 ) !!}
			{!! Form::text('shipping_custom_field_4',
			!empty($walk_in_customer['shipping_custom_field_details']['shipping_custom_field_4']) ?
			$walk_in_customer['shipping_custom_field_details']['shipping_custom_field_4'] : null, ['class' =>
			'form-control','placeholder' => $shipping_custom_label_4, 'required' =>
			$is_shipping_custom_field_4_required]); !!}
		</div>
	</div>
	@endif
	@if(!empty($shipping_custom_label_5))
	@php
	$label_5 = $shipping_custom_label_5 . ':';
	if($is_shipping_custom_field_5_required) {
	$label_5 .= '*';
	}
	@endphp

	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('shipping_custom_field_5', $label_5 ) !!}
			{!! Form::text('shipping_custom_field_5',
			!empty($walk_in_customer['shipping_custom_field_details']['shipping_custom_field_5']) ?
			$walk_in_customer['shipping_custom_field_details']['shipping_custom_field_5'] : null, ['class' =>
			'form-control','placeholder' => $shipping_custom_label_5, 'required' =>
			$is_shipping_custom_field_5_required]); !!}
		</div>
	</div>
	@endif
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('shipping_documents', __('lang_v1.shipping_documents') . ':') !!}
			{!! Form::file('shipping_documents[]', ['id' => 'shipping_documents', 'multiple', 'accept' => implode(',',
			array_keys(config('constants.document_upload_mimes_types')))]); !!}
			<p class="help-block">
				@lang('purchase.max_file_size', ['size' => (config('constants.document_size_limit') / 1000000)])
				@includeIf('components.document_help_text')
			</p>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-12 text-center hide">
		<button type="button" class="btn btn-primary btn-sm" id="toggle_additional_expense"> <i class="fas fa-plus"></i>
			@lang('lang_v1.add_additional_expenses') <i class="fas fa-chevron-down"></i></button>
	</div>
	<div class="col-md-8 col-md-offset-4" id="additional_expenses_div" style="display: none;">
		<table class="table table-condensed">
			<thead>
				<tr>
					<th>@lang('lang_v1.additional_expense_name')</th>
					<th>@lang('sale.amount')</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						{!! Form::text('additional_expense_key_1', null, ['class' => 'form-control', 'id' =>
						'additional_expense_key_1']); !!}
					</td>
					<td>
						{!! Form::text('additional_expense_value_1', 0, ['class' => 'form-control input_number', 'id' =>
						'additional_expense_value_1']); !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::text('additional_expense_key_2', null, ['class' => 'form-control', 'id' =>
						'additional_expense_key_2']); !!}
					</td>
					<td>
						{!! Form::text('additional_expense_value_2', 0, ['class' => 'form-control input_number', 'id' =>
						'additional_expense_value_2']); !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::text('additional_expense_key_3', null, ['class' => 'form-control', 'id' =>
						'additional_expense_key_3']); !!}
					</td>
					<td>
						{!! Form::text('additional_expense_value_3', 0, ['class' => 'form-control input_number', 'id' =>
						'additional_expense_value_3']); !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::text('additional_expense_key_4', null, ['class' => 'form-control', 'id' =>
						'additional_expense_key_4']); !!}
					</td>
					<td>
						{!! Form::text('additional_expense_value_4', 0, ['class' => 'form-control input_number', 'id' =>
						'additional_expense_value_4']); !!}
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	@endcomponent


	<!-- Add payment -->
	@component('components.widget', ['class' => 'box-solid', 'id' => 'payment_rows_div', 'title' => __('buysell.payment')])
	<div class="col-md-4 col-md-offset-8">
		@if(!empty($pos_settings['amount_rounding_method']) && $pos_settings['amount_rounding_method'] > 0)
		<small id="round_off"><br>(@lang('lang_v1.round_off'): <span id="round_off_text">0</span>)</small>
		<br />
		<input type="hidden" name="round_off_amount" id="round_off_amount" value=0>
		@endif
		<div><b>@lang('sale.golden_weight_after_balance'): </b>
			<input type="hidden" name="final_weight" id="golden_weight_after_balance_input" value="0">
			<span id="golden_weight_after_balance">0</span>
			<div class="pull-right"><strong>@lang('sale.gold_amount'):</strong>
				<input type="hidden" name="gold_amount" id="gold_amount_input" value="0">
				<span id="gold_amount">0.00</span>
			</div>
		</div>
		<div><b>Số tiền công:</b>
			<input type="hidden" name="final_total" id="final_total_input" value="0">
			<span id="total_payable">0</span>
			<div class="pull-right hide"><strong>@lang('sale.pay_out'):</strong> <span id="payment_due2">0.00</span>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-12">
			<strong>Nợ công cũ:</strong> <span id="advance_balance_text">0</span>
			{!! Form::hidden('advance_balance', null, ['id' => 'advance_balance']); !!}
		</div>
		<div class="col-md-12">
			<strong>Nợ vàng cũ(99.99%):</strong> <span id="advance_balance_gold_text">0</span>
			{!! Form::hidden('advance_balance_gold', 0.00, ['id' => 'advance_balance_gold']); !!}
			<strong>Quy đổi=></strong> <span id="advance_balance_exchange_text">0</span>
			{!! Form::hidden('advance_balance_exchange', 0.00, ['id' => 'advance_balance_exchange']); !!}
		</div>
	</div>
	@include('sale_pos.partials.payment_row_form', ['row_index' => 0, 'show_date' => true, 'show_denomination' => true])
	<hr>
	<div class="row">
		<div class="col-sm-12">
			<input type="hidden" id='perfect'>
			<input type="hidden" id='in_balance_due'>
			<input type="hidden" id='in_wages_due'>
			<div class="pull-right">
				<strong>Độ tinh khiết của vàng:</strong>&nbsp;
				<span class="final_standard">99.99%</span>
				<strong>Tổng tiền được thanh toán:</strong>&nbsp;
				<span class="total_money">0</span>
				<input type="hidden" name="total_money" class="total_money" value="0">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong>Nợ công:</strong>&nbsp;
				<span class="wages_due">0</span>
				<input type="hidden" name="wages_due" class="wages_due" value="0">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong>Nợ vàng:</strong>&nbsp;
				<span style="display: none;" class="balance_due">0.00</span>
				<input type="hidden" name="balance_due" class="balance_due" value="0">
				<span class="gold_due">0.00</span>
				<input type="hidden" name="gold_due" class="gold_due" value="0">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong>*Tất cả vàng nợ sẽ được chuyển về độ tinh khiết 99.99% =</strong>&nbsp;
				<span class="balance_gold">0.00</span>
				<input type="hidden" name="balance_due" class="balance_gold" value="0">
			</div>
		</div>
	</div>
	@endcomponent


	<!-- Save -->
	<div class="row">
		{!! Form::hidden('is_save_and_print', 0, ['id' => 'is_save_and_print']); !!}
		<div class="col-sm-12 text-center">
			<button type="button" id="submit_buy_sell" class="btn btn-primary btn-big">@lang('messages.save')</button>
			<button type="button" id="save-and-print_buy_sell" class="btn btn-success btn-big">@lang('lang_v1.save_and_print')</button>
		</div>
	</div>

	{!! Form::close() !!}
</section>
<!-- quick product modal -->
<div class="modal fade quick_add_product_modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle"></div>
<div class="modal fade contact_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
	@include('contact.create', ['quick_add' => true])
</div>

@include('sale_pos.partials.configure_search_modal')
<!-- /.content -->
@endsection

@section('javascript')
<script src="{{ asset('js/purchase.js?v=' . $asset_v) }}"></script>

<script src="{{ asset('js/product.js?v=' . $asset_v) }}"></script>
<script src="{{ asset('js/pos.js?v=' . $asset_v) }}"></script>
<script src="{{ asset('js/buysell.js?v=' . $asset_v) }}"></script>
<script src="{{ asset('js/opening_stock.js?v=' . $asset_v) }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Call restaurant module if defined -->
@if(in_array('tables' ,$enabled_modules) || in_array('modifiers' ,$enabled_modules) || in_array('service_staff'
,$enabled_modules))
<script src="{{ asset('js/restaurant.js?v=' . $asset_v) }}"></script>
@endif
<script type="text/javascript">
	window.addEventListener('load', function(event) {
		if (performance.navigation.type === 2) {
			location.reload(true);
		}
	});
	// Hide/show additional information
	function hideshow(name) {
		$(`#more_${name}`).click(function() {
			$(`#more_div_${name}`).toggleClass("hide");
			if ($(`#more_div_${name}`).hasClass("hide")) {
				$(this).html("@lang('lang_v1.more_info') <i class='fa fa-chevron-down'></i>");
			} else {
				$(this).html("@lang('lang_v1.hide_info') <i class='fa fa-chevron-up'></i>");
			}
		});
	}
	hideshow('info');
	// End hide/show additional information


	$(document).ready(function() {
		__page_leave_confirmation('#add_purchase_form');
		$('#status').change(function() {
			if ($(this).val() == 'final') {
				$('#payment_rows_div').removeClass('hide');
			} else {
				$('#payment_rows_div').addClass('hide');
			}
		});
		$('.paid_on').datetimepicker({
			format: moment_date_format + ' ' + moment_time_format,
			ignoreReadonly: true,
		});

		$('#shipping_documents').fileinput({
			showUpload: false,
			showPreview: false,
			browseLabel: LANG.file_browse_label,
			removeLabel: LANG.remove,
		});

		$(document).on('change', '#prefer_payment_method', function(e) {
			var default_accounts = $('select#select_location_id').length ?
				$('select#select_location_id')
				.find(':selected')
				.data('default_payment_accounts') : $('#location_id2').data('default_payment_accounts');

			var payment_type = $(this).val();
			if (payment_type) {
				var default_account = default_accounts && default_accounts[payment_type]['account'] ?
					default_accounts[payment_type]['account'] : '';
				var account_dropdown = $('select#prefer_payment_account');
				if (account_dropdown.length && default_accounts) {
					account_dropdown.val(default_account);
					account_dropdown.change();
				}
			}
		});

		function setPreferredPaymentMethodDropdown() {
			var payment_settings = $('#location_id').data('default_payment_accounts');
			payment_settings = payment_settings ? payment_settings : [];
			enabled_payment_types = [];
			for (var key in payment_settings) {
				if (payment_settings[key] && payment_settings[key]['is_enabled']) {
					enabled_payment_types.push(key);
				}
			}
			if (enabled_payment_types.length) {
				$("#prefer_payment_method > option").each(function() {
					if (enabled_payment_types.indexOf($(this).val()) != -1) {
						$(this).removeClass('hide');
					} else {
						$(this).addClass('hide');
					}
				});
			}
		}

		setPreferredPaymentMethodDropdown();

		$('#is_export').on('change', function() {
			if ($(this).is(':checked')) {
				$('div.export_div').show();
			} else {
				$('div.export_div').hide();
			}
		});
		$(document).on('change', '#category_id', function() {

			if ($('#category_id').val() != 1) {
				console.log($('#category_id').val());
				$('#category_golden').hide();
			} else {
				$('#category_golden').show();
			}
		})
		var options = [{
				label: '24K Gold (99,99% pure)',
				value: '99.99'
			},
			{
				label: '22K Gold (91,67% pure)',
				value: '91.67'
			},
			{
				label: '18K Gold (75% pure)',
				value: '75'
			},
			{
				label: '14K Gold (58,3% pure)',
				value: '58.5'
			},
			{
				label: '10K Gold (41,7% pure)',
				value: '41.7'
			}
		];

		$('#standard').autocomplete({
			source: options,
			select: function(event, ui) {
				$('#standard').val(ui.item.value);
				$('#standard').attr('data-value', ui.item.label);
				$('#standard').change();
			},
			minLength: 0
		}).focus(function() {
			$(this).autocomplete('search', '');
		});

		$('#standard').on('change', function() {
			var selectedValue = $(this).attr('data-value');
		});
	});
</script>
@include('purchase.partials.keyboard_shortcuts')
@endsection