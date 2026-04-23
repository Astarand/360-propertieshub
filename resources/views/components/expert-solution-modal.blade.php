<!-- Expert Solution Modal - Slide from Right -->
<div class="modal" id="expertModalOverlay" tabindex="-1" aria-labelledby="expertModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); display: none;">
    <div class="modal-dialog modal-lg" id="modalDialog" style="position: fixed; right: -100%; top: 0; height: 100vh; margin: 0; transition: right 0.4s ease-in-out; max-width: 600px; width: 800px;">
        <div class="modal-content" style="background: rgba(166, 128, 46, 0.68); height: 100vh; border-radius: 0; border: none; overflow-y: auto; backdrop-filter: blur(10px);">
            <div class="modal-header border-0 position-relative">
                <!-- Close Button - Top Right with Black Circle -->
                <button type="button" class="position-absolute" id="closeExpertModal" aria-label="Close" style="top: 20px; right: 20px; z-index: 10; width: 40px; height: 40px; background: rgba(0, 0, 0, 0.8); border: none; border-radius: 50%; color: white; font-size: 18px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
                    <i class="fa-solid fa-times"></i>
                </button>

                <div class="w-100 text-center pt-5">
                    <!-- Logo Section -->
                    <div class="mb-3">
                        <h1 class="text-white fw-bold mb-1" style="font-size: 3rem;">360</h1>
                        <div class="text-white">
                            <small class="d-block fw-semibold" style="letter-spacing: 2px;">Properties Hub</small>
                        </div>
                    </div>

                    <!-- Header Text -->
                    <h4 class="text-white fw-light mb-3" style="font-size: 2.5rem;">How can we help you?</h4>
                    <p class="text-white mb-0" style="opacity: 0.9;">
                        We are experts in comprehensive end-to-end solutions for your property needs,
                        like legal compliance, investment advisory, and any kind of property consultation.
                    </p>
                </div>
            </div>

            <div class="modal-body">
                <!-- AJAX Message Container -->
                <div id="expertMessageContainer" style="display: none;" class="mb-3"></div>

                <!-- Form -->
                <form id="expertSolutionForm">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg" id="expertName" name="name" placeholder="Name *" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control form-control-lg" id="expertEmail" name="email" placeholder="E-mail *" required>
                        </div>
                    </div>

                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <input type="tel" class="form-control form-control-lg" id="expertPhone" name="phone" placeholder="Phone *" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg" id="expertSubject" name="subject" placeholder="Subject *" required>
                        </div>
                    </div>

                    <div class="mt-3">
                        <textarea class="form-control form-control-lg" id="expertQuery" name="query" rows="5" placeholder="Query *" required></textarea>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="tj-primary-btn w-100" id="expertSubmitBtn">
                            <div class="btn_inner" id="expertBtnText">
                                <div class="btn_icon">
                                    <span>
                                        <i class="tji-arrow-right"></i>
                                        <i class="tji-arrow-right"></i>
                                    </span>
                                </div>
                                <div class="btn_text">
                                    <span>SUBMIT NOW</span>
                                </div>
                            </div>
                        </button>
                    </div>

                    <p class="text-center text-white mt-3 mb-0" style="font-size: 0.75rem; opacity: 0.8;">
                        This site is protected by reCAPTCHA and the Google
                        <a href="https://policies.google.com/privacy" target="_blank" class="text-white">Privacy Policy</a> and
                        <a href="https://policies.google.com/terms" target="_blank" class="text-white">Terms of Service</a> apply.
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modalOverlay = document.getElementById('expertModalOverlay');
        const modalDialog = document.getElementById('modalDialog');
        const openModalBtn = document.getElementById('openExpertModal');
        const openModalStickyBtn = document.getElementById('openExpertModalSticky');
        const closeModalBtn = document.getElementById('closeExpertModal');
        const form = document.getElementById('expertSolutionForm');
        const messageContainer = document.getElementById('expertMessageContainer');
        const submitBtn = document.getElementById('expertSubmitBtn');
        const btnText = document.getElementById('expertBtnText');
        const originalBtnText = btnText.textContent;

        // Open modal event listeners
        if (openModalBtn) {
            openModalBtn.addEventListener('click', function(e) {
                e.preventDefault();
                openModal();
            });
        }

        if (openModalStickyBtn) {
            openModalStickyBtn.addEventListener('click', function(e) {
                e.preventDefault();
                openModal();
            });
        }

        // Close modal event listener
        if (closeModalBtn) {
            closeModalBtn.addEventListener('click', function(e) {
                e.preventDefault();
                closeModal();
            });
        }

        // Close modal when clicking on background
        modalOverlay.addEventListener('click', function(e) {
            if (e.target === modalOverlay) {
                closeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modalOverlay.style.display === 'block') {
                closeModal();
            }
        });

        function openModal() {
            // Show modal overlay
            modalOverlay.style.display = 'block';
            document.body.style.overflow = 'hidden';

            // Slide in from right
            setTimeout(() => {
                modalDialog.style.right = '0';
            }, 10);

            // Focus on first input after animation
            setTimeout(() => {
                const firstInput = form.querySelector('input[name="name"]');
                if (firstInput) {
                    firstInput.focus();
                }
            }, 450);
        }

        function closeModal() {
            // Slide out to right (move to bottom as requested)
            modalDialog.style.right = '-100%';
            modalDialog.style.top = '100%';

            // Hide modal overlay after animation
            setTimeout(() => {
                modalOverlay.style.display = 'none';
                document.body.style.overflow = '';
                // Reset position for next open
                modalDialog.style.top = '0';
            }, 400);

            // Clear form and messages
            form.reset();
            hideMessage();
        }

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Basic client-side validation
            const name = form.querySelector('[name="name"]').value.trim();
            const phone = form.querySelector('[name="phone"]').value.trim();
            const email = form.querySelector('[name="email"]').value.trim();
            const subject = form.querySelector('[name="subject"]').value.trim();
            const query = form.querySelector('[name="query"]').value.trim();

            if (!name || !phone || !email || !subject || !query) {
                showMessage('Please fill in all required fields.', 'error');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showMessage('Please enter a valid email address.', 'error');
                return;
            }

            // Phone validation (basic)
            const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
            if (!phoneRegex.test(phone)) {
                showMessage('Please enter a valid phone number.', 'error');
                return;
            }

            // Show loading state
            submitBtn.disabled = true;
            btnText.textContent = 'SUBMITTING...';

            // Hide any existing messages
            hideMessage();

            // Submit form with reCAPTCHA
            window.RecaptchaHelper.submitFormWithRecaptcha(form, 'expert_query', '{{ route("expert.solution.store") }}')
                .then(data => {
                    if (data.success) {
                        showMessage(data.message, 'success');
                        form.reset();

                        // Close modal after 3 seconds
                        setTimeout(() => {
                            closeModal();
                        }, 3000);
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
                    submitBtn.disabled = false;
                    btnText.textContent = originalBtnText;
                });
        });

        function showMessage(message, type) {
            const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
            messageContainer.innerHTML = `<div class="alert ${alertClass} alert-dismissible fade show" role="alert">
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>`;
            messageContainer.style.display = 'block';
        }

        function hideMessage() {
            messageContainer.style.display = 'none';
            messageContainer.innerHTML = '';
        }
    });
</script>

<style>
    /* Enhanced Close Button Styles */
    #closeExpertModal:hover {
        background: rgba(0, 0, 0, 0.9) !important;
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4) !important;
    }

    #closeExpertModal:active {
        transform: scale(0.95);
    }

    #closeExpertModal i {
        transition: transform 0.3s ease;
    }

    #closeExpertModal:hover i {
        transform: rotate(90deg);
    }
</style>