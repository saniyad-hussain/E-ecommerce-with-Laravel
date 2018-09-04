@extends('frontEnd.master')

@section('title')
Payment
@endsection

@section('mainContent')
<hr/>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="well lead text-center text-success">Payment Info</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <h3 class="text-center">Payment Form </h3>
        <hr/>
        <div class="well box box-primary">
            {!! Form::open(['url'=>'/checkout/save-order', 'method'=>'POST','name'=>'shippingForm']) !!}
            <div class="form-group">
                <div>
                    <label><input type="radio" name="paymentType" value="cashOnDelivery">Cash On Delivery</label>
                </div>
            </div>
             <div class="form-group">
                <div>
                    <label><input type="radio" name="paymentType" value="bkash">Bkash</label>
                </div>
            </div>
             <div class="form-group">
                <div>
                    <label><input type="radio" name="paymentType" value="paypal">Paypal</label>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block">Submit Order</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection