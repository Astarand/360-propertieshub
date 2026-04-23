@extends('Layouts.App')

@section('title', 'Contact Us - Property Consultancy Services in Kolkata - 360 Properties Hub')
@section('meta_description', 'Contact 360 Properties Hub for expert property consultancy services in Kolkata. Get
professional legal compliance, RERA support, and real estate advisory across West Bengal.')
@section('meta_keywords', 'contact property consultants Kolkata, real estate advisory contact West Bengal, property
legal services contact, RERA compliance contact Kolkata, property consultation booking Bengal')
@section('canonical_url', url()->current())
@section('og_title', 'Contact Us - Property Consultancy Services in Kolkata - 360 Properties Hub')
@section('og_description', 'Get in touch with Kolkata\'s leading property consultancy for expert legal compliance,
investment advisory, and comprehensive real estate services.')
@section('og_image', asset('assets/images/contact-us.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="tj-page-header-content text-center">
          <h1 class="tj-page-title text-anim">Contact</h1>
          <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
            <span>
              <a href="{{ route('home') }}">
                <span>Home</span>
              </a>
            </span>
            <span>/</span>
            <span>
              <span>Contact</span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Contact Top Section -->
<section class="tj-contact-area section-space bg-white">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="sec-heading text-center">
          <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">CONTACT US</span>
          <h2 class="sec-title text-anim">Our contact information</h2>
        </div>
      </div>
    </div>
    <div class="row rg-30">
      <div class="col-xl-4 col-lg-6 col-sm-12">
        <div class="contact-item style-2 wow fadeInUp" data-wow-delay="0.1s">
          <div class="contact-icon">
            <i class="tji-email"></i>
          </div>
          <h3 class="contact-title">Email us</h3>
          <ul class="contact-list">
            <li><a href="mailto:contact@360propertieshub.com">contact@360propertieshub.com</a></li>
            <li><a href="mailto:360propertieshub@gmail.com">360propertieshub@gmail.com</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-sm-12">
        <div class="contact-item style-2 wow fadeInUp" data-wow-delay="0.3s">
          <div class="contact-icon">
            <i class="tji-phone"></i>
          </div>
          <h3 class="contact-title">Call us</h3>
          <ul class="contact-list">
            <li><a href="tel:+918334027857">+91-8334027857</a></li>
            <li><a href="tel:+918444089530">+91-8444089530</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-sm-12">
        <div class="contact-item style-2 wow fadeInUp" data-wow-delay="0.5s">
          <div class="contact-icon">
            <i class="tji-location"></i>
          </div>
          <h3 class="contact-title">Our Location</h3>
          <p>PS Srijan Corporate Park,<br> Sector-V, Kolkata-700091.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end: Contact Top Section -->

<!-- start: Contact Bottom Section -->
<section class="tj-contact-area section-bottom-space bg-white">
  <div class="container">
    <div class="row rg-50">
      <!-- contact form -->
      <div class="col-lg-6">
        <div class="contact-form-one style-2 wow fadeInUp" data-wow-delay="0.1s">
          <h3 class="title text-anim">Feel free to <span>get in touch</span> or visit our location.</h3>

          <!-- AJAX Message Container -->
          <div id="messageContainer" style="display: none; margin-bottom: 20px;"></div>

          @if(session('success'))
          <div class="alert alert-success mb-4"
            style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; border: 1px solid #c3e6cb;">
            {{ session('success') }}
          </div>
          @endif

          @if($errors->any())
          <div class="alert alert-danger mb-4"
            style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; border: 1px solid #f5c6cb;">
            <ul style="margin: 0; padding-left: 20px;">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-sm-12">
                <div class="form-input">
                  <input type="text" id="first" name="name" placeholder="Full name*" required=""
                    value="{{ old('name') }}">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-input">
                  <input type="email" id="emailOne" name="email" placeholder="Email address*" required=""
                    value="{{ old('email') }}">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-input">
                  <input type="tel" id="tel" name="tel" placeholder="Phone number*" required=""
                    value="{{ old('tel') }}">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-input">
                  <input type="text" id="subject" name="subject" placeholder="Subject*" required=""
                    value="{{ old('subject') }}">
                </div>
              </div>
              <div class="col-12">
                <div class="form-input input-textarea">
                  <textarea id="message" name="message" placeholder="Type message">{{ old('message') }}</textarea>
                </div>
              </div>
              <div class="submit-button">
                <button type="submit" id="submitBtn" class="tj-primary-btn">
                  <span class="btn_inner">
                    <span class="btn_icon">
                      <span>
                        <i class="tji-arrow-right"></i>
                        <i class="tji-arrow-right"></i>
                      </span>
                    </span>
                    <span class="btn_text">
                      <span id="btnText">Send message</span>
                    </span>
                  </span>
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
      <!-- contact map -->
      <div class="col-lg-6">
        <div class="google-map wow fadeInUp" data-wow-delay="0.3s">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.272887350465!2d88.43190707602038!3d22.568894833104736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275ac6affffff%3A0xc12382910f43cbe9!2s360%20Properties%20Hub!5e0!3m2!1sen!2sin!4v1753779177531!5m2!1sen!2sin"
            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end: Contact Bottom Section -->

<style>
  .message-alert {
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
    font-weight: 500;
    transition: all 0.3s ease;
    animation: slideIn 0.3s ease-out;
  }

  .message-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    border-left: 4px solid #28a745;
  }

  .message-error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-left: 4px solid #dc3545;
  }

  .fade-out {
    opacity: 0;
    transform: translateY(-10px);
  }

  .loading {
    opacity: 0.7;
    pointer-events: none;
    position: relative;
  }

  .loading .btn_text {
    opacity: 0.8;
  }

  .loading::after {
    content: '';
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    width: 16px;
    height: 16px;
    border: 2px solid #ffffff;
    border-top: 2px solid transparent;
    border-radius: 50%;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: translateY(-50%) rotate(0deg);
    }

    100% {
      transform: translateY(-50%) rotate(360deg);
    }
  }

  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Form validation styles */
  .form-input input:invalid {
    border-color: #dc3545;
  }

  .form-input input:valid {
    border-color: #28a745;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const messageContainer = document.getElementById('messageContainer');
    const submitBtn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    const originalBtnText = btnText.textContent;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic client-side validation
        const name = form.querySelector('[name="name"]').value.trim();
        const email = form.querySelector('[name="email"]').value.trim();
        const tel = form.querySelector('[name="tel"]').value.trim();
        const subject = form.querySelector('[name="subject"]').value.trim();
        
        if (!name || !email || !tel || !subject) {
            showMessage('Please fill in all required fields.', 'error');
            return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            showMessage('Please enter a valid email address.', 'error');
            return;
        }
        
        // Show loading state
        //submitBtn.classList.add('loading');
        submitBtn.disabled = true;
        btnText.textContent = 'Sending...';
        
        // Hide any existing messages
        hideMessage();
        
        // Submit form with reCAPTCHA (page_url will be added by the helper)
        window.RecaptchaHelper.submitFormWithRecaptcha(form, 'contact_form', '{{ route("contact.store") }}', {
            beforeSubmit: function(formData) {
                formData.append('page_url', window.location.href);
                return formData;
            }
        })
            .then(data => {
                if (data.success) {
                    showMessage(data.message, 'success');
                    form.reset(); // Clear form on success
                } else {
                    let errorMessage = data.message || 'Something went wrong. Please try again.';
                    if (data.errors) {
                        const errorList = Object.values(data.errors).flat();
                        errorMessage = errorList.join('<br>');
                    }
                    showMessage(errorMessage, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                let errorMessage = 'Something went wrong. Please try again.';
                
                if (error.message) {
                    errorMessage = error.message;
                } else if (error.errors) {
                    const errorList = Object.values(error.errors).flat();
                    errorMessage = errorList.join('<br>');
                }
                
                showMessage(errorMessage, 'error');
            })
            .finally(() => {
                // Reset button state
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
                btnText.textContent = originalBtnText;
            });
    });

    function showMessage(message, type) {
        messageContainer.innerHTML = `<div class="message-alert message-${type}">${message}</div>`;
        messageContainer.style.display = 'block';
        
        // Auto hide after 3 seconds
        setTimeout(() => {
            hideMessage();
        }, 3000);
    }

    function hideMessage() {
        const alert = messageContainer.querySelector('.message-alert');
        if (alert) {
            alert.classList.add('fade-out');
            setTimeout(() => {
                messageContainer.style.display = 'none';
                messageContainer.innerHTML = '';
            }, 300);
        }
    }
});
</script>

@endsection