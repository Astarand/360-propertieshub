<div class="col-lg-4">
    <aside class="tj-service-sidebar">
        <!-- Service List -->
        <div class="contact-form-one style-2 wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="title text-anim">Get in Touch</h3>
            <form id="serviceInquiryForm" action="{{ route('service.inquiry.store') }}" method="POST">
                @csrf
                <input type="hidden" name="page_url" value="{{ request()->path() }}">

                <!-- Message Container -->
                <div id="messageContainer" style="display: none;"></div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-input">
                            <input type="text" id="first" name="name" placeholder="Full name*" value="{{ old('name') }}"
                                required="">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-input">
                            <input type="email" id="emailOne" name="email" placeholder="Email address*"
                                value="{{ old('email') }}" required="">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-input">
                            <input type="tel" id="tel" name="tel" placeholder="Phone number*" value="{{ old('tel') }}"
                                required="">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-input">
                            <input type="text" id="subject" name="subject" placeholder="Subject*"
                                value="{{ old('subject') }}" required="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-input input-textarea">
                            <textarea id="message" name="message"
                                placeholder="Type message">{{ old('message') }}</textarea>
                        </div>
                    </div>
                    <div class="submit-button">
                        <button type="submit" class="tj-primary-btn" id="submitBtn">
                            <span class="btn_inner">
                                <span class="btn_icon">
                                    <span>
                                        <i class="tji-arrow-right"></i>
                                        <i class="tji-arrow-right"></i>
                                    </span>
                                </span>
                                <span class="btn_text">
                                    <span id="btnText">Submit Now</span>
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </aside>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('serviceInquiryForm');
    const submitBtn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    const messageContainer = document.getElementById('messageContainer');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        submitBtn.disabled = true;
        btnText.textContent = 'Sending...';
        
        // Hide any existing messages
        messageContainer.style.display = 'none';
        
        // Clear previous error styles
        const inputs = form.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.style.borderColor = '';
        });
        
        // Submit form with reCAPTCHA
        window.RecaptchaHelper.submitFormWithRecaptcha(form, 'contact_form', form.action)
        // window.RecaptchaHelper.submitFormWithRecaptcha(form, 'service_inquiry', form.action)
            .then(data => {
                if (data.success) {
                    // Show success message
                    showMessage('Thank you for your inquiry! We will get back to you soon.', 'success');
                    
                    // Reset form
                    form.reset();
                } else {
                    // Show error message
                    if (data.errors) {
                        // Handle validation errors
                        let errorMessage = '<ul class="mb-0">';
                        Object.keys(data.errors).forEach(field => {
                            data.errors[field].forEach(error => {
                                errorMessage += `<li>${error}</li>`;
                            });
                            
                            // Highlight error fields
                            const input = form.querySelector(`[name="${field}"]`);
                            if (input) {
                                input.style.borderColor = '#dc3545';
                            }
                        });
                        errorMessage += '</ul>';
                        showMessage(errorMessage, 'danger');
                    } else {
                        showMessage(data.message || 'Something went wrong. Please try again.', 'danger');
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showMessage('Something went wrong. Please try again.', 'danger');
            })
            .finally(() => {
                // Reset button state
                submitBtn.disabled = false;
                btnText.textContent = 'Submit Now';
            });
    });
    
    function showMessage(message, type) {
        messageContainer.innerHTML = `<div class="alert alert-${type} mb-3">${message}</div>`;
        messageContainer.style.display = 'block';
        
        // Hide message after 3 seconds
        setTimeout(() => {
            messageContainer.style.display = 'none';
        }, 3000);
    }
});
</script>