@extends('app')

@section('title', 'Contact Us')

@section('content')

<section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content text-center">
        <h1 class="display-4 fw-bold">Contact Me</h1>
        <p class="lead">Get in touch for any inquiries or requests!</p>
    </div>
</section>

<section class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold">Contact Information</h2>
            <p class="mb-4">I am a professional Web designer with more than 50 successful web templates delivered. You can reach out to me for designing personal, business, or other website templates. I guarantee your satisfaction.</p>

            <div class="d-flex align-items-center">
                <i class="bi bi-telephone-fill fs-3 me-2"></i>
                <p class="mb-0">+63 976 030 6444</p>
            </div>
            <div class="d-flex align-items-center mt-2">
                <i class="bi bi-envelope-fill fs-3 me-2"></i>
                <p class="mb-0">cirdemosquito04@gmail.com</p>
            </div>  
            <div class="d-flex align-items-center mt-2">
                <i class="bi bi-facebook fs-3 me-2"></i>
                <p class="mb-0">facebook.com/cirde.mosquito</p>
            </div>
        </div>

        <div class="col-md-6">
            <h2 class="fw-bold">Send a Message</h2>
            <form>
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

@endsection
