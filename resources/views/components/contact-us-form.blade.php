<section id="contact">
    <div class="contact-container">
        <div class="main-title">
            <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
        </div>
        <div class="contact-content-con">
            <div class="left-contact">
                <h4>Contact me here</h4>
                <p>
                    I am dynamic, creative, result driven and possess positive attitude to bring the changes in the
                    work.
                </p>
                <div class="contact-info">
                    <div class="contact-stat">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Location</span>
                        </div>
                        <p>
                            : Manamaiju, Kathmandu
                        </p>
                    </div>
                    <div class="contact-stat">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                            <span>Email</span>
                        </div>
                        <p>
                            <span>: abhishekshakya.np@gmail.com</span>
                        </p>
                    </div>
                    <div class="contact-stat">
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                            <span>Education</span>
                        </div>
                        <p>
                            <span>: Asian College, Kathmandu</span>
                        </p>
                    </div>
                    <div class="contact-stat">
                        <div class="icon">
                            <i class="fas fa-solid fa-phone"></i>
                            <span>Mobile Number</span>
                        </div>
                        <p>
                            <span>: 9803666090</span>
                        </p>
                    </div>
                    <div class="contact-stat">
                        <div class="icon">
                            <i class="fas fa-globe-africa"></i>
                            <span>Languages</span>
                        </div>
                        <p>
                            <span>: Nepali, English, Newari</span>
                        </p>
                    </div>
                </div>
                <div class="contact-icons">
                    <div class="contact-icon">
                        <a href="https://dribbble.com/1besake" target="_blank">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="https://www.behance.net/1besake" target="_blank">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="https://github.com/abhishekshakya-np" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/abhishekshakya-np/" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-contact">
                {{--                    <livewire:components.contact-form :page="'Contact Us'"/>--}}
                <form action="" class="contact-form">
                    <div class="input-control i-c-2">

                        <input wire:model="form.full_name" class="form-control" type="text" name="full_name"
                               placeholder="YOUR Name"
                               required>
                        @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror


                        <input wire:model="form.email" class="form-control" type="email" name="email"
                               placeholder="Your Email"
                               required>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>

                    <div class="input-control">
                        <input wire:model="form.phone" class="form-control" type="text" name="phone"
                               placeholder="Phone Number">
                        @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="input-control">

                            <textarea wire:model="form.message" class="form-control" rows="8" name="message"
                                      placeholder="Message" required></textarea>
                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="submit-btn">
                        <a href="#" class="main-btn">
                            <span class="btn-text">Submit</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>
