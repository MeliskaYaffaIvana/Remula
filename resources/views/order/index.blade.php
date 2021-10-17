@extends('layouts.customer')
@section('content')

<hr width=50%> <!--membuat garis-->
<h1>Form Order</h1><hr width=50%>
<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="transaction.blade.php">
        <div class="mb-3">
            <label class="form-label" for="idUser">ID User</label>
            <input class="form-control" id="idUser" type="text" placeholder="ID User" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="idUser:required">ID User is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="idProvider">ID Provider</label>
            <input class="form-control" id="idProvider" type="text" placeholder="ID Provider" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="idProvider:required">ID Provider is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="service">Service</label>
            <input class="form-control" id="service" type="text" placeholder="Service" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="service:required">Service is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="cost">Cost</label>
            <input class="form-control" id="cost" type="text" placeholder="Cost" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="cost:required">Cost is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="serviceDate">Service Date</label>
            <input class="form-control" id="serviceDate" type="text" placeholder="Service Date" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="serviceDate:required">Service Date is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>